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
 * Strings for component 'tool_dataprivacy'
 *
 * @package    tool_dataprivacy
 * @copyright  2018 onwards Jun Pataleta
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Quyền riêng tư dữ liệu';
$string['pluginname_help'] = 'Plugin quyền riêng tư dữ liệu';
$string['activitiesandresources'] = 'Hoạt động và tài nguyên';
$string['addcategory'] = 'Thêm danh mục';
$string['addnewdefaults'] = 'Thêm mặc định mô-đun mới';
$string['addpurpose'] = 'Thêm mục đích';
$string['approve'] = 'Phê duyệt';
$string['approvedrequestsubmitted'] = 'Yêu cầu của bạn đã được gửi và sẽ được xử lý sớm.';
$string['approverequest'] = 'Phê duyệt yêu cầu';
$string['approverequestall'] = 'Phê duyệt yêu cầu (tất cả dữ liệu)';
$string['approveselectedcourses'] = 'Phê duyệt các khóa học đã chọn';
$string['automaticdatadeletionapproval'] = 'Phê duyệt tự động yêu cầu xóa dữ liệu';
$string['automaticdatadeletionapproval_desc'] = 'Nếu được kích hoạt, các yêu cầu xóa dữ liệu sẽ được phê duyệt tự động.<br/>Lưu ý rằng việc phê duyệt tự động chỉ áp dụng cho các yêu cầu xóa dữ liệu mới với thiết lập này được kích hoạt. Các yêu cầu xóa dữ liệu hiện có đang chờ phê duyệt vẫn sẽ phải được phê duyệt thủ công bởi nhân viên bảo mật.';
$string['automaticdataexportapproval'] = 'Phê duyệt tự động yêu cầu xuất dữ liệu';
$string['automaticdataexportapproval_desc'] = 'Nếu được kích hoạt, các yêu cầu xuất dữ liệu sẽ được phê duyệt tự động.<br/>Lưu ý rằng việc phê duyệt tự động chỉ áp dụng cho các yêu cầu xuất dữ liệu mới với thiết lập này được kích hoạt. Các yêu cầu xuất dữ liệu hiện có đang chờ phê duyệt vẫn sẽ phải được phê duyệt thủ công bởi nhân viên bảo mật.';
$string['automaticdeletionrequests'] = 'Tạo yêu cầu xóa dữ liệu tự động';
$string['automaticdeletionrequests_desc'] = 'Nếu được kích hoạt, một yêu cầu xóa dữ liệu sẽ được tạo tự động cho bất kỳ tài khoản người dùng nào bị xóa thủ công.';
$string['bulkapproverequests'] = 'Phê duyệt yêu cầu';
$string['bulkdenyrequests'] = 'Từ chối yêu cầu';
$string['cachedef_purpose'] = 'Mục đích dữ liệu';
$string['cachedef_purpose_overrides'] = 'Ghi đè mục đích trong công cụ quyền riêng tư dữ liệu';
$string['cachedef_contextlevel'] = 'Mức độ ngữ cảnh mục đích và danh mục';
$string['cancelrequest'] = 'Hủy yêu cầu';
$string['cancelrequestconfirmation'] = 'Bạn có thực sự muốn hủy yêu cầu dữ liệu này không?';
$string['cannotreset'] = 'Không thể đặt lại yêu cầu này. Chỉ các yêu cầu bị từ chối mới có thể được đặt lại.';
$string['categories'] = 'Danh mục';
$string['category'] = 'Danh mục';
$string['category_help'] = 'Một danh mục trong sổ đăng ký dữ liệu mô tả một loại dữ liệu. Một danh mục mới có thể được thêm vào, hoặc nếu chọn Kế thừa, danh mục dữ liệu từ ngữ cảnh cấp cao hơn sẽ được áp dụng. Các ngữ cảnh là (từ thấp đến cao): Khối > Mô-đun hoạt động > Khóa học > Danh mục khóa học > Trang web.';
$string['categorycreated'] = 'Danh mục đã được tạo';
$string['categorydefault'] = 'Danh mục mặc định';
$string['categorydefault_help'] = 'Danh mục mặc định là danh mục dữ liệu được áp dụng cho bất kỳ trường hợp mới nào. Nếu chọn Kế thừa, danh mục dữ liệu từ ngữ cảnh cấp cao hơn sẽ được áp dụng. Các ngữ cảnh là (từ thấp đến cao): Khối > Mô-đun hoạt động > Khóa học > Danh mục khóa học > Người dùng > Trang web.';
$string['categorieslist'] = 'Danh sách các danh mục dữ liệu';
$string['categoryupdated'] = 'Danh mục đã được cập nhật';
$string['close'] = 'Đóng';
$string['compliant'] = 'Tuân thủ';
$string['confirmapproval'] = 'Bạn có thực sự muốn phê duyệt yêu cầu dữ liệu này không?';
$string['confirmbulkapproval'] = 'Bạn có thực sự muốn phê duyệt hàng loạt các yêu cầu dữ liệu đã chọn không?';
$string['confirmcompletion'] = 'Bạn có thực sự muốn đánh dấu yêu cầu người dùng này là hoàn thành không?';
$string['confirmcontextdeletion'] = 'Bạn có thực sự muốn xác nhận việc xóa các ngữ cảnh đã chọn không? Điều này cũng sẽ xóa tất cả dữ liệu người dùng cho các ngữ cảnh con tương ứng của chúng.';
$string['confirmdenial'] = 'Bạn có thực sự muốn từ chối yêu cầu dữ liệu này không?';
$string['confirmbulkdenial'] = 'Bạn có thực sự muốn từ chối hàng loạt các yêu cầu dữ liệu đã chọn không?';
$string['confirmrequestresubmit'] = 'Bạn có chắc chắn muốn hủy yêu cầu {$a->type} hiện tại cho {$a->username} và gửi lại không?';
$string['contactdataprotectionofficer'] = 'Liên hệ với nhân viên bảo mật';
$string['contactdataprotectionofficer_desc'] = 'Nếu được kích hoạt, người dùng sẽ có thể liên hệ với nhân viên bảo mật và thực hiện yêu cầu dữ liệu thông qua liên kết trên trang hồ sơ của họ.';
$string['contextlevelname10'] = 'Trang web';
$string['contextlevelname30'] = 'Người dùng';
$string['contextlevelname40'] = 'Danh mục khóa học';
$string['contextlevelname50'] = 'Khóa học';
$string['contextlevelname70'] = 'Mô-đun hoạt động';
$string['contextlevelname80'] = 'Khối';
$string['contextpurposecategorysaved'] = 'Mục đích và danh mục đã được lưu.';
$string['contactdpoviaprivacypolicy'] = 'Vui lòng liên hệ với nhân viên bảo mật như mô tả trong chính sách quyền riêng tư.';
$string['createcategory'] = 'Tạo danh mục dữ liệu';
$string['createdeletedatarequest'] = 'Tạo yêu cầu xóa dữ liệu';
$string['createnewdatarequest'] = 'Tạo yêu cầu dữ liệu mới';
$string['createpurpose'] = 'Tạo mục đích dữ liệu';
$string['creationauto'] = 'Tự động';
$string['creationmanual'] = 'Thủ công';
$string['datadeletion'] = 'Xóa dữ liệu';
$string['datadeletionpagehelp'] = 'Dữ liệu mà thời gian lưu trữ đã hết hạn được liệt kê ở đây. Vui lòng xem xét và xác nhận xóa dữ liệu, sau đó nhiệm vụ định kỳ "Xóa ngữ cảnh hết hạn" sẽ thực hiện.';
$string['dataprivacy:makedatarequestsforchildren'] = 'Thực hiện yêu cầu dữ liệu cho trẻ em';
$string['dataprivacy:managedatarequests'] = 'Quản lý yêu cầu dữ liệu';
$string['dataprivacy:managedataregistry'] = 'Quản lý sổ đăng ký dữ liệu';
$string['dataprivacy:downloadownrequest'] = 'Tải xuống dữ liệu xuất của bạn';
$string['dataprivacy:downloadallrequests'] = 'Tải xuống dữ liệu xuất của tất cả mọi người';
$string['dataprivacy:requestdeleteforotheruser'] = 'Yêu cầu xóa dữ liệu thay mặt người dùng khác';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Yêu cầu xóa dữ liệu cho trẻ em';
$string['dataprivacy:requestdelete'] = 'Yêu cầu xóa dữ liệu cho chính mình';
$string['dataregistry'] = 'Sổ đăng ký dữ liệu';
$string['dataregistryinfo'] = 'Sổ đăng ký dữ liệu cho phép thiết lập các danh mục (loại dữ liệu) và mục đích (lý do xử lý dữ liệu) cho tất cả nội dung trên trang web - từ người dùng và khóa học đến các hoạt động và khối. Đối với mỗi mục đích, một thời gian lưu trữ có thể được thiết lập. Khi thời gian lưu trữ đã hết hạn, dữ liệu sẽ được gắn cờ và liệt kê để xóa, chờ xác nhận từ quản trị viên.';
$string['dataretentionexplanation'] = 'Bản tóm tắt này hiển thị các danh mục và mục đích mặc định để lưu giữ dữ liệu người dùng. Một số khu vực có thể có các danh mục và mục đích cụ thể hơn những gì được liệt kê ở đây.';
$string['dataretentionsummary'] = 'Tóm tắt lưu giữ dữ liệu';
$string['datarequestcreatedforuser'] = 'Yêu cầu dữ liệu được tạo cho {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Tự động tạo từ một nhiệm vụ định kỳ (người dùng đã xóa trước đó).';
$string['datarequestemailsubject'] = 'Yêu cầu dữ liệu: {$a}';
$string['datarequestcreatedupondelete'] = 'Tự động tạo khi xóa người dùng.';
$string['datarequests'] = 'Yêu cầu dữ liệu';
$string['datecomment'] = '[{$a->date}]: ' . PHP_EOL . ' {$a->comment}';
$string['daterequested'] = 'Ngày yêu cầu';
$string['daterequesteddetail'] = 'Ngày yêu cầu:';
$string['defaultsinfo'] = 'Danh mục và mục đích mặc định được áp dụng cho tất cả các trường hợp mới và hiện có khi không có giá trị nào được thiết lập.';
$string['defaultswarninginfo'] = 'Cảnh báo: Thay đổi các mặc định này có thể ảnh hưởng đến thời gian lưu giữ của các trường hợp hiện có.';
$string['deletecategory'] = 'Xóa danh mục';
$string['deletecategorytext'] = 'Bạn có chắc chắn muốn xóa danh mục \'{$a}\' không?';
$string['deletedefaults'] = 'Xóa mặc định: {$a}';
$string['deletedefaultsconfirmation'] = 'Bạn có chắc chắn muốn xóa danh mục và mục đích mặc định cho các mô-đun {$a} không?';
$string['deleteexpiredcontextstask'] = 'Xóa ngữ cảnh hết hạn';
$string['deleteexpireddatarequeststask'] = 'Xóa tệp yêu cầu dữ liệu hết hạn';
$string['deleteexistingdeleteduserstask'] = 'Tạo yêu cầu xóa dữ liệu cho người dùng đã xóa trước đó';
$string['deletemyaccount'] = 'Xóa tài khoản của tôi';
$string['deletepurpose'] = 'Xóa mục đích';
$string['deletepurposetext'] = 'Bạn có chắc chắn muốn xóa mục đích \'{$a}\' không?';
$string['defaultssaved'] = 'Mặc định đã được lưu';
$string['deny'] = 'Từ chối';
$string['denyrequest'] = 'Từ chối yêu cầu';
$string['deprecated'] = 'Không được hỗ trợ';
$string['deprecatedexplanation'] = 'Plugin này đang sử dụng phiên bản cũ của một trong các giao diện quyền riêng tư và cần được cập nhật.';
$string['download'] = 'Tải xuống';
$string['downloadexpireduser'] = 'Tải xuống đã hết hạn. Gửi yêu cầu mới nếu bạn muốn xuất dữ liệu cá nhân của mình.';
$string['dporolemapping'] = 'Ánh xạ vai trò nhân viên bảo mật';
$string['dporolemapping_desc'] = 'Nhân viên bảo mật có thể quản lý các yêu cầu dữ liệu. Khả năng tool/dataprivacy:managedatarequests phải được cho phép để một vai trò được liệt kê là tùy chọn ánh xạ vai trò nhân viên bảo mật.';
$string['editcategories'] = 'Chỉnh sửa danh mục';
$string['editcategory'] = 'Chỉnh sửa danh mục';
$string['editcategories'] = 'Chỉnh sửa danh mục';
$string['editdefaults'] = 'Chỉnh sửa mặc định: {$a}';
$string['editmoduledefaults'] = 'Chỉnh sửa mặc định mô-đun';
$string['editpurpose'] = 'Chỉnh sửa mục đích';
$string['editpurposes'] = 'Chỉnh sửa mục đích';
$string['effectiveretentionperiodcourse'] = '{$a} (sau ngày kết thúc khóa học)';
$string['effectiveretentionperioduser'] = '{$a} (kể từ lần cuối cùng người dùng truy cập trang web)';
$string['emailsalutation'] = 'Kính gửi {$a},';
$string['errorcannotrequestdeleteforself'] = 'Bạn không có quyền tạo yêu cầu xóa cho chính mình.';
$string['errorcannotrequestdeleteforother'] = 'Bạn không có quyền tạo yêu cầu xóa cho người dùng này.';
$string['errorcannotrequestexportforself'] = 'Bạn không có quyền tạo yêu cầu xuất cho chính mình.';
$string['errorcontactdpodisabled'] = 'Tùy chọn liên hệ với nhân viên bảo mật đã bị vô hiệu hóa.';
$string['errorinvalidrequestcomments'] = 'Trường nhận xét chỉ có thể chứa văn bản đơn giản.';
$string['errorinvalidrequestcreationmethod'] = 'Phương thức tạo yêu cầu không hợp lệ!';
$string['errorinvalidrequeststatus'] = 'Trạng thái yêu cầu không hợp lệ!';
$string['errorinvalidrequesttype'] = 'Loại yêu cầu không hợp lệ!';
$string['errornocapabilitytorequestforothers'] = 'Người dùng {$a->requestedby} không có khả năng thực hiện yêu cầu dữ liệu thay mặt cho người dùng {$a->userid}';
$string['errornoselectedcourse'] = 'Bạn phải chọn ít nhất một khóa học';
$string['errornoexpiredcontexts'] = 'Không có ngữ cảnh nào hết hạn để xử lý';
$string['errorcontexthasunexpiredchildren'] = 'Ngữ cảnh "{$a}" vẫn còn các ngữ cảnh con chưa hết hạn. Không có ngữ cảnh nào được gắn cờ để xóa.';
$string['errorrequestalreadyexists'] = 'Bạn đã có một yêu cầu đang hoạt động.';
$string['errorrequestnotfound'] = 'Yêu cầu không được tìm thấy';
$string['errorrequestnotwaitingforapproval'] = 'Yêu cầu không đang chờ phê duyệt. Hoặc là nó chưa sẵn sàng hoặc đã được xử lý.';
$string['errorsendingmessagetodpo'] = 'Đã xảy ra lỗi khi cố gắng gửi tin nhắn tới {$a}.';
$string['exceptionnotificationsubject'] = 'Xảy ra ngoại lệ khi xử lý dữ liệu quyền riêng tư';
$string['exceptionnotificationbody'] = '<p>Xảy ra ngoại lệ khi gọi <b>{$a->fullmethodname}</b>.<br>Điều này có nghĩa là plugin <b>{$a->component}</b> không hoàn thành việc xử lý dữ liệu. Thông tin ngoại lệ sau đây có thể được chuyển cho nhà phát triển plugin:</p><pre>{$a->message}<br>

{$a->backtrace}</pre>';
$string['expiredretentionperiodtask'] = 'Thời gian lưu giữ hết hạn';
$string['expiry'] = 'Hết hạn';
$string['expandplugin'] = 'Mở rộng và thu gọn plugin.';
$string['expandplugintype'] = 'Mở rộng và thu gọn loại plugin.';
$string['explanationtitle'] = 'Biểu tượng được sử dụng trên trang này và ý nghĩa của chúng.';
$string['external'] = 'Bổ sung';
$string['externalexplanation'] = 'Một plugin bổ sung được cài đặt trên trang web này.';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['filterexportdata'] = 'Phê duyệt yêu cầu (dữ liệu từ các khóa học đã chọn)';
$string['frontpagecourse'] = 'Khóa học trang chủ';
$string['gdpr_art_6_1_a_description'] = 'Chủ thể dữ liệu đã đồng ý với việc xử lý dữ liệu cá nhân của mình cho một hoặc nhiều mục đích cụ thể';
$string['gdpr_art_6_1_a_name'] = 'Đồng ý (GDPR Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'Việc xử lý là cần thiết để thực hiện một hợp đồng mà chủ thể dữ liệu là một bên hoặc để thực hiện các bước theo yêu cầu của chủ thể dữ liệu trước khi ký kết hợp đồng';
$string['gdpr_art_6_1_b_name'] = 'Hợp đồng (GDPR Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'Việc xử lý là cần thiết để tuân thủ một nghĩa vụ pháp lý mà người kiểm soát dữ liệu phải tuân theo';
$string['gdpr_art_6_1_c_name'] = 'Nghĩa vụ pháp lý (GDPR Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'Việc xử lý là cần thiết để bảo vệ lợi ích sống còn của chủ thể dữ liệu hoặc của một người tự nhiên khác';
$string['gdpr_art_6_1_d_name'] = 'Lợi ích sống còn (GDPR Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'Việc xử lý là cần thiết để thực hiện một nhiệm vụ vì lợi ích công cộng hoặc trong việc thực hiện quyền lực chính thức được giao cho người kiểm soát dữ liệu';
$string['gdpr_art_6_1_e_name'] = 'Nhiệm vụ công cộng (GDPR Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'Việc xử lý là cần thiết cho các mục đích lợi ích hợp pháp được người kiểm soát hoặc bên thứ ba theo đuổi, trừ khi các lợi ích đó bị phủ nhận bởi các quyền và tự do cơ bản của chủ thể dữ liệu yêu cầu bảo vệ dữ liệu cá nhân, đặc biệt khi chủ thể dữ liệu là một trẻ em';
$string['gdpr_art_6_1_f_name'] = 'Lợi ích hợp pháp (GDPR Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'Chủ thể dữ liệu đã đồng ý rõ ràng với việc xử lý các dữ liệu cá nhân đó cho một hoặc nhiều mục đích cụ thể, trừ khi luật Liên minh hoặc quốc gia thành viên quy định rằng cấm xử lý như quy định tại khoản 1 của GDPR Điều 9 không thể được chủ thể dữ liệu gỡ bỏ';
$string['gdpr_art_9_2_a_name'] = 'Đồng ý rõ ràng (GDPR Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'Việc xử lý là cần thiết để thực hiện các nghĩa vụ và thực hiện các quyền cụ thể của người kiểm soát hoặc chủ thể dữ liệu trong lĩnh vực pháp luật về lao động và an sinh xã hội và bảo vệ xã hội, trong phạm vi mà nó được ủy quyền bởi luật Liên minh hoặc quốc gia thành viên hoặc một thỏa thuận tập thể theo luật quốc gia thành viên cung cấp các biện pháp bảo vệ thích hợp cho quyền cơ bản và lợi ích của chủ thể dữ liệu';
$string['gdpr_art_9_2_b_name'] = 'Pháp luật lao động và an sinh xã hội/bảo vệ xã hội (GDPR Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'Việc xử lý là cần thiết để bảo vệ lợi ích sống còn của chủ thể dữ liệu hoặc của một người tự nhiên khác khi chủ thể dữ liệu không thể đồng ý về mặt vật lý hoặc pháp lý';
$string['gdpr_art_9_2_c_name'] = 'Bảo vệ lợi ích sống còn (GDPR Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'Việc xử lý được thực hiện trong quá trình hoạt động hợp pháp với các biện pháp bảo vệ thích hợp của một tổ chức, hiệp hội hoặc bất kỳ cơ quan không vì lợi nhuận nào với mục đích chính trị, triết học, tôn giáo hoặc công đoàn và với điều kiện rằng việc xử lý chỉ liên quan đến các thành viên hoặc cựu thành viên của tổ chức hoặc những người có liên hệ thường xuyên với tổ chức này liên quan đến các mục đích của nó và rằng dữ liệu cá nhân không được tiết lộ ra ngoài tổ chức mà không có sự đồng ý của các chủ thể dữ liệu';
$string['gdpr_art_9_2_d_name'] = 'Hoạt động hợp pháp liên quan đến các thành viên/quan hệ gần gũi của một tổ chức, hiệp hội hoặc cơ quan không vì lợi nhuận khác (GDPR Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'Việc xử lý liên quan đến dữ liệu cá nhân mà chủ thể dữ liệu đã công khai';
$string['gdpr_art_9_2_e_name'] = 'Dữ liệu được công khai bởi chủ thể dữ liệu (GDPR Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'Việc xử lý là cần thiết để thiết lập, thực hiện hoặc bảo vệ các khiếu nại pháp lý hoặc bất cứ khi nào các tòa án đang hành động trong năng lực tư pháp của họ';
$string['gdpr_art_9_2_f_name'] = 'Khiếu nại pháp lý và hành động của tòa án (GDPR Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'Việc xử lý là cần thiết vì lý do lợi ích công cộng đáng kể, trên cơ sở luật Liên minh hoặc quốc gia thành viên phải tương xứng với mục tiêu theo đuổi, tôn trọng bản chất của quyền bảo vệ dữ liệu và đưa ra các biện pháp cụ thể và thích hợp để bảo vệ quyền cơ bản và lợi ích của chủ thể dữ liệu';
$string['gdpr_art_9_2_g_name'] = 'Lợi ích công cộng đáng kể (GDPR Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'Việc xử lý là cần thiết cho các mục đích y tế dự phòng hoặc nghề nghiệp, để đánh giá khả năng làm việc của nhân viên, chẩn đoán y khoa, cung cấp chăm sóc hoặc điều trị sức khỏe hoặc xã hội hoặc quản lý hệ thống và dịch vụ chăm sóc sức khỏe hoặc xã hội trên cơ sở luật Liên minh hoặc quốc gia thành viên hoặc theo hợp đồng với chuyên gia y tế và tuân theo các điều kiện và biện pháp bảo vệ quy định tại khoản 3 của GDPR Điều 9';
$string['gdpr_art_9_2_h_name'] = 'Mục đích y tế (GDPR Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'Việc xử lý là cần thiết vì lý do lợi ích công cộng trong lĩnh vực y tế công cộng, chẳng hạn như bảo vệ chống lại các mối đe dọa xuyên biên giới nghiêm trọng đối với sức khỏe hoặc đảm bảo tiêu chuẩn cao về chất lượng và an toàn của chăm sóc y tế và các sản phẩm y tế hoặc thiết bị y tế, trên cơ sở luật Liên minh hoặc quốc gia thành viên cung cấp các biện pháp cụ thể và thích hợp để bảo vệ quyền và tự do của chủ thể dữ liệu, đặc biệt là bảo mật nghề nghiệp';
$string['gdpr_art_9_2_i_name'] = 'Y tế công cộng (GDPR Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'Việc xử lý là cần thiết cho các mục đích lưu trữ vì lợi ích công cộng, cho các mục đích nghiên cứu khoa học hoặc lịch sử hoặc cho các mục đích thống kê theo Điều 89(1) dựa trên luật Liên minh hoặc quốc gia thành viên phải tương xứng với mục tiêu theo đuổi, tôn trọng bản chất của quyền bảo vệ dữ liệu và đưa ra các biện pháp cụ thể và thích hợp để bảo vệ quyền cơ bản và lợi ích của chủ thể dữ liệu';
$string['gdpr_art_9_2_j_name'] = 'Lợi ích công cộng, hoặc nghiên cứu khoa học/lịch sử/thống kê (GDPR Art. 9.2(j))';
$string['hide'] = 'Thu gọn tất cả';
$string['httpwarning'] = 'Bất kỳ dữ liệu nào tải xuống từ trang web này có thể không được mã hóa. Vui lòng liên hệ với quản trị viên hệ thống của bạn và yêu cầu họ cài đặt SSL trên trang web này.';
$string['inherit'] = 'Kế thừa';
$string['lawfulbases'] = 'Cơ sở pháp lý';
$string['lawfulbases_help'] = 'Chọn ít nhất một tùy chọn sẽ làm cơ sở pháp lý cho việc xử lý dữ liệu cá nhân. Để biết chi tiết về các cơ sở pháp lý này, vui lòng xem <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>';
$string['markcomplete'] = 'Đánh dấu là hoàn thành';
$string['markedcomplete'] = 'Yêu cầu của bạn đã được nhân viên bảo mật đánh dấu là hoàn thành.';
$string['messageprovider:contactdataprotectionofficer'] = 'Yêu cầu dữ liệu';
$string['messageprovider:datarequestprocessingresults'] = 'Kết quả xử lý yêu cầu dữ liệu';
$string['messageprovider:notifyexceptions'] = 'Thông báo ngoại lệ yêu cầu dữ liệu';
$string['message'] = 'Tin nhắn';
$string['messagelabel'] = 'Tin nhắn:';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Yêu cầu dữ liệu cá nhân của tôi';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} con';
$string['newrequest'] = 'Yêu cầu mới';
$string['nodatarequests'] = 'Không có yêu cầu dữ liệu nào';
$string['nodatarequestsmatchingfilter'] = 'Không có yêu cầu dữ liệu nào phù hợp với bộ lọc đã cho';
$string['noactivitiestoload'] = 'Không có hoạt động';
$string['noassignedroles'] = 'Không có vai trò nào được chỉ định trong ngữ cảnh này';
$string['noblockstoload'] = 'Không có khối';
$string['nocategories'] = 'Chưa có danh mục nào';
$string['nocoursestoload'] = 'Không có hoạt động';
$string['noexpiredcontexts'] = 'Mức độ ngữ cảnh này không có dữ liệu nào mà thời gian lưu giữ đã hết hạn.';
$string['nopersonaldatarequests'] = 'Bạn không có yêu cầu dữ liệu cá nhân nào';
$string['nopurposes'] = 'Chưa có mục đích nào';
$string['nosubjectaccessrequests'] = 'Không có yêu cầu dữ liệu nào mà bạn cần hành động';
$string['nosystemdefaults'] = 'Mục đích và danh mục trang web chưa được xác định.';
$string['notset'] = 'Chưa thiết lập (sử dụng giá trị mặc định)';
$string['notyetexpired'] = '{$a} (chưa hết hạn)';
$string['nocoursetofilter'] = 'Người dùng không được ghi danh vào bất kỳ khóa học nào để chọn';
$string['overrideinstances'] = 'Đặt lại các trường hợp có giá trị tùy chỉnh';
$string['pluginregistry'] = 'Sổ đăng ký plugin quyền riêng tư';
$string['pluginregistrytitle'] = 'Sổ đăng ký tuân thủ quyền riêng tư của plugin';
$string['privacy'] = 'Quyền riêng tư';
$string['privacyofficeronly'] = 'Chỉ người dùng được chỉ định vai trò nhân viên bảo mật ({$a}) mới có quyền truy cập vào nội dung này';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Các bộ lọc hiện đang áp dụng cho trang yêu cầu dữ liệu.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Số lượng yêu cầu dữ liệu mà người dùng muốn thấy trên một trang';
$string['privacy:metadata:purpose'] = 'Thông tin từ các mục đích dữ liệu được thực hiện cho trang web này.';
$string['privacy:metadata:purpose:usermodified'] = 'ID của người dùng đã chỉnh sửa mục đích';
$string['privacy:metadata:request'] = 'Thông tin từ các yêu cầu dữ liệu cá nhân (yêu cầu truy cập và xóa) được thực hiện cho trang web này.';
$string['privacy:metadata:request:comments'] = 'Bất kỳ nhận xét nào của người dùng kèm theo yêu cầu.';
$string['privacy:metadata:request:userid'] = 'ID của người dùng mà yêu cầu thuộc về';
$string['privacy:metadata:request:requestedby'] = 'ID của người dùng thực hiện yêu cầu, nếu yêu cầu thay mặt cho người dùng khác.';
$string['privacy:metadata:request:dpocomment'] = 'Bất kỳ nhận xét nào của nhân viên bảo mật về yêu cầu.';
$string['privacy:metadata:request:timecreated'] = 'Dấu thời gian cho biết khi nào yêu cầu được thực hiện bởi người dùng.';
$string['privacyrequestexpiry'] = 'Hết hạn yêu cầu dữ liệu';
$string['privacyrequestexpiry_desc'] = 'Thời gian các yêu cầu dữ liệu đã được phê duyệt sẽ có sẵn để tải xuống trước khi hết hạn. Nếu đặt là 0, thì không có giới hạn thời gian.';
$string['protected'] = 'Được bảo vệ';
$string['protectedlabel'] = 'Việc lưu giữ dữ liệu này có tiền lệ pháp lý cao hơn so với yêu cầu của người dùng để bị lãng quên. Dữ liệu này chỉ sẽ bị xóa sau khi thời gian lưu giữ đã hết hạn.';
$string['purpose'] = 'Mục đích';
$string['purpose_help'] = 'Mục đích mô tả lý do xử lý dữ liệu. Một mục đích mới có thể được thêm vào, hoặc nếu chọn Kế thừa, mục đích từ ngữ cảnh cấp cao hơn sẽ được áp dụng. Các ngữ cảnh là (từ thấp đến cao): Khối > Mô-đun hoạt động > Khóa học > Danh mục khóa học > Người dùng > Trang web.';
$string['purposecreated'] = 'Mục đích đã được tạo';
$string['purposedefault'] = 'Mục đích mặc định';
$string['purposedefault_help'] = 'Mục đích mặc định là mục đích được áp dụng cho bất kỳ trường hợp mới nào. Nếu chọn Kế thừa, mục đích từ ngữ cảnh cấp cao hơn sẽ được áp dụng. Các ngữ cảnh là (từ thấp đến cao): Khối > Mô-đun hoạt động > Khóa học > Danh mục khóa học > Người dùng > Trang web.';
$string['purposes'] = 'Mục đích';
$string['purposeslist'] = 'Danh sách các mục đích dữ liệu';
$string['purposeupdated'] = 'Mục đích đã được cập nhật';
$string['replyto'] = 'Trả lời tới';
$string['requestactions'] = 'Hành động';
$string['requestapproved'] = 'Yêu cầu đã được phê duyệt';
$string['requestby'] = 'Yêu cầu bởi';
$string['requestbydetail'] = 'Yêu cầu bởi:';
$string['requestcomments'] = 'Nhận xét';
$string['requestcomments_help'] = 'Hộp này cho phép bạn nhập bất kỳ chi tiết bổ sung nào về yêu cầu dữ liệu của bạn.';
$string['requestcreation'] = 'Tạo';
$string['requestdenied'] = 'Yêu cầu đã bị từ chối';
$string['requestemailintro'] = 'Bạn đã nhận được một yêu cầu dữ liệu:';
$string['requestfor'] = 'Người dùng';
$string['requestmarkedcomplete'] = 'Yêu cầu đã được đánh dấu là hoàn thành';
$string['requestorigin'] = 'Trang web';
$string['requestsapproved'] = 'Các yêu cầu đã được phê duyệt';
$string['requestsdenied'] = 'Các yêu cầu đã bị từ chối';
$string['requeststatus'] = 'Trạng thái';
$string['requestsubmitted'] = 'Yêu cầu của bạn đã được gửi tới nhân viên bảo mật';
$string['requesttype'] = 'Loại';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requesttype_help'] = 'Chọn lý do liên hệ với nhân viên bảo mật. Lưu ý rằng xóa tất cả dữ liệu cá nhân sẽ dẫn đến việc bạn không còn có thể đăng nhập vào trang web.';
$string['requesttypedelete'] = 'Xóa tất cả dữ liệu cá nhân của tôi';
$string['requesttypedeleteshort'] = 'Xóa';
$string['requesttypeexport'] = 'Xuất tất cả dữ liệu cá nhân của tôi';
$string['requesttypeexportallowfiltering'] = 'Xuất dữ liệu cá nhân của tôi';
$string['requesttypeexportshort'] = 'Xuất';
$string['requesttypeothers'] = 'Yêu cầu chung';
$string['requesttypeothersshort'] = 'Tin nhắn';
$string['requireallenddatesforuserdeletion'] = 'Xem các khóa học không có ngày kết thúc là hoạt động';
$string['requireallenddatesforuserdeletion_desc'] = 'Khi tính toán thời gian hết hạn của người dùng, nhiều yếu tố được xem xét:

* thời gian đăng nhập cuối cùng của người dùng được so sánh với thời gian lưu giữ cho người dùng; và
* liệu người dùng có đang ghi danh vào bất kỳ khóa học nào hay không.

Khi kiểm tra việc ghi danh hoạt động trong một khóa học, nếu khóa học không có ngày kết thúc thì cài đặt này được sử dụng để xác định xem khóa học đó có được coi là hoạt động hay không.

Nếu khóa học không có ngày kết thúc, và cài đặt này được kích hoạt, thì người dùng không thể bị xóa.';
$string['requiresattention'] = 'Yêu cầu chú ý.';
$string['requiresattentionexplanation'] = 'Plugin này không triển khai API quyền riêng tư của Moodle. Nếu plugin này lưu trữ bất kỳ dữ liệu cá nhân nào, nó sẽ không thể được xuất hoặc xóa thông qua hệ thống quyền riêng tư của Moodle.';
$string['resubmitrequestasnew'] = 'Gửi lại như yêu cầu mới';
$string['resubmitrequest'] = 'Gửi lại yêu cầu {$a->type} cho {$a->username}';
$string['resubmittedrequest'] = 'Yêu cầu {$a->type} hiện có cho {$a->username} đã bị hủy và gửi lại';
$string['resultdeleted'] = 'Gần đây bạn đã yêu cầu xóa tài khoản và dữ liệu cá nhân của bạn trong {$a}. Quá trình này đã hoàn thành và bạn sẽ không còn có thể đăng nhập.';
$string['resultdownloadready'] = 'Bản sao dữ liệu cá nhân của bạn từ {$a} mà bạn đã yêu cầu gần đây hiện đã sẵn sàng để tải xuống từ liên kết sau.';
$string['reviewdata'] = 'Xem lại dữ liệu';
$string['retentionperiod'] = 'Thời gian lưu giữ';
$string['retentionperiod_help'] = 'Thời gian lưu giữ xác định khoảng thời gian mà dữ liệu nên được lưu giữ. Khi thời gian lưu giữ đã hết hạn, dữ liệu sẽ được gắn cờ và liệt kê để xóa, chờ xác nhận từ quản trị viên.';
$string['retentionperiodnotdefined'] = 'Không có thời gian lưu giữ được xác định';
$string['retentionperiodzero'] = 'Không có thời gian lưu giữ';
$string['roleoverrides'] = 'Ghi đè vai trò';
$string['selectbulkaction'] = 'Vui lòng chọn một hành động hàng loạt.';
$string['selectdatarequests'] = 'Vui lòng chọn yêu cầu dữ liệu.';
$string['selectuserdatarequest'] = 'Chọn yêu cầu dữ liệu của {$a->username}.';
$string['send'] = 'Gửi';
$string['sensitivedatareasons'] = 'Lý do xử lý dữ liệu cá nhân nhạy cảm';
$string['sensitivedatareasons_help'] = 'Chọn một hoặc nhiều lý do áp dụng mà loại trừ cấm xử lý dữ liệu cá nhân nhạy cảm gắn liền với mục đích này. Để biết thêm thông tin, vui lòng xem <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>';
$string['setdefaults'] = 'Đặt mặc định';
$string['showdataretentionsummary'] = 'Hiển thị tóm tắt lưu giữ dữ liệu';
$string['showdataretentionsummary_desc'] = 'Nếu được kích hoạt, một liên kết đến tóm tắt lưu giữ dữ liệu sẽ được hiển thị trong chân trang và trong hồ sơ người dùng.';
$string['statusapproved'] = 'Đã phê duyệt';
$string['statusawaitingapproval'] = 'Đang chờ phê duyệt';
$string['statuscancelled'] = 'Đã hủy';
$string['statuscomplete'] = 'Hoàn thành';
$string['statusready'] = 'Sẵn sàng để tải xuống';
$string['statusdeleted'] = 'Đã xóa';
$string['statusdetail'] = 'Trạng thái:';
$string['statusexpired'] = 'Hết hạn';
$string['statusprocessing'] = 'Đang xử lý';
$string['statuspending'] = 'Đang chờ xử lý';
$string['statusrejected'] = 'Bị từ chối';
$string['subjectscope'] = 'Phạm vi đối tượng';
$string['subjectscope_help'] = 'Phạm vi đối tượng liệt kê các vai trò có thể được chỉ định trong ngữ cảnh này.';
$string['summary'] = 'Tóm tắt cấu hình sổ đăng ký';
$string['systemconfignotsetwarning'] = 'Mục đích và danh mục trang web chưa được xác định. Khi những điều này chưa được xác định, tất cả dữ liệu sẽ bị xóa khi xử lý yêu cầu xóa.';
$string['selectcourses'] = 'Chọn khóa học để xuất';
$string['statuspreprocessing'] = 'Tiền xử lý';
$string['user'] = 'Người dùng';
$string['userlistnoncompliant'] = 'Nhà cung cấp danh sách người dùng không tuân thủ';
$string['userlistexplanation'] = 'Plugin này có nhà cung cấp cơ bản nhưng cũng nên triển khai nhà cung cấp danh sách người dùng để hỗ trợ đầy đủ chức năng quyền riêng tư.';
$string['allowfiltering'] = 'Cho phép lọc các xuất theo khóa học';
$string['allowfiltering_desc'] = 'Nếu được kích hoạt, nhân viên bảo mật có thể chọn xuất dữ liệu người dùng từ các khóa học đã chọn thay vì tất cả các khóa học. Khi tính năng này được kích hoạt,
 các yêu cầu xuất sẽ bắt đầu từ "Đang chờ xử lý" và chỉ có thể được phê duyệt sau khi nhiệm vụ nền đã hoàn thành.';
$string['viewrequest'] = 'Xem yêu cầu';
$string['visible'] = 'Mở rộng tất cả';
$string['unexpiredrolewithretention'] = '{$a->retention} (Chưa hết hạn)';
$string['expiredrolewithretention'] = '{$a->retention} (Đã hết hạn)';
$string['defaultexpired'] = 'Dữ liệu cho tất cả người dùng';
$string['defaultexpiredexcept'] = 'Dữ liệu cho tất cả người dùng, trừ những người giữ bất kỳ vai trò nào sau đây:<br>
{$a->unexpired}';
$string['defaultunexpiredwithexceptions'] = 'Chỉ dữ liệu cho những người dùng giữ bất kỳ vai trò nào sau đây:<br>
{$a->expired}
Trừ khi họ cũng giữ bất kỳ vai trò nào sau đây:<br>
{$a->unexpired}';
$string['defaultunexpired'] = 'Chỉ dữ liệu cho những người dùng giữ bất kỳ vai trò nào sau đây:<br>
{$a->expired}';
$string['tobedeleted'] = 'Dữ liệu sẽ bị xóa';
$string['addroleoverride'] = 'Thêm ghi đè vai trò';
$string['roleoverride'] = 'Ghi đè vai trò';
$string['role'] = 'Vai trò';
$string['role_help'] = 'Vai trò mà ghi đè nên áp dụng cho.';
$string['duplicaterole'] = 'Vai trò đã được chỉ định';
$string['purposeoverview'] = 'Một mục đích mô tả việc sử dụng dự kiến và chính sách lưu giữ cho dữ liệu được lưu trữ. Cơ sở để lưu trữ và lưu giữ dữ liệu đó cũng được mô tả trong mục đích.';
$string['roleoverrideoverview'] = 'Chính sách lưu giữ mặc định có thể được ghi đè cho các vai trò người dùng cụ thể, cho phép bạn chỉ định một chính sách lưu giữ dài hơn hoặc ngắn hơn. Một người dùng chỉ hết hạn khi tất cả các vai trò của họ đã hết hạn.';
