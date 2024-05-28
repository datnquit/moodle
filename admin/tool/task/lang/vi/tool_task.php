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
 * Strings for component 'tool_task', language 'en'
 *
 * @package    tool_task
 * @copyright  2014 Damyon Wiese
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['adhoc'] = 'Ngẫu nhiên';
$string['adhoctaskid'] = 'ID tác vụ ngẫu nhiên: {$a}';
$string['adhoctaskrun'] = 'Đã khởi chạy tác vụ ngẫu nhiên';
$string['adhoctasks'] = 'Các tác vụ ngẫu nhiên';
$string['adhoctasksdue'] = 'Các tác vụ ngẫu nhiên đến hạn';
$string['adhoctasksfailed'] = 'Các tác vụ ngẫu nhiên thất bại';
$string['adhoctasksfuture'] = 'Các tác vụ ngẫu nhiên trong tương lai';
$string['adhoctasksrunning'] = 'Các tác vụ ngẫu nhiên đang chạy';
$string['asap'] = 'Ngay lập tức';
$string['adhocempty'] = 'Hàng đợi tác vụ ngẫu nhiên trống';
$string['adhocqueuesize'] = 'Hàng đợi tác vụ ngẫu nhiên có {$a} tác vụ';
$string['adhocqueueold'] = 'Tác vụ chưa xử lý lâu nhất là {$a->age}, lâu hơn {$a->max}';
$string['backtoadhoctasks'] = 'Quay lại các tác vụ ngẫu nhiên';
$string['backtoscheduledtasks'] = 'Quay lại các tác vụ đã lên lịch';
$string['blocking'] = 'Đang chặn';
$string['cannotfindthepathtothecli'] = 'Không thể tìm thấy đường dẫn đến thực thi PHP CLI nên việc thực thi tác vụ bị hủy. Cài đặt \'Đường dẫn đến PHP CLI\' trong Quản trị hệ thống / Máy chủ / Đường dẫn hệ thống.';
$string['checkadhocqueue'] = 'Hàng đợi tác vụ ngẫu nhiên';
$string['checkcronrunning'] = 'Đang chạy cron';
$string['checkmaxfaildelay'] = 'Thời gian trễ tối đa của tác vụ thất bại';
$string['classname'] = 'Tên lớp';
$string['checklongrunningtasks'] = 'Các tác vụ chạy lâu';
$string['checklongrunningtaskcount'] = 'Các tác vụ chạy lâu: {$a}';
$string['clearfaildelay_confirm'] = 'Bạn có chắc chắn muốn xóa thời gian trễ của tác vụ \'{$a}\' không? Sau khi xóa trễ, tác vụ sẽ chạy theo lịch trình bình thường của nó.';
$string['component'] = 'Thành phần';
$string['corecomponent'] = 'Cốt lõi';
$string['crondisabled'] = 'Cron đã bị vô hiệu hóa. Không có tác vụ mới nào sẽ được bắt đầu. Hệ thống sẽ không hoạt động đúng cho đến khi nó được kích hoạt lại.';
$string['cronok'] = 'Cron đang chạy thường xuyên';
$string['default'] = 'Mặc định';
$string['defaultx'] = 'Mặc định: {$a}';
$string['disabled'] = 'Vô hiệu hóa';
$string['disabled_help'] = 'Các tác vụ đã lên lịch bị vô hiệu hóa không được thực thi từ cron, tuy nhiên chúng vẫn có thể được thực thi thủ công qua công cụ CLI.';
$string['edittaskschedule'] = 'Chỉnh sửa lịch trình tác vụ: {$a}';
$string['enablerunnow'] = 'Cho phép \'Chạy ngay\' cho các tác vụ đã lên lịch';
$string['enablerunnow_desc'] = 'Cho phép quản trị viên chạy một tác vụ đã lên lịch ngay lập tức, thay vì đợi nó chạy theo lịch trình. Tính năng này yêu cầu \'Đường dẫn đến PHP CLI\' (pathtophp) được đặt trong Đường dẫn hệ thống. Tác vụ sẽ chạy trên máy chủ web, vì vậy bạn có thể muốn vô hiệu hóa tính năng này để tránh các vấn đề về hiệu suất.';
$string['faildelay'] = 'Thời gian trễ thất bại';
$string['failed'] = 'Thất bại';
$string['fromcomponent'] = 'Từ thành phần: {$a}';
$string['hostname'] = 'Tên máy chủ';
$string['lastcronstart'] = 'Thời gian từ lần chạy cron cuối cùng: {$a}';
$string['lastruntime'] = 'Lần chạy cuối';
$string['lastupdated'] = 'Cập nhật lần cuối {$a}.';
$string['nextruntime'] = 'Lần chạy tiếp theo';
$string['noclassname'] = 'Tên lớp không được chỉ định';
$string['notasks'] = 'Không có tác vụ nào để chạy';
$string['payload'] = 'Payload';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Plugin bị vô hiệu hóa';
$string['pluginname'] = 'Cấu hình tác vụ đã lên lịch';
$string['resettasktodefaults'] = 'Đặt lại lịch trình tác vụ về mặc định';
$string['resettasktodefaults_help'] = 'Điều này sẽ bỏ qua bất kỳ thay đổi cục bộ nào và khôi phục lịch trình cho tác vụ này về cài đặt ban đầu của nó.';
$string['run_adhoctasks'] = 'Chạy các tác vụ ngẫu nhiên';
$string['runningalltasks'] = 'Đang chạy tất cả các tác vụ';
$string['runningfailedtasks'] = 'Đang chạy các tác vụ thất bại';
$string['runningtasks'] = 'Các tác vụ đang chạy bây giờ';
$string['runnow'] = 'Chạy ngay';
$string['runagain'] = 'Chạy lại';
$string['runadhoc_confirm'] = 'Các tác vụ sẽ chạy trên máy chủ web và có thể mất một thời gian để hoàn thành.';
$string['runadhoc'] = 'Chạy các tác vụ ngẫu nhiên ngay bây giờ?';
$string['runnow_confirm'] = 'Bạn có chắc chắn muốn chạy tác vụ \'{$a}\' ngay bây giờ không? Tác vụ sẽ chạy trên máy chủ web và có thể mất một thời gian để hoàn thành.';
$string['runclassname'] = 'Chạy tất cả';
$string['runclassnamefailedonly'] = 'Chạy tất cả thất bại';
$string['runpattern'] = 'Mẫu chạy';
$string['scheduled'] = 'Đã lên lịch';
$string['scheduledtasks'] = 'Các tác vụ đã lên lịch';
$string['scheduledtaskchangesdisabled'] = 'Việc sửa đổi danh sách các tác vụ đã lên lịch đã bị ngăn chặn trong cấu hình Moodle';
$string['slowtask'] = 'Tác vụ đã chạy lâu hơn {$a}';
$string['showall'] = 'Hiển thị tất cả';
$string['showfailedonly'] = 'Chỉ hiển thị thất bại';
$string['showsummary'] = 'Hiển thị tóm tắt các tác vụ ngẫu nhiên';
$string['started'] = 'Đã bắt đầu';
$string['taskage'] = 'Thời gian chạy';
$string['taskdetails'] = 'Các tác vụ chạy hơn {$a->time} (tối đa {$a->maxtime}): {$a->count}';
$string['taskdisabled'] = 'Tác vụ đã bị vô hiệu hóa';
$string['taskfailures'] = '{$a} tác vụ đang thất bại';
$string['taskid'] = 'ID tác vụ';
$string['tasklogs'] = 'Nhật ký tác vụ';
$string['tasknofailures'] = 'Không có tác vụ nào thất bại';
$string['taskrunningtime'] = 'Tác vụ đã chạy được {$a}';
$string['taskscheduleday'] = 'Ngày';
$string['taskscheduleday_help'] = 'Trường ngày trong lịch trình tác vụ. Trường này sử dụng cùng định dạng như unix cron. Một số ví dụ:

* <strong>*</strong> Mỗi ngày
* <strong>*/2</strong> Mỗi ngày thứ 2
* <strong>1</strong> Ngày đầu tiên của mỗi tháng
* <strong>1,15</strong> Ngày mùng 1 và ngày 15 của mỗi tháng';
$string['taskscheduledayofweek'] = 'Ngày trong tuần';
$string['taskscheduledayofweek_help'] = 'Trường ngày trong tuần trong lịch trình tác vụ. Trường này sử dụng cùng định dạng như unix cron. Một số ví dụ:

* <strong>*</strong> Mỗi ngày
* <strong>0</strong> Mỗi Chủ Nhật
* <strong>6</strong> Mỗi Thứ Bảy
* <strong>1,5</strong> Mỗi Thứ Hai và Thứ Sáu';
$string['taskschedulehour'] = 'Giờ';
$string['taskschedulehour_help'] = 'Trường giờ trong lịch trình tác vụ. Trường này sử dụng cùng định dạng như unix cron. Một số ví dụ:

* <strong>*</strong> Mỗi giờ
* <strong>*/2</strong> Mỗi 2 giờ
* <strong>2-10</strong> Mỗi giờ từ 2 giờ sáng đến 10 giờ sáng (bao gồm)
* <strong>2,6,9</strong> 2 giờ sáng, 6 giờ sáng và 9 giờ sáng';
$string['taskscheduleminute'] = 'Phút';
$string['taskscheduleminute_help'] = 'Trường phút trong lịch trình tác vụ. Trường này sử dụng cùng định dạng như unix cron. Một số ví dụ:

* <strong>*</strong> Mỗi phút
* <strong>*/5</strong> Mỗi 5 phút
* <strong>2-10</strong> Mỗi phút từ phút thứ 2 đến phút thứ 10 (bao gồm)
* <strong>2,6,9</strong> Phút thứ 2, thứ 6 và thứ 9';
$string['taskschedulemonth'] = 'Tháng';
$string['taskschedulemonth_help'] = 'Trường tháng trong lịch trình tác vụ. Trường này sử dụng cùng định dạng như unix cron. Một số ví dụ:

* <strong>*</strong> Mỗi tháng
* <strong>*/2</strong> Mỗi tháng thứ 2
* <strong>1</strong> Mỗi tháng Giêng
* <strong>1,5</strong> Mỗi tháng Giêng và tháng Năm';
$string['privacy:metadata'] = 'Plugin Cấu hình tác vụ đã lên lịch không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['viewlogs'] = 'Xem nhật ký cho {$a}';
