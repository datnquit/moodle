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
 * Strings for plugin 'fileconverter_unoconv'
 *
 * @package   fileconverter_unoconv
 * @copyright 2017 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['pathtounoconv'] = 'Đường dẫn tới trình chuyển đổi tài liệu unoconv';
$string['pathtounoconv_help'] = 'Đường dẫn tới trình chuyển đổi tài liệu unoconv. Đây là một tệp thực thi có khả năng chuyển đổi giữa các định dạng tài liệu được hỗ trợ bởi LibreOffice. Đây là tùy chọn, nhưng nếu được chỉ định, Moodle sẽ sử dụng nó để tự động chuyển đổi giữa các định dạng tài liệu. Điều này được sử dụng để hỗ trợ một loạt các tệp đầu vào cho tính năng chú thích PDF của bài tập.';
$string['pluginname'] = 'Unoconv';
$string['privacy:metadata'] = 'Plugin trình chuyển đổi tài liệu Unoconv không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['test_unoconv'] = 'Kiểm tra đường dẫn unoconv';
$string['test_unoconvdoesnotexist'] = 'Đường dẫn unoconv không trỏ tới chương trình unoconv. Vui lòng xem lại cài đặt đường dẫn của bạn.';
$string['test_unoconvdownload'] = 'Tải xuống tệp thử nghiệm PDF đã được chuyển đổi.';
$string['test_unoconvempty'] = 'Đường dẫn unoconv chưa được đặt. Vui lòng xem lại cài đặt đường dẫn của bạn.';
$string['test_unoconvisdir'] = 'Đường dẫn unoconv trỏ tới một thư mục, vui lòng bao gồm chương trình unoconv trong đường dẫn bạn chỉ định';
$string['test_unoconvnotestfile'] = 'Tài liệu thử nghiệm để chuyển đổi sang PDF đang bị thiếu.';
$string['test_unoconvnotexecutable'] = 'Đường dẫn unoconv trỏ tới một tệp không thể thực thi';
$string['test_unoconvok'] = 'Đường dẫn unoconv có vẻ đã được cấu hình đúng.';
$string['test_unoconvversionnotsupported'] = 'Phiên bản unoconv mà bạn đã cài đặt không được hỗ trợ.';
