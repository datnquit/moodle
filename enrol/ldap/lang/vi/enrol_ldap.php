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
 * Strings for component 'enrol_ldap', language 'en'.
 *
 * @package    enrol_ldap
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @copyright  2010 Iñaki Arenaza <iarenaza@eps.mondragon.edu>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['assignrole'] = "Gán vai trò '{\$a->role_shortname}' cho người dùng '{\$a->user_username}' vào khóa học '{\$a->course_shortname}' (id {\$a->course_id})";
$string['assignrolefailed'] = "Không thể gán vai trò '{\$a->role_shortname}' cho người dùng '{\$a->user_username}' vào khóa học '{\$a->course_shortname}' (id {\$a->course_id})\n";
$string['autocreate'] = '<p>Các khóa học có thể được tạo tự động nếu có ghi danh vào một khóa học chưa tồn tại trong Moodle</p><p>Nếu bạn đang sử dụng tính năng tạo khóa học tự động, nên xóa các khả năng sau: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname và moodle/course:changesummary, từ các vai trò liên quan để ngăn chặn việc sửa đổi bốn trường khóa học đã chỉ định ở trên (số ID, tên ngắn, tên đầy đủ và tóm tắt).</p>';
$string['autocreate_key'] = 'Tạo tự động';
$string['autocreation_settings'] = 'Cài đặt tạo khóa học tự động';
$string['autoupdate_settings'] = 'Cài đặt cập nhật khóa học tự động';
$string['autoupdate_settings_desc'] = '<p>Chọn các trường để cập nhật khi tác vụ "Đồng bộ hóa ghi danh LDAP" được chạy.</p><p>Khi ít nhất một trường được chọn, cập nhật sẽ diễn ra.</p>';
$string['bind_dn'] = 'Nếu bạn muốn sử dụng một người dùng để tìm kiếm người dùng khác, hãy chỉ định nó ở đây. Ví dụ: \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'Tên phân biệt của người dùng liên kết';
$string['bind_pw'] = 'Mật khẩu cho người dùng liên kết';
$string['bind_pw_key'] = 'Mật khẩu';
$string['bind_settings'] = 'Cài đặt liên kết';
$string['cannotcreatecourse'] = 'Không thể tạo khóa học: thiếu dữ liệu cần thiết từ bản ghi LDAP!';
$string['cannotupdatecourse'] = "Không thể cập nhật khóa học: thiếu dữ liệu cần thiết từ bản ghi LDAP! Số ID khóa học: '{\$a->idnumber}'";
$string['cannotupdatecourse_duplicateshortname'] = "Không thể cập nhật khóa học: Trùng tên ngắn. Bỏ qua khóa học có số ID '{\$a->idnumber}'...";
$string['courseupdated'] = "Khóa học với số ID '{\$a->idnumber}' đã được cập nhật thành công.";
$string['courseupdateskipped'] = "Khóa học với số ID '{\$a->idnumber}' không cần cập nhật. Bỏ qua...";
$string['category'] = 'Danh mục cho các khóa học được tạo tự động';
$string['category_key'] = 'Danh mục';
$string['contexts'] = 'Ngữ cảnh LDAP';
$string['couldnotfinduser'] = "Không thể tìm thấy người dùng '{\$a}', bỏ qua\n";
$string['coursenotexistskip'] = "Khóa học '{\$a}' không tồn tại và tính năng tạo tự động bị tắt, bỏ qua\n";
$string['course_fullname'] = 'Tùy chọn: Thuộc tính LDAP để lấy tên đầy đủ';
$string['course_fullname_key'] = 'Tên đầy đủ';
$string['course_fullname_updateonsync'] = 'Cập nhật tên đầy đủ trong quá trình đồng bộ hóa';
$string['course_fullname_updateonsync_key'] = 'Cập nhật tên đầy đủ';
$string['course_idnumber'] = 'Thuộc tính LDAP để lấy số ID khóa học. Thường là \'cn\' hoặc \'uid\'.';
$string['course_idnumber_key'] = 'Số ID';
$string['course_search_sub'] = 'Tìm kiếm thành viên nhóm từ các ngữ cảnh con';
$string['course_search_sub_key'] = 'Tìm kiếm ngữ cảnh con';
$string['course_settings'] = 'Cài đặt ghi danh khóa học';
$string['course_shortname'] = 'Tùy chọn: Thuộc tính LDAP để lấy tên ngắn';
$string['course_shortname_key'] = 'Tên ngắn';
$string['course_shortname_updateonsync'] = 'Cập nhật tên ngắn trong quá trình đồng bộ hóa';
$string['course_shortname_updateonsync_key'] = 'Cập nhật tên ngắn';
$string['course_summary'] = 'Tùy chọn: Thuộc tính LDAP để lấy tóm tắt';
$string['course_summary_key'] = 'Tóm tắt';
$string['course_summary_updateonsync'] = 'Cập nhật tóm tắt trong quá trình đồng bộ hóa';
$string['course_summary_updateonsync_key'] = 'Cập nhật tóm tắt';
$string['createcourseextid'] = 'TẠO Người dùng được ghi danh vào khóa học không tồn tại \'{$a->courseextid}\'';
$string['createnotcourseextid'] = 'Người dùng được ghi danh vào khóa học không tồn tại \'{$a->courseextid}\'';
$string['creatingcourse'] = 'Đang tạo khóa học \'{$a}\'...';
$string['duplicateshortname'] = "Tạo khóa học thất bại. Trùng tên ngắn. Bỏ qua khóa học có số ID '{\$a->idnumber}'...";
$string['editlock'] = 'Khóa giá trị';
$string['emptyenrolment'] = "Ghi danh trống cho vai trò '{\$a->role_shortname}' trong khóa học '{\$a->course_shortname}'\n";
$string['enrolname'] = 'LDAP';
$string['enroluser'] = "Ghi danh người dùng '{\$a->user_username}' vào khóa học '{\$a->course_shortname}' (id {\$a->course_id})";
$string['enroluserenable'] = "Kích hoạt ghi danh cho người dùng '{\$a->user_username}' trong khóa học '{\$a->course_shortname}' (id {\$a->course_id})";
$string['explodegroupusertypenotsupported'] = "ldap_explode_group() không hỗ trợ loại người dùng đã chọn: {\$a}\n";
$string['extcourseidinvalid'] = 'ID khóa học bên ngoài không hợp lệ!';
$string['extremovedsuspend'] = "Đã vô hiệu hóa ghi danh cho người dùng '{\$a->user_username}' trong khóa học '{\$a->course_shortname}' (id {\$a->course_id})";
$string['extremovedsuspendnoroles'] = "Đã vô hiệu hóa ghi danh và xóa vai trò cho người dùng '{\$a->user_username}' trong khóa học '{\$a->course_shortname}' (id {\$a->course_id})";
$string['extremovedunenrol'] = "Hủy ghi danh người dùng '{\$a->user_username}' khỏi khóa học '{\$a->course_shortname}' (id {\$a->course_id})";
$string['failed'] = "Thất bại!\n";
$string['general_options'] = 'Tùy chọn chung';
$string['group_memberofattribute'] = 'Tên của thuộc tính chỉ ra nhóm mà người dùng hoặc nhóm cụ thể thuộc về (ví dụ: memberOf, groupMembership, v.v.)';
$string['group_memberofattribute_key'] = 'Thuộc tính "Thành viên của"';
$string['host_url'] = 'Chỉ định máy chủ LDAP dưới dạng URL như \'ldap://ldap.myorg.com/\' hoặc \'ldaps://ldap.myorg.com/\'';
$string['host_url_key'] = 'URL máy chủ';
$string['idnumber_attribute'] = 'Nếu thành viên nhóm chứa các tên phân biệt, hãy chỉ định thuộc tính tương tự bạn đã sử dụng cho ánh xạ "Số ID" người dùng trong cài đặt xác thực LDAP.';
$string['idnumber_attribute_key'] = 'Thuộc tính số ID';
$string['ldap_encoding'] = 'Chỉ định mã hóa được sử dụng bởi máy chủ LDAP. Rất có thể là utf-8, MS AD v2 sử dụng mã hóa nền tảng mặc định như cp1252, cp1250, v.v.';
$string['ldap_encoding_key'] = 'Mã hóa LDAP';
$string['ldap:manage'] = 'Quản lý các trường hợp ghi danh LDAP';
$string['memberattribute'] = 'Thuộc tính thành viên LDAP';
$string['memberattribute_isdn'] = 'Nếu thành viên nhóm chứa các tên phân biệt, bạn cần chỉ định chúng ở đây. Nếu vậy, bạn cũng cần cấu hình các cài đặt còn lại trong phần này.';
$string['memberattribute_isdn_key'] = 'Thuộc tính thành viên sử dụng dn';
$string['nested_groups'] = 'Bạn có muốn sử dụng các nhóm lồng nhau (nhóm của nhóm) để ghi danh không?';
$string['nested_groups_key'] = 'Nhóm lồng nhau';
$string['nested_groups_settings'] = 'Cài đặt nhóm lồng nhau';
$string['nosuchrole'] = "Không có vai trò như vậy: '{\$a}'\n";
$string['objectclass'] = 'objectClass được sử dụng để tìm kiếm khóa học. Thường là \'group\' hoặc \'posixGroup\'';
$string['objectclass_key'] = 'Lớp đối tượng';
$string['ok'] = "OK!\n";
$string['opt_deref'] = 'Nếu thành viên nhóm chứa các tên phân biệt, hãy chỉ định cách xử lý bí danh trong quá trình tìm kiếm. Chọn một trong các giá trị sau: \'Không\' (LDAP_DEREF_NEVER) hoặc \'Có\' (LDAP_DEREF_ALWAYS).';
$string['opt_deref_key'] = 'Hủy tham chiếu bí danh';
$string['phpldap_noextension'] = 'Module PHP LDAP dường như không có. Vui lòng đảm bảo nó đã được cài đặt và kích hoạt nếu bạn muốn sử dụng plugin ghi danh này.';
$string['pluginname'] = 'Ghi danh LDAP';
$string['pluginname_desc'] = '<p>Bạn có thể sử dụng máy chủ LDAP để kiểm soát các ghi danh của mình. Giả định rằng cây LDAP của bạn chứa các nhóm mà ánh xạ tới các khóa học, và mỗi nhóm/khóa học sẽ có các mục thành viên để ánh xạ tới sinh viên.</p><p>Giả định rằng các khóa học được định nghĩa là các nhóm trong LDAP, với mỗi nhóm có nhiều trường thành viên (<em>member</em> hoặc <em>memberUid</em>) chứa một nhận dạng duy nhất của người dùng.</p><p>Để sử dụng ghi danh LDAP, người dùng của bạn <strong>phải</strong> có một trường số ID hợp lệ. Các nhóm LDAP phải có số ID đó trong các trường thành viên để người dùng được ghi danh vào khóa học. Điều này thường hoạt động tốt nếu bạn đã sử dụng Xác thực LDAP.</p><p>Các ghi danh sẽ được cập nhật khi người dùng đăng nhập. Bạn cũng có thể chạy một script để giữ các ghi danh đồng bộ. Hãy xem <em>enrol/ldap/cli/sync.php</em>.</p><p>Plugin này cũng có thể được cài đặt để tự động tạo các khóa học mới khi các nhóm mới xuất hiện trong LDAP.</p>';
$string['pluginnotenabled'] = 'Plugin chưa được kích hoạt!';
$string['role_mapping'] = '<p>Đối với mỗi vai trò, bạn cần chỉ định tất cả các ngữ cảnh LDAP nơi các nhóm đại diện cho các khóa học được đặt. Tách các ngữ cảnh khác nhau bằng dấu chấm phẩy (;).</p><p>Bạn cũng cần chỉ định thuộc tính mà máy chủ LDAP của bạn sử dụng để giữ các thành viên của một nhóm. Thường là \'member\' hoặc \'memberUid\'.</p>';
$string['role_mapping_attribute'] = 'Thuộc tính thành viên LDAP cho {$a}';
$string['role_mapping_context'] = 'Ngữ cảnh LDAP cho {$a}';
$string['role_mapping_key'] = 'Ánh xạ vai trò từ LDAP';
$string['roles'] = 'Ánh xạ vai trò';
$string['server_settings'] = 'Cài đặt máy chủ LDAP';
$string['syncenrolmentstask'] = 'Tác vụ đồng bộ hóa ghi danh LDAP';
$string['synccourserole'] = "== Đồng bộ hóa khóa học '{\$a->idnumber}' cho vai trò '{\$a->role_shortname}'\n";
$string['template'] = 'Tùy chọn: các khóa học tự động tạo có thể sao chép cài đặt từ một khóa học mẫu';
$string['template_key'] = 'Mẫu';
$string['unassignrole'] = "Hủy gán vai trò '{\$a->role_shortname}' cho người dùng '{\$a->user_username}' khỏi khóa học '{\$a->course_shortname}' (id {\$a->course_id})\n";
$string['unassignroleid'] = "Hủy gán vai trò id '{\$a->role_id}' cho người dùng id '{\$a->user_id}'\n";
$string['unassignrolefailed'] = "Không thể hủy gán vai trò '{\$a->role_shortname}' cho người dùng '{\$a->user_username}' khỏi khóa học '{\$a->course_shortname}' (id {\$a->course_id})\n";
$string['updatelocal'] = 'Cập nhật dữ liệu cục bộ';
$string['user_attribute'] = 'Nếu thành viên nhóm chứa các tên phân biệt, hãy chỉ định thuộc tính được sử dụng để đặt tên/tìm kiếm người dùng. Nếu bạn đang sử dụng Xác thực LDAP, giá trị này nên khớp với thuộc tính được chỉ định trong ánh xạ "Số ID" trong plugin xác thực LDAP.';
$string['user_attribute_key'] = 'Thuộc tính số ID';
$string['user_contexts'] = 'Nếu thành viên nhóm chứa các tên phân biệt, hãy chỉ định danh sách các ngữ cảnh nơi người dùng được đặt. Tách các ngữ cảnh khác nhau bằng dấu chấm phẩy (;). Ví dụ: \'ou=users,o=org; ou=others,o=org\'.';
$string['user_contexts_key'] = 'Ngữ cảnh';
$string['user_search_sub'] = 'Nếu thành viên nhóm chứa các tên phân biệt, hãy chỉ định nếu tìm kiếm người dùng được thực hiện trong các ngữ cảnh con.';
$string['user_search_sub_key'] = 'Tìm kiếm ngữ cảnh con';
$string['user_settings'] = 'Cài đặt tra cứu người dùng';
$string['user_type'] = 'Nếu thành viên nhóm chứa các tên phân biệt, hãy chỉ định cách người dùng được lưu trữ trong LDAP';
$string['user_type_key'] = 'Loại người dùng';
$string['version'] = 'Phiên bản giao thức LDAP mà máy chủ của bạn đang sử dụng';
$string['version_key'] = 'Phiên bản';
$string['privacy:metadata'] = 'Plugin ghi danh LDAP không lưu trữ bất kỳ dữ liệu cá nhân nào.';
