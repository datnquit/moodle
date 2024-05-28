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
 * Strings for component 'tool_uploaduser', language 'en', branch 'MOODLE_22_STABLE'
 *
 * @package    tool
 * @subpackage uploaduser
 * @copyright  2011 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['allowdeletes'] = 'Cho phép xóa';
$string['allowrenames'] = 'Cho phép đổi tên';
$string['allowsuspends'] = 'Cho phép tạm dừng và kích hoạt tài khoản';
$string['assignedsysrole'] = 'Phân công vai trò hệ thống {$a}';
$string['clidefault'] = 'Mặc định:';
$string['clierrorargument'] = 'Giá trị cho đối số --{$a->name} không hợp lệ. Các giá trị cho phép: {$a->values}';
$string['clifile'] = 'Đường dẫn đến tệp CSV chứa dữ liệu người dùng. Bắt buộc.';
$string['clifilenotreadable'] = 'Tệp {$a} không tồn tại hoặc không đọc được';
$string['clihelp'] = 'In hướng dẫn này ra.';
$string['climissingargument'] = 'Đối số --{$a} bắt buộc';
$string['clititle'] = 'Công cụ Tải lên người dùng dòng lệnh.';
$string['clivalidationerror'] = 'Lỗi xác thực:';
$string['csvdelimiter'] = 'Bộ phân cách CSV';
$string['defaultvalues'] = 'Giá trị mặc định';
$string['deleteerrors'] = 'Lỗi xóa';
$string['duplicateemail'] = 'Phát hiện nhiều người dùng với email {$a}';
$string['encoding'] = 'Mã hóa';
$string['errormnetadd'] = 'Không thể thêm người dùng từ xa';
$string['errorprefix'] = 'Lỗi:';
$string['errors'] = 'Lỗi';
$string['examplecsv'] = 'Tệp văn bản mẫu';
$string['examplecsv_help'] = 'Để sử dụng tệp văn bản mẫu, hãy tải xuống và mở nó bằng trình soạn thảo văn bản hoặc bảng tính. Để dòng đầu tiên không thay đổi, sau đó chỉnh sửa các dòng sau (bản ghi) và thêm dữ liệu người dùng của bạn, thêm thêm dòng khi cần. Lưu tệp dưới dạng CSV sau đó tải lên.

Tệp văn bản mẫu cũng có thể được sử dụng cho việc kiểm tra, vì bạn có thể xem trước dữ liệu người dùng và có thể chọn hủy bỏ trước khi tài khoản người dùng được tạo.';
$string['infoprefix'] = 'Thông tin:';
$string['invalidupdatetype'] = 'Không thể chọn tùy chọn này với loại tải lên đã chọn.';
$string['invaliduserdata'] = 'Dữ liệu không hợp lệ được phát hiện cho người dùng {$a} và đã được tự động làm sạch.';
$string['invalidtheme'] = 'Chủ đề "{$a}" không được cài đặt và sẽ bị bỏ qua.';
$string['linex'] = 'Dòng {$a}';
$string['matchemail'] = 'Khớp theo địa chỉ email';
$string['nochanges'] = 'Không có thay đổi';
$string['notheme'] = 'Không có chủ đề được xác định cho người dùng này.';
$string['pluginname'] = 'Tải lên người dùng';
$string['renameerrors'] = 'Lỗi đổi tên';
$string['requiredtemplate'] = 'Bắt buộc. Bạn có thể sử dụng cú pháp mẫu ở đây (%l = họ, %f = tên, %u = tên người dùng). Xem trợ giúp để biết chi tiết và ví dụ.';
$string['rowpreviewnum'] = 'Số dòng xem trước';
$string['unassignedsysrole'] = 'Không phân công vai trò hệ thống {$a}';
$string['userthemesnotallowed'] = 'Chủ đề người dùng không được kích hoạt, vì vậy bất kỳ chủ đề nào được bao gồm trong tệp người dùng tải lên sẽ bị bỏ qua.';
$string['uploadpicture_baduserfield'] = 'Thuộc tính người dùng được chỉ định không hợp lệ. Vui lòng thử lại.';
$string['uploadpicture_cannotmovezip'] = 'Không thể di chuyển tệp nén đến thư mục tạm.';
$string['uploadpicture_cannotprocessdir'] = 'Không thể xử lý các tệp đã giải nén.';
$string['uploadpicture_cannotsave'] = 'Không thể lưu hình ảnh cho người dùng {$a}. Kiểm tra tệp hình ảnh gốc.';
$string['uploadpicture_cannotunzip'] = 'Không thể giải nén tệp hình ảnh.';
$string['uploadpicture_invalidfilename'] = 'Tệp hình ảnh {$a} có ký tự không hợp lệ trong tên của nó. Đang bỏ qua.';
$string['uploadpicture_overwrite'] = 'Ghi đè lên hình ảnh người dùng hiện có?';
$string['uploadpicture_userfield'] = 'Thuộc tính người dùng để sử dụng để khớp hình ảnh:';
$string['uploadpicture_usernotfound'] = 'Không tìm thấy người dùng có giá trị \'{$a->uservalue}\' cho \'{$a->userfield}\'. Đang bỏ qua.';
$string['uploadpicture_userskipped'] = 'Bỏ qua người dùng {$a} (đã có hình ảnh).';
$string['uploadpicture_userupdated'] = 'Hình ảnh được cập nhật cho người dùng {$a}.';
$string['uploadpictures'] = 'Tải lên hình ảnh người dùng';
$string['uploadpictures_help'] = 'Hình ảnh người dùng có thể được tải lên dưới dạng một tệp nén chứa các tệp hình ảnh. Các tệp hình ảnh nên được đặt tên theo thuộc tính người dùng được chọn-miền.extension, ví dụ user1234.jpg cho một người dùng có tên người dùng là user1234.';
$string['uploadusers'] = 'Tải lên người dùng';
$string['uploadusers_help'] = 'Người dùng có thể được tải lên (và tùy chọn được đăng ký vào các khóa học) thông qua tệp văn bản. Định dạng của tệp nên như sau:

* Mỗi dòng của tệp chứa một bản ghi
* Mỗi bản ghi là một loạt dữ liệu được phân tách bởi bộ phân cách được chọn
* Bản ghi đầu tiên chứa một danh sách các tên trường xác định định dạng của phần còn lại của tệp
* Các tên trường bắt buộc là tên người dùng, mật khẩu, tên, họ, email';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Xem trước người dùng tải lên';
$string['uploadusersresult'] = 'Kết quả tải lên người dùng';
$string['uploaduser:uploaduserpictures'] = 'Tải lên hình ảnh người dùng';
$string['useraccountupdated'] = 'Người dùng đã được cập nhật';
$string['useraccountuptodate'] = 'Người dùng đã được cập nhật';
$string['userdeleted'] = 'Người dùng đã bị xóa';
$string['userrenamed'] = 'Người dùng đã được đổi tên';
$string['userscreated'] = 'Người dùng đã được tạo';
$string['usersdeleted'] = 'Người dùng đã bị xóa';
$string['usersrenamed'] = 'Người dùng đã được đổi tên';
$string['usersskipped'] = 'Người dùng đã được bỏ qua';
$string['usersupdated'] = 'Người dùng đã được cập nhật';
$string['usersweakpassword'] = 'Người dùng có mật khẩu yếu';
$string['uubulk'] = 'Chọn cho các hành động người dùng hàng loạt';
$string['uubulkall'] = 'Tất cả người dùng';
$string['uubulknew'] = 'Người dùng mới';
$string['uubulkupdated'] = 'Người dùng đã được cập nhật';
$string['uucsvline'] = 'Dòng CSV';
$string['uulegacy1role'] = '(Học viên Ban đầu) typeN=1';
$string['uulegacy2role'] = '(Giáo viên Ban đầu) typeN=2';
$string['uulegacy3role'] = '(Giáo viên không chỉnh sửa Ban đầu) typeN=3';
$string['uunoemailduplicates'] = 'Ngăn chặn các bản sao địa chỉ email';
$string['uuoptype'] = 'Loại tải lên';
$string['uuoptype_addinc'] = 'Thêm tất cả, thêm số vào tên người dùng nếu cần';
$string['uuoptype_addnew'] = 'Chỉ thêm mới, bỏ qua người dùng đã tồn tại';
$string['uuoptype_addupdate'] = 'Thêm mới và cập nhật người dùng đã tồn tại';
$string['uuoptype_update'] = 'Chỉ cập nhật người dùng đã tồn tại';
$string['uupasswordcron'] = 'Tạo trong cron';
$string['uupasswordnew'] = 'Mật khẩu mới của người dùng';
$string['uupasswordold'] = 'Mật khẩu hiện có của người dùng';
$string['uustandardusernames'] = 'Chuẩn hóa tên người dùng';
$string['uuupdateall'] = 'Ghi đè bằng tệp và mặc định';
$string['uuupdatefromfile'] = 'Ghi đè bằng tệp';
$string['uuupdatemissing'] = 'Điền vào các mục thiếu từ tệp và mặc định';
$string['uuupdatetype'] = 'Chi tiết người dùng hiện có';
$string['uuusernametemplate'] = 'Mẫu tên người dùng';
$string['privacy:metadata'] = 'Trình cắm Tải lên người dùng không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['warningprefix'] = 'Cảnh báo:';

