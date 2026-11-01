---
doc: cookies
title: Kebijakan Cookie
version: 1.1.0
updated: 2026-10-31
lang: id
translation_of: 1.1.0
status: draft
summary: Cookie dan teknologi serupa yang digunakan {{product.name}}, alasannya, dan cara mengendalikannya.
---

# Kebijakan Cookie

*Versi {{doc.version}}, terakhir diperbarui {{doc.updated}}.*

Kebijakan ini menjelaskan bagaimana **{{company.name}}** menggunakan cookie dan teknologi serupa di {{product.name}} dan Layanan kami lainnya. Data pribadi yang dikumpulkan melalui teknologi tersebut ditangani sebagaimana dijelaskan dalam [Kebijakan Privasi]({{url.privacy}}).

## 1. Apa itu {#what}

Cookie adalah berkas kecil yang disimpan di perangkat Anda oleh sebuah situs web. "Teknologi serupa" mencakup local storage dan session storage, pengidentifikasi perangkat dan SDK di aplikasi seluler, piksel, serta sinyal yang mirip dengan fingerprinting. Kami menggunakan kata "cookie" untuk semua itu.

## 2. Kategori yang kami gunakan {#categories}

| Kategori | Tujuan | Perlu persetujuan? |
|---|---|---|
| **Sangat diperlukan** | Menjaga Anda tetap masuk, mengingat keranjang belanja atau pengaturan selama sesi, melindungi dari penipuan dan serangan CSRF, menyeimbangkan beban server, menyimpan pilihan cookie Anda | Tidak: diperlukan agar Layanan dapat berfungsi atau untuk memberikan apa yang Anda minta |
| **Preferensi** | Mengingat pilihan bahasa, tema, tata letak, dan pilihan serupa | Ya, kecuali sangat diperlukan untuk fitur yang Anda minta |
{{#if feature.analytics}}| **Analitik** | Mengukur cara Layanan digunakan dan menemukan kesalahan agar kami dapat memperbaikinya | Ya (jika hukum mewajibkannya) |
{{/if}}{{#if feature.ads}}| **Iklan / pemasaran** | Menampilkan dan mengukur iklan yang relevan, membatasi pengulangan, dan menghubungkan aktivitas antar-situs dan aplikasi | Ya |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Saat ini kami hanya menggunakan **cookie sangat diperlukan dan cookie preferensi**, dan tidak menggunakan cookie analitik maupun iklan.{{/unless}}{{/unless}}

## 3. Rincian cookie {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Nama cookie yang tepat, penyedianya, dan masa berlakunya tercantum di dialog pengaturan cookie, dan tersedia atas permintaan di [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Pilihan Anda {#choices}

- **Banner persetujuan / pengaturan.** Jika persetujuan diwajibkan, kami meminta izin sebelum menetapkan cookie yang tidak esensial, dengan opsi yang jelas untuk menolak yang semudah menerima. Anda dapat mengubah atau menarik pilihan Anda kapan saja melalui tautan pengaturan cookie di footer. Penarikan tidak memengaruhi pemrosesan yang telah dilakukan sebelumnya.
- **Kontrol peramban.** Sebagian besar peramban memungkinkan Anda memblokir atau menghapus cookie; carilah di Pengaturan → Privasi. Memblokir cookie yang sangat diperlukan dapat mengganggu proses masuk dan fitur lainnya.
- **Tidak ada perekaman sesi.** Kami tidak menggunakan alat session-replay atau perekaman layar.
{{#if feature.external}}- **Sumber daya pihak ketiga.** Jika sebuah sumber daya (misalnya font, peta, atau video) dimuat dari server perusahaan lain, alamat IP Anda dikirim kepada perusahaan tersebut. Kami meminta persetujuan Anda untuk setiap sumber daya secara terpisah di pengaturan cookie dan hanya memuatnya setelah Anda setuju; Anda dapat mengubah pilihan Anda kapan saja.
{{/if}}- **Sinyal.** Kami memperlakukan Global Privacy Control (GPC) dan sinyal opt-out peramban serupa sebagai penolakan terhadap pelacakan non-esensial serta penjualan/pembagian data pribadi.
{{#if feature.ads}}- **Pilihan iklan.** Anda dapat menolak iklan berbasis minat melalui pengaturan perangkat Anda (mengatur ulang atau membatasi pengenal iklan Anda) dan alat seperti youronlinechoices.eu atau optout.aboutads.info. Anda tetap akan melihat iklan, hanya saja iklannya kurang relevan.
{{/if}}
## 5. Masa berlaku {#duration}

Cookie sesi berakhir saat Anda menutup peramban. Cookie persisten berlaku selama periode yang ditampilkan dalam tabel, dan dalam hal apa pun tidak lebih lama dari yang disarankan hukum (umumnya tidak lebih dari 13 bulan untuk persetujuan analitik dan iklan, yang kami minta Anda perbarui).

## 6. Pihak ketiga {#third-parties}

Sebagian cookie ditetapkan oleh pihak ketiga yang layanannya kami gunakan (analitik, media tertanam, pembayaran, obrolan dukungan). Mereka bertindak berdasarkan kebijakan mereka sendiri dan, jika mereka adalah pengendali data pribadi yang independen, Anda sebaiknya membaca kebijakan tersebut. Kami mencantumkan mereka dalam tabel di atas.
{{#if table.external}}
Sumber daya yang menerima alamat IP Anda saat dimuat:

{{table.external}}
{{/if}}

## 7. Perubahan {#changes}

Jika kami menambahkan atau mengubah cookie non-esensial, kami akan memperbarui kebijakan ini dan meminta persetujuan Anda kembali jika diwajibkan. Pertanyaan: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
