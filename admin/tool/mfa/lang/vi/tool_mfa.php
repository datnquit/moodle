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
//
/**
 * Strings for component 'tool_mfa', language 'en'.
 *
 * @package     tool_mfa
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['achievedweight'] = 'Trọng lượng đạt được';
$string['alltime'] = 'Mọi lúc';
$string['areyousure'] = 'Bạn có chắc chắn muốn thu hồi yếu tố?';
$string['cancellogin'] = 'Hủy đăng nhập';
$string['combination'] = 'Kết hợp';
$string['connector'] = 'VÀ';
$string['created'] = 'Đã tạo';
$string['createdfromip'] = 'Được tạo từ IP';
$string['debugmode:heading'] = 'Chế độ gỡ lỗi';
$string['devicename'] = 'Thiết bị';
$string['email:subject'] = 'Không thể đăng nhập vào {$a}';
$string['enablefactor'] = 'Bật yếu tố';
$string['error:actionnotfound'] = 'Hành động \'{$a}\' không được hỗ trợ';
$string['error:directaccess'] = 'Trang này không nên được truy cập trực tiếp';
$string['error:factornotenabled'] = 'Yếu tố xác thực đa yếu tố \'{$a}\' chưa được bật';
$string['error:factornotfound'] = 'Yếu tố xác thực đa yếu tố \'{$a}\' không được tìm thấy';
$string['error:notenoughfactors'] = 'Không thể xác thực';
$string['error:reauth'] = 'Chúng tôi không thể xác nhận danh tính của bạn đủ để đáp ứng chính sách bảo mật xác thực của trang.<br>Điều này có thể do: <br> 1) Các bước bị khóa - vui lòng đợi vài phút và thử lại.
     <br> 2) Các bước bị thất bại - vui lòng kiểm tra lại chi tiết cho từng bước. <br> 3) Các bước bị bỏ qua - vui lòng tải lại trang này hoặc thử đăng nhập lại.';
$string['error:revoke'] = 'Không thể thu hồi yếu tố';
$string['error:setupfactor'] = 'Không thể thiết lập yếu tố';
$string['error:support'] = 'Nếu bạn vẫn không thể đăng nhập, hoặc tin rằng bạn đang gặp lỗi này, vui lòng gửi email:';
$string['error:wrongfactorid'] = 'ID yếu tố \'{$a}\' không đúng';
$string['event:failfactor'] = 'Xác thực đa yếu tố thất bại do một yếu tố thất bại.';
$string['event:faillockout'] = 'Xác thực đa yếu tố thất bại do quá nhiều lần thử.';
$string['event:failnotenoughfactors'] = 'Xác thực đa yếu tố thất bại do không đủ yếu tố thỏa mãn.';
$string['event:userdeletedfactor'] = 'Yếu tố đã bị xóa';
$string['event:userfailedmfa'] = 'Người dùng đã thất bại xác thực đa yếu tố';
$string['event:userpassedmfa'] = 'Xác thực thành công';
$string['event:userrevokedfactor'] = 'Thu hồi yếu tố';
$string['event:usersetupfactor'] = 'Thiết lập yếu tố';
$string['factor'] = 'Yếu tố';
$string['factorreport'] = 'Báo cáo tất cả yếu tố';
$string['factorreset'] = 'Xác thực đa yếu tố của bạn \'{$a->factor}\' đã được đặt lại bởi quản trị viên trang. Bạn có thể cần thiết lập lại yếu tố này. {$a->url}';
$string['factorresetall'] = 'Tất cả các yếu tố xác thực đa yếu tố của bạn đã được đặt lại bởi quản trị viên trang. Bạn có thể cần thiết lập lại các yếu tố này. {$a}';
$string['factorrevoked'] = 'Yếu tố \'{$a}\' đã được thu hồi thành công.';
$string['factorsetup'] = 'Yếu tố \'{$a}\' đã được thiết lập thành công.';
$string['fallback'] = 'Yếu tố dự phòng';
$string['fallback_info'] = 'Yếu tố này là yếu tố dự phòng nếu không có yếu tố nào khác được cấu hình. Yếu tố này sẽ luôn thất bại.';
$string['guidance'] = 'Hướng dẫn người dùng xác thực đa yếu tố';
$string['inputrequired'] = 'Yêu cầu đầu vào của người dùng';
$string['ipatcreation'] = 'Địa chỉ IP khi yếu tố được tạo';
$string['lastverified'] = 'Lần xác minh cuối cùng';
$string['locked'] = '{$a} (Không khả dụng)';
$string['lockedusersforallfactors'] = 'Người dùng bị khóa: Tất cả các yếu tố';
$string['lockedusersforfactor'] = 'Người dùng bị khóa: {$a}';
$string['lockoutnotification'] = 'Bạn còn lại {$a} lần thử.';
$string['mfa'] = 'Xác thực đa yếu tố';
$string['mfa:mfaaccess'] = 'Tương tác với MFA';
$string['mfareports'] = 'Báo cáo MFA';
$string['mfasettings'] = 'Quản lý xác thực đa yếu tố';
$string['na'] = 'không áp dụng';
$string['needhelp'] = 'Cần trợ giúp?';
$string['nologinusers'] = 'Chưa đăng nhập';
$string['nonauthusers'] = 'Đang chờ MFA';
$string['overall'] = 'Tổng quan';
$string['pending'] = 'Đang chờ';
$string['performbulk'] = 'Hành động hàng loạt';
$string['pluginname'] = 'Xác thực đa yếu tố';
$string['preferences:activefactors'] = 'Yếu tố đang hoạt động';
$string['preferences:availablefactors'] = 'Yếu tố có sẵn';
$string['preferences:header'] = 'Tùy chọn xác thực đa yếu tố';
$string['preferenceslink'] = 'Nhấp vào đây để đi đến tùy chọn người dùng.';
$string['privacy:metadata:tool_mfa'] = 'Dữ liệu với các yếu tố MFA được cấu hình';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP mà yếu tố được thiết lập từ đó.';
$string['privacy:metadata:tool_mfa:factor'] = 'Loại yếu tố';
$string['privacy:metadata:tool_mfa:id'] = 'ID bản ghi';
$string['privacy:metadata:tool_mfa:label'] = 'Nhãn cho phiên bản yếu tố, ví dụ: thiết bị hoặc email.';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Thời gian người dùng được xác minh lần cuối với yếu tố này';
$string['privacy:metadata:tool_mfa:secret'] = 'Dữ liệu bí mật cho yếu tố';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Thời gian phiên bản yếu tố được thiết lập.';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Thời gian yếu tố được chỉnh sửa lần cuối';
$string['privacy:metadata:tool_mfa:userid'] = 'ID của người dùng mà yếu tố thuộc về';
$string['privacy:metadata:tool_mfa_auth'] = 'Lần cuối cùng xác thực đa yếu tố thành công được đăng ký cho ID người dùng.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Thời gian người dùng được xác thực lần cuối với';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Người dùng mà dấu thời gian này liên kết với.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Bí mật tạm thời cho xác thực người dùng.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Yếu tố mà bí mật này liên kết với.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Mã bảo mật bí mật.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'ID phiên mà bí mật này liên kết với.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'Người dùng mà bí mật này liên kết với.';
$string['redirecterrordetected'] = 'Phát hiện chuyển hướng không được hỗ trợ, đã chấm dứt thực thi kịch bản. Đã xảy ra lỗi chuyển hướng giữa MFA và {$a}.';
$string['resetconfirm'] = 'Đặt lại yếu tố người dùng';
$string['resetfactor'] = 'Đặt lại các yếu tố xác thực người dùng';
$string['resetfactorconfirm'] = 'Bạn có chắc chắn muốn đặt lại yếu tố này cho {$a}?';
$string['resetfactorplaceholder'] = 'Tên người dùng hoặc email';
$string['resetsuccess'] = 'Yếu tố \'{$a->factor}\' đã được đặt lại thành công cho người dùng \'{$a->username}\'.';
$string['resetsuccessbulk'] = 'Yếu tố \'{$a}\' đã được đặt lại thành công cho các người dùng được cung cấp.';
$string['resetuser'] = 'Người dùng:';
$string['revoke'] = 'Thu hồi';
$string['revokefactor'] = 'Thu hồi yếu tố';
$string['selectfactor'] = 'Chọn yếu tố để đặt lại:';
$string['selectperiod'] = 'Chọn khoảng thời gian báo cáo:';
$string['settings:combinations'] = 'Tóm tắt các điều kiện tốt cho đăng nhập';
$string['settings:debugmode'] = 'Bật chế độ gỡ lỗi';
$string['settings:debugmode_help'] = 'Chế độ gỡ lỗi sẽ hiển thị một biểu ngữ thông báo nhỏ trên các trang quản trị MFA, cũng như trang tùy chọn người dùng
         với thông tin về các yếu tố hiện đang được bật.';
$string['settings:duration'] = 'Thời hạn hiệu lực của bí mật';
$string['settings:duration_help'] = 'Thời hạn mà các bí mật được tạo ra có hiệu lực.';
$string['settings:enabled'] = 'Plugin MFA được bật';
$string['settings:enablefactor'] = 'Bật yếu tố';
$string['settings:enablefactor_help'] = 'Kiểm tra kiểm soát này để cho phép yếu tố được sử dụng cho xác thực MFA.';
$string['settings:general'] = 'Cài đặt MFA chung';
$string['settings:guidancecheck'] = 'Sử dụng trang hướng dẫn';
$string['settings:guidancecheck_help'] = 'Thêm một liên kết đến trang hướng dẫn trên các trang xác thực MFA, và trang tùy chọn MFA.';
$string['settings:guidancefiles'] = 'Các tập tin trang hướng dẫn';
$string['settings:guidancefiles_help'] = 'Thêm bất kỳ tập tin nào ở đây để sử dụng trong trang hướng dẫn, và nhúng chúng vào trang bằng cách sử dụng {{tên_tập_tin}} (đường dẫn đã giải quyết) hoặc {{{tên_tập_tin}}} (liên kết html) trong trình chỉnh sửa';
$string['settings:guidancepage'] = 'Nội dung trang hướng dẫn';
$string['settings:guidancepage_help'] = 'HTML ở đây sẽ được hiển thị trên trang hướng dẫn. Nhập tên tập tin từ khu vực tệp để nhúng tệp với đường dẫn đã giải quyết {{tên_tập_tin}} hoặc dưới dạng liên kết html bằng cách sử dụng {{{tên_tập_tin}}}.';
$string['settings:lockout'] = 'Ngưỡng khóa';
$string['settings:lockout_help'] = 'Số lần người dùng có thể trả lời yếu tố đầu vào trước khi họ bị ngăn đăng nhập.';
$string['settings:redir_exclusions'] = 'URL không nên chuyển hướng kiểm tra MFA.';
$string['settings:redir_exclusions_help'] = 'Mỗi dòng mới là một URL tương đối từ siteroot mà kiểm tra MFA sẽ không chuyển hướng từ';
$string['settings:weight'] = 'Trọng lượng yếu tố';
$string['settings:weight_help'] = 'Trọng lượng của yếu tố này nếu vượt qua. Người dùng cần ít nhất 100 điểm để đăng nhập.';
$string['setup'] = 'Thiết lập';
$string['setupfactor'] = 'Thiết lập yếu tố';
$string['setuprequired'] = 'Thiết lập người dùng';
$string['state:fail'] = 'Thất bại';
$string['state:locked'] = 'Bị khóa';
$string['state:neutral'] = 'Trung lập';
$string['state:pass'] = 'Vượt qua';
$string['state:unknown'] = 'Không xác định';
$string['subplugintype_factor'] = 'Loại yếu tố';
$string['subplugintype_factor_plural'] = 'Các loại yếu tố';
$string['totalusers'] = 'Tổng số người dùng';
$string['totalweight'] = 'Tổng trọng lượng';
$string['userempty'] = 'Người dùng không thể trống.';
$string['userlogs'] = 'Nhật ký người dùng';
$string['usernotfound'] = 'Không thể tìm thấy người dùng.';
$string['usersauthedinperiod'] = 'Đã đăng nhập';
$string['verification'] = 'Xác minh 2 bước';
$string['verification_desc'] = 'Để giữ tài khoản của bạn an toàn, chúng tôi cần kiểm tra xem đây có thật sự là bạn không.';
$string['verificationcode'] = 'Nhập mã';
$string['verificationcode_help'] = 'Mã xác minh được cung cấp bởi yếu tố xác thực hiện tại.';
$string['verifyalt'] = 'Thử cách khác để xác minh:';
$string['weight'] = 'Trọng lượng';
