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
 * Language file for plugin gradingform_rubric
 *
 * @package    gradingform_rubric
 * @copyright  2011 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['addcriterion'] = 'Thêm tiêu chí';
$string['additionalfeedback'] = 'Phản hồi bổ sung';
$string['alwaysshowdefinition'] = 'Cho phép người dùng xem trước tiêu chí đánh giá (nếu không sẽ chỉ hiển thị sau khi chấm điểm)';
$string['backtoediting'] = 'Quay lại chỉnh sửa';
$string['confirmdeletecriterion'] = 'Bạn có chắc chắn muốn xóa tiêu chí này không?';
$string['confirmdeletelevel'] = 'Bạn có chắc chắn muốn xóa cấp độ này không?';
$string['criterion'] = 'Tiêu chí {$a}';
$string['criterionaddlevel'] = 'Thêm cấp độ';
$string['criteriondelete'] = 'Xóa tiêu chí';
$string['criterionduplicate'] = 'Nhân bản tiêu chí';
$string['criterionempty'] = 'Nhấp để chỉnh sửa tiêu chí';
$string['criterionmovedown'] = 'Di chuyển xuống';
$string['criterionmoveup'] = 'Di chuyển lên';
$string['criterionremark'] = 'Nhận xét cho tiêu chí {$a->description}: {$a->remark}';
$string['definerubric'] = 'Định nghĩa tiêu chí đánh giá';
$string['description'] = 'Mô tả';
$string['enableremarks'] = 'Cho phép người chấm điểm thêm nhận xét văn bản cho mỗi tiêu chí';
$string['err_mintwolevels'] = 'Mỗi tiêu chí phải có ít nhất hai cấp độ';
$string['err_nocriteria'] = 'Tiêu chí đánh giá phải chứa ít nhất một tiêu chí';
$string['err_nodefinition'] = 'Định nghĩa cấp độ không thể để trống';
$string['err_nodescription'] = 'Mô tả tiêu chí không thể để trống';
$string['err_novariations'] = 'Các cấp độ của tiêu chí không thể có cùng số điểm';
$string['err_scoreformat'] = 'Số điểm cho mỗi cấp độ phải là một số hợp lệ';
$string['err_totalscore'] = 'Số điểm tối đa có thể đạt được khi chấm điểm bằng tiêu chí phải lớn hơn không';
$string['gradingof'] = 'Chấm điểm {$a}';
$string['level'] = 'Cấp độ {$a->definition}, {$a->score} điểm.';
$string['leveldelete'] = 'Xóa cấp độ {$a}';
$string['leveldefinition'] = 'Định nghĩa cấp độ {$a}';
$string['levelempty'] = 'Nhấp để chỉnh sửa cấp độ';
$string['levelsgroup'] = 'Nhóm cấp độ';
$string['lockzeropoints'] = 'Tính điểm với số điểm tối thiểu là điểm đạt được tối thiểu cho tiêu chí đánh giá';
$string['lockzeropoints_help'] = 'Cài đặt này chỉ áp dụng nếu tổng số điểm tối thiểu cho mỗi tiêu chí lớn hơn 0. Nếu được chọn, số điểm tối thiểu của hoạt động sẽ là điểm đạt được tối thiểu cho tiêu chí đánh giá. Nếu không chọn, số điểm tối thiểu có thể đạt được cho tiêu chí đánh giá sẽ được ánh xạ tới số điểm tối thiểu có sẵn cho hoạt động (là 0 trừ khi sử dụng thang điểm).';
$string['name'] = 'Tên';
$string['needregrademessage'] = 'Định nghĩa tiêu chí đánh giá đã được thay đổi sau khi học sinh này đã được chấm điểm. Học sinh sẽ không thể thấy tiêu chí này cho đến khi bạn kiểm tra tiêu chí và cập nhật điểm.';
$string['notset'] = 'Chưa đặt';
$string['pluginname'] = 'Tiêu chí đánh giá';
$string['pointsvalue'] = '{$a} điểm';
$string['previewrubric'] = 'Xem trước tiêu chí đánh giá';
$string['privacy:metadata:criterionid'] = 'Một mã định danh cho tiêu chí cụ thể đang được chấm điểm.';
$string['privacy:metadata:fillingssummary'] = 'Lưu trữ thông tin về điểm số của người dùng được tạo bởi tiêu chí đánh giá.';
$string['privacy:metadata:instanceid'] = 'Một mã định danh liên quan đến điểm số trong một hoạt động.';
$string['privacy:metadata:levelid'] = 'Cấp độ đạt được trong tiêu chí đánh giá.';
$string['privacy:metadata:remark'] = 'Nhận xét liên quan đến tiêu chí đánh giá được đánh giá.';
$string['regrademessage1'] = 'Bạn sắp lưu các thay đổi đối với tiêu chí đánh giá đã được sử dụng để chấm điểm. Vui lòng chỉ ra nếu cần xem xét lại các điểm hiện có. Nếu bạn đặt điều này thì tiêu chí đánh giá sẽ bị ẩn khỏi học sinh cho đến khi bài của họ được chấm lại.';
$string['regrademessage5'] = 'Bạn sắp lưu các thay đổi đáng kể đối với tiêu chí đánh giá đã được sử dụng để chấm điểm. Giá trị trong sổ điểm sẽ không thay đổi, nhưng tiêu chí đánh giá sẽ bị ẩn khỏi học sinh cho đến khi bài của họ được chấm lại.';
$string['regradeoption0'] = 'Không đánh dấu để chấm lại';
$string['regradeoption1'] = 'Đánh dấu để chấm lại';
$string['restoredfromdraft'] = 'LƯU Ý: Lần cuối cùng chấm điểm cho người này đã không được lưu đúng cách nên điểm dự thảo đã được khôi phục. Nếu bạn muốn hủy các thay đổi này, hãy sử dụng nút \'Hủy\' bên dưới.';
$string['rubric'] = 'Tiêu chí đánh giá';
$string['rubricmapping'] = 'Quy tắc ánh xạ điểm thành điểm số';
$string['rubricmappingexplained'] = 'Số điểm tối thiểu có thể đạt được cho tiêu chí đánh giá này là <b>{$a->minscore} điểm</b>. Nó sẽ được chuyển đổi thành điểm số tối thiểu có sẵn cho hoạt động (là 0 trừ khi sử dụng thang điểm). Số điểm tối đa <b>{$a->maxscore} điểm</b> sẽ được chuyển đổi thành điểm số tối đa. Các điểm số trung gian sẽ được chuyển đổi tương ứng.

Nếu sử dụng thang điểm để chấm điểm, số điểm sẽ được làm tròn và chuyển đổi thành các yếu tố của thang điểm như thể chúng là các số nguyên liên tiếp.

Việc tính toán điểm này có thể được thay đổi bằng cách chỉnh sửa biểu mẫu và chọn hộp \'Tính điểm với số điểm tối thiểu là điểm đạt được tối thiểu cho tiêu chí đánh giá\'.';
$string['rubricnotcompleted'] = 'Vui lòng chọn một thứ gì đó cho mỗi tiêu chí';
$string['rubricoptions'] = 'Tùy chọn tiêu chí đánh giá';
$string['rubricstatus'] = 'Trạng thái tiêu chí đánh giá hiện tại';
$string['save'] = 'Lưu';
$string['saverubric'] = 'Lưu tiêu chí đánh giá và sẵn sàng';
$string['saverubricdraft'] = 'Lưu dưới dạng dự thảo';
$string['scoreinputforlevel'] = 'Điểm đầu vào cho cấp độ {$a}';
$string['scorepostfix'] = '{$a} điểm';
$string['showdescriptionstudent'] = 'Hiển thị mô tả tiêu chí đánh giá cho người được chấm điểm';
$string['showdescriptionteacher'] = 'Hiển thị mô tả tiêu chí đánh giá trong quá trình chấm điểm';
$string['showremarksstudent'] = 'Hiển thị nhận xét cho người được chấm điểm';
$string['showscorestudent'] = 'Hiển thị điểm cho mỗi cấp độ cho người được chấm điểm';
$string['showscoreteacher'] = 'Hiển thị điểm cho mỗi cấp độ trong quá trình chấm điểm';
$string['sortlevelsasc'] = 'Sắp xếp thứ tự cho các cấp độ:';
$string['sortlevelsasc0'] = 'Giảm dần theo số điểm';
$string['sortlevelsasc1'] = 'Tăng dần theo số điểm';
$string['zerolevelsabsent'] = 'Cảnh báo: Số điểm tối thiểu có thể đạt được cho tiêu chí đánh giá này không phải là 0; điều này có thể dẫn đến các điểm số không mong muốn cho hoạt động. Để tránh điều này, mỗi tiêu chí nên có một cấp độ với 0 điểm.<br>
Cảnh báo này có thể được bỏ qua nếu sử dụng thang điểm để chấm điểm, và các cấp độ tối thiểu trong tiêu chí đánh giá tương ứng với giá trị tối thiểu của thang điểm.';
