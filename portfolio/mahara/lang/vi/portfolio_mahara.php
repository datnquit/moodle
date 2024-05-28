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
 * Strings for component 'portfolio_mahara', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   portfolio_mahara
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['enableleap2a'] = 'Kích hoạt hỗ trợ Leap2A portfolio (yêu cầu Mahara 1.3 hoặc cao hơn)';
$string['err_invalidhost'] = 'MNet host không hợp lệ';
$string['err_invalidhost_help'] = 'Plugin này được cấu hình sai để trỏ tới một MNet host không hợp lệ (hoặc đã bị xóa). Plugin này dựa vào các đồng nghiệp Moodle Networking với IDP SSO được công bố, SSO_SP được đăng ký và portfolio được đăng ký <b>và</b> được công bố.';
$string['err_networkingoff'] = 'MNet đã tắt';
$string['err_networkingoff_help'] = 'Xác thực MNet hiện đang bị vô hiệu hóa. Vui lòng kích hoạt nó trước khi cố gắng cấu hình plugin này. Bất kỳ phiên bản nào của plugin này đã bị ẩn cho đến khi MNet được kích hoạt. Sau đó, chúng sẽ cần phải được đặt lại thành hiển thị bằng tay.';
$string['err_nomnetauth'] = 'Plugin xác thực MNet bị vô hiệu hóa';
$string['err_nomnetauth_help'] = 'Plugin xác thực MNet bị vô hiệu hóa, nhưng nó là cần thiết cho dịch vụ này';
$string['err_nomnethosts'] = 'Dựa vào MNet';
$string['err_nomnethosts_help'] = 'Plugin này dựa vào các đồng nghiệp MNet với IDP SSO được công bố, SSO SP được đăng ký, các dịch vụ portfolio được công bố <b>và</b> được đăng ký cũng như plugin xác thực MNet. Bất kỳ phiên bản nào của plugin này đã bị ẩn cho đến khi các điều kiện này được đáp ứng. Sau đó, chúng sẽ cần phải được đặt lại thành hiển thị bằng tay.';
$string['failedtojump'] = 'Không thể bắt đầu giao tiếp với máy chủ từ xa';
$string['failedtoping'] = 'Không thể bắt đầu giao tiếp với máy chủ từ xa: {$a}';
$string['mnethost'] = 'MNet host';
$string['mnet_nofile'] = 'Không tìm thấy tệp trong đối tượng chuyển - lỗi kỳ lạ';
$string['mnet_nofilecontents'] = 'Tìm thấy tệp trong đối tượng chuyển, nhưng không thể lấy nội dung - lỗi kỳ lạ: {$a}';
$string['mnet_noid'] = 'Không thể tìm thấy bản ghi chuyển phù hợp cho mã thông báo này';
$string['mnet_notoken'] = 'Không thể tìm thấy mã thông báo phù hợp với chuyển này';
$string['mnet_wronghost'] = 'Máy chủ từ xa không khớp với bản ghi chuyển cho mã thông báo này';
$string['pf_description'] = 'Cho phép người dùng đẩy nội dung Moodle lên máy chủ này<br />Đăng ký <b>và</b> công bố dịch vụ này để cho phép người dùng xác thực trên trang của bạn đẩy nội dung tới {$a}<br /><ul><li><em>Phụ thuộc</em>: Bạn cũng phải <strong>công bố</strong> dịch vụ SSO (Nhà cung cấp nhận diện) tới {$a}.</li><li><em>Phụ thuộc</em>: Bạn cũng phải <strong>đăng ký</strong> dịch vụ SSO (Nhà cung cấp dịch vụ) trên {$a}</li><li><em>Phụ thuộc</em>: Bạn cũng phải kích hoạt plugin xác thực MNet.</li></ul><br />';
$string['pf_name'] = 'Dịch vụ portfolio';
$string['pluginname'] = 'Mahara ePortfolio';
$string['privacy:metadata'] = 'Plugin này gửi dữ liệu ra bên ngoài tới ứng dụng Mahara được liên kết. Nó không lưu trữ dữ liệu tại địa phương.';
$string['privacy:metadata:data'] = 'Dữ liệu cá nhân được truyền qua từ hệ thống con của portfolio.';
$string['senddisallowed'] = 'Bạn không thể chuyển tệp tới Mahara vào lúc này';
$string['url'] = 'URL';
