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
 * Strings for the tool_installaddon component.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   2013 David Mudrak <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Xác nhận';
$string['acknowledgementtext'] = 'Tôi hiểu rằng trách nhiệm của tôi là có các bản sao lưu đầy đủ của trang web này trước khi cài đặt các plugin bổ sung. Tôi chấp nhận và hiểu rằng các plugin (đặc biệt nhưng không chỉ từ các nguồn không chính thức) có thể chứa các lỗ hổng bảo mật, làm trang web không khả dụng, hoặc gây rò rỉ hoặc mất dữ liệu cá nhân.';
$string['featuredisabled'] = 'Trình cài đặt plugin bị vô hiệu hóa trên trang web này.';
$string['installaddon'] = 'Cài đặt plugin!';
$string['installaddons'] = 'Cài đặt các plugin';
$string['installfromrepo'] = 'Cài đặt plugin từ thư mục plugin Moodle';
$string['installfromrepo_help'] = 'Bạn sẽ được chuyển hướng đến thư mục plugin Moodle để tìm kiếm và cài đặt plugin. Lưu ý rằng tên đầy đủ trang web của bạn, URL và phiên bản Moodle sẽ được gửi kèm theo để làm cho quá trình cài đặt dễ dàng hơn cho bạn.';
$string['installfromzip'] = 'Cài đặt plugin từ tệp ZIP';
$string['installfromzip_help'] = 'Một lựa chọn thay thế để cài đặt plugin trực tiếp từ thư mục plugin Moodle là tải lên một gói ZIP của plugin. Gói ZIP phải có cấu trúc tương tự như gói tải xuống từ thư mục plugin Moodle.';
$string['installfromzipfile'] = 'Gói ZIP';
$string['installfromzipfile_help'] = 'Gói ZIP plugin phải chỉ chứa một thư mục, được đặt tên phù hợp với tên plugin. ZIP sẽ được giải nén vào vị trí thích hợp cho loại plugin. Nếu gói được tải xuống từ thư mục plugin Moodle thì nó sẽ có cấu trúc này.';
$string['installfromzipinvalid'] = 'Gói ZIP plugin phải chỉ chứa một thư mục, được đặt tên phù hợp với tên plugin. Tệp được cung cấp không phải là gói ZIP plugin hợp lệ.';
$string['installfromziprootdir'] = 'Đổi tên thư mục gốc';
$string['installfromziprootdir_help'] = 'Một số gói ZIP, chẳng hạn như những gói được tạo ra bởi Github, có thể chứa tên thư mục gốc không đúng. Nếu vậy, tên đúng có thể được nhập vào đây.';
$string['installfromzipsubmit'] = 'Cài đặt plugin từ tệp ZIP';
$string['installfromziptype'] = 'Loại plugin';
$string['installfromziptype_help'] = 'Đối với các plugin khai báo đúng tên thành phần của chúng, trình cài đặt có thể tự động phát hiện loại plugin. Nếu tự động phát hiện thất bại, hãy chọn loại plugin chính xác thủ công. Cảnh báo: Quá trình cài đặt có thể thất bại nghiêm trọng nếu loại plugin không chính xác được chỉ định.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'Đảm bảo rằng vị trí gốc của loại plugin có thể được ghi bởi tiến trình máy chủ web.';
$string['permcheckerror'] = 'Lỗi khi kiểm tra quyền ghi';
$string['permcheckprogress'] = 'Đang kiểm tra quyền ghi ...';
$string['permcheckresultno'] = 'Vị trí loại plugin <em>{$a->path}</em> không thể ghi được';
$string['permcheckresultyes'] = 'Vị trí loại plugin <em>{$a->path}</em> có thể ghi được';
$string['permcheckrepeat'] = 'Kiểm tra lại';
$string['pluginname'] = 'Trình cài đặt plugin';
$string['remoterequestalreadyinstalled'] = 'Có yêu cầu cài đặt plugin {$a->name} ({$a->component}) phiên bản {$a->version} từ thư mục plugin Moodle trên trang web này. Tuy nhiên, plugin này <strong>đã được cài đặt</strong> trên trang web.';
$string['remoterequestconfirm'] = 'Có yêu cầu cài đặt plugin <strong>{$a->name}</strong> ({$a->component}) phiên bản {$a->version} từ thư mục plugin Moodle trên trang web này. Nếu bạn tiếp tục, gói ZIP plugin sẽ được tải xuống để xác thực. Chưa có gì sẽ được cài đặt.';
$string['remoterequestinvalid'] = 'Có yêu cầu cài đặt một plugin từ thư mục plugin Moodle trên trang web này. Tuy nhiên yêu cầu không hợp lệ và plugin không thể được cài đặt.';
$string['remoterequestpermcheck'] = 'Có yêu cầu cài đặt plugin {$a->name} ({$a->component}) phiên bản {$a->version} từ thư mục plugin Moodle trên trang web này. Tuy nhiên, vị trí <strong>{$a->typepath}</strong> <strong>không thể ghi</strong>. Bạn cần cấp quyền ghi cho người dùng máy chủ web tại vị trí này, sau đó nhấn nút tiếp tục để kiểm tra lại.';
$string['remoterequestpluginfoexception'] = 'Oops... Đã xảy ra lỗi khi cố gắng lấy thông tin về plugin {$a->name} ({$a->component}) phiên bản {$a->version}. Plugin không thể được cài đặt. Bật chế độ gỡ lỗi để xem chi tiết lỗi.';
$string['remoterequestnoninstallable'] = 'Có yêu cầu cài đặt plugin {$a->name} ({$a->component}) phiên bản {$a->version} từ thư mục plugin Moodle trên trang web này. Tuy nhiên, kiểm tra trước khi cài đặt plugin đã thất bại (mã lý do: {$a->reason}).';
$string['typedetectionfailed'] = 'Không thể phát hiện loại plugin. Vui lòng chọn loại plugin thủ công.';
$string['typedetectionmismatch'] = 'Loại plugin đã chọn không khớp với loại được khai báo bởi plugin: {$a}';
$string['privacy:metadata'] = 'Plugin Trình cài đặt plugin không lưu trữ bất kỳ dữ liệu cá nhân nào.';

