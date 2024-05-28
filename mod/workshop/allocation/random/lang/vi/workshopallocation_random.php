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
 * Strings for component 'workshopallocation_random', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    workshopallocation
 * @subpackage random
 * @copyright  2009 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['addselfassessment'] = 'Thêm tự đánh giá';
$string['allocationaddeddetail'] = 'Bài đánh giá mới cần làm: <strong>{$a->reviewername}</strong> là người đánh giá của <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'Không thể hủy phân bổ bài đánh giá đã được chấm điểm: người đánh giá <strong>{$a->reviewername}</strong>, tác giả bài nộp <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Bài đánh giá tái sử dụng: <strong>{$a->reviewername}</strong> vẫn là người đánh giá của <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Cài đặt phân bổ';
$string['assessmentdeleteddetail'] = 'Bài đánh giá đã bị huỷ phân bổ: <strong>{$a->reviewername}</strong> không còn là người đánh giá của <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'Người tham gia có thể đánh giá mà không cần nộp bài';
$string['confignumofreviews'] = 'Số lượng bài nộp mặc định được phân bổ ngẫu nhiên';
$string['excludesamegroup'] = 'Ngăn chặn đánh giá từ các đồng nghiệp trong cùng nhóm';
$string['noallocationtoadd'] = 'Không có phân bổ nào để thêm';
$string['nogroupusers'] = '<p>Cảnh báo: Nếu hội thảo ở chế độ \'nhóm công khai\' hoặc \'nhóm riêng biệt\', thì người dùng PHẢI thuộc ít nhất một nhóm để được phân bổ đánh giá ngang hàng bởi công cụ này. Người dùng không thuộc nhóm vẫn có thể được giao tự đánh giá mới hoặc loại bỏ đánh giá hiện có.</p>
<p>Những người dùng này hiện không thuộc nhóm: {$a}</p>';
$string['numofdeallocatedassessment'] = 'Huỷ phân bổ {$a} bài đánh giá';
$string['numofrandomlyallocatedsubmissions'] = 'Phân bổ ngẫu nhiên {$a} bài';
$string['numofreviews'] = 'Số lượng bài đánh giá';
$string['numofselfallocatedsubmissions'] = 'Tự phân bổ {$a} bài nộp';
$string['numperauthor'] = 'mỗi bài nộp';
$string['numperreviewer'] = 'mỗi người đánh giá';
$string['pluginname'] = 'Phân bổ ngẫu nhiên';
$string['privacy:metadata'] = 'Plugin Phân bổ ngẫu nhiên không lưu trữ bất kỳ dữ liệu cá nhân nào. Dữ liệu cá nhân thực tế về việc ai sẽ đánh giá ai được lưu trữ bởi chính mô-đun Hội thảo và là cơ sở để xuất chi tiết các đánh giá.';
$string['randomallocationdone'] = 'Phân bổ ngẫu nhiên đã hoàn thành';
$string['resultnomorepeers'] = 'Không còn đồng nghiệp nào khác';
$string['resultnomorepeersingroup'] = 'Không còn đồng nghiệp nào khác trong nhóm riêng biệt này';
$string['resultnotenoughpeers'] = 'Không đủ đồng nghiệp';
$string['resultnumperauthor'] = 'Đang cố gắng phân bổ {$a} bài đánh giá mỗi tác giả';
$string['resultnumperreviewer'] = 'Đang cố gắng phân bổ {$a} bài đánh giá mỗi người đánh giá';
$string['removecurrentallocations'] = 'Loại bỏ phân bổ hiện tại';
$string['stats'] = 'Thống kê phân bổ hiện tại';
