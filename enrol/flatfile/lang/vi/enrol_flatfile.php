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
 * Strings for component 'enrol_flatfile', language 'en'.
 *
 * @package    enrol_flatfile
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['encoding'] = 'Mã hóa tệp tin';
$string['expiredaction'] = 'Hành động khi hết hạn ghi danh';
$string['expiredaction_help'] = 'Chọn hành động cần thực hiện khi ghi danh của người dùng hết hạn. Xin lưu ý rằng một số dữ liệu và cài đặt của người dùng sẽ bị xóa khỏi khóa học khi người dùng bị hủy ghi danh.';
$string['filelockedmail'] = 'Tệp tin văn bản bạn đang sử dụng cho ghi danh dựa trên tệp tin ({$a}) không thể bị xóa bởi quá trình cron. Điều này thường có nghĩa là quyền truy cập trên tệp tin này bị sai. Vui lòng sửa quyền truy cập để Moodle có thể xóa tệp tin này, nếu không nó có thể bị xử lý nhiều lần.';
$string['filelockedmailsubject'] = 'Lỗi quan trọng: Tệp tin ghi danh';
$string['flatfile:manage'] = 'Quản lý ghi danh người dùng thủ công';
$string['flatfile:unenrol'] = 'Hủy ghi danh người dùng khỏi khóa học thủ công';
$string['flatfileenrolments'] = 'Ghi danh bằng tệp tin phẳng (CSV)';
$string['flatfilesync'] = 'Đồng bộ ghi danh bằng tệp tin phẳng';
$string['location'] = 'Vị trí tệp tin';
$string['location_desc'] = 'Chỉ định đường dẫn đầy đủ tới tệp tin ghi danh. Tệp tin sẽ được tự động xóa sau khi xử lý.';
$string['notifyadmin'] = 'Thông báo cho quản trị viên';
$string['notifyenrolled'] = 'Thông báo cho người dùng đã ghi danh';
$string['notifyenroller'] = 'Thông báo cho người chịu trách nhiệm ghi danh';
$string['messageprovider:flatfile_enrolment'] = 'Tin nhắn ghi danh bằng tệp tin phẳng';
$string['mapping'] = 'Ánh xạ vai trò bằng tệp tin phẳng';
$string['pluginname'] = 'Tệp tin phẳng (CSV)';
$string['pluginname_desc'] = 'Phương pháp này sẽ kiểm tra và xử lý một tệp tin văn bản được định dạng đặc biệt tại vị trí mà bạn chỉ định.
Tệp tin là một tệp tin có các trường được phân tách bằng dấu phẩy với bốn hoặc sáu trường mỗi dòng:

    operation, role, user idnumber, course idnumber [, starttime [, endtime]]

trong đó:

* operation - add | del
* role - student | teacher | teacheredit
* user idnumber - idnumber trong bảng user, chú ý không phải id
* course idnumber - idnumber trong bảng course, chú ý không phải id
* starttime - thời gian bắt đầu (tính bằng giây kể từ epoch) - tùy chọn
* endtime - thời gian kết thúc (tính bằng giây kể từ epoch) - tùy chọn

Nó có thể trông như thế này:
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Plugin ghi danh bằng tệp tin phẳng (CSV) có thể lưu trữ dữ liệu cá nhân liên quan đến các ghi danh tương lai trong bảng enrol_flatfile.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Hành động ghi danh được mong đợi vào ngày đã cho';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'ID của khóa học liên quan đến ghi danh';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'ID của vai trò sẽ được gán hoặc hủy gán';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Thời gian bắt đầu ghi danh';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Thời gian kết thúc ghi danh';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Thời gian sửa đổi ghi danh';
$string['privacy:metadata:enrol_flatfile:userid'] = 'ID của người dùng liên quan đến việc gán vai trò';
