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
 * Strings for component 'course', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_course
 * @copyright 2018 Adrian Greeve <adriangreeve.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activitychoosercategory'] = 'Bộ chọn hoạt động';
$string['activitychooserrecommendations'] = 'Các hoạt động được đề xuất';
$string['activitychoosersettings'] = 'Cài đặt bộ chọn hoạt động';
$string['activitychooseractivefooter'] = 'Chân trang bộ chọn hoạt động';
$string['activitychooseractivefooter_desc'] = 'Bộ chọn hoạt động có thể hỗ trợ các plugin thêm mục vào chân trang.';
$string['activitychooserhidefooter'] = 'Không có chân trang';
$string['activitychoosertabmode'] = 'Tab bộ chọn hoạt động';
$string['activitychoosertabmode_desc'] = 'Bộ chọn hoạt động liệt kê các hoạt động và tài nguyên cho giáo viên thêm vào khóa học của họ. Để thêm mục vào tab Đề xuất, hãy truy cập <a href=\'../course/recommendations.php\'>Các hoạt động được đề xuất</a>.';
$string['activitychoosertabmodeone'] = 'Được gắn sao, Tất cả, Hoạt động, Tài nguyên, Đề xuất';
$string['activitychoosertabmodetwo'] = 'Được gắn sao, Tất cả, Đề xuất';
$string['activitychoosertabmodethree'] = 'Được gắn sao, Hoạt động, Tài nguyên, Đề xuất';
$string['activitychoosertabmodefour'] = 'Được gắn sao, Đề xuất, Tất cả, Hoạt động, Tài nguyên';
$string['activitychoosertabmodefive'] = 'Được gắn sao, Đề xuất, Tất cả';
$string['activitychoosertabmodesix'] = 'Được gắn sao, Đề xuất, Hoạt động, Tài nguyên';
$string['activitydate:closed'] = 'Đã đóng:';
$string['activitydate:closes'] = 'Đóng:';
$string['activitydate:opened'] = 'Đã mở:';
$string['activitydate:opens'] = 'Mở:';
$string['aria:coursecategory'] = 'Danh mục khóa học';
$string['aria:courseshortname'] = 'Tên ngắn khóa học';
$string['aria:coursename'] = 'Tên khóa học';
$string['aria:defaulttab'] = 'Hoạt động mặc định';
$string['aria:favourite'] = 'Khóa học được gắn sao';
$string['aria:favouritestab'] = 'Các hoạt động được gắn sao';
$string['aria:recommendedtab'] = 'Các hoạt động được đề xuất';
$string['aria:modulefavourite'] = 'Gắn sao hoạt động {$a}';
$string['browsecourseadminindex'] = 'Duyệt quản trị khóa học với chỉ số này.';
$string['browsesettingindex'] = 'Duyệt cài đặt với chỉ số này.';
$string['communicationroomlink'] = 'Trò chuyện với người tham gia khóa học';
$string['completion_automatic:done'] = 'Đã hoàn thành:';
$string['completion_automatic:failed'] = 'Thất bại:';
$string['completion_automatic:todo'] = 'Cần làm:';
$string['completion_manual:aria:done'] = '{$a} đã được đánh dấu là hoàn thành. Nhấn để hoàn tác.';
$string['completion_manual:aria:markdone'] = 'Đánh dấu {$a} là hoàn thành';
$string['completion_manual:done'] = 'Hoàn thành';
$string['completion_manual:markdone'] = 'Đánh dấu là hoàn thành';
$string['completion_setby:auto:done'] = 'Đã hoàn thành: {$a->condition} (được đặt bởi {$a->setby})';
$string['completion_setby:auto:todo'] = 'Cần làm: {$a->condition} (được đặt bởi {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} được đánh dấu bởi {$a->setby} là hoàn thành. Nhấn để hoàn tác.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} được đánh dấu bởi {$a->setby} là chưa hoàn thành. Nhấn để đánh dấu là hoàn thành.';
$string['completionrequirements'] = 'Yêu cầu hoàn thành cho {$a}';
$string['courseaccess'] = 'Truy cập khóa học';
$string['coursealreadyfinished'] = 'Khóa học đã kết thúc';
$string['coursecommunication_desc'] = 'Dịch vụ liên lạc mặc định cho các khóa học mới. Các khóa học hiện có sẽ không có nhà cung cấp nào được chọn theo mặc định.';
$string['coursecontentnotification'] = 'Gửi thông báo thay đổi nội dung';
$string['coursecontentnotifnew'] = 'Nội dung mới trong khóa học {$a->coursename}';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> là mới trong khóa học <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Thay đổi tùy chọn thông báo của bạn</a></p>';
$string['coursecontentnotifupdate'] = 'Thay đổi nội dung khóa học {$a->coursename}';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> đã được thay đổi trong khóa học <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Thay đổi tùy chọn thông báo của bạn</a></p>';
$string['coursecontentnotification_help'] = 'Đánh dấu vào ô để thông báo cho người tham gia khóa học về hoạt động hoặc tài nguyên mới hoặc đã thay đổi này. Chỉ những người dùng có thể truy cập vào hoạt động hoặc tài nguyên này sẽ nhận được thông báo.';
$string['coursecount'] = 'Số lượng khóa học';
$string['coursenotyetstarted'] = 'Khóa học chưa bắt đầu';
$string['coursenotyetfinished'] = 'Khóa học chưa kết thúc';
$string['courseparticipants'] = 'Người tham gia khóa học';
$string['coursetoolong'] = 'Khóa học quá dài';
$string['customfield_islocked'] = 'Bị khóa';
$string['customfield_islocked_help'] = 'Nếu trường này bị khóa, chỉ những người dùng có khả năng thay đổi các trường tùy chỉnh bị khóa (theo mặc định là người dùng có vai trò quản lý) mới có thể thay đổi nó trong cài đặt khóa học.';
$string['customfield_notvisible'] = 'Không ai';
$string['customfield_visibility'] = 'Hiển thị cho';
$string['customfield_visibility_help'] = 'Cài đặt này xác định ai có thể xem tên và giá trị của trường tùy chỉnh trong danh sách các khóa học hoặc trong bộ lọc trường tùy chỉnh có sẵn trên Bảng điều khiển.';
$string['customfield_visibletoall'] = 'Tất cả mọi người';
$string['customfield_visibletoteachers'] = 'Giáo viên';
$string['customfieldsettings'] = 'Cài đặt chung của trường tùy chỉnh khóa học';
$string['daystakingcourse'] = 'Số ngày tham gia khóa học';
$string['defaultsettingscategory'] = 'Cài đặt mặc định';
$string['downloadcourseconfirmation'] = 'Bạn sắp tải xuống một tệp zip của nội dung khóa học (loại trừ các mục không thể tải xuống và các tệp lớn hơn {$a}).';
$string['downloadcoursecontent'] = 'Tải xuống nội dung khóa học';
$string['downloadcoursecontent_help'] = 'Cài đặt này xác định liệu nội dung khóa học có thể được tải xuống bởi người dùng có khả năng tải xuống nội dung khóa học hay không (theo mặc định là người dùng có vai trò sinh viên hoặc giáo viên).';
$string['downloadcontent'] = 'Bao gồm trong tải xuống nội dung khóa học';
$string['downloadcontent_help'] = 'Hoạt động hoặc tài nguyên này có nên được bao gồm trong tệp zip của nội dung khóa học có sẵn để tải xuống không? Tệp, Thư mục, Trang và Nhãn có thể được tải xuống hoàn toàn. Đối với tất cả các hoạt động và tài nguyên khác, chỉ tên và mô tả được tải xuống. Tùy chọn này yêu cầu tải xuống nội dung khóa học phải được kích hoạt trong cài đặt khóa học.

Cài đặt này không ảnh hưởng đến việc tải xuống nội dung ứng dụng di động để sử dụng ngoại tuyến.';
$string['enabledownloadcoursecontent'] = 'Kích hoạt tải xuống nội dung khóa học';
$string['errorendbeforestart'] = 'Ngày kết thúc ({$a}) là trước ngày bắt đầu khóa học.';
$string['favourite'] = 'Khóa học được gắn sao';
$string['gradetopassnotset'] = 'Khóa học này không có điểm để đạt được đặt. Nó có thể được đặt trong mục điểm của khóa học (Thiết lập sổ điểm).';
$string['hideendedcoursestask'] = 'Ẩn các khóa học vào ngày kết thúc';
$string['informationformodule'] = 'Thông tin về hoạt động {$a}';
$string['module'] = 'Hoạt động';
$string['namewithlink'] = 'Tên danh mục có liên kết';
$string['nocourseactivity'] = 'Không có đủ hoạt động khóa học giữa thời điểm bắt đầu và kết thúc khóa học';
$string['nocourseendtime'] = 'Khóa học không có thời gian kết thúc';
$string['nocoursesections'] = 'Không có phần khóa học';
$string['nocoursestudents'] = 'Không có học sinh';
$string['noaccesssincestartinfomessage'] = 'Chào {$a->userfirstname},
<p>Một số sinh viên trong {$a->coursename} chưa bao giờ truy cập vào khóa học.</p>';
$string['norecentaccessesinfomessage'] = 'Chào {$a->userfirstname},
<p>Một số sinh viên trong {$a->coursename} không truy cập vào khóa học gần đây.</p>';
$string['noteachinginfomessage'] = 'Chào {$a->userfirstname},
<p>Các khóa học có ngày bắt đầu trong tuần tới đã được xác định là không có giáo viên hoặc học sinh đăng ký.</p>';
$string['participants:perpage'] = 'Số người tham gia mỗi trang';
$string['participants:perpage_help'] = 'Số lượng người dùng được hiển thị trên mỗi trang trên trang người tham gia trong mỗi khóa học.';
$string['participantsnavigation'] = 'Điều hướng cấp ba của người tham gia.';
$string['pdfexportfont'] = 'Phông chữ PDF';
$string['pdfexportfont_help'] = 'Phông chữ được sử dụng cho các tệp PDF được tạo, chẳng hạn như bài nộp bài tập.';
$string['privacy:perpage'] = 'Số lượng khóa học hiển thị mỗi trang.';
$string['privacy:completionpath'] = 'Hoàn thành khóa học';
$string['privacy:favouritespath'] = 'Thông tin khóa học được gắn sao';
$string['privacy:metadata:activityfavouritessummary'] = 'Hệ thống khóa học chứa thông tin về các mục từ bộ chọn hoạt động đã được người dùng gắn sao.';
$string['privacy:metadata:completionsummary'] = 'Khóa học chứa thông tin hoàn thành về người dùng.';
$string['privacy:metadata:favouritessummary'] = 'Khóa học chứa thông tin liên quan đến khóa học được người dùng gắn sao.';
$string['recommend'] = 'Đề xuất';
$string['recommendcheckbox'] = 'Đề xuất hoạt động: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} sau khi bắt đầu khóa học';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} trước khi bắt đầu khóa học';
$string['searchactivitiesbyname'] = 'Tìm kiếm hoạt động theo tên';
$string['searchresults'] = 'Kết quả tìm kiếm: {$a}';
$string['sectionlink'] = 'Liên kết cố định';
$string['showstartedcoursestask'] = 'Hiển thị các khóa học vào ngày bắt đầu';
$string['submitsearch'] = 'Gửi tìm kiếm';
$string['studentsatriskincourse'] = 'Học sinh có nguy cơ trong khóa học {$a}';
$string['studentsatriskinfomessage'] = 'Chào {$a->userfirstname},
<p>Các học sinh trong khóa học {$a->coursename} đã được xác định là có nguy cơ.</p>';
$string['target:coursecompletion'] = 'Học sinh có nguy cơ không hoàn thành các điều kiện hoàn thành khóa học';
$string['target:coursecompletion_help'] = 'Mục tiêu này mô tả liệu học sinh có được coi là có nguy cơ không hoàn thành các điều kiện hoàn thành khóa học hay không.';
$string['target:coursecompetencies'] = 'Học sinh có nguy cơ không đạt được các năng lực được gán cho khóa học';
$string['target:coursecompetencies_help'] = 'Mục tiêu này mô tả liệu học sinh có nguy cơ không đạt được các năng lực được gán cho khóa học hay không. Mục tiêu này xem xét rằng tất cả các năng lực được gán cho khóa học phải được đạt được vào cuối khóa học.';
$string['target:coursedropout'] = 'Học sinh có nguy cơ bỏ học';
$string['target:coursedropout_help'] = 'Mục tiêu này mô tả liệu học sinh có được coi là có nguy cơ bỏ học hay không.';
$string['target:coursegradetopass'] = 'Học sinh có nguy cơ không đạt được điểm tối thiểu để vượt qua khóa học';
$string['target:coursegradetopass_help'] = 'Mục tiêu này mô tả liệu học sinh có nguy cơ không đạt được điểm tối thiểu để vượt qua khóa học hay không.';
$string['target:noaccesssincecoursestart'] = 'Học sinh chưa truy cập vào khóa học';
$string['target:noaccesssincecoursestart_help'] = 'Mục tiêu này mô tả học sinh chưa bao giờ truy cập vào khóa học mà họ đã ghi danh.';
$string['target:noaccesssincecoursestartinfo'] = 'Các học sinh sau đây đã đăng ký vào một khóa học đã bắt đầu, nhưng họ chưa bao giờ truy cập vào khóa học.';
$string['target:norecentaccesses'] = 'Học sinh chưa truy cập vào khóa học gần đây';
$string['target:norecentaccesses_help'] = 'Mục tiêu này xác định các học sinh chưa truy cập vào khóa học mà họ đã ghi danh trong khoảng thời gian phân tích được đặt (mặc định là tháng trước).';
$string['target:norecentaccessesinfo'] = 'Các học sinh sau đây chưa truy cập vào khóa học mà họ đã ghi danh trong khoảng thời gian phân tích được đặt (mặc định là tháng trước).';
$string['target:noteachingactivity'] = 'Các khóa học có nguy cơ không bắt đầu';
$string['target:noteachingactivity_help'] = 'Mục tiêu này mô tả liệu các khóa học sắp bắt đầu trong tuần tới có hoạt động giảng dạy hay không.';
$string['target:noteachingactivityinfo'] = 'Các khóa học sau đây sắp bắt đầu trong những ngày tới có nguy cơ không bắt đầu vì họ không có giáo viên hoặc học sinh đăng ký.';
$string['targetlabelstudentcompletionno'] = 'Học sinh có khả năng đáp ứng các điều kiện hoàn thành khóa học';
$string['targetlabelstudentcompletionyes'] = 'Học sinh có nguy cơ không đáp ứng các điều kiện hoàn thành khóa học';
$string['targetlabelstudentcompetenciesno'] = 'Học sinh có khả năng đạt được các năng lực được gán cho khóa học';
$string['targetlabelstudentcompetenciesyes'] = 'Học sinh có nguy cơ không đạt được các năng lực được gán cho khóa học';
$string['targetlabelstudentdropoutyes'] = 'Học sinh có nguy cơ bỏ học';
$string['targetlabelstudentdropoutno'] = 'Không có nguy cơ';
$string['targetlabelstudentgradetopassno'] = 'Học sinh có khả năng đạt được điểm tối thiểu để vượt qua khóa học.';
$string['targetlabelstudentgradetopassyes'] = 'Học sinh có nguy cơ không đạt được điểm tối thiểu để vượt qua khóa học.';
$string['targetlabelteachingyes'] = 'Người dùng có khả năng giảng dạy có thể truy cập vào khóa học';
$string['targetlabelteachingno'] = 'Các khóa học có nguy cơ không bắt đầu';
$string['totalactivities'] = 'Hoạt động: {$a}';
$string['gotosection'] = 'Đi đến phần {$a}';

// Đã lỗi thời từ Moodle 4.3.
$string['aria:courseimage'] = 'Hình ảnh khóa học';
