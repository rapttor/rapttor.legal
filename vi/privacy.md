---
doc: privacy
title: Chính sách quyền riêng tư
version: 1.2.1
updated: 2026-10-31
lang: vi
translation_of: 1.2.1
status: draft
summary: Cách {{product.name}} thu thập, sử dụng, chia sẻ và bảo vệ dữ liệu cá nhân, cùng các quyền của quý khách.
---

# Chính sách quyền riêng tư

*Phiên bản {{doc.version}}, cập nhật lần cuối {{doc.updated}}.*

## 1. Chúng tôi là ai {#who-we-are}

Chính sách này giải thích cách **{{company.name}}** có địa chỉ đăng ký tại {{company.address}} ("**{{product.name}}**", "chúng tôi") xử lý dữ liệu cá nhân khi quý khách sử dụng {{product.name}}, các trang web, ứng dụng, API và dịch vụ liên quan của chúng tôi (gọi chung là "**Dịch vụ**").

Đối với dữ liệu cá nhân mà chúng tôi quyết định cách thức và mục đích xử lý (ví dụ: tài khoản, lượt truy cập trang web và thanh toán của quý khách), chúng tôi là **bên kiểm soát dữ liệu cá nhân**. Liên hệ: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Cán bộ bảo vệ dữ liệu của chúng tôi có thể được liên hệ tại [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Chúng tôi chưa bổ nhiệm Cán bộ bảo vệ dữ liệu vì pháp luật không yêu cầu điều đó đối với hoạt động của chúng tôi. Các câu hỏi về quyền riêng tư được gửi tới [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Đại diện tại EU (Điều 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Đại diện tại Vương quốc Anh (Điều 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Khi chúng tôi là bên xử lý dữ liệu cá nhân

Nếu quý khách sử dụng Dịch vụ thông qua một tổ chức (ví dụ: nơi quý khách làm việc, hoặc một khách hàng doanh nghiệp), tổ chức đó thường là bên kiểm soát dữ liệu cá nhân đối với dữ liệu mà họ đưa vào Dịch vụ, còn chúng tôi xử lý dữ liệu đó thay mặt họ theo [Phụ lục xử lý dữ liệu]({{url.dpa}}) của chúng tôi. Trong trường hợp đó, hãy gửi yêu cầu của quý khách tới tổ chức đó; chúng tôi sẽ hỗ trợ tổ chức phản hồi. Chính sách này khi đó chỉ áp dụng đối với dữ liệu do chính chúng tôi kiểm soát (quản trị tài khoản, thanh toán, bảo mật, trang web).
{{/if}}

## 2. Dữ liệu chúng tôi thu thập {#data-we-collect}

| Danh mục | Ví dụ | Nguồn |
|---|---|---|
| **Dữ liệu tài khoản** | tên, email, mã băm mật khẩu, thông tin hồ sơ, ngôn ngữ, tùy chọn | Quý khách |
| **Dữ liệu liên hệ và hỗ trợ** | tin nhắn, tệp đính kèm, ghi chú cuộc gọi, phản hồi, câu trả lời khảo sát | Quý khách |
| **Nội dung quý khách gửi** | tệp, văn bản, cài đặt, bất kỳ nội dung nào quý khách đưa vào Dịch vụ | Quý khách |
{{#if feature.anonymous}}| **Dữ liệu tài khoản ẩn danh** | một mã định danh tài khoản ngẫu nhiên, phiên trình duyệt hoặc thiết bị lưu giữ mã đó, nội dung quý khách tạo ra, và một địa chỉ email nếu sau này quý khách kết nối địa chỉ email | Quý khách, tự động |
{{/if}}{{#if feature.uploads}}| **Tệp và hình ảnh quý khách tải lên** | chính các tệp đó và siêu dữ liệu chứa trong chúng (ví dụ thông tin máy ảnh hoặc vị trí trong ảnh) | Quý khách |
{{/if}}| **Hồ sơ đồng ý** | những nội dung quý khách đã đồng ý (tài liệu, xác nhận độ tuổi, các lựa chọn tùy ý), phiên bản, ngôn ngữ, ngày và cách quý khách đồng ý | Quý khách |
| **Dữ liệu sử dụng và thiết bị** | địa chỉ IP, loại trình duyệt và thiết bị, hệ điều hành, ngôn ngữ, các trang và tính năng đã sử dụng, dấu thời gian, nguồn giới thiệu (referrer), nhật ký sự cố và lỗi | Tự động |
| **Cookie và các công nghệ tương tự** | mã định danh trong cookie, local storage, SDK (xem [Chính sách cookie]({{url.cookies}})) | Tự động |
{{#if feature.payments}}| **Dữ liệu thanh toán và giao dịch** | gói dịch vụ, hóa đơn, tên và địa chỉ thanh toán, mã số thuế, trạng thái thanh toán; thông tin thẻ do đơn vị xử lý thanh toán của chúng tôi xử lý và chúng tôi không lưu giữ | Quý khách, đơn vị xử lý thanh toán |
{{/if}}{{#if feature.location}}| **Dữ liệu vị trí** | vị trí chính xác chỉ khi quý khách bật tính năng này trên thiết bị; nếu không thì là vị trí gần đúng suy ra từ địa chỉ IP | Thiết bị của quý khách |
{{/if}}| **Dữ liệu tài khoản bên thứ ba** | tên, email, ảnh đại diện và mã định danh do nhà cung cấp đăng nhập mà quý khách chọn chia sẻ | Bên thứ ba, với sự cho phép của quý khách |
{{#if feature.ugc}}| **Trao đổi giữa người dùng** | tin nhắn và các tương tác quý khách gửi qua Dịch vụ | Quý khách |
{{/if}}{{#if feature.mobile}}| **Dữ liệu thiết bị di động** | model và phiên bản hệ điều hành của thiết bị, phiên bản ứng dụng, mã định danh của phiên bản ứng dụng và mã thông báo đẩy (push notification), ngôn ngữ và múi giờ, trạng thái quyền truy cập; mã định danh quảng cáo chỉ khi quý khách cho phép theo dõi | Thiết bị của quý khách |
{{/if}}{{#if feature.game}}| **Dữ liệu trò chơi** | tiến trình chơi, điểm số, bảng xếp hạng, vật phẩm và giao dịch mua, lịch sử trận đấu, trò chuyện trong trò chơi và (nếu có sử dụng) báo cáo bằng giọng nói, tín hiệu chống gian lận và tính toàn vẹn, hồ sơ công khai (tên, ảnh đại diện, hạng) | Quý khách, tự động |
{{/if}}| **Tín hiệu bảo mật và chống gian lận** | đăng nhập thất bại, báo cáo lạm dụng, điểm rủi ro, yêu cầu bị chặn | Tự động, người dùng khác |

Chúng tôi không cố ý thu thập dữ liệu thuộc nhóm đặc biệt (sức khỏe, sinh trắc học, quan điểm chính trị hoặc tôn giáo, và tương tự). Vui lòng không gửi các dữ liệu này trừ khi một tính năng yêu cầu rõ ràng. Nếu quý khách vẫn gửi các dữ liệu như vậy, quý khách chịu trách nhiệm về việc có cơ sở pháp lý hợp lệ.

Quý khách không bắt buộc phải cung cấp dữ liệu cá nhân cho chúng tôi, nhưng nếu thiếu một số dữ liệu (ví dụ địa chỉ email) thì chúng tôi không thể cung cấp tài khoản.

### Theo dõi mà chúng tôi không sử dụng {#no-tracking}

Chúng tôi **không** sử dụng công cụ ghi lại phiên hoặc ghi màn hình, ghi nhận thao tác bàn phím hoặc chuột, hay nhận dạng trình duyệt (browser fingerprinting). {{#if feature.analytics}}Phân tích chỉ chạy khi có sự đồng ý của quý khách (xem [Chính sách cookie]({{url.cookies}})).{{else}}Chúng tôi không sử dụng công cụ phân tích hoặc theo dõi quảng cáo.{{/if}}
{{#if feature.external}}
### Tài nguyên của bên thứ ba và địa chỉ IP của quý khách {#external}

Một số tính năng tải nội dung từ máy chủ của các công ty khác (ví dụ phông chữ, bản đồ, video hoặc kiểm tra bảo mật). Khi trình duyệt của quý khách tải nội dung như vậy, **địa chỉ IP và chi tiết kỹ thuật của quý khách được gửi tới công ty đó**, công ty này có thể ở ngoài quốc gia của quý khách. Chúng tôi chỉ tải các tài nguyên này sau khi quý khách đồng ý với từng tài nguyên trong cài đặt cookie, và quý khách có thể thay đổi lựa chọn đó bất cứ lúc nào; nếu quý khách từ chối, chúng tôi sử dụng phương án thay thế hoặc tính năng đó bị tắt.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### Email {#emails}

Chúng tôi gửi các email mà Dịch vụ cần (liên kết đăng nhập, biên lai, thông báo bảo mật){{#if feature.marketing}} và, chỉ khi quý khách đã đồng ý hoặc pháp luật cho phép, tin tức về sản phẩm{{/if}}. Mọi email đều có liên kết để quý khách ngừng nhận email từ chúng tôi. {{#if feature.marketing}}Các email không bắt buộc sẽ ngừng ngay với một lần nhấp chuột. {{/if}}Vì việc chặn toàn bộ email cũng sẽ chặn cả liên kết đăng nhập, yêu cầu chặn **toàn bộ** email từ dịch vụ này được xác nhận bằng một email cuối cùng chứa liên kết để chứng minh địa chỉ thuộc về quý khách. Sau đó, chúng tôi thêm địa chỉ vào danh sách không gửi tại nhà cung cấp email của chúng tôi và giữ ở đó để có thể tôn trọng lựa chọn của quý khách (nghĩa vụ pháp lý và lợi ích hợp pháp của chúng tôi trong việc tôn trọng yêu cầu của quý khách).
{{/if}}{{#if feature.age_gate}}
### Xác nhận độ tuổi {#age}

Trước khi quý khách sử dụng các tính năng liên quan đến {{policy.age_topics|nội dung nhạy cảm theo độ tuổi}}, chúng tôi yêu cầu quý khách xác nhận rằng quý khách ít nhất {{policy.age_gate}} tuổi và đủ tuổi hợp pháp theo quy định của quốc gia quý khách. Chúng tôi không yêu cầu ngày sinh và chỉ lưu giữ xác nhận của quý khách cùng thời điểm quý khách đưa ra xác nhận. Nếu chúng tôi biết một người chưa đủ tuổi, chúng tôi khóa tài khoản và xóa dữ liệu.
{{/if}}{{#if feature.gambling}}
Đối với các tính năng cờ bạc, chúng tôi cũng có thể yêu cầu bằng chứng về độ tuổi và danh tính của quý khách, và sử dụng một nhà cung cấp dịch vụ xác minh cho việc đó. Chúng tôi lưu giữ kết quả và các chứng cứ mà pháp luật yêu cầu.
{{/if}}

## 3. Lý do chúng tôi sử dụng dữ liệu của quý khách và cơ sở pháp lý {#purposes}

| Mục đích | Cơ sở pháp lý (GDPR / UK GDPR) |
|---|---|
| Cung cấp Dịch vụ, tạo và quản lý tài khoản của quý khách, xử lý đơn hàng | Hợp đồng (Điều 6(1)(b)) |
| Hỗ trợ khách hàng và liên lạc về việc quý khách sử dụng Dịch vụ | Hợp đồng; lợi ích hợp pháp |
| Bảo mật, phòng chống lạm dụng và gian lận, thực thi [Điều khoản]({{url.terms}}) và [Chính sách sử dụng hợp lý]({{url.acceptable_use}}) của chúng tôi | Lợi ích hợp pháp (Điều 6(1)(f)); nghĩa vụ pháp lý |
| Gỡ lỗi, độ tin cậy, lập kế hoạch năng lực và cải thiện Dịch vụ | Lợi ích hợp pháp |
{{#if feature.analytics}}| Phân tích việc sử dụng | Sự đồng ý khi pháp luật yêu cầu, nếu không thì lợi ích hợp pháp |
{{/if}}{{#if feature.marketing}}| Tin tức sản phẩm và email tiếp thị | Sự đồng ý, hoặc lợi ích hợp pháp đối với khách hàng hiện tại khi pháp luật cho phép; quý khách có thể từ chối bất cứ lúc nào |
{{/if}}{{#if feature.ads}}| Quảng cáo và đo lường | Sự đồng ý |
{{/if}}| Ghi nhận các sự đồng ý của quý khách và tôn trọng lựa chọn email của quý khách | Nghĩa vụ pháp lý; lợi ích hợp pháp |
{{#if feature.external}}| Tải tài nguyên bên thứ ba nhận địa chỉ IP của quý khách | Sự đồng ý (Điều 6(1)(a), và các quy định ePrivacy về truy cập thiết bị của quý khách) |
{{/if}}| Kế toán, thuế và các nghĩa vụ pháp lý khác | Nghĩa vụ pháp lý (Điều 6(1)(c)) |
| Thiết lập, thực hiện hoặc bảo vệ các yêu cầu pháp lý; phản hồi cơ quan nhà nước | Lợi ích hợp pháp; nghĩa vụ pháp lý |
| Chuyển nhượng doanh nghiệp (sáp nhập, mua lại, bán tài sản) | Lợi ích hợp pháp |

Khi chúng tôi dựa vào lợi ích hợp pháp, chúng tôi đã cân nhắc các lợi ích đó với quyền của quý khách; quý khách có thể yêu cầu biết chi tiết và có quyền phản đối (mục 10). Khi chúng tôi dựa vào sự đồng ý, quý khách có thể rút lại sự đồng ý bất cứ lúc nào; việc rút lại không ảnh hưởng đến việc xử lý đã thực hiện trước đó.

{{#if feature.ai}}
### Tính năng hỗ trợ bởi AI {#ai}

Một số tính năng sử dụng mô hình học máy hoặc mô hình tạo sinh. Khi quý khách sử dụng các tính năng này, nội dung quý khách gửi làm đầu vào sẽ được gửi tới nhà cung cấp, đóng vai trò là bên xử lý dữ liệu của chúng tôi, để tạo ra kết quả.

- Chúng tôi **không** sử dụng nội dung của quý khách để huấn luyện các mô hình đa năng, và yêu cầu các nhà cung cấp không làm như vậy, trừ khi quý khách chủ động đồng ý.
- Kết quả của AI có thể sai, thiếu đầy đủ hoặc thiên lệch. Không nên dựa vào kết quả đó cho các quyết định về pháp lý, y tế, tài chính hoặc các quyết định hệ trọng khác nếu chưa có sự xem xét của con người.
- Chúng tôi không đưa ra quyết định có hệ quả pháp lý hoặc ảnh hưởng đáng kể tương tự đối với quý khách chỉ bằng phương thức tự động. Việc hạn chế tài khoản do lạm dụng được người xem xét lại theo yêu cầu (xem [Chính sách sử dụng hợp lý]({{url.acceptable_use}}), mục Xử lý vi phạm).
- Nội dung do AI tạo ra được gắn nhãn khi pháp luật yêu cầu.
{{/if}}

## 4. Chúng tôi chia sẻ dữ liệu với ai {#sharing}

**Chúng tôi không bán dữ liệu cá nhân của quý khách**, và chúng tôi không "chia sẻ" dữ liệu đó cho mục đích quảng cáo hành vi xuyên ngữ cảnh{{#if feature.ads}}, ngoại trừ như mô tả trong Chính sách cookie và chỉ khi quý khách đã đồng ý{{/if}}.

Chúng tôi chỉ chia sẻ dữ liệu cá nhân với:

- **Nhà cung cấp dịch vụ (bên xử lý dữ liệu)** hoạt động theo hướng dẫn của chúng tôi theo thỏa thuận bằng văn bản: lưu trữ và hạ tầng, gửi email, công cụ hỗ trợ khách hàng, giám sát lỗi{{#if feature.payments}}, xử lý thanh toán{{/if}}{{#if feature.ai}}, nhà cung cấp AI{{/if}}. Danh sách hiện tại nằm trong [Danh sách bên xử lý phụ]({{url.subprocessors}}) của chúng tôi.
- **Nền tảng và cửa hàng ứng dụng** mà quý khách dùng để truy cập Dịch vụ (ví dụ Apple, Google, cửa hàng trên bảng điều khiển trò chơi hoặc PC), các bên này xử lý thanh toán và có thể cung cấp cho chúng tôi một số dữ liệu hạn chế về giao dịch mua và tài khoản;
- **Người dùng khác hoặc công chúng**, chỉ theo chỉ dẫn của quý khách (ví dụ nội dung quý khách chọn đăng công khai{{#if feature.ugc}} hoặc tin nhắn quý khách gửi{{/if}}).
- **Cố vấn chuyên môn** (luật sư, kiểm toán viên, công ty bảo hiểm) theo nghĩa vụ bảo mật.
- **Cơ quan nhà nước, tòa án và các bên bị ảnh hưởng** khi pháp luật yêu cầu, để đáp ứng quy trình pháp lý hợp lệ, bảo vệ quyền, an toàn hoặc tài sản, hoặc để điều tra lạm dụng và gian lận. Chúng tôi kiểm tra tính hợp lệ của các yêu cầu và, khi được phép, thông báo cho quý khách.
- **Đơn vị kế thừa** trong trường hợp sáp nhập, mua lại, huy động vốn hoặc bán tài sản; đơn vị này phải tuân thủ Chính sách này. Chúng tôi sẽ thông báo cho quý khách về các thay đổi quan trọng trong quyền kiểm soát có ảnh hưởng đến dữ liệu của quý khách.
- **Bất kỳ ai khác** chỉ khi có sự đồng ý của quý khách.

## 5. Chuyển dữ liệu ra nước ngoài {#transfers}

Chúng tôi hoạt động từ {{company.country}}{{#if hosting.region}} và lưu trữ dữ liệu chủ yếu tại {{hosting.region}}{{/if}}. Một số nhà cung cấp xử lý dữ liệu tại các quốc gia khác, bao gồm Hoa Kỳ. Khi dữ liệu cá nhân từ EEA, Vương quốc Anh hoặc Thụy Sĩ được chuyển tới một quốc gia không có quyết định đầy đủ (adequacy decision), chúng tôi sử dụng một biện pháp bảo đảm được công nhận: EU-U.S. Data Privacy Framework (hoặc các phần mở rộng cho Vương quốc Anh và Thụy Sĩ) khi bên nhận đã được chứng nhận; nếu không, chúng tôi sử dụng **Điều khoản hợp đồng tiêu chuẩn** (Standard Contractual Clauses) do Ủy ban châu Âu ban hành, cùng với **UK International Data Transfer Addendum** hoặc sửa đổi của Thụy Sĩ khi có liên quan, và các biện pháp bổ sung như mã hóa khi truyền và khi lưu trữ. Quý khách có thể yêu cầu bản sao các biện pháp bảo đảm liên quan tại [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Chúng tôi lưu giữ dữ liệu trong bao lâu {#retention}

| Dữ liệu | Thời hạn lưu giữ |
|---|---|
| Dữ liệu tài khoản và nội dung | Trong thời gian tài khoản của quý khách còn hoạt động, sau đó bị xóa hoặc ẩn danh trong vòng {{policy.retention_account_days}} ngày kể từ khi tài khoản đóng |
| Nhật ký máy chủ và bảo mật | 90 ngày |
| Bản sao lưu | Luân phiên, tối đa 35 ngày; dữ liệu đã xóa sẽ hết hạn trong bản sao lưu theo chu kỳ đó |
| Hóa đơn và hồ sơ kế toán | {{policy.retention_billing_years}} năm, hoặc lâu hơn nếu pháp luật yêu cầu |
| Thư từ hỗ trợ | Tối đa 3 năm sau khi vụ việc kết thúc, hoặc trong thời gian tài khoản còn hoạt động nếu thời gian đó dài hơn |
| Hồ sơ về sự đồng ý, từ chối nhận thông tin và yêu cầu thực hiện quyền | Trong thời gian cần thiết để chứng minh sự tuân thủ |
| Dữ liệu cần cho một khiếu nại pháp lý hoặc cuộc điều tra | Cho đến khi vụ việc được giải quyết và thời hiệu khởi kiện đã hết |
| Hồ sơ lạm dụng và cấm (mã định danh, lý do, ngày) | Tối đa 5 năm, để ngăn ngừa lạm dụng lặp lại |
| Hồ sơ đồng ý và danh sách không gửi email | Hồ sơ đồng ý: suốt thời gian tài khoản còn tồn tại cộng với thời hiệu khởi kiện; các mục trong danh sách không gửi: cho đến khi quý khách yêu cầu chúng tôi xóa |

Khi mục đích kết thúc, chúng tôi xóa hoặc ẩn danh không thể đảo ngược dữ liệu.

## 7. Bảo mật {#security}

Chúng tôi áp dụng các biện pháp kỹ thuật và tổ chức phù hợp với mức rủi ro: mã hóa khi truyền, mã hóa dữ liệu nhạy cảm khi lưu trữ, kiểm soát truy cập theo nguyên tắc đặc quyền tối thiểu, các biện pháp bảo vệ xác thực, ghi nhật ký, sao lưu, quản lý lỗ hổng và nghĩa vụ bảo mật thông tin của nhân viên. Không hệ thống nào an toàn tuyệt đối. Vui lòng sử dụng mật khẩu mạnh, duy nhất, bật xác thực đa yếu tố khi có sẵn, và thông báo ngay cho chúng tôi tại [{{company.email}}](mailto:{{company.email}}) nếu quý khách nghi ngờ tài khoản bị xâm nhập. Xem thêm trang [Bảo mật và công bố lỗ hổng]({{url.security}}) của chúng tôi.

Nếu một vi phạm có khả năng gây rủi ro cho quyền và tự do của quý khách, chúng tôi sẽ thông báo cho cơ quan giám sát trong vòng 72 giờ kể từ khi biết sự việc khi pháp luật yêu cầu, và thông báo cho quý khách không chậm trễ khi pháp luật yêu cầu.

## 8. Trẻ em {#children}

{{#if feature.minors}}Dịch vụ không hướng tới trẻ em dưới 13 tuổi, và chúng tôi không cố ý thu thập dữ liệu cá nhân từ các em. Người dùng từ {{policy.min_age}} tuổi trở lên nhưng chưa đến tuổi thành niên chỉ được sử dụng Dịch vụ **khi có sự đồng ý của cha mẹ hoặc người giám hộ**. Người này có thể xem, sửa, hạn chế hoặc xóa dữ liệu của người chưa thành niên và rút lại sự đồng ý bằng cách liên hệ [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Chúng tôi chỉ thu thập dữ liệu cần thiết cho Dịch vụ, không sử dụng dữ liệu của người chưa thành niên cho quảng cáo hành vi, và áp dụng các thiết lập mặc định phù hợp với độ tuổi (hồ sơ riêng tư, hạn chế liên lạc) khi có thể. Nơi pháp luật quy định độ tuổi đồng ý kỹ thuật số cao hơn, chúng tôi yêu cầu sự đồng ý của cha mẹ đối với những người dưới độ tuổi đó.{{else}}Dịch vụ không hướng tới trẻ em. Quý khách phải ít nhất {{policy.min_age}} tuổi để có tài khoản. Chúng tôi không cố ý thu thập dữ liệu cá nhân từ bất kỳ ai dưới {{policy.min_age}} tuổi (hoặc độ tuổi đồng ý kỹ thuật số cao hơn tại quốc gia của họ; tại Hoa Kỳ, dưới 13 tuổi theo COPPA). Nếu quý khách tin rằng một trẻ em đã cung cấp dữ liệu cá nhân cho chúng tôi, hãy liên hệ [{{company.privacy_email}}](mailto:{{company.privacy_email}}) và chúng tôi sẽ xóa dữ liệu đó và đóng tài khoản. Khi cha mẹ hoặc người giám hộ đã đồng ý hợp lệ cho người chưa thành niên sử dụng, sự đồng ý đó có thể được rút lại bất cứ lúc nào.{{/if}}

## 9. Trang web và dịch vụ của bên thứ ba {#third-parties}

Dịch vụ có thể liên kết tới hoặc tích hợp với các trang web, plug-in và ứng dụng của bên thứ ba, bao gồm cả nhà cung cấp đăng nhập. Chúng tôi không kiểm soát các bên này và không chịu trách nhiệm về thực tiễn quyền riêng tư của họ; chính sách riêng của họ quyết định họ thu thập dữ liệu gì. Hãy ngắt kết nối các tích hợp trong cài đặt tài khoản của quý khách hoặc trong cài đặt của bên thứ ba.

## 10. Quyền của quý khách {#rights}

Tùy thuộc vào nơi quý khách sinh sống, quý khách có thể:

- **truy cập** dữ liệu của mình và nhận một bản sao;
- **sửa** dữ liệu không chính xác;
- **xóa** dữ liệu của mình ("quyền được lãng quên");
- **hạn chế** hoặc **phản đối** việc xử lý, bao gồm tiếp thị trực tiếp bất cứ lúc nào;
- **chuyển** dữ liệu của mình sang nhà cung cấp khác ở định dạng có thể đọc bằng máy;
- **rút lại sự đồng ý** bất cứ lúc nào;
- **không phải chịu** các quyết định chỉ dựa trên tự động hóa có hệ quả pháp lý hoặc ảnh hưởng đáng kể tương tự;
- **khiếu nại** lên cơ quan giám sát.

**Xóa tài khoản của quý khách.** Quý khách có thể xóa tài khoản và dữ liệu cá nhân của mình {{#if feature.mobile}}ngay trong ứng dụng (Cài đặt, rồi Tài khoản, rồi Xóa tài khoản), {{/if}}trong cài đặt tài khoản trên trang web của chúng tôi, hoặc qua email; chúng tôi không yêu cầu quý khách liên hệ bộ phận hỗ trợ nếu có thể tự thực hiện. Việc xóa tài khoản là vĩnh viễn sau thời gian chờ mà chúng tôi hiển thị cho quý khách. Gỡ cài đặt ứng dụng không xóa tài khoản của quý khách.

Để thực hiện một quyền, hãy gửi email tới [{{company.privacy_email}}](mailto:{{company.privacy_email}}) hoặc sử dụng cài đặt trong tài khoản của quý khách. Chúng tôi có thể cần xác minh danh tính của quý khách và, nếu yêu cầu rõ ràng là vô căn cứ hoặc quá mức, có thể thu một khoản phí hợp lý hoặc từ chối, theo quy định của pháp luật. Chúng tôi phản hồi trong vòng **một tháng** (có thể gia hạn thêm tối đa hai tháng đối với yêu cầu phức tạp; 45 ngày theo luật của các bang Hoa Kỳ, có thể gia hạn thêm 45 ngày), và sẽ nêu lý do nếu không thể đáp ứng. Chúng tôi sẽ không phân biệt đối xử với quý khách vì việc thực hiện quyền của mình.

### 10.1 Khu vực Kinh tế Châu Âu, Vương quốc Anh, Thụy Sĩ

Tất cả các quyền nêu trên đều được áp dụng. Quý khách có thể khiếu nại lên cơ quan ở quốc gia nơi quý khách sinh sống, làm việc hoặc nơi sự việc xảy ra ([danh sách cơ quan EEA](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Vương quốc Anh: [ICO](https://ico.org.uk); Thụy Sĩ: [FDPIC](https://www.edoeb.admin.ch)). Cơ quan đầu mối của chúng tôi là {{law.authority}}.

### 10.2 Serbia

Khi Luật Bảo vệ Dữ liệu Cá nhân của Serbia được áp dụng, quý khách có các quyền tương đương với những quyền nêu trên, và có thể khiếu nại lên Ủy viên Thông tin Công cộng và Bảo vệ Dữ liệu Cá nhân (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Hoa Kỳ (California và các bang khác) {#us-states}

Mục này bổ sung cho các nội dung trên đối với cư dân California và các bang khác của Hoa Kỳ có luật bảo mật toàn diện (bao gồm Virginia, Colorado, Connecticut, Utah, Texas, Oregon, Montana và các bang khác khi các luật này có hiệu lực).

- **Các danh mục đã thu thập trong 12 tháng qua:** định danh (tên, email, địa chỉ IP, định danh trực tuyến); hồ sơ khách hàng; thông tin thương mại (gói dịch vụ, giao dịch mua); hoạt động internet hoặc mạng; vị trí địa lý gần đúng{{#if feature.location}} và vị trí địa lý chính xác khi có sự cho phép của quý khách{{/if}}; nội dung quý khách gửi; suy luận chỉ giới hạn trong việc vận hành Dịch vụ. Chúng tôi tiết lộ các dữ liệu này cho nhà cung cấp dịch vụ vì các mục đích kinh doanh nêu tại mục 3.
- **Bán và chia sẻ:** chúng tôi không bán thông tin cá nhân và không chia sẻ cho mục đích quảng cáo hành vi xuyên ngữ cảnh. Chúng tôi không cố ý bán hoặc chia sẻ dữ liệu của bất kỳ ai dưới 16 tuổi.
- **Thông tin cá nhân nhạy cảm:** chúng tôi không sử dụng dữ liệu này để suy luận đặc điểm của một người và không sử dụng vượt quá mức cần thiết để cung cấp Dịch vụ.
- **Quyền của quý khách:** biết/truy cập, xóa, sửa, chuyển dữ liệu, từ chối việc bán/chia sẻ và quảng cáo nhắm mục tiêu hoặc lập hồ sơ, hạn chế việc sử dụng dữ liệu nhạy cảm, và không bị phân biệt đối xử. Chúng tôi tôn trọng **Global Privacy Control** và các tín hiệu từ chối của trình duyệt tương tự như một yêu cầu từ chối hợp lệ.
- **Người được ủy quyền và khiếu nại:** người được ủy quyền có thể gửi yêu cầu khi có sự cho phép bằng văn bản của quý khách. Nếu chúng tôi từ chối một yêu cầu, quý khách có thể khiếu nại bằng cách phản hồi quyết định của chúng tôi; nếu quý khách vẫn không hài lòng, quý khách có thể liên hệ Tổng chưởng lý của bang mình.
- **California:** quý khách có thể yêu cầu danh sách các bên thứ ba mà chúng tôi đã tiết lộ thông tin cá nhân cho mục đích tiếp thị trực tiếp của họ trong năm dương lịch trước ("Shine the Light"); chúng tôi không có tiết lộ nào như vậy. Cư dân California dưới 18 tuổi là người dùng đã đăng ký có thể yêu cầu xóa nội dung mà họ đã đăng công khai.

### 10.4 Brazil (LGPD)

Quý khách có thể yêu cầu xác nhận việc xử lý, truy cập, sửa, ẩn danh, khóa hoặc xóa dữ liệu không cần thiết hoặc quá mức, chuyển dữ liệu, thông tin về các đơn vị mà chúng tôi chia sẻ dữ liệu, thông tin về khả năng từ chối đồng ý và hệ quả của việc đó, và xem xét lại các quyết định tự động. Quý khách có thể khiếu nại lên Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Các khu vực khác

Nếu quý khách ở nơi khác có luật bảo vệ dữ liệu, chúng tôi tôn trọng các quyền tương đương mà luật đó trao cho quý khách. Cụ thể:

| Nơi | Chúng tôi bổ sung |
|---|---|
| **Canada** (PIPEDA, Luật 25 của Québec) | Quý khách có thể truy cập và sửa dữ liệu của mình, rút lại sự đồng ý, và khiếu nại lên Văn phòng Ủy viên Bảo mật Thông tin (Office of the Privacy Commissioner) hoặc Commission d'accès à l'information. Đầu mối liên hệ về quyền riêng tư của chúng tôi là người phụ trách bảo vệ thông tin cá nhân; việc chuyển dữ liệu ra ngoài Québec được đánh giá và có biện pháp bảo đảm. |
| **Ấn Độ** (DPDP Act 2023) | Quý khách có thể truy cập, sửa, xóa, chỉ định một người khác thực hiện các quyền của mình nếu quý khách qua đời hoặc mất năng lực, và sử dụng đầu mối tiếp nhận khiếu nại của chúng tôi bên dưới; quý khách có thể khiếu nại lên Data Protection Board. |
| **Australia, New Zealand** | Quý khách có thể yêu cầu truy cập và sửa dữ liệu và khiếu nại với chúng tôi, sau đó lên OAIC (Australia) hoặc Privacy Commissioner (New Zealand). |
| **Nhật Bản, Hàn Quốc, Singapore, Thái Lan, Malaysia, Türkiye, UAE, Ả Rập Xê Út, Nam Phi, Kenya, Nigeria và các luật tương tự** | Chúng tôi áp dụng các quyền và biện pháp bảo đảm mà những luật đó yêu cầu (truy cập, sửa, xóa, phản đối, khiếu nại lên cơ quan địa phương, biện pháp bảo đảm khi chuyển dữ liệu). Hãy liên hệ chúng tôi để sử dụng các quyền này. |
| **Trung Quốc** | Dịch vụ không hướng tới người ở Trung Quốc đại lục; không sử dụng Dịch vụ để gửi dữ liệu cá nhân của người ở đó. |

**Đầu mối khiếu nại và liên hệ về quyền riêng tư cho mọi khu vực:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Chúng tôi xử lý yêu cầu trong thời hạn mà luật hiện hành cho phép.

## 11. Thay đổi chính sách này {#changes}

Chúng tôi có thể cập nhật Chính sách này để phản ánh những thay đổi trong Dịch vụ hoặc pháp luật. Đối với các thay đổi quan trọng, chúng tôi sẽ thông báo trước ít nhất {{policy.notice_days}} ngày qua email hoặc trong Dịch vụ, trước khi chúng có hiệu lực với quý khách, và yêu cầu sự đồng ý mới khi pháp luật yêu cầu. Ngày "cập nhật lần cuối" nêu trên thể hiện phiên bản hiện tại; các phiên bản trước có sẵn theo yêu cầu.

## 12. Liên hệ {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
