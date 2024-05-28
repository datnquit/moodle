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
 * Strings for component 'tool_messageinbound', language 'en'
 *
 * @package    tool_messageinbound
 * @copyright  2014 Andrew Nicols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['classname'] = 'Tên lớp';
$string['component'] = 'Thành phần';
$string['configmessageinboundhost'] = 'Địa chỉ của máy chủ mà Moodle sẽ kiểm tra thư. Để chỉ định một cổng không mặc định, sử dụng [server]:[port], ví dụ mail.example.com:993. Nếu không chỉ định cổng, cổng mặc định cho loại máy chủ thư sẽ được sử dụng.';
$string['defaultexpiration'] = 'Thời gian hết hạn địa chỉ mặc định';
$string['defaultexpiration_help'] = 'Khi một địa chỉ email được tạo bởi trình xử lý, nó có thể được thiết lập tự động hết hạn sau một khoảng thời gian, do đó nó không thể được sử dụng nữa. Khuyến khích thiết lập một khoảng thời gian hết hạn.';
$string['description'] = 'Mô tả';
$string['domain'] = 'Tên miền email';
$string['edit'] = 'Chỉnh sửa';
$string['edithandler'] = 'Chỉnh sửa cài đặt cho trình xử lý {$a}';
$string['editinghandler'] = 'Đang chỉnh sửa {$a}';
$string['enabled'] = 'Đã bật';
$string['fixedvalidateaddress'] = 'Xác thực địa chỉ người gửi';
$string['fixedvalidateaddress_help'] = 'Bạn không thể thay đổi xác thực địa chỉ cho trình xử lý này. Điều này có thể do trình xử lý yêu cầu một cài đặt cụ thể.';
$string['fixedenabled_help'] = 'Bạn không thể thay đổi trạng thái của trình xử lý này. Điều này có thể do trình xử lý được yêu cầu bởi các trình xử lý khác.';
$string['handlerdisabled'] = 'Trình xử lý email bạn cố gắng liên hệ đã bị vô hiệu hóa. Không thể xử lý tin nhắn vào thời điểm này.';
$string['incomingmailconfiguration'] = 'Cấu hình thư đến';
$string['incomingmailserversettings'] = 'Cài đặt máy chủ thư đến';
$string['incomingmailserversettings_desc'] = 'Moodle có khả năng kết nối với các máy chủ IMAP được cấu hình phù hợp. Bạn có thể chỉ định các cài đặt sử dụng để kết nối với máy chủ IMAP của bạn ở đây.';
$string['invalid_recipient_handler'] = 'Nếu một tin nhắn hợp lệ được nhận nhưng người gửi không thể xác thực, tin nhắn sẽ được lưu trữ trên máy chủ email và người dùng sẽ được liên hệ bằng địa chỉ email trong hồ sơ người dùng của họ. Người dùng có cơ hội trả lời để xác nhận tính xác thực của tin nhắn gốc.

Trình xử lý này xử lý các trả lời đó.

Không thể vô hiệu hóa xác thực người gửi của trình xử lý này vì người dùng có thể trả lời từ một địa chỉ email không chính xác nếu cấu hình khách hàng email của họ không chính xác.';
$string['invalid_recipient_handler_name'] = 'Trình xử lý người gửi không hợp lệ';
$string['invalidrecipientdescription'] = 'Tin nhắn "{$a->subject}" không thể xác thực, vì nó được gửi từ một địa chỉ email khác với trong hồ sơ người dùng của bạn. Để tin nhắn được xác thực, bạn cần trả lời tin nhắn này.';
$string['invalidrecipientdescriptionhtml'] = 'Tin nhắn "{$a->subject}" không thể xác thực, vì nó được gửi từ một địa chỉ email khác với trong hồ sơ người dùng của bạn. Để tin nhắn được xác thực, bạn cần trả lời tin nhắn này.';
$string['invalidrecipientfinal'] = 'Tin nhắn "{$a->subject}" không thể xác thực. Vui lòng kiểm tra rằng bạn đang gửi tin nhắn từ cùng một địa chỉ email như trong hồ sơ của bạn.';
$string['mailbox'] = 'Tên hộp thư';
$string['mailboxconfiguration'] = 'Cấu hình hộp thư';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Cài đặt thư';
$string['message_handlers'] = 'Trình xử lý tin nhắn';
$string['messageprocessingerror'] = 'Bạn đã gửi một email "{$a->subject}" gần đây nhưng rất tiếc không thể xử lý được.

Chi tiết của lỗi được hiển thị bên dưới.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Bạn đã gửi một email "{$a->subject}" gần đây nhưng rất tiếc không thể xử lý được.</p>
<p>Chi tiết của lỗi được hiển thị bên dưới.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'Email "{$a->subject}" không thể xử lý được. Lỗi như sau: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'Email "{$a->subject}" không thể xử lý được. Liên hệ với quản trị viên của bạn để biết thêm thông tin.';
$string['messageprocessingsuccess'] = '{$a->plain}

Nếu bạn không muốn nhận các thông báo này trong tương lai, bạn có thể chỉnh sửa các tùy chọn nhắn tin cá nhân của bạn bằng cách mở {$a->messagepreferencesurl} trong trình duyệt của bạn.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>Nếu bạn không muốn nhận các thông báo này trong tương lai, bạn có thể <a href="{$a->messagepreferencesurl}">chỉnh sửa các tùy chọn nhắn tin cá nhân</a>.</p>';
$string['messageinbound'] = 'Tin nhắn đến';
$string['messageinboundenabled'] = 'Bật xử lý thư đến';
$string['messageinboundenabled_desc'] = 'Xử lý thư đến phải được bật để tin nhắn được gửi với thông tin phù hợp.';
$string['messageinboundgeneralconfiguration'] = 'Cấu hình chung';
$string['messageinboundgeneralconfiguration_desc'] = 'Xử lý tin nhắn đến cho phép bạn nhận và xử lý email trong Moodle. Điều này có các ứng dụng như gửi trả lời email đến các bài đăng trên diễn đàn hoặc thêm tệp vào tệp cá nhân của người dùng.';
$string['messageinboundhost'] = 'Máy chủ thư đến';
$string['messageinboundhostoauth_help'] = 'Dịch vụ OAuth 2 để sử dụng để truy cập máy chủ IMAP, sử dụng xác thực XOAUTH2. Nếu dịch vụ chưa tồn tại, bạn sẽ cần tạo nó.';
$string['messageinboundhostpass'] = 'Mật khẩu';
$string['messageinboundhostpass_desc'] = 'Đây là mật khẩu mà nhà cung cấp dịch vụ của bạn sẽ cung cấp để đăng nhập vào tài khoản email của bạn.';
$string['messageinboundhostssl'] = 'Sử dụng SSL';
$string['messageinboundhostssl_desc'] = 'Một số máy chủ thư hỗ trợ mức độ bảo mật bổ sung bằng cách mã hóa giao tiếp giữa Moodle và máy chủ của bạn. Chúng tôi khuyến nghị sử dụng mã hóa SSL này nếu máy chủ của bạn hỗ trợ.';
$string['messageinboundhosttype'] = 'Loại máy chủ';
$string['messageinboundhostuser'] = 'Tên người dùng';
$string['messageinboundhostuser_desc'] = 'Đây là tên người dùng mà nhà cung cấp dịch vụ của bạn sẽ cung cấp để đăng nhập vào tài khoản email của bạn.';
$string['messageinboundmailboxconfiguration_desc'] = 'Khi tin nhắn được gửi đi, chúng khớp với định dạng address+data@example.com. Để tạo đáng tin cậy các địa chỉ từ Moodle, vui lòng chỉ định địa chỉ mà bạn thường sử dụng trước ký hiệu @ và tên miền sau ký hiệu @ riêng biệt. Ví dụ, tên hộp thư trong ví dụ sẽ là "address", và tên miền email sẽ là "example.com". Bạn nên sử dụng một tài khoản email riêng biệt cho mục đích này.';
$string['messageprovider:invalidrecipienthandler'] = 'Tin nhắn để xác nhận rằng một tin nhắn đến là từ bạn';
$string['messageprovider:messageprocessingerror'] = 'Cảnh báo khi một tin nhắn đến không thể xử lý';
$string['messageprovider:messageprocessingsuccess'] = 'Xác nhận rằng một tin nhắn đã được xử lý thành công';
$string['noencryption'] = 'Tắt - Không mã hóa';
$string['noexpiry'] = 'Không hết hạn';
$string['oldmessagenotfound'] = 'Bạn đã cố gắng xác thực thủ công một tin nhắn, nhưng tin nhắn không thể được tìm thấy. Điều này có thể là do nó đã được xử lý hoặc vì tin nhắn đã hết hạn.';
$string['oneday'] = 'Một ngày';
$string['onehour'] = 'Một giờ';
$string['oneweek'] = 'Một tuần';
$string['oneyear'] = 'Một năm';
$string['pluginname'] = 'Cấu hình tin nhắn đến';
$string['privacy:metadata:coreuserkey'] = 'Khóa của người dùng để xác thực email nhận được';
$string['privacy:metadata:messagelist'] = 'Danh sách các định danh tin nhắn không thể xác thực và cần sự ủy quyền thêm';
$string['privacy:metadata:messagelist:address'] = 'Địa chỉ nơi email được gửi đến';
$string['privacy:metadata:messagelist:messageid'] = 'ID của tin nhắn';
$string['privacy:metadata:messagelist:timecreated'] = 'Thời gian khi bản ghi được tạo';
$string['privacy:metadata:messagelist:userid'] = 'ID của người dùng cần phê duyệt tin nhắn';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Xác thực địa chỉ người gửi';
$string['name'] = 'Tên';
$string['ssl'] = 'SSL (Tự động phát hiện phiên bản SSL)';
$string['sslv2'] = 'SSLv2 (Buộc phiên bản SSL 2)';
$string['sslv3'] = 'SSLv3 (Buộc phiên bản SSL 3)';
$string['taskcleanup'] = 'Dọn dẹp email đến chưa xác thực';
$string['taskpickup'] = 'Nhận email đến';
$string['tls'] = 'TLS (TLS; khởi động thông qua thương lượng cấp độ giao thức qua kênh không mã hóa; cách khuyến nghị để bắt đầu kết nối bảo mật)';
$string['tlsv1'] = 'TLSv1 (kết nối trực tiếp tới máy chủ TLS phiên bản 1.x)';
$string['validateaddress'] = 'Xác thực địa chỉ email người gửi';
$string['validateaddress_help'] = 'Khi một tin nhắn được nhận từ một người dùng, Moodle sẽ cố gắng xác thực tin nhắn bằng cách so sánh địa chỉ email của người gửi với địa chỉ email trong hồ sơ người dùng của họ.

Nếu người gửi không khớp, thì người dùng sẽ nhận được thông báo để xác nhận rằng họ thực sự đã gửi email.

Nếu cài đặt này bị vô hiệu hóa, thì địa chỉ email của người gửi sẽ không được kiểm tra.';
