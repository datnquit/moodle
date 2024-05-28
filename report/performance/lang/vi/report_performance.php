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
 * Lang strings
 *
 * @package   report_performance
 * @copyright 2013 Rajesh Taneja
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['check_backup'] = 'Sao lưu tự động';
$string['check_backup_comment_disable'] = 'Hiệu suất có thể bị ảnh hưởng trong quá trình sao lưu. Nếu được kích hoạt, sao lưu nên được lên lịch cho thời gian ngoài giờ cao điểm.';
$string['check_backup_comment_enable'] = 'Hiệu suất có thể bị ảnh hưởng trong quá trình sao lưu. Sao lưu nên được lên lịch cho thời gian ngoài giờ cao điểm.';
$string['check_backup_details'] = 'Kích hoạt sao lưu tự động sẽ tự động tạo các bản sao lưu của tất cả các khóa học trên máy chủ vào thời gian bạn đã chỉ định.<p>Trong quá trình này, nó sẽ tiêu thụ nhiều tài nguyên máy chủ hơn và có thể ảnh hưởng đến hiệu suất.</p>';
$string['check_cachejs_comment_disable'] = 'Nếu được kích hoạt, hiệu suất tải trang sẽ được cải thiện.';
$string['check_cachejs_comment_enable'] = 'Nếu tắt, trang có thể tải chậm.';
$string['check_cachejs_details'] = 'Việc lưu trữ và nén Javascript cực kỳ cải thiện hiệu suất tải trang. Đây là điều được khuyến nghị mạnh mẽ cho các trang web hoạt động.';
$string['check_dbschema_name'] = 'Kiểm tra cấu trúc cơ sở dữ liệu';
$string['check_dbschema_ok'] = 'Cấu trúc cơ sở dữ liệu chính xác.';
$string['check_dbschema_errors'] = 'Cấu trúc cơ sở dữ liệu không phù hợp.';
$string['check_debugmsg_comment_nodeveloper'] = 'Nếu đặt ở CHUYÊN GIA, hiệu suất có thể bị ảnh hưởng nhẹ.';
$string['check_debugmsg_comment_developer'] = 'Nếu đặt ở mức khác CHUYÊN GIA, hiệu suất có thể được cải thiện nhẹ.';
$string['check_debugmsg_details'] = 'Hiếm khi có lợi ích gì khi chuyển sang mức ĐỔI TRA, trừ khi được yêu cầu bởi một nhà phát triển.<p>Sau khi bạn đã nhận được thông báo lỗi và sao chép và dán nó nơi đó nào đó, ĐƯỢC KHUYẾN NGHỊ CAO để chuyển ĐỔI TRA trở lại KHÔNG. Thông báo lỗi có thể cung cấp gợi ý cho một hacker về cài đặt của trang web của bạn và có thể ảnh hưởng đến hiệu suất.</p>';
$string['check_enablestats_comment_disable'] = 'Hiệu suất có thể bị ảnh hưởng bởi việc xử lý thống kê. Nếu được kích hoạt, cài đặt thống kê nên được thiết lập cẩn thận.';
$string['check_enablestats_comment_enable'] = 'Hiệu suất có thể bị ảnh hưởng bởi việc xử lý thống kê. Cài đặt thống kê nên được thiết lập cẩn thận.';
$string['check_enablestats_details'] = 'Kích hoạt tính năng này sẽ xử lý các nhật ký trong công việc lập lịch và thu thập một số thống kê. Tùy thuộc vào lưu lượng truy cập trên trang web của bạn, điều này có thể mất một thời gian.<p>Trong quá trình này, nó sẽ tiêu thụ nhiều tài nguyên máy chủ hơn

 và có thể ảnh hưởng đến hiệu suất.</p>';
$string['check_themedesignermode_comment_enable'] = 'Nếu tắt, hình ảnh và các tập tin stylesheet sẽ được lưu vào bộ nhớ cache, dẫn đến cải thiện đáng kể về hiệu suất.';
$string['check_themedesignermode_comment_disable'] = 'Nếu kích hoạt, hình ảnh và các tập tin stylesheet sẽ không được lưu vào bộ nhớ cache, dẫn đến sự suy giảm đáng kể về hiệu suất.';
$string['check_themedesignermode_details'] = 'Đây thường là nguyên nhân gây ra các trang Moodle chạy chậm. <p>Trung bình có thể mất ít nhất gấp đôi lượng CPU để chạy một trang Moodle với chế độ thiết kế theme được kích hoạt.</p>';
$string['comments'] = 'Bình luận';
$string['edit'] = 'Chỉnh sửa';
$string['enabled'] = 'Đã kích hoạt';
$string['disabled'] = 'Đã tắt';
$string['issue'] = 'Vấn đề';
$string['morehelp'] = 'trợ giúp thêm';
$string['performance:view'] = 'Xem báo cáo hiệu suất';
$string['performancereportdesc'] = 'Báo cáo này liệt kê các vấn đề có thể ảnh hưởng đến hiệu suất của trang {$a}';
$string['pluginname'] = 'Tổng quan hiệu suất';
$string['value'] = 'Giá trị';
$string['privacy:metadata'] = 'Trình cắm Tổng quan hiệu suất không lưu trữ bất kỳ dữ liệu cá nhân nào.';
