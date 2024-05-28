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
 * The library file for the file cache store.
 *
 * This file is part of the file cache store, it contains the API for interacting with an instance of the store.
 * This is used as a default cache store within the Cache API. It should never be deleted.
 *
 * @package    cachestore_file
 * @category   cache
 * @copyright  2012 Sam Hemelryk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Xóa thư mục không đồng bộ';
$string['asyncpurge_help'] = 'Nếu được kích hoạt, thư mục mới sẽ được tạo ra với bản dự thảo cache và thư mục cũ sẽ được xóa đi không đồng bộ thông qua một tác vụ đã lên lịch.';
$string['autocreate'] = 'Tự động tạo thư mục';
$string['autocreate_help'] = 'Nếu được kích hoạt, thư mục được chỉ định trong đường dẫn sẽ tự động được tạo nếu nó chưa tồn tại.';
$string['lockwait'] = 'Thời gian chờ khóa tối đa';
$string['lockwait_help'] = 'Thời gian tối đa trong giây để chờ khóa độc quyền trước khi đọc hoặc ghi một khóa bộ nhớ cache. Điều này chỉ được sử dụng cho các định nghĩa bộ nhớ cache mà yêu cầu khóa đọc hoặc ghi.';
$string['path'] = 'Đường dẫn lưu trữ cache';
$string['path_help'] = 'Thư mục nào nên được sử dụng để lưu trữ tập tin cho cửa hàng cache này. Nếu để trống (mặc định) một thư mục sẽ được tự động tạo ra trong thư mục moodledata. Điều này có thể được sử dụng để chỉ định một cửa hàng tập tin đến một thư mục trên ổ đĩa hoạt động tốt hơn (như một trong bộ nhớ).';
$string['pluginname'] = 'Bộ nhớ cache tập tin';
$string['privacy:metadata'] = 'Bổ trợ cửa hàng cache tập tin lưu trữ dữ liệu tạm thời như một phần của chức năng lưu trữ cache, nhưng dữ liệu này được xóa thường xuyên.';
$string['prescan'] = 'Quét trước thư mục';
$string['prescan_help'] = 'Nếu được kích hoạt, thư mục sẽ được quét khi cache được sử dụng lần đầu tiên và các yêu cầu cho tập tin sẽ được kiểm tra lần đầu tiên so với dữ liệu quét. Điều này có thể giúp nếu bạn có một hệ thống tập tin chậm và bạn phát hiện rằng các hoạt động tập tin đang gây ra nhược điểm.';
$string['singledirectory'] = 'Cửa hàng thư mục đơn';
$string['singledirectory_help'] = 'Nếu được kích hoạt, các tập tin (mục được lưu trữ) sẽ được lưu trữ trong một thư mục duy nhất thay vì được chia thành nhiều thư mục.

Kích hoạt điều này sẽ tăng tốc độ tương tác với tập tin nhưng đi kèm với chi phí tăng nguy cơ gặp hạn chế hệ thống tập tin.

Nó được khuyến nghị chỉ bật nếu có điều kiện sau đúng:

* Nếu bạn biết số lượng mục trong bộ nhớ cache sẽ nhỏ đến mức không gây ra vấn đề trên hệ thống tập tin bạn đang sử dụng.
* Dữ liệu được lưu trữ không tốn kém để tạo ra. Nếu có, việc sử dụng cài đặt mặc định vẫn có thể là lựa chọn tốt hơn vì nó giảm nguy cơ gặp vấn đề.';
$string['task_asyncpurge'] = 'Xóa các thư mục lưu trữ cache cũ không đồng bộ';