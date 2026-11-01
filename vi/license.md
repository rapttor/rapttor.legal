---
doc: license
title: Giấy phép
version: 1.0.0
updated: 2026-10-23
lang: vi
translation_of: 1.0.0
status: draft
when: license.id
summary: Giấy phép theo đó {{product.name}} được phát hành.
---

# Giấy phép

*Phiên bản {{doc.version}}, cập nhật lần cuối {{doc.updated}}.*

**{{product.name}}** được phát hành bởi **{{license.holder}}** theo **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Đây là bản tóm tắt bằng ngôn ngữ thông thường, không thay thế văn bản giấy phép bên dưới.)*

{{#if license.url}}Văn bản chuẩn: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Câu hỏi hoặc yêu cầu cấp phép: [{{company.legal_email}}](mailto:{{company.legal_email}}). Việc sử dụng trang web và các dịch vụ của {{product.name}} được điều chỉnh bởi [Điều khoản dịch vụ]({{url.terms}}) của chúng tôi.

## Toàn văn {#text}

Bản tiếng Anh của văn bản giấy phép dưới đây là bản có thẩm quyền (authoritative).

```text
{{license.text}}
```
