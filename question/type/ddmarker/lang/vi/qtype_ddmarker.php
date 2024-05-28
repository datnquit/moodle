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
 * Language strings for qtype_ddmarker.
 * @package   qtype_ddmarker
 * @copyright 2012 The Open University
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['addmoreitems'] = 'Thêm ô trống cho {no} đánh dấu khác';
$string['alttext'] = 'Văn bản thay thế';
$string['answer'] = 'Đáp án';
$string['bgimage'] = 'Hình nền';
$string['coords'] = 'Tọa độ';
$string['correctansweris'] = 'Đáp án đúng là: {$a}';
$string['draggableimage'] = 'Hình có thể kéo';
$string['draggableitem'] = 'Mục có thể kéo';
$string['draggableitemheader'] = 'Mục có thể kéo {$a}';
$string['draggableitemtype'] = 'Loại';
$string['draggableword'] = 'Văn bản có thể kéo';
$string['dropbackground'] = 'Hình nền để kéo các đánh dấu vào';
$string['dropzone'] = 'Vùng thả {$a}';
$string['dropzoneheader'] = 'Các vùng thả';
$string['dropzones'] = 'Các vùng thả';
$string['dropzones_help'] = 'Các vùng thả có thể được xác định bằng tọa độ, hoặc kéo vào vị trí trong xem trước phía trên.

Việc chọn trước một hình dạng (hình tròn, hình chữ nhật hoặc hình đa giác) sẽ thêm một hình dạng vùng thả mới vào phía trên bên trái của xem trước. Có thể hữu ích khi giảm thiểu phần Đánh dấu để bạn có thể nhìn thấy xem trước trong khi chỉnh sửa Các vùng thả.

Chỉnh sửa một hình dạng bắt đầu bằng một cú nhấp chuột vào hình dạng trong xem trước để hiển thị các cánh quản lý. Bạn có thể di chuyển hình dạng bằng cánh quản lý trung tâm, hoặc điều chỉnh kích thước của hình dạng bằng cánh quản lý đỉnh.

Đối với các đa giác, chỉ cần giữ nút điều khiển (nút lệnh trên Mac) trong khi nhấp vào cánh quản lý đỉnh sẽ thêm một đỉnh mới vào đa giác. Vui lòng giữ một hình dạng đa giác càng đơn giản càng tốt, không bao gồm các đường chéo.

Để biết thông tin, ba hình dạng sử dụng tọa độ như sau:

- Hình tròn: tâm_x, tâm_y; bán kính
ví dụ: <code>80,100;50</code>
- Hình chữ nhật: góc_trên_bên_trái_x, góc_trên_bên_trái_y; chiều_rộng, chiều_cao
ví dụ: <code>20,60;80,40</code>
- Đa giác: x1, y1; x2, y2; ...; xn, yn
ví dụ: <code>20,60;100,60;20,100</code>

Chọn một văn bản Đánh dấu sẽ thêm văn bản đó vào hình dạng trong xem trước.';
$string['formerror_dragrequired'] = 'Bạn phải thêm ít nhất một đánh dấu cho câu hỏi này.';
$string['formerror_droprequired'] = 'Bạn phải xác định ít nhất một vùng thả cho câu hỏi này.';
$string['followingarewrong'] = 'Các đánh dấu được đặt ở vị trí sai: {$a}.';
$string['followingarewrongandhighlighted'] = 'Các đánh dấu được đặt không đúng: {$a}. Các đánh dấu được làm nổi bật bây giờ được hiển thị với các vị trí đúng. Nhấp vào đánh dấu để làm nổi bật vùng cho phép.';
$string['formerror_nobgimage'] = 'Bạn cần chọn một hình ảnh để sử dụng làm nền cho khu vực kéo và thả.';
$string['formerror_noitemselected'] = 'Bạn đã chỉ định một vùng thả nhưng chưa chọn một đánh dấu mà phải kéo vào vùng đó.';
$string['formerror_nosemicolons'] = 'Không có dấu chấm phẩy trong chuỗi tọa độ của bạn. Tọa độ của bạn cho {$a->shape} nên được diễn giải như sau - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Chỉ "{$a}" thẻ được phép trong nhãn cho một đánh dấu.';
$string['formerror_onlyusewholepositivenumbers'] = 'Vui lòng sử dụng chỉ các số nguyên dương để chỉ định tọa độ x, y và / hoặc chiều rộng và chiều cao. Tọa độ của bạn cho {$a->shape} nên được diễn giải như sau - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Đối với một hình dạng đa giác, bạn cần phải chỉ định ít nhất 3 điểm. Tọa độ của bạn cho {$a->shape} nên được diễn giải như sau - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Bạn đã nhập cùng một tọa độ hai lần. Mỗi điểm phải là duy nhất. Tọa độ của bạn cho {$a->shape} nên được diễn giải như sau - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Hình dạng bạn đã xác định vượt

 ra khỏi ranh giới của hình nền.';
$string['formerror_toomanysemicolons'] = 'Có quá nhiều phần được phân tách bằng dấu chấm phẩy trong các tọa độ bạn đã chỉ định. Tọa độ của bạn cho {$a->shape} nên được diễn giải như sau - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Chiều rộng và chiều cao bạn đã chỉ định không thể nhận diện được. Tọa độ của bạn cho {$a->shape} nên được diễn giải như sau - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Các tọa độ x, y bạn đã chỉ định không thể nhận diện được. Tọa độ của bạn cho {$a->shape} nên được diễn giải như sau - {$a->coordsstring}.';
$string['infinite'] = 'Vô hạn';
$string['marker'] = 'Đánh dấu';
$string['marker_n'] = 'Đánh dấu {no}';
$string['markers'] = 'Các đánh dấu';
$string['nolabel'] = 'Không có văn bản nhãn';
$string['noofdrags'] = 'Số lần kéo';
$string['pleasedragatleastonemarker'] = 'Câu trả lời của bạn không đầy đủ; bạn phải đặt ít nhất một đánh dấu trên hình ảnh.';
$string['pluginname'] = 'Kéo và thả đánh dấu';
$string['pluginname_help'] = 'Kéo và thả đánh dấu yêu cầu người tham gia kéo nhãn văn bản và thả chúng vào các vùng thả xác định trên hình nền.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Thêm kéo và thả đánh dấu';
$string['pluginnameediting'] = 'Chỉnh sửa kéo và thả đánh dấu';
$string['pluginnamesummary'] = 'Các đánh dấu được kéo và thả vào một hình ảnh nền.

Lưu ý: Loại câu hỏi này không được truy cập cho người dùng mắc vấn đề về thị giác.';
$string['previewareaheader'] = 'Xem trước';
$string['previewareamessage'] = 'Chọn một tệp hình ảnh nền, nhập nhãn văn bản cho các đánh dấu và xác định các vùng thả trên hình nền mà chúng phải được kéo vào.';
$string['privacy:metadata'] = 'Plugin loại câu hỏi kéo và thả đánh dấu cho phép tác giả câu hỏi đặt các tùy chọn mặc định như tùy chọn người dùng.';
$string['privacy:preference:defaultmark'] = 'Điểm mặc định được đặt cho một câu hỏi cụ thể.';
$string['privacy:preference:penalty'] = 'Mức phạt cho mỗi lần thử không chính xác khi câu hỏi được thực hiện bằng cách sử dụng hành vi \'Tương tác với nhiều lần thử\' hoặc \'Chế độ tương tác\'.';
$string['privacy:preference:shuffleanswers'] = 'Các câu trả lời có nên được xáo trộn tự động hay không.';
$string['refresh'] = 'Làm mới xem trước';
$string['clearwrongparts'] = 'Di chuyển các đánh dấu đặt sai về vị trí khởi đầu mặc định dưới hình ảnh';
$string['shape'] = 'Hình dạng';
$string['shape_circle'] = 'Hình tròn';
$string['shape_circle_lowercase'] = 'hình tròn';
$string['shape_circle_coords'] = 'x,y;r (trong đó x, y là tọa độ của tâm của hình tròn và r là bán kính)';
$string['shape_rectangle'] = 'Hình chữ nhật';
$string['shape_rectangle_lowercase'] = 'hình chữ nhật';
$string['shape_rectangle_coords'] = 'x,y;w,h (trong đó x, y là tọa độ của góc trên bên trái của hình chữ nhật và w và h là chiều rộng và chiều cao của hình chữ nhật)';
$string['shape_polygon'] = 'Hình đa giác';
$string['shape_polygon_lowercase'] = 'hình đa giác';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (trong đó x1, y1 là tọa độ của điểm đầu tiên, x2, y2 là tọa độ của điểm thứ hai v.v. Không cần lặp lại tọa độ của điểm đầu tiên để đóng hình đa giác.)';
$string['showmisplaced'] = 'Làm nổi bật các vùng thả mà không có đánh dấu đúng đã được kéo vào';
$string['shuffleimages'] = 'Xáo trộn các mục kéo mỗi lần thử câu hỏi';
$string['stateincorrectlyplaced'] = 'Chỉ ra các đánh dấu được đặt sai';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Vùng thả {$a}';
$string['ytop'] = 'Trên cùng';