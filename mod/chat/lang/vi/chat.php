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
 * Strings for component 'chat', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   mod_chat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['activityoverview'] = 'Bạn có các phiên trò chuyện sắp tới';
$string['ajax'] = 'Phiên bản sử dụng AJAX';
$string['autoscroll'] = 'Tự động cuộn';
$string['beep'] = 'Bíp';
$string['bubble'] = 'Bong bóng';
$string['cantlogin'] = 'Không thể đăng nhập vào phòng trò chuyện!!';
$string['composemessage'] = 'Soạn tin nhắn';
$string['configmethod'] = 'Phương pháp trò chuyện AJAX cung cấp giao diện trò chuyện dựa trên AJAX thường xuyên liên hệ với máy chủ để cập nhật. Phương pháp trò chuyện thông thường liên quan đến việc các khách hàng thường xuyên liên hệ với máy chủ để cập nhật. Không cần cấu hình và hoạt động mọi nơi, nhưng có thể tạo ra tải lớn trên máy chủ nếu nhiều người dùng đang trò chuyện. Sử dụng daemon máy chủ yêu cầu quyền truy cập shell vào Unix, nhưng kết quả là môi trường trò chuyện nhanh chóng và có thể mở rộng.';
$string['confignormalupdatemode'] = 'Cập nhật phòng trò chuyện thường được phục vụ hiệu quả bằng cách sử dụng tính năng <em>Keep-Alive</em> của HTTP 1.1, nhưng điều này vẫn khá nặng nề cho máy chủ. Một phương pháp tiên tiến hơn là sử dụng chiến lược <em>Stream</em> để cung cấp các cập nhật cho người dùng. Sử dụng <em>Stream</em> mở rộng tốt hơn nhiều (tương tự như phương pháp chatd) nhưng có thể không được máy chủ của bạn hỗ trợ.';
$string['configoldping'] = 'Thời gian tối đa có thể trôi qua trước khi chúng ta phát hiện một người dùng đã ngắt kết nối (tính bằng giây) là bao nhiêu? Đây chỉ là giới hạn trên, vì thông thường các lần ngắt kết nối được phát hiện rất nhanh. Các giá trị thấp hơn sẽ yêu cầu nhiều hơn từ máy chủ của bạn. Nếu bạn đang sử dụng phương pháp thông thường, <strong>không bao giờ</strong> đặt giá trị này thấp hơn 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Tần suất phòng trò chuyện nên được làm mới là bao nhiêu? (tính bằng giây). Đặt giá trị này thấp sẽ làm phòng trò chuyện nhanh hơn, nhưng có thể đặt tải cao hơn lên máy chủ web của bạn khi nhiều người đang trò chuyện. Nếu bạn đang sử dụng cập nhật <em>Stream</em>, bạn có thể chọn tần suất làm mới cao hơn -- thử với 2.';
$string['configrefreshuserlist'] = 'Tần suất danh sách người dùng nên được làm mới là bao nhiêu? (tính bằng giây)';
$string['configserverhost'] = 'Tên máy chủ của máy tính nơi daemon máy chủ được đặt';
$string['configserverip'] = 'Địa chỉ IP số tương ứng với tên máy chủ trên';
$string['configservermax'] = 'Số lượng khách hàng tối đa cho phép';
$string['configserverport'] = 'Cổng sử dụng trên máy chủ cho daemon';
$string['compact'] = 'Gọn nhẹ';
$string['coursetheme'] = 'Chủ đề khóa học';
$string['crontask'] = 'Xử lý nền cho mô-đun trò chuyện';
$string['currentchats'] = 'Phiên trò chuyện đang hoạt động';
$string['currentusers'] = 'Người dùng hiện tại';
$string['deletesession'] = 'Xóa phiên này';
$string['deletesessionsure'] = 'Bạn có chắc chắn muốn xóa phiên này không?';
$string['donotusechattime'] = 'Không công bố bất kỳ thời gian trò chuyện nào';
$string['enterchat'] = 'Vào phòng trò chuyện';
$string['errornousers'] = 'Không thể tìm thấy người dùng nào!';
$string['explaingeneralconfig'] = 'Các thiết lập này được sử dụng <strong>luôn luôn</strong>';
$string['explainmethoddaemon'] = 'Các thiết lập này chỉ có hiệu lực nếu phương pháp \'Daemon máy chủ trò chuyện\' được chọn làm phương pháp trò chuyện.';
$string['explainmethodnormal'] = 'Các thiết lập này chỉ có hiệu lực nếu phương pháp Thông thường được chọn làm phương pháp trò chuyện.';
$string['generalconfig'] = 'Cấu hình chung';
$string['chat:addinstance'] = 'Thêm một cuộc trò chuyện mới';
$string['chat:deletelog'] = 'Xóa nhật ký trò chuyện';
$string['chat:exportparticipatedsession'] = 'Xuất phiên trò chuyện mà bạn đã tham gia';
$string['chat:exportsession'] = 'Xuất bất kỳ phiên trò chuyện nào';
$string['chat:chat'] = 'Truy cập phòng trò chuyện';
$string['chatintro'] = 'Mô tả';
$string['chatname'] = 'Tên phòng trò chuyện này';
$string['chat:readlog'] = 'Xem nhật ký trò chuyện';
$string['chatreport'] = 'Các phiên trò chuyện';
$string['chat:talk'] = 'Nói chuyện trong phòng trò chuyện';
$string['chattime'] = 'Thời gian trò chuyện tiếp theo';
$string['nextchattime'] = 'Thời gian trò chuyện tiếp theo:';
$string['chat:view'] = 'Xem hoạt động trò chuyện';
$string['entermessage'] = "Nhập tin nhắn của bạn";
$string['eventmessagesent'] = 'Tin nhắn đã được gửi';
$string['eventsessionsviewed'] = 'Các phiên đã được xem';
$string['idle'] = 'Không hoạt động';
$string['indicator:cognitivedepth'] = 'Chiều sâu nhận thức trò chuyện';
$string['indicator:cognitivedepth_help'] = 'Chỉ báo này dựa trên chiều sâu nhận thức đạt được bởi sinh viên trong một hoạt động Trò chuyện.';
$string['indicator:cognitivedepthdef'] = 'Chiều sâu nhận thức trò chuyện';
$string['indicator:cognitivedepthdef_help'] = 'Người tham gia đã đạt được phần trăm của mức độ tham gia nhận thức được cung cấp bởi các hoạt động Trò chuyện trong khoảng thời gian phân tích này (Các cấp độ = Không xem, Xem, Gửi, Xem phản hồi, Bình luận về phản hồi)';
$string['indicator:cognitivedepthdef_link'] = 'Chỉ báo_analytics_học tập#Chiều_sâu_nhận_thức';
$string['indicator:socialbreadth'] = 'Chiều rộng xã hội trò chuyện';
$string['indicator:socialbreadth_help'] = 'Chỉ báo này dựa trên chiều rộng xã hội đạt được bởi sinh viên trong một hoạt động Trò chuyện.';
$string['indicator:socialbreadthdef'] = 'Chiều rộng xã hội trò chuyện';
$string['indicator:socialbreadthdef_help'] = 'Người tham gia đã đạt được phần trăm của mức độ tham gia xã hội được cung cấp bởi các hoạt động Trò chuyện trong khoảng thời gian phân tích này (Các cấp độ = Không tham gia, Người tham gia một mình, Người tham gia với người khác)';
$string['indicator:socialbreadthdef_link'] = 'Chỉ báo_analytics_học tập#Chiều_rộng_xã_hội';
$string['inputarea'] = 'Khu vực nhập';
$string['invalidid'] = 'Không thể tìm thấy phòng trò chuyện đó!';
$string['list_all_sessions'] = 'Liệt kê tất cả các phiên.';
$string['list_complete_sessions'] = 'Chỉ liệt kê các phiên hoàn thành.';
$string['listing_all_sessions'] = 'Đang liệt kê tất cả các phiên.';
$string['messagebeepseveryone'] = '{$a} bíp mọi người!';
$string['messagebeepsyou'] = '{$a} vừa bíp bạn!';
$string['messageenter'] = '{$a} vừa vào phòng trò chuyện này';
$string['messageexit'] = '{$a} đã rời khỏi phòng trò chuyện này';
$string['messages'] = 'Tin nhắn';
$string['messageyoubeep'] = 'Bạn đã bíp {$a}';
$string['method'] = 'Phương pháp trò chuyện';
$string['methoddaemon'] = 'Daemon máy chủ trò chuyện';
$string['methodnormal'] = 'Thông thường';
$string['methodajax'] = 'AJAX';
$string['modulename'] = 'Trò chuyện';
$string['modulename_help'] = 'Mô-đun hoạt động trò chuyện cho phép người tham gia có các cuộc thảo luận đồng bộ, dựa trên văn bản, thời gian thực.

Trò chuyện có thể là một hoạt động một lần hoặc có thể lặp lại vào cùng một thời gian mỗi ngày hoặc mỗi tuần. Các phiên trò chuyện được lưu lại và có thể được làm cho mọi người xem hoặc giới hạn người dùng có khả năng xem nhật ký phiên trò chuyện.

Trò chuyện đặc biệt hữu ích khi nhóm trò chuyện không thể gặp mặt trực tiếp, chẳng hạn như

* Các cuộc họp thường xuyên của học sinh tham gia các khóa học trực tuyến để cho phép họ chia sẻ kinh nghiệm với những người khác trong cùng khóa học nhưng ở địa điểm khác
* Một học sinh tạm thời không thể tham gia trực tiếp trò chuyện với giáo viên để bắt kịp công việc
* Học sinh đi làm thực tập cùng nhau thảo luận về kinh nghiệm của họ với nhau và với giáo viên của họ
* Trẻ nhỏ sử dụng trò chuyện tại nhà vào buổi tối như một sự giới thiệu có kiểm soát (được giám sát) về thế giới mạng xã hội
* Phiên hỏi đáp với một diễn giả được mời ở địa điểm khác
* Các phiên giúp học sinh chuẩn bị cho các bài kiểm tra nơi giáo viên hoặc học sinh khác sẽ đưa ra các câu hỏi mẫu';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Các cuộc trò chuyện';
$string['neverdeletemessages'] = 'Không bao giờ xóa tin nhắn';
$string['no_complete_sessions_found'] = 'Không tìm thấy phiên hoàn thành nào.';
$string['noguests'] = 'Trò chuyện không mở cho khách';
$string['nochat'] = 'Không tìm thấy cuộc trò chuyện';
$string['nomessages'] = 'Chưa có tin nhắn nào';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Không có phiên đã lên lịch';
$string['notallowenter'] = 'Bạn không được phép vào phòng trò chuyện.';
$string['notlogged'] = 'Bạn chưa đăng nhập!';
$string['nopermissiontoseethechatlog'] = 'Bạn không có quyền xem nhật ký trò chuyện.';
$string['oldping'] = 'Thời gian chờ ngắt kết nối';
$string['page-mod-chat-x'] = 'Bất kỳ trang mô-đun trò chuyện nào';
$string['pastchats'] = 'Các phiên trò chuyện trước đây';
$string['pastsessions'] = 'Các phiên trước đây';
$string['pluginadministration'] = 'Quản trị trò chuyện';
$string['pluginname'] = 'Trò chuyện';
$string['privacy:metadata:chat_messages_current'] = 'Phiên trò chuyện hiện tại. Dữ liệu này là tạm thời và sẽ bị xóa sau khi phiên trò chuyện bị xóa';
$string['privacy:metadata:chat_users'] = 'Giữ dấu vết của những người dùng nào ở trong phòng trò chuyện nào';
$string['privacy:metadata:chat_users:firstping'] = 'Thời gian truy cập đầu tiên vào phòng trò chuyện';
$string['privacy:metadata:chat_users:ip'] = 'IP của người dùng';
$string['privacy:metadata:chat_users:lang'] = 'Ngôn ngữ của người dùng';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Thời gian của tin nhắn cuối cùng trong phòng trò chuyện này';
$string['privacy:metadata:chat_users:lastping'] = 'Thời gian truy cập cuối cùng vào phòng trò chuyện';
$string['privacy:metadata:chat_users:userid'] = 'ID người dùng';
$string['privacy:metadata:chat_users:version'] = 'Cách người dùng truy cập vào trò chuyện (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Một bản ghi các tin nhắn được gửi trong phiên trò chuyện';
$string['privacy:metadata:messages:issystem'] = 'Tin nhắn có phải là tin nhắn hệ thống tạo ra hay không';
$string['privacy:metadata:messages:message'] = 'Tin nhắn';
$string['privacy:metadata:messages:timestamp'] = 'Thời gian tin nhắn được gửi';
$string['privacy:metadata:messages:userid'] = 'ID của người gửi tin nhắn';
$string['refreshroom'] = 'Làm mới phòng';
$string['refreshuserlist'] = 'Làm mới danh sách người dùng';
$string['removemessages'] = 'Xóa tất cả tin nhắn';
$string['repeatdaily'] = 'Vào cùng giờ mỗi ngày';
$string['repeatnone'] = 'Không lặp lại - chỉ công bố thời gian đã chỉ định';
$string['repeattimes'] = 'Lặp lại/công bố thời gian phiên';
$string['repeatweekly'] = 'Vào cùng giờ mỗi tuần';
$string['saidto'] = 'nói với';
$string['savemessages'] = 'Lưu các phiên trước đây';
$string['seesession'] = 'Xem phiên này';
$string['search:activity'] = 'Trò chuyện - thông tin hoạt động';
$string['send'] = 'Gửi';
$string['sending'] = 'Đang gửi';
$string['serverhost'] = 'Tên máy chủ';
$string['serverip'] = 'IP máy chủ';
$string['servermax'] = 'Người dùng tối đa';
$string['serverport'] = 'Cổng máy chủ';
$string['sessions'] = 'Các phiên trò chuyện';
$string['sessionstartsin'] = 'Phiên trò chuyện tiếp theo sẽ bắt đầu sau {$a}.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Mọi người có thể xem các phiên trước đây';
$string['studentseereports_help'] = 'Nếu đặt là Không, chỉ người dùng có khả năng mod/chat:readlog mới có thể xem nhật ký trò chuyện';
$string['talk'] = 'Nói chuyện';
$string['updatemethod'] = 'Phương pháp cập nhật';
$string['updaterate'] = 'Tần suất cập nhật:';
$string['userlist'] = 'Danh sách người dùng';
$string['usingchat'] = 'Sử dụng trò chuyện';
$string['usingchat_help'] = 'Mô-đun trò chuyện chứa một số tính năng để làm cho việc trò chuyện trở nên thú vị hơn.

* Smilies - Bất kỳ mặt cười nào (emoticons) mà bạn có thể gõ ở nơi khác trong Moodle cũng có thể được gõ ở đây, ví dụ :-)
* Liên kết - Địa chỉ trang web sẽ tự động chuyển thành liên kết
* Emoting - Bạn có thể bắt đầu một dòng bằng "/me" hoặc ":" để biểu lộ cảm xúc, ví dụ nếu tên bạn là Kim và bạn gõ ":laughs!" hoặc "/me laughs!" thì mọi người sẽ thấy "Kim laughs!"
* Bíp - Bạn có thể gửi âm thanh cho người tham gia khác bằng cách nhấp vào liên kết "beep" bên cạnh tên của họ. Một lối tắt hữu ích để bíp tất cả mọi người trong phòng trò chuyện cùng một lúc là gõ "beep all".
* HTML - Nếu bạn biết một số mã HTML, bạn có thể sử dụng nó trong văn bản của bạn để làm những việc như chèn hình ảnh, phát âm thanh hoặc tạo văn bản màu khác nhau';
$string['viewreport'] = 'Các phiên trước đây';

// Bị ngừng hỗ trợ từ Moodle 4.0.
$string['nextsession'] = 'Phiên đã lên lịch tiếp theo';
