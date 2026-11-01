---
doc: license
title: Lisensi
version: 1.0.0
updated: 2026-10-23
lang: id
translation_of: 1.0.0
status: draft
when: license.id
summary: Lisensi yang berdasarkannya {{product.name}} dirilis.
---

# Lisensi

*Versi {{doc.version}}, terakhir diperbarui {{doc.updated}}.*

**{{product.name}}** dirilis oleh **{{license.holder}}** di bawah **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Ini adalah ringkasan dalam bahasa sederhana, bukan pengganti teks lisensi di bawah.)*

{{#if license.url}}Teks resmi: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Pertanyaan atau permintaan izin: [{{company.legal_email}}](mailto:{{company.legal_email}}). Penggunaan situs web dan layanan {{product.name}} diatur oleh [Ketentuan Layanan]({{url.terms}}) kami.

## Teks lengkap {#text}

Teks lisensi dalam bahasa Inggris di bawah ini adalah yang berwenang; terjemahan ini hanya dimaksudkan untuk memudahkan pembacaan.

```text
{{license.text}}
```
