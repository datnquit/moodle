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
 * Strings for component 'auth_mnet', language 'en'.
 *
 * @package   auth_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['auth_mnet_auto_add_remote_users'] = 'Khi được đặt là Có, một bản ghi người dùng cục bộ sẽ được tự động tạo khi một người dùng từ xa đăng nhập lần đầu tiên.';
$string['auth_mnetdescription'] = 'Người dùng được xác thực theo mạng lưới tin cậy được định nghĩa trong cài đặt Mạng Moodle của bạn.';
$string['auth_mnet_roamin'] = 'Người dùng của các máy chủ này có thể đăng nhập vào trang web của bạn';
$string['auth_mnet_roamout'] = 'Người dùng của bạn có thể đăng nhập vào các máy chủ này';
$string['auth_mnet_rpc_negotiation_timeout'] = 'Thời gian chờ trong giây cho việc xác thực qua giao thức XMLRPC.';
$string['auto_add_remote_users'] = 'Tự động thêm người dùng từ xa';
$string['crontask'] = 'Xử lý nền cho xác thực MNET';
$string['rpc_negotiation_timeout'] = 'Thời gian chờ đàm phán RPC';
$string['sso_idp_description'] = 'Xuất bản dịch vụ này để cho phép người dùng của bạn đăng nhập vào trang {$a} mà không cần phải đăng nhập lại ở đó. <ul><li><em>Phụ thuộc</em>: Bạn cũng phải <strong>đăng ký</strong> dịch vụ SSO (Nhà cung cấp dịch vụ) trên trang {$a}.</li></ul><br />Đăng ký dịch vụ này để cho phép người dùng đã xác thực từ trang {$a} truy cập vào trang của bạn mà không cần phải đăng nhập lại. <ul><li><em>Phụ thuộc</em>: Bạn cũng phải <strong>xuất bản</strong> dịch vụ SSO (Nhà cung cấp dịch vụ) đến trang {$a}.</li></ul><br />';
$string['sso_idp_name'] = 'SSO (Nhà cung cấp danh tính)';
$string['sso_mnet_login_refused'] = 'Tên người dùng {$a->user} không được phép đăng nhập từ {$a->host}.';
$string['sso_sp_description'] = 'Xuất bản dịch vụ này để cho phép người dùng đã xác thực từ trang {$a} truy cập vào trang của bạn mà không cần phải đăng nhập lại. <ul><li><em>Phụ thuộc</em>: Bạn cũng phải <strong>đăng ký</strong> dịch vụ SSO (Nhà cung cấp danh tính) trên trang {$a}.</li></ul><br />Đăng ký dịch vụ này để cho phép người dùng của bạn đăng nhập vào trang {$a} mà không cần phải đăng nhập lại ở đó. <ul><li><em>Phụ thuộc</em>: Bạn cũng phải <strong>xuất bản</strong> dịch vụ SSO (Nhà cung cấp danh tính) đến trang {$a}.</li></ul><br />';
$string['sso_sp_name'] = 'SSO (Nhà cung cấp dịch vụ)';
$string['pluginname'] = 'Xác thực MNet';
$string['privacy:metadata:external:mahara'] = 'Plugin này có thể gửi dữ liệu ra ngoài tới ứng dụng Mahara liên kết.';
$string['privacy:metadata:external:moodle'] = 'Plugin này có thể gửi dữ liệu ra ngoài tới ứng dụng Moodle liên kết.';
$string['privacy:metadata:mnet_external:address'] = 'Địa chỉ của người dùng.';
$string['privacy:metadata:mnet_external:alternatename'] = 'Tên thay thế của người dùng.';
$string['privacy:metadata:mnet_external:autosubscribe'] = 'Một tùy chọn nếu người dùng nên tự động đăng ký vào các diễn đàn mà họ đăng bài.';
$string['privacy:metadata:mnet_external:calendartype'] = 'Tùy chọn của người dùng về loại lịch sử dụng.';
$string['privacy:metadata:mnet_external:city'] = 'Thành phố của người dùng.';
$string['privacy:metadata:mnet_external:country'] = 'Quốc gia mà người dùng đang ở.';
$string['privacy:metadata:mnet_external:currentlogin'] = 'Lần đăng nhập hiện tại của người dùng này.';
$string['privacy:metadata:mnet_external:department'] = 'Phòng ban mà người dùng này thuộc về.';
$string['privacy:metadata:mnet_external:description'] = 'Chi tiết chung về người dùng này.';
$string['privacy:metadata:mnet_external:email'] = 'Địa chỉ email để liên hệ.';
$string['privacy:metadata:mnet_external:emailstop'] = 'Tùy chọn dừng gửi email cho người dùng.';
$string['privacy:metadata:mnet_external:firstaccess'] = 'Thời gian người dùng này lần đầu truy cập trang.';
$string['privacy:metadata:mnet_external:firstname'] = 'Tên của người dùng.';
$string['privacy:metadata:mnet_external:firstnamephonetic'] = 'Chi tiết phát âm tên của người dùng.';
$string['privacy:metadata:mnet_external:id'] = 'ID người dùng';
$string['privacy:metadata:mnet_external:idnumber'] = 'Số nhận dạng được cung cấp bởi tổ chức';
$string['privacy:metadata:mnet_external:imagealt'] = 'Văn bản thay thế cho hình ảnh của người dùng.';
$string['privacy:metadata:mnet_external:institution'] = 'Tổ chức mà người dùng này là thành viên.';
$string['privacy:metadata:mnet_external:lang'] = 'Tùy chọn ngôn ngữ hiển thị của người dùng.';
$string['privacy:metadata:mnet_external:lastaccess'] = 'Thời gian người dùng truy cập trang lần cuối.';
$string['privacy:metadata:mnet_external:lastlogin'] = 'Lần đăng nhập cuối của người dùng này.';
$string['privacy:metadata:mnet_external:lastname'] = 'Họ của người dùng.';
$string['privacy:metadata:mnet_external:lastnamephonetic'] = 'Chi tiết phát âm họ của người dùng.';
$string['privacy:metadata:mnet_external:maildigest'] = 'Cài đặt email digest cho người dùng này.';
$string['privacy:metadata:mnet_external:maildisplay'] = 'Tùy chọn của người dùng về việc hiển thị địa chỉ email của họ cho người dùng khác.';
$string['privacy:metadata:mnet_external:middlename'] = 'Tên đệm của người dùng';
$string['privacy:metadata:mnet_external:phone1'] = 'Số điện thoại của người dùng.';
$string['privacy:metadata:mnet_external:phone2'] = 'Số điện thoại bổ sung của người dùng.';
$string['privacy:metadata:mnet_external:picture'] = 'Chi tiết hình ảnh liên quan đến người dùng này.';
$string['privacy:metadata:mnet_external:policyagreed'] = 'Một cờ để xác định nếu người dùng đã đồng ý với chính sách của trang web.';
$string['privacy:metadata:mnet_external:suspended'] = 'Một cờ để hiển thị nếu người dùng đã bị đình chỉ trên hệ thống này.';
$string['privacy:metadata:mnet_external:timezone'] = 'Múi giờ của người dùng';
$string['privacy:metadata:mnet_external:trackforums'] = 'Tùy chọn về việc theo dõi các diễn đàn của người dùng.';
$string['privacy:metadata:mnet_external:trustbitmask'] = 'Mặt nạ tin cậy';
$string['privacy:metadata:mnet_external:username'] = 'Tên người dùng cho người dùng này.';
$string['privacy:metadata:mnet_log'] = 'Chi tiết các hành động từ xa được thực hiện bởi người dùng cục bộ đăng nhập vào hệ thống từ xa.';
$string['privacy:metadata:mnet_log:action'] = 'Hành động được thực hiện bởi người dùng.';
$string['privacy:metadata:mnet_log:cmid'] = 'ID của mô-đun khóa học.';
$string['privacy:metadata:mnet_log:course'] = 'ID khóa học hệ thống từ xa nơi xảy ra hành động.';
$string['privacy:metadata:mnet_log:coursename'] = 'Tên đầy đủ của khóa học hệ thống từ xa nơi xảy ra hành động.';
$string['privacy:metadata:mnet_log:hostid'] = 'ID MNet của hệ thống từ xa.';
$string['privacy:metadata:mnet_log:info'] = 'Thông tin bổ sung về hành động.';
$string['privacy:metadata:mnet_log:ip'] = 'Địa chỉ IP được sử dụng tại thời điểm hành động xảy ra.';
$string['privacy:metadata:mnet_log:module'] = 'Mô-đun hệ thống từ xa nơi xảy ra hành động.';
$string['privacy:metadata:mnet_log:remoteid'] = 'ID từ xa của người dùng thực hiện hành động trong hệ thống từ xa.';
$string['privacy:metadata:mnet_log:time'] = 'Thời gian khi hành động xảy ra.';
$string['privacy:metadata:mnet_log:url'] = 'URL của hệ thống từ xa nơi xảy ra hành động.';
$string['privacy:metadata:mnet_log:userid'] = 'ID cục bộ của người dùng thực hiện hành động trong hệ thống từ xa.';
$string['privacy:metadata:mnet_session'] = 'Chi tiết của mỗi phiên người dùng MNet trong hệ thống từ xa. Dữ liệu được lưu trữ tạm thời.';
$string['privacy:metadata:mnet_session:expires'] = 'Thời gian khi phiên hết hạn.';
$string['privacy:metadata:mnet_session:mnethostid'] = 'ID MNet của hệ thống từ xa.';
$string['privacy:metadata:mnet_session:token'] = 'Mã nhận dạng phiên duy nhất';
$string['privacy:metadata:mnet_session:useragent'] = 'User agent được sử dụng để truy cập hệ thống từ xa';
$string['privacy:metadata:mnet_session:userid'] = 'ID của người dùng nhảy vào hệ thống từ xa.';
$string['privacy:metadata:mnet_session:username'] = 'Tên người dùng của người dùng nhảy vào hệ thống từ xa.';
$string['unknownhost'] = 'Máy chủ không xác định';
