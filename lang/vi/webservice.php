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
 * Strings for component 'webservice', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_webservice
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['accessexception'] = 'Ngoại lệ kiểm soát truy cập';
$string['actwebserviceshhdr'] = 'Các giao thức dịch vụ web hoạt động';
$string['addaservice'] = 'Thêm dịch vụ';
$string['addcapabilitytousers'] = 'Kiểm tra khả năng của người dùng';
$string['addcapabilitytousersdescription'] = 'Người dùng nên có hai khả năng - webservice:createtoken và một khả năng phù hợp với các giao thức được sử dụng, ví dụ như webservice/rest:use, webservice/soap:use. Để đạt được điều này, tạo một vai trò dịch vụ web với các khả năng phù hợp được cho phép và gán nó cho người dùng dịch vụ web như một vai trò hệ thống.';
$string['addexternalservice'] = 'Thêm dịch vụ bên ngoài';
$string['addfunction'] = 'Thêm chức năng';
$string['addfunctionhelp'] = 'Chọn chức năng để thêm vào dịch vụ.';
$string['addfunctions'] = 'Thêm chức năng';
$string['addfunctionsdescription'] = 'Chọn các chức năng cần thiết cho dịch vụ mới được tạo.';
$string['addrequiredcapability'] = 'Gán/hủy khả năng yêu cầu';
$string['addservice'] = 'Thêm một dịch vụ mới: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Thêm chức năng vào dịch vụ "{$a}"';
$string['allusers'] = 'Tất cả người dùng';
$string['apiexplorer'] = 'Trình duyệt API';
$string['apiexplorernotavalaible'] = 'Trình duyệt API chưa có sẵn.';
$string['arguments'] = 'Đối số';
$string['authmethod'] = 'Phương thức xác thực';
$string['callablefromajax'] = 'Có thể gọi từ AJAX';
$string['cannotcreatetoken'] = 'Không có quyền tạo token dịch vụ web cho dịch vụ {$a}.';
$string['configwebserviceplugins'] = 'Vì lý do bảo mật, chỉ những giao thức đang được sử dụng mới nên được kích hoạt.';
$string['context'] = 'Bối cảnh';
$string['createservicedescription'] = 'Một dịch vụ là một tập hợp các chức năng dịch vụ web. Bạn sẽ cho phép người dùng truy cập vào một dịch vụ mới. Trên trang <strong>Thêm dịch vụ</strong>, kiểm tra các tùy chọn \'Bật\' và \'Người dùng được ủy quyền\'. Chọn \'Không có khả năng yêu cầu\'.';
$string['createserviceforusersdescription'] = 'Một dịch vụ là một tập hợp các chức năng dịch vụ web. Bạn sẽ cho phép người dùng truy cập vào một dịch vụ mới. Trên trang <strong>Thêm dịch vụ</strong>, kiểm tra các tùy chọn \'Bật\' và bỏ chọn \'Người dùng được ủy quyền\'. Chọn \'Không có khả năng yêu cầu\'.';
$string['createtoken'] = 'Tạo token';
$string['createtokenforuser'] = 'Tạo một token cho người dùng';
$string['createtokenforuserdescription'] = 'Tạo một token cho người dùng dịch vụ web.';
$string['createuser'] = 'Tạo một người dùng cụ thể';
$string['createuserdescription'] = 'Một người dùng dịch vụ web là bắt buộc để đại diện cho hệ thống điều khiển Moodle.';
$string['criteriaerror'] = 'Thiếu quyền để tìm kiếm theo tiêu chí.';
$string['default'] = 'Mặc định là "{$a}"';
$string['deleteaservice'] = 'Xóa dịch vụ';
$string['deleteservice'] = 'Xóa dịch vụ: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Xóa một dịch vụ cũng sẽ xóa các token liên quan đến dịch vụ này. Bạn có thực sự muốn xóa dịch vụ bên ngoài "{$a}" không?';
$string['deletetoken'] = 'Xóa token';
$string['deletetokenconfirm'] = 'Bạn có thực sự muốn xóa token dịch vụ web này cho <strong>{$a->user}</strong> trên dịch vụ <strong>{$a->service}</strong>?';
$string['deprecated'] = 'Đã lỗi thời';
$string['disabledwarning'] = 'Tất cả các giao thức dịch vụ web đã bị vô hiệu hóa. Cài đặt "Bật dịch vụ web" có thể được tìm thấy trong Tính năng nâng cao.';
$string['doc'] = 'Tài liệu';
$string['docaccessrefused'] = 'Bạn không được phép xem tài liệu cho token này';
$string['downloadfiles'] = 'Có thể tải xuống tập tin';
$string['downloadfiles_help'] = 'Nếu được kích hoạt, bất kỳ người dùng nào cũng có thể tải xuống các tập tin với các khóa bảo mật của họ. Tất nhiên, họ bị hạn chế trong việc tải xuống các tập tin họ được phép tải xuống trên trang web.';
$string['editaservice'] = 'Chỉnh sửa dịch vụ';
$string['editexternalservice'] = 'Chỉnh sửa dịch vụ bên ngoài';
$string['editservice'] = 'Chỉnh sửa dịch vụ: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Đã kích hoạt';
$string['enabledocumentation'] = 'Kích hoạt tài liệu cho nhà phát triển';
$string['enabledocumentationdescription'] = 'Tài liệu chi tiết về dịch vụ web có sẵn cho các giao thức đã được kích hoạt.';
$string['enableprotocols'] = 'Kích hoạt giao thức';
$string['enableprotocolsdescription'] = 'Ít nhất một giao thức phải được kích hoạt. Vì lý do bảo mật, chỉ những giao thức sẽ được sử dụng mới được kích hoạt.';
$string['enablews'] = 'Kích hoạt dịch vụ web';
$string['enablewsdescription'] = 'Dịch vụ web phải được kích hoạt trong Tính năng nâng cao.';
$string['entertoken'] = 'Nhập một khóa bảo mật/token:';
$string['error'] = 'Lỗi: {$a}';
$string['errorcatcontextnotvalid'] = 'Bạn không thể thực thi các chức năng trong ngữ cảnh danh mục (id danh mục:{$a->catid}). Thông báo lỗi ngữ cảnh là: {$a->message}';
$string['errorcodes'] = 'Thông báo lỗi';
$string['errorcoursecontextnotvalid'] = 'Bạn không thể thực thi các chức năng trong ngữ cảnh khóa học (id khóa học:{$a->courseid}). Thông báo lỗi ngữ cảnh là: {$a->message}';
$string['errorinvalidparam'] = 'Tham số "{$a}" không hợp lệ.';
$string['errornotemptydefaultparamarray'] = 'Tham số mô tả dịch vụ web có tên \'{$a}\' là một cấu trúc đơn hoặc nhiều phần tử. Mặc định chỉ có thể là mảng rỗng. Kiểm tra mô tả dịch vụ web.';
$string['erroroptionalparamarray'] = 'Tham số mô tả dịch vụ web có tên \'{$a}\' là một cấu trúc đơn hoặc nhiều phần tử. Không thể đặt là VALUE_OPTIONAL. Kiểm tra mô tả dịch vụ web.';
$string['eventwebservicefunctioncalled'] = 'Chức năng dịch vụ web đã được gọi';
$string['eventwebserviceloginfailed'] = 'Đăng nhập dịch vụ web thất bại';
$string['eventwebserviceservicecreated'] = 'Dịch vụ web đã được tạo';
$string['eventwebserviceservicedeleted'] = 'Dịch vụ web đã bị xóa';
$string['eventwebserviceserviceupdated'] = 'Dịch vụ web đã được cập nhật';
$string['eventwebserviceserviceuseradded'] = 'Người dùng dịch vụ web đã được thêm';
$string['eventwebserviceserviceuserremoved'] = 'Người dùng dịch vụ web đã bị xóa';
$string['eventwebservicetokencreated'] = 'Token dịch vụ web đã được tạo';
$string['eventwebservicetokensent'] = 'Token dịch vụ web đã được gửi';
$string['execute'] = 'Thực thi';
$string['executewarnign'] = 'CẢNH BÁO: Nếu bạn nhấn vào thực thi, cơ sở dữ liệu của bạn sẽ bị thay đổi và các thay đổi không thể được hoàn nguyên tự động!';
$string['externalservice'] = 'Dịch vụ bên ngoài';
$string['externalservicefunctions'] = 'Chức năng dịch vụ bên ngoài';
$string['externalservices'] = 'Các dịch vụ bên ngoài';
$string['externalserviceusers'] = 'Người dùng dịch vụ bên ngoài';
$string['failedtolog'] = 'Không thể đăng nhập';
$string['filenameexist'] = 'Tên tệp đã tồn tại: {$a}';
$string['forbiddenwsuser'] = 'Không thể tạo token cho một người dùng chưa được xác nhận, đã bị xóa, bị đình chỉ hoặc là khách.';
$string['function'] = 'Chức năng';
$string['functions'] = 'Chức năng';
$string['generalstructure'] = 'Cấu trúc chung';
$string['checkusercapability'] = 'Kiểm tra khả năng của người dùng';
$string['checkusercapabilitydescription'] = 'Người dùng phải có các khả năng phù hợp theo các giao thức được sử dụng, ví dụ như webservice/rest:use, webservice/soap:use. Để đạt được điều này, tạo một vai trò dịch vụ web với các khả năng giao thức được phép và gán nó cho người dùng dịch vụ web như một vai trò hệ thống.';
$string['information'] = 'Thông tin';
$string['installserviceshortnameerror'] = 'Lỗi mã hóa: tên ngắn dịch vụ "{$a}" chỉ có thể chứa ký tự chữ và số (chữ và số), dấu gạch dưới (_), dấu gạch ngang (-) hoặc dấu chấm (.).';
$string['installexistingserviceshortnameerror'] = 'Một dịch vụ web với tên ngắn "{$a}" đã tồn tại. Không thể cài đặt/cập nhật một dịch vụ web khác với tên ngắn này.';
$string['invalidextparam'] = 'Tham số API bên ngoài không hợp lệ: {$a}';
$string['invalidextresponse'] = 'Phản hồi API bên ngoài không hợp lệ: {$a}';
$string['invalidiptoken'] = 'Token không hợp lệ - địa chỉ IP của bạn không được hỗ trợ';
$string['invalidtimedtoken'] = 'Token không hợp lệ - token đã hết hạn';
$string['invalidtoken'] = 'Token không hợp lệ - không tìm thấy token';
$string['iprestriction'] = 'Hạn chế IP';
$string['iprestriction_help'] = 'Người dùng sẽ cần gọi dịch vụ web từ các địa chỉ IP được liệt kê (phân cách bằng dấu phẩy).';
$string['key'] = 'Khóa';
$string['keyshelp'] = 'Các khóa được sử dụng để truy cập tài khoản Moodle của bạn từ các ứng dụng bên ngoài.';
$string['loginrequired'] = 'Giới hạn cho người dùng đã đăng nhập';
$string['manageprotocols'] = 'Quản lý giao thức';
$string['managetokens'] = 'Quản lý token';
$string['missingcaps'] = 'Thiếu khả năng';
$string['missingcaps_help'] = 'Danh sách các khả năng được khai báo bởi dịch vụ mà người dùng không có. Một số chức năng của dịch vụ có thể không khả dụng nếu thiếu các khả năng này.';
$string['missingpassword'] = 'Thiếu mật khẩu';
$string['missingrequiredcapability'] = 'Khả năng {$a} là bắt buộc.';
$string['missingusername'] = 'Thiếu tên người dùng';
$string['nameexists'] = 'Tên này đã được sử dụng bởi một dịch vụ khác';
$string['nocapabilitytouseparameter'] = 'Người dùng không có khả năng cần thiết để sử dụng tham số {$a}';
$string['nofunctions'] = 'Dịch vụ này không có chức năng.';
$string['norequiredcapability'] = 'Không có khả năng bắt buộc';
$string['notoken'] = 'Danh sách token trống.';
$string['onesystemcontrolling'] = 'Cho phép một hệ thống bên ngoài kiểm soát Moodle';
$string['onesystemcontrollingdescription'] = 'Các bước sau giúp bạn thiết lập các dịch vụ web Moodle để cho phép một hệ thống bên ngoài tương tác với Moodle. Điều này bao gồm thiết lập phương pháp xác thực token (khóa bảo mật).';
$string['onlyseecreatedtokens'] = 'Bạn chỉ có thể xem các token bạn đã tạo.';
$string['operation'] = 'Hoạt động';
$string['optional'] = 'Tùy chọn';
$string['passwordisexpired'] = 'Mật khẩu đã hết hạn.';
$string['phpparam'] = 'XML-RPC (Cấu trúc PHP)';
$string['phpresponse'] = 'XML-RPC (Cấu trúc PHP)';
$string['postrestparam'] = 'Mã PHP cho REST (Yêu cầu POST)';
$string['potusers'] = 'Người dùng không được ủy quyền';
$string['potusersmatching'] = 'Người dùng không được ủy quyền phù hợp';
$string['print'] = 'In tất cả';
$string['privacy:metadata'] = 'API WebService không lưu trữ bất kỳ dữ liệu nào';
$string['protocol'] = 'Giao thức';
$string['removefunction'] = 'Xóa';
$string['removefunctionconfirm'] = 'Bạn có chắc chắn muốn xóa chức năng "{$a->function}" khỏi dịch vụ "{$a->service}" không?';
$string['requireauthentication'] = 'Phương thức này yêu cầu xác thực với quyền xxx.';
$string['required'] = 'Bắt buộc';
$string['requiredcapability'] = 'Khả năng bắt buộc';
$string['requiredcapability_help'] = 'Nếu được đặt, chỉ có người dùng có khả năng cần thiết mới có thể truy cập vào dịch vụ.';
$string['requiredcaps'] = 'Các khả năng bắt buộc';
$string['resettokencomplete'] = 'Token đã chọn đã được đặt lại';
$string['resettokenconfirm'] = 'Bạn có thực sự muốn đặt lại khóa dịch vụ web này cho <strong>{$a->user}</strong> trên dịch vụ <strong>{$a->service}</strong> không?';
$string['resettokenconfirmsimple'] = 'Bạn có thực sự muốn đặt lại khóa này không? Bất kỳ liên kết đã lưu chứa khóa cũ sẽ không còn hoạt động nữa.';
$string['response'] = 'Phản hồi';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restparam'] = 'REST (Các tham số POST)';
$string['restrictedusers'] = 'Chỉ những người dùng được ủy quyền';
$string['restrictedusers_help'] = 'Thiết lập này xác định liệu tất cả người dùng có quyền tạo token dịch vụ web có thể tạo một token cho dịch vụ này qua trang khóa bảo mật của họ hay chỉ có người dùng được ủy quyền mới có thể làm điều đó.';
$string['restoredaccountresetpassword'] = 'Tài khoản khôi phục cần đặt lại mật khẩu trước khi nhận một token.';
$string['securitykey'] = 'Khóa bảo mật (token)';
$string['securitykeys'] = 'Các khóa bảo mật';
$string['selectauthorisedusers'] = 'Chọn người dùng được ủy quyền';
$string['selectedcapability'] = 'Đã chọn';
$string['selectedcapabilitydoesntexit'] = 'Khả năng bắt buộc hiện tại ({$a}) không còn tồn tại nữa. Vui lòng thay đổi và lưu các thay đổi.';
$string['selectservice'] = 'Chọn một dịch vụ';
$string['selectspecificuser'] = 'Chọn một người dùng cụ thể';
$string['selectspecificuserdescription'] = 'Thêm người dùng dịch vụ web như một người dùng được ủy quyền.';
$string['service'] = 'Dịch vụ';
$string['servicehelpexplanation'] = 'Một dịch vụ là một tập hợp các chức năng. Một dịch vụ có thể được truy cập bởi tất cả người dùng hoặc chỉ bởi các người dùng được chỉ định.';
$string['servicename'] = 'Tên dịch vụ';
$string['servicenotavailable'] = 'Dịch vụ web không khả dụng. (Nó không tồn tại hoặc có thể đã bị vô hiệu hóa.)';
$string['servicerequireslogin'] = 'Dịch vụ web không khả dụng. (Phiên đã đăng xuất hoặc đã hết hạn.)';
$string['servicesbuiltin'] = 'Các dịch vụ tích hợp sẵn';
$string['servicescustom'] = 'Các dịch vụ tùy chỉnh';
$string['serviceusers'] = 'Người dùng được ủy quyền';
$string['serviceusersettings'] = 'Cài đặt người dùng';
$string['serviceusersmatching'] = 'Người dùng được ủy quyền phù hợp';
$string['serviceuserssettings'] = 'Thay đổi cài đặt cho các người dùng được ủy quyền';
$string['shortnametaken'] = 'Tên ngắn đã được sử dụng cho một dịch vụ khác ({$a})';
$string['simpleauthlog'] = 'Đăng nhập xác thực đơn giản';
$string['step'] = 'Bước';
$string['supplyinfo'] = 'Cung cấp thông tin thêm';
$string['testauserwithtestclientdescription'] = 'Mô phỏng truy cập từ bên ngoài vào dịch vụ bằng cách sử dụng ứng dụng kiểm tra dịch vụ web. Trước khi làm điều này, hãy đăng nhập dưới dạng một người dùng có khả năng moodle/webservice:createtoken và nhận khóa bảo mật (token) thông qua trang tùy chọn của người dùng. Bạn sẽ sử dụng token này trong ứng dụng kiểm tra. Trong ứng dụng kiểm tra, cũng chọn một giao thức được bật với xác thực token. <strong>CẢNH BÁO: Các chức năng mà bạn kiểm tra SẼ ĐƯỢC THỰC HIỆN cho người dùng này, vì vậy hãy cẩn thận với những gì bạn chọn để kiểm tra!</strong>';
$string['testclient'] = 'Ứng dụng kiểm tra dịch vụ web';
$string['testclientdescription'] = '* Ứng dụng kiểm tra dịch vụ web <strong>thực hiện</strong> các chức năng <strong>THẬT</strong>. Đừng kiểm tra các chức năng mà bạn không biết.<br/>* Tất cả các chức năng dịch vụ web hiện có vẫn chưa được triển khai vào ứng dụng kiểm tra.<br/>* Để kiểm tra xem một người dùng không thể truy cập một số chức năng, bạn có thể kiểm tra một số chức năng mà bạn không cho phép.<br/>* Để xem thông báo lỗi rõ ràng hơn, hãy đặt chế độ gỡ lỗi thành <strong>{$a->mode}</strong> vào {$a->atag}.';
$string['testwithtestclient'] = 'Kiểm tra dịch vụ';
$string['testwithtestclientdescription'] = 'Mô phỏng truy cập từ bên ngoài vào dịch vụ bằng cách sử dụng ứng dụng kiểm tra dịch vụ web. Sử dụng một giao thức được bật với xác thực token. <strong>CẢNH BÁO: Các chức năng mà bạn kiểm tra SẼ ĐƯỢC THỰC HIỆN, vì vậy hãy cẩn thận với những gì bạn chọn để kiểm tra!</strong>';
$string['token'] = 'Token';
$string['tokenauthlog'] = 'Xác thực token';
$string['tokencopied'] = 'Văn bản đã được sao chép vào bảng tạm.';
$string['tokencreatedbyadmin'] = 'Chỉ có thể đặt lại bởi quản trị viên (*)';
$string['tokencreator'] = 'Người tạo';
$string['tokenfilter'] = 'Bộ lọc token';
$string['tokenfiltersubmit'] = 'Chỉ hiển thị các token phù hợp';
$string['tokenfilterreset'] = 'Hiển thị tất cả các token';
$string['tokenname'] = 'Tên';
$string['tokennamehint'] = 'Nếu bạn không nhập tên, một tên ngẫu nhiên sẽ được sử dụng.';
$string['tokennameprefix'] = 'Dịch vụ web-{$a}';
$string['tokennewmessage'] = 'Sao chép token ngay bây giờ. Nó sẽ không được hiển thị lại khi bạn rời khỏi trang này.';
$string['unknownoptionkey'] = 'Khóa tùy chọn không xác định ({$a})';
$string['unnamedstringparam'] = 'Một tham số chuỗi không có tên.';
$string['updateusersettings'] = 'Cập nhật';
$string['uploadfiles'] = 'Có thể tải lên tập tin';
$string['uploadfiles_help'] = 'Nếu được bật, bất kỳ người dùng nào cũng có thể tải lên các tập tin với các khóa bảo mật của họ vào khu vực tập tin riêng tư của họ hoặc một khu vực tập tin nháp. Bất kỳ hạn chế tập tin của người dùng nào cũng áp dụng.';
$string['userasclients'] = 'Người dùng như các khách hàng với token';
$string['userasclientsdescription'] = 'Các bước sau giúp bạn thiết lập dịch vụ web Moodle cho người dùng như là khách hàng. Những bước này cũng giúp thiết lập phương thức xác thực token (khóa bảo mật) được khuyến nghị. Trong trường hợp sử dụng này, người dùng sẽ tạo ra token của họ từ trang khóa bảo mật qua trang tùy chọn của họ.';
$string['usermissingcaps'] = 'Thiếu khả năng: {$a}';
$string['usernameorid'] = 'Tên người dùng / ID người dùng';
$string['usernameorid_help'] = 'Nhập tên người dùng hoặc ID người dùng.';
$string['usernotallowed'] = 'Người dùng không được phép cho dịch vụ này. Trước tiên, bạn cần cho phép người dùng này trên trang quản lý người dùng được phép của {$a}.';
$string['userservices'] = 'Dịch vụ người dùng: {$a}';
$string['usersettingssaved'] = 'Cài đặt người dùng đã được lưu';
$string['validuntil'] = 'Hiệu lực đến';
$string['validuntil_empty'] = 'Token này không có ngày hết hạn.';
$string['validuntil_help'] = 'Nếu được đặt, dịch vụ sẽ bị vô hiệu hóa sau ngày này đối với người dùng này.';
$string['webservice'] = 'Dịch vụ web';
$string['webservices'] = 'Dịch vụ web';
$string['webservicesoverview'] = 'Tổng quan';
$string['webservicetokens'] = 'Các token dịch vụ web';
$string['wrongusernamepassword'] = 'Tên người dùng hoặc mật khẩu không đúng';
$string['wsaccessuserdeleted'] = 'Từ chối truy cập dịch vụ web cho tên người dùng bị xóa: {$a}';
$string['wsaccessuserexpired'] = 'Từ chối truy cập dịch vụ web cho tên người dùng mật khẩu đã hết hạn: {$a}';
$string['wsaccessusernologin'] = 'Từ chối truy cập dịch vụ web cho tên người dùng xác thực không đăng nhập: {$a}';
$string['wsaccessusersuspended'] = 'Từ chối truy cập dịch vụ web cho tên người dùng bị tạm ngưng: {$a}';
$string['wsaccessuserunconfirmed'] = 'Từ chối truy cập dịch vụ web cho tên người dùng chưa được xác nhận: {$a}';
$string['wsclientdoc'] = 'Tài liệu khách hàng dịch vụ web Moodle';
$string['wsdocapi'] = 'Tài liệu API';
$string['wsdocumentation'] = 'Tài liệu dịch vụ web';
$string['wsdocumentationdisable'] = 'Tài liệu dịch vụ web bị vô hiệu hóa.';
$string['wsdocumentationintro'] = 'Để tạo một khách hàng, chúng tôi khuyến nghị bạn đọc {$a->doclink}';
$string['wsdocumentationlogin'] = 'hoặc nhập tên người dùng và mật khẩu dịch vụ web của bạn:';
$string['wspassword'] = 'Mật khẩu dịch vụ web';
$string['wsusername'] = 'Tên người dùng dịch vụ web';

// Không còn được hỗ trợ từ Moodle 4.2.
$string['missingversionfile'] = 'Lỗi mã hóa: tập tin version.php bị thiếu cho thành phần {$a}';
$string['cannotgetcoursecontents'] = 'Không thể lấy nội dung khóa học';
