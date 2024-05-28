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
 * Strings for component 'tool_generator', language 'en'.
 *
 * @package    tool_dbtransfer
 * @copyright  2011 Petr Skoda {@link http://skodak.org/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['clidriverlist'] = 'Các trình điều khiển cơ sở dữ liệu có sẵn cho việc di chuyển';
$string['cliheading'] = 'Di chuyển cơ sở dữ liệu - đảm bảo không ai truy cập vào máy chủ trong quá trình di chuyển!';
$string['climigrationnotice'] = 'Đang di chuyển cơ sở dữ liệu, vui lòng chờ đến khi quá trình di chuyển hoàn tất và quản trị viên cập nhật cấu hình và xóa tệp $CFG->dataroot/climaintenance.html.';
$string['convertinglogdisplay'] = 'Chuyển đổi hiển thị nhật ký';
$string['dbexport'] = 'Xuất cơ sở dữ liệu';
$string['dbtransfer'] = 'Di chuyển cơ sở dữ liệu';
$string['enablemaintenance'] = 'Kích hoạt chế độ bảo trì';
$string['enablemaintenance_help'] = 'Tùy chọn này kích hoạt chế độ bảo trì trong và sau khi di chuyển cơ sở dữ liệu, ngăn chặn mọi người truy cập cho đến khi quá trình di chuyển hoàn tất. Lưu ý rằng quản trị viên phải xóa tệp $CFG->dataroot/climaintenance.html sau khi cập nhật cấu hình trong config.php để tiếp tục hoạt động bình thường.';
$string['exportdata'] = 'Xuất dữ liệu';
$string['notargetconectexception'] = 'Không thể kết nối đến cơ sở dữ liệu đích, xin lỗi.';
$string['options'] = 'Tùy chọn';
$string['pluginname'] = 'Chuyển cơ sở dữ liệu';
$string['targetdatabase'] = 'Cơ sở dữ liệu đích';
$string['targetdatabasenotempty'] = 'Cơ sở dữ liệu đích không được chứa bất kỳ bảng nào có tiền tố đã cho!';
$string['transferdata'] = 'Chuyển dữ liệu';
$string['transferdbintro'] = 'Kịch bản này sẽ chuyển toàn bộ nội dung của cơ sở dữ liệu này sang một máy chủ cơ sở dữ liệu khác. Thường được sử dụng để di chuyển dữ liệu sang loại cơ sở dữ liệu khác.';
$string['transferdbtoserver'] = 'Chuyển cơ sở dữ liệu Moodle này sang máy chủ khác';
$string['transferringdbto'] = 'Đang chuyển cơ sở dữ liệu {$a->dbtypefrom} sang cơ sở dữ liệu {$a->dbtype} "{$a->dbname}" trên "{$a->dbhost}"';
$string['privacy:metadata'] = 'Plugin Chuyển cơ sở dữ liệu không lưu trữ bất kỳ dữ liệu cá nhân nào.';
