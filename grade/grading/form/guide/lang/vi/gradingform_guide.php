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
 * Strings for the marking guide advanced grading plugin
 *
 * @package    gradingform_guide
 * @copyright  2012 Dan Marsden <dan@danmarsden.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['addcomment'] = 'Thêm nhận xét thường dùng';
$string['additionalcomments'] = 'Nhận xét bổ sung';
$string['additionalcommentsforcriterion'] = 'Nhận xét bổ sung cho tiêu chí, {$a}';
$string['addcriterion'] = 'Thêm tiêu chí';
$string['alwaysshowdefinition'] = 'Hiển thị định nghĩa hướng dẫn cho sinh viên';
$string['backtoediting'] = 'Quay lại chỉnh sửa';
$string['clicktocopy'] = 'Nhấp để sao chép văn bản này vào phản hồi tiêu chí';
$string['clicktoedit'] = 'Nhấp để chỉnh sửa';
$string['clicktoeditname'] = 'Nhấp để chỉnh sửa tên tiêu chí';
$string['comment'] = 'Nhận xét';
$string['commentpickerforcriterion'] = 'Bộ chọn nhận xét thường dùng cho {$a} nhận xét bổ sung';
$string['comments'] = 'Nhận xét thường dùng';
$string['commentsdelete'] = 'Xóa nhận xét';
$string['commentsempty'] = 'Nhấp để chỉnh sửa nhận xét';
$string['commentsmovedown'] = 'Di chuyển xuống';
$string['commentsmoveup'] = 'Di chuyển lên';
$string['confirmdeletecriterion'] = 'Bạn có chắc chắn muốn xóa mục này không?';
$string['confirmdeletelevel'] = 'Bạn có chắc chắn muốn xóa cấp độ này không?';
$string['criterion'] = 'Tên tiêu chí';
$string['criteriondelete'] = 'Xóa tiêu chí';
$string['criterionempty'] = 'Nhấp để chỉnh sửa tiêu chí';
$string['criterionmovedown'] = 'Di chuyển xuống';
$string['criterionmoveup'] = 'Di chuyển lên';
$string['criterionname'] = 'Tên tiêu chí';
$string['criterionremark'] = 'Nhận xét tiêu chí {$a}';
$string['definemarkingguide'] = 'Định nghĩa hướng dẫn đánh giá';
$string['description'] = 'Mô tả';
$string['descriptionmarkers'] = 'Mô tả cho người đánh giá';
$string['descriptionstudents'] = 'Mô tả cho sinh viên';
$string['err_maxscoreisnegative'] = 'Điểm tối đa không hợp lệ, không được phép giá trị âm';
$string['err_maxscorenotnumeric'] = 'Điểm tối đa của tiêu chí phải là số';
$string['err_nocomment'] = 'Nhận xét không được để trống';
$string['err_nodescription'] = 'Mô tả cho sinh viên không được để trống';
$string['err_nodescriptionmarkers'] = 'Mô tả cho người đánh giá không được để trống';
$string['err_nomaxscore'] = 'Điểm tối đa của tiêu chí không được để trống';
$string['err_noshortname'] = 'Tên tiêu chí không được để trống';
$string['err_shortnametoolong'] = 'Tên tiêu chí phải ít hơn 256 ký tự';
$string['err_scoreinvalid'] = 'Điểm được cho cho \'{$a->criterianame}\' không hợp lệ, điểm tối đa là: {$a->maxscore}';
$string['err_scoreisnegative'] = 'Điểm được cho cho \'{$a->criterianame}\' không hợp lệ, không được phép giá trị âm';
$string['gradingof'] = 'Đánh giá của {$a}';
$string['guide'] = 'Hướng dẫn đánh giá';
$string['guidemappingexplained'] = 'CẢNH BÁO: Hướng dẫn đánh giá của bạn có điểm tối đa là <b>{$a->maxscore} điểm</b> nhưng điểm tối đa được đặt trong hoạt động của bạn là {$a->modulegrade}. Điểm tối đa được đặt trong hướng dẫn đánh giá của bạn sẽ được điều chỉnh theo điểm tối đa trong mô-đun.<br />
    Các điểm trung gian sẽ được chuyển đổi tương ứng và làm tròn đến điểm gần nhất có sẵn.';
$string['guidenotcompleted'] = 'Vui lòng cung cấp điểm hợp lệ cho mỗi tiêu chí';
$string['guideoptions'] = 'Tùy chọn hướng dẫn đánh giá';
$string['guidestatus'] = 'Trạng thái hiện tại của hướng dẫn đánh giá';
$string['hidemarkerdesc'] = 'Ẩn mô tả tiêu chí của người đánh giá';
$string['hidestudentdesc'] = 'Ẩn mô tả tiêu chí của sinh viên';
$string['informationforcriterion'] = 'Thông tin cho tiêu chí {$a}';
$string['insertcomment'] = 'Chèn nhận xét thường dùng';
$string['maxscore'] = 'Điểm tối đa';
$string['name'] = 'Tên';
$string['needregrademessage'] = 'Định nghĩa hướng dẫn đánh giá đã thay đổi sau khi sinh viên này được chấm điểm. Sinh viên không thể xem hướng dẫn đánh giá này cho đến khi bạn kiểm tra hướng dẫn đánh giá và cập nhật điểm.';
$string['outof'] = 'Điểm trên {$a}';
$string['pluginname'] = 'Hướng dẫn đánh giá';
$string['previewmarkingguide'] = 'Xem trước hướng dẫn đánh giá';
$string['privacy:metadata:criterionid'] = 'Một định danh cho một tiêu chí để đánh giá nâng cao.';
$string['privacy:metadata:fillingssummary'] = 'Lưu trữ thông tin về điểm số và phản hồi của người dùng cho hướng dẫn đánh giá.';
$string['privacy:metadata:instanceid'] = 'Một định danh cho một điểm số được sử dụng bởi một hoạt động.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Cho biết có hiển thị mô tả tiêu chí của người đánh giá hay không';
$string['privacy:metadata:preference:showstudentdesc'] = 'Cho biết có hiển thị mô tả tiêu chí của sinh viên hay không';
$string['privacy:metadata:remark'] = 'Nhận xét liên quan đến tiêu chí điểm số này.';
$string['privacy:metadata:score'] = 'Điểm cho tiêu chí điểm số này.';
$string['regrademessage1'] = 'Bạn sắp lưu các thay đổi cho một hướng dẫn đánh giá đã được sử dụng để chấm điểm. Vui lòng cho biết nếu cần xem lại các điểm hiện có. Nếu bạn đặt điều này, hướng dẫn đánh giá sẽ bị ẩn khỏi sinh viên cho đến khi mục của họ được chấm lại.';
$string['regrademessage5'] = 'Bạn sắp lưu các thay đổi quan trọng cho một hướng dẫn đánh giá đã được sử dụng để chấm điểm. Giá trị trong sổ điểm sẽ không thay đổi, nhưng hướng dẫn đánh giá sẽ bị ẩn khỏi sinh viên cho đến khi mục của họ được chấm lại.';
$string['regradeoption0'] = 'Không đánh dấu để chấm lại';
$string['regradeoption1'] = 'Đánh dấu để chấm lại';
$string['remark_help'] = 'Nhập bất kỳ nhận xét bổ sung nào về tiêu chí này.';
$string['restoredfromdraft'] = 'LƯU Ý: Lần chấm điểm cuối cùng cho người này không được lưu đúng cách nên các điểm nháp đã được khôi phục. Nếu bạn muốn hủy các thay đổi này, hãy sử dụng nút \'Hủy\' bên dưới.';
$string['save'] = 'Lưu';
$string['saveguide'] = 'Lưu hướng dẫn đánh giá và sẵn sàng sử dụng';
$string['saveguidedraft'] = 'Lưu dưới dạng nháp';
$string['score'] = 'Điểm';
$string['scoreforcriterion'] = 'Điểm cho tiêu chí {$a}';
$string['score_help'] = 'Nhập điểm cho tiêu chí {$a->criterion} từ 0 đến {$a->maxscore}.';
$string['showmarkerdesc'] = 'Hiển thị mô tả tiêu chí của người đánh giá';
$string['showmarkspercriterionstudents'] = 'Hiển thị điểm cho mỗi tiêu chí cho sinh viên';
$string['showstudentdesc'] = 'Hiển thị mô tả tiêu chí của sinh viên';
