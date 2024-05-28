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
 * Strings for component 'enrol_database', language 'en'.
 *
 * @package   enrol_database
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['database:config'] = 'Cấu hình các thể hiện đăng ký cơ sở dữ liệu';
$string['database:unenrol'] = 'Hủy đăng ký người dùng bị đình chỉ';
$string['dbencoding'] = 'Mã hóa cơ sở dữ liệu';
$string['dbhost'] = 'Máy chủ cơ sở dữ liệu';
$string['dbhost_desc'] = 'Nhập địa chỉ IP máy chủ cơ sở dữ liệu hoặc tên máy chủ. Sử dụng tên DSN hệ thống nếu dùng ODBC. Sử dụng DSN PDO nếu dùng PDO.';
$string['dbname'] = 'Tên cơ sở dữ liệu';
$string['dbname_desc'] = 'Để trống nếu sử dụng tên DSN trong máy chủ cơ sở dữ liệu.';
$string['dbpass'] = 'Mật khẩu cơ sở dữ liệu';
$string['dbsetupsql'] = 'Lệnh thiết lập cơ sở dữ liệu';
$string['dbsetupsql_desc'] = 'Lệnh SQL cho thiết lập cơ sở dữ liệu đặc biệt, thường được sử dụng để thiết lập mã hóa giao tiếp - ví dụ cho MySQL và PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Sử dụng dấu nháy đơn kiểu sybase';
$string['dbsybasequoting_desc'] = 'Thoát dấu nháy đơn kiểu Sybase - cần thiết cho Oracle, MS SQL và một số cơ sở dữ liệu khác. Không sử dụng cho MySQL!';
$string['dbtype'] = 'Trình điều khiển cơ sở dữ liệu';
$string['dbtype_desc'] = 'Tên trình điều khiển cơ sở dữ liệu ADOdb, loại động cơ cơ sở dữ liệu bên ngoài.';
$string['dbuser'] = 'Người dùng cơ sở dữ liệu';
$string['debugdb'] = 'Gỡ lỗi ADOdb';
$string['debugdb_desc'] = 'Gỡ lỗi kết nối ADOdb tới cơ sở dữ liệu bên ngoài - sử dụng khi gặp trang trắng trong quá trình đăng nhập. Không phù hợp cho các trang web sản xuất!';
$string['defaultcategory'] = 'Danh mục khóa học mới mặc định';
$string['defaultcategory_desc'] = 'Danh mục mặc định cho các khóa học được tạo tự động. Được sử dụng khi không có ID danh mục mới hoặc không tìm thấy.';
$string['defaultrole'] = 'Vai trò mặc định';
$string['defaultrole_desc'] = 'Vai trò sẽ được gán mặc định nếu không có vai trò nào khác được chỉ định trong bảng bên ngoài.';
$string['ignorehiddencourses'] = 'Bỏ qua các khóa học ẩn';
$string['ignorehiddencourses_desc'] = 'Nếu được bật, người dùng sẽ không được đăng ký vào các khóa học được đặt là không khả dụng cho sinh viên.';
$string['localcategoryfield'] = 'Trường danh mục địa phương';
$string['localcoursefield'] = 'Trường khóa học địa phương';
$string['localrolefield'] = 'Trường vai trò địa phương';
$string['localuserfield'] = 'Trường người dùng địa phương';
$string['newcoursetable'] = 'Bảng khóa học mới từ xa';
$string['newcoursetable_desc'] = 'Chỉ định tên của bảng chứa danh sách các khóa học cần được tạo tự động. Để trống nghĩa là không có khóa học nào được tạo.';
$string['newcoursecategory'] = 'Trường danh mục khóa học mới';
$string['newcoursefullname'] = 'Trường tên đầy đủ khóa học mới';
$string['newcourseidnumber'] = 'Trường số ID khóa học mới';
$string['newcourseshortname'] = 'Trường tên ngắn khóa học mới';
$string['pluginname'] = 'Cơ sở dữ liệu bên ngoài';
$string['pluginname_desc'] = 'Bạn có thể sử dụng một cơ sở dữ liệu bên ngoài (gần như bất kỳ loại nào) để kiểm soát việc đăng ký của mình. Giả định rằng cơ sở dữ liệu bên ngoài của bạn chứa ít nhất một trường chứa ID khóa học và một trường chứa ID người dùng. Những trường này được so sánh với các trường bạn chọn trong các bảng khóa học và người dùng địa phương.';
$string['remotecoursefield'] = 'Trường khóa học từ xa';
$string['remotecoursefield_desc'] = 'Tên của trường trong bảng từ xa mà chúng tôi sử dụng để khớp với các mục trong bảng khóa học.';
$string['remoteenroltable'] = 'Bảng đăng ký người dùng từ xa';
$string['remoteenroltable_desc'] = 'Chỉ định tên của bảng chứa danh sách các đăng ký người dùng. Để trống nghĩa là không có đồng bộ đăng ký người dùng nào.';
$string['remoteotheruserfield'] = 'Trường Người dùng Khác từ xa';
$string['remoteotheruserfield_desc'] = 'Tên của trường trong bảng từ xa mà chúng tôi sử dụng để gắn cờ phân công vai trò "Người dùng Khác".';
$string['remoterolefield'] = 'Trường vai trò từ xa';
$string['remoterolefield_desc'] = 'Tên của trường trong bảng từ xa mà chúng tôi sử dụng để khớp với các mục trong bảng vai trò.';
$string['remoteuserfield'] = 'Trường người dùng từ xa';
$string['settingsheaderdb'] = 'Kết nối cơ sở dữ liệu bên ngoài';
$string['settingsheaderlocal'] = 'Ánh xạ trường địa phương';
$string['settingsheaderremote'] = 'Đồng bộ đăng ký từ xa';
$string['settingsheadernewcourses'] = 'Tạo khóa học mới';
$string['syncenrolmentstask'] = 'Nhiệm vụ đồng bộ đăng ký cơ sở dữ liệu bên ngoài';
$string['remoteuserfield_desc'] = 'Tên của trường trong bảng từ xa mà chúng tôi sử dụng để khớp với các mục trong bảng người dùng.';
$string['templatecourse'] = 'Mẫu khóa học mới';
$string['templatecourse_desc'] = 'Tùy chọn: các khóa học được tạo tự động có thể sao chép cài đặt của chúng từ một khóa học mẫu. Nhập tên ngắn của khóa học mẫu tại đây.';
$string['privacy:metadata'] = 'Plugin đăng ký cơ sở dữ liệu bên ngoài không lưu trữ bất kỳ dữ liệu cá nhân nào.';