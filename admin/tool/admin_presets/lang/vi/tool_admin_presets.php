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
 * Admin tool presets plugin to load some settings.
 *
 * @package          tool_admin_presets
 * @copyright        2021 Pimenko <support@pimenko.com><pimenko.com>
 * @author           Jordan Kesraoui | Sylvain Revenu | Pimenko based on David Monllaó <david.monllao@urv.cat> code
 * @license          http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['actionexport'] = 'Tạo preset';
$string['actionexportbutton'] = 'Tạo preset';
$string['actionimport'] = 'Nhập preset';
$string['actualvalue'] = 'Giá trị thực';
$string['applyaction'] = 'Xem lại cài đặt và áp dụng';
$string['applypresetdescription'] = 'Nếu bạn thay đổi ý định sau khi áp dụng preset này, bạn có thể hoàn tác các thay đổi cài đặt qua \'Hiện lịch sử phiên bản\' trong menu hành động của preset.';
$string['author'] = 'Tác giả';
$string['basedescription'] = 'Preset cho phép bạn dễ dàng chuyển đổi giữa các cấu hình quản trị trang web khác nhau. Sau khi chọn một preset, bạn có thể bật thêm tính năng bất kỳ lúc nào khi cần thiết.';
$string['created'] = 'Đã tạo';
$string['currentvalue'] = 'Giá trị hiện tại';
$string['deletepreset'] = 'Bạn có chắc chắn muốn xóa preset quản trị trang web {$a}?';
$string['deletepreviouslyapplied'] = 'Preset này đã được áp dụng trước đó. Xóa một preset sẽ loại bỏ nó khỏi trang web của bạn hoàn toàn. Bạn sẽ không thể khôi phục cài đặt của mình như trước khi áp dụng preset này.';
$string['deletepresettitle'] = 'Xóa preset {$a}?';
$string['deleteshow'] = 'Xóa preset quản trị trang web';
$string['eventpresetdeleted'] = 'Preset đã được xóa';
$string['eventpresetdownloaded'] = 'Preset đã được tải xuống';
$string['eventpresetexported'] = 'Preset đã được tạo';
$string['eventpresetimported'] = 'Preset đã được nhập';
$string['eventpresetloaded'] = 'Preset đã được áp dụng';
$string['eventpresetpreviewed'] = 'Preset đã được xem trước';
$string['eventpresetreverted'] = 'Preset đã được khôi phục';
$string['eventpresetslisted'] = 'Các preset đã được liệt kê';
$string['exportdescription'] = 'Lưu tất cả cài đặt quản trị trang web hiện tại của bạn dưới dạng một preset để chia sẻ hoặc sử dụng lại.';
$string['exportshow'] = 'Tạo preset quản trị trang web';
$string['falseaction'] = 'Hành động không được hỗ trợ trong phiên bản này.';
$string['falsemode'] = 'Chế độ không được hỗ trợ trong phiên bản này.';
$string['import'] = 'Nhập';
$string['imported'] = 'Đã nhập';
$string['importdescription'] = 'Nhập cài đặt quản trị trang web dưới dạng một preset để áp dụng cho trang web của bạn.';
$string['importexecute'] = 'Nhập preset quản trị trang web';
$string['importshow'] = 'Nhập preset quản trị trang web';
$string['includesensiblesettings'] = 'Bao gồm cài đặt có mật khẩu';
$string['includesensiblesettings_help'] = 'Các cài đặt có mật khẩu chứa thông tin nhạy cảm cụ thể cho trang web của bạn. Chỉ bao gồm các cài đặt này nếu bạn tạo một preset để sử dụng lại trên trang web của mình.';
$string['loaddescription'] = 'Xem lại các thay đổi cài đặt trước khi áp dụng preset này.';
$string['loadexecute'] = 'Preset quản trị trang web đã được áp dụng';
$string['loadpreview'] = 'Xem trước preset quản trị trang web';
$string['loadselected'] = 'Áp dụng';
$string['loadshow'] = 'Áp dụng preset quản trị trang web';
$string['newvalue'] = 'Giá trị mới';
$string['nopresets'] = 'Bạn không có bất kỳ preset quản trị trang web nào.';
$string['nosettingswillbeapplied'] = 'Các cài đặt này giống như các cài đặt hiện tại; không có thay đổi để áp dụng.';
$string['nothingloaded'] = 'Không có thay đổi cài đặt nào được thực hiện vì các cài đặt trong preset giống như trên trang web của bạn.';
$string['novalidsettings'] = 'Không có cài đặt hợp lệ';
$string['novalidsettingsselected'] = 'Không có cài đặt hợp lệ được chọn';
$string['oldvalue'] = 'Giá trị cũ';
$string['pluginname'] = 'Preset quản trị trang web';
$string['presetapplicationslisttable'] = 'Bảng các ứng dụng preset quản trị trang web';
$string['presetslisttable'] = 'Bảng các preset quản trị trang web';
$string['presetmoodlerelease'] = 'Phiên bản Moodle';
$string['presetname'] = 'Tên preset';
$string['privacy:metadata'] = 'Công cụ preset quản trị trang web không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['renamepreset'] = 'Tên (tùy chọn)';
$string['rollback'] = 'Khôi phục phiên bản này';
$string['rollbackdescription'] = 'Sử dụng liên kết \'Khôi phục phiên bản này\' để quay lại cài đặt ngay trước khi preset được áp dụng.';
$string['rollbackexecute'] = 'Phiên bản đã được khôi phục từ preset quản trị trang web {$a}';
$string['rollbackfailures'] = 'Các cài đặt sau không thể được khôi phục, vì giá trị đã thay đổi sau khi áp dụng preset.';
$string['rollbackresults'] = 'Cài đặt đã được khôi phục thành công';
$string['rollbackshow'] = 'Lịch sử phiên bản preset {$a}';
$string['selectfile'] = 'Chọn tập tin';
$string['settingname'] = 'Tên cài đặt';
$string['settingsapplied'] = 'Thay đổi cài đặt';
$string['settingsappliednotification'] = 'Xem lại các thay đổi cài đặt sau đã được áp dụng.
<br/>Nếu bạn thay đổi ý định, bạn có thể hoàn tác các thay đổi cài đặt qua \'Hiện lịch sử phiên bản\' trong menu hành động của preset.';
$string['settingsnotapplicable'] = 'Cài đặt không áp dụng cho phiên bản Moodle này';
$string['settingsnotapplied'] = 'Cài đặt không thay đổi';
$string['settingstobeapplied'] = 'Thay đổi cài đặt';
$string['showhistory'] = 'Hiện lịch sử phiên bản';
$string['site'] = 'Trang web';
$string['timeapplied'] = 'Ngày';
$string['wrongfile'] = 'Tập tin sai';
