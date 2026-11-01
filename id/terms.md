---
doc: terms
title: Ketentuan Layanan
version: 1.3.0
updated: 2026-10-31
lang: id
translation_of: 1.3.0
status: draft
summary: Perjanjian antara Anda dan {{product.name}} untuk penggunaan {{product.name}}.
---

# Ketentuan Layanan

*Versi {{doc.version}}, terakhir diperbarui {{doc.updated}}.*

## 1. Perjanjian {#agreement}

Ketentuan Layanan ini (selanjutnya "**Ketentuan**") merupakan perjanjian yang mengikat antara Anda dan **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, nomor registrasi {{company.reg_id}}{{/if}} ("**{{product.name}}**", "kami") yang mengatur akses dan penggunaan Anda atas {{product.name}}, situs web, aplikasi, API, dokumentasi, dan layanan terkait kami (selanjutnya "**Layanan**").

Dengan membuat akun, memasang aplikasi, atau menggunakan Layanan dengan cara lain, Anda menyetujui Ketentuan ini dan dokumen yang dimasukkan ke dalamnya: [Kebijakan Privasi]({{url.privacy}}), [Kebijakan Penggunaan yang Dapat Diterima]({{url.acceptable_use}}), [Kebijakan Cookie]({{url.cookies}}){{#if feature.processor_role}}, [Addendum Pemrosesan Data]({{url.dpa}}) jika berlaku{{/if}}{{#if feature.payments}}, [Kebijakan Pengembalian Dana dan Pembatalan]({{url.refunds}}){{/if}}{{#if feature.game}}, [Kebijakan Aturan Permainan dan Item Virtual]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, [Ketentuan Aplikasi]({{url.app_eula}}){{/if}} serta setiap formulir pemesanan atau ketentuan khusus produk. Jika Anda tidak setuju, jangan gunakan Layanan.

Jika Anda menggunakan Layanan untuk suatu organisasi, Anda menegaskan bahwa Anda berwenang untuk mengikat organisasi tersebut, dan "Anda" mencakup organisasi itu. Jika ketentuan khusus produk atau perjanjian yang ditandatangani bertentangan dengan Ketentuan ini, maka ketentuan atau perjanjian tersebut berlaku hanya untuk produk atau pelanggan tersebut.

{{#if feature.consumers}}
**Konsumen.** Jika Anda menggunakan Layanan sebagai konsumen, hukum perlindungan konsumen yang bersifat wajib di negara tempat tinggal Anda tetap berlaku dan tidak ada yang dalam Ketentuan ini membatasi hak-hak tersebut. Bagian yang ditandai *(pelanggan bisnis)* hanya berlaku jika Anda bukan konsumen.
{{/if}}

## 2. Kelayakan {#eligibility}

Anda hanya dapat menggunakan Layanan jika Anda:

1. {{#if feature.minors}}berusia minimal **{{policy.min_age}}** tahun dan, jika Anda belum mencapai usia dewasa di tempat tinggal Anda, memiliki persetujuan orang tua atau wali hukum yang menerima Ketentuan ini untuk Anda dan bertanggung jawab atas penggunaan dan pembelian Anda (kami dapat meminta bukti){{else}}berusia minimal **{{policy.min_age}}** tahun dan mampu membuat perjanjian yang mengikat{{/if}};
2. tidak dilarang menerima Layanan berdasarkan hukum yang berlaku, termasuk hukum sanksi dan pengendalian ekspor (bagian 22);
3. tidak pernah dikeluarkan dari Layanan karena melanggar aturan kami, kecuali kami menyetujui secara tertulis untuk mengizinkan Anda kembali; dan
4. menggunakan Layanan secara sah di tempat Anda berada.
{{#if feature.age_gate}}5. menegaskan, saat kami memintanya, bahwa Anda berusia minimal **{{policy.age_gate}}** tahun dan telah cukup umur menurut aturan negara Anda untuk menggunakan fitur yang melibatkan {{policy.age_topics|konten sensitif usia}}. Kami tidak memerlukan tanggal lahir Anda: konfirmasi Anda dicatat. Jika hal itu tidak benar, kami dapat memblokir akun dan menghapus datanya.
{{/if}}{{#if feature.gambling}}6. menegaskan, saat kami memintanya, bahwa Anda berusia minimal **{{policy.gambling_age}}** tahun, bahwa perjudian sah di tempat tinggal Anda, dan bahwa Anda menggunakan fitur perjudian hanya untuk diri sendiri. Kami dapat mensyaratkan verifikasi usia dan identitas yang sebenarnya, serta dapat menolak atau mengakhiri akses ke fitur perjudian di mana pun hukum atau lisensi kami mewajibkannya.
{{/if}}{{#if policy.excluded_regions}}7. menegaskan, saat kami memintanya, bahwa Anda tidak berada di, dan bukan penduduk atau warga negara dari, negara atau wilayah mana pun berikut: **{{policy.excluded_regions}}**, tempat Layanan kami atau Ketentuan ini mungkin tidak sah, mungkin tidak dapat dilaksanakan, atau tidak ditawarkan. Kami tidak dapat melihat di mana Anda sebenarnya berada (misalnya di balik VPN), sehingga kami mengandalkan konfirmasi Anda; jika hal itu tidak benar, Anda menggunakan Layanan atas risiko Anda sendiri, Anda bertanggung jawab untuk mematuhi hukum setempat, dan kami dapat memblokir akun serta menghapus datanya. Tidak ada dalam butir ini yang membatasi hak yang tidak dapat dikesampingkan berdasarkan hukum di tempat tinggal Anda.
{{/if}}

Kami dapat meminta bukti usia, identitas, atau kewenangan kapan saja, dan dapat menolak atau menutup akun yang gagal dalam pemeriksaan tersebut.

## 3. Akun dan keamanan {#accounts}

- Berikan informasi yang akurat dan terkini, dan perbaruilah. Satu orang atau badan usaha, satu akun, kecuali kami sepakati lain; membuat akun tambahan untuk menghindari pembatasan, batas, pemblokiran, masa percobaan, atau aturan harga dilarang.
- Jaga kerahasiaan kredensial Anda. Jangan membagikan, menjual, menyewakan, atau mengalihkan akun Anda. Setiap lisensi pengguna hanya untuk satu individu yang disebutkan namanya, kecuali paket menyatakan lain.
- Anda bertanggung jawab atas segala sesuatu yang terjadi di bawah akun Anda, termasuk oleh orang yang Anda izinkan masuk atau yang gagal Anda cegah, sampai Anda memberi tahu kami bahwa akun tersebut telah disusupi. Segera beri tahu kami di [{{company.email}}](mailto:{{company.email}}) jika Anda menduga adanya akses tanpa izin.
- Kami dapat mensyaratkan autentikasi yang lebih kuat, mengatur ulang kredensial, atau mengunci akun yang secara wajar kami yakini disusupi atau disalahgunakan.
- Akun gratis yang tidak aktif dapat ditutup setelah pemberitahuan sebelumnya ke email yang terdaftar; akun berbayar tidak ditutup karena tidak aktif.
{{#if feature.anonymous}}- **Akun anonim.** Jika kami menawarkannya, Layanan membuat akun anonim untuk Anda pada pertama kali Anda menggunakannya. Akun tersebut tidak memiliki alamat email; siapa pun yang menggunakan peramban atau perangkat tersebut dapat menggunakan akun itu, dan kami tidak dapat memulihkannya untuk Anda jika Anda kehilangan akses. Anda dapat menghubungkan alamat email kapan saja untuk mengamankan dan memulihkan akun: kami mengonfirmasi alamat tersebut dengan tautan masuk yang dikirim ke alamat itu. Akun anonim yang tidak digunakan dalam waktu lama dapat dihapus setelah pemberitahuan di dalam Layanan, jika hal itu memungkinkan.
{{/if}}- **Pemegang akun dan akses.** Orang yang mengonfirmasi kendali atas alamat email melalui tautan masuk yang kami kirimkan, dan menerima Ketentuan ini, adalah pemegang akun dan diperlakukan sebagai orang yang membuat pilihan dalam akun. Jika Anda bertindak untuk suatu organisasi, Anda menegaskan bahwa Anda berwenang untuk mengikatnya. Anda memutuskan siapa lagi dalam organisasi Anda yang mendapat akses (misalnya operator dengan peran terbatas); orang yang Anda beri akses dapat melihat apa yang Anda sediakan untuk mereka, dan Anda bertanggung jawab atas pilihan tersebut.

## 4. Lisensi dan pembatasan {#licence}

Tunduk pada Ketentuan ini dan pembayaran biaya yang berlaku, kami memberi Anda lisensi yang terbatas, dapat dicabut, tidak eksklusif, tidak dapat dialihkan, dan tidak dapat disublisensikan untuk mengakses dan menggunakan Layanan bagi keperluan internal pribadi atau bisnis Anda selama masa berlaku. Perangkat lunak yang kami serahkan dilisensikan, bukan dijual. Kami dan pemberi lisensi kami tetap memegang semua hak yang tidak diberikan secara tegas.

Kecuali hukum memberi Anda hak yang tidak dapat dikesampingkan, Anda tidak boleh, dan tidak boleh mengizinkan siapa pun, untuk:

- menyalin, memodifikasi, menerjemahkan, atau membuat karya turunan dari Layanan;
- melakukan rekayasa balik, dekompilasi, pembongkaran, atau mencoba memperoleh kode sumber, model, bobot, algoritma, atau API yang tidak dipublikasikan;
- menjual kembali, mensublisensikan, menyewakan, menyewakan guna, menjalankan Layanan sebagai biro layanan, atau membuat Layanan tersedia bagi pihak ketiga selain pengguna resmi Anda;
- mengelak dari batas teknis, lisensi, pengukuran pemakaian, kontrol akses, batas laju, atau fitur keamanan;
- menghapus atau mengubah pemberitahuan kepemilikan, atribusi, atau pemberitahuan lisensi sumber terbuka;
- menggunakan Layanan atau keluarannya untuk membangun atau melatih produk pesaing, atau untuk melakukan benchmark atau mempublikasikan hasil kinerja tanpa persetujuan tertulis dari kami{{#if feature.ai}}, atau untuk melatih, menyempurnakan (fine-tune), atau melakukan distilasi model AI dari keluaran Layanan jika kami melarangnya dalam dokumentasi{{/if}};
- mengakses Layanan dengan cara otomatis (bot, scraper, crawler) kecuali melalui API kami yang terdokumentasi sesuai ketentuannya.

[Kebijakan Penggunaan yang Dapat Diterima]({{url.acceptable_use}}) memuat aturan terperinci dan merupakan bagian dari Ketentuan ini. Komponen sumber terbuka diatur oleh lisensinya sendiri, yang berlaku untuk komponen tersebut.

## 5. Penggunaan yang dapat diterima dan penegakan {#acceptable-use}

Anda bertanggung jawab atas penggunaan Layanan oleh Anda dan atas perilaku setiap orang yang Anda izinkan menggunakannya. Penyalahgunaan dapat merugikan pengguna lain, pihak ketiga, dan kami. Kami dapat bertindak sebagaimana diuraikan dalam [Kebijakan Penggunaan yang Dapat Diterima]({{url.acceptable_use}}) dan bagian 17, termasuk menghapus konten, membatasi fitur, membatasi laju (throttling), menangguhkan atau mengakhiri akun, menahan pencairan dana, melaporkan kepada pihak berwenang, dan menempuh upaya hukum berdasarkan bagian 21.

## 6. Konten Anda {#your-content}

{{#if feature.ugc}}
"**Konten Anda**" berarti segala sesuatu yang Anda unggah, kirimkan, publikasikan, hubungkan, atau hasilkan melalui Layanan{{#if feature.ai}}, termasuk prompt dan, antara Anda dan kami, keluaran yang Anda terima{{/if}}.

- **Kepemilikan.** Anda tetap memegang semua hak atas Konten Anda. Kami tidak memperoleh kepemilikan apa pun.
- **Lisensi kepada kami.** Anda memberi kami lisensi di seluruh dunia, non-eksklusif, bebas royalti untuk menyimpan, menyalin, mereproduksi, memproses, mengirimkan, mengadaptasi (untuk pemformatan, thumbnail, terjemahan, dan pemeriksaan keamanan), serta menampilkan Konten Anda **hanya sebagaimana diperlukan untuk mengoperasikan, mengamankan, mendukung, dan meningkatkan Layanan serta menegakkan Ketentuan ini**, selama Anda menyimpannya di Layanan dan untuk masa cadangan serta masa penahanan hukum yang terbatas setelahnya. Jika Anda membuat konten menjadi publik, lisensi itu mencakup penayangannya kepada audiens yang Anda pilih. Lisensi ini berakhir ketika Anda menghapus konten atau akun Anda, dengan tunduk pada masa tersebut dan pada salinan yang telah diterima secara sah oleh pengguna lain.
- **Janji Anda.** Anda memiliki, dan akan terus memiliki, semua hak, persetujuan, dan izin yang diperlukan untuk mengirimkan Konten Anda dan memberikan lisensi ini, termasuk dari setiap orang yang dapat diidentifikasi di dalamnya; Konten Anda dan penggunaan kami atasnya sebagaimana diizinkan tidak melanggar atau mengganggu hukum atau hak siapa pun (hak cipta, merek dagang, privasi, publisitas, kerahasiaan, kontrak); dan konten tersebut mematuhi [Kebijakan Penggunaan yang Dapat Diterima]({{url.acceptable_use}}).
- **Moderasi.** Kami tidak memiliki kewajiban umum untuk memantau Konten Anda, tetapi kami dapat meninjau, menghapus, membatasi, atau menolak konten yang secara wajar kami yakini melanggar hukum, Ketentuan ini, atau hak pihak lain, atau yang atasnya kami menerima pemberitahuan yang sah (lihat [Pemberitahuan Hak Cipta & Konten Ilegal]({{url.copyright}})). Jika diwajibkan (misalnya berdasarkan Digital Services Act Uni Eropa), kami memberi tahu Anda alasan kami dan cara menyanggah keputusan tersebut.
- **Cadangan.** Anda bertanggung jawab untuk menyimpan salinan Anda sendiri atas Konten Anda. Kecuali paket secara tegas mencakup cadangan atau retensi, kami tidak menjanjikan pemulihan konten yang dihapus atau hilang.
- **Data agregat.** Kami dapat menggunakan data penggunaan yang tidak mengidentifikasi Anda dan tidak mengungkap Konten Anda untuk mengoperasikan, mengamankan, dan meningkatkan Layanan.
{{else}}
Anda tetap memegang semua hak atas apa pun yang Anda kirimkan ke Layanan. Anda memberi kami lisensi terbatas yang diperlukan untuk memprosesnya guna menyediakan, mengamankan, dan mendukung Layanan, dan Anda berjanji bahwa Anda berhak untuk mengirimkannya. Anda bertanggung jawab untuk menyimpan salinan Anda sendiri.
{{/if}}

### Data dan file Anda {#your-data}

Antara Anda dan kami, **Anda memiliki data dan file yang Anda masukkan ke dalam Layanan, dan Anda sendiri yang bertanggung jawab atasnya**: untuk memiliki hak mengunggah dan menggunakannya, untuk keakuratan dan keabsahannya, serta untuk pilihan yang Anda buat tentang siapa yang dapat mengaksesnya. Kami menyimpan dan memproses data tersebut atas instruksi Anda agar Layanan dapat berfungsi. Hal ini tidak membatasi kewajiban hukum kami sendiri, misalnya untuk mengamankan Layanan dan melindungi data pribadi, dan tidak memengaruhi hak yang tidak dapat dikecualikan oleh hukum.
{{#if feature.uploads}}
- **Hak cipta dan hak lainnya.** Anda menegaskan bahwa Anda memiliki apa yang Anda unggah atau telah memperoleh setiap izin yang diperlukan (termasuk dari orang-orang yang tampak dalam gambar), dan Anda menerima bahwa **Anda dapat dimintai pertanggungjawaban atas klaim** tentang hak cipta, hak kepribadian, privasi, atau hak lain yang timbul darinya. Kami dapat menghapus konten dan bekerja sama dengan pemegang hak dan pihak berwenang sebagaimana diuraikan dalam [Pemberitahuan Hak Cipta & Konten Ilegal]({{url.copyright}}).
- **Privat secara default.** Apa yang Anda unggah hanya terlihat oleh Anda dan orang-orang yang Anda beri akses (misalnya anggota atau operator organisasi Anda). Kami tidak menggunakan unggahan atau konten lain Anda untuk membuat materi publik seperti templat, panduan, contoh, materi pemasaran, atau data pelatihan, dan kami tidak membuatnya tersedia bagi orang yang belum masuk, kecuali jika Anda secara tegas mempublikasikan atau membagikannya.
{{/if}}

## 7. Jika Anda melayani orang lain dengan Layanan {#end-users}

Jika Anda menggunakan Layanan untuk menyediakan sesuatu kepada pelanggan, pengguna, karyawan, atau pihak ketiga lain Anda sendiri ("**Pengguna Akhir**"), Anda sepenuhnya bertanggung jawab atas mereka: Anda harus memiliki dasar hukum, pemberitahuan, dan persetujuan yang diperlukan untuk setiap data pribadi yang Anda kumpulkan atau proses, menyepakati ketentuan Anda sendiri dengan mereka, menangani permintaan dan keluhan mereka, memastikan kepatuhan mereka terhadap [Kebijakan Penggunaan yang Dapat Diterima]({{url.acceptable_use}}), serta tidak membuat komitmen atas nama kami. Anda bertanggung jawab atas tindakan dan kelalaian Pengguna Akhir seolah-olah itu adalah tindakan dan kelalaian Anda sendiri. Kami tidak memiliki kewajiban kepada Pengguna Akhir.

## 8. Fitur AI {#ai}

{{#if feature.ai}}
- Keluaran dihasilkan secara otomatis dan dapat tidak akurat, tidak lengkap, menyinggung, bias, atau mirip dengan keluaran yang diberikan kepada orang lain. Anda harus mengevaluasi keluaran sebelum mengandalkannya dan bertanggung jawab atas cara Anda menggunakannya.
- **Jangan gunakan fitur AI sebagai satu-satunya dasar keputusan yang memiliki akibat hukum atau akibat signifikan serupa bagi orang** (misalnya ketenagakerjaan, kredit, perumahan, asuransi, pendidikan, layanan kesehatan, penegakan hukum, atau imigrasi), dan jangan gunakan untuk nasihat medis, hukum, keuangan, atau nasihat yang menyangkut keselamatan tanpa tinjauan manusia yang berkualifikasi.
- Anda harus mengungkapkan konten yang dihasilkan atau dimanipulasi AI sejauh yang diwajibkan oleh hukum atau platform tempat Anda mempublikasikannya (termasuk deepfake dan media sintetis), dan tidak boleh menyajikan keluaran AI sebagai buatan manusia jika hal itu dapat menyesatkan.
- Anda tidak boleh menggunakan fitur tersebut untuk penggunaan terlarang apa pun dalam [Kebijakan Penggunaan yang Dapat Diterima]({{url.acceptable_use}}), atau mencoba melewati sistem keamanan (termasuk prompt injection, jailbreaking, atau serangan ekstraksi terhadap sistem kami atau sistem pihak lain).
- Penyedia yang kami gunakan dapat menerapkan kebijakan penggunaan mereka sendiri; kami dapat membatasi fitur sesuai dengan itu. Kami tidak menggunakan Konten Anda untuk melatih model tujuan umum kecuali Anda memilih untuk ikut serta (lihat [Kebijakan Privasi]({{url.privacy}})).
{{else}}
Layanan saat ini belum mencakup fitur berbantuan AI. Jika kami menambahkannya, kami akan memperbarui Ketentuan ini dan memberikan pemberitahuan berdasarkan bagian 16, dan aturan untuk fitur tersebut (akurasi, tinjauan manusia, pengungkapan, dan tidak adanya penggunaan terlarang) akan berlaku.
{{/if}}

## 9. Biaya dan pembayaran {#fees}

{{#if feature.payments}}
- **Harga dan pajak.** Harga ditampilkan pada saat pembelian dan tidak termasuk PPN, pajak penjualan, atau pajak serupa kecuali dinyatakan lain; Anda membayar pajak yang berlaku. Harga untuk konsumen sudah mencakup pajak yang diwajibkan oleh hukum.
{{#if feature.merchant_of_record}}- **Merchant of record.** Pesanan diproses oleh penyedia pembayaran kami{{#if payments.provider}} {{payments.provider}}{{/if}}, yang bertindak sebagai reseller dan merchant of record, menagih pembayaran dan pajak, serta menerbitkan kuitansi. Ketentuan checkout-nya berlaku untuk pembelian di samping Ketentuan ini; pembayaran, penagihan, pajak, dan pengembalian dana ditangani berdasarkan ketentuan tersebut dan [Kebijakan Pengembalian Dana dan Pembatalan]({{url.refunds}}).
{{/if}}- **Pembayaran.** Anda memberi wewenang kepada kami dan prosesor pembayaran kami untuk menagih metode pembayaran yang Anda berikan untuk semua jumlah yang harus dibayar, termasuk perpanjangan dan tagihan berbasis penggunaan. Anda berjanji bahwa Anda berhak menggunakan metode pembayaran tersebut, dan Anda harus menjaga detailnya tetap mutakhir.
{{#if feature.subscriptions}}- **Sebelum Anda membayar.** Di samping tombol pembayaran, kami menampilkan harga, periode penagihan, bahwa langganan diperpanjang secara otomatis, apa yang terjadi setelah masa uji coba, cara membatalkan, serta tautan ke Ketentuan ini, [Kebijakan Pengembalian Dana dan Pembatalan]({{url.refunds}}), dan [Kebijakan Privasi]({{url.privacy}}). Anda hanya ditagih setelah Anda mencentang kotak atau menekan tombol yang menegaskan bahwa Anda telah melihatnya. Kami menyimpan catatan persetujuan tersebut dan mengirimkan konfirmasi yang dapat Anda simpan.
- **Langganan.** Kecuali dinyatakan lain saat checkout, langganan diperpanjang secara otomatis untuk periode dengan panjang yang sama hingga dibatalkan. Batalkan kapan saja di akun Anda atau melalui email sebelum tanggal perpanjangan; pembatalan berlaku pada akhir periode berbayar dan kami tidak melakukan pro-rata. Kami memberi tahu Anda sebelumnya, sebagaimana diwajibkan oleh hukum, sebelum masa uji coba berubah menjadi langganan berbayar atau sebelum harga perpanjangan berubah.
- **Uji coba dan promosi.** Satu uji coba atau penawaran promosi per orang atau per bisnis. Kami dapat menarik atau menolak penawaran jika kami menduga penyalahgunaan (banyak akun, identitas palsu, atau batas yang dilanggar).
{{/if}}{{#if feature.credits}}- **Kredit.** Kredit prabayar, token, atau mata uang dalam aplikasi adalah lisensi terbatas untuk menggunakan Layanan, bukan uang, tidak memiliki nilai tunai, tidak dapat dialihkan, tidak dapat ditukar menjadi uang atau diperdagangkan, dan dapat kedaluwarsa sebagaimana dinyatakan saat pembelian. Kredit yang tidak digunakan hangus ketika akun ditutup karena pelanggaran; dalam kasus lain, pengembalian dana mengikuti aturan di bawah dan hukum yang berlaku.{{#if feature.game}} Item virtual dalam permainan diatur oleh [Kebijakan Aturan Permainan dan Item Virtual]({{url.game_rules}}).{{/if}}
{{/if}}- **Perubahan harga.** Kami dapat mengubah harga secara prospektif dengan pemberitahuan minimal {{policy.notice_days}} hari. Jika Anda tidak setuju, batalkan sebelum perubahan berlaku.
- **Pembayaran terlambat atau gagal.** Kami dapat mencoba ulang penagihan, menangguhkan atau menurunkan paket akun, serta membebankan biaya pemulihan yang wajar dan bunga menurut undang-undang atas tagihan bisnis yang jatuh tempo. Layanan dipulihkan setelah tunggakan dibayar.
- **Chargeback dan penipuan.** Mengajukan chargeback atau sengketa pembayaran tanpa lebih dahulu menghubungi kami di [{{company.email}}](mailto:{{company.email}}), atau pembayaran yang curang atau tidak sah, dapat mengakibatkan penangguhan segera, hilangnya akses ke konten, dan penagihan kembali jumlah yang disengketakan beserta biaya pemrosesan kami.
- **Pengembalian dana.** Kecuali jika hukum memberi Anda hak atau kami menyatakan lain secara tertulis, biaya yang telah dibayar tidak dapat dikembalikan, termasuk untuk periode sebagian dan fitur yang tidak digunakan, dan tidak ada pengembalian dana yang harus dibayarkan jika kami menangguhkan atau mengakhiri akun Anda karena pelanggaran.
{{#if feature.consumers}}- **Pembatalan, penarikan, dan pengembalian dana.** Hak penarikan konsumen, cara membatalkan, dan kapan kami mengembalikan dana diatur dalam [Kebijakan Pengembalian Dana dan Pembatalan]({{url.refunds}}), yang merupakan bagian dari Ketentuan ini. Untuk konten atau layanan digital yang diberikan segera atas permintaan Anda, kami meminta persetujuan dan pengakuan tegas Anda saat checkout, sebagaimana diwajibkan oleh hukum.
{{/if}}
{{else}}
Layanan saat ini ditawarkan secara gratis. Kami dapat memperkenalkan fitur berbayar di masa depan; fitur tersebut akan disajikan kepada Anda dengan jelas dan Anda tidak akan pernah ditagih tanpa persetujuan Anda.
{{/if}}

## 10. API, integrasi, dan layanan pihak ketiga {#integrations}

{{#if feature.api}}
Akses API tunduk pada Ketentuan ini, dokumentasi, dan batas laju apa pun. Anda harus melindungi kunci API dan kredensial Anda, bertanggung jawab atas semua panggilan yang dilakukan dengannya, serta tidak boleh membagikannya, menyematkannya dalam kode publik, atau menggunakannya untuk menjual kembali akses. Kami dapat merotasi, membatasi, atau mencabut kunci, serta dapat mengubah atau menghentikan versi API dengan pemberitahuan yang wajar (lebih singkat jika diperlukan karena alasan keamanan atau hukum). Jangan menggunakan API dengan cara yang menurunkan kualitas Layanan bagi orang lain atau mencoba mengelak dari batas, misalnya dengan menggunakan banyak kunci atau akun.

{{/if}}
Layanan dapat bekerja dengan produk, situs web, dan layanan pihak ketiga yang tidak kami kendalikan. Penggunaan Anda atas hal tersebut tunduk pada ketentuan mereka. Kami tidak bertanggung jawab atas mereka, atas ketersediaan atau perubahannya, atau atas cara mereka menggunakan data yang Anda pilih untuk dibagikan kepada mereka. Kami dapat menghentikan dukungan untuk suatu integrasi kapan saja.

## 11. Fitur beta dan gratis {#beta}

Fitur yang diberi label alpha, beta, pratinjau, eksperimental, atau sejenisnya, serta tingkat gratis, disediakan "apa adanya", dapat berubah atau ditarik kapan saja, mungkin kurang andal, dan dikecualikan dari komitmen tingkat layanan apa pun. Jangan mengandalkannya untuk keperluan yang kritis.

## 12. Kekayaan intelektual {#ip}

Layanan, termasuk perangkat lunak, desain, teks, grafik, data, merek, logo, dan dokumentasi, dimiliki oleh kami atau pemberi lisensi kami dan dilindungi oleh hak cipta, merek dagang, serta undang-undang lainnya. Tidak ada dalam Ketentuan ini yang mengalihkan kepemilikan apa pun kepada Anda, dan tidak ada hak untuk menggunakan nama atau merek kami yang diberikan kecuali sebagaimana diperlukan untuk menggunakan Layanan.

**Masukan.** Jika Anda mengirimkan saran atau ide, Anda memberi kami lisensi abadi, tidak dapat dicabut, di seluruh dunia, bebas royalti, dan dapat disublisensikan untuk menggunakannya tanpa batasan atau pencantuman nama, sejauh diizinkan oleh hukum. Kami tidak memiliki kewajiban untuk menindaklanjuti masukan.

Pemberitahuan hak cipta dan konten ilegal: lihat [Pemberitahuan Hak Cipta & Konten Ilegal]({{url.copyright}}).

## 13. Kerahasiaan (pelanggan bisnis) {#confidentiality}

Masing-masing pihak akan menjaga kerahasiaan informasi bisnis dan teknis milik pihak lain yang tidak bersifat publik, hanya menggunakannya untuk melaksanakan atau menjalankan hak berdasarkan Ketentuan ini, dan melindunginya dengan kehati-hatian yang wajar, kecuali untuk informasi yang bersifat publik tanpa kesalahan penerima, sudah diketahui sebelumnya, dikembangkan secara mandiri, atau wajib diungkapkan menurut hukum (dengan pemberitahuan sebelumnya jika diizinkan secara hukum). Kewajiban ini berlaku selama tiga tahun setelah Ketentuan berakhir dan tanpa batas waktu untuk rahasia dagang.

## 14. Privasi dan perlindungan data {#privacy}

[Kebijakan Privasi]({{url.privacy}}) kami menjelaskan bagaimana kami memproses data pribadi. {{#if feature.processor_role}}Jika kami memproses data pribadi untuk Anda sebagai prosesor Anda, [Addendum Pemrosesan Data]({{url.dpa}}) berlaku dan menjadi bagian dari Ketentuan ini.{{/if}} Anda wajib mematuhi hukum perlindungan data dalam penggunaan Layanan dan tidak boleh mengirimkan data kategori khusus atau data yang diatur (kesehatan, kartu pembayaran, identitas pemerintah, data anak) kecuali fitur atau perjanjian secara tegas mengizinkannya.

## 15. Ketersediaan, dukungan, dan perubahan {#availability}

Kami berupaya menjaga ketersediaan yang tinggi tetapi tidak menjamin operasi yang tidak terputus atau bebas dari kesalahan. Kami dapat melakukan pemeliharaan (dengan pemberitahuan jika secara wajar memungkinkan), dan dapat mengubah, menambah, atau menghapus fitur. Jika kami secara material mengurangi fitur berbayar selama masa berlaku yang sudah dibayar di muka, kami akan memberi Anda pemberitahuan minimal {{policy.notice_days}} hari dan, jika Anda secara wajar tidak dapat melanjutkan, pengembalian dana pro-rata untuk periode prabayar yang terdampak. Dukungan diberikan di [{{company.email}}](mailto:{{company.email}}) atas dasar upaya yang wajar, kecuali paket Anda mencakup perjanjian tingkat layanan.

## 16. Perubahan atas Ketentuan ini {#changes}

Kami dapat memperbarui Ketentuan ini karena alasan hukum, keamanan, produk, atau bisnis. Untuk perubahan material, kami akan memberikan pemberitahuan minimal **{{policy.notice_days}} hari** melalui email atau di dalam Layanan sebelum perubahan tersebut berlaku bagi Anda. Jika Anda tidak setuju, Anda dapat berhenti menggunakan Layanan dan menutup akun Anda sebelum tanggal berlaku, dan (untuk paket berbayar) meminta pengembalian dana pro-rata atas biaya prabayar untuk periode setelah tanggal tersebut. Terus menggunakan Layanan setelah tanggal berlaku berarti Anda menerima Ketentuan yang diperbarui. Perubahan yang diwajibkan oleh hukum, atau yang tidak mengurangi apa pun dan tidak menambah kewajiban, dapat berlaku segera. Perubahan tidak berlaku untuk sengketa yang sudah berjalan.

## 17. Penangguhan dan pengakhiran {#termination}

**Oleh Anda.** Anda dapat berhenti menggunakan Layanan dan menutup akun Anda kapan saja di pengaturan Anda atau melalui email. Biaya berbayar tidak dikembalikan kecuali bagian 9 atau hukum menyatakan lain.

**Oleh kami, untuk kenyamanan.** Kami dapat mengakhiri paket berbayar dengan pemberitahuan {{policy.notice_days}} hari (dengan pengembalian dana pro-rata atas biaya prabayar) dan dapat menghentikan layanan gratis dengan pemberitahuan yang wajar.

**Oleh kami, karena alasan.** Kami dapat, dengan atau tanpa pemberitahuan sebelumnya dan sejauh diizinkan oleh hukum, membatasi, menangguhkan, atau mengakhiri akses Anda, menghapus konten, atau menutup akun Anda seketika jika:

- Anda melanggar Ketentuan ini atau Kebijakan Penggunaan yang Dapat Diterima (respons kami proporsional dengan keseriusan, pengulangan, dan risikonya);
- kami secara wajar meyakini bahwa penggunaan Anda menimbulkan risiko keamanan, hukum, regulasi, reputasi, atau keuangan bagi kami, pengguna lain, atau pihak ketiga;
- Anda gagal membayar saat jatuh tempo;
- pengadilan, pihak berwenang, atau hukum yang berlaku mewajibkannya; atau
- akun Anda tampak disusupi, curang, atau ditinggalkan.

Jika praktis dan sah, kami akan memberi tahu Anda alasannya serta memberi kesempatan untuk menanggapi atau memperbaiki masalah terlebih dahulu. Jika hukum mewajibkannya (misalnya Digital Services Act Uni Eropa), kami memberikan pernyataan alasan dan cara untuk mengajukan banding. Jika kami menangguhkan atau mengakhiri akun Anda karena pelanggaran, tidak ada biaya yang dikembalikan dan jumlah yang terutang tetap harus dibayar.

**Akibat.** Saat pengakhiran, lisensi Anda berakhir; Anda harus berhenti menggunakan Layanan; dan, atas permintaan dalam **{{policy.retention_account_days}} hari**, kami akan membuat Konten Anda tersedia untuk diekspor jika secara teknis memungkinkan (tidak jika hal itu melanggar hukum atau akan merugikan pihak lain). Setelah masa itu, kami menghapusnya sebagaimana diuraikan dalam [Kebijakan Privasi]({{url.privacy}}). Bagian yang menurut sifatnya seharusnya tetap berlaku akan tetap berlaku, termasuk 4, 6 (batasan lisensi dan janji Anda), 9 (jumlah yang terutang), 12, 13, 17-24, dan 26.

## 18. Jaminan dan penafian {#disclaimer}

Kami menyediakan Layanan dengan keterampilan dan kehati-hatian yang wajar. **Selain itu, sejauh maksimum yang diizinkan oleh hukum, Layanan disediakan "apa adanya" dan "sebagaimana tersedia", dan kami menolak semua jaminan lain, tersurat maupun tersirat,** termasuk kelayakan untuk diperdagangkan, kesesuaian untuk tujuan tertentu, non-pelanggaran, akurasi, ketersediaan, serta bahwa Layanan akan aman, bebas kesalahan, tidak terputus, atau bebas dari komponen yang berbahaya. Kami tidak menjamin keluaran, konten pihak ketiga, atau hasil yang Anda peroleh. Layanan tidak dirancang untuk digunakan di lingkungan berisiko tinggi tempat kegagalan dapat menyebabkan kematian, cedera pribadi, atau kerusakan berat (misalnya perangkat medis, penerbangan, sistem nuklir, atau sistem penopang kehidupan), dan Anda tidak boleh menggunakannya dengan cara tersebut.

{{#if feature.consumers}}Jika Anda adalah konsumen, Anda tetap memiliki hak menurut undang-undang yang tidak dapat dikesampingkan, seperti jaminan dan upaya hukum menurut undang-undang untuk konten dan layanan digital berdasarkan hukum Uni Eropa dan Inggris, serta jaminan konsumen berdasarkan Australian Consumer Law dan undang-undang serupa di tempat lain.{{/if}}

## 19. Pembatasan tanggung jawab {#liability}

Tidak ada dalam Ketentuan ini yang mengecualikan atau membatasi tanggung jawab yang menurut hukum tidak dapat dikecualikan atau dibatasi, termasuk untuk kematian atau cedera pribadi, penipuan atau kesengajaan, kelalaian berat, atau (untuk konsumen) upaya hukum menurut undang-undang yang bersifat wajib.

Dengan tunduk pada hal itu, **sejauh maksimum yang diizinkan oleh hukum** dan untuk pelanggan bisnis:

1. kami tidak bertanggung jawab atas kerugian tidak langsung, insidental, khusus, konsekuensial, sebagai hukuman, atau punitif, atau atas hilangnya keuntungan, pendapatan, bisnis, nama baik, penghematan yang diharapkan, atau data, yang timbul dari atau terkait dengan Layanan atau Ketentuan ini, bahkan jika telah diberitahu tentang kemungkinan tersebut; dan
2. total tanggung jawab kumulatif kami untuk semua klaim dibatasi pada jumlah yang lebih besar antara (a) biaya yang Anda bayarkan kepada kami untuk Layanan dalam **{{policy.liability_cap_months}} bulan** sebelum peristiwa pertama yang menimbulkan klaim dan (b) EUR 100.

{{#if feature.consumers}}Untuk konsumen, kami bertanggung jawab atas kerugian atau kerusakan yang dapat diperkirakan yang disebabkan oleh pelanggaran atau kelalaian kami, tetapi tidak atas kerugian yang tidak dapat diperkirakan, atau kerugian yang berkaitan dengan bisnis.{{/if}}

Kami tidak bertanggung jawab atas kegagalan atau keterlambatan yang disebabkan oleh peristiwa di luar kendali wajar kami (bagian 24). Layanan gratis disediakan tanpa tanggung jawab di luar yang diwajibkan oleh hukum. Batasan ini berlaku terlepas dari dasar timbulnya tanggung jawab (kontrak, perbuatan melawan hukum termasuk kelalaian, atau lainnya) dan bahkan jika suatu upaya hukum gagal memenuhi tujuan esensialnya.

## 20. Ganti rugi {#indemnity}

Jika Anda adalah pelanggan bisnis, Anda akan membela, mengganti rugi, dan membebaskan {{company.name}}, afiliasinya, pejabat, karyawan, dan agennya dari klaim, kerugian, denda, dan biaya (termasuk biaya hukum yang wajar) yang timbul dari (a) Konten Anda atau data Anda, (b) pelanggaran Ketentuan ini atau hukum oleh Anda atau Pengguna Akhir Anda, (c) penyalahgunaan Layanan oleh Anda, atau (d) sengketa antara Anda dan pihak ketiga. Kami akan segera memberi tahu Anda tentang klaim apa pun, membiarkan Anda mengendalikan pembelaan (kami dapat ikut serta atas biaya kami sendiri), dan Anda tidak boleh menyelesaikan klaim yang mengakui kesalahan kami tanpa persetujuan kami. {{#if feature.consumers}}Konsumen hanya bertanggung jawab atas kerugian yang mereka timbulkan melalui pelanggaran mereka sendiri, sebagaimana diatur oleh hukum.{{/if}}

## 21. Upaya hukum atas penyalahgunaan {#remedies}

Selain hak lainnya, dan sejauh diizinkan oleh hukum:

- **Perintah pengadilan (injunctive relief).** Anda mengakui bahwa pelanggaran bagian 4, 5, atau 13 dapat menimbulkan kerugian yang tidak dapat sepenuhnya dipulihkan oleh ganti rugi, dan kami dapat meminta perintah pengadilan atau upaya hukum ekuitas lainnya tanpa membuktikan kerugian nyata atau memasang jaminan.
- **Biaya penyalahgunaan.** Jika penyalahgunaan Anda menimbulkan biaya bagi kami (infrastruktur tambahan, penanganan insiden, investigasi, chargeback, denda regulasi, atau klaim pihak ketiga), Anda akan mengganti biaya yang wajar dan terdokumentasi.
- **Bukti dan kerja sama.** Kami dapat menyimpan log dan konten yang terkait dengan dugaan penyalahgunaan, dan dapat mengungkapkannya kepada pihak yang terdampak, platform, penegak hukum, atau regulator sejauh hukum mengizinkan. Bekerja samalah secara wajar dengan investigasi kami.
- **Pelaporan.** Kami dapat melaporkan aktivitas melawan hukum (termasuk materi pelecehan seksual anak, penipuan, ancaman, malware, dan serangan terhadap sistem) kepada pihak berwenang dan pihak yang terdampak, dan akan melakukannya jika hukum mewajibkannya.
- **Penahanan.** Kami dapat menahan, membekukan, atau memperhitungkan jumlah yang terutang kepada Anda (misalnya pencairan dana) terhadap jumlah yang Anda utang kepada kami atau yang timbul dari penyalahgunaan, dengan tunduk pada hukum.

## 22. Ekspor, sanksi, dan antikorupsi {#export}

Anda tidak boleh menggunakan, mengekspor, atau mengekspor ulang Layanan dengan melanggar hukum pengendalian ekspor dan sanksi yang berlaku, termasuk hukum Uni Eropa, Amerika Serikat, Inggris, dan PBB, atau kepada atau untuk orang atau negara yang tunduk pada sanksi menyeluruh. Anda menegaskan bahwa Anda dan pengguna Anda tidak termasuk dalam daftar sanksi atau daftar pihak terbatas mana pun. Anda tidak akan menawarkan atau memberikan sesuatu yang bernilai untuk memengaruhi siapa pun secara tidak patut sehubungan dengan Layanan.

## 23. Hukum yang berlaku dan sengketa {#law}

Ketentuan ini serta setiap sengketa atau klaim yang timbul dari atau sehubungan dengan Ketentuan ini atau Layanan (termasuk sengketa non-kontraktual) diatur oleh hukum **{{law.governing}}**, tanpa memperhatikan aturan konflik hukum, dan tidak termasuk Konvensi PBB tentang Kontrak untuk Penjualan Barang Internasional.

**Penyelesaian informal terlebih dahulu.** Sebelum memulai proses formal, tulis ke [{{company.legal_email}}](mailto:{{company.legal_email}}) dengan uraian sengketa, dan biarkan kami mencoba menyelesaikannya dengan itikad baik selama minimal 30 hari.

**Pengadilan.** Kecuali hukum yang bersifat wajib menentukan lain, yurisdiksi eksklusif berada pada **{{law.venue}}**. Masing-masing pihak dapat meminta perintah pengadilan mendesak di pengadilan yang berwenang mana pun.

{{#if feature.consumers}}**Konsumen.** Jika Anda adalah konsumen, Anda juga tetap memiliki hak untuk mengajukan proses hukum di pengadilan negara tempat tinggal Anda dan untuk mengandalkan hukum perlindungan konsumen yang bersifat wajib di sana, dan tidak ada dalam bagian ini yang menghapus hak tersebut. {{#if consumer_dispute}}Kami berpartisipasi dalam penyelesaian sengketa di luar pengadilan di hadapan {{consumer_dispute}}.{{/if}}
{{/if}}
**Batas waktu (pelanggan bisnis).** Sejauh diizinkan oleh hukum, setiap klaim harus diajukan dalam waktu {{policy.claim_months}} bulan sejak sebab timbulnya klaim, jika tidak maka klaim tersebut gugur.

**Tanpa gugatan kelompok (pelanggan bisnis, jika diizinkan).** Klaim hanya dapat diajukan secara individual, bukan sebagai bagian dari gugatan kelompok, kolektif, atau perwakilan.

## 24. Keadaan kahar {#force-majeure}

Tidak satu pun pihak bertanggung jawab atas keterlambatan atau kegagalan yang disebabkan oleh peristiwa di luar kendali wajarnya, termasuk bencana alam, perang, terorisme, kerusuhan sipil, pandemi, tindakan pemerintah, kegagalan listrik, internet, atau telekomunikasi, kegagalan penyedia infrastruktur cloud atau pihak ketiga lainnya, serangan siber meskipun telah menerapkan langkah-langkah keamanan yang wajar, perselisihan perburuhan (selain yang melibatkan staf pihak tersebut sendiri), atau kegagalan pasokan. Kewajiban pembayaran untuk layanan yang sudah diberikan tidak dibebaskan. Jika peristiwa tersebut berlangsung lebih dari 60 hari, salah satu pihak dapat mengakhiri layanan yang terdampak.

## 25. Komunikasi elektronik dan pemberitahuan {#notices}

Anda menyetujui untuk menerima pemberitahuan dan perjanjian secara elektronik. Kami dapat memberikan pemberitahuan melalui email ke alamat di akun Anda, di dalam Layanan, atau dengan memposting di situs web kami. Pemberitahuan kepada kami harus dikirim ke [{{company.legal_email}}](mailto:{{company.legal_email}}) dan ke {{company.address}}. Pemberitahuan dianggap diterima 24 jam setelah email dikirim tanpa pesan kegagalan pengiriman (bounce-back), dan ketika diposting atau ditampilkan di dalam Layanan.

## 26. Umum {#general}

- **Perjanjian keseluruhan.** Ketentuan ini dan dokumen yang dirujuknya merupakan keseluruhan perjanjian mengenai pokok bahasannya dan menggantikan pemahaman sebelumnya. Anda tidak mengandalkan pernyataan apa pun yang tidak tercantum di dalamnya.
- **Keterpisahan.** Jika suatu ketentuan tidak dapat dilaksanakan, ketentuan tersebut dibatasi hingga sejauh yang diperlukan secara minimal, atau diganti dengan ketentuan yang dapat dilaksanakan yang paling dekat dengan maksudnya; sisanya tetap berlaku.
- **Tidak ada pengabaian.** Tidak menggunakan suatu hak bukan berarti mengabaikannya.
- **Pengalihan.** Anda tidak boleh mengalihkan hak atau kewajiban Anda tanpa persetujuan tertulis dari kami. Kami dapat mengalihkan Ketentuan ini kepada afiliasi atau penerus bisnis kami, dan akan memberi tahu Anda.
- **Hubungan.** Para pihak adalah kontraktor independen. Tidak ada yang menciptakan kemitraan, keagenan, hubungan kerja, atau usaha patungan.
- **Pihak ketiga.** Tidak ada orang lain yang memiliki hak untuk menegakkan Ketentuan ini, kecuali afiliasi, pejabat, dan agen kami berdasarkan bagian 19 dan 20.
- **Bahasa.** Terjemahan disediakan untuk kemudahan; jika berbeda, versi bahasa Inggris yang berlaku kecuali hukum yang bersifat wajib mensyaratkan lain.
- **Penafsiran.** Judul hanya untuk kemudahan. "Termasuk" berarti "termasuk tanpa batasan".
- **Publisitas.** Kami dapat menyebut Anda sebagai pelanggan dengan logo Anda kecuali Anda menolak melalui email; konsumen tidak pernah disebutkan namanya.

## 27. Kontak {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Nomor registrasi {{company.reg_id}}{{/if}}{{#if company.tax_id}} · ID pajak {{company.tax_id}}{{/if}}
Email [{{company.email}}](mailto:{{company.email}}) · Hukum [{{company.legal_email}}](mailto:{{company.legal_email}}) · Dukungan [{{company.email}}](mailto:{{company.email}}) · Lihat juga [Informasi Hukum]({{url.impressum}}) kami.
