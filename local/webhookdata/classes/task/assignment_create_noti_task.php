<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     local_webhookdata
 * @category    string
 * @copyright   2024 Hoa To <hoa.hh.to@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace local_webhookdata\task;

class assignment_create_noti_task extends \core\task\adhoc_task
{
    public function get_name()
    {
        return get_string("assignmentcreate", "local_webhookdata");
    }

    public static function instance($eventdata
    ): self
    {
        $task = new self();
        $task->set_custom_data($eventdata);

        return $task;
    }

    public function execute()
    {
        global $CFG;
        global $DB;
        require_once($CFG->dirroot . '/config.php');
        require_once($CFG->dirroot . '/local/webhookdata/lib.php');

        $eventdata = $this->get_custom_data();


        // Get related course, instructor data, callback url.
        $user = $DB->get_record('user', ['id' => $eventdata->userid]);
        $course = $DB->get_record('course', ['id' => $eventdata->courseid], 'fullname');
        $url = local_webhookdata_get_course_callback($eventdata->courseid);
        $module = $DB->get_record('course_modules', ['id' => $eventdata->objectid]);
        $assignment = $DB->get_record('assign', ['id' => $module->instance]);

        // Append related data to event data.
        $eventdata->url = $url;
        $eventdata->instructor = $user->firstname . ' ' . $user->lastname;
        $eventdata->course = $course->fullname;
        $eventdata->subject = $assignment->name;
        $eventdata->duedate = date('Y-m-d H:i:s',$assignment->duedate);
        $eventdata->event = 'MOODLE_ASSIGNMENT_CREATE';

        // Send a POST request to the callback URL.
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($eventdata));
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        $response = curl_exec($curl);
        // Check for errors
        if ($response === false) {
            $error = curl_error($curl);
            // Handle the error
        }
        curl_close($curl);
    }
}
