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
 * Strings for component 'tool_xmldb', language 'en', branch 'MOODLE_22_STABLE'
 *
 * @package    tool_xmldb
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['actual'] = 'Thực tế';
$string['addpersistent'] = 'Thêm các trường bắt buộc và liên tục';
$string['aftertable'] = 'Sau bảng:';
$string['back'] = 'Quay lại';
$string['backtomainview'] = 'Quay lại chính';
$string['cannotuseidfield'] = 'Không thể chèn trường "id". Đây là cột tự động đánh số';
$string['completelogbelow'] = '(xem nhật ký hoàn chỉnh của tìm kiếm bên dưới)';
$string['confirmdeletefield'] = 'Bạn có chắc chắn muốn xóa trường:';
$string['confirmdeleteindex'] = 'Bạn có chắc chắn muốn xóa chỉ mục:';
$string['confirmdeletekey'] = 'Bạn có chắc chắn muốn xóa khóa:';
$string['confirmdeletetable'] = 'Bạn có chắc chắn muốn xóa bảng:';
$string['confirmdeletexmlfile'] = 'Bạn có chắc chắn muốn xóa tệp:';
$string['confirmcheckbigints'] = 'Chức năng này sẽ tìm kiếm <a href="https://tracker.moodle.org/browse/MDL-11038">các trường số nguyên có thể sai</a> trong máy chủ Moodle của bạn, tạo tự động (nhưng không thực thi!) các câu lệnh SQL cần thiết để định nghĩa đúng tất cả các số nguyên trong CSDL của bạn.

Sau khi được tạo, bạn có thể sao chép các câu lệnh này và thực thi chúng an toàn với giao diện SQL yêu thích của mình (đừng quên sao lưu dữ liệu trước khi thực hiện).

Rất khuyến khích bạn chạy phiên bản mới nhất (+ phiên bản) của phát hành Moodle của bạn trước khi thực hiện tìm kiếm các số nguyên sai.

Chức năng này không thực hiện bất kỳ hành động nào đối với CSDL (chỉ đọc từ nó), vì vậy có thể thực thi an toàn bất cứ lúc nào.';
$string['confirmcheckdefaults'] = 'Chức năng này sẽ tìm kiếm các giá trị mặc định không nhất quán trong máy chủ Moodle của bạn, tạo (nhưng không thực thi!) các câu lệnh SQL cần thiết để định nghĩa đúng tất cả các giá trị mặc định.

Sau khi được tạo, bạn có thể sao chép các câu lệnh này và thực thi chúng an toàn với giao diện SQL yêu thích của mình (đừng quên sao lưu dữ liệu trước khi thực hiện).

Rất khuyến khích bạn chạy phiên bản mới nhất (+ phiên bản) của phát hành Moodle của bạn trước khi thực hiện tìm kiếm các giá trị mặc định không nhất quán.

Chức năng này không thực hiện bất kỳ hành động nào đối với CSDL (chỉ đọc từ nó), vì vậy có thể thực thi an toàn bất cứ lúc nào.';
$string['confirmcheckforeignkeys'] = 'Chức năng này sẽ tìm kiếm các vi phạm tiềm ẩn của các khóa ngoại được định nghĩa trong các định nghĩa install.xml. (Moodle hiện không tạo ra các ràng buộc khóa ngoại thực tế trong cơ sở dữ liệu, đó là lý do tại sao dữ liệu không hợp lệ có thể tồn tại.)

Rất khuyến khích bạn chạy phiên bản mới nhất (+ phiên bản) của phát hành Moodle của bạn trước khi thực hiện tìm kiếm các vi phạm tiềm ẩn của các khóa ngoại.

Chức năng này không thực hiện bất kỳ hành động nào đối với CSDL (chỉ đọc từ nó), vì vậy có thể thực thi an toàn bất cứ lúc nào.';
$string['confirmcheckindexes'] = 'Chức năng này sẽ tìm kiếm các chỉ mục bị thiếu tiềm ẩn trong máy chủ Moodle của bạn, tạo tự động (nhưng không thực thi!) các câu lệnh SQL cần thiết để giữ mọi thứ được cập nhật.

Sau khi được tạo, bạn có thể sao chép các câu lệnh này và thực thi chúng an toàn với giao diện SQL yêu thích của mình (đừng quên sao lưu dữ liệu trước khi thực hiện).

Rất khuyến khích bạn chạy phiên bản mới nhất (+ phiên bản) của phát hành Moodle của bạn trước khi thực hiện tìm kiếm các chỉ mục bị thiếu.

Chức năng này không thực hiện bất kỳ hành động nào đối với CSDL (chỉ đọc từ nó), vì vậy có thể thực thi an toàn bất cứ lúc nào.';
$string['confirmcheckoraclesemantics'] = 'Chức năng này sẽ tìm kiếm các <a href="https://tracker.moodle.org/browse/MDL-29322">cột varchar2 của Oracle sử dụng ngữ nghĩa BYTE</a> trong máy chủ Moodle của bạn, tạo tự động (nhưng không thực thi!) các câu lệnh SQL cần thiết để chuyển đổi tất cả các cột để sử dụng ngữ nghĩa CHAR thay thế (tốt hơn cho khả năng tương thích đa CSDL và tăng chiều dài nội dung tối đa).

Sau khi được tạo, bạn có thể sao chép các câu lệnh này và thực thi chúng an toàn với giao diện SQL yêu thích của mình (đừng quên sao lưu dữ liệu trước khi thực hiện).

Rất khuyến khích bạn chạy phiên bản mới nhất (+ phiên bản) của phát hành Moodle của bạn trước khi thực hiện tìm kiếm các ngữ nghĩa BYTE.

Chức năng này không thực hiện bất kỳ hành động nào đối với CSDL (chỉ đọc từ nó), vì vậy có thể thực thi an toàn bất cứ lúc nào.';
$string['confirmrevertchanges'] = 'Bạn có chắc chắn muốn hoàn tác các thay đổi đã thực hiện trên:';
$string['create'] = 'Tạo';
$string['createtable'] = 'Tạo bảng:';
$string['defaultincorrect'] = 'Mặc định không chính xác';
$string['delete'] = 'Xóa';
$string['delete_field'] = 'Xóa trường';
$string['delete_index'] = 'Xóa chỉ mục';
$string['delete_key'] = 'Xóa khóa';
$string['delete_table'] = 'Xóa bảng';
$string['delete_xml_file'] = 'Xóa tệp XML';
$string['doc'] = 'Tài liệu';
$string['docindex'] = 'Chỉ mục tài liệu:';
$string['documentationintro'] = 'Tài liệu này được tạo tự động từ định nghĩa cơ sở dữ liệu XMLDB. Nó chỉ có sẵn bằng tiếng Anh.';
$string['down'] = 'Xuống';
$string['duplicate'] = 'Sao chép';
$string['duplicatefieldname'] = 'Một trường khác với tên đó tồn tại';
$string['duplicatefieldsused'] = 'Trường sao chép đã sử dụng';
$string['duplicatekeyname'] = 'Một khóa khác với tên đó tồn tại';
$string['duplicatetablename'] = 'Một bảng khác với tên đó tồn tại';
$string['edit'] = 'Chỉnh sửa';
$string['edit_field'] = 'Chỉnh sửa trường';
$string['edit_field_save'] = 'Lưu trường';
$string['edit_index'] = 'Chỉnh sửa chỉ mục';
$string['edit_index_save'] = 'Lưu chỉ mục';
$string['edit_key'] = 'Chỉnh sửa khóa';
$string['edit_key_save'] = 'Lưu khóa';
$string['edit_table'] = 'Chỉnh sửa bảng';
$string['edit_table_save'] = 'Lưu bảng';
$string['edit_xml_file'] = 'Chỉnh sửa tệp XML';
$string['enumvaluesincorrect'] = 'Giá trị không chính xác cho trường enum';
$string['expected'] = 'Dự kiến';
$string['extensionrequired'] = 'Xin lỗi - tiện ích mở rộng PHP \'{$a}\' là bắt buộc cho hành động này. Vui lòng cài đặt tiện ích mở rộng nếu bạn muốn sử dụng tính năng này.';
$string['extraindexesfound'] = 'Tìm thấy chỉ mục bổ sung';
$string['field'] = 'Trường';
$string['fieldnameempty'] = 'Tên trường trống';
$string['fields'] = 'Các trường';
$string['fieldsnotintable'] = 'Trường không tồn tại trong bảng';
$string['fieldsusedinindex'] = 'Trường này được sử dụng làm chỉ mục';
$string['fieldsusedinkey'] = 'Trường này được sử dụng làm khóa.';
$string['filemodifiedoutfromeditor'] = 'Cảnh báo: Tệp đã được sửa đổi cục bộ khi sử dụng Trình chỉnh sửa XMLDB. Lưu sẽ ghi đè các thay đổi cục bộ.';
$string['filenotwriteable'] = 'Tệp không thể ghi';
$string['fkunknownfield'] = 'Khóa ngoại {$a->keyname} trên bảng {$a->tablename} chỉ đến một trường không tồn tại {$a->reffield} trong bảng tham chiếu {$a->reftable}.';
$string['fkunknowntable'] = 'Khóa ngoại {$a->keyname} trên bảng {$a->tablename} chỉ đến một bảng không tồn tại {$a->reftable}.';
$string['fkviolationdetails'] = 'Khóa ngoại {$a->keyname} trên bảng {$a->tablename} bị vi phạm bởi {$a->numviolations} trong số {$a->numrows} hàng.';
$string['floatincorrectdecimals'] = 'Số thập phân không chính xác cho trường float';
$string['floatincorrectlength'] = 'Chiều dài không chính xác cho trường float';
$string['float2numbernote'] = 'Lưu ý: Mặc dù các trường "float" được hỗ trợ 100% bởi XMLDB, nhưng khuyến khích chuyển sang các trường "number".';
$string['generate_all_documentation'] = 'Tất cả tài liệu';
$string['generate_documentation'] = 'Tạo tài liệu';
$string['gotolastused'] = 'Đi tới tệp sử dụng gần nhất';
$string['change'] = 'Thay đổi';
$string['charincorrectlength'] = 'Chiều dài không chính xác cho trường char';
$string['checkbigints'] = 'Kiểm tra số nguyên';
$string['check_bigints'] = 'Tìm các số nguyên không chính xác trong CSDL';
$string['checkdefaults'] = 'Kiểm tra mặc định';
$string['check_defaults'] = 'Tìm giá trị mặc định không nhất quán';
$string['checkforeignkeys'] = 'Kiểm tra khóa ngoại';
$string['check_foreign_keys'] = 'Tìm vi phạm khóa ngoại';
$string['checkindexes'] = 'Kiểm tra chỉ mục';
$string['check_indexes'] = 'Tìm chỉ mục bị thiếu trong CSDL';
$string['checkoraclesemantics'] = 'Kiểm tra ngữ nghĩa';
$string['check_oracle_semantics'] = 'Tìm ngữ nghĩa chiều dài không chính xác';
$string['duplicateindexname'] = 'Tên chỉ mục trùng lặp';
$string['incorrectfieldname'] = 'Tên không chính xác';
$string['index'] = 'Chỉ mục';
$string['indexes'] = 'Các chỉ mục';
$string['indexnameempty'] = 'Tên chỉ mục trống';
$string['integerincorrectlength'] = 'Chiều dài không chính xác cho trường số nguyên';
$string['incorrectindexname'] = 'Tên chỉ mục không chính xác';
$string['incorrectkeyname'] = 'Tên khóa không chính xác';
$string['incorrecttablename'] = 'Tên bảng không chính xác';
$string['key'] = 'Khóa';
$string['keynameempty'] = 'Tên khóa không thể để trống';
$string['keys'] = 'Các khóa';
$string['listreservedwords'] = 'Danh sách các từ dành riêng<br />(được sử dụng để giữ <a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">các từ dành riêng XMLDB</a> được cập nhật)';
$string['load'] = 'Tải';
$string['main_view'] = 'Chế độ xem chính';
$string['masterprimaryuniqueordernomatch'] = 'Các trường trong khóa ngoại của bạn phải được liệt kê theo cùng thứ tự như chúng được liệt kê trong KHÓA DUY NHẤT trên bảng tham chiếu.';
$string['missing'] = 'Thiếu';
$string['missingindexes'] = 'Tìm thấy chỉ mục bị thiếu';
$string['mustselectonefield'] = 'Bạn phải chọn một trường để xem các hành động liên quan đến trường!';
$string['mustselectoneindex'] = 'Bạn phải chọn một chỉ mục để xem các hành động liên quan đến chỉ mục!';
$string['mustselectonekey'] = 'Bạn phải chọn một khóa để xem các hành động liên quan đến khóa!';
$string['newfield'] = 'Trường mới';
$string['newindex'] = 'Chỉ mục mới';
$string['newkey'] = 'Khóa mới';
$string['newtable'] = 'Bảng mới';
$string['newtablefrommysql'] = 'Bảng mới từ MySQL';
$string['new_table_from_mysql'] = 'Bảng mới từ MySQL';
$string['nofieldsspecified'] = 'Không có trường nào được chỉ định';
$string['nomasterprimaryuniquefound'] = 'Các cột mà khóa ngoại của bạn tham chiếu phải được bao gồm trong KHÓA chính hoặc duy nhất trong bảng tham chiếu. Lưu ý rằng cột nằm trong CHỈ MỤC DUY NHẤT là không đủ.';
$string['nomissingorextraindexesfound'] = 'Không tìm thấy chỉ mục bị thiếu hoặc bổ sung nào, không cần hành động tiếp theo.';
$string['noreffieldsspecified'] = 'Không có trường tham chiếu nào được chỉ định';
$string['noreftablespecified'] = 'Bảng tham chiếu được chỉ định không tìm thấy';
$string['noviolatedforeignkeysfound'] = 'Không tìm thấy khóa ngoại vi phạm';
$string['nowrongdefaultsfound'] = 'Không tìm thấy giá trị mặc định không nhất quán nào, CSDL của bạn không cần hành động tiếp theo.';
$string['nowrongintsfound'] = 'Không tìm thấy số nguyên sai nào, CSDL của bạn không cần hành động tiếp theo.';
$string['nowrongoraclesemanticsfound'] = 'Không tìm thấy các cột Oracle sử dụng ngữ nghĩa BYTE nào, CSDL của bạn không cần hành động tiếp theo.';
$string['numberincorrectdecimals'] = 'Số thập phân không chính xác cho trường number';
$string['numberincorrectlength'] = 'Chiều dài không chính xác cho trường number';
$string['numberincorrectwholepart'] = 'Phần số nguyên quá lớn cho trường number';
$string['pendingchanges'] = 'Lưu ý: Bạn đã thực hiện thay đổi đối với tệp này. Chúng có thể được lưu bất cứ lúc nào.';
$string['pendingchangescannotbesaved'] = 'Có các thay đổi trong tệp này nhưng không thể lưu! Vui lòng xác minh rằng cả thư mục và "install.xml" trong đó có quyền ghi cho máy chủ web.';
$string['pendingchangescannotbesavedreload'] = 'Có các thay đổi trong tệp này nhưng không thể lưu! Vui lòng xác minh rằng cả thư mục và "install.xml" trong đó có quyền ghi cho máy chủ web. Sau đó tải lại trang này và bạn nên có thể lưu những thay đổi đó.';
$string['persistentfieldsconfirm'] = 'Bạn có muốn thêm các trường sau: ';
$string['persistentfieldscomplete'] = 'Các trường sau đã được thêm: ';
$string['persistentfieldsexist'] = 'Các trường sau đã tồn tại: ';
$string['pluginname'] = 'Trình chỉnh sửa XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Các khóa chính không thể là null';
$string['reconcilefiles'] = 'Đối chiếu tệp XMLDB';
$string['reconcile_files'] = 'Tìm kiếm tệp XMLDB cần đối chiếu';
$string['reconcile_files_intro'] = 'Chức năng này xem qua nội dung của tất cả các tệp XMLDB để xác minh rằng chúng khớp với kết quả của việc tạo chúng từ trình chỉnh sửa XMLDB.

Danh sách các tệp cần đối chiếu (tạo lại) sẽ được hiển thị và trình chỉnh sửa XMLDB có thể được sử dụng để sửa chúng.';
$string['reconcile_files_no'] = 'Tất cả các tệp đều OK. Không cần đối chiếu.';
$string['reconcile_files_yes'] = 'Đã tìm thấy tệp cần đối chiếu: ';
$string['reserved'] = 'Dành riêng';
$string['reservedwords'] = 'Các từ dành riêng';
$string['revert'] = 'Hoàn tác';
$string['revert_changes'] = 'Hoàn tác các thay đổi';
$string['save'] = 'Lưu';
$string['searchresults'] = 'Kết quả tìm kiếm';
$string['selectaction'] = 'Chọn hành động:';
$string['selectdb'] = 'Chọn cơ sở dữ liệu:';
$string['selectfieldkeyindex'] = 'Chọn trường/khóa/chỉ mục:';
$string['selectonecommand'] = 'Vui lòng chọn một hành động từ danh sách để xem mã PHP';
$string['selectonefieldkeyindex'] = 'Vui lòng chọn một trường/khóa/chỉ mục từ danh sách để xem mã PHP';
$string['selecttable'] = 'Chọn bảng:';
$string['table'] = 'Bảng';
$string['tablenameempty'] = 'Tên bảng không thể để trống';
$string['tables'] = 'Các bảng';
$string['unknownfield'] = 'Tham chiếu đến một trường không xác định';
$string['unknowntable'] = 'Tham chiếu đến một bảng không xác định';
$string['unload'] = 'Tải ra';
$string['up'] = 'Lên';
$string['view'] = 'Xem';
$string['viewedited'] = 'Xem đã chỉnh sửa';
$string['vieworiginal'] = 'Xem gốc';
$string['viewphpcode'] = 'Xem mã PHP';
$string['view_reserved_words'] = 'Xem từ dành riêng';
$string['viewsqlcode'] = 'Xem mã SQL';
$string['view_structure_php'] = 'Xem cấu trúc PHP';
$string['view_structure_sql'] = 'Xem cấu trúc SQL';
$string['view_table_php'] = 'Xem bảng PHP';
$string['view_table_sql'] = 'Xem bảng SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Khóa ngoại bị vi phạm';
$string['violatedforeignkeysfound'] = 'Tìm thấy khóa ngoại bị vi phạm';
$string['violations'] = 'Vi phạm';
$string['wrong'] = 'Sai';
$string['wrongdefaults'] = 'Tìm thấy mặc định sai';
$string['wrongints'] = 'Tìm thấy số nguyên sai';
$string['wronglengthforenum'] = 'Chiều dài không chính xác cho trường enum';
$string['wrongnumberofreffields'] = 'Số lượng trường tham chiếu sai';
$string['wrongreservedwords'] = 'Hiện tại sử dụng từ dành riêng<br />(lưu ý rằng tên bảng không quan trọng nếu sử dụng $CFG->prefix)';
$string['wrongoraclesemantics'] = 'Tìm thấy ngữ nghĩa BYTE sai của Oracle';
$string['yesextraindexesfound'] = 'Tìm thấy các chỉ mục bổ sung sau.';
$string['yesmissingindexesfound'] = '<p>Một số chỉ mục bị thiếu đã được tìm thấy trong CSDL của bạn. Đây là chi tiết của chúng và các câu lệnh SQL cần thiết để tạo tất cả chúng với giao diện SQL yêu thích của bạn. Nhớ sao lưu dữ liệu trước!</p>
<p>Sau khi thực hiện, rất khuyến khích chạy lại tiện ích này để kiểm tra xem không còn chỉ mục nào bị thiếu nữa.</p>';
$string['yeswrongdefaultsfound'] = '<p>Một số giá trị mặc định không nhất quán đã được tìm thấy trong CSDL của bạn. Đây là chi tiết của chúng và các câu lệnh SQL cần thiết để sửa tất cả chúng với giao diện SQL yêu thích của bạn. Nhớ sao lưu dữ liệu trước!</p>
<p>Sau khi thực hiện, rất khuyến khích chạy lại tiện ích này để kiểm tra xem không còn giá trị mặc định nào không nhất quán nữa.</p>';
$string['yeswrongintsfound'] = '<p>Một số số nguyên sai đã được tìm thấy trong CSDL của bạn. Đây là chi tiết của chúng và các câu lệnh SQL cần thiết để sửa chúng với giao diện SQL yêu thích của bạn. Nhớ sao lưu dữ liệu trước!</p>
<p>Sau khi sửa chúng, rất khuyến khích chạy lại tiện ích này để kiểm tra xem không còn số nguyên nào sai nữa.</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>Một số cột Oracle sử dụng ngữ nghĩa BYTE đã được tìm thấy trong CSDL của bạn. Đây là chi tiết của chúng và các câu lệnh SQL cần thiết để chuyển đổi tất cả với giao diện SQL yêu thích của bạn. Nhớ sao lưu dữ liệu trước!</p>
<p>Sau khi thực hiện, rất khuyến khích chạy lại tiện ích này để kiểm tra xem không còn ngữ nghĩa sai nữa.</p>';
$string['privacy:metadata'] = 'Trình chỉnh sửa XMLDB không lưu trữ bất kỳ dữ liệu cá nhân nào.';
