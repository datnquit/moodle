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
 * Strings for component 'editor_atto', language 'en'.
 *
 * @package    editor_atto
 * @copyright  2013 Damyon Wiese  <damyon@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['autosavefailed'] = 'Không thể kết nối đến máy chủ. Nếu bạn gửi trang này ngay bây giờ, các thay đổi của bạn có thể bị mất.';
$string['autosavefrequency'] = 'Tần suất lưu tự động';
$string['autosavefrequency_desc'] = 'Đây là số giây giữa các lần thử lưu tự động. Atto sẽ tự động lưu văn bản trong trình soạn thảo theo cài đặt này, để văn bản có thể được tự động khôi phục khi cùng người dùng quay lại cùng biểu mẫu.';
$string['autosavesucceeded'] = 'Bản nháp đã được lưu.';
$string['errorcannotparseline'] = 'Dòng \'{$a}\' không đúng định dạng.';
$string['errorgroupisusedtwice'] = 'Nhóm \'{$a}\' đã được định nghĩa hai lần; tên nhóm phải là duy nhất.';
$string['errornopluginsorgroupsfound'] = 'Không tìm thấy plugin hoặc nhóm nào; vui lòng thêm một số nhóm và plugin.';
$string['errorpluginnotfound'] = 'Plugin \'{$a}\' không thể sử dụng được; có vẻ như nó chưa được cài đặt.';
$string['errorpluginisusedtwice'] = 'Plugin \'{$a}\' đã được sử dụng hai lần; plugin chỉ có thể được định nghĩa một lần.';
$string['errortextrecovery'] = 'Rất tiếc, bản nháp không thể khôi phục được.';
$string['pluginname'] = 'Trình soạn thảo HTML Atto';
$string['richtexteditor'] = 'Trình soạn thảo văn bản phong phú';
$string['subplugintype_atto'] = 'Plugin Atto';
$string['subplugintype_atto_plural'] = 'Các plugin Atto';
$string['settings'] = 'Cài đặt thanh công cụ Atto';
$string['taskautosavecleanup'] = 'Xóa các bản nháp lưu tự động đã hết hạn';
$string['textrecovered'] = 'Một phiên bản nháp của văn bản này đã được tự động khôi phục.';
$string['toolbarconfig'] = 'Cấu hình thanh công cụ';
$string['toolbarconfig_desc'] = 'Danh sách các plugin và thứ tự hiển thị của chúng có thể được cấu hình tại đây. Cấu hình bao gồm các nhóm (một nhóm mỗi dòng) theo sau là danh sách các plugin được sắp xếp theo thứ tự cho nhóm đó. Nhóm được tách ra khỏi các plugin bằng dấu bằng và các plugin được tách nhau bằng dấu phẩy. Tên nhóm phải là duy nhất và nên chỉ ra các nút có điểm chung gì. Tên nút và nhóm không được lặp lại và chỉ có thể chứa các ký tự chữ và số.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['recover'] = 'Khôi phục';
$string['infostatus'] = 'Thông tin';
$string['warningstatus'] = 'Cảnh báo';
$string['autosaves'] = 'Thông tin lưu tự động của trình soạn thảo';
$string['privacy:metadata:database:atto_autosave'] = 'Bản nháp văn bản đã lưu tự động của trình soạn thảo.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'ID của người dùng có dữ liệu đã được lưu.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'Văn bản đã được lưu.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Thời gian nội dung được chỉnh sửa.';
