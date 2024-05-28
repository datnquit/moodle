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
 * Strings for Language customisation admin tool
 *
 * @package    tool
 * @subpackage customlang
 * @copyright  2010 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Lưu các chuỗi vào gói ngôn ngữ';
$string['checkout'] = 'Mở gói ngôn ngữ để chỉnh sửa';
$string['checkoutdone'] = 'Gói ngôn ngữ đã được tải';
$string['checkoutinprogress'] = 'Đang tải gói ngôn ngữ';
$string['cliexportfileexists'] = 'Tệp cho {$a->lang} đã tồn tại, bỏ qua. Nếu bạn muốn ghi đè, hãy thêm tùy chọn --override=true.';
$string['cliexportheading'] = 'Bắt đầu xuất các tệp ngôn ngữ.';
$string['cliexportnofilefoundforlang'] = 'Không tìm thấy tệp để xuất. Bỏ qua xuất ngôn ngữ này.';
$string['cliexportfilenotfoundforcomponent'] = 'Không tìm thấy tệp {$a->filepath} cho ngôn ngữ {$a->lang}. Bỏ qua tệp này.';
$string['cliexportstartexport'] = 'Đang xuất ngôn ngữ {$a}';
$string['cliexportzipdone'] = 'Đã tạo zip: {$a}';
$string['cliexportzipfail'] = 'Không thể tạo zip {$a}';
$string['clifiles'] = 'Các tệp cần nhập vào {$a}';
$string['cliimporting'] = 'Chuỗi tệp nhập (chế độ {$a})';
$string['clinolog'] = 'Không có gì để nhập vào {$a}';
$string['climissinglang'] = 'Thiếu ngôn ngữ';
$string['climissingfiles'] = 'Thiếu tệp hợp lệ';
$string['climissingmode'] = 'Thiếu hoặc chế độ không hợp lệ (hợp lệ là tất cả, mới hoặc cập nhật)';
$string['climissingsource'] = 'Thiếu tệp hoặc thư mục';
$string['confirmcheckin'] = 'Bạn sắp lưu các sửa đổi vào gói ngôn ngữ cục bộ của mình. Điều này sẽ xuất các chuỗi tùy chỉnh từ dịch giả vào thư mục dữ liệu trang web của bạn và trang web của bạn sẽ bắt đầu sử dụng các chuỗi đã sửa đổi. Nhấn \'Tiếp tục\' để tiến hành lưu.';
$string['customlang:edit'] = 'Chỉnh sửa bản dịch cục bộ';
$string['customlang:export'] = 'Xuất bản dịch cục bộ';
$string['customlang:view'] = 'Xem bản dịch cục bộ';
$string['export'] = 'Xuất chuỗi tùy chỉnh';
$string['exportfilter'] = 'Chọn thành phần để xuất';
$string['editlangpack'] = 'Chỉnh sửa gói ngôn ngữ';
$string['filter'] = 'Lọc chuỗi';
$string['filtercomponent'] = 'Hiển thị chuỗi của các thành phần này';
$string['filtercustomized'] = 'Chỉ tùy chỉnh';
$string['filtermodified'] = 'Chỉ sửa đổi trong phiên này';
$string['filteronlyhelps'] = 'Chỉ trợ giúp';
$string['filtershowstrings'] = 'Hiển thị chuỗi';
$string['filterstringid'] = 'Định danh chuỗi';
$string['filtersubstring'] = 'Chỉ chuỗi chứa';
$string['headingcomponent'] = 'Thành phần';
$string['headinglocal'] = 'Tùy chỉnh cục bộ';
$string['headingstandard'] = 'Văn bản tiêu chuẩn';
$string['headingstringid'] = 'Chuỗi';
$string['import'] = 'Nhập chuỗi tùy chỉnh';
$string['import_mode'] = 'Chế độ nhập';
$string['import_new'] = 'Chỉ tạo các chuỗi không có tùy chỉnh cục bộ';
$string['import_update'] = 'Chỉ cập nhật các chuỗi có tùy chỉnh cục bộ';
$string['import_all'] = 'Tạo hoặc cập nhật tất cả các chuỗi từ các thành phần';
$string['importfile'] = 'Tệp nhập';
$string['langpack'] = 'Thành phần ngôn ngữ';
$string['markinguptodate'] = 'Đánh dấu tùy chỉnh là cập nhật';
$string['markinguptodate_help'] = 'Bản dịch tùy chỉnh có thể bị lỗi thời nếu bản gốc tiếng Anh hoặc bản dịch chính đã được sửa đổi kể từ khi chuỗi được tùy chỉnh trên trang của bạn. Xem lại bản dịch tùy chỉnh. Nếu bạn thấy nó cập nhật, hãy chọn vào ô. Ngược lại, hãy chỉnh sửa nó.';
$string['markuptodate'] = 'đánh dấu là cập nhật';
$string['modifiedno'] = 'Không có chuỗi nào đã được sửa đổi để lưu.';
$string['modifiednum'] = 'Có {$a} chuỗi đã được sửa đổi. Bạn có muốn lưu các thay đổi này vào gói ngôn ngữ cục bộ của mình không?';
$string['nolocallang'] = 'Không tìm thấy chuỗi cục bộ nào.';
$string['notice_ignorenew'] = 'Bỏ qua chuỗi {$a->component}/{$a->stringid} vì nó không được tùy chỉnh.';
$string['notice_ignoreupdate'] = 'Bỏ qua chuỗi {$a->component}/{$a->stringid} vì nó đã được định nghĩa.';
$string['notice_inexitentstring'] = 'Không tìm thấy chuỗi {$a->component}/{$a->stringid}.';
$string['notice_missingcomponent'] = 'Thiếu thành phần {$a->component}.';
$string['notice_success'] = 'Chuỗi {$a->component}/{$a->stringid} đã được cập nhật thành công.';
$string['nostringsfound'] = 'Không tìm thấy chuỗi nào, vui lòng thay đổi cài đặt bộ lọc';
$string['placeholder'] = 'Giá trị giữ chỗ';
$string['placeholder_help'] = 'Giá trị giữ chỗ là các câu lệnh đặc biệt như {$a} hoặc {$a->something} trong chuỗi. Chúng được thay thế bằng một giá trị khi chuỗi thực sự được in.

Điều quan trọng là sao chép chúng chính xác như chúng xuất hiện trong chuỗi gốc. Không dịch chúng hoặc thay đổi hướng từ trái sang phải của chúng.';
$string['placeholderwarning'] = 'chuỗi chứa giá trị giữ chỗ';
$string['pluginname'] = 'Tùy chỉnh ngôn ngữ';
$string['savecheckin'] = 'Lưu các thay đổi vào gói ngôn ngữ';
$string['savecontinue'] = 'Áp dụng các thay đổi và tiếp tục chỉnh sửa';
$string['privacy:metadata'] = 'Plugin Tùy chỉnh ngôn ngữ không lưu trữ bất kỳ dữ liệu cá nhân nào.';

// Đã lỗi thời từ Moodle 4.2.
$string['exportzipfilename'] = 'customlang-export-{$a->lang}.zip';
