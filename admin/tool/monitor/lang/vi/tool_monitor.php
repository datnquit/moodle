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
 * Lang strings.
 *
 * This files lists lang strings related to tool_monitor.
 *
 * @package    tool_monitor
 * @copyright  2014 onwards Ankit Agarwal <ankit.agrr@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['addrule'] = 'Thêm quy tắc mới';
$string['allevents'] = 'Tất cả sự kiện';
$string['allmodules'] = 'Tất cả các phiên bản';
$string['area'] = 'Khu vực';
$string['areatomonitor'] = 'Khu vực cần giám sát';
$string['cachedef_eventsubscriptions'] = 'Lưu trữ danh sách đăng ký sự kiện cho các khóa học cá nhân';
$string['contactadmin'] = 'Liên hệ với quản trị viên để kích hoạt.';
$string['core'] = 'Lõi';
$string['coresubsystem'] = 'Hệ thống con ({$a})';
$string['currentsubscriptions'] = 'Các đăng ký hiện tại của bạn';
$string['defaultmessagetemplate'] = 'Tên quy tắc: {rulename}<br />Mô tả: {description}<br />Tên sự kiện: {eventname}';
$string['deleterule'] = 'Xóa quy tắc';
$string['deletesubscription'] = 'Xóa đăng ký';
$string['description'] = 'Mô tả:';
$string['disablefieldswarning'] = 'Một số trường không thể chỉnh sửa vì quy tắc này đã có đăng ký.';
$string['duplicaterule'] = 'Nhân bản quy tắc';
$string['editrule'] = 'Chỉnh sửa quy tắc';
$string['enablehelp'] = 'Bật/tắt giám sát sự kiện';
$string['enablehelp_help'] = 'Giám sát sự kiện phải được bật trước khi bạn có thể tạo và đăng ký quy tắc. Lưu ý rằng bật giám sát sự kiện có thể ảnh hưởng đến hiệu suất của trang web.';
$string['event'] = 'Sự kiện';
$string['eventnotfound'] = 'Không tìm thấy sự kiện';
$string['eventrulecreated'] = 'Quy tắc đã được tạo';
$string['eventruledeleted'] = 'Quy tắc đã bị xóa';
$string['eventruleupdated'] = 'Quy tắc đã được cập nhật';
$string['eventsubcreated'] = 'Đăng ký đã được tạo';
$string['eventsubcriteriamet'] = 'Đã đáp ứng tiêu chí đăng ký';
$string['eventsubdeleted'] = 'Đăng ký đã bị xóa';
$string['errorincorrectevent'] = 'Vui lòng chọn sự kiện liên quan đến plugin đã chọn';
$string['freqdesc'] = '{$a->freq} lần trong {$a->mins} phút';
$string['frequency'] = 'Ngưỡng thông báo';
$string['frequency_help'] = 'Số lượng sự kiện trong một khoảng thời gian nhất định cần thiết để gửi thông báo.';
$string['inminutes'] = 'trong vài phút';
$string['invalidmodule'] = 'Module không hợp lệ';
$string['manageruleslink'] = 'Bạn có thể quản lý quy tắc từ trang {$a}.';
$string['managesubscriptionslink'] = 'Bạn có thể đăng ký quy tắc từ trang {$a}.';
$string['manage'] = 'Quản lý';
$string['managesubscriptions'] = 'Giám sát sự kiện';
$string['managerules'] = 'Quy tắc giám sát sự kiện';
$string['messageprovider:notification'] = 'Thông báo đăng ký quy tắc';
$string['messagetemplate'] = 'Thông báo tin nhắn';
$string['messagetemplate_help'] = 'Một tin nhắn thông báo được gửi tới người đăng ký sau khi đạt ngưỡng thông báo. Nó có thể bao gồm bất kỳ hoặc tất cả các chỗ trống sau:

* Liên kết đến vị trí của sự kiện {link}
* Liên kết đến khu vực được giám sát {modulelink}
* Tên của module khóa học {modulename}
* Tên quy tắc {rulename}
* Mô tả {description}
* Sự kiện {eventname}
* Tên đầy đủ của khóa học {coursefullname}
* Tên ngắn của khóa học {courseshortname}';
$string['messagetemplate_link'] = 'admin/tool/monitor/managerules';
$string['moduleinstance'] = 'Phiên bản';
$string['monitorenabled'] = 'Giám sát sự kiện hiện đang được bật.';
$string['monitordisabled'] = 'Giám sát sự kiện hiện đang tắt.';
$string['monitor:managerules'] = 'Quản lý quy tắc giám sát sự kiện';
$string['monitor:managetool'] = 'Bật/tắt giám sát sự kiện';
$string['monitor:subscribe'] = 'Đăng ký quy tắc giám sát sự kiện';
$string['norules'] = 'Không có quy tắc giám sát sự kiện.';
$string['pluginname'] = 'Giám sát sự kiện';
$string['privacy:createdrules'] = 'Các quy tắc giám sát sự kiện tôi đã tạo';
$string['privacy:metadata:description'] = 'Mô tả của quy tắc';
$string['privacy:metadata:eventname'] = 'Tên đầy đủ của sự kiện';
$string['privacy:metadata:frequency'] = 'Tần suất thông báo';
$string['privacy:metadata:historysummary'] = 'Lưu trữ lịch sử của các thông báo tin nhắn đã gửi';
$string['privacy:metadata:inactivedate'] = 'Khoảng thời gian, tính bằng ngày, sau đó một đăng ký không hoạt động sẽ bị xóa hoàn toàn';
$string['privacy:metadata:lastnotificationsent'] = 'Khi thông báo cuối cùng được gửi cho đăng ký này.';
$string['privacy:metadata:messagesummary'] = 'Thông báo được gửi đến hệ thống tin nhắn.';
$string['privacy:metadata:name'] = 'Tên của quy tắc';
$string['privacy:metadata:plugin'] = 'Tên kiểu Frankenstein của plugin';
$string['privacy:metadata:rulessummary'] = 'Lưu trữ quy tắc giám sát.';
$string['privacy:metadata:subscriptionssummary'] = 'Lưu trữ đăng ký của người dùng vào các quy tắc khác nhau';
$string['privacy:metadata:template'] = 'Mẫu tin nhắn';
$string['privacy:metadata:timecreatedrule'] = 'Khi quy tắc này được tạo';
$string['privacy:metadata:timecreatedsub'] = 'Khi đăng ký này được tạo';
$string['privacy:metadata:timemodifiedrule'] = 'Khi quy tắc này được sửa đổi lần cuối';
$string['privacy:metadata:timesent'] = 'Khi tin nhắn được gửi';
$string['privacy:metadata:timewindow'] = 'Khoảng thời gian tính bằng giây';
$string['privacy:metadata:userid'] = 'ID của người dùng đã tạo quy tắc.';
$string['privacy:metadata:useridhistory'] = 'ID của người dùng đã được gửi thông báo này';
$string['privacy:metadata:useridsub'] = 'ID của người đăng ký.';
$string['privacy:subscriptions'] = 'Các đăng ký giám sát sự kiện của tôi';
$string['processevents'] = 'Xử lý sự kiện';
$string['rulename'] = 'Tên quy tắc';
$string['ruleareyousure'] = 'Bạn có chắc chắn muốn xóa quy tắc "{$a}"?';
$string['ruleareyousureextra'] = 'Có {$a} đăng ký cho quy tắc này cũng sẽ bị xóa.';
$string['rulecopysuccess'] = 'Quy tắc đã được nhân bản thành công';
$string['ruledeletesuccess'] = 'Quy tắc đã được xóa thành công';
$string['rulehelp'] = 'Chi tiết quy tắc';
$string['rulehelp_help'] = 'Quy tắc này lắng nghe khi sự kiện \'{$a->eventname}\' trong \'{$a->eventcomponent}\' đã được kích hoạt {$a->frequency} lần trong {$a->minutes} phút.';
$string['rulenopermission'] = 'Bạn không có quyền đăng ký bất kỳ sự kiện nào.';
$string['rulenopermissions'] = 'Bạn không có quyền "{$a} một quy tắc"';
$string['rulescansubscribe'] = 'Quy tắc bạn có thể đăng ký';
$string['selectacourse'] = 'Chọn một khóa học';
$string['selectcourse'] = 'Truy cập báo cáo này ở cấp độ khóa học để có danh sách các module có thể';
$string['subareyousure'] = 'Bạn có chắc chắn muốn xóa đăng ký cho quy tắc "{$a}"?';
$string['subcreatesuccess'] = 'Đăng ký đã được tạo thành công';
$string['subdeletesuccess'] = 'Đăng ký đã bị xóa thành công';
$string['subhelp'] = 'Chi tiết đăng ký';
$string['subhelp_help'] = 'Đăng ký này lắng nghe khi sự kiện \'{$a->eventname}\' đã được kích hoạt trong \'{$a->moduleinstance}\' {$a->frequency} lần trong {$a->minutes} phút.';
$string['subscribeto'] = 'Đăng ký quy tắc "{$a}"';
$string['taskcleanevents'] = 'Dọn dẹp sự kiện giám sát sự kiện';
$string['taskchecksubscriptions'] = 'Kích hoạt/vô hiệu hóa đăng ký quy tắc không hợp lệ';
$string['unsubscribe'] = 'Hủy đăng ký';
