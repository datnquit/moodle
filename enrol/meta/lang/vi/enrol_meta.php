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
 * Strings for component 'enrol_meta', language 'en'.
 *
 * @package    enrol_meta
 * @copyright  2010 onwards Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['addgroup'] = 'Thêm vào nhóm';
$string['coursesort'] = 'Sắp xếp danh sách khóa học';
$string['coursesort_help'] = 'Điều này xác định liệu danh sách các khóa học có thể liên kết được sắp xếp theo thứ tự sắp xếp (tức là thứ tự được đặt trong Quản trị trang > Khóa học > Quản lý khóa học và danh mục) hoặc theo thứ tự bảng chữ cái theo cài đặt khóa học.';
$string['creategroup'] = 'Tạo nhóm mới';
$string['defaultgroupnametext'] = '{$a->name} khóa học {$a->increment}';
$string['enrolmetasynctask'] = 'Tác vụ đồng bộ ghi danh meta';
$string['linkedcourse'] = 'Liên kết khóa học';
$string['meta:config'] = 'Cấu hình các trường hợp ghi danh meta';
$string['meta:selectaslinked'] = 'Chọn khóa học làm liên kết meta';
$string['meta:unenrol'] = 'Hủy ghi danh người dùng bị đình chỉ';
$string['nosyncroleids'] = 'Các vai trò không được đồng bộ hóa';
$string['nosyncroleids_desc'] = 'Mặc định tất cả các phân công vai trò cấp khóa học đều được đồng bộ hóa từ khóa học cha sang khóa học con. Các vai trò được chọn ở đây sẽ không được bao gồm trong quá trình đồng bộ hóa. Các vai trò có sẵn cho đồng bộ hóa sẽ được cập nhật trong lần thực thi cron tiếp theo.';
$string['pluginname'] = 'Liên kết meta khóa học';
$string['pluginname_desc'] = 'Plugin ghi danh liên kết meta khóa học đồng bộ hóa ghi danh và vai trò trong hai khóa học khác nhau.';
$string['syncall'] = 'Đồng bộ hóa tất cả người dùng đã ghi danh';
$string['samemetacourse'] = 'Bạn không thể thêm liên kết meta vào cùng một khóa học.';
$string['syncall_desc'] = 'Nếu được bật, tất cả người dùng đã ghi danh đều được đồng bộ hóa ngay cả khi họ không có vai trò nào trong khóa học cha, nếu bị vô hiệu hóa, chỉ những người dùng có ít nhất một vai trò được đồng bộ hóa mới được ghi danh vào khóa học con.';
$string['privacy:metadata:core_group'] = 'Plugin ghi danh meta có thể tạo một nhóm mới hoặc sử dụng một nhóm hiện có để thêm tất cả các thành viên của khóa học được liên kết.';
$string['unknownmetacourse'] = 'Tên ngắn của khóa học meta không xác định';
$string['wscannotcreategroup'] = 'Không có quyền tạo nhóm trong khóa học liên kết id = {$a}.';
$string['wsinvalidcourse'] = 'ID khóa học = {$a} không tồn tại hoặc không có quyền liên kết trong ghi danh meta.';
$string['wsinvalidmetacourse'] = 'ID khóa học meta = {$a} không tồn tại hoặc không có quyền thêm trường hợp ghi danh.';
$string['wsnoinstancesspecified'] = 'Không có trường hợp nào được chỉ định';
