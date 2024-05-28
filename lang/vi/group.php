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
 * Strings for component 'group', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core
 * @copyright 2006 The Open University
 * @author    J.White AT open.ac.uk
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['addedby'] = 'Được thêm bởi {$a}';
$string['addgroup'] = 'Thêm người dùng vào nhóm';
$string['addgroupstogrouping'] = 'Thêm nhóm vào phân nhóm';
$string['addgroupstogroupings'] = 'Thêm/xóa nhóm';
$string['adduserstogroup'] = 'Thêm/xóa người dùng';
$string['allocateby'] = 'Phân bổ thành viên';
$string['anygrouping'] = '[Bất kỳ phân nhóm nào]';
$string['autocreategroups'] = 'Tự động tạo nhóm';
$string['backtogroupings'] = 'Trở lại phân nhóm';
$string['backtogroups'] = 'Trở lại nhóm';
$string['badnamingscheme'] = 'Phải chứa chính xác một ký tự \'@\' hoặc một ký tự \'#\'';
$string['byfirstname'] = 'Theo thứ tự bảng chữ cái tên, họ';
$string['byidnumber'] = 'Theo thứ tự bảng chữ cái số ID';
$string['bylastname'] = 'Theo thứ tự bảng chữ cái họ, tên';
$string['createautomaticgrouping'] = 'Tạo phân nhóm tự động';
$string['creategroup'] = 'Tạo nhóm';
$string['creategrouping'] = 'Tạo phân nhóm';
$string['creategroupinselectedgrouping'] = 'Tạo nhóm trong phân nhóm';
$string['createingrouping'] = 'Phân nhóm của các nhóm tự tạo';
$string['createorphangroup'] = 'Tạo nhóm mồ côi';
$string['csvdelimiter'] = 'Ký tự phân cách CSV';
$string['databaseupgradegroups'] = 'Phiên bản nhóm hiện tại là {$a}';
$string['defaultgrouping'] = 'Phân nhóm mặc định';
$string['defaultgroupingname'] = 'Phân nhóm';
$string['defaultgroupname'] = 'Nhóm';
$string['deleteallgroupings'] = 'Xóa tất cả phân nhóm';
$string['deleteallgroups'] = 'Xóa tất cả nhóm';
$string['deletegroupconfirm'] = 'Bạn có chắc chắn muốn xóa nhóm \'{$a}\'?';
$string['deletegrouping'] = 'Xóa phân nhóm';
$string['deletegroupingconfirm'] = 'Bạn có chắc chắn muốn xóa phân nhóm \'{$a}\'? (Các nhóm trong phân nhóm sẽ không bị xóa.)';
$string['deletegroupsconfirm'] = 'Bạn có chắc chắn muốn xóa các nhóm sau?';
$string['deleteselectedgroup'] = 'Xóa';
$string['disablemessagingaction'] = 'Tắt nhắn tin';
$string['editgroupingsettings'] = 'Chỉnh sửa cài đặt phân nhóm';
$string['editgroupsettings'] = 'Chỉnh sửa cài đặt nhóm';
$string['editusersgroupsa'] = 'Chỉnh sửa nhóm cho "{$a}"';
$string['enablemessaging'] = 'Nhắn tin nhóm';
$string['enablemessagingaction'] = 'Bật nhắn tin';
$string['enablemessaging_help'] = 'Nếu bật, các thành viên trong nhóm có thể gửi tin nhắn cho những người khác trong nhóm thông qua hộp thư nhắn tin.';
$string['encoding'] = 'Mã hóa';
$string['enrolmentkey'] = 'Khóa ghi danh';
$string['enrolmentkey_help'] = 'Khóa ghi danh cho phép hạn chế truy cập vào khóa học chỉ cho những ai biết khóa này. Nếu một khóa ghi danh nhóm được chỉ định, khi nhập khóa đó sẽ không chỉ cho phép người dùng vào khóa học mà còn tự động đưa họ vào thành viên của nhóm này.

Lưu ý: Các khóa ghi danh nhóm phải được bật trong cài đặt tự ghi danh và một khóa ghi danh cho khóa học cũng phải được chỉ định.';
$string['enrolmentkeyalreadyinuse'] = 'Khóa ghi danh này đã được sử dụng cho một nhóm khác.';
$string['erroraddremoveuser'] = 'Lỗi khi thêm/xóa người dùng {$a} vào nhóm';
$string['erroreditgroup'] = 'Lỗi khi tạo/cập nhật nhóm {$a}';
$string['erroreditgrouping'] = 'Lỗi khi tạo/cập nhật phân nhóm {$a}';
$string['erroraddtogroup'] = 'Giá trị không hợp lệ cho addtogroup. Nó nên là 0 cho chế độ không nhóm hoặc 1 cho một nhóm mới được tạo.';
$string['erroraddtogroupgroupname'] = 'Bạn không thể chỉ định tên nhóm khi addtogroup được đặt.';
$string['errorinvalidgroup'] = 'Lỗi, nhóm không hợp lệ {$a}';
$string['errorremovenotpermitted'] = 'Bạn không có quyền xóa thành viên nhóm được thêm tự động {$a}';
$string['errorselectone'] = 'Vui lòng chọn một nhóm duy nhất trước khi chọn tùy chọn này';
$string['errorselectsome'] = 'Vui lòng chọn một hoặc nhiều nhóm trước khi chọn tùy chọn này';
$string['evenallocation'] = 'Lưu ý: Để duy trì phân bổ nhóm đồng đều, số thành viên thực tế mỗi nhóm khác với số bạn đã chỉ định.';
$string['eventgroupcreated'] = 'Nhóm đã được tạo';
$string['eventgroupdeleted'] = 'Nhóm đã bị xóa';
$string['eventgroupmemberadded'] = 'Thành viên nhóm đã được thêm';
$string['eventgroupmemberremoved'] = 'Thành viên nhóm đã bị xóa';
$string['eventgroupupdated'] = 'Nhóm đã được cập nhật';
$string['eventgroupingcreated'] = 'Phân nhóm đã được tạo';
$string['eventgroupingdeleted'] = 'Phân nhóm đã bị xóa';
$string['eventgroupinggroupassigned'] = 'Nhóm đã được gán vào phân nhóm';
$string['eventgroupinggroupunassigned'] = 'Nhóm đã bị gỡ khỏi phân nhóm';
$string['eventgroupingupdated'] = 'Phân nhóm đã được cập nhật';
$string['existingmembers'] = 'Thành viên hiện tại: {$a}';
$string['exportgroupsgroupings'] = 'Tải xuống các nhóm và phân nhóm dưới dạng';
$string['filtergroups'] = 'Lọc nhóm theo:';
$string['group'] = 'Nhóm';
$string['groupaddedsuccesfully'] = 'Nhóm {$a} đã được thêm thành công';
$string['groupaddedtogroupingsuccesfully'] = 'Nhóm {$a->groupname} đã được thêm vào phân nhóm {$a->groupingname} thành công';
$string['groupby'] = 'Tự động tạo dựa trên';
$string['groupdescription'] = 'Mô tả nhóm';
$string['groupinfo'] = 'Thông tin về nhóm đã chọn';
$string['groupinfomembers'] = 'Thông tin về các thành viên đã chọn';
$string['groupinfopeople'] = 'Thông tin về người đã chọn';
$string['grouping'] = 'Phân nhóm';
$string['groupingaddedsuccesfully'] = 'Phân nhóm {$a} đã được thêm thành công';
$string['grouping_help'] = 'Phân nhóm là tập hợp các nhóm trong một khóa học. Nếu một phân nhóm được chọn, các sinh viên được gán vào các nhóm trong phân nhóm đó sẽ có thể làm việc cùng nhau.';
$string['groupingsection'] = 'Truy cập phân nhóm';
$string['groupingsection_help'] = 'Phân nhóm là tập hợp các nhóm trong một khóa học. Nếu một phân nhóm được chọn ở đây, chỉ có sinh viên được gán vào các nhóm trong phân nhóm này mới có quyền truy cập vào phần này.';
$string['groupingdescription'] = 'Mô tả phân nhóm';
$string['groupingname'] = 'Tên phân nhóm';
$string['groupingnameexists'] = 'Tên phân nhóm \'{$a}\' đã tồn tại trong khóa học này, vui lòng chọn tên khác.';
$string['groupings'] = 'Phân nhóm';
$string['groupingsonly'] = 'Chỉ phân nhóm';
$string['groupmember'] = 'Thành viên nhóm';
$string['groupmemberdesc'] = 'Vai trò tiêu chuẩn cho một thành viên của nhóm.';
$string['groupmembers'] = 'Thành viên nhóm';
$string['groupmemberssee'] = 'Xem thành viên nhóm';
$string['groupmembersselected'] = 'Các thành viên của nhóm đã chọn';
$string['groupmode'] = 'Chế độ nhóm';
$string['groupmode_groupsseparate_help'] = 'Sinh viên được chia thành các nhóm và chỉ có thể xem công việc của nhóm mình.';
$string['groupmode_groupsvisible_help'] = 'Sinh viên được chia thành các nhóm, nhưng có thể xem công việc của các nhóm khác.';
$string['groupmode_help'] = '* Không có nhóm
* Nhóm riêng: Sinh viên được chia thành các nhóm và chỉ có thể xem công việc của nhóm mình.
* Nhóm công khai: Sinh viên được chia thành các nhóm, nhưng có thể xem công việc của các nhóm khác.

Chế độ nhóm được thiết lập ở cấp khóa học là chế độ mặc định cho tất cả các hoạt động. Nếu chế độ nhóm được ép buộc ở cấp khóa học, nó không thể thay đổi trong một hoạt động.';
$string['groupmodeforce'] = 'Ép buộc chế độ nhóm';
$string['groupmodeforce_help'] = 'Chế độ nhóm được ép buộc cho tất cả các hoạt động và không thể thay đổi trong một hoạt động.';
$string['groupmy'] = 'Nhóm của tôi';
$string['groupname'] = 'Tên nhóm';
$string['groupnameexists'] = 'Tên nhóm \'{$a}\' đã tồn tại trong khóa học này, vui lòng chọn tên khác.';
$string['groupnotamember'] = 'Xin lỗi, bạn không phải là thành viên của nhóm đó';
$string['groups'] = 'Nhóm';
$string['groupscount'] = 'Nhóm ({$a})';
$string['groupsettingsheader'] = 'Nhóm';
$string['groupsgroupings'] = 'Nhóm & phân nhóm';
$string['groupsinselectedgrouping'] = 'Nhóm trong:';
$string['groupsnone'] = 'Không có nhóm';
$string['groupsonly'] = 'Chỉ nhóm';
$string['groupspreview'] = 'Xem trước nhóm';
$string['groupsseparate'] = 'Nhóm riêng';
$string['groupsvisible'] = 'Nhóm công khai';
$string['grouptemplate'] = 'Nhóm @';
$string['importgroups'] = 'Nhập nhóm';
$string['importgroups_help'] = 'Nhóm có thể được nhập qua tệp văn bản. Định dạng của tệp nên như sau:

* Mỗi dòng của tệp chứa một bản ghi
* Mỗi bản ghi là một loạt dữ liệu được phân cách bởi ký tự phân cách đã chọn
* Bản ghi đầu tiên chứa danh sách các tên trường định nghĩa định dạng của phần còn lại của tệp
* Tên trường bắt buộc là tên nhóm
* Các tên trường tùy chọn là groupidnumber, description, enrolmentkey, groupingname, enablemessaging';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'Chỉ bao gồm các ghi danh hoạt động';
$string['includeonlyactiveenrol_help'] = 'Nếu bật, người dùng bị đình chỉ sẽ không được bao gồm trong các nhóm.';
$string['javascriptrequired'] = 'Trang này yêu cầu JavaScript được bật.';
$string['members'] = 'Thành viên mỗi nhóm';
$string['membersofselectedgroup'] = 'Thành viên của:';
$string['namingscheme'] = 'Quy tắc đặt tên';
$string['namingscheme_help'] = 'Ký tự at (@) có thể được sử dụng để tạo các nhóm có tên chứa chữ cái. Ví dụ Group @ sẽ tạo các nhóm có tên là Group A, Group B, Group C, ...

Ký tự hash (#) có thể được sử dụng để tạo các nhóm có tên chứa số. Ví dụ Group # sẽ tạo các nhóm có tên là Group 1, Group 2, Group 3, ...';
$string['newgrouping'] = 'Phân nhóm mới';
$string['newpicture'] = 'Hình ảnh mới';
$string['newpicture_help'] = 'Chọn một hình ảnh ở định dạng JPG hoặc PNG. Hình ảnh sẽ được cắt thành hình vuông và thay đổi kích thước thành 100x100 pixel.';
$string['noallocation'] = 'Không phân bổ';
$string['nogrouping'] = 'Không có phân nhóm';
$string['nogroup'] = 'Không có nhóm';
$string['nogrouping'] = 'Không có phân nhóm';
$string['nogroups'] = 'Chưa có nhóm nào được thiết lập trong khóa học này';
$string['nogroupsassigned'] = 'Không có nhóm nào được gán';
$string['nopermissionforcreation'] = 'Không thể tạo nhóm "{$a}" vì bạn không có quyền cần thiết';
$string['nosmallgroups'] = 'Ngăn chặn nhóm nhỏ cuối cùng';
$string['notingroup'] = 'Bỏ qua người dùng trong nhóm';
$string['notingrouping'] = 'Không trong một phân nhóm';
$string['notingrouplist'] = 'Không trong một nhóm';
$string['nousersinrole'] = 'Không có người dùng phù hợp trong vai trò đã chọn';
$string['number'] = 'Số lượng nhóm/thành viên';
$string['numgroups'] = 'Số lượng nhóm';
$string['nummembers'] = 'Thành viên mỗi nhóm';
$string['manageactions'] = 'Quản lý';
$string['messagingdisabled'] = 'Đã tắt nhắn tin thành công trong {$a} nhóm';
$string['messagingenabled'] = 'Đã bật nhắn tin thành công trong {$a} nhóm';
$string['mygroups'] = 'Nhóm của tôi';
$string['othergroups'] = 'Nhóm khác';
$string['overview'] = 'Tổng quan';
$string['participation'] = 'Hiển thị nhóm trong menu thả xuống cho các hoạt động ở chế độ nhóm';
$string['participation_help'] = 'Các thành viên nhóm có nên có thể chọn nhóm này cho các hoạt động trong chế độ nhóm riêng biệt hoặc công khai không? (Chỉ áp dụng nếu tư cách thành viên nhóm là công khai hoặc chỉ công khai cho các thành viên.)';
$string['participationshort'] = 'Tham gia';
$string['potentialmembers'] = 'Thành viên tiềm năng: {$a}';
$string['potentialmembs'] = 'Thành viên tiềm năng';
$string['printerfriendly'] = 'Hiển thị thân thiện với máy in';
$string['privacy:metadata:core_message'] = 'Các cuộc trò chuyện nhóm';
$string['privacy:metadata:groups'] = 'Bản ghi tư cách thành viên nhóm.';
$string['privacy:metadata:groups:groupid'] = 'ID của nhóm.';
$string['privacy:metadata:groups:timeadded'] = 'Dấu thời gian cho biết khi nào người dùng được thêm vào nhóm.';
$string['privacy:metadata:groups:userid'] = 'ID của người dùng liên kết với nhóm.';
$string['random'] = 'Ngẫu nhiên';
$string['removegroupfromselectedgrouping'] = 'Xóa nhóm khỏi phân nhóm';
$string['removefromgroup'] = 'Xóa người dùng khỏi nhóm {$a}';
$string['removefromgroupconfirm'] = 'Bạn có thực sự muốn xóa người dùng "{$a->user}" khỏi nhóm "{$a->group}" không?';
$string['removegroupingsmembers'] = 'Xóa tất cả các nhóm khỏi phân nhóm';
$string['removegroupsmembers'] = 'Xóa tất cả các thành viên nhóm';
$string['removeselectedusers'] = 'Xóa người dùng đã chọn';
$string['selectfromgroup'] = 'Chọn thành viên từ nhóm';
$string['selectfromgrouping'] = 'Chọn thành viên từ phân nhóm';
$string['selectfromrole'] = 'Chọn thành viên với vai trò';
$string['showgroupsingrouping'] = 'Hiển thị nhóm trong phân nhóm';
$string['showmembersforgroup'] = 'Hiển thị thành viên cho nhóm';
$string['toomanygroups'] = 'Không đủ người dùng để điền vào số lượng nhóm này - chỉ có {$a} người dùng trong vai trò đã chọn.';
$string['usercount'] = 'Số lượng người dùng';
$string['usercounttotal'] = 'Số lượng người dùng ({$a})';
$string['usergroupmembership'] = 'Tư cách thành viên của người dùng đã chọn:';
$string['visibility'] = 'Khả năng hiển thị tư cách thành viên nhóm';
$string['visibility_help'] = '* Công khai - tất cả các học viên của khóa học có thể xem ai là thành viên của nhóm
* Chỉ công khai cho các thành viên - học viên không thuộc nhóm không thể xem nhóm hoặc các thành viên của nhóm
* Chỉ xem tư cách thành viên của mình - người dùng có thể thấy họ là thành viên của nhóm nhưng không thể xem các thành viên khác của nhóm
* Ẩn - chỉ giáo viên có thể xem nhóm và các thành viên của nhóm

Người dùng có khả năng xem nhóm ẩn luôn có thể xem tư cách thành viên nhóm.

Lưu ý rằng bạn không thể thay đổi cài đặt này nếu nhóm đã có thành viên.';
$string['visibilityshort'] = 'Khả năng hiển thị';
$string['visibilityall'] = 'Công khai';
$string['visibilitymembers'] = 'Chỉ công khai cho các thành viên';
$string['visibilityown'] = 'Chỉ xem tư cách thành viên của mình';
$string['visibilitynone'] = 'Ẩn';
$string['memberofgroup'] = 'Thành viên nhóm của: {$a}';
$string['withselected'] = 'Với đã chọn';
