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
 * autoenrol enrolment plugin.
 *
 * This plugin automatically enrols a user onto a course the first time they try to access it.
 *
 * @package    enrol_autoenrol
 * @copyright  2013 Mark Ward & Matthew Cannings - based on code by Martin Dougiamas, Petr Skoda, Eugene Venter and others
 * @copyright  2017 onward Roberto Pinna
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'Tự Động Ghi Danh';
$string['pluginname_desc'] = 'Mô-đun tự động ghi danh cho phép người dùng đã đăng nhập được tự động cấp quyền truy cập vào khóa học và được ghi danh. Điều này tương tự như cho phép truy cập khách nhưng học sinh sẽ được ghi danh vĩnh viễn và do đó có thể tham gia diễn đàn và các hoạt động trong khu vực.';

$string['config'] = 'Cấu hình';
$string['autounenrolaction'] = 'Hành động tự động hủy ghi danh';
$string['autounenrolaction_help'] = 'Chọn hành động thực hiện khi quy tắc lọc người dùng không còn phù hợp nữa. Lưu ý rằng một số dữ liệu và cài đặt của người dùng sẽ bị xóa khỏi khóa học trong quá trình hủy ghi danh.';
$string['customwelcomemessage'] = 'Tin nhắn chào mừng tùy chỉnh';
$string['customwelcomemessage_help'] = 'Một tin nhắn chào mừng tùy chỉnh có thể được thêm dưới dạng văn bản thuần hoặc định dạng Moodle-auto, bao gồm các thẻ HTML và các thẻ đa ngôn ngữ.

Các ký tự chỗ trống sau đây có thể được bao gồm trong tin nhắn:

* Tên khóa học {$a->coursename}
* Liên kết đến trang hồ sơ của người dùng {$a->profileurl}
* Liên kết đến khóa học {$a->link}
* Email người dùng {$a->email}
* Tên đầy đủ người dùng {$a->fullname}';
$string['enrolme'] = 'Ghi danh tôi';
$string['general'] = 'Chung';
$string['filtering'] = 'Lọc người dùng';

$string['sendcoursewelcomemessage'] = 'Gửi tin nhắn chào mừng khóa học';
$string['sendcoursewelcomemessage_help'] = 'Khi một người dùng được tự động ghi danh vào khóa học, họ có thể được gửi một email tin nhắn chào mừng. Nếu được gửi từ liên hệ khóa học (mặc định là giáo viên), và có nhiều hơn một người dùng có vai trò này, email sẽ được gửi từ người đầu tiên được chỉ định vai trò này.';

$string['warning'] = 'Cảnh báo!';
$string['warning_message'] = 'Thêm plugin này vào khóa học của bạn sẽ cho phép bất kỳ người dùng Moodle đã đăng ký nào truy cập vào khóa học của bạn. Chỉ cài đặt plugin này nếu bạn muốn cho phép truy cập mở vào khóa học của mình cho những người dùng đã đăng nhập.';
$string['welcomemessage'] = 'Tin nhắn chào mừng';
$string['welcometocourse'] = 'Chào mừng đến với {$a}';
$string['welcometocoursetext'] = 'Chào mừng đến với {$a->coursename}!

Nếu bạn chưa làm điều này, bạn nên chỉnh sửa trang hồ sơ của mình để chúng tôi có thể biết thêm về bạn:

  {$a->profileurl}';

$string['role'] = 'Vai trò mặc định được chỉ định';
$string['role_help'] = 'Người dùng quyền lực có thể sử dụng cài đặt này để thay đổi mức quyền mà người dùng được ghi danh.';

$string['method'] = 'Ghi danh khi';
$string['m_site'] = 'Đăng nhập vào trang web';
$string['m_confirmation'] = 'Xác nhận trên màn hình ghi danh';
$string['m_course'] = 'Truy cập khóa học';
$string['method_help'] = 'Người dùng quyền lực có thể sử dụng cài đặt này để thay đổi hành vi của plugin để người dùng được ghi danh vào khóa học khi đăng nhập thay vì chờ họ truy cập khóa học. Điều này hữu ích cho các khóa học nên hiển thị trong danh sách "khóa học của tôi" của người dùng mặc định.';

$string['userfilter'] = 'Lọc người dùng';
$string['userfilter_help'] = 'Khi được thiết lập Autoenrol sẽ chỉ ghi danh người dùng khi họ phù hợp với các quy tắc.';

$string['groupon'] = 'Nhóm theo';
$string['nogroupon'] = 'Không tạo nhóm';
$string['g_none'] = 'Chọn...';
$string['g_auth'] = 'Phương pháp xác thực';
$string['g_dept'] = 'Phòng ban';
$string['g_email'] = 'Địa chỉ Email';
$string['g_inst'] = 'Tổ chức';
$string['g_lang'] = 'Ngôn ngữ';
$string['groupon_help'] = 'AutoEnrol có thể tự động thêm người dùng vào một nhóm khi họ được ghi danh dựa trên một trong các trường người dùng này.';

$string['countlimit'] = 'Giới hạn';
$string['countlimit_help'] = 'Phiên bản này sẽ đếm số lượng ghi danh mà nó thực hiện trên một khóa học và có thể ngừng ghi danh người dùng khi đạt đến một mức nhất định. Cài đặt mặc định là 0 có nghĩa là không giới hạn.';

$string['alwaysenrol'] = 'Luôn ghi danh';
$string['alwaysenrol_help'] = 'Khi được đặt thành Có, plugin sẽ luôn ghi danh người dùng, ngay cả khi họ đã có quyền truy cập vào khóa học thông qua một phương pháp khác.';

$string['selfunenrol'] = 'Kích hoạt tự hủy ghi danh';
$string['selfunenrol_help'] = 'Khi được đặt thành Có, người dùng có thể tự hủy ghi danh.';
$string['selfunenrol_desc'] = 'Cho phép người dùng tự hủy ghi danh mặc định trong các phiên bản Autoenrol mới.';

$string['groupname'] = 'Tên nhóm';
$string['groupname_help'] = 'Khi bạn nhóm theo Lọc Người Dùng, chỉ một nhóm sẽ được tạo và đây sẽ là tên của nhóm.';

$string['softmatch'] = 'Khớp mềm';
$string['softmatch_help'] = 'Khi được kích hoạt, AutoEnrol sẽ ghi danh người dùng khi họ khớp một phần với giá trị "Chỉ Cho Phép" thay vì yêu cầu khớp chính xác. Các khớp mềm cũng không phân biệt chữ hoa chữ thường. Giá trị của "Lọc Theo" sẽ được sử dụng làm tên nhóm.';

$string['instancename'] = 'Nhãn tùy chỉnh';
$string['instancename_help'] = 'Bạn có thể thêm một nhãn tùy chỉnh để làm rõ phương pháp ghi danh này thực hiện những gì. Tùy chọn này hữu ích nhất khi có nhiều phiên bản AutoEnrol trên một khóa học.';

$string['filter'] = 'Chỉ Cho Phép';
$string['filter_help'] = 'Khi một trọng tâm nhóm được chọn, bạn có thể sử dụng trường này để lọc loại người dùng mà bạn muốn ghi danh vào khóa học. Ví dụ, nếu bạn nhóm theo xác thực và lọc với "manual", chỉ người dùng đã đăng ký trực tiếp với trang web của bạn sẽ được ghi danh.';

$string['auto'] = 'Tự động';
$string['auto_desc'] = 'Nhóm này đã được tạo tự động bởi plugin Auto Enrol. Nó sẽ bị xóa nếu bạn xóa plugin Auto Enrol khỏi khóa học.';

$string['defaultrole'] = 'Vai trò mặc định được chỉ định';
$string['defaultrole_desc'] = 'Chọn vai trò sẽ được chỉ định cho người dùng trong quá trình ghi danh tự động';
$string['autoenrol:config'] = 'Cấu hình ghi danh tự động';
$string['autoenrol:manage'] = 'Quản lý người dùng được tự động ghi danh';
$string['autoenrol:method'] = 'Người dùng có thể ghi danh người dùng vào khóa học khi đăng nhập';
$string['autoenrol:unenrol'] = 'Người dùng có thể hủy ghi danh người dùng được tự động ghi danh';
$string['autoenrol:unenrolself'] = 'Người dùng có thể tự hủy ghi danh nếu họ được ghi danh khi truy cập';
$string['autoenrol:hideshowinstance'] = 'Người dùng có thể bật hoặc tắt các phiên bản autoenrol';

$string['unenrolselfconfirm'] = 'Bạn có thực sự muốn tự hủy ghi danh khỏi khóa học "{$a}" không? Bạn có thể truy cập lại khóa học để được ghi danh lại nhưng thông tin như điểm số và nộp bài có thể bị mất.';

$string['emptyfield'] = 'Không có {$a}';

$string['removegroups'] = 'Xóa nhóm';
$string['removegroups_desc'] = 'Khi một phiên bản ghi danh bị xóa, nó có nên cố gắng xóa các nhóm mà nó đã tạo không?';

$string['enrolstartdate'] = 'Ngày bắt đầu';
$string['enrolstartdate_help'] = 'Nếu được bật, người dùng sẽ chỉ được ghi danh từ ngày này trở đi.';
$string['enrolenddate'] = 'Ngày kết thúc';
$string['enrolenddate_help'] = 'Nếu được bật, người dùng sẽ chỉ được ghi danh đến ngày này.';
$string['cannotenrol'] = 'Bạn không thể ghi danh vào khóa học này bằng auto enrol.';
$string['privacy:metadata:core_group'] = 'Plugin Autoenrol có thể tạo các nhóm mới hoặc sử dụng các nhóm hiện có để thêm những người tham gia phù hợp với bộ lọc Autoenrol.';
$string['deleteselectedusers'] = 'Xóa ghi danh người dùng đã chọn';
$string['editselectedusers'] = 'Chỉnh sửa ghi danh người dùng đã chọn';
$string['unenrolusers

'] = 'Hủy ghi danh người dùng';
$string['confirmbulkdeleteenrolment'] = 'Bạn có chắc chắn muốn xóa các ghi danh người dùng này không?';
$string['syncenrolmentstask'] = 'Đồng bộ hóa nhiệm vụ Autoenrol';
$string['checksync'] = 'Kiểm tra đồng bộ cho {$a} người dùng';
$string['pluginnotenabled'] = 'Plugin Autoenrol không được bật';
$string['status'] = 'Cho phép ghi danh hiện có';
$string['status_desc'] = 'Bật phương pháp Autoenrol trong các khóa học mới.';
$string['status_help'] = 'Nếu được bật cùng với "Cho phép ghi danh mới" bị tắt, chỉ những người dùng đã được Autoenrolled trước đó mới có thể truy cập khóa học. Nếu bị tắt, phương pháp Autoenrol này sẽ bị vô hiệu hóa hiệu quả, vì tất cả các Autoenrol hiện có đều bị tạm ngưng và người dùng mới không thể Autoenrol.';
$string['newenrols'] = 'Cho phép ghi danh mới';
$string['newenrols_desc'] = 'Cho phép người dùng Autoenrol vào các khóa học mới mặc định.';
$string['newenrols_help'] = 'Cài đặt này xác định xem một người dùng có thể ghi danh vào khóa học này không.';
$string['enrolperiod'] = 'Thời gian ghi danh';
$string['enrolperiod_desc'] = 'Thời gian ghi danh mặc định là bao lâu. Nếu đặt thành không, thời gian ghi danh sẽ không giới hạn mặc định.';
$string['enrolperiod_help'] = 'Thời gian ghi danh hợp lệ, bắt đầu từ lúc người dùng tự ghi danh. Nếu bị tắt, thời gian ghi danh sẽ không giới hạn.';
$string['longtimenosee'] = 'Tự hủy ghi danh sau khi không hoạt động';
$string['longtimenosee_help'] = 'Nếu người dùng không truy cập một khóa học trong một thời gian dài, họ sẽ tự động bị hủy ghi danh. Tham số này xác định giới hạn thời gian đó.';
$string['expiredaction'] = 'Hành động khi hết hạn ghi danh';
$string['expiredaction_help'] = 'Chọn hành động thực hiện khi ghi danh người dùng hết hạn. Lưu ý rằng một số dữ liệu và cài đặt của người dùng sẽ bị xóa khỏi khóa học trong quá trình hủy ghi danh.';
$string['expirymessageenrollersubject'] = 'Thông báo hết hạn ghi danh Autoenrol';
$string['expirymessageenrollerbody'] = 'Ghi danh Autoenrol trong khóa học \'{$a->course}\' sẽ hết hạn trong vòng {$a->threshold} tới đối với những người dùng sau:

{$a->users}

Để gia hạn ghi danh của họ, truy cập {$a->extendurl}';
$string['expirymessageenrolledsubject'] = 'Thông báo hết hạn ghi danh Autoenrol';
$string['expirymessageenrolledbody'] = 'Kính gửi {$a->user},

Đây là thông báo rằng ghi danh của bạn trong khóa học \'{$a->course}\' sẽ hết hạn vào ngày {$a->timeend}.

Nếu bạn cần giúp đỡ, vui lòng liên hệ với {$a->enroller}.';
$string['expirynotifyall'] = 'Giáo viên và người dùng đã ghi danh';
$string['expirynotifyenroller'] = 'Chỉ giáo viên';
$string['maxenrolled'] = 'Số người dùng ghi danh tối đa';
$string['maxenrolled_help'] = 'Chỉ định số lượng người dùng tối đa có thể tự động ghi danh. 0 có nghĩa là không giới hạn.';
$string['loginenrol'] = 'Cho phép ghi danh khi đăng nhập';
$string['loginenrol_desc'] = 'Cho phép ghi danh khi đăng nhập có thể làm chậm hiệu suất trang web của bạn. Thay vào đó, bạn có thể sử dụng nhiệm vụ lên lịch để cập nhật ghi danh cho tất cả các khóa học hoặc lệnh cli cho các khóa học cụ thể.';
$string['messageprovider:expiry_notification'] = 'Thông báo hết hạn ghi danh Autoenrol';
$string['sendexpirynotificationstask'] = 'Nhiệm vụ gửi thông báo hết hạn ghi danh Autoenrol';
$string['syncexpirationstask'] = 'Nhiệm vụ kiểm tra hết hạn ghi danh Autoenrol';
$string['availabilityplugins'] = 'Các plugin khả dụng đã bật';
$string['availabilityplugins_help'] = 'Chọn các plugin khả dụng có thể được sử dụng trong bộ lọc người dùng Autoenrol. Sử dụng Ctrl+click hoặc Cmd+click để chọn nhiều mục.';
