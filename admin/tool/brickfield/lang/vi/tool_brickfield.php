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
 * Plugin strings are defined here.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   2020 Brickfield Education Labs, https://www.brickfield.ie - Author: Karen Holland
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Bộ công cụ Tiếp cận';
$string['accessibility'] = 'Tiếp cận';
$string['accessibilitydisabled'] = 'Bộ công cụ tiếp cận Brickfield không được kích hoạt trên trang web này. Liên hệ với quản trị viên trang web của bạn để kích hoạt.';
$string['accessibilityreport'] = 'Bộ công cụ tiếp cận';
$string['analysistype'] = 'Bật yêu cầu phân tích';
$string['analysistypedisabled'] = 'Phân tích nội dung đã bị vô hiệu hóa';
$string['analysistype_desc'] = 'Cho phép yêu cầu phân tích tiếp cận nội dung.';
$string['analysis:disabled'] = 'Đã vô hiệu hóa';
$string['analysis:byrequest'] = 'Theo yêu cầu';
$string['brickfield'] = 'Bộ công cụ Brickfield';
$string['brickfield:viewcoursetools'] = 'Xem báo cáo cho từng khóa học';
$string['brickfield:viewsystemtools'] = 'Xem báo cáo cho tất cả các khóa học';
$string['accessibilitytool'] = 'Công cụ tiếp cận Brickfield';
$string['accessibilitytools'] = 'Công cụ tiếp cận Brickfield';
$string['allcourses'] = 'Tất cả các khóa học đã được xem xét ({$a})';
$string['allcoursescat'] = 'Tất cả các khóa học đã được xem xét cho danh mục {$a->catname} ({$a->count})';
$string['batch'] = 'Giới hạn nhóm';
$string['bulkprocesscaches'] = 'Xử lý lớn lượng dữ liệu đệm';
$string['bulkprocesscourses'] = 'Xử lý lớn kiểm tra khả năng tiếp cận';
$string['cachepending'] = 'Dữ liệu tóm tắt đang được biên soạn';
$string['checkidvalidation'] = 'Nhiệm vụ kiểm tra các checkids không hợp lệ';
$string['checkscompleted'] = 'Kiểm tra đã hoàn thành: {$a}';
$string['checktype'] = 'Nhóm kiểm tra';
$string['checktype:form'] = 'Biểu mẫu';
$string['checktype:image'] = 'Hình ảnh';
$string['checktype:layout'] = 'Bố cục';
$string['checktype:link'] = 'Liên kết';
$string['checktype:media'] = 'Đa phương tiện';
$string['checktype:table'] = 'Bảng';
$string['checktype:text'] = 'Văn bản';
$string['cmpercent'] = 'Tỷ lệ phần trăm hoạt động tổng cộng';
$string['cmpercenterrors'] = 'Tỷ lệ phần trăm lỗi tổng cộng';
$string['cmpercenttitle'] = 'Tổng quan % về hoạt động so với lỗi';
$string['confirmationmessage'] = 'Khóa học này đã được lên lịch để phân tích. Phân tích sẽ hoàn thành sớm nhất vào lúc
{$a}. Hãy kiểm tra lại sau.';
$string['contactadmin'] = 'Vui lòng liên hệ với quản trị viên của bạn để hoàn tất việc đăng ký.';
$string['contextid'] = 'Id ngữ cảnh';
$string['core_course'] = 'Khóa học';
$string['core_question'] = 'Ngân hàng câu hỏi';
$string['count'] = 'Số lượng';
$string['coursecount'] = 'Số lượng khóa học';
$string['deletehistoricaldata'] = 'Xóa kết quả kiểm tra lịch sử';
$string['dependency'] = 'Phụ thuộc vào';
$string['emptycategory'] = 'Không tìm thấy khóa học nào cho danh mục {$a}';
$string['emptytagcourses'] = 'Không tìm thấy kết quả nào cho các khóa học có các thẻ được cấu hình';
$string['enableaccessibilitytools'] = 'Bật các công cụ tiếp cận';
$string['enableaccessibilitytools_desc'] = 'Bộ công cụ tiếp cận giúp xác định các vấn đề về tiếp cận trong các khóa học.';
$string['errorlink'] = 'Chỉnh sửa thực thể lỗi cho {$a}';
$string['errors'] = 'Lỗi: {$a}';
$string['eventanalysis_requested'] = 'Yêu cầu phân tích nội dung';
$string['eventanalysis_requesteddesc'] = 'Yêu cầu phân tích nội dung đã được gửi cho khóa học {$a}.';
$string['eventreport_viewed'] = 'Báo cáo về tiếp cận được xem';
$string['eventreport_vieweddesc'] = 'Báo cáo về tiếp cận đã được xem cho id khóa học {$a->course},
id danh mục {$a->category}, tab {$a->tab}.';
$string['eventreport_downloaded'] = 'Tóm tắt về tiếp cận đã được tải xuống';
$string['eventreport_downloadeddesc'] = 'Tóm tắt về tiếp cận đã được tải xuống cho id khóa học {$a}.';
$string['failed'] = 'Thất bại';
$string['failedcount'] = 'Thất bại: {$a}';
$string['tools'] = 'Báo cáo';
$string['fullcachedone'] = 'Vô hiệu hóa để chạy lại việc đệm';
$string['hideshow'] = 'Ẩn/hiện';
$string['innercontextid'] = 'Id ngữ cảnh bên trong';
$string['invalidaccessibilitytool'] = 'Yêu cầu cụ thể cho công cụ tiếp cận không hợp lệ.';
$string['invalidcategoryid'] = 'Danh mục không hợp lệ, vui lòng kiểm tra đầu vào của bạn';
$string['invalidcourseid'] = 'Khóa học không hợp lệ, vui lòng kiểm tra đầu vào của bạn';
$string['invalidlinkphrases'] = 'click|click here|here|more|more here|info|info here|information|information here|read more|read more here|further information|further information here|further details|further details here';
$string['module'] = 'Mô-đun';
$string['modulename'] = 'Tên';
$string['newwindowphrases'] = 'new window|new-window|new_window';
$string['noerrorsfound'] = 'Không tìm thấy lỗi tiếp cận phổ biến nào cho các tham số tìm kiếm của bạn. Chúc mừng!';
$string['norecords'] = 'Không tìm thấy bản ghi liên quan cho các tham số tìm kiếm của bạn.';
$string['notregistered'] = 'Bộ công cụ tiếp cận của bạn cần được đăng ký.';
$string['notvalidated'] = 'Bộ công cụ tiếp cận của bạn hoạt động trong khi đang được xác nhận.';
$string['numinstances'] = 'Số lượng thực thể';
$string['pagedesc:checktype'] = '<p>Để tóm tắt và phân tích kết quả của các kiểm tra khác nhau được thực hiện, chúng tôi nhóm các kiểm tra này thành các loại nội dung khác nhau. Do đó, tất cả các kết quả kiểm tra tiếp cận liên quan đến hình ảnh nằm trong nhóm loại nội dung "Hình ảnh", tất cả các kết quả kiểm tra tiếp cận liên quan đến bố cục nằm trong nhóm loại nội dung "Bố cục", và tiếp tục.</p><p>Các hoạt động được bao gồm dưới dạng các hoạt động, tài nguyên hoặc khu vực nội dung khác liên quan đến các khóa học chính họ.</p><p>Trang biểu đồ loại nội dung hiển thị sự phân chia lỗi theo từng nhóm loại nội dung: Hình ảnh, Bố cục, Liên kết, Phương tiện, Bảng, và Văn bản.</p>';
$string['pagedesc:pertarget'] = '<p>Để tóm tắt và phân tích kết quả kiểm tra cho từng hoạt động, chúng tôi nhóm các kết quả kiểm tra này vào các hoạt động khác nhau được phát hiện.</p><p>Các hoạt động được bao gồm dưới dạng các hoạt động, tài nguyên hoặc khu vực nội dung khác liên quan đến các khóa học chính họ. Mỗi hoạt động không có lỗi được phát hiện được tính là đã vượt qua, mỗi hoạt động có một hoặc nhiều lỗi được phát hiện được tính là thất bại. Tỷ lệ giữa các hoạt động vượt qua và thất bại sau đó được hiển thị.</p><p>Trang biểu đồ phân tích hoạt động hiển thị tỷ lệ giữa các thể hiện vượt qua và thất bại tổng cộng, mỗi hoạt động, chẳng hạn như bài tập, khóa học, nhãn vv.</p>';
$string['pagedesctitle:checktype'] = 'Giải thích các loại nội dung';
$string['pagedesctitle:pertarget'] = 'Giải thích phân tích hoạt động';
$string['passed'] = 'Đã vượt qua';
$string['passedcount'] = 'Đã vượt qua: {$a}';
$string['passrate'] = 'Tỷ lệ vượt qua: {$a}%';
$string['perpage'] = 'Số mục hiển thị trên mỗi trang';
$string['privacy:metadata'] = 'Bộ plugin báo cáo kiểm tra tiếp cận không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['processanalysisrequests'] = 'Xử lý các yêu cầu phân tích nội dung';
$string['registernow'] = 'Vui lòng đăng ký ngay.';
$string['registrationinfo'] = '<p>Quá trình đăng ký này cho phép bạn sử dụng phiên bản khởi đầu của bộ công cụ tiếp cận Brickfield cho trang web Moodle của bạn đã đăng ký.</p><p>Việc sử dụng này phải tuân thủ các <a href="{$a}" target="_blank">điều khoản và điều kiện của Brickfield Education Labs (mở trong cửa sổ mới)</a> và bạn đồng ý, bằng cách sử dụng sản phẩm này.</p>';
$string['remaining'] = ' ({$a} lỗi còn lại)';
$string['response:0'] = 'URL này không trỏ đến bất kỳ nơi nào';
$string['response:404'] = 'Không tìm thấy trang của URL này';
$string['schedule:blocknotscheduled'] = '<p>Khóa học này chưa được lên lịch để phân tích, để tìm các vấn đề tiếp cận phổ biến.</p>';
$string['schedule:notscheduled'] = '<p>Khóa học này chưa được lên lịch để phân tích để tìm các vấn đề tiếp cận phổ biến.</p><p>Bằng cách nhấp vào nút "Gửi yêu cầu phân tích", bạn xác nhận rằng bạn muốn tất cả các nội dung HTML của khóa học có liên quan của bạn, như mô tả phần mục, mô tả hoạt động, câu hỏi, trang và nhiều hơn nữa, được lên lịch để phân tích.</p><p>Phân tích này sẽ tiến hành nhiều kiểm tra tiếp cận phổ biến trên nội dung HTML của khóa học của bạn, và kết quả của những kiểm tra đó sẽ được hiển thị trên các trang báo cáo bộ công cụ tiếp cận này. Phân tích sẽ được xử lý trong nền, bằng các nhiệm vụ được lên lịch, vì vậy tốc độ hoàn thành của nó sẽ phụ thuộc vào lịch trình và lịch trình chạy nhiệm vụ.</p>';
$string['schedule:requestanalysis'] = 'Gửi yêu cầu phân tích';
$string['schedule:scheduled'] = 'Khóa học này đã được lên lịch để phân tích.';
$string['schedule:sitenotscheduled'] = '<p>Nội dung toàn cầu (không phụ thuộc vào khóa học) chưa được lên lịch để phân tích để tìm các vấn đề tiếp cận phổ biến.</p><p>Bằng cách nhấp vào nút "Gửi yêu cầu phân tích", bạn xác nhận rằng bạn muốn tất cả các nội dung toàn cầu (không phụ thuộc vào khóa học) có liên quan của bạn được lên lịch để phân tích.</p><p>Phân tích này sẽ tiến hành nhiều kiểm tra tiếp cận phổ biến trên nội dung này, và kết quả của những kiểm tra đó sẽ được hiển thị trên các trang báo cáo bộ công cụ tiếp cận này. Phân tích sẽ được xử lý trong nền, bằng các nhiệm vụ được lên lịch, vì vậy tốc độ hoàn thành của nó sẽ phụ thuộc vào lịch trình và lịch trình chạy nhiệm vụ.</p>';
$string['schedule:sitescheduled'] = 'Nội dung toàn cầu (không phụ thuộc vào khóa học) đã được lên lịch để phân tích.';
$string['settings'] = 'Cài đặt bộ công cụ tiếp cận';
$string['taberrors'] = 'Lỗi kiểm tra';
$string['targetavetitle'] = 'Số lỗi trung bình trên mỗi hoạt động';
$string['targetpercentage'] = 'Tỷ lệ phần trăm thể hiện đã vượt qua/không phù hợp trên mỗi hoạt động';
$string['targetratio'] = 'Tỷ lệ vượt qua hoạt động';
$string['tblcheck'] = 'Kiểm tra';
$string['tblcheckexample'] = 'Ví dụ';
$string['tblcheckfailed'] = 'Kiểm tra thất bại';
$string['tblchecksummary'] = 'Tóm tắt';
$string['tblerrorcount'] = 'Lỗi';
$string['tbledit'] = 'Chỉnh sửa';
$string['tblhtmlcode'] = 'Mã HTML hiện có';
$string['tblinstance'] = 'Thực thể';
$string['tblline'] = 'Dòng';
$string['tbloverallpercentage'] = 'Tổng số lỗi %';
$string['tblpercentage'] = 'Phần trăm';
$string['tblpreview'] = 'Xem trước';
$string['tbltarget'] = 'Hoạt động';
$string['tblupdateto'] = 'Cập nhật thành';
$string['titleerrorscount'] = 'Chi tiết lỗi: (hiển thị {$a} lỗi đầu tiên)';
$string['titleactivityresultsall'] = 'Kết quả cho mỗi hoạt động: tất cả các khóa học đã được xem xét ({$a->count} khóa học)';
$string['titleactivityresultspartial'] = 'Kết quả cho mỗi hoạt động: khóa học {$a->name}';
$string['titleall'] = 'Chi tiết lỗi: tất cả các khóa học đã được xem xét ({$a->count} khóa học)';
$string['titlechecktyperesultsall'] = 'Kết quả cho mỗi loại nội dung: tất cả các khóa học đã được xem xét ({$a->count} khóa học)';
$string['titlechecktyperesultspartial'] = 'Kết quả cho mỗi loại nội dung: khóa học {$a->name}';
$string['titleerrorsall'] = 'Chi tiết lỗi: tất cả các khóa học đã được xem xét ({$a->count} khóa học)';
$string['titleerrorspartial'] = 'Chi tiết lỗi: khóa học {$a->name}';
$string['titlepartial'] = 'Chi tiết lỗi: khóa học {$a->name}';
$string['titleprintableall'] = 'Khóa học {$a->name}';
$string['titleprintablepartial'] = 'Khóa học {$a->name}';
$string['toptargets'] = 'Hoạt động thất bại';
$string['toperrors'] = 'Lỗi hàng đầu';
$string['totalactivities'] = 'Tổng số hoạt động';
$string['totalactivitiescount'] = 'Tổng số hoạt động: {$a}';
$string['totalareas'] = 'Tổng số khu vực';
$string['totalerrors'] = 'Tổng số lỗi';
$string['totalgrouperrors'] = 'Tổng số lỗi (tổng cộng) trên mỗi loại nội dung';
$string['updatesummarydata'] = 'Cập nhật dữ liệu tóm tắt trang web';
$string['messageprovider:warningcheckid'] = 'Cảnh báo về checkids không hợp lệ';
$string['warningcheckidbody'] = 'Có một vấn đề với kiểm tra Brickfield
 mà hoạt động nhưng không được liệt kê trong cơ sở dữ liệu. Vui lòng điều tra.';
$string['warningcheckidsubject'] = 'Cảnh báo checkID cho Bộ công cụ Brickfield';

// Kiểm tra mô tả.
$string['checkdesc:alinksdontopennewwindow'] = 'Các liên kết mở trong cửa sổ mới nên cảnh báo người dùng trước.';
$string['checkdesc:amustcontaintext'] = 'Một liên kết cần phải chứa văn bản để có thể nhận thức được.';
$string['checkdesc:areadontopennewwindow'] = 'Các khu vực, được sử dụng trong bản đồ hình ảnh, mở trong cửa sổ mới nên cảnh báo người dùng trước.';
$string['checkdesc:areahasaltvalue'] = 'Các khu vực, được sử dụng trong bản đồ hình ảnh, không nên thiếu văn bản alt (thay thế), tương tự như hình ảnh.';
$string['checkdesc:asuspiciouslinktext'] = 'Văn bản liên kết nên mô tả và cung cấp bối cảnh về điểm đến của nó.';
$string['checkdesc:basefontisnotused'] = 'Các phần tử Basefont (thông thường được sử dụng để định dạng) không có sẵn và không nên được sử dụng.';
$string['checkdesc:blinkisnotused'] = 'Các phần tử Blink, nhấp nháy liên tục, không có sẵn và không nên được sử dụng.';
$string['checkdesc:boldisnotused'] = 'Các phần tử in đậm (b) không nên được sử dụng; "strong" nên được sử dụng thay vào đó.';
$string['checkdesc:contenttoolong'] = 'Độ dài nội dung trang tổng cộng không nên vượt quá 500 từ.';
$string['checkdesc:csstexthascontrast'] = 'Tương phản màu giữa văn bản và nền quá thấp.';
$string['checkdesc:embedhasassociatednoembed'] = 'Các phần tử Embed (để nhúng đa phương tiện) không nên thiếu các phần tử "noembed" tương ứng.';
$string['checkdesc:headerh3'] = 'Tiêu đề theo sau các tiêu đề H3 (tùy chọn tiêu đề lớn của biên tập viên) không nên phá vỡ cấu trúc tiêu đề của trang.';
$string['checkdesc:headershavetext'] = 'Một tiêu đề cần phải chứa văn bản để có thể nhận thức được.';
$string['checkdesc:iisnotused'] = 'Các phần tử nghiêng (i) không nên được sử dụng; "em" nên được sử dụng thay vào đó.';
$string['checkdesc:imgaltisdifferent'] = 'Văn bản alt (thay thế) hình ảnh không nên trùng với tên tệp hình ảnh.';
$string['checkdesc:imgaltistoolong'] = 'Văn bản alt (thay thế) hình ảnh không nên vượt quá số ký tự cho phép tối đa (125).';
$string['checkdesc:imgaltnotemptyinanchor'] = 'Văn bản alt (thay thế) hình ảnh không nên trống, đặc biệt là khi hình ảnh có một liên kết đến nơi khác.';
$string['checkdesc:imgaltnotplaceholder'] = 'Văn bản alt (thay thế) hình ảnh không nên là văn bản thay thế đơn giản, như "image".';
$string['checkdesc:imghasalt'] = 'Văn bản alt (thay thế) hình ảnh không nên thiếu cho các phần tử hình ảnh, trừ khi chỉ là trang trí và không mang ý nghĩa.';
$string['checkdesc:imgwithmaphasusemap'] = 'Bản đồ hình ảnh, với các khu vực có thể nhấp, cần có các phần tử "usemap" và "map" tương ứng.';
$string['checkdesc:legendtextnotempty'] = 'Các phần tử Legend, được sử dụng để ghi chú các phần tử fieldset, nên chứa văn bản.';
$string['checkdesc:marqueeisnotused'] = 'Các phần tử Marquee (tự cuộn) không có sẵn và không nên được sử dụng.';
$string['checkdesc:noheadings'] = 'Không có tiêu đề làm cho nội dung ít cấu trúc hóa hơn và khó đọc hơn.';
$string['checkdesc:objectmusthaveembed'] = 'Các phần tử Object (để nhúng tài nguyên bên ngoài) không nên thiếu các phần tử "embed" tương ứng.';
$string['checkdesc:objectmusthavetitle'] = 'Các phần tử Object (để nhúng tài nguyên bên ngoài) không nên thiếu các mô tả "title" tương ứng.';
$string['checkdesc:objectmusthavevalidtitle'] = 'Các phần tử Object (để nhúng tài nguyên bên ngoài) nên có các mô tả "title" tương ứng với văn bản.';
$string['checkdesc:strikeisnotused'] = 'Các phần tử Strike (gạch ngang) không nên được sử dụng; "del" (đã xóa) nên được sử dụng thay vào đó.';
$string['checkdesc:tabledatashouldhaveth'] = 'Bảng lý tưởng không nên thiếu tiêu đề.';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'Tóm tắt và chú thích của bảng không nên giống nhau.';
$string['checkdesc:tabletdshouldnotmerge'] = 'Bảng lý tưởng không nên có bất kỳ ô nào được hợp nhất.';
$string['checkdesc:tablethshouldhavescope'] = 'Phạm vi hàng hoặc cột của bảng (được sử dụng để ánh xạ hàng và cột với mỗi ô) nên được khai báo.';

// Quy trình đăng ký.
$string['activate'] = 'Kích hoạt';
$string['activated'] = 'Plugin đã được kích hoạt và sẵn sàng sử dụng.';
$string['activationform'] = 'Biểu mẫu đăng ký';
$string['activationheader'] = 'Kích hoạt Brickfield';
$string['activationinfo'] = '<p>Để sử dụng plugin này, bạn phải cung cấp các mã chính xác cho trang web này trong biểu mẫu này.</p><p>Vui lòng <a href="{$a}" data-action="send_info" target="_blank">đăng ký tại Cổng thông tin Brickfield (mở trong cửa sổ mới)</a> để nhận các mã này nếu bạn chưa có chúng. </p><p>Sau khi kích hoạt, các mã của bạn sẽ được xác nhận thông qua các nhiệm vụ cron được lên lịch.</p>';
$string['contenttypeerrors'] = 'Tổng kết kết quả của các bài kiểm tra nội dung hoạt động cho mỗi khóa học và mỗi loại nội dung.';
$string['contentyperesults'] = 'Tổng số qua/lỗi cho các khu vực nội dung mỗi khóa học.';
$string['country'] = 'Quốc gia';
$string['country_help'] = 'Quốc gia của trang web';
$string['hashcorrect'] = 'Mã nhập vào là chính xác.';
$string['hashincorrect'] = 'Mã nhập vào không chính xác.';
$string['inactive'] = 'Plugin không hoạt động và không thể sử dụng. Vui lòng nhập các mã đăng ký hợp lệ và nhấn "Kích hoạt".';
$string['installed'] = 'Plugin đã được cài đặt';
$string['installedcli'] = 'Plugin đã được cài đặt qua dòng lệnh';
$string['installeddescription'] = 'Plugin đã được cài đặt, chuyển hướng đến biểu mẫu kích hoạt.';
$string['language'] = 'Ngôn ngữ';
$string['language_help'] = 'Ngôn ngữ của trang web';
$string['mobileservice'] = 'Dịch vụ di động đã được kích hoạt ({$a})';
$string['moreinfo'] = 'Thông tin thêm';
$string['numcourses'] = 'Số lượng khóa học ({$a})';
$string['numfactivities'] = 'Số lượng hoạt động ({$a})';
$string['numfiles'] = 'Số lượng tệp ({$a})';
$string['numusers'] = 'Số lượng người dùng ({$a})';
$string['percheckerrors'] = 'Số lượng các bài kiểm tra cụ thể và lỗi mỗi bài kiểm tra cho mỗi khóa học.';
$string['registration'] = 'Biểu mẫu đăng ký';
$string['release'] = 'Phiên bản Moodle ({$a})';
$string['secretkey'] = 'Khóa API';
$string['secretkey_help'] = 'Mã này được nhận qua email sau khi đăng ký.';
$string['sendfollowinginfo'] = '<p>Thông tin sau sẽ được gửi định kỳ để đóng góp vào thống kê tổng quát. Nó sẽ không được công khai trên bất kỳ danh sách trung tâm nào.</p> {$a}';
$string['sitehash'] = 'Khóa bí mật';
$string['sitehash_help'] = 'Mã này được nhận qua email sau khi đăng ký.';
$string['usersmobileregistered'] = 'Số lượng người dùng đã đăng ký thiết bị di động ({$a})';
$string['validationerror'] = 'Xác nhận khóa đăng ký đã thất bại. Kiểm tra URL trang web đã đăng ký và các khóa có đúng không.';

// Phần công cụ.
$string['activityresults:pluginname'] = 'Báo cáo công cụ phân tích vấn đề khả năng tiếp cận hoạt động';
$string['activityresults:toolname'] = 'Tóm tắt phân tích hoạt động';
$string['activityresults:toolshortname'] = 'Tóm tắt hoạt động';
$string['advanced:pluginname'] = 'Báo cáo công cụ phân tích vấn đề tiếp cận nâng cao';
$string['advanced:toolname'] = 'Tóm tắt nâng cao';
$string['advanced:toolshortname'] = 'Nâng cao';
$string['checktyperesults:pluginname'] = 'Báo cáo công cụ phân tích vấn đề tiếp cận loại nội dung';
$string['checktyperesults:toolname'] = 'Tóm tắt loại nội dung';
$string['checktyperesults:toolshortname'] = 'Loại nội dung';
$string['errors:pluginname'] = 'Danh sách lỗi công cụ phân tích vấn đề tiếp cận';
$string['errors:toolname'] = 'Tóm tắt danh sách lỗi';
$string['errors:toolshortname'] = 'Danh sách lỗi';
$string['printable:pluginname'] = 'Báo cáo tổng kết công cụ phân tích vấn đề tiếp cận';
$string['printable:toolname'] = 'Báo cáo tổng kết';
$string['printable:toolshortname'] = 'Báo cáo tổng kết';
$string['printable:downloadpdf'] = 'Tải xuống PDF';
$string['printable:printreport'] = 'Báo cáo có thể in';
$string['error:nocoursespecified'] = 'Báo cáo tổng kết yêu cầu một ID khóa học hợp lệ. Vui lòng truy cập vào bộ công cụ tiếp cận từ trong một khóa học.';
$string['pdf:filename'] = 'Báo cáo tổng kết Brickfield_IDKhóaHọc-{$a}';

// Trang nâng cao.
$string['bannercontentone'] = 'Bộ công cụ Tiếp cận Doanh nghiệp có một bộ tính năng đầy đủ để giúp tổ chức của bạn cải thiện tính khả dụng của các khóa học của bạn. <a href="{$a}">Liên hệ với Brickfield Education Labs</a> để đặt lịch thử nghiệm miễn phí các tính năng nâng cao.';
$string['bannercontenttwo'] = 'Xây dựng một nền tảng giảng dạy và học tập hiệu quả và bao gồm bằng cách tìm kiếm nội dung không đáp ứng các hướng dẫn, sửa chữa các vấn đề và tạo ra các tệp tin, biên tập viên và các tính năng cải tiến tương lai của khóa học Moodle của bạn với các tập tin truy cập được, biên tập viên và các tính năng cải tiến.';
$string['bannerheadingone'] = 'Nâng cấp lên Bộ công cụ Tiếp cận Doanh nghiệp';
$string['contactus'] = 'Liên hệ với chúng tôi';
$string['buttonone'] = 'Nhận bản demo miễn phí';
$string['contentone'] = 'Tự động đánh giá nội dung khóa học và bài đánh giá về các vấn đề tiếp cận.';
$string['contenttwo'] = 'Cập nhật hàng loạt văn bản không rõ ràng hoặc thiếu sót cho các liên kết web, mô tả hình ảnh và phụ đề video.';
$string['contentthree'] = 'Cung cấp cho sinh viên của bạn nội dung dưới các định dạng truy cập được bao gồm Audio, ePub và Braille điện tử.';
$string['contentfour'] = 'Xác định xem hoạt động nào có nhiều vấn đề tiếp cận nhất để ưu tiên công sức.';
$string['contentfive'] = 'Tự động sửa các thẻ HTML đã lỗi thời.';
$string['contentsix'] = 'Cung cấp các gợi ý cho giáo viên về cách tạo nội dung tốt hơn vào thời điểm thích hợp.';
$string['footerheading'] = 'Phần chân trang';
$string['headingone'] = 'Đánh giá nội dung';
$string['headingtwo'] = 'Sửa chữa';
$string['headingthree'] = 'Định dạng tệp truy cập được';
$string['headingfour'] = 'Tập trung nỗ lực';
$string['headingfive'] = 'Sửa chữa HTML';
$string['headingsix'] = 'Hỗ trợ hiệu suất';
$string['icon:analytics-custom'] = 'Biểu tượng phân tích';
$string['icon:tools-custom'] = 'Biểu tượng công cụ';
$string['icon:file-edit-custom'] = 'Biểu tượng chỉnh sửa tệp';
$string['icon:search-plus-custom'] = 'Biểu tượng tìm kiếm';
$string['icon:wand-magic-custom'] = 'Biểu tượng cây đũa phép';
$string['icon:hands-helping-custom'] = 'Biểu tượng tay giúp đỡ';
