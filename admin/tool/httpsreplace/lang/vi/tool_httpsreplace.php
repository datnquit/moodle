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
 * Strings for component 'tool_httpsreplace'
 *
 * @package    tool_httpsreplace
 * @copyright Copyright (c) 2016 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['complete'] = 'Hoàn thành';
$string['count'] = 'Số lượng mục nội dung được nhúng';
$string['disclaimer'] = 'Tôi hiểu các rủi ro của thao tác này';
$string['doclink'] = 'Công cụ chuyển đổi HTTPS';
$string['doit'] = 'Thực hiện chuyển đổi';
$string['domain'] = 'Tên miền có vấn đề';
$string['domainexplain'] = 'Khi một trang web được chuyển từ HTTP sang HTTPS, tất cả nội dung HTTP nhúng sẽ ngừng hoạt động. Công cụ này cho phép bạn tự động chuyển đổi nội dung HTTP sang HTTPS.

Trước khi thực hiện chuyển đổi, nội dung sẽ được quét để tìm bất kỳ URL nào có thể không hoạt động sau khi chuyển đổi. Bạn có thể muốn kiểm tra từng URL để đảm bảo có HTTPS hoặc tìm các tài nguyên thay thế.';
$string['domainexplainhelp'] = 'Các tên miền này được tìm thấy trong nội dung của bạn, nhưng không hỗ trợ nội dung HTTPS. Sau khi chuyển sang HTTPS, nội dung được bao gồm từ các trang web này sẽ không còn hiển thị trong Moodle cho người dùng với các trình duyệt hiện đại bảo mật. Có thể các trang web này tạm thời hoặc vĩnh viễn không khả dụng và sẽ không hoạt động với bất kỳ cài đặt bảo mật nào. Chỉ tiếp tục sau khi xem xét các kết quả này và xác định nếu nội dung lưu trữ bên ngoài này không cần thiết. Lưu ý: Nội dung này sẽ không hoạt động sau khi chuyển sang HTTPS dù sao.';
$string['httpwarning'] = 'Phiên bản này vẫn đang chạy trên HTTP. Bạn vẫn có thể chạy công cụ này và nội dung bên ngoài sẽ được thay đổi thành HTTPS, nhưng nội dung bên trong sẽ vẫn trên HTTP. Bạn sẽ cần chạy lại script này sau khi chuyển sang HTTPS để chuyển đổi nội dung bên trong.';
$string['notimplemented'] = 'Xin lỗi, tính năng này không được triển khai trong trình điều khiển cơ sở dữ liệu của bạn.';
$string['oktoprocede'] = 'Quét không tìm thấy vấn đề nào với nội dung của bạn. Bạn có thể tiến hành nâng cấp bất kỳ nội dung HTTP nào để sử dụng HTTPS.';
$string['pageheader'] = 'Nâng cấp các URL nội dung được lưu trữ bên ngoài lên HTTPS';
$string['pluginname'] = 'Công cụ chuyển đổi HTTPS';
$string['replacing'] = 'Đang thay thế nội dung HTTP bằng HTTPS...';
$string['searching'] = 'Đang tìm kiếm {$a}';
$string['takeabackupwarning'] = 'Cảnh báo: Sau khi chạy công cụ này, các thay đổi không thể hoàn nguyên. Đề nghị tạo bản sao lưu trang web trước khi tiếp tục, vì có một rủi ro nhỏ về việc thay thế nội dung sai.';
$string['toolintro'] = 'Nếu bạn đang có kế hoạch chuyển trang web của mình sang HTTPS, bạn có thể sử dụng <a href="{$a}">Công cụ chuyển đổi HTTPS</a> để chuyển đổi nội dung nhúng sang HTTPS.';
$string['privacy:metadata'] = 'Plugin công cụ chuyển đổi HTTPS không lưu trữ bất kỳ dữ liệu cá nhân nào.';
