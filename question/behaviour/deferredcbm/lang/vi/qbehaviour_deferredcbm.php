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
 * Strings for component 'qbehaviour_deferredcbm', language 'en'.
 *
 * @package    qbehaviour
 * @subpackage deferredcbm
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['accuracy'] = 'Độ chính xác';
$string['accuracyandbonus'] = 'Độ chính xác + Thưởng';
$string['assumingcertainty'] = 'Bạn đã không chọn mức độ chắc chắn. Giả định: {$a}.';
$string['averagecbmmark'] = 'Điểm CBM trung bình';
$string['basemark'] = 'Điểm cơ bản {$a}';
$string['breakdownbycertainty'] = 'Phân tích theo mức độ chắc chắn';
$string['cbmbonus'] = 'Thưởng CBM';
$string['cbmmark'] = 'Điểm CBM {$a}';
$string['cbmgradeexplanation'] = 'Đối với CBM, điểm số trên được hiển thị tương đối với tối đa cho tất cả đúng ở C=1.';
$string['cbmgrades'] = 'Điểm CBM';
$string['cbmgrades_help'] = 'Với Chấm điểm Dựa trên Mức độ Chắc chắn (CBM), đạt đúng mọi câu hỏi với C=1 (mức độ chắc chắn thấp) cho một điểm số 100%. Điểm số có thể cao tới 300% nếu mọi câu hỏi đúng với C=3 (mức độ chắc chắn cao). Nhầm lẫn (trả lời sai tự tin) làm giảm điểm số nhiều hơn so với các câu trả lời sai mà được thừa nhận là không chắc chắn. Điều này thậm chí có thể dẫn đến điểm số tổng thể âm.

**Độ chính xác** là % đúng không tính đến mức độ chắc chắn nhưng được trọng số cho điểm tối đa của mỗi câu hỏi. Việc phân biệt thành công các phản hồi đáng tin cậy hơn và ít đáng tin cậy hơn sẽ cho một điểm số tốt hơn so với việc chọn cùng một mức độ chắc chắn cho mỗi câu hỏi. Điều này được phản ánh trong **Thưởng CBM**. **Độ chính xác** + **Thưởng CBM** là một thước đo tốt hơn về kiến thức so với **Độ chính xác**. Nhầm lẫn có thể dẫn đến thưởng âm, một cảnh báo để xem xét kỹ lưỡng những gì biết và không biết.';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['certainty'] = 'Mức độ chắc chắn';
$string['certainty_help'] = 'Chấm điểm dựa trên mức độ chắc chắn yêu cầu bạn chỉ ra mức độ tin cậy của câu trả lời. Các mức có sẵn là:

Mức độ chắc chắn  | C=1 (Không chắc) | C=2 (Trung bình) | C=3 (Rất chắc chắn)
-------------------|------------------|-----------------|-------------------
Điểm nếu đúng     |      1           |       2         |        3
Điểm nếu sai      |      0           |      -2         |       -6
Khả năng đúng     |     <67%         |     67-80%      |      >80%

Điểm tốt nhất đạt được bằng cách thừa nhận sự không chắc chắn. Ví dụ, nếu bạn nghĩ rằng có hơn 1 trong 3 cơ hội là sai, bạn nên chọn C=1 để tránh rủi ro bị điểm âm.';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certainty-1'] = 'Không biết';
$string['certainty1'] = 'C=1 (Không chắc: <67%)';
$string['certainty2'] = 'C=2 (Trung bình: >67%)';
$string['certainty3'] = 'C=3 (Rất chắc chắn: >80%)';
$string['certaintyshort-1'] = 'Không biết';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'Không biết';
$string['foransweredquestions'] = 'Kết quả cho chỉ các câu hỏi đã được trả lời {$a}';
$string['forentirequiz'] = 'Kết quả cho toàn bộ bài kiểm tra ({$a} câu hỏi)';
$string['judgementok'] = 'OK';
$string['judgementsummary'] = 'Phản hồi: {$a->responses}. Độ chính xác: {$a->fraction}. (Phạm vi tối ưu {$a->idealrangelow} đến {$a->idealrangehigh}). Bạn đã {$a->judgement} sử dụng mức độ chắc chắn này.';
$string['howcertainareyou'] = 'Mức độ chắc chắn{$a->help}: {$a->choices}';
$string['noquestions'] = 'Không có phản hồi';
$string['overconfident'] = 'quá tự tin';
$string['pluginname'] = 'Phản hồi trì hoãn với CBM';
$string['privacy:metadata'] = 'Plugin hành vi câu hỏi Phản hồi trì hoãn với CBM không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['slightlyoverconfident'] = 'hơi quá tự tin';
$string['slightlyunderconfident'] = 'hơi thiếu tự tin';
$string['underconfident'] = 'thiếu tự tin';
$string['weightx'] = 'Trọng số {$a}';
