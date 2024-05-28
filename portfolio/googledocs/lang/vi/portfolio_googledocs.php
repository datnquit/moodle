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
 * Strings for component 'portfolio_googledocs', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   portfolio_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['clientid'] = 'ID khách hàng';
$string['noauthtoken'] = 'Không nhận được mã xác thực từ Google. Vui lòng đảm bảo rằng bạn đang cho phép Moodle truy cập vào tài khoản Google của bạn';
$string['nooauthcredentials'] = 'Yêu cầu thông tin xác thực OAuth.';
$string['nooauthcredentials_help'] = 'Để sử dụng plugin Google Drive portfolio, bạn phải cấu hình thông tin xác thực OAuth trong cài đặt portfolio.';
$string['nosessiontoken'] = 'Không có mã phiên ngăn chặn việc xuất sang Google.';
$string['oauthinfo'] = '<p>Để sử dụng plugin này, bạn phải đăng ký trang của mình với Google, như được mô tả trong tài liệu <a href="{$a->docsurl}">thiết lập Google OAuth 2.0</a>.</p><p>Trong quá trình đăng ký, bạn sẽ cần nhập URL sau làm \'URI chuyển hướng được ủy quyền\':</p><p>{$a->callbackurl}</p><p>Sau khi đăng ký, bạn sẽ nhận được ID khách hàng và bí mật để có thể cấu hình tất cả các plugin Google Drive.</p>';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata'] = 'Plugin này gửi dữ liệu ra bên ngoài tới tài khoản Google được liên kết. Nó không lưu trữ dữ liệu tại địa phương.';
$string['privacy:metadata:data'] = 'Dữ liệu cá nhân được truyền qua từ hệ thống con của portfolio.';
$string['sendfailed'] = 'Tệp {$a} không thể chuyển tới Google';
$string['secret'] = 'Bí mật';
