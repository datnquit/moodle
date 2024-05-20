<?php

require_once('../../config.php');
require_once($CFG->dirroot.'/course/lib.php');
global $DB;
header('Content-Type: application/json; charset=utf-8');
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    $body = file_get_contents('php://input');
    $body = json_decode($body, true);
    if ($body['mighty_token'] != $CFG->mighty_token) {
        die;
    }

    $course = $DB->get_record('course', ['shortname' => $body['shortname_old']]);
    if ($course) {
        $DB->set_field('course', 'shortname', $body['shortname_new'], ['id' => $course->id]);
        $context = context_course::instance($course->id);
        $users = get_enrolled_users($context);
        $uIDs = [];
        foreach ($users as $user) {
            if ($user->id == $body['teacher_id']) {
                return;
            }
        }
        $instance = $DB->get_record('enrol', ['courseid' => $course->id, 'enrol' => 'manual']);
        $enrolplugin = enrol_get_plugin($instance->enrol);
        $enrolplugin->enrol_user($instance, $body['teacher_id'], 3);
    }
}
return;
