<?php

require_once('../../config.php');
require_once($CFG->dirroot . '/course/lib.php');
global $DB;
header('Content-Type: application/json; charset=utf-8');
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    $body = file_get_contents('php://input');
    $body = json_decode($body, true);
    if ($body['mighty_token'] != $CFG->mighty_token) {
        die;
    }

    $course = $DB->get_record('course', ['shortname' => $body['shortname']]);
    if ($course) {
        delete_course($course->id);
    }
}
return;
