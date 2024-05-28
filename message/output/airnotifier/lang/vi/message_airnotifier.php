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
 * Strings for component 'message_airnotifier', language 'en'
 *
 * @package    message_airnotifier
 * @copyright  2012 Jerome Mouneyrac
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['airnotifieraccesskey'] = 'Khóa truy cập Airnotifier';
$string['airnotifierappname'] = 'Tên ứng dụng Airnotifier';
$string['airnotifierfielderror'] = 'Vui lòng loại bỏ bất kỳ khoảng trắng trống hoặc ký tự không cần thiết nào khỏi trường sau: {$a}';
$string['airnotifiermobileappname'] = 'Tên ứng dụng di động';
$string['airnotifierport'] = 'Cổng Airnotifier';
$string['airnotifierurl'] = 'URL Airnotifier';
$string['checkconfiguration'] = 'Kiểm tra và thử cấu hình thông báo đẩy';
$string['configairnotifierurl'] = 'URL máy chủ để kết nối để gửi thông báo đẩy.';
$string['configairnotifierport'] = 'Cổng sử dụng khi kết nối đến máy chủ airnotifier.';
$string['configairnotifieraccesskey'] = 'Khóa truy cập để kết nối đến máy chủ Airnotifier. Bạn có thể lấy một khóa truy cập bằng cách nhấp vào liên kết "Yêu cầu khóa truy cập" dưới đây (chỉ dành cho các trang web đã đăng ký) hoặc bằng cách tạo một tài khoản trên <a href="https://apps.moodle.com">Cổng Ứng dụng Moodle</a>.';
$string['configairnotifierappname'] = 'Tên ứng dụng định danh trong Airnotifier.';
$string['configairnotifiermobileappname'] = 'Định danh duy nhất của ứng dụng di động (thông thường là một cái gì đó như com.moodle.moodlemobile).';
$string['configured'] = 'Đã cấu hình';
$string['deletecheckdevicename'] = 'Xóa thiết bị của bạn: {$a->name}';
$string['deletedevice'] = 'Xóa thiết bị. Lưu ý rằng một ứng dụng có thể đăng ký lại thiết bị. Nếu thiết bị vẫn tiếp tục xuất hiện, vui lòng tắt nó.';
$string['devicetoken'] = 'Mã thông báo thiết bị';
$string['donotsendnotification'] = 'Không gửi thông báo';
$string['enableprocessor'] = 'Bật thông báo di động';
$string['encryptnotifications'] = 'Mã hóa thông báo';
$string['encryptnotifications_help'] = 'Bật mã hóa điểm cuối của thông báo ứng dụng. Một số dữ liệu có thể bị loại bỏ khỏi thông báo nếu không thể mã hóa được.';
$string['encryptprocessing'] = 'Đối với các thiết bị không hỗ trợ mã hóa';
$string['encryptprocessing_desc'] = 'Thông báo được mã hóa yêu cầu ít nhất Android 8 hoặc iOS 13 và Moodle App 4.2 hoặc mới hơn.';
$string['errorretrievingkey'] = 'Đã xảy ra lỗi khi lấy khóa truy cập. Trang web của bạn phải được đăng ký để sử dụng dịch vụ này. Nếu trang web của bạn đã được đăng ký, vui lòng thử cập nhật đăng ký của bạn. Hoặc bạn có thể lấy một khóa truy cập bằng cách tạo một tài khoản trên <a href="https://apps.moodle.com">Cổng Ứng dụng Moodle</a>.';
$string['keyretrievedsuccessfully'] = 'Khóa truy cập đã được lấy thành công. Để truy cập thống kê sử dụng ứng dụng Moodle, vui lòng tạo một tài khoản trên <a href="https://apps.moodle.com">Cổng Ứng dụng Moodle</a>.';
$string['messageprovidersempty'] = 'Không có thông báo di động nào được bật trong các thiết lập mặc định của thông báo.';
$string['messageproviderslow'] = 'Chỉ có một số thông báo di động được bật trong các thiết lập mặc định của thông báo.';
$string['moodleappsportallimitswarning'] = 'Vui lòng lưu ý rằng số lượng thiết bị người dùng được phép nhận thông báo phụ thuộc vào đăng ký ứng dụng Moodle của bạn. Để biết thêm thông tin, hãy truy cập <a href="{$a}" target="_blank">Cổng Ứng dụng Moodle</a>.';
$string['nodevices'] = 'Không có thiết bị đã đăng ký. Thiết bị sẽ tự động xuất hiện sau khi bạn cài đặt ứng dụng Moodle và thêm trang web này.';
$string['noemailevernotset'] = '$CFG->noemailever không được kích hoạt';
$string['noemaileverset'] = '$CFG->noemailever đã được kích hoạt trong config.php. Bạn cần đặt cài đặt này thành false hoặc xóa nó đi.';
$string['nopermissiontomanagedevices'] = 'Bạn không có quyền quản lý thiết bị.';
$string['notconfigured'] = 'Máy chủ Airnotifier chưa được cấu hình nên không thể gửi thông báo đẩy.';
$string['notificationsserverconfiguration'] = 'Cấu hình máy chủ thông báo (Airnotifier)';
$string['pluginname'] = 'Di động';
$string['privacy:appiddescription'] = 'Đây là một định danh cho ứng dụng đang được sử dụng.';
$string['privacy:enableddescription'] = 'Nếu thiết bị này đã được bật cho airnotifier.';
$string['privacy:metadata:enabled'] = 'Cho biết thiết bị airnotifier đã được bật.';
$string['privacy:metadata:date'] = 'Ngày gửi thông b

áo.';
$string['privacy:metadata:externalpurpose'] = 'Thông tin này được gửi đến một trang web bên ngoài để cuối cùng được gửi đến thiết bị di động của người dùng.';
$string['privacy:metadata:fullmessage'] = 'Toàn bộ thông báo.';
$string['privacy:metadata:notification'] = 'Nếu thông báo này là một thông báo.';
$string['privacy:metadata:smallmessage'] = 'Một phần của thông báo.';
$string['privacy:metadata:subject'] = 'Dòng chủ đề của thông báo.';
$string['privacy:metadata:tableexplanation'] = 'Thông tin thiết bị Airnotifier được lưu trữ ở đây.';
$string['privacy:metadata:userdeviceid'] = 'ID liên kết đến thiết bị di động của người dùng';
$string['privacy:metadata:userfromfullname'] = 'Tên đầy đủ của người dùng đã gửi thông báo.';
$string['privacy:metadata:userfromid'] = 'ID người dùng của tác giả của thông báo.';
$string['privacy:metadata:userid'] = 'ID của người dùng đã gửi thông báo.';
$string['privacy:metadata:username'] = 'Tên người dùng.';
$string['privacy:metadata:usersubsystem'] = 'Plugin này được kết nối với hệ thống người dùng.';
$string['privacy:subcontext'] = 'Thông báo Airnotifier';
$string['sitemustberegistered'] = 'Để sử dụng trường hợp Airnotifier công cộng, trang web của bạn phải được đăng ký. Hoặc bạn có thể lấy một khóa truy cập bằng cách tạo một tài khoản trên <a href="https://apps.moodle.com">Cổng Ứng dụng Moodle</a>.';
$string['showhide'] = 'Bật/Tắt thiết bị.';
$string['requestaccesskey'] = 'Yêu cầu khóa truy cập';
$string['sendnotificationnotenc'] = 'Gửi thông báo mà không mã hóa';
$string['sendtest'] = 'Gửi thông báo đẩy thử nghiệm tới thiết bị của tôi';
$string['sendtestconfirmation'] = 'Một thông báo đẩy thử nghiệm sẽ được gửi tới các thiết bị bạn sử dụng để kết nối với trang web này. Vui lòng đảm bảo rằng thiết bị của bạn đã kết nối với Internet và ứng dụng di động không được mở (vì thông báo đẩy chỉ được hiển thị khi nhận được ở nền).';
$string['serverconnectivityerror'] = 'Trang web này không thể kết nối với máy chủ thông báo {$a}';
$string['unknowndevice'] = 'Thiết bị không xác định';
$string['userdevices'] = 'Thiết bị người dùng';
$string['airnotifier:managedevice'] = 'Quản lý thiết bị';
$string['view_notification'] = 'Nhấn để xem';
