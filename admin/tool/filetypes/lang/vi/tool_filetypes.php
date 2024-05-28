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
 * Strings for custom file types.
 *
 * @package tool_filetypes
 * @copyright 2014 The Open University
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addfiletypes'] = 'Thêm loại tệp mới';
$string['corestring'] = 'Chuỗi ngôn ngữ thay thế';
$string['corestring_help'] = 'Thiết lập này có thể được sử dụng để chọn một chuỗi ngôn ngữ khác từ tệp ngôn ngữ core mimetypes.php. Thông thường nên để trống. Đối với các loại tùy chỉnh, hãy sử dụng trường mô tả.';
$string['defaulticon'] = 'Biểu tượng mặc định cho loại MIME';
$string['defaulticon_help'] = 'Nếu có nhiều phần mở rộng tệp có cùng loại MIME, hãy chọn tùy chọn này cho một trong các phần mở rộng để biểu tượng của nó sẽ được sử dụng khi xác định biểu tượng từ loại MIME.';
$string['delete_confirmation'] = 'Bạn có chắc chắn muốn xóa <strong>.{$a}</strong>?';
$string['deletea'] = 'Xóa {$a}';
$string['deletefiletypes'] = 'Xóa loại tệp';
$string['description'] = 'Mô tả tùy chỉnh';
$string['description_help'] = 'Mô tả loại tệp đơn giản, ví dụ: \'Sách điện tử Kindle\'. Nếu trang web của bạn hỗ trợ nhiều ngôn ngữ và sử dụng bộ lọc đa ngôn ngữ, bạn có thể nhập các thẻ đa ngôn ngữ vào trường này để cung cấp mô tả bằng các ngôn ngữ khác nhau.';
$string['descriptiontype'] = 'Loại mô tả';
$string['descriptiontype_help'] = 'Có ba cách để chỉ định mô tả.

* Hành vi mặc định sử dụng loại MIME. Nếu có một chuỗi ngôn ngữ trong mimetypes.php tương ứng với loại MIME đó, nó sẽ được sử dụng; nếu không, chính loại MIME sẽ được hiển thị cho người dùng.
* Bạn có thể chỉ định mô tả tùy chỉnh trên biểu mẫu này.
* Bạn có thể chỉ định tên của chuỗi ngôn ngữ trong mimetypes.php để sử dụng thay vì loại MIME.';
$string['descriptiontype_default'] = 'Mặc định (loại MIME hoặc chuỗi ngôn ngữ tương ứng nếu có)';
$string['descriptiontype_custom'] = 'Mô tả tùy chỉnh được chỉ định trong biểu mẫu này';
$string['descriptiontype_lang'] = 'Chuỗi ngôn ngữ thay thế (từ mimetypes.php)';
$string['displaydescription'] = 'Mô tả';
$string['editfiletypes'] = 'Chỉnh sửa loại tệp hiện có';
$string['emptylist'] = 'Không có loại tệp nào được định nghĩa.';
$string['error_addentry'] = 'Phần mở rộng loại tệp, mô tả, loại MIME và biểu tượng không được chứa ký tự xuống dòng và dấu chấm phẩy.';
$string['error_defaulticon'] = 'Một phần mở rộng tệp khác với cùng loại MIME đã được đánh dấu là biểu tượng mặc định.';
$string['error_extension'] = 'Phần mở rộng loại tệp <strong>{$a}</strong> đã tồn tại hoặc không hợp lệ. Phần mở rộng tệp phải là duy nhất và không được chứa ký tự đặc biệt.';
$string['error_notfound'] = 'Không thể tìm thấy loại tệp có phần mở rộng {$a}.';
$string['extension'] = 'Phần mở rộng';
$string['extension_help'] = 'Phần mở rộng tên tệp không có dấu chấm, ví dụ: \'mobi\'';
$string['groups'] = 'Nhóm loại';
$string['groups_help'] = 'Danh sách tùy chọn các nhóm loại tệp mà loại này thuộc về. Đây là các danh mục chung như \'tài liệu\' và \'hình ảnh\'.';
$string['icon'] = 'Biểu tượng tệp';
$string['icon_help'] = 'Tên tệp biểu tượng.

Danh sách các biểu tượng được lấy từ thư mục /pix/f bên trong cài đặt Moodle của bạn. Bạn có thể thêm biểu tượng tùy chỉnh vào thư mục này nếu cần.';
$string['mimetype'] = 'Loại MIME';
$string['mimetype_help'] = 'Loại MIME liên kết với loại tệp này, ví dụ: \'application/x-mobipocket-ebook\'';
$string['pluginname'] = 'Các loại tệp';
$string['revert'] = 'Khôi phục {$a} về mặc định của Moodle';
$string['revert_confirmation'] = 'Bạn có chắc chắn muốn khôi phục <strong>.{$a}</strong> về mặc định của Moodle, loại bỏ các thay đổi của bạn?';
$string['revertfiletype'] = 'Khôi phục loại tệp';
$string['source'] = 'Loại';
$string['source_custom'] = 'Tùy chỉnh';
$string['source_deleted'] = 'Đã xóa';
$string['source_modified'] = 'Đã chỉnh sửa';
$string['source_standard'] = 'Tiêu chuẩn';
$string['privacy:metadata'] = 'Plugin Các loại tệp không lưu trữ bất kỳ dữ liệu cá nhân nào.';

