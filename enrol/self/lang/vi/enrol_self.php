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
 * Strings for component 'enrol_self', language 'en'.
 *
 * @package    enrol_self
 * @copyright  2010 Petr Skoda  {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['canntenrol'] = 'Ghi danh đã bị vô hiệu hóa hoặc không hoạt động';
$string['canntenrolearly'] = 'Bạn không thể ghi danh ngay bây giờ; ghi danh bắt đầu vào {$a}.';
$string['canntenrollate'] = 'Bạn không thể ghi danh nữa, vì ghi danh đã kết thúc vào {$a}.';
$string['cohortnonmemberinfo'] = 'Chỉ thành viên của nhóm \'{$a}\' mới có thể tự ghi danh.';
$string['cohortonly'] = 'Chỉ thành viên của nhóm';
$string['cohortonly_help'] = 'Ghi danh tự động có thể bị giới hạn chỉ cho thành viên của nhóm được chỉ định. Lưu ý rằng thay đổi cài đặt này không ảnh hưởng đến các ghi danh hiện có.';
$string['confirmbulkdeleteenrolment'] = 'Bạn có chắc chắn muốn xóa các ghi danh người dùng này không?';
$string['customwelcomemessage'] = 'Tin nhắn chào mừng tùy chỉnh';
$string['customwelcomemessage_help'] = 'Một tin nhắn chào mừng tùy chỉnh có thể được thêm vào dưới dạng văn bản thuần hoặc định dạng tự động của Moodle, bao gồm các thẻ HTML và thẻ đa ngôn ngữ.

Các chỗ trống sau đây có thể được bao gồm trong tin nhắn:

* Tên khóa học {$a->coursename}
* Liên kết đến trang hồ sơ của người dùng {$a->profileurl}
* Email của người dùng {$a->email}
* Họ tên của người dùng {$a->fullname}';
$string['defaultrole'] = 'Vai trò mặc định được gán';
$string['defaultrole_desc'] = 'Chọn vai trò sẽ được gán cho người dùng khi tự ghi danh';
$string['deleteselectedusers'] = 'Xóa các ghi danh người dùng được chọn';
$string['editselectedusers'] = 'Chỉnh sửa các ghi danh người dùng được chọn';
$string['enrolenddate'] = 'Ngày kết thúc';
$string['enrolenddate_help'] = 'Nếu được bật, người dùng chỉ có thể tự ghi danh cho đến ngày này.';
$string['enrolenddaterror'] = 'Ngày kết thúc ghi danh không thể sớm hơn ngày bắt đầu';
$string['enrolme'] = 'Ghi danh tôi';
$string['enrolperiod'] = 'Thời gian ghi danh';
$string['enrolperiod_desc'] = 'Thời gian mặc định mà ghi danh có hiệu lực. Nếu đặt thành không, thời gian ghi danh sẽ không giới hạn theo mặc định.';
$string['enrolperiod_help'] = 'Thời gian ghi danh có hiệu lực, bắt đầu từ lúc người dùng tự ghi danh. Nếu tắt, thời gian ghi danh sẽ không giới hạn.';
$string['enrolstartdate'] = 'Ngày bắt đầu';
$string['enrolstartdate_help'] = 'Nếu được bật, người dùng chỉ có thể tự ghi danh từ ngày này trở đi.';
$string['expiredaction'] = 'Hành động khi hết hạn ghi danh';
$string['expiredaction_help'] = 'Chọn hành động thực hiện khi ghi danh của người dùng hết hạn. Lưu ý rằng một số dữ liệu và cài đặt của người dùng sẽ bị xóa khỏi khóa học khi hủy ghi danh.';
$string['expirymessageenrollersubject'] = 'Thông báo hết hạn ghi danh tự động';
$string['expirymessageenrollerbody'] = 'Ghi danh tự động trong khóa học \'{$a->course}\' sẽ hết hạn trong vòng {$a->threshold} cho những người dùng sau:

{$a->users}

Để gia hạn ghi danh của họ, hãy truy cập {$a->extendurl}';
$string['expirymessageenrolledsubject'] = 'Thông báo hết hạn ghi danh tự động';
$string['expirymessageenrolledbody'] = 'Kính gửi {$a->user},

Đây là thông báo rằng ghi danh của bạn trong khóa học \'{$a->course}\' sẽ hết hạn vào {$a->timeend}.

Nếu bạn cần giúp đỡ, vui lòng liên hệ với {$a->enroller}.';
$string['expirynotifyall'] = 'Giáo viên và người dùng đã ghi danh';
$string['expirynotifyenroller'] = 'Chỉ giáo viên';
$string['groupkey'] = 'Sử dụng khóa ghi danh nhóm';
$string['groupkey_desc'] = 'Sử dụng khóa ghi danh nhóm theo mặc định.';
$string['groupkey_help'] = 'Ngoài việc hạn chế quyền truy cập vào khóa học chỉ cho những người biết khóa, việc sử dụng khóa ghi danh nhóm có nghĩa là người dùng sẽ tự động được thêm vào các nhóm khi họ ghi danh vào khóa học.

Lưu ý: Một khóa ghi danh cho khóa học phải được chỉ định trong cài đặt ghi danh tự động cũng như các khóa ghi danh nhóm trong cài đặt nhóm.';
$string['keyholder'] = 'Bạn nên nhận được khóa ghi danh này từ:';
$string['longtimenosee'] = 'Hủy ghi danh nếu không hoạt động sau';
$string['longtimenosee_help'] = 'Nếu người dùng không truy cập vào khóa học trong một thời gian dài, họ sẽ tự động bị hủy ghi danh. Thông số này xác định giới hạn thời gian đó.';
$string['maxenrolled'] = 'Số lượng người dùng tối đa đã ghi danh';
$string['maxenrolled_help'] = 'Chỉ định số lượng người dùng tối đa có thể tự ghi danh. 0 có nghĩa là không giới hạn.';
$string['maxenrolledreached'] = 'Số lượng người dùng tối đa cho phép tự ghi danh đã đạt tới.';
$string['messageprovider:expiry_notification'] = 'Thông báo hết hạn ghi danh tự động';
$string['newenrols'] = 'Cho phép ghi danh tự động mới';
$string['newenrols_desc'] = 'Cho phép người dùng tự ghi danh vào các khóa học mới theo mặc định.';
$string['newenrols_help'] = 'Cài đặt này xác định liệu người dùng có thể ghi danh vào khóa học này không.';
$string['nopassword'] = 'Không yêu cầu khóa ghi danh.';
$string['password'] = 'Khóa ghi danh';
$string['password_help'] = 'Một khóa ghi danh cho phép quyền truy cập vào khóa học bị hạn chế chỉ cho những người biết khóa.

Nếu trường này để trống, bất kỳ người dùng nào cũng có thể ghi danh vào khóa học.

Nếu một khóa ghi danh được chỉ định, bất kỳ người dùng nào cố gắng ghi danh vào khóa học sẽ phải cung cấp khóa. Lưu ý rằng người dùng chỉ cần cung cấp khóa ghi danh MỘT LẦN, khi họ ghi danh vào khóa học.';
$string['passwordinvalid'] = 'Khóa ghi danh không chính xác, vui lòng thử lại';
$string['passwordinvalidhint'] = 'Khóa ghi danh đó không chính xác, vui lòng thử lại<br />
(Đây là gợi ý - nó bắt đầu với \'{$a}\')';
$string['passwordmatchesgroupkey'] = 'Khóa ghi danh này đã được sử dụng làm khóa ghi danh nhóm.';
$string['pluginname'] = 'Ghi danh tự động';
$string['pluginname_desc'] = 'Plugin ghi danh tự động cho phép người dùng chọn khóa học họ muốn tham gia. Các khóa học có thể được bảo vệ bằng khóa ghi danh. Nội bộ ghi danh được thực hiện thông qua plugin ghi danh thủ công cần được kích hoạt trong cùng một khóa học.';
$string['requirepassword'] = 'Yêu cầu khóa ghi danh';
$string['requirepassword_desc'] = 'Yêu cầu khóa ghi danh trong các khóa học mới và ngăn chặn việc loại bỏ khóa ghi danh từ các khóa học hiện có.';
$string['role'] = 'Vai trò mặc định được gán';
$string['self:config'] = 'Cấu hình các trường hợp ghi danh tự động';
$string['self:enrolself'] = 'Tự ghi danh vào khóa học';
$string['self:holdkey'] = 'Xuất hiện dưới dạng người giữ khóa ghi danh tự động';
$string['self:manage'] = 'Quản lý người dùng đã ghi danh';
$string['self:unenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['self:unenrolself'] = 'Tự hủy ghi danh khỏi khóa học';
$string['sendcoursewelcomemessage'] = 'Gửi tin nhắn chào mừng khóa học';
$string['sendcoursewelcomemessage_help'] = 'Khi người dùng tự ghi danh vào khóa học, họ có thể nhận được một email tin nhắn chào mừng. Nếu được gửi từ liên hệ khóa học (mặc định là giáo viên), và nhiều hơn một người dùng có vai trò này, email sẽ được gửi từ người đầu tiên được gán vai trò.';
$string['sendexpirynotificationstask'] = 'Nhiệm vụ gửi thông báo hết hạn ghi danh tự động';
$string['showhint'] = 'Hiển thị gợi ý';
$string['showhint_desc'] = 'Hiển thị chữ cái đầu tiên của khóa truy cập khách.';
$string['status'] = 'Giữ cho các ghi danh tự động hiện tại hoạt động';
$string['status_desc'] = 'Kích hoạt phương thức ghi danh tự động trong các khóa học mới.';
$string['status_help'] = 'Nếu đặt thành Không, bất kỳ người tham gia nào hiện đang tự ghi danh vào khóa học sẽ không còn quyền truy cập.';
$string['syncenrolmentstask'] = 'Nhiệm vụ đồng bộ ghi danh tự động';
$string['unenrol'] = 'Hủy ghi danh người dùng';
$string['unenrolselfconfirm'] = 'Bạn có thực sự muốn tự hủy ghi danh khỏi khóa học "{$a}" không?';
$string['unenroluser'] = 'Bạn có thực sự muốn hủy ghi danh "{$a->user}" khỏi khóa học "{$a->course}" không?';
$string['unenrolusers'] = 'Hủy ghi danh người dùng';
$string['usepasswordpolicy'] = 'Sử dụng chính sách mật khẩu';
$string['usepasswordpolicy_desc'] = 'Sử dụng chính sách mật khẩu tiêu chuẩn cho khóa ghi danh.';
$string['welcometocourse'] = 'Chào mừng đến với {$a}';
$string['welcometocoursetext'] = 'Chào mừng đến với {$a->coursename}!

Nếu bạn chưa làm điều đó, bạn nên chỉnh sửa trang hồ sơ của mình để chúng tôi có thể biết thêm về bạn:

  {$a->profileurl}';
$string['privacy:metadata'] = 'Plugin ghi danh tự động không lưu trữ bất kỳ dữ liệu cá nhân nào.';
