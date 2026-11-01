---
doc: subprocessors
title: Daftar Sub-prosesor
version: 1.0.0
updated: 2026-10-23
lang: id
translation_of: 1.0.0
status: draft
summary: Pihak ketiga yang memproses data pribadi atas nama {{product.name}}.
---

# Daftar Sub-prosesor

*Versi {{doc.version}}, terakhir diperbarui {{doc.updated}}.*

Untuk menyediakan {{product.name}}, **{{company.name}}** menggunakan pihak ketiga berikut yang dapat memproses data pribadi atas nama kami. Masing-masing terikat oleh perjanjian perlindungan data tertulis. {{#if feature.processor_role}}Daftar ini merupakan Lampiran III dari [Addendum Pemrosesan Data]({{url.dpa}}) dan dirujuk dalam [Kebijakan Privasi]({{url.privacy}}).{{else}}Daftar ini dirujuk dalam [Kebijakan Privasi]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
Daftar terkini tersedia atas permintaan di [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## Perubahan {#changes}

Kami memberikan pemberitahuan minimal **{{policy.notice_days}} hari** sebelum menambahkan atau mengganti sub-prosesor, dengan memperbarui halaman ini (periksa tanggal "terakhir diperbarui") dan melalui email kepada pelanggan yang berlangganan di [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}Pelanggan dapat mengajukan keberatan atas dasar perlindungan data yang wajar sebagaimana diatur dalam Addendum Pemrosesan Data.{{/if}}
