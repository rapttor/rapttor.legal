---
doc: refunds
title: Chính sách hoàn tiền và hủy
version: 1.1.1
updated: 2026-10-31
lang: vi
translation_of: 1.1.1
status: draft
when: feature.payments
summary: Cách hủy, khi nào quý khách có thể rút lui hoặc được hoàn tiền, và điều gì xảy ra với các giao dịch mua qua cửa hàng ứng dụng.
---

# Chính sách hoàn tiền và hủy

*Phiên bản {{doc.version}}, cập nhật lần cuối {{doc.updated}}.*

Chính sách này là một phần của [Điều khoản dịch vụ]({{url.terms}}) và áp dụng cho các giao dịch mua từ **{{company.name}}** ("chúng tôi") đối với {{product.name}}. Không có điều gì trong chính sách này giới hạn các quyền mà quý khách có theo luật bảo vệ người tiêu dùng bắt buộc.

## Nơi quý khách mua có ý nghĩa {#where}

- **Mua trực tiếp từ chúng tôi** (trang web hoặc quy trình thanh toán của chúng tôi): chính sách này áp dụng.
{{#if feature.merchant_of_record}}- **Mua qua nhà cung cấp thanh toán của chúng tôi{{#if payments.provider}} {{payments.provider}}{{/if}}** (merchant of record): nhà cung cấp là bên bán của đơn hàng, xử lý thanh toán, thuế và biên lai, đồng thời xử lý hoàn tiền theo điều khoản thanh toán của họ và chính sách này. Yêu cầu có thể gửi cho chúng tôi hoặc cho nhà cung cấp.
{{/if}}
- **Mua qua cửa hàng ứng dụng hoặc nền tảng** (Apple App Store, Google Play, cửa hàng trên console hoặc PC): cửa hàng là bên bán chính thức và **xử lý hoàn tiền, hủy và thanh toán**. Quý khách hãy yêu cầu hoàn tiền từ cửa hàng theo quy trình riêng của họ; chúng tôi không thể hoàn tiền cho các khoản thanh toán đó, nhưng chúng tôi sẽ giúp xác nhận các sự việc và có thể thu hồi vật phẩm đã mua khi cửa hàng hoàn tiền. Quy định của cửa hàng và luật tại nơi quý khách sinh sống quyết định quyền của quý khách tại đó.

{{#if feature.subscriptions}}
## Hủy gói đăng ký {#cancel}

Quý khách có thể hủy bất cứ lúc nào trong phần cài đặt tài khoản{{#if feature.mobile}} (hoặc trong phần cài đặt đăng ký của cửa hàng nếu quý khách đã đăng ký ở đó){{/if}}, hoặc bằng cách viết thư đến [{{company.email}}](mailto:{{company.email}}). Việc hủy sẽ chấm dứt các lần gia hạn trong tương lai; quý khách vẫn được sử dụng dịch vụ cho đến hết kỳ đã thanh toán. Chúng tôi không tính phí theo tỷ lệ cho các kỳ lẻ, trừ khi pháp luật hoặc chính sách này quy định khác. Hủy dịch vụ đơn giản như đăng ký: có nút hủy trực tiếp trong tài khoản, không cần gọi điện hay điền biểu mẫu. Chúng tôi nhắc quý khách trước khi gia hạn, hoặc trước khi gói dùng thử chuyển thành gói trả phí, ở nơi pháp luật yêu cầu; với gói từ một năm trở lên, chúng tôi gửi nhắc nhở trước khi gia hạn 15 đến 45 ngày và một nhắc nhở hằng năm, kèm giá và cách hủy. Điều khoản gia hạn luôn được hiển thị bên cạnh nút thanh toán.
{{/if}}

## Quyền rút lui của người tiêu dùng (EU, Anh và các luật tương tự) {#withdrawal}

{{#if feature.consumers}}
Nếu quý khách là người tiêu dùng tại EU, Anh hoặc một quốc gia khác có quyền rút lui đối với hợp đồng từ xa, quý khách có thể rút lui khỏi giao dịch mua **trong vòng {{policy.refund_days}} ngày** kể từ khi hợp đồng được ký kết, mà không cần nêu lý do.

**Nội dung số và dịch vụ số.** Nếu quý khách yêu cầu chúng tôi bắt đầu cung cấp dịch vụ số hoặc nội dung số trong thời gian rút lui (ví dụ quyền truy cập, tín dụng hoặc vật phẩm ảo) và xác nhận rằng quý khách hiểu mình có thể mất quyền rút lui, thì:
- đối với **nội dung số không lưu trên phương tiện vật lý**, sau khi việc cung cấp bắt đầu với sự đồng ý rõ ràng của quý khách, quý khách mất quyền rút lui;
- đối với **dịch vụ số**, quý khách vẫn có thể rút lui trong thời hạn đó, nhưng phải trả một khoản tương ứng với phần đã được cung cấp cho đến thời điểm quý khách thông báo cho chúng tôi.

Chúng tôi yêu cầu sự đồng ý này khi thanh toán. Nếu quý khách không đưa ra sự đồng ý đó, quyền rút lui đầy đủ sẽ được áp dụng.

**Chức năng rút lui.** Như pháp luật yêu cầu từ ngày 19 tháng 6 năm 2026, chức năng "Rút lui khỏi hợp đồng" có sẵn trong tài khoản của quý khách và trong xác nhận đơn hàng: chọn hợp đồng, xác nhận, và quý khách sẽ nhận được xác nhận trên phương tiện lâu bền (email) ghi rõ ngày và giờ. Quý khách không cần giải thích lý do.

**Các cách khác để rút lui.** Hãy gửi một tuyên bố rõ ràng (ví dụ qua email đến [{{company.email}}](mailto:{{company.email}})) về quyết định rút lui của quý khách, kèm họ tên, thông tin đơn hàng hoặc tài khoản và ngày mua. Quý khách có thể sử dụng mẫu dưới đây nhưng không bắt buộc. Chúng tôi sẽ xác nhận đã nhận và hoàn tiền cho quý khách **trong vòng 14 ngày** kể từ khi biết về quyết định của quý khách, bằng cùng phương thức thanh toán.

> **Mẫu thông báo rút lui** (chỉ điền và gửi nếu quý khách muốn rút lui)
> Gửi tới {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Tôi/Chúng tôi xin thông báo rằng tôi/chúng tôi rút lui khỏi hợp đồng của mình/chúng tôi về việc cung cấp dịch vụ/nội dung số sau: ______ ; ngày đặt hàng/ngày nhận: ______ ; họ và tên: ______ ; địa chỉ: ______ ; ngày: ______ (chỉ ký nếu lập trên giấy).
{{else}}
Dịch vụ của chúng tôi chỉ được cung cấp cho doanh nghiệp, nên các quyền rút lui theo luật dành cho người tiêu dùng không áp dụng. Hãy liên hệ với chúng tôi nếu quý khách tin rằng mình là người tiêu dùng.
{{/if}}

## Các quốc gia khác {#other-countries}

Một số nơi có các quyền hủy hoặc hoàn tiền bổ sung (ví dụ thời gian suy xét (cooling-off), quy tắc về tự động gia hạn tại một số bang của Hoa Kỳ, hoặc bảo đảm theo luật định tại Australia, New Zealand và Vương quốc Anh). Khi các quyền đó là bắt buộc, chúng được áp dụng và thay thế mọi điều khoản kém thuận lợi hơn trong chính sách này.

## Khi nào chúng tôi hoàn tiền {#refunds}

Chúng tôi sẽ hoàn tiền, toàn bộ hoặc một phần tùy từng trường hợp:

- một **khoản thu trùng lặp hoặc sai sót**, hoặc một khoản thu mà quý khách không ủy quyền (vui lòng báo cho chúng tôi kịp thời; chúng tôi có thể yêu cầu thêm chi tiết);
- một giao dịch mua mà dịch vụ **không thể được cung cấp** hoặc có khiếm khuyết đáng kể và chúng tôi không thể khắc phục trong thời gian hợp lý;
- một giao dịch mua mà quý khách yêu cầu hủy trong vòng **{{policy.refund_days}} ngày**, nếu quý khách chưa sử dụng những gì đã mua (kể cả tín dụng chưa dùng), theo quyết định của chúng tôi trong trường hợp không có quyền pháp lý nào áp dụng;
- bất kỳ khoản nào khác mà chúng tôi đồng ý bằng văn bản.

Ngoài các trường hợp trên, phí đã thanh toán không được hoàn lại, bao gồm phí cho các kỳ lẻ, vật phẩm đã sử dụng hoặc tiêu thụ, và các tài khoản bị đóng do vi phạm [Chính sách sử dụng hợp lý]({{url.acceptable_use}}). Hoàn tiền được chuyển về phương thức thanh toán ban đầu; chúng tôi chỉ hoàn bằng tín dụng nếu quý khách yêu cầu.

{{#if feature.credits}}
## Tín dụng và vật phẩm ảo {#credits}

Tín dụng trả trước chưa sử dụng có thể được hoàn lại trong thời hạn nêu trên. Tín dụng và vật phẩm ảo đã được sử dụng hoặc tiêu thụ sẽ không được hoàn lại, trừ khi pháp luật yêu cầu. Nếu chúng tôi chấm dứt một dịch vụ, chúng tôi xử lý số dư trả phí còn lại như mô tả trong [Điều khoản dịch vụ]({{url.terms}}){{#if feature.game}} và [Quy tắc trò chơi]({{url.game_rules}}){{/if}}.
{{/if}}

## Khiếu nại thanh toán ngược (chargeback) và tranh chấp {#chargebacks}

Vui lòng liên hệ với chúng tôi trước khi khiếu nại một khoản thu với ngân hàng hoặc tổ chức phát hành thẻ của quý khách: chúng tôi thường giải quyết nhanh hơn. Nếu quý khách mở tranh chấp đối với một khoản thu hợp lệ, chúng tôi có thể tạm khóa tài khoản cho đến khi vụ việc được giải quyết, và chia sẻ bằng chứng về việc giao hàng và sử dụng với nhà cung cấp thanh toán.

## Thuế và tiền tệ {#taxes}

Khoản hoàn tiền bao gồm cả thuế đã được thu. Nếu quý khách thanh toán bằng một loại tiền tệ khác, số tiền được hoàn lại có thể khác do biến động tỷ giá và phí ngân hàng, những yếu tố nằm ngoài tầm kiểm soát của chúng tôi.

## Cách yêu cầu {#contact}

Viết thư đến [{{company.email}}](mailto:{{company.email}}) kèm email tài khoản, số đơn hàng hoặc số biên lai và mô tả ngắn gọn. Chúng tôi sẽ phản hồi tin nhắn của quý khách. Nếu chúng tôi không thể giải quyết vấn đề, quý khách có thể liên hệ cơ quan bảo vệ người tiêu dùng tại địa phương{{#if consumer_dispute}} hoặc {{consumer_dispute}}{{/if}}.
