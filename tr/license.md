---
doc: license
title: Lisans
version: 1.0.0
updated: 2026-10-23
lang: tr
when: license.id
summary: {{product.name}} hangi lisans altında yayımlanmıştır.
translation_of: 1.0.0
status: draft
---

# Lisans

*Sürüm {{doc.version}}, son güncelleme {{doc.updated}}.*

**{{product.name}}**, **{{license.holder}}** tarafından **{{license.name}}** altında{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}} yayımlanmıştır.

{{license.summary}} *(Bu düz dilde bir özettir; aşağıdaki lisans metninin yerini tutmaz. Lisansın İngilizce metni yetkilidir.)*

{{#if license.url}}Asıl metin: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Sorular veya izin talepleri: [{{company.legal_email}}](mailto:{{company.legal_email}}). {{product.name}} web sitesinin ve hizmetlerinin kullanımı [Hizmet Şartları]({{url.terms}}) ile yönetilir.

## Tam metin {#text}

```text
{{license.text}}
```
