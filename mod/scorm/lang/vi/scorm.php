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
 * Strings for component 'scorm', language 'en'
 *
 * @package   mod_scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['toc'] = 'TOC';
$string['navigation'] = 'Điều hướng';
$string['aicchacptimeout'] = 'Hết thời gian chờ AICC HACP';
$string['aicchacptimeout_desc'] = 'Thời gian tối đa tính bằng phút mà một phiên AICC HACP bên ngoài có thể mở';
$string['aicchacpkeepsessiondata'] = 'Dữ liệu phiên AICC HACP';
$string['aicchacpkeepsessiondata_desc'] = 'Thời gian tối đa tính bằng ngày để giữ dữ liệu phiên AICC HACP bên ngoài (cài đặt cao sẽ làm đầy bảng với dữ liệu cũ nhưng có thể hữu ích khi gỡ lỗi)';
$string['aiccuserid'] = 'Truyền ID người dùng số AICC';
$string['aiccuserid_desc'] = 'Tiêu chuẩn AICC đối với tên người dùng rất hạn chế so với Moodle, chỉ cho phép ký tự chữ và số, dấu gạch ngang và gạch dưới. Không được phép sử dụng dấu chấm, khoảng trắng và ký hiệu @. Nếu bật, số ID người dùng sẽ được truyền tới gói AICC thay vì tên người dùng.';
$string['activation'] = 'Kích hoạt';
$string['activityloading'] = 'Bạn sẽ được tự động chuyển hướng đến hoạt động trong';
$string['activityoverview'] = 'Bạn có các gói SCORM cần chú ý';
$string['activitypleasewait'] = 'Đang tải hoạt động, vui lòng đợi ...';
$string['adminsettings'] = 'Cài đặt quản trị';
$string['advanced'] = 'Tham số';
$string['aliasonly'] = 'Khi chọn tệp imsmanifest.xml từ kho lưu trữ, bạn phải sử dụng bí danh/lối tắt cho tệp này.';
$string['allowapidebug'] = 'Kích hoạt gỡ lỗi và truy vết API (đặt mặt nạ chụp với apidebugmask)';
$string['allowtypeexternal'] = 'Bật loại gói bên ngoài';
$string['allowtypeexternalaicc'] = 'Bật URL AICC trực tiếp';
$string['allowtypeexternalaicc_desc'] = 'Nếu bật, cho phép URL trực tiếp đến một gói AICC đơn giản';
$string['allowtypelocalsync'] = 'Bật loại gói đã tải xuống';
$string['allowtypeaicchacp'] = 'Bật AICC HACP bên ngoài';
$string['allowtypeaicchacp_desc'] = 'Nếu bật, cho phép liên lạc AICC HACP bên ngoài mà không yêu cầu đăng nhập người dùng cho các yêu cầu post từ gói AICC bên ngoài';
$string['apidebugmask'] = 'Mặt nạ chụp gỡ lỗi API - sử dụng regex đơn giản trên &lt;username&gt;:&lt;activityname&gt; ví dụ: admin:.* sẽ gỡ lỗi chỉ cho người dùng admin';
$string['areacontent'] = 'Tệp nội dung';
$string['areapackage'] = 'Tệp gói';
$string['asset'] = 'Tài sản';
$string['assetlaunched'] = 'Tài sản - Đã xem';
$string['attempt'] = 'Lần thử';
$string['attempts'] = 'Lần thử';
$string['attemptstatusall'] = 'Bảng điều khiển và trang vào';
$string['attemptstatusmy'] = 'Chỉ bảng điều khiển';
$string['attemptstatusentry'] = 'Chỉ trang vào';
$string['attemptsx'] = '{$a} lần thử';
$string['attemptsmanagement'] = 'Quản lý lần thử';
$string['attempt1'] = '1 lần thử';
$string['attr_error'] = 'Giá trị xấu cho thuộc tính ({$a->attr}) trong thẻ {$a->tag}.';
$string['autocommit'] = 'Tự động cam kết';
$string['autocommit_help'] = 'Nếu bật, dữ liệu SCORM sẽ được tự động lưu vào cơ sở dữ liệu. Hữu ích cho các đối tượng SCORM không lưu dữ liệu thường xuyên.';
$string['autocommitdesc'] = 'Tự động lưu dữ liệu SCORM nếu gói SCORM không lưu nó.';
$string['autocontinue'] = 'Tự động tiếp tục';
$string['autocontinue_help'] = 'Nếu bật, các đối tượng học tiếp theo sẽ được khởi động tự động, nếu không, nút Tiếp tục phải được sử dụng.';
$string['autocontinuedesc'] = 'Nếu bật, các đối tượng học tiếp theo sẽ được khởi động tự động, nếu không, nút Tiếp tục phải được sử dụng.';
$string['averageattempt'] = 'Số lần thử trung bình';
$string['badmanifest'] = 'Một số lỗi manifest: xem nhật ký lỗi';
$string['badimsmanifestlocation'] = 'Một tệp imsmanifest.xml đã được tìm thấy nhưng nó không nằm trong thư mục gốc của tệp zip của bạn, vui lòng đóng gói lại SCORM của bạn';
$string['badarchive'] = 'Bạn phải cung cấp một tệp zip hợp lệ';
$string['browse'] = 'Xem trước';
$string['browsed'] = 'Đã xem trước';
$string['browsemode'] = 'Chế độ xem trước';
$string['browserepository'] = 'Duyệt kho lưu trữ';
$string['cachedef_elements'] = 'Bộ nhớ đệm yếu tố';
$string['calculatedweight'] = 'Trọng số được tính toán';
$string['calendarend'] = '{$a} đóng';
$string['calendarstart'] = '{$a} mở';
$string['cannotaccess'] = 'Bạn không thể gọi script này theo cách đó';
$string['cannotfindsco'] = 'Không tìm thấy SCO';
$string['closebeforeopen'] = 'Bạn đã chỉ định ngày đóng trước ngày mở.';
$string['collapsetocwinsize'] = 'Thu gọn TOC khi kích thước cửa sổ dưới';
$string['collapsetocwinsizedesc'] = 'Cài đặt này cho phép bạn chỉ định kích thước cửa sổ dưới đó TOC sẽ tự động thu gọn.';
$string['compatibilitysettings'] = 'Cài đặt tương thích';
$string['completed'] = 'Đã hoàn thành';
$string['completiondetail:completionstatuspassed'] = 'Vượt qua hoạt động';
$string['completiondetail:completionstatuscompleted'] = 'Hoàn thành hoạt động';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Hoàn thành hoặc vượt qua hoạt động';
$string['completiondetail:completionscore'] = 'Nhận được điểm số {$a} hoặc hơn';
$string['completiondetail:allscos'] = 'Làm tất cả các phần của hoạt động này';
$string['completionscorerequired'] = 'Yêu cầu điểm số tối thiểu';
$string['completionscorerequireddesc'] = 'Yêu cầu điểm số tối thiểu là {$a} để hoàn thành';
$string['completionstatus_passed'] = 'Đã vượt qua';
$string['completionstatus_completed'] = 'Đã hoàn thành';
$string['completionstatusallscos'] = 'Tất cả SCO phải trả về trạng thái hoàn thành';
$string['completionstatusallscos_help'] = 'Một số gói SCORM chứa nhiều thành phần hoặc "sco" - khi bật cài đặt này, tất cả các sco trong gói phải trả về lesson_status tương ứng để hoạt động này được đánh dấu hoàn thành.';
$string['completionstatusrequired'] = 'Yêu cầu trạng thái';
$string['completionstatusrequireddesc'] = 'Học sinh phải đạt ít nhất một trong các trạng thái sau: {$a}';
$string['completionstatusrequired_help'] = 'Kiểm tra một hoặc nhiều trạng thái sẽ yêu cầu người dùng đạt ít nhất một trong các trạng thái đã kiểm tra để được đánh dấu hoàn thành trong hoạt động SCORM này, cũng như bất kỳ yêu cầu Hoàn thành Hoạt động nào khác.';
$string['confirmloosetracks'] = 'CẢNH BÁO: Gói có vẻ như đã thay đổi hoặc được chỉnh sửa. Nếu cấu trúc gói thay đổi, một số bản ghi người dùng có thể bị mất trong quá trình cập nhật.';
$string['contents'] = 'Nội dung';
$string['coursepacket'] = 'Gói khóa học';
$string['coursestruct'] = 'Cấu trúc khóa học';
$string['crontask'] = 'Xử lý nền cho SCORM';
$string['currentwindow'] = 'Cửa sổ hiện tại';
$string['datadir'] = 'Lỗi hệ thống tệp: Không thể tạo thư mục dữ liệu khóa học';
$string['defaultdisplaysettings'] = 'Cài đặt hiển thị mặc định';
$string['defaultgradesettings'] = 'Cài đặt điểm mặc định';
$string['defaultothersettings'] = 'Cài đặt khác mặc định';
$string['deleteattemptcheck'] = 'Bạn có chắc chắn muốn xóa hoàn toàn các lần thử này không?';
$string['deleteallattempts'] = 'Xóa tất cả các lần thử SCORM';
$string['deleteselected'] = 'Xóa các lần thử đã chọn';
$string['deleteuserattemptcheck'] = 'Bạn có chắc chắn muốn xóa hoàn toàn tất cả các lần thử của mình không?';
$string['details'] = 'Chi tiết theo dõi';
$string['directories'] = 'Hiển thị liên kết thư mục';
$string['disabled'] = 'Đã tắt';
$string['display'] = 'Hiển thị gói';
$string['displayattemptstatus'] = 'Hiển thị trạng thái lần thử';
$string['displayattemptstatus_help'] = 'Tùy chọn này cho phép hiển thị tóm tắt các lần thử của người dùng trong khối tổng quan khóa học trên Bảng điều khiển và/hoặc trang vào SCORM.';
$string['displayattemptstatusdesc'] = 'Liệu một bản tóm tắt các lần thử của người dùng có được hiển thị trong khối tổng quan khóa học trên Bảng điều khiển và/hoặc trang vào SCORM hay không.';
$string['displaycoursestructure'] = 'Hiển thị cấu trúc khóa học trên trang vào';
$string['displaycoursestructure_help'] = 'Nếu bật, bảng mục lục sẽ được hiển thị trên trang tổng quan SCORM.';
$string['displaycoursestructuredesc'] = 'Nếu bật, bảng mục lục sẽ được hiển thị trên trang tổng quan SCORM.';
$string['displaydesc'] = 'Hiển thị gói SCORM trong một cửa sổ mới.';
$string['displaysettings'] = 'Cài đặt hiển thị';
$string['dnduploadscorm'] = 'Thêm một gói SCORM';
$string['domxml'] = 'Thư viện ngoài DOMXML';
$string['element'] = 'Yếu tố';
$string['enter'] = 'Nhập';
$string['entercourse'] = 'Nhập khóa học';
$string['errorlogs'] = 'Nhật ký lỗi';
$string['eventattemptdeleted'] = 'Đã xóa lần thử';
$string['eventinteractionsviewed'] = 'Đã xem tương tác';
$string['eventreportviewed'] = 'Đã xem báo cáo';
$string['eventscolaunched'] = 'Đã khởi động Sco';
$string['eventscorerawsubmitted'] = 'Đã nộp điểm thô SCORM';
$string['eventstatussubmitted'] = 'Đã nộp trạng thái SCORM';
$string['eventtracksviewed'] = 'Đã xem theo dõi';
$string['eventuserreportviewed'] = 'Đã xem báo cáo người dùng';
$string['everyday'] = 'Mỗi ngày';
$string['everytime'] = 'Mỗi lần sử dụng';
$string['exceededmaxattempts'] = 'Bạn đã đạt đến số lần thử tối đa.';
$string['exit'] = 'Thoát khóa học';
$string['exitactivity'] = 'Thoát hoạt động';
$string['expired'] = 'Xin lỗi, hoạt động này đã đóng vào {$a} và không còn khả dụng';
$string['external'] = 'Cập nhật thời gian các gói bên ngoài';
$string['failed'] = 'Thất bại';
$string['finishscorm'] = 'Nếu bạn đã xem xong tài nguyên này, {$a}';
$string['finishscormlinkname'] = 'bấm vào đây để quay lại trang khóa học';
$string['firstaccess'] = 'Truy cập đầu tiên';
$string['firstattempt'] = 'Lần thử đầu tiên';
$string['floating'] = 'Nổi';
$string['forcecompleted'] = 'Buộc hoàn thành';
$string['forcecompleted_help'] = 'Nếu bật, trạng thái của lần thử hiện tại sẽ bị buộc thành "hoàn thành". (Chỉ áp dụng cho các gói SCORM 1.2.)';
$string['forcecompleteddesc'] = 'Tùy chọn này đặt giá trị mặc định cho cài đặt buộc hoàn thành';
$string['forcenewattempts'] = 'Buộc lần thử mới';
$string['forcenewattempts_help'] = 'Có 3 tùy chọn:

* Không - Nếu lần thử trước đã hoàn thành, vượt qua hoặc thất bại, học sinh sẽ được cung cấp tùy chọn để vào chế độ xem lại hoặc bắt đầu lần thử mới.
* Khi lần thử trước đã hoàn thành, vượt qua hoặc thất bại - Dựa vào gói SCORM đặt trạng thái thành "hoàn thành", "vượt qua" hoặc "thất bại".
* Luôn luôn - Mỗi lần vào lại hoạt động SCORM sẽ tạo ra lần thử mới và học sinh sẽ không được quay lại điểm họ đã đạt trong lần thử trước.';
$string['forceattemptalways'] = 'Luôn luôn';
$string['forceattemptoncomplete'] = 'Khi lần thử trước đã hoàn thành, vượt qua hoặc thất bại';
$string['forcejavascript'] = 'Buộc người dùng bật JavaScript';
$string['forcejavascript_desc'] = 'Nếu bật (khuyến nghị), điều này ngăn truy cập vào các đối tượng SCORM khi JavaScript không được hỗ trợ/bật trong trình duyệt của người dùng. Nếu tắt, người dùng có thể xem SCORM nhưng giao tiếp API sẽ thất bại và không có thông tin điểm số nào được lưu.';
$string['forcejavascriptmessage'] = 'JavaScript là cần thiết để xem đối tượng này, vui lòng bật JavaScript trong trình duyệt của bạn và thử lại.';
$string['found'] = 'Đã tìm thấy manifest';
$string['frameheight'] = 'Chiều cao của khung sân khấu hoặc cửa sổ.';
$string['framewidth'] = 'Chiều rộng của khung sân khấu hoặc cửa sổ.';
$string['fromleft'] = 'Từ trái';
$string['fromtop'] = 'Từ trên';
$string['fullscreen'] = 'Đầy màn hình';
$string['general'] = 'Dữ liệu chung';
$string['gradeaverage'] = 'Điểm trung bình';
$string['gradeforattempt'] = 'Điểm cho lần thử';
$string['gradehighest'] = 'Điểm cao nhất';
$string['grademethod'] = 'Phương pháp chấm điểm';
$string['grademethod_help'] = 'Phương pháp chấm điểm định nghĩa cách xác định điểm số cho một lần thử duy nhất của hoạt động.

Có 4 phương pháp chấm điểm:

* Đối tượng học tập - Số đối tượng học tập hoàn thành/vượt qua
* Điểm cao nhất - Điểm số cao nhất đạt được trong tất cả các đối tượng học tập đã qua
* Điểm trung bình - Trung bình của tất cả các điểm số
* Tổng điểm - Tổng của tất cả các điểm số';
$string['grademethoddesc'] = 'Phương pháp chấm điểm định nghĩa cách xác định điểm số cho một lần thử duy nhất của hoạt động.';
$string['gradereported'] = 'Điểm báo cáo';
$string['gradesettings'] = 'Cài đặt điểm số';
$string['gradescoes'] = 'Đối tượng học tập';
$string['gradesum'] = 'Tổng điểm';
$string['height'] = 'Chiều cao';
$string['hidden'] = 'Ẩn';
$string['hidebrowse'] = 'Tắt chế độ xem trước';
$string['hidebrowse_help'] = 'Chế độ xem trước cho phép học sinh duyệt qua một hoạt động trước khi thử. Nếu tắt chế độ xem trước, nút xem trước sẽ bị ẩn.';
$string['hidebrowsedesc'] = 'Chế độ xem trước cho phép học sinh duyệt qua một hoạt động trước khi thử.';
$string['hideexit'] = 'Ẩn liên kết thoát';
$string['hidereview'] = 'Ẩn nút xem lại';
$string['hidetoc'] = 'Hiển thị cấu trúc khóa học trong trình phát';
$string['hidetoc_help'] = 'Cách bảng mục lục hiển thị trong trình phát SCORM';
$string['hidetocdesc'] = 'Cài đặt này chỉ định cách bảng mục lục hiển thị trong trình phát SCORM.';
$string['highestattempt'] = 'Lần thử cao nhất';
$string['chooseapacket'] = 'Chọn hoặc cập nhật gói';
$string['identifier'] = 'Định danh câu hỏi';
$string['incomplete'] = 'Chưa hoàn thành';
$string['indicator:cognitivedepth'] = 'Độ sâu nhận thức SCORM';
$string['indicator:cognitivedepth_help'] = 'Chỉ số này dựa trên độ sâu nhận thức đạt được bởi học sinh trong một hoạt động SCORM.';
$string['indicator:cognitivedepthdef'] = 'Độ sâu nhận thức SCORM';
$string['indicator:cognitivedepthdef_help'] = 'Người tham gia đã đạt tỷ lệ phần trăm của sự tham gia nhận thức mà các hoạt động SCORM cung cấp trong khoảng thời gian phân tích này (Các mức = Không xem, Xem, Nộp bài, Xem phản hồi)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Chiều rộng xã hội SCORM';
$string['indicator:socialbreadth_help'] = 'Chỉ số này dựa trên chiều rộng xã hội đạt được bởi học sinh trong một hoạt động SCORM.';
$string['indicator:socialbreadthdef'] = 'Chiều rộng xã hội SCORM';
$string['indicator:socialbreadthdef_help'] = 'Người tham gia đã đạt tỷ lệ phần trăm của sự tham gia xã hội mà các hoạt động SCORM cung cấp trong khoảng thời gian phân tích này (Các mức = Không tham gia, Tham gia một mình)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';

$string['interactions'] = 'Tương tác';
$string['largetrackupgrade'] = 'Bước nâng cấp tiếp theo này có thể mất một thời gian để hoàn thành, trang web của bạn có {$a} bản ghi theo dõi SCORM cần được di chuyển sang cấu trúc bảng mới, vui lòng kiên nhẫn vì không thể hiển thị thanh tiến trình.';
$string['masteryoverride'] = 'Điểm làm chủ ghi đè trạng thái';
$string['masteryoverride_help'] = 'Nếu bật và có điểm làm chủ được cung cấp, khi LMSFinish được gọi và điểm thô đã được đặt, trạng thái sẽ được tính lại bằng cách sử dụng điểm thô và điểm làm chủ và bất kỳ trạng thái nào được cung cấp bởi SCORM (bao gồm "chưa hoàn thành") sẽ bị ghi đè.';
$string['masteryoverridedesc'] = 'Tùy chọn này đặt giá trị mặc định cho cài đặt ghi đè điểm làm chủ';
$string['myattempts'] = 'Lần thử của tôi';
$string['myaiccsessions'] = 'Phiên AICC của tôi';
$string['repositorynotsupported'] = 'Kho lưu trữ này không hỗ trợ liên kết trực tiếp đến một tệp imsmanifest.xml.';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Đây là định danh được đặt bởi gói SCORM của bạn cho câu hỏi này, đặc tả SCORM không cho phép cung cấp toàn bộ văn bản câu hỏi.';
$string['trackcorrectcount'] = 'Số lần đúng';
$string['trackcorrectcount_help'] = 'Số lượng kết quả đúng cho câu hỏi';
$string['trackpattern'] = 'Mẫu';
$string['trackpattern_help'] = 'Đây là những gì mà một câu trả lời đúng cho câu hỏi này sẽ là, nó không hiển thị phản hồi của người học.';
$string['tracklatency'] = 'Độ trễ';
$string['tracklatency_help'] = 'Thời gian trôi qua giữa lúc câu hỏi được cung cấp cho người học để phản hồi và thời gian phản hồi đầu tiên.';
$string['trackresponse'] = 'Phản hồi';
$string['trackresponse_help'] = 'Đây là phản hồi của người học cho câu hỏi này';
$string['trackresult'] = 'Kết quả';
$string['trackresult_help'] = 'Hiển thị nếu người học đã nhập một phản hồi đúng.';
$string['trackscoremin'] = 'Điểm tối thiểu';
$string['trackscoremin_help'] = 'Giá trị tối thiểu có thể được gán cho điểm thô';
$string['trackscoremax'] = 'Điểm tối đa';
$string['trackscoremax_help'] = 'Giá trị tối đa có thể được gán cho điểm thô';
$string['trackscoreraw'] = 'Điểm thô';
$string['trackscoreraw_help'] = 'Số phản ánh hiệu suất của người học so với phạm vi được giới hạn bởi các giá trị của min và max';
$string['tracksuspenddata'] = 'Dữ liệu tạm dừng';
$string['tracksuspenddata_help'] = 'Cung cấp không gian để lưu trữ và truy xuất dữ liệu giữa các phiên của người học';
$string['tracktime'] = 'Thời gian';
$string['tracktime_help'] = 'Thời gian khi lần thử bắt đầu';
$string['tracktype'] = 'Loại';
$string['tracktype_help'] = 'Loại câu hỏi, ví dụ "lựa chọn" hoặc "trả lời ngắn".';
$string['trackweight'] = 'Trọng số';
$string['trackweight_help'] = 'Trọng số được gán cho câu hỏi khi tính điểm.';
$string['invalidactivity'] = 'Hoạt động SCORM không hợp lệ';
$string['invalidmanifestname'] = 'Chỉ tệp imsmanifest.xml hoặc tệp .zip mới có thể được chọn';
$string['invalidstatus'] = 'Trạng thái không hợp lệ';
$string['invalidurl'] = 'URL không hợp lệ được chỉ định';
$string['invalidurlhttpcheck'] = 'URL không hợp lệ được chỉ định. Thông báo gỡ lỗi:<pre>{$a->cmsg}</pre>';
$string['invalidhacpsession'] = 'Phiên HACP không hợp lệ';
$string['invalidmanifestresource'] = 'CẢNH BÁO: Các tài nguyên sau được tham chiếu trong tệp manifest của bạn nhưng không tìm thấy:';
$string['last'] = 'Truy cập lần cuối vào';
$string['lastaccess'] = 'Lần truy cập cuối';
$string['lastattempt'] = 'Lần thử cuối cùng đã hoàn thành';
$string['lastattemptlock'] = 'Khóa sau lần thử cuối cùng';
$string['lastattemptlock_help'] = 'Nếu bật, học viên sẽ không thể khởi chạy trình SCORM sau khi đã sử dụng hết tất cả các lần thử được cấp.';
$string['lastattemptlockdesc'] = 'Nếu bật, học viên sẽ không thể khởi chạy trình SCORM sau khi đã sử dụng hết tất cả các lần thử được cấp.';
$string['location'] = 'Hiển thị thanh địa chỉ';
$string['max'] = 'Điểm tối đa';
$string['maximumattempts'] = 'Số lần thử';
$string['maximumattempts_help'] = 'Cài đặt này cho phép giới hạn số lần thử. Nó chỉ áp dụng cho các gói SCORM 1.2 và AICC.';
$string['maximumattemptsdesc'] = 'Tùy chọn này đặt số lần thử tối đa mặc định cho một hoạt động';
$string['maximumgradedesc'] = 'Tùy chọn này đặt điểm tối đa mặc định cho một hoạt động';
$string['menubar'] = 'Hiển thị thanh menu';
$string['min'] = 'Điểm tối thiểu';
$string['missing_attribute'] = 'Thiếu thuộc tính {$a->attr} trong thẻ {$a->tag}';
$string['missingparam'] = 'Thiếu hoặc sai tham số yêu cầu';
$string['missing_tag'] = 'Thiếu thẻ {$a->tag}';
$string['mode'] = 'Chế độ';
$string['modulename'] = 'Gói SCORM';
$string['modulename_help'] = 'Gói SCORM là một tập hợp các tệp được đóng gói theo tiêu chuẩn đồng ý cho các đối tượng học tập. Module hoạt động SCORM cho phép các gói SCORM hoặc AICC được tải lên dưới dạng tệp zip và thêm vào khóa học.

Nội dung thường được hiển thị qua nhiều trang, với điều hướng giữa các trang. Có nhiều tùy chọn để hiển thị nội dung trong cửa sổ bật lên, với bảng nội dung, với các nút điều hướng, v.v. Các hoạt động SCORM thường bao gồm câu hỏi, với điểm số được ghi lại trong sổ điểm.

Các hoạt động SCORM có thể được sử dụng

* Để trình bày nội dung đa phương tiện và hoạt hình
* Như một công cụ đánh giá';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'Các gói SCORM';
$string['nav'] = 'Hiển thị điều hướng';
$string['nav_help'] = 'Cài đặt này chỉ định liệu có hiển thị các nút điều hướng và vị trí của chúng hay không.

Có 3 tùy chọn:

* Không - Không hiển thị các nút điều hướng
* Dưới nội dung - Hiển thị các nút điều hướng bên dưới nội dung gói SCORM
* Nổi - Hiển thị các nút điều hướng nổi, với vị trí từ trên xuống và từ trái qua được xác định bởi gói.';
$string['navdesc'] = 'Cài đặt này chỉ định liệu có hiển thị các nút điều hướng và vị trí của chúng hay không.';
$string['navpositionleft'] = 'Vị trí của các nút điều hướng từ trái tính bằng pixel.';
$string['navpositiontop'] = 'Vị trí của các nút điều hướng từ trên tính bằng pixel.';
$string['networkdropped'] = 'Trình SCORM đã xác định rằng kết nối Internet của bạn không đáng tin cậy hoặc đã bị gián đoạn. Nếu bạn tiếp tục trong hoạt động SCORM này, tiến trình của bạn có thể không được lưu.<br />
Bạn nên thoát khỏi hoạt động ngay bây giờ, và quay lại khi bạn có kết nối Internet đáng tin cậy.';
$string['newattempt'] = 'Bắt đầu một lần thử mới';
$string['next'] = 'Tiếp tục';
$string['noactivity'] = 'Không có gì để báo cáo';
$string['noattemptsallowed'] = 'Số lần thử cho phép';
$string['noattemptsmade'] = 'Số lần thử bạn đã thực hiện';
$string['no_attributes'] = 'Thẻ {$a->tag} phải có thuộc tính';
$string['no_children'] = 'Thẻ {$a->tag} phải có con';
$string['nolimit'] = 'Không giới hạn lần thử';
$string['nomanifest'] = 'Gói tệp không đúng - thiếu imsmanifest.xml hoặc cấu trúc AICC';
$string['noprerequisites'] = 'Xin lỗi, nhưng bạn không có các yêu cầu tiên quyết để truy cập hoạt động này.';
$string['noreports'] = 'Không có báo cáo để hiển thị';
$string['normal'] = 'Bình thường';
$string['noscriptnoscorm'] = 'Trình duyệt của bạn không hỗ trợ JavaScript hoặc đã tắt hỗ trợ JavaScript. Gói SCORM này có thể không chạy hoặc lưu dữ liệu đúng cách.';
$string['notattempted'] = 'Chưa thử';
$string['not_corr_type'] = 'Không khớp loại cho thẻ {$a->tag}';
$string['notopenyet'] = 'Xin lỗi, hoạt động này chưa có sẵn cho đến {$a}';
$string['objectives'] = 'Mục tiêu';
$string['openafterclose'] = 'Bạn đã chỉ định một ngày mở sau ngày đóng';
$string['optallstudents'] = 'tất cả người dùng';
$string['optattemptsonly'] = 'người dùng chỉ có lần thử';
$string['optnoattemptsonly'] = 'người dùng không có lần thử';
$string['options'] = 'Tùy chọn (Bị ngăn bởi một số trình duyệt)';
$string['optionsadv'] = 'Tùy chọn (Nâng cao)';
$string['optionsadv_desc'] = 'Nếu được chọn, chiều rộng và chiều cao sẽ được liệt kê là các cài đặt nâng cao.';
$string['organization'] = 'Tổ chức';
$string['organizations'] = 'Tổ chức';
$string['othersettings'] = 'Cài đặt khác';
$string['page-mod-scorm-x'] = 'Bất kỳ trang module SCORM nào';
$string['pagesize'] = 'Kích thước trang';
$string['package'] = 'Tệp gói';
$string['package_help'] = 'Tệp gói là một tệp zip (hoặc pif) chứa các tệp định nghĩa khóa học SCORM/AICC.';
$string['packagedir'] = 'Lỗi hệ thống tệp: Không thể tạo thư mục gói';
$string['packagefile'] = 'Không có tệp gói được chỉ định';
$string['packagehdr'] = 'Gói';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Cài đặt này cho phép chỉ định URL cho gói SCORM, thay vì chọn tệp qua trình chọn tệp.';
$string['passed'] = 'Đạt';
$string['php5'] = 'PHP 5 (Thư viện DOMXML gốc)';
$string['pluginadministration'] = 'Quản lý gói SCORM';
$string['pluginname'] = 'Gói SCORM';
$string['popup'] = 'Cửa sổ mới';
$string['popuplaunched'] = 'Gói SCORM này đã được khởi chạy trong cửa sổ bật lên, Nếu bạn đã xem xong tài nguyên này, nhấn vào đây để quay lại trang khóa học';
$string['popupmenu'] = 'Trong menu thả xuống';
$string['popupopen'] = 'Mở gói trong cửa sổ mới';
$string['popupsblocked'] = 'Có vẻ như cửa sổ bật lên đã bị chặn, ngăn gói SCORM này chạy. Vui lòng kiểm tra cài đặt trình duyệt của bạn trước khi thử lại.';
$string['position_error'] = 'Thẻ {$a->tag} không thể là con của thẻ {$a->parent}';
$string['preferencesuser'] = 'Tùy chọn cho báo cáo này';
$string['preferencespage'] = 'Tùy chọn chỉ cho trang này';
$string['prev'] = 'Trước';
$string['privacy:metadata:aicc:data'] = 'Dữ liệu cá nhân được truyền qua từ hệ thống con AICC/SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Plugin này gửi dữ liệu ra ngoài bằng cách sử dụng AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Trạng thái bài học để theo dõi';
$string['privacy:metadata:aicc_session:scormmode'] = 'Chế độ của phần tử để theo dõi';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Trạng thái của phần tử để theo dõi';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Thời gian phiên để theo dõi';
$string['privacy:metadata:aicc_session:timecreated'] = 'Thời gian phần tử theo dõi được tạo';
$string['privacy:metadata:attempt'] = 'Số lần thử';
$string['privacy:metadata:scoes_track:element'] = 'Tên của phần tử để theo dõi';
$string['privacy:metadata:scoes_track:value'] = 'Giá trị của phần tử đã cho';
$string['privacy:metadata:scorm_aicc_session'] = 'Thông tin phiên của AICC HACP';
$string['privacy:metadata:scorm_attempt'] = 'Các lần thử SCORM do người dùng thực hiện';
$string['privacy:metadata:timemodified'] = 'Thời gian phần tử theo dõi được sửa đổi lần cuối';
$string['privacy:metadata:userid'] = 'ID của người dùng đã truy cập vào hoạt động SCORM';
$string['protectpackagedownloads'] = 'Bảo vệ tải xuống gói';
$string['protectpackagedownloads_desc'] = 'Nếu bật, các gói SCORM chỉ có thể được tải xuống nếu người dùng có khả năng quản lý hoạt động của khóa học. Nếu tắt, các gói SCORM luôn có thể được tải xuống (bằng di động hoặc các phương tiện khác).';
$string['raw'] = 'Điểm thô';
$string['regular'] = 'Manifest thông thường';
$string['report'] = 'Báo cáo';
$string['reports'] = 'Báo cáo';
$string['reportcountallattempts'] = '{$a->nbattempts} lần thử cho {$a->nbusers} người dùng, trên tổng số {$a->nbresults} kết quả';
$string['reportcountattempts'] = '{$a->nbresults} kết quả ({$a->nbusers} người dùng)';
$string['response'] = 'Phản hồi';
$string['result'] = 'Kết quả';
$string['results'] = 'Kết quả';
$string['review'] = 'Xem lại';
$string['reviewmode'] = 'Chế độ xem lại';
$string['rightanswer'] = 'Câu trả lời đúng';
$string['scormstandard'] = 'Chế độ tiêu chuẩn SCORM';
$string['scormstandarddesc'] = 'Khi tắt, Moodle cho phép các gói SCORM 1.2 lưu trữ nhiều hơn so với quy định, và sử dụng định dạng tên đầy đủ của Moodle khi truyền tên người dùng đến gói SCORM.';
$string['scoes'] = 'Đối tượng học tập';
$string['score'] = 'Điểm';
$string['scorm:addinstance'] = 'Thêm một gói SCORM mới';
$string['scormclose'] = 'Có sẵn đến';
$string['scormcourse'] = 'Khóa học';
$string['scorm:deleteresponses'] = 'Xóa các lần thử SCORM';
$string['scormloggingoff'] = 'API logging đã tắt';
$string['scormloggingon'] = 'API logging đã bật';
$string['scormopen'] = 'Có sẵn từ';
$string['scormresponsedeleted'] = 'Đã xóa các lần thử của người dùng';
$string['scorm:deleteownresponses'] = 'Xóa các lần thử của chính mình';
$string['scorm:savetrack'] = 'Lưu vết';
$string['scorm:skipview'] = 'Bỏ qua tổng quan';
$string['scormtype'] = 'Loại';
$string['scormtype_help'] = 'Cài đặt này xác định cách gói được bao gồm trong khóa học. Có tối đa 4 tùy chọn:

* Gói tải lên - Cho phép chọn gói SCORM qua trình chọn tệp
* Manifest SCORM bên ngoài - Cho phép chỉ định URL imsmanifest.xml. Lưu ý: Nếu URL có tên miền khác với trang của bạn, thì "Gói tải về" là tùy chọn tốt hơn, vì nếu không điểm sẽ không được lưu.
* Gói tải về - Cho phép chỉ định URL gói. Gói sẽ được giải nén và lưu cục bộ, và cập nhật khi gói SCORM bên ngoài được cập nhật.
* URL AICC bên ngoài - URL này là URL khởi chạy cho một Hoạt động AICC duy nhất. Một gói giả sẽ được tạo xung quanh điều này.';
$string['scorm:viewreport'] = 'Xem báo cáo';
$string['scorm:viewscores'] = 'Xem điểm';
$string['scrollbars'] = 'Cho phép cửa sổ được cuộn';
$string['search:activity'] = 'Gói SCORM - thông tin hoạt động';
$string['selectall'] = 'Chọn tất cả';
$string['selectnone'] = 'Bỏ chọn tất cả';
$string['show'] = 'Hiển thị';
$string['sided'] = 'Ở bên';
$string['skipview'] = 'Học sinh bỏ qua trang cấu trúc nội dung';
$string['skipview_help'] = 'Cài đặt này chỉ định liệu trang cấu trúc nội dung có bao giờ bị bỏ qua (không hiển thị) hay không. Nếu gói chỉ chứa một đối tượng học tập, trang cấu trúc nội dung có thể luôn bị bỏ qua.';
$string['skipviewdesc'] = 'Tùy chọn này đặt mặc định khi nào bỏ qua cấu trúc nội dung cho một trang';
$string['slashargs'] = 'CẢNH BÁO: slash arguments bị tắt trên trang này và các đối tượng có thể không hoạt động như mong đợi!';
$string['stagesize'] = 'Kích thước giai đoạn';
$string['stagesize_help'] = 'Hai cài đặt này chỉ định chiều rộng và chiều cao của khung/cửa sổ cho các đối tượng học tập.';
$string['started'] = 'Bắt đầu vào';
$string['status'] = 'Trạng thái';
$string['statusbar'] = 'Hiển thị thanh trạng thái';
$string['student_response'] = 'Phản hồi';
$string['subplugintype_scormreport'] = 'Báo cáo';
$string['subplugintype_scormreport_plural'] = 'Báo cáo';
$string['suspended'] = 'Bị đình chỉ';
$string['syntax'] = 'Lỗi cú pháp';
$string['tag_error'] = 'Thẻ không xác định ({$a->tag}) với nội dung này: {$a->value}';
$string['time'] = 'Thời gian';
$string['title'] = 'Tiêu đề';
$string['toolbar'] = 'Hiển thị thanh công cụ';
$string['too_many_attributes'] = 'Thẻ {$a->tag} có quá nhiều thuộc tính';
$string['too_many_children'] = 'Thẻ {$a->tag} có quá nhiều con';
$string['totaltime'] = 'Tổng thời gian';
$string['trackingloose'] = 'CẢNH BÁO: Dữ liệu theo dõi của gói này sẽ bị mất!';
$string['type'] = 'Loại';
$string['typeaiccurl'] = 'URL AICC bên ngoài';
$string['typeexternal'] = 'Manifest SCORM bên ngoài';
$string['typelocal'] = 'Gói tải lên';
$string['typelocalsync'] = 'Gói tải về';
$string['undercontent'] = 'Dưới nội dung';
$string['unziperror'] = 'Lỗi xảy ra khi giải nén gói';
$string['updatefreq'] = 'Tần suất cập nhật tự động';
$string['updatefreq_error'] = 'Tần suất cập nhật tự động chỉ có thể được đặt khi tệp gói được lưu trữ bên ngoài';
$string['updatefreq_help'] = 'Cho phép gói bên ngoài được tự động tải xuống và cập nhật';
$string['updatefreqdesc'] = 'Tùy chọn này đặt tần suất cập nhật tự động mặc định của một hoạt động';
$string['validateascorm'] = 'Xác nhận một gói';
$string['validation'] = 'Kết quả xác nhận';
$string['validationtype'] = 'Tùy chọn này đặt thư viện DOMXML được sử dụng để xác nhận Manifest SCORM. Nếu bạn không biết, hãy để tùy chọn đã chọn.';
$string['value'] = 'Giá trị';
$string['versionwarning'] = 'Phiên bản manifest cũ hơn 1.3, cảnh báo tại thẻ {$a->tag}';
$string['viewallreports'] = 'Xem báo cáo cho {$a} lần thử';
$string['viewalluserreports'] = 'Xem báo cáo cho {$a} người dùng';
$string['whatgrade'] = 'Chấm điểm lần thử';
$string['whatgrade_help'] = 'Nếu cho phép nhiều lần thử, cài đặt này chỉ định liệu điểm cao nhất, trung bình (mean), lần thử đầu tiên hay lần thử cuối cùng hoàn thành được ghi vào sổ điểm. Tùy chọn lần thử cuối cùng hoàn thành không bao gồm các lần thử với trạng thái \'không đạt\'.

Ghi chú về việc xử lý nhiều lần thử:

* Tùy chọn để bắt đầu lần thử mới được cung cấp bởi một hộp kiểm phía trên nút Enter trên trang cấu trúc nội dung, vì vậy hãy đảm bảo rằng bạn đang cung cấp quyền truy cập vào trang đó nếu bạn muốn cho phép nhiều lần thử.
* Một số gói SCORM thông minh về lần thử mới, nhiều gói thì không. Điều này có nghĩa là nếu người học tái nhập một lần thử hiện có, nếu nội dung SCORM không có logic nội bộ để tránh ghi đè các lần thử trước đó, chúng có thể bị ghi đè, ngay cả khi lần thử đã \'hoàn thành\' hoặc \'đạt\'.
* Các cài đặt "Buộc hoàn thành", "Buộc lần thử mới" và "Khóa sau lần thử cuối cùng" cũng cung cấp sự quản lý bổ sung cho nhiều lần thử.';
$string['whatgradedesc'] = 'Liệu điểm cao nhất, trung bình (mean), lần thử đầu tiên hay lần thử cuối cùng hoàn thành được ghi vào sổ điểm nếu cho phép nhiều lần thử.';
$string['width'] = 'Chiều rộng';
$string['window'] = 'Cửa sổ';
$string['youmustselectastatus'] = 'Bạn phải chọn một trạng thái để yêu cầu';

// Đã lỗi thời từ Moodle 4.0.
$string['info'] = 'Thông tin';
$string['displayactivityname'] = 'Hiển thị tên hoạt động';
$string['displayactivityname_help'] = 'Có hiển thị tên hoạt động phía trên trình SCORM hay không.';

// Đã lỗi thời từ Moodle 4.3.
$string['completionscorerequired_help'] = 'Bật cài đặt này sẽ yêu cầu người dùng phải đạt ít nhất điểm tối thiểu đã nhập để được đánh dấu hoàn thành trong hoạt động SCORM này, cũng như bất kỳ yêu cầu hoàn thành hoạt động nào khác.';
