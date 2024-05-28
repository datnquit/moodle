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
 * Lang strings
 *
 * @package    report_security
 * @copyright  2008 petr Skoda
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['configuration'] = 'Cấu hình';
$string['description'] = 'Mô tả';
$string['details'] = 'Chi tiết';
$string['check_configrw_details'] = '<p>Đề xuất thay đổi quyền tập tin của <code>config.php</code> sau khi cài đặt để tập tin không thể được sửa đổi bởi máy chủ web. Lưu ý rằng biện pháp này không cải thiện đáng kể bảo mật của máy chủ, tuy nhiên, nó có thể làm chậm lại hoặc hạn chế các cuộc tấn công khai thác chung.</p>';
$string['check_configrw_name'] = 'config.php có thể ghi';
$string['check_configrw_ok'] = 'config.php không thể được sửa đổi bởi các kịch bản PHP.';
$string['check_configrw_warning'] = 'Các kịch bản PHP có thể sửa đổi config.php.';
$string['check_cookiesecure_details'] = '<p>Nếu giao tiếp https được kích hoạt, đề xuất bật gửi cookie an toàn. Bạn nên cấu hình chuyển hướng vĩnh viễn từ http sang https và lý tưởng là phục vụ tiêu đề HSTS nữa.</p>';
$string['check_cookiesecure_error'] = 'Vui lòng bật cookie an toàn';
$string['check_cookiesecure_http'] = 'Bạn phải bật https để sử dụng cookie an toàn';
$string['check_cookiesecure_name'] = 'Cookie an toàn';
$string['check_cookiesecure_ok'] = 'Cookie an toàn được kích hoạt.';
$string['check_defaultuserrole_details'] = '<p>Tất cả người dùng đã đăng nhập đều được cấp quyền của vai người dùng mặc định. Hãy đảm bảo không có khả năng rủi ro nào được phép trong vai này.</p>

<p>Loại cổ điển duy nhất được hỗ trợ cho vai người dùng mặc định là <em>Người dùng được xác thực</em>. Khả năng xem khóa không được kích hoạt.</p>
<p>Vui lòng kiểm tra xem tùy chọn phê duyệt yêu cầu xóa dữ liệu tự động (tool_dataprivacy | automaticdatadeletionapproval) có được kích hoạt không. Người dùng có thể yêu cầu xóa dữ liệu có thể xóa một lượng lớn dữ liệu.</p>';
$string['check_defaultuserrole_error'] = 'Vai người dùng mặc định "{$a}" được định nghĩa không chính xác!';
$string['check_defaultuserrole_name'] = 'Vai mặc định cho tất cả người dùng';
$string['check_defaultuserrole_notset'] = 'Vai mặc định không được thiết lập.';
$string['check_defaultuserrole_ok'] = 'Định nghĩa vai mặc định cho tất cả người dùng là OK.';
$string['check_displayerrors_details'] = '<p>Bật cài đặt PHP <code>display_errors</code> không được khuyến khích trên các trang web sản xuất vì thông báo lỗi có thể tiết lộ thông tin nhạy cảm về máy chủ của bạn.</p>';
$string['check_displayerrors_error'] = 'Cài đặt PHP để hiển thị lỗi được bật. Đề nghị tắt chức năng này.';
$string['check_displayerrors_name'] = 'Hiển thị lỗi PHP';
$string['check_displayerrors_ok'] = 'Tắt chức năng hiển thị lỗi PHP.';
$string['check_emailchangeconfirmation_details'] = '<p>Đề xuất yêu cầu bước xác nhận qua email khi người dùng thay đổi địa chỉ email trong hồ sơ của họ. Nếu tắt, những kẻ spam có thể cố gắng khai thác máy chủ để gửi spam.</p>
<p>Trường email có thể bị khóa từ các plugin xác thực, khả năng này không được xem xét ở đây.</p>';
$string['check_emailchangeconfirmation_error'] = 'Người dùng có thể nhập bất kỳ địa chỉ email nào.';
$string['check_emailchangeconfirmation_info'] = 'Người dùng chỉ có thể nhập địa chỉ email từ các tên miền được phép.';
$string['check_emailchangeconfirmation_name'] = 'Xác nhận thay đổi email';
$string['check_emailchangeconfirmation_ok'] = 'Xác nhận thay đổi địa chỉ email trong hồ sơ người dùng.';
$string['check_embed_details'] = '<p>Nhúng đối tượng không giới hạn rất nguy hiểm - bất kỳ người dùng đăng ký nào cũng có thể khởi chạy một cuộc tấn công XSS chống lại các người dùng khác trên máy chủ. Cài đặt này nên được tắt trên các máy chủ sản xuất.</p>';
$string['check_embed_error'] = 'Nhúng đối tượng không giới hạn được bật - điều này rất nguy hiểm đối với phần lớn các máy chủ.';
$string['check_embed_name'] = 'Cho phép EMBED và OBJECT';
$string['check_embed_ok'] = 'Nhúng đối tượng không giới hạn không được phép.';
$string['check_frontpagerole_details'] = '<p>Vai trò trang chủ mặc định được gán cho tất cả người dùng đã xác thực cho các hoạt động trang chủ của trang web. Hãy đảm bảo không có khả năng rủi ro nào được phép cho vai này.</p>
<p>Đề xuất tạo một vai đặc biệt cho mục đích này và không sử dụng vai loại cổ điển.</p>';
$string['check_frontpagerole_error'] = 'Phát hiện vai trang chủ không chính xác "{$a}"!';
$string['check_frontpagerole_name'] = 'Vai trang chủ';
$string['check_frontpagerole_notset'] = 'Vai trang chủ không được thiết lập.';
$string['check_frontpagerole_ok'] = 'Định nghĩa vai trang chủ là OK.';
$string['check_crawlers_details'] = '<p>Thiết lập "Mở cho các công cụ tìm kiếm" cho phép các công cụ tìm kiếm truy cập vào các khóa học với quyền truy cập khách. Không có ý nghĩa nào khi kích hoạt thiết lập này nếu không cho phép đăng nhập với quyền khách.</p>';
$string['check_crawlers_error'] = 'Cho phép truy cập của công cụ tìm kiếm nhưng vô hiệu hóa truy cập khách.';
$string['check_crawlers_info'] = 'Các công cụ tìm kiếm có thể truy cập dưới dạng khách.';
$string['check_crawlers_name'] = 'Mở cho các công cụ tìm kiếm';
$string['check_crawlers_ok'] = 'Truy cập của các công cụ tìm kiếm không được kích hoạt.';
$string['check_antivirus_details'] = 'Trạng thái này kiểm tra xem có lỗi gần đây nào được phát hiện dựa trên ngưỡng được đặt trong cài đặt chính của phần mềm diệt virus.';
$string['check_antivirus_error'] = '{$a->errors} lỗi đã được phát hiện trong vòng {$a->lookback}';
$string['check_antivirus_info'] = 'Không có chương trình diệt virus nào được kích hoạt hiện tại';
$string['check_antivirus_name'] = 'Phần mềm diệt virus';
$string['check_antivirus_ok'] = '{$a->scanners} chương trình diệt virus được kích hoạt, không có vấn đề nào được phát hiện trong vòng {$a->lookback}';
$string['check_antivirus_logstore_not_supported'] = 'Không thể xác minh trạng thái của các chương trình diệt virus do loại cơ sở dữ liệu nhật ký được chọn';

$string['check_dotfiles_info'] = 'Tất cả các tập tin chấm trừ /.well-known/* không nên được công khai';
$string['check_dirindex_info'] = 'Chỉ số thư mục không nên được bật';
$string['check_guestrole_details'] = '<p>Vai khách được sử dụng cho khách, người dùng không đăng nhập và truy cập tạm thời vào khóa học của khách. Hãy đảm bảo không có khả năng rủi ro nào được phép trong vai này.</p>

<p>Loại cổ điển duy nhất được hỗ trợ cho vai khách là <em>Khách</em>.</p>';
$string['check_guestrole_error'] = 'Vai khách "{$a}" được định nghĩa không chính xác!';
$string['check_guestrole_name'] = 'Vai khách';
$string['check_guestrole_notset'] = 'Vai khách không được thiết lập.';
$string['check_guestrole_ok'] = 'Định nghĩa vai khách là OK.';
$string['check_nodemodules_details'] = '<p>Thư mục <code>{$a->path}</code> chứa các mô-đun Node.js và các phụ thuộc của chúng, thường được cài đặt bởi tiện ích NPM. Các mô-đun này có thể cần thiết cho việc phát triển Moodle cục bộ, chẳng hạn như sử dụng framework grunt. Chúng không cần thiết để chạy một trang web Moodle trong môi trường sản xuất và chúng có thể chứa mã có thể gây ra các cuộc tấn công từ xa vào trang web của bạn.</p><p>Đề nghị mạnh mẽ là loại bỏ thư mục nếu trang web có sẵn qua một URL công cộng, hoặc ít nhất là ngăn chặn truy cập web vào nó trong cấu hình máy chủ web của bạn.</p>';
$string['check_nodemodules_info'] = 'Thư mục node_modules không nên hiện diện trên các trang web công cộng.';
$string['check_nodemodules_name'] = 'Thư mục mô-đun Node.js';
$string['check_openprofiles_details'] = 'Các hồ sơ người dùng mở có thể bị lạm dụng bởi những kẻ spam. Đề nghị rằng hoặc là <code>Bắt người dùng phải đăng nhập để xem hồ sơ</code> hoặc <code>Bắt người dùng phải đăng nhập</code> được bật.';
$string['check_openprofiles_error'] = 'Bất kỳ ai cũng có thể xem hồ sơ người dùng mà không cần đăng nhập.';
$string['check_openprofiles_name'] = 'Hồ sơ người dùng mở';
$string['check_openprofiles_ok'] = 'Yêu cầu đăng nhập trước khi xem hồ sơ người dùng.';
$string['check_passwordpolicy_details'] = '<p>Đề nghị thiết lập một chính sách mật khẩu, vì đoán mật khẩu rất thường là cách dễ dàng nhất để đăng nhập không được phép.
Không làm cho các yêu cầu quá nghiêm ngặt, vì điều này có thể dẫn đến người dùng không thể nhớ mật khẩu của họ và hoặc quên chúng hoặc ghi chú chúng.</p>';
$string['check_passwordpolicy_error'] = 'Chính sách mật khẩu không được thiết lập.';
$string['check_passwordpolicy_name'] = 'Chính sách mật khẩu';
$string['check_passwordpolicy_ok'] = 'Chính sách mật khẩu đã được bật.';
$string['check_preventexecpath_name'] = 'Đường dẫn thực thi';
$string['check_preventexecpath_ok'] = 'Đường dẫn thực thi chỉ có thể được thiết lập trong config.php.';
$string['check_preventexecpath_warning'] = 'Các đường dẫn thực thi có thể được thiết lập trong giao diện quản trị.';
$string['check_preventexecpath_details'] = '<p>Cho phép thiết lập các đường dẫn thực thi qua giao diện quản trị là một vector để tăng quyền. Điều này phải được bắt buộc trong config.php:</p><p><code>$CFG->preventexecpath = true;</code></p>';
$string['check_publicpaths_name'] = 'Kiểm tra tất cả các đường dẫn công cộng / riêng tư';
$string['check_publicpaths_ok'] = 'Tất cả các đường dẫn nội bộ không được công khai';
$string['check_publicpaths_warning'] = 'Một số đường dẫn nội bộ có thể được công khai';
$string['check_publicpaths_generic'] = '{$a} tập tin không nên công khai';
$string['check_publicpaths_403'] = ' (Trả về mã 403, lý tưởng là nên là 404)';
$string['check_riskadmin_detailsok'] = '<p>Vui lòng xác minh danh sách các quản trị viên hệ thống sau:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Vui lòng xác minh danh sách các quản trị viên hệ thống sau:</p>{$a->admins}
<p>Đề nghị chỉ gán vai quản trị trong ngữ cảnh hệ thống. Các người dùng sau có vai quản trị (không được hỗ trợ) được gán ở ngữ cảnh khác:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Quản trị viên';
$string['check_riskadmin_ok'] = 'Tìm thấy {$a} quản trị viên máy chủ.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) xem lại phân công vai</a>';
$string['check_riskadmin_warning'] = 'Tìm thấy {$a->admincount} quản trị viên máy chủ và {$a->unsupcount} phân công vai quản trị viên không được hỗ trợ.';
$string['check_riskbackup_detailsok'] = 'Không có vai nào cho phép rõ ràng sao lưu dữ liệu người dùng. Tuy nhiên, lưu ý rằng các quản trị viên với khả năng "làm bất cứ điều gì" vẫn có thể có khả năng làm điều này.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Các ghi đè hoạt động này cung cấp cho người dùng khả năng bao gồm dữ liệu người dùng trong bản sao lưu. Hãy đảm bảo rằng quyền này cần thiết.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Các vai hệ thống sau hiện đang cho phép người dùng bao gồm dữ liệu người dùng trong bản sao lưu. Hãy đảm bảo rằng quyền này cần thiết.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Do các vai hoặc ghi đè trên và đây, các tài khoản người dùng sau hiện có quyền sao lưu dữ liệu chứa dữ liệu riêng tư từ bất kỳ người dùng nào được đăng ký trong khóa học của họ. Đảm bảo rằng họ (a) được tin tưởng và (b) được bảo vệ bởi mật khẩu mạnh:</p> {$a}';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} trong {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Sao lưu dữ liệu người dùng';
$string['check_riskbackup_ok'] = 'Không có vai nào cho phép rõ ràng sao lưu dữ liệu người dùng';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) trong {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'Tìm thấy {$a->rolecount} vai, {$a->overridecount} ghi đè và {$a->usercount} người dùng có khả năng sao lưu dữ liệu người dùng.';
$string['check_riskxss_details'] = '<p>RISK_XSS chỉ định tất cả các khả năng nguy hiểm mà chỉ các người dùng được tin tưởng mới có thể sử dụng.</p>
<p>Vui lòng xác minh danh sách người dùng sau và đảm bảo rằng bạn tin tưởng hoàn toàn họ trên máy chủ này:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'Người dùng tin cậy XSS';
$string['check_riskxss_warning'] = 'RISK_XSS - tìm thấy {$a} người dùng mà bạn cần phải tin tưởng.';
$string['check_unsecuredataroot_details'] = '<p>Thư mục dataroot không được truy cập qua web. Cách tốt nhất để đảm bảo rằng thư mục không thể truy cập là sử dụng một thư mục bên ngoài thư mục web công cộng (ví dụ: <code>/var/moodledata</code>) hoặc cấu hình máy chủ web của bạn để ngăn chặn truy cập web vào nó.</p>';
$string['check_unsecuredataroot_name'] = 'Thư mục dataroot';
$string['check_unsecuredataroot_ok'] = 'Thư mục dataroot được bảo vệ khỏi truy cập qua web.';
$string['check_unsecuredataroot_warning'] = 'Thư mục dataroot có thể truy cập qua web.';
$string['check_vendordir_details'] = '<p>Thư mục <code>{$a->path}</code> chứa các thư viện của bên thứ ba và các phụ thuộc của chúng, thường được cài đặt bởi PHP Composer. Những thư viện này có thể cần thiết cho việc phát triển Moodle cục bộ, như cài đặt framework PHPUnit. Chúng không cần thiết để chạy một trang Moodle trong môi trường sản xuất và chúng có thể chứa mã có thể gây nguy hiểm, khiến trang web của bạn trở nên dễ bị tấn công từ xa.</p><p>Được khuyến nghị mạnh mẽ là xóa thư mục này nếu trang web có sẵn thông qua một URL công khai, hoặc ít nhất là cấm truy cập web vào nó trong cấu hình máy chủ web của bạn.</p>';
$string['check_vendordir_info'] = 'Thư mục vendor không nên tồn tại trên các trang web công cộng.';
$string['check_vendordir_name'] = 'Thư mục Vendor';
$string['check_webcron_details'] = '<p>Chạy cron từ trình duyệt web có thể tiết lộ thông tin đặc quyền cho người dùng ẩn danh. Được khuyến nghị chỉ chạy cron từ dòng lệnh hoặc thiết lập mật khẩu cron cho việc truy cập từ xa.</p>';
$string['check_webcron_warning'] = 'Người dùng ẩn danh có thể truy cập cron.';
$string['check_webcron_name'] = 'Cron web';
$string['check_webcron_ok'] = 'Người dùng ẩn danh không thể truy cập cron.';
$string['eventreportviewed'] = 'Xem báo cáo kiểm tra bảo mật';
$string['issue'] = 'Vấn đề';
$string['pluginname'] = 'Kiểm tra bảo mật';
$string['security:view'] = 'Xem báo cáo bảo mật';
$string['timewarning'] = 'Xử lý dữ liệu có thể mất nhiều thời gian, vui lòng kiên nhẫn...';
$string['privacy:metadata'] = 'Plugin Tổng quan Bảo mật không lưu trữ bất kỳ dữ liệu cá nhân nào.';

// Không còn được hỗ trợ từ Moodle 4.0 trở đi.
$string['check_mediafilterswf_details'] = '<p>Việc nhúng swf tự động rất nguy hiểm - bất kỳ người dùng đã đăng ký nào cũng có thể tiến hành tấn công XSS đối với các người dùng khác trên máy chủ. Vui lòng tắt nó trên các máy chủ sản xuất.</p>';
$string['check_mediafilterswf_error'] = 'Bộ lọc phương tiện Flash được bật - điều này rất nguy hiểm đối với đa số máy chủ.';
$string['check_mediafilterswf_name'] = 'Bộ lọc phương tiện .swf được bật';
$string['check_mediafilterswf_ok'] = 'Bộ lọc phương tiện Flash không được bật.';
