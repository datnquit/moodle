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
 * Strings for component 'mlbackend_php'
 *
 * @package   mlbackend_php
 * @copyright 2017 David Monllao {@link http://www.davidmonllao.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['datasetsizelimited'] = 'Chỉ một phần của tập dữ liệu đã được đánh giá do kích thước của nó. Đặt $CFG->mlbackend_php_no_memory_limit nếu bạn tin rằng hệ thống của bạn có thể xử lý một tập dữ liệu có kích thước là {$a}.';
$string['errorcantloadmodel'] = 'Tệp mô hình {$a} không tồn tại. Mô hình cần được huấn luyện trước khi sử dụng để dự đoán.';
$string['errorlowscore'] = 'Độ chính xác của dự đoán mô hình đã được đánh giá không cao lắm, vì vậy một số dự đoán có thể không chính xác. Điểm số của mô hình = {$a->score}, điểm số tối thiểu = {$a->minscore}';
$string['errornotenoughdata'] = 'Không có đủ dữ liệu để đánh giá mô hình này sử dụng khoảng phân tích được cung cấp.';
$string['errornotenoughdatadev'] = 'Kết quả đánh giá biến động quá nhiều. Đề nghị thu thập thêm dữ liệu để đảm bảo rằng mô hình là hợp lệ. Độ lệch chuẩn của kết quả đánh giá = {$a->deviation}, độ lệch chuẩn tối đa được đề nghị = {$a->accepteddeviation}';
$string['errorphp7required'] = 'Backend học máy PHP yêu cầu PHP 7';
$string['pluginname'] = 'Backend học máy PHP';
$string['privacy:metadata'] = 'Plugin backend học máy PHP không lưu trữ bất kỳ dữ liệu cá nhân nào.';
