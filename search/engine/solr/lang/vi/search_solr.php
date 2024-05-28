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
 * Strings for component 'search_solr'.
 *
 * @package   search_solr
 * @copyright Prateek Sachan {@link http://prateeksachan.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['connectionerror'] = 'Máy chủ Solr được chỉ định không khả dụng hoặc chỉ mục đã được chỉ định không tồn tại';
$string['connectionsettings'] = 'Cài đặt kết nối';
$string['errorcreatingschema'] = 'Lỗi khi tạo schema Solr: {$a}';
$string['errorvalidatingschema'] = 'Lỗi khi xác thực schema Solr: trường {$a->fieldname} không tồn tại. Vui lòng <a href="{$a->setupurl}">truy cập vào đây</a> để thiết lập các trường cần thiết.';
$string['errorsolr'] = 'Hệ thống tìm kiếm Solr báo cáo lỗi: {$a}';
$string['extensionerror'] = 'Phần mở rộng PHP Apache Solr chưa được cài đặt. Vui lòng kiểm tra tài liệu.';
$string['fileindexing'] = 'Bật chỉ mục tệp';
$string['fileindexing_help'] = 'Nếu cài đặt Solr của bạn hỗ trợ, tính năng này cho phép Moodle gửi tệp để chỉ mục.<br/>
Bạn cần phải chỉ mục lại tất cả nội dung trang web sau khi kích hoạt tùy chọn này để tất cả các tệp được thêm vào.';
$string['fileindexsettings'] = 'Cài đặt chỉ mục tệp';
$string['maxindexfilekb'] = 'Kích thước tệp tối đa để chỉ mục (kB)';
$string['maxindexfilekb_help'] = 'Các tệp lớn hơn số lượng kilobyte này sẽ không được bao gồm trong chỉ mục tìm kiếm. Nếu đặt là số không, các tệp bất kỳ kích thước nào cũng sẽ được chỉ mục.';
$string['minimumsolr4'] = 'Solr 4.0 là phiên bản tối thiểu yêu cầu cho Moodle';
$string['missingconfig'] = 'Máy chủ Apache Solr của bạn chưa được cấu hình trong Moodle.';
$string['multivaluedfield'] = 'Trường "{$a}" trả về một mảng thay vì một giá trị đơn. Vui lòng xóa chỉ mục hiện tại, tạo một chỉ mục mới và chạy setup_schema.php trước khi chỉ mục dữ liệu trong Solr.';
$string['nodatafromserver'] = 'Không có dữ liệu từ máy chủ';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Plugin này gửi dữ liệu ra ngoài tới một hệ thống tìm kiếm Solr liên kết. Nó không lưu trữ dữ liệu cục bộ.';
$string['privacy:metadata:data'] = 'Dữ liệu cá nhân được truyền qua từ hệ thống tìm kiếm.';
$string['schemafieldautocreated'] = 'Trường "{$a}" đã tồn tại trong schema Solr. Bạn có thể đã quên chạy tập lệnh này trước khi chỉ mục dữ liệu và các trường được tự động tạo bởi Solr. Vui lòng xóa chỉ mục hiện tại, tạo một chỉ mục mới và chạy setup_schema.php lại trước khi chỉ mục dữ liệu trong Solr.';
$string['schemasetupfromsolr5'] = 'Phiên bản máy chủ Solr của bạn thấp hơn 5.0. Tập lệnh này chỉ có thể thiết lập schema của bạn nếu phiên bản Solr của bạn là 5.0 hoặc cao hơn. Bạn cần phải thiết lập các trường trong schema của bạn theo \\search_solr\\document::get_default_fields_definition() một cách thủ công.';
$string['searchinfo'] = 'Truy vấn tìm kiếm';
$string['searchinfo_help'] = 'Trường được tìm kiếm có thể được chỉ định bằng cách thêm tiền tố \'title:\', \'content:\', \'name:\', hoặc \'intro:\' vào trước truy vấn tìm kiếm. Ví dụ, tìm kiếm cho \'title:news\' sẽ trả về kết quả có từ \'news\' trong tiêu đề.

Các toán tử logic (\'AND\', \'OR\', \'NOT\') có thể được sử dụng để kết hợp hoặc loại trừ các từ khóa.

Các ký tự đại diện (\'*\' hoặc \'?\') có thể được sử dụng để đại diện cho các ký tự trong truy vấn tìm kiếm.';
$string['setupok'] = 'Schema đã sẵn sàng để sử dụng.';
$string['solrauthpassword'] = 'Mật khẩu xác thực HTTP';
$string['solrauthuser'] = 'Tên người dùng xác thực HTTP';
$string['solrindexname'] = 'Tên chỉ mục';
$string['solrhttpconnectionport'] = 'Cổng';
$string['solrhttpconnectiontimeout'] = 'Thời gian chờ kết nối';
$string['solrhttpconnectiontimeout_desc'] = 'Thời gian chờ kết nối HTTP là thời gian tối đa tính bằng giây cho thao tác truyền dữ liệu HTTP.';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Hệ thống tìm kiếm Solr không phải là hệ thống tìm kiếm được cấu hình';
$string['solrserverhostname'] = 'Tên máy chủ';
$string['solrserverhostname_desc'] = 'Tên miền của máy chủ Solr.';
$string['solrsecuremode'] = 'Chế độ bảo mật';
$string['solrsetting'] = 'Cài đặt Solr';
$string['solrsslcainfo'] = 'Tên tệp chứa chứng chỉ CA SSL';
$string['solrsslcainfo_desc'] = 'Tên tệp chứa một hoặc nhiều chứng chỉ CA để xác minh với đồng đối tác';
$string['solrsslcapath'] = 'Đường dẫn chứa chứng chỉ CA SSL';
$string['solrsslcapath_desc'] = 'Đường dẫn thư mục chứa nhiều chứng chỉ CA để xác minh với đồng đối tác';
$string['solrsslcert'] = 'Chứng chỉ SSL';
$string['solrsslcert_desc'] = 'Tên tệp đến một chứng chỉ riêng PEM';
$string['solrsslkey'] = 'Khóa SSL';
$string['solrsslkey_desc'] = 'Tên tệp đến một khóa riêng PEM';
$string['solrsslkeypassword'] = 'Mật khẩu khóa SSL';
$string['solrsslkeypassword_desc'] = 'Mật khẩu cho tệp khóa riêng PEM';
