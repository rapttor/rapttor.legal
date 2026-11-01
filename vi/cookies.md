---
doc: cookies
title: Chính sách cookie
version: 1.1.0
updated: 2026-10-31
lang: vi
translation_of: 1.1.0
status: draft
summary: Các cookie và công nghệ tương tự mà {{product.name}} sử dụng, lý do sử dụng và cách kiểm soát chúng.
---

# Chính sách cookie

*Phiên bản {{doc.version}}, cập nhật lần cuối {{doc.updated}}.*

Chính sách này giải thích cách **{{company.name}}** sử dụng cookie và các công nghệ tương tự trên {{product.name}} và các Dịch vụ khác của chúng tôi. Dữ liệu cá nhân được thu thập qua các công nghệ này được xử lý như mô tả trong [Chính sách quyền riêng tư]({{url.privacy}}).

## 1. Chúng là gì {#what}

Cookie là các tệp nhỏ được một trang web lưu trên thiết bị của quý khách. "Công nghệ tương tự" bao gồm local storage và session storage, định danh thiết bị và SDK trong ứng dụng di động, pixel, và các tín hiệu tương tự kỹ thuật nhận dạng dấu vân tay thiết bị (fingerprinting). Chúng tôi dùng từ "cookie" cho tất cả các công nghệ này.

## 2. Các loại chúng tôi sử dụng {#categories}

| Loại | Mục đích | Có cần sự đồng ý không? |
|---|---|---|
| **Thiết yếu** | Giữ quý khách đăng nhập, ghi nhớ giỏ hàng hoặc cài đặt trong một phiên, bảo vệ chống gian lận và tấn công CSRF, cân bằng tải máy chủ, lưu lựa chọn cookie của quý khách | Không: bắt buộc để Dịch vụ hoạt động hoặc để cung cấp những gì quý khách yêu cầu |
| **Tùy chọn** | Ghi nhớ ngôn ngữ, giao diện, bố cục và các lựa chọn tương tự | Có, trừ khi thiết yếu cho một tính năng quý khách đã yêu cầu |
{{#if feature.analytics}}| **Phân tích** | Đo lường cách Dịch vụ được sử dụng và tìm lỗi để chúng tôi cải thiện | Có (khi pháp luật yêu cầu) |
{{/if}}{{#if feature.ads}}| **Quảng cáo / tiếp thị** | Hiển thị và đo lường quảng cáo phù hợp, hạn chế lặp lại, và liên kết hoạt động giữa các trang web và ứng dụng | Có |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Hiện tại chúng tôi **chỉ sử dụng cookie thiết yếu và cookie tùy chọn**, không sử dụng cookie phân tích hoặc cookie quảng cáo.{{/unless}}{{/unless}}

## 3. Chi tiết các cookie {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Tên chính xác, nhà cung cấp và thời hạn của cookie được liệt kê trong hộp thoại cài đặt cookie, và có thể yêu cầu tại [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Lựa chọn của quý khách {#choices}

- **Biểu ngữ đồng ý / cài đặt.** Khi cần có sự đồng ý, chúng tôi hỏi trước khi đặt cookie không thiết yếu, với một lựa chọn từ chối rõ ràng và dễ dàng như lựa chọn chấp nhận. Quý khách có thể thay đổi hoặc rút lại lựa chọn bất cứ lúc nào thông qua liên kết cài đặt cookie ở chân trang. Việc rút lại không ảnh hưởng đến việc xử lý đã thực hiện trước đó.
- **Kiểm soát của trình duyệt.** Hầu hết trình duyệt cho phép chặn hoặc xóa cookie; hãy tìm trong Cài đặt → Quyền riêng tư. Chặn cookie thiết yếu có thể làm hỏng việc đăng nhập và các tính năng khác.
- **Không ghi lại phiên.** Chúng tôi không sử dụng công cụ ghi lại phiên hoặc ghi màn hình.
{{#if feature.external}}- **Tài nguyên bên thứ ba.** Khi một tài nguyên (ví dụ phông chữ, bản đồ hoặc video) được tải từ máy chủ của công ty khác, địa chỉ IP của quý khách được gửi tới công ty đó. Chúng tôi xin sự đồng ý của quý khách đối với từng tài nguyên riêng trong cài đặt cookie và chỉ tải sau khi quý khách đồng ý; quý khách có thể thay đổi lựa chọn bất cứ lúc nào.
{{/if}}- **Tín hiệu.** Chúng tôi coi Global Privacy Control (GPC) và các tín hiệu từ chối theo dõi tương tự của trình duyệt là sự từ chối đối với theo dõi không thiết yếu và đối với việc bán hoặc chia sẻ dữ liệu cá nhân.
{{#if feature.ads}}- **Lựa chọn quảng cáo.** Từ chối quảng cáo dựa trên sở thích thông qua cài đặt thiết bị của quý khách (đặt lại hoặc giới hạn mã định danh quảng cáo) và các công cụ như youronlinechoices.eu hoặc optout.aboutads.info. Quý khách vẫn sẽ thấy quảng cáo, nhưng ít phù hợp hơn với quý khách.
{{/if}}
## 5. Thời hạn lưu giữ {#duration}

Cookie phiên hết hạn khi quý khách đóng trình duyệt. Cookie lưu lâu dài có thời hạn như nêu trong bảng, và trong mọi trường hợp không dài hơn mức pháp luật khuyến nghị (thường không quá 13 tháng đối với sự đồng ý cho phân tích và quảng cáo, mà chúng tôi sẽ yêu cầu quý khách xác nhận lại).

## 6. Bên thứ ba {#third-parties}

Một số cookie được đặt bởi bên thứ ba có dịch vụ chúng tôi sử dụng (phân tích, nội dung đa phương tiện nhúng, thanh toán, trò chuyện hỗ trợ). Họ hoạt động theo chính sách riêng của họ và, nếu họ là bên kiểm soát độc lập, quý khách nên đọc các chính sách đó. Chúng tôi liệt kê họ trong bảng trên.
{{#if table.external}}

Các tài nguyên nhận địa chỉ IP của quý khách khi được tải:

{{table.external}}
{{/if}}

## 7. Thay đổi {#changes}

Nếu chúng tôi bổ sung hoặc thay đổi cookie không thiết yếu, chúng tôi sẽ cập nhật Chính sách này và yêu cầu sự đồng ý của quý khách lại khi cần. Câu hỏi: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
