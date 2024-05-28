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
 * Strings for tool_behat
 *
 * @package    tool_behat
 * @copyright  2012 David Monllaó
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['aim'] = 'Công cụ quản trị này giúp các nhà phát triển và nhà viết kiểm thử tạo các tệp .feature mô tả các chức năng của Moodle và chạy chúng tự động. Các định nghĩa bước có sẵn để sử dụng trong các tệp .feature được liệt kê dưới đây.';
$string['allavailablesteps'] = 'Tất cả các định nghĩa bước có sẵn';
$string['errorbehatcommand'] = 'Lỗi khi chạy lệnh CLI behat. Hãy thử chạy "{$a} --help" bằng tay từ CLI để tìm hiểu thêm về vấn đề.';
$string['errorcomposer'] = 'Các phụ thuộc Composer chưa được cài đặt.';
$string['errordataroot'] = '$CFG->behat_dataroot không được thiết lập hoặc không hợp lệ.';
$string['errorsetconfig'] = 'Cần phải thiết lập $CFG->behat_dataroot, $CFG->behat_prefix và $CFG->behat_wwwroot trong config.php.';
$string['erroruniqueconfig'] = 'Các giá trị $CFG->behat_dataroot, $CFG->behat_prefix và $CFG->behat_wwwroot cần phải khác nhau so với các giá trị $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot và $CFG->phpunit_prefix.<br/>Hoặc, nếu $CFG->behat_prefix giống nhau, thì $CFG->behat_dbname hoặc $CFG->behat_dbhost cần phải khác với $CFG->phpunit_dbname và $CFG->phpunit_dbhost và với $CFG->dbname và $CFG->dbhost.';
$string['fieldvalueargument'] = 'Đối số giá trị trường';
$string['fieldvalueargument_help'] = 'Đối số này nên được điền bởi một giá trị trường. Có nhiều loại trường, bao gồm các loại đơn giản như ô kiểm, lựa chọn hoặc vùng văn bản, hoặc các loại phức tạp như bộ chọn ngày. Xem tài liệu phát triển <a href="https://moodledev.io/general/development/tools/behat" target="_blank">Acceptance_testing</a> để biết chi tiết về các giá trị trường được mong đợi.';
$string['giveninfo'] = 'Cho trước. Quá trình thiết lập môi trường';
$string['infoheading'] = 'Thông tin';
$string['installinfo'] = 'Đọc {$a} để biết thông tin về cài đặt và thực thi các kiểm thử';
$string['newstepsinfo'] = 'Đọc {$a} để biết thông tin về cách thêm định nghĩa bước mới';
$string['newtestsinfo'] = 'Đọc {$a} để biết thông tin về cách viết kiểm thử mới';
$string['nostepsdefinitions'] = 'Không có bất kỳ định nghĩa bước nào phù hợp với bộ lọc này';
$string['pluginname'] = 'Kiểm thử chấp nhận';
$string['stepsdefinitionscomponent'] = 'Khu vực';
$string['stepsdefinitionscontains'] = 'Chứa';
$string['stepsdefinitionsfilters'] = 'Định nghĩa bước';
$string['stepsdefinitionstype'] = 'Loại';
$string['theninfo'] = 'Sau đó. Kiểm tra để đảm bảo các kết quả là những kết quả được mong đợi';
$string['unknownexceptioninfo'] = 'Có một vấn đề với Selenium hoặc trình duyệt của bạn. Vui lòng đảm bảo bạn đang sử dụng phiên bản mới nhất của Selenium. Lỗi:';
$string['viewsteps'] = 'Lọc';
$string['warndirrootconfigfound'] = 'Một tệp cấu hình đã được tìm thấy tại {$a}. Tệp này không được cập nhật tự động và có thể trở nên lỗi thời. Chúng tôi khuyến nghị xóa tệp này.';
$string['wheninfo'] = 'Khi. Hành động gây ra một sự kiện';
$string['wrongbehatsetup'] = 'Có điều gì đó không đúng với cài đặt behat và do đó các định nghĩa bước không thể được liệt kê: <b>{$a->errormsg}</b><br/><br/>Vui lòng kiểm tra:<ul>

<li>$CFG->behat_dataroot, $CFG->behat_prefix và $CFG->behat_wwwroot được thiết lập trong config.php với các giá trị khác nhau so với $CFG->dataroot, $CFG->prefix và $CFG->wwwroot.</li>
<li>Bạn đã chạy "{$a->behatinit}" từ thư mục gốc của Moodle.</li>
<li>Các phụ thuộc được cài đặt trong vendor/ và tệp {$a->behatcommand} có quyền thực thi.</li></ul>';
$string['privacy:metadata'] = 'Plugin Kiểm thử chấp nhận không lưu trữ bất kỳ dữ liệu cá nhân nào.';
