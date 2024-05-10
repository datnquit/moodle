<?php
require_once('../../config.php');
require_once($CFG->dirroot.'/user/lib.php');
require_once($CFG->libdir.'/gdlib.php');
global $DB;

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    $body = file_get_contents('php://input');
    $body = json_decode($body, true);
    if ($body['mighty_token'] != $CFG->mighty_token) {
        die;
    }
    $result = core_user::get_user_by_username($body['student_id']);

    if ($result && !$result->picture) {
        if ($body['avatar']) {
            global $USER; $USER = $result;
            $arrA = explode('/', $body['avatar']);
            $context = context_user::instance($result->id, MUST_EXIST);
            $fileinfo = [
                'contextid' => $context->id,   // ID of the context.
                'component' => 'user', // Your component name.
                'filearea'  => 'newicon',       // Usually = table name.
                'itemid'    => 0,              // Usually = ID of row in table.
                'filepath'  => '/',            // Any path beginning and ending in /.
                'filename'  => time().array_pop($arrA),   // Any filename.
            ];
            $fs = get_file_storage();
            $file = $fs->create_file_from_url($fileinfo, $body['avatar']);
            $result->imagefile = $file->get_id();
            if (($iconfiles = $fs->get_area_files($context->id, 'user', 'newicon')) && count($iconfiles) == 2) {
                // Get file which was uploaded in draft area.
                foreach ($iconfiles as $file) {
                    if (!$file->is_directory()) {
                        break;
                    }
                }
                // Copy file to temporary location and the send it for processing icon.
                if ($iconfile = $file->copy_content_to_temp()) {
                    // There is a new image that has been uploaded.
                    // Process the new image and set the user to make use of it.
                    // NOTE: Uploaded images always take over Gravatar.
                    $newpicture = (int)process_new_icon($context, 'user', 'icon', 0, $iconfile);
                    // Delete temporary file.
                    @unlink($iconfile);
                    // Remove uploaded file.
                    $fs->delete_area_files($context->id, 'user', 'newicon');
                } else {
                    // Something went wrong while creating temp file.
                    // Remove uploaded file.
                    $fs->delete_area_files($context->id, 'user', 'newicon');
                    return false;
                }
            }

            $DB->set_field('user', 'picture', $newpicture, ['id' => $result->id]);
        }
    }
}
return;
