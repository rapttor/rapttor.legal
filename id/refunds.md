---
doc: refunds
title: Kebijakan Pengembalian Dana dan Pembatalan
version: 1.1.1
updated: 2026-10-31
lang: id
translation_of: 1.1.1
status: draft
when: feature.payments
summary: Cara membatalkan, kapan Anda dapat menarik diri atau meminta pengembalian dana, dan apa yang terjadi dengan pembelian yang dilakukan melalui toko aplikasi.
---

# Kebijakan Pengembalian Dana dan Pembatalan

*Versi {{doc.version}}, terakhir diperbarui {{doc.updated}}.*

Kebijakan ini merupakan bagian dari [Ketentuan Layanan]({{url.terms}}) dan berlaku untuk pembelian dari **{{company.name}}** ("kami") untuk {{product.name}}. Tidak ada dalam kebijakan ini yang membatasi hak yang Anda miliki berdasarkan hukum perlindungan konsumen yang wajib.

## Tempat pembelian itu penting {#where}

- **Dibeli langsung dari kami** (situs web atau checkout kami): kebijakan ini berlaku.
{{#if feature.merchant_of_record}}- **Dibeli melalui penyedia pembayaran kami{{#if payments.provider}} {{payments.provider}}{{/if}}** (merchant of record): penyedia tersebut adalah penjual pesanan, menangani pembayaran, pajak dan kuitansi, serta memproses pengembalian dana berdasarkan ketentuan checkout-nya dan kebijakan ini. Permintaan dapat dikirim kepada kami atau kepada penyedia.
{{/if}}
- **Dibeli melalui toko aplikasi atau platform** (Apple App Store, Google Play, toko konsol atau PC): toko tersebut adalah penjual resmi dan **menangani pengembalian dana, pembatalan serta penagihan**. Ajukan permintaan pengembalian dana kepada toko melalui prosesnya sendiri; kami tidak dapat mengembalikan pembayaran tersebut, tetapi kami akan membantu memastikan fakta-fakta dan dapat mencabut item yang dibeli apabila toko mengembalikan dana. Ketentuan toko dan hukum setempat Anda menentukan hak Anda di sana.

{{#if feature.subscriptions}}
## Membatalkan langganan {#cancel}

Anda dapat membatalkan kapan saja di pengaturan akun Anda{{#if feature.mobile}} (atau di pengaturan langganan toko apabila Anda berlangganan di sana){{/if}} atau dengan menulis ke [{{company.email}}](mailto:{{company.email}}). Pembatalan menghentikan perpanjangan di masa mendatang; Anda tetap memiliki akses hingga akhir periode yang telah Anda bayar. Kami tidak menghitung periode parsial secara proporsional kecuali hukum atau kebijakan ini menyatakan lain. Membatalkan semudah mendaftar: tombol pembatalan langsung di akun Anda, tanpa panggilan atau formulir. Kami mengingatkan Anda sebelum perpanjangan, atau sebelum uji coba berubah menjadi paket berbayar, apabila hukum mewajibkannya; untuk paket setahun atau lebih, kami mengirimkan pengingat 15 hingga 45 hari sebelum perpanjangan serta pengingat tahunan, dengan harga dan cara membatalkan. Ketentuan perpanjangan selalu ditampilkan di samping tombol pembayaran.
{{/if}}

## Hak penarikan diri untuk konsumen (UE, Inggris dan hukum serupa) {#withdrawal}

{{#if feature.consumers}}
Apabila Anda adalah konsumen di UE, Inggris, atau negara lain yang memberikan hak penarikan diri untuk kontrak jarak jauh, Anda dapat menarik diri dari pembelian **dalam waktu {{policy.refund_days}} hari** sejak kontrak dibuat, tanpa perlu memberikan alasan.

**Konten digital dan layanan digital.** Apabila Anda meminta kami untuk mulai menyediakan layanan digital atau konten digital (misalnya akses, kredit, atau item virtual) selama masa penarikan diri dan Anda mengonfirmasi bahwa Anda memahami dapat kehilangan hak penarikan diri, maka:
- untuk **konten digital yang tidak tersimpan pada media fisik**, setelah penyediaan dimulai dengan persetujuan tegas Anda, Anda kehilangan hak untuk menarik diri;
- untuk **layanan digital**, Anda tetap dapat menarik diri dalam periode tersebut tetapi membayar jumlah yang proporsional untuk apa yang telah disediakan hingga saat Anda memberi tahu kami.

Kami meminta persetujuan ini pada saat checkout. Apabila Anda tidak memberikannya, hak penarikan diri penuh berlaku.

**Fungsi penarikan diri.** Sebagaimana diwajibkan oleh hukum mulai 19 Juni 2026, fungsi "Tarik diri dari kontrak" tersedia di akun Anda dan pada konfirmasi pesanan: pilih kontrak, konfirmasi, dan Anda akan menerima tanda terima pada media yang tahan lama (email) yang mencantumkan tanggal dan waktu. Anda tidak perlu menjelaskan alasannya.

**Cara lain untuk menarik diri.** Kirimkan pernyataan yang jelas (misalnya melalui email ke [{{company.email}}](mailto:{{company.email}})) mengenai keputusan Anda untuk menarik diri, dengan nama, detail pesanan atau akun, dan tanggal pembelian. Anda dapat menggunakan formulir di bawah ini tetapi tidak wajib. Kami akan mengonfirmasi penerimaan dan mengembalikan dana kepada Anda **dalam waktu 14 hari** sejak kami mengetahui keputusan Anda, menggunakan metode pembayaran yang sama.

> **Formulir penarikan diri model** (lengkapi dan kirim hanya jika Anda ingin menarik diri)
> Kepada {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Dengan ini saya/kami menyatakan penarikan diri dari kontrak saya/kami untuk penyediaan layanan/konten digital berikut: ______ ; dipesan pada / diterima pada: ______ ; nama: ______ ; alamat: ______ ; tanggal: ______ (tanda tangan hanya jika formulir dicetak di atas kertas).
{{else}}
Layanan kami hanya ditawarkan kepada bisnis, sehingga hak penarikan diri konsumen menurut undang-undang tidak berlaku. Hubungi kami apabila Anda yakin bahwa Anda adalah konsumen.
{{/if}}

## Negara lain {#other-countries}

Beberapa tempat memberikan hak tambahan untuk membatalkan atau meminta pengembalian dana (misalnya masa tenggang (cooling-off), aturan perpanjangan otomatis di beberapa negara bagian AS, atau jaminan menurut undang-undang di Australia, Selandia Baru, dan Inggris). Apabila wajib, hak tersebut berlaku dan mengesampingkan ketentuan apa pun dalam kebijakan ini yang kurang menguntungkan.

## Kapan kami mengembalikan dana {#refunds}

Kami akan mengembalikan dana, secara penuh atau sebagian sesuai keadaan:

- **tagihan ganda atau keliru**, atau tagihan yang tidak Anda otorisasi (laporkan dengan segera; kami dapat meminta rincian);
- pembelian yang layanannya **tidak dapat disediakan** atau secara material cacat dan tidak dapat kami perbaiki dalam waktu yang wajar;
- pembelian yang Anda minta untuk dibatalkan dalam **{{policy.refund_days}} hari** apabila Anda belum menggunakan apa yang Anda beli (termasuk kredit yang belum digunakan), atas kebijakan kami apabila tidak ada hak hukum yang berlaku;
- hal lain yang kami setujui secara tertulis.

Selain itu, biaya yang telah dibayar tidak dapat dikembalikan, termasuk untuk periode parsial, item yang telah digunakan atau dikonsumsi, dan akun yang ditutup karena pelanggaran [Kebijakan Penggunaan yang Dapat Diterima]({{url.acceptable_use}}). Pengembalian dana dikirim ke metode pembayaran semula; kami hanya dapat mengembalikannya dalam bentuk kredit apabila Anda memintanya.

{{#if feature.credits}}
## Kredit dan item virtual {#credits}

Kredit prabayar yang belum digunakan dapat dikembalikan dalam periode di atas. Kredit dan item virtual yang telah dibelanjakan atau dikonsumsi tidak dapat dikembalikan kecuali apabila hukum mewajibkannya. Apabila kami mengakhiri suatu layanan, kami menangani saldo berbayar yang tersisa sebagaimana diuraikan dalam [Ketentuan Layanan]({{url.terms}}){{#if feature.game}} dan [Aturan Permainan]({{url.game_rules}}){{/if}}.
{{/if}}

## Tagihan balik (chargeback) dan sengketa {#chargebacks}

Harap hubungi kami sebelum mengajukan sengketa tagihan ke bank atau penerbit kartu Anda: kami biasanya dapat menyelesaikannya lebih cepat. Apabila Anda membuka sengketa untuk tagihan yang sah, kami dapat menangguhkan akun hingga sengketa diselesaikan dan membagikan bukti pengiriman serta penggunaan kepada penyedia pembayaran.

## Pajak dan mata uang {#taxes}

Pengembalian dana mencakup pajak yang telah dikenakan. Apabila Anda membayar dalam mata uang lain, jumlah yang dikembalikan dapat berbeda karena pergerakan nilai tukar dan biaya bank yang berada di luar kendali kami.

## Cara mengajukan permintaan {#contact}

Tulis ke [{{company.email}}](mailto:{{company.email}}) dengan email akun Anda, nomor pesanan atau kuitansi, dan deskripsi singkat. Kami akan membalas pesan Anda. Apabila kami tidak dapat menyelesaikan masalah tersebut, Anda dapat menghubungi otoritas perlindungan konsumen setempat{{#if consumer_dispute}} atau {{consumer_dispute}}{{/if}}.
