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
 * Language strings' definition for Nextcloud repository.
 *
 * @package    repository_nextcloud
 * @copyright  2017 Project seminar (Learnweb, University of Münster)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
// General.
$string['pluginname'] = 'Nextcloud';
$string['configplugin'] = 'Cấu hình kho lưu trữ Nextcloud';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Xem Nextcloud';
$string['pluginname_help'] = 'Kho lưu trữ Nextcloud';

// Settings.
$string['issuervalidation_without'] = 'Bạn chưa chọn một máy chủ Nextcloud nào là Issuer của OAuth 2.';
$string['issuervalidation_valid'] = 'Hiện tại, Issuer {$a} đang hoạt động.';
$string['issuervalidation_invalid'] = 'Hiện tại, Issuer {$a} đang hoạt động, tuy nhiên nó không triển khai tất cả các điểm cuối cần thiết. Kho lưu trữ sẽ không hoạt động.';
$string['right_issuers'] = 'Các Issuer sau triển khai các điểm cuối cần thiết: <br> {$a}';
$string['no_right_issuers'] = 'Không có Issuer nào hiện triển khai tất cả các điểm cuối cần thiết. Vui lòng đăng ký một Issuer phù hợp.';
$string['chooseissuer'] = 'Issuer';
$string['chooseissuer_help'] = 'Để thêm một Issuer mới, đi tới Quản trị trang / Máy chủ / Dịch vụ OAuth 2.';
$string['foldername'] = 'Tên thư mục được tạo trong không gian cá nhân của người dùng Nextcloud để lưu tất cả các liên kết được kiểm soát truy cập.';
$string['foldername_help'] = 'Để đảm bảo rằng người dùng tìm thấy các tệp được chia sẻ với họ, các chia sẻ được lưu vào một thư mục cụ thể.

Thiết lập này xác định tên của thư mục. Đề xuất chọn một tên liên quan đến phiên bản Moodle của bạn.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Liên kết đến cấu hình dịch vụ OAuth 2">Cấu hình dịch vụ OAuth 2</a>';
$string['privacy:metadata'] = 'Plugin kho lưu trữ Nextcloud không lưu trữ hoặc truyền bất kỳ dữ liệu cá nhân nào.';
$string['internal'] = 'Nội bộ (tệp được lưu trữ trong Moodle)';
$string['external'] = 'Bên ngoài (chỉ các liên kết được lưu trữ trong Moodle)';
$string['both'] = 'Nội bộ và bên ngoài';
$string['supportedreturntypes'] = 'Tệp được hỗ trợ';
$string['defaultreturntype'] = 'Loại trả về mặc định';
$string['fileoptions'] = 'Các loại và giá trị mặc định cho tệp trả về có thể được cấu hình ở đây. Lưu ý rằng tất cả các tệp được liên kết từ bên ngoài sẽ được cập nhật để chủ sở hữu là tài khoản hệ thống Moodle.';

// Exceptions.
$string['configuration_exception'] = 'Đã xảy ra lỗi trong cấu hình của máy khách OAuth 2: {$a}';
$string['request_exception'] = 'Yêu cầu tới {$a->instance} đã thất bại. {$a->errormessage}';
$string['requestnotexecuted'] = 'Yêu cầu không thể được thực hiện. Nếu điều này xảy ra lặp đi lặp lại, vui lòng liên hệ với quản trị viên trang web.';
$string['notauthorized'] = 'Bạn không được ủy quyền để thực hiện yêu cầu này. Vui lòng đảm bảo bạn đã xác thực với tài khoản đúng.';
$string['contactadminwith'] = 'Hành động được yêu cầu không thể thực hiện. Nếu điều này xảy ra lặp đi lặp lại, vui lòng liên hệ với quản trị viên trang web với các thông tin bổ sung sau:<br>"<i>{$a}</i>".';
$string['cannotconnect'] = 'Người dùng không thể được xác thực. Vui lòng đăng nhập và sau đó tải lên tệp.';
$string['filenotaccessed'] = 'Không thể truy cập tệp được yêu cầu. Vui lòng kiểm tra xem bạn đã chọn một tệp hợp lệ và bạn đã xác thực với tài khoản đúng chưa.';
$string['couldnotmove'] = 'Không thể di chuyển tệp được yêu cầu vào thư mục {$a}.';
$string['invalidresponse'] = 'Phản hồi từ máy chủ không hợp lệ.';
$string['noclientconnection'] = 'Không thể kết nối các máy khách OAuth.';
$string['pathnotcreated'] = 'Đường dẫn thư mục {$a} không thể được tạo trong tài khoản hệ thống.';
$string['endpointnotdefined'] = 'Điểm cuối {$a} không được xác định.';

// Warnings.
$string['externalpubliclinkwarning'] = 'Cảnh báo: Tệp này sẽ trở thành công cộng.';
