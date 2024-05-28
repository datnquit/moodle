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
 * Strings for component 'qtype_multianswer', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage multianswer
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['confirmquestionsaveasedited'] = 'Tôi xác nhận rằng tôi muốn câu hỏi được lưu lại sau khi chỉnh sửa';
$string['confirmsave'] = 'Xác nhận và lưu {$a}';
$string['correctanswer'] = 'Câu trả lời đúng';
$string['correctanswerandfeedback'] = 'Câu trả lời đúng và phản hồi';
$string['corruptedquestion'] = 'Câu hỏi này bị hỏng và chứa các câu hỏi phụ không có trong hệ thống của bạn.';
$string['decodeverifyquestiontext'] = 'Giải mã và xác minh văn bản câu hỏi';
$string['invalidmultianswerquestion'] = 'Câu hỏi câu trả lời nhúng không hợp lệ (Cloze) ({$a}).';
$string['layout'] = 'Bố cục';
$string['layouthorizontal'] = 'Dãy ngang của nút radio';
$string['layoutmultiple_horizontal'] = 'Dãy ngang của ô chọn';
$string['layoutmultiple_vertical'] = 'Danh sách dọc của ô chọn';
$string['layoutselectinline'] = 'Menu thả xuống nằm ngang trong văn bản';
$string['layoutundefined'] = 'Bố cục không xác định';
$string['layoutvertical'] = 'Danh sách dọc của nút radio';
$string['missingsubquestion'] = 'Câu hỏi phụ này thiếu trong hệ thống của bạn và không thể được hiển thị.';
$string['multichoicex'] = 'Lựa chọn nhiều lựa chọn {$a}';
$string['nooptionsforsubquestion'] = 'Không thể lấy được các lựa chọn cho phần câu hỏi # {$a->sub} (question->id={$a->id})';
$string['noquestions'] = 'Câu hỏi Cloze(multianswer) "<strong>{$a}</strong>" không chứa bất kỳ câu hỏi nào';
$string['pleaseananswerallparts'] = 'Vui lòng trả lời tất cả các phần của câu hỏi.';
$string['pluginname'] = 'Câu trả lời nhúng (Cloze)';
$string['pluginname_help'] = 'Các câu hỏi câu trả lời nhúng (Cloze) bao gồm một đoạn văn bản với các câu hỏi như lựa chọn nhiều và trả lời ngắn được nhúng trong đó.';
$string['pluginname_link'] = 'question/type/multianswer';
$string['pluginnameadding'] = 'Thêm một câu hỏi câu trả lời nhúng (Cloze)';
$string['pluginnameediting'] = 'Chỉnh sửa một câu hỏi câu trả lời nhúng (Cloze)';
$string['pluginnamesummary'] = 'Các câu hỏi loại này rất linh hoạt, nhưng chỉ có thể được tạo bằng cách nhập văn bản chứa các mã đặc biệt tạo ra các câu hỏi nhúng nhiều lựa chọn, trả lời ngắn và số học.';
$string['privacy:metadata'] = 'Trình cắm loại câu hỏi câu trả lời nhúng (Cloze) không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['qtypenotrecognized'] = 'Loại câu hỏi {$a} không được nhận diện';
$string['questiondefinition'] = 'Định nghĩa câu hỏi';
$string['questiondeleted'] = 'Câu hỏi đã bị xóa';
$string['questioninquiz'] = '

<ul>
  <li>Thêm hoặc xóa câu hỏi, </li>
  <li>thay đổi thứ tự câu hỏi trong văn bản,</li>
  <li>thay đổi loại câu hỏi của họ (số học, trả lời ngắn, lựa chọn nhiều). </li></ul>
';
$string['questionsadded'] = 'Câu hỏi đã được thêm';
$string['questionsless'] = '{$a} câu hỏi ít hơn so với câu hỏi multianswer được lưu trữ trong cơ sở dữ liệu';
$string['questionsmissing'] = 'Văn bản câu hỏi phải bao gồm ít nhất một câu trả lời nhúng.';
$string['questionsmore'] = '{$a} câu hỏi nhiều hơn so với câu hỏi multianswer được lưu trữ trong cơ sở dữ liệu';
$string['questionnotfound'] = 'Không thể tìm thấy câu hỏi của phần câu hỏi #{$a}';
$string['questionsaveasedited'] = 'Câu hỏi sẽ được lưu lại sau khi chỉnh sửa';
$string['questiontypechanged'] = 'Loại câu hỏi đã thay đổi';
$string['questiontypechangedcomment'] = 'Ít nhất một loại câu hỏi đã được thay đổi.<br />Bạn đã thêm, xóa hoặc di chuyển một câu hỏi chưa?<br />Hãy nhìn vào phía trước.';
$string['questionusedinquiz'] = 'Câu hỏi này được sử dụng trong {$a->nb_of_quiz} bài thi, tổng số lần thử: {$a->nb_of_attempts} ';
$string['regradeissuenumsubquestionschanged'] = 'Số lượng câu hỏi phụ nhúng trong câu hỏi đã thay đổi.';
$string['storedqtype'] = 'Loại câu hỏi đã lưu trữ {$a}';
$string['subqresponse'] = 'phần {$a->i}: {$a->response}';
$string['unknownquestiontypeofsubquestion'] = 'Loại câu hỏi không xác định: {$a->type} của phần câu hỏi # {$a->sub}';
$string['warningquestionmodified'] = '<b>CẢNH B

ÁO</b>';
$string['youshouldnot'] = '<b>BẠN KHÔNG NÊN</b>';