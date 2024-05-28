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
 * Strings for component 'antivirus_clamav', language 'en'.
 *
 * @package    antivirus_clamav
 * @copyright  2015 Ruslan Kabalin, Lancaster University.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['antivirusfailed'] = 'Đang có sự cố với việc quét AntiVirus vào lúc này. Tệp của bạn {$a->item} chưa được tải lên. Vui lòng thử lại sau.';
$string['configclamactlikevirus'] = 'Xử lý tệp như virus';
$string['configclamdonothing'] = 'Xử lý tệp như bình thường';
$string['configclamfailureonupload'] = 'Nếu chọn \'Xử lý tệp như bình thường\', các tệp sẽ được di chuyển đến thư mục đích. Nếu chọn \'Từ chối tải lên, thử lại\', người dùng sẽ được yêu cầu thử lại sau. Nếu chọn \'Xử lý tệp như virus\', các tệp sẽ được di chuyển vào khu vực cách ly, hoặc bị xóa. Cảnh báo: Với tùy chọn này, nếu vì lý do nào đó clam không chạy được (thường là do đường dẫn không hợp lệ đến clam), thì TẤT CẢ các tệp đã tải lên sẽ bị di chuyển vào khu vực cách ly được chỉ định, hoặc bị xóa.';
$string['configclamtryagain'] = 'Từ chối tải lên, thử lại';
$string['clamfailed'] = 'ClamAV không chạy được. Thông báo lỗi trả về là "{$a}". Đây là kết quả từ ClamAV:';
$string['clamfailureonupload'] = 'Khi ClamAV gặp sự cố';
$string['errorcantopensocket'] = 'Kết nối đến Unix domain socket gặp lỗi {$a}';
$string['errorclamavnoresponse'] = 'ClamAV không phản hồi; kiểm tra trạng thái chạy của daemon.';
$string['errornounixsocketssupported'] = 'Hệ thống này không hỗ trợ Unix domain socket. Vui lòng sử dụng tùy chọn dòng lệnh thay thế.';
$string['invalidpathtoclam'] = 'Đường dẫn đến ClamAV, {$a}, không hợp lệ.';
$string['pathtoclam'] = 'Dòng lệnh';
$string['pathtoclamdesc'] = 'Nếu phương thức chạy được đặt thành "dòng lệnh", nhập đường dẫn đến ClamAV tại đây. Trên Linux, điều này sẽ là /usr/bin/clamscan hoặc /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Unix domain socket';
$string['pathtounixsocketdesc'] = 'Nếu phương thức chạy được đặt thành "Unix domain socket", nhập đường dẫn đến Unix socket của ClamAV tại đây. Trên Debian Linux, điều này sẽ là /var/run/clamav/clamd.ctl. Vui lòng đảm bảo rằng daemon clamav có quyền đọc các tệp đã tải lên, cách đơn giản nhất để đảm bảo điều này là thêm người dùng \'clamav\' vào nhóm máy chủ web của bạn (\'www-data\' trên Debian Linux).';
$string['pluginname'] = 'ClamAV antivirus';
$string['privacy:metadata'] = 'Plugin antivirus ClamAV không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['quarantinedir'] = 'Thư mục cách ly';
$string['runningmethod'] = 'Phương thức chạy';
$string['runningmethoddesc'] = 'Phương thức chạy ClamAV. Mặc định sử dụng dòng lệnh, tuy nhiên trên các hệ thống Unix có thể đạt hiệu suất tốt hơn bằng cách sử dụng socket hệ thống.';
$string['runningmethodcommandline'] = 'Dòng lệnh';
$string['runningmethodunixsocket'] = 'Unix domain socket';
$string['runningmethodtcpsocket'] = 'TCP socket';
$string['tcpsockethost'] = 'Tên máy chủ TCP socket';
$string['tcpsockethostdesc'] = 'Tên miền của máy chủ ClamAV';
$string['tcpsocketport'] = 'Cổng TCP socket';
$string['tcpsocketportdesc'] = 'Cổng để sử dụng khi kết nối với ClamAV';
$string['unknownerror'] = 'Có một lỗi không xác định với ClamAV.';
$string['tries'] = 'Số lần quét';
$string['tries_desc'] = 'Số lần ClamAV cố gắng nếu có lỗi xảy ra trong quá trình quét.';
$string['tries_notice'] = 'Clamav đã thử quét {$a->tries} lần.
{$a->notice}';
