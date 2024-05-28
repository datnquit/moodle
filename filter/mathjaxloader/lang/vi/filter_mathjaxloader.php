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
 * Strings for component 'filter_mathjaxloader', language 'en'.
 *
 * @package    filter_mathjaxloader
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['filtername'] = 'MathJax';
$string['additionaldelimiters'] = 'Các dấu phân cách phương trình bổ sung';
$string['additionaldelimiters_help'] = 'Bộ lọc MathJax phân tích văn bản để tìm các phương trình được chứa trong các ký tự phân cách.

Danh sách các ký tự phân cách được nhận dạng có thể được thêm vào đây (ví dụ: AsciiMath sử dụng `). Các dấu phân cách có thể chứa nhiều ký tự và nhiều dấu phân cách có thể được ngăn cách bằng dấu phẩy.';
$string['httpsurl'] = 'URL MathJax';
$string['httpsurl_help'] = 'URL đầy đủ đến thư viện MathJax.';
$string['texfiltercompatibility'] = 'Tương thích bộ lọc TeX';
$string['texfiltercompatibility_help'] = 'Bộ lọc MathJax có thể được sử dụng thay thế cho bộ lọc ký hiệu TeX.

Để hỗ trợ tất cả các dấu phân cách được hỗ trợ bởi bộ lọc ký hiệu TeX, MathJax sẽ được cấu hình để hiển thị tất cả các phương trình "trong dòng" với văn bản.';
$string['localinstall'] = 'Cài đặt MathJax cục bộ';
$string['localinstall_help'] = 'Cấu hình MathJax mặc định sử dụng phiên bản CDN của MathJax, nhưng MathJax có thể được cài đặt cục bộ nếu cần.

Điều này có thể hữu ích để tiết kiệm băng thông hoặc do hạn chế proxy cục bộ.

Để sử dụng cài đặt cục bộ của MathJax, trước tiên hãy tải xuống toàn bộ thư viện MathJax từ https://www.mathjax.org/. Sau đó cài đặt nó trên máy chủ web. Cuối cùng, cập nhật các thiết lập bộ lọc MathJax httpurl và/hoặc httpsurl để trỏ đến URL MathJax.js cục bộ.';
$string['mathjaxsettings'] = 'Cấu hình MathJax';
$string['mathjaxsettings_desc'] = 'Cấu hình MathJax mặc định sẽ phù hợp cho hầu hết người dùng, nhưng MathJax rất dễ cấu hình và bất kỳ tùy chọn cấu hình MathJax chuẩn nào cũng có thể được thêm vào đây.';
$string['privacy:metadata'] = 'Plugin MathJax không lưu trữ bất kỳ dữ liệu cá nhân nào.';
