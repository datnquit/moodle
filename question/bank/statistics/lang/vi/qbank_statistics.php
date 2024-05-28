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
 * Strings for component qbank_statistics, language 'en'
 *
 * @package    qbank_statistics
 * @copyright  2021 Catalyst IT Australia Pty Ltd
 * @author     Nathan Nguyen <nathannguyen@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Thống kê câu hỏi';
$string['privacy:metadata'] = 'Plugin ngân hàng câu hỏi Thống kê câu hỏi không lưu trữ bất kỳ dữ liệu cá nhân nào.';

// Cột.
$string['facility_index'] = 'Chỉ số dễ dàng';
$string['facility_index_help'] = 'Chỉ số dễ dàng cho biết điểm trung bình (tính bằng phần trăm) đạt được trên câu hỏi (tất cả các phiên bản) trong tất cả các bài kiểm tra nơi câu hỏi đã được thử. Giá trị cao hơn thường chỉ ra một câu hỏi dễ hơn.';
$string['discriminative_efficiency'] = 'Hiệu quả phân biệt';
$string['discriminative_efficiency_help'] = 'Hiệu quả phân biệt là một ước tính thống kê về mức độ đánh giá tốt của câu hỏi đối với học sinh, với giá trị cao hơn là tốt hơn. Giá trị đặc biệt thấp có thể chỉ ra một vấn đề với câu hỏi. Một câu hỏi rất khó hoặc dễ (với chỉ số dễ dàng gần 0% hoặc 100%) cũng có thể dẫn đến giá trị thấp.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['discrimination_index'] = 'Cần kiểm tra?';
$string['discrimination_index_help'] = 'Một câu hỏi được chỉ ra là cần kiểm tra dựa trên thống kê câu hỏi. Ví dụ, nếu học sinh đạt điểm thấp ở câu hỏi nhưng lại đạt điểm cao trong toàn bộ bài kiểm tra, hoặc đạt điểm cao ở câu hỏi nhưng lại đạt điểm thấp trong toàn bộ bài kiểm tra, thì có thể có vấn đề với câu hỏi như câu trả lời sai được đặt là đúng. Tuy nhiên, thống kê không phải lúc nào cũng chính xác; đây chỉ là gợi ý rằng câu hỏi nên được kiểm tra.';

// Định dạng văn bản.
$string['verylikely'] = 'Rất có thể';
$string['likely'] = 'Có thể';
$string['unlikely'] = 'Không có khả năng';
$string['na'] = 'N/A';
$string['emptyvalue'] = '-';
