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
 * Strings for the tool_moodlenet component.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   2020 Jake Dallimore <jrhdallimore@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenablenotification'] = '<p>Từ Moodle 4.0 trở đi, tích hợp <a href="https://moodle.net/">MoodleNet</a> được bật mặc định trong các tính năng nâng cao. Người dùng có khả năng tạo và quản lý các hoạt động có thể duyệt MoodleNet qua bộ chọn hoạt động và nhập tài nguyên MoodleNet vào khóa học của họ.</p><p>Nếu muốn, một phiên bản MoodleNet thay thế có thể được chỉ định trong <a href="{$a->settingslink}">cài đặt đầu vào MoodleNet</a>.</p>';
$string['autoenablenotification_subject'] = 'Cài đặt mặc định MoodleNet đã thay đổi.';
$string['addingaresource'] = 'Thêm nội dung từ MoodleNet';
$string['aria:enterprofile'] = "Nhập ID hồ sơ MoodleNet của bạn";
$string['aria:footermessage'] = "Duyệt tìm nội dung trên MoodleNet";
$string['browsecontentmoodlenet'] = "Hoặc duyệt tìm nội dung trên MoodleNet";
$string['clearsearch'] = "Xóa tìm kiếm";
$string['connectandbrowse'] = "Kết nối và duyệt:";
$string['defaultmoodlenet'] = 'URL MoodleNet';
$string['defaultmoodlenet_desc'] = 'URL của phiên bản MoodleNet có sẵn qua bộ chọn hoạt động.';
$string['defaultmoodlenetname'] = "Tên phiên bản MoodleNet";
$string['defaultmoodlenetnamevalue'] = 'MoodleNet Central';
$string['defaultmoodlenetname_desc'] = 'Tên của phiên bản MoodleNet có sẵn qua bộ chọn hoạt động.';
$string['enablemoodlenet'] = 'Bật tích hợp MoodleNet (đầu vào)';
$string['enablemoodlenet_desc'] = 'Nếu được bật, người dùng có khả năng tạo và quản lý các hoạt động có thể duyệt MoodleNet qua bộ chọn hoạt động và nhập tài nguyên MoodleNet vào khóa học của họ. Ngoài ra, người dùng có khả năng khôi phục các bản sao lưu có thể chọn một tệp sao lưu trên MoodleNet và khôi phục nó vào Moodle.';
$string['errorduringdownload'] = 'Đã xảy ra lỗi khi tải xuống tệp: {$a}';
$string['forminfo'] = 'ID hồ sơ MoodleNet của bạn sẽ được tự động lưu trong hồ sơ của bạn trên trang này.';
$string['footermessage'] = "Hoặc duyệt tìm nội dung trên";
$string['instancedescription'] = "MoodleNet là một nền tảng truyền thông xã hội mở cho giáo viên, tập trung vào việc hợp tác quản lý các bộ sưu tập tài nguyên mở.";
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['inputhelp'] = 'Hoặc nếu bạn đã có tài khoản MoodleNet, sao chép ID từ hồ sơ MoodleNet của bạn và dán vào đây:';
$string['invalidmoodlenetprofile'] = '$userprofile không được định dạng đúng';
$string['importconfirm'] = 'Bạn sắp nhập nội dung "{$a->resourcename} ({$a->resourcetype})" vào khóa học "{$a->coursename}". Bạn có chắc chắn muốn tiếp tục không?';
$string['importconfirmnocourse'] = 'Bạn sắp nhập nội dung "{$a->resourcename} ({$a->resourcetype})" vào trang của bạn. Bạn có chắc chắn muốn tiếp tục không?';
$string['importformatselectguidingtext'] = 'Bạn muốn thêm nội dung "{$a->name} ({$a->type})" vào khóa học của bạn theo định dạng nào?';
$string['importformatselectheader'] = 'Chọn định dạng hiển thị nội dung';
$string['missinginvalidpostdata'] = 'Thông tin tài nguyên từ MoodleNet bị thiếu hoặc ở định dạng không đúng. Nếu điều này xảy ra liên tục, vui lòng liên hệ quản trị viên trang.';
$string['mnetprofile'] = 'Hồ sơ MoodleNet';
$string['mnetprofiledesc'] = '<p>Nhập chi tiết hồ sơ MoodleNet của bạn ở đây để được chuyển hướng đến hồ sơ của bạn khi truy cập MoodleNet.</p>';
$string['moodlenetsettings'] = 'Cài đặt đầu vào MoodleNet';
$string['moodlenetnotenabled'] = 'Tích hợp MoodleNet phải được bật trong Quản trị trang / MoodleNet trước khi các tài nguyên có thể được xử lý.';
$string['notification'] = 'Bạn sắp nhập nội dung "{$a->name} ({$a->type})" vào trang của bạn. Chọn khóa học mà nó sẽ được thêm vào, hoặc <a href="{$a->cancellink}">hủy</a>.';
$string['removedmnetprofilenotification'] = 'Do thay đổi gần đây trên nền tảng MoodleNet, bất kỳ người dùng nào đã lưu ID hồ sơ MoodleNet trên trang sẽ cần nhập ID hồ sơ MoodleNet theo định dạng mới để xác thực trên nền tảng MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Thay đổi định dạng ID hồ sơ MoodleNet';
$string['searchcourses'] = "Tìm kiếm khóa học";
$string['selectpagetitle'] = 'Chọn trang';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = "Công cụ MoodleNet chỉ hỗ trợ giao tiếp với MoodleNet. Nó không lưu trữ dữ liệu.";
$string['profilevalidationerror'] = 'Có vấn đề khi cố gắng xác nhận ID hồ sơ MoodleNet của bạn';
$string['profilevalidationfail'] = 'Vui lòng nhập một ID hồ sơ MoodleNet hợp lệ';
$string['profilevalidationpass'] = 'Tốt rồi!';
$string['saveandgo'] = "Lưu và đi";
$string['uploadlimitexceeded'] = 'Kích thước tệp {$a->filesize} vượt quá giới hạn tải lên của người dùng là {$a->uploadlimit} byte.';

