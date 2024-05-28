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
 * Strings for component 'block', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core_block
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addblock'] = 'Thêm khối {$a}';
$string['anypagematchingtheabove'] = 'Bất kỳ trang nào khớp với các trang trên';
$string['appearsinsubcontexts'] = 'Xuất hiện trong các ngữ cảnh con';
$string['assignrolesinblock'] = 'Gán vai trò trong khối {$a}';
$string['blocksdrawertoggle'] = 'Ẩn/hiện ngăn khối';
$string['blocksettings'] = 'Cài đặt khối';
$string['bracketfirst'] = '{$a} (đầu tiên)';
$string['bracketlast'] = '{$a} (cuối cùng)';
$string['configureblock'] = 'Cấu hình khối {$a}';
$string['contexts'] = 'Ngữ cảnh trang';
$string['contexts_help'] = 'Ngữ cảnh là các loại trang cụ thể hơn mà khối này có thể được hiển thị trong vị trí khối ban đầu. Bạn sẽ có các tùy chọn khác nhau ở đây tùy thuộc vào vị trí khối ban đầu và vị trí hiện tại của bạn. Ví dụ, bạn có thể giới hạn một khối chỉ xuất hiện trên các trang diễn đàn trong một khóa học bằng cách thêm khối vào khóa học (làm cho nó xuất hiện trên tất cả các trang con), sau đó vào diễn đàn và chỉnh sửa lại cài đặt khối để giới hạn hiển thị chỉ trên các trang diễn đàn.';
$string['createdat'] = 'Vị trí khối ban đầu';
$string['createdat_help'] = 'Vị trí ban đầu nơi khối được tạo ra. Các cài đặt khối có thể khiến nó xuất hiện ở các vị trí (ngữ cảnh) khác trong vị trí ban đầu. Ví dụ, một khối được tạo trên trang khóa học có thể được hiển thị trong các hoạt động trong khóa học đó. Một khối được tạo trên trang chủ có thể được hiển thị khắp trang.';
$string['defaultregion'] = 'Vùng mặc định';
$string['defaultregion_help'] = 'Giao diện có thể định nghĩa một hoặc nhiều vùng khối được đặt tên nơi các khối được hiển thị. Cài đặt này định nghĩa vùng nào bạn muốn khối này xuất hiện mặc định. Vùng này có thể được ghi đè trên các trang cụ thể nếu cần.';
$string['defaultweight'] = 'Trọng lượng mặc định';
$string['defaultweight_help'] = 'Trọng lượng mặc định cho phép bạn chọn vị trí mà bạn muốn khối xuất hiện trong vùng đã chọn, hoặc ở trên cùng hoặc dưới cùng. Vị trí cuối cùng được tính từ tất cả các khối trong vùng đó (ví dụ, chỉ một khối có thể thực sự ở trên cùng). Giá trị này có thể được ghi đè trên các trang cụ thể nếu cần.';
$string['deletecheck'] = 'Xóa khối {$a}?';
$string['deletecheck_modal'] = 'Xóa khối?';
$string['deleteblock'] = 'Xóa khối {$a}';
$string['deleteblockcheck'] = 'Điều này sẽ xóa khối {$a}.';
$string['deleteblockinprogress'] = 'Đang xóa khối {$a}...';
$string['deleteblockwarning'] = '<p>Bạn sắp xóa một khối xuất hiện ở nơi khác.</p><p>Vị trí khối ban đầu: {$a->location}<br />Hiển thị trên các loại trang: {$a->pagetype}</p><p>Bạn có chắc chắn muốn tiếp tục không?</p>';
$string['hideblock'] = 'Ẩn khối {$a}';
$string['hidepanel'] = 'Ẩn bảng';
$string['moveblock'] = 'Di chuyển khối {$a}';
$string['moveblockafter'] = 'Di chuyển khối đến sau khối {$a}';
$string['moveblockbefore'] = 'Di chuyển khối đến trước khối {$a}';
$string['moveblockinregion'] = 'Di chuyển khối đến vùng {$a}';
$string['movingthisblockcancel'] = 'Di chuyển khối này ({$a})';
$string['myblocks'] = 'Các khối của tôi';
$string['onthispage'] = 'Trên trang này';
$string['pagetypes'] = 'Loại trang';
$string['pagetypewarning'] = 'Loại trang đã chỉ định trước đây không còn có thể chọn được. Vui lòng chọn loại trang phù hợp nhất bên dưới.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Ghi lại khi người dùng đã gắn một khối';
$string['privacy:metadata:userpref:hiddenblock'] = 'Ghi lại khi người dùng đã ẩn/thu gọn một khối';
$string['privacy:request:blockisdocked'] = 'Chỉ ra liệu khối có bị gắn không';
$string['privacy:request:blockishidden'] = 'Chỉ ra liệu khối có bị ẩn/thu gọn không';
$string['region'] = 'Vùng';
$string['showblock'] = 'Hiển thị khối {$a}';
$string['showoncontextandsubs'] = 'Hiển thị trên \'{$a}\' và bất kỳ trang nào bên trong nó';
$string['showoncontextonly'] = 'Hiển thị trên \'{$a}\' chỉ';
$string['showonentiresite'] = 'Hiển thị trên toàn trang';
$string['showonfrontpageandsubs'] = 'Hiển thị trên trang chủ và bất kỳ trang nào được thêm vào trang chủ.';
$string['showonfrontpageonly'] = 'Hiển thị trên trang chủ chỉ';
$string['site-*'] = 'Bất kỳ trang cấp cao nào của trang';
$string['subpages'] = 'Chọn các trang';
$string['restrictpagetypes'] = 'Hiển thị trên các loại trang';
$string['thisspecificpage'] = 'Trang cụ thể này';
$string['visible'] = 'Hiển thị';
$string['weight'] = 'Trọng lượng';
$string['wherethisblockappears'] = 'Nơi khối này xuất hiện';
