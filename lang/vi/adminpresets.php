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
 * Core admin presets component to load some settings/plugins.
 *
 * @package          core_adminpresets
 * @copyright        2021 Sara Arjona (sara@moodle.com)
 * @license          http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['disabled'] = 'Đã tắt';
$string['disabledwithvalue'] = 'Đã tắt ({$a})';
$string['enabled'] = 'Đã bật';
$string['errordeleting'] = 'Lỗi xóa khỏi cơ sở dữ liệu.';
$string['errorinserting'] = 'Lỗi chèn vào cơ sở dữ liệu.';
$string['errornopreset'] = 'Không tồn tại mẫu nào có tên này.';
$string['fullpreset'] = 'Đầy đủ';
$string['fullpresetdescription'] = 'Tất cả các tính năng của Starter cộng với Công cụ bên ngoài (LTI), SCORM, Workshop, Phân tích, Huy hiệu, Năng lực, Kế hoạch học tập và nhiều hơn nữa.';
$string['markedasadvanced'] = 'được đánh dấu là nâng cao';
$string['markedasforced'] = 'được đánh dấu là bắt buộc';
$string['markedaslocked'] = 'được đánh dấu là khóa';
$string['markedasnonadvanced'] = 'không được đánh dấu là nâng cao';
$string['markedasnonforced'] = 'không được đánh dấu là bắt buộc';
$string['markedasnonlocked'] = 'không được đánh dấu là khóa';
$string['privacy:metadata:adminpresets'] = 'Danh sách các mẫu cấu hình.';
$string['privacy:metadata:adminpresets:comments'] = 'Mô tả của mẫu.';
$string['privacy:metadata:adminpresets:moodlerelease'] = 'Phiên bản phát hành Moodle mà mẫu dựa trên.';
$string['privacy:metadata:adminpresets:name'] = 'Tên của mẫu.';
$string['privacy:metadata:adminpresets:site'] = 'Trang Moodle nơi mẫu này được tạo ra.';
$string['privacy:metadata:adminpresets:timecreated'] = 'Thời gian thay đổi được thực hiện.';
$string['privacy:metadata:adminpresets:userid'] = 'Người dùng tạo mẫu.';
$string['privacy:metadata:adminpresets_app'] = 'Các mẫu cấu hình đã được áp dụng.';
$string['privacy:metadata:adminpresets_app:adminpresetid'] = 'ID của mẫu đã áp dụng.';
$string['privacy:metadata:adminpresets_app:time'] = 'Thời gian mẫu được áp dụng.';
$string['privacy:metadata:adminpresets_app:userid'] = 'Người dùng đã áp dụng mẫu.';
$string['sensiblesettings'] = 'Cài đặt với mật khẩu';
$string['sensiblesettingstext'] = 'Cài đặt với mật khẩu hoặc thông tin nhạy cảm khác có thể bị loại trừ khi tạo mẫu quản trị trang. Nhập các cài đặt bổ sung theo định dạng TÊN_CÀI_ĐẶT@@TÊN_PLUGIN được phân tách bằng dấu phẩy.';
$string['siteadminpresetspluginname'] = 'Mẫu quản trị trang';
$string['starterpreset'] = 'Khởi đầu';
$string['starterpresetdescription'] = 'Moodle với tất cả các tính năng phổ biến nhất, bao gồm Bài tập, Phản hồi, Diễn đàn, H5P, Trắc nghiệm và Theo dõi hoàn thành.';
$string['wrongid'] = 'ID sai';
