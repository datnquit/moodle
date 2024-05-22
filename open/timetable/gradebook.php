<?php
require_once('../../config.php');
require_once($CFG->dirroot.'/user/lib.php');
require_once($CFG->dirroot.'/course/lib.php');
global $DB;
global $USER;
header('Content-Type: application/json; charset=utf-8');

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    $body = file_get_contents('php://input');
    $body = json_decode($body, true);
    if ($body['mighty_token'] != $CFG->mighty_token) {
        die;
    }
    $course = $DB->get_record('course', ['shortname' => $body['shortname']]);
    $user = core_user::get_user($body['student_id']);
    if ($course && $user) {
        $USER = $user;
        $ru = new gradereport_user\external\user();
        $rur = $ru->get_grade_items($course->id, $user->id, 0);
        echo json_encode($rur);
    } else {
        echo json_encode([]);
    }
}
return;
