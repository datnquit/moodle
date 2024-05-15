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

    $course = $DB->get_record('course', ['shortname' => $body['shortname']]);
    if (!$course) {
        $data = new \stdClass();
        $data->category = $body['category_id'];
        $data->shortname = $body['shortname'];
        $data->fullname = $body['name'];
        $data->visible = true;

        // Create empty new course.
        $newcourse = create_course($data);
        $instance = $DB->get_record('enrol', ['courseid' => $newcourse->id, 'enrol' => 'manual']);
        $enrolplugin = enrol_get_plugin($instance->enrol);
        if (isset($body['teacher_id'])) {
            $enrolplugin->enrol_user($instance, $body['teacher_id'], 3);
        }
        if (isset($body['student_ids']) && is_array($body['student_ids'])) {
            foreach ($body['student_ids'] as $student_id) {
                $enrolplugin->enrol_user($instance, $student_id, 5);
            }
        }
        echo json_encode($newcourse);
    } else {
        if (isset($body['teacher_id']) || count($body['student_ids'])) {
            $context = context_course::instance($course->id);
            $users = get_enrolled_users($context);
            $uIDs = [];
            foreach ($users as $user) {
                $uIDs[] = $user->id;
            }
            $instance = $DB->get_record('enrol', ['courseid' => $course->id, 'enrol' => 'manual']);
            $enrolplugin = enrol_get_plugin($instance->enrol);
            if (isset($body['teacher_id']) && !in_array($body['teacher_id'], $uIDs)) {
                $enrolplugin->enrol_user($instance, $body['teacher_id'], 3);
            }
            if (isset($body['student_ids']) && is_array($body['student_ids'])) {
                foreach ($body['student_ids'] as $student_id) {
                    if (!in_array($student_id, $uIDs)) {
                        $enrolplugin->enrol_user($instance, $student_id, 5);
                    }
                }
            }
        }

        echo json_encode($users);
    }
}
return;
