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
 * Strings for plugin 'fileconverter_googledrive'
 *
 * @package   fileconverter_googledrive
 * @copyright 2017 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['pluginname'] = 'Google Drive';
$string['disabled'] = 'Đã tắt';
$string['issuer'] = 'Dịch vụ OAuth 2';
$string['issuer_help'] = 'Dịch vụ OAuth 2 được sử dụng để truy cập Google Drive.';
$string['privacy:metadata:fileconverter_googledrive:externalpurpose'] = 'Thông tin này được gửi tới API của Google Drive để tệp được chuyển đổi sang định dạng khác. Tệp được lưu trữ tạm thời trên Google Drive và sẽ bị xóa sau khi quá trình chuyển đổi hoàn tất.';
$string['privacy:metadata:fileconverter_googledrive:filecontent'] = 'Nội dung của tệp.';
$string['privacy:metadata:fileconverter_googledrive:filemimetype'] = 'Loại MIME của tệp.';
$string['privacy:metadata:fileconverter_googledrive:params'] = 'Các tham số truy vấn được gửi tới API của Google Drive.';
$string['test_converter'] = 'Kiểm tra trình chuyển đổi này hoạt động đúng.';
$string['test_conversion'] = 'Kiểm tra chuyển đổi tài liệu';
$string['test_conversionready'] = 'Trình chuyển đổi tài liệu này đã được cấu hình đúng.';
$string['test_conversionnotready'] = 'Trình chuyển đổi tài liệu này chưa được cấu hình đúng.';
$string['test_issuerinvalid'] = 'Dịch vụ OAuth trong cài đặt trình chuyển đổi tài liệu được đặt giá trị không hợp lệ.';
$string['test_issuernotenabled'] = 'Dịch vụ OAuth được đặt trong cài đặt trình chuyển đổi tài liệu chưa được bật.';
$string['test_issuernotconnected'] = 'Dịch vụ OAuth được đặt trong cài đặt trình chuyển đổi tài liệu không có tài khoản hệ thống được kết nối.';
$string['test_issuernotset'] = 'Cần phải đặt dịch vụ OAuth trong cài đặt trình chuyển đổi tài liệu.';
