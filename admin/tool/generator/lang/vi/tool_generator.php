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
 * Language strings.
 *
 * @package tool_generator
 * @copyright 2013 The Open University
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['bigfile'] = 'Tập tin lớn {$a}';
$string['courseexplanation'] = 'Công cụ này tạo ra các khóa học kiểm tra tiêu chuẩn bao gồm nhiều
phần, hoạt động và tập tin.

Điều này nhằm cung cấp một thước đo tiêu chuẩn để kiểm tra độ tin cậy
và hiệu suất của các thành phần hệ thống khác nhau (chẳng hạn như sao lưu và khôi phục).

Kiểm tra này quan trọng vì đã có nhiều trường hợp trước đây mà,
đối mặt với các trường hợp sử dụng thực tế (ví dụ: một khóa học có 1,000 hoạt động), hệ thống
không hoạt động.

Các khóa học được tạo bằng tính năng này có thể chiếm một lượng lớn không gian cơ sở dữ liệu và
hệ thống tập tin (hàng chục gigabyte). Bạn sẽ cần xóa các khóa học
(và chờ đợi các lần dọn dẹp khác nhau) để giải phóng không gian này một lần nữa.

**Không sử dụng tính năng này trên hệ thống đang hoạt động**. Chỉ sử dụng trên máy chủ phát triển.
(Để tránh sử dụng ngẫu nhiên, tính năng này bị vô hiệu hóa trừ khi bạn đã chọn
mức gỡ lỗi DEVELOPER.)';

$string['coursesize_0'] = 'XS (~10KB; tạo trong ~1 giây)';
$string['coursesize_1'] = 'S (~10MB; tạo trong ~30 giây)';
$string['coursesize_2'] = 'M (~100MB; tạo trong ~2 phút)';
$string['coursesize_3'] = 'L (~1GB; tạo trong ~30 phút)';
$string['coursesize_4'] = 'XL (~10GB; tạo trong ~2 giờ)';
$string['coursesize_5'] = 'XXL (~20GB; tạo trong ~4 giờ)';
$string['additionalmodules'] = 'Các hoạt động bổ sung';
$string['additionalmodules_help'] = 'Chọn thêm các hoạt động triển khai hàm course_backend_generator_create_activity để bao gồm trong khóa học kiểm tra.';
$string['coursewithoutusers'] = 'Khóa học được chọn không có người dùng';
$string['createcourse'] = 'Tạo khóa học';
$string['createtestplan'] = 'Tạo kế hoạch kiểm tra';
$string['creating'] = 'Đang tạo khóa học';
$string['done'] = 'hoàn thành ({$a}s)';
$string['downloadtestplan'] = 'Tải xuống kế hoạch kiểm tra';
$string['downloadusersfile'] = 'Tải xuống tập tin người dùng';
$string['error_nocourses'] = 'Không có khóa học nào để tạo kế hoạch kiểm tra';
$string['error_noforumdiscussions'] = 'Khóa học được chọn không có thảo luận diễn đàn';
$string['error_noforuminstances'] = 'Khóa học được chọn không có phiên bản mô-đun diễn đàn';
$string['error_noforumreplies'] = 'Khóa học được chọn không có trả lời diễn đàn';
$string['error_nonexistingcourse'] = 'Khóa học được chỉ định không tồn tại';
$string['error_nopageinstances'] = 'Khóa học được chọn không có phiên bản mô-đun trang';
$string['error_notdebugging'] = 'Không khả dụng trên máy chủ này vì gỡ lỗi không được đặt ở mức DEVELOPER';
$string['error_nouserspassword'] = 'Bạn cần đặt $CFG->tool_generator_users_password trong config.php để tạo kế hoạch kiểm tra';
$string['fullname'] = 'Khóa học kiểm tra: {$a->size}';
$string['maketestcourse'] = 'Tạo khóa học kiểm tra';
$string['maketestplan'] = 'Tạo kế hoạch kiểm tra JMeter';
$string['notenoughusers'] = 'Khóa học được chọn không có đủ người dùng';
$string['pluginname'] = 'Trình tạo dữ liệu phát triển';
$string['progress_checkaccounts'] = 'Kiểm tra tài khoản người dùng ({$a})';
$string['progress_coursecompleted'] = 'Khóa học đã hoàn thành ({$a}s)';
$string['progress_createaccounts'] = 'Tạo tài khoản người dùng ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'Tạo bài tập ({$a})';
$string['progress_createbigfiles'] = 'Tạo tập tin lớn ({$a})';
$string['progress_createcourse'] = 'Đang tạo khóa học {$a}';
$string['progress_createforum'] = 'Tạo diễn đàn ({$a} bài viết)';
$string['progress_createpages'] = 'Tạo trang ({$a})';
$string['progress_createsmallfiles'] = 'Tạo tập tin nhỏ ({$a})';
$string['progress_enrol'] = 'Đăng ký người dùng vào khóa học ({$a})';
$string['progress_sitecompleted'] = 'Trang đã hoàn thành ({$a}s)';
$string['shortsize_0'] = 'XS';
$string['shortsize_1'] = 'S';
$string['shortsize_2'] = 'M';
$string['shortsize_3'] = 'L';
$string['shortsize_4'] = 'XL';
$string['shortsize_5'] = 'XXL';
$string['sitesize_0'] = 'XS (~10MB; 3 khóa học, tạo trong ~30 giây)';
$string['sitesize_1'] = 'S (~50MB; 8 khóa học, tạo trong ~2 phút)';
$string['sitesize_2'] = 'M (~200MB; 73 khóa học, tạo trong ~10 phút)';
$string['sitesize_3'] = 'L (~1\'5GB; 277 khóa học, tạo trong ~1\'5 giờ)';
$string['sitesize_4'] = 'XL (~10GB; 1065 khóa học, tạo trong ~5 giờ)';
$string['sitesize_5'] = 'XXL (~20GB; 4177 khóa học, tạo trong ~10 giờ)';
$string['size'] = 'Kích thước khóa học';
$string['smallfiles'] = 'Tập tin nhỏ';
$string['targetcourse'] = 'Khóa học mục tiêu kiểm tra';
$string['testplanexplanation'] = 'Công cụ này tạo ra tập tin kế hoạch kiểm tra JMeter cùng với tập tin thông tin tài khoản người dùng.

Kế hoạch kiểm tra này được thiết kế để hoạt động cùng với {$a}, giúp dễ dàng hơn để chạy kế hoạch kiểm tra trong môi trường Moodle cụ thể, thu thập thông tin về các lần chạy và so sánh kết quả, vì vậy bạn sẽ cần tải xuống và sử dụng script test_runner.sh hoặc làm theo hướng dẫn cài đặt và sử dụng.

Bạn cần đặt mật khẩu cho người dùng khóa học trong config.php (ví dụ: $CFG->tool_generator_users_password = \'moodle\';). Không có giá trị mặc định cho mật khẩu này để ngăn chặn việc sử dụng không mong muốn của công cụ. Bạn cần sử dụng tùy chọn cập nhật mật khẩu nếu người dùng khóa học của bạn có mật khẩu khác hoặc họ được tạo bởi tool_generator nhưng không thiết lập giá trị $CFG->tool_generator_users_password.

Nó là một phần của tool_generator nên hoạt động tốt với các khóa học được tạo bởi trình tạo khóa học và trang, nó cũng có thể được sử dụng với bất kỳ khóa học nào chứa ít nhất:

* Đủ số người dùng đã đăng ký (phụ thuộc vào kích thước kế hoạch kiểm tra bạn chọn) với mật khẩu được đặt lại là \'moodle\'
* Một phiên bản mô-đun trang
* Một phiên bản mô-đun diễn đàn với ít nhất một thảo luận và một trả lời

Bạn có thể muốn xem xét khả năng của máy chủ khi chạy các kế hoạch kiểm tra lớn vì lượng tải tạo ra bởi JMeter có thể đặc biệt lớn. Thời gian tăng tốc đã được điều chỉnh theo số lượng luồng (người dùng) để giảm các vấn đề này nhưng tải vẫn rất lớn.

**Không chạy kế hoạch kiểm tra trên hệ thống đang hoạt động**. Tính năng này chỉ tạo ra các tập tin để cung cấp cho JMeter nên không nguy hiểm tự nó, nhưng bạn **KHÔNG BAO GIỜ** nên chạy kế hoạch kiểm tra này trên trang sản xuất.

';
$string['testplansize_0'] = 'XS ({$a->users} người dùng, {$a->loops} vòng lặp và {$a->rampup} thời gian tăng tốc)';
$string['testplansize_1'] = 'S ({$a->users} người dùng, {$a->loops} vòng lặp và {$a->rampup} thời gian tăng tốc)';
$string['testplansize_2'] = 'M ({$a->users} người dùng, {$a->loops} vòng lặp và {$a->rampup} thời gian tăng tốc)';
$string['testplansize_3'] = 'L ({$a->users} người dùng, {$a->loops} vòng lặp và {$a->rampup} thời gian tăng tốc)';
$string['testplansize_4'] = 'XL ({$a->users} người dùng, {$a->loops} vòng lặp và {$a->rampup} thời gian tăng tốc)';
$string['testplansize_5'] = 'XXL ({$a->users} người dùng, {$a->loops} vòng lặp và {$a->rampup} thời gian tăng tốc)';
$string['updateuserspassword'] = 'Cập nhật mật khẩu người dùng khóa học';
$string['updateuserspassword_help'] = 'JMeter cần đăng nhập làm người dùng khóa học, bạn có thể đặt mật khẩu người dùng bằng cách sử dụng $CFG->tool_generator_users_password trong config.php; cài đặt này cập nhật mật khẩu người dùng khóa học theo $CFG->tool_generator_users_password. Nó có thể hữu ích trong trường hợp bạn đang sử dụng một khóa học không được tạo bởi tool_generator hoặc $CFG->tool_generator_users_password không được đặt khi bạn tạo các khóa học kiểm tra.';
$string['privacy:metadata'] = 'Plugin Trình tạo dữ liệu phát triển không lưu trữ bất kỳ dữ liệu cá nhân nào.';
