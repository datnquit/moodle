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
 * Strings for the advanced grading methods subsystem
 *
 * @package    core_grading
 * @subpackage grading
 * @copyright  2011 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['activemethodinfo'] = '\'{$a->method}\' được chọn là phương pháp đánh giá hoạt động cho khu vực \'{$a->area}\'';
$string['activemethodinfonone'] = 'Không có phương pháp đánh giá nâng cao nào được chọn cho khu vực \'{$a->area}\'. Sẽ sử dụng phương pháp đánh giá trực tiếp đơn giản.';
$string['changeactivemethod'] = 'Thay đổi phương pháp đánh giá hoạt động thành';
$string['clicktoclose'] = 'nhấp để đóng';
$string['exc_gradingformelement'] = 'Không thể khởi tạo phần tử biểu mẫu đánh giá';
$string['formnotavailable'] = 'Đã chọn một phương pháp đánh giá nâng cao nhưng biểu mẫu đánh giá vẫn cần được xác định.';
$string['gradingformunavailable'] = 'Vui lòng lưu ý: biểu mẫu đánh giá nâng cao hiện không sẵn sàng. Phương pháp đánh giá đơn giản sẽ được sử dụng cho đến khi biểu mẫu có trạng thái hợp lệ.';
$string['gradingmanagement'] = 'Đánh giá nâng cao';
$string['gradingmanagementtitle'] = 'Đánh giá nâng cao: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Phương pháp đánh giá';
$string['gradingmethod_help'] = 'Chọn phương pháp đánh giá nâng cao sẽ được sử dụng để tính toán điểm trong ngữ cảnh cụ thể.

Để vô hiệu hóa đánh giá nâng cao và chuyển về cơ chế đánh giá mặc định, hãy chọn \'Đánh giá trực tiếp đơn giản\'.';
$string['gradingmethodnone'] = 'Đánh giá trực tiếp đơn giản';
$string['gradingmethods'] = 'Các phương pháp đánh giá';
$string['manageactionclone'] = 'Tạo biểu mẫu đánh giá mới từ một mẫu';
$string['manageactiondelete'] = 'Xóa biểu mẫu hiện đang được xác định';
$string['manageactiondeleteconfirm'] = 'Bạn đang chuẩn bị xóa biểu mẫu đánh giá \'{$a->formname}\' và tất cả các thông tin liên quan từ \'{$a->component} ({$a->area})\'. Vui lòng đảm bảo bạn hiểu rõ các hậu quả sau đây:

* Không có cách nào để hoàn tác thao tác này.
* Bạn có thể chuyển sang một phương pháp đánh giá khác bao gồm cả \'Đánh giá trực tiếp đơn giản\' mà không cần xóa biểu mẫu này.
* Tất cả các thông tin về cách điền biểu mẫu đánh giá sẽ bị mất.
* Các điểm tính toán đã lưu trong bảng điểm sẽ không bị ảnh hưởng. Tuy nhiên, giải thích về cách tính điểm sẽ không có sẵn.
* Thao tác này không ảnh hưởng đến các bản sao của biểu mẫu này trong các hoạt động khác.';
$string['manageactiondeletedone'] = 'Biểu mẫu đã được xóa thành công';
$string['manageactionedit'] = 'Chỉnh sửa định nghĩa biểu mẫu hiện tại';
$string['manageactionnew'] = 'Xác định biểu mẫu đánh giá mới từ đầu';
$string['manageactionshare'] = 'Công bố biểu mẫu làm mẫu mới';
$string['manageactionshareconfirm'] = 'Bạn đang chuẩn bị lưu một bản sao của biểu mẫu đánh giá \'{$a}\' như là một mẫu công cộng mới. Người dùng khác trên trang web của bạn sẽ có thể tạo các biểu mẫu đánh giá mới trong các hoạt động của họ từ mẫu này.';
$string['manageactionsharedone'] = 'Biểu mẫu đã được lưu thành công như là một mẫu';
$string['noitemid'] = 'Không thể đánh giá. Mục đã được đánh giá không tồn tại.';
$string['nosharedformfound'] = 'Không tìm thấy mẫu';
$string['privacy:metadata:gradingformpluginsummary'] = 'Dữ liệu cho phương pháp đánh giá.';
$string['privacy:metadata:grading_definitions'] = 'Thông tin cơ bản về một biểu mẫu đánh giá nâng cao được xác định trong một khu vực có thể được đánh giá.';
$string['privacy:metadata:grading_definitions:areaid'] = 'ID khu vực nơi biểu mẫu đánh giá nâng cao được xác định.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'ID định nghĩa đánh giá từ đó đã được sao chép.';
$string['privacy:metadata:grading_definitions:description'] = 'Mô tả về phương pháp đánh giá nâng cao.';
$string['privacy:metadata:grading_definitions:method'] = 'Phương pháp đánh giá làm trách nhiệm cho việc xác định này.';
$string['privacy:metadata:grading_definitions:name'] = 'Tên của định nghĩa đánh giá nâng cao.';
$string['privacy:metadata:grading_definitions:options'] = 'Một số cài đặt của định nghĩa đánh giá này.';
$string['privacy:metadata:grading_definitions:status'] = 'Trạng thái của định nghĩa đánh giá nâng cao này.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Thời gian khi định nghĩa đánh giá đã được sao chép.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Thời gian khi định nghĩa đánh giá đã được tạo.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Thời gian khi định nghĩa đánh giá đã được sửa đổi lần cuối.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'ID của người dùng đã tạo định nghĩa đánh giá.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'ID của người dùng đã sửa đổi định nghĩa đánh giá lần cuối.';
$string['privacy:metadata:grading_instances'] = 'Hồ sơ đánh giá cho một mục có thể đánh giá bởi một người đánh giá.';
$string['privacy:metadata:grading_instances:feedback'] = 'Phản hồi được đưa ra bởi người dùng.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Định dạng văn bản của phản hồi được đưa ra bởi người dùng.';
$string['privacy:metadata:grading_instances:raterid'] = 'ID của người dùng đã đánh giá phiên đánh giá.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Điểm cho phiên đánh giá.';
$string['privacy:metadata:grading_instances:status'] = 'Trạng thái của phiên đánh giá này.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Thời gian khi phiên đánh giá được sửa đổi lần cuối.';
$string['searchtemplate'] = 'Tìm kiếm biểu mẫu đánh giá';
$string['searchtemplate_help'] = 'Bạn có thể tìm kiếm một biểu mẫu đánh giá và sử dụng nó như là một mẫu cho biểu mẫu đánh giá mới ở đây. Đơn giản nhập từ khóa mà bạn muốn xuất hiện ở bất kỳ đâu trong tên biểu mẫu, mô tả của nó hoặc thân biểu mẫu. Để tìm kiếm một cụm từ, hãy đặt toàn bộ truy vấn trong dấu ngoặc kép.

Mặc định, chỉ có các biểu mẫu đánh giá đã được lưu làm mẫu công cộng được bao gồm trong kết quả tìm kiếm. Bạn cũng có thể bao gồm tất cả các biểu mẫu đánh giá của riêng bạn trong kết quả tìm kiếm. Như vậy, bạn có thể đơn giản là tái sử dụng các biểu mẫu đánh giá của riêng bạn mà không cần chia sẻ chúng. Chỉ có các biểu mẫu được đánh dấu là \'Sẵn sàng sử dụng\' mới có thể được tái sử dụng theo cách này.';
$string['searchownforms'] = 'bao gồm các biểu mẫu của tôi';
$string['statusdraft'] = 'Bản nháp';
$string['statusready'] = 'Sẵn sàng sử dụng';
$string['templatedelete'] = 'Xóa';
$string['templatedeleteconfirm'] = 'Bạn đang chuẩn bị xóa mẫu được chia sẻ \'{$a}\'. Việc xóa một mẫu không ảnh hưởng đến các biểu mẫu hiện có được tạo từ nó.';
$string['templateedit'] = 'Chỉnh sửa';
$string['templatepick'] = 'Sử dụng mẫu này';
$string['templatepickconfirm'] = 'Bạn có muốn sử dụng biểu mẫu đánh giá \'{$a->formname}\' như là một mẫu cho biểu mẫu đánh giá mới trong \'{$a->component} ({$a->area})\' không?';
$string['templatepickownform'] = 'Sử dụng biểu mẫu này làm mẫu';
$string['templatetypeown'] = 'Biểu mẫu của riêng tôi';
$string['templatetypeshared'] = 'Mẫu được chia sẻ';
$string['templatesource'] = 'Vị trí: {$a->component} ({$a->area})';
$string['error:notinrange'] = 'Điểm \'{$a->grade}\' không hợp lệ. Điểm phải nằm trong khoảng từ 0 đến {$a->maxgrade}.';
$string['error:gradingunavailable'] = 'Phương pháp đánh giá nâng cao không được thiết lập đúng. Vui lòng kiểm tra tùy chọn đánh giá toàn bộ trong cài đặt diễn đàn.';
