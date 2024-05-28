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
 * Strings for component 'qtype_numerical', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage numerical
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['acceptederror'] = 'Sai số được chấp nhận';
$string['answererror'] = 'Lỗi';
$string['addmoreanswerblanks'] = 'Còn {no} ô trống cho câu trả lời';
$string['addmoreunitblanks'] = 'Còn {no} ô trống cho đơn vị';
$string['answercolon'] = 'Câu trả lời:';
$string['answermustbenumberorstar'] = 'Câu trả lời phải là một con số, ví dụ như -1.234 hoặc 3e8, hoặc \'*\'.';
$string['answerno'] = 'Câu trả lời {$a}';
$string['decfractionofquestiongrade'] = 'dưới dạng phân số (0-1) của điểm câu hỏi';
$string['decfractionofresponsegrade'] = 'dưới dạng phân số (0-1) của điểm phản hồi';
$string['decimalformat'] = 'thập phân';
$string['editableunittext'] = 'phần nhập văn bản có thể chỉnh sửa';
$string['errornomultiplier'] = 'Bạn phải chỉ định một bội số cho đơn vị này.';
$string['errorrepeatedunit'] = 'Bạn không thể có hai đơn vị giống nhau.';
$string['geometric'] = 'Hình học';
$string['invalidnumber'] = 'Bạn phải nhập một số hợp lệ.';
$string['invalidnumbernounit'] = 'Bạn phải nhập một số hợp lệ. Đừng bao gồm đơn vị trong câu trả lời của bạn.';
$string['invalidnumericanswer'] = 'Một trong những câu trả lời bạn nhập không phải là một số hợp lệ.';
$string['invalidnumerictolerance'] = 'Một trong những giới hạn bạn nhập không phải là một số hợp lệ.';
$string['leftexample'] = 'bên trái, ví dụ $1.00 hoặc £1.00';
$string['multiplier'] = 'Bội số';
$string['noneditableunittext'] = 'Văn bản của đơn vị số 1 KHÔNG thể chỉnh sửa';
$string['nonvalidcharactersinnumber'] = 'Ký tự không hợp lệ trong số';
$string['notenoughanswers'] = 'Bạn phải nhập ít nhất một câu trả lời.';
$string['nounitdisplay'] = 'Không hiển thị đơn vị';
$string['numericalmultiplier'] = 'Bội số';
$string['numericalmultiplier_help'] = 'Bội số là yếu tố mà câu trả lời số chính xác sẽ được nhân lên.

Đơn vị đầu tiên (Đơn vị 1) có một bội số mặc định là 1. Vì vậy nếu câu trả lời số chính xác là 5500 và bạn đặt W là đơn vị tại Đơn vị 1 có bội số mặc định là 1, thì câu trả lời chính xác là 5500 W.

Nếu bạn thêm đơn vị kW với bội số là 0.001, điều này sẽ thêm một câu trả lời chính xác là 5.5 kW. Điều này có nghĩa là các câu trả lời 5500W hoặc 5.5kW sẽ được đánh đúng.

Lưu ý rằng sai số được chấp nhận cũng được nhân lên, vì vậy một sai số được chấp nhận là 100W sẽ trở thành một sai số là 0.1kW.';
$string['manynumerical'] = 'Các đơn vị là tùy chọn. Nếu có một đơn vị được nhập, nó sẽ được sử dụng để chuyển đổi câu trả lời thành Đơn vị 1 trước khi chấm điểm.';
$string['nominal'] = 'Định danh';
$string['onlynumerical'] = 'Không sử dụng đơn vị. Chỉ có giá trị số được chấm điểm.';
$string['oneunitshown'] = 'Đơn vị 1 tự động được hiển thị bên cạnh ô trả lời.';
$string['pleaseenterananswer'] = 'Vui lòng nhập một câu trả lời.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Vui lòng nhập câu trả lời của bạn mà không sử dụng dấu phân cách hàng nghìn ({$a}).';
$string['pluginname'] = 'Số liệu';
$string['pluginname_help'] = 'Từ quan điểm của sinh viên, một câu hỏi số liệu trông giống như một câu hỏi trả lời ngắn. Sự khác biệt là các câu trả lời số được phép có một sai số được chấp nhận. Điều này cho phép một phạm vi cố định của các câu trả lời được đánh giá như một câu trả lời. Ví dụ, nếu câu trả lời là 10 với một sai số được chấp nhận là 2, thì bất kỳ số nào từ 8 đến 12 sẽ được chấp nhận là đúng.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Thêm một câu hỏi Số liệu';
$string['pluginnameediting'] = 'Chỉnh sửa một câu hỏi Số liệu';
$string['pluginnamesummary'] = 'Cho phép một câu trả lời số, có thể đi kèm với đơn vị, được chấm điểm bằng cách so sánh với các câu trả lời mẫu khác nhau, có thể có sai số.';
$string['privacy:metadata'] = 'Trình kết nối loại

 câu hỏi Số liệu cho phép các tác giả câu hỏi thiết lập các tùy chọn mặc định như tùy chọn của người dùng.';
$string['privacy:preference:defaultmark'] = 'Điểm mặc định được đặt cho một câu hỏi cụ thể.';
$string['privacy:preference:penalty'] = 'Hình phạt cho mỗi lần thử không chính xác khi câu hỏi được chạy bằng cách sử dụng hành vi \'Tương tác với nhiều lần thử\' hoặc \'Chế độ thích ứng\'.';
$string['privacy:preference:unitrole'] = 'Xem đơn vị là bắt buộc, tùy chọn hoặc không được mong đợi.';
$string['privacy:preference:unitpenalty'] = 'Phần trăm (0-1) của điểm phản hồi hoặc điểm câu hỏi nên được áp dụng?';
$string['privacy:preference:unitgradingtypes'] = 'Xem hình phạt đơn vị áp dụng dưới dạng phần trăm (0-1) của điểm phản hồi hoặc điểm câu hỏi.';
$string['privacy:preference:multichoicedisplay'] = 'Xem đơn vị được hiển thị dưới dạng phần nhập văn bản, lựa chọn nhiều lựa chọn hoặc một menu thả xuống.';
$string['privacy:preference:unitsleft'] = 'Xem đơn vị hiển thị ở bên trái (ví dụ: $, £) hoặc bên phải (ví dụ: kg, km, cm).';
$string['relative'] = 'Tương đối';
$string['rightexample'] = 'bên phải, ví dụ 1.00cm hoặc 1.00km';
$string['selectunits'] = 'Chọn đơn vị';
$string['selectunit'] = 'Chọn một đơn vị';
$string['studentunitanswer'] = 'Các đơn vị được nhập bằng cách sử dụng';
$string['tolerancetype'] = 'Loại sai số được chấp nhận';
$string['unit'] = 'Đơn vị';
$string['unitappliedpenalty'] = 'Các điểm này bao gồm một khoản phạt {$a} cho đơn vị không đúng.';
$string['unitchoice'] = 'một lựa chọn nhiều lựa chọn';
$string['unitedit'] = 'Chỉnh sửa đơn vị';
$string['unitgraded'] = 'Phải cung cấp đơn vị và sẽ được chấm điểm.';
$string['unithandling'] = 'Xử lý đơn vị';
$string['unitincorrect'] = 'Bạn không cung cấp đơn vị đúng.';
$string['unitmandatory'] = 'Bắt buộc';
$string['unitmandatory_help'] = '

* Câu trả lời sẽ được chấm điểm bằng cách sử dụng đơn vị đã viết.

* Hình phạt đơn vị sẽ được áp dụng nếu trường đơn vị rỗng.

';
$string['unitnotselected'] = 'Bạn phải chọn một đơn vị.';
$string['unitonerequired'] = 'Bạn phải nhập ít nhất một đơn vị';
$string['unitoptional'] = 'Tùy chọn';
$string['unitoptional_help'] = '
* Nếu trường đơn vị không rỗng, câu trả lời sẽ được chấm điểm bằng đơn vị này.

* Nếu đơn vị được viết sai hoặc không biết, câu trả lời sẽ được coi là không hợp lệ.
';
$string['unitpenalty'] = 'Phạt đơn vị';
$string['unitpenalty_help'] = 'Khi

* tên đơn vị không đúng được nhập vào trường đơn vị, hoặc
* một đơn vị được nhập vào ô giá trị';
$string['unitposition'] = 'Các đơn vị được đặt';
$string['units'] = 'Đơn vị';
$string['unitselect'] = 'một menu thả xuống';
$string['unitx'] = 'Đơn vị {no}';
$string['xmustbenumeric'] = '{$a} phải là một số.';
$string['xmustnotbenumeric'] = '{$a} không thể là một số.';
$string['youmustenteramultiplierhere'] = 'Bạn phải nhập một bội số ở đây.';
