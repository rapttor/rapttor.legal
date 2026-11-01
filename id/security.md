---
doc: security
title: Keamanan & Pengungkapan Kerentanan
version: 1.0.1
updated: 2026-10-23
lang: id
translation_of: 1.0.1
status: draft
summary: Cara melaporkan kerentanan keamanan di {{product.name}} dan ketentuan safe harbour untuk riset yang dilakukan dengan itikad baik.
---

# Keamanan & Pengungkapan Kerentanan

*Versi {{doc.version}}, terakhir diperbarui {{doc.updated}}.*

Kami menganggap keamanan dengan serius dan menyambut laporan dengan itikad baik dari peneliti. Kontak: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Ruang lingkup {#scope}

Yang termasuk dalam cakupan: {{product.name}}, {{company.website}} serta subdomain, aplikasi, dan API kami sendiri yang kami operasikan. **Di luar cakupan:** layanan dan infrastruktur pihak ketiga, akun dan data pengguna lain, rekayasa sosial atau phishing terhadap staf atau pengguna kami, serangan fisik, pengujian denial-of-service dan volumetrik, spam, serta temuan yang memerlukan interaksi pengguna yang tidak realistis atau perangkat lunak yang sudah usang.

## 2. Aturan pengujian {#rules}

Jika Anda menguji dengan itikad baik, Anda wajib:

- menguji hanya terhadap **akun dan data Anda sendiri**; hentikan dan segera laporkan jika Anda mencapai data milik orang lain, dan jangan mengakses, mengunduh, mengubah, atau menyimpan lebih dari yang diperlukan untuk menunjukkan masalah tersebut;
- tidak menurunkan kualitas Layanan, tidak menjalankan pemindaian otomatis dengan volume tinggi, dan tidak menggunakan eksploit untuk bertahan, berpindah ke sistem lain, atau mengeksfiltrasi data;
- tidak mengungkapkan masalah kepada pihak lain atau mempublikasikan rinciannya sebelum kami memiliki waktu yang wajar untuk memperbaikinya (**90 hari** sejak laporan Anda, atau lebih cepat jika kita sepakati);
- mematuhi hukum dan ketentuan ini.

## 3. Safe harbour {#safe-harbour}

Jika Anda mematuhi kebijakan ini, kami akan menganggap riset Anda sebagai riset yang diizinkan, tidak akan menuntut atau mendukung tindakan hukum atau pengakhiran akun karena riset tersebut, dan akan bekerja sama dengan Anda untuk memahami dan menyelesaikan masalahnya. Ini tidak memberi izin untuk melanggar hukum terhadap pihak ketiga, dan pihak ketiga tetap dapat bertindak atas kehendaknya sendiri. Jika ragu, tanyakan terlebih dahulu.

## 4. Apa yang perlu dikirim {#report}

Deskripsi yang jelas tentang kerentanan, URL atau komponen yang terdampak, langkah reproduksi atau bukti konsep (proof of concept), dampak, detail kontak Anda, dan apakah Anda ingin dicantumkan namanya. Enkripsi materi yang sensitif jika memungkinkan; mintalah kunci enkripsi kami.

## 5. Langkah selanjutnya {#process}

Kami mengakui laporan, melakukan triase, memberi kabar kepada Anda, memperbaiki sesuai tingkat keparahan, dan, jika Anda berkenan, mencantumkan nama Anda. Saat ini kami tidak menjalankan program hadiah (bounty) berbayar dan tidak dapat menjanjikan imbalan, meskipun kami mungkin memberikan ucapan terima kasih atau suvenir.

## 6. Pengguna: lindungi akun Anda {#users}

Gunakan kata sandi yang kuat dan unik serta autentikasi multi-faktor jika tersedia, jaga perangkat lunak tetap diperbarui, waspadai phishing, dan segera laporkan dugaan pembobolan ke [{{company.email}}](mailto:{{company.email}}). Menyalahgunakan kerentanan atau menguji di luar kebijakan ini melanggar [Kebijakan Penggunaan yang Dapat Diterima]({{url.acceptable_use}}).
