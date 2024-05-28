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
 * Strings for component 'rating', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_rating
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['aggregatetype'] = 'Loại tổng hợp';
$string['aggregateavg'] = 'Trung bình của đánh giá';
$string['aggregatecount'] = 'Số lượng đánh giá';
$string['aggregatemax'] = 'Đánh giá cao nhất';
$string['aggregatemin'] = 'Đánh giá thấp nhất';
$string['aggregatenone'] = 'Không có đánh giá';
$string['aggregatesum'] = 'Tổng của đánh giá';
$string['aggregatetype_help'] = 'Loại tổng hợp xác định cách các đánh giá được kết hợp để tạo thành điểm cuối cùng trong sổ điểm.

* Trung bình của đánh giá - Trung bình cộng của tất cả các đánh giá
* Số lượng đánh giá - Số lượng mục đã được đánh giá trở thành điểm cuối cùng. Lưu ý rằng tổng điểm không thể vượt quá điểm tối đa cho hoạt động.
* Tối đa - Điểm đánh giá cao nhất trở thành điểm cuối cùng
* Tối thiểu - Điểm đánh giá nhỏ nhất trở thành điểm cuối cùng
* Tổng - Tất cả các điểm đánh giá được cộng lại. Lưu ý rằng tổng điểm không thể vượt quá điểm tối đa cho hoạt động.

Nếu chọn "Không có đánh giá", hoạt động sẽ không xuất hiện trong sổ điểm.';
$string['allowratings'] = 'Cho phép mục được đánh giá?';
$string['allratingsforitem'] = 'Tất cả các đánh giá đã gửi';
$string['capabilitychecknotavailable'] = 'Kiểm tra khả năng không có sẵn cho đến khi hoạt động được lưu';
$string['couldnotdeleteratings'] = 'Xin lỗi, không thể xóa vì đã có người đánh giá';
$string['norate'] = 'Không được phép đánh giá các mục!';
$string['noratings'] = 'Không có đánh giá nào được gửi';
$string['noviewanyrate'] = 'Bạn chỉ có thể xem kết quả cho các mục mà bạn đã tạo';
$string['noviewrate'] = 'Bạn không có quyền xem đánh giá mục';
$string['rate'] = 'Đánh giá';
$string['ratepermissiondenied'] = 'Bạn không có quyền đánh giá mục này';
$string['rating'] = 'Đánh giá';
$string['ratinginvalid'] = 'Đánh giá không hợp lệ';
$string['ratingtime'] = 'Hạn chế đánh giá cho các mục có ngày trong khoảng này:';
$string['ratings'] = 'Đánh giá';
$string['rolewarning'] = 'Vai trò có quyền đánh giá';
$string['rolewarning_help'] = 'Các vai trò có quyền đánh giá là các vai trò có khả năng moodle/rating:rate cộng với bất kỳ khả năng đánh giá cụ thể của hoạt động nào đó. Bạn có thể cấp quyền đánh giá cho nhiều vai trò hơn thông qua trang Quyền hạn.';
$string['scaleselectionrequired'] = 'Khi chọn một loại tổng hợp đánh giá, bạn cũng phải chọn sử dụng một thang điểm hoặc đặt một số điểm tối đa.';
$string['privacy:metadata:rating'] = 'Điểm đánh giá do người dùng nhập vào được lưu cùng với một bản đồ của mục đã được đánh giá.';
$string['privacy:metadata:rating:userid'] = 'Người dùng đã đánh giá.';
$string['privacy:metadata:rating:rating'] = 'Điểm đánh giá số mà người dùng nhập vào.';
$string['privacy:metadata:rating:timecreated'] = 'Thời gian điểm đánh giá được tạo lần đầu.';
$string['privacy:metadata:rating:timemodified'] = 'Thời gian điểm đánh giá được cập nhật lần cuối.';

