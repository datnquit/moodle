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
 * English strings for MNet enrolment plugin.
 *
 * @package    enrol_mnet
 * @copyright  2010 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['error_multiplehost'] = 'Một số phiên bản của plugin ghi danh MNet đã tồn tại cho máy chủ này. Chỉ cho phép một phiên bản mỗi máy chủ và/hoặc một phiên bản cho \'Tất cả các máy chủ\'.';
$string['instancename'] = 'Tên phương thức ghi danh';
$string['instancename_help'] = 'Bạn có thể tùy chọn đổi tên phiên bản này của phương thức ghi danh MNet. Nếu bạn để trống trường này, tên mặc định sẽ được sử dụng, chứa tên của máy chủ từ xa và vai trò được gán cho người dùng của họ.';
$string['mnet:config'] = 'Cấu hình các trường hợp ghi danh MNet';
$string['mnet_enrol_description'] = 'Xuất bản dịch vụ này để cho phép các quản trị viên tại {$a} ghi danh học sinh của họ vào các khóa học bạn đã tạo trên máy chủ của mình.<br/><ul><li><em>Phụ thuộc</em>: Bạn cũng phải <strong>đăng ký</strong> dịch vụ SSO (Nhà cung cấp danh tính) trên {$a}.</li><li><em>Phụ thuộc</em>: Bạn cũng phải <strong>xuất bản</strong> dịch vụ SSO (Nhà cung cấp dịch vụ) đến {$a}.</li></ul><br/>Đăng ký dịch vụ này để có thể ghi danh học sinh của bạn vào các khóa học trên {$a}.<br/><ul><li><em>Phụ thuộc</em>: Bạn cũng phải <strong>xuất bản</strong> dịch vụ SSO (Nhà cung cấp danh tính) đến {$a}.</li><li><em>Phụ thuộc</em>: Bạn cũng phải <strong>đăng ký</strong> dịch vụ SSO (Nhà cung cấp dịch vụ) trên {$a}.</li></ul><br/>';
$string['mnet_enrol_name'] = 'Dịch vụ ghi danh từ xa';
$string['pluginname'] = 'Ghi danh từ xa MNet';
$string['pluginname_desc'] = 'Cho phép máy chủ MNet từ xa ghi danh người dùng của họ vào các khóa học của chúng ta.';
$string['remotesubscriber'] = 'Máy chủ từ xa';
$string['remotesubscriber_help'] = 'Chọn \'Tất cả các máy chủ\' để mở khóa học này cho tất cả các đối tác MNet mà chúng ta đang cung cấp dịch vụ ghi danh từ xa. Hoặc chọn một máy chủ duy nhất để chỉ làm cho khóa học này có sẵn cho người dùng của họ.';
$string['remotesubscribersall'] = 'Tất cả các máy chủ';
$string['roleforremoteusers'] = 'Vai trò cho người dùng của họ';
$string['roleforremoteusers_help'] = 'Vai trò nào mà người dùng từ xa từ máy chủ được chọn sẽ nhận.';
$string['privacy:metadata'] = 'Plugin ghi danh từ xa MNet không lưu trữ bất kỳ dữ liệu cá nhân nào.';
