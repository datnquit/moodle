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
 * Strings for component 'install', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   core
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['admindirerror'] = 'Thư mục quản trị được chỉ định không chính xác';
$string['admindirname'] = 'Thư mục quản trị';
$string['admindirsetting'] = 'Một số ít nhà cung cấp dịch vụ web sử dụng /admin như là một URL đặc biệt để bạn truy cập vào bảng điều khiển hoặc cái gì đó. Thật không may, điều này xung đột với vị trí tiêu chuẩn cho các trang quản trị của Moodle. Bạn có thể khắc phục điều này bằng cách đổi tên thư mục quản trị trong cài đặt của bạn và đặt tên mới ở đây. Ví dụ: <br /><br /><b>moodleadmin</b><br /><br /> Điều này sẽ sửa các liên kết quản trị trong Moodle.';
$string['admindirsettinghead'] = 'Đặt thư mục quản trị ...';
$string['admindirsettingsub'] = 'Một số ít nhà cung cấp dịch vụ web sử dụng /admin như là một URL đặc biệt để bạn truy cập vào bảng điều khiển hoặc cái gì đó. Thật không may, điều này xung đột với vị trí tiêu chuẩn cho các trang quản trị của Moodle. Bạn có thể khắc phục điều này bằng cách đổi tên thư mục quản trị trong cài đặt của bạn và đặt tên mới ở đây. Ví dụ: <br /><br /><b>moodleadmin</b><br /><br /> Điều này sẽ sửa các liên kết quản trị trong Moodle.';
$string['availablelangs'] = 'Gói ngôn ngữ có sẵn';
$string['caution'] = 'Chú ý';
$string['cliadminemail'] = 'Địa chỉ email người quản trị mới';
$string['cliadminpassword'] = 'Mật khẩu người quản trị mới';
$string['cliadminusername'] = 'Tên người dùng tài khoản quản trị';
$string['clialreadyconfigured'] = 'Tệp cấu hình config.php đã tồn tại. Vui lòng sử dụng admin/cli/install_database.php để cài đặt Moodle cho trang web này.';
$string['clialreadyinstalled'] = 'Tệp cấu hình config.php đã tồn tại. Vui lòng sử dụng admin/cli/install_database.php để nâng cấp Moodle cho trang web này.';
$string['cliinstallfinished'] = 'Cài đặt hoàn tất thành công.';
$string['cliinstallheader'] = 'Chương trình cài đặt dòng lệnh Moodle {$a}';
$string['climustagreelicense'] = 'Trong chế độ không tương tác, bạn phải đồng ý với giấy phép bằng cách chỉ định tùy chọn --agree-license';
$string['cliskipdatabase'] = 'Bỏ qua cài đặt cơ sở dữ liệu.';
$string['clisupportemail'] = 'Địa chỉ email hỗ trợ';
$string['clitablesexist'] = 'Bảng cơ sở dữ liệu đã tồn tại; cài đặt CLI không thể tiếp tục.';
$string['compatibilitysettings'] = 'Đang kiểm tra cài đặt PHP của bạn ...';
$string['compatibilitysettingshead'] = 'Đang kiểm tra cài đặt PHP của bạn ...';
$string['compatibilitysettingssub'] = 'Máy chủ của bạn phải vượt qua tất cả các bài kiểm tra này để Moodle chạy đúng cách';
$string['configfilenotwritten'] = 'Tập lệnh cài đặt không thể tự động tạo tệp config.php chứa các cài đặt bạn đã chọn, có thể do thư mục Moodle không thể ghi được. Bạn có thể sao chép thủ công mã sau vào một tệp có tên là config.php trong thư mục gốc của Moodle.';
$string['configfilewritten'] = 'config.php đã được tạo thành công';
$string['configurationcomplete'] = 'Cấu hình hoàn tất';
$string['configurationcompletehead'] = 'Cấu hình hoàn tất';
$string['configurationcompletesub'] = 'Moodle đã cố gắng lưu cấu hình của bạn trong một tệp trong thư mục gốc của cài đặt Moodle của bạn.';
$string['database'] = 'Cơ sở dữ liệu';
$string['databasehead'] = 'Cài đặt cơ sở dữ liệu';
$string['databasehost'] = 'Máy chủ cơ sở dữ liệu';
$string['databasename'] = 'Tên cơ sở dữ liệu';
$string['databasepass'] = 'Mật khẩu cơ sở dữ liệu';
$string['databaseport'] = 'Cổng cơ sở dữ liệu';
$string['databasesocket'] = 'Socket Unix';
$string['databasetypehead'] = 'Chọn trình điều khiển cơ sở dữ liệu';
$string['databasetypesub'] = 'Moodle hỗ trợ một số loại máy chủ cơ sở dữ liệu. Vui lòng liên hệ với quản trị viên máy chủ nếu bạn không biết sử dụng loại nào.';
$string['databaseuser'] = 'Người dùng cơ sở dữ liệu';
$string['dataroot'] = 'Thư mục dữ liệu';
$string['datarooterror'] = 'Thư mục \'dữ liệu\' bạn đã chỉ định không thể tìm thấy hoặc tạo. Hãy sửa đường dẫn hoặc tạo thư mục đó thủ công.';
$string['datarootpermission'] = 'Quyền thư mục dữ liệu';
$string['datarootpublicerror'] = 'Thư mục \'dữ liệu\' bạn đã chỉ định có thể truy cập trực tiếp qua web, bạn phải sử dụng thư mục khác.';
$string['dbconnectionerror'] = 'Chúng tôi không thể kết nối với cơ sở dữ liệu bạn đã chỉ định. Vui lòng kiểm tra cài đặt cơ sở dữ liệu của bạn.';
$string['dbcreationerror'] = 'Lỗi tạo cơ sở dữ liệu. Không thể tạo tên cơ sở dữ liệu đã cho với các cài đặt đã cung cấp';
$string['dbhost'] = 'Máy chủ';
$string['dbpass'] = 'Mật khẩu';
$string['dbport'] = 'Cổng';
$string['dbprefix'] = 'Tiền tố bảng';
$string['dbtype'] = 'Loại';
$string['directorysettings'] = '<p>Vui lòng xác nhận các vị trí của cài đặt Moodle này.</p>

<p><b>Địa chỉ web:</b>
Chỉ định địa chỉ web đầy đủ nơi Moodle sẽ được truy cập.
Nếu trang web của bạn có thể truy cập qua nhiều URL thì hãy chọn
URL mà sinh viên của bạn sẽ sử dụng. Không bao gồm dấu gạch chéo ở cuối.</p>

<p><b>Thư mục Moodle:</b>
Chỉ định đường dẫn đầy đủ đến cài đặt này
Hãy đảm bảo chữ hoa/thường đúng.</p>

<p><b>Thư mục dữ liệu:</b>
Bạn cần một nơi để Moodle có thể lưu các tệp đã tải lên. Thư mục này
phải có thể đọc và ghi được bởi người dùng máy chủ web
(thường là \'nobody\' hoặc \'apache\'), nhưng không thể truy cập trực tiếp
qua web. Trình cài đặt sẽ cố gắng tạo thư mục này nếu nó không tồn tại.</p>';
$string['directorysettingshead'] = 'Vui lòng xác nhận các vị trí của cài đặt Moodle này';
$string['directorysettingssub'] = '<b>Địa chỉ web:</b>
Chỉ định địa chỉ web đầy đủ nơi Moodle sẽ được truy cập.
Nếu trang web của bạn có thể truy cập qua nhiều URL thì hãy chọn
URL mà sinh viên của bạn sẽ sử dụng. Không bao gồm dấu gạch chéo ở cuối.
<br />
<br />
<b>Thư mục Moodle:</b>
Chỉ định đường dẫn đầy đủ đến cài đặt này
Hãy đảm bảo chữ hoa/thường đúng.
<br />
<br />
<b>Thư mục dữ liệu:</b>
Bạn cần một nơi để Moodle có thể lưu các tệp đã tải lên. Thư mục này
phải có thể đọc và ghi được bởi người dùng máy chủ web
(thường là \'nobody\' hoặc \'apache\'), nhưng không thể truy cập trực tiếp
qua web. Trình cài đặt sẽ cố gắng tạo thư mục này nếu nó không tồn tại.';
$string['dirroot'] = 'Thư mục Moodle';
$string['dirrooterror'] = 'Cài đặt \'Thư mục Moodle\' dường như không chính xác - chúng tôi không thể tìm thấy cài đặt Moodle ở đó. Giá trị dưới đây đã được đặt lại.';
$string['download'] = 'Tải xuống';
$string['downloadlanguagebutton'] = 'Tải xuống gói ngôn ngữ &quot;{$a}&quot;';
$string['downloadlanguagehead'] = 'Tải xuống gói ngôn ngữ';
$string['downloadlanguagenotneeded'] = 'Bạn có thể tiếp tục quá trình cài đặt bằng gói ngôn ngữ mặc định, "{$a}".';
$string['downloadlanguagesub'] = 'Bạn hiện có tùy chọn tải xuống gói ngôn ngữ và tiếp tục quá trình cài đặt bằng ngôn ngữ này.<br /><br />Nếu bạn không thể tải xuống gói ngôn ngữ, quá trình cài đặt sẽ tiếp tục bằng tiếng Anh. (Sau khi quá trình cài đặt hoàn tất, bạn sẽ có cơ hội tải xuống và cài đặt các gói ngôn ngữ bổ sung.)';
$string['doyouagree'] = 'Bạn có đồng ý không ? (yes/no):';
$string['environmenthead'] = 'Đang kiểm tra môi trường của bạn ...';
$string['environmentsub'] = 'Chúng tôi đang kiểm tra xem các thành phần khác nhau của hệ thống của bạn có đáp ứng yêu cầu hệ thống hay không';
$string['environmentsub2'] = 'Mỗi phiên bản Moodle có một số yêu cầu tối thiểu về phiên bản PHP và một số phần mở rộng PHP bắt buộc.
Kiểm tra môi trường đầy đủ được thực hiện trước mỗi lần cài đặt và nâng cấp. Vui lòng liên hệ với quản trị viên máy chủ nếu bạn không biết cách cài đặt phiên bản mới hoặc kích hoạt các phần mở rộng PHP.';
$string['errorsinenvironment'] = 'Kiểm tra môi trường thất bại!';
$string['fail'] = 'Thất bại';
$string['fileuploads'] = 'Tải lên tệp';
$string['fileuploadserror'] = 'Cài đặt này nên được bật';
$string['fileuploadshelp'] = '<p>Có vẻ như việc tải lên tệp bị vô hiệu hóa trên máy chủ của bạn.</p>

<p>Moodle vẫn có thể được cài đặt, nhưng không có khả năng này, bạn sẽ không thể
   tải lên các tệp khóa học hoặc hình ảnh hồ sơ người dùng mới.</p>

<p>Để bật tải lên tệp, bạn (hoặc quản trị viên hệ thống của bạn) sẽ cần
   chỉnh sửa tệp php.ini chính trên hệ thống của bạn và thay đổi cài đặt cho
   <b>file_uploads</b> thành \'1\'.</p>';
$string['chooselanguage'] = 'Chọn một ngôn ngữ';
$string['chooselanguagehead'] = 'Chọn một ngôn ngữ';
$string['chooselanguagesub'] = 'Vui lòng chọn một ngôn ngữ để cài đặt. Ngôn ngữ này cũng sẽ được sử dụng làm ngôn ngữ mặc định cho trang web, mặc dù nó có thể được thay đổi sau.';
$string['inputdatadirectory'] = 'Thư mục dữ liệu:';
$string['inputwebadress'] = 'Địa chỉ web:';
$string['inputwebdirectory'] = 'Thư mục Moodle:';
$string['installation'] = 'Cài đặt';
$string['invaliddbprefix'] = 'Tiền tố không hợp lệ. Tiền tố chỉ có thể bao gồm các chữ cái thường và dấu gạch dưới.';
$string['langdownloaderror'] = 'Thật không may, ngôn ngữ "{$a}" không thể tải xuống. Quá trình cài đặt sẽ tiếp tục bằng tiếng Anh.';
$string['langdownloadok'] = 'Ngôn ngữ "{$a}" đã được cài đặt thành công. Quá trình cài đặt sẽ tiếp tục bằng ngôn ngữ này.';
$string['memorylimit'] = 'Giới hạn bộ nhớ';
$string['memorylimiterror'] = 'Giới hạn bộ nhớ PHP được đặt khá thấp ... bạn có thể gặp sự cố sau này.';
$string['memorylimithelp'] = '<p>Giới hạn bộ nhớ PHP cho máy chủ của bạn hiện được đặt thành {$a}.</p>

<p>Điều này có thể gây ra sự cố về bộ nhớ cho Moodle sau này, đặc biệt là
   nếu bạn có nhiều mô-đun được bật và/hoặc nhiều người dùng.</p>

<p>Chúng tôi khuyên bạn nên cấu hình PHP với giới hạn cao hơn nếu có thể, chẳng hạn như 40M.
   Có một số cách để làm điều này mà bạn có thể thử:</p>
<ol>
<li>Nếu bạn có thể, hãy biên dịch lại PHP với <i>--enable-memory-limit</i>.
    Điều này sẽ cho phép Moodle tự đặt giới hạn bộ nhớ.</li>
<li>Nếu bạn có quyền truy cập vào tệp php.ini của mình, bạn có thể thay đổi cài đặt <b>memory_limit</b>
    ở đó thành 40M. Nếu bạn không có quyền truy cập, bạn có thể
    yêu cầu quản trị viên của bạn làm điều này cho bạn.</li>
<li>Trên một số máy chủ PHP, bạn có thể tạo tệp .htaccess trong thư mục Moodle
    chứa dòng này:
    <blockquote><div>php_value memory_limit 40M</div></blockquote>
    <p>Tuy nhiên, trên một số máy chủ, điều này sẽ ngăn không cho <b>tất cả</b> các trang PHP hoạt động
    (bạn sẽ thấy lỗi khi xem các trang), vì vậy bạn sẽ phải xóa tệp .htaccess.</p></li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHP chưa được cấu hình đúng với tiện ích mở rộng MySQLi để nó có thể giao tiếp với MySQL. Vui lòng kiểm tra tệp php.ini của bạn hoặc biên dịch lại PHP.';
$string['nativeauroramysql'] = 'Aurora MySQL (native/auroramysql)';
$string['nativeauroramysqlhelp'] = '<p>Cơ sở dữ liệu là nơi lưu trữ hầu hết các cài đặt và dữ liệu của Moodle và phải được cấu hình ở đây.</p>
<p>Tên cơ sở dữ liệu, tên người dùng và mật khẩu là các trường bắt buộc; tiền tố bảng là tùy chọn.</p>
<p>Tên cơ sở dữ liệu chỉ có thể chứa các ký tự chữ và số, đô la ($) và gạch dưới (_).</p>
<p>Nếu cơ sở dữ liệu hiện tại không tồn tại và người dùng bạn chỉ định có quyền, Moodle sẽ cố gắng tạo một cơ sở dữ liệu mới với các quyền và cài đặt chính xác.</p>
<p>Trình điều khiển này không tương thích với công cụ MyISAM kế thừa.</p>';
$string['nativemariadb'] = 'MariaDB (native/mariadb)';
$string['nativemariadbhelp'] = '<p>Cơ sở dữ liệu là nơi lưu trữ hầu hết các cài đặt và dữ liệu của Moodle và phải được cấu hình ở đây.</p>
<p>Tên cơ sở dữ liệu, tên người dùng và mật khẩu là các trường bắt buộc; tiền tố bảng là tùy chọn.</p>
<p>Tên cơ sở dữ liệu chỉ có thể chứa các ký tự chữ và số, đô la ($) và gạch dưới (_).</p>
<p>Nếu cơ sở dữ liệu hiện tại không tồn tại và người dùng bạn chỉ định có quyền, Moodle sẽ cố gắng tạo một cơ sở dữ liệu mới với các quyền và cài đặt chính xác.</p>
<p>Trình điều khiển này không tương thích với công cụ MyISAM kế thừa.</p>';
$string['nativemysqli'] = 'MySQL cải tiến (native/mysqli)';
$string['nativemysqlihelp'] = '<p>Cơ sở dữ liệu là nơi lưu trữ hầu hết các cài đặt và dữ liệu của Moodle và phải được cấu hình ở đây.</p>
<p>Tên cơ sở dữ liệu, tên người dùng và mật khẩu là các trường bắt buộc; tiền tố bảng là tùy chọn.</p>
<p>Tên cơ sở dữ liệu chỉ có thể chứa các ký tự chữ và số, đô la ($) và gạch dưới (_).</p>
<p>Nếu cơ sở dữ liệu hiện tại không tồn tại và người dùng bạn chỉ định có quyền, Moodle sẽ cố gắng tạo một cơ sở dữ liệu mới với các quyền và cài đặt chính xác.</p>';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Bây giờ bạn cần cấu hình cơ sở dữ liệu nơi hầu hết dữ liệu Moodle sẽ được lưu trữ.
Cơ sở dữ liệu này phải đã được tạo và tên người dùng và mật khẩu đã được tạo để truy cập nó. Tiền tố bảng là bắt buộc.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = '<p>Cơ sở dữ liệu là nơi lưu trữ hầu hết các cài đặt và dữ liệu của Moodle và phải được cấu hình ở đây.</p>
<p>Tên cơ sở dữ liệu, tên người dùng, mật khẩu và tiền tố bảng là các trường bắt buộc.</p>
<p>Cơ sở dữ liệu phải đã tồn tại và người dùng phải có quyền truy cập để đọc và ghi vào đó.</p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Bây giờ bạn cần cấu hình cơ sở dữ liệu nơi hầu hết dữ liệu Moodle sẽ được lưu trữ.
Cơ sở dữ liệu này phải đã được tạo và tên người dùng và mật khẩu đã được tạo để truy cập nó. Tiền tố bảng là bắt buộc.';
$string['nativesqlsrvnodriver'] = 'Trình điều khiển Microsoft Drivers for SQL Server for PHP chưa được cài đặt hoặc chưa được cấu hình đúng.';
$string['ociextensionisnotpresentinphp'] = 'PHP chưa được cấu hình đúng với tiện ích mở rộng OCI8 để nó có thể giao tiếp với Oracle. Vui lòng kiểm tra tệp php.ini của bạn hoặc biên dịch lại PHP.';
$string['pass'] = 'Đạt';
$string['paths'] = 'Đường dẫn';
$string['pathserrcreatedataroot'] = 'Thư mục dữ liệu ({$a->dataroot}) không thể được tạo bởi trình cài đặt.';
$string['pathshead'] = 'Xác nhận đường dẫn';
$string['pathsrodataroot'] = 'Thư mục Dataroot không thể ghi được.';
$string['pathsroparentdataroot'] = 'Thư mục cha ({$a->parent}) không thể ghi được. Thư mục dữ liệu ({$a->dataroot}) không thể được tạo bởi trình cài đặt.';
$string['pathssubadmindir'] = 'Một số ít nhà cung cấp dịch vụ web sử dụng /admin như là một URL đặc biệt để bạn truy cập vào bảng điều khiển hoặc cái gì đó. Thật không may, điều này xung đột với vị trí tiêu chuẩn cho các trang quản trị của Moodle. Bạn có thể khắc phục điều này bằng cách đổi tên thư mục quản trị trong cài đặt của bạn và đặt tên mới ở đây. Ví dụ: <em>moodleadmin</em>. Điều này sẽ sửa các liên kết quản trị trong Moodle.';
$string['pathssubdataroot'] = '<p>Một thư mục nơi Moodle sẽ lưu trữ tất cả nội dung tệp tải lên bởi người dùng.</p>
<p>Thư mục này phải có thể đọc và ghi bởi người dùng máy chủ web (thường là \'www-data\', \'nobody\' hoặc \'apache\').</p>
<p>Không được truy cập trực tiếp qua web.</p>
<p>Nếu thư mục không tồn tại, quá trình cài đặt sẽ cố gắng tạo ra nó.</p>';
$string['pathssubdirroot'] = '<p>Đường dẫn đầy đủ đến thư mục chứa mã Moodle.</p>';
$string['pathssubwwwroot'] = '<p>Địa chỉ đầy đủ nơi Moodle sẽ được truy cập, tức là địa chỉ mà người dùng sẽ nhập vào thanh địa chỉ của trình duyệt để truy cập Moodle.</p>
<p>Không thể truy cập Moodle bằng nhiều địa chỉ. Nếu trang web của bạn có thể truy cập qua nhiều địa chỉ, hãy chọn địa chỉ dễ dàng nhất và thiết lập chuyển hướng vĩnh viễn cho mỗi địa chỉ khác.</p>
<p>Nếu trang web của bạn có thể truy cập cả từ Internet và từ mạng nội bộ (đôi khi được gọi là Intranet), thì hãy sử dụng địa chỉ công cộng ở đây.</p>
<p>Nếu địa chỉ hiện tại không chính xác, vui lòng thay đổi URL trong thanh địa chỉ của trình duyệt của bạn và khởi động lại quá trình cài đặt.</p>';
$string['pathsunsecuredataroot'] = 'Vị trí Dataroot không an toàn';
$string['pathswrongadmindir'] = 'Thư mục quản trị không tồn tại';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP chưa được cấu hình đúng với tiện ích mở rộng PGSQL để nó có thể giao tiếp với PostgreSQL. Vui lòng kiểm tra tệp php.ini của bạn hoặc biên dịch lại PHP.';
$string['phpextension'] = 'Tiện ích mở rộng PHP {$a}';
$string['phpversion'] = 'Phiên bản PHP';
$string['phpversionhelp'] = '<p>Moodle yêu cầu phiên bản PHP ít nhất là 5.6.5 hoặc 7.1 (7.0.x có một số hạn chế của động cơ).</p>
<p>Bạn hiện đang chạy phiên bản {$a}.</p>
<p>Bạn phải nâng cấp PHP hoặc chuyển sang một máy chủ có phiên bản PHP mới hơn.</p>';
$string['releasenoteslink'] = 'Để biết thông tin về phiên bản này của Moodle, vui lòng xem ghi chú phát hành tại {$a}';
$string['safemode'] = 'Chế độ an toàn';
$string['safemodeerror'] = 'Moodle có thể gặp sự cố với chế độ an toàn bật';
$string['safemodehelp'] = '<p>Moodle có thể gặp một loạt vấn đề với chế độ an toàn bật, không ít trong số đó là
   nó có thể không được phép tạo tệp mới.</p>

<p>Chế độ an toàn thường chỉ được bật bởi các máy chủ web công cộng lo ngại về bảo mật, vì vậy bạn có thể phải
   tìm một công ty lưu trữ web mới cho trang Moodle của bạn.</p>

<p>Bạn có thể thử tiếp tục cài đặt nếu muốn, nhưng hãy mong đợi một số vấn đề sau này.</p>';
$string['sessionautostart'] = 'Tự động khởi động phiên';
$string['sessionautostarterror'] = 'Cài đặt này nên tắt';
$string['sessionautostarthelp'] = '<p>Moodle yêu cầu hỗ trợ phiên và sẽ không hoạt động mà không có nó.</p>

<p>Các phiên có thể được bật trong tệp php.ini ... tìm tham số session.auto_start.</p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP chưa được cấu hình đúng với tiện ích mở rộng SQLite. Vui lòng kiểm tra tệp php.ini của bạn hoặc biên dịch lại PHP.';
$string['upgradingqtypeplugin'] = 'Nâng cấp plugin loại câu hỏi';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Bạn đang thấy trang này vì bạn đã cài đặt và
    khởi chạy thành công gói <strong>{$a->packname} {$a->packversion}</strong> trên máy tính của bạn. Xin chúc mừng!';
$string['welcomep30'] = 'Phiên bản này của <strong>{$a->installername}</strong> bao gồm các ứng dụng
    để tạo ra môi trường mà <strong>Moodle</strong> sẽ hoạt động, cụ thể là:';
$string['welcomep40'] = 'Gói này cũng bao gồm <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Việc sử dụng tất cả các ứng dụng trong gói này được điều chỉnh bởi các giấy phép tương ứng của chúng. Toàn bộ gói <strong>{$a->installername}</strong> là <a href="https://www.opensource.org/docs/definition_plain.html">mã nguồn mở</a> và được phân phối dưới giấy phép <a href="https://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Các trang sau sẽ dẫn bạn qua một số bước dễ dàng để
    cấu hình và thiết lập <strong>Moodle</strong> trên máy tính của bạn. Bạn có thể chấp nhận các cài đặt mặc định
    hoặc, tùy chọn, sửa đổi chúng để phù hợp với nhu cầu của bạn.';
$string['welcomep70'] = 'Nhấn nút "Tiếp theo" bên dưới để tiếp tục cài đặt <strong>Moodle</strong>.';
$string['wwwroot'] = 'Địa chỉ web';
$string['wwwrooterror'] = 'Cài đặt \'Địa chỉ web\' không hợp lệ - cài đặt Moodle này dường như không có ở đó. Giá trị dưới đây đã được đặt lại.';
