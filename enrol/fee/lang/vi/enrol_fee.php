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
 * Strings for component 'enrol_fee', language 'en'
 *
 * @package    enrol_fee
 * @copyright  2019 Shamim Rezaie <shamim@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['assignrole'] = 'Gán vai trò';
$string['cost'] = 'Phí ghi danh';
$string['costerror'] = 'Phí ghi danh phải là một số.';
$string['currency'] = 'Tiền tệ';
$string['defaultrole'] = 'Vai trò mặc định khi ghi danh';
$string['defaultrole_desc'] = 'Chọn vai trò để gán cho người dùng sau khi thanh toán.';
$string['enrolenddate'] = 'Ngày kết thúc';
$string['enrolenddate_help'] = 'Nếu bật, người dùng chỉ có thể ghi danh cho đến ngày này.';
$string['enrolenddaterror'] = 'Ngày kết thúc ghi danh không thể sớm hơn ngày bắt đầu.';
$string['enrolperiod'] = 'Thời gian ghi danh';
$string['enrolperiod_desc'] = 'Thời gian ghi danh mặc định. Nếu đặt là zero, thời gian ghi danh sẽ không giới hạn theo mặc định.';
$string['enrolperiod_help'] = 'Thời gian ghi danh có hiệu lực, bắt đầu từ thời điểm người dùng được ghi danh. Nếu tắt, thời gian ghi danh sẽ không giới hạn.';
$string['enrolstartdate'] = 'Ngày bắt đầu';
$string['enrolstartdate_help'] = 'Nếu bật, người dùng chỉ có thể ghi danh từ ngày này trở đi.';
$string['expiredaction'] = 'Hành động khi hết hạn ghi danh';
$string['expiredaction_help'] = 'Chọn hành động được thực hiện khi ghi danh của người dùng hết hạn. Lưu ý rằng một số dữ liệu và cài đặt của người dùng sẽ bị xóa khi người dùng bị hủy ghi danh.';
$string['fee:config'] = 'Cấu hình ghi danh bằng phương thức thanh toán';
$string['fee:manage'] = 'Quản lý người dùng đã ghi danh';
$string['fee:unenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['fee:unenrolself'] = 'Tự hủy ghi danh khỏi khóa học';
$string['nocost'] = 'Không có phí để ghi danh vào khóa học này!';
$string['paymentaccount'] = 'Tài khoản thanh toán';
$string['paymentaccount_help'] = 'Phí ghi danh sẽ được thanh toán vào tài khoản này.';
$string['pluginname'] = 'Ghi danh bằng thanh toán';
$string['pluginname_desc'] = 'Phương thức ghi danh bằng thanh toán cho phép bạn thiết lập các khóa học yêu cầu thanh toán. Nếu phí cho bất kỳ khóa học nào được đặt là zero, sinh viên sẽ không phải trả phí để vào học. Có một mức phí toàn trang mà bạn đặt ở đây làm mặc định cho toàn bộ trang và sau đó có một cài đặt khóa học mà bạn có thể đặt cho từng khóa học riêng biệt. Phí khóa học sẽ ghi đè phí toàn trang.';
$string['privacy:metadata'] = 'Plugin ghi danh bằng thanh toán không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['purchasedescription'] = 'Ghi danh vào khóa học {$a}';
$string['sendpaymentbutton'] = 'Chọn loại thanh toán';
$string['status'] = 'Cho phép ghi danh bằng thanh toán';
$string['status_desc'] = 'Cho phép người dùng thực hiện thanh toán để ghi danh vào khóa học theo mặc định.';
