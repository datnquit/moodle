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
 * Language strings for the gap-select question type.
 *
 * @package    qtype_gapselect
 * @copyright  2011 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['acceptedfiletypes'] = 'Loại tệp được chấp nhận';
$string['acceptedfiletypes_help'] = 'Các loại tệp được chấp nhận có thể bị hạn chế bằng cách nhập một danh sách các phần mở rộng tệp. Nếu trường được để trống, thì tất cả các loại tệp đều được cho phép.';
$string['allowattachments'] = 'Cho phép đính kèm';
$string['answerfiles'] = 'Tệp đáp án';
$string['answertext'] = 'Văn bản đáp án';
$string['attachedfiles'] = 'Đính kèm: {$a}';
$string['attachmentsoptional'] = 'Các đính kèm là tùy chọn';
$string['attachmentsrequired'] = 'Yêu cầu đính kèm';
$string['attachmentsrequired_help'] = 'Tùy chọn này xác định số lượng tệp đính kèm tối thiểu cần thiết để một phản hồi được xem xét là có thể đánh điểm.';
$string['err_maxminmismatch'] = 'Giới hạn từ tối đa phải lớn hơn giới hạn từ tối thiểu';
$string['err_maxwordlimit'] = 'Giới hạn từ tối đa đã được kích hoạt nhưng chưa được thiết lập';
$string['err_maxwordlimitnegative'] = 'Giới hạn từ tối đa không thể là số âm';
$string['err_minwordlimit'] = 'Giới hạn từ tối thiểu đã được kích hoạt nhưng chưa được thiết lập';
$string['err_minwordlimitnegative'] = 'Giới hạn từ tối thiểu không thể là số âm';
$string['formateditor'] = 'Trình soạn thảo HTML';
$string['formateditorfilepicker'] = 'Trình soạn thảo HTML với chọn tệp';
$string['formatmonospaced'] = 'Văn bản thuần, kiểu chữ đều';
$string['formatnoinline'] = 'Không có văn bản trực tuyến';
$string['formatplain'] = 'Văn bản thuần';
$string['graderinfo'] = 'Thông tin cho người chấm điểm';
$string['graderinfoheader'] = 'Thông tin người chấm điểm';
$string['maxbytes'] = 'Kích thước tệp tối đa';
$string['maxwordlimit'] = 'Giới hạn từ tối đa';
$string['maxwordlimit_help'] = 'Nếu phản hồi yêu cầu sinh viên nhập văn bản, đây là số lượng từ tối đa mà mỗi sinh viên được phép gửi.';
$string['maxwordlimitboundary'] = 'Giới hạn từ cho câu hỏi này là {$a->limit} từ và bạn đang cố gắng gửi {$a->count} từ. Vui lòng rút ngắn phản hồi của bạn và thử lại.';
$string['minwordlimit'] = 'Giới hạn từ tối thiểu';
$string['minwordlimit_help'] = 'Nếu phản hồi yêu cầu sinh viên nhập văn bản, đây là số lượng từ tối thiểu mà mỗi sinh viên được phép gửi.';
$string['minwordlimitboundary'] = 'Câu hỏi này yêu cầu một phản hồi có ít nhất {$a->limit} từ và bạn đang cố gắng gửi {$a->count} từ. Vui lòng mở rộng phản hồi của bạn và thử lại.';
$string['mustattach'] = 'Khi chọn "Không có văn bản trực tuyến", hoặc phản hồi là tùy chọn, bạn phải cho phép ít nhất một tệp đính kèm.';
$string['mustrequire'] = 'Khi chọn "Không có văn bản trực tuyến", hoặc phản hồi là tùy chọn, bạn phải yêu cầu ít nhất một tệp đính kèm.';
$string['mustrequirefewer'] = 'Bạn không thể yêu cầu nhiều hơn số tệp đính kèm mà bạn cho phép.';
$string['nlines'] = '{$a} dòng';
$string['nonexistentfiletypes'] = 'Các loại tệp sau không được nhận dạng: {$a}';
$string['pluginname'] = 'Luận văn';
$string['pluginname_help'] = 'Trong phản hồi cho một câu hỏi, người phản hồi có thể tải lên một hoặc nhiều tệp và/hoặc nhập văn bản trực tuyến. Một mẫu phản hồi có thể được cung cấp. Phản hồi phải được đánh điểm thủ công.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Thêm một câu hỏi Luận văn';
$string['pluginnameediting'] = 'Chỉnh sửa một câu hỏi Luận văn';
$string['pluginnamesummary'] = 'Cho phép một phản hồi của việc tải lên tệp và/hoặc văn bản trực tuyến. Sau đó, điều này phải được đánh điểm thủ công.';
$string['privacy:metadata'] = 'Trình cắm loại câu hỏi Luận văn cho phép các tác giả câu hỏi đặt các tùy chọn mặc định như tùy chọn người dùng.';
$string['privacy:preference:defaultmark'] = 'Điểm mặc định được đặt cho một câu hỏi cụ thể.';
$string['privacy:preference:responseformat'] = 'Định dạng phản hồi (trình soạn thảo HTML, văn bản thuần, v.v.) là gì?';
$string['privacy:preference:responserequired'] = 'Sinh viên có bắt buộc phải nhập văn bản hay không hoặc trường nhập văn bản là tùy chọn.';
$string['privacy:preference:responsefieldlines'] = 'Số dòng chỉ ra kích thước của ô đầu vào (textarea).';
$string['privacy:preference:attachments'] = 'Số lượng tệp đính kèm được phép.';
$string['privacy:preference:attachmentsrequired'] = 'Số lượng tệp đính kèm bắt buộc.';
$string['privacy:preference:maxbytes'] = 'Kích thước tệp tối đa.';
$string['responsefieldlines'] = 'Kích thước ô đầu vào';
$string['responseformat'] = 'Định dạng phản hồi';
$string['responseoptions'] = 'Tùy chọn phản hồi';
$string['responserequired'] = 'Yêu cầu văn bản';
$string['responsenotrequired'] = 'Trường nhập văn bản là tùy chọn';
$string['responseisrequired'] = 'Yêu cầu sinh viên nhập văn bản';
$string['responsetemplate'] = 'Mẫu phản hồi';
$string['responsetemplateheader'] = 'Mẫu phản hồi';
$string['responsetemplate_help'] = 'Bất kỳ văn bản nào được nhập ở đây sẽ được hiển thị trong ô đầu vào phản hồi khi một lần thử mới của câu hỏi bắt đầu.';
$string['wordcount'] = 'Số từ: {$a}';
$string['wordcounttoofew'] = 'Số từ: {$a->count}, ít hơn số từ yêu cầu tối thiểu là {$a->limit}.';
$string['wordcounttoomuch'] = 'Số từ: {$a->count}, nhiều hơn giới hạn {$a->limit} từ.';
