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
 * Parent theme: boost
 *
 * @package   theme_edly
 * @copyright HiBootstrap
 *
 */

// Protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

$string['choosereadme'] = 'Chủ đề Edly Education & LMS Moodle';
$string['pluginname'] = 'Edly';

$string['edly_settings_menu'] = 'Tùy chọn';
$string['edly_page_settings_menu'] = 'Cài đặt Trang';

// Tên của tab thứ hai trong cài đặt chủ đề.
$string['advancedsettings'] = 'Cài đặt nâng cao';
// Cài đặt màu thương hiệu.
$string['brandcolor'] = 'Màu thương hiệu';
// Mô tả cài đặt màu thương hiệu.
$string['brandcolor_desc'] = 'Màu chính.';
$string['secondarycolor'] = 'Màu phụ';
$string['secondarycolor_desc'] = 'Màu phụ.';
$string['footer_bg'] = 'Màu nền chân trang';
// Mô tả hiển thị trong trình chọn chủ đề quản trị.
$string['configtitle'] = 'Cài đặt Edly';
// Tên của tab cài đặt đầu tiên.
$string['generalsettings'] = 'Cài đặt chung';
// Cài đặt tệp preset.
$string['presetfiles'] = 'Các tệp preset chủ đề bổ sung';
// Văn bản trợ giúp tệp preset.
$string['presetfiles_desc'] = 'Các tệp preset có thể được sử dụng để thay đổi đáng kể diện mạo của chủ đề. Xem <a href=https://docs.moodle.org/dev/Boost_Presets>Preset Boost</a> để biết thông tin về việc tạo và chia sẻ các tệp preset của riêng bạn, và xem <a href=http://moodle.net/boost>Thư viện Preset</a> để biết các preset mà người khác đã chia sẻ.';
// Cài đặt preset.
$string['preset'] = 'Preset chủ đề';
// Văn bản trợ giúp preset.
$string['preset_desc'] = 'Chọn một preset để thay đổi tổng quát giao diện của chủ đề.';
// Cài đặt SCSS thô.
$string['rawscss'] = 'SCSS thô';
// Văn bản trợ giúp cài đặt SCSS thô.
$string['rawscss_desc'] = 'Sử dụng trường này để cung cấp mã SCSS hoặc CSS sẽ được chèn vào cuối bảng điều chỉnh kiểu.';
// Cài đặt SCSS thô ban đầu.
$string['rawscsspre'] = 'SCSS ban đầu thô';
// Văn bản trợ giúp cài đặt SCSS ban đầu thô.
$string['rawscsspre_desc'] = 'Trong trường này, bạn có thể cung cấp mã SCSS khởi tạo, nó sẽ được chèn trước mọi thứ khác. Hầu hết thời gian bạn sẽ sử dụng cài đặt này để xác định biến. ';
$string['region-side-pre'] = 'Thanh bên phải';
$string['iconset_edly'] = 'Tất cả Biểu tượng';
$string['region-side-pre'] = 'Phải';
$string['region-user-notif'] = 'Thông báo người dùng';
$string['region-user-messages'] = 'Tin nhắn người dùng';
$string['region-fullwidth-top'] = 'Toàn bộ chiều rộng trên cùng';
$string['region-fullwidth-bottom'] = 'Toàn bộ chiều rộng dưới cùng';
$string['region-above-content'] = 'Phía trên nội dung';
$string['region-below-content'] = 'Phía dưới nội dung';
$string['total_student'] = 'Số học viên';
$string['last_updated'] = 'Cập nhật lần cuối ';

// Cài đặt Chủ đề
$string['logo_settings'] = 'Logo';
$string['header_logos'] = 'Logo Tiêu đề';
$string['logo_visibility'] = 'Hiển thị Logo';
$string['main_logo']                = 'Logo chính';
$string['main_logo_desc']           = 'Logo chính của trang web của bạn.';
$string['logo_image_width']         = 'Chiều rộng Hình ảnh Logo chính';
$string['logo_image_width_desc']    = 'Chiều rộng tính bằng pixel cho logo chính. Nhập giá trị số mà không cần thêm "px".';
$string['logo_image_height']        = 'Chiều cao Hình ảnh Logo chính';
$string['logo_image_height_desc']   = 'Chiều cao tính bằng pixel cho logo chính. Nhập giá trị số mà không cần thêm "px" .';

$string['hide_banner']        = 'Thêm liên kết trang web của bạn mà bạn muốn ẩn banner trang';
$string['hide_banner_desc']   = 'Nhập mỗi liên kết trên một dòng mới';

$string['hide_page_bottom_content']        = 'Thêm liên kết trang web của bạn mà bạn muốn ẩn nội dung dưới cùng của trang';
$string['hide_page_bottom_content_desc']   = 'Nhập mỗi liên kết trên một dòng mới. Lưu ý: Nó sẽ không hoạt động khi Chế độ chỉnh sửa được bật';

$string['mobile_logo']              = 'Logo di động';
$string['mobile_logo_desc']         = 'Logo di động của trang web của bạn.';
$string['mobile_logo_width']        = 'Chiều rộng Hình ảnh Logo di động';
$string['mobile_logo_width_desc']   = 'Chiều rộng tính bằng pixel cho logo di động. Nhập giá trị số mà không cần thêm "px".';
$string['mobile_logo_height']       = 'Chiều cao Hình ảnh Logo di động';
$string['mobile_logo_height_desc']  = 'Chiều cao tính bằng pixel cho logo di động. Nhập giá trị số mà không cần thêm "px".';


$string['footersettings']           = 'Chân trang';
$string['footer_copyright']         = 'Bản quyền';
$string['footer_logo_sec']          = 'Logo chân trang';
$string['footer_logo_visibility']   = 'Hiển thị Logo chân trang';
$string['main_footer_logo']         = 'Logo chân trang';
$string['main_footer_logo_desc']    = 'Logo chân trang của trang web của bạn.';
$string['footer_logo_width']        = 'Chiều rộng Hình ảnh Logo chân trang';
$string['footer_logo_width_desc']   = 'Chiều rộng tính bằng pixel cho logo chân trang. Nhập giá trị số mà không cần thêm "px".';
$string['footer_logo_height']       = 'Chiều cao Hình ảnh Logo chân trang';
$string['footer_logo_height_desc']  = 'Chiều cao tính bằng pixel cho logo chân trang. Nhập giá trị số mà không cần thêm "px" .';

$string['header_settings']      = 'Tiêu đề';
$string['top_header']        = 'Tiêu đề trên cùng';
$string['header_search']        = 'Tìm kiếm tiêu đề';
$string['search_placeholder']   = 'Tiêu đề Nơi chứa Tìm kiếm';
$string['header_search_desc']   = 'Cài đặt cho chức năng tìm kiếm trong tiêu đề.';
$string['header_settings']      = 'Tiêu đề';
$string['header_left_btn_text']      = 'Văn bản Liên kết trái tiêu đề';
$string['header_left_btn_text_desc'] = 'Cài đặt cho văn bản liên kết tiêu đề (Liên kết này chỉ hiển thị khi người dùng chưa đăng nhập).';
$string['top_header_content']      = 'Nội dung tiêu đề trên cùng';
$string['top_header_content_desc'] = 'Hỗ trợ HTML';
$string['top_header_right_content']      = 'Nội dung phải của tiêu đề trên cùng';
$string['top_header_right_content_desc'] = 'Hỗ trợ HTML';
$string['header_left_btn_url']       = 'Liên kết trái tiêu đề URL';
$string['header_left_btn_url_desc']  = 'Liên kết cho văn bản liên kết tiêu đề. Lưu ý: Để trống cho URL đăng nhập mặc định';
$string['header_btn_url']       = 'Liên kết Nút Biểu tượng tiêu đề';
$string['header_btn_url_desc']  = 'Liên kết cho nút tiêu đề. Lưu ý: Để trống cho URL đăng ký mặc định';
$string['header_btn_icon']      = 'Biểu tượng Nút Tiêu đề';
$string['header_btn_icon_desc'] = 'Biểu tượng cho nút tiêu đề';

$string['social_target'] = 'Mục tiêu cửa sổ URL mạng xã hội';
$string['social_target_desc'] = 'Xác định xem các URL mạng xã hội có nên mở trên cùng một trang hay trong một cửa sổ mới không.';
$string['social_settings'] = 'Mạng xã hội';
$string['edly_facebook_url'] = 'URL Facebook';
$string['edly_facebook_url_desc'] = 'Liên kết đến hồ sơ Facebook của công ty của bạn.';
$string['edly_twitter_url'] = 'URL Twitter';
$string['edly_twitter_url_desc'] = 'Liên kết đến hồ sơ Twitter của công ty của bạn.';
$string['edly_instagram_url'] = 'URL Instagram';
$string['edly_instagram_url_desc'] = 'Liên kết đến hồ sơ Instagram của công ty của bạn.';
$string['edly_dribbble_url'] = 'URL Dribbble';
$string['edly_dribbble_url_desc'] = 'Liên kết đến hồ sơ Dribbble của công ty của bạn.';
$string['edly_pinterest_url'] = 'URL Pinterest';
$string['edly_pinterest_url_desc'] = 'Liên kết đến hồ sơ Pinterest của công ty của bạn.';
$string['edly_google_url'] = 'URL Google';
$string['edly_google_url_desc'] = 'Liên kết đến hồ sơ Google của công ty của bạn.';
$string['edly_youtube_url'] = 'URL YouTube';
$string['edly_youtube_url_desc'] = 'Liên kết đến hồ sơ YouTube của công ty của bạn.';
$string['edly_vk_url'] = 'URL VK';
$string['edly_vk_url_desc'] = 'Liên kết đến hồ sơ VK của công ty của bạn.';
$string['edly_500px_url'] = 'URL 500px';
$string['edly_500px_url_desc'] = 'Liên kết đến hồ sơ 500px của công ty của bạn.';
$string['edly_behance_url'] = 'URL Behance';
$string['edly_behance_url_desc'] = 'Liên kết đến hồ sơ Behance của công ty của bạn.';
$string['edly_digg_url'] = 'URL Digg';
$string['edly_digg_url_desc'] = 'Liên kết đến hồ sơ Digg của công ty của bạn.';
$string['edly_flickr_url'] = 'URL Flickr';
$string['edly_flickr_url_desc'] = 'Liên kết đến hồ sơ Flickr của công ty của bạn.';
$string['edly_foursquare_url'] = 'URL Foursquare';
$string['edly_foursquare_url_desc'] = 'Liên kết đến hồ sơ Foursquare của công ty của bạn.';
$string['edly_linkedin_url'] = 'URL LinkedIn';
$string['edly_linkedin_url_desc'] = 'Liên kết đến hồ sơ LinkedIn của công ty của bạn.';
$string['edly_medium_url'] = 'URL Medium';
$string['edly_medium_url_desc'] = 'Liên kết đến hồ sơ Medium của công ty của bạn.';
$string['edly_meetup_url'] = 'URL Meetup';
$string['edly_meetup_url_desc'] = 'Liên kết đến hồ sơ Meetup của công ty của bạn.';
$string['edly_snapchat_url'] = 'URL Snapchat';
$string['edly_snapchat_url_desc'] = 'Liên kết đến hồ sơ Snapchat của công ty của bạn.';
$string['edly_tumblr_url'] = 'URL Tumblr';
$string['edly_tumblr_url_desc'] = 'Liên kết đến hồ sơ Tumblr của công ty của bạn.';
$string['edly_vimeo_url'] = 'URL Vimeo';
$string['edly_vimeo_url_desc'] = 'Liên kết đến hồ sơ Vimeo của công ty của bạn.';
$string['edly_wechat_url'] = 'URL WeChat';
$string['edly_wechat_url_desc'] = 'Liên kết đến hồ sơ WeChat của công ty của bạn.';
$string['edly_whatsapp_url'] = 'URL WhatsApp';
$string['edly_whatsapp_url_desc'] = 'Liên kết đến hồ sơ WhatsApp của công ty của bạn.';
$string['edly_wordpress_url'] = 'URL WordPress';
$string['edly_wordpress_url_desc'] = 'Liên kết đến hồ sơ WordPress của công ty của bạn.';
$string['edly_weibo_url'] = 'URL Weibo';
$string['edly_weibo_url_desc'] = 'Liên kết đến hồ sơ Weibo của công ty của bạn.';
$string['edly_telegram_url'] = 'URL Telegram';
$string['edly_telegram_url_desc'] = 'Liên kết đến hồ sơ Telegram của công ty của bạn.';
$string['edly_moodle_url'] = 'URL Moodle';
$string['edly_moodle_url_desc'] = 'Liên kết đến hồ sơ Moodle của công ty của bạn.';
$string['edly_amazon_url'] = 'URL Amazon';
$string['edly_amazon_url_desc'] = 'Liên kết đến hồ sơ Amazon của công ty của bạn.';
$string['edly_slideshare_url'] = 'URL SlideShare';
$string['edly_slideshare_url_desc'] = 'Liên kết đến hồ sơ SlideShare của công ty của bạn.';
$string['edly_soundcloud_url'] = 'URL Soundcloud';
$string['edly_soundcloud_url_desc'] = 'Liên kết đến hồ sơ Soundcloud của công ty của bạn.';
$string['edly_leanpub_url'] = 'URL Leanpub';
$string['edly_leanpub_url_desc'] = 'Liên kết đến hồ sơ Leanpub của công ty của bạn.';
$string['edly_xing_url'] = 'URL Xing';
$string['edly_xing_url_desc'] = 'Liên kết đến hồ sơ Xing của công ty của bạn.';
$string['edly_bitcoin_url'] = 'URL Bitcoin';
$string['edly_bitcoin_url_desc'] = 'Liên kết đến hồ sơ Bitcoin của công ty của bạn.';
$string['edly_twitch_url'] = 'URL Twitch';
$string['edly_twitch_url_desc'] = 'Liên kết đến hồ sơ Twitch của công ty của bạn.';
$string['edly_github_url'] = 'URL Github';
$string['edly_github_url_desc'] = 'Liên kết đến hồ sơ Github của công ty của bạn.';
$string['edly_gitlab_url'] = 'URL Gitlab';
$string['edly_gitlab_url_desc'] = 'Liên kết đến hồ sơ Gitlab của công ty của bạn.';
$string['edly_forumbee_url'] = 'URL Forumbee';
$string['edly_forumbee_url_desc'] = 'Liên kết đến hồ sơ Forumbee của công ty của bạn.';
$string['edly_trello_url'] = 'URL Trello';
$string['edly_trello_url_desc'] = 'Liên kết đến hồ sơ Trello của công ty của bạn.';
$string['edly_weixin_url'] = 'URL Weixin';
$string['edly_weixin_url_desc'] = 'Liên kết đến hồ sơ Weixin của công ty của bạn.';
$string['edly_slack_url'] = 'URL Slack';
$string['edly_slack_url_desc'] = 'Liên kết đến hồ sơ Slack của công ty của bạn.';

$string['banner_shape_image']              = 'Hình ảnh hình dạng Banner 1';
$string['banner_shape_image_desc']         = 'Hình dạng banner của trang web của bạn.';

$string['banner_shape_image2']              = 'Hình ảnh hình dạng Banner 2';
$string['banner_shape_image2_desc']         = 'Hình dạng banner của trang web của bạn.';

$string['offcanvas_social_title']              = 'Tiêu đề Xã hội thanh bên trái';
$string['offcanvas_social_title_desc']         = 'Tiêu đề xã hội thanh bên trái của trang web của bạn';

$string['back_to_top'] = 'Quay lại đầu trang';
$string['back_to_top_desc'] = 'Hiển thị hoặc ẩn nút quay lại đầu trang trên giao diện trước.';

$string['hide_global_banner'] = 'Banner toàn cầu';
$string['hide_global_banner_desc'] = 'Hiển thị hoặc ẩn banner cho toàn bộ trang web. Nếu bạn ẩn banner cho toàn bộ trang web thì trường hide_banner sẽ không hoạt động';

$string['hide_guest_access_curriculum'] = 'Chương trình giảng dạy khóa học cho quyền truy cập Khách';
$string['hide_guest_access_curriculum_desc'] = 'Hiển thị hoặc ẩn chương trình giảng dạy từ người dùng khách';

$string['preloader'] = 'Preloader';
$string['preloader_desc'] = 'Hiển thị hoặc ẩn preloader trang web';

$string['footer_info'] = 'Thông tin chân trang';
$string['footer_info_desc'] = '';
$string['footer_info_title'] = 'Tiêu đề thông tin chân trang';
$string['footer_info_title_desc'] = '';
$string['footer_info_content'] = 'Nội dung thông tin chân trang';
$string['footer_info_content_desc'] = '';
$string['footer_info_url'] = 'URL thông tin chân trang';
$string['footer_info_url_desc'] = '';

$string['footer_contact'] = 'Liên hệ chân trang';
$string['footer_contact_desc'] = '';
$string['footer_contact_title'] = 'Tiêu đề liên hệ chân trang';
$string['footer_contact_title_desc'] = '';
$string['footer_contact_content'] = 'Nội dung liên hệ chân trang';
$string['footer_contact_content_desc'] = '';
$string['footer_contact_url'] = 'URL liên hệ chân trang';
$string['footer_contact_url_desc'] = '';

$string['header_top_link'] = 'Liên kết tiêu đề phía trên';
$string['header_top_link_desc'] = '';
$string['header_top_link1'] = 'Liên kết 1 tiêu đề phía trên';
$string['header_top_link1_desc'] = '';
$string['header_top_link1_url'] = 'URL Liên kết 1 tiêu đề phía trên';
$string['header_top_link1_url_desc'] = '';
$string['header_top_link2'] = 'Liên kết 2 tiêu đề phía trên';
$string['header_top_link2_desc'] = '';
$string['header_top_link2_url'] = 'URL Liên kết 2 tiêu đề phía trên';
$string['header_top_link2_url_desc'] = '';
$string['header_top_link3'] = 'Liên kết 3 tiêu đề phía trên';
$string['header_top_link3_desc'] = '';
$string['header_top_link3_url'] = 'URL Liên kết 3 tiêu đề phía trên';
$string['header_top_link3_url_desc'] = '';
$string['header_top_link4'] = 'Liên kết 4 tiêu đề phía trên';
$string['header_top_link4_desc'] = '';
$string['header_top_link4_url'] = 'URL Liên kết 4 tiêu đề phía trên';
$string['header_top_link4_url_desc'] = '';

$string['event_slider_settings'] = 'Thiết lập sự kiện trình chiếu';
$string['event_slider_settings_desc'] = '';
$string['event_slider_image'] = 'Hình ảnh sự kiện';
$string['event_slider_image_desc'] = '';
$string['event_slider_title'] = 'Tiêu đề sự kiện';
$string['event_slider_title_desc'] = '';
$string['event_slider_description'] = 'Mô tả sự kiện';
$string['event_slider_description_desc'] = '';
$string['event_slider_url'] = 'URL sự kiện';
$string['event_slider_url_desc'] = '';
$string['event_slider_button_text'] = 'Văn bản nút sự kiện';
$string['event_slider_button_text_desc'] = '';
$string['event_slider_button_url'] = 'URL nút sự kiện';
$string['event_slider_button_url_desc'] = '';

$string['call_to_action_settings'] = 'Thiết lập Cuộc gọi Hành động';
$string['call_to_action_settings_desc'] = '';
$string['call_to_action_title'] = 'Tiêu đề Cuộc gọi Hành động';
$string['call_to_action_title_desc'] = '';
$string['call_to_action_description'] = 'Mô tả Cuộc gọi Hành động';
$string['call_to_action_description_desc'] = '';
$string['call_to_action_button_text'] = 'Văn bản nút Cuộc gọi Hành động';
$string['call_to_action_button_text_desc'] = '';
$string['call_to_action_button_url'] = 'URL nút Cuộc gọi Hành động';
$string['call_to_action_button_url_desc'] = '';

$string['course_of_the_month_settings'] = 'Thiết lập Khóa học của tháng';
$string['course_of_the_month_settings_desc'] = '';
$string['course_of_the_month_image'] = 'Hình ảnh Khóa học của tháng';
$string['course_of_the_month_image_desc'] = '';
$string['course_of_the_month_title'] = 'Tiêu đề Khóa học của tháng';
$string['course_of_the_month_title_desc'] = '';
$string['course_of_the_month_description'] = 'Mô tả Khóa học của tháng';
$string['course_of_the_month_description_desc'] = '';
$string['course_of_the_month_url'] = 'URL Khóa học của tháng';
$string['course_of_the_month_url_desc'] = '';

$string['why_choose_us_settings'] = 'Thiết lập Tại sao chọn chúng tôi';
$string['why_choose_us_settings_desc'] = '';
$string['why_choose_us_title'] = 'Tiêu đề Tại sao chọn chúng tôi';
$string['why_choose_us_title_desc'] = '';
$string['why_choose_us_description'] = 'Mô tả Tại sao chọn chúng tôi';
$string['why_choose_us_description_desc'] = '';
$string['why_choose_us_button_text'] = 'Văn bản nút Tại sao chọn chúng tôi';
$string['why_choose_us_button_text_desc'] = '';
$string['why_choose_us_button_url'] = 'URL nút Tại sao chọn chúng tôi';
$string['why_choose_us_button_url_desc'] = '';

$string['youtube_video_settings'] = 'Thiết lập Video YouTube';
$string['youtube_video_settings_desc'] = '';
$string['youtube_video_url'] = 'URL Video YouTube';
$string['youtube_video_url_desc'] = '';
$string['youtube_video_title'] = 'Tiêu đề Video YouTube';
$string['youtube_video_title_desc'] = '';
$string['youtube_video_description'] = 'Mô tả Video YouTube';
$string['youtube_video_description_desc'] = '';
$string['youtube_video_button_text'] = 'Văn bản nút Video YouTube';
$string['youtube_video_button_text_desc'] = '';
$string['youtube_video_button_url'] = 'URL nút Video YouTube';
$string['youtube_video_button_url_desc'] = '';

$string['meta'] = 'Meta';
$string['meta_desc'] = '';
$string['meta_title'] = 'Tiêu đề Meta';
$string['meta_title_desc'] = '';
$string['meta_description'] = 'Mô tả Meta';
$string['meta_description_desc'] = '';

$string['css'] = 'CSS';
$string['css_desc'] = '';
$string['header_css'] = 'CSS tiêu đề';
$string['header_css_desc'] = '';
$string['footer_css'] = 'CSS chân trang';
$string['footer_css_desc'] = '';
$string['extra_css'] = 'CSS Phụ';
$string['extra_css_desc'] = '';
$string['save_css'] = 'Lưu CSS';
$string['save_css_desc'] = '';

$string['fonts'] = 'Phông chữ';
$string['fonts_desc'] = '';
$string['header_font'] = 'Phông chữ tiêu đề';
$string['header_font_desc'] = '';
$string['body_font'] = 'Phông chữ nội dung';
$string['body_font_desc'] = '';
$string['link_font'] = 'Phông chữ liên kết';
$string['link_font_desc'] = '';
$string['save_fonts'] = 'Lưu Phông chữ';
$string['save_fonts_desc'] = '';

$string['custom_js'] = 'Tùy chỉnh JS';
$string['custom_js_desc'] = '';
$string['header_js'] = 'JS Tiêu đề';
$string['header_js_desc'] = '';
$string['footer_js'] = 'JS Chân trang';
$string['footer_js_desc'] = '';
$string['save_js'] = 'Lưu JS';
$string['save_js_desc'] = '';

$string['site_layout'] = 'Bố cục trang web';
$string['site_layout_desc'] = '';
$string['site_boxed'] = 'Trang hộp';
$string['site_boxed_desc'] = 'Bật hoặc tắt hộp trang';
$string['site_boxed_bg'] = 'Nền hộp trang';
$string['site_boxed_bg_desc'] = 'Tải lên hình nền hộp trang.';

$string['extra_js'] = 'Extra JS';
$string['extra_js_desc'] = '';
$string['extra_js_save'] = 'Lưu Extra JS';
$string['extra_js_save_desc'] = '';

$string['admin_login_url'] = 'Đăng nhập quản trị viên';
$string['admin_login_url_desc'] = 'Nhập URL quản trị viên của bạn';
$string['admin_register_url'] = 'Đăng ký quản trị viên';
$string['admin_register_url_desc'] = 'Nhập URL đăng ký quản trị viên của bạn';
$string['admin_reset_url'] = 'Đặt lại quản trị viên';
$string['admin_reset_url_desc'] = 'Nhập URL đặt lại quản trị viên của bạn';

$string['hide_banner'] = 'Ẩn banner';
$string['hide_banner_desc'] = 'Nhập số lượng ngày bạn muốn ẩn banner';
