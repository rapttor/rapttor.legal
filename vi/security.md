---
doc: security
title: Bảo mật và công bố lỗ hổng
version: 1.0.1
updated: 2026-10-23
lang: vi
translation_of: 1.0.1
status: draft
summary: Cách báo cáo lỗ hổng bảo mật trong {{product.name}} và các quy tắc miễn trừ trách nhiệm (safe harbour) đối với nghiên cứu thiện chí.
---

# Bảo mật và công bố lỗ hổng

*Phiên bản {{doc.version}}, cập nhật lần cuối {{doc.updated}}.*

Chúng tôi coi trọng bảo mật và hoan nghênh các báo cáo thiện chí từ các nhà nghiên cứu. Liên hệ: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Phạm vi {#scope}

Thuộc phạm vi: {{product.name}}, {{company.website}} và các tên miền phụ, ứng dụng và API do chúng tôi vận hành. **Ngoài phạm vi:** các dịch vụ và hạ tầng của bên thứ ba, tài khoản và dữ liệu của khách hàng khác, kỹ thuật lừa đảo xã hội (social engineering) hoặc lừa đảo (phishing) nhắm vào nhân viên hoặc người dùng của chúng tôi, tấn công vật lý, kiểm thử từ chối dịch vụ và kiểm thử theo khối lượng lớn, thư rác, và các phát hiện đòi hỏi tương tác không thực tế của người dùng hoặc phần mềm lỗi thời.

## 2. Quy tắc kiểm thử {#rules}

Nếu quý khách kiểm thử với thiện chí, quý khách phải:

- kiểm thử chỉ trên **tài khoản và dữ liệu của chính quý khách**; dừng lại và báo cáo ngay nếu quý khách truy cập được dữ liệu của người khác, và không truy cập, tải xuống, sửa đổi hoặc giữ lại nhiều hơn mức cần thiết để chứng minh vấn đề;
- không làm suy giảm Dịch vụ, không chạy quét tự động với khối lượng lớn, và không sử dụng khai thác để duy trì truy cập, chuyển hướng sang hệ thống khác hoặc trích xuất dữ liệu;
- không công bố vấn đề cho người khác hoặc đăng chi tiết cho đến khi chúng tôi có thời gian hợp lý để khắc phục (**90 ngày** kể từ báo cáo của quý khách, hoặc sớm hơn nếu chúng tôi đồng ý);
- tuân thủ pháp luật và các quy tắc này.

## 3. Miễn trừ trách nhiệm khi thiện chí (safe harbour) {#safe-harbour}

Nếu quý khách tuân thủ Chính sách này, chúng tôi sẽ coi nghiên cứu của quý khách là được ủy quyền, sẽ không theo đuổi hoặc hỗ trợ hành động pháp lý hay việc chấm dứt tài khoản vì lý do đó, và sẽ làm việc với quý khách để hiểu và giải quyết vấn đề. Điều này không cho phép vi phạm pháp luật đối với bên thứ ba, và một bên thứ ba vẫn có thể tự hành động. Nếu còn nghi ngờ, hãy hỏi trước.

## 4. Nội dung cần gửi {#report}

Mô tả rõ ràng về lỗ hổng, URL hoặc thành phần bị ảnh hưởng, các bước tái hiện hoặc bằng chứng khái niệm (proof of concept), mức độ tác động, thông tin liên lạc của quý khách, và việc quý khách có muốn được ghi nhận hay không. Nếu có thể, hãy mã hóa tài liệu nhạy cảm; hãy yêu cầu khóa mã hóa của chúng tôi.

## 5. Tiếp theo sẽ như thế nào {#process}

Chúng tôi xác nhận các báo cáo, phân loại, thông báo cho quý khách, khắc phục theo mức độ nghiêm trọng và, nếu quý khách muốn, ghi nhận đóng góp của quý khách. Hiện chúng tôi không vận hành chương trình thưởng trả tiền (bounty) và không thể hứa hẹn phần thưởng, dù chúng tôi có thể gửi lời cảm ơn hoặc quà lưu niệm.

## 6. Người dùng: hãy bảo vệ tài khoản của quý khách {#users}

Sử dụng mật khẩu mạnh và duy nhất, bật xác thực đa yếu tố khi có sẵn, cập nhật phần mềm thường xuyên, cảnh giác với lừa đảo (phishing), và báo ngay cho [{{company.email}}](mailto:{{company.email}}) khi nghi ngờ tài khoản bị xâm nhập. Việc lạm dụng một lỗ hổng hoặc kiểm thử ngoài Chính sách này là vi phạm [Chính sách sử dụng hợp lý]({{url.acceptable_use}}).
