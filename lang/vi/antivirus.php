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
 * Strings for component 'antivirus', language 'en'
 *
 * @package   core_antivirus
 * @copyright 2015 Ruslan Kabalin, Lancaster University.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actantivirushdr'] = 'Các plugin diệt virus có sẵn';
$string['antiviruses'] = 'Các plugin diệt virus';
$string['antiviruscommonsettings'] = 'Cài đặt chung của antivirus';
$string['antivirussettings'] = 'Quản lý các plugin diệt virus';
$string['configantivirusplugins'] = 'Vui lòng chọn các plugin diệt virus bạn muốn sử dụng và sắp xếp chúng theo thứ tự được áp dụng.';
$string['datastream'] = 'Dữ liệu';
$string['dataerrordesc'] = 'Đã xảy ra lỗi máy quét dữ liệu.';
$string['dataerrorname'] = 'Lỗi máy quét dữ liệu';
$string['datainfecteddesc'] = 'Đã phát hiện dữ liệu bị nhiễm.';
$string['datainfectedname'] = 'Dữ liệu bị nhiễm';
$string['emailadditionalinfo'] = 'Chi tiết bổ sung được trả về từ công cụ virus: ';
$string['emailauthor'] = 'Được tải lên bởi: ';
$string['emailcontenthash'] = 'Băm nội dung: ';
$string['emailcontenttype'] = 'Loại nội dung: ';
$string['emaildate'] = 'Ngày tải lên: ';
$string['emailfilename'] = 'Tên tệp: ';
$string['emailfilesize'] = 'Kích thước tệp: ';
$string['emailgeoinfo'] = 'Định vị địa lý: ';
$string['emailinfectedfiledetected'] = 'Đã phát hiện tệp bị nhiễm';
$string['emailipaddress'] = 'Địa chỉ IP:';
$string['emailreferer'] = 'Người giới thiệu: ';
$string['emailreport'] = 'Báo cáo: ';
$string['emailscanner'] = 'Máy quét: ';
$string['emailscannererrordetected'] = 'Đã xảy ra lỗi máy quét';
$string['emailsubject'] = '{$a} :: Thông báo diệt virus';
$string['enablequarantine_help'] = 'Nếu được bật, bất kỳ tệp nào được phát hiện là virus sẽ được đặt trong thư mục cách ly ([dataroot]/{$a}) để kiểm tra sau. Việc tải lên Moodle sẽ thất bại. Nếu bạn có bất kỳ quét virus nào ở mức hệ thống tệp, thư mục cách ly nên được loại trừ khỏi kiểm tra diệt virus để tránh phát hiện các tệp bị cách ly.';
$string['enablequarantine'] = 'Bật cách ly';
$string['fileerrordesc'] = 'Đã xảy ra lỗi máy quét tệp.';
$string['fileerrorname'] = 'Lỗi máy quét tệp';
$string['fileinfecteddesc'] = 'Đã phát hiện một tệp bị nhiễm.';
$string['fileinfectedname'] = 'Tệp bị nhiễm';
$string['notifyemail_help'] = 'Địa chỉ email để nhận thông báo khi một virus được phát hiện. Nếu để trống, tất cả các quản trị viên trang sẽ nhận được thông báo.';
$string['notifyemail'] = 'Email thông báo cảnh báo diệt virus';
$string['notifylevel_help'] = 'Các mức thông tin khác nhau mà bạn muốn được thông báo';
$string['notifylevel'] = 'Mức thông báo';
$string['notifylevelfound'] = 'Chỉ các mối đe dọa được phát hiện';
$string['notifylevelerror'] = 'Các mối đe dọa được phát hiện và lỗi máy quét';
$string['privacy:metadata'] = 'Hệ thống diệt virus không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['quarantinedfiles'] = 'Các tệp bị cách ly diệt virus';
$string['quarantinedisabled'] = 'Cách ly bị vô hiệu hóa. Tệp không được lưu trữ.';
$string['quarantinetime_desc'] = 'Các tệp bị cách ly lâu hơn thời gian quy định sẽ bị loại bỏ.';
$string['quarantinetime'] = 'Thời gian cách ly tối đa';
$string['threshold_desc'] = 'Kiểm tra lại các kết quả trước đó để tìm lỗi, v.v., như đã báo cáo trong {$a}.';
$string['threshold'] = 'Ngưỡng kiểm tra trạng thái';
$string['taskcleanup'] = 'Dọn dẹp các tệp bị cách ly.';
$string['unknown'] = 'Không xác định';
$string['virusfound'] = '{$a->item} đã được quét bởi một máy kiểm tra virus và phát hiện bị nhiễm!';
