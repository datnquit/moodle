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
 * Strings for component 'tool_uploadcourse'.
 *
 * @package    tool_uploadcourse
 * @copyright  2011 Piers Harding
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['allowdeletes'] = 'Cho phép xóa';
$string['allowdeletes_help'] = 'Có chấp nhận trường xóa hay không.';
$string['allowrenames'] = 'Cho phép đổi tên';
$string['allowrenames_help'] = 'Có chấp nhận trường đổi tên hay không.';
$string['allowresets'] = 'Cho phép đặt lại';
$string['allowresets_help'] = 'Có chấp nhận trường đặt lại hay không.';
$string['cachedef_helper'] = 'Bộ nhớ đệm trợ giúp';
$string['cannotdeletecoursenotexist'] = 'Không thể xóa khóa học không tồn tại';
$string['cannotforcelang'] = 'Không có quyền thay đổi ngôn ngữ cho khóa học này';
$string['cannotgenerateshortnameupdatemode'] = 'Không thể tạo tên ngắn khi cho phép cập nhật';
$string['cannotreadbackupfile'] = 'Không thể đọc tệp sao lưu';
$string['cannotrenamecoursenotexist'] = 'Không thể đổi tên khóa học không tồn tại';
$string['cannotrenameidnumberconflict'] = 'Không thể đổi tên khóa học, số ID xung đột với khóa học hiện có';
$string['cannotrenameshortnamealreadyinuse'] = 'Không thể đổi tên khóa học, tên ngắn đã được sử dụng';
$string['cannotupdatefrontpage'] = 'Bạn không được phép thay đổi trang chủ.';
$string['canonlyrenameinupdatemode'] = 'Chỉ có thể đổi tên khóa học khi cho phép cập nhật';
$string['canonlyresetcourseinupdatemode'] = 'Chỉ có thể đặt lại khóa học trong chế độ cập nhật';
$string['couldnotresolvecatgorybyid'] = 'Không thể giải quyết danh mục theo ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Không thể giải quyết danh mục theo số ID';
$string['couldnotresolvecatgorybypath'] = 'Không thể giải quyết danh mục theo đường dẫn';
$string['coursecreated'] = 'Khóa học đã được tạo';
$string['coursedeleted'] = 'Khóa học đã bị xóa';
$string['coursedeletionnotallowed'] = 'Không cho phép xóa khóa học';
$string['coursedoesnotexistandcreatenotallowed'] = 'Khóa học không tồn tại và không cho phép tạo khóa học';
$string['courseexistsanduploadnotallowed'] = 'Khóa học tồn tại và không cho phép cập nhật';
$string['coursefile'] = 'Tệp';
$string['coursefile_help'] = 'Tệp này phải là tệp CSV.';
$string['courseidnumberincremented'] = 'Số ID khóa học đã tăng {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Quá trình khóa học';
$string['courserenamed'] = 'Khóa học đã được đổi tên';
$string['courserenamingnotallowed'] = 'Không cho phép đổi tên khóa học';
$string['coursereset'] = 'Khóa học đã được đặt lại';
$string['courseresetnotallowed'] = 'Không cho phép đặt lại khóa học';
$string['courserestored'] = 'Khóa học đã được khôi phục';
$string['coursestotal'] = 'Tổng số khóa học: {$a}';
$string['coursescreated'] = 'Số khóa học đã tạo: {$a}';
$string['coursesupdated'] = 'Số khóa học đã cập nhật: {$a}';
$string['coursesdeleted'] = 'Số khóa học đã xóa: {$a}';
$string['courseserrors'] = 'Số lỗi khóa học: {$a}';
$string['courseshortnameincremented'] = 'Tên ngắn khóa học đã tăng {$a->from} -> {$a->to}';
$string['courseshortnamegenerated'] = 'Tên ngắn khóa học đã được tạo: {$a}';
$string['coursetemplatename'] = 'Khôi phục từ khóa học này sau khi tải lên';
$string['coursetemplatename_help'] = 'Nhập tên ngắn của khóa học hiện có để sử dụng làm mẫu cho việc tạo tất cả các khóa học.';
$string['coursetorestorefromdoesnotexist'] = 'Khóa học để khôi phục từ không tồn tại';
$string['courseupdated'] = 'Khóa học đã được cập nhật';
$string['createall'] = 'Tạo tất cả, tăng tên ngắn nếu cần';
$string['createnew'] = 'Chỉ tạo các khóa học mới, bỏ qua các khóa học hiện có';
$string['createorupdate'] = 'Tạo các khóa học mới, hoặc cập nhật các khóa học hiện có';
$string['csvdelimiter'] = 'Ký tự phân cách CSV';
$string['csvdelimiter_help'] = 'Ký tự phân cách chuỗi dữ liệu trong mỗi bản ghi.';
$string['csvfileerror'] = 'Có gì đó sai với định dạng tệp CSV. Vui lòng kiểm tra số lượng tiêu đề và cột khớp nhau, và rằng bộ mã hóa và ký tự phân cách đúng. {$a}';
$string['csvline'] = 'Dòng';
$string['defaultvalues'] = 'Giá trị mặc định của khóa học';
$string['defaultvaluescustomfieldcategory'] = 'Giá trị mặc định cho \'{$a}\'';
$string['downloadcontentnotallowed'] = 'Không cho phép cấu hình tải xuống nội dung khóa học';
$string['encoding'] = 'Mã hóa';
$string['encoding_help'] = 'Mã hóa của tệp CSV.';
$string['errorcannotcreateorupdateenrolment'] = 'Không thể tạo hoặc cập nhật phương thức ghi danh \'{$a}\'';
$string['errorcannotdeleteenrolment'] = 'Không thể xóa phương thức ghi danh \'{$a}\'';
$string['errorcannotdisableenrolment'] = 'Không thể vô hiệu hóa phương thức ghi danh \'{$a}\'';
$string['errorwhilerestoringcourse'] = 'Lỗi khi khôi phục khóa học';
$string['errorwhiledeletingcourse'] = 'Lỗi khi xóa khóa học';
$string['errorunsupportedmethod'] = 'Phương thức ghi danh \'{$a}\' không được hỗ trợ trong tải lên csv';
$string['generatedshortnameinvalid'] = 'Tên ngắn được tạo không hợp lệ';
$string['generatedshortnamealreadyinuse'] = 'Tên ngắn được tạo đã được sử dụng';
$string['id'] = 'ID';
$string['importoptions'] = 'Tùy chọn nhập';
$string['idnumberalreadyinuse'] = 'Số ID đã được sử dụng bởi một khóa học';
$string['invalidbackupfile'] = 'Tệp sao lưu không hợp lệ';
$string['invalidcourseformat'] = 'Định dạng khóa học không hợp lệ';
$string['invalidcsvfile'] = 'Tệp CSV đầu vào không hợp lệ';
$string['invaliddownloadcontent'] = 'Giá trị tải xuống nội dung khóa học không hợp lệ';
$string['invalidencoding'] = 'Mã hóa không hợp lệ';
$string['invalidmode'] = 'Chế độ đã chọn không hợp lệ';
$string['invalideupdatemode'] = 'Chế độ cập nhật đã chọn không hợp lệ';
$string['invalidvisibilitymode'] = 'Chế độ hiển thị không hợp lệ';
$string['invalidroles'] = 'Tên vai trò không hợp lệ: {$a}';
$string['invalidshortname'] = 'Tên ngắn không hợp lệ';
$string['invalidfullnametoolong'] = 'Trường tên đầy đủ giới hạn trong {$a} ký tự';
$string['invalidshortnametoolong'] = 'Trường tên ngắn giới hạn trong {$a} ký tự';
$string['missingmandatoryfields'] = 'Thiếu giá trị cho các trường bắt buộc: {$a}';
$string['missingshortnamenotemplate'] = 'Thiếu tên ngắn và không đặt mẫu tên ngắn';
$string['mode'] = 'Chế độ tải lên';
$string['mode_help'] = 'Điều này cho phép bạn chỉ định nếu có thể tạo và/hoặc cập nhật các khóa học.';
$string['nochanges'] = 'Không có thay đổi';
$string['pluginname'] = 'Tải lên khóa học';
$string['preview'] = 'Xem trước';
$string['customfieldinvalid'] = 'Trường tùy chỉnh \'{$a}\' trống hoặc chứa dữ liệu không hợp lệ';
$string['reset'] = 'Đặt lại khóa học sau khi tải lên';
$string['reset_help'] = 'Có đặt lại khóa học sau khi tạo/cập nhật hay không.';
$string['result'] = 'Kết quả';
$string['restoreafterimport'] = 'Khôi phục sau khi nhập';
$string['rowpreviewnum'] = 'Số dòng xem trước';
$string['rowpreviewnum_help'] = 'Số dòng từ tệp CSV sẽ được xem trước trên trang tiếp theo. Tùy chọn này để giới hạn kích thước của trang tiếp theo.';
$string['shortnametemplate'] = 'Mẫu để tạo tên ngắn';
$string['shortnametemplate_help'] = 'Tên ngắn của khóa học được hiển thị trong điều hướng. Bạn có thể sử dụng cú pháp mẫu ở đây (%f = tên đầy đủ, %i = số ID), hoặc nhập một giá trị ban đầu sẽ được tăng lên.';
$string['templatefile'] = 'Khôi phục từ tệp này sau khi tải lên';
$string['templatefile_help'] = 'Chọn tệp để sử dụng làm mẫu cho việc tạo tất cả các khóa học.';
$string['unknownimportmode'] = 'Chế độ nhập không xác định';
$string['updatemissing'] = 'Điền các mục thiếu từ dữ liệu CSV và giá trị mặc định';
$string['updatemode'] = 'Chế độ cập nhật';
$string['updatemode_help'] = 'Nếu bạn cho phép cập nhật khóa học, bạn cũng phải cho công cụ biết những gì sẽ cập nhật các khóa học.';
$string['updatemodedoessettonothing'] = 'Chế độ cập nhật không cho phép bất cứ điều gì được cập nhật';
$string['updateonly'] = 'Chỉ cập nhật các khóa học hiện có';
$string['updatewithdataordefaults'] = 'Cập nhật với dữ liệu CSV và giá trị mặc định';
$string['updatewithdataonly'] = 'Cập nhật chỉ với dữ liệu CSV';
$string['uploadcourses'] = 'Tải lên khóa học';
$string['uploadcourses_help'] = 'Các khóa học có thể được tải lên qua tệp văn bản. Định dạng của tệp phải như sau:

* Mỗi dòng của tệp chứa một bản ghi
* Mỗi bản ghi là một chuỗi dữ liệu được phân cách bằng ký tự phân cách đã chọn
* Bản ghi đầu tiên chứa danh sách tên trường định dạng phần còn lại của tệp
* Các tên trường bắt buộc là tên ngắn, tên đầy đủ và danh mục';
$string['uploadcoursespreview'] = 'Xem trước tải lên khóa học';
$string['uploadcoursesresult'] = 'Kết quả tải lên khóa học';
$string['privacy:metadata'] = 'Plugin tải lên khóa học không lưu trữ bất kỳ dữ liệu cá nhân nào.';
