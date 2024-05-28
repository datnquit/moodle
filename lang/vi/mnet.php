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
 * Strings for component 'mnet', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['aboutyourhost'] = 'Thông tin về máy chủ của bạn';
$string['accesslevel'] = 'Cấp độ truy cập';
$string['addhost'] = 'Thêm máy chủ';
$string['addnewhost'] = 'Thêm máy chủ mới';
$string['addtoacl'] = 'Thêm vào danh sách kiểm soát truy cập';
$string['allhosts'] = 'Tất cả máy chủ';
$string['allhosts_no_options'] = 'Không có tùy chọn nào khi xem nhiều máy chủ';
$string['allow'] = 'Cho phép';
$string['applicationtype'] = 'Loại ứng dụng';
$string['authfail_nosessionexists'] = 'Xác thực thất bại: phiên MNet không tồn tại.';
$string['authfail_sessiontimedout'] = 'Xác thực thất bại: phiên MNet đã hết hạn.';
$string['authfail_usermismatch'] = 'Xác thực thất bại: người dùng không khớp.';
$string['authmnetdisabled'] = 'Plugin xác thực MNet đã <strong>bị tắt</strong>.';
$string['badcert'] = 'Đây không phải là chứng chỉ hợp lệ.';
$string['certdetails'] = 'Chi tiết chứng chỉ';
$string['configmnet'] = 'MNet cho phép máy chủ này giao tiếp với các máy chủ hoặc dịch vụ khác.';
$string['couldnotgetcert'] = 'Không tìm thấy chứng chỉ tại <br />{$a}. <br />Máy chủ có thể đã ngừng hoạt động hoặc cấu hình sai.';
$string['couldnotmatchcert'] = 'Chứng chỉ này không khớp với chứng chỉ hiện được công bố bởi máy chủ web.';
$string['courses'] = 'khóa học';
$string['courseson'] = 'khóa học trên';
$string['currentkey'] = 'Khóa công khai hiện tại';
$string['current_transport'] = 'Giao thức hiện tại';
$string['databaseerror'] = 'Không thể ghi chi tiết vào cơ sở dữ liệu.';
$string['deleteaserver'] = 'Xóa một máy chủ';
$string['deletehost'] = 'Xóa máy chủ';
$string['deletedhostinfo'] = 'Máy chủ này đã bị xóa. Nếu bạn muốn khôi phục lại, hãy chuyển trạng thái xóa về \'Không\'.';
$string['deletedhosts'] = 'Máy chủ đã xóa: {$a}';
$string['deletekeycheck'] = 'Bạn có chắc chắn muốn xóa khóa này không?';
$string['deleteoutoftime'] = 'Cửa sổ 60 giây để xóa khóa này đã hết hạn. Vui lòng bắt đầu lại.';
$string['deleteuserrecord'] = 'SSO ACL: xóa bản ghi cho người dùng \'{$a->user}\' từ {$a->host}.';
$string['deletewrongkeyvalue'] = 'Đã xảy ra lỗi. Nếu bạn không cố gắng xóa khóa SSL của máy chủ của mình, có thể bạn đã bị tấn công độc hại. Không có hành động nào đã được thực hiện.';
$string['deny'] = 'Từ chối';
$string['description'] = 'Mô tả';
$string['duplicate_usernames'] = 'Chúng tôi không thể tạo chỉ mục trên các cột "mnethostid" và "username" trong bảng người dùng của bạn.<br />Điều này có thể xảy ra khi bạn có <a href="{$a}" target="_blank">tên người dùng trùng lặp trong bảng người dùng của bạn</a>.<br />Nâng cấp của bạn vẫn có thể hoàn tất thành công. Nhấp vào liên kết trên, và hướng dẫn khắc phục sự cố này sẽ xuất hiện trong một cửa sổ mới. Bạn có thể xử lý vấn đề này sau khi hoàn tất nâng cấp.<br />';
$string['enabled_for_all'] = '(Dịch vụ này đã được kích hoạt cho tất cả các máy chủ).';
$string['enterausername'] = 'Vui lòng nhập tên người dùng, hoặc danh sách tên người dùng cách nhau bằng dấu phẩy.';
$string['error7020'] = 'Lỗi này thường xảy ra nếu trang web từ xa đã tạo một bản ghi cho bạn với wwwroot sai, ví dụ: https://yoursite.com thay vì https://www.yoursite.com. Vui lòng liên hệ với quản trị viên của trang web từ xa với wwwroot của bạn (như được chỉ định trong config.php) và yêu cầu họ cập nhật bản ghi cho máy chủ của bạn.';
$string['error7022'] = 'Tin nhắn bạn gửi đến trang web từ xa đã được mã hóa đúng cách, nhưng không được ký. Điều này rất bất ngờ; bạn có thể nên gửi báo lỗi nếu điều này xảy ra (cung cấp càng nhiều thông tin càng tốt về các phiên bản ứng dụng liên quan, v.v.).';
$string['error7023'] = 'Trang web từ xa đã cố gắng giải mã tin nhắn của bạn bằng tất cả các khóa mà nó có trên hồ sơ cho trang web của bạn. Tất cả đều thất bại. Bạn có thể khắc phục sự cố này bằng cách thủ công đặt lại khóa với trang web từ xa. Điều này ít xảy ra trừ khi bạn đã không liên lạc với trang web từ xa trong vài tháng.';
$string['error7024'] = 'Bạn gửi một tin nhắn không được mã hóa đến trang web từ xa, nhưng trang web từ xa không chấp nhận giao tiếp không được mã hóa từ trang web của bạn. Điều này rất bất ngờ; bạn nên gửi báo lỗi nếu điều này xảy ra (cung cấp càng nhiều thông tin càng tốt về các phiên bản ứng dụng liên quan, v.v.).';
$string['error7026'] = 'Khóa mà tin nhắn của bạn được ký khác với khóa mà máy chủ từ xa có trên hồ sơ cho máy chủ của bạn. Hơn nữa, máy chủ từ xa đã cố gắng lấy khóa hiện tại của bạn và không thành công. Vui lòng thủ công đặt lại khóa với máy chủ từ xa và thử lại.';
$string['error709'] = 'Trang web từ xa không thể lấy khóa SSL từ bạn.';
$string['eventaccesscontrolcreated'] = 'Đã tạo kiểm soát truy cập';
$string['eventaccesscontrolupdated'] = 'Đã cập nhật kiểm soát truy cập';
$string['expired'] = 'Khóa này đã hết hạn vào';
$string['expires'] = 'Có hiệu lực đến';
$string['expireyourkey'] = 'Xóa khóa này';
$string['expireyourkeyexplain'] = 'Moodle tự động thay đổi khóa của bạn mỗi 28 ngày (theo mặc định) nhưng bạn có tùy chọn <em>thủ công</em> hết hạn khóa này bất kỳ lúc nào. Điều này chỉ hữu ích nếu bạn tin rằng khóa này đã bị xâm phạm. Một thay thế sẽ được tự động tạo ra ngay lập tức.<br />Xóa khóa này sẽ khiến các ứng dụng khác không thể giao tiếp với bạn, cho đến khi bạn liên hệ thủ công với mỗi quản trị viên và cung cấp cho họ khóa mới của bạn.';
$string['exportfields'] = 'Các trường để xuất';
$string['failedaclwrite'] = 'Không thể ghi vào danh sách kiểm soát truy cập MNet cho người dùng \'{$a}\'.';
$string['findlogin'] = 'Tìm đăng nhập';
$string['forbidden-function'] = 'Hàm này chưa được kích hoạt cho RPC.';
$string['forbidden-transport'] = 'Phương thức truyền tải bạn đang cố sử dụng không được phép.';
$string['forcesavechanges'] = 'Buộc lưu thay đổi';
$string['helpnetworksettings'] = 'Cấu hình giao tiếp MNet';
$string['hidelocal'] = 'Ẩn người dùng cục bộ';
$string['hideremote'] = 'Ẩn người dùng từ xa';
$string['host'] = 'máy chủ';
$string['hostcoursenotfound'] = 'Không tìm thấy máy chủ hoặc khóa học';
$string['hostdeleted'] = 'Đã xóa máy chủ';
$string['hostexists'] = 'Một bản ghi đã tồn tại cho một máy chủ với tên miền đó. (Nó có thể đã bị xóa.) <a href="{$a}">Chỉnh sửa bản ghi</a>';
$string['hostlist'] = 'Danh sách các máy chủ mạng';
$string['hostname'] = 'Tên miền';
$string['hostnamehelp'] = 'Tên miền đầy đủ của máy chủ từ xa, ví dụ: www.example.com';
$string['hostnotconfiguredforsso'] = 'Máy chủ này không được cấu hình để đăng nhập từ xa.';
$string['hostsettings'] = 'Cài đặt máy chủ';
$string['http_self_signed_help'] = 'Cho phép kết nối sử dụng chứng chỉ SSL tự ký DIY trên máy chủ từ xa.';
$string['https_self_signed_help'] = 'Cho phép kết nối sử dụng SSL tự ký DIY trong PHP trên máy chủ từ xa qua http.';
$string['https_verified_help'] = 'Cho phép kết nối sử dụng chứng chỉ SSL đã được xác thực trên máy chủ từ xa.';
$string['http_verified_help'] = 'Cho phép kết nối sử dụng chứng chỉ SSL đã được xác thực trong PHP trên máy chủ từ xa, nhưng qua http (không phải https).';
$string['id'] = 'ID';
$string['idhelp'] = 'Giá trị này được gán tự động và không thể thay đổi';
$string['importfields'] = 'Các trường để nhập';
$string['inspect'] = 'Kiểm tra';
$string['installnosuchfunction'] = 'Lỗi mã hóa! Một cái gì đó đang cố gắng cài đặt một hàm mnet xmlrpc ({$a->method}) từ một tệp ({$a->file}) và không thể tìm thấy!';
$string['installnosuchmethod'] = 'Lỗi mã hóa! Một cái gì đó đang cố gắng cài đặt một phương thức mnet xmlrpc ({$a->method}) trên một lớp ({$a->class}) và không thể tìm thấy!';
$string['installreflectionclasserror'] = 'Lỗi mã hóa! MNet introspection thất bại cho phương thức \'{$a->method}\' trong lớp \'{$a->class}\'.  Tin nhắn lỗi ban đầu, nếu có thể giúp, là: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = 'Lỗi mã hóa! MNet introspection thất bại cho hàm \'{$a->method}\' trong tệp \'{$a->file}\'.  Tin nhắn lỗi ban đầu, nếu có thể giúp, là: \'{$a->error}\'';
$string['invalidaccessparam'] = 'Tham số truy cập không hợp lệ.';
$string['invalidactionparam'] = 'Tham số hành động không hợp lệ.';
$string['invalidhost'] = 'Bạn phải cung cấp một định danh máy chủ hợp lệ';
$string['invalidpubkey'] = 'Khóa không phải là khóa SSL hợp lệ. ({$a})';
$string['invalidurl'] = 'Tham số URL không hợp lệ.';
$string['ipaddress'] = 'Địa chỉ IP';
$string['is_in_range'] = 'Địa chỉ IP <code>{$a}</code> đại diện cho một máy chủ tin cậy hợp lệ.';
$string['ispublished'] = '{$a} đã kích hoạt dịch vụ này cho bạn.';
$string['issubscribed'] = '{$a} đang đăng ký dịch vụ này trên máy chủ của bạn.';
$string['keydeleted'] = 'Khóa của bạn đã được xóa thành công và thay thế.';
$string['keydeletedcancelled'] = 'Không có thay đổi nào đối với khóa.';
$string['keymismatch'] = 'Khóa công khai bạn đang giữ cho máy chủ này khác với khóa công khai mà nó hiện đang công bố. Khóa hiện đang được công bố là:';
$string['last_connect_time'] = 'Thời gian kết nối cuối';
$string['last_connect_time_help'] = 'Thời gian bạn kết nối lần cuối với máy chủ này.';
$string['last_transport_help'] = 'Phương thức truyền tải mà bạn đã sử dụng cho kết nối cuối với máy chủ này.';
$string['leavedefault'] = 'Sử dụng cài đặt mặc định thay thế';
$string['listservices'] = 'Danh sách dịch vụ';
$string['loginlinkmnetuser'] = '<br />Nếu bạn là người dùng MNet từ xa và có thể <a href="{$a}">xác nhận địa chỉ email của bạn tại đây</a>, bạn có thể được chuyển hướng đến trang đăng nhập của mình.<br />';
$string['logs'] = 'nhật ký';
$string['managemnetpeers'] = 'Quản lý các máy ngang hàng';
$string['method'] = 'Phương thức';
$string['methodhelp'] = 'Trợ giúp phương thức cho {$a}';
$string['methodsavailableonhost'] = 'Các phương thức có sẵn trên {$a}';
$string['methodsavailableonhostinservice'] = 'Các phương thức có sẵn cho {$a->service} trên {$a->host}';
$string['methodsignature'] = 'Chữ ký phương thức cho {$a}';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Nối (tối đa) 3 chuỗi và trả về kết quả';
$string['mnetdisabled'] = 'MNet đã <strong>bị tắt</strong>.';
$string['mnetidprovider'] = 'Nhà cung cấp ID MNet';
$string['mnetidproviderdesc'] = 'Bạn có thể sử dụng công cụ này để lấy một liên kết mà bạn có thể đăng nhập tại, nếu bạn có thể cung cấp địa chỉ email chính xác khớp với tên người dùng bạn đã cố gắng đăng nhập.';
$string['mnetidprovidermsg'] = 'Bạn nên có thể đăng nhập tại nhà cung cấp {$a} của bạn.';
$string['mnetidprovidernotfound'] = 'Xin lỗi, không thể tìm thêm thông tin nào.';
$string['mnetpeers'] = 'Các máy ngang hàng';
$string['mnetservices'] = 'Dịch vụ';
$string['mnet_session_prohibited'] = 'Người dùng từ máy chủ của bạn hiện không được phép đi lang thang tới {$a}.';
$string['mnetsettings'] = 'Cài đặt MNet';
$string['moodle_home_help'] = 'Đường dẫn đến trang chủ của ứng dụng MNet trên máy chủ từ xa, ví dụ: /moodle/.';
$string['name'] = 'Tên';
$string['net'] = 'Mạng';
$string['networksettings'] = 'Cài đặt mạng';
$string['never'] = 'Không bao giờ';
$string['noaclentries'] = 'Không có mục nào trong danh sách kiểm soát truy cập SSO';
$string['noaddressforhost'] = 'Xin lỗi, nhưng không thể giải quyết tên miền ({$a})!';
$string['nocurl'] = 'Thư viện PHP cURL không được cài đặt';
$string['nolocaluser'] = 'Không có bản ghi cục bộ cho người dùng từ xa và không thể tạo ra, vì máy chủ này sẽ không tự động tạo người dùng.  Vui lòng liên hệ với quản trị viên của bạn!';
$string['nomodifyacl'] = 'Bạn không được phép thay đổi danh sách kiểm soát truy cập MNet.';
$string['nonmatchingcert'] = 'Chủ đề của chứng chỉ: <br /><em>{$a->subject}</em><br />không khớp với máy chủ nó xuất phát từ:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Có vấn đề khi lấy khóa công khai.<br />Có thể máy chủ không cho phép MNet hoặc khóa không hợp lệ.';
$string['nosite'] = 'Không thể tìm thấy khóa học cấp độ site';
$string['nosuchfile'] = 'Tệp/hàm {$a} không tồn tại.';
$string['nosuchfunction'] = 'Không thể định vị hàm, hoặc hàm bị cấm đối với RPC.';
$string['nosuchmodule'] = 'Hàm đã được định địa chỉ sai và không thể định vị. Vui lòng sử dụng định dạng mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Không thể lấy khóa công khai để xác minh chữ ký.';
$string['nosuchservice'] = 'Dịch vụ RPC không hoạt động trên máy chủ này.';
$string['nosuchtransport'] = 'Không có phương thức truyền tải với ID đó.';
$string['notBASE64'] = 'Chuỗi này không được mã hóa base64. Nó không thể là khóa hợp lệ.';
$string['notenoughidpinfo'] = 'Nhà cung cấp danh tính của bạn không cung cấp đủ thông tin để tạo hoặc cập nhật tài khoản của bạn cục bộ. Xin lỗi!';
$string['not_in_range'] = 'Địa chỉ IP <code>{$a}</code> không đại diện cho một máy chủ tin cậy hợp lệ.';
$string['notinxmlrpcserver'] = 'Cố gắng truy cập vào MNet remote client, không phải trong quá trình thực thi XMLRPC server';
$string['notmoodleapplication'] = 'CẢNH BÁO: Đây không phải là ứng dụng Moodle, vì vậy một số phương thức kiểm tra có thể không hoạt động đúng.';
$string['notPEM'] = 'Khóa này không ở định dạng PEM. Nó sẽ không hoạt động.';
$string['notpermittedtojump'] = 'Bạn không có quyền bắt đầu một phiên từ xa từ máy chủ Moodle này.';
$string['notpermittedtojumpas'] = 'Bạn không thể bắt đầu một phiên từ xa khi bạn đang đăng nhập dưới dạng người dùng khác.';
$string['notpermittedtoland'] = 'Bạn không có quyền bắt đầu một phiên từ xa.';
$string['off'] = 'Tắt';
$string['on'] = 'Bật';
$string['options'] = 'Tùy chọn';
$string['peerprofilefielddesc'] = 'Tại đây bạn có thể ghi đè các cài đặt toàn cầu về các trường hồ sơ cần gửi và nhập khi tạo người dùng mới';
$string['permittedtransports'] = 'Phương thức truyền tải được phép';
$string['phperror'] = 'Lỗi nội bộ PHP đã ngăn yêu cầu của bạn được thực hiện.';
$string['position'] = 'Vị trí';
$string['postrequired'] = 'Chức năng xóa yêu cầu một yêu cầu POST.';
$string['privacy:metadata'] = 'Plugin MNet không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['profileexportfields'] = 'Các trường để gửi';
$string['profilefielddesc'] = 'Tại đây bạn có thể cấu hình danh sách các trường hồ sơ được gửi và nhận qua MNet khi tạo hoặc cập nhật tài khoản người dùng.  Bạn cũng có thể ghi đè điều này cho từng máy ngang hàng MNet riêng lẻ. Lưu ý rằng các trường sau luôn được gửi và không tùy chọn: {$a}';
$string['profilefields'] = 'Trường hồ sơ';
$string['profileimportfields'] = 'Các trường để nhập';
$string['promiscuous'] = 'Thoải mái';
$string['publickey'] = 'Khóa công khai';
$string['publickey_help'] = 'Khóa công khai được tự động lấy từ máy chủ từ xa.';
$string['publickeyrequired'] = 'Bạn phải cung cấp một khóa công khai.';
$string['publish'] = 'Công bố';
$string['reallydeleteserver'] = 'Bạn có chắc chắn muốn xóa máy chủ không?';
$string['receivedwarnings'] = 'Đã nhận được các cảnh báo sau';
$string['recordnoexists'] = 'Bản ghi không tồn tại.';
$string['reenableserver'] = 'Không - chọn tùy chọn này để kích hoạt lại máy chủ này.';
$string['registerallhosts'] = 'Đăng ký tất cả máy chủ (chế độ thoải mái)';
$string['registerallhostsexplain'] = 'Bạn có thể chọn đăng ký tất cả các máy chủ cố gắng kết nối với bạn tự động. Điều này có nghĩa là một bản ghi sẽ xuất hiện trong danh sách máy chủ của bạn cho bất kỳ trang web MNet nào kết nối với bạn và yêu cầu khóa công khai của bạn.<br />Bạn có tùy chọn dưới đây để cấu hình dịch vụ cho \'Tất cả máy chủ\' và bằng cách kích hoạt một số dịch vụ ở đó, bạn có thể cung cấp dịch vụ cho bất kỳ máy chủ từ xa nào mà không phân biệt.';
$string['registerhostsoff'] = 'Đăng ký tất cả máy chủ hiện đang <b>tắt</b>';
$string['registerhostson'] = 'Đăng ký tất cả máy chủ hiện đang <b>bật</b>';
$string['remotecourses'] = 'Khóa học từ xa';
$string['remotehost'] = 'Máy chủ từ xa';
$string['remotehosts'] = 'Máy chủ từ xa';
$string['remoteuser'] = 'Người dùng từ xa {$a->remotetype}';
$string['remoteuserinfo'] = 'Hồ sơ được lấy từ <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Mạng yêu cầu tiện ích mở rộng OpenSSL';
$string['restore'] = 'Khôi phục';
$string['returnvalue'] = 'Giá trị trả về';
$string['reviewhostdetails'] = 'Xem lại chi tiết máy chủ';
$string['reviewhostservices'] = 'Xem lại dịch vụ máy chủ';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP không mã hóa';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (tự ký)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (tự ký)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (đã ký)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (đã ký)';
$string['selectaccesslevel'] = 'Vui lòng chọn một cấp độ truy cập từ danh sách.';
$string['selectahost'] = 'Vui lòng chọn một máy chủ từ xa.';
$string['service'] = 'Tên dịch vụ';
$string['serviceid'] = 'ID dịch vụ';
$string['servicesavailableonhost'] = 'Dịch vụ có sẵn trên {$a}';
$string['serviceswepublish'] = 'Dịch vụ chúng tôi công bố cho {$a}.';
$string['serviceswesubscribeto'] = 'Dịch vụ trên {$a} mà chúng tôi đăng ký.';
$string['settings'] = 'Cài đặt';
$string['showlocal'] = 'Hiển thị người dùng cục bộ';
$string['showremote'] = 'Hiển thị người dùng từ xa';
$string['ssl_acl_allow'] = 'SSO ACL: Cho phép người dùng \'{$a->user}\' từ \'{$a->host}\'';
$string['ssl_acl_deny'] = 'SSO ACL: Từ chối người dùng \'{$a->user}\' từ \'{$a->host}\'';
$string['sslverification'] = 'Xác minh SSL';
$string['sslverification_help'] = 'Tùy chọn này cho phép bạn cấu hình mức độ bảo mật khi kết nối với một máy ngang hàng sử dụng HTTPS.

* Không có: không có mức độ bảo mật
* Chỉ xác minh máy chủ: xác thực tên miền của chứng chỉ SSL
* Xác minh máy chủ và máy ngang hàng (khuyến nghị): xác thực tên miền và nhà phát hành của chứng chỉ SSL';
$string['ssoaccesscontrol'] = 'Kiểm soát truy cập SSO';
$string['ssoacldescr'] = 'Sử dụng trang này để cấp/thu hồi quyền truy cập cho người dùng cụ thể từ các máy chủ MNet từ xa. Điều này hoạt động khi bạn cung cấp dịch vụ SSO cho người dùng từ xa. Để kiểm soát khả năng <em>đi lang thang</em> của người dùng cục bộ đến các máy chủ MNet khác, sử dụng hệ thống vai trò để cấp cho họ quyền <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'Để chức năng này hoạt động, bạn phải bật Mạng, cộng với plugin xác thực MNet được kích hoạt.';
$string['strict'] = 'Chặt chẽ';
$string['subscribe'] = 'Đăng ký';
$string['system'] = 'Hệ thống';
$string['testclient'] = 'Khách hàng kiểm tra MNet';
$string['testtrustedhosts'] = 'Kiểm tra một địa chỉ';
$string['testtrustedhostsexplain'] = 'Nhập một địa chỉ IP để xem nếu nó là một máy chủ tin cậy.';
$string['theypublish'] = 'Họ công bố';
$string['theysubscribe'] = 'Họ đăng ký';
$string['transport_help'] = 'Các tùy chọn này có tính chất tương hỗ, vì vậy bạn chỉ có thể buộc một máy chủ từ xa sử dụng chứng chỉ SSL ký nếu máy chủ của bạn cũng có chứng chỉ SSL ký.';
$string['trustedhosts'] = 'Máy chủ XML-RPC';
$string['trustedhostsexplain'] = '<p>Cơ chế máy chủ tin cậy cho phép các máy cụ thể thực hiện các cuộc gọi qua XML-RPC đến bất kỳ phần nào của API Moodle. Điều này có sẵn cho các tập lệnh điều khiển hành vi của Moodle và có thể là một tùy chọn rất nguy hiểm để kích hoạt. Nếu nghi ngờ, hãy giữ nó tắt.</p>
<p><strong>Điều này không cần thiết cho bất kỳ tính năng MNet tiêu chuẩn nào!</strong> Bật nó chỉ khi bạn biết mình đang làm gì.</p>
<p>Để kích hoạt nó, hãy nhập danh sách các địa chỉ IP hoặc mạng,
một trên mỗi dòng. Một số ví dụ:</p>
Máy cục bộ của bạn:<br />127.0.0.1<br />Máy cục bộ của bạn (với một khối mạng):<br />127.0.0.1/32<br />Chỉ máy có địa chỉ IP 192.168.0.7:<br />192.168.0.7/32<br />Bất kỳ máy nào có địa chỉ IP giữa 192.168.0.1 và 192.168.0.255:<br />192.168.0.0/24<br />Bất kỳ máy nào:<br />192.168.0.0/0<br />Rõ ràng là ví dụ cuối cùng <strong>không</strong> phải là một cấu hình khuyến nghị.';
$string['turnitoff'] = 'Tắt nó đi';
$string['turniton'] = 'Bật nó lên';
$string['type'] = 'Loại';
$string['unknown'] = 'Không rõ';
$string['unknownerror'] = 'Lỗi không rõ xảy ra trong quá trình thương lượng.';
$string['usercannotchangepassword'] = 'Bạn không thể thay đổi mật khẩu của mình tại đây vì bạn là người dùng từ xa.';
$string['userchangepasswordlink'] = '<br /> Bạn có thể thay đổi mật khẩu tại nhà cung cấp <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> của bạn.';
$string['usernotfullysetup'] = 'Tài khoản người dùng của bạn chưa hoàn tất.  Bạn cần <a href="{$a}">quay lại nhà cung cấp của bạn</a> và đảm bảo hồ sơ của bạn đã hoàn tất ở đó.  Bạn có thể cần đăng xuất và đăng nhập lại để điều này có hiệu lực.';
$string['usersareonline'] = 'Cảnh báo: {$a} người dùng từ máy chủ đó hiện đang đăng nhập vào trang của bạn.';
$string['validated_by'] = 'Nó được xác thực bởi mạng: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Xác minh máy chủ và máy ngang hàng';
$string['verifyhostonly'] = 'Chỉ xác minh máy chủ';
$string['verifysignature-error'] = 'Xác minh chữ ký thất bại. Một lỗi đã xảy ra.';
$string['verifysignature-invalid'] = 'Xác minh chữ ký thất bại. Có vẻ như tải trọng này không được ký bởi bạn.';
$string['version'] = 'Phiên bản';
$string['warning'] = 'Cảnh báo';
$string['wrong-ip'] = 'Địa chỉ IP của bạn không khớp với địa chỉ chúng tôi có trong hồ sơ.';
$string['xmlrpc-missing'] = 'Bạn phải cài đặt XML-RPC trong bản dựng PHP của bạn để có thể sử dụng tính năng này.';
$string['yourhost'] = 'Máy chủ của bạn';
$string['yourpeers'] = 'Máy ngang hàng của bạn';
