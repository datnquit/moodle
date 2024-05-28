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
 * Strings for component 'core_enrol', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    core_enrol
 * @subpackage enrol
 * @copyright  2010 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actenrolshhdr'] = 'Các plugin ghi danh khóa học có sẵn';
$string['addinstance'] = 'Thêm phương thức';
$string['addinstanceanother'] = 'Thêm phương thức và tạo thêm một cái khác';
$string['ajaxoneuserfound'] = '1 người dùng được tìm thấy';
$string['ajaxxusersfound'] = '{$a} người dùng được tìm thấy';
$string['ajaxxmoreusersfound'] = 'Tìm thấy hơn {$a} người dùng';
$string['ajaxnext25'] = '25 tiếp theo...';
$string['assignnotpermitted'] = 'Bạn không có quyền hoặc không thể gán vai trò trong khóa học này.';
$string['bulkuseroperation'] = 'Hoạt động người dùng hàng loạt';
$string['configenrolplugins'] = 'Vui lòng chọn tất cả các plugin cần thiết và sắp xếp chúng theo thứ tự thích hợp.';
$string['custominstancename'] = 'Tên instance tùy chỉnh';
$string['defaultenrol'] = 'Thêm instance vào các khóa học mới';
$string['defaultenrol_desc'] = 'Có thể thêm plugin này vào tất cả các khóa học mới theo mặc định.';
$string['deleteinstanceconfirm'] = 'Bạn sắp xóa phương thức ghi danh "{$a->name}". Tất cả {$a->users} người dùng hiện đang ghi danh bằng phương thức này sẽ bị hủy ghi danh và bất kỳ dữ liệu liên quan đến khóa học như điểm, thành viên nhóm hoặc đăng ký diễn đàn của người dùng sẽ bị xóa.

Bạn có chắc chắn muốn tiếp tục?';
$string['deleteinstanceconfirmself'] = 'Bạn có thực sự chắc chắn muốn xóa instance "{$a->name}" mà cung cấp cho bạn quyền truy cập vào khóa học này không? Có thể bạn sẽ không thể truy cập vào khóa học này nếu tiếp tục.';
$string['deleteinstancenousersconfirm'] = 'Bạn sắp xóa phương thức ghi danh "{$a->name}". Bạn có chắc chắn muốn tiếp tục?';
$string['disableinstanceconfirmself'] = 'Bạn có thực sự chắc chắn muốn vô hiệu hóa instance "{$a->name}" mà cung cấp cho bạn quyền truy cập vào khóa học này không? Có thể bạn sẽ không thể truy cập vào khóa học này nếu tiếp tục.';
$string['durationdays'] = '{$a} ngày';
$string['editenrolment'] = 'Chỉnh sửa ghi danh';
$string['edituserenrolment'] = 'Chỉnh sửa ghi danh của {$a}';
$string['enrol'] = 'Ghi danh';
$string['enrolcandidates'] = 'Người dùng chưa ghi danh';
$string['enrolcandidatesmatching'] = 'Người dùng chưa ghi danh phù hợp';
$string['enrolcohort'] = 'Ghi danh nhóm';
$string['enrolcohortusers'] = 'Ghi danh người dùng';
$string['enroldetails'] = 'Chi tiết ghi danh';
$string['eventenrolinstancecreated'] = 'Đã tạo instance ghi danh';
$string['eventenrolinstancedeleted'] = 'Đã xóa instance ghi danh';
$string['eventenrolinstanceupdated'] = 'Đã cập nhật instance ghi danh';
$string['enrollednewusers'] = 'Đã ghi danh thành công {$a} người dùng mới';
$string['enrolledusers'] = 'Người dùng đã ghi danh';
$string['enrolledusersmatching'] = 'Người dùng đã ghi danh phù hợp';
$string['enrolme'] = 'Ghi danh tôi vào khóa học này';
$string['enrolment'] = 'Ghi danh';
$string['enrolmentinstances'] = 'Phương thức ghi danh';
$string['enrolmentnew'] = 'Ghi danh mới trong {$a}';
$string['enrolmentnewuser'] = '{$a->user} đã ghi danh vào khóa học "{$a->course}"';
$string['enrolmentmethod'] = 'Phương thức ghi danh';
$string['enrolments'] = 'Ghi danh';
$string['enrolmentoptions'] = 'Tùy chọn ghi danh';
$string['enrolmentupdatedforuser'] = 'Ghi danh cho người dùng "{$a->fullname}" đã được cập nhật';
$string['enrolnotpermitted'] = 'Bạn không có quyền hoặc không được phép ghi danh ai đó vào khóa học này';
$string['enrolperiod'] = 'Thời gian ghi danh';
$string['enrolusage'] = 'Instances / ghi danh';
$string['enrolusers'] = 'Ghi danh người dùng';
$string['enrolxusers'] = 'Ghi danh {$a} người dùng';
$string['enroltimecreated'] = 'Ghi danh đã tạo';
$string['enroltimeend'] = 'Ghi danh kết thúc';
$string['enroltimeendinvalid'] = 'Ngày kết thúc ghi danh phải sau ngày bắt đầu ghi danh';
$string['enroltimestart'] = 'Ghi danh bắt đầu';
$string['errajaxfailedenrol'] = 'Ghi danh người dùng không thành công';
$string['errajaxsearch'] = 'Lỗi khi tìm kiếm người dùng';
$string['erroreditenrolment'] = 'Đã xảy ra lỗi khi cố gắng chỉnh sửa ghi danh của người dùng';
$string['errorenrolcohort'] = 'Lỗi tạo instance đồng bộ ghi danh nhóm trong khóa học này.';
$string['errorenrolcohortusers'] = 'Lỗi khi ghi danh thành viên nhóm vào khóa học này.';
$string['errorthresholdlow'] = 'Ngưỡng thông báo phải ít nhất là 1 ngày.';
$string['errorwithbulkoperation'] = 'Đã xảy ra lỗi khi xử lý thay đổi ghi danh hàng loạt của bạn.';
$string['eventuserenrolmentcreated'] = 'Người dùng đã được ghi danh vào khóa học';
$string['eventuserenrolmentdeleted'] = 'Người dùng đã bị hủy ghi danh khỏi khóa học';
$string['eventuserenrolmentupdated'] = 'Ghi danh người dùng đã được cập nhật';
$string['expirynotify'] = 'Thông báo trước khi ghi danh hết hạn';
$string['expirynotify_help'] = 'Cài đặt này xác định liệu các tin nhắn thông báo hết hạn ghi danh có được gửi hay không.';
$string['expirynotifyall'] = 'Người ghi danh và người dùng đã ghi danh';
$string['expirynotifyenroller'] = 'Chỉ người ghi danh';
$string['expirynotifyhour'] = 'Giờ gửi thông báo hết hạn ghi danh';
$string['expirythreshold'] = 'Ngưỡng thông báo';
$string['expirythreshold_help'] = 'Bao lâu trước khi hết hạn ghi danh người dùng được thông báo?';
$string['finishenrollingusers'] = 'Hoàn thành ghi danh người dùng';
$string['foundxcohorts'] = 'Đã tìm thấy {$a} nhóm';
$string['instanceadded'] = 'Phương thức đã thêm';
$string['instanceeditselfwarning'] = 'Cảnh báo:';
$string['instanceeditselfwarningtext'] = 'Bạn được ghi danh vào khóa học này thông qua phương thức ghi danh này, các thay đổi có thể ảnh hưởng đến quyền truy cập của bạn vào khóa học này.';
$string['invalidenrolinstance'] = 'Instance ghi danh không hợp lệ';
$string['invalidenrolduration'] = 'Thời gian ghi danh không hợp lệ';
$string['invalidrole'] = 'Vai trò không hợp lệ';
$string['invalidrequest'] = 'Yêu cầu không hợp lệ';
$string['manageenrols'] = 'Quản lý các plugin ghi danh';
$string['manageinstance'] = 'Quản lý';
$string['method'] = 'Phương thức';
$string['migratetomanual'] = 'Di chuyển sang ghi danh thủ công';
$string['nochange'] = 'Không thay đổi';
$string['noexistingparticipants'] = 'Không có người tham gia hiện tại';
$string['nogroup'] = 'Không có nhóm';
$string['noguestaccess'] = 'Khách không thể truy cập vào khóa học này. Vui lòng đăng nhập.';
$string['none'] = 'Không có';
$string['notenrollable'] = 'Bạn không thể tự ghi danh vào khóa học này.';
$string['notenrolledusers'] = 'Người dùng khác';
$string['otheruserdesc'] = 'Người dùng sau không được ghi danh vào khóa học này nhưng có vai trò, được thừa kế hoặc được gán trong đó.';
$string['participationactive'] = 'Hoạt động';
$string['participationnotcurrent'] = 'Không hiện tại';
$string['participationstatus'] = 'Trạng thái';
$string['participationsuspended'] = 'Đã đình chỉ';
$string['periodend'] = 'cho đến {$a}';
$string['periodnone'] = 'đã ghi danh {$a}';
$string['periodstart'] = 'từ {$a}';
$string['periodstartend'] = 'từ {$a->start} cho đến {$a->end}';
$string['recovergrades'] = 'Phục hồi điểm cũ của người dùng nếu có thể';
$string['rolefromthiscourse'] = '{$a->role} (Đã gán trong khóa học này)';
$string['rolefrommetacourse'] = '{$a->role} (Được thừa kế từ khóa học chính)';
$string['rolefromcategory'] = '{$a->role} (Được thừa kế từ danh mục khóa học)';
$string['rolefromsystem'] = '{$a->role} (Đã gán ở cấp độ hệ thống)';
$string['sendfromcoursecontact'] = 'Từ liên hệ khóa học';
$string['sendfromkeyholder'] = 'Từ người giữ khóa';
$string['sendfromnoreply'] = 'Từ địa chỉ không phản hồi';
$string['startdatetoday'] = 'Hôm nay';
$string['synced'] = 'Đã đồng bộ';
$string['testsettings'] = 'Kiểm tra cài đặt';
$string['testsettingsheading'] = 'Kiểm tra cài đặt ghi danh - {$a}';
$string['timeended'] = 'Thời gian kết thúc';
$string['timeenrolled'] = 'Thời gian ghi danh';
$string['timereaggregated'] = 'Thời gian tái tổng hợp';
$string['timestarted'] = 'Thời gian bắt đầu';
$string['totalenrolledusers'] = '{$a} người dùng đã ghi danh';
$string['totalunenrolledusers'] = '{$a} người dùng đã hủy ghi danh';
$string['totalotherusers'] = '{$a} người dùng khác';
$string['unassignnotpermitted'] = 'Bạn không có quyền hủy gán vai trò trong khóa học này';
$string['unenrol'] = 'Hủy ghi danh';
$string['unenrolleduser'] = 'Người dùng "{$a->fullname}" đã bị hủy ghi danh khỏi khóa học';
$string['unenrolconfirm'] = 'Bạn có thực sự muốn hủy ghi danh "{$a->user}" (trước đây đã ghi danh qua "{$a->enrolinstancename}") khỏi "{$a->course}"?';
$string['unenrolme'] = 'Hủy ghi danh tôi khỏi khóa học này';
$string['unenrolnotpermitted'] = 'Bạn không có quyền hủy ghi danh người dùng này khỏi khóa học.';
$string['unenrolroleusers'] = 'Hủy ghi danh người dùng';
$string['uninstallmigrating'] = 'Đang di chuyển ghi danh "{$a}"';
$string['unknowajaxaction'] = 'Hành động yêu cầu không xác định';
$string['unlimitedduration'] = 'Không giới hạn';
$string['userremovedfromselectiona'] = 'Người dùng "{$a}" đã được xóa khỏi lựa chọn.';
$string['usersearch'] = 'Tìm kiếm';
$string['withselectedusers'] = 'Với người dùng được chọn';
$string['extremovedaction'] = 'Hành động hủy ghi danh bên ngoài';
$string['extremovedaction_help'] = 'Chọn hành động thực hiện khi ghi danh người dùng biến mất từ nguồn ghi danh bên ngoài. Xin lưu ý rằng một số dữ liệu và cài đặt của người dùng sẽ bị xóa khỏi khóa học trong quá trình hủy ghi danh khóa học.';
$string['extremovedsuspend'] = 'Vô hiệu hóa ghi danh khóa học';
$string['extremovedsuspendnoroles'] = 'Vô hiệu hóa ghi danh khóa học và xóa vai trò';
$string['extremovedkeep'] = 'Giữ người dùng ghi danh';
$string['extremovedunenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['privacy:metadata:user_enrolments'] = 'Ghi danh';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Instance của plugin ghi danh';
$string['privacy:metadata:user_enrolments:modifierid'] = 'ID của người dùng đã chỉnh sửa cuối cùng ghi danh người dùng';
$string['privacy:metadata:user_enrolments:status'] = 'Trạng thái ghi danh người dùng trong khóa học';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Plugin ghi danh cốt lõi lưu trữ người dùng đã ghi danh.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Thời gian khi ghi danh người dùng được tạo';
$string['privacy:metadata:user_enrolments:timeend'] = 'Thời gian khi ghi danh người dùng kết thúc';
$string['privacy:metadata:user_enrolments:timestart'] = 'Thời gian khi ghi danh người dùng bắt đầu';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Thời gian khi ghi danh người dùng được chỉnh sửa';
$string['privacy:metadata:user_enrolments:userid'] = 'ID của người dùng';
$string['youenrolledincourse'] = 'Bạn đã ghi danh vào khóa học.';
$string['youunenrolledfromcourse'] = 'Bạn đã bị hủy ghi danh khỏi khóa học "{$a}".';

// Bị loại bỏ từ Moodle 4.0.
$string['proceedtocourse'] = 'Tiếp tục đến nội dung khóa học';
