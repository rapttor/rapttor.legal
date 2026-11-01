---
doc: terms
title: Điều khoản dịch vụ
version: 1.3.0
updated: 2026-10-31
lang: vi
translation_of: 1.3.0
status: draft
summary: Thỏa thuận giữa quý khách và {{product.name}} về việc sử dụng {{product.name}}.
---

# Điều khoản dịch vụ

*Phiên bản {{doc.version}}, cập nhật lần cuối {{doc.updated}}.*

## 1. Thỏa thuận {#agreement}

Các Điều khoản dịch vụ này (“**Điều khoản**”) là thỏa thuận ràng buộc giữa quý khách và **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, số đăng ký {{company.reg_id}}{{/if}} (“**{{product.name}}**”, “chúng tôi”), điều chỉnh việc quý khách truy cập và sử dụng {{product.name}}, các trang web, ứng dụng, API, tài liệu và dịch vụ liên quan của chúng tôi (“**Dịch vụ**”).

Khi tạo tài khoản, cài đặt ứng dụng hoặc sử dụng Dịch vụ bằng cách khác, quý khách chấp nhận các Điều khoản này và các tài liệu mà chúng dẫn chiếu tới: [Chính sách quyền riêng tư]({{url.privacy}}), [Chính sách sử dụng hợp lý]({{url.acceptable_use}}), [Chính sách cookie]({{url.cookies}}){{#if feature.processor_role}}, [Phụ lục xử lý dữ liệu]({{url.dpa}}) trong trường hợp áp dụng{{/if}}{{#if feature.payments}}, [Chính sách hoàn tiền và hủy]({{url.refunds}}){{/if}}{{#if feature.game}}, [Quy tắc trò chơi và chính sách vật phẩm ảo]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, [Điều khoản ứng dụng]({{url.app_eula}}){{/if}} và mọi biểu mẫu đặt hàng hoặc điều khoản riêng cho sản phẩm. Nếu quý khách không đồng ý, xin đừng sử dụng Dịch vụ.

Nếu quý khách sử dụng Dịch vụ cho một tổ chức, quý khách xác nhận có thẩm quyền ràng buộc tổ chức đó, và “quý khách” bao gồm cả tổ chức đó. Nếu các điều khoản riêng cho sản phẩm hoặc một thỏa thuận đã ký mâu thuẫn với các Điều khoản này, thì chúng được ưu tiên áp dụng, nhưng chỉ đối với sản phẩm hoặc khách hàng đó.

{{#if feature.consumers}}
**Người tiêu dùng.** Nếu quý khách sử dụng Dịch vụ với tư cách người tiêu dùng, luật bảo vệ người tiêu dùng bắt buộc tại quốc gia cư trú của quý khách vẫn tiếp tục được áp dụng, và không có điều nào trong các Điều khoản này hạn chế những quyền đó. Các mục được đánh dấu *(khách hàng doanh nghiệp)* chỉ áp dụng nếu quý khách không phải là người tiêu dùng.
{{/if}}

## 2. Điều kiện sử dụng {#eligibility}

Quý khách chỉ được sử dụng Dịch vụ nếu quý khách:

1. {{#if feature.minors}}đủ **{{policy.min_age}}** tuổi trở lên và, nếu chưa đạt tuổi thành niên theo pháp luật nơi quý khách sinh sống, có sự đồng ý của cha mẹ hoặc người giám hộ hợp pháp, người chấp nhận các Điều khoản này thay quý khách và chịu trách nhiệm về việc sử dụng và mua hàng của quý khách (chúng tôi có thể yêu cầu chứng minh){{else}}đủ **{{policy.min_age}}** tuổi trở lên và có năng lực ký kết một hợp đồng ràng buộc{{/if}};
2. không bị pháp luật hiện hành cấm nhận Dịch vụ, kể cả luật về trừng phạt và kiểm soát xuất khẩu (mục 22);
3. chưa từng bị loại khỏi Dịch vụ do vi phạm quy định của chúng tôi, trừ khi chúng tôi đã đồng ý bằng văn bản cho quý khách quay lại; và
4. sử dụng Dịch vụ một cách hợp pháp tại nơi quý khách đang có mặt.
{{#if feature.age_gate}}5. khi chúng tôi yêu cầu, xác nhận rằng quý khách đủ **{{policy.age_gate}}** tuổi và đạt tuổi hợp pháp theo quy định của quốc gia mình để sử dụng các tính năng liên quan đến {{policy.age_topics|nội dung nhạy cảm theo độ tuổi}}. Chúng tôi không cần ngày sinh của quý khách: xác nhận của quý khách sẽ được ghi nhận. Nếu xác nhận đó không đúng, chúng tôi có thể khóa tài khoản và xóa dữ liệu của tài khoản.
{{/if}}{{#if feature.gambling}}6. khi chúng tôi yêu cầu, xác nhận rằng quý khách đủ **{{policy.gambling_age}}** tuổi, việc đánh bạc là hợp pháp tại nơi quý khách sinh sống, và quý khách chỉ sử dụng các tính năng đánh bạc cho chính mình. Chúng tôi có thể yêu cầu xác minh tuổi và danh tính thực tế, và có thể từ chối hoặc chấm dứt quyền truy cập vào các tính năng đánh bạc bất cứ khi nào pháp luật hoặc giấy phép của chúng tôi yêu cầu.
{{/if}}{{#if policy.excluded_regions}}7. khi chúng tôi yêu cầu, xác nhận rằng quý khách không ở tại, cũng không phải cư dân hoặc công dân của bất kỳ quốc gia hoặc khu vực nào sau đây: **{{policy.excluded_regions}}**, nơi Dịch vụ hoặc các Điều khoản này có thể không hợp pháp, không thể thi hành hoặc không được cung cấp. Chúng tôi không thể thấy quý khách thực sự đang ở đâu (ví dụ khi sử dụng VPN), nên chúng tôi dựa vào xác nhận của quý khách; nếu xác nhận đó không đúng, quý khách sử dụng Dịch vụ với rủi ro của chính mình, quý khách có trách nhiệm tuân thủ pháp luật địa phương, và chúng tôi có thể khóa tài khoản và xóa dữ liệu của tài khoản. Không có điều nào trong mục này giới hạn các quyền không thể từ bỏ theo pháp luật nơi quý khách sinh sống.
{{/if}}

Chúng tôi có thể yêu cầu chứng minh tuổi, danh tính hoặc thẩm quyền vào bất kỳ lúc nào, và có thể từ chối hoặc đóng tài khoản không vượt qua kiểm tra đó.

## 3. Tài khoản và bảo mật {#accounts}

- Cung cấp thông tin chính xác, cập nhật và giữ cho thông tin đó luôn được cập nhật. Một cá nhân hoặc tổ chức được có một tài khoản, trừ khi chúng tôi đồng ý khác; việc tạo thêm tài khoản để né tránh hạn chế, giới hạn, lệnh cấm, thời gian dùng thử hoặc quy tắc giá là bị cấm.
- Giữ bí mật thông tin đăng nhập. Không chia sẻ, bán, cho thuê hoặc chuyển nhượng tài khoản của quý khách. Mỗi chỗ ngồi chỉ dành cho một cá nhân được nêu tên, trừ khi gói dịch vụ quy định khác.
- Quý khách chịu trách nhiệm đối với mọi hoạt động diễn ra dưới tài khoản của mình, kể cả những hoạt động do người mà quý khách cho phép truy cập hoặc không ngăn được thực hiện, cho đến khi quý khách thông báo cho chúng tôi rằng tài khoản đã bị xâm phạm. Hãy thông báo ngay cho chúng tôi tại [{{company.email}}](mailto:{{company.email}}) nếu quý khách nghi ngờ có truy cập trái phép.
- Chúng tôi có thể yêu cầu xác thực mạnh hơn, đặt lại thông tin đăng nhập, hoặc khóa tài khoản mà chúng tôi có cơ sở hợp lý để tin rằng đã bị xâm phạm hoặc bị lạm dụng.
- Tài khoản miễn phí không hoạt động có thể bị đóng sau khi đã thông báo trước tới địa chỉ email đăng ký; tài khoản trả phí không bị đóng vì không hoạt động.
{{#if feature.anonymous}}- **Tài khoản ẩn danh.** Nơi chúng tôi cung cấp tính năng này, Dịch vụ sẽ tạo cho quý khách một tài khoản ẩn danh lần đầu tiên quý khách sử dụng. Tài khoản này không có địa chỉ email; bất kỳ ai sử dụng trình duyệt hoặc thiết bị đó đều có thể dùng tài khoản, và chúng tôi không thể khôi phục tài khoản cho quý khách nếu quý khách mất quyền truy cập. Quý khách có thể liên kết một địa chỉ email bất cứ lúc nào để bảo mật và khôi phục tài khoản: chúng tôi xác nhận địa chỉ đó bằng liên kết đăng nhập được gửi tới địa chỉ này. Tài khoản ẩn danh không được sử dụng trong thời gian dài có thể bị xóa sau khi đã thông báo trong Dịch vụ, nơi điều đó khả thi.
{{/if}}- **Chủ tài khoản và quyền truy cập.** Người xác nhận quyền kiểm soát một địa chỉ email thông qua liên kết đăng nhập mà chúng tôi gửi, và chấp nhận các Điều khoản này, là chủ tài khoản và được coi là người đã đưa ra các lựa chọn trong tài khoản. Nếu quý khách hành động thay mặt cho một tổ chức, quý khách xác nhận rằng mình có thể ràng buộc tổ chức đó. Quý khách quyết định ai khác trong tổ chức của mình được truy cập (ví dụ người vận hành với vai trò giới hạn); những người được quý khách cấp quyền truy cập có thể xem những gì quý khách cung cấp cho họ, và quý khách chịu trách nhiệm về lựa chọn đó.

## 4. Giấy phép và hạn chế {#licence}

Tùy thuộc vào các Điều khoản này và việc thanh toán các khoản phí áp dụng, chúng tôi cấp cho quý khách giấy phép có giới hạn, có thể thu hồi, không độc quyền, không thể chuyển nhượng và không thể cấp lại cho bên thứ ba, để truy cập và sử dụng Dịch vụ cho mục đích cá nhân hoặc kinh doanh nội bộ của quý khách trong suốt thời hạn hiệu lực. Phần mềm mà chúng tôi cung cấp được cấp phép chứ không được bán. Chúng tôi và các bên cấp phép của chúng tôi giữ mọi quyền không được cấp rõ ràng.

Trừ khi pháp luật trao cho quý khách một quyền không thể từ bỏ, quý khách không được, và không được cho phép bất kỳ ai:

- sao chép, sửa đổi, dịch hoặc tạo tác phẩm phái sinh từ Dịch vụ;
- thực hiện kỹ thuật đảo ngược (reverse engineering), giải mã, tháo rời, hoặc cố gắng suy ra mã nguồn, mô hình, trọng số, thuật toán hoặc API không công khai;
- bán lại, cấp phép lại, cho thuê, cho thuê tài sản, lưu trữ Dịch vụ như một dịch vụ cho bên thứ ba, hoặc cung cấp Dịch vụ cho bên thứ ba khác ngoài những người dùng được ủy quyền của quý khách;
- lách các giới hạn kỹ thuật, cơ chế cấp phép, đo đếm, kiểm soát truy cập, giới hạn tốc độ hoặc tính năng bảo mật;
- xóa hoặc thay đổi thông báo quyền sở hữu, ghi nhận tác giả hoặc thông báo giấy phép mã nguồn mở;
- sử dụng Dịch vụ hoặc kết quả đầu ra của Dịch vụ để xây dựng hoặc huấn luyện một sản phẩm cạnh tranh, hoặc để đánh giá hiệu năng (benchmark) hoặc công bố kết quả hiệu năng mà không có sự đồng ý bằng văn bản của chúng tôi{{#if feature.ai}}, hoặc để huấn luyện, tinh chỉnh (fine-tune) hoặc chưng cất (distil) một mô hình AI từ kết quả đầu ra của Dịch vụ, khi chúng tôi cấm điều đó trong tài liệu{{/if}};
- truy cập Dịch vụ bằng phương tiện tự động (bot, công cụ thu thập dữ liệu, trình thu thập tự động), trừ khi thông qua API đã được tài liệu hóa của chúng tôi và theo điều khoản của API đó.

[Chính sách sử dụng hợp lý]({{url.acceptable_use}}) bổ sung các quy tắc chi tiết và là một phần của các Điều khoản này. Các thành phần mã nguồn mở được điều chỉnh bởi giấy phép riêng của chúng, và các giấy phép đó được ưu tiên áp dụng đối với những thành phần ấy.

## 5. Sử dụng hợp lý và thực thi {#acceptable-use}

Quý khách chịu trách nhiệm về việc sử dụng Dịch vụ của mình và về hành vi của tất cả những người mà quý khách cho phép sử dụng Dịch vụ. Việc lạm dụng có thể gây hại cho người dùng khác, bên thứ ba và chúng tôi, và chúng tôi có thể hành động như được mô tả trong [Chính sách sử dụng hợp lý]({{url.acceptable_use}}) và mục 17, bao gồm gỡ bỏ nội dung, hạn chế tính năng, điều tiết lưu lượng, đình chỉ hoặc chấm dứt tài khoản, giữ lại các khoản chi trả, báo cáo cho cơ quan có thẩm quyền, và theo đuổi các biện pháp khắc phục theo mục 21.

## 6. Nội dung của quý khách {#your-content}

{{#if feature.ugc}}
"**Nội dung của quý khách**" nghĩa là mọi thứ quý khách tải lên, gửi, đăng, kết nối hoặc tạo ra thông qua Dịch vụ{{#if feature.ai}}, bao gồm lời nhắc (prompt) và, giữa quý khách và chúng tôi, kết quả đầu ra mà quý khách nhận được{{/if}}.

- **Quyền sở hữu.** Quý khách giữ mọi quyền đối với Nội dung của quý khách. Chúng tôi không có quyền sở hữu nào.
- **Giấy phép cho chúng tôi.** Quý khách cấp cho chúng tôi giấy phép toàn cầu, không độc quyền và không phải trả tiền bản quyền để lưu trữ, tái tạo, xử lý, truyền tải, điều chỉnh (để định dạng, tạo ảnh thu nhỏ, dịch thuật, kiểm tra an toàn) và hiển thị Nội dung của quý khách, **chỉ trong phạm vi cần thiết để vận hành, bảo mật, hỗ trợ và cải thiện Dịch vụ và để thực thi các Điều khoản này**, trong suốt thời gian quý khách giữ nội dung trong Dịch vụ và trong các khoảng thời gian sao lưu cũng như lưu giữ theo yêu cầu pháp lý sau đó. Khi quý khách công khai nội dung, giấy phép này mở rộng tới việc hiển thị nội dung cho đối tượng mà quý khách đã chọn. Giấy phép này chấm dứt khi quý khách xóa nội dung hoặc tài khoản, tùy thuộc vào các khoảng thời gian nói trên và các bản sao mà người dùng khác đã nhận được một cách hợp pháp.
- **Cam kết của quý khách.** Quý khách có, và sẽ tiếp tục có, mọi quyền, sự đồng ý và cho phép cần thiết để gửi Nội dung của quý khách và cấp giấy phép này, kể cả từ bất kỳ người nào có thể được nhận diện trong nội dung; Nội dung của quý khách và việc chúng tôi sử dụng nội dung đó như được cho phép không vi phạm bất kỳ luật nào hoặc quyền của người khác (bản quyền, nhãn hiệu, quyền riêng tư, quyền công khai, bí mật, hợp đồng); và nội dung đó tuân thủ [Chính sách sử dụng hợp lý]({{url.acceptable_use}}).
- **Kiểm duyệt.** Chúng tôi không có nghĩa vụ chung là giám sát Nội dung của quý khách, nhưng chúng tôi có thể xem xét, gỡ bỏ, hạn chế hoặc từ chối nội dung mà chúng tôi có cơ sở hợp lý để tin là vi phạm pháp luật, các Điều khoản này hoặc quyền của người khác, hoặc nội dung mà chúng tôi nhận được thông báo hợp lệ về (xem [Thông báo về bản quyền và nội dung bất hợp pháp]({{url.copyright}})). Khi pháp luật yêu cầu (ví dụ theo Đạo luật Dịch vụ Số của EU), chúng tôi nêu cho quý khách lý do và cách khiếu nại quyết định đó.
- **Sao lưu.** Quý khách chịu trách nhiệm giữ bản sao của riêng mình đối với Nội dung của quý khách. Trừ khi gói dịch vụ bao gồm rõ ràng việc sao lưu hoặc lưu giữ, chúng tôi không cam kết khôi phục nội dung đã bị xóa hoặc bị mất.
- **Dữ liệu tổng hợp.** Chúng tôi có thể sử dụng dữ liệu về việc sử dụng không xác định được quý khách và không tiết lộ Nội dung của quý khách, để vận hành, bảo mật và cải thiện Dịch vụ.
{{else}}
Quý khách giữ mọi quyền đối với bất kỳ thứ gì quý khách gửi tới Dịch vụ. Quý khách cấp cho chúng tôi giấy phép có giới hạn cần thiết để xử lý nội dung đó nhằm cung cấp, bảo mật và hỗ trợ Dịch vụ, và quý khách cam kết rằng quý khách có quyền gửi nội dung đó. Quý khách chịu trách nhiệm giữ bản sao của riêng mình.
{{/if}}

### Dữ liệu và tệp của quý khách {#your-data}

Giữa quý khách và chúng tôi, **quý khách sở hữu dữ liệu và tệp mà quý khách đưa vào Dịch vụ, và một mình quý khách chịu trách nhiệm đối với chúng**: về việc có quyền tải lên và sử dụng chúng, về tính chính xác và tính hợp pháp của chúng, và về các lựa chọn của quý khách về việc ai được truy cập chúng. Chúng tôi lưu trữ và xử lý chúng theo chỉ dẫn của quý khách để Dịch vụ hoạt động. Điều này không hạn chế nghĩa vụ pháp lý của chúng tôi, ví dụ nghĩa vụ bảo mật Dịch vụ và bảo vệ dữ liệu cá nhân, và không ảnh hưởng đến các quyền mà pháp luật không cho phép loại trừ.
{{#if feature.uploads}}
- **Bản quyền và các quyền khác.** Quý khách xác nhận rằng quý khách sở hữu những gì quý khách tải lên hoặc đã có mọi sự cho phép cần thiết (kể cả từ những người xuất hiện trong hình ảnh), và quý khách chấp nhận rằng **quý khách có thể phải chịu trách nhiệm về các khiếu nại** liên quan đến bản quyền, quyền nhân thân, quyền riêng tư hoặc các quyền khác phát sinh từ đó. Chúng tôi có thể gỡ bỏ nội dung và hợp tác với chủ sở hữu quyền cũng như cơ quan có thẩm quyền, như được mô tả trong [Thông báo về bản quyền và nội dung bất hợp pháp]({{url.copyright}}).
- **Riêng tư theo mặc định.** Những gì quý khách tải lên chỉ hiển thị với quý khách và với những người mà quý khách cấp quyền truy cập (ví dụ thành viên hoặc người vận hành của tổ chức quý khách). Chúng tôi không sử dụng nội dung tải lên hoặc các nội dung khác của quý khách để tạo tài liệu công khai như mẫu, hướng dẫn, ví dụ, tài liệu tiếp thị hoặc dữ liệu huấn luyện, và chúng tôi không cung cấp chúng cho những người chưa đăng nhập, trừ khi quý khách công khai hoặc chia sẻ rõ ràng.
{{/if}}

## 7. Nếu quý khách cung cấp dịch vụ cho người khác bằng Dịch vụ {#end-users}

Nếu quý khách sử dụng Dịch vụ để cung cấp điều gì đó cho khách hàng, người dùng, nhân viên hoặc bên thứ ba khác của mình (“**Người dùng cuối**”), quý khách hoàn toàn chịu trách nhiệm đối với họ: quý khách phải có cơ sở pháp lý, thông báo và sự đồng ý cần thiết đối với mọi dữ liệu cá nhân mà quý khách thu thập hoặc xử lý, phải tự thỏa thuận điều khoản với họ, xử lý các yêu cầu và khiếu nại của họ, bảo đảm họ tuân thủ [Chính sách sử dụng hợp lý]({{url.acceptable_use}}), và không đưa ra cam kết thay mặt chúng tôi. Quý khách chịu trách nhiệm về hành vi và thiếu sót của Người dùng cuối như thể đó là của chính quý khách. Chúng tôi không có nghĩa vụ nào đối với Người dùng cuối.

## 8. Tính năng AI {#ai}

{{#if feature.ai}}
- Kết quả đầu ra được tạo ra tự động và có thể không chính xác, không đầy đủ, gây phản cảm, thiên lệch hoặc tương tự với kết quả đầu ra đã đưa cho người khác. Quý khách phải đánh giá kết quả trước khi dựa vào nó và tự chịu trách nhiệm về cách quý khách sử dụng.
- **Không sử dụng tính năng AI làm căn cứ duy nhất để đưa ra quyết định có hệ quả pháp lý hoặc ảnh hưởng đáng kể tương tự đối với con người** (ví dụ về việc làm, tín dụng, nhà ở, bảo hiểm, giáo dục, y tế, thực thi pháp luật hoặc nhập cư), và không sử dụng chúng để đưa ra tư vấn y tế, pháp lý, tài chính hoặc tư vấn liên quan đến an toàn mà không có sự xem xét của người có chuyên môn.
- Quý khách phải công bố nội dung do AI tạo ra hoặc đã bị AI chỉnh sửa trong phạm vi mà pháp luật hoặc nền tảng bạn đăng tải yêu cầu (kể cả deepfake và phương tiện tổng hợp), và không được trình bày kết quả của AI như do con người tạo ra khi điều đó có thể gây hiểu lầm.
- Quý khách không được sử dụng các tính năng cho bất kỳ mục đích bị cấm nào trong [Chính sách sử dụng hợp lý]({{url.acceptable_use}}), và không được cố gắng vượt qua các hệ thống an toàn (kể cả tấn công chèn lệnh (prompt injection), bẻ khóa (jailbreaking) hoặc tấn công trích xuất nhằm vào hệ thống của chúng tôi hoặc của người khác).
- Các nhà cung cấp mà chúng tôi sử dụng có thể áp dụng chính sách sử dụng riêng của họ, và chúng tôi có thể hạn chế tính năng tương ứng. Chúng tôi không sử dụng Nội dung của quý khách để huấn luyện mô hình đa dụng trừ khi quý khách chọn tham gia (xem [Chính sách quyền riêng tư]({{url.privacy}})).
{{else}}
Dịch vụ hiện chưa bao gồm các tính năng hỗ trợ bởi AI. Nếu chúng tôi bổ sung các tính năng như vậy, chúng tôi sẽ cập nhật các Điều khoản này và thông báo theo mục 16, và các quy tắc áp dụng cho chúng (tính chính xác, xem xét của con người, công bố, không có mục đích bị cấm) sẽ được áp dụng.
{{/if}}

## 9. Phí và thanh toán {#fees}

{{#if feature.payments}}
- **Giá và thuế.** Giá được hiển thị tại thời điểm mua và chưa bao gồm thuế GTGT, thuế bán hàng và các loại thuế tương tự trừ khi có nêu rõ; quý khách thanh toán các loại thuế áp dụng. Giá đối với người tiêu dùng đã bao gồm các loại thuế theo quy định của pháp luật.
{{#if feature.merchant_of_record}}- **Bên bán hàng ghi nhận (merchant of record).** Đơn hàng được xử lý bởi nhà cung cấp dịch vụ thanh toán của chúng tôi{{#if payments.provider}} {{payments.provider}}{{/if}}, bên này đóng vai trò là người bán lại và là merchant of record, thu tiền thanh toán và thuế, và phát hành biên lai. Điều khoản thanh toán của nhà cung cấp đó áp dụng cho giao dịch mua bên cạnh các Điều khoản này; việc thanh toán, lập hóa đơn, thuế và hoàn tiền được xử lý theo các điều khoản đó và theo [Chính sách hoàn tiền và hủy]({{url.refunds}}) của chúng tôi.
{{/if}}- **Thanh toán.** Quý khách ủy quyền cho chúng tôi và đơn vị xử lý thanh toán của chúng tôi thu mọi khoản đến hạn bằng phương thức thanh toán mà quý khách cung cấp, kể cả các khoản gia hạn và các khoản tính theo mức sử dụng. Quý khách cam kết rằng mình có quyền sử dụng phương thức thanh toán đó và phải cập nhật thông tin thanh toán.
{{#if feature.subscriptions}}- **Trước khi thanh toán.** Bên cạnh nút thanh toán, chúng tôi hiển thị giá, kỳ thanh toán, việc gói đăng ký tự động gia hạn, điều gì xảy ra sau thời gian dùng thử (nếu có), cách hủy, và liên kết đến các Điều khoản này, [Chính sách hoàn tiền và hủy]({{url.refunds}}) và [Chính sách quyền riêng tư]({{url.privacy}}). Quý khách chỉ bị tính phí sau khi đánh dấu vào ô hoặc nhấn nút xác nhận rằng quý khách đã xem các nội dung đó. Chúng tôi lưu lại bản ghi về sự đồng ý đó và gửi cho quý khách một xác nhận để quý khách giữ lại.
- **Gói đăng ký.** Trừ khi có quy định khác tại bước thanh toán, gói đăng ký tự động gia hạn theo các kỳ có cùng độ dài cho đến khi bị hủy. Quý khách có thể hủy bất cứ lúc nào trong tài khoản hoặc qua email trước ngày gia hạn; việc hủy có hiệu lực vào cuối kỳ đã thanh toán và chúng tôi không tính phí theo tỷ lệ ngày. Chúng tôi sẽ thông báo trước cho quý khách, như pháp luật yêu cầu, trước khi thời gian dùng thử chuyển thành gói trả phí hoặc trước khi giá gia hạn thay đổi.
- **Dùng thử và khuyến mãi.** Mỗi cá nhân hoặc doanh nghiệp chỉ được một ưu đãi dùng thử hoặc khuyến mãi. Chúng tôi có thể rút lại hoặc từ chối ưu đãi khi nghi ngờ lạm dụng (nhiều tài khoản, danh tính giả, vượt giới hạn bằng cách lách quy định).
{{/if}}{{#if feature.credits}}- **Tín dụng.** Tín dụng trả trước, token hoặc tiền tệ trong ứng dụng là một giấy phép có giới hạn để sử dụng Dịch vụ, không phải tiền, không có giá trị quy đổi thành tiền mặt, không thể chuyển nhượng, không thể đổi lấy tiền hoặc giao dịch, và có thể hết hạn như đã nêu khi mua. Tín dụng chưa sử dụng sẽ bị mất khi tài khoản bị đóng do vi phạm; trong các trường hợp khác, việc hoàn tiền tuân theo các quy tắc dưới đây và pháp luật áp dụng.{{#if feature.game}} Vật phẩm ảo trong trò chơi được điều chỉnh bởi [Quy tắc trò chơi và chính sách vật phẩm ảo]({{url.game_rules}}).{{/if}}
{{/if}}- **Thay đổi giá.** Chúng tôi có thể thay đổi giá cho tương lai, với thông báo trước ít nhất {{policy.notice_days}} ngày. Nếu quý khách không đồng ý, hãy hủy trước khi thay đổi có hiệu lực.
- **Thanh toán trễ hoặc không thành công.** Chúng tôi có thể thử thu tiền lại, đình chỉ hoặc hạ cấp tài khoản, và thu chi phí đòi nợ hợp lý cùng lãi chậm trả theo luật định đối với hóa đơn kinh doanh quá hạn. Dịch vụ sẽ được khôi phục sau khi khoản nợ được thanh toán.
- **Khiếu nại thanh toán và gian lận.** Việc mở khiếu nại thanh toán (chargeback) hoặc tranh chấp thanh toán mà không liên hệ trước với chúng tôi tại [{{company.email}}](mailto:{{company.email}}), hoặc các khoản thanh toán gian lận hoặc không được ủy quyền, có thể dẫn đến việc đình chỉ ngay lập tức, mất quyền truy cập nội dung, và thu hồi khoản tiền đang tranh chấp cùng phí xử lý của chúng tôi.
- **Hoàn tiền.** Trừ khi pháp luật trao cho quý khách một quyền hoặc chúng tôi nêu khác bằng văn bản, các khoản phí đã thanh toán là không hoàn lại, kể cả đối với kỳ sử dụng một phần và tính năng chưa dùng, và không có khoản hoàn tiền nào khi chúng tôi đình chỉ hoặc chấm dứt tài khoản của quý khách do vi phạm.
{{#if feature.consumers}}- **Hủy, rút lui và hoàn tiền.** Quyền rút lui của người tiêu dùng, cách hủy và thời điểm hoàn tiền được nêu trong [Chính sách hoàn tiền và hủy]({{url.refunds}}), là một phần của các Điều khoản này. Đối với nội dung hoặc dịch vụ kỹ thuật số được cung cấp ngay theo yêu cầu của quý khách, chúng tôi yêu cầu quý khách xác nhận rõ ràng sự đồng ý và sự chấp nhận tại bước thanh toán, như pháp luật yêu cầu.
{{/if}}
{{else}}
Dịch vụ hiện được cung cấp miễn phí. Chúng tôi có thể đưa ra các tính năng trả phí trong tương lai; chúng sẽ được trình bày rõ ràng cho quý khách, và quý khách sẽ không bao giờ bị tính phí nếu chưa có sự đồng ý của quý khách.
{{/if}}

## 10. API, tích hợp và dịch vụ của bên thứ ba {#integrations}

{{#if feature.api}}
Việc truy cập API tuân theo các Điều khoản này, tài liệu hướng dẫn và mọi giới hạn tốc độ. Quý khách phải bảo vệ khóa API và thông tin xác thực của mình, chịu trách nhiệm đối với mọi lệnh gọi thực hiện bằng chúng, và không được chia sẻ, nhúng chúng vào mã công khai hoặc dùng chúng để bán lại quyền truy cập. Chúng tôi có thể thay mới, giới hạn hoặc thu hồi khóa, và thay đổi hoặc ngừng các phiên bản API với thông báo hợp lý (ngắn hơn khi cần vì lý do bảo mật hoặc pháp lý). Không sử dụng API theo cách làm suy giảm Dịch vụ đối với người khác hoặc cố gắng lách giới hạn, ví dụ bằng cách dùng nhiều khóa hoặc nhiều tài khoản.

{{/if}}
Dịch vụ có thể hoạt động cùng các sản phẩm, trang web và dịch vụ của bên thứ ba mà chúng tôi không kiểm soát. Việc quý khách sử dụng chúng tuân theo điều khoản của bên đó. Chúng tôi không chịu trách nhiệm về các sản phẩm, trang web và dịch vụ đó, về tính khả dụng hoặc thay đổi của chúng, hay về cách chúng sử dụng dữ liệu mà quý khách chọn chia sẻ với chúng. Chúng tôi có thể ngừng hỗ trợ một tích hợp vào bất cứ lúc nào.

## 11. Tính năng beta và miễn phí {#beta}

Các tính năng được gắn nhãn alpha, beta, preview, thử nghiệm (experimental) hoặc tương tự, cũng như các gói miễn phí, được cung cấp “nguyên trạng”, có thể thay đổi hoặc bị rút lại bất cứ lúc nào, có thể kém tin cậy hơn, và được loại trừ khỏi mọi cam kết về mức dịch vụ. Không dựa vào chúng cho các mục đích quan trọng.

## 12. Sở hữu trí tuệ {#ip}

Dịch vụ, bao gồm phần mềm, thiết kế, văn bản, đồ họa, dữ liệu, nhãn hiệu, logo và tài liệu, thuộc sở hữu của chúng tôi hoặc các bên cấp phép cho chúng tôi, và được bảo hộ theo luật bản quyền, luật nhãn hiệu và các luật khác. Không có điều nào trong các Điều khoản này chuyển quyền sở hữu nào cho quý khách, và không có quyền nào được cấp để sử dụng tên hoặc nhãn hiệu của chúng tôi, ngoại trừ phạm vi cần thiết để sử dụng Dịch vụ.

**Phản hồi.** Nếu quý khách gửi góp ý hoặc ý tưởng, quý khách cấp cho chúng tôi giấy phép vĩnh viễn, không thể thu hồi, toàn cầu, không phải trả tiền bản quyền và có thể cấp lại cho bên khác, để sử dụng chúng không hạn chế và không cần ghi nhận, trong phạm vi pháp luật cho phép. Chúng tôi không có nghĩa vụ phải hành động theo phản hồi.

Thông báo về bản quyền và nội dung bất hợp pháp: xem [Thông báo về bản quyền và nội dung bất hợp pháp]({{url.copyright}}).

## 13. Bảo mật thông tin (khách hàng doanh nghiệp) {#confidentiality}

Mỗi bên sẽ giữ bí mật thông tin kinh doanh và thông tin kỹ thuật không công khai của bên kia, chỉ sử dụng thông tin đó để thực hiện hoặc thực thi quyền theo các Điều khoản này, và bảo vệ thông tin đó bằng sự cẩn trọng hợp lý; ngoại trừ thông tin đã công khai mà không do lỗi của bên nhận, đã được biết trước, được phát triển độc lập, hoặc phải được tiết lộ theo luật (kèm thông báo trước nếu pháp luật cho phép). Nghĩa vụ này kéo dài ba năm sau khi các Điều khoản chấm dứt, và vô thời hạn đối với bí mật thương mại.

## 14. Quyền riêng tư và bảo vệ dữ liệu {#privacy}

[Chính sách quyền riêng tư]({{url.privacy}}) của chúng tôi giải thích cách chúng tôi xử lý dữ liệu cá nhân. {{#if feature.processor_role}}Khi chúng tôi xử lý dữ liệu cá nhân thay cho quý khách với tư cách bên xử lý dữ liệu cá nhân của quý khách, [Phụ lục xử lý dữ liệu]({{url.dpa}}) được áp dụng và tạo thành một phần của các Điều khoản này.{{/if}} Quý khách phải tuân thủ luật bảo vệ dữ liệu khi sử dụng Dịch vụ, và không được gửi dữ liệu thuộc các loại đặc biệt hoặc dữ liệu được pháp luật điều chỉnh (sức khỏe, thẻ thanh toán, số định danh do chính phủ cấp, dữ liệu trẻ em), trừ khi một tính năng hoặc thỏa thuận cho phép rõ ràng.

## 15. Tính khả dụng, hỗ trợ và thay đổi {#availability}

Chúng tôi hướng tới tính khả dụng cao nhưng không bảo đảm hoạt động liên tục hoặc không có lỗi. Chúng tôi có thể thực hiện bảo trì (có thông báo khi hợp lý có thể), và có thể sửa đổi, bổ sung hoặc gỡ bỏ tính năng. Nếu chúng tôi giảm đáng kể một tính năng trả phí trong thời hạn đã trả trước, chúng tôi sẽ thông báo trước cho quý khách ít nhất {{policy.notice_days}} ngày và, nếu quý khách không thể tiếp tục một cách hợp lý, sẽ hoàn lại theo tỷ lệ cho phần kỳ đã trả trước bị ảnh hưởng. Hỗ trợ được cung cấp tại [{{company.email}}](mailto:{{company.email}}) trên cơ sở nỗ lực hợp lý, trừ khi gói dịch vụ của quý khách bao gồm thỏa thuận mức dịch vụ.

## 16. Thay đổi các Điều khoản này {#changes}

Chúng tôi có thể cập nhật các Điều khoản này vì lý do pháp lý, bảo mật, sản phẩm hoặc kinh doanh. Đối với những thay đổi quan trọng, chúng tôi sẽ thông báo ít nhất **{{policy.notice_days}} ngày**, qua email hoặc trong Dịch vụ, trước khi chúng áp dụng đối với quý khách. Nếu quý khách không đồng ý, quý khách có thể ngừng sử dụng Dịch vụ và đóng tài khoản trước ngày có hiệu lực, và (đối với gói trả phí) yêu cầu hoàn lại theo tỷ lệ các khoản phí đã trả trước cho khoảng thời gian sau ngày đó. Việc tiếp tục sử dụng Dịch vụ sau ngày có hiệu lực nghĩa là quý khách chấp nhận các Điều khoản đã cập nhật. Những thay đổi theo yêu cầu của pháp luật, hoặc không làm giảm quyền lợi nào và không bổ sung nghĩa vụ nào, có thể có hiệu lực ngay lập tức. Các thay đổi không áp dụng đối với tranh chấp đang chờ giải quyết.

## 17. Đình chỉ và chấm dứt {#termination}

**Bởi quý khách.** Quý khách có thể ngừng sử dụng Dịch vụ và đóng tài khoản bất cứ lúc nào trong phần cài đặt hoặc qua email. Các khoản phí đã trả sẽ không được hoàn lại trừ khi mục 9 hoặc pháp luật có quy định khác.

**Bởi chúng tôi, vì lý do tiện lợi.** Chúng tôi có thể chấm dứt các gói trả phí với thông báo trước {{policy.notice_days}} ngày (kèm hoàn lại theo tỷ lệ các khoản phí đã trả trước) và có thể ngừng các dịch vụ miễn phí với thông báo hợp lý.

**Bởi chúng tôi, vì lý do chính đáng.** Chúng tôi có thể, có hoặc không có thông báo trước và trong phạm vi pháp luật cho phép, hạn chế, đình chỉ hoặc chấm dứt quyền truy cập của quý khách, gỡ bỏ nội dung, hoặc đóng tài khoản của quý khách ngay lập tức nếu:

- quý khách vi phạm các Điều khoản này hoặc Chính sách sử dụng hợp lý (biện pháp được áp dụng tương xứng với mức độ nghiêm trọng, mức độ lặp lại và rủi ro);
- chúng tôi có cơ sở hợp lý để tin rằng việc sử dụng của quý khách tạo ra rủi ro về bảo mật, pháp lý, quy định, uy tín hoặc tài chính đối với chúng tôi, người dùng khác hoặc bên thứ ba;
- quý khách không thanh toán khi đến hạn;
- tòa án, cơ quan có thẩm quyền hoặc pháp luật hiện hành yêu cầu như vậy; hoặc
- tài khoản của quý khách có dấu hiệu bị xâm phạm, gian lận hoặc bị bỏ rơi.

Khi thực tế và hợp pháp, chúng tôi sẽ cho quý khách biết lý do và cơ hội trả lời hoặc khắc phục vấn đề trước, và khi pháp luật yêu cầu (ví dụ Đạo luật Dịch vụ Số của EU), chúng tôi cung cấp tuyên bố lý do và cách khiếu nại. Nếu chúng tôi đình chỉ hoặc chấm dứt quyền sử dụng của quý khách do vi phạm, sẽ không có khoản phí nào được hoàn lại và các khoản còn phải trả vẫn phải thanh toán.

**Hệ quả.** Khi chấm dứt, giấy phép của quý khách kết thúc; quý khách phải ngừng sử dụng Dịch vụ; và, theo yêu cầu trong vòng **{{policy.retention_account_days}} ngày**, chúng tôi sẽ cung cấp Nội dung của quý khách để xuất ra, nếu về mặt kỹ thuật khả thi (không áp dụng khi việc đó là bất hợp pháp hoặc gây hại cho người khác). Sau khoảng thời gian đó, chúng tôi xóa dữ liệu như đã mô tả trong [Chính sách quyền riêng tư]({{url.privacy}}). Các mục mà theo bản chất phải được duy trì sau khi chấm dứt sẽ tiếp tục có hiệu lực, bao gồm các mục 4, 6 (giới hạn giấy phép và cam kết của quý khách), 9 (các khoản phải thanh toán), 12, 13, 17-24 và 26.

## 18. Bảo đảm và tuyên bố từ chối {#disclaimer}

Chúng tôi cung cấp Dịch vụ với kỹ năng và sự cẩn trọng hợp lý. **Ngoài ra, trong phạm vi tối đa pháp luật cho phép, Dịch vụ được cung cấp “nguyên trạng” và “theo khả năng sẵn có”, và chúng tôi từ chối mọi bảo đảm khác, dù rõ ràng hay ngụ ý,** bao gồm khả năng bán được, sự phù hợp với một mục đích cụ thể, không xâm phạm quyền của người khác, tính chính xác, tính khả dụng, và việc Dịch vụ sẽ an toàn, không có lỗi, không bị gián đoạn hoặc không chứa thành phần gây hại. Chúng tôi không bảo đảm kết quả đầu ra, nội dung của bên thứ ba, hay kết quả mà quý khách thu được. Dịch vụ không được thiết kế để sử dụng trong môi trường rủi ro cao, nơi lỗi có thể gây tử vong, thương tích cá nhân hoặc thiệt hại nghiêm trọng (ví dụ thiết bị y tế, hàng không, hệ thống hạt nhân hoặc hệ thống duy trì sự sống), và quý khách không được sử dụng Dịch vụ theo cách đó.

{{#if feature.consumers}}Nếu quý khách là người tiêu dùng, quý khách vẫn giữ các quyền theo luật mà không thể bị loại trừ, chẳng hạn các bảo đảm và biện pháp khắc phục theo luật đối với nội dung và dịch vụ số theo pháp luật EU và Vương quốc Anh, cùng các bảo đảm dành cho người tiêu dùng theo Luật Người tiêu dùng Úc và các luật tương tự ở nơi khác.{{/if}}

## 19. Giới hạn trách nhiệm {#liability}

Không có điều nào trong các Điều khoản này loại trừ hoặc giới hạn trách nhiệm mà pháp luật không cho phép loại trừ hoặc giới hạn, bao gồm trách nhiệm đối với cái chết hoặc thương tích cá nhân, gian lận hoặc cố ý sai phạm, sơ suất nghiêm trọng, hoặc (đối với người tiêu dùng) các biện pháp khắc phục bắt buộc theo luật.

Trong điều kiện đó, **trong phạm vi tối đa pháp luật cho phép** và đối với khách hàng doanh nghiệp:

1. chúng tôi không chịu trách nhiệm về thiệt hại gián tiếp, ngẫu nhiên, đặc biệt, hệ quả, mang tính răn đe hoặc trừng phạt, hoặc về tổn thất do mất lợi nhuận, doanh thu, hoạt động kinh doanh, uy tín, khoản tiết kiệm dự kiến hoặc dữ liệu, phát sinh từ hoặc liên quan đến Dịch vụ hoặc các Điều khoản này, ngay cả khi đã được cảnh báo về khả năng xảy ra thiệt hại đó; và
2. tổng trách nhiệm cộng dồn của chúng tôi đối với mọi khiếu nại được giới hạn ở mức cao hơn trong hai mức sau: (a) các khoản phí quý khách đã trả cho chúng tôi cho Dịch vụ trong **{{policy.liability_cap_months}} tháng** trước sự kiện đầu tiên làm phát sinh khiếu nại, và (b) 100 EUR.

{{#if feature.consumers}}Đối với người tiêu dùng, chúng tôi chịu trách nhiệm về tổn thất hoặc thiệt hại có thể lường trước được do vi phạm hoặc sơ suất của chúng tôi gây ra, nhưng không chịu trách nhiệm đối với tổn thất không thể lường trước được, cũng không đối với tổn thất liên quan đến hoạt động kinh doanh.{{/if}}

Chúng tôi không chịu trách nhiệm về việc không thực hiện hoặc chậm trễ do các sự kiện nằm ngoài tầm kiểm soát hợp lý của chúng tôi (mục 24). Các dịch vụ miễn phí được cung cấp mà không có trách nhiệm nào vượt quá mức pháp luật yêu cầu. Các giới hạn này áp dụng bất kể trách nhiệm phát sinh theo cách nào (hợp đồng, sai phạm dân sự kể cả sơ suất, hoặc cách khác), và ngay cả khi một biện pháp khắc phục không đạt được mục đích thiết yếu của nó.

## 20. Bồi thường {#indemnity}

Nếu quý khách là khách hàng doanh nghiệp, quý khách sẽ bảo vệ, bồi thường và giữ cho {{company.name}}, các công ty liên kết, người quản lý, nhân viên và đại diện của công ty này không bị thiệt hại trước các khiếu nại, thiệt hại, tổn thất, tiền phạt và chi phí (kể cả phí pháp lý hợp lý) phát sinh từ (a) Nội dung của quý khách hoặc dữ liệu của quý khách, (b) việc quý khách hoặc Người dùng cuối của quý khách vi phạm các Điều khoản này hoặc pháp luật, (c) việc quý khách lạm dụng Dịch vụ, hoặc (d) tranh chấp giữa quý khách và bên thứ ba. Chúng tôi sẽ thông báo kịp thời cho quý khách về mọi khiếu nại, cho phép quý khách kiểm soát việc bảo vệ (chúng tôi có thể tham gia với chi phí của mình), và quý khách không được dàn xếp khiếu nại có nội dung thừa nhận lỗi thay cho chúng tôi nếu không có sự đồng ý của chúng tôi. {{#if feature.consumers}}Người tiêu dùng chỉ chịu trách nhiệm đối với tổn thất do chính vi phạm của họ gây ra, theo quy định của pháp luật.{{/if}}

## 21. Biện pháp khắc phục đối với hành vi lạm dụng {#remedies}

Ngoài các quyền khác, và trong phạm vi pháp luật cho phép:

- **Biện pháp ngăn chặn.** Quý khách thừa nhận rằng việc vi phạm các mục 4, 5 hoặc 13 có thể gây ra thiệt hại mà bồi thường bằng tiền không thể khắc phục đầy đủ, và chúng tôi có thể tìm kiếm biện pháp ngăn chặn hoặc biện pháp công bằng khác mà không cần chứng minh thiệt hại thực tế hoặc đặt tiền bảo lãnh.
- **Chi phí do lạm dụng.** Nếu việc lạm dụng của quý khách khiến chúng tôi phát sinh chi phí (hạ tầng bổ sung, ứng phó sự cố, điều tra, khiếu nại thanh toán, tiền phạt của cơ quan quản lý hoặc khiếu nại của bên thứ ba), quý khách sẽ hoàn trả các chi phí hợp lý, có chứng từ.
- **Chứng cứ và hợp tác.** Chúng tôi có thể lưu giữ nhật ký và nội dung liên quan đến việc nghi ngờ lạm dụng, và có thể tiết lộ chúng cho các bên bị ảnh hưởng, nền tảng, cơ quan thực thi pháp luật hoặc cơ quan quản lý khi pháp luật cho phép. Quý khách hợp tác một cách hợp lý với các cuộc điều tra của chúng tôi.
- **Báo cáo.** Chúng tôi có thể báo cáo hoạt động bất hợp pháp (kể cả tài liệu xâm hại tình dục trẻ em, gian lận, đe dọa, phần mềm độc hại và các cuộc tấn công vào hệ thống) cho cơ quan có thẩm quyền và các bên bị ảnh hưởng, và sẽ làm như vậy khi pháp luật yêu cầu.
- **Giữ lại khoản tiền.** Chúng tôi có thể giữ lại, đóng băng hoặc bù trừ các khoản tiền mà chúng tôi nợ quý khách (ví dụ các khoản chi trả) với các khoản quý khách nợ chúng tôi hoặc các khoản phát sinh từ lạm dụng, tùy theo pháp luật.

## 22. Xuất khẩu, trừng phạt và chống tham nhũng {#export}

Quý khách không được sử dụng, xuất khẩu hoặc tái xuất khẩu Dịch vụ trái với luật kiểm soát xuất khẩu và luật trừng phạt hiện hành, kể cả luật của EU, Hoa Kỳ, Vương quốc Anh và Liên Hợp Quốc, hoặc cho, hay vì lợi ích của, các cá nhân hoặc quốc gia đang chịu trừng phạt toàn diện. Quý khách xác nhận rằng bản thân và người dùng của mình không có tên trong bất kỳ danh sách trừng phạt hoặc danh sách bên bị hạn chế nào. Quý khách sẽ không đề nghị hay trao bất kỳ lợi ích có giá trị nào để gây ảnh hưởng không đúng đắn đến bất kỳ ai liên quan đến Dịch vụ.

## 23. Luật áp dụng và tranh chấp {#law}

Các Điều khoản này và mọi tranh chấp hoặc khiếu nại phát sinh từ hoặc liên quan đến chúng hoặc Dịch vụ (kể cả tranh chấp ngoài hợp đồng) được điều chỉnh bởi pháp luật của **{{law.governing}}**, không tính đến các quy tắc xung đột pháp luật, và loại trừ Công ước Liên Hợp Quốc về hợp đồng mua bán hàng hóa quốc tế.

**Giải quyết không chính thức trước.** Trước khi khởi kiện chính thức, hãy gửi thư tới [{{company.legal_email}}](mailto:{{company.legal_email}}) mô tả tranh chấp, và cho phép chúng tôi thiện chí cố gắng giải quyết trong ít nhất 30 ngày.

**Tòa án.** Trừ khi luật bắt buộc quy định khác, thẩm quyền độc quyền thuộc về **{{law.venue}}**. Mỗi bên có thể tìm kiếm biện pháp ngăn chặn khẩn cấp tại bất kỳ tòa án có thẩm quyền nào.

{{#if feature.consumers}}**Người tiêu dùng.** Nếu quý khách là người tiêu dùng, quý khách cũng giữ quyền khởi kiện tại tòa án nơi quý khách cư trú và viện dẫn luật bảo vệ người tiêu dùng bắt buộc tại đó, và không có điều nào trong mục này loại bỏ quyền đó. {{#if consumer_dispute}}Chúng tôi tham gia giải quyết tranh chấp ngoài tòa án trước {{consumer_dispute}}.{{/if}}
{{/if}}
**Thời hiệu khởi kiện (khách hàng doanh nghiệp).** Trong phạm vi pháp luật cho phép, mọi khiếu nại phải được khởi kiện trong vòng {{policy.claim_months}} tháng kể từ khi căn cứ khởi kiện phát sinh, nếu không sẽ bị coi là từ bỏ.

**Không kiện tập thể (khách hàng doanh nghiệp, nơi pháp luật cho phép).** Khiếu nại chỉ được đưa ra trên cơ sở cá nhân, không phải trong một vụ kiện tập thể, theo nhóm hoặc đại diện.

## 24. Bất khả kháng {#force-majeure}

Không bên nào chịu trách nhiệm về việc chậm trễ hoặc không thực hiện do các sự kiện nằm ngoài tầm kiểm soát hợp lý của mình, bao gồm thiên tai, chiến tranh, khủng bố, bất ổn dân sự, đại dịch, hành động của chính phủ, sự cố nguồn điện, internet hoặc viễn thông, sự cố của nhà cung cấp hạ tầng đám mây hoặc các bên cung cấp hạ tầng thứ ba khác, tấn công mạng mặc dù đã áp dụng các biện pháp bảo mật hợp lý, tranh chấp lao động (trừ tranh chấp với nhân viên của chính bên đó), hoặc thiếu hụt nguồn cung. Nghĩa vụ thanh toán cho các dịch vụ đã được cung cấp không được miễn trừ. Nếu một sự kiện như vậy kéo dài hơn 60 ngày, một trong hai bên có thể chấm dứt các dịch vụ bị ảnh hưởng.

## 25. Liên lạc điện tử và thông báo {#notices}

Quý khách đồng ý nhận thông báo và thỏa thuận dưới hình thức điện tử. Chúng tôi có thể thông báo qua email tới địa chỉ trong tài khoản của quý khách, trong Dịch vụ, hoặc bằng cách đăng trên trang web của chúng tôi. Thông báo gửi tới chúng tôi phải được gửi tới [{{company.legal_email}}](mailto:{{company.legal_email}}) và tới {{company.address}}. Thông báo được coi là đã nhận sau 24 giờ kể từ khi email được gửi mà không bị trả về, và khi được đăng hoặc hiển thị trong Dịch vụ.

## 26. Điều khoản chung {#general}

- **Toàn bộ thỏa thuận.** Các Điều khoản này và các tài liệu mà chúng dẫn chiếu tới tạo thành toàn bộ thỏa thuận về nội dung của chúng và thay thế mọi hiểu biết trước đó. Quý khách không dựa vào bất kỳ tuyên bố nào không được nêu trong các Điều khoản này.
- **Tính có thể tách rời.** Nếu một điều khoản không thể thi hành, điều khoản đó chỉ bị giới hạn ở mức tối thiểu cần thiết, hoặc được thay thế bằng một điều khoản có thể thi hành gần nhất với ý định của nó; phần còn lại vẫn có hiệu lực.
- **Không từ bỏ.** Việc không thực hiện một quyền không được coi là từ bỏ quyền đó.
- **Chuyển nhượng.** Quý khách không được chuyển nhượng hoặc chuyển giao quyền và nghĩa vụ của mình nếu không có sự đồng ý bằng văn bản của chúng tôi. Chúng tôi có thể chuyển nhượng các Điều khoản này cho một công ty liên kết hoặc người kế thừa hoạt động kinh doanh của chúng tôi, và sẽ thông báo cho quý khách.
- **Quan hệ.** Các bên là nhà thầu độc lập. Không có điều nào tạo ra quan hệ đối tác, đại lý, việc làm hay liên doanh.
- **Bên thứ ba.** Không ai khác có quyền thực thi các Điều khoản này, ngoại trừ các công ty liên kết, người quản lý và đại diện của chúng tôi theo mục 19 và 20.
- **Ngôn ngữ.** Bản dịch được cung cấp để thuận tiện; nếu có khác biệt, bản tiếng Anh được ưu tiên, trừ khi pháp luật bắt buộc khác.
- **Diễn giải.** Tiêu đề chỉ để thuận tiện. “Bao gồm” nghĩa là “bao gồm nhưng không giới hạn ở”.
- **Quảng bá.** Chúng tôi có thể nêu tên quý khách là khách hàng cùng logo của quý khách, trừ khi quý khách từ chối bằng email; người tiêu dùng không bao giờ được nêu tên.

## 27. Liên hệ {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Số đăng ký {{company.reg_id}}{{/if}}{{#if company.tax_id}} · Mã số thuế {{company.tax_id}}{{/if}}
Email [{{company.email}}](mailto:{{company.email}}) · Pháp lý [{{company.legal_email}}](mailto:{{company.legal_email}}) · Hỗ trợ [{{company.email}}](mailto:{{company.email}}) · Xem thêm [Thông tin pháp lý]({{url.impressum}}) của chúng tôi.
