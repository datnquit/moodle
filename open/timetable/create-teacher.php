<?php
require_once('../../config.php');
require_once($CFG->dirroot.'/user/lib.php');
global $DB;
header('Content-Type: application/json; charset=utf-8');
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    $body = file_get_contents('php://input');
    $body = json_decode($body, true);
    if ($body['mighty_token'] != $CFG->mighty_token) {
        die;
    }

    $result = core_user::get_user_by_username($body['code']);

    if ($result) {
        if ($result->idnumber != $body['_id']) {
            user_update_user(
                ['id' => $result->id, 'idnumber' => $body['_id']],
                false,
                false,
            );
        }
        echo json_encode([ 'data' => $result->id]);
        return;
    } else {
        $arrName = explode(' ', $body['name']);
        $user = [
            'username' => $body['code'],
            'email' => $body['email'],
            'password' => $body['password'],
            'phone1' => $body['phone'],
            'auth' => 'manual',
            'maildisplay' => '1',
            'country' => 'VN',
            'timezone' => 'Asia/Ho_Chi_Minh',
            'idnumber' => $body['_id'],
            'mnethostid' => 1,
        ];
        if (count($arrName) == 1) {
            $user['firstname'] = $body['name'];
            $user['lastname'] = '';
        } else {
            $user['lastname'] = array_shift($arrName);
            $user['firstname'] = implode(' ', $arrName);
        }

        $result_insert = user_create_user($user);

        $contextsys = \context_system::instance();
        $teacher = $DB->get_record('role', ['shortname' => 'teacher']);
        if ($teacher) {
            role_assign($teacher->id, $result_insert, $contextsys);
        }
//        $result = core_user::get_user($result_insert);
        echo json_encode([ 'data' => $result_insert]);
        return;
    }
}

return;