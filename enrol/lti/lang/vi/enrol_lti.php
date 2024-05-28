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
 * LTI enrolment plugin version information
 *
 * @package enrol_lti
 * @copyright 2016 Mark Nelson <markn@moodle.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['addcontent'] = 'Thêm nội dung';
$string['adddeployment:name'] = 'Tên triển khai';
$string['adddeployment:deploymentid'] = 'ID triển khai';
$string['adddeployment:deploymentid_help'] = 'Mỗi triển khai của công cụ (trang web này) trên một nền tảng sẽ được chỉ định một ID triển khai duy nhất cho việc đăng ký. ID triển khai phải được đăng ký với công cụ (trang web này) trước khi các lần khởi động từ triển khai công cụ tương ứng được phép.';
$string['adddeployment:invaliddeploymentiderror'] = 'ID triển khai không hợp lệ. ID triển khai đã tồn tại cho việc đăng ký ứng dụng này.';
$string['addtocourse'] = 'Thêm vào khóa học';
$string['addtogradebook'] = 'Thêm vào sổ điểm';
$string['allowframeembedding'] = 'Lưu ý: Khuyến nghị rằng thiết lập quản trị trang \'Cho phép nhúng khung\' được bật, để các công cụ hiển thị trong một khung thay vì trong một cửa sổ mới.';
$string['authltimustbeenabled'] = 'Lưu ý: Plugin này yêu cầu plugin xác thực LTI cũng phải được bật.';
$string['copiedtoclipboard'] = '{$a} đã được sao chép vào clipboard';
$string['copytoclipboard'] = 'Sao chép vào clipboard';
$string['couldnotestablishproxy'] = 'Không thể thiết lập proxy với người tiêu dùng.';
$string['customproperties'] = 'Thuộc tính tùy chỉnh';
$string['deeplinkingurl'] = 'URL liên kết sâu';
$string['deletedactivity'] = 'Hoạt động đã bị xóa';
$string['deletedactivityalt'] = 'Hoạt động được chia sẻ bởi phiên bản này đã bị xóa';
$string['deletedactivitydescription'] = 'Hoạt động được chia sẻ bởi phiên bản này đã bị xóa. Bạn có thể chọn một hoạt động khác để chia sẻ bằng cách chỉnh sửa phiên bản hoặc, nếu không còn cần thiết, bạn có thể xóa phiên bản này. Việc xóa phiên bản sẽ loại bỏ bất kỳ ghi danh người dùng liên quan nào.';
$string['deploymentadd'] = 'Thêm một triển khai';
$string['deploymentaddnotice'] = 'Đã thêm triển khai';
$string['deploymentdelete'] = 'Xóa triển khai';
$string['deploymentdeleteconfirm'] = 'Cảnh báo: Việc xóa triển khai sẽ dẫn đến mất quyền truy cập cho bất kỳ người dùng nào theo các liên kết tài nguyên liên quan đến triển khai công cụ này trên nền tảng. Dịch vụ đồng bộ thành viên và điểm số cũng sẽ bị loại bỏ cho các tài nguyên này. Bạn có chắc chắn muốn xóa ID triển khai \'{$a}\'?';
$string['deploymentdeletenotice'] = 'Đã xóa triển khai';
$string['deploymentid'] = 'ID triển khai';
$string['deployments'] = 'Các triển khai';
$string['deploymentsinfo'] = 'Một ID triển khai được tạo ra bởi nền tảng khi công cụ được đưa vào một ngữ cảnh. Điều này có thể xảy ra vào thời điểm đăng ký, hoặc sau đó, khi công cụ được đưa vào một khóa học hoặc danh mục cụ thể. ID triển khai phải được nhập ở đây trước khi các lần khởi động từ triển khai công cụ được phép.';
$string['details'] = 'Chi tiết';
$string['editplatformdetails'] = 'Chỉnh sửa chi tiết nền tảng';
$string['endpointltiversionnotice'] = 'Các điểm cuối của công cụ dưới đây chỉ dành cho cài đặt thủ công LTI 1.3. Đối với các phiên bản trước (1.1/2.0), chi tiết cho người tiêu dùng có thể được tìm thấy trên trang \'Xuất bản dưới dạng công cụ LTI\', có thể truy cập qua điều hướng khóa học.';
$string['enrolenddate'] = 'Ngày kết thúc';
$string['enrolenddate_help'] = 'Nếu được bật, người dùng chỉ có thể truy cập cho đến ngày này.';
$string['enrolenddateerror'] = 'Ngày kết thúc ghi danh không thể sớm hơn ngày bắt đầu';
$string['enrolisdisabled'] = 'Plugin \'Xuất bản dưới dạng công cụ LTI\' bị vô hiệu hóa.';
$string['enrolltiversionincorrect'] = 'Tài nguyên không được cài đặt để sử dụng qua LTI cũ (phiên bản 1.1/2.0). Vui lòng liên hệ với quản trị viên của công cụ này.';
$string['enrolperiod'] = 'Thời gian ghi danh';
$string['enrolperiod_help'] = 'Thời gian ghi danh có hiệu lực, bắt đầu từ khi người dùng tự ghi danh từ hệ thống từ xa. Nếu bị vô hiệu hóa, thời gian ghi danh sẽ không giới hạn.';
$string['enrolmentfinished'] = 'Đã kết thúc ghi danh.';
$string['enrolmentnotstarted'] = 'Ghi danh chưa bắt đầu.';
$string['enrolstartdate'] = 'Ngày bắt đầu';
$string['enrolstartdate_help'] = 'Nếu được bật, người dùng chỉ có thể truy cập từ ngày này trở đi.';
$string['existingregistrationerror'] = 'Đã tồn tại một đăng ký cho người phát hành và ID khách hàng này.';
$string['frameembeddingnotenabled'] = 'Để truy cập công cụ, vui lòng theo liên kết dưới đây.';
$string['failedrequest'] = 'Yêu cầu thất bại. Lý do: {$a->reason}';
$string['gradesync'] = 'Đồng bộ điểm số';
$string['gradesync_help'] = 'Liệu điểm số từ công cụ có được gửi tới hệ thống từ xa (người tiêu dùng LTI).';
$string['incorrecttoken'] = 'Token không chính xác. Vui lòng kiểm tra URL và thử lại, hoặc liên hệ với quản trị viên của công cụ này.';
$string['invalidexpiredregistrationurl'] = 'URL đăng ký không hợp lệ hoặc đã hết hạn. Vui lòng kiểm tra URL và thử lại.';
$string['invalidrequest'] = 'Yêu cầu không hợp lệ';
$string['invalidtoolconsumer'] = 'Người tiêu dùng công cụ không hợp lệ.';
$string['jwksurl'] = 'URL JWKS';
$string['loginurl'] = 'URL khởi động đăng nhập';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = "Đã xảy ra sự cố khi lấy cấu hình OpenID từ nền tảng. Kết quả không phải là JSON hợp lệ. Điều này cũng có thể do cấu hình chặn máy chủ. Vui lòng đảm bảo trang web của bạn được cấu hình để kết nối với miền nền tảng và thử lại bằng cách sử dụng URL đăng ký mới.";
$string['ltiadvlauncherror:missingid'] = 'Dữ liệu khởi động không hợp lệ. Trường yêu cầu tùy chỉnh \'id\' là bắt buộc để khởi động một hoạt động hoặc tài nguyên qua LTI Advantage.';
$string['ltiadvlauncherror:invalidid'] = 'Dữ liệu khởi động không hợp lệ. Tài nguyên \'{$a}\' không khả dụng hoặc không tồn tại.';
$string['ltiadvlauncherror:invalidregistration'] = 'Dữ liệu khởi động hoặc cấu hình công cụ không hợp lệ. Không thể tìm thấy đăng ký nền tảng (người phát hành: {$a->platform}, ID khách hàng: {$a->clientid}).';
$string['ltiadvlauncherror:invaliddeployment'] = 'Dữ liệu khởi động hoặc cấu hình công cụ không hợp lệ. Không thể tìm thấy triển khai (ID triển khai: {$a}).';
$string['ltilegacy'] = 'LTI cũ (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Các công cụ LTI cũ (1.1/2.0) đã bị loại bỏ. Nội dung hiện nên được chia sẻ bằng LTI Advantage.';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Chi tiết khởi động';
$string['lti13launchdetails_help'] = 'URL khởi động và các thuộc tính tùy chỉnh chỉ cần thiết khi cấu hình thủ công một liên kết tài nguyên trên nền tảng. Khi có thể, giáo viên nên ưu tiên quy trình chọn nội dung (liên kết sâu) để tạo liên kết tài nguyên.';
$string['ltiversion'] = 'Phiên bản LTI';
$string['ltiversion_help'] = 'Phiên bản của LTI sẽ được sử dụng để truy cập nội dung đã xuất bản.

LTI Advantage cho phép nội dung được xuất bản tới các nền tảng đã đăng ký mà không cần thay đổi trên nền tảng mỗi khi nội dung mới được xuất bản. Hợp đồng bảo mật là giữa nền tảng và công cụ.

Các phiên bản cũ (1.1 và 2.0) yêu cầu rằng mỗi nội dung mới được xuất bản phải có một đăng ký công cụ mới trên người tiêu dùng vì mỗi nội dung xuất bản có hợp đồng bảo mật riêng với trang web người tiêu dùng và phải được cài đặt theo từng trường hợp cụ thể.';
$string['managedeployments'] = 'Quản lý triển khai';
$string['maxenrolled'] = 'Số người dùng ghi danh tối đa';
$string['maxenrolled_help'] = 'Số lượng người dùng từ xa tối đa có thể truy cập công cụ. Nếu đặt về không, số lượng người dùng ghi danh là không giới hạn.';
$string['maxenrolledreached'] = 'Số lượng người dùng từ xa tối đa được phép truy cập công cụ đã đạt tới.';
$string['membersync'] = 'Đồng bộ người dùng';
$string['membersync_help'] = 'Liệu một tác vụ theo lịch có đồng bộ hóa người dùng ghi danh trong hệ thống từ xa với ghi danh trong khóa học này, tạo một tài khoản cho mỗi người dùng từ xa khi cần thiết, và ghi danh hoặc hủy ghi danh họ khi cần thiết.

Nếu đặt về không, vào thời điểm khi người dùng từ xa truy cập công cụ, một tài khoản sẽ được tạo cho họ và họ sẽ được tự động ghi danh.';
$string['membersyncmode'] = 'Chế độ đồng bộ người dùng';
$string['membersyncmode_help'] = 'Liệu người dùng từ xa nên được ghi danh và/hoặc hủy ghi danh từ khóa học này.';
$string['membersyncmodeenrolandunenrol'] = 'Ghi danh mới và hủy ghi danh người dùng thiếu';
$string['membersyncmodeenrolnew'] = 'Ghi danh người dùng mới';
$string['membersyncmodeunenrolmissing'] = 'Hủy ghi danh người dùng thiếu';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Không tìm thấy triển khai công cụ nào';
$string['nopublishedcontent'] = 'Chưa có tài nguyên hoặc hoạt động nào được xuất bản';
$string['notoolsprovided'] = 'Không có công cụ nào được cung cấp';
$string['noregisteredplatforms'] = 'Không có nền tảng nào đã đăng ký';
$string['launchdetails'] = 'Chi tiết khởi động';
$string['launchdetails_help'] = 'URL cartridge (cũng gọi là URL cấu hình) cộng với bí mật hoặc URL khởi động là cần thiết để cấu hình công cụ.';
$string['launchurl'] = 'URL khởi động';
$string['lti:config'] = 'Cấu hình các phiên bản \'Xuất bản dưới dạng công cụ LTI\'';
$string['lti:unenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['opensslconfiginvalid'] = 'LTI 1.3 yêu cầu một openssl.cnf hợp lệ để được cấu hình và có sẵn cho máy chủ web của bạn. Vui lòng liên hệ với quản trị viên trang để cấu hình và kích hoạt openssl cho trang này.';
$string['opentool'] = 'Mở công cụ';
$string['publishedcontent'] = 'Nội dung đã xuất bản';
$string['publishedcontent_help'] = 'Một tài nguyên hoặc hoạt động đã xuất bản có thể được sử dụng trong các nền tảng đã đăng ký qua quy trình chọn nội dung (liên kết sâu). Ngoài ra, một liên kết tài nguyên có thể được tạo thủ công trên nền tảng bằng cách sử dụng URL khởi động và các thuộc tính tùy chỉnh được cung cấp.';
$string['platformdetails'] = 'Chi tiết nền tảng';
$string['platformdetailsinfo'] = 'Khi công cụ đã được cài đặt trên nền tảng, chi tiết từ nền tảng phải được ghi lại ở đây để hoàn tất đăng ký.
<ul>
<li>Đối với đăng ký động, thông tin này sẽ được thiết lập tự động và không cần thay đổi gì thêm.</li>
<li>Đối với đăng ký thủ công, thông tin này phải được sao chép thủ công từ nền tảng.</li>
</ul>';
$string['pluginname'] = 'Xuất bản dưới dạng công cụ LTI';
$string['pluginname_desc'] = 'Plugin \'Xuất bản dưới dạng công cụ LTI\', cùng với plugin xác thực LTI, cho phép người dùng từ xa truy cập vào các khóa học và hoạt động được chọn. Nói cách khác, Moodle hoạt động như một nhà cung cấp công cụ LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'Danh sách người dùng ghi danh qua nhà cung cấp LTI';
$string['privacy:metadata:enrol_lti_users:userid'] = 'ID của người dùng';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Điểm số cuối cùng mà người dùng được ghi nhận';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Thời gian người dùng truy cập khóa học lần cuối';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Thời gian người dùng được ghi danh';
$string['provisioningmodestudentlaunch'] = 'Chế độ cung cấp lần khởi động đầu tiên của sinh viên';
$string['provisioningmodeteacherlaunch'] = 'Chế độ cung cấp lần khởi động đầu tiên của giáo viên';
$string['provisioningmode'] = 'Chế độ cung cấp';
$string['provisioningmode_help'] = 'Thiết lập này xác định cách xử lý tài khoản trong lần khởi động đầu tiên. Hỗ trợ nhiều chế độ:
<ul>
<li>Chỉ tài khoản mới (tự động). Tài khoản sẽ được tự động tạo cho người dùng khởi động từ nền tảng. Đây là chế độ mặc định cho lần khởi động của sinh viên.</li>
<li>Tài khoản hiện có và mới (nhắc nhở). Người dùng sẽ được cho một lựa chọn về việc cần làm. Họ có thể quyết định liên kết với một tài khoản hiện có, hoặc tạo một tài khoản mới cho họ. Đây là tùy chọn linh hoạt nhất và là chế độ mặc định cho lần khởi động của giáo viên.</li>
<li>Chỉ tài khoản hiện có (nhắc nhở). Người dùng sẽ được yêu cầu liên kết với một tài khoản hiện có và không thể truy cập tài nguyên công cụ mà không làm điều đó.</li>
</ul>';
$string['registerplatform:accesstokenurl'] = 'URL token truy cập';
$string['registerplatform:accesstokenurl_help'] = 'URL mà các yêu cầu token truy cập sẽ được gửi bởi công cụ. Sẽ được cung cấp bởi nền tảng.';
$string['registerplatform:authrequesturl'] = 'URL yêu cầu xác thực';
$string['registerplatform:authrequesturl_help'] = 'URL mà các yêu cầu xác thực OpenID Connect sẽ được gửi bởi công cụ. Sẽ được cung cấp bởi nền tảng.';
$string['registerplatform:clientid'] = 'ID khách hàng';
$string['registerplatform:clientid_help'] = 'Một chuỗi dùng để xác định đăng ký công cụ trên nền tảng. Sẽ được cung cấp bởi nền tảng.';
$string['registerplatform:duplicateregistrationerror'] = 'ID khách hàng không hợp lệ. ID khách hàng này đã được đăng ký cho ID nền tảng được cung cấp.';
$string['registerplatform:jwksurl'] = 'URL tập khóa công khai';
$string['registerplatform:jwksurl_help'] = 'URL tập khóa công khai hoặc JWKS, được sử dụng để lấy khóa công khai của nền tảng. Sẽ được cung cấp bởi nền tảng.';
$string['registerplatform:name'] = 'Tên nền tảng';
$string['registerplatform:name_help'] = 'Tên ngắn mô tả nền tảng. Tên này có thể thay đổi bất cứ lúc nào.';
$string['registerplatform:platformid'] = 'ID nền tảng (người phát hành)';
$string['registerplatform:platformid_help'] = 'URL xác định nền tảng học tập của bên thứ ba. Sẽ được cung cấp bởi nền tảng.';
$string['registerplatform:invalidurlerror'] = 'URL không hợp lệ. Bạn đã bao gồm http:// hoặc https:// chưa?';
$string['registeredplatforms'] = 'Các nền tảng đã đăng ký';
$string['registeredplatformsltiversionnotice'] = 'Các nền tảng dưới đây đã được đăng ký cho giao tiếp LTI 1.3. Đối với các phiên bản trước, không cần đăng ký người tiêu dùng.';
$string['registerplatformadd'] = 'Đăng ký một nền tảng';
$string['registerplatformaddnotice'] = 'Đã thêm đăng ký nền tảng';
$string['registerplatformdelete'] = 'Xóa đăng ký nền tảng';
$string['registerplatformdeleteconfirm'] = 'Bạn có chắc chắn muốn xóa đăng ký cho nền tảng \'{$a}\'? Điều này cũng sẽ loại bỏ tất cả các triển khai công cụ được lưu trữ chống lại đăng ký này.';
$string['registerplatformdeletenotice'] = 'Đã xóa đăng ký nền tảng';
$string['registerplatformedit'] = 'Chỉnh sửa đăng ký';
$string['registerplatformeditnotice'] = 'Đã cập nhật đăng ký nền tảng';
$string['registration'] = 'Đăng ký công cụ đã xuất bản';
$string['registrationdeeplinklabel'] = 'Thêm nội dung từ {$a}';
$string['registrationresourcelinklabel'] = 'Khởi động nội dung từ {$a}';
$string['registrationdynamic'] = 'Đăng ký động';
$string['registrationmanual'] = 'Đăng ký thủ công';
$string['registrationstatus'] = 'Trạng thái';
$string['registrationstatusactive'] = 'Hoạt động';
$string['registrationstatuspending'] = 'Đang chờ xử lý';
$string['registrationurl'] = 'URL đăng ký';
$string['registrationurlinfomessage'] = 'Nếu nền tảng hỗ trợ đăng ký động, hãy sử dụng URL đăng ký dưới đây. Để biết thêm thông tin về đăng ký động, hãy xem tài liệu <a href="{$a}">Xuất bản dưới dạng công cụ LTI</a>.';
$string['registrationurl_help'] = 'Nếu một URL đăng ký (cũng gọi là URL proxy) được sử dụng, thì công cụ sẽ được cấu hình tự động.';
$string['remotesystem'] = 'Hệ thống từ xa';
$string['requirecompletion'] = 'Yêu cầu hoàn thành khóa học hoặc hoạt động trước khi đồng bộ điểm số';
$string['returnurlnotset'] = 'URL quay lại chưa được thiết lập.';
$string['roleinstructor'] = 'Vai trò cho giáo viên';
$string['roleinstructor_help'] = 'Vai trò được gán trong công cụ cho giáo viên từ xa.';
$string['rolelearner'] = 'Vai trò cho sinh viên';
$string['rolelearner_help'] = 'Vai trò được gán trong công cụ cho sinh viên từ xa.';
$string['secret'] = 'Bí mật';
$string['secret_help'] = 'Một chuỗi ký tự được chia sẻ với hệ thống từ xa (người tiêu dùng LTI) để cung cấp quyền truy cập vào công cụ.';
$string['sharedexternaltools'] = 'Xuất bản dưới dạng công cụ LTI';
$string['successfulregistration'] = 'Đăng ký thành công';
$string['tasksyncgrades'] = 'Đồng bộ điểm số công cụ xuất bản LTI';
$string['tasksyncmembers'] = 'Đồng bộ người dùng công cụ xuất bản LTI';
$string['tooldetails'] = 'Chi tiết công cụ';
$string['toolsprovided'] = 'Công cụ đã xuất bản';
$string['toolsprovided_help'] = 'Một công cụ có thể được chia sẻ với một trang web khác bằng cách cung cấp chi tiết khởi động hoặc URL đăng ký.';
$string['tooltobeprovided'] = 'Công cụ sẽ được xuất bản';
$string['toolurl'] = 'URL công cụ';
$string['userdefaultvalues'] = 'Giá trị mặc định người dùng';
$string['viewplatformdetails'] = 'Xem chi tiết nền tảng';
$string['viewtoolendpoints'] = 'Xem điểm cuối công cụ';
$string['cartridgeurl'] = 'URL cartridge';
