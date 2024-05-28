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
 * Strings for component 'feedback', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package mod_feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['add_item'] = 'Thêm câu hỏi';
$string['add_pagebreak'] = 'Thêm ngắt trang';
$string['adjustment'] = 'Điều chỉnh';
$string['after_submit'] = 'Sau khi gửi';
$string['allowfullanonymous'] = 'Cho phép hoàn toàn ẩn danh';
$string['analysis'] = 'Phân tích';
$string['anonymous'] = 'Ẩn danh';
$string['anonymous_edit'] = 'Ghi lại tên người dùng';
$string['anonymous_entries'] = 'Mục ẩn danh ({$a})';
$string['anonymous_user'] = 'Người dùng ẩn danh';
$string['answerquestions'] = 'Trả lời các câu hỏi';
$string['append_new_items'] = 'Thêm các mục mới';
$string['autonumbering'] = 'Tự động đánh số câu hỏi';
$string['autonumbering_help'] = 'Bật hoặc tắt số tự động cho mỗi câu hỏi';
$string['average'] = 'Trung bình';
$string['bold'] = 'In đậm';
$string['calendarend'] = '{$a} đóng';
$string['calendarstart'] = '{$a} mở';
$string['cannotaccess'] = 'Bạn chỉ có thể truy cập phản hồi này từ một khóa học';
$string['cannotsavetempl'] = 'Không được phép lưu mẫu';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha chưa được cài đặt.';
$string['closebeforeopen'] = 'Bạn đã chỉ định ngày kết thúc trước ngày bắt đầu.';
$string['completed_feedbacks'] = 'Câu trả lời đã nộp';
$string['complete_the_form'] = 'Trả lời các câu hỏi';
$string['completed'] = 'Hoàn thành';
$string['completedon'] = 'Hoàn thành vào {$a}';
$string['completiondetail:submit'] = 'Gửi phản hồi';
$string['completionsubmit'] = 'Gửi phản hồi';
$string['configallowfullanonymous'] = 'Nếu đặt thành \'có\', người dùng có thể hoàn thành hoạt động phản hồi trên trang chủ mà không cần phải đăng nhập.';
$string['confirmdeleteentry'] = 'Bạn có chắc chắn muốn xóa mục này?';
$string['confirmdeleteitem'] = 'Bạn có chắc chắn muốn xóa phần tử này?';
$string['confirmdeletetemplate'] = 'Bạn có chắc chắn muốn xóa mẫu này?';
$string['confirmusetemplate'] = 'Bạn có chắc chắn muốn sử dụng mẫu này?';
$string['continue_the_form'] = 'Tiếp tục trả lời các câu hỏi';
$string['count_of_nums'] = 'Số lượng số';
$string['courseid'] = 'ID khóa học';
$string['creating_templates'] = 'Lưu các câu hỏi này làm mẫu mới';
$string['delete_entry'] = 'Xóa mục';
$string['delete_item'] = 'Xóa câu hỏi';
$string['delete_old_items'] = 'Xóa các mục cũ';
$string['delete_pagebreak'] = 'Xóa ngắt trang';
$string['delete_template'] = 'Xóa mẫu';
$string['delete_templates'] = 'Xóa mẫu...';
$string['depending'] = 'Phụ thuộc';
$string['depending_help'] = 'Có thể hiển thị một mục tùy thuộc vào giá trị của mục khác.<br />
<strong>Đây là một ví dụ.</strong><br />
<ul>
<li>Đầu tiên, tạo một mục mà mục khác sẽ phụ thuộc vào.</li>
<li>Tiếp theo, thêm một ngắt trang.</li>
<li>Sau đó thêm các mục phụ thuộc vào giá trị của mục đã tạo trước đó. Chọn mục từ danh sách được gán nhãn "Mục phụ thuộc" và ghi giá trị cần thiết vào hộp văn bản được gán nhãn "Giá trị phụ thuộc".</li>
</ul>
<strong>Cấu trúc mục nên như thế này.</strong>
<ol>
<li>Mục Q: Bạn có xe không? A: có/không</li>
<li>Ngắt trang</li>
<li>Mục Q: Xe của bạn màu gì?<br />
(mục này phụ thuộc vào mục 1 với giá trị = có)</li>
<li>Mục Q: Tại sao bạn không có xe?<br />
(mục này phụ thuộc vào mục 1 với giá trị = không)</li>
<li> ... các mục khác</li>
</ol>';
$string['dependitem'] = 'Mục phụ thuộc';
$string['dependvalue'] = 'Giá trị phụ thuộc';
$string['description'] = 'Mô tả';
$string['do_not_analyse_empty_submits'] = 'Bỏ qua các bài gửi trống trong phân tích';
$string['dropdown'] = 'Lựa chọn nhiều - chỉ cho phép một câu trả lời (menu thả xuống)';
$string['dropdownlist'] = 'Lựa chọn nhiều - chỉ một câu trả lời (menu thả xuống)';
$string['dropdownrated'] = 'Menu thả xuống (được đánh giá)';
$string['dropdown_values'] = 'Câu trả lời';
$string['drop_feedback'] = 'Xóa khỏi khóa học này';
$string['edit_item'] = 'Chỉnh sửa câu hỏi';
$string['edit_items'] = 'Chỉnh sửa câu hỏi';
$string['email_notification'] = 'Bật thông báo gửi bài';
$string['email_notification_help'] = 'Nếu bật, giáo viên sẽ nhận được thông báo về các bài phản hồi.';
$string['emailteachermail'] = '{$a->username} đã hoàn thành hoạt động phản hồi: \'{$a->feedback}\'

Bạn có thể xem tại đây:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} đã hoàn thành hoạt động phản hồi: <i>\'{$a->feedback}\'</i>.</p>
<p>Nó <a href="{$a->url}">có sẵn trên trang web</a>.</p>';
$string['entries_saved'] = 'Câu trả lời của bạn đã được lưu. Cảm ơn.';
$string['export_questions'] = 'Xuất câu hỏi';
$string['export_to_excel'] = 'Xuất sang Excel';
$string['eventresponsedeleted'] = 'Phản hồi đã bị xóa';
$string['eventresponsesubmitted'] = 'Phản hồi đã được nộp';
$string['feedbackcompleted'] = '{$a->username} đã hoàn thành {$a->feedbackname}';
$string['feedback:addinstance'] = 'Thêm một phản hồi mới';
$string['feedbackclose'] = 'Cho phép trả lời đến';
$string['feedback:complete'] = 'Hoàn thành một phản hồi';
$string['feedback:createprivatetemplate'] = 'Tạo mẫu riêng';
$string['feedback:createpublictemplate'] = 'Tạo mẫu công khai';
$string['feedback:deletesubmissions'] = 'Xóa các bài nộp đã hoàn thành';
$string['feedback:deletetemplate'] = 'Xóa mẫu';
$string['feedback:edititems'] = 'Chỉnh sửa các mục';
$string['feedback_is_not_for_anonymous'] = 'Phản hồi không dành cho ẩn danh';
$string['feedback_is_not_open'] = 'Phản hồi chưa mở';
$string['feedback:mapcourse'] = 'Ánh xạ các khóa học tới phản hồi toàn cầu';
$string['feedbackopen'] = 'Cho phép trả lời từ';
$string['feedback:receivemail'] = 'Nhận thông báo email';
$string['feedback:view'] = 'Xem một phản hồi';
$string['feedback:viewanalysepage'] = 'Xem trang phân tích sau khi gửi';
$string['feedback:viewreports'] = 'Xem báo cáo';
$string['feedbackupdated'] = 'Phản hồi đã được cập nhật.';
$string['file'] = 'Tệp';
$string['filter_by_course'] = 'Lọc theo khóa học';
$string['handling_error'] = 'Đã xảy ra lỗi trong xử lý hành động của module phản hồi';
$string['hide_no_select_option'] = 'Ẩn tùy chọn "Không chọn"';
$string['horizontal'] = 'Ngang';
$string['check'] = 'Lựa chọn nhiều - nhiều câu trả lời';
$string['checkbox'] = 'Lựa chọn nhiều - cho phép nhiều câu trả lời (hộp kiểm)';
$string['check_values'] = 'Câu trả lời có thể';
$string['choosefile'] = 'Chọn một tệp';
$string['chosen_feedback_response'] = 'Phản hồi được chọn';
$string['downloadresponseas'] = 'Tải tất cả các phản hồi dưới dạng:';
$string['importfromthisfile'] = 'Nhập từ tệp này';
$string['import_questions'] = 'Nhập câu hỏi';
$string['import_successfully'] = 'Nhập thành công';
$string['includeuserinrecipientslist'] = 'Bao gồm {$a} trong danh sách người nhận';
$string['indicator:cognitivedepth'] = 'Phản hồi nhận thức';
$string['indicator:cognitivedepth_help'] = 'Chỉ số này dựa trên độ sâu nhận thức mà sinh viên đạt được trong một hoạt động phản hồi.';
$string['indicator:cognitivedepthdef'] = 'Phản hồi nhận thức';
$string['indicator:cognitivedepthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm này của sự tham gia nhận thức được cung cấp bởi các hoạt động phản hồi trong khoảng thời gian phân tích này (Các cấp độ = Không xem, Xem, Nộp)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Phản hồi xã hội';
$string['indicator:socialbreadth_help'] = 'Chỉ số này dựa trên bề rộng xã hội mà sinh viên đạt được trong một hoạt động phản hồi.';
$string['indicator:socialbreadthdef'] = 'Phản hồi xã hội';
$string['indicator:socialbreadthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm này của sự tham gia xã hội được cung cấp bởi các hoạt động phản hồi trong khoảng thời gian phân tích này (Các cấp độ = Không tham gia, Tham gia một mình, Tham gia với người khác)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Thông tin';
$string['infotype'] = 'Loại thông tin';
$string['insufficient_responses_for_this_group'] = 'Có không đủ phản hồi cho nhóm này';
$string['insufficient_responses'] = 'Phản hồi không đủ';
$string['insufficient_responses_help'] = 'Để phản hồi được ẩn danh, phải có ít nhất 2 phản hồi.';
$string['item_label'] = 'Nhãn';
$string['item_name'] = 'Câu hỏi';
$string['label'] = 'Nhãn';
$string['labelcontents'] = 'Nội dung';
$string['mapcourseinfo'] = 'Đây là phản hồi toàn trang mà có sẵn cho tất cả các khóa học sử dụng khối phản hồi. Tuy nhiên, bạn có thể giới hạn các khóa học mà nó sẽ xuất hiện bằng cách ánh xạ chúng. Tìm kiếm khóa học và ánh xạ nó đến phản hồi này.';
$string['mapcoursenone'] = 'Không có khóa học nào được ánh xạ. Phản hồi có sẵn cho tất cả các khóa học';
$string['mapcourse'] = 'Ánh xạ phản hồi tới các khóa học';
$string['mapcourse_help'] = 'Theo mặc định, các biểu mẫu phản hồi được tạo trên trang chủ của bạn có sẵn trên toàn trang web
và sẽ xuất hiện trong tất cả các khóa học sử dụng khối phản hồi. Bạn có thể buộc biểu mẫu phản hồi xuất hiện bằng cách làm cho nó trở thành một khối dính hoặc giới hạn các khóa học mà một biểu mẫu phản hồi sẽ xuất hiện bằng cách ánh xạ nó tới các khóa học cụ thể.';
$string['mapcourses'] = 'Ánh xạ phản hồi tới các khóa học';
$string['mappedcourses'] = 'Các khóa học đã được ánh xạ';
$string['mappingchanged'] = 'Ánh xạ khóa học đã thay đổi';
$string['minimal'] = 'Tối thiểu';
$string['maximal'] = 'Tối đa';
$string['messageprovider:message'] = 'Nhắc nhở phản hồi';
$string['messageprovider:submission'] = 'Thông báo phản hồi';
$string['mode'] = 'Chế độ';
$string['modulename'] = 'Phản hồi';
$string['modulename_help'] = 'Hoạt động phản hồi cho phép giáo viên tạo khảo sát tùy chỉnh để thu thập phản hồi từ người tham gia bằng cách sử dụng nhiều loại câu hỏi bao gồm lựa chọn nhiều, có/không hoặc nhập văn bản.

Các phản hồi có thể ẩn danh nếu muốn, và kết quả có thể được hiển thị cho tất cả người tham gia hoặc chỉ giáo viên. Bất kỳ hoạt động phản hồi nào trên trang chủ cũng có thể được hoàn thành bởi người dùng không đăng nhập.

Các hoạt động phản hồi có thể được sử dụng

* Để đánh giá khóa học, giúp cải thiện nội dung cho những người tham gia sau
* Để cho phép người tham gia đăng ký các mô-đun khóa học, sự kiện, v.v.
* Đối với các cuộc khảo sát khách về lựa chọn khóa học, chính sách trường học, v.v.
* Đối với các cuộc khảo sát chống bắt nạt trong đó học sinh có thể báo cáo các sự cố một cách ẩn danh';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'Phản hồi';
$string['move_item'] = 'Di chuyển câu hỏi này';
$string['multichoice'] = 'Lựa chọn nhiều';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Lựa chọn nhiều (được đánh giá)';
$string['multichoicetype'] = 'Loại lựa chọn nhiều';
$string['multichoice_values'] = 'Các giá trị lựa chọn nhiều';
$string['multiplesubmit'] = 'Cho phép gửi nhiều lần';
$string['multiplesubmit_help'] = 'Nếu được bật cho các khảo sát ẩn danh, người dùng có thể gửi phản hồi một số lần không giới hạn.';
$string['name'] = 'Tên';
$string['name_required'] = 'Cần tên';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Trang tiếp theo';
$string['no_handler'] = 'Không có bộ xử lý hành động cho';
$string['no_itemlabel'] = 'Không có nhãn';
$string['no_itemname'] = 'Không có tên mục';
$string['no_items_available_yet'] = 'Chưa có câu hỏi nào được thiết lập';
$string['non_anonymous'] = 'Tên người dùng sẽ được ghi lại và hiển thị với câu trả lời';
$string['non_anonymous_entries'] = 'Mục không ẩn danh ({$a})';
$string['non_respondents_students'] = 'Sinh viên không phản hồi ({$a})';
$string['not_completed_yet'] = 'Chưa hoàn thành';
$string['not_started'] = 'Chưa bắt đầu';
$string['no_templates_available_yet'] = 'Chưa có mẫu nào';
$string['not_selected'] = 'Chưa chọn';
$string['numberoutofrange'] = 'Số ngoài phạm vi';
$string['numeric'] = 'Câu trả lời số';
$string['numeric_range_from'] = 'Phạm vi từ';
$string['numeric_range_to'] = 'Phạm vi đến';
$string['of'] = 'của';
$string['oldvaluespreserved'] = 'Tất cả các câu hỏi cũ và các giá trị được gán sẽ được giữ nguyên';
$string['oldvalueswillbedeleted'] = 'Các câu hỏi hiện tại và tất cả các phản hồi sẽ bị xóa.';
$string['only_one_captcha_allowed'] = 'Chỉ một captcha được phép trong một phản hồi';
$string['openafterclose'] = 'Bạn đã chỉ định ngày mở sau ngày đóng';
$string['overview'] = 'Tổng quan';
$string['page'] = 'Trang';
$string['page-mod-feedback-x'] = 'Bất kỳ trang module phản hồi nào';
$string['page_after_submit'] = 'Tin nhắn hoàn thành';
$string['pagebreak'] = 'Ngắt trang';
$string['pluginadministration'] = 'Quản trị phản hồi';
$string['pluginname'] = 'Phản hồi';
$string['position'] = 'Vị trí';
$string['previous_page'] = 'Trang trước';
$string['previewquestions'] = 'Xem trước câu hỏi';
$string['privacy:metadata:completed'] = 'Bản ghi các bài nộp cho phản hồi';
$string['privacy:metadata:completed:anonymousresponse'] = 'Phản hồi có được sử dụng ẩn danh hay không.';
$string['privacy:metadata:completed:timemodified'] = 'Thời gian khi bài nộp được chỉnh sửa lần cuối.';
$string['privacy:metadata:completed:userid'] = 'ID của người dùng đã hoàn thành hoạt động phản hồi.';
$string['privacy:metadata:completedtmp'] = 'Bản ghi các bài nộp đang thực hiện.';
$string['privacy:metadata:value'] = 'Bản ghi câu trả lời cho một câu hỏi.';
$string['privacy:metadata:value:value'] = 'Câu trả lời đã chọn.';
$string['privacy:metadata:valuetmp'] = 'Bản ghi câu trả lời cho một câu hỏi trong một bài nộp đang thực hiện.';
$string['public'] = 'Công khai';
$string['question'] = 'Câu hỏi';
$string['questionandsubmission'] = 'Cài đặt câu hỏi và nộp bài';
$string['questions'] = 'Câu hỏi';
$string['questionslimited'] = 'Chỉ hiển thị {$a} câu hỏi đầu tiên, xem câu trả lời riêng lẻ hoặc tải xuống dữ liệu bảng để xem tất cả.';
$string['radio'] = 'Lựa chọn nhiều - một câu trả lời';
$string['radio_values'] = 'Câu trả lời';
$string['ready_feedbacks'] = 'Phản hồi sẵn sàng';
$string['required'] = 'Bắt buộc';
$string['resetting_data'] = 'Đặt lại phản hồi';
$string['resetting_feedbacks'] = 'Đặt lại phản hồi';
$string['response_nr'] = 'Số phản hồi';
$string['responses'] = 'Phản hồi';
$string['responsetime'] = 'Thời gian phản hồi';
$string['save_as_new_item'] = 'Lưu làm câu hỏi mới';
$string['save_as_new_template'] = 'Lưu làm mẫu mới';
$string['save_entries'] = 'Nộp câu trả lời của bạn';
$string['save_item'] = 'Lưu câu hỏi';
$string['saving_failed'] = 'Lưu thất bại';
$string['search:activity'] = 'Phản hồi - thông tin hoạt động';
$string['search_course'] = 'Tìm kiếm khóa học';
$string['searchcourses'] = 'Tìm kiếm khóa học';
$string['searchcourses_help'] = 'Tìm kiếm mã hoặc tên của khóa học mà bạn muốn liên kết với phản hồi này.';
$string['selected_dump'] = 'Các chỉ số đã chọn của biến $SESSION được đổ ra dưới đây:';
$string['send'] = 'Gửi';
$string['send_message'] = 'Gửi thông báo';
$string['show_all'] = 'Hiển thị tất cả';
$string['show_analysepage_after_submit'] = 'Hiển thị trang phân tích';
$string['show_entries'] = 'Hiển thị phản hồi';
$string['show_entry'] = 'Hiển thị phản hồi';
$string['show_nonrespondents'] = 'Hiển thị những người không phản hồi';
$string['site_after_submit'] = 'Trang sau khi nộp';
$string['sort_by_course'] = 'Sắp xếp theo khóa học';
$string['started'] = 'Đã bắt đầu';
$string['startedon'] = 'Đã bắt đầu vào {$a}';
$string['subject'] = 'Chủ đề';
$string['switch_item_to_not_required'] = 'Đặt thành không bắt buộc';
$string['switch_item_to_required'] = 'Đặt thành bắt buộc';
$string['template'] = 'Mẫu';
$string['templates'] = 'Mẫu';
$string['template_deleted'] = 'Mẫu đã bị xóa';
$string['template_saved'] = 'Mẫu đã được lưu';
$string['textarea'] = 'Câu trả lời văn bản dài';
$string['textarea_height'] = 'Số dòng';
$string['textarea_width'] = 'Chiều rộng';
$string['textfield'] = 'Câu trả lời văn bản ngắn';
$string['textfield_maxlength'] = 'Số ký tự tối đa được chấp nhận';
$string['textfield_size'] = 'Chiều rộng trường văn bản';
$string['there_are_no_settings_for_recaptcha'] = 'Không có cài đặt nào cho captcha';
$string['this_feedback_is_already_submitted'] = 'Bạn đã hoàn thành hoạt động này.';
$string['typemissing'] = 'Thiếu giá trị "loại"';
$string['update_item'] = 'Lưu thay đổi cho câu hỏi';
$string['url_for_continue'] = 'Liên kết đến hoạt động tiếp theo';
$string['url_for_continue_help'] = 'Sau khi gửi phản hồi, một nút tiếp tục sẽ được hiển thị, liên kết đến trang khóa học. Ngoài ra, nó có thể liên kết đến hoạt động tiếp theo nếu URL của hoạt động được nhập ở đây.';
$string['use_one_line_for_each_value'] = 'Sử dụng một dòng cho mỗi câu trả lời!';
$string['use_this_template'] = 'Sử dụng mẫu này';
$string['using_templates'] = 'Sử dụng một mẫu';
$string['vertical'] = 'Dọc';
$string['whatfor'] = 'Bạn muốn làm gì?';
