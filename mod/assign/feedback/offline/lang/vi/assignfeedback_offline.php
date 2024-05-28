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
 * Strings for component 'feedback_offline', language 'en'
 *
 * @package   assignfeedback_offline
 * @copyright 2012 NetSpot {@link http://www.netspot.com.au}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['confirmimport'] = 'Xác nhận nhập điểm';
$string['default'] = 'Mặc định được kích hoạt';
$string['default_help'] = 'Nếu được thiết lập, việc chấm điểm ngoại tuyến bằng bảng công việc sẽ được kích hoạt mặc định cho tất cả các bài tập mới.';
$string['downloadgrades'] = 'Tải xuống bảng điểm';
$string['enabled'] = 'Bảng điểm ngoại tuyến';
$string['enabled_help'] = 'Nếu được kích hoạt, giáo viên sẽ có thể tải xuống và tải lên một bảng điểm với điểm của sinh viên khi đánh giá bài tập.';
$string['feedbackupdate'] = 'Đặt trường "{$a->field}" cho "{$a->student}" thành "{$a->text}"';
$string['graderecentlymodified'] = 'Điểm đã được sửa đổi trong Moodle gần đây hơn so với bảng điểm cho {$a}';
$string['gradelockedingradebook'] = 'Điểm đã bị khóa trong sổ điểm cho {$a}';
$string['gradeupdate'] = 'Đặt điểm cho {$a->student} là {$a->grade}';
$string['ignoremodified'] = 'Cho phép cập nhật bản ghi đã được sửa đổi gần đây hơn trong Moodle so với bảng tính.';
$string['ignoremodified_help'] = 'Khi bảng điểm được tải xuống từ Moodle, nó chứa ngày được sửa đổi cuối cùng cho mỗi điểm số. Nếu bất kỳ điểm nào được cập nhật trong Moodle sau khi bảng điểm này được tải xuống, theo mặc định Moodle sẽ từ chối ghi đè thông tin đã được cập nhật này khi nhập điểm. Bằng cách chọn tùy chọn này, Moodle sẽ vô hiệu hóa kiểm tra an toàn này và có thể có khả năng cho nhiều người đánh giá ghi đè lên nhau.';
$string['importgrades'] = 'Xác nhận các thay đổi trong bảng điểm';
$string['invalidgradeimport'] = 'Moodle không thể đọc bảng điểm được tải lên. Đảm bảo rằng nó được lưu dưới dạng tệp giá trị được phân tách bằng dấu phẩy (.csv) và thử lại.';
$string['gradesfile'] = 'Bảng điểm (định dạng csv)';
$string['gradesfile_help'] = 'Bảng điểm với các điểm được sửa đổi. Tệp này phải là tệp CSV với mã hóa UTF-8 đã được tải xuống từ bài tập, với các cột cho điểm của sinh viên và trình định danh.';
$string['privacy:nullproviderreason'] = 'Plugin này không có cơ sở dữ liệu để lưu trữ thông tin người dùng. Nó chỉ sử dụng các API trong mod_assign để hỗ trợ hiển thị giao diện đánh giá.';
$string['nochanges'] = 'Không tìm thấy điểm số đã sửa đổi trong bảng điểm được tải lên';
$string['offlinegradingworksheet'] = 'Điểm';
$string['pluginname'] = 'Bảng điểm ngoại tuyến';
$string['processgrades'] = 'Nhập điểm';
$string['skiprecord'] = 'Bỏ qua bản ghi';
$string['updaterecord'] = 'Cập nhật bản ghi';
$string['uploadgrades'] = 'Tải lên bảng điểm';
$string['updatedgrades'] = 'Điểm đã được cập nhật <strong>{$a->gradeupdatescount}</strong> và <strong>{$a->feedbackupdatescount}</strong> trường hợp phản hồi.';
