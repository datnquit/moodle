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
 * Strings for component 'auth', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actauthhdr'] = 'Các plugin xác thực có sẵn';
$string['alternatelogin'] = 'Nếu bạn nhập URL ở đây, nó sẽ được sử dụng làm trang đăng nhập cho trang web này. Trang này nên chứa một biểu mẫu có thuộc tính hành động được đặt thành <strong>\'{$a}\'</strong> và trả về các trường <strong>username</strong> và <strong>password</strong>.<br />Hãy cẩn thận không nhập URL sai vì bạn có thể bị khóa khỏi trang web này.<br />Để trống cài đặt này để sử dụng trang đăng nhập mặc định.';
$string['alternateloginurl'] = 'URL đăng nhập thay thế';
$string['auth_common_settings'] = 'Cài đặt chung';
$string['auth_data_mapping'] = 'Ánh xạ dữ liệu';
$string['authenticationoptions'] = 'Tùy chọn xác thực';
$string['auth_fieldlock'] = 'Khóa giá trị';
$string['auth_fieldlockfield'] = 'Khóa giá trị ({$a})';
$string['auth_fieldlock_expl'] = '<p>Khóa giá trị: Nếu được bật, người dùng sẽ không thể chỉnh sửa trường này. Sử dụng tùy chọn này nếu bạn đang duy trì dữ liệu này trong hệ thống xác thực bên ngoài. </p>';
$string['auth_fieldlocks'] = 'Khóa các trường người dùng';
$string['auth_fieldlocks_help'] = '<p>Bạn có thể khóa các trường dữ liệu người dùng. Điều này hữu ích cho các trang web mà dữ liệu người dùng được quản lý bởi quản trị viên thủ công bằng cách chỉnh sửa hồ sơ người dùng hoặc tải lên bằng cách sử dụng tính năng \'Tải lên người dùng\'. Nếu bạn đang khóa các trường yêu cầu bởi Moodle, hãy đảm bảo rằng bạn cung cấp dữ liệu đó khi tạo tài khoản người dùng hoặc tài khoản sẽ không sử dụng được.</p><p>Xem xét đặt chế độ khóa thành \'Mở khóa nếu trống\' để tránh vấn đề này.</p>';
$string['auth_fieldmapping'] = 'Ánh xạ dữ liệu ({$a})';
$string['auth_changepasswordhelp'] = 'Trợ giúp thay đổi mật khẩu';
$string['auth_changepasswordhelp_expl'] = 'Hiển thị trợ giúp mật khẩu bị mất cho người dùng đã mất mật khẩu {$a}. Điều này sẽ được hiển thị cùng với hoặc thay thế cho <strong>URL Thay đổi mật khẩu</strong> hoặc thay đổi mật khẩu nội bộ của Moodle.';
$string['auth_changepasswordurl'] = 'URL Thay đổi mật khẩu';
$string['auth_changepasswordurl_expl'] = 'Chỉ định URL để gửi người dùng đã mất mật khẩu {$a}. Đặt <strong>Sử dụng trang Thay đổi Mật khẩu chuẩn</strong> thành <strong>Không</strong>.';
$string['auth_changingemailaddress'] = 'Bạn đã yêu cầu thay đổi địa chỉ email từ {$a->oldemail} sang {$a->newemail}. Vì lý do bảo mật, chúng tôi đang gửi cho bạn một tin nhắn email đến địa chỉ mới để xác nhận rằng nó thuộc về bạn. Địa chỉ email của bạn sẽ được cập nhật ngay khi bạn mở URL được gửi trong tin nhắn đó.';
$string['authinstructions'] = 'Để trống cho các hướng dẫn đăng nhập mặc định được hiển thị trên trang đăng nhập. Nếu bạn muốn cung cấp các hướng dẫn đăng nhập tùy chỉnh, hãy nhập chúng ở đây.';
$string['auth_invalidnewemailkey'] = 'Lỗi: nếu bạn đang cố gắng xác nhận thay đổi địa chỉ email, bạn có thể đã mắc lỗi khi sao chép URL chúng tôi đã gửi cho bạn qua email. Vui lòng sao chép địa chỉ và thử lại.';
$string['auth_loginrecaptcha'] = 'Bật reCAPTCHA cho đăng nhập';
$string['auth_loginrecaptcha_desc'] = 'Thêm một yếu tố xác nhận bằng hình ảnh/âm thanh vào trang đăng nhập. Điều này giảm rủi ro các lần đăng nhập không mong muốn. Xem <a target="_blank" href="https://www.google.com/recaptcha">Google reCAPTCHA</a> để biết thêm chi tiết. ';
$string['auth_multiplehosts'] = 'Có thể chỉ định nhiều máy chủ HOẶC địa chỉ (ví dụ host1.com;host2.com;host3.com) hoặc (ví dụ xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'Phương thức xác thực {$a} chưa được cấu hình.';
$string['auth_outofnewemailupdateattempts'] = 'Bạn đã hết số lần cố gắng cập nhật địa chỉ email cho phép. Yêu cầu cập nhật của bạn đã bị hủy bỏ.';
$string['auth_passwordisexpired'] = 'Mật khẩu của bạn đã hết hạn. Vui lòng thay đổi nó ngay bây giờ.';
$string['auth_passwordwillexpire'] = 'Mật khẩu của bạn sẽ hết hạn sau {$a} ngày. Bạn có muốn thay đổi mật khẩu ngay bây giờ không?';
$string['auth_remove_delete'] = 'Xóa hoàn toàn nội bộ';
$string['auth_remove_keep'] = 'Giữ nội bộ';
$string['auth_remove_suspend'] = 'Đình chỉ nội bộ';
$string['auth_remove_user'] = 'Chỉ định những gì cần làm với tài khoản người dùng nội bộ trong quá trình đồng bộ hóa hàng loạt khi người dùng đã bị xóa khỏi nguồn bên ngoài. Chỉ những người dùng bị đình chỉ sẽ tự động được khôi phục nếu họ xuất hiện trở lại trong nguồn bên ngoài.';
$string['auth_remove_user_key'] = 'Người dùng bị xóa bên ngoài';
$string['auth_sync_suspended']  = 'Nếu được bật, thuộc tính đình chỉ sẽ được sử dụng để cập nhật trạng thái đình chỉ của tài khoản người dùng địa phương.';
$string['auth_sync_suspended_key'] = 'Đồng bộ hóa trạng thái đình chỉ của người dùng địa phương';
$string['auth_sync_script'] = 'Đồng bộ hóa tài khoản người dùng';
$string['auth_updatelocal'] = 'Cập nhật địa phương';
$string['auth_updatelocalfield'] = 'Cập nhật địa phương ({$a})';
$string['auth_updatelocal_expl'] = '<p><b>Cập nhật địa phương:</b> Nếu được bật, trường sẽ được cập nhật (từ xác thực bên ngoài) mỗi lần người dùng đăng nhập hoặc có đồng bộ hóa người dùng. Các trường được đặt để cập nhật địa phương nên được khóa.</p>';
$string['auth_updateremote'] = 'Cập nhật bên ngoài';
$string['auth_updateremotefield'] = 'Cập nhật bên ngoài ({$a})';
$string['auth_updateremote_expl'] = '<p><b>Cập nhật bên ngoài:</b> Nếu được bật, xác thực bên ngoài sẽ được cập nhật khi hồ sơ người dùng được cập nhật. Các trường nên được mở khóa để cho phép chỉnh sửa.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Lưu ý:</b> Cập nhật dữ liệu LDAP bên ngoài yêu cầu bạn thiết lập binddn và bindpw cho một người dùng bind có quyền chỉnh sửa tất cả các hồ sơ người dùng. Hiện tại, nó không giữ lại các thuộc tính đa giá trị và sẽ loại bỏ các giá trị bổ sung khi cập nhật. </p>';
$string['auth_user_create'] = 'Cho phép tạo người dùng';
$string['auth_user_creation'] = 'Người dùng mới (ẩn danh) có thể tạo tài khoản người dùng trên nguồn xác thực bên ngoài và được xác nhận qua email. Nếu bạn bật tùy chọn này, hãy nhớ cũng cấu hình các tùy chọn cụ thể của module cho việc tạo người dùng.';
$string['auth_usernameexists'] = 'Tên người dùng đã chọn đã tồn tại. Vui lòng chọn tên khác.';
$string['auth_usernotexist'] = 'Không thể cập nhật người dùng không tồn tại: {$a}';
$string['auto_add_remote_users'] = 'Tự động thêm người dùng từ xa';
$string['cannotmapfield'] = 'Trường "{$a->fieldname}" không thể được ánh xạ vì tên ngắn của nó "{$a->shortname}" quá dài. Để cho phép ánh xạ, bạn cần giảm tên ngắn thành {$a->charlimit} ký tự. <a href="{$a->link}">Chỉnh sửa các trường hồ sơ người dùng</a>';
$string['createpassword'] = 'Tạo mật khẩu và thông báo cho người dùng';
$string['createpasswordifneeded'] = 'Tạo mật khẩu nếu cần và gửi qua email';
$string['emailchangecancel'] = 'Hủy thay đổi email';
$string['emailchangepending'] = 'Thay đổi đang chờ xử lý. Mở liên kết đã gửi cho bạn tại {$a->preference_newemail}.';
$string['emailnowexists'] = 'Địa chỉ email bạn cố gắng gán cho hồ sơ của mình đã được gán cho người khác kể từ khi bạn yêu cầu ban đầu. Yêu cầu thay đổi địa chỉ email của bạn đã bị hủy bỏ, nhưng bạn có thể thử lại với địa chỉ khác.';
$string['emailupdate'] = 'Cập nhật địa chỉ email';
$string['emailupdatemessage'] = 'Kính gửi {$a->fullname},

Bạn đã yêu cầu thay đổi địa chỉ email của mình cho tài khoản trên {$a->site}. Để xác nhận thay đổi này, vui lòng truy cập vào địa chỉ web sau:

{$a->url}

{$a->supportemail}';
$string['emailupdatesuccess'] = 'Địa chỉ email của người dùng <em>{$a->fullname}</em> đã được cập nhật thành công thành <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Xác nhận cập nhật email tại {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Mật khẩu phải có nhiều nhất {$a} ký tự giống nhau liên tiếp.';
$string['errorminpassworddigits'] = 'Mật khẩu phải có ít nhất {$a} chữ số.';
$string['errorminpasswordlength'] = 'Mật khẩu phải có ít nhất {$a} ký tự.';
$string['errorminpasswordlower'] = 'Mật khẩu phải có ít nhất {$a} chữ cái thường.';
$string['errorminpasswordnonalphanum'] = 'Mật khẩu phải có ít nhất {$a} ký tự đặc biệt như *, -, hoặc #.';
$string['errorpasswordreused'] = 'Mật khẩu này đã được sử dụng trước đó và không được phép sử dụng lại.';
$string['errorminpasswordupper'] = 'Mật khẩu phải có ít nhất {$a} chữ cái hoa.';
$string['errorpasswordupdate'] = 'Lỗi khi cập nhật mật khẩu, mật khẩu không được thay đổi.';
$string['eventuserloggedin'] = 'Người dùng đã đăng nhập';
$string['eventuserloggedinas'] = 'Người dùng đã đăng nhập dưới danh tính của người dùng khác';
$string['eventuserloginfailed'] = 'Đăng nhập của người dùng thất bại';
$string['forcechangepassword'] = 'Buộc thay đổi mật khẩu';
$string['forcechangepasswordfirst_help'] = 'Buộc người dùng thay đổi mật khẩu khi đăng nhập lần đầu vào Moodle.';
$string['forcechangepassword_help'] = 'Buộc người dùng thay đổi mật khẩu khi đăng nhập lần tới vào Moodle.';
$string['forgottenpassword'] = 'Nếu bạn nhập một URL ở đây, nó sẽ được sử dụng như là trang khôi phục mật khẩu đã mất cho trang web này. Điều này dành cho các trang web mà mật khẩu được xử lý hoàn toàn bên ngoài Moodle. Để trống để sử dụng trang khôi phục mật khẩu mặc định.';
$string['forgottenpasswordurl'] = 'URL khôi phục mật khẩu đã quên';
$string['getrecaptchaapi'] = 'Để sử dụng reCAPTCHA, bạn phải lấy khóa API từ <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Nút đăng nhập dành cho khách';
$string['changepassword'] = 'URL thay đổi mật khẩu';
$string['changepasswordhelp'] = 'URL của trang khôi phục mật khẩu đã mất, sẽ được gửi cho người dùng qua email. Lưu ý rằng thiết lập này sẽ không có hiệu lực nếu một URL khôi phục mật khẩu đã quên được đặt trong các cài đặt chung về xác thực.';
$string['chooseauthmethod'] = 'Chọn phương thức xác thực';
$string['chooseauthmethod_help'] = 'Thiết lập này xác định phương thức xác thực được sử dụng khi người dùng đăng nhập. Chỉ chọn các plugin xác thực đã được kích hoạt, nếu không người dùng sẽ không thể đăng nhập được nữa. Để chặn người dùng đăng nhập, chọn "Không đăng nhập".';
$string['incorrectpleasetryagain'] = 'Sai. Vui lòng thử lại.';
$string['infilefield'] = 'Trường bắt buộc trong tệp';
$string['informminpassworddigits'] = 'ít nhất {$a} chữ số';
$string['informminpasswordlength'] = 'ít nhất {$a} ký tự';
$string['informminpasswordlower'] = 'ít nhất {$a} chữ cái thường';
$string['informminpasswordnonalphanum'] = 'ít nhất {$a} ký tự đặc biệt như *, -, hoặc #';
$string['informminpasswordreuselimit'] = 'Mật khẩu có thể được sử dụng lại sau {$a} lần thay đổi';
$string['informminpasswordupper'] = 'ít nhất {$a} chữ cái hoa';
$string['informpasswordpolicy'] = 'Mật khẩu phải có {$a}';
$string['instructions'] = 'Hướng dẫn';
$string['internal'] = 'Nội bộ';
$string['limitconcurrentlogins'] = 'Giới hạn đăng nhập đồng thời';
$string['limitconcurrentlogins_desc'] = 'Nếu được kích hoạt, số lượng phiên đăng nhập trình duyệt đồng thời cho mỗi người dùng sẽ bị giới hạn. Phiên cũ nhất sẽ bị kết thúc sau khi đạt đến giới hạn, lưu ý rằng người dùng có thể mất tất cả các công việc chưa được lưu. Thiết lập này không tương thích với các plugin xác thực đăng nhập một lần (SSO).';
$string['locked'] = 'Đã khóa';
$string['authloginviaemail'] = 'Cho phép đăng nhập qua email';
$string['authloginviaemail_desc'] = 'Cho phép người dùng sử dụng cả tên người dùng và địa chỉ email (nếu duy nhất) để đăng nhập trang web.';
$string['allowaccountssameemail'] = 'Cho phép các tài khoản có cùng email';
$string['allowaccountssameemail_desc'] = 'Nếu được kích hoạt, nhiều tài khoản người dùng có thể sử dụng cùng một địa chỉ email. Điều này có thể dẫn đến các vấn đề về bảo mật hoặc quyền riêng tư, ví dụ như với email xác nhận thay đổi mật khẩu.';
$string['md5'] = 'Băm MD5';
$string['nopasswordchange'] = 'Không thể thay đổi mật khẩu';
$string['nopasswordchangeforced'] = 'Bạn không thể tiếp tục mà không thay đổi mật khẩu của mình, tuy nhiên không có trang nào khả dụng để thay đổi mật khẩu. Vui lòng liên hệ với Quản trị viên Moodle của bạn.';
$string['noprofileedit'] = 'Không thể chỉnh sửa hồ sơ';
$string['ntlmsso_attempting'] = 'Đang cố gắng đăng nhập một lần qua NTLM...';
$string['ntlmsso_failed'] = 'Đăng nhập tự động thất bại, hãy thử trang đăng nhập thông thường...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO đã bị vô hiệu hóa.';
$string['passwordhandling'] = 'Xử lý trường mật khẩu';
$string['plaintext'] = 'Văn bản thuần';
$string['pluginnotenabled'] = 'Plugin xác thực \'{$a}\' chưa được kích hoạt.';
$string['pluginnotinstalled'] = 'Plugin xác thực \'{$a}\' chưa được cài đặt.';
$string['privacy:metadata:userpref:createpassword'] = 'Cho biết rằng một mật khẩu nên được tạo cho người dùng';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Cho biết liệu người dùng có nên thay đổi mật khẩu khi đăng nhập hay không';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Số lần người dùng đăng nhập thất bại';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Số lần người dùng đăng nhập thất bại kể từ lần đăng nhập thành công cuối cùng';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Ngày ghi nhận lần đăng nhập thất bại cuối cùng';
$string['privacy:metadata:userpref:loginlockout'] = 'Liệu tài khoản của người dùng có bị khóa do các lần đăng nhập thất bại hay không, và ngày tài khoản bị khóa';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Cho biết rằng tài khoản của người dùng không bao giờ bị khóa';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Khi bị khóa, bí mật mà người dùng phải sử dụng để mở khóa tài khoản của họ';
$string['potentialidps'] = 'Đăng nhập bằng tài khoản của bạn trên:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA để ngăn chặn sự lạm dụng từ các chương trình tự động. Thực hiện theo hướng dẫn để xác minh bạn là người. Điều này có thể là một hộp để kiểm tra, các ký tự được hiển thị trong một hình ảnh mà bạn phải nhập hoặc một tập hợp các hình ảnh để chọn từ.

Nếu bạn không chắc chắn về các hình ảnh, bạn có thể thử nhận một CAPTCHA khác hoặc một CAPTCHA âm thanh.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Câu hỏi bảo mật';
$string['selfregistration'] = 'Tự đăng ký';
$string['selfregistration_help'] = 'Nếu một plugin xác thực, chẳng hạn như tự đăng ký qua email, được chọn, thì nó sẽ cho phép người dùng tiềm năng tự đăng ký và tạo tài khoản. Điều này dẫn đến khả năng những kẻ spam tạo tài khoản để sử dụng bài viết trên diễn đàn, mục blog, v.v. để spam. Để tránh rủi ro này, tự đăng ký nên được vô hiệu hóa hoặc giới hạn bởi thiết lập <em>Miền email được phép</em>.';
$string['settingmigrationmismatch'] = 'Phát hiện không khớp giá trị trong khi điều chỉnh tên cài đặt plugin! Plugin xác thực \'{$a->plugin}\' có cài đặt \'{$a->setting}\' được cấu hình thành \'{$a->legacy}\' dưới tên cũ và thành \'{$a->current}\' dưới tên hiện tại. Giá trị sau đã được đặt làm giá trị hợp lệ nhưng bạn nên kiểm tra và xác nhận rằng điều này là đúng.';
$string['sha1'] = 'Băm SHA-1';
$string['showguestlogin'] = 'Bạn có thể ẩn hoặc hiển thị nút đăng nhập cho khách trên trang đăng nhập.';
$string['stdchangepassword'] = 'Sử dụng trang chuẩn để thay đổi mật khẩu';
$string['stdchangepassword_expl'] = 'Nếu hệ thống xác thực bên ngoài cho phép thay đổi mật khẩu thông qua Moodle, hãy chuyển này thành Yes. Thiết lập này ghi đè lên \'Change Password URL\'.';
$string['stdchangepassword_explldap'] = 'LƯU Ý: Đề xuất sử dụng LDAP qua một đường hầm mã hóa SSL (ldaps://) nếu máy chủ LDAP ở xa.';
$string['suspended'] = 'Tài khoản bị đình chỉ';
$string['suspended_help'] = 'Các tài khoản người dùng bị đình chỉ không thể đăng nhập hoặc sử dụng các dịch vụ web, và bất kỳ tin nhắn nào đi ra cũng sẽ bị loại bỏ.';
$string['testsettings'] = 'Kiểm tra cài đặt';
$string['testsettingsheading'] = 'Kiểm tra cài đặt xác thực - {$a}';
$string['unlocked'] = 'Mở khóa';
$string['unlockedifempty'] = 'Mở khóa nếu trống';
$string['update_never'] = 'Không bao giờ';
$string['update_oncreate'] = 'Khi tạo';
$string['update_onlogin'] = 'Mỗi lần đăng nhập';
$string['update_onupdate'] = 'Khi cập nhật';
$string['user_activatenotsupportusertype'] = 'xác thực: ldap user_activate() không hỗ trợ loại người dùng đã chọn: {$a}';
$string['user_disablenotsupportusertype'] = 'xác thực: ldap user_disable() không hỗ trợ loại người dùng đã chọn (..yet)';
$string['username'] = 'Tên người dùng';
$string['username_help'] = 'Vui lòng lưu ý rằng một số plugin xác thực không cho phép bạn thay đổi tên người dùng.';
