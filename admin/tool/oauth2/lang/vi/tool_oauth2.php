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
 * Strings for component 'tool_oauth2', language 'en'
 *
 * @package    tool_oauth2
 * @copyright  2017 Damyon Wiese
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['acceptrisk'] = 'Tôi hiểu rằng việc vô hiệu hóa xác minh email có thể gây ra vấn đề bảo mật.';
$string['acceptrisk_help'] = 'Vô hiệu hóa xác minh email có thể cho phép người dùng xác thực là người khác.';
$string['authconfirm'] = 'Hành động này sẽ cấp quyền truy cập API vĩnh viễn vào Moodle cho tài khoản đã xác thực. Điều này nhằm được sử dụng như một tài khoản hệ thống để quản lý các tệp thuộc sở hữu của Moodle.';
$string['authconnected'] = 'Tài khoản hệ thống hiện đã được kết nối để truy cập ngoại tuyến';
$string['authnotconnected'] = 'Tài khoản hệ thống chưa được kết nối để truy cập ngoại tuyến';
$string['clever_service'] = 'Clever';
$string['configured'] = 'Đã cấu hình';
$string['configuredstatus'] = 'Đã cấu hình';
$string['connectsystemaccount'] = 'Kết nối với tài khoản hệ thống';
$string['createfromtemplate'] = 'Tạo dịch vụ OAuth 2 từ mẫu';
$string['createfromtemplatedesc'] = 'Chọn một trong các mẫu dịch vụ OAuth 2 bên dưới để tạo dịch vụ OAuth với cấu hình hợp lệ cho một trong các loại dịch vụ đã biết. Điều này sẽ tạo dịch vụ OAuth 2, với tất cả các điểm cuối và tham số cần thiết cho xác thực, tuy nhiên bạn vẫn cần nhập ID và bí mật khách hàng cho dịch vụ mới trước khi nó có thể được sử dụng.';
$string['createnewendpoint'] = 'Tạo điểm cuối mới cho nhà cung cấp "{$a}"';
$string['createnewservice'] = 'Tạo dịch vụ mới:';
$string['createnewuserfieldmapping'] = 'Tạo ánh xạ trường người dùng mới cho nhà cung cấp "{$a}"';
$string['custom_service'] = 'Tùy chỉnh';
$string['deleteconfirm'] = 'Bạn có chắc chắn muốn xóa nhà cung cấp nhận diện "{$a}"? Bất kỳ plugin nào dựa vào nhà cung cấp này sẽ ngừng hoạt động.';
$string['deleteendpointconfirm'] = 'Bạn có chắc chắn muốn xóa điểm cuối "{$a->endpoint}" cho nhà cung cấp "{$a->issuer}"? Bất kỳ plugin nào dựa vào điểm cuối này sẽ ngừng hoạt động.';
$string['deleteuserfieldmappingconfirm'] = 'Bạn có chắc chắn muốn xóa ánh xạ trường người dùng cho nhà cung cấp "{$a}"?';
$string['discovered_help'] = 'Khám phá có nghĩa là các điểm cuối OAuth 2 có thể được xác định tự động từ URL cơ sở cho dịch vụ OAuth. Không phải tất cả các dịch vụ đều cần được "khám phá", nhưng nếu không, thông tin về các điểm cuối và ánh xạ người dùng sẽ cần được nhập thủ công.';
$string['discovered'] = 'Khám phá dịch vụ thành công';
$string['discoverystatus'] = 'Khám phá';
$string['editendpoint'] = 'Chỉnh sửa điểm cuối: {$a->endpoint} cho nhà cung cấp {$a->issuer}';
$string['editendpoints'] = 'Cấu hình các điểm cuối';
$string['editissuer'] = 'Chỉnh sửa nhà cung cấp nhận diện: {$a}';
$string['edituserfieldmapping'] = 'Chỉnh sửa ánh xạ trường người dùng cho nhà cung cấp {$a}';
$string['edituserfieldmappings'] = 'Cấu hình ánh xạ trường người dùng';
$string['endpointdeleted'] = 'Điểm cuối đã bị xóa';
$string['endpointname_help'] = 'Khóa được sử dụng để tìm kiếm điểm cuối này. Phải kết thúc bằng "_endpoint".';
$string['endpointname'] = 'Tên';
$string['endpointsforissuer'] = 'Các điểm cuối cho nhà cung cấp: {$a}';
$string['endpointurl_help'] = 'URL cho điểm cuối này. Phải sử dụng giao thức https://.';
$string['endpointurl'] = 'URL';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['issuersetup'] = 'Hướng dẫn chi tiết về cấu hình các dịch vụ OAuth 2 phổ biến';
$string['issuersetuptype'] = 'Hướng dẫn chi tiết về việc thiết lập nhà cung cấp OAuth 2 {$a}';
$string['issueralloweddomains_help'] = 'Nếu được đặt, cài đặt này là danh sách các miền được phân tách bằng dấu phẩy mà đăng nhập sẽ bị giới hạn khi sử dụng nhà cung cấp này.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issueralloweddomains'] = 'Miền đăng nhập';
$string['issuerbaseurl_help'] = 'URL cơ sở được sử dụng để truy cập dịch vụ.';
$string['issuerbaseurl'] = 'URL cơ sở dịch vụ';
$string['issuerclientid'] = 'ID khách hàng';
$string['issuerclientid_help'] = 'ID khách hàng OAuth cho nhà cung cấp này.';
$string['issuerclientsecret'] = 'Bí mật khách hàng';
$string['issuerclientsecret_help'] = 'Bí mật khách hàng OAuth cho nhà cung cấp này.';
$string['issuerdeleted'] = 'Nhà cung cấp nhận diện đã bị xóa';
$string['issuerdisabled'] = 'Nhà cung cấp nhận diện đã bị vô hiệu hóa';
$string['issuerenabled'] = 'Nhà cung cấp nhận diện đã được bật';
$string['issuerimage_help'] = 'URL hình ảnh được sử dụng để hiển thị logo cho nhà cung cấp này. Có thể được hiển thị trên trang đăng nhập.';
$string['issuerimage'] = 'URL logo';
$string['issuerloginpagename'] = 'Tên hiển thị trên trang đăng nhập';
$string['issuerloginpagename_help'] = 'Nếu được chỉ định, tên này sẽ được sử dụng trên trang đăng nhập thay vì tên dịch vụ.';
$string['issuerloginparams'] = 'Các tham số bổ sung được bao gồm trong yêu cầu đăng nhập.';
$string['issuerloginparams_help'] = 'Một số hệ thống yêu cầu các tham số bổ sung cho yêu cầu đăng nhập để đọc hồ sơ cơ bản của người dùng.';
$string['issuerloginparamsoffline'] = 'Các tham số bổ sung được bao gồm trong yêu cầu đăng nhập để truy cập ngoại tuyến.';
$string['issuerloginparamsoffline_help'] = 'Mỗi hệ thống OAuth định nghĩa một cách khác nhau để yêu cầu truy cập ngoại tuyến. Ví dụ: Google yêu cầu thêm các tham số: "access_type=offline&prompt=consent". Các tham số này nên ở định dạng tham số truy vấn URL.';
$string['issuerloginscopes_help'] = 'Một số hệ thống yêu cầu các phạm vi bổ sung cho yêu cầu đăng nhập để đọc hồ sơ cơ bản của người dùng. Các phạm vi tiêu chuẩn cho hệ thống tuân thủ OpenID Connect là "openid profile email".';
$string['issuerloginscopesoffline_help'] = 'Mỗi hệ thống OAuth định nghĩa một cách khác nhau để yêu cầu truy cập ngoại tuyến. Ví dụ: Microsoft yêu cầu phạm vi bổ sung "offline_access".';
$string['issuerloginscopesoffline'] = 'Các phạm vi bao gồm trong yêu cầu đăng nhập để truy cập ngoại tuyến.';
$string['issuerloginscopes'] = 'Các phạm vi bao gồm trong yêu cầu đăng nhập.';
$string['issuername_help'] = 'Tên của nhà cung cấp nhận diện. Có thể được hiển thị trên trang đăng nhập.';
$string['issuername'] = 'Tên';
$string['issuershowonloginpage_help'] = 'Nếu plugin xác thực OAuth 2 được bật, nhà cung cấp đăng nhập này sẽ được liệt kê trên trang đăng nhập để cho phép người dùng đăng nhập bằng tài khoản từ nhà cung cấp này.';
$string['issuershowonloginpage'] = 'Hiển thị trên trang đăng nhập';
$string['issuerrequireconfirmation_help'] = 'Yêu cầu tất cả người dùng xác minh địa chỉ email của họ trước khi họ có thể đăng nhập bằng OAuth. Điều này áp dụng cho các tài khoản mới được tạo như một phần của quá trình đăng nhập, hoặc khi một tài khoản Moodle hiện có được kết nối với đăng nhập OAuth qua các địa chỉ email khớp nhau.';
$string['issuerrequireconfirmation'] = 'Yêu cầu xác minh email';
$string['issuers'] = 'Nhà cung cấp';
$string['issuersservicesallow'] = 'Cho phép dịch vụ';
$string['issuersservicesnotallow'] = 'Không cho phép dịch vụ';
$string['issuerusein'] = 'Dịch vụ này sẽ được sử dụng';
$string['issuerusein_help'] = 'Các dịch vụ OAuth 2 có thể được sử dụng cho các dịch vụ nội bộ, trên trang đăng nhập, hoặc cả hai, nếu cần.';
$string['issueruseineverywhere'] = 'Trang đăng nhập và các dịch vụ nội bộ';
$string['issueruseininternalonly'] = 'Chỉ các dịch vụ nội bộ';
$string['issueruseinloginonly'] = 'Chỉ trang đăng nhập';
$string['issuerusedforlogin'] = 'Đăng nhập';
$string['issuerusedforinternal'] = 'Các dịch vụ nội bộ';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Hiển thị trên trang đăng nhập là';
$string['loginissuer'] = 'Cho phép đăng nhập';
$string['microsoft_service'] = 'Microsoft';
$string['moodlenet_service'] = 'MoodleNet';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Chưa được cấu hình';
$string['notdiscovered'] = 'Khám phá dịch vụ không thành công';
$string['notloginissuer'] = 'Không cho phép đăng nhập';
$string['pluginname'] = 'Dịch vụ OAuth 2';
$string['savechanges'] = 'Lưu thay đổi';
$string['serviceshelp'] = 'Hướng dẫn thiết lập nhà cung cấp dịch vụ.';
$string['systemaccountconnected_help'] = 'Tài khoản hệ thống được sử dụng để cung cấp chức năng nâng cao cho các plugin. Chúng không bắt buộc cho chức năng đăng nhập, nhưng các plugin khác sử dụng dịch vụ OAuth có thể cung cấp bộ tính năng giảm nếu tài khoản hệ thống chưa được kết nối. Ví dụ: các kho không thể hỗ trợ "liên kết kiểm soát" mà không có tài khoản hệ thống để thực hiện các thao tác tệp.';
$string['systemaccountconnected'] = 'Tài khoản hệ thống đã kết nối';
$string['systemaccountnotconnected'] = 'Tài khoản hệ thống chưa được kết nối';
$string['systemauthstatus'] = 'Tài khoản hệ thống đã kết nối';
$string['usebasicauth'] = 'Xác thực yêu cầu mã thông qua tiêu đề HTTP';
$string['usebasicauth_help'] = 'Sử dụng giao thức xác thực HTTP Basic khi gửi ID và mật khẩu khách hàng với yêu cầu mã thông báo làm mới. Được khuyến nghị bởi tiêu chuẩn OAuth 2, nhưng có thể không có sẵn với một số nhà cung cấp.';
$string['userfieldexternalfield'] = 'Tên trường bên ngoài';
$string['userfieldexternalfield_error'] = 'Trường này không thể chứa HTML.';
$string['userfieldexternalfield_help'] = 'Tên của trường được cung cấp bởi hệ thống OAuth bên ngoài.';
$string['userfieldinternalfield_help'] = 'Tên của trường người dùng Moodle nên được ánh xạ từ trường bên ngoài.';
$string['userfieldinternalfield'] = 'Tên trường nội bộ';
$string['userfieldmappingdeleted'] = 'Ánh xạ trường người dùng đã bị xóa';
$string['userfieldmappingsforissuer'] = 'Ánh xạ trường người dùng cho nhà cung cấp: {$a}';
$string['privacy:metadata'] = 'Plugin dịch vụ OAuth 2 không lưu trữ bất kỳ dữ liệu cá nhân nào.';

// Deprecated since Moodle 4.3.
$string['imsobv2p1_service'] = 'Open Badges';
