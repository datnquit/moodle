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
 * Strings for tool_analytics.
 *
 * @package tool_analytics
 * @copyright 2016 David Monllao {@link http://www.davidmonllao.com}
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['accuracy'] = 'Độ chính xác';
$string['actions'] = 'Hành động';
$string['actionsexecutedbyusers'] = 'Các hành động được thực hiện bởi người dùng';
$string['actionsexecutedbyusersfor'] = 'Các hành động được thực hiện bởi người dùng cho mô hình "{$a}"';
$string['actionexecutedgroupedusefulness'] = 'Các hành động được nhóm lại';
$string['allpredictions'] = 'Tất cả các dự đoán';
$string['alltimesplittingmethods'] = 'Tất cả các phương pháp phân tích khoảng thời gian';
$string['analysingsitedata'] = 'Phân tích dữ liệu trang web';
$string['analysis'] = 'Phân tích';
$string['analyticmodels'] = 'Mô hình phân tích';
$string['bettercli'] = 'Đánh giá mô hình và tạo dự đoán có thể đòi hỏi xử lý nặng. Đề xuất chạy những hành động này từ dòng lệnh.';
$string['cantguessstartdate'] = 'Không thể đoán ngày bắt đầu';
$string['cantguessenddate'] = 'Không thể đoán ngày kết thúc';
$string['classdoesnotexist'] = 'Lớp {$a} không tồn tại';
$string['clearpredictions'] = 'Xóa dự đoán';
$string['clearmodelpredictions'] = 'Bạn có chắc muốn xóa tất cả các dự đoán "{$a}" không?';
$string['clienablemodel'] = 'Bạn có thể bật mô hình bằng cách chọn một khoảng thời gian phân tích bằng ID của nó. Lưu ý rằng bạn cũng có thể bật nó sau này bằng giao diện web (\'none\' để thoát).';
$string['clievaluationandpredictions'] = 'Một nhiệm vụ được lập lịch lặp lại qua các mô hình được bật và nhận dự đoán. Việc đánh giá mô hình qua giao diện web bị vô hiệu hóa. Bạn có thể cho phép các quy trình này được thực hiện thủ công qua giao diện web bằng cách vô hiệu hóa cài đặt phân tích <a href="{$a}">\'onlycli\'</a>.';
$string['clievaluationandpredictionsnoadmin'] = 'Một nhiệm vụ được lập lịch lặp lại qua các mô hình được bật và nhận dự đoán. Việc đánh giá mô hình qua giao diện web bị vô hiệu hóa. Nó có thể được bật bởi một quản trị viên trang web.';
$string['component'] = 'Thành phần';
$string['componentcore'] = 'Core';
$string['componentselect'] = 'Chọn tất cả các mô hình được cung cấp bởi thành phần \'{$a}\'';
$string['componentselectnone'] = 'Bỏ chọn tất cả';
$string['contexts'] = 'Bối cảnh';
$string['contexts_help'] = 'Mô hình sẽ bị giới hạn trong tập hợp các bối cảnh này. Không có ràng buộc bối cảnh nào sẽ được áp dụng nếu không có bối cảnh nào được chọn.';
$string['createmodel'] = 'Tạo mô hình';
$string['currenttimesplitting'] = 'Khoảng thời gian phân tích hiện tại';
$string['delete'] = 'Xóa';
$string['deletemodelconfirmation'] = 'Bạn có chắc muốn xóa "{$a}" không? Những thay đổi này không thể được khôi phục.';
$string['disabled'] = 'Vô hiệu hóa';
$string['editmodel'] = 'Chỉnh sửa mô hình "{$a}"';
$string['edittrainedwarning'] = 'Mô hình này đã được huấn luyện. Lưu ý rằng việc thay đổi các chỉ số hoặc khoảng thời gian phân tích của nó sẽ xóa các dự đoán trước đó của nó và bắt đầu tạo ra các dự đoán mới.';
$string['enabled'] = 'Đã kích hoạt';
$string['errorcantenablenotimesplitting'] = 'Bạn cần chọn một khoảng thời gian phân tích trước khi kích hoạt mô hình';
$string['errornoenabledandtrainedmodels'] = 'Không có mô hình đã được kích hoạt và huấn luyện để dự đoán.';
$string['errornoenabledmodels'] = 'Không có mô hình được kích hoạt để huấn luyện.';
$string['errornoexport'] = 'Chỉ có các mô hình đã được huấn luyện mới có thể được xuất';
$string['errornostaticevaluated'] = 'Các mô hình dựa trên giả định không thể được đánh giá. Chúng luôn chính xác 100% theo cách được xác định.';
$string['errornostaticlog'] = 'Các mô hình dựa trên giả định không thể được đánh giá vì không có nhật ký hiệu suất.';
$string['erroronlycli'] = 'Chỉ được thực thi qua dòng lệnh';
$string['errortrainingdataexport'] = 'Dữ liệu huấn luyện mô hình không thể được xuất';
$string['evaluate'] = 'Đánh giá';
$string['evaluatemodel'] = 'Đánh giá mô hình';
$string['evaluationmode'] = 'Chế độ đánh giá';
$string['evaluationmode_help'] = 'Có hai chế độ đánh giá:

* Mô hình đã được huấn luyện - Dữ liệu trang web được sử dụng làm dữ liệu thử nghiệm để đánh giá độ chính xác của mô hình đã được huấn luyện.
* Cấu hình - Dữ liệu trang web được chia thành dữ liệu huấn luyện và thử nghiệm, để cả huấn luyện và thử nghiệm độ chính xác của cấu hình mô hình.

Mô hình đã được huấn luyện chỉ có sẵn nếu một mô hình đã được huấn luyện được nhập vào trang web và chưa được huấn luyện lại bằng dữ liệu trang web.';
$string['evaluationmodeinfo'] = 'Mô hình này đã được nhập vào trang web. Bạn có thể đánh giá hiệu suất của mô hình, hoặc bạn có thể đánh giá hiệu suất của cấu hình mô hình bằng cách sử dụng dữ liệu trang web.';
$string['evaluationmodetrainedmodel'] = 'Đánh giá mô hình đã được huấn luyện';
$string['evaluationmodecoltrainedmodel'] = 'Mô hình đã được huấn luyện';
$string['evaluationmodecolconfiguration'] = 'Cấu hình';
$string['evaluationmodeconfiguration'] = 'Đánh giá cấu hình mô hình';
$string['evaluationinbatches'] = 'Nội dung trang web được tính toán và lưu trữ theo lô. Quá trình đánh giá có thể được dừng lại bất kỳ lúc nào. Lần chạy tiếp theo, nó sẽ tiếp tục từ điểm mà nó đã dừng lại.';
$string['executescheduledanalysis'] = 'Thực hiện phân tích được lập lịch';
$string['export'] = 'Xuất';
$string['exportincludeweights'] = 'Bao gồm các trọng số của mô hình đã được huấn luyện';
$string['exportmodel'] = 'Xuất cấu hình';
$string['exporttrainingdata'] = 'Xuất dữ liệu huấn luyện';
$string['extrainfo'] = 'Thông tin thêm';
$string['generalerror'] = 'Lỗi đánh giá. Mã trạng thái {$a}';
$string['goodmodel'] = 'Đây là một mô hình tốt để sử dụng để nhận dự đoán. Kích hoạt nó để bắt đầu nhận dự đoán.';
$string['importmodel'] = 'Nhập mô hình';
$string['indicators'] = 'Chỉ số';
$string['indicators_help'] = 'Các chỉ số là những gì bạn nghĩ sẽ dẫn đến một dự đoán chính xác về mục tiêu.';
$string['indicators_link'] = 'Chỉ số';
$string['indicatorsnum'] = 'Số chỉ số: {$a}';
$string['info'] = 'Thông tin';
$string['insightsreport'] = 'Báo cáo Insights';
$string['ignoreversionmismatches'] = 'Bỏ qua sự không phù hợp về phiên bản';
$string['ignoreversionmismatchescheckbox'] = 'Bỏ qua sự khác biệt giữa phiên bản trang web này và phiên bản ban đầu.';
$string['importedsuccessfully'] = 'Mô hình đã được nhập thành công.';
$string['insights'] = 'Insights';
$string['invalidanalysables'] = 'Các phần tử trang web không hợp lệ';
$string['invalidanalysablesinfo'] = 'Trang này liệt kê các phần tử có thể phân tích không thể được sử dụng bởi mô hình dự đoán này. Các phần tử được liệt kê không thể được sử dụng để huấn luyện mô hình dự đoán hoặc mô hình dự đoán không thể nhận dự đoán cho chúng.';
$string['invalidanalysablestable'] = 'Bảng các phần tử phân tích trang web không hợp lệ';
$string['invalidcurrenttimesplitting'] = 'Khoảng thời gian phân tích hiện tại không hợp lệ cho mục tiêu của mô hình này. Vui lòng chọn một khoảng thời gian khác.';
$string['invalidindicatorsremoved'] = 'Một mô hình mới đã được thêm. Các chỉ số không hoạt động với mục tiêu đã chọn đã được tự động loại bỏ.';
$string['invalidtimesplitting'] = 'Khoảng thời gian phân tích được chọn không hợp lệ cho mục tiêu đã chọn.';
$string['invalidtimesplittinginmodels'] = 'Khoảng thời gian phân tích được sử dụng bởi một số mô hình không hợp lệ. Vui lòng chọn một khoảng thời gian khác cho các mô hình sau: {$a}';
$string['invalidprediction'] = 'Không hợp lệ để nhận dự đoán';
$string['invalidtraining'] = 'Không hợp lệ để huấn luyện mô hình';
$string['loginfo'] = 'Thông tin đăng nhập bổ sung';
$string['missingmoodleversion'] = 'Tệp đã được nhập không xác định số phiên bản';
$string['modelid'] = 'ID mô hình';
$string['modelinvalidanalysables'] = 'Các phần tử phân tích không hợp lệ cho mô hình "{$a}"';
$string['modelname'] = 'Tên mô hình';
$string['modelresults'] = 'Kết quả {$a}';
$string['modeltimesplitting'] = 'Khoảng thời gian phân tích';
$string['newmodel'] = 'Mô hình mới';
$string['nextpage'] = 'Trang tiếp theo';
$string['noactionsfound'] = 'Người dùng không thực hiện bất kỳ hành động nào trên các Insights được tạo ra.';
$string['nodatatoevaluate'] = 'Không có dữ liệu để đánh giá mô hình';
$string['nodatatopredict'] = 'Không có phần tử mới để nhận dự đoán.';
$string['nodatatotrain'] = 'Không có dữ liệu mới nào có thể được sử dụng để huấn luyện.';
$string['noinvalidanalysables'] = 'Trang web này không chứa bất kỳ phần tử phân tích không hợp lệ nào.';
$string['notdefined'] = 'Chưa được xác định';
$string['pluginname'] = 'Mô hình phân tích';
$string['predictionresults'] = 'Kết quả dự đoán';
$string['predictmodels'] = 'Dự đoán các mô hình';
$string['predictorresultsin'] = 'Thông tin dự đoán được lưu trong thư mục {$a}';
$string['predictionprocessfinished'] = 'Quá trình dự đoán đã hoàn thành';
$string['previouspage'] = 'Trang trước';
$string['restoredefault'] = 'Khôi phục mô hình mặc định';
$string['restoredefaultempty'] = 'Vui lòng chọn các mô hình để khôi phục.';
$string['restoredefaultinfo'] = 'Những mô hình mặc định này đã mất hoặc đã thay đổi kể từ khi được cài đặt. Bạn có thể khôi phục các mô hình mặc định đã chọn.';
$string['restoredefaultnone'] = 'Tất cả các mô hình mặc định do core và các plugin cài đặt đã được tạo. Không tìm thấy mô hình mới nào; không có gì để khôi phục.';
$string['restoredefaultsome'] = 'Khôi phục thành công {$a->count} mô hình mới.';
$string['restoredefaultsubmit'] = 'Khôi phục các mục đã chọn';
$string['samestartdate'] = 'Ngày bắt đầu hiện tại là tốt';
$string['sameenddate'] = 'Ngày kết thúc hiện tại là tốt';
$string['scheduledanalysisresults'] = 'Kết quả sử dụng khoảng thời gian phân tích {$a->name}';
$string['scheduledanalysisresultscli'] = 'Kết quả sử dụng khoảng thời gian phân tích {$a->name} (id: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Chọn khoảng thời gian phân tích bạn muốn sử dụng để đánh giá cấu hình mô hình.';
$string['target'] = 'Mục tiêu';
$string['target_help'] = 'Mục tiêu là điều mà mô hình sẽ dự đoán.';
$string['target_link'] = 'Mục tiêu';
$string['timesplittingnotdefined'] = 'Không có khoảng thời gian phân tích nào được xác định.';
$string['timesplittingnotdefined_help'] = 'Bạn cần chọn một khoảng thời gian phân tích trước khi kích hoạt mô hình.';
$string['trainandpredictmodel'] = 'Huấn luyện mô hình và tính toán dự đoán';
$string['trainingprocessfinished'] = 'Quá trình huấn luyện đã hoàn thành';
$string['trainingresults'] = 'Kết quả huấn luyện';
$string['trainmodels'] = 'Huấn luyện các mô hình';
$string['versionnotsame'] = 'Tệp được nhập vào từ một phiên bản khác ({$a->importedversion}) so với phiên bản hiện tại ({$a->version})';
$string['viewlog'] = 'Xem nhật ký đánh giá';
$string['weeksenddateautomaticallyset'] = 'Ngày kết thúc được tự động thiết lập dựa trên ngày bắt đầu và số lượng phần.';
$string['weeksenddatedefault'] = 'Ngày kết thúc được tính toán tự động từ ngày bắt đầu của khóa học.';
$string['privacy:metadata'] = 'Plugin Mô hình Phân tích không lưu bất kỳ dữ liệu cá nhân nào.';
