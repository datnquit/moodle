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
 * Redis Cache Store - English language strings
 *
 * @package   cachestore_redis
 * @copyright 2013 Adam Durana
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Không nén.';
$string['compressor_php_gzip'] = 'Sử dụng nén gzip.';
$string['compressor_php_zstd'] = 'Sử dụng nén Zstandard.';
$string['encrypt_connection'] = 'Sử dụng mã hóa TLS.';
$string['encrypt_connection_help'] = 'Sử dụng TLS để kết nối đến Redis. Không sử dụng \'tls://\' trong tên máy chủ cho Redis, thay vào đó, sử dụng tùy chọn này.';
$string['ca_file'] = 'Đường dẫn tập tin CA';
$string['ca_file_help'] = 'Vị trí của tập tin Certificate Authority trên hệ thống tệp cục bộ';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Tiền tố key';
$string['prefix_help'] = 'Tiền tố này được sử dụng cho tất cả tên key trên máy chủ Redis.
* Nếu bạn chỉ có một phiên bản Moodle sử dụng máy chủ này, bạn có thể để giá trị này mặc định.
* Do hạn chế độ dài key, tối đa 5 ký tự được cho phép.';
$string['prefixinvalid'] = 'Tiền tố không hợp lệ. Bạn chỉ có thể sử dụng a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'Trình cắm cachestore Redis lưu trữ dữ liệu tạm thời là một phần của chức năng lưu trữ cache của nó. Dữ liệu này được lưu trữ trên một máy chủ Redis nơi dữ liệu thường xuyên bị xóa.';
$string['privacy:metadata:redis:data'] = 'Các dữ liệu khác nhau được lưu trữ trong bộ nhớ cache';
$string['serializer_igbinary'] = 'Bộ trình serial igbinary.';
$string['serializer_php'] = 'Trình serial mặc định của PHP.';
$string['server'] = 'Máy chủ';
$string['server_help'] = 'Đây là máy chủ tên miền, địa chỉ IP hoặc đường dẫn ổ cắm Unix của máy chủ Redis để sử dụng.

Một số giá trị mẫu:

* testredis.abc.com - Để kết nối đến một máy chủ Redis bằng tên miền (Cổng 6379 theo mặc định).
* testredis.abc.com:1234 - Để kết nối đến một máy chủ Redis bằng tên miền với một cổng cụ thể.
* 1.2.3.4 - Để kết nối đến một máy chủ Redis bằng địa chỉ IP (Cổng 6379 theo mặc định).
* 1.2.3.4:1234 - Để kết nối đến một máy chủ Redis bằng địa chỉ IP với một cổng cụ thể.
* unix:///var/redis.sock - Để kết nối đến một máy chủ Redis bằng cách sử dụng ổ cắm Unix.
* /var/redis.sock - Để kết nối đến một máy chủ Redis bằng cách sử dụng ổ cắm Unix (định dạng thay thế).

Xem <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Chấp nhận Kết nối của Khách hàng</a> và <a href="https://redis.io/resources/clients/#php" target="_new">Khách hàng PHP của Redis</a> để biết thêm thông tin.';
$string['password'] = 'Mật khẩu';
$string['password_help'] = 'Đây là mật khẩu của máy chủ Redis.';
$string['task_ttl'] = 'Giải phóng bộ nhớ được sử dụng bởi các mục hết hạn trong các cache Redis';
$string['test_server'] = 'Máy chủ kiểm tra';
$string['test_server_desc'] = 'Máy chủ Redis để sử dụng cho việc kiểm tra.

Một số giá trị mẫu:

* testredis.abc.com - Để kết nối đến một máy chủ Redis bằng tên miền (Cổng 6379 theo mặc định).
* testredis.abc.com:1234 - Để kết nối đến một máy chủ Redis bằng tên miền với một cổng cụ thể.
* 1.2.3.4 - Để kết nối đến một máy chủ Redis bằng địa chỉ IP (Cổng 6379 theo mặc định).
* 1.2.3.4:1234 - Để kết nối đến một máy chủ Redis bằng địa chỉ IP với một cổng cụ thể.
* unix:///var/redis.sock - Để kết nối đến một máy chủ Redis bằng cách sử dụng ổ cắm Unix.
* /var/redis.sock - Để kết nối đến một máy chủ Redis bằng cách sử dụng ổ cắm Unix (định dạng thay thế).

Xem <a href="https://redis.io/docs/reference/clients/#accepting-client-connections" target="_new">Chấp nhận Kết nối của Khách hàng</a> và <a href="https://redis.io/resources/clients/#php" target="_new">Khách hàng PHP của Redis</a> để biết thêm thông tin.';
$string['test_password'] = 'Mật khẩu máy chủ kiểm tra';
$string['test_password_desc'] = 'Mật khẩu máy chủ kiểm tra Redis.';
$string['test_serializer'] = 'Bộ trình serial';
$string['test_serializer_desc'] = 'Trình serial để sử dụng cho việc kiểm tra.';
$string['test_ttl'] = 'Testing TTL';
$string['test_ttl_desc'] = 'Chạy bài kiểm tra hiệu suất bằng cách sử

 dụng bộ nhớ cache yêu cầu TTL (đặt chậm hơn).';
$string['useserializer'] = 'Sử dụng bộ trình serial';
$string['useserializer_help'] = 'Chỉ định bộ trình serial để sử dụng cho việc serializing.
Các bộ trình serial hợp lệ là Redis::SERIALIZER_PHP hoặc Redis::SERIALIZER_IGBINARY.
Bộ trình serial thứ hai chỉ được hỗ trợ khi phpredis được cấu hình với tùy chọn --enable-redis-igbinary và phần mở rộng igbinary được tải.';
$string['usecompressor'] = 'Sử dụng bộ nén';
$string['usecompressor_help'] = 'Chỉ định bộ nén để sử dụng sau khi serializing. Điều này được thực hiện ở cấp độ API Bộ nhớ Cache của Moodle, không phải ở cấp độ php-redis.';
