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
 * Plugin version and other meta-data are defined here.
 *
 * @package     local_greetings
 * @copyright   2024 Hoa To <hoa.hh.to@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class local_webhookdata_observer {
    // Listener for \mod_forum\event\discussion_created event
    public static function discussion_created(\mod_forum\event\discussion_created $event) {
        // Get event data from Moodle's Events API.
        $eventdata = $event->get_data();

        // Create an ad hoc task and run it in the background
        $task = \local_webhookdata\task\discussion_create_noti_task::instance($eventdata);
        \core\task\manager::queue_adhoc_task($task, true);
    }

    // Listener for mod_assign\event\submission_created event
    public static function module_created(\core\event\course_module_created $event) {
        // Get event data from Moodle's Events API.
        $eventdata = $event->get_data();
        $modulename = $eventdata['other']['modulename'];

        // Create an ad hoc task and run it in the background
        switch ($modulename) {
            case 'assign':
                $task = \local_webhookdata\task\assignment_create_noti_task::instance($eventdata);
                break;
            case 'quiz':
                $task = \local_webhookdata\task\quiz_create_noti_task::instance($eventdata);
                break;
            default:
                return;
        }

        \core\task\manager::queue_adhoc_task($task, true);
    }

    public static function quiz_submitted(\mod_quiz\event\attempt_submitted $event) {
        $eventdata = $event->get_data();
        $task = \local_webhookdata\task\quiz_submitted_noti_task::instance($eventdata);
        \core\task\manager::queue_adhoc_task($task, true);
    }

    public static function assign_submitted(\mod_assign\event\assessable_submitted $event) {
        $eventdata = $event->get_data();
        $task = \local_webhookdata\task\assignment_submitted_noti_task::instance($eventdata);
        \core\task\manager::queue_adhoc_task($task, true);
    }
}
