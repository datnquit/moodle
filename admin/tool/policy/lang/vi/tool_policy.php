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
 * @package     tool_policy
 * @category    string
 * @copyright   2018 David Mudrák <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['acceptanceacknowledgement'] = 'Tôi xác nhận rằng tôi đã nhận được yêu cầu để đồng ý thay mặt cho người dùng ở trên.';
$string['acceptancenote'] = 'Ghi chú';
$string['acceptancepolicies'] = 'Chính sách';
$string['acceptancessavedsucessfully'] = 'Các thỏa thuận đã được lưu thành công.';
$string['acceptancestatusaccepted'] = 'Đã chấp nhận';
$string['acceptancestatusacceptedbehalf'] = 'Chấp nhận thay mặt người dùng';
$string['acceptancestatusdeclined'] = 'Đã từ chối';
$string['acceptancestatusdeclinedbehalf'] = 'Từ chối thay mặt người dùng';
$string['acceptancestatusoverall'] = 'Tổng thể';
$string['acceptancestatuspartial'] = 'Chấp nhận một phần';
$string['acceptancestatuspending'] = 'Đang chờ xử lý';
$string['acceptanceusers'] = 'Người dùng';
$string['actions'] = 'Hành động';
$string['activate'] = 'Đặt trạng thái thành "Hoạt động"';
$string['activating'] = 'Kích hoạt chính sách';
$string['activateconfirm'] = '<p>Bạn sắp kích hoạt chính sách <em>\'{$a->name}\'</em> và làm cho phiên bản <em>\'{$a->revision}\'</em> trở thành phiên bản hiện tại.</p><p>Tất cả người dùng sẽ được yêu cầu đồng ý với phiên bản chính sách mới này để có thể sử dụng trang web.</p>';
$string['activateconfirmyes'] = 'Kích hoạt';
$string['agreepolicies'] = 'Vui lòng đồng ý với các chính sách sau';
$string['backtoprevious'] = 'Quay lại trang trước';
$string['backtotop'] = 'Lên đầu trang';
$string['cachedef_policy_optional'] = 'Bộ nhớ đệm của cờ tùy chọn/bắt buộc cho các phiên bản chính sách';
$string['consentbulk'] = 'Đồng ý';
$string['consentpagetitle'] = 'Đồng ý';
$string['contactdpo'] = 'Đối với bất kỳ câu hỏi nào về chính sách, vui lòng liên hệ với nhân viên bảo mật.';
$string['dataproc'] = 'Xử lý dữ liệu cá nhân';
$string['declineacknowledgement'] = 'Tôi xác nhận rằng tôi đã nhận được yêu cầu từ chối đồng ý thay mặt cho người dùng ở trên.';
$string['declinethepolicy'] = 'Từ chối sự đồng ý của người dùng';
$string['deleting'] = 'Xóa một phiên bản';
$string['deleteconfirm'] = '<p>Bạn có chắc chắn muốn xóa chính sách <em>\'{$a->name}\'</em>?</p><p>Hành động này không thể hoàn tác.</p>';
$string['editingpolicydocument'] = 'Chỉnh sửa chính sách';
$string['errorpolicyversioncompulsory'] = 'Chính sách bắt buộc không thể bị từ chối!';
$string['errorpolicyversionnotfound'] = 'Không có phiên bản chính sách nào với định danh này.';
$string['errorsaveasdraft'] = 'Thay đổi nhỏ không thể được lưu dưới dạng bản nháp';
$string['errorusercantviewpolicyversion'] = 'Người dùng không có quyền truy cập phiên bản chính sách này.';
$string['event_acceptance_created'] = 'Tạo thỏa thuận chính sách người dùng';
$string['event_acceptance_updated'] = 'Cập nhật thỏa thuận chính sách người dùng';
$string['filtercapabilityno'] = 'Quyền: Không thể đồng ý';
$string['filtercapabilityyes'] = 'Quyền: Có thể đồng ý';
$string['filterrevision'] = 'Phiên bản: {$a}';
$string['filterrevisionstatus'] = 'Phiên bản: {$a->name} ({$a->status})';
$string['filterrole'] = 'Vai trò: {$a}';
$string['filters'] = 'Bộ lọc';
$string['filterstatusdeclined'] = 'Trạng thái: Đã từ chối';
$string['filterstatuspending'] = 'Trạng thái: Đang chờ xử lý';
$string['filterstatusyes'] = 'Trạng thái: Đã đồng ý';
$string['filterplaceholder'] = 'Từ khóa tìm kiếm hoặc chọn bộ lọc';
$string['filterpolicy'] = 'Chính sách: {$a}';
$string['guestconsent:continue'] = 'Tiếp tục';
$string['guestconsentmessage'] = 'Nếu bạn tiếp tục duyệt trang web này, bạn đồng ý với các chính sách của chúng tôi:';
$string['iagree'] = 'Tôi đồng ý với {$a}';
$string['idontagree'] = 'Không cảm ơn, tôi từ chối {$a}';
$string['iagreetothepolicy'] = 'Đồng ý';
$string['inactivate'] = 'Đặt trạng thái thành "Không hoạt động"';
$string['inactivating'] = 'Ngừng kích hoạt chính sách';
$string['inactivatingconfirm'] = '<p>Bạn sắp ngừng kích hoạt chính sách <em>\'{$a->name}\'</em> phiên bản <em>\'{$a->revision}\'</em>.</p>';
$string['inactivatingconfirmyes'] = 'Ngừng kích hoạt';
$string['invalidversionid'] = 'Không có chính sách nào với định danh này!';
$string['irevokethepolicy'] = 'Rút lại sự đồng ý của người dùng';
$string['listactivepolicies'] = 'Danh sách các chính sách đang hoạt động';
$string['minorchange'] = 'Thay đổi nhỏ';
$string['minorchangeinfo'] = 'Một thay đổi nhỏ không làm thay đổi ý nghĩa của chính sách. Người dùng không cần phải đồng ý lại với chính sách nếu chỉnh sửa được đánh dấu là thay đổi nhỏ.';
$string['managepolicies'] = 'Quản lý chính sách';
$string['movedown'] = 'Di chuyển xuống';
$string['moveup'] = 'Di chuyển lên';
$string['mustagreetocontinue'] = 'Trước khi tiếp tục, bạn cần xác nhận tất cả các chính sách này.';
$string['newpolicy'] = 'Chính sách mới';
$string['newversion'] = 'Phiên bản mới';
$string['noactivepolicies'] = 'Không có chính sách nào có phiên bản hoạt động.';
$string['nofiltersapplied'] = 'Không áp dụng bộ lọc nào';
$string['nopermissiontoagreedocs'] = 'Không có quyền đồng ý với các chính sách';
$string['nopermissiontoagreedocs_desc'] = 'Xin lỗi, bạn không có quyền cần thiết để đồng ý với các chính sách.<br />Bạn sẽ không thể sử dụng trang web này cho đến khi các chính sách sau được đồng ý:';
$string['nopermissiontoagreedocsbehalf'] = 'Không có quyền đồng ý với các chính sách thay mặt cho người dùng này';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Xin lỗi, bạn không có quyền cần thiết để đồng ý với các chính sách sau thay mặt cho {$a}:';
$string['nopermissiontoagreedocscontact'] = 'Để được trợ giúp thêm:';
$string['nopermissiontoviewpolicyversion'] = 'Bạn không có quyền xem phiên bản chính sách này.';
$string['nopolicies'] = 'Không có chính sách nào cho người dùng đã đăng ký với phiên bản hoạt động.';
$string['selectpolicyandversion'] = 'Sử dụng bộ lọc ở trên để chọn chính sách và/hoặc phiên bản';
$string['steppolicies'] = 'Chính sách {$a->numpolicy} trong tổng số {$a->totalpolicies}';
$string['pluginname'] = 'Chính sách';
$string['policiesagreements'] = 'Chính sách và thỏa thuận';
$string['policy:accept'] = 'Đồng ý với các chính sách';
$string['policy:acceptbehalf'] = 'Đồng ý với chính sách thay mặt người khác';
$string['policy:managedocs'] = 'Quản lý chính sách';
$string['policy:viewacceptances'] = 'Xem báo cáo thỏa thuận người dùng';
$string['policydocaudience'] = 'Sự đồng ý của người dùng';
$string['policydocaudience0'] = 'Tất cả người dùng';
$string['policydocaudience1'] = 'Người dùng đã xác thực';
$string['policydocaudience2'] = 'Khách';
$string['policydoccontent'] = 'Chính sách đầy đủ';
$string['policydochdrpolicy'] = 'Chính sách';
$string['policydochdrversion'] = 'Phiên bản tài liệu';
$string['policydocname'] = 'Tên';
$string['policydocoptional'] = 'Đồng ý tùy chọn';
$string['policydocoptionalyes'] = 'Tùy chọn';
$string['policydocoptionalno'] = 'Bắt buộc';
$string['policydocrevision'] = 'Phiên bản';
$string['policydocsummary'] = 'Tóm tắt';
$string['policydocsummary_help'] = 'Văn bản này nên cung cấp tóm tắt chính sách, có thể ở dạng đơn giản và dễ truy cập, sử dụng ngôn ngữ rõ ràng và dễ hiểu.';
$string['policydoctype'] = 'Loại';
$string['policydoctype0'] = 'Chính sách trang web';
$string['policydoctype1'] = 'Chính sách bảo mật';
$string['policydoctype2'] = 'Chính sách bên thứ ba';
$string['policydoctype99'] = 'Chính sách khác';
$string['policydocuments'] = 'Tài liệu chính sách';
$string['policynamedversion'] = 'Chính sách {$a->name} (phiên bản {$a->revision} - {$a->id})';
$string['policypriorityagreement'] = 'Hiển thị chính sách trước khi hiển thị các chính sách khác';
$string['policyversionacceptedinbehalf'] = 'Sự đồng ý cho chính sách này đã được thực hiện thay mặt bạn.';
$string['policyversionacceptedinotherlang'] = 'Sự đồng ý cho phiên bản chính sách này đã được thực hiện bằng ngôn ngữ khác.';
$string['previousversions'] = '{$a} phiên bản trước';
$string['privacy:metadata:acceptances'] = 'Thông tin về thỏa thuận chính sách của người dùng.';
$string['privacy:metadata:acceptances:policyversionid'] = 'Phiên bản chính sách mà người dùng đã đồng ý.';
$string['privacy:metadata:acceptances:userid'] = 'Người dùng mà thỏa thuận chính sách này liên quan đến.';
$string['privacy:metadata:acceptances:status'] = 'Trạng thái của thỏa thuận.';
$string['privacy:metadata:acceptances:lang'] = 'Ngôn ngữ sử dụng để hiển thị chính sách khi người dùng đồng ý.';
$string['privacy:metadata:acceptances:usermodified'] = 'Người dùng đã đồng ý chính sách, nếu đồng ý thay mặt người dùng khác.';
$string['privacy:metadata:acceptances:timecreated'] = 'Thời gian người dùng đồng ý với chính sách.';
$string['privacy:metadata:acceptances:timemodified'] = 'Thời gian người dùng cập nhật thỏa thuận của họ.';
$string['privacy:metadata:acceptances:note'] = 'Bất kỳ nhận xét nào thêm bởi người dùng khi đồng ý thay mặt cho người dùng khác.';
$string['privacy:metadata:subsystem:corefiles'] = 'Công cụ chính sách lưu trữ các tệp được bao gồm trong tóm tắt và chính sách đầy đủ.';
$string['privacy:metadata:versions'] = 'Thông tin phiên bản chính sách.';
$string['privacy:metadata:versions:name'] = 'Tên của chính sách.';
$string['privacy:metadata:versions:type'] = 'Loại chính sách.';
$string['privacy:metadata:versions:audience'] = 'Loại người dùng được yêu cầu đồng ý.';
$string['privacy:metadata:versions:archived'] = 'Trạng thái của chính sách (hoạt động hoặc không hoạt động).';
$string['privacy:metadata:versions:usermodified'] = 'Người dùng đã chỉnh sửa chính sách.';
$string['privacy:metadata:versions:timecreated'] = 'Thời gian phiên bản này của chính sách được tạo.';
$string['privacy:metadata:versions:timemodified'] = 'Thời gian phiên bản này của chính sách được cập nhật.';
$string['privacy:metadata:versions:policyid'] = 'Chính sách mà phiên bản này liên quan đến.';
$string['privacy:metadata:versions:revision'] = 'Tên phiên bản của phiên bản chính sách này.';
$string['privacy:metadata:versions:summary'] = 'Tóm tắt của phiên bản chính sách này.';
$string['privacy:metadata:versions:summaryformat'] = 'Định dạng của trường tóm tắt.';
$string['privacy:metadata:versions:content'] = 'Nội dung của phiên bản chính sách này.';
$string['privacy:metadata:versions:contentformat'] = 'Định dạng của trường nội dung.';
$string['privacysettings'] = 'Cài đặt bảo mật';
$string['readpolicy'] = 'Vui lòng đọc {$a} của chúng tôi';
$string['refertofullpolicytext'] = 'Vui lòng tham khảo toàn văn bản {$a} nếu bạn muốn xem xét.';
$string['response'] = 'Phản hồi';
$string['responseby'] = 'Người phản hồi';
$string['responseon'] = 'Ngày';
$string['revokeacknowledgement'] = 'Tôi xác nhận rằng tôi đã nhận được yêu cầu rút lại sự đồng ý thay mặt cho người dùng ở trên.';
$string['save'] = 'Lưu';
$string['saveasdraft'] = 'Lưu dưới dạng bản nháp';
$string['selectuser'] = 'Chọn người dùng {$a}';
$string['selectusersforconsent'] = 'Chọn người dùng để đồng ý thay mặt.';
$string['settodraft'] = 'Tạo bản nháp mới';
$string['status'] = 'Trạng thái chính sách';
$string['statusformtitleaccept'] = 'Chấp nhận chính sách';
$string['statusformtitledecline'] = 'Từ chối chính sách';
$string['statusformtitlerevoke'] = 'Rút lại chính sách';
$string['statusinfo'] = 'Chính sách có trạng thái "Hoạt động" yêu cầu người dùng đồng ý, hoặc khi họ lần đầu đăng nhập, hoặc trong trường hợp người dùng hiện tại, khi họ đăng nhập lần tiếp theo.';
$string['status0'] = 'Bản nháp';
$string['status1'] = 'Hoạt động';
$string['status2'] = 'Không hoạt động';
$string['useracceptanceactionaccept'] = 'Chấp nhận';
$string['useracceptanceactionacceptone'] = 'Chấp nhận {$a}';
$string['useracceptanceactionacceptpending'] = 'Chấp nhận các chính sách đang chờ xử lý';
$string['useracceptanceactiondecline'] = 'Từ chối';
$string['useracceptanceactiondeclineone'] = 'Từ chối {$a}';
$string['useracceptanceactiondeclinepending'] = 'Từ chối các chính sách đang chờ xử lý';
$string['useracceptanceactiondetails'] = 'Chi tiết';
$string['useracceptanceactionrevoke'] = 'Rút lại';
$string['useracceptanceactionrevokeall'] = 'Rút lại các chính sách đã chấp nhận';
$string['useracceptanceactionrevokeone'] = 'Rút lại sự chấp nhận của {$a}';
$string['useracceptancecount'] = '{$a->agreedcount} trong tổng số {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'Các thỏa thuận người dùng';
$string['userpolicysettings'] = 'Chính sách';
$string['usersaccepted'] = 'Thỏa thuận';
$string['viewarchived'] = 'Xem các phiên bản trước';
$string['viewconsentpageforuser'] = 'Đang xem trang này thay mặt cho {$a}';
