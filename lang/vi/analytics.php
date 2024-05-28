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
 * Strings for core_analytics.
 *
 * @package core_analytics
 * @copyright 2016 David Monllao {@link http://www.davidmonllao.com}
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['analysablenotused'] = 'Có thể phân tích {$a->analysableid} không được sử dụng: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Có thể phân tích {$a->analysableid} không hợp lệ cho mục tiêu này: {$a->result}';
$string['analysisinprogress'] = 'Đang được phân tích bởi một thực hiện trước';
$string['analytics'] = 'Phân tích';
$string['analyticsdisabled'] = 'Phân tích bị vô hiệu. Bạn có thể kích hoạt nó trong "Quản trị trang > Tính năng nâng cao".';
$string['analyticslogstore'] = 'Kho log sử dụng cho phân tích';
$string['analyticslogstore_help'] = 'Kho log sẽ được API phân tích sử dụng để đọc hoạt động của người dùng.';
$string['analyticssettings'] = 'Cài đặt phân tích';
$string['analyticssiteinfo'] = 'Thông tin trang web';
$string['calclifetime'] = 'Giữ tính toán phân tích trong';
$string['configlcalclifetime'] = 'Điều này xác định thời gian bạn muốn giữ dữ liệu tính toán - điều này sẽ không xóa các dự đoán, nhưng sẽ xóa dữ liệu được sử dụng để tạo ra các dự đoán. Sử dụng tùy chọn mặc định ở đây là tốt nhất vì nó giữ cho việc sử dụng đĩa của bạn dưới kiểm soát, tuy nhiên nếu bạn đang sử dụng bảng tính toán cho các mục đích khác, bạn có thể muốn tăng giá trị này.';
$string['defaulttimesplittingmethods'] = 'Khoảng thời gian phân tích mặc định để đánh giá mô hình';
$string['defaulttimesplittingmethods_help'] = 'Khoảng thời gian phân tích xác định khi nào hệ thống sẽ tính toán dự đoán và phần log hoạt động nào sẽ được xem xét cho các dự đoán đó. Quá trình đánh giá mô hình sẽ lặp qua các khoảng thời gian phân tích này trừ khi một khoảng thời gian phân tích cụ thể được chỉ định.';
$string['defaultpredictionsprocessor'] = 'Bộ xử lý dự đoán mặc định';
$string['defaultpredictoroption'] = 'Bộ xử lý mặc định ({$a})';
$string['disabledmodel'] = 'Mô hình bị vô hiệu';
$string['erroralreadypredict'] = 'Tệp {$a} đã được sử dụng để tạo dự đoán.';
$string['errorcannotreaddataset'] = 'Tệp dữ liệu {$a} không thể đọc được.';
$string['errorcannotusetimesplitting'] = 'Khoảng thời gian phân tích được cung cấp không thể sử dụng trên mô hình này.';
$string['errorcannotwritedataset'] = 'Tệp dữ liệu {$a} không thể ghi.';
$string['errorexportmodelresult'] = 'Mô hình học máy không thể xuất khẩu.';
$string['errorimport'] = 'Lỗi nhập tệp JSON đã cung cấp.';
$string['errorimportmissingcomponents'] = 'Mô hình đã cung cấp yêu cầu các plugin sau đây phải được cài đặt: {$a}. Lưu ý rằng các phiên bản không nhất thiết phải khớp với các phiên bản được cài đặt trên trang web của bạn. Cài đặt cùng hoặc phiên bản mới hơn của plugin nên ổn trong hầu hết các trường hợp.';
$string['errorimportversionmismatches'] = 'Phiên bản của các thành phần sau khác với phiên bản được cài đặt trên trang web này: {$a}. Bạn có thể sử dụng tùy chọn \'Bỏ qua sự không phù hợp phiên bản\' để bỏ qua những khác biệt này.';
$string['errorimportmissingclasses'] = 'Các thành phần phân tích sau không có sẵn trên trang web này: {$a->missingclasses}.';
$string['errorinvalidindicator'] = 'Chỉ báo không hợp lệ {$a}';
$string['errorinvalidcontexts'] = 'Một số ngữ cảnh đã chọn không thể được sử dụng trong mục tiêu này.';
$string['errorinvalidtarget'] = 'Mục tiêu không hợp lệ {$a}';
$string['errorinvalidtimesplitting'] = 'Khoảng thời gian phân tích không hợp lệ; hãy đảm bảo bạn thêm tên lớp đầy đủ đủ tiêu chuẩn.';
$string['errornocontextrestrictions'] = 'Mục tiêu đã chọn không hỗ trợ các hạn chế ngữ cảnh';
$string['errornoexportconfig'] = 'Có vấn đề khi xuất cấu hình mô hình.';
$string['errornoexportconfigrequirements'] = 'Chỉ các mô hình không tĩnh với khoảng thời gian phân tích mới có thể xuất khẩu.';
$string['errornoindicators'] = 'Mô hình này không có chỉ báo nào.';
$string['errornopredictresults'] = 'Không có kết quả trả về từ bộ xử lý dự đoán. Kiểm tra nội dung thư mục đầu ra để biết thêm thông tin.';
$string['errornotimesplittings'] = 'Mô hình này không có khoảng thời gian phân tích.';
$string['errornoroles'] = 'Vai trò sinh viên hoặc giáo viên chưa được xác định. Xác định chúng trong trang cài đặt phân tích.';
$string['errornotarget'] = 'Mô hình này không có mục tiêu nào.';
$string['errorpredictioncontextnotavailable'] = 'Ngữ cảnh dự đoán này không còn khả dụng.';
$string['errorpredictionformat'] = 'Định dạng tính toán dự đoán sai';
$string['errorpredictionnotfound'] = 'Không tìm thấy dự đoán';
$string['errorpredictionsprocessor'] = 'Lỗi bộ xử lý dự đoán: {$a}';
$string['errorpredictwrongformat'] = 'Bộ xử lý dự đoán trả về không thể giải mã: "{$a}"';
$string['errorprocessornotready'] = 'Bộ xử lý dự đoán đã chọn chưa sẵn sàng: {$a}';
$string['errorsamplenotavailable'] = 'Mẫu dự đoán không còn khả dụng.';
$string['errorunexistingtimesplitting'] = 'Khoảng thời gian phân tích đã chọn không có sẵn.';
$string['errorunexistingmodel'] = 'Mô hình không tồn tại {$a}';
$string['errorunknownaction'] = 'Hành động không xác định';
$string['eventpredictionactionstarted'] = 'Quá trình dự đoán bắt đầu';
$string['eventinsightsviewed'] = 'Thông tin chi tiết được xem';
$string['fixedack'] = 'Chấp nhận';
$string['incorrectlyflagged'] = 'Đánh dấu sai';
$string['insightmessagesubject'] = 'Thông tin chi tiết mới cho "{$a}"';
$string['insightinfomessagehtml'] = 'Hệ thống đã tạo ra một thông tin chi tiết cho bạn.';
$string['insightinfomessageplain'] = 'Hệ thống đã tạo ra một thông tin chi tiết cho bạn: {$a}';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['invalidtimesplitting'] = 'Mô hình với ID {$a} cần một khoảng thời gian phân tích trước khi có thể sử dụng để đào tạo.';
$string['invalidanalysablefortimesplitting'] = 'Không thể phân tích bằng cách sử dụng khoảng thời gian phân tích {$a}.';
$string['levelinstitution'] = 'Trình độ giáo dục';
$string['levelinstitutionisced0'] = 'Giáo dục mầm non (ít hơn trình độ tiểu học)';
$string['levelinstitutionisced1'] = 'Giáo dục tiểu học';
$string['levelinstitutionisced2'] = 'Giáo dục trung học cơ sở';
$string['levelinstitutionisced3'] = 'Giáo dục trung học phổ thông';
$string['levelinstitutionisced4'] = 'Giáo dục sau trung học không phải là giáo dục đại học (có thể bao gồm đào tạo của công ty hoặc tổ chức phi chính phủ)';
$string['levelinstitutionisced5'] = 'Giáo dục đại học ngắn hạn (có thể bao gồm đào tạo của công ty hoặc tổ chức phi chính phủ)';
$string['levelinstitutionisced6'] = 'Trình độ cử nhân hoặc tương đương';
$string['levelinstitutionisced7'] = 'Trình độ thạc sĩ hoặc tương đương';
$string['levelinstitutionisced8'] = 'Trình độ tiến sĩ hoặc tương đương';
$string['nocourses'] = 'Không có khóa học để phân tích';
$string['modeinstruction'] = 'Phương thức giảng dạy';
$string['modeinstructionfacetoface'] = 'Trực tiếp';
$string['modeinstructionblendedhybrid'] = 'Kết hợp hoặc lai';
$string['modeinstructionfullyonline'] = 'Hoàn toàn trực tuyến';
$string['modeloutputdir'] = 'Thư mục đầu ra của mô hình';
$string['modeloutputdirwithdefaultinfo'] = 'Thư mục nơi các bộ xử lý dự đoán lưu trữ tất cả thông tin đánh giá. Hữu ích cho việc gỡ lỗi và nghiên cứu. Nếu để trống, {$a} sẽ được sử dụng làm mặc định.';
$string['modeltimelimit'] = 'Giới hạn thời gian phân tích mỗi mô hình';
$string['modeltimelimitinfo'] = 'Cài đặt này giới hạn thời gian mỗi mô hình dành để phân tích nội dung trang web.';
$string['neutral'] = 'Trung lập';
$string['neverdelete'] = 'Không bao giờ xóa tính toán';
$string['noevaluationbasedassumptions'] = 'Các mô hình dựa trên giả định không thể được đánh giá.';
$string['nodata'] = 'Không có dữ liệu để phân tích';
$string['noinsightsmodel'] = 'Mô hình này không tạo ra thông tin chi tiết';
$string['noinsights'] = 'Không có thông tin chi tiết nào được báo cáo';
$string['nonewdata'] = 'Không có dữ liệu mới. Mô hình sẽ được phân tích sau khoảng thời gian phân tích tiếp theo.';
$string['nonewranges'] = 'Chưa có dự đoán mới. Mô hình sẽ được phân tích sau khoảng thời gian phân tích tiếp theo.';
$string['nopredictionsyet'] = 'Chưa có dự đoán nào có sẵn';
$string['noranges'] = 'Chưa có dự đoán nào';
$string['notapplicable'] = 'Không áp dụng';
$string['notrainingbasedassumptions'] = 'Các mô hình dựa trên giả định không cần đào tạo';
$string['notuseful'] = 'Không hữu ích';
$string['novaliddata'] = 'Không có dữ liệu hợp lệ nào có sẵn';
$string['novalidsamples'] = 'Không có mẫu hợp lệ nào có sẵn';
$string['onlycli'] = 'Các quy trình phân tích chỉ thực hiện qua dòng lệnh';
$string['onlycliinfo'] = 'Các quy trình phân tích như đánh giá mô hình, đào tạo thuật toán máy học hoặc lấy dự đoán có thể mất một thời gian. Chúng chạy dưới dạng các tác vụ cron hoặc có thể được bắt buộc qua dòng lệnh. Nếu bị vô hiệu, các quy trình phân tích có thể được chạy thủ công qua giao diện web.';
$string['percentonline'] = 'Phần trăm trực tuyến';
$string['percentonline_help'] = 'Nếu tổ chức của bạn cung cấp các khóa học kết hợp hoặc lai, tỷ lệ phần trăm công việc của sinh viên được thực hiện trực tuyến trên Moodle là bao nhiêu? Nhập số từ 0 đến 100.';
$string['predictionsprocessor'] = 'Bộ xử lý dự đoán';
$string['predictionsprocessor_help'] = 'Bộ xử lý dự đoán là nền tảng máy học xử lý các tập dữ liệu được tạo ra bằng cách tính toán các chỉ báo và mục tiêu của mô hình. Mỗi mô hình có thể sử dụng một bộ xử lý khác nhau. Bộ xử lý được chỉ định ở đây sẽ là mặc định.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Tính toán chỉ báo';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Thời gian bắt đầu tính toán';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Thời gian kết thúc tính toán';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Ngữ cảnh';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Bảng gốc của mẫu';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'ID mẫu';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Lớp tính toán chỉ báo';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Giá trị đã tính toán';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Khi dự đoán được thực hiện';
$string['privacy:metadata:analytics:predictions'] = 'Dự đoán';
$string['privacy:metadata:analytics:predictions:modelid'] = 'ID mô hình';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Ngữ cảnh';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'ID mẫu';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Chỉ số của khoảng thời gian phân tích';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Dự đoán';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Điểm dự đoán';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Tính toán chỉ báo';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Khi dự đoán được thực hiện';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Thời gian bắt đầu tính toán';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Thời gian kết thúc tính toán';
$string['privacy:metadata:analytics:predictionactions'] = 'Hành động dự đoán';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'ID dự đoán';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Người dùng đã thực hiện hành động';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Tên hành động';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Khi hành động dự đoán được thực hiện';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Mô hình phân tích';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'Người dùng đã sửa đổi mô hình';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Log sử dụng cho các mô hình phân tích';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'Người dùng đã sửa đổi log';
$string['processingsitecontents'] = 'Đang xử lý nội dung trang web';
$string['successfullyanalysed'] = 'Đã phân tích thành công';
$string['timesplittingmethod'] = 'Khoảng thời gian phân tích';
$string['timesplittingmethod_help'] = 'Khoảng thời gian phân tích xác định khi nào hệ thống sẽ tính toán dự đoán và phần log hoạt động nào sẽ được xem xét cho các dự đoán đó. Ví dụ, thời gian khóa học có thể được chia thành các phần, với một dự đoán được tạo ra vào cuối mỗi phần.';
$string['timesplittingmethod_link'] = 'Phương pháp_chia_thời_gian';
$string['typeinstitution'] = 'Loại tổ chức';
$string['typeinstitutionacademic'] = 'Học thuật';
$string['typeinstitutiontraining'] = 'Đào tạo công ty';
$string['typeinstitutionngo'] = 'Tổ chức phi chính phủ (NGO)';
$string['useful'] = 'Hữu ích';
$string['viewdetails'] = 'Xem chi tiết';
$string['viewinsight'] = 'Xem thông tin chi tiết';
$string['viewinsightdetails'] = 'Xem chi tiết thông tin chi tiết';
$string['viewprediction'] = 'Xem chi tiết dự đoán';
$string['washelpful'] = 'Điều này có hữu ích không?';
