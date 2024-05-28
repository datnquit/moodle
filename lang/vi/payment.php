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
 * Strings for component 'payment', language 'en'
 *
 * @package   core_payment
 * @copyright 2019 Shamim Rezaie <shamim@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['accountarchived'] = 'Đã lưu trữ';
$string['accountdeleteconfirm'] = 'Nếu tài khoản này có các khoản thanh toán trước đó, nó sẽ được lưu trữ, nếu không, dữ liệu cấu hình của nó sẽ bị xóa vĩnh viễn. Bạn có chắc chắn muốn tiếp tục không?';
$string['accountconfignote'] = 'Các cổng thanh toán cho tài khoản này sẽ được cấu hình riêng biệt';
$string['accountidnumber'] = 'Số ID';
$string['accountidnumber_help'] = 'Số ID chỉ được sử dụng khi phù hợp với tài khoản so với các hệ thống bên ngoài và không được hiển thị ở bất kỳ đâu trên trang web. Nếu tài khoản có tên mã chính thức, có thể nhập vào, nếu không, trường có thể để trống.';
$string['accountname'] = 'Tên tài khoản';
$string['accountname_help'] = 'Cách nhận diện tài khoản này cho giáo viên hoặc quản lý thiết lập thanh toán (ví dụ trong plugin đăng ký khóa học).';
$string['accountnotavailable'] = 'Không có sẵn';
$string['paymentaccountsexplained'] = 'Tạo một hoặc nhiều tài khoản thanh toán cho trang web này. Mỗi tài khoản bao gồm cấu hình cho các cổng thanh toán có sẵn. Người cấu hình thanh toán trên trang web (ví dụ, thanh toán cho việc đăng ký khóa học) sẽ có thể chọn từ các tài khoản có sẵn.';
$string['createaccount'] = 'Tạo tài khoản thanh toán';
$string['deleteorarchive'] = 'Xóa hoặc lưu trữ';
$string['editpaymentaccount'] = 'Chỉnh sửa tài khoản thanh toán';
$string['eventaccountcreated'] = 'Tài khoản thanh toán đã được tạo';
$string['eventaccountdeleted'] = 'Tài khoản thanh toán đã bị xóa';
$string['eventaccountupdated'] = 'Tài khoản thanh toán đã được cập nhật';
$string['feeincludesurcharge'] = '{$a->fee} (bao gồm {$a->surcharge}% phí phụ thu cho việc sử dụng loại thanh toán này)';
$string['gatewaycannotbeenabled'] = 'Cổng thanh toán không thể được kích hoạt vì cấu hình không hoàn chỉnh.';
$string['gatewaydisabled'] = 'Đã tắt';
$string['gatewayenabled'] = 'Đã bật';
$string['gatewaynotfound'] = 'Không tìm thấy cổng thanh toán';
$string['gotomanageplugins'] = 'Bật và tắt các cổng thanh toán và đặt phụ phí thông qua {$a}.';
$string['gotopaymentaccounts'] = 'Bạn có thể tạo nhiều tài khoản thanh toán bằng cách sử dụng bất kỳ cổng nào trong số này trên trang {$a}';
$string['hidearchived'] = 'Ẩn đã lưu trữ';
$string['noaccountsavilable'] = 'Không có tài khoản thanh toán nào.';
$string['nocurrencysupported'] = 'Không có thanh toán nào bằng bất kỳ loại tiền tệ nào được hỗ trợ. Vui lòng đảm bảo rằng ít nhất một cổng thanh toán đã được bật.';
$string['nogateway'] = 'Không có cổng thanh toán nào có thể được sử dụng.';
$string['nogatewayselected'] = 'Bạn cần chọn một cổng thanh toán trước.';
$string['payments'] = 'Thanh toán';
$string['paymentaccount'] = 'Tài khoản thanh toán';
$string['paymentaccounts'] = 'Tài khoản thanh toán';
$string['privacy:metadata:database:payments'] = 'Thông tin về các thanh toán.';
$string['privacy:metadata:database:payments:amount'] = 'Số tiền cho thanh toán.';
$string['privacy:metadata:database:payments:currency'] = 'Tiền tệ của thanh toán.';
$string['privacy:metadata:database:payments:gateway'] = 'Cổng thanh toán được sử dụng cho thanh toán.';
$string['privacy:metadata:database:payments:timecreated'] = 'Thời gian khi thanh toán được thực hiện.';
$string['privacy:metadata:database:payments:timemodified'] = 'Thời gian khi bản ghi thanh toán được cập nhật lần cuối.';
$string['privacy:metadata:database:payments:userid'] = 'Người dùng thực hiện thanh toán.';
$string['restoreaccount'] = 'Khôi phục';
$string['selectpaymenttype'] = 'Chọn loại thanh toán';
$string['showarchived'] = 'Hiện đã lưu trữ';
$string['supportedcurrencies'] = 'Các loại tiền được hỗ trợ';
$string['surcharge'] = 'Phụ phí (phần trăm)';
$string['surcharge_desc'] = 'Phụ phí là một phần trăm bổ sung được tính cho người dùng chọn thanh toán bằng cổng thanh toán này.';