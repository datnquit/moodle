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
 * Strings for component 'auth_oauth2', language 'en'.
 *
 * @package   auth_oauth2
 * @copyright 2017 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['accountexists'] = 'Một người dùng đã tồn tại trên trang web này với tên người dùng này. Nếu đây là tài khoản của bạn, hãy đăng nhập bằng cách nhập tên người dùng và mật khẩu của bạn và thêm nó như một đăng nhập được liên kết qua trang tùy chọn của bạn.';
$string['auth_oauth2description'] = 'Xác thực dựa trên tiêu chuẩn OAuth 2';
$string['auth_oauth2settings'] = 'Cài đặt xác thực OAuth 2.';
$string['confirmaccountemail'] = 'Xin chào {$a->fullname},

Một tài khoản mới đã được yêu cầu tại \'{$a->sitename}\'
sử dụng địa chỉ email của bạn.

Để xác nhận tài khoản mới của bạn, vui lòng truy cập địa chỉ web này:

{$a->link}

Trong hầu hết các chương trình email, liên kết này sẽ xuất hiện dưới dạng liên kết màu xanh
bạn chỉ cần nhấp vào. Nếu không, hãy sao chép và dán địa chỉ vào dòng địa chỉ
ở đầu cửa sổ trình duyệt web của bạn.

Nếu bạn cần trợ giúp, vui lòng liên hệ với quản trị viên trang,
{$a->admin}

Nếu bạn không thực hiện điều này, có thể ai đó đang cố gắng xâm phạm tài khoản của bạn.
Vui lòng liên hệ với quản trị viên trang ngay lập tức.';
$string['confirmaccountemailsubject'] = '{$a}: xác nhận tài khoản';
$string['confirmationinvalid'] = 'Liên kết xác nhận không hợp lệ hoặc đã hết hạn. Vui lòng bắt đầu lại quy trình đăng nhập để tạo email xác nhận mới.';
$string['confirmationpending'] = 'Tài khoản này đang chờ xác nhận email.';
$string['confirmlinkedloginemail'] = 'Xin chào {$a->fullname},

Một yêu cầu đã được thực hiện để liên kết đăng nhập {$a->issuername}
{$a->linkedemail} với tài khoản của bạn tại \'{$a->sitename}\'
sử dụng địa chỉ email của bạn.

Để xác nhận yêu cầu này và liên kết các đăng nhập này, vui lòng truy cập địa chỉ web này:

{$a->link}

Trong hầu hết các chương trình email, liên kết này sẽ xuất hiện dưới dạng liên kết màu xanh
bạn chỉ cần nhấp vào. Nếu không, hãy sao chép và dán địa chỉ vào dòng địa chỉ
ở đầu cửa sổ trình duyệt web của bạn.

Nếu bạn cần trợ giúp, vui lòng liên hệ với quản trị viên trang,
{$a->admin}

Nếu bạn không thực hiện điều này, có thể ai đó đang cố gắng xâm phạm tài khoản của bạn.
Vui lòng liên hệ với quản trị viên trang ngay lập tức.';
$string['confirmlinkedloginemailsubject'] = '{$a}: xác nhận đăng nhập liên kết';
$string['createaccountswarning'] = 'Plugin xác thực này cho phép người dùng tạo tài khoản trên trang của bạn. Bạn có thể muốn bật cài đặt "authpreventaccountcreation" nếu bạn sử dụng plugin này.';
$string['createnewlinkedlogin'] = 'Liên kết tài khoản mới ({$a})';
$string['emailconfirmlink'] = 'Liên kết tài khoản của bạn';
$string['emailconfirmlinksent'] = '<p>Đã tìm thấy một tài khoản hiện có với địa chỉ email này nhưng chưa được liên kết.</p>
   <p>Tài khoản phải được liên kết trước khi bạn có thể đăng nhập.</p>
   <p>Một email đã được gửi đến địa chỉ của bạn tại <b>{$a}</b>.</p>
   <p>Nó chứa các hướng dẫn dễ dàng để liên kết tài khoản của bạn.</p>
   <p>Nếu bạn gặp bất kỳ khó khăn nào, hãy liên hệ với quản trị viên trang.</p>';
$string['emailpasswordchangeinfo'] = 'Xin chào {$a->firstname},

Ai đó (có thể là bạn) đã yêu cầu một mật khẩu mới cho tài khoản của bạn trên \'{$a->sitename}\'.

Tuy nhiên, mật khẩu của bạn không thể được đặt lại vì bạn đang sử dụng tài khoản của mình trên một trang web khác để đăng nhập.

Vui lòng đăng nhập như trước, sử dụng liên kết trên trang đăng nhập.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Thông tin thay đổi mật khẩu';
$string['info'] = 'Tài khoản bên ngoài';
$string['issuer'] = 'Dịch vụ OAuth 2';
$string['issuernologin'] = 'Nhà phát hành này không thể được sử dụng để đăng nhập';
$string['key'] = 'Khóa';
$string['linkedlogins'] = 'Đăng nhập liên kết';
$string['linkedloginshelp'] = 'Trợ giúp với đăng nhập liên kết';
$string['loggedin'] = 'Người dùng đã được xác thực thành công với nhà cung cấp.';
$string['loginerror_userincomplete'] = 'Thông tin người dùng trả về không chứa tên người dùng và địa chỉ email. Dịch vụ OAuth 2 có thể được cấu hình không chính xác.';
$string['loginerror_nouserinfo'] = 'Không có thông tin người dùng nào được trả về. Dịch vụ OAuth 2 có thể được cấu hình không chính xác.';
$string['loginerror_invaliddomain'] = 'Địa chỉ email không được phép trên trang này.';
$string['loginerror_authenticationfailed'] = 'Quá trình xác thực thất bại.';
$string['loginerror_cannotcreateaccounts'] = 'Không thể tìm thấy tài khoản với địa chỉ email của bạn.';
$string['noconfiguredidps'] = 'Không có nhà cung cấp OAuth2 nào được cấu hình.';
$string['noissuersavailable'] = 'Không có dịch vụ OAuth 2 nào được cấu hình cho phép bạn liên kết tài khoản đăng nhập.';
$string['notloggedindebug'] = 'Nỗ lực đăng nhập không thành công. Lý do: {$a}';
$string['notwhileloggedinas'] = 'Không thể quản lý đăng nhập liên kết trong khi đăng nhập dưới tư cách người dùng khác.';
$string['oauth2:managelinkedlogins'] = 'Quản lý tài khoản đăng nhập liên kết của riêng mình';
$string['notenabled'] = 'Xin lỗi, plugin xác thực OAuth 2 không được kích hoạt';
$string['plugindescription'] = 'Plugin xác thực này hiển thị danh sách các nhà cung cấp danh tính được cấu hình trên trang đăng nhập. Chọn một nhà cung cấp danh tính cho phép người dùng đăng nhập bằng thông tin xác thực của họ từ nhà cung cấp OAuth 2.';
$string['pluginname'] = 'OAuth 2';
$string['alreadylinked'] = 'Tài khoản bên ngoài này đã được liên kết với một tài khoản trên trang này';
$string['privacy:metadata:auth_oauth2'] = 'Xác thực OAuth 2';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Plugin này được kết nối với hệ thống xác thực.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Token xác nhận.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Thời gian hết hạn của token xác nhận.';
$string['privacy:metadata:auth_oauth2:email'] = 'Email bên ngoài được ánh xạ đến tài khoản này.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'ID của nhà phát hành OAuth 2 cho đăng nhập OAuth 2 này';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'Các tài khoản OAuth 2 được liên kết với tài khoản Moodle của người dùng.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Thời gian tạo tài khoản người dùng được liên kết với đăng nhập OAuth 2.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Thời gian bản ghi này được sửa đổi.';
$string['privacy:metadata:auth_oauth2:userid'] = 'ID của tài khoản người dùng mà đăng nhập OAuth 2 được liên kết.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'ID của người dùng đã sửa đổi tài khoản này.';
$string['privacy:metadata:auth_oauth2:username'] = 'Tên người dùng bên ngoài được ánh xạ đến tài khoản này.';
$string['testidplogin'] = 'Thử đăng nhập với:';
$string['userinfo'] = 'Dữ liệu người dùng từ nhà cung cấp:';
$string['value'] = 'Giá trị';
