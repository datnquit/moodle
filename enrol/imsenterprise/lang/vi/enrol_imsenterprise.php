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
 * Strings for component 'enrol_imsenterprise', language 'en'.
 *
 * @package    enrol_imsenterprise
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['aftersaving...'] = 'Sau khi bạn đã lưu cài đặt, bạn có thể muốn';
$string['allowunenrol'] = 'Cho phép dữ liệu IMS hủy ghi danh học sinh và giáo viên';
$string['allowunenrol_desc'] = 'Nếu được bật, ghi danh khóa học sẽ bị xóa khi được chỉ định trong dữ liệu Enterprise.';
$string['basicsettings'] = 'Cài đặt cơ bản';
$string['categoryidnumber'] = 'Cho phép số ID danh mục';
$string['categoryidnumber_desc'] = 'Nếu được bật, IMS Enterprise sẽ tạo một danh mục với số ID.';
$string['categoryseparator'] = 'Ký tự phân cách danh mục';
$string['categoryseparator_desc'] = 'Yêu cầu khi \'Cho phép số ID danh mục\' được bật. Ký tự để phân cách tên danh mục và số ID.';
$string['coursesettings'] = 'Tùy chọn dữ liệu khóa học';
$string['createnewcategories'] = 'Tạo danh mục khóa học mới (ẩn) nếu không tìm thấy trong Moodle';
$string['createnewcategories_desc'] = 'Nếu phần tử &lt;org&gt;&lt;orgunit&gt; xuất hiện trong dữ liệu khóa học đến, nội dung của nó sẽ được sử dụng để chỉ định một danh mục nếu khóa học được tạo mới. Plugin sẽ KHÔNG phân loại lại các khóa học hiện có.

Nếu không có danh mục nào tồn tại với tên mong muốn, một danh mục ẩn sẽ được tạo.';
$string['createnewcourses'] = 'Tạo khóa học mới (ẩn) nếu không tìm thấy trong Moodle';
$string['createnewcourses_desc'] = 'Nếu được bật, plugin ghi danh IMS Enterprise có thể tạo khóa học mới cho bất kỳ khóa học nào được tìm thấy trong dữ liệu IMS nhưng không có trong cơ sở dữ liệu của Moodle. Bất kỳ khóa học mới nào được tạo ra đều bị ẩn ban đầu.';
$string['createnewusers'] = 'Tạo tài khoản người dùng cho những người dùng chưa được đăng ký trong Moodle';
$string['createnewusers_desc'] = 'Dữ liệu ghi danh IMS Enterprise thường mô tả một tập hợp người dùng. Nếu được bật, tài khoản có thể được tạo cho bất kỳ người dùng nào không được tìm thấy trong cơ sở dữ liệu của Moodle.

Người dùng được tìm kiếm đầu tiên bằng số ID của họ, sau đó bằng tên người dùng Moodle của họ. Mật khẩu không được nhập vào bởi plugin IMS Enterprise. Sử dụng một plugin xác thực được khuyến nghị để xác thực người dùng.';
$string['cronfrequency'] = 'Tần suất xử lý';
$string['deleteusers'] = 'Xóa tài khoản người dùng khi được chỉ định trong dữ liệu IMS';
$string['deleteusers_desc'] = 'Nếu được bật, dữ liệu ghi danh IMS Enterprise có thể chỉ định việc xóa tài khoản người dùng (nếu cờ "recstatus" được đặt thành 3, nghĩa là xóa tài khoản). Như là tiêu chuẩn trong Moodle, hồ sơ người dùng không thực sự bị xóa khỏi cơ sở dữ liệu của Moodle, nhưng một cờ được đặt để đánh dấu tài khoản là đã bị xóa.';
$string['doitnow'] = 'thực hiện nhập IMS Enterprise ngay bây giờ';
$string['emptyattribute'] = 'Để trống';
$string['filelockedmail'] = 'Tệp văn bản bạn đang sử dụng cho ghi danh dựa trên tệp IMS ({$a}) không thể bị xóa bởi quy trình cron. Điều này thường có nghĩa là quyền trên tệp không đúng. Vui lòng sửa quyền để Moodle có thể xóa tệp, nếu không nó có thể bị xử lý lặp lại.';
$string['filelockedmailsubject'] = 'Lỗi quan trọng: Tệp ghi danh';
$string['fixcasepersonalnames'] = 'Đổi tên cá nhân thành Chữ Hoa Đầu Mỗi Từ';
$string['fixcaseusernames'] = 'Đổi tên người dùng thành chữ thường';
$string['imsenterprisecrontask'] = 'Xử lý tệp ghi danh';
$string['imsenterprise:config'] = 'Cấu hình các phiên ghi danh IMS Enterprise';
$string['imsrolesdescription'] = 'Tiêu chuẩn IMS Enterprise bao gồm 8 loại vai trò khác nhau. Vui lòng chọn cách bạn muốn chúng được gán trong Moodle, bao gồm việc liệu có nên bỏ qua bất kỳ loại nào trong số chúng hay không.';
$string['location'] = 'Vị trí tệp';
$string['logtolocation'] = 'Vị trí đầu ra tệp nhật ký (để trống nếu không cần ghi nhật ký)';
$string['mailadmins'] = 'Thông báo cho quản trị viên qua email';
$string['mailusers'] = 'Thông báo cho người dùng qua email';
$string['messageprovider:imsenterprise_enrolment'] = 'Tin nhắn ghi danh IMS Enterprise';
$string['miscsettings'] = 'Khác';
$string['nestedcategories'] = 'Cho phép danh mục lồng nhau';
$string['nestedcategories_desc'] = 'Nếu được bật, IMS Enterprise sẽ tạo danh mục lồng nhau';
$string['pluginname'] = 'Tệp IMS Enterprise';
$string['pluginname_desc'] = 'Phương pháp này sẽ liên tục kiểm tra và xử lý một tệp văn bản được định dạng đặc biệt tại vị trí mà bạn chỉ định. Tệp phải tuân theo tiêu chuẩn IMS Enterprise chứa các phần tử XML về người, nhóm và thành viên.';
$string['processphoto'] = 'Thêm dữ liệu ảnh người dùng vào hồ sơ';
$string['processphotowarning'] = 'Cảnh báo: Xử lý hình ảnh có thể tạo thêm gánh nặng đáng kể cho máy chủ. Bạn được khuyến nghị không kích hoạt tùy chọn này nếu dự kiến sẽ xử lý số lượng lớn sinh viên.';
$string['restricttarget'] = 'Chỉ xử lý dữ liệu nếu mục tiêu sau đây được chỉ định';
$string['restricttarget_desc'] = 'Tệp dữ liệu IMS Enterprise có thể được dành cho nhiều "mục tiêu" - các LMS khác nhau hoặc các hệ thống khác nhau trong một trường học/đại học. Có thể chỉ định trong tệp Enterprise rằng dữ liệu được dành cho một hoặc nhiều hệ thống mục tiêu được đặt tên, bằng cách đặt tên chúng trong thẻ <target> chứa trong thẻ <properties>.

Nói chung, bạn không cần phải lo lắng về điều này. Để trống cài đặt và Moodle sẽ luôn xử lý tệp dữ liệu, bất kể có mục tiêu được chỉ định hay không. Nếu không, hãy điền vào tên chính xác sẽ được xuất bên trong thẻ <target>.';
$string['settingfullname'] = 'Thẻ mô tả IMS cho tên đầy đủ của khóa học';
$string['settingfullnamedescription'] = 'Tên đầy đủ là một trường bắt buộc của khóa học vì vậy bạn phải định nghĩa thẻ mô tả được chọn trong tệp IMS Enterprise của bạn';
$string['settingshortname'] = 'Thẻ mô tả IMS cho tên ngắn của khóa học';
$string['settingshortnamedescription'] = 'Tên ngắn là một trường bắt buộc của khóa học vì vậy bạn phải định nghĩa thẻ mô tả được chọn trong tệp IMS Enterprise của bạn';
$string['settingsummary'] = 'Thẻ mô tả IMS cho tóm tắt khóa học';
$string['settingsummarydescription'] = 'Là một trường tùy chọn, chọn \'Để trống\' nếu bạn không muốn chỉ định tóm tắt khóa học';
$string['sourcedidfallback'] = 'Sử dụng \'sourcedid\' cho userid của người dùng nếu trường \'userid\' không được tìm thấy';
$string['sourcedidfallback_desc'] = 'Trong dữ liệu IMS, trường <sourcedid> đại diện cho mã ID cố định cho một người như được sử dụng trong hệ thống nguồn. Trường <userid> là một trường riêng biệt nên chứa mã ID được sử dụng bởi người dùng khi đăng nhập. Trong nhiều trường hợp, hai mã này có thể giống nhau - nhưng không phải luôn luôn.

Một số hệ thống thông tin sinh viên không xuất trường <userid>. Nếu trường hợp này xảy ra, bạn nên bật cài đặt này để cho phép sử dụng <sourcedid> làm ID người dùng Moodle. Nếu không, để cài đặt này bị tắt.';
$string['truncatecoursecodes'] = 'Cắt ngắn mã khóa học đến độ dài này';
$string['truncatecoursecodes_desc'] = 'Trong một số tình huống, bạn có thể có mã khóa học mà bạn muốn cắt ngắn đến một độ dài xác định trước khi xử lý. Nếu vậy, hãy nhập số ký tự vào ô này. Nếu không, để trống ô và không có việc cắt ngắn nào sẽ xảy ra.';
$string['updatecourses'] = 'Cập nhật khóa học';
$string['updatecourses_desc'] = 'Nếu được bật, plugin ghi danh IMS Enterprise có thể cập nhật tên đầy đủ và tên ngắn của khóa học (nếu cờ "recstatus" được đặt thành 2, nghĩa là cập nhật).';
$string['updateusers'] = 'Cập nhật tài khoản người dùng khi được chỉ định trong dữ liệu IMS';
$string['updateusers_desc'] = 'Nếu được bật, dữ liệu ghi danh IMS Enterprise có thể chỉ định các thay đổi đối với tài khoản người dùng (nếu cờ "recstatus" được đặt thành 2, nghĩa là cập nhật).';
$string['usecapitafix'] = 'Đánh dấu vào ô này nếu sử dụng Capita (vì định dạng XML của họ hơi khác một chút)';
$string['usecapitafix_desc'] = 'Hệ thống dữ liệu sinh viên do Capita sản xuất đã được phát hiện có một lỗi nhỏ trong đầu ra XML của nó. Nếu bạn đang sử dụng Capita, bạn nên bật cài đặt này - nếu không, hãy để trống.';
$string['usersettings'] = 'Tùy chọn dữ liệu người dùng';
$string['zeroisnotruncation'] = '0 chỉ ra không có cắt ngắn';
$string['roles'] = 'Vai trò';
$string['ignore'] = 'Bỏ qua';
$string['importimsfile'] = 'Nhập tệp IMS Enterprise';
$string['privacy:metadata'] = 'Plugin ghi danh tệp IMS Enterprise không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['unenrolaction'] = 'Hành động hủy ghi danh';
$string['unenrolaction_desc'] = 'Hành động sẽ được thực hiện khi người dùng bị hủy ghi danh khỏi khóa học (chỉ áp dụng khi cài đặt hủy ghi danh trên được bật).';
$string['disableenrolonly'] = 'Chỉ tạm dừng ghi danh';
$string['disableenrolmentandremoveallroles'] = 'Tạm dừng ghi danh và xóa các vai trò';
$string['noaction'] = 'Không có hành động';
$string['removeenrolmentandallroles'] = 'Xóa ghi danh và các vai trò';
