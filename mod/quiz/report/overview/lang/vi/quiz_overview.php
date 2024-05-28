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
 * Strings for component 'quiz_overview', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   quiz_overview
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['allattempts'] = 'Hiển thị tất cả các bài làm';
$string['allattemptscontributetograde'] = 'Tất cả các bài làm đều góp phần vào điểm cuối cùng của người dùng.';
$string['allstudents'] = 'Hiển thị tất cả {$a}';
$string['attemptsonly'] = 'Hiển thị {$a} chỉ với các bài làm';
$string['attemptsprepage'] = 'Số bài làm hiển thị mỗi trang';
$string['deleteselected'] = 'Xóa các bài làm được chọn';
$string['done'] = 'Hoàn thành';
$string['err_failedtodeleteregrades'] = 'Không thể xóa các điểm đã tính toán của bài làm';
$string['err_failedtorecalculateattemptgrades'] = 'Không thể tính lại điểm của bài làm';
$string['highlightinggraded'] = 'Bài làm của người dùng góp phần vào điểm cuối cùng được đánh dấu nổi bật.';
$string['needed'] = 'Cần thiết';
$string['noattemptsonly'] = 'Hiển thị / tải xuống {$a} chỉ với không có bài làm';
$string['noattemptstoregrade'] = 'Không có bài làm nào cần được chấm lại';
$string['nogradepermission'] = 'Bạn không có quyền chấm điểm bài kiểm tra này.';
$string['onlyoneattemptallowed'] = 'Chỉ cho phép một lần làm bài cho mỗi người dùng trong bài kiểm tra này.';
$string['optallattempts'] = 'tất cả các bài làm';
$string['optallstudents'] = 'tất cả {$a} đã làm hoặc chưa làm bài kiểm tra';
$string['optattemptsonly'] = '{$a} đã làm bài kiểm tra';
$string['optnoattemptsonly'] = '{$a} chưa làm bài kiểm tra';
$string['optonlyregradedattempts'] = 'đã được chấm lại / được đánh dấu cần chấm lại';
$string['overview'] = 'Điểm số';
$string['overviewdownload'] = 'Tải xuống tổng quan';
$string['overviewfilename'] = 'điểm số';
$string['overviewreport'] = 'Báo cáo điểm số';
$string['overviewreportgraph'] = 'Số lượng học sinh đạt các mức điểm';
$string['overviewreportgraphgroup'] = 'Số lượng học sinh trong nhóm \'{$a}\' đạt các mức điểm';
$string['pagesize'] = 'Kích thước trang';
$string['pluginname'] = 'Điểm số';
$string['preferencespage'] = 'Tùy chọn chỉ cho trang này';
$string['preferencessave'] = 'Hiển thị báo cáo';
$string['preferencesuser'] = 'Tùy chọn của bạn cho báo cáo này';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Hiển thị điểm cho từng câu hỏi.';
$string['privacy:preference:slotmarks:yes'] = 'Điểm được hiển thị bên cạnh từng câu hỏi.';
$string['privacy:preference:slotmarks:no'] = 'Điểm không được hiển thị bên cạnh từng câu hỏi.';
$string['regrade'] = 'Chấm lại';
$string['regradeall'] = 'Chấm lại tất cả';
$string['regradealldry'] = 'Chạy thử chấm lại toàn bộ';
$string['regradealldrydo'] = 'Chấm lại các bài làm được đánh dấu cần chấm lại ({$a})';
$string['regradealldrydogroup'] = 'Chấm lại các bài làm ({$a->countregradeneeded}) được đánh dấu cần chấm lại trong nhóm \'{$a->groupname}\'';
$string['regradealldrygroup'] = 'Chạy thử chấm lại toàn bộ cho nhóm \'{$a->groupname}\'';
$string['regradeallgroup'] = 'Chấm lại toàn bộ cho nhóm \'{$a->groupname}\'';
$string['regradecomplete'] = 'Hoàn thành chấm lại';
$string['regradedsuccessfullyxofy'] = 'Hoàn thành chấm lại ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Chấm lại';
$string['regradeselected'] = 'Chấm lại các bài làm được chọn';
$string['regradingattemptissue'] = 'Vị trí {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Chấm lại bài làm ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Các câu hỏi sau không thể chấm lại trong bài làm {$a->attemptnum} của {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Chấm lại bài làm ({$a->done}/{$a->count}) - Bài làm {$a->attemptnum} của {$a->name} (id {$a->attemptid})';
$string['show'] = 'Hiển thị / tải xuống';
$string['showattempts'] = 'Chỉ hiển thị / tải xuống các bài làm';
$string['showdetailedmarks'] = 'Điểm cho từng câu hỏi';
$string['showinggraded'] = 'Chỉ hiển thị bài làm đã được chấm điểm cho mỗi người dùng.';
$string['showinggradedandungraded'] = 'Hiển thị cả bài làm đã chấm điểm và chưa chấm điểm cho mỗi người dùng. Bài làm đã được chấm điểm cho mỗi người dùng được đánh dấu nổi bật. Phương pháp chấm điểm cho bài kiểm tra này là {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' trong nhóm \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' trong nhóm này';
