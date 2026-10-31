---
doc: license
title: ライセンス
version: 1.0.0
updated: 2026-10-23
lang: ja
translation_of: 1.0.0
status: draft
when: license.id
summary: {{product.name}}の公開に用いられるライセンス。
---

# ライセンス

*バージョン {{doc.version}}、最終更新日 {{doc.updated}}。*

**{{product.name}}**は、**{{license.holder}}**により**{{license.name}}**の下で公開されています{{#if license.spdx}}（SPDX：`{{license.spdx}}`）{{/if}}。

{{license.summary}} *（これは平易な言葉による要約であり、以下のライセンステキストに代わるものではありません。）*

{{#if license.url}}正式なテキスト：[{{license.url}}]({{license.url}})。{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

英語のライセンステキストが正文であり、本日本語訳は情報提供のみを目的としています。

許諾に関するご質問またはご要望は、[{{company.legal_email}}](mailto:{{company.legal_email}})までお寄せください。{{product.name}}のウェブサイトおよびサービスの利用には、[利用規約]({{url.terms}})が適用されます。

## 全文 {#text}

```text
{{license.text}}
```
