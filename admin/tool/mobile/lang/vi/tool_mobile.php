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
 * Strings for component 'tool_mobile', language 'en'
 *
 * @package    tool_mobile
 * @copyright  2016 Juan Leyva
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['adodbdebugwarning'] = 'Gỡ lỗi ADOdb đang được bật. Nó nên được tắt trong cài đặt xác thực cơ sở dữ liệu bên ngoài hoặc plugin ghi danh cơ sở dữ liệu bên ngoài.';
$string['androidappid'] = 'Định danh duy nhất của ứng dụng Android';
$string['androidappid_desc'] = 'Cài đặt này có thể để mặc định trừ khi bạn có ứng dụng Android tùy chỉnh.';
$string['apppolicy'] = 'URL chính sách ứng dụng';
$string['apppolicy_help'] = 'URL của một chính sách cho người dùng ứng dụng được liệt kê trên trang Giới thiệu trong ứng dụng. Nếu trường này để trống, URL chính sách trang web sẽ được sử dụng thay thế.';
$string['apprequired'] = 'Chức năng này chỉ khả dụng khi truy cập qua ứng dụng di động hoặc ứng dụng máy tính để bàn Moodle.';
$string['autologinkeygenerationlockout'] = 'Khóa tạo khóa đăng nhập tự động. Bạn cần chờ {$a} phút giữa các yêu cầu.';
$string['autologinmintimebetweenreq'] = 'Thời gian tối thiểu giữa các yêu cầu đăng nhập tự động';
$string['autologinmintimebetweenreq_desc'] = 'Thời gian tối thiểu giữa các yêu cầu đăng nhập tự động từ ứng dụng di động. Nếu người dùng ứng dụng thường xuyên được yêu cầu nhập thông tin đăng nhập khi xem nội dung nhúng từ trang web, thì đặt giá trị thấp hơn.';
$string['autologinnotallowedtoadmins'] = 'Đăng nhập tự động không được phép đối với quản trị viên trang web.';
$string['autologout'] = 'Bắt buộc tự động đăng xuất cho người dùng của bạn';
$string['autologout_desc'] = 'Vì lý do bảo mật, bạn có thể bắt buộc tự động đăng xuất người dùng khi họ rời khỏi hoặc đóng ứng dụng, hoặc khi nó chuyển sang nền. Người dùng sẽ phải đăng nhập lại khi họ trở lại ứng dụng.';
$string['autologoutcustom'] = 'Thời gian tùy chỉnh sau khi người dùng rời khỏi hoặc đóng ứng dụng';
$string['autologoutinmediate'] = 'Ngay lập tức sau khi người dùng rời khỏi hoặc đóng ứng dụng';
$string['autologouttime'] = 'Bộ hẹn giờ tự động đăng xuất';
$string['cachedef_plugininfo'] = 'Điều này lưu trữ danh sách các plugin với các addon di động';
$string['cachedef_subscriptiondata'] = 'Điều này lưu trữ thông tin đăng ký ứng dụng Moodle.';
$string['clickheretolaunchtheapp'] = 'Nhấp vào đây nếu ứng dụng không tự động mở.';
$string['configmobilecssurl'] = 'Một tệp CSS để tùy chỉnh giao diện ứng dụng di động của bạn.';
$string['customlangstrings'] = 'Chuỗi ngôn ngữ tùy chỉnh';
$string['customlangstrings_desc'] = 'Các từ và cụm từ hiển thị trong ứng dụng có thể được tùy chỉnh ở đây. Nhập từng chuỗi ngôn ngữ tùy chỉnh trên một dòng mới với định dạng: định danh chuỗi, chuỗi ngôn ngữ tùy chỉnh và mã ngôn ngữ, phân tách bằng ký tự gạch dọc. Ví dụ:
<pre>
mm.user.student|Người học|vi
mm.user.student|Estudiante|es
</pre>
Để có danh sách đầy đủ các định danh chuỗi, xem tài liệu.';
$string['custommenuitems'] = 'Các mục menu tùy chỉnh';
$string['custommenuitems_desc'] = 'Các mục bổ sung có thể được thêm vào menu chính của ứng dụng bằng cách chỉ định chúng ở đây. Nhập từng mục menu tùy chỉnh trên một dòng mới với định dạng: văn bản mục, URL liên kết, phương pháp mở liên kết và mã ngôn ngữ (tùy chọn, để hiển thị mục cho người dùng của ngôn ngữ chỉ định), phân tách bằng ký tự gạch dọc.

Các phương pháp mở liên kết là: app (để liên kết tới một hoạt động được hỗ trợ bởi ứng dụng), inappbrowser (để mở một liên kết trong trình duyệt mà không rời khỏi ứng dụng), browser (để mở liên kết trong trình duyệt mặc định của thiết bị bên ngoài ứng dụng) và embedded (để hiển thị liên kết trong iframe trên một trang mới trong ứng dụng).

Khi các mục thiếu bản dịch cho một ngôn ngữ nhất định, chúng sẽ sử dụng các ngôn ngữ khác làm dự phòng trừ khi "_only" được thêm vào mã ngôn ngữ.

Ví dụ:
<pre>
Trợ giúp ứng dụng|https://someurl.xyz/help|inappbrowser
Điểm số của tôi|https://someurl.xyz/local/mygrades/index.php|embedded|en
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
Bạn chỉ thấy điều này bằng tiếng Anh|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Chế độ tối';
$string['disabledfeatures'] = 'Tính năng bị vô hiệu hóa';
$string['disabledfeatures_desc'] = 'Chọn các tính năng bạn muốn vô hiệu hóa trong ứng dụng di động cho trang web của bạn. Lưu ý rằng một số tính năng được liệt kê ở đây có thể đã bị vô hiệu hóa thông qua các cài đặt trang web khác. Bạn sẽ phải đăng xuất và đăng nhập lại trong ứng dụng để thấy các thay đổi.';
$string['displayerrorswarning'] = 'Hiển thị thông báo lỗi (debugdisplay) đang được bật. Nó nên được tắt.';
$string['downloadcourse'] = 'Tải xuống khóa học';
$string['downloadcourses'] = 'Tải xuống các khóa học';
$string['enablesmartappbanners'] = 'Bật biểu ngữ ứng dụng';
$string['enablesmartappbanners_desc'] = 'Nếu được bật, một biểu ngữ quảng cáo ứng dụng di động sẽ được hiển thị khi truy cập trang web bằng trình duyệt di động.';
$string['filetypeexclusionlist'] = 'Danh sách loại tệp loại trừ';
$string['filetypeexclusionlist_desc'] = 'Chọn tất cả các loại tệp không sử dụng trên thiết bị di động. Các tệp như vậy sẽ được liệt kê trong khóa học, sau đó nếu người dùng cố gắng mở chúng, một cảnh báo sẽ hiển thị thông báo rằng loại tệp này không dành cho thiết bị di động. Người dùng có thể hủy hoặc bỏ qua cảnh báo và mở tệp.';
$string['filetypeexclusionlistplaceholder'] = 'Danh sách loại tệp loại trừ di động';
$string['forcedurlscheme'] = 'Nếu bạn muốn chỉ cho phép ứng dụng thương hiệu tùy chỉnh của bạn được mở qua cửa sổ trình duyệt, thì hãy chỉ định lược đồ URL của nó ở đây. Nếu bạn muốn chỉ cho phép ứng dụng chính thức, hãy đặt giá trị mặc định. Để trống trường này nếu bạn muốn cho phép bất kỳ ứng dụng nào.';
$string['forcedurlscheme_key'] = 'Lược đồ URL';
$string['forcelogout'] = 'Buộc đăng xuất';
$string['forcelogout_desc'] = 'Nếu được bật, người dùng sẽ luôn hoàn toàn đăng xuất ngay cả khi chuyển đổi tài khoản. Họ phải nhập lại mật khẩu lần sau khi họ muốn truy cập trang web.';
$string['h5poffline'] = 'Xem nội dung H5P ngoại tuyến';
$string['httpsrequired'] = 'Yêu cầu HTTPS';
$string['insecurealgorithmwarning'] = 'Có vẻ như chứng chỉ HTTPS sử dụng thuật toán không an toàn để ký (SHA-1). Vui lòng thử cập nhật chứng chỉ.';
$string['invalidcertificatechainwarning'] = 'Có vẻ như chuỗi chứng chỉ không hợp lệ. Chứng chỉ này có thể hoạt động trên trình duyệt nhưng không hoạt động trên ứng dụng di động.';
$string['invalidcertificateexpiredatewarning'] = 'Có vẻ như chứng chỉ HTTPS cho trang web đã hết hạn.';
$string['invalidcertificatestartdatewarning'] = 'Có vẻ như chứng chỉ HTTPS cho trang web chưa hợp lệ (với ngày bắt đầu trong tương lai).';
$string['invalidprivatetoken'] = 'Mã thông báo riêng không hợp lệ. Mã thông báo không nên trống hoặc truyền qua tham số GET.';
$string['invaliduserquotawarning'] = 'Hạn mức người dùng (userquota) được đặt ở một số không hợp lệ. Nó nên được đặt ở một số hợp lệ (giá trị số nguyên) trong cài đặt bảo mật trang web.';
$string['iosappid'] = 'Định danh duy nhất của ứng dụng iOS';
$string['iosappid_desc'] = 'Cài đặt này có thể để mặc định trừ khi bạn có ứng dụng iOS tùy chỉnh.';
$string['launchviasiteinbrowser'] = 'Khởi chạy qua trang web trong trình duyệt hệ thống';
$string['loginintheapp'] = 'Qua ứng dụng';
$string['logininthebrowser'] = 'Qua cửa sổ trình duyệt (dành cho plugin SSO)';
$string['loginintheembeddedbrowser'] = 'Qua trình duyệt nhúng (dành cho plugin SSO)';
$string['logoutconfirmation'] = 'Bạn có chắc chắn muốn đăng xuất khỏi ứng dụng di động trên thiết bị di động của mình không? Bằng cách đăng xuất, bạn sẽ cần nhập lại tên người dùng và mật khẩu của mình trong ứng dụng di động trên tất cả các thiết bị mà bạn đã cài đặt ứng dụng.';
$string['mainmenu'] = 'Menu chính';
$string['managefiletypes'] = 'Quản lý loại tệp';
$string['minimumversion'] = 'Nếu một phiên bản ứng dụng được chỉ định (3.8.0 hoặc cao hơn), bất kỳ người dùng nào sử dụng phiên bản ứng dụng cũ hơn sẽ được nhắc cập nhật ứng dụng của họ trước khi được phép truy cập trang web.';
$string['minimumversion_key'] = 'Phiên bản ứng dụng tối thiểu yêu cầu';
$string['mobileapp'] = 'Ứng dụng di động';
$string['mobileappenabled'] = 'Trang web này đã bật truy cập ứng dụng di động.<br /><a href="{$a}">Tải xuống ứng dụng di động</a>.';
$string['mobileappearance'] = 'Giao diện di động';
$string['mobileappsubscription'] = 'Đăng ký ứng dụng Moodle';
$string['mobileauthentication'] = 'Xác thực di động';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Tính năng di động';
$string['mobilenotificationsdisabledwarning'] = 'Thông báo di động chưa được bật. Chúng nên được bật trong cài đặt Thông báo.';
$string['mobilesettings'] = 'Cài đặt di động';
$string['moodleappsportalfeatureswarning'] = 'Lưu ý rằng một số tính năng có thể bị giới hạn tùy thuộc vào gói đăng ký ứng dụng Moodle của bạn. Để biết chi tiết, hãy truy cập <a href="{$a}" target="_blank">Cổng thông tin ứng dụng Moodle</a>.';
$string['notifications'] = 'Thông báo';
$string['notificationsactivedevices'] = 'Thiết bị đang hoạt động';
$string['notificationsignorednotifications'] = 'Thông báo không được gửi';
$string['notificationslimitreached'] = 'Giới hạn thiết bị người dùng hoạt động hàng tháng đã bị vượt quá. Thông báo cho một số người dùng sẽ không được gửi. Khuyến nghị rằng bạn nâng cấp gói ứng dụng của mình trong <a href="{$a}" target="_blank">Cổng thông tin ứng dụng Moodle</a>.';
$string['notificationsmissingwarning'] = 'Không thể truy xuất thống kê thông báo ứng dụng Moodle. Điều này có khả năng cao là do thông báo di động chưa được bật trên trang web. Bạn có thể bật chúng trong Quản trị Trang / Nhắn tin / Di động.';
$string['notificationsnewdevices'] = 'Thiết bị mới';
$string['notificationsseemore'] = 'Lưu ý: Thống kê sử dụng ứng dụng Moodle không được tính toán theo thời gian thực. Để truy cập thống kê chi tiết hơn, bao gồm dữ liệu từ các tháng trước, vui lòng đăng nhập vào <a href="{$a}" target="_blank">Cổng thông tin ứng dụng Moodle</a>.';
$string['notificationssentnotifications'] = 'Thông báo đã gửi';
$string['notificationscurrentactivedevices'] = 'Thiết bị nhận thông báo trong tháng này';
$string['oauth2identityproviders'] = 'Nhà cung cấp danh tính OAuth 2';
$string['offlineuse'] = 'Sử dụng ngoại tuyến';
$string['pluginname'] = 'Công cụ ứng dụng Moodle';
$string['pluginnotenabledorconfigured'] = 'Plugin chưa được bật hoặc cấu hình.';
$string['qrcodedisabled'] = 'Truy cập qua mã QR bị vô hiệu hóa';
$string['qrcodeformobileappaccess'] = 'Mã QR để truy cập ứng dụng di động';
$string['qrcodeformobileapploginabout'] = 'Quét mã QR bằng ứng dụng di động của bạn và bạn sẽ tự động đăng nhập. Mã QR sẽ hết hạn trong {$a}.';
$string['qrcodeformobileappurlabout'] = 'Quét mã QR bằng ứng dụng di động của bạn để điền URL trang web vào ứng dụng của bạn.';
$string['qrsiteadminsnotallowed'] = 'Vì lý do bảo mật, đăng nhập qua mã QR không được phép cho quản trị viên trang web hoặc nếu bạn đang đăng nhập dưới danh nghĩa người dùng khác.';
$string['qrcodetype'] = 'Truy cập mã QR';
$string['qrcodetype_desc'] = 'Một mã QR có thể được cung cấp cho người dùng ứng dụng di động để quét. Điều này có thể được sử dụng để điền URL trang web, hoặc nếu trang web được bảo mật bằng HTTPS, để tự động đăng nhập người dùng mà không cần nhập tên người dùng và mật khẩu.';
$string['qrcodetypeurl'] = 'Mã QR với URL trang web';
$string['qrcodetypelogin'] = 'Mã QR với đăng nhập tự động';
$string['qrkeyttl'] = 'Thời gian tồn tại của khóa xác thực QR';
$string['qrkeyttl_desc'] = 'Thời gian mà một mã QR cho đăng nhập tự động có giá trị.';
$string['qrsameipcheck'] = 'Kiểm tra cùng IP xác thực QR';
$string['qrsameipcheck_desc'] = 'Người dùng phải sử dụng cùng một mạng cho cả việc tạo và quét mã QR để đăng nhập. Chỉ vô hiệu hóa nếu người dùng báo cáo vấn đề với việc đăng nhập QR.';
$string['readingthisemailgettheapp'] = 'Bạn đang đọc email này? <a href="{$a}">Tải xuống ứng dụng di động và nhận thông báo trên thiết bị di động của bạn</a>.';
$string['remoteaddons'] = 'Addon từ xa';
$string['scanqrcode'] = 'Quét mã QR';
$string['selfsignedoruntrustedcertificatewarning'] = 'Có vẻ như chứng chỉ HTTPS là tự ký hoặc không đáng tin cậy. Ứng dụng di động chỉ hoạt động với các trang web đáng tin cậy. Vui lòng sử dụng bất kỳ công cụ kiểm tra SSL trực tuyến nào để chẩn đoán vấn đề. Nếu công cụ đó cho biết chứng chỉ của bạn ổn, bạn có thể bỏ qua cảnh báo này.';
$string['setuplink'] = 'Trang tải xuống ứng dụng';
$string['setuplink_desc'] = 'URL của trang có các tùy chọn để tải xuống ứng dụng di động từ App Store và Google Play. Liên kết trang tải xuống ứng dụng được hiển thị ở cuối trang và trong hồ sơ của người dùng. Để trống để không hiển thị liên kết.';
$string['smartappbanners'] = 'Biểu ngữ ứng dụng';
$string['subscription'] = 'Đăng ký';
$string['subscriptioncreated'] = 'Ngày bắt đầu';
$string['subscriptionerrorrequest'] = 'Có lỗi không mong muốn khi cố gắng truy xuất thông tin đăng ký ứng dụng Moodle của bạn.';
$string['subscriptionexpiration'] = 'Ngày hết hạn';
$string['subscriptionfeaturenotapplied'] = 'Tính năng này được cấu hình trên trang web của bạn nhưng không được bao gồm trong gói ứng dụng Moodle của bạn. Do đó, cài đặt sẽ không có hiệu lực.';
$string['subscriptionfeatures'] = 'Tính năng đăng ký';
$string['subscriptionlimitsurpassed'] = 'Giới hạn đăng ký đã vượt quá';
$string['subscriptionregister'] = 'Để biết chi tiết về các gói ứng dụng khác nhau và truy cập thống kê sử dụng ứng dụng Moodle, vui lòng truy cập <a href="{$a}" target="_blank">Cổng thông tin ứng dụng Moodle</a>.';
$string['subscriptionsseemore'] = 'Lưu ý: Thông tin hiển thị không được cập nhật theo thời gian thực. Bạn có thể cần đăng xuất và đăng nhập lại để thấy các cập nhật. Để biết thông tin về nâng cấp gói ứng dụng của bạn, vui lòng đăng nhập vào <a href="{$a}" target="_blank">Cổng thông tin ứng dụng Moodle</a>.';
$string['typeoflogin'] = 'Loại đăng nhập';
$string['typeoflogin_desc'] = 'Nếu trang web sử dụng phương pháp xác thực SSO, thì chọn qua cửa sổ trình duyệt hoặc qua trình duyệt nhúng. Trình duyệt nhúng cung cấp trải nghiệm người dùng tốt hơn, mặc dù không hoạt động với tất cả các plugin SSO.';
$string['getmoodleonyourmobile'] = 'Tải ứng dụng di động';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Ngày yêu cầu khóa đăng nhập tự động lần cuối. Giữa mỗi yêu cầu cần 6 phút.';
$string['privacy:metadata:core_userkey'] = 'Khóa của người dùng được sử dụng để tạo khóa đăng nhập tự động cho người dùng hiện tại.';
$string['responsivemainmenuitems'] = 'Các mục menu đáp ứng';
$string['switchaccount'] = 'Chuyển tài khoản';
$string['viewqrcode'] = 'Xem mã QR';

