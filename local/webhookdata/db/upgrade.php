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

/**
 * Define upgrade steps to be performed to upgrade the plugin from the old version to the current one.
 *
 * @param int $oldversion Version number the plugin is being upgraded from.
 */
function xmldb_local_webhookdata_upgrade($oldversion) {
    global $DB;
    $dbman = $DB->get_manager();

    if ($oldversion < 2024030601) {

        // Define field eventtype to be added to local_webhookdata_event.
        $table = new xmldb_table('local_webhookdata_event');
        $field = new xmldb_field('eventtype', XMLDB_TYPE_TEXT, null, null, null, null, null, 'id');

        // Conditionally launch add field eventtype.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Define field url to be added to local_webhookdata_event.
        $table = new xmldb_table('local_webhookdata_event');
        $field = new xmldb_field('url', XMLDB_TYPE_TEXT, null, null, null, null, null, 'instructor');

        // Conditionally launch add field url.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Define field courseid to be added to local_webhookdata_event.
        $table = new xmldb_table('local_webhookdata_event');
        $field = new xmldb_field('courseid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '1', 'eventtype');

        // Conditionally launch add field courseid.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Define field eventid to be dropped from local_webhookdata_event.
        $table = new xmldb_table('local_webhookdata_event');
        $field = new xmldb_field('eventid');

        // Conditionally launch drop field eventid.
        if ($dbman->field_exists($table, $field)) {
            $dbman->drop_field($table, $field);
        }

        // Define key webhookdata-course-foreign-key (foreign) to be added to local_webhookdata_event.
        $table = new xmldb_table('local_webhookdata_event');
        $key = new xmldb_key('webhookdata-course-foreign-key', XMLDB_KEY_FOREIGN, ['courseid'], 'course', ['id']);

        // Launch add key webhookdata-course-foreign-key.
        $dbman->add_key($table, $key);

        // Webhookdata savepoint reached.
        upgrade_plugin_savepoint(true, 2024030601, 'local', 'webhookdata');
    }
    return true;
}
