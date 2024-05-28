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
 * Strings for component 'enrol_manual', language 'en'.
 *
 * @package    enrol_manual
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['advanced'] = 'Nâng cao';
$string['alterstatus'] = 'Thay đổi trạng thái';
$string['altertimeend'] = 'Thay đổi thời gian kết thúc';
$string['altertimestart'] = 'Thay đổi thời gian bắt đầu';
$string['assignrole'] = 'Gán vai trò';
$string['assignroles'] = 'Gán các vai trò';
$string['browseusers'] = 'Duyệt người dùng';
$string['browsecohorts'] = 'Duyệt các nhóm';
$string['confirmbulkdeleteenrolment'] = 'Bạn có chắc chắn muốn xóa các đăng ký người dùng này không?';
$string['defaultstart'] = 'Bắt đầu đăng ký mặc định';
$string['defaultperiod'] = 'Thời gian đăng ký mặc định';
$string['defaultperiod_desc'] = 'Thời gian mặc định mà đăng ký có hiệu lực. Nếu đặt thành không, thời gian đăng ký sẽ không giới hạn theo mặc định.';
$string['defaultperiod_help'] = 'Thời gian mặc định mà đăng ký có hiệu lực, bắt đầu từ lúc người dùng được đăng ký. Nếu tắt, thời gian đăng ký sẽ không giới hạn theo mặc định.';
$string['deleteselectedusers'] = 'Xóa các đăng ký người dùng được chọn';
$string['editselectedusers'] = 'Chỉnh sửa các đăng ký người dùng được chọn';
$string['enrolledincourserole'] = 'Đã đăng ký trong khóa học "{$a->course}" với vai trò "{$a->role}"';
$string['enrolusers'] = 'Đăng ký người dùng';
$string['enroluserscohorts'] = 'Đăng ký người dùng và nhóm đã chọn';
$string['expiredaction'] = 'Hành động khi hết hạn đăng ký';
$string['expiredaction_help'] = 'Chọn hành động thực hiện khi đăng ký người dùng hết hạn. Lưu ý rằng một số dữ liệu và cài đặt của người dùng sẽ bị xóa khỏi khóa học khi hủy đăng ký.';
$string['expirymessageenrollersubject'] = 'Thông báo hết hạn đăng ký';
$string['expirymessageenrollerbody'] = 'Đăng ký trong khóa học \'{$a->course}\' sẽ hết hạn trong vòng {$a->threshold} cho những người dùng sau:

{$a->users}

Để gia hạn đăng ký của họ, hãy truy cập {$a->extendurl}';
$string['expirymessageenrolledsubject'] = 'Thông báo hết hạn đăng ký';
$string['expirymessageenrolledbody'] = 'Kính gửi {$a->user},

Đây là thông báo rằng đăng ký của bạn trong khóa học \'{$a->course}\' sẽ hết hạn vào {$a->timeend}.

Nếu bạn cần giúp đỡ, vui lòng liên hệ với {$a->enroller}.';
$string['managemanualenrolements'] = 'Quản lý đăng ký thủ công';
$string['manual:config'] = 'Cấu hình các trường hợp đăng ký thủ công';
$string['manual:enrol'] = 'Đăng ký người dùng';
$string['manual:manage'] = 'Quản lý đăng ký người dùng';
$string['manual:unenrol'] = 'Hủy đăng ký người dùng khỏi khóa học';
$string['manual:unenrolself'] = 'Hủy đăng ký bản thân khỏi khóa học';
$string['messageprovider:expiry_notification'] = 'Thông báo hết hạn đăng ký thủ công';
$string['now'] = 'Bây giờ';
$string['pluginname'] = 'Đăng ký thủ công';
$string['pluginname_desc'] = 'Plugin đăng ký thủ công cho phép người dùng được đăng ký thủ công thông qua một liên kết trong cài đặt quản trị khóa học, bởi một người dùng có quyền hạn phù hợp như giáo viên. Plugin này nên được kích hoạt bình thường, vì một số plugin đăng ký khác, như đăng ký tự động, yêu cầu nó.';
$string['selection'] = 'Lựa chọn';
$string['selectusers'] = 'Chọn người dùng';
$string['selectcohorts'] = 'Chọn nhóm';
$string['sendexpirynotificationstask'] = 'Nhiệm vụ gửi thông báo hết hạn đăng ký thủ công';
$string['status'] = 'Kích hoạt đăng ký thủ công';
$string['status_desc'] = 'Cho phép truy cập khóa học của người dùng được đăng ký nội bộ. Điều này nên được kích hoạt trong hầu hết các trường hợp.';
$string['status_help'] = 'Cài đặt này xác định liệu người dùng có thể được đăng ký thủ công, thông qua một liên kết trong cài đặt quản trị khóa học, bởi một người dùng có quyền hạn phù hợp như giáo viên.';
$string['statusenabled'] = 'Đã kích hoạt';
$string['statusdisabled'] = 'Đã vô hiệu hóa';
$string['syncenrolmentstask'] = 'Nhiệm vụ đồng bộ đăng ký thủ công';
$string['unenrol'] = 'Hủy đăng ký người dùng';
$string['unenrolselectedusers'] = 'Hủy đăng ký người dùng đã chọn';
$string['unenrolselfconfirm'] = 'Bạn có thực sự muốn hủy đăng ký khỏi khóa học "{$a}" không?';
$string['unenroluser'] = 'Bạn có thực sự muốn hủy đăng ký "{$a->user}" khỏi khóa học "{$a->course}" không?';
$string['unenrolusers'] = 'Hủy đăng ký người dùng';
$string['wscannotenrol'] = 'Plugin không thể đăng ký thủ công một người dùng vào khóa học id = {$a->courseid}';
$string['wsnoinstance'] = 'Plugin đăng ký thủ công không tồn tại hoặc đã bị vô hiệu hóa cho khóa học (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Bạn không có quyền gán vai trò này ({$a->roleid}) cho người dùng này ({$a->userid}) trong khóa học này ({$a->courseid}).';
$string['manualpluginnotinstalled'] = 'Plugin "Thủ công" chưa được cài đặt';
$string['privacy:metadata'] = 'Plugin đăng ký thủ công không lưu trữ bất kỳ dữ liệu cá nhân nào.';
