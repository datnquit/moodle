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
 * Defines names of plugin types and some strings used at the plugin managment
 *
 * @package    core
 * @subpackage plugin
 * @copyright  2011 David Mudrak <david@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['actions'] = 'Hành động';
$string['availability'] = 'Sẵn có';
$string['cancelinstallall'] = 'Hủy cài đặt mới ({$a})';
$string['cancelinstallone'] = 'Hủy cài đặt này';
$string['cancelinstallhead'] = 'Hủy cài đặt các plugin';
$string['cancelinstallinfo'] = 'Các plugin sau chưa được cài đặt hoàn toàn nên có thể hủy cài đặt của chúng. Để làm điều này, thư mục plugin phải được xóa khỏi máy chủ ngay bây giờ. Đảm bảo rằng điều này là thực sự bạn muốn để tránh mất dữ liệu không mong muốn (như các sửa đổi mã của riêng bạn).';
$string['cancelinstallinfodir'] = 'Thư mục sẽ bị xóa: {$a}';
$string['cancelupgradeall'] = 'Hủy nâng cấp ({$a})';
$string['cancelupgradehead'] = 'Khôi phục phiên bản trước của các plugin';
$string['cancelupgradeone'] = 'Hủy nâng cấp này';
$string['checkforupdates'] = 'Kiểm tra cập nhật có sẵn';
$string['checkforupdateslast'] = 'Kiểm tra cuối cùng vào {$a}';
$string['detectedmisplacedplugin'] = 'Plugin "{$a->component}" được cài đặt ở vị trí không đúng "{$a->current}", vị trí mong đợi là "{$a->expected}"';
$string['dependencyavailable'] = 'Có sẵn';
$string['dependencyfails'] = 'Thất bại';
$string['dependencyinstall'] = 'Cài đặt';
$string['dependencyinstallhead'] = 'Cài đặt các phụ thuộc còn thiếu';
$string['dependencyinstallmissing'] = 'Cài đặt các phụ thuộc còn thiếu ({$a})';
$string['dependencymissing'] = 'Thiếu';
$string['dependencyunavailable'] = 'Không có sẵn';
$string['dependencyupload'] = 'Tải lên';
$string['dependencyuploadmissing'] = 'Tải lên các tệp ZIP';
$string['displayname'] = 'Tên plugin';
$string['err_response_curl'] = 'Không thể lấy dữ liệu cập nhật có sẵn - lỗi cURL không mong muốn.';
$string['err_response_format_version'] = 'Phiên bản định dạng phản hồi không mong đợi. Vui lòng thử kiểm tra lại để có cập nhật có sẵn.';
$string['err_response_http_code'] = 'Không thể lấy dữ liệu cập nhật có sẵn - mã phản hồi HTTP không mong muốn.';
$string['filterall'] = 'Hiển thị tất cả';
$string['filtercontribonly'] = 'Chỉ hiển thị các plugin bổ sung';
$string['filterupdatesonly'] = 'Chỉ hiển thị các plugin có thể cập nhật';
$string['incompatibleversion'] = 'Phiên bản Moodle không tương thích: {$a}';
$string['isenabled'] = 'Đã kích hoạt?';
$string['misdepinfoplugin'] = 'Thông tin plugin';
$string['misdepinfoversion'] = 'Thông tin phiên bản';
$string['misdepsavail'] = 'Các phụ thuộc còn thiếu có sẵn';
$string['misdepsunavail'] = 'Các phụ thuộc còn thiếu không có sẵn';
$string['misdepsunavaillist'] = 'Không tìm thấy phiên bản để đáp ứng yêu cầu phụ thuộc: {$a}.';
$string['misdepsunknownlist'] = 'Không ở trong thư mục Plugin: <strong>{$a}</strong>.';
$string['moodlebranch'] = 'Moodle {$a->min} - {$a->max}';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Không có plugin loại này được cài đặt';
$string['notes'] = 'Ghi chú';
$string['notdownloadable'] = 'Không thể tải xuống gói';
$string['notdownloadable_help'] = 'Gói ZIP với cập nhật không thể tự động tải xuống.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notsupported'] = 'Plugin có thể không tương thích với phiên bản Moodle {$a}';
$string['notwritable'] = 'Tệp plugin không thể ghi';
$string['notwritable_help'] = 'Các tệp plugin không thể ghi bởi máy chủ web. Quá trình máy chủ web phải có quyền ghi vào thư mục plugin và tất cả các nội dung của nó. Có thể cần quyền ghi vào thư mục gốc của loại plugin cụ thể.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Tất cả các plugin';
$string['overviewext'] = 'Các plugin bổ sung';
$string['overviewupdatable'] = 'Các cập nhật có sẵn';
$string['packagesdebug'] = 'Đã bật đầu ra gỡ lỗi';
$string['packagesdownloading'] = 'Đang tải xuống {$a}';
$string['packagesextracting'] = 'Đang giải nén {$a}';
$string['packagesvalidating'] = 'Đang xác nhận tính hợp lệ của {$a}';
$string['packagesvalidatingfailed'] = 'Cài đặt bị hủy vì xác nhận không thành công';
$string['packagesvalidatingok'] = 'Xác nhận thành công, quá trình cài đặt có thể tiếp tục';
$string['plugincheckall'] = 'Tất cả các plugin';
$string['plugincheckattention'] = 'Các plugin đòi hỏi sự chú ý';
$string['pluginchecknone'] = 'Không có plugin đòi hỏi sự chú ý của bạn vào lúc này';
$string['pluginchecknotice'] = 'Trang này hiển thị các plugin có thể đòi hỏi sự chú ý của bạn trong quá trình nâng cấp, chẳng hạn như các plugin mới để cài đặt, các plugin cần nâng cấp, các plugin bị thiếu v.v. Các plugin bổ sung được hiển thị nếu có cập nhật có sẵn cho chúng. Đề xuất kiểm tra xem có phiên bản mới của các plugin và cập nhật mã nguồn của chúng trước khi tiếp tục nâng cấp Moodle.';
$string['plugindisable'] = 'Vô hiệu hóa';
$string['plugindisabled'] = 'Đã vô hiệu hóa';
$string['pluginenable'] = 'Kích hoạt';
$string['pluginenabled'] = 'Đã kích hoạt';
$string['release'] = 'Phiên bản';
$string['requiredby'] = 'Yêu cầu bởi: {$a}';
$string['requires'] = 'Yêu cầu';
$string['rootdir'] = 'Thư mục';
$string['settings'] = 'Cài đặt';
$string['source'] = 'Nguồn';
$string['sourceext'] = 'Bổ sung';
$string['sourcestd'] = 'Tiêu chuẩn';
$string['status'] = 'Trạng thái';
$string['status_delete'] = 'Sẽ bị xóa';
$string['status_downgrade'] = 'Phiên bản cao hơn đã được cài đặt!';
$string['status_missing'] = 'Thiếu trên ổ đĩa!';
$string['status_new'] = 'Sẽ được cài đặt';
$string['status_nodb'] = 'Không có cơ sở dữ liệu';
$string['status_upgrade'] = 'Sẽ được nâng cấp';
$string['status_uptodate'] = 'Đã được cài đặt';
$string['supportedmoodleversions'] = 'Các phiên bản Moodle được hỗ trợ';
$string['supportedconversions'] = 'Các định dạng chuyển đổi tài liệu được hỗ trợ';
$string['systemname'] = 'Bộ nhận diện';
$string['type_antivirus'] = 'Plugin chống vi-rút';
$string['type_antivirus_plural'] = 'Các plugin chống vi-rút';
$string['type_auth'] = 'Phương pháp xác thực';
$string['type_auth_plural'] = 'Các phương pháp xác thực';
$string['type_availability'] = 'Hạn chế sẵn có';
$string['type_availability_plural'] = 'Các hạn chế sẵn có';
$string['type_block'] = 'Khối';
$string['type_block_plural'] = 'Các khối';
$string['type_cachelock'] = 'Trình xử lý khóa bộ nhớ cache';
$string['type_cachelock_plural'] = 'Các trình xử lý khóa bộ nhớ cache';
$string['type_cachestore'] = 'Kho lưu trữ cache';
$string['type_cachestore_plural'] = 'Các kho lưu trữ cache';
$string['type_calendartype'] = 'Loại lịch';
$string['type_calendartype_plural'] = 'Các loại lịch';
$string['type_communication'] = 'Nhà cung cấp giao tiếp';
$string['type_communication_plural'] = 'Các nhà cung cấp giao tiếp';
$string['type_contenttype'] = 'Ngân hàng nội dung';
$string['type_contenttype_plural'] = 'Các plugin ngân hàng nội dung';
$string['type_contentbank'] = 'Ngân hàng nội dung';
$string['type_contentbank_plural'] = 'Các plugin ngân hàng nội dung';
$string['type_customfield'] = 'Trường tùy chỉnh';
$string['type_customfield_plural'] = 'Các trường tùy chỉnh';
$string['type_coursereport'] = 'Báo cáo khóa học';
$string['type_coursereport_plural'] = 'Các báo cáo khóa học';
$string['type_dataformat'] = 'Định dạng dữ liệu';
$string['type_dataformat_plural'] = 'Các định dạng dữ liệu';
$string['type_editor'] = 'Trình soạn thảo';
$string['type_editor_plural'] = 'Các trình soạn thảo';
$string['type_enrol'] = 'Phương thức đăng ký';
$string['type_enrol_plural'] = 'Các phương thức đăng ký';
$string['type_fileconverter'] = 'Trình chuyển đổi tài liệu';
$string['type_fileconvertermanage'] = 'Quản lý trình chuyển đổi tài liệu';
$string['type_fileconverter_plural'] = 'Các trình chuyển đổi tài liệu';
$string['type_filter'] = 'Bộ lọc văn bản';
$string['type_filter_plural'] = 'Các bộ lọc văn bản';
$string['type_format'] = 'Định dạng khóa học';
$string['type_format_plural'] = 'Các định dạng khóa học';
$string['type_gradeexport'] = 'Phương pháp xuất điểm';
$string['type_gradeexport_plural'] = 'Các phương pháp xuất điểm';
$string['type_gradeimport'] = 'Phương pháp nhập điểm';
$string['type_gradeimport_plural'] = 'Các phương pháp nhập điểm';
$string['type_gradereport'] = 'Báo cáo sổ điểm';
$string['type_gradereport_plural'] = 'Các báo cáo sổ điểm';
$string['type_gradingform'] = 'Phương pháp đánh giá nâng cao';
$string['type_gradingform_plural'] = 'Các phương pháp đánh giá nâng cao';
$string['type_h5plib'] = 'Khung H5P';
$string['type_h5plib_plural'] = 'Các khung H5P';
$string['type_mlbackend'] = 'Máy chủ phụ trợ học máy';
$string['type_mlbackend_plural'] = 'Các máy chủ phụ trợ học máy';
$string['type_local'] = 'Plugin cục bộ';
$string['type_local_plural'] = 'Các plugin cục bộ';
$string['type_media'] = 'Trình phát đa phương tiện';
$string['type_media_plural'] = 'Các trình phát đa phương tiện';
$string['type_message'] = 'Plugin thông báo';
$string['type_message_plural'] = 'Các plugin thông báo';
$string['type_mnetservice'] = 'Dịch vụ MNet';
$string['type_mnetservice_plural'] = 'Các dịch vụ MNet';
$string['type_mod'] = 'Mô-đun hoạt động';
$string['type_mod_plural'] = 'Các mô-đun hoạt động';
$string['type_paygwmanage'] = 'Quản lý cổng thanh toán';
$string['type_paygw'] = 'Cổng thanh toán';
$string['type_paygw_plural'] = 'Các cổng thanh toán';
$string['type_plagiarism'] = 'Plugin sao chép';
$string['type_plagiarism_plural'] = 'Các plugin sao chép';
$string['type_portfolio'] = 'Hồ sơ';
$string['type_portfolio_plural'] = 'Các hồ sơ';
$string['type_profilefield'] = 'Loại trường hồ sơ';
$string['type_profilefield_plural'] = 'Các loại trường hồ sơ';
$string['type_qbehaviour'] = 'Hành vi câu hỏi';
$string['type_qbehaviour_plural'] = 'Các hành vi câu hỏi';
$string['type_qformat'] = 'Định dạng nhập/xuất câu hỏi';
$string['type_qformat_plural'] = 'Các định dạng nhập/xuất câu hỏi';
$string['type_qtype'] = 'Loại câu hỏi';
$string['type_qtype_plural'] = 'Các loại câu hỏi';
$string['type_report'] = 'Báo cáo trang web';
$string['type_report_plural'] = 'Các báo cáo';
$string['type_repository'] = 'Kho lưu trữ';
$string['type_repository_plural'] = 'Các kho lưu trữ';
$string['type_search'] = 'Trình tìm kiếm';
$string['type_search_plural'] = 'Các trình tìm kiếm';
$string['type_theme'] = 'Giao diện';
$string['type_theme_plural'] = 'Các giao diện';
$string['type_tool'] = 'Công cụ quản trị';
$string['type_tool_plural'] = 'Các công cụ quản trị';
$string['type_webservice'] = 'Giao thức dịch vụ web';
$string['type_webservice_plural'] = 'Các giao thức dịch vụ web';
$string['type_qbank'] = 'Plugin ngân hàng câu hỏi';
$string['type_qbank_plural'] = 'Các plugin ngân hàng câu hỏi';
$string['updateavailable'] = 'Có một phiên bản mới {$a} có sẵn!';
$string['updateavailable_moreinfo'] = 'Thông tin thêm...';
$string['updateavailable_release'] = 'Phiên bản {$a}';
$string['updatepluginconfirm'] = 'Xác nhận cập nhật plugin';
$string['updatepluginconfirminfo'] = 'Bạn sẽ cài đặt một phiên bản mới của plugin <strong>{$a->name}</strong>. Một gói ZIP với phiên bản {$a->version} của plugin sẽ được tải xuống từ <a href="{$a->url}">{$a->url}</a> và được giải nén vào cài đặt Moodle của bạn để nâng cấp cài đặt của bạn.';
$string['updatepluginconfirmexternal'] = 'Có vẻ như phiên bản hiện tại của plugin đã được lấy từ hệ thống quản lý mã nguồn ({$a}). Nếu bạn cài đặt cập nhật này, bạn sẽ không thể nhận được cập nhật plugin từ hệ thống quản lý mã nguồn. Hãy đảm bảo rằng bạn chắc chắn muốn cập nhật plugin trước khi tiếp tục.';
$string['updatepluginconfirmwarning'] = 'Vui lòng lưu ý rằng Moodle sẽ không tự động sao lưu cơ sở dữ liệu của bạn trước khi nâng cấp. Chúng tôi mạnh mẽ khuyến nghị bạn sao lưu đầy đủ ngay bây giờ, để xử lý trường hợp hiếm hoi mà mã mới có lỗi làm cho trang web của bạn không khả dụng hoặc thậm chí làm hỏng dữ liệu. Bạn có chắc chắn muốn tiếp tục?';
$string['uninstall'] = 'Gỡ cài đặt';
$string['uninstallconfirm'] = 'Bạn đang chuẩn bị gỡ cài đặt plugin <em>{$a->name}</em>. Điều này sẽ xóa hoàn toàn tất cả mọi thứ trong cơ sở dữ liệu liên quan đến plugin này, bao gồm cấu hình, bản ghi nhật ký, các tệp người dùng được quản lý bởi plugin vv. Không có cách nào để quay lại và Moodle chính nó không tạo bất kỳ bản sao lưu khôi phục nào. Bạn CHẮC CHẮN muốn tiếp tục chứ?';
$string['uninstalldelete'] = 'Tất cả dữ liệu liên quan đến plugin <em>{$a->name}</em> đã được xóa khỏi cơ sở dữ liệu. Để ngăn plugin tự cài đặt lại, thư mục của nó <em>{$a->rootdir}</em> phải được loại bỏ thủ công từ máy chủ của bạn ngay bây giờ. Moodle chính nó không thể xóa thư mục do quyền ghi.';
$string['uninstalldeleteconfirm'] = 'Tất cả dữ liệu liên quan đến plugin <em>{$a->name}</em> đã được xóa khỏi cơ sở dữ liệu. Để ngăn plugin tự cài đặt lại, thư mục của nó <em>{$a->rootdir}</em> phải được loại bỏ từ máy chủ của bạn. Bạn có muốn xóa thư mục plugin ngay bây giờ không?';
$string['uninstalldeleteconfirmexternal'] = 'Dường như phiên bản hiện tại của plugin đã được lấy từ hệ thống quản lý mã nguồn ({$a}) kiểm tra. Nếu bạn xóa thư mục plugin, bạn có thể mất các sửa đổi cục bộ quan trọng của mã. Vui lòng đảm bảo rằng bạn chắc chắn muốn xóa thư mục plugin trước khi tiếp tục.';
$string['uninstallextraconfirmblock'] = 'Có {$a->instances} trường hợp của khối này.';
$string['uninstallextraconfirmenrol'] = 'Có {$a->enrolments} người dùng đăng ký.';
$string['uninstallextraconfirmmod'] = 'Có {$a->instances} trường hợp của mô-đun này trong {$a->courses} khóa học.';
$string['uninstalling'] = 'Đang gỡ cài đặt {$a->name}';
$string['validationmsg_componentmatch'] = 'Tên thành phần đầy đủ';
$string['validationmsg_componentmismatchname'] = 'Tên plugin không khớp';
$string['validationmsg_componentmismatchname_help'] = 'Một số gói ZIP, như những gói được tạo bởi Github, có thể chứa một tên thư mục gốc không chính xác. Bạn cần sửa tên thư mục gốc để phù hợp với tên plugin được khai báo.';
$string['validationmsg_componentmismatchname_info'] = 'Plugin khai báo tên của nó là \'{$a}\' nhưng không khớp với tên thư mục gốc.';
$string['validationmsg_componentmismatchtype'] = 'Không khớp loại plugin';
$string['validationmsg_componentmismatchtype_info'] = 'Loại mong đợi \'{$a->expected}\' nhưng plugin khai báo loại của nó là \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Không tìm thấy tệp đã giải nén';
$string['validationmsg_filesnumber'] = 'Không đủ tệp trong gói';
$string['validationmsg_filestatus'] = 'Không thể giải nén tất cả các tệp';
$string['validationmsg_filestatus_info'] = 'Cố gắng giải nén tệp {$a->file} dẫn đến lỗi \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Tìm thấy tệp ngôn ngữ';
$string['validationmsg_maturity'] = 'Mức độ chín chuối được khai báo';
$string['validationmsg_maturity_help'] = 'Plugin có thể khai báo mức độ chín chuối của nó. Nếu người bảo trì xem xét plugin là ổn định, mức độ chín chuối được khai báo sẽ là MATURITY_STABLE. Tất cả các mức độ chín chuối khác (như alpha hoặc beta) nên được xem xét là không ổn định và sẽ có một cảnh báo.';
$string['validationmsg_missingcomponent'] = 'Plugin không khai báo tên thành phần của nó';
$string['validationmsg_missingcomponent_help'] = 'Tất cả các plugin phải cung cấp tên đầy đủ của thành phần của họ thông qua khai báo $plugin->component trong tệp version.php.';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Không khớp tên tệp ngôn ngữ tiếng Anh';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Loại plugin được chỉ định không có tệp ngôn ngữ tiếng Anh {$a}.';
$string['validationmsg_missinglangenfile'] = 'Không tìm thấy tệp ngôn ngữ tiếng Anh';
$string['validationmsg_missinglangenfolder'] = 'Thiếu thư mục ngôn ngữ tiếng Anh';
$string['validationmsg_missingversion'] = 'Plugin không khai báo phiên bản của nó';
$string['validationmsg_missingversionphp'] = 'Không tìm thấy tệp version.php';
$string['validationmsg_multiplelangenfiles'] = 'Tìm thấy nhiều tệp ngôn ngữ tiếng Anh';
$string['validationmsg_onedir'] = 'Cấu trúc không hợp lệ của gói ZIP.';
$string['validationmsg_onedir_help'] = 'Gói ZIP phải chứa chỉ một thư mục gốc chứa mã plugin. Tên của thư mục gốc đó phải khớp với tên của plugin.';
$string['validationmsg_pathwritable'] = 'Kiểm tra quyền ghi';
$string['validationmsg_pluginversion'] = 'Phiên bản plugin';
$string['validationmsg_pluginversiontoolow'] = 'Một phiên bản cao hơn của plugin này đã được cài đặt';
$string['validationmsg_release'] = 'Phiên bản phát hành của plugin';
$string['validationmsg_requiresmoodle'] = 'Yêu cầu phiên bản Moodle';
$string['validationmsg_rootdir'] = 'Tên của plugin sẽ được cài đặt';
$string['validationmsg_rootdir_help'] = 'Tên của thư mục gốc trong gói ZIP tạo ra tên của plugin sẽ được cài đặt. Nếu tên không đúng, bạn có thể muốn đổi tên thư mục gốc trong ZIP trước khi cài đặt plugin.';
$string['validationmsg_rootdirinvalid'] = 'Tên plugin không hợp lệ';
$string['validationmsg_rootdirinvalid_help'] = 'Tên của thư mục gốc trong gói ZIP vi phạm các yêu cầu cú pháp hình thức. Một số gói ZIP, như những gói được tạo bởi Github, có thể chứa một tên thư mục gốc không chính xác. Bạn cần sửa tên của thư mục gốc để phù hợp với tên plugin.';
$string['validationmsg_targetexists'] = 'Địa điểm đích đã tồn tại và sẽ bị xóa';
$string['validationmsg_targetexists_help'] = 'Thư mục plugin đã tồn tại và sẽ được thay thế bằng nội dung của gói plugin.';
$string['validationmsg_targetnotdir'] = 'Địa điểm đích đã bị một tệp chiếm dụng';
$string['validationmsg_unknowntype'] = 'Loại plugin không xác định';
$string['validationmsg_versionphpsyntax'] = 'Phát hiện cú pháp không được hỗ trợ trong tệp version.php';
$string['validationmsglevel_debug'] = 'Gỡ lỗi';
$string['validationmsglevel_error'] = 'Lỗi';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Cảnh báo';
$string['version'] = 'Phiên bản';
$string['versiondb'] = 'Phiên bản hiện tại';
$string['versiondisk'] = 'Phiên bản mới';

// Đã lỗi thời kể từ Moodle 4.2.
$string['type_contentbank'] = 'Ngân hàng nội dung';
$string['type_contentbank_plural'] = 'Các plugin ngân hàng nội dung';

