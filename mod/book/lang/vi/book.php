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
 * Book module language strings
 *
 * @package    mod_book
 * @copyright  2004-2012 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['modulename'] = 'Sách';
$string['modulename_help'] = 'Mô-đun sách cho phép giáo viên tạo một tài nguyên nhiều trang theo định dạng giống như sách, với các chương và tiểu chương. Sách có thể chứa các tập tin media cũng như văn bản và hữu ích cho việc hiển thị các đoạn thông tin dài có thể chia nhỏ thành các phần.

Một cuốn sách có thể được sử dụng

* Để hiển thị tài liệu đọc cho các mô-đun học tập cá nhân
* Như là một cuốn sổ tay của bộ phận nhân viên
* Như là một danh mục trưng bày các tác phẩm của sinh viên';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Sách';
$string['pluginname'] = 'Sách';
$string['pluginadministration'] = 'Quản trị sách';

$string['toc'] = 'Mục lục';
$string['chapterandsubchaptersdeleted'] = 'Chương "{$a->title}" và {$a->subchapters} tiểu chương của nó đã bị xóa';
$string['chapterdeleted'] = 'Chương "{$a->title}" đã bị xóa';
$string['customtitles'] = 'Tiêu đề tùy chỉnh';
$string['customtitles_help'] = 'Thông thường tiêu đề chương được hiển thị trong mục lục (TOC) VÀ như là một tiêu đề phía trên nội dung.

Nếu ô tiêu đề tùy chỉnh được đánh dấu, tiêu đề chương KHÔNG được hiển thị như là một tiêu đề phía trên nội dung. Một tiêu đề khác (có thể dài hơn tiêu đề chương) có thể được nhập vào như một phần của nội dung.';
$string['chapters'] = 'Các chương';
$string['chaptertitle'] = 'Tiêu đề chương';
$string['content'] = 'Nội dung';
$string['deletechapter'] = 'Xóa chương "{$a}"';
$string['editingchapter'] = 'Chỉnh sửa chương';
$string['eventchaptercreated'] = 'Chương đã được tạo';
$string['eventchapterdeleted'] = 'Chương đã bị xóa';
$string['eventchapterupdated'] = 'Chương đã được cập nhật';
$string['eventchapterviewed'] = 'Chương đã được xem';
$string['editchapter'] = 'Chỉnh sửa chương "{$a}"';
$string['hidechapter'] = 'Ẩn chương "{$a}"';
$string['indicator:cognitivedepth'] = 'Sách nhận thức';
$string['indicator:cognitivedepth_help'] = 'Chỉ số này dựa trên độ sâu nhận thức mà học sinh đạt được trong tài nguyên Sách.';
$string['indicator:cognitivedepthdef'] = 'Sách nhận thức';
$string['indicator:cognitivedepthdef_help'] = 'Người tham gia đã đạt được phần trăm này của sự tham gia nhận thức được cung cấp bởi các hoạt động của Sách trong khoảng thời gian phân tích này (Mức độ = Không xem, Xem)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Sách xã hội';
$string['indicator:socialbreadth_help'] = 'Chỉ số này dựa trên độ rộng xã hội mà học sinh đạt được trong tài nguyên Sách.';
$string['indicator:socialbreadthdef'] = 'Sách xã hội';
$string['indicator:socialbreadthdef_help'] = 'Người tham gia đã đạt được phần trăm này của sự tham gia xã hội được cung cấp bởi các hoạt động của Sách trong khoảng thời gian phân tích này (Mức độ = Không tham gia, Tham gia một mình)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['movechapterup'] = 'Di chuyển chương lên "{$a}"';
$string['movechapterdown'] = 'Di chuyển chương xuống "{$a}"';
$string['privacy:metadata'] = 'Mô-đun hoạt động của sách không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['search:activity'] = 'Sách - thông tin tài nguyên';
$string['search:chapter'] = 'Sách - các chương';
$string['showchapter'] = 'Hiển thị chương "{$a}"';
$string['subchapter'] = 'Tiểu chương';
$string['navimages'] = 'Hình ảnh';
$string['navoptions'] = 'Các tùy chọn có sẵn cho liên kết điều hướng';
$string['navoptions_desc'] = 'Các tùy chọn để hiển thị điều hướng trên các trang sách';
$string['navstyle'] = 'Kiểu điều hướng';
$string['navstyle_help'] = '* Hình ảnh - Các biểu tượng được sử dụng cho điều hướng
* Văn bản - Tiêu đề chương được sử dụng cho điều hướng';
$string['navtext'] = 'Văn bản';
$string['navtoc'] = 'Chỉ mục lục';
$string['nocontent'] = 'Chưa có nội dung nào được thêm vào cuốn sách này.';
$string['numbering'] = 'Định dạng chương';
$string['numbering_help'] = '* Không có - Tiêu đề chương và tiểu chương không có định dạng
* Số - Các tiêu đề chương và tiểu chương được đánh số 1, 1.1, 1.2, 2, ...
* Dấu đầu dòng - Tiểu chương được thụt vào và hiển thị với dấu đầu dòng trong mục lục
* Thụt vào - Tiểu chương được thụt vào trong mục lục';
$string['numbering0'] = 'Không có';
$string['numbering1'] = 'Số';
$string['numbering2'] = 'Dấu đầu dòng';
$string['numbering3'] = 'Thụt vào';
$string['numberingoptions'] = 'Các tùy chọn có sẵn cho định dạng chương';
$string['numberingoptions_desc'] = 'Các tùy chọn để hiển thị các chương và tiểu chương trong mục lục';
$string['addafter'] = 'Thêm chương mới';
$string['addafterchapter'] = 'Thêm chương mới sau "{$a->title}"';
$string['previouschapter'] = 'Chương trước';
$string['confchapterdelete'] = 'Bạn có thực sự muốn xóa chương này không?';
$string['confchapterdeleteall'] = 'Bạn có thực sự muốn xóa chương này và tất cả các tiểu chương của nó không?';
$string['top'] = 'trên cùng';
$string['navprev'] = 'Trước';
$string['navprevtitle'] = 'Trước: {$a}';
$string['navnext'] = 'Sau';
$string['navnexttitle'] = 'Sau: {$a}';
$string['navexit'] = 'Thoát sách';
$string['book:addinstance'] = 'Thêm sách mới';
$string['book:read'] = 'Xem sách';
$string['book:edit'] = 'Chỉnh sửa các chương sách';
$string['book:viewhiddenchapters'] = 'Xem các chương sách bị ẩn';
$string['errorchapter'] = 'Lỗi khi đọc chương của sách.';

$string['page-mod-book-x'] = 'Bất kỳ trang mô-đun sách';
$string['subchapternotice'] = '(Chỉ khả dụng khi chương đầu tiên đã được tạo)';
$string['subplugintype_booktool'] = 'Công cụ sách';
$string['subplugintype_booktool_plural'] = 'Các công cụ sách';

$string['removeallbooktags'] = 'Xóa tất cả các thẻ sách';
$string['tagarea_book_chapters'] = 'Các chương sách';
$string['tagsdeleted'] = 'Các thẻ sách đã bị xóa';
