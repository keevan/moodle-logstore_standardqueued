<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Log store lang strings.
 *
 * @package    logstore_standardqueued
 * @copyright  Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Standard log queued';
$string['pluginname_desc'] = 'Standard log with queueing middleware.';
$string['queuetype'] = 'Queue type';
$string['queuetype_desc'] = 'Type of queue to use';
$string['queuename'] = 'Queue name/url';
$string['queuename_desc'] = 'Queue identifier (name, url, etc.)';
$string['queueendpoint'] = 'Queue endpoint/intervface';
$string['queueendpoint_desc'] = 'Queue interface url';
$string['taskpull'] = 'Log table load from the queue';
$string['queuenotconfigured'] = 'Queue details are not configured properly, queueing will not be used';
$string['queuenotfunctional'] = 'Queue is not functional. Please refer to {$a} for more information.';
$string['statuspage'] = 'status page';
$string['notenabled'] = 'Not enabled';
$string['notconfigured'] = 'Not configured';
$string['bothconfigured'] = 'Cannot have both logstore_standardqueued and logstore_standard plugins enabled. Only logstore_standard will be used.';
$string['queue'] = 'Queue: {$a}';
$string['queuetested'] = 'Successfully tested queue {$a}';
$string['checkqueue'] = 'Standard log queue';
$string['configerror'] = 'Config error details';
$string['privacy:metadata:log'] = 'A collection of past events';
$string['privacy:metadata:log:anonymous'] = 'Whether the event was flagged as anonymous';
$string['privacy:metadata:log:eventname'] = 'The event name';
$string['privacy:metadata:log:ip'] = 'The IP address used at the time of the event';
$string['privacy:metadata:log:origin'] = 'The origin of the event';
$string['privacy:metadata:log:other'] = 'Additional information about the event';
$string['privacy:metadata:log:realuserid'] = 'The ID of the real user behind the event, when masquerading a user.';
$string['privacy:metadata:log:relateduserid'] = 'The ID of a user related to this event';
$string['privacy:metadata:log:timecreated'] = 'The time when the event occurred';
$string['privacy:metadata:log:userid'] = 'The ID of the user who triggered this event';
