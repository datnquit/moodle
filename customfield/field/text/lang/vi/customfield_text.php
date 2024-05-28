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
 * Customfield text plugin
 *
 * @package   customfield_text
 * @copyright 2018 Toni Barbera <toni@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['displaysize'] = 'Kích thước nhập biểu mẫu';
$string['errorconfigdisplaysize'] = 'Kích thước nhập biểu mẫu phải từ 1 đến 200 ký tự.';
$string['errorconfiglinkplaceholder'] = 'Liên kết phải chứa một giá trị địa chỉ $$.';
$string['errorconfiglinksyntax'] = 'Liên kết phải là một URL hợp lệ bắt đầu bằng http:// hoặc https://.';
$string['errorconfigmaxlen'] = 'Số ký tự tối đa được phép phải từ 1 đến 1333.';
$string['errormaxlength'] = 'Số ký tự tối đa được phép trong trường này là {$a}.';
$string['islink'] = 'Trường liên kết';
$string['islink_help'] = 'Để biến đổi văn bản thành liên kết, nhập một URL chứa $$ như một giá trị địa chỉ, trong đó $$ sẽ được thay thế bằng văn bản. Ví dụ, để biến đổi một Twitter ID thành một liên kết, nhập https://twitter.com/$$.';
$string['ispassword'] = 'Trường mật khẩu';
$string['linktarget'] = 'Mục tiêu liên kết';
$string['maxlength'] = 'Số ký tự tối đa';
$string['newwindow'] = 'Cửa sổ mới';
$string['none'] = 'Không có';
$string['pluginname'] = 'Văn bản ngắn';
$string['privacy:metadata'] = 'Trình cắm loại trường văn bản ngắn không lưu trữ bất kỳ dữ liệu cá nhân nào; nó sử dụng các bảng được xác định trong core.';
$string['sameframe'] = 'Cùng một khung';
$string['samewindow'] = 'Cùng cửa sổ';
$string['specificsettings'] = 'Cài đặt trường văn bản ngắn';