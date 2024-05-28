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
 * Strings for the quizaccess_seb plugin.
 *
 * @package    quizaccess_seb
 * @author     Luca Bösch <luca.boesch@bfh.ch>
 * @author     Andrew Madden <andrewmadden@catalyst-au.net>
 * @author     Dmitrii Metelkin <dmitriim@catalyst-au.net>
 * @copyright  2019 Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['addtemplate'] = 'Thêm mẫu mới';
$string['allowedbrowserkeysdistinct'] = 'Các khóa phải khác nhau.';
$string['allowedbrowserkeyssyntax'] = 'Một khóa nên là một chuỗi hex 64 ký tự.';
$string['cachedef_config'] = 'Bộ nhớ cache cấu hình SEB';
$string['cachedef_configkey'] = 'Bộ nhớ cache khóa cấu hình SEB';
$string['cachedef_quizsettings'] = 'Bộ nhớ cache cấu hình bài kiểm tra SEB';
$string['cantdelete'] = 'Không thể xóa mẫu vì đã được sử dụng cho một hoặc nhiều bài kiểm tra.';
$string['cantedit'] = 'Không thể chỉnh sửa mẫu vì đã được sử dụng cho một hoặc nhiều bài kiểm tra.';
$string['checkingaccess'] = 'Kiểm tra quyền truy cập vào Safe Exam Browser...';
$string['clientrequiresseb'] = 'Bài kiểm tra này đã được cấu hình để sử dụng Safe Exam Browser với cấu hình khách.';
$string['confirmtemplateremovalquestion'] = 'Bạn có chắc chắn muốn xóa mẫu này không?';
$string['confirmtemplateremovaltitle'] = 'Xác nhận xóa mẫu?';
$string['conflictingsettings'] = 'Bạn không có quyền cập nhật các thiết lập Safe Exam Browser hiện có.';
$string['content'] = 'Mẫu';
$string['description'] = 'Mô tả';
$string['disabledsettings'] = 'Thiết lập bị vô hiệu.';
$string['disabledsettings_help'] = 'Các thiết lập bài kiểm tra Safe Exam Browser không thể thay đổi nếu bài kiểm tra đã được thử. Để thay đổi một thiết lập, tất cả các lần thử bài kiểm tra phải được xóa trước.';
$string['downloadsebconfig'] = 'Tải xuống tệp cấu hình SEB';
$string['duplicatetemplate'] = 'Một mẫu có cùng tên đã tồn tại.';
$string['edittemplate'] = 'Chỉnh sửa mẫu';
$string['enabled'] = 'Đã kích hoạt';
$string['error:ws:nokeyprovided'] = 'Ít nhất một khóa Safe Exam Browser phải được cung cấp.';
$string['error:ws:quiznotexists'] = 'Không tìm thấy bài kiểm tra phù hợp với ID của mô-đun khóa học: {$a}';
$string['event:accessprevented'] = "Truy cập vào bài kiểm tra đã bị ngăn chặn";
$string['event:templatecreated'] = 'Mẫu SEB đã được tạo';
$string['event:templatedeleted'] = 'Mẫu SEB đã bị xóa';
$string['event:templatedisabled'] = 'Mẫu SEB đã bị vô hiệu hóa';
$string['event:templateenabled'] = 'Mẫu SEB đã được kích hoạt';
$string['event:templateupdated'] = 'Mẫu SEB đã được cập nhật';
$string['exitsebbutton'] = 'Thoát khỏi Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Tải lên tệp cấu hình Safe Exam Browser';
$string['filemanager_sebconfigfile_help'] = 'Vui lòng tải lên tệp cấu hình Safe Exam Browser của riêng bạn cho bài kiểm tra này.';
$string['filenotpresent'] = 'Vui lòng tải lên một tệp cấu hình SEB.';
$string['fileparsefailed'] = 'Không thể lưu tệp đã tải lên dưới dạng tệp cấu hình SEB.';
$string['httplinkbutton'] = 'Tải cấu hình';
$string['invalid_browser_key'] = "Khóa trình duyệt SEB không hợp lệ";
$string['invalid_config_key'] = "Khóa cấu hình SEB không hợp lệ";
$string['invalidkeys'] = 'Khóa Safe Exam Browser không thể xác nhận. Kiểm tra xem bạn có đang sử dụng Safe Exam Browser với tệp cấu hình đúng không.';
$string['invalidtemplate'] = "Mẫu cấu hình SEB không hợp lệ";
$string['manage_templates'] = 'Mẫu Safe Exam Browser';
$string['managetemplates'] = 'Quản lý mẫu';
$string['missingrequiredsettings'] = 'Thiết lập cấu hình thiếu một số giá trị bắt buộc.';
$string['name'] = 'Tên';
$string['newtemplate'] = 'Mẫu mới';
$string['noconfigfilefound'] = 'Không tìm thấy tệp cấu hình SEB đã tải lên cho bài kiểm tra với cmid: {$a}';
$string['noconfigfound'] = 'Không tìm thấy cấu hình SEB cho bài kiểm tra với cmid: {$a}';
$string['not_seb'] = 'Không sử dụng Safe Exam Browser.';
$string['notemplate'] = 'Không có mẫu';
$string['passwordnotset'] = 'Các thiết lập hiện tại yêu cầu các bài kiểm tra sử dụng Safe Exam Browser phải có mật khẩu bài kiểm tra được đặt.';
$string['pluginname'] = 'Quy tắc truy cập Safe Exam Browser';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Cấu hình Safe Exam Browser cho một bài kiểm tra. Điều này bao gồm ID của người dùng cuối cùng tạo hoặc sửa đổi cài đặt.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'ID của bài kiểm tra các thiết lập tồn tại cho.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Thời gian Unix mà các thiết lập đã được tạo.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Thời gian Unix mà các thiết lập cuối cùng được sửa đổi.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'ID của người dùng cuối cùng tạo hoặc sửa đổi các thiết lập.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Cấu hình mẫu Safe Exam Browser. Điều này bao gồm ID của người dùng cuối cùng tạo hoặc sửa đổi mẫu.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Thời gian Unix mà mẫu đã được tạo.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Thời gian Unix mà mẫu cuối cùng được sửa đổi.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'ID của người dùng cuối cùng tạo hoặc sửa đổi mẫu.';
$string['quizsettings'] = 'Cài đặt bài kiểm tra';
$string['restoredfrom'] = '{$a->name} (khôi phục qua cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = 'Bỏ qua yêu cầu xem bài kiểm tra trong Safe Exam Browser.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Thay đổi thiết lập bài kiểm tra SEB: Chọn tệp cấu hình SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Thay đổi thiết lập bài kiểm tra SEB: Kích hoạt lọc URL';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Thay đổi thiết lập bài kiểm tra SEB: Khóa trình duyệt kiểm tra cho phép';
$string['seb:manage_seb_allowreloadinexam'] = 'Thay đổi thiết lập bài kiểm tra SEB: Cho phép tải lại';
$string['seb:manage_seb_allowspellchecking'] = 'Thay đổi thiết lập bài kiểm tra SEB: Cho phép kiểm tra chính tả';
$string['seb:manage_seb_allowuserquitseb'] = 'Thay đổi thiết lập bài kiểm tra SEB: Cho phép thoát';
$string['seb:manage_seb_enableaudiocontrol'] = 'Thay đổi thiết lập bài kiểm tra SEB: Kích hoạt điều khiển âm thanh';
$string['seb:manage_seb_expressionsallowed'] = 'Thay đổi thiết lập bài kiểm tra SEB: Biểu thức đơn giản được phép';
$string['seb:manage_seb_expressionsblocked'] = 'Thay đổi thiết lập bài kiểm tra SEB: Biểu thức đơn giản bị chặn';
$string['seb:manage_seb_filterembeddedcontent'] = 'Thay đổi thiết lập bài kiểm tra SEB: Lọc cả nội dung nhúng';
$string['seb:manage_seb_linkquitseb'] = 'Thay đổi thiết lập bài kiểm tra SEB: Liên kết thoát SEB';
$string['seb:manage_seb_muteonstartup'] = 'Thay đổi thiết lập bài kiểm tra SEB: Tắt tiếng khi khởi động';
$string['seb:manage_seb_quitpassword'] = 'Thay đổi thiết lập bài kiểm tra SEB: Mật khẩu thoát';
$string['seb:manage_seb_regexallowed'] = 'Thay đổi thiết lập bài kiểm tra SEB: Biểu thức chính quy được phép';
$string['seb:manage_seb_regexblocked'] = 'Thay đổi thiết lập bài kiểm tra SEB: Biểu thức chính quy bị chặn';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Thay đổi thiết lập bài kiểm tra SEB: Yêu cầu Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = 'Thay đổi thiết lập bài kiểm tra SEB: Hiển thị bố cục bàn phím';
$string['seb:manage_seb_showreloadbutton'] = 'Thay đổi thiết lập bài kiểm tra SEB: Hiển thị nút tải lại';
$string['seb:manage_seb_showsebtaskbar'] = 'Thay đổi thiết lập bài kiểm tra SEB: Hiển thị thanh công cụ';
$string['seb:manage_seb_showtime'] = 'Thay đổi thiết lập bài kiểm tra SEB: Hiển thị thời gian';
$string['seb:manage_seb_showwificontrol'] = 'Thay đổi thiết lập bài kiểm tra SEB: Hiển thị điều khiển Wi-Fi';
$string['seb:manage_seb_showsebdownloadlink'] = 'Thay đổi thiết lập bài kiểm tra SEB: Hiển thị liên kết tải xuống';
$string['seb:manage_seb_templateid'] = 'Thay đổi thiết lập bài kiểm tra SEB: Chọn mẫu SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Thay đổi thiết lập bài kiểm tra SEB: Xác nhận khi thoát';
$string['seb:managetemplates'] = 'Quản lý mẫu cấu hình SEB';
$string['seb_activateurlfiltering'] = 'Kích hoạt lọc URL';
$string['seb_activateurlfiltering_help'] = 'Nếu được kích hoạt, URL sẽ được lọc khi tải các trang web. Tập hợp bộ lọc phải được xác định dưới đây.';
$string['seb_allowedbrowserexamkeys'] = 'Các khóa trình duyệt kiểm tra được phép';
$string['seb_allowedbrowserexamkeys_help'] = 'Trong trường này, bạn có thể nhập các khóa trình duyệt kiểm tra được phép cho các phiên bản của Safe Exam Browser được phép truy cập bài kiểm tra này. Nếu không có khóa nào được nhập, thì khóa trình duyệt kiểm tra sẽ không được kiểm tra.';
$string['seb_allowreloadinexam'] = 'Cho phép tải lại trong bài kiểm tra';
$string['seb_allowreloadinexam_help'] = 'Nếu được kích hoạt, tải lại trang được phép (nút tải lại trong thanh tác vụ SEB, thanh công cụ trình duyệt, menu trượt bên iOS, phím tắt bàn phím F5/cmd+R). Lưu ý rằng việc lưu trữ ngoại tuyến có thể bị hỏng nếu người dùng cố gắng tải lại trang mà không có kết nối internet.';
$string['seb_allowspellchecking'] = 'Cho phép kiểm tra chính tả';
$string['seb_allowspellchecking_help'] = 'Nếu được kích hoạt, kiểm tra chính tả trong trình duyệt SEB được phép.';
$string['seb_allowuserquitseb'] = 'Cho phép thoát khỏi SEB';
$string['seb_allowuserquitseb_help'] = 'Nếu được kích hoạt, người dùng có thể thoát khỏi SEB bằng cách sử dụng nút "Thoát" trong thanh tác vụ SEB hoặc bằng cách nhấn các phím Ctrl-Q hoặc bằng cách nhấp vào nút đóng của cửa sổ trình duyệt chính.';
$string['seb_enableaudiocontrol'] = 'Kích hoạt điều khiển âm thanh';
$string['seb_enableaudiocontrol_help'] = 'Nếu được kích hoạt, biểu tượng điều khiển âm thanh sẽ được hiển thị trong thanh tác vụ SEB.';
$string['seb_expressionsallowed'] = 'Biểu thức được phép';
$string['seb_expressionsallowed_help'] = 'Một trường văn bản chứa các biểu thức lọc được phép cho các URL được phép. Sử dụng ký tự đại diện \'\*\' là có thể. Các ví dụ về biểu thức: \'example.com\' hoặc \'example.com/stuff/\*\'. \'example.com\' phù hợp với \'example.com\', \'www.example.com\' và \'www.mail.example.com\'. \'example.com/stuff/\*\' phù hợp với tất cả các yêu cầu đến bất kỳ miền phụ của \'example.com\' có \'stuff\' là phần đầu tiên của đường dẫn.';
$string['seb_expressionsblocked'] = 'Biểu thức bị chặn';
$string['seb_expressionsblocked_help'] = 'Một trường văn bản chứa các biểu thức lọc cho các URL bị chặn. Sử dụng ký tự đại diện \'\*\' là có thể. Các ví dụ về biểu thức: \'example.com\' hoặc \'example.com/stuff/\*\'. \'example.com\' phù hợp với \'example.com\', \'www.example.com\' và \'www.mail.example.com\'. \'example.com/stuff/\*\' phù hợp với tất cả các yêu cầu đến bất kỳ miền phụ của \'example.com\' có \'stuff\' là phần đầu tiên của đường dẫn.';
$string['seb_filterembeddedcontent'] = 'Lọc cả nội dung nhúng';
$string['seb_filterembeddedcontent_help'] = 'Nếu được kích hoạt, các tài nguyên nhúng cũng sẽ được lọc bằng cách sử dụng tập hợp bộ lọc.';
$string['seb_help'] = 'Cài đặt bài kiểm tra để sử dụng Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Hiển thị nút Thoát khỏi Safe Exam Browser, được cấu hình với liên kết thoát này';
$string['seb_linkquitseb_help'] = 'Trong trường hợp này, nút Thoát sẽ được hiển thị trong thanh tác vụ SEB, giúp người dùng thoát khỏi SEB. Liên kết thoát này sẽ mở liên kết cụ thể.';
$string['seb_muteonstartup'] = 'Tắt âm thanh khi khởi động';
$string['seb_muteonstartup_help'] = 'Nếu được kích hoạt, âm thanh của máy tính sẽ được tắt khi SEB bắt đầu.';
$string['seb_quitpassword'] = 'Mật khẩu thoát';
$string['seb_quitpassword_help'] = 'Trường này cho phép bạn thiết lập một mật khẩu thoát khỏi SEB. Nếu được đặt, SEB sẽ yêu cầu mật khẩu này khi người dùng cố gắng thoát khỏi trình duyệt.';
$string['seb_regexallowed'] = 'Biểu thức chính quy được phép';
$string['seb_regexallowed_help'] = 'Một trường văn bản chứa các biểu thức chính quy lọc được phép cho các URL được phép. Sử dụng biểu thức chính quy theo cú pháp Perl.';
$string['seb_regexblocked'] = 'Biểu thức chính quy bị chặn';
$string['seb_regexblocked_help'] = 'Một trường văn bản chứa các biểu thức chính quy lọc cho các URL bị chặn. Sử dụng biểu thức chính quy theo cú pháp Perl.';
$string['seb_requiresafeexambrowser'] = 'Yêu cầu Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = 'Nếu được kích hoạt, người dùng sẽ chỉ có thể truy cập bài kiểm tra này thông qua Safe Exam Browser. Nếu SEB không khả dụng, người dùng sẽ không thể truy cập bài kiểm tra.';
$string['seb_showkeyboardlayout'] = 'Hiển thị bố cục bàn phím';
$string['seb_showkeyboardlayout_help'] = 'Nếu được kích hoạt, bố cục bàn phím sẽ được hiển thị cho người dùng.';
$string['seb_showreloadbutton'] = 'Hiển thị nút tải lại';
$string['seb_showreloadbutton_help'] = 'Nếu được kích hoạt, nút tải lại sẽ được hiển thị trong thanh tác vụ SEB, cho phép người dùng tải lại trang web.';
$string['seb_showsebdownloadlink'] = 'Hiển thị liên kết tải xuống SEB';
$string['seb_showsebdownloadlink_help'] = 'Nếu được kích hoạt, liên kết tải xuống SEB sẽ được hiển thị, cho phép người dùng tải xuống Safe Exam Browser.';
$string['seb_showsebtaskbar'] = 'Hiển thị thanh công cụ SEB';
$string['seb_showsebtaskbar_help'] = 'Nếu được kích hoạt, thanh công cụ SEB sẽ được hiển thị.';
$string['seb_showtime'] = 'Hiển thị thời gian';
$string['seb_showtime_help'] = 'Nếu được kích hoạt, thời gian sẽ được hiển thị ở góc phải dưới của SEB.';
$string['seb_showwificontrol'] = 'Hiển thị điều khiển Wi-Fi';
$string['seb_showwificontrol_help'] = 'Nếu được kích hoạt, điều khiển Wi-Fi sẽ được hiển thị.';
$string['seb_templateid'] = 'Mẫu Safe Exam Browser';
$string['seb_templateid_help'] = 'Chọn một mẫu SEB đã được cấu hình trước, hoặc chọn "Tùy chỉnh" để cấu hình một mẫu mới.';
$string['seb_userconfirmquit'] = 'Yêu cầu xác nhận khi thoát';
$string['seb_userconfirmquit_help'] = 'Nếu được kích hoạt, người dùng sẽ nhận được thông báo xác nhận khi cố gắng thoát khỏi SEB.';
$string['sebdownloadbutton'] = 'Tải về Trình duyệt An toàn cho Kỳ thi';
$string['sebkeysvalidationfailed'] = 'Lỗi xác nhận khóa SEB';
$string['seblinkbutton'] = 'Khởi chạy Trình duyệt An toàn cho Kỳ thi';
$string['sebrequired'] = "Bài kiểm tra này đã được cấu hình để học sinh chỉ có thể thử nghiệm bằng Trình duyệt An toàn cho Kỳ thi.";
$string['setting:autoreconfigureseb'] = 'Tự động cấu hình lại SEB';
$string['setting:autoreconfigureseb_desc'] = 'Nếu được kích hoạt, người dùng truy cập vào bài kiểm tra bằng Trình duyệt An toàn cho Kỳ thi sẽ bị buộc phải cấu hình lại Trình duyệt An toàn cho Kỳ thi của họ một cách tự động.';
$string['setting:displayblocksbeforestart'] = 'Hiển thị khối trước khi bắt đầu bài kiểm tra';
$string['setting:displayblocksbeforestart_desc'] = 'Nếu được kích hoạt, các khối sẽ được hiển thị trước khi người dùng thử bài kiểm tra.';
$string['setting:displayblockswhenfinished'] = 'Hiển thị khối sau khi hoàn thành bài kiểm tra';
$string['setting:displayblockswhenfinished_desc'] = 'Nếu được kích hoạt, các khối sẽ được hiển thị sau khi người dùng hoàn thành bài kiểm tra của họ.';
$string['setting:downloadlink'] = 'Liên kết tải về Trình duyệt An toàn cho Kỳ thi';
$string['setting:downloadlink_desc'] = 'URL để tải xuống ứng dụng Trình duyệt An toàn cho Kỳ thi.';
$string['setting:quizpasswordrequired'] = 'Yêu cầu mật khẩu bài kiểm tra';
$string['setting:quizpasswordrequired_desc'] = 'Nếu được kích hoạt, tất cả các bài kiểm tra yêu cầu sử dụng Trình duyệt An toàn cho Kỳ thi phải có một mật khẩu bài kiểm tra được đặt.';
$string['setting:showhttplink'] = 'Hiển thị liên kết http://';
$string['setting:showseblink'] = 'Hiển thị liên kết seb://';
$string['setting:showseblinks'] = 'Hiển thị liên kết cấu hình Trình duyệt An toàn cho Kỳ thi';
$string['setting:showseblinks_desc'] = 'Xác định liệu có hiển thị liên kết cho người dùng truy cập vào tệp cấu hình Trình duyệt An toàn cho Kỳ thi khi truy cập vào bài kiểm tra không. Lưu ý rằng các liên kết seb:// có thể không hoạt động trên mọi trình duyệt.';
$string['setting:supportedversions'] = 'Vui lòng lưu ý rằng các phiên bản tối thiểu sau của Trình duyệt An toàn cho Kỳ thi cần thiết để sử dụng tính năng khóa cấu hình: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Do có ít nhất một lần thử bài kiểm tra, các cài đặt Trình duyệt An toàn cho Kỳ thi không thể được cập nhật nữa.';
$string['unknown_reason'] = "Lý do không xác định";
$string['used'] = 'Đang sử dụng';
