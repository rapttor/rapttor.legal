---
doc: subprocessors
title: Danh sách bên xử lý dữ liệu cá nhân phụ
version: 1.0.0
updated: 2026-10-23
lang: vi
translation_of: 1.0.0
status: draft
summary: Các bên thứ ba xử lý dữ liệu cá nhân thay mặt {{product.name}}.
---

# Danh sách bên xử lý phụ

*Phiên bản {{doc.version}}, cập nhật lần cuối {{doc.updated}}.*

Để cung cấp {{product.name}}, **{{company.name}}** sử dụng các bên thứ ba sau đây, những bên này có thể xử lý dữ liệu cá nhân thay mặt chúng tôi. Mỗi bên đều bị ràng buộc bởi một thỏa thuận bảo vệ dữ liệu bằng văn bản. {{#if feature.processor_role}}Danh sách này là Phụ lục III của [Phụ lục xử lý dữ liệu]({{url.dpa}}) và được nhắc đến trong [Chính sách quyền riêng tư]({{url.privacy}}).{{else}}Danh sách này được nhắc đến trong [Chính sách quyền riêng tư]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
Danh sách hiện tại có sẵn theo yêu cầu tại [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Thay đổi {#changes}

Chúng tôi sẽ thông báo trước ít nhất **{{policy.notice_days}} ngày** trước khi thêm hoặc thay thế một bên xử lý phụ, bằng cách cập nhật trang này (hãy kiểm tra ngày “cập nhật lần cuối”) và gửi email cho các khách hàng đã đăng ký tại [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}Khách hàng có thể phản đối trên cơ sở bảo vệ dữ liệu hợp lý như đã nêu trong DPA.{{/if}}
