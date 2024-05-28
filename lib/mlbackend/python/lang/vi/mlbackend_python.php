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
 * Strings for component 'mlbackend_python'
 *
 * @package   mlbackend_python
 * @copyright 2017 David Monllao {@link http://www.davidmonllao.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['errornoconfigdata'] = 'Cấu hình máy chủ chưa hoàn chỉnh.';
$string['errorserver'] = 'Lỗi máy chủ {$a}';
$string['host'] = 'Máy chủ';
$string['hostdesc'] = 'Máy chủ';
$string['packageinstalledshouldbe'] = 'Gói moodlemlbackend Python cần được cập nhật. Phiên bản yêu cầu là "{$a->required}" và phiên bản đã cài đặt là "{$a->installed}".';
$string['packageinstalledtoohigh'] = 'Gói moodlemlbackend Python không tương thích với phiên bản Moodle này. Phiên bản yêu cầu là "{$a->required}" hoặc cao hơn miễn là nó tương thích với API. Phiên bản đã cài đặt "{$a->installed}" quá cao.';
$string['pluginname'] = 'Backend học máy Python';
$string['port'] = 'Cổng';
$string['portdesc'] = 'Cổng';
$string['privacy:metadata'] = 'Plugin backend học máy Python không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['pythonpackagenotinstalled'] = 'Gói moodlemlbackend Python không được cài đặt hoặc có vấn đề với nó. Vui lòng thực thi "{$a}" từ giao diện dòng lệnh để biết thêm thông tin.';
$string['pythonpathnotdefined'] = 'Đường dẫn đến tập lệnh thực thi Python của bạn chưa được xác định. Vui lòng truy cập "{$a}" để thiết lập nó.';
$string['serversettingsinfo'] = 'Nếu \'Sử dụng máy chủ\' được bật, các cài đặt máy chủ sẽ được hiển thị.';
$string['username'] = 'Tên người dùng';
$string['usernamedesc'] = 'Chuỗi ký tự được sử dụng làm tên người dùng để giao tiếp giữa máy chủ Moodle và máy chủ Python.';
$string['password'] = 'Mật khẩu';
$string['passworddesc'] = 'Chuỗi ký tự được sử dụng làm mật khẩu để giao tiếp giữa máy chủ Moodle và máy chủ Python.';
$string['secure'] = 'Sử dụng HTTPS';
$string['securedesc'] = 'Cho phép sử dụng HTTP hoặc HTTPS.';
$string['useserver'] = 'Sử dụng máy chủ';
$string['useserverdesc'] = 'Gói backend học máy Python không được cài đặt trên máy chủ web mà trên một máy chủ khác.';
$string['tensorboardinfo'] = 'Khởi chạy TensorBoard từ dòng lệnh bằng cách gõ tensorboard --logdir=\'{$a}\' trên máy chủ web của bạn.';
