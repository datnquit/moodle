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
 * Strings for core_completion subsystem.
 *
 * @package     core_completion
 * @category    string
 * @copyright   &copy; 2008 The Open University
 * @author      Sam Marshall
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['achievinggrade'] = 'Đạt điểm';
$string['achievingpassinggrade'] = 'Đạt điểm chuẩn';
$string['activities'] = 'Hoạt động';
$string['activitieslabel'] = 'Hoạt động / tài nguyên';
$string['activityaggregation'] = 'Điều kiện yêu cầu';
$string['activityaggregation_all'] = 'Tất cả các hoạt động đã chọn phải được hoàn thành';
$string['activityaggregation_any'] = 'Bất kỳ hoạt động đã chọn nào phải được hoàn thành';
$string['activitiescompleted'] = 'Hoàn thành hoạt động';
$string['activitiescompletednote'] = 'Lưu ý: Hoàn thành hoạt động phải được đặt cho một hoạt động để xuất hiện trong danh sách trên.';
$string['activitycompletion'] = 'Điều kiện hoàn thành';
$string['activitycompletionupdated'] = 'Đã lưu các thay đổi';
$string['activitygradetopassnotset'] = 'Hoạt động này không có điểm để đạt chuẩn hợp lệ. Nó có thể được đặt trong phần Điểm của cài đặt hoạt động.';
$string['addconditions'] = 'Thêm điều kiện';
$string['affectedactivities'] = 'Các thay đổi sẽ ảnh hưởng đến các hoạt động hoặc tài nguyên sau <b>{$a}</b>:';
$string['aggregationmethod'] = 'Phương pháp tổng hợp';
$string['all'] = 'Tất cả';
$string['allconditions'] = 'Hoạt động hoàn thành khi sinh viên làm tất cả những điều sau:';
$string['any'] = 'Bất kỳ';
$string['approval'] = 'Phê duyệt';
$string['areyousureoverridecompletion'] = 'Bạn có chắc chắn muốn ghi đè trạng thái hoàn thành hiện tại của hoạt động này cho người dùng này và đánh dấu là "{$a}" không?';
$string['badautocompletion'] = 'Bạn phải chọn ít nhất một điều kiện.';
$string['badcompletiongradeitemnumber'] = 'Yêu cầu điểm không thể được kích hoạt cho <b>{$a}</b> vì việc chấm điểm bởi {$a} không được kích hoạt.';
$string['bulkactivitycompletion'] = 'Chỉnh sửa hàng loạt hoàn thành hoạt động';
$string['bulkactivitydetail'] = 'Chọn các hoạt động bạn muốn chỉnh sửa hàng loạt.';
$string['bulkcompletiontracking'] = 'Theo dõi hoàn thành';
$string['bulkcompletiontracking_help'] = '<strong>Không có:</strong> Không chỉ định hoàn thành hoạt động

<strong>Thủ công:</strong> Sinh viên có thể đánh dấu thủ công hoạt động là đã hoàn thành

<strong>Với điều kiện:</strong> Hiển thị hoạt động là hoàn thành khi điều kiện được đáp ứng';
$string['checkall'] = 'Chọn hoặc bỏ chọn tất cả các hoạt động và tài nguyên';
$string['checkallsection'] = 'Chọn hoặc bỏ chọn tất cả các hoạt động và tài nguyên trong phần sau: {$a}';
$string['checkactivity'] = 'Ô chọn cho hoạt động / tài nguyên: {$a}';
$string['completed'] = 'Đã hoàn thành';
$string['completeactivity'] = 'Hoàn thành hoạt động';
$string['completedunlocked'] = 'Tùy chọn hoàn thành đã được mở khóa';
$string['completedunlockedtext'] = 'Khi bạn lưu biểu mẫu này, dữ liệu hoàn thành sẽ bị xóa sau đó được tính lại nếu có thể. Để tránh điều này, bạn có thể điều hướng đi mà không lưu.';
$string['completedwarning'] = 'Tùy chọn hoàn thành đã bị khóa';
$string['completedwarningtext'] = 'Hoạt động này đã được đánh dấu là hoàn thành cho một hoặc nhiều sinh viên. Nếu bạn mở khóa các cài đặt để thay đổi sau đó lưu biểu mẫu, dữ liệu hoàn thành sẽ bị xóa sau đó được tính lại nếu có thể. Hoàn thành thủ công không thể được tính lại, vì vậy trong trường hợp này sinh viên sẽ cần đánh dấu là đã hoàn thành lại.';
$string['completion'] = 'Theo dõi hoàn thành';
$string['completion-alt-auto-enabled'] = 'Hệ thống đánh dấu mục này hoàn thành theo điều kiện: {$a}';
$string['completion-alt-auto-fail'] = 'Đã hoàn thành: {$a} (không đạt điểm chuẩn)';
$string['completion-alt-auto-n'] = 'Chưa hoàn thành: {$a}';
$string['completion-alt-auto-n-override'] = 'Chưa hoàn thành: {$a->modname} (được đặt bởi {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Đã hoàn thành: {$a} (đạt điểm chuẩn)';
$string['completion-alt-auto-y'] = 'Đã hoàn thành: {$a}';
$string['completion-alt-auto-y-override'] = 'Đã hoàn thành: {$a->modname} (được đặt bởi {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Sinh viên có thể đánh dấu mục này hoàn thành thủ công: {$a}';
$string['completion-alt-manual-n'] = 'Chưa hoàn thành: {$a}. Chọn để đánh dấu là hoàn thành.';
$string['completion-alt-manual-n-override'] = 'Chưa hoàn thành: {$a->modname} (được đặt bởi {$a->overrideuser}). Chọn để đánh dấu là hoàn thành.';
$string['completion-alt-manual-y'] = 'Đã hoàn thành: {$a}. Chọn để đánh dấu là chưa hoàn thành.';
$string['completion-alt-manual-y-override'] = 'Đã hoàn thành: {$a->modname} (được đặt bởi {$a->overrideuser}). Chọn để đánh dấu là chưa hoàn thành.';
$string['completion-fail'] = 'Đã hoàn thành (không đạt điểm chuẩn)';
$string['completion-n'] = 'Chưa hoàn thành';
$string['completion-n-override'] = 'Chưa hoàn thành (được đặt bởi {$a})';
$string['completion-pass'] = 'Đã hoàn thành (đạt điểm chuẩn)';
$string['completion-y'] = 'Đã hoàn thành';
$string['completion-y-override'] = 'Đã hoàn thành (được đặt bởi {$a})';
$string['completion_automatic'] = 'Thêm yêu cầu';
$string['completion_help'] = 'Nếu được kích hoạt, hoàn thành hoạt động được theo dõi, thủ công hoặc tự động, dựa trên các điều kiện nhất định. Có thể đặt nhiều điều kiện nếu muốn. Nếu vậy, hoạt động chỉ được coi là hoàn thành khi tất cả các điều kiện được đáp ứng.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Sinh viên phải tự đánh dấu hoạt động là đã hoàn thành';
$string['completion_none'] = 'Không có';
$string['completionactivitydefault'] = 'Sử dụng mặc định của hoạt động';
$string['completionanygrade_desc'] = 'Bất kỳ điểm số';
$string['completiondisabled'] = 'Bị vô hiệu hóa, không hiển thị trong cài đặt hoạt động';
$string['completionenabled'] = 'Đã kích hoạt, kiểm soát thông qua hoàn thành và cài đặt hoạt động';
$string['completionexpected'] = 'Đặt lời nhắc trong Dòng thời gian';
$string['completionexpected_help'] = 'Điều này cho phép bạn đặt lời nhắc cho sinh viên làm việc trên hoạt động này. Nó sẽ xuất hiện trong khối Dòng thời gian trên Bảng điều khiển của họ là "{$a} yêu cầu hành động".';
$string['completionexpecteddesc'] = 'Hoàn thành dự kiến vào {$a}';
$string['completionexpectedfor'] = '{$a->instancename} nên được hoàn thành';
$string['completionicons'] = 'Hộp đánh dấu hoàn thành';
$string['completionicons_help'] = 'Một dấu tick bên cạnh tên hoạt động có thể được sử dụng để chỉ khi nào hoạt động hoàn thành.

Nếu một hộp có đường viền chấm được hiển thị, một dấu tick sẽ xuất hiện tự động khi bạn đã hoàn thành hoạt động theo các điều kiện do giáo viên đặt ra.

Nếu một hộp có đường viền đặc được hiển thị, bạn có thể nhấp vào đó để đánh dấu hộp khi bạn nghĩ rằng bạn đã hoàn thành hoạt động. (Nhấp lại để bỏ dấu tick nếu bạn thay đổi ý định.)';
$string['completionmenuitem'] = 'Hoàn thành';
$string['completionnotenabled'] = 'Hoàn thành không được kích hoạt';
$string['completionnotenabledforcourse'] = 'Hoàn thành không được kích hoạt cho khóa học này';
$string['completionnotenabledforsite'] = 'Hoàn thành không được kích hoạt cho trang web này';
$string['completionondate'] = 'Ngày';
$string['completionondatevalue'] = 'Ngày khi khóa học sẽ được đánh dấu là hoàn thành';
$string['completionduration'] = 'Ghi danh';
$string['completionsettingslocked'] = 'Cài đặt hoàn thành đã bị khóa';
$string['completionpassgrade'] = 'Yêu cầu điểm chuẩn';
$string['completionpassgrade_desc'] = 'Điểm chuẩn';
$string['completionusegrade'] = 'Yêu cầu điểm';
$string['completionusegrade_desc'] = 'Nhận điểm';
$string['completionupdated'] = 'Đã cập nhật hoàn thành cho hoạt động <b>{$a}</b>';
$string['completionview_desc'] = 'Xem hoạt động';
$string['configenablecompletion'] = 'Nếu được kích hoạt, các điều kiện hoàn thành khóa học và hoạt động có thể được đặt. Việc đặt các điều kiện hoàn thành hoạt động được khuyến nghị để dữ liệu có ý nghĩa được hiển thị cho người dùng trong tổng quan khóa học của họ trên Bảng điều khiển.';
$string['confirmselfcompletion'] = 'Xác nhận hoàn thành tự động';
$string['courseaggregation'] = 'Điều kiện yêu cầu';
$string['courseaggregation_all'] = 'Tất cả các khóa học đã chọn phải được hoàn thành';
$string['courseaggregation_any'] = 'Bất kỳ khóa học đã chọn nào phải được hoàn thành';
$string['coursealreadycompleted'] = 'Bạn đã hoàn thành khóa học này';
$string['coursecomplete'] = 'Hoàn thành khóa học';
$string['coursecompleted'] = 'Khóa học đã hoàn thành';
$string['coursecompletedmessage'] = '<p>Chúc mừng!</p><p>Bạn đã hoàn thành khóa học <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Hoàn thành khóa học';
$string['coursecompletioncondition'] = 'Điều kiện: {$a}';
$string['coursecompletionnavigation'] = 'Điều hướng hoàn thành khóa học';
$string['coursecompletionsettings'] = 'Cài đặt hoàn thành khóa học';
$string['coursegrade'] = 'Điểm khóa học';
$string['coursesavailable'] = 'Khóa học có sẵn';
$string['coursesavailableexplaination'] = 'Lưu ý: Các điều kiện hoàn thành khóa học phải được đặt cho một khóa học để xuất hiện trong danh sách trên.';
$string['criteria'] = 'Tiêu chí';
$string['criteriagroup'] = 'Nhóm tiêu chí';
$string['criteriarequiredall'] = 'Tất cả các tiêu chí dưới đây đều cần thiết';
$string['criteriarequiredany'] = 'Bất kỳ tiêu chí nào dưới đây đều cần thiết';
$string['criteriasummary'] = '{$a->type}: {$a->summary}';
$string['csvdownload'] = 'Tải xuống ở định dạng bảng tính (UTF-8 .csv)';
$string['datepassed'] = 'Ngày đã qua';
$string['days'] = 'Ngày';
$string['daysoftotal'] = '{$a->days} của {$a->total}';
$string['daysuntilcompletion'] = 'Ngày cho đến khi hoàn thành';
$string['defaultactivitycompletionsite'] = 'Đây là các điều kiện hoàn thành mặc định cho các hoạt động trong tất cả các khóa học.';
$string['defaultactivitycompletioncourse'] = 'Đây là các điều kiện hoàn thành mặc định cho các hoạt động trong khóa học này.';
$string['defaultcompletion'] = 'Hoàn thành hoạt động mặc định';
$string['defaultcompletionupdated'] = 'Đã lưu các thay đổi';
$string['deletecompletiondata'] = 'Xóa dữ liệu hoàn thành';
$string['dependencies'] = 'Phụ thuộc';
$string['dependenciescompleted'] = 'Hoàn thành các khóa học khác';
$string['detail_desc:receivegrade'] = 'Nhận điểm';
$string['detail_desc:receivepassgrade'] = 'Nhận điểm chuẩn';
$string['detail_desc:view'] = 'Xem';
$string['done'] = 'Hoàn thành';
$string['hiddenrules'] = 'Một số cài đặt cụ thể cho <b>{$a}</b> đã bị ẩn. Để xem, bỏ chọn các hoạt động khác';
$string['editconditions'] = 'Chỉnh sửa điều kiện';
$string['enablecompletion'] = 'Kích hoạt theo dõi hoàn thành';
$string['enablecompletion_help'] = 'Nếu được kích hoạt, bạn có thể đặt các điều kiện cho hoàn thành hoạt động hoặc hoàn thành khóa học.';
$string['enrolmentduration'] = 'Thời gian ghi danh';
$string['enrolmentdurationlength'] = 'Người dùng phải được ghi danh trong';
$string['emptyconditionsinfo'] = 'Không có điều kiện hoàn thành nào được đặt cho hoạt động này.';
$string['emptyconditionswarning'] = 'Bạn phải thêm ít nhất một điều kiện hoàn thành.';
$string['err_noactivities'] = 'Thông tin hoàn thành không được kích hoạt cho bất kỳ hoạt động nào, vì vậy không có hoạt động nào được hiển thị. Bạn có thể kích hoạt thông tin hoàn thành bằng cách chỉnh sửa cài đặt cho một hoạt động.';
$string['err_nocourses'] = 'Hoàn thành khóa học không được kích hoạt cho bất kỳ khóa học nào khác, vì vậy không có khóa học nào được hiển thị. Bạn có thể kích hoạt hoàn thành khóa học trong cài đặt khóa học.';
$string['err_nograde'] = 'Một điểm chuẩn khóa học chưa được đặt cho khóa học này. Để kích hoạt loại tiêu chí này, bạn phải tạo một điểm chuẩn cho khóa học này.';
$string['err_noroles'] = 'Không có vai trò nào có khả năng moodle/course:markcomplete trong khóa học này.';
$string['err_nousers'] = 'Không có sinh viên nào trong khóa học hoặc nhóm này mà thông tin hoàn thành được hiển thị. (Thông tin hoàn thành chỉ được hiển thị cho người dùng có khả năng "Được hiển thị trong báo cáo hoàn thành". Khả năng này được phép cho vai trò mặc định của sinh viên, vì vậy nếu không có sinh viên, bạn sẽ thấy thông báo này.)';
$string['err_settingslocked'] = 'Một hoặc nhiều sinh viên đã hoàn thành một tiêu chí nên các cài đặt đã bị khóa. Mở khóa các cài đặt sẽ xóa dữ liệu hoàn thành của người dùng và có thể gây nhầm lẫn.';
$string['err_system'] = 'Đã xảy ra lỗi nội bộ trong hệ thống hoàn thành. (Quản trị viên hệ thống có thể kích hoạt thông tin gỡ lỗi để xem chi tiết hơn.)';
$string['eventcoursecompleted'] = 'Khóa học đã hoàn thành';
$string['eventcoursecompletionupdated'] = 'Hoàn thành khóa học đã được cập nhật';
$string['eventcoursemodulecompletionupdated'] = 'Hoàn thành hoạt động khóa học đã được cập nhật';
$string['eventdefaultcompletionupdated'] = 'Mặc định cho hoàn thành hoạt động khóa học đã được cập nhật';
$string['excelcsvdownload'] = 'Tải xuống ở định dạng tương thích với Excel (.csv)';
$string['failed'] = 'Thất bại';
$string['fraction'] = 'Phần';
$string['graderequired'] = 'Điểm khóa học yêu cầu';
$string['gradexrequired'] = 'Yêu cầu {$a}';
$string['inprogress'] = 'Đang tiến hành';
$string['manual'] = 'Thủ công';
$string['manualcompletionby'] = 'Hoàn thành thủ công bởi người khác';
$string['manualcompletionbynote'] = 'Lưu ý: Khả năng moodle/course:markcomplete phải được phép cho một vai trò xuất hiện trong danh sách.';
$string['manualselfcompletion'] = 'Hoàn thành tự động thủ công';
$string['manualselfcompletionnote'] = 'Lưu ý: Khối hoàn thành tự động nên được thêm vào khóa học nếu hoàn thành tự động thủ công được kích hoạt.';
$string['markcomplete'] = 'Đánh dấu hoàn thành';
$string['markedcompleteby'] = 'Đánh dấu hoàn thành bởi {$a}';
$string['markingyourselfcomplete'] = 'Đánh dấu chính mình hoàn thành';
$string['modifybulkactions'] = 'Chỉnh sửa các hành động bạn muốn chỉnh sửa hàng loạt';
$string['moredetails'] = 'Chi tiết thêm';
$string['nocriteriaset'] = 'Không có tiêu chí hoàn thành nào được đặt cho khóa học này';
$string['nogradeitem'] = 'Yêu cầu điểm không thể được kích hoạt cho <b>{$a}</b> vì hoạt động không được chấm điểm.';
$string['notcompleted'] = 'Chưa hoàn thành';
$string['notenroled'] = 'Bạn chưa được ghi danh trong khóa học này';
$string['nottracked'] = 'Bạn hiện không được theo dõi bởi hoàn thành trong khóa học này';
$string['notyetstarted'] = 'Chưa bắt đầu';
$string['overallaggregation'] = 'Yêu cầu hoàn thành';
$string['overallaggregation_all'] = 'Khóa học hoàn thành khi tất cả các điều kiện được đáp ứng';
$string['overallaggregation_any'] = 'Khóa học hoàn thành khi bất kỳ điều kiện nào được đáp ứng';
$string['pending'] = 'Đang chờ xử lý';
$string['periodpostenrolment'] = 'Thời gian sau khi ghi danh';
$string['privacy:metadata:completionstate'] = 'Nếu hoạt động đã hoàn thành';
$string['privacy:metadata:course'] = 'Một mã định danh khóa học';
$string['privacy:metadata:coursecompletedsummary'] = 'Lưu trữ thông tin về người dùng đã hoàn thành tiêu chí trong khóa học';
$string['privacy:metadata:coursemoduleid'] = 'ID của hoạt động';
$string['privacy:metadata:coursemodulesummary'] = 'Lưu trữ dữ liệu hoàn thành hoạt động cho một người dùng';
$string['privacy:metadata:coursesummary'] = 'Lưu trữ dữ liệu hoàn thành khóa học cho một người dùng.';
$string['privacy:metadata:gradefinal'] = 'Điểm cuối cùng nhận được để hoàn thành khóa học';
$string['privacy:metadata:overrideby'] = 'ID người dùng của người đã ghi đè hoàn thành hoạt động';
$string['privacy:metadata:reaggregate'] = 'Nếu hoàn thành khóa học đã được tính lại.';
$string['privacy:metadata:timecompleted'] = 'Thời gian khóa học được hoàn thành.';
$string['privacy:metadata:timeenrolled'] = 'Thời gian người dùng được ghi danh trong khóa học';
$string['privacy:metadata:timemodified'] = 'Thời gian hoàn thành hoạt động đã được chỉnh sửa';
$string['privacy:metadata:timestarted'] = 'Thời gian khóa học được bắt đầu.';
$string['privacy:metadata:timecreated'] = 'Thời gian hoàn thành hoạt động được tạo ra';
$string['privacy:metadata:viewed'] = 'Nếu hoạt động đã được xem';
$string['privacy:metadata:userid'] = 'ID người dùng của người có dữ liệu hoàn thành khóa học và hoạt động';
$string['privacy:metadata:unenroled'] = 'Nếu người dùng đã bị xóa khỏi khóa học';
$string['progress'] = 'Tiến độ học tập của sinh viên';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Tiến độ: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Công nhận học tập trước đó';
$string['remainingenroledfortime'] = 'Duy trì ghi danh trong một khoảng thời gian nhất định';
$string['remainingenroleduntildate'] = 'Duy trì ghi danh đến một ngày nhất định';
$string['reportpage'] = 'Hiển thị người dùng từ {$a->from} đến {$a->to} trong tổng số {$a->total}.';
$string['requiredcriteria'] = 'Tiêu chí yêu cầu';
$string['resetactivities'] = 'Xóa tất cả các hoạt động và tài nguyên đã chọn';
$string['restoringcompletiondata'] = 'Đang ghi dữ liệu hoàn thành';
$string['roleaggregation'] = 'Điều kiện yêu cầu';
$string['roleaggregation_all'] = 'Tất cả các vai trò đã chọn để đánh dấu khi điều kiện được đáp ứng';
$string['roleaggregation_any'] = 'Bất kỳ vai trò nào đã chọn để đánh dấu khi điều kiện được đáp ứng';
$string['roleidnotfound'] = 'Không tìm thấy ID vai trò {$a}';
$string['saved'] = 'Đã lưu';
$string['seedetails'] = 'Xem chi tiết';
$string['select'] = 'Chọn';
$string['self'] = 'Tự';
$string['selfcompletion'] = 'Hoàn thành tự động';
$string['showcompletionconditions'] = 'Hiển thị điều kiện hoàn thành hoạt động';
$string['showcompletionconditions_help'] = 'Hiển thị điều kiện hoàn thành hoạt động trên trang khóa học.';
$string['showinguser'] = 'Hiển thị người dùng';
$string['studentsmust'] = 'Sinh viên phải';
$string['timecompleted'] = 'Thời gian hoàn thành';
$string['todo'] = 'Cần làm';
$string['unenrolingfromcourse'] = 'Xóa khỏi khóa học';
$string['unenrolment'] = 'Xóa ghi danh';
$string['unit'] = 'Đơn vị';
$string['unlockcompletion'] = 'Mở khóa cài đặt hoàn thành';
$string['unlockcompletiondelete'] = 'Mở khóa cài đặt hoàn thành và xóa dữ liệu hoàn thành của người dùng';
$string['updateactivities'] = 'Cập nhật trạng thái hoàn thành của các hoạt động đã chọn';
$string['usealternateselector'] = 'Sử dụng bộ chọn khóa học thay thế';
$string['usernotenroled'] = 'Người dùng không được ghi danh trong khóa học này';
$string['viewcoursereport'] = 'Xem báo cáo khóa học';
$string['viewingactivity'] = 'Đang xem {$a}';
$string['withconditions'] = 'Với điều kiện';
$string['writingcompletiondata'] = 'Đang ghi dữ liệu hoàn thành';
$string['xdays'] = '{$a} ngày';
$string['youmust'] = 'Bạn phải';

// Bị loại bỏ kể từ Moodle 4.0.
$string['yourprogress'] = 'Tiến độ của bạn';

// Bị loại bỏ kể từ Moodle 4.3.
$string['editcoursecompletionsettings'] = 'Chỉnh sửa cài đặt hoàn thành khóa học';
$string['completiondefault'] = 'Theo dõi hoàn thành mặc định';
$string['configcompletiondefault'] = 'Cài đặt mặc định cho theo dõi hoàn thành khi tạo các hoạt động mới.';
$string['completionview'] = 'Yêu cầu xem';
$string['activitygradenotrequired'] = 'Không yêu cầu điểm';
$string['completionpassgrade_help'] = 'Nếu được kích hoạt, hoạt động được coi là hoàn thành khi sinh viên nhận được điểm chuẩn.';
$string['completionusegrade_help'] = 'Nếu được kích hoạt, hoạt động được coi là hoàn thành khi sinh viên nhận được điểm. Nếu một điểm chuẩn cho hoạt động được đặt, thì các biểu tượng đạt và không đạt được hiển thị trong báo cáo hoàn thành hoạt động.';
