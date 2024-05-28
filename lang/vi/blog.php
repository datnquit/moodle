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
 * Strings for core subsystem 'blog'
 *
 * @package    core_blog
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addnewentry'] = 'Thêm mục mới';
$string['addnewexternalblog'] = 'Đăng ký blog bên ngoài';
$string['assocdescription'] = 'Nếu bạn đang viết về một khóa học và/hoặc các mô-đun hoạt động, hãy chọn chúng ở đây.';
$string['associated'] = 'Liên kết {$a}';
$string['associatewithcourse'] = 'Blog về khóa học {$a->coursename}';
$string['associatewithmodule'] = 'Blog về {$a->modtype}: {$a->modname}';
$string['association'] = 'Liên kết';
$string['associations'] = 'Các liên kết';
$string['associationunviewable'] = 'Mục này không thể được xem bởi người khác cho đến khi một khóa học được liên kết với nó hoặc trường "Công bố tới" được thay đổi';
$string['author'] = 'Tác giả';
$string['autotags'] = 'Thêm các thẻ này';
$string['autotags_help'] = 'Nhập một hoặc nhiều thẻ cục bộ (ngăn cách bởi dấu phẩy) mà bạn muốn tự động thêm vào mỗi mục blog được sao chép từ blog bên ngoài vào blog cục bộ của bạn.';
$string['backupblogshelp'] = 'Nếu được bật, thì các blog sẽ được bao gồm trong các bản sao lưu tự động của TRANG WEB';
$string['blockexternalstitle'] = 'Các blog bên ngoài';
$string['blog'] = 'Blog';
$string['blogaboutthis'] = 'Blog về {$a->type} này';
$string['blogaboutthiscourse'] = 'Thêm mục về khóa học này';
$string['blogaboutthismodule'] = 'Thêm mục về {$a} này';
$string['blogadministration'] = 'Quản lý blog';
$string['blogattachment'] = 'Đính kèm blog';
$string['blogdeleteconfirm'] = 'Xóa mục blog \'{$a}\'?';
$string['blogdisable'] = 'Blogging đã bị tắt!';
$string['blogentries'] = 'Các mục blog';
$string['blogentriesabout'] = 'Các mục blog về {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Các mục blog về {$a->course} bởi {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Các mục blog về {$a->mod} bởi {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Các mục blog về {$a->course} bởi {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Các mục blog về {$a->mod} này bởi {$a->user}';
$string['blogentrybyuser'] = 'Mục blog của {$a}';
$string['blogpreferences'] = 'Tùy chọn blog';
$string['blogs'] = 'Các blog';
$string['blogscourse'] = 'Blog khóa học';
$string['blogssite'] = 'Blog trang web';
$string['blogtags'] = 'Thẻ blog';
$string['cannotviewcourseblog'] = 'Bạn không có quyền cần thiết để xem các blog trong khóa học này';
$string['cannotviewcourseorgroupblog'] = 'Bạn không có quyền cần thiết để xem các blog trong khóa học/nhóm này';
$string['cannotviewsiteblog'] = 'Bạn không có quyền cần thiết để xem tất cả các blog của trang web';
$string['cannotviewuserblog'] = 'Bạn không có quyền cần thiết để đọc các blog của người dùng';
$string['configexternalblogcrontime'] = 'Tần suất Moodle kiểm tra các blog bên ngoài để lấy các mục mới.';
$string['configmaxexternalblogsperuser'] = 'Số lượng blog bên ngoài mà mỗi người dùng được phép liên kết với blog Moodle của họ.';
$string['configuseblogassociations'] = 'Cho phép liên kết các mục blog với các khóa học và mô-đun khóa học.';
$string['configuseexternalblogs'] = 'Cho phép người dùng chỉ định các nguồn cấp dữ liệu blog bên ngoài. Moodle thường xuyên kiểm tra các nguồn cấp dữ liệu blog này và sao chép các mục mới vào blog cục bộ của người dùng đó.';
$string['courseblog'] = 'Blog khóa học: {$a}';
$string['courseblogdisable'] = 'Blog khóa học chưa được bật';
$string['courseblogs'] = 'Người dùng chỉ có thể xem các blog của những người cùng khóa học';
$string['deleteblogassociations'] = 'Xóa các liên kết blog';
$string['deleteblogassociations_help'] = 'Nếu được chọn, các mục blog sẽ không còn được liên kết với khóa học này hoặc bất kỳ hoạt động hoặc tài nguyên nào của khóa học. Các mục blog sẽ không bị xóa.';
$string['deleteentry'] = 'Xóa mục';
$string['deleteexternalblog'] = 'Hủy đăng ký blog bên ngoài này';
$string['deleteotagswarn'] = 'Bạn có chắc chắn muốn xóa các thẻ này khỏi tất cả các bài đăng blog và xóa chúng khỏi hệ thống?';
$string['description'] = 'Mô tả';
$string['description_help'] = 'Nhập một hoặc hai câu tóm tắt nội dung của blog bên ngoài của bạn. (Nếu không cung cấp mô tả, mô tả được ghi lại trong blog bên ngoài của bạn sẽ được sử dụng).';
$string['donothaveblog'] = 'Bạn không có blog riêng của mình, xin lỗi.';
$string['editentry'] = 'Chỉnh sửa mục blog';
$string['editexternalblog'] = 'Chỉnh sửa blog bên ngoài này';
$string['emptybody'] = 'Nội dung mục blog không thể để trống';
$string['emptyrssfeed'] = 'URL bạn đã nhập không trỏ đến một nguồn cấp dữ liệu RSS hợp lệ';
$string['emptytitle'] = 'Tiêu đề mục blog không thể để trống';
$string['emptyurl'] = 'Bạn phải chỉ định một URL đến một nguồn cấp dữ liệu RSS hợp lệ';
$string['entrybody'] = 'Nội dung mục blog';
$string['entrybodyonlydesc'] = 'Mô tả mục';
$string['entryerrornotyours'] = 'Mục này không phải của bạn';
$string['entrysaved'] = 'Mục của bạn đã được lưu';
$string['entrytitle'] = 'Tiêu đề mục';
$string['eventblogentriesviewed'] = 'Các mục blog đã xem';
$string['eventblogassociationadded'] = 'Liên kết blog đã được tạo';
$string['eventblogassociationdeleted'] = 'Liên kết blog đã bị xóa';
$string['eventblogexternaladded'] = 'Blog bên ngoài đã được đăng ký';
$string['eventblogexternalremoved'] = 'Blog bên ngoài đã bị hủy đăng ký';
$string['eventblogexternalupdated'] = 'Blog bên ngoài đã được cập nhật';
$string['evententryadded'] = 'Mục blog đã được thêm';
$string['evententrydeleted'] = 'Mục blog đã bị xóa';
$string['evententryupdated'] = 'Mục blog đã được cập nhật';
$string['externalblogcrontime'] = 'Lịch trình cron blog bên ngoài';
$string['externalblogdeleteconfirm'] = 'Hủy đăng ký blog bên ngoài này?';
$string['externalblogdeleted'] = 'Blog bên ngoài đã bị hủy đăng ký';
$string['externalblogs'] = 'Các blog bên ngoài';
$string['eventexternalblogsviewed'] = 'Các blog bên ngoài đã đăng ký đã xem';
$string['feedisinvalid'] = 'Nguồn cấp dữ liệu này không hợp lệ';
$string['feedisvalid'] = 'Nguồn cấp dữ liệu này hợp lệ';
$string['filterblogsby'] = 'Lọc các mục theo...';
$string['filtertags'] = 'Lọc thẻ';
$string['filtertags_help'] = 'Bạn có thể sử dụng tính năng này để lọc các mục bạn muốn sử dụng. Nếu bạn chỉ định các thẻ ở đây (ngăn cách bởi dấu phẩy), chỉ các mục có các thẻ này sẽ được sao chép từ blog bên ngoài.';
$string['groupblog'] = 'Blog nhóm: {$a}';
$string['groupblogdisable'] = 'Blog nhóm chưa được bật';
$string['groupblogentries'] = 'Các mục blog liên kết với {$a->coursename} bởi nhóm {$a->groupname}';
$string['groupblogs'] = 'Người dùng chỉ có thể xem các blog của những người cùng nhóm';
$string['incorrectblogfilter'] = 'Loại bộ lọc blog không hợp lệ được chỉ định';
$string['intro'] = 'Nguồn cấp dữ liệu RSS này được tự động tạo từ một hoặc nhiều blog.';
$string['invalidgroupid'] = 'ID nhóm không hợp lệ';
$string['invalidurl'] = 'URL này không thể truy cập được';
$string['linktooriginalentry'] = 'Liên kết tới mục blog gốc';
$string['maxexternalblogsperuser'] = 'Số lượng tối đa blog bên ngoài mỗi người dùng';
$string['myprofileuserblogs'] = 'Xem tất cả các mục blog';
$string['name'] = 'Tên';
$string['name_help'] = 'Nhập một tên mô tả cho blog bên ngoài của bạn. (Nếu không cung cấp tên, tiêu đề của blog bên ngoài của bạn sẽ được sử dụng).';
$string['noentriesyet'] = 'Chưa có mục nào có thể xem';
$string['noguestpost'] = 'Khách không thể đăng blog!';
$string['nopermissionstodeleteentry'] = 'Bạn không có quyền cần thiết để xóa mục blog này';
$string['norighttodeletetag'] = 'Bạn không có quyền xóa thẻ này - {$a}';
$string['nosuchentry'] = 'Không có mục blog nào như vậy';
$string['notallowedtoedit'] = 'Bạn không được phép chỉnh sửa mục này';
$string['numberofentries'] = 'Số mục: {$a}';
$string['numberoftags'] = 'Số lượng thẻ để hiển thị';
$string['pagesize'] = 'Số lượng mục blog trên mỗi trang';
$string['permalink'] = 'Liên kết cố định';
$string['personalblogs'] = 'Người dùng chỉ có thể xem blog của chính họ';
$string['preferences'] = 'Tùy chọn blog';
$string['privacy:metadata:core_comments'] = 'Các bình luận liên quan đến các mục blog';
$string['privacy:metadata:core_files'] = 'Các tệp đính kèm vào các mục blog';
$string['privacy:metadata:core_tag'] = 'Các thẻ liên quan đến các mục blog';
$string['privacy:metadata:external'] = 'Liên kết đến nguồn cấp dữ liệu RSS bên ngoài';
$string['privacy:metadata:external:userid'] = 'ID của người dùng đã thêm mục blog bên ngoài';
$string['privacy:metadata:external:name'] = 'Tên của nguồn cấp dữ liệu';
$string['privacy:metadata:external:description'] = 'Mô tả của nguồn cấp dữ liệu';
$string['privacy:metadata:external:url'] = 'URL của nguồn cấp dữ liệu';
$string['privacy:metadata:external:filtertags'] = 'Danh sách các thẻ để lọc các mục';
$string['privacy:metadata:external:timemodified'] = 'Thời gian khi liên kết được chỉnh sửa lần cuối';
$string['privacy:metadata:external:timefetched'] = 'Thời gian khi nguồn cấp dữ liệu được lấy lần cuối';
$string['privacy:metadata:post'] = 'Thông tin liên quan đến các mục blog';
$string['privacy:metadata:post:userid'] = 'ID của người dùng đã thêm mục blog';
$string['privacy:metadata:post:subject'] = 'Tiêu đề mục blog';
$string['privacy:metadata:post:summary'] = 'Nội dung mục blog';
$string['privacy:metadata:post:content'] = 'Nội dung của mục blog bên ngoài';
$string['privacy:metadata:post:uniquehash'] = 'Một định danh duy nhất cho một mục bên ngoài, thường là một URL';
$string['privacy:metadata:post:publishstate'] = 'Trạng thái xuất bản của mục';
$string['privacy:metadata:post:created'] = 'Ngày mục blog được tạo';
$string['privacy:metadata:post:lastmodified'] = 'Ngày mục blog được chỉnh sửa lần cuối';
$string['privacy:metadata:post:usermodified'] = 'Người dùng đã chỉnh sửa mục lần cuối';
$string['privacy:path:blogassociations'] = 'Các bài đăng blog liên kết';
$string['privacy:unknown'] = 'Không xác định';
$string['published'] = 'Đã xuất bản';
$string['publishto'] = 'Xuất bản tới';
$string['publishto_help'] = 'Có 3 tùy chọn:

* Bản thân bạn (bản nháp) - Chỉ bạn và quản trị viên có thể xem mục này
* Bất kỳ ai trên trang này - Bất kỳ ai đăng ký trên trang này đều có thể đọc mục này
* Bất kỳ ai trên thế giới - Bất kỳ ai, kể cả khách, đều có thể đọc mục này';
$string['publishtocourse'] = 'Người dùng chia sẻ một khóa học với bạn';
$string['publishtocourseassoc'] = 'Thành viên của khóa học liên kết';
$string['publishtocourseassocparam'] = 'Thành viên của {$a}';
$string['publishtodraft'] = 'Bản nháp';
$string['publishtogroup'] = 'Người dùng chia sẻ một nhóm với bạn';
$string['publishtogroupassoc'] = 'Thành viên nhóm của bạn trong khóa học liên kết';
$string['publishtogroupassocparam'] = 'Thành viên nhóm của bạn trong {$a}';
$string['publishtonoone'] = 'Bản thân bạn (bản nháp)';
$string['publishtosite'] = 'Bất kỳ ai trên trang này';
$string['publishtoworld'] = 'Bất kỳ ai trên thế giới';
$string['readfirst'] = 'Đọc điều này trước';
$string['relatedblogentries'] = 'Các mục blog liên quan';
$string['retrievedfrom'] = 'Được lấy từ';
$string['rssfeed'] = 'Nguồn cấp dữ liệu RSS của blog';
$string['searchterm'] = 'Tìm kiếm: {$a}';
$string['settingsupdatederror'] = 'Đã xảy ra lỗi, cài đặt tùy chọn blog không thể được cập nhật';
$string['siteblogheading'] = 'Blog trang web';
$string['siteblogdisable'] = 'Blog trang web chưa được bật';
$string['siteblogs'] = 'Tất cả người dùng trên trang web có thể xem tất cả các mục blog';
$string['tagdatelastused'] = 'Ngày thẻ được sử dụng lần cuối';
$string['tagparam'] = 'Thẻ: {$a}';
$string['tags'] = 'Thẻ';
$string['tagsort'] = 'Sắp xếp hiển thị thẻ theo';
$string['tagtext'] = 'Văn bản thẻ';
$string['timefetched'] = 'Thời gian lấy lần cuối';
$string['timewithin'] = 'Hiển thị các thẻ được sử dụng trong số ngày này';
$string['updateentrywithid'] = 'Cập nhật mục';
$string['url'] = 'URL nguồn cấp dữ liệu RSS';
$string['url_help'] = 'Nhập URL nguồn cấp dữ liệu RSS cho blog bên ngoài của bạn.';
$string['useblogassociations'] = 'Bật liên kết blog';
$string['useexternalblogs'] = 'Bật blog bên ngoài';
$string['userblog'] = 'Blog của người dùng: {$a}';
$string['userblogentries'] = 'Các mục blog của {$a}';
$string['valid'] = 'Hợp lệ';
$string['viewallblogentries'] = 'Tất cả các mục về {$a} này';
$string['viewallmodentries'] = 'Xem tất cả các mục về {$a->type} này';
$string['viewallmyentries'] = 'Xem tất cả các mục của tôi';
$string['viewentriesbyuseraboutcourse'] = 'Xem các mục về khóa học này của {$a}';
$string['viewblogentries'] = 'Các mục về {$a->type} này';
$string['viewblogsfor'] = 'Xem tất cả các mục cho...';
$string['viewcourseblogs'] = 'Xem tất cả các mục cho khóa học này';
$string['viewgroupblogs'] = 'Xem các mục cho nhóm...';
$string['viewgroupentries'] = 'Các mục nhóm';
$string['viewmodblogs'] = 'Xem các mục cho mô-đun...';
$string['viewmodentries'] = 'Các mục mô-đun';
$string['viewmyentries'] = 'Các mục của tôi';
$string['viewmyentriesaboutmodule'] = 'Xem các mục của tôi về {$a} này';
$string['viewmyentriesaboutcourse'] = 'Xem các mục của tôi về khóa học này';
$string['viewsiteentries'] = 'Xem tất cả các mục';
$string['viewuserentries'] = 'Xem tất cả các mục của {$a}';
$string['worldblogs'] = 'Thế giới có thể đọc các mục được đặt là có thể truy cập trên toàn thế giới';
$string['wrongexternalid'] = 'ID blog bên ngoài không đúng';
$string['wrongpostid'] = 'ID bài đăng blog không đúng';
$string['page-blog-edit'] = 'Trang chỉnh sửa blog';
$string['page-blog-index'] = 'Trang danh sách blog';
$string['page-blog-x'] = 'Tất cả các trang blog';

