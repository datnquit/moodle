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
 * @package    mnetservice
 * @subpackage enrolment
 * @copyright  2010 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['availablecourseson'] = 'Các khóa học có sẵn trên {$a}';
$string['availablecoursesonnone'] = 'Máy chủ từ xa <a href="{$a->hosturl}">{$a->hostname}</a> không cung cấp bất kỳ khóa học nào cho người dùng của chúng tôi.';
$string['clientname'] = 'Client đăng ký từ xa';
$string['clientname_help'] = 'Công cụ này cho phép bạn đăng ký và hủy đăng ký người dùng cục bộ của bạn trên các máy chủ từ xa cho phép bạn làm như vậy thông qua plugin \'Đăng ký từ xa MNet\'.';
$string['editenrolments'] = 'Chỉnh sửa đăng ký';
$string['hostappname'] = 'Ứng dụng';
$string['hostname'] = 'Tên máy chủ';
$string['hosturl'] = 'URL máy chủ từ xa';
$string['nopublishers'] = 'Không có đồng nghiệp từ xa nào có sẵn.';
$string['noroamingusers'] = 'Người dùng cần khả năng \'{$a}\' trong ngữ cảnh hệ thống để được đăng ký vào các khóa học từ xa, tuy nhiên hiện không có người dùng nào có khả năng này. Nhấn vào nút tiếp tục để gán khả năng cần thiết cho một hoặc nhiều vai trò trên trang web của bạn.';
$string['otherenrolledusers'] = 'Các người dùng đã đăng ký khác';
$string['pluginname'] = 'Dịch vụ đăng ký từ xa';
$string['refetch'] = 'Tải lại trạng thái cập nhật từ các máy chủ từ xa';
$string['privacy:metadata:mnetservice_enrol_enrolments'] = 'Dịch vụ đăng ký từ xa';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltime'] = 'Thời gian khi đăng ký được sửa đổi';
$string['privacy:metadata:mnetservice_enrol_enrolments:enroltype'] = 'Loại đăng ký trên máy chủ từ xa được sử dụng để đăng ký người dùng vào khóa học của họ';
$string['privacy:metadata:mnetservice_enrol_enrolments:hostid'] = 'ID của máy chủ MNet từ xa';
$string['privacy:metadata:mnetservice_enrol_enrolments:remotecourseid'] = 'ID của khóa học trên máy chủ từ xa';
$string['privacy:metadata:mnetservice_enrol_enrolments:rolename'] = 'Tên của vai trò trên máy chủ từ xa';
$string['privacy:metadata:mnetservice_enrol_enrolments:tableexplanation'] = 'Dịch vụ đăng ký từ xa lưu trữ thông tin về các đăng ký của người dùng cục bộ trong các khóa học trên các máy chủ từ xa.';
$string['privacy:metadata:mnetservice_enrol_enrolments:userid'] = 'ID của người dùng cục bộ trên máy chủ này';
