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
 * Strings for the Workshop's scheduled allocator
 *
 * @package     workshopallocation_scheduled
 * @subpackage  mod_workshop
 * @copyright   2012 David Mudrak <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['crontask'] = 'Xử lý nền cho phân bổ theo lịch trình';
$string['currentstatus'] = 'Trạng thái hiện tại';
$string['currentstatusexecution'] = 'Trạng thái';
$string['currentstatusexecution1'] = 'Đã thực hiện vào {$a->datetime}';
$string['currentstatusexecution2'] = 'Sẽ được thực hiện lại vào {$a->datetime}';
$string['currentstatusexecution3'] = 'Sẽ được thực hiện vào {$a->datetime}';
$string['currentstatusexecution4'] = 'Đang chờ thực hiện';
$string['currentstatusreset'] = 'Đặt lại';
$string['currentstatusresetinfo'] = 'Đánh dấu vào ô và lưu biểu mẫu để đặt lại kết quả thực hiện';
$string['currentstatusreset_help'] = 'Lưu biểu mẫu với ô này được đánh dấu sẽ dẫn đến việc đặt lại trạng thái hiện tại. Tất cả thông tin về lần thực hiện trước đó sẽ bị xoá để có thể thực hiện lại phân bổ (nếu được bật ở trên).';
$string['currentstatusresult'] = 'Kết quả thực hiện gần đây';
$string['currentstatusnext'] = 'Lần thực hiện tiếp theo';
$string['currentstatusnext_help'] = 'Trong một số trường hợp, phân bổ được lên lịch để tự động thực hiện lại ngay cả khi đã được thực hiện. Điều này có thể xảy ra nếu hạn chót nộp bài đã được kéo dài, chẳng hạn.';
$string['enablescheduled'] = 'Bật phân bổ theo lịch trình';
$string['enablescheduledinfo'] = 'Tự động phân bổ bài nộp vào cuối giai đoạn nộp bài';
$string['scheduledallocationsettings'] = 'Cài đặt phân bổ theo lịch trình';
$string['scheduledallocationsettings_help'] = 'Nếu được bật, phương pháp phân bổ theo lịch trình sẽ tự động phân bổ bài nộp cho bài đánh giá vào cuối giai đoạn nộp bài. Thời hạn của giai đoạn có thể được định nghĩa trong cài đặt hội thảo \'Hạn chót nộp bài\'.

Bên trong, phương pháp phân bổ ngẫu nhiên được thực hiện với các tham số được định sẵn trong biểu mẫu này. Điều đó có nghĩa là phân bổ theo lịch trình hoạt động như thể giáo viên thực hiện phân bổ ngẫu nhiên vào cuối giai đoạn nộp bài bằng cách sử dụng các cài đặt phân bổ bên dưới.

Lưu ý rằng phân bổ theo lịch trình *không* được thực hiện nếu bạn thủ công chuyển hội thảo sang giai đoạn đánh giá trước hạn chót nộp bài. Bạn phải tự phân bổ bài nộp trong trường hợp đó. Phương pháp phân bổ theo lịch trình đặc biệt hữu ích khi được sử dụng cùng với tính năng tự động chuyển giai đoạn.';
$string['pluginname'] = 'Phân bổ theo lịch trình';
$string['privacy:metadata'] = 'Plugin Phân bổ theo lịch trình không lưu trữ bất kỳ dữ liệu cá nhân nào. Dữ liệu cá nhân thực tế về việc ai sẽ đánh giá ai được lưu trữ bởi chính mô-đun Hội thảo và là cơ sở để xuất chi tiết các đánh giá.';
$string['randomallocationsettings'] = 'Cài đặt phân bổ';
$string['randomallocationsettings_help'] = 'Các tham số cho phương pháp phân bổ ngẫu nhiên được định nghĩa ở đây. Chúng sẽ được sử dụng bởi plugin phân bổ ngẫu nhiên để phân bổ thực tế các bài nộp.';
$string['resultdisabled'] = 'Phân bổ theo lịch trình đã bị tắt';
$string['resultenabled'] = 'Phân bổ theo lịch trình đã được bật';
$string['resultexecuted'] = 'Thành công';
$string['resultfailed'] = 'Không thể tự động phân bổ bài nộp';
$string['resultfailedconfig'] = 'Cấu hình phân bổ theo lịch trình sai';
$string['resultfaileddeadline'] = 'Hội thảo không có hạn chót nộp bài được xác định';
$string['resultfailedphase'] = 'Hội thảo không ở trong giai đoạn nộp bài';
$string['resultvoid'] = 'Không có bài nộp nào được phân bổ';
$string['resultvoiddeadline'] = 'Chưa đến sau hạn chót nộp bài';
$string['resultvoidexecuted'] = 'Phân bổ đã được thực hiện rồi';
$string['setup'] = 'Thiết lập phân bổ theo lịch trình';
