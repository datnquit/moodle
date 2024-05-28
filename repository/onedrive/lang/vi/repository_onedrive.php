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
 * Language file definitions for onedrive repository
 *
 * @package    repository_onedrive
 * @copyright  2012 Lancaster University Network Services Ltd
 * @author     Dan Poltawski <dan.poltawski@luns.net.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['access'] = 'Truy cập';
$string['both'] = 'Nội bộ và bên ngoài';
$string['cachedef_folder'] = 'IDs tệp của OneDrive cho các thư mục trong tài khoản hệ thống';
$string['configplugin'] = 'Cấu hình plugin OneDrive';
$string['confirmimportskydrive'] = 'Bạn có chắc chắn muốn nhập tất cả các tệp từ kho lưu trữ Microsoft SkyDrive vào kho lưu trữ Microsoft OneDrive không? Kho lưu trữ Microsoft OneDrive phải được cấu hình và hoạt động để các tệp đã nhập tiếp tục hoạt động như trước. Cảnh báo: Hành động này không thể được hoàn tác!';
$string['defaultreturntype'] = 'Loại trả về mặc định';
$string['external'] = 'Bên ngoài (chỉ liên kết được lưu trữ trong Moodle)';
$string['fileoptions'] = 'Các loại và giá trị mặc định cho các tệp trả về có thể cấu hình ở đây. Lưu ý rằng tất cả các tệp được liên kết từ bên ngoài sẽ được cập nhật để chủ sở hữu là tài khoản hệ thống Moodle.';
$string['importskydrivefiles'] = 'Nhập tệp từ kho lưu trữ Microsoft SkyDrive';
$string['internal'] = 'Nội bộ (các tệp được lưu trữ trong Moodle)';
$string['issuer_help'] = 'Chọn dịch vụ OAuth 2 được cấu hình để trò chuyện với API OneDrive. Nếu dịch vụ chưa tồn tại, bạn cần phải tạo nó.';
$string['issuer'] = 'Dịch vụ OAuth 2';
$string['mysitenotfound'] = 'Bạn chưa từng đăng nhập vào OneDrive trước đây. Bạn phải đăng nhập vào OneDrive ít nhất một lần trước khi nó có thể được sử dụng với Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Liên kết đến cấu hình dịch vụ OAuth 2">Cấu hình dịch vụ OAuth 2</a>';
$string['owner'] = 'Sở hữu bởi: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['removetempaccesstask'] = 'Xóa quyền truy cập ghi tạm thời từ các liên kết được kiểm soát';
$string['searchfor'] = 'Tìm kiếm cho {$a}';
$string['servicenotenabled'] = 'Truy cập chưa được cấu hình.';
$string['skydrivefilesexist'] = 'Kho lưu trữ Microsoft SkyDrive đã được kích hoạt nhưng đã bị loại bỏ. Vui lòng đảm bảo bạn di chuyển các tệp từ SkyDrive vào kho lưu trữ OneDrive ngay lập tức. Trong Moodle 4.4 sẽ không còn khả năng này.';
$string['skydrivefilesimported'] = 'Tất cả các tệp đã được nhập từ kho lưu trữ Microsoft SkyDrive.';
$string['skydrivefilesnotimported'] = 'Một số tệp không thể được nhập từ kho lưu trữ Microsoft SkyDrive.';
$string['onedrive:view'] = 'Xem kho lưu trữ OneDrive';
$string['supportedreturntypes'] = 'Các loại tệp được hỗ trợ';
$string['privacy:metadata:repository_onedrive'] = 'Kho lưu trữ Microsoft OneDrive lưu trữ các quyền truy cập tạm thời và truyền dữ liệu người dùng từ Moodle đến hệ thống từ xa.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'Truy vấn văn bản tìm kiếm người dùng của kho lưu trữ Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'ID mục của OneDrive Microsoft với quyền truy cập tạm thời.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'ID quyền truy cập tạm thời của OneDrive Microsoft.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'Ngày/giờ tạo quyền truy cập tạm thời của OneDrive Microsoft.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'Ngày/giờ sửa đổi quyền truy cập tạm thời của OneDrive Microsoft.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'ID của người dùng sửa đổi quyền truy cập tạm thời của OneDrive Microsoft.';
