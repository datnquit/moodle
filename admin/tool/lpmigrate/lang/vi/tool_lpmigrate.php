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
 * @package    tool_lpmigrate
 * @copyright  2016 Frédéric Massart - FMCorz.net
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['allowedcourses'] = 'Các khóa học được phép';
$string['allowedcourses_help'] = 'Chọn các khóa học để di chuyển sang khung mới. Nếu không chỉ định khóa học nào, tất cả các khóa học sẽ được di chuyển.';
$string['continuetoframeworks'] = 'Tiếp tục đến khung';
$string['coursecompetencymigrations'] = 'Di chuyển năng lực khóa học';
$string['coursemodulecompetencymigrations'] = 'Di chuyển năng lực hoạt động và tài nguyên của khóa học';
$string['coursesfound'] = 'Khóa học được tìm thấy';
$string['coursemodulesfound'] = 'Hoạt động hoặc tài nguyên khóa học được tìm thấy';
$string['coursestartdate'] = 'Ngày bắt đầu khóa học';
$string['coursestartdate_help'] = 'Nếu bật, các khóa học có ngày bắt đầu trước ngày được chỉ định sẽ không được di chuyển.';
$string['disallowedcourses'] = 'Các khóa học không được phép';
$string['disallowedcourses_help'] = 'Chọn bất kỳ khóa học nào không nên di chuyển sang khung mới.';
$string['errorcannotmigratetosameframework'] = 'Không thể di chuyển từ và đến cùng một khung.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Không thể ánh xạ đến bất kỳ năng lực nào trong khung này.';
$string['errors'] = 'Lỗi';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Lỗi khi di chuyển năng lực khóa học: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Lỗi khi di chuyển năng lực hoạt động hoặc tài nguyên: {$a}';
$string['excludethese'] = 'Loại trừ những cái này';
$string['explanation'] = 'Công cụ này có thể được sử dụng để cập nhật một khung năng lực lên phiên bản mới hơn. Nó tìm kiếm các năng lực trong các khóa học và hoạt động sử dụng khung cũ, và cập nhật các liên kết để trỏ đến khung mới.

Không nên chỉnh sửa trực tiếp bộ năng lực cũ, vì điều này sẽ thay đổi tất cả các năng lực đã được cấp trong các kế hoạch học tập của người dùng.

Thông thường, bạn sẽ nhập phiên bản mới của khung, ẩn khung cũ, sau đó sử dụng công cụ này để di chuyển các khóa học mới sang khung mới.';
$string['findingcoursecompetencies'] = 'Đang tìm kiếm năng lực khóa học';
$string['findingmodulecompetencies'] = 'Đang tìm kiếm năng lực hoạt động và tài nguyên';
$string['frameworks'] = 'Khung';
$string['limittothese'] = 'Giới hạn đến những cái này';
$string['lpmigrate:frameworksmigrate'] = 'Di chuyển các khung';
$string['migrateframeworks'] = 'Di chuyển các khung';
$string['migratefrom'] = 'Di chuyển từ';
$string['migratefrom_help'] = 'Chọn khung cũ hiện đang sử dụng.';
$string['migratemore'] = 'Di chuyển thêm';
$string['migrateto'] = 'Di chuyển đến';
$string['migrateto_help'] = 'Chọn phiên bản mới hơn của khung. Chỉ có thể chọn khung không bị ẩn.';
$string['migratingcourses'] = 'Đang di chuyển các khóa học';
$string['missingmappings'] = 'Thiếu ánh xạ';
$string['performmigration'] = 'Thực hiện di chuyển';
$string['pluginname'] = 'Công cụ di chuyển năng lực';
$string['results'] = 'Kết quả';
$string['startdatefrom'] = 'Ngày bắt đầu từ';
$string['unmappedin'] = 'Chưa được ánh xạ trong {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Không thể xóa năng lực khóa học.';
$string['warningcouldnotremovemodulecompetency'] = 'Không thể xóa năng lực hoạt động hoặc tài nguyên.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Năng lực khóa học đích đã tồn tại.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Năng lực hoạt động hoặc tài nguyên đích đã tồn tại.';
$string['warnings'] = 'Cảnh báo';
$string['privacy:metadata'] = 'Plugin Công cụ di chuyển năng lực không lưu trữ bất kỳ dữ liệu cá nhân nào.';
