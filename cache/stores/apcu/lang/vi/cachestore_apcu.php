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
 * APCu cache store language strings.
 *
 * @package    cachestore_apcu
 * @copyright  2012 Sam Hemelryk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['clusternotice'] = 'Vui lòng lưu ý rằng APCu chỉ là lựa chọn phù hợp cho các trang web một nút hoặc bộ nhớ cache có thể lưu trữ cục bộ. Để biết thêm thông tin, xem tài liệu <a href="{$a}">APC user cache</a>.';
$string['notice'] = 'Thông báo';
$string['pluginname'] = 'Bộ nhớ cache người dùng APC (APCu)';
$string['prefix'] = 'Tiền tố';
$string['prefix_help'] = 'Tiền tố trên được sử dụng cho tất cả các khóa được lưu trữ trong phiên bản lưu trữ bộ nhớ cache APC này. Mặc định, tiền tố cơ sở dữ liệu được sử dụng.';
$string['prefixinvalid'] = 'Tiền tố bạn đã chọn không hợp lệ. Bạn chỉ có thể sử dụng a-z A-Z 0-9-_.';
$string['prefixnotunique'] = 'Tiền tố bạn đã chọn không duy nhất. Vui lòng chọn một tiền tố duy nhất.';
$string['privacy:metadata'] = 'Bổ trợ Bộ nhớ cache người dùng APC (APCu) lưu trữ dữ liệu tạm thời như một phần của chức năng lưu trữ cache, nhưng dữ liệu này được xóa thường xuyên và không được gửi đi bên ngoài bất kỳ cách nào.';
$string['testperformance'] = 'Kiểm tra hiệu suất';
$string['testperformance_desc'] = 'Nếu được kích hoạt, hiệu suất APCu sẽ được bao gồm khi xem trang Kiểm tra hiệu suất. Khuyến nghị không nên kích hoạt tính năng này trên một trang web sản xuất.';
