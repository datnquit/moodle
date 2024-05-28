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
 * Strings for component 'repository_dropbox', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   repository_dropbox
 * @copyright 2010 Dongsheng Cai
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['configplugin'] = 'Cấu hình Dropbox';
$string['crontask'] = 'Xử lý nền cho kho lưu trữ Dropbox';
$string['notitle'] = 'không có tiêu đề';
$string['remember'] = 'Ghi nhớ tôi';
$string['pluginname'] = 'Dropbox';
$string['dropbox'] = 'Dropbox';
$string['issuer'] = 'Dịch vụ OAuth 2';
$string['issuer_help'] = 'Chọn dịch vụ OAuth 2 được cấu hình để trò chuyện với API Dropbox. Nếu dịch vụ chưa tồn tại, bạn sẽ cần tạo mới.';
$string['cachelimit'] = 'Giới hạn bộ nhớ cache';
$string['cachelimit_info'] = 'Nhập kích thước tối đa của các tệp (tính bằng byte) được lưu trong bộ nhớ cache trên máy chủ cho các bí danh/đường dẫn ngắn của Dropbox. Các tệp đã cache sẽ được phục vụ khi nguồn không còn khả dụng nữa. Giá trị rỗng hoặc bằng không có nghĩa là lưu trữ cache của tất cả các tệp mặc dù kích thước.';
$string['dropbox:view'] = 'Xem một thư mục Dropbox';
$string['logoutdesc'] = '(Đăng xuất khi bạn đã sử dụng xong Dropbox)';
$string['oauth2redirecturi'] = 'URI Chuyển hướng OAuth 2';
$string['privacy:metadata:repository_dropbox'] = 'Plugin kho lưu trữ Dropbox không lưu trữ bất kỳ dữ liệu cá nhân nào, nhưng truyền dữ liệu người dùng từ Moodle đến hệ thống từ xa.';
$string['privacy:metadata:repository_dropbox:query'] = 'Truy vấn văn bản tìm kiếm người dùng kho lưu trữ Dropbox.';

// Không còn được hỗ trợ từ Moodle 4.0 trở đi.
$string['apikey'] = 'Khóa API Dropbox';
$string['secret'] = 'Bí mật Dropbox';
$string['instruction'] = 'Bạn có thể nhận được API Key và bí mật của mình từ <a href="https://www.dropbox.com/developers/apps">Dropbox developers</a>. Khi thiết lập khóa của bạn, vui lòng chọn "Full Dropbox" làm "Cấp quyền truy cập".';
