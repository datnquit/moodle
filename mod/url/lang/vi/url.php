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
 * Strings for component 'url', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    mod_url
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['clicktoopen'] = 'Nhấp vào {$a} để mở tài nguyên.';
$string['configdisplayoptions'] = 'Chọn tất cả các tùy chọn nên có sẵn, các thiết lập hiện tại sẽ không bị thay đổi. Giữ phím CTRL để chọn nhiều trường.';
$string['configframesize'] = 'Khi một trang web hoặc tệp đã tải lên được hiển thị trong một khung, giá trị này là chiều cao (tính bằng pixel) của khung trên cùng (chứa điều hướng).';
$string['configrolesinparams'] = 'Tên vai trò tùy chỉnh (từ cài đặt khóa học) có nên có sẵn như là biến cho các tham số URL không?';
$string['configsecretphrase'] = 'Cụm từ bí mật này được sử dụng để tạo mã hóa giá trị có thể được gửi tới một số máy chủ như một tham số. Mã hóa được tạo ra bằng giá trị md5 của địa chỉ IP người dùng hiện tại kết hợp với cụm từ bí mật của bạn. Ví dụ: code = md5(IP.secretphrase). Xin lưu ý rằng điều này không đáng tin cậy vì địa chỉ IP có thể thay đổi và thường được chia sẻ bởi các máy tính khác nhau.';
$string['contentheader'] = 'Nội dung';
$string['createurl'] = 'Tạo một URL';
$string['displayoptions'] = 'Tùy chọn hiển thị có sẵn';
$string['displayselect'] = 'Hiển thị';
$string['displayselect_help'] = 'Thiết lập này, cùng với loại tệp URL và liệu trình duyệt có cho phép nhúng hay không, xác định cách hiển thị URL. Các tùy chọn có thể bao gồm:

* Tự động - Tùy chọn hiển thị tốt nhất cho URL được chọn tự động
* Nhúng - URL được hiển thị trong trang bên dưới thanh điều hướng cùng với mô tả URL và bất kỳ khối nào
* Mở - Chỉ URL được hiển thị trong cửa sổ trình duyệt
* Trong cửa sổ pop-up - URL được hiển thị trong cửa sổ trình duyệt mới không có menu hoặc thanh địa chỉ
* Trong khung - URL được hiển thị trong khung bên dưới thanh điều hướng và mô tả URL
* Cửa sổ mới - URL được hiển thị trong cửa sổ trình duyệt mới có menu và thanh địa chỉ';
$string['displayselectexplain'] = 'Chọn loại hiển thị, đáng tiếc là không phải tất cả các loại đều phù hợp với tất cả các URL.';
$string['externalurl'] = 'URL bên ngoài';
$string['framesize'] = 'Chiều cao khung';
$string['invalidstoredurl'] = 'Không thể hiển thị tài nguyên này, URL không hợp lệ.';
$string['chooseavariable'] = 'Chọn một biến...';
$string['indicator:cognitivedepth'] = 'URL nhận thức';
$string['indicator:cognitivedepth_help'] = 'Chỉ báo này dựa trên mức độ nhận thức mà học sinh đạt được trong tài nguyên URL.';
$string['indicator:cognitivedepthdef'] = 'URL nhận thức';
$string['indicator:cognitivedepthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm này của sự tham gia nhận thức được cung cấp bởi các tài nguyên URL trong khoảng thời gian phân tích này (Các mức = Không xem, Xem)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL xã hội';
$string['indicator:socialbreadth_help'] = 'Chỉ báo này dựa trên mức độ xã hội mà học sinh đạt được trong tài nguyên URL.';
$string['indicator:socialbreadthdef'] = 'URL xã hội';
$string['indicator:socialbreadthdef_help'] = 'Người tham gia đã đạt được tỷ lệ phần trăm này của sự tham gia xã hội được cung cấp bởi các tài nguyên URL trong khoảng thời gian phân tích này (Các mức = Không tham gia, Tham gia một mình)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidurl'] = 'URL nhập vào không hợp lệ';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'Mô-đun URL cho phép giáo viên cung cấp một liên kết web như là một tài nguyên khóa học. Bất cứ điều gì có sẵn miễn phí trực tuyến, chẳng hạn như tài liệu hoặc hình ảnh, có thể được liên kết đến; URL không cần phải là trang chủ của một trang web. URL của một trang web cụ thể có thể được sao chép và dán hoặc giáo viên có thể sử dụng trình chọn tệp và chọn một liên kết từ một kho lưu trữ như Flickr, YouTube hoặc Wikimedia (tùy thuộc vào kho lưu trữ được kích hoạt cho trang web).

Có một số tùy chọn hiển thị cho URL, chẳng hạn như nhúng hoặc mở trong cửa sổ mới và các tùy chọn nâng cao để truyền thông tin, chẳng hạn như tên của học sinh, đến URL nếu cần thiết.

Lưu ý rằng URL cũng có thể được thêm vào bất kỳ loại tài nguyên hoặc hoạt động nào khác thông qua trình soạn thảo văn bản.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'Các URL';
$string['name'] = 'Tên';
$string['name_help'] = 'Điều này sẽ đóng vai trò như văn bản liên kết cho URL.

Nhập một văn bản có ý nghĩa mô tả ngắn gọn mục đích của URL.

Tránh sử dụng từ "liên kết". Điều này sẽ giúp người dùng sử dụng trình đọc màn hình vì trình đọc màn hình thông báo các liên kết (ví dụ: "Moodle.org, liên kết") nên không cần bao gồm từ "liên kết" trong trường tên.';
$string['page-mod-url-x'] = 'Bất kỳ trang mô-đun URL nào';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'Các biến URL';
$string['parametersheader_help'] = 'Phần này cho phép bạn truyền thông tin nội bộ như một phần của URL. Điều này hữu ích nếu URL là một trang web tương tác mà chấp nhận các tham số, và bạn muốn truyền tải điều gì đó như tên của người dùng hiện tại, ví dụ. Nhập tên của tham số URL trong ô văn bản rồi chọn biến tương ứng từ trang web.';
$string['pluginadministration'] = 'Quản trị mô-đun URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Chiều cao pop-up (tính bằng pixel)';
$string['popupheightexplain'] = 'Chỉ định chiều cao mặc định của các cửa sổ pop-up.';
$string['popupwidth'] = 'Chiều rộng pop-up (tính bằng pixel)';
$string['popupwidthexplain'] = 'Chỉ định chiều rộng mặc định của các cửa sổ pop-up.';
$string['printintro'] = 'Hiển thị mô tả URL';
$string['printintroexplain'] = 'Hiển thị mô tả URL dưới nội dung? Một số loại hiển thị có thể không hiển thị mô tả ngay cả khi được bật.';
$string['privacy:metadata'] = 'Plugin tài nguyên URL không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['rolesinparams'] = 'Tên vai trò như biến URL';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL máy chủ';
$string['url:addinstance'] = 'Thêm một tài nguyên URL mới';
$string['url:view'] = 'Xem URL';
