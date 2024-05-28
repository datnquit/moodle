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
 * Strings for component 'auth_shibboleth', language 'en'.
 *
 * @package   auth_shibboleth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['auth_shib_auth_method'] = 'Tên phương thức xác thực';
$string['auth_shib_auth_method_description'] = 'Cung cấp tên cho phương thức xác thực Shibboleth mà người dùng của bạn quen thuộc. Điều này có thể là tên của liên đoàn Shibboleth của bạn, ví dụ: <tt>Đăng nhập SWITCHaai</tt> hoặc <tt>Đăng nhập InCommon</tt> hoặc tương tự.';
$string['auth_shib_auth_logo'] = 'Logo phương thức xác thực';
$string['auth_shib_auth_logo_description'] = 'Cung cấp logo cho phương thức xác thực Shibboleth mà người dùng của bạn quen thuộc. Điều này có thể là logo của liên đoàn Shibboleth của bạn, ví dụ: <tt>Đăng nhập SWITCHaai</tt> hoặc <tt>Đăng nhập InCommon</tt> hoặc tương tự.';
$string['auth_shib_contact_administrator'] = 'Trong trường hợp bạn không thuộc các tổ chức đã cho và bạn cần truy cập vào một khóa học trên máy chủ này, vui lòng liên hệ với <a href="mailto:{$a}">Quản trị viên Moodle</a>.';
$string['auth_shibbolethdescription'] = 'Sử dụng phương thức này, người dùng được tạo và xác thực bằng Shibboleth. Để biết chi tiết cài đặt, xem <a href="{$a}">README Shibboleth</a>.';
$string['auth_shibboleth_errormsg'] = 'Vui lòng chọn tổ chức mà bạn là thành viên!';
$string['auth_shibboleth_login'] = 'Đăng nhập Shibboleth';
$string['auth_shibboleth_login_long'] = 'Đăng nhập vào Moodle qua Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Đăng nhập thủ công';
$string['auth_shibboleth_select_member'] = 'Tôi là thành viên của ...';
$string['auth_shibboleth_select_organization'] = 'Để xác thực qua Shibboleth, vui lòng chọn tổ chức của bạn từ menu thả xuống:';
$string['auth_shib_convert_data'] = 'API sửa đổi dữ liệu';
$string['auth_shib_convert_data_description'] = 'Bạn có thể sử dụng API này để sửa đổi thêm dữ liệu được cung cấp bởi Shibboleth. Đọc <a href="{$a}">README</a> để biết thêm hướng dẫn.';
$string['auth_shib_convert_data_warning'] = 'Tệp không tồn tại hoặc không đọc được bởi quá trình máy chủ web!';
$string['auth_shib_convert_data_filepath_warning'] = 'Bạn không thể sử dụng tệp nằm trong thư mục dữ liệu trang hiện tại ($CFG->dataroot) làm API sửa đổi dữ liệu.';
$string['auth_shib_changepasswordurl'] = 'URL thay đổi mật khẩu';
$string['auth_shib_idp_list'] = 'Nhà cung cấp danh tính';
$string['auth_shib_idp_list_description'] = 'Cung cấp danh sách các entityID của Nhà cung cấp Danh tính để người dùng chọn từ trang đăng nhập.<br />Trên mỗi dòng phải có một tuple tách biệt bằng dấu phẩy cho entityID của IdP (xem tệp metadata của Shibboleth) và Tên của IdP như sẽ được hiển thị trong danh sách thả xuống.<br />Là một tham số tùy chọn thứ ba, bạn có thể thêm vị trí của một session initiator Shibboleth sẽ được sử dụng trong trường hợp cài đặt Moodle của bạn là một phần của một liên đoàn đa.';
$string['auth_shib_instructions'] = 'Sử dụng <a href="{$a}">đăng nhập Shibboleth</a> để truy cập qua Shibboleth, nếu tổ chức của bạn hỗ trợ. Nếu không, sử dụng biểu mẫu đăng nhập thông thường hiển thị ở đây.';
$string['auth_shib_instructions_help'] = 'Tại đây, bạn nên cung cấp hướng dẫn tùy chỉnh cho người dùng của bạn để giải thích về Shibboleth. Nó sẽ được hiển thị trên trang đăng nhập trong phần hướng dẫn. Hướng dẫn phải bao gồm một liên kết đến "<b>{$a}</b>" mà người dùng sẽ nhấp vào khi họ muốn đăng nhập.';
$string['auth_shib_instructions_key'] = 'Hướng dẫn đăng nhập';
$string['auth_shib_integrated_wayf'] = 'Dịch vụ WAYF của Moodle';
$string['auth_shib_integrated_wayf_description'] = 'Nếu bạn bật tính năng này, Moodle sẽ sử dụng dịch vụ WAYF riêng thay vì dịch vụ đã cấu hình cho Shibboleth. Moodle sẽ hiển thị một danh sách thả xuống trên trang đăng nhập thay thế này nơi người dùng phải chọn Nhà cung cấp Danh tính của họ.';
$string['auth_shib_logout_return_url'] = 'URL quay lại khi đăng xuất thay thế';
$string['auth_shib_logout_return_url_description'] = 'Cung cấp URL mà người dùng Shibboleth sẽ được chuyển hướng đến sau khi đăng xuất.<br />Nếu để trống, người dùng sẽ được chuyển hướng đến vị trí mà Moodle sẽ chuyển hướng người dùng đến';
$string['auth_shib_logout_url'] = 'URL xử lý đăng xuất của Nhà cung cấp Dịch vụ Shibboleth';
$string['auth_shib_logout_url_description'] = 'Cung cấp URL cho trình xử lý đăng xuất của Nhà cung cấp Dịch vụ Shibboleth. Thông thường là <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Nếu bạn muốn sử dụng dịch vụ WAYF tích hợp, bạn phải cung cấp một danh sách entityID của Nhà cung cấp Danh tính, tên của họ và tùy chọn một session initiator.';
$string['auth_shib_only'] = 'Chỉ Shibboleth';
$string['auth_shib_only_description'] = 'Chọn tùy chọn này nếu xác thực Shibboleth phải được thực thi';
$string['auth_shib_username_description'] = 'Tên của biến môi trường Shibboleth của máy chủ web sẽ được sử dụng làm tên người dùng Moodle';
$string['shib_invalid_account_error'] = 'Có vẻ như bạn đã được xác thực qua Shibboleth nhưng Moodle không có tài khoản hợp lệ cho tên người dùng của bạn. Tài khoản của bạn có thể không tồn tại hoặc có thể đã bị đình chỉ.';
$string['shib_no_attributes_error'] = 'Có vẻ như bạn đã được xác thực qua Shibboleth nhưng Moodle không nhận được bất kỳ thuộc tính người dùng nào. Vui lòng kiểm tra rằng Nhà cung cấp Danh tính của bạn phát hành các thuộc tính cần thiết ({$a}) cho Nhà cung cấp Dịch vụ mà Moodle đang chạy hoặc thông báo cho quản trị viên trang web này.';
$string['shib_not_all_attributes_error'] = 'Moodle cần một số thuộc tính Shibboleth nhất định mà trong trường hợp của bạn không có. Các thuộc tính đó là: {$a}<br />Vui lòng liên hệ với quản trị viên của trang web này hoặc Nhà cung cấp Danh tính của bạn.';
$string['shib_not_set_up_error'] = 'Xác thực Shibboleth dường như chưa được thiết lập đúng cách vì không có biến môi trường Shibboleth nào hiện diện cho trang này. Vui lòng tham khảo <a href="{$a}">README</a> để biết thêm hướng dẫn về cách thiết lập xác thực Shibboleth hoặc liên hệ với quản trị viên của cài đặt Moodle này.';
$string['pluginname'] = 'Shibboleth';
$string['privacy:metadata'] = 'Plugin xác thực Shibboleth không lưu trữ bất kỳ dữ liệu cá nhân nào.';
