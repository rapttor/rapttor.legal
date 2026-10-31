---
doc: license
title: 许可
version: 1.0.0
updated: 2026-10-23
lang: zh-Hans
translation_of: 1.0.0
status: draft
when: license.id
summary: {{product.name}} 所依据的发布许可。
---

# 许可

*版本 {{doc.version}}，最后更新于 {{doc.updated}}。*

**{{product.name}}** 由 **{{license.holder}}** 依据 **{{license.name}}**{{#if license.spdx}}（SPDX：`{{license.spdx}}`）{{/if}}发布。

{{license.summary}} *（这是通俗易懂的概要，不能替代下方的许可文本。）*

{{#if license.url}}完整文本见：[{{license.url}}]({{license.url}})。{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

有关问题或许可申请，请联系：[{{company.legal_email}}](mailto:{{company.legal_email}})。{{product.name}} 网站及服务的使用受我们的[服务条款]({{url.terms}})约束。

## 完整文本 {#text}

许可文本以英文原文为准，本译文仅供参考。

```text
{{license.text}}
```
