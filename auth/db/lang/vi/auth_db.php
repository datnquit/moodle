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
 * Strings for component 'auth_db', language 'en'.
 *
 * @package   auth_db
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['auth_dbcantconnect'] = 'Không thể kết nối với cơ sở dữ liệu xác thực được chỉ định...';
$string['auth_dbdebugauthdb'] = 'Gỡ lỗi ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Gỡ lỗi kết nối ADOdb đến cơ sở dữ liệu bên ngoài - sử dụng khi gặp trang trống trong quá trình đăng nhập. Không phù hợp cho các trang sản xuất.';
$string['auth_dbdeleteuser'] = 'Đã xóa người dùng {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'Lỗi xóa người dùng {$a}';
$string['auth_dbdescription'] = 'Phương pháp này sử dụng một bảng cơ sở dữ liệu bên ngoài để kiểm tra xem tên người dùng và mật khẩu đã cho có hợp lệ hay không. Nếu tài khoản là tài khoản mới, thông tin từ các trường khác cũng có thể được sao chép vào Moodle.';
$string['auth_dbextencoding'] = 'Mã hóa cơ sở dữ liệu bên ngoài';
$string['auth_dbextencodinghelp'] = 'Mã hóa sử dụng trong cơ sở dữ liệu bên ngoài';
$string['auth_dbextrafields'] = 'Các trường này là tùy chọn. Bạn có thể chọn điền trước một số trường người dùng Moodle với thông tin từ <b>các trường cơ sở dữ liệu bên ngoài</b> mà bạn chỉ định ở đây. <p>Nếu bạn để trống, các giá trị mặc định sẽ được sử dụng.</p><p>Dù sao, người dùng sẽ có thể chỉnh sửa tất cả các trường này sau khi họ đăng nhập.</p>';
$string['auth_dbfieldpass'] = 'Tên của trường chứa mật khẩu';
$string['auth_dbfieldpass_key'] = 'Trường mật khẩu';
$string['auth_dbfielduser'] = 'Tên của trường chứa tên người dùng. Trường này phải là kiểu dữ liệu varchar.';
$string['auth_dbfielduser_key'] = 'Trường tên người dùng';
$string['auth_dbhost'] = 'Máy tính lưu trữ máy chủ cơ sở dữ liệu. Sử dụng một mục DSN hệ thống nếu sử dụng ODBC. Sử dụng một mục DSN PDO nếu sử dụng PDO.';
$string['auth_dbhost_key'] = 'Máy chủ';
$string['auth_dbchangepasswordurl_key'] = 'URL thay đổi mật khẩu';
$string['auth_dbinsertuser'] = 'Đã thêm người dùng {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Lỗi thêm người dùng {$a->username} - người dùng với tên người dùng này đã được tạo qua plugin \'{$a->auth}\'.';
$string['auth_dbinsertusererror'] = 'Lỗi thêm người dùng {$a}';
$string['auth_dbname'] = 'Tên của cơ sở dữ liệu. Để trống nếu sử dụng DSN ODBC. Để trống nếu DSN PDO của bạn đã chứa tên cơ sở dữ liệu.';
$string['auth_dbname_key'] = 'Tên CSDL';
$string['auth_dbpass'] = 'Mật khẩu khớp với tên người dùng ở trên';
$string['auth_dbpass_key'] = 'Mật khẩu';
$string['auth_dbpasstype'] = '<p>Chỉ định định dạng mà trường mật khẩu đang sử dụng.</p> <p>Sử dụng \'internal\' nếu bạn muốn cơ sở dữ liệu bên ngoài quản lý tên người dùng và địa chỉ email, nhưng Moodle quản lý mật khẩu. Nếu bạn sử dụng \'internal\', bạn phải cung cấp một trường địa chỉ email đã được điền sẵn trong cơ sở dữ liệu bên ngoài, và bạn phải bật tác vụ \auth_db\task\sync_users đã được lập lịch. Moodle sẽ gửi email cho người dùng mới với mật khẩu tạm thời.</p>';
$string['auth_dbpasstype_key'] = 'Định dạng mật khẩu';
$string['auth_dbreviveduser'] = 'Đã phục hồi người dùng {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'Lỗi phục hồi người dùng {$a}';
$string['auth_dbsaltedcrypt'] = 'Mã hóa chuỗi một chiều Crypt';
$string['auth_dbsetupsql'] = 'Lệnh thiết lập SQL';
$string['auth_dbsetupsqlhelp'] = 'Lệnh SQL cho thiết lập cơ sở dữ liệu đặc biệt, thường được sử dụng để thiết lập mã hóa liên lạc - ví dụ cho MySQL và PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Đã đình chỉ người dùng {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'Lỗi đình chỉ người dùng {$a}';
$string['auth_dbsybasequoting'] = 'Sử dụng dấu ngoặc đơn kiểu Sybase';
$string['auth_dbsybasequotinghelp'] = 'Escaping dấu ngoặc đơn kiểu Sybase - cần thiết cho Oracle, MS SQL và một số cơ sở dữ liệu khác. Không sử dụng cho MySQL!';
$string['auth_dbsyncuserstask'] = 'Tác vụ đồng bộ hóa người dùng';
$string['auth_dbtable'] = 'Tên của bảng trong cơ sở dữ liệu';
$string['auth_dbtable_key'] = 'Bảng';
$string['auth_dbtype'] = 'Loại cơ sở dữ liệu (xem tài liệu <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Lớp trừu tượng cơ sở dữ liệu cho PHP</a> để biết chi tiết).';
$string['auth_dbtype_key'] = 'Loại CSDL';
$string['auth_dbupdateusers'] = 'Cập nhật người dùng';
$string['auth_dbupdateusers_description'] = 'Cũng như thêm người dùng mới, cập nhật người dùng hiện tại.';
$string['auth_dbupdatinguser'] = 'Đang cập nhật người dùng {$a->name} id {$a->id}';
$string['auth_dbuser'] = 'Tên người dùng có quyền truy cập đọc vào cơ sở dữ liệu';
$string['auth_dbuser_key'] = 'Người dùng CSDL';
$string['auth_dbuserstoadd'] = 'Các mục người dùng cần thêm: {$a}';
$string['auth_dbuserstoremove'] = 'Các mục người dùng cần xóa: {$a}';
$string['auth_dbnoexttable'] = 'Không chỉ định bảng bên ngoài.';
$string['auth_dbnouserfield'] = 'Không chỉ định trường người dùng bên ngoài.';
$string['auth_dbcannotconnect'] = 'Không thể kết nối đến cơ sở dữ liệu bên ngoài.';
$string['auth_dbcannotreadtable'] = 'Không thể đọc bảng bên ngoài.';
$string['auth_dbtableempty'] = 'Bảng bên ngoài trống.';
$string['auth_dbcolumnlist'] = 'Bảng bên ngoài chứa các cột sau:<br />{$a}';
$string['auth_dbupdateerror'] = 'Lỗi cập nhật cơ sở dữ liệu bên ngoài.';
$string['pluginname'] = 'Cơ sở dữ liệu bên ngoài';
$string['privacy:metadata'] = 'Plugin xác thực cơ sở dữ liệu bên ngoài không lưu trữ bất kỳ dữ liệu cá nhân nào.';
