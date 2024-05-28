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
 * Strings for component 'auth_cas', language 'en'.
 *
 * @package   auth_cas
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['auth_cas_auth_name'] = 'Tên phương thức xác thực';
$string['auth_cas_auth_name_description'] = 'Cung cấp tên cho phương thức xác thực CAS mà người dùng của bạn quen thuộc.';
$string['auth_cas_auth_logo'] = 'Logo phương thức xác thực';
$string['auth_cas_auth_logo_description'] = 'Cung cấp logo cho phương thức xác thực CAS mà người dùng của bạn quen thuộc.';
$string['auth_cas_auth_user_create'] = 'Tạo người dùng bên ngoài';
$string['auth_cas_auth_service'] = 'CAS';
$string['auth_cas_baseuri'] = 'URI của máy chủ (không có gì nếu không có baseUri)<br />Ví dụ, nếu máy chủ CAS phản hồi host.domaine.fr/CAS/ thì<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Base URI';
$string['auth_cas_broken_password'] = 'Bạn không thể tiếp tục mà không thay đổi mật khẩu của mình, tuy nhiên không có trang nào có sẵn để thay đổi. Vui lòng liên hệ Quản trị viên Moodle của bạn.';
$string['auth_cas_cantconnect'] = 'Phần LDAP của mô-đun CAS không thể kết nối với máy chủ: {$a}';
$string['auth_cas_casversion'] = 'Phiên bản giao thức CAS';
$string['auth_cas_certificate_check'] = 'Chọn \'có\' nếu bạn muốn xác nhận chứng chỉ máy chủ';
$string['auth_cas_certificate_path_empty'] = 'Nếu bạn bật xác nhận máy chủ, bạn cần chỉ định đường dẫn chứng chỉ';
$string['auth_cas_certificate_check_key'] = 'Xác nhận máy chủ';
$string['auth_cas_certificate_path'] = 'Đường dẫn của tệp chuỗi CA (Định dạng PEM) để xác nhận chứng chỉ máy chủ';
$string['auth_cas_certificate_path_key'] = 'Đường dẫn chứng chỉ';
$string['auth_cas_create_user'] = 'Bật tính năng này nếu bạn muốn chèn người dùng được xác thực bằng CAS vào cơ sở dữ liệu Moodle. Nếu không thì chỉ những người dùng đã tồn tại trong cơ sở dữ liệu Moodle mới có thể đăng nhập.';
$string['auth_cas_create_user_key'] = 'Tạo người dùng';
$string['auth_cas_curl_ssl_version'] = 'Phiên bản SSL (2 hoặc 3) để sử dụng. Mặc định PHP sẽ tự động xác định điều này, mặc dù trong một số trường hợp điều này phải được đặt thủ công.';
$string['auth_cas_curl_ssl_version_default'] = 'Mặc định';
$string['auth_cas_curl_ssl_version_key'] = 'Phiên bản SSL của cURL';
$string['auth_cas_curl_ssl_version_SSLv2'] = 'SSLv2';
$string['auth_cas_curl_ssl_version_SSLv3'] = 'SSLv3';
$string['auth_cas_curl_ssl_version_TLSv1x'] = 'TLSv1.x';
$string['auth_cas_curl_ssl_version_TLSv10'] = 'TLSv1.0';
$string['auth_cas_curl_ssl_version_TLSv11'] = 'TLSv1.1';
$string['auth_cas_curl_ssl_version_TLSv12'] = 'TLSv1.2';
$string['auth_casdescription'] = 'Phương thức này sử dụng máy chủ CAS (Dịch vụ Xác thực Trung tâm) để xác thực người dùng trong môi trường Đăng nhập Một lần (SSO). Bạn cũng có thể sử dụng xác thực LDAP đơn giản. Nếu tên người dùng và mật khẩu được cung cấp hợp lệ theo CAS, Moodle tạo một mục người dùng mới trong cơ sở dữ liệu của nó, lấy thuộc tính người dùng từ LDAP nếu cần. Trong các lần đăng nhập tiếp theo chỉ cần kiểm tra tên người dùng và mật khẩu.';
$string['auth_cas_enabled'] = 'Bật tính năng này nếu bạn muốn sử dụng xác thực CAS.';
$string['auth_cas_hostname'] = 'Tên miền của máy chủ CAS <br />ví dụ: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Tên miền';
$string['auth_cas_changepasswordurl'] = 'URL thay đổi mật khẩu';
$string['auth_cas_invalidcaslogin'] = 'Rất tiếc, đăng nhập của bạn không thành công - bạn không thể được ủy quyền';
$string['auth_cas_language'] = 'Chọn ngôn ngữ cho các trang xác thực';
$string['auth_cas_language_key'] = 'Ngôn ngữ';
$string['auth_cas_logincas'] = 'Truy cập kết nối an toàn';
$string['auth_cas_logout_return_url_key'] = 'URL quay lại sau khi đăng xuất';
$string['auth_cas_logout_return_url'] = 'Cung cấp URL mà người dùng CAS sẽ được chuyển hướng tới sau khi đăng xuất.<br />Nếu để trống, người dùng sẽ được chuyển hướng đến vị trí mà Moodle sẽ chuyển hướng người dùng tới';
$string['auth_cas_logoutcas'] = 'Chọn \'có\' nếu bạn muốn đăng xuất khỏi CAS khi bạn ngắt kết nối khỏi Moodle';
$string['auth_cas_logoutcas_key'] = 'Tùy chọn đăng xuất khỏi CAS';
$string['auth_cas_multiauth'] = 'Chọn \'có\' nếu bạn muốn có xác thực đa (CAS + xác thực khác)';
$string['auth_cas_multiauth_key'] = 'Xác thực đa';
$string['auth_casnotinstalled'] = 'Không thể sử dụng xác thực CAS. Mô-đun PHP LDAP chưa được cài đặt.';
$string['auth_cas_port'] = 'Cổng của máy chủ CAS';
$string['auth_cas_port_key'] = 'Cổng';
$string['auth_cas_proxycas'] = 'Chọn \'có\' nếu bạn sử dụng CAS trong chế độ proxy';
$string['auth_cas_proxycas_key'] = 'Chế độ proxy';
$string['auth_cas_server_settings'] = 'Cấu hình máy chủ CAS';
$string['auth_cas_text'] = 'Kết nối an toàn';
$string['auth_cas_use_cas'] = 'Sử dụng CAS';
$string['auth_cas_version'] = 'Phiên bản giao thức CAS để sử dụng';
$string['CASform'] = 'Lựa chọn xác thực';
$string['noldapserver'] = 'Không có máy chủ LDAP được cấu hình cho CAS! Đồng bộ hóa bị vô hiệu hóa.';
$string['pluginname'] = 'Máy chủ CAS (SSO)';
$string['synctask'] = 'Công việc đồng bộ người dùng CAS';
$string['privacy:metadata'] = 'Plugin xác thực máy chủ CAS (SSO) không lưu trữ bất kỳ dữ liệu cá nhân nào.';
