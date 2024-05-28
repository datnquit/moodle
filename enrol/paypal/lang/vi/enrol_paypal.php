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
 * Strings for component 'enrol_paypal', language 'en'.
 *
 * @package    enrol_paypal
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['assignrole'] = 'Gán vai trò';
$string['businessemail'] = 'Email doanh nghiệp PayPal';
$string['businessemail_desc'] = 'Địa chỉ email của tài khoản PayPal doanh nghiệp của bạn';
$string['cost'] = 'Chi phí ghi danh';
$string['costerror'] = 'Chi phí ghi danh không phải là số';
$string['costorkey'] = 'Vui lòng chọn một trong các phương pháp ghi danh sau.';
$string['currency'] = 'Tiền tệ';
$string['defaultrole'] = 'Vai trò mặc định khi gán';
$string['defaultrole_desc'] = 'Chọn vai trò sẽ được gán cho người dùng trong quá trình ghi danh bằng PayPal';
$string['enrolenddate'] = 'Ngày kết thúc';
$string['enrolenddate_help'] = 'Nếu bật, người dùng chỉ có thể được ghi danh cho đến ngày này.';
$string['enrolenddaterror'] = 'Ngày kết thúc ghi danh không thể sớm hơn ngày bắt đầu';
$string['enrolperiod'] = 'Thời hạn ghi danh';
$string['enrolperiod_desc'] = 'Thời gian mặc định mà ghi danh có hiệu lực. Nếu đặt là không, thời hạn ghi danh sẽ không giới hạn theo mặc định.';
$string['enrolperiod_help'] = 'Thời gian ghi danh có hiệu lực, bắt đầu từ thời điểm người dùng được ghi danh. Nếu tắt, thời hạn ghi danh sẽ không giới hạn.';
$string['enrolstartdate'] = 'Ngày bắt đầu';
$string['enrolstartdate_help'] = 'Nếu bật, người dùng chỉ có thể được ghi danh từ ngày này trở đi.';
$string['errdisabled'] = 'Plugin ghi danh PayPal đã bị tắt và không xử lý thông báo thanh toán.';
$string['erripninvalid'] = 'Thông báo thanh toán tức thời không được PayPal xác minh.';
$string['errpaypalconnect'] = 'Không thể kết nối tới {$a->url} để xác minh thông báo thanh toán tức thời: {$a->result}';
$string['expiredaction'] = 'Hành động khi hết hạn ghi danh';
$string['expiredaction_help'] = 'Chọn hành động để thực hiện khi ghi danh của người dùng hết hạn. Xin lưu ý rằng một số dữ liệu và cài đặt của người dùng sẽ bị xóa khỏi khóa học khi hủy ghi danh.';
$string['mailadmins'] = 'Thông báo cho quản trị viên';
$string['mailstudents'] = 'Thông báo cho sinh viên';
$string['mailteachers'] = 'Thông báo cho giáo viên';
$string['messageprovider:paypal_enrolment'] = 'Thông điệp ghi danh PayPal';
$string['nocost'] = 'Không có chi phí liên quan đến việc ghi danh vào khóa học này!';
$string['paypal:config'] = 'Cấu hình các phiên bản ghi danh PayPal';
$string['paypal:manage'] = 'Quản lý người dùng đã ghi danh';
$string['paypal:unenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['paypal:unenrolself'] = 'Tự hủy ghi danh khỏi khóa học';
$string['paypalaccepted'] = 'Chấp nhận thanh toán qua PayPal';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Module PayPal cho phép bạn thiết lập các khóa học có trả phí. Nếu chi phí cho bất kỳ khóa học nào là không, thì sinh viên sẽ không phải trả phí để tham gia. Có một chi phí toàn trang mà bạn thiết lập ở đây như một mặc định cho toàn bộ trang và sau đó là một thiết lập chi phí khóa học mà bạn có thể đặt cho từng khóa học riêng biệt. Chi phí khóa học sẽ ghi đè chi phí toàn trang.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Thông tin về các giao dịch PayPal cho các ghi danh PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Địa chỉ email hoặc ID tài khoản PayPal của người nhận thanh toán (tức là người bán).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'ID của khóa học được bán.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'ID của phiên bản ghi danh trong khóa học.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Tên đầy đủ của khóa học đã được bán ghi danh.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Ghi chú đã được người mua nhập vào trường ghi chú thanh toán trên trang web PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Tên đầy đủ của người mua.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'Trong trường hợp hoàn tiền, đảo ngược hoặc hủy đảo ngược, đây sẽ là ID giao dịch của giao dịch gốc.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Trạng thái của thanh toán.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Giữ thông tin về việc thanh toán được tài trợ bằng eCheck (echeck), hoặc được tài trợ bằng số dư PayPal, thẻ tín dụng, hoặc chuyển khoản ngay lập tức (instant).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Lý do tại sao trạng thái thanh toán đang chờ xử lý (nếu có).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Lý do tại sao trạng thái thanh toán là Đảo ngược, Hoàn tiền, Hủy đảo ngược, hoặc Bị từ chối (nếu trạng thái là một trong số đó).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Địa chỉ email chính của người nhận thanh toán (tức là người bán).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'ID tài khoản PayPal duy nhất của người nhận thanh toán (tức là người bán).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Số tiền thuế áp dụng cho thanh toán.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Thời gian Moodle được PayPal thông báo về thanh toán.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'ID giao dịch gốc của người bán cho thanh toán từ người mua, đối với trường hợp đã được đăng ký';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'ID của người dùng đã mua ghi danh khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Plugin ghi danh PayPal truyền dữ liệu người dùng từ Moodle tới trang web PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Địa chỉ của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Thành phố của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Quốc gia của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Chuỗi phân tách bằng dấu gạch ngang chứa ID của người dùng (người mua), ID của khóa học, ID của phiên bản ghi danh.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Địa chỉ email của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Tên của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Họ của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Tên đầy đủ của người mua.';
$string['processexpirationstask'] = 'Nhiệm vụ gửi thông báo hết hạn ghi danh PayPal';
$string['sendpaymentbutton'] = 'Gửi thanh toán qua PayPal';
$string['status'] = 'Cho phép ghi danh PayPal';
$string['status_desc'] = 'Cho phép người dùng sử dụng PayPal để ghi danh vào khóa học theo mặc định.';
$string['transactions'] = 'Giao dịch PayPal';
$string['unenrolselfconfirm'] = 'Bạn có thực sự muốn hủy ghi danh khỏi khóa học "{$a}"?';
