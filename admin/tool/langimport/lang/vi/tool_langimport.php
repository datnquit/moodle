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
 * Strings for component 'tool_langimport', language 'en', branch 'MOODLE_22_STABLE'
 *
 * @package    tool
 * @subpackage langimport
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['downloadnotavailable'] = 'Không thể kết nối với máy chủ tải về. Không thể cài đặt hoặc cập nhật các gói ngôn ngữ tự động. Vui lòng tải các tệp ZIP phù hợp từ <a href="{$a->src}">{$a->src}</a> và giải nén chúng thủ công vào thư mục dữ liệu của bạn <code>{$a->dest}</code>';
$string['install'] = 'Cài đặt các gói ngôn ngữ đã chọn';
$string['installfailed'] = 'Cài đặt gói ngôn ngữ thất bại!';
$string['installfinished'] = 'Cài đặt gói ngôn ngữ hoàn tất.';
$string['installpending'] = 'Các gói ngôn ngữ sau sẽ sớm được cài đặt: {$a}.';
$string['installscheduled'] = 'Các gói ngôn ngữ được lên lịch để cài đặt.';
$string['installedlangs'] = 'Các gói ngôn ngữ đã cài đặt';
$string['langimport'] = 'Tiện ích nhập khẩu ngôn ngữ';
$string['langimportdisabled'] = 'Tính năng nhập khẩu ngôn ngữ đã bị vô hiệu hóa. Bạn phải cập nhật các gói ngôn ngữ của mình thủ công ở mức hệ thống tệp. Đừng quên xóa bộ nhớ cache sau khi làm vậy.';
$string['langpackinstalled'] = 'Gói ngôn ngữ \'{$a}\' đã được cài đặt thành công';
$string['langpackinstalledevent'] = 'Gói ngôn ngữ đã được cài đặt';
$string['langpackremoved'] = 'Gói ngôn ngữ \'{$a}\' đã bị gỡ cài đặt';
$string['langpacknotremoved'] = 'Đã xảy ra lỗi; gói ngôn ngữ \'{$a}\' không được gỡ cài đặt hoàn toàn. Vui lòng kiểm tra quyền tệp.';
$string['langpackremovedevent'] = 'Gói ngôn ngữ đã bị gỡ cài đặt';
$string['langpackupdateskipped'] = 'Cập nhật gói ngôn ngữ \'{$a}\' bị bỏ qua';
$string['langpackuptodate'] = 'Gói ngôn ngữ \'{$a}\' đã được cập nhật';
$string['langpackupdated'] = 'Gói ngôn ngữ \'{$a}\' đã được cập nhật thành công';
$string['langpackupdatedevent'] = 'Gói ngôn ngữ đã được cập nhật';
$string['langunsupported'] = '<p>Máy chủ của bạn dường như không hỗ trợ đầy đủ các ngôn ngữ sau:</p><ul>{$a->missinglocales}</ul><p>Thay vào đó, ngôn ngữ toàn cầu ({$a->globallocale}) sẽ được sử dụng để định dạng các chuỗi như ngày hoặc số.</p>';
$string['langupdatecomplete'] = 'Cập nhật gói ngôn ngữ hoàn tất';
$string['missingcfglangotherroot'] = 'Thiếu giá trị cấu hình $CFG->langotherroot';
$string['missinglangparent'] = 'Thiếu ngôn ngữ cha <em>{$a->parent}</em> của <em>{$a->lang}</em>.';
$string['noenglishuninstalltitle'] = 'Không thể gỡ cài đặt';
$string['noenglishuninstall'] = 'Gói ngôn ngữ tiếng Anh không thể gỡ cài đặt.';
$string['nolangupdateneeded'] = 'Tất cả các gói ngôn ngữ của bạn đều đã được cập nhật, không cần cập nhật';
$string['pluginname'] = 'Các gói ngôn ngữ';
$string['purgestringcaches'] = 'Xóa bộ nhớ cache chuỗi';
$string['search'] = 'Tìm kiếm các gói ngôn ngữ có sẵn';
$string['selectlangs'] = 'Chọn ngôn ngữ để gỡ cài đặt';
$string['uninstall'] = 'Gỡ cài đặt các gói ngôn ngữ đã chọn';
$string['uninstallconfirm'] = 'Bạn sắp gỡ cài đặt hoàn toàn các gói ngôn ngữ này: <strong>{$a}</strong>. Bạn có chắc chắn không?';
$string['updatelangs'] = 'Cập nhật tất cả các gói ngôn ngữ đã cài đặt';
$string['updatelangsnote'] = 'Cập nhật tất cả các gói ngôn ngữ đã cài đặt bằng cách nhấp vào nút có thể mất nhiều thời gian và dẫn đến hết thời gian chờ. Thay vào đó, nên sử dụng tác vụ đã lên lịch \'{$a->taskname}\' (chạy mặc định mỗi ngày).';
$string['privacy:metadata'] = 'Plugin gói ngôn ngữ không lưu trữ bất kỳ dữ liệu cá nhân nào.';
