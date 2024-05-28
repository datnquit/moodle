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
 * Strings for component 'auth_ldap', language 'en'.
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['auth_ldap_ad_create_req'] = 'Không thể tạo tài khoản mới trong Active Directory. Hãy chắc chắn rằng bạn đáp ứng tất cả các yêu cầu để điều này hoạt động (kết nối LDAPS, người dùng kết nối có quyền phù hợp, v.v.).';
$string['auth_ldap_attrcreators'] = 'Danh sách các nhóm hoặc ngữ cảnh mà các thành viên được phép tạo thuộc tính. Tách nhiều nhóm bằng \';\'. Thường là cái gì đó như \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Người tạo thuộc tính';
$string['auth_ldap_auth_user_create_key'] = 'Tạo người dùng bên ngoài';
$string['auth_ldap_bind_dn'] = 'Nếu bạn muốn sử dụng người dùng kết nối để tìm kiếm người dùng, hãy chỉ định ở đây. Ví dụ như \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Tên phân biệt';
$string['auth_ldap_bind_pw'] = 'Mật khẩu cho người dùng kết nối.';
$string['auth_ldap_bind_pw_key'] = 'Mật khẩu';
$string['auth_ldap_bind_settings'] = 'Cài đặt kết nối';
$string['auth_ldap_contexts'] = 'Danh sách các ngữ cảnh nơi người dùng được đặt. Tách các ngữ cảnh khác nhau bằng \';\'. Ví dụ: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Ngữ cảnh';
$string['auth_ldap_create_context'] = 'Nếu bạn bật tạo người dùng với xác nhận qua email, hãy chỉ định ngữ cảnh nơi người dùng được tạo. Ngữ cảnh này nên khác với các người dùng khác để ngăn ngừa các vấn đề bảo mật. Bạn không cần thêm ngữ cảnh này vào biến ldap_context, Moodle sẽ tự động tìm kiếm người dùng từ ngữ cảnh này.<br /><b>Lưu ý!</b> Bạn phải sửa đổi phương thức user_create() trong tệp auth/ldap/auth.php để làm việc tạo người dùng hoạt động';
$string['auth_ldap_create_context_key'] = 'Ngữ cảnh cho người dùng mới';
$string['auth_ldap_create_error'] = 'Lỗi khi tạo người dùng trong LDAP.';
$string['auth_ldapdescription'] = 'Phương pháp này cung cấp xác thực đối với máy chủ LDAP bên ngoài. Nếu tên người dùng và mật khẩu được cung cấp là hợp lệ, Moodle sẽ tạo một mục người dùng mới trong cơ sở dữ liệu của nó. Plugin này có thể đọc các thuộc tính người dùng từ LDAP và điền trước các trường mong muốn trong Moodle. Đối với các lần đăng nhập tiếp theo, chỉ tên người dùng và mật khẩu sẽ được kiểm tra.';
$string['auth_ldap_expiration_desc'] = 'Chọn \'{$a->no}\' để tắt kiểm tra mật khẩu hết hạn hoặc \'{$a->ldapserver}\' để đọc thời gian hết hạn mật khẩu trực tiếp từ máy chủ LDAP.';
$string['auth_ldap_expiration_key'] = 'Hết hạn';
$string['auth_ldap_expiration_warning_desc'] = 'Số ngày trước khi cảnh báo hết hạn mật khẩu được đưa ra.';
$string['auth_ldap_expiration_warning_key'] = 'Cảnh báo hết hạn';
$string['auth_ldap_expireattr_desc'] = 'Tùy chọn: Ghi đè thuộc tính LDAP lưu trữ thời gian hết hạn mật khẩu.';
$string['auth_ldap_expireattr_key'] = 'Thuộc tính hết hạn';
$string['auth_ldapextrafields'] = 'Những trường này là tùy chọn. Bạn có thể chọn điền trước một số trường người dùng Moodle với thông tin từ <b>các trường LDAP</b> mà bạn chỉ định ở đây. <p>Nếu bạn để trống những trường này, thì không có gì sẽ được chuyển từ LDAP và các giá trị mặc định của Moodle sẽ được sử dụng thay thế.</p><p>Trong mọi trường hợp, người dùng sẽ có thể chỉnh sửa tất cả các trường này sau khi họ đăng nhập.</p>';
$string['auth_ldap_graceattr_desc'] = 'Tùy chọn: Ghi đè thuộc tính đăng nhập ân hạn';
$string['auth_ldap_gracelogin_key'] = 'Thuộc tính đăng nhập ân hạn';
$string['auth_ldap_gracelogins_desc'] = 'Bật hỗ trợ đăng nhập ân hạn LDAP. Sau khi mật khẩu hết hạn, người dùng có thể đăng nhập cho đến khi số lần đăng nhập ân hạn là 0. Bật cài đặt này sẽ hiển thị thông báo đăng nhập ân hạn nếu mật khẩu đã hết hạn.';
$string['auth_ldap_gracelogins_key'] = 'Đăng nhập ân hạn';
$string['auth_ldap_groupecreators'] = 'Danh sách các nhóm hoặc ngữ cảnh mà các thành viên được phép tạo nhóm. Tách nhiều nhóm bằng \';\'. Thường là cái gì đó như \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Người tạo nhóm';
$string['auth_ldap_host_url'] = 'Chỉ định máy chủ LDAP dưới dạng URL như \'ldap://ldap.myorg.com/\' hoặc \'ldaps://ldap.myorg.com/\'. Tách nhiều máy chủ bằng \';\' để hỗ trợ chuyển đổi dự phòng.';
$string['auth_ldap_host_url_key'] = 'URL máy chủ';
$string['auth_ldap_changepasswordurl_key'] = 'URL thay đổi mật khẩu';
$string['auth_ldap_ldap_encoding'] = 'Mã hóa được sử dụng bởi máy chủ LDAP, có thể là utf-8. Nếu chọn LDAP v2, Active Directory sẽ sử dụng mã hóa được cấu hình của nó, như cp1252 hoặc cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'Mã hóa LDAP';
$string['auth_ldap_login_settings'] = 'Cài đặt đăng nhập';
$string['auth_ldap_memberattribute'] = 'Tùy chọn: Ghi đè thuộc tính thành viên người dùng, khi người dùng thuộc về một nhóm. Thường là \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Ghi đè cách xử lý giá trị thuộc tính thành viên';
$string['auth_ldap_memberattribute_isdn_key'] = 'Thuộc tính thành viên sử dụng dn';
$string['auth_ldap_memberattribute_key'] = 'Thuộc tính thành viên';
$string['auth_ldap_noconnect'] = 'Mô-đun LDAP không thể kết nối với máy chủ: {$a}';
$string['auth_ldap_noconnect_all'] = 'Mô-đun LDAP không thể kết nối với bất kỳ máy chủ nào: {$a}';
$string['auth_ldap_noextension'] = 'Mô-đun PHP LDAP dường như không có mặt. Vui lòng đảm bảo nó được cài đặt và kích hoạt nếu bạn muốn sử dụng plugin xác thực này.';
$string['auth_ldap_no_mbstring'] = 'Bạn cần tiện ích mở rộng mbstring để tạo người dùng trong Active Directory.';
$string['auth_ldapnotinstalled'] = 'Không thể sử dụng xác thực LDAP. Mô-đun PHP LDAP chưa được cài đặt.';
$string['auth_ldap_objectclass'] = 'Tùy chọn: Ghi đè objectClass được sử dụng để đặt tên/tìm kiếm người dùng trên ldap_user_type. Thường bạn không cần thay đổi điều này.';
$string['auth_ldap_objectclass_key'] = 'Lớp đối tượng';
$string['auth_ldap_opt_deref'] = 'Xác định cách xử lý các bí danh trong quá trình tìm kiếm. Chọn một trong các giá trị sau: "Không" (LDAP_DEREF_NEVER) hoặc "Có" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Giải tham chiếu bí danh';
$string['auth_ldap_passtype'] = 'Chỉ định định dạng của mật khẩu mới hoặc thay đổi trong máy chủ LDAP.';
$string['auth_ldap_passtype_key'] = 'Định dạng mật khẩu';
$string['auth_ldap_passwdexpire_settings'] = 'Cài đặt hết hạn mật khẩu LDAP';
$string['auth_ldap_preventpassindb'] = 'Chọn có để ngăn mật khẩu được lưu trữ trong cơ sở dữ liệu của Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Ngăn chặn lưu trữ mật khẩu';
$string['auth_ldap_rolecontext'] = 'Ngữ cảnh {$a->localname}';
$string['auth_ldap_rolecontext_help'] = 'Ngữ cảnh LDAP được sử dụng để chọn cho ánh xạ <i>{$a->localname}</i>. Tách nhiều nhóm bằng \';\'. Thường là cái gì đó như "cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with-role-groups,o=myorg".';
$string['auth_ldap_search_sub'] = 'Tìm kiếm người dùng từ các ngữ cảnh con.';
$string['auth_ldap_search_sub_key'] = 'Tìm kiếm ngữ cảnh con';
$string['auth_ldap_server_settings'] = 'Cài đặt máy chủ LDAP';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() không hỗ trợ loại người dùng đã chọn: {$a}';
$string['auth_ldap_update_userinfo'] = 'Cập nhật thông tin người dùng (tên, họ, địa chỉ..) từ LDAP sang Moodle. Chỉ định cài đặt "Ánh xạ dữ liệu" theo nhu cầu của bạn.';
$string['auth_ldap_user_attribute'] = 'Tùy chọn: Ghi đè thuộc tính được sử dụng để đặt tên/tìm kiếm người dùng. Thường là \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Thuộc tính người dùng';
$string['auth_ldap_suspended_attribute'] = 'Tùy chọn: Khi cung cấp thuộc tính này sẽ được sử dụng để bật/tạm ngưng tài khoản người dùng được tạo cục bộ.';
$string['auth_ldap_suspended_attribute_key'] = 'Thuộc tính bị tạm ngưng';
$string['auth_ldap_user_exists'] = 'Tên người dùng LDAP đã tồn tại.';
$string['auth_ldap_user_settings'] = 'Cài đặt tra cứu người dùng';
$string['auth_ldap_user_type'] = 'Chọn cách người dùng được lưu trữ trong LDAP. Cài đặt này cũng chỉ định cách hết hạn đăng nhập, đăng nhập ân hạn và tạo người dùng sẽ hoạt động.';
$string['auth_ldap_user_type_key'] = 'Loại người dùng';
$string['auth_ldap_usertypeundefined'] = 'config.user_type không được định nghĩa hoặc hàm ldap_expirationtime2unix không hỗ trợ loại đã chọn!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type không được định nghĩa hoặc hàm ldap_unixi2expirationtime không hỗ trợ loại đã chọn!';
$string['auth_ldap_version'] = 'Phiên bản của giao thức LDAP mà máy chủ của bạn đang sử dụng.';
$string['auth_ldap_version_key'] = 'Phiên bản';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Đặt là có để thử đăng nhập một lần với miền NTLM. Lưu ý rằng điều này yêu cầu thiết lập bổ sung trên máy chủ để hoạt động. Để biết thêm chi tiết, xem tài liệu <a href="https://docs.moodle.org/en/NTLM_authentication">Xác thực NTLM</a>.';
$string['auth_ntlmsso_enabled_key'] = 'Bật';
$string['auth_ntlmsso_ie_fastpath'] = 'Đặt để bật đường dẫn nhanh NTLM SSO (bỏ qua các bước nhất định nếu trình duyệt của khách hàng là MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Đường dẫn nhanh MS IE?';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Có, tất cả các trình duyệt khác sử dụng biểu mẫu đăng nhập tiêu chuẩn';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Có, thử NTLM với các trình duyệt khác';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Thử NTLM với tất cả các trình duyệt';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Không thể trích xuất tên người dùng từ tiêu đề REMOTE_USER. Định dạng cấu hình có đúng không?';
$string['auth_ntlmsso_missing_username'] = 'Bạn cần chỉ định ít nhất %username% trong định dạng tên người dùng từ xa';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Định dạng tên người dùng từ xa';
$string['auth_ntlmsso_remoteuserformat'] = 'Nếu bạn đã chọn \'NTLM\' trong \'Loại xác thực\', bạn có thể chỉ định định dạng tên người dùng từ xa tại đây. Nếu bạn để trống mục này, định dạng mặc định DOMAIN\\username sẽ được sử dụng. Bạn có thể sử dụng trình giữ chỗ tùy chọn <b>%domain%</b> để chỉ định nơi xuất hiện tên miền và trình giữ chỗ bắt buộc <b>%username%</b> để chỉ định nơi xuất hiện tên người dùng. <br /><br />Một số định dạng được sử dụng rộng rãi là <tt>%domain%\\%username%</tt> (mặc định của MS Windows), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> và chỉ <tt>%username%</tt> (nếu không có phần tên miền).';
$string['auth_ntlmsso_subnet'] = 'Nếu được đặt, nó sẽ chỉ thử SSO với các khách hàng trong mạng con này. Định dạng: xxx.xxx.xxx.xxx/bitmask. Tách nhiều mạng con bằng \',\' (dấu phẩy).';
$string['auth_ntlmsso_subnet_key'] = 'Mạng con';
$string['auth_ntlmsso_type_key'] = 'Loại xác thực';
$string['auth_ntlmsso_type'] = 'Phương pháp xác thực được cấu hình trong máy chủ web để xác thực người dùng (nếu không chắc chắn, chọn NTLM)';
$string['cannotmaprole'] = 'Vai trò "{$a->rolename}" không thể được ánh xạ vì tên ngắn của nó "{$a->shortname}" quá dài và/hoặc chứa dấu gạch nối. Để cho phép ánh xạ, tên ngắn cần phải giảm xuống tối đa {$a->charlimit} ký tự và loại bỏ bất kỳ dấu gạch nối nào. <a href="{$a->link}">Chỉnh sửa vai trò</a>';
$string['connectingldap'] = "Đang kết nối với máy chủ LDAP...\n";
$string['connectingldapsuccess'] = "Kết nối với máy chủ LDAP của bạn thành công";
$string['creatingtemptable'] = "Đang tạo bảng tạm thời {\$a}\n";
$string['didntfindexpiretime'] = 'password_expire() không tìm thấy thời gian hết hạn.';
$string['didntgetusersfromldap'] = "Không nhận được bất kỳ người dùng nào từ LDAP -- lỗi? -- thoát\n";
$string['gotcountrecordsfromldap'] = "Nhận được {\$a} bản ghi từ LDAP\n";
$string['invalidusererrors'] = "Cảnh báo: Bỏ qua việc tạo {\$a} tài khoản người dùng.\n\n";
$string['invaliduserexception'] = "\nLỗi: Không thể tạo tài khoản người dùng mới. Chi tiết và lý do:\n{\$a}\nBỏ qua người dùng này.\n\n";
$string['ldapnotconfigured'] = 'URL máy chủ LDAP hiện không được cấu hình';
$string['morethanoneuser'] = 'Tìm thấy nhiều bản ghi người dùng trong LDAP. Chỉ sử dụng cái đầu tiên.';
$string['needbcmath'] = 'Bạn cần tiện ích mở rộng BCMath để sử dụng kiểm tra mật khẩu hết hạn với Active Directory.';
$string['needmbstring'] = 'Bạn cần tiện ích mở rộng mbstring để thay đổi mật khẩu trong Active Directory';
$string['nodnforusername'] = 'Lỗi trong user_update_password(). Không có DN cho: {$a->username}';
$string['noemail'] = 'Đã cố gắng gửi email cho bạn nhưng thất bại!';
$string['notcalledfromserver'] = 'Không nên được gọi từ máy chủ web!';
$string['noupdatestobedone'] = "Không có cập nhật nào cần thực hiện\n";
$string['nouserentriestoremove'] = "Không có mục người dùng nào cần xóa\n";
$string['nouserentriestorevive'] = "Không có mục người dùng nào cần khôi phục\n";
$string['nouserstobeadded'] = 'Không có mục người dùng nào cần thêm';
$string['ntlmsso_attempting'] = 'Đang thử Đăng nhập Một lần qua NTLM...';
$string['ntlmsso_failed'] = 'Đăng nhập tự động thất bại, thử trang đăng nhập thông thường...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO bị tắt.';
$string['ntlmsso_unknowntype'] = 'Loại ntlmsso không xác định!';
$string['pagedresultsnotsupp'] = 'Kết quả phân trang LDAP không được hỗ trợ (hoặc phiên bản PHP của bạn không có hỗ trợ, bạn đã cấu hình Moodle sử dụng giao thức LDAP phiên bản 2 hoặc Moodle không thể liên lạc với máy chủ LDAP của bạn để kiểm tra xem có hỗ trợ phân trang không).';
$string['pagesize'] = 'Đảm bảo giá trị này nhỏ hơn giới hạn kích thước tập hợp kết quả của máy chủ LDAP của bạn (số lượng mục tối đa có thể được trả về trong một truy vấn duy nhất)';
$string['pagesize_key'] = 'Kích thước trang';
$string['pluginname'] = 'Máy chủ LDAP';
$string['pluginnotenabled'] = 'Plugin không được bật!';
$string['renamingnotallowed'] = 'Không cho phép đổi tên người dùng trong LDAP';
$string['rootdseerror'] = 'Lỗi truy vấn rootDSE cho Active Directory';
$string['syncroles'] = 'Đồng bộ hóa vai trò hệ thống từ LDAP';
$string['synctask'] = 'Công việc đồng bộ người dùng LDAP';
$string['systemrolemapping'] = 'Ánh xạ vai trò hệ thống';
$string['start_tls'] = 'Sử dụng dịch vụ LDAP thông thường (cổng 389) với mã hóa TLS';
$string['start_tls_key'] = 'Sử dụng TLS';
$string['updateremfail'] = 'Lỗi cập nhật bản ghi LDAP. Mã lỗi: {$a->errno}; Chuỗi lỗi: {$a->errstring}<br/>Khóa ({$a->key}) - giá trị cũ của moodle: \'{$a->ouvalue}\' giá trị mới: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'Không thể cập nhật LDAP với trường mơ hồ {$a->key}; giá trị cũ của moodle: \'{$a->ouvalue}\', giá trị mới: \'{$a->nuvalue}\'';
$string['updatepasserror'] = 'Lỗi trong user_update_password(). Mã lỗi: {$a->errno}; Chuỗi lỗi: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Lỗi trong user_update_password() khi đọc thời gian hết hạn mật khẩu. Mã lỗi: {$a->errno}; Chuỗi lỗi: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Lỗi trong user_update_password() khi sửa đổi thời gian hết hạn và/hoặc đăng nhập ân hạn. Mã lỗi: {$a->errno}; Chuỗi lỗi: {$a->errstring}';
$string['updateusernotfound'] = 'Không thể tìm thấy người dùng khi cập nhật từ bên ngoài. Chi tiết như sau: cơ sở tìm kiếm: \'{$a->userdn}\'; bộ lọc tìm kiếm: \'(objectClass=*)\'; thuộc tính tìm kiếm: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() không hỗ trợ loại người dùng đã chọn: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() không hỗ trợ loại người dùng đã chọn: {$a}';
$string['userentriestoadd'] = "Các mục người dùng cần thêm: {\$a}\n";
$string['userentriestoremove'] = "Các mục người dùng cần xóa: {\$a}\n";
$string['userentriestorevive'] = "Các mục người dùng cần khôi phục: {\$a}\n";
$string['userentriestoupdate'] = "Các mục người dùng cần cập nhật: {\$a}\n";
$string['usernotfound'] = 'Người dùng không được tìm thấy trong LDAP';
$string['useracctctrlerror'] = 'Lỗi khi lấy userAccountControl cho {$a}';

$string['diag_genericerror'] = 'Lỗi LDAP {$a->code} khi đọc {$a->subject}: {$a->message}.';
$string['diag_toooldversion'] = 'Rất ít khả năng máy chủ LDAP hiện đại sử dụng giao thức LDAPv2. Cài đặt sai có thể làm hỏng các giá trị trong các trường người dùng. Kiểm tra với quản trị viên LDAP của bạn.';
$string['diag_emptycontext'] = 'Tìm thấy ngữ cảnh trống.';
$string['diag_contextnotfound'] = 'Ngữ cảnh {$a} không tồn tại hoặc không thể đọc bởi DN kết nối.';
$string['diag_rolegroupnotfound'] = 'Nhóm {$a->group} cho vai trò {$a->localname} không tồn tại hoặc không thể đọc bởi DN kết nối.';
$string['privacy:metadata'] = 'Plugin xác thực máy chủ LDAP không lưu trữ bất kỳ dữ liệu cá nhân nào.';
