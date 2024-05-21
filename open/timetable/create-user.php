<?php
require_once('../../config.php');
require_once($CFG->dirroot.'/user/lib.php');
require_once($CFG->dirroot.'/course/lib.php');
header('Content-Type: application/json; charset=utf-8');

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    $body = file_get_contents('php://input');
    $body = json_decode($body, true);
    if ($body['mighty_token'] != $CFG->mighty_token) {
        die;
    }

    $result = core_user::get_user_by_username($body['student_id']);

    if ($result) {
        if ($result->idnumber != $body['_id']) {
            user_update_user(
                ['id' => $result->id, 'idnumber' => $body['_id']],
                false,
                false,
            );
        }
        foreach ($body['shortnames'] as $shortname) {
            $course = $DB->get_record('course', ['shortname' => $body['shortname']]);
            if ($course) {
                $context = context_course::instance($course->id);
                $users = get_enrolled_users($context);
                $check = true;
                foreach ($users as $user) {
                    if ($user->id == $result->id) {
                        $check = false;
                        break;
                    }
                }
                if ($check) {
                    $instance = $DB->get_record('enrol', ['courseid' => $course->id, 'enrol' => 'manual']);
                    $enrolplugin = enrol_get_plugin($instance->enrol);
                    $enrolplugin->enrol_user($instance, $result->id, 5);
                }
            }
        }
        echo json_encode($result->id);
        return;
    } else {
        $arrName = explode(' ', $body['name']);
        $user = [
            'username' => $body['student_id'],
            'email' => $body['email'],
            'password' => $body['password'],
            'phone1' => $body['phone'],
            'auth' => 'manual',
            'maildisplay' => '1',
            'country' => 'VN',
            'timezone' => 'Asia/Ho_Chi_Minh',
            'idnumber' => $body['_id'],
            'mnethostid' => 1,
            'confirmed' => 1,
        ];
        if (count($arrName) == 1) {
            $user['firstname'] = $body['name'];
            $user['lastname'] = '';
        } else {
            $user['lastname'] = array_shift($arrName);
            $user['firstname'] = implode(' ', $arrName);
        }

        $result_insert = user_create_user($user);
        foreach ($body['shortnames'] as $shortname) {
            $course = $DB->get_record('course', ['shortname' => $body['shortname']]);
            if ($course) {
                $context = context_course::instance($course->id);
                $users = get_enrolled_users($context);
                $check = true;
                foreach ($users as $user) {
                    if ($user->id == $result_insert) {
                        $check = false;
                        break;
                    }
                }
                if ($check) {
                    $instance = $DB->get_record('enrol', ['courseid' => $course->id, 'enrol' => 'manual']);
                    $enrolplugin = enrol_get_plugin($instance->enrol);
                    $enrolplugin->enrol_user($instance, $result_insert, 5);
                }
            }
        }
        echo json_encode($result_insert);
        return;
    }
}

return;