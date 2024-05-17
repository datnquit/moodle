<?php

require_once('../../config.php');
require_once($CFG->dirroot.'/course/lib.php');
global $DB;
header('Content-Type: application/json; charset=utf-8');
$query = $_GET;
if ($query['mighty_token'] != $CFG->mighty_token) {
    die;
}

$category = $DB->get_record('course_categories', ['idnumber' => $query['category_id']]);
echo json_encode([
    'data' => $category ? $category->id : null,
]);
return;
