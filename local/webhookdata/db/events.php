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

defined('MOODLE_INTERNAL') || die();

$observers = array(
    array(
        'callback'    => 'local_webhookdata_observer::discussion_created',
        'eventname'   => 'mod_forum\event\discussion_created',
        'includefile' => null,
        'internal'    => true,
        'priority'    => 200,
    ),

    array(
        'callback'    => 'local_webhookdata_observer::module_created',
        'eventname'   => 'core\event\course_module_created',
        'includefile' => null,
        'internal'    => true,
        'priority'    => 200,
    ),

    array(
        'callback'    => 'local_webhookdata_observer::quiz_submitted',
        'eventname'   => 'mod_quiz\event\attempt_submitted',
        'includefile' => null,
        'internal'    => true,
        'priority'    => 200,
    ),

    array(
        'callback'    => 'local_webhookdata_observer::assign_submitted',
        'eventname'   => 'mod_assign\event\assessable_submitted',
        'includefile' => null,
        'internal'    => true,
        'priority'    => 200,
    ),
);
