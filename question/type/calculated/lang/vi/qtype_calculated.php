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
 * Strings for component 'qtype_calculated', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    qtype
 * @subpackage calculated
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['additem'] = 'Thêm mục';
$string['addmoreanswerblanks'] = 'Thêm khoảng trống cho câu trả lời khác.';
$string['addsets'] = 'Thêm bộ';
$string['answerformula'] = 'Công thức câu trả lời {$a}';
$string['answerdisplay'] = 'Hiển thị câu trả lời';
$string['answerhdr'] = 'Câu trả lời';
$string['answerstoleranceparam'] = 'Tham số dung sai của các câu trả lời';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Bất kỳ giá trị nào';
$string['atleastoneanswer'] = 'Bạn cần cung cấp ít nhất một câu trả lời.';
$string['atleastonerealdataset'] = 'Phải có ít nhất một tập dữ liệu thực trong văn bản câu hỏi';
$string['atleastonewildcard'] = 'Phải có ít nhất một ký tự đại diện trong công thức câu trả lời hoặc văn bản câu hỏi';
$string['calcdistribution'] = 'Phân phối';
$string['calclength'] = 'Số chữ số thập phân';
$string['calcmax'] = 'Tối đa';
$string['calcmin'] = 'Tối thiểu';
$string['choosedatasetproperties'] = 'Chọn thuộc tính tập dữ liệu đại diện';
$string['choosedatasetproperties_help'] = 'Một tập dữ liệu là một bộ các giá trị được chèn vào vị trí của ký tự đại diện. Bạn có thể tạo một tập dữ liệu riêng cho một câu hỏi cụ thể hoặc một tập dữ liệu chia sẻ có thể được sử dụng cho các câu hỏi tính toán khác trong danh mục.';
$string['correctanswerformula'] = 'Công thức câu trả lời đúng';
$string['correctanswershows'] = 'Hiển thị câu trả lời đúng';
$string['correctanswershowsformat'] = 'Định dạng';
$string['correctfeedback'] = 'Phản hồi đúng';
$string['dataitemdefined'] = 'với {$a} giá trị số đã được định nghĩa sẵn có';
$string['datasetrole'] = 'Các ký tự đại diện <strong>{x..}</strong> sẽ được thay thế bằng một giá trị số từ tập dữ liệu của chúng';
$string['decimals'] = 'với {$a}';
$string['deleteitem'] = 'Xóa mục';
$string['deletelastitem'] = 'Xóa mục cuối cùng';
$string['distributionoption'] = 'Chọn tùy chọn phân phối';
$string['editdatasets'] = 'Chỉnh sửa các tập dữ liệu đại diện';
$string['editdatasets_help'] = 'Giá trị ký tự đại diện có thể được tạo bằng cách nhập số vào từng trường ký tự đại diện sau đó nhấp vào nút thêm. Để tự động tạo ra 10 giá trị hoặc nhiều hơn, chọn số lượng giá trị cần thiết trước khi nhấp vào nút thêm. Phân phối đồng nhất có nghĩa là bất kỳ giá trị nào giữa các giới hạn đều có khả năng được tạo ra; phân phối loguniform có nghĩa là các giá trị gần giới hạn dưới có nhiều khả năng được tạo ra hơn.';
$string['editdatasets_link'] = 'question/type/calculated';
$string['existingcategory1'] = 'sẽ sử dụng một tập dữ liệu chia sẻ đã tồn tại';
$string['existingcategory2'] = 'một tệp từ một bộ tệp đã tồn tại cũng được sử dụng bởi các câu hỏi khác trong danh mục này';
$string['existingcategory3'] = 'một liên kết từ một bộ liên kết đã tồn tại cũng được sử dụng bởi các câu hỏi khác trong danh mục này';
$string['forceregeneration'] = 'bắt buộc tái tạo';
$string['forceregenerationall'] = 'bắt buộc tái tạo tất cả ký tự đại diện';
$string['forceregenerationshared'] = 'bắt buộc tái tạo chỉ các ký tự đại diện không chia sẻ';
$string['functiontakesatleasttwo'] = 'Hàm {$a} phải có ít nhất hai đối số';
$string['functiontakesnoargs'] = 'Hàm {$a} không nhận bất kỳ đối số nào';
$string['functiontakesonearg'] = 'Hàm {$a} phải có chính xác một đối số';
$string['functiontakesoneortwoargs'] = 'Hàm {$a} phải có một hoặc hai đối số';
$string['functiontakestwoargs'] = 'Hàm {$a} phải có chính xác hai đối số';
$string['generatevalue'] = 'Tạo một giá trị mới giữa';
$string['getnextnow'] = 'Lấy mục mới để thêm ngay bây giờ';
$string['hexanotallowed'] = 'Tập dữ liệu <strong>{$a->name}</strong> giá trị định dạng hexadecimal {$a->value} không được phép';
$string['illegalformulasyntax'] = 'Cú pháp công thức không hợp lệ bắt đầu với \'{$a}\'';
$string['incorrectfeedback'] = 'Phản hồi không chính xác';
$string['item(s)'] = 'mục';
$string['itemno'] = 'Mục {$a}';
$string['itemscount'] = 'Số lượng<br />Mục';
$string['itemtoadd'] = 'Mục cần thêm';
$string['keptcategory1'] = 'sẽ sử dụng cùng tập dữ liệu chia sẻ hiện có như trước';
$string['keptcategory2'] = 'một tệp từ bộ tệp sử dụng lại trong cùng danh mục như trước';
$string['keptcategory3'] = 'một liên kết từ bộ liên kết sử dụng lại trong cùng danh mục như trước';
$string['keptlocal1'] = 'sẽ sử dụng cùng tập dữ liệu riêng hiện có như trước';
$string['keptlocal2'] = 'một tệp từ bộ tệp riêng của câu hỏi như trước';
$string['keptlocal3'] = 'một liên kết từ bộ liên kết riêng của câu hỏi như trước';
$string['lastitem(s)'] = 'các mục cuối cùng';
$string['lengthoption'] = 'Chọn tùy chọn chiều dài';
$string['loguniform'] = 'Loguniform';
$string['loguniformbit'] = 'chữ số, từ một phân phối loguniform';
$string['makecopynextpage'] = 'Trang tiếp theo (câu hỏi mới)';
$string['mandatoryhdr'] = 'Ký tự đại diện bắt buộc có trong câu trả lời';
$string['max'] = 'Tối đa';
$string['min'] = 'Tối thiểu';
$string['minmax'] = 'Phạm vi giá trị';
$string['missingformula'] = 'Thiếu công thức';
$string['missingname'] = 'Thiếu tên câu hỏi';
$string['missingquestiontext'] = 'Thiếu văn bản câu hỏi';
$string['mustenteraformulaorstar'] = 'Bạn phải nhập một công thức hoặc \'*\'.';
$string['newcategory1'] = 'sẽ sử dụng một tập dữ liệu chia sẻ mới';
$string['newcategory2'] = 'một tệp từ một bộ tệp mới cũng có thể được sử dụng bởi các câu hỏi khác trong danh mục này';
$string['newcategory3'] = 'một liên kết từ một bộ liên kết mới cũng có thể được sử dụng bởi các câu hỏi khác trong danh mục này';
$string['newlocal1'] = 'sẽ sử dụng một tập dữ liệu riêng mới';
$string['newlocal2'] = 'một tệp từ một bộ tệp mới chỉ được sử dụng bởi câu hỏi này';
$string['newlocal3'] = 'một liên kết từ một bộ liên kết mới chỉ được sử dụng bởi câu hỏi này';
$string['nextitemtoadd'] = 'Mục tiếp theo để thêm';
$string['nextpage'] = 'Trang tiếp theo';
$string['nocoherencequestionsdatyasetcategory'] = 'Đối với câu hỏi id {$a->qid}, danh mục id {$a->qcat} không giống với danh mục của ký tự đại diện chia sẻ {$a->name} id {$a->sharedcat}. Chỉnh sửa câu hỏi.';
$string['nocommaallowed'] = 'Dấu , không được phép, sử dụng . như trong 0.013 hoặc 1.3e-2';
$string['nodataset'] = 'không có gì - nó không phải là một ký tự đại diện';
$string['nosharedwildcard'] = 'Không có ký tự đại diện chia sẻ trong danh mục này';
$string['notvalidnumber'] = 'Giá trị ký tự đại diện không phải là một số hợp lệ';
$string['oneanswertrueansweroutsidelimits'] = 'Ít nhất một câu trả lời đúng nằm ngoài giới hạn giá trị thực.<br />Chỉnh sửa cài đặt dung sai của câu trả lời có sẵn dưới dạng tham số nâng cao';
$string['param'] = 'Tham số {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'Phản hồi một phần đúng';
$string['pluginname'] = 'Tính toán';
$string['pluginname_help'] = 'Câu hỏi tính toán cho phép tạo ra các câu hỏi số học cá nhân bằng cách sử dụng các ký tự đại diện trong dấu ngoặc nhọn được thay thế bằng các giá trị cá nhân khi làm bài kiểm tra. Ví dụ, câu hỏi "Diện tích của một hình chữ nhật có chiều dài {l} và chiều rộng {w} là bao nhiêu?" sẽ có công thức câu trả lời đúng "{l}*{w}" (trong đó * biểu thị phép nhân).';
$string['pluginname_link'] = 'question/type/calculated';
$string['pluginnameadding'] = 'Thêm câu hỏi tính toán';
$string['pluginnameediting'] = 'Chỉnh sửa câu hỏi tính toán';
$string['pluginnamesummary'] = 'Câu hỏi tính toán giống như câu hỏi số học nhưng với các con số được chọn ngẫu nhiên từ một tập hợp khi làm bài kiểm tra.';
$string['privacy:metadata'] = 'Plugin loại câu hỏi tính toán không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['possiblehdr'] = 'Ký tự đại diện có thể có chỉ có trong văn bản câu hỏi';
$string['questiondatasets'] = 'Tập dữ liệu câu hỏi';
$string['questiondatasets_help'] = 'Tập dữ liệu câu hỏi của các ký tự đại diện sẽ được sử dụng trong mỗi câu hỏi cá nhân';
$string['questionstoredname'] = 'Tên câu hỏi đã lưu trữ';
$string['replacewithrandom'] = 'Thay thế bằng một giá trị ngẫu nhiên';
$string['reuseifpossible'] = 'sử dụng lại giá trị trước đó nếu có';
$string['sharedwildcard'] = 'Ký tự đại diện chia sẻ {<strong>{$a}</strong>}';
$string['sharedwildcardname'] = 'Ký tự đại diện chia sẻ';
$string['sharedwildcards'] = 'Ký tự đại diện chia sẻ';
$string['significantfigures'] = 'với {$a}';
$string['significantfiguresformat'] = 'chữ số có nghĩa';
$string['synchronize'] = 'Đồng bộ hóa dữ liệu từ các tập dữ liệu chia sẻ với các câu hỏi khác trong một bài kiểm tra';
$string['synchronizeno'] = 'Không đồng bộ hóa';
$string['synchronizeyes'] = 'Đồng bộ hóa';
$string['synchronizeyesdisplay'] = 'Đồng bộ hóa và hiển thị tên các tập dữ liệu chia sẻ làm tiền tố của tên câu hỏi';
$string['tolerance'] = 'Dung sai ±';
$string['tolerancetype'] = 'Loại';
$string['trueanswerinsidelimits'] = 'Câu trả lời đúng: {$a->correct} nằm trong giới hạn của giá trị thực {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">LỖI Câu trả lời đúng: {$a->correct} nằm ngoài giới hạn của giá trị thực {$a->true}</span>';
$string['uniform'] = 'Đồng nhất';
$string['uniformbit'] = 'chữ số thập phân, từ một phân phối đồng nhất';
$string['updatecategory'] = 'Cập nhật danh mục';
$string['updatedatasetparam'] = 'Cập nhật các tham số của tập dữ liệu';
$string['updatetolerancesparam'] = 'Cập nhật các tham số dung sai của câu trả lời';
$string['usedinquestion'] = 'Được sử dụng trong câu hỏi';
$string['youmustaddatleastoneitem'] = 'Bạn phải thêm ít nhất một mục tập dữ liệu trước khi bạn có thể lưu câu hỏi này.';
$string['youmustaddatleastonevalue'] = 'Bạn phải thêm ít nhất một bộ giá trị của ký tự đại diện trước khi bạn có thể lưu câu hỏi này.';
$string['newsetwildcardvalues'] = 'bộ giá trị ký tự đại diện mới';
$string['setno'] = 'Bộ {$a}';
$string['setwildcardvalues'] = 'bộ giá trị ký tự đại diện';
$string['showitems'] = 'Hiển thị';
$string['updatewildcardvalues'] = 'Cập nhật các giá trị ký tự đại diện';
$string['unsupportedformulafunction'] = 'Hàm {$a} không được hỗ trợ';
$string['useadvance'] = 'Sử dụng nút nâng cao để xem lỗi';
$string['wildcard'] = 'Ký tự đại diện {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'Tham số ký tự đại diện được sử dụng để tạo ra các giá trị';
$string['wildcardrole'] = 'Các ký tự đại diện <strong>{x..}</strong> sẽ được thay thế bằng một giá trị số từ các giá trị đã tạo';
$string['wildcards'] = 'Ký tự đại diện {a}...{z}';
$string['wildcardvalues'] = 'Giá trị ký tự đại diện';
$string['wildcardvaluesgenerated'] = 'Giá trị ký tự đại diện được tạo';
$string['zerosignificantfiguresnotallowed'] = 'Câu trả lời đúng không thể có số chữ số có nghĩa bằng không!';
