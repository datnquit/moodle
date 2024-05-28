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
 * Strings for filter_displayh5p
 *
 * @package    filter_displayh5p
 * @copyright  2019 Victor Deniz <victor@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['allowedsourceslist'] = 'Nguồn được phép';
$string['allowedsourceslistdesc'] = 'Danh sách các URL mà người dùng có thể nhúng nội dung H5P. Nếu không có URL nào được chỉ định, tất cả các URL sẽ vẫn là liên kết và không được hiển thị dưới dạng nội dung H5P nhúng.

\'[id]\' là một placeholder cho ID nội dung H5P trong nguồn bên ngoài.
Ví dụ:

- H5P.com: https://[xxxxxx].h5p.com/content/[id]
- Wordpress: http://myserver/wp-admin/admin-ajax.php?action=h5p_embed&id=[id]';
$string['filtername'] = 'Hiển thị H5P';
$string['privacy:metadata'] = 'Bộ lọc hiển thị H5P không lưu trữ bất kỳ dữ liệu cá nhân nào.';
