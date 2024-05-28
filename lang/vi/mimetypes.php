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
 * Strings for component 'mimetypes', language 'en', branch 'MOODLE_20_STABLE'
 *
 * Strings are used to display human-readable name of mimetype. Some mimetypes share the same
 * string. The following attributes are passed in the parameter when processing the string:
 *   $a->ext - filename extension in lower case
 *   $a->EXT - filename extension, capitalized
 *   $a->Ext - filename extension with first capital letter
 *   $a->mimetype - file mimetype
 *   $a->mimetype1 - first chunk of mimetype (before /)
 *   $a->mimetype2 - second chunk of mimetype (after /)
 *   $a->Mimetype, $a->MIMETYPE, $a->Mimetype1, $a->Mimetype2, $a->MIMETYPE1, $a->MIMETYPE2
 *      - the same with capitalized first/all letters
 *
 * @see       get_mimetypes_array()
 * @see       get_mimetype_description()
 * @package   core
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['application/dash_xml'] = 'Dynamic Adaptive Streaming over HTTP (MPEG-DASH)';
$string['application/epub_zip'] = 'Sách điện tử EPUB';
$string['application/json'] = 'Văn bản {$a->MIMETYPE2}';
$string['application/msword'] = 'Tài liệu Word';
$string['application/pdf'] = 'Tài liệu PDF';
$string['application/vnd.moodle.backup'] = 'Sao lưu Moodle';
$string['application/vnd.ms-excel'] = 'Bảng tính Excel';
$string['application/vnd.ms-excel.sheet.macroEnabled.12'] = 'Sổ làm việc Excel 2007 có hỗ trợ macro';
$string['application/vnd.ms-powerpoint'] = 'Bài thuyết trình Powerpoint';
$string['application/vnd.oasis.opendocument.spreadsheet'] = 'Bảng tính OpenDocument';
$string['application/vnd.oasis.opendocument.spreadsheet-template'] = 'Mẫu bảng tính OpenDocument';
$string['application/vnd.oasis.opendocument.text'] = 'Tài liệu văn bản OpenDocument';
$string['application/vnd.oasis.opendocument.text-template'] = 'Mẫu tài liệu văn bản OpenDocument';
$string['application/vnd.oasis.opendocument.text-web'] = 'Mẫu trang web OpenDocument';
$string['application/vnd.openxmlformats-officedocument.presentationml.presentation'] = 'Bài thuyết trình Powerpoint 2007';
$string['application/vnd.openxmlformats-officedocument.presentationml.slideshow'] = 'Trình chiếu Powerpoint 2007';
$string['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'] = 'Bảng tính Excel 2007';
$string['application/vnd.openxmlformats-officedocument.spreadsheetml.template'] = 'Mẫu bảng tính Excel 2007';
$string['application/vnd.openxmlformats-officedocument.wordprocessingml.document'] = 'Tài liệu Word 2007';
$string['application/x-iwork-keynote-sffkey'] = 'Bài thuyết trình iWork Keynote';
$string['application/x-iwork-numbers-sffnumbers'] = 'Bảng tính iWork Numbers';
$string['application/x-iwork-pages-sffpages'] = 'Tài liệu iWork Pages';
$string['application/x-javascript'] = 'Mã nguồn JavaScript';
$string['application/x-mpegURL'] = 'Truyền trực tiếp qua HTTP (HLS)';
$string['application/x-mspublisher'] = 'Tài liệu Publisher';
$string['application/x-shockwave-flash'] = 'Hoạt hình Flash';
$string['application/xhtml_xml'] = 'Tài liệu XHTML';
$string['archive'] = 'Tệp lưu trữ ({$a->EXT})';
$string['audio'] = 'Tệp âm thanh ({$a->EXT})';
$string['default'] = '{$a->mimetype}';
$string['document/unknown'] = 'Tệp';
$string['group:archive'] = 'Tệp lưu trữ';
$string['group:audio'] = 'Tệp âm thanh';
$string['group:document'] = 'Tệp tài liệu';
$string['group:html_audio'] = 'Tệp âm thanh được trình duyệt hỗ trợ';
$string['group:html_track'] = 'Tệp HTML track';
$string['group:html_video'] = 'Tệp video được trình duyệt hỗ trợ';
$string['group:image'] = 'Tệp hình ảnh';
$string['group:media_source'] = 'Phương tiện phát trực tiếp';
$string['group:optimised_image'] = 'Tệp hình ảnh cần tối ưu, như huy hiệu';
$string['group:presentation'] = 'Tệp thuyết trình';
$string['group:sourcecode'] = 'Mã nguồn';
$string['group:spreadsheet'] = 'Tệp bảng tính';
$string['group:video'] = 'Tệp video';
$string['group:web_audio'] = 'Tệp âm thanh trên web';
$string['group:web_file'] = 'Tệp web';
$string['group:web_image'] = 'Tệp hình ảnh trên web';
$string['group:web_video'] = 'Tệp video trên web';
$string['image'] = 'Hình ảnh ({$a->MIMETYPE2})';
$string['image/vnd.microsoft.icon'] = 'Biểu tượng Windows';
$string['text/css'] = 'Bảng kiểu Cascading';
$string['text/csv'] = 'Giá trị phân cách bằng dấu phẩy';
$string['text/html'] = 'Tài liệu HTML';
$string['text/plain'] = 'Tệp văn bản';
$string['text/rtf'] = 'Tài liệu RTF';
$string['text/vtt'] = 'Web Video Text Track';
$string['video'] = 'Tệp video ({$a->EXT})';
