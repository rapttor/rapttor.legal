---
doc: privacy
title: Kebijakan Privasi
version: 1.2.1
updated: 2026-10-31
lang: id
translation_of: 1.2.1
status: draft
summary: Cara {{product.name}} mengumpulkan, menggunakan, membagikan, dan melindungi data pribadi, serta hak yang Anda miliki.
---

# Kebijakan Privasi

*Versi {{doc.version}}, terakhir diperbarui {{doc.updated}}.*

## 1. Siapa kami {#who-we-are}

Kebijakan ini menjelaskan bagaimana **{{company.name}}** dengan alamat terdaftar di {{company.address}} ("**{{product.name}}**", "kami") memproses data pribadi ketika Anda menggunakan {{product.name}}, situs web, aplikasi, API, dan layanan terkait kami ("**Layanan**").

Untuk data pribadi yang kami tentukan cara dan tujuannya untuk diproses (misalnya akun Anda, kunjungan situs web, dan penagihan), kami adalah **pengendali data pribadi**. Kontak: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Pejabat Pelindungan Data Pribadi kami dapat dihubungi di [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Kami belum menunjuk Pejabat Pelindungan Data Pribadi karena hukum tidak mewajibkannya untuk kegiatan kami. Pertanyaan tentang privasi dikirim ke [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Perwakilan UE (Pasal 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Perwakilan UK (Pasal 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Ketika kami adalah prosesor data pribadi

Jika Anda menggunakan Layanan melalui sebuah organisasi (misalnya pemberi kerja Anda atau pelanggan bisnis), organisasi tersebut biasanya adalah pengendali data pribadi atas data yang dimasukkan ke dalam Layanan, dan kami memprosesnya atas nama mereka berdasarkan [Addendum Pemrosesan Data]({{url.dpa}}) kami. Dalam hal ini, sampaikan permintaan Anda kepada organisasi tersebut; kami akan membantunya dalam menanggapi. Kebijakan ini kemudian hanya berlaku untuk data yang kami kendalikan sendiri (administrasi akun, penagihan, keamanan, situs web).
{{/if}}
## 2. Data yang kami kumpulkan {#data-we-collect}

| Kategori | Contoh | Sumber |
|---|---|---|
| **Data akun** | nama, email, hash kata sandi, detail profil, bahasa, preferensi | Anda |
| **Data kontak dan dukungan** | pesan, lampiran, catatan panggilan, umpan balik, jawaban survei | Anda |
| **Konten yang Anda kirimkan** | berkas, teks, pengaturan, apa pun yang Anda tempatkan di Layanan | Anda |
{{#if feature.anonymous}}| **Data akun anonim** | pengenal akun acak, sesi peramban atau perangkat yang menyimpannya, konten yang Anda buat, dan alamat email jika nanti Anda menghubungkannya | Anda, secara otomatis |
{{/if}}{{#if feature.uploads}}| **Berkas dan gambar yang Anda unggah** | berkasnya sendiri dan metadata di dalamnya (misalnya detail kamera atau lokasi pada foto) | Anda |
{{/if}}| **Catatan persetujuan** | apa yang Anda setujui (dokumen, konfirmasi usia, pilihan opsional), versi, bahasa, tanggal, dan cara Anda menyetujui | Anda |
| **Data penggunaan dan perangkat** | alamat IP, jenis peramban dan perangkat, sistem operasi, bahasa, halaman dan fitur yang digunakan, cap waktu, referrer, log crash dan kesalahan | Secara otomatis |
| **Cookie dan teknologi serupa** | pengenal dalam cookie, local storage, SDK (lihat [Kebijakan Cookie]({{url.cookies}})) | Secara otomatis |
{{#if feature.payments}}| **Data pembayaran dan transaksi** | paket, faktur, nama dan alamat penagihan, nomor pajak (tax ID), status pembayaran; detail kartu ditangani oleh prosesor pembayaran kami dan tidak disimpan oleh kami | Anda, prosesor pembayaran |
{{/if}}{{#if feature.location}}| **Data lokasi** | lokasi presisi hanya jika Anda mengaktifkannya di perangkat Anda; jika tidak, lokasi perkiraan dari alamat IP | Perangkat Anda |
{{/if}}| **Data akun pihak ketiga** | nama, email, foto profil, dan pengenal yang dibagikan oleh penyedia masuk yang Anda pilih | Pihak ketiga, dengan izin Anda |
{{#if feature.ugc}}| **Komunikasi antar-pengguna** | pesan dan interaksi yang Anda kirim melalui Layanan | Anda |
{{/if}}{{#if feature.mobile}}| **Data perangkat seluler** | model dan versi OS perangkat, versi aplikasi, token instans aplikasi dan notifikasi push, bahasa dan zona waktu, status izin; pengenal iklan hanya jika Anda mengizinkan pelacakan | Perangkat Anda |
{{/if}}{{#if feature.game}}| **Data permainan** | kemajuan permainan, skor, peringkat, item dan pembelian, riwayat pertandingan, obrolan dalam permainan dan (jika digunakan) laporan suara, sinyal anti-curang dan integritas, profil publik (nama, avatar, peringkat) | Anda, secara otomatis |
{{/if}}| **Sinyal keamanan dan penipuan** | login gagal, laporan penyalahgunaan, skor risiko, permintaan yang diblokir | Secara otomatis, pengguna lain |

Kami tidak secara sengaja mengumpulkan data kategori khusus (kesehatan, biometrik, pandangan politik atau agama, dan sejenisnya). Mohon jangan mengirimkannya kecuali suatu fitur secara tegas memintanya. Jika Anda tetap mengirimkan data tersebut, Anda bertanggung jawab atas adanya dasar hukum yang sah.

Anda tidak wajib memberikan data pribadi kepada kami, tetapi tanpa sebagian data tersebut (misalnya alamat email) kami tidak dapat menyediakan akun.

### Pelacakan yang tidak kami gunakan {#no-tracking}

Kami **tidak** menggunakan alat session-replay atau perekam layar, penangkapan penekanan tombol atau gerakan mouse, maupun browser fingerprinting. {{#if feature.analytics}}Analitik hanya berjalan dengan persetujuan Anda (lihat [Kebijakan Cookie]({{url.cookies}})).{{else}}Kami tidak menggunakan pelacak analitik atau iklan.{{/if}}
{{#if feature.external}}
### Sumber daya pihak ketiga dan alamat IP Anda {#external}

Beberapa fitur memuat konten dari server perusahaan lain (misalnya font, peta, video, atau pemeriksaan keamanan). Ketika peramban Anda mengambil konten tersebut, **alamat IP Anda dan detail teknis dikirim ke perusahaan tersebut**, yang mungkin berada di luar negara Anda. Kami memuat sumber daya ini hanya setelah Anda menyetujui masing-masing di pengaturan cookie, yang dapat Anda ubah kapan saja; jika Anda menolak, kami menggunakan alternatif, atau fitur tersebut tetap nonaktif.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### Email {#emails}

Kami mengirim email yang diperlukan Layanan (tautan masuk, tanda terima, pemberitahuan keamanan){{#if feature.marketing}} dan, hanya jika Anda menyetujuinya atau hukum mengizinkan, berita produk{{/if}}. Setiap email berisi tautan untuk berhenti menerima email dari kami. {{#if feature.marketing}}Email opsional berhenti dengan satu klik, seketika. {{/if}}Karena memblokir semua email juga akan memblokir tautan masuk, permintaan untuk memblokir **semua** email dari layanan ini dikonfirmasi dengan satu email terakhir yang berisi tautan untuk membuktikan bahwa alamat tersebut milik Anda. Kemudian kami menambahkan alamat tersebut ke daftar larangan kirim di penyedia email kami dan menyimpannya di sana agar kami dapat menghormati pilihan Anda (kewajiban hukum dan kepentingan sah kami dalam menghormati permintaan Anda).
{{/if}}{{#if feature.age_gate}}
### Konfirmasi usia {#age}

Sebelum Anda menggunakan fitur yang melibatkan {{policy.age_topics|konten yang sensitif terhadap usia}}, kami meminta Anda mengonfirmasi bahwa Anda berusia minimal {{policy.age_gate}} tahun dan cukup umur menurut aturan negara Anda. Kami tidak meminta tanggal lahir Anda dan hanya menyimpan konfirmasi Anda serta kapan Anda memberikannya. Jika kami mengetahui bahwa seseorang berada di bawah usia tersebut, kami memblokir akunnya dan menghapus datanya.
{{/if}}{{#if feature.gambling}}
Untuk fitur perjudian, kami juga dapat meminta bukti usia dan identitas Anda, dan menggunakan penyedia verifikasi untuk keperluan tersebut. Kami menyimpan hasilnya serta bukti yang diwajibkan hukum.
{{/if}}

## 3. Mengapa kami menggunakan data Anda, dan dasar hukum kami {#purposes}

| Tujuan | Dasar hukum (GDPR / UK GDPR) |
|---|---|
| Menyediakan Layanan, membuat dan mengelola akun Anda, memproses pesanan | Kontrak (Pasal 6(1)(b)) |
| Dukungan pelanggan dan komunikasi tentang penggunaan Layanan Anda | Kontrak; kepentingan yang sah |
| Keamanan, pencegahan penyalahgunaan dan penipuan, penegakan [Ketentuan]({{url.terms}}) dan [Kebijakan Penggunaan yang Dapat Diterima]({{url.acceptable_use}}) kami | Kepentingan yang sah (Pasal 6(1)(f)); kewajiban hukum |
| Debugging, keandalan, perencanaan kapasitas, dan peningkatan Layanan | Kepentingan yang sah |
{{#if feature.analytics}}| Analitik penggunaan | Persetujuan jika diwajibkan hukum, selain itu kepentingan yang sah |
{{/if}}{{#if feature.marketing}}| Berita produk dan email pemasaran | Persetujuan, atau kepentingan yang sah untuk pelanggan yang sudah ada jika hukum mengizinkan; Anda dapat berhenti berlangganan kapan saja |
{{/if}}{{#if feature.ads}}| Periklanan dan pengukuran | Persetujuan |
{{/if}}| Pencatatan persetujuan Anda dan penghormatan terhadap pilihan email Anda | Kewajiban hukum; kepentingan yang sah |
{{#if feature.external}}| Memuat sumber daya pihak ketiga yang menerima alamat IP Anda | Persetujuan (Pasal 6(1)(a), dan aturan ePrivacy untuk akses ke perangkat Anda) |
{{/if}}| Akuntansi, pajak, dan kewajiban hukum lainnya | Kewajiban hukum (Pasal 6(1)(c)) |
| Membangun, menjalankan, atau membela klaim hukum; menanggapi otoritas | Kepentingan yang sah; kewajiban hukum |
| Pengalihan usaha (merger, akuisisi, penjualan aset) | Kepentingan yang sah |

Jika kami mengandalkan kepentingan yang sah, kami telah menimbang kepentingan tersebut terhadap hak Anda; Anda dapat meminta rinciannya dan dapat mengajukan keberatan (bagian 10). Jika kami mengandalkan persetujuan, Anda dapat menarik persetujuan kapan saja; hal itu tidak memengaruhi pemrosesan yang telah dilakukan sebelumnya.

{{#if feature.ai}}
### Fitur yang dibantu AI {#ai}

Beberapa fitur menggunakan model pembelajaran mesin atau model generatif. Ketika Anda menggunakannya, konten yang Anda kirimkan sebagai masukan dikirim ke penyedia yang bertindak sebagai prosesor kami untuk menghasilkan keluaran.

- Kami **tidak** menggunakan konten Anda untuk melatih model tujuan umum, dan kami mewajibkan penyedia kami untuk tidak melakukannya, kecuali jika Anda secara tegas memilih untuk ikut serta.
- Keluaran AI dapat keliru, tidak lengkap, atau bias. Jangan mengandalkannya untuk keputusan hukum, medis, keuangan, atau keputusan berisiko tinggi lainnya tanpa tinjauan manusia.
- Kami tidak membuat keputusan yang memiliki akibat hukum atau dampak signifikan serupa terhadap Anda semata-mata secara otomatis. Pembatasan akun karena penyalahgunaan ditinjau oleh seseorang atas permintaan (lihat [Kebijakan Penggunaan yang Dapat Diterima]({{url.acceptable_use}}), Penegakan).
- Konten yang dihasilkan AI diberi label jika hukum mewajibkannya.
{{/if}}
## 4. Dengan siapa kami membagikan data {#sharing}

**Kami tidak menjual data pribadi Anda**, dan kami tidak "membagikannya" untuk periklanan perilaku lintas konteks{{#if feature.ads}} kecuali sebagaimana dijelaskan dalam Kebijakan Cookie dan hanya jika Anda telah memberikan persetujuan{{/if}}.

Kami hanya membagikan data pribadi kepada:

- **Penyedia layanan (prosesor)** yang bertindak atas instruksi kami berdasarkan perjanjian tertulis: hosting dan infrastruktur, pengiriman email, alat dukungan pelanggan, pemantauan kesalahan{{#if feature.payments}}, pemrosesan pembayaran{{/if}}{{#if feature.ai}}, penyedia AI{{/if}}. Daftar terkini ada di [Daftar Sub-prosesor]({{url.subprocessors}}) kami.
- **Platform dan toko aplikasi** yang Anda gunakan untuk mengakses Layanan (misalnya Apple, Google, toko konsol atau PC), yang menangani pembayaran dan dapat memberi kami data pembelian dan akun yang terbatas;
- **Pengguna lain atau publik**, hanya atas arahan Anda (misalnya konten yang Anda pilih untuk dipublikasikan{{#if feature.ugc}} atau pesan yang Anda kirim{{/if}}).
- **Penasihat profesional** (pengacara, auditor, perusahaan asuransi) berdasarkan kerahasiaan.
- **Otoritas, pengadilan, dan pihak yang terdampak** jika diwajibkan hukum, untuk menanggapi proses hukum yang sah, untuk melindungi hak, keselamatan, atau harta benda, atau untuk menyelidiki penyalahgunaan dan penipuan. Kami memeriksa keabsahan permintaan dan, jika diizinkan, memberi tahu Anda.
- **Penerus** dalam merger, akuisisi, pendanaan, atau penjualan aset, yang wajib menghormati kebijakan ini; kami akan memberi tahu Anda tentang perubahan material atas kendali yang memengaruhi data Anda.
- **Pihak lain mana pun** hanya dengan persetujuan Anda.

## 5. Transfer internasional {#transfers}

Kami beroperasi dari {{company.country}}{{#if hosting.region}} dan menyimpan data terutama di {{hosting.region}}{{/if}}. Beberapa penyedia memproses data di negara lain, termasuk Amerika Serikat. Ketika data pribadi dari EEA, Inggris, atau Swiss ditransfer ke negara yang tidak memiliki keputusan kecukupan, kami menggunakan perlindungan yang diakui: EU-U.S. Data Privacy Framework (atau perluasannya untuk Inggris/Swiss) jika penerimanya tersertifikasi, selain itu **Klausul Kontrak Baku** Komisi Eropa, dengan **UK International Data Transfer Addendum** atau amendemen Swiss jika relevan, serta langkah tambahan seperti enkripsi saat transit dan saat disimpan. Anda dapat meminta salinan perlindungan yang relevan di [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Berapa lama kami menyimpan data {#retention}

| Data | Retensi |
|---|---|
| Data akun dan konten | Selama akun Anda aktif, lalu dihapus atau dianonimkan dalam waktu {{policy.retention_account_days}} hari setelah penutupan |
| Log server dan keamanan | 90 hari |
| Cadangan (backup) | Bergulir, hingga 35 hari; data yang dihapus hilang dari cadangan mengikuti siklus tersebut |
| Faktur dan catatan akuntansi | {{policy.retention_billing_years}} tahun, atau selama yang diwajibkan hukum |
| Korespondensi dukungan | Hingga 3 tahun setelah kasus ditutup, atau selama akun aktif jika lebih lama |
| Catatan persetujuan, pilihan berhenti, dan permintaan hak | Selama diperlukan untuk membuktikan kepatuhan |
| Data yang diperlukan untuk klaim hukum atau penyelidikan | Hingga perkara diselesaikan dan batas waktu daluwarsa telah lewat |
| Catatan penyalahgunaan dan pemblokiran (pengenal, alasan, tanggal) | Hingga 5 tahun, untuk mencegah penyalahgunaan berulang |
| Catatan persetujuan dan daftar larangan kirim email | Catatan persetujuan: selama masa akun ditambah batas waktu daluwarsa; entri larangan kirim: hingga Anda meminta kami menghapusnya |

Ketika tujuan berakhir, kami menghapus atau menganonimkan data secara tidak dapat dikembalikan.

## 7. Keamanan {#security}

Kami menggunakan langkah-langkah teknis dan organisasi yang sesuai dengan risiko: enkripsi saat transit, enkripsi data sensitif saat disimpan, kontrol akses dengan hak akses minimum, pengamanan autentikasi, pencatatan (logging), cadangan, manajemen kerentanan, dan kewajiban kerahasiaan staf. Tidak ada sistem yang sepenuhnya aman. Mohon gunakan kata sandi yang kuat dan unik, aktifkan autentikasi multi-faktor jika tersedia, dan segera beri tahu kami di [{{company.email}}](mailto:{{company.email}}) jika Anda menduga akun Anda telah dibobol. Lihat juga halaman [Keamanan & Pengungkapan Kerentanan]({{url.security}}) kami.

Jika suatu pelanggaran kemungkinan besar membahayakan hak dan kebebasan Anda, kami akan memberi tahu otoritas pengawas dalam waktu 72 jam sejak mengetahuinya jika diwajibkan, dan memberi tahu Anda tanpa penundaan yang tidak semestinya jika hukum mewajibkannya.

## 8. Anak-anak {#children}

{{#if feature.minors}}Layanan tidak ditujukan kepada anak di bawah 13 tahun, dan kami tidak dengan sengaja mengumpulkan data pribadi dari mereka. Pengguna berusia {{policy.min_age}} tahun ke atas yang belum mencapai usia dewasa hanya boleh menggunakan Layanan **dengan persetujuan orang tua atau wali**, yang dapat meninjau, memperbaiki, membatasi, atau menghapus data anak tersebut dan menarik persetujuan dengan menghubungi [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Kami hanya mengumpulkan data yang diperlukan untuk Layanan, tidak menggunakan data anak di bawah umur untuk periklanan perilaku, dan menerapkan pengaturan default yang sesuai usia (profil privat, komunikasi terbatas) jika memungkinkan. Jika hukum suatu negara menetapkan usia persetujuan digital yang lebih tinggi, kami mensyaratkan persetujuan orang tua di bawah usia tersebut.{{else}}Layanan tidak ditujukan kepada anak-anak. Anda harus berusia minimal {{policy.min_age}} tahun untuk memiliki akun. Kami tidak dengan sengaja mengumpulkan data pribadi dari siapa pun yang berusia di bawah {{policy.min_age}} tahun (atau di bawah usia persetujuan digital yang lebih tinggi di negara mereka; di Amerika Serikat, di bawah 13 tahun untuk keperluan COPPA). Jika Anda yakin seorang anak telah memberikan data pribadi kepada kami, hubungi [{{company.privacy_email}}](mailto:{{company.privacy_email}}) dan kami akan menghapusnya serta menutup akun tersebut. Jika orang tua atau wali telah secara sah menyetujui penggunaan oleh anak di bawah umur, persetujuan tersebut dapat ditarik kapan saja.{{/if}}

## 9. Situs dan layanan pihak ketiga {#third-parties}

Layanan dapat menautkan ke atau terintegrasi dengan situs, plug-in, dan aplikasi pihak ketiga, termasuk penyedia masuk. Kami tidak mengendalikan mereka dan tidak bertanggung jawab atas praktik privasi mereka; kebijakan mereka sendiri mengatur apa yang mereka kumpulkan. Putuskan integrasi di pengaturan akun Anda atau di pengaturan pihak ketiga tersebut.

## 10. Hak Anda {#rights}

Bergantung pada tempat tinggal Anda, Anda dapat:

- **mengakses** data Anda dan mendapatkan salinannya;
- **memperbaiki** data yang tidak akurat;
- **menghapus** data Anda ("hak untuk dilupakan");
- **membatasi** atau **mengajukan keberatan** terhadap pemrosesan, termasuk pemasaran langsung kapan saja;
- **memindahkan (porting)** data Anda ke penyedia lain dalam format yang dapat dibaca mesin;
- **menarik persetujuan** kapan saja;
- **tidak tunduk pada keputusan yang semata-mata otomatis** yang memiliki akibat hukum atau dampak signifikan serupa;
- **mengajukan keluhan** kepada otoritas pengawas.

**Menghapus akun Anda.** Anda dapat menghapus akun dan data pribadi Anda {{#if feature.mobile}}di dalam aplikasi (Pengaturan, lalu Akun, lalu Hapus akun), {{/if}}di pengaturan akun Anda di situs web kami, atau melalui email; kami tidak mewajibkan Anda menghubungi dukungan jika layanan mandiri tersedia. Penghapusan akun bersifat permanen setelah masa tenggang yang kami tampilkan kepada Anda. Menghapus instalasi aplikasi tidak menghapus akun Anda.

Untuk menggunakan hak, kirim email ke [{{company.privacy_email}}](mailto:{{company.privacy_email}}) atau gunakan pengaturan di akun Anda. Kami mungkin perlu memverifikasi identitas Anda dan, jika permintaan jelas tidak berdasar atau berlebihan, dapat membebankan biaya yang wajar atau menolak, sebagaimana diizinkan hukum. Kami menanggapi dalam **satu bulan** (dapat diperpanjang hingga dua bulan tambahan untuk permintaan yang kompleks; 45 hari berdasarkan hukum negara bagian AS, dapat diperpanjang 45 hari), dan memberi tahu Anda alasannya jika kami tidak dapat memenuhinya. Kami tidak akan membedakan perlakuan terhadap Anda karena menjalankan hak Anda.

### 10.1 Wilayah Ekonomi Eropa, Inggris Raya, Swiss

Semua hak di atas berlaku. Anda dapat mengajukan keluhan kepada otoritas di negara tempat Anda tinggal, bekerja, atau tempat masalah tersebut terjadi ([daftar otoritas EEA](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Inggris: [ICO](https://ico.org.uk); Swiss: [FDPIC](https://www.edoeb.admin.ch)). Otoritas utama kami adalah {{law.authority}}.

### 10.2 Serbia

Jika Undang-Undang Serbia tentang Perlindungan Data Pribadi berlaku, Anda memiliki hak yang setara dengan hak di atas, dan dapat mengajukan keluhan kepada Komisaris untuk Informasi Bersifat Publik dan Perlindungan Data Pribadi (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Amerika Serikat (California dan negara bagian lain) {#us-states}

Bagian ini melengkapi ketentuan di atas bagi penduduk California dan negara bagian AS lain yang memiliki undang-undang privasi komprehensif (termasuk Virginia, Colorado, Connecticut, Utah, Texas, Oregon, Montana, dan lainnya seiring mulai berlakunya).

- **Kategori yang dikumpulkan dalam 12 bulan terakhir:** pengenal (nama, email, alamat IP, pengenal daring); catatan pelanggan; informasi komersial (paket, pembelian); aktivitas internet atau jaringan; geolokasi perkiraan{{#if feature.location}} dan geolokasi presisi dengan izin Anda{{/if}}; konten yang Anda kirimkan; inferensi yang terbatas pada pengoperasian Layanan. Kami mengungkapkan hal-hal ini kepada penyedia layanan untuk tujuan bisnis dalam bagian 3.
- **Penjualan dan pembagian:** kami tidak menjual informasi pribadi dan tidak membagikannya untuk periklanan perilaku lintas konteks. Kami tidak dengan sengaja menjual atau membagikan data milik siapa pun yang berusia di bawah 16 tahun.
- **Informasi pribadi sensitif:** kami tidak menggunakannya untuk menyimpulkan karakteristik, dan tidak menggunakannya melebihi yang diperlukan untuk menyediakan Layanan.
- **Hak Anda:** mengetahui/mengakses, menghapus, memperbaiki, portabilitas, menolak penjualan/pembagian dan periklanan bertarget atau pemrofilan, membatasi penggunaan data sensitif, dan non-diskriminasi. Kami menghormati **Global Privacy Control** dan sinyal opt-out peramban serupa sebagai permintaan opt-out yang sah.
- **Agen resmi dan banding:** agen resmi dapat mengajukan permintaan dengan izin tertulis Anda. Jika kami menolak suatu permintaan, Anda dapat mengajukan banding dengan membalas keputusan kami; jika Anda tetap tidak puas, Anda dapat menghubungi jaksa agung negara bagian Anda.
- **California:** Anda dapat meminta daftar pihak ketiga yang kepadanya kami mengungkapkan informasi pribadi untuk pemasaran langsung mereka pada tahun kalender sebelumnya ("Shine the Light"); kami tidak melakukan pengungkapan seperti itu. Penduduk California di bawah 18 tahun yang merupakan pengguna terdaftar dapat meminta penghapusan konten yang mereka posting secara publik.

### 10.4 Brasil (LGPD)

Anda dapat meminta konfirmasi pemrosesan, akses, koreksi, anonimisasi, pemblokiran, atau penghapusan data yang tidak perlu atau berlebihan, portabilitas, informasi tentang entitas yang kami bagikan datanya, informasi tentang kemungkinan menolak persetujuan dan konsekuensinya, serta peninjauan atas keputusan otomatis. Anda dapat mengajukan keluhan kepada Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Wilayah lain

Jika Anda berada di tempat lain yang memiliki undang-undang perlindungan data, kami menghormati hak yang setara yang diberikan oleh undang-undang tersebut kepada Anda. Secara khusus:

| Wilayah | Yang kami tambahkan |
|---|---|
| **Kanada** (PIPEDA, Québec Law 25) | Anda dapat mengakses dan memperbaiki data Anda, menarik persetujuan, dan mengajukan keluhan kepada Office of the Privacy Commissioner atau Commission d'accès à l'information. Kontak privasi kami adalah orang yang bertanggung jawab atas perlindungan informasi pribadi; transfer ke luar Québec dinilai dan dilindungi. |
| **India** (DPDP Act 2023) | Anda dapat mengakses, memperbaiki, menghapus, dan menunjuk orang lain untuk menjalankan hak Anda jika Anda meninggal dunia atau tidak cakap, serta menggunakan kontak pengaduan kami di bawah ini; Anda dapat mengajukan keluhan kepada Data Protection Board. |
| **Australia, Selandia Baru** | Anda dapat meminta akses dan koreksi serta mengajukan keluhan kepada kami, kemudian kepada OAIC (Australia) atau Privacy Commissioner (Selandia Baru). |
| **Jepang, Korea Selatan, Singapura, Thailand, Malaysia, Türkiye, UEA, Arab Saudi, Afrika Selatan, Kenya, Nigeria, dan undang-undang sejenis** | Kami menerapkan hak dan perlindungan yang diwajibkan oleh undang-undang tersebut (akses, koreksi, penghapusan, keberatan, keluhan kepada otoritas setempat, perlindungan untuk transfer). Hubungi kami untuk menggunakannya. |
| **Tiongkok** | Layanan tidak ditujukan kepada orang di daratan Tiongkok; jangan gunakan Layanan untuk mengirimkan data pribadi orang di sana. |

**Kontak pengaduan dan privasi untuk semua wilayah:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Kami menangani permintaan dalam jangka waktu yang diizinkan oleh hukum yang berlaku.

## 11. Perubahan pada kebijakan ini {#changes}

Kami dapat memperbarui kebijakan ini untuk mencerminkan perubahan pada Layanan atau hukum. Untuk perubahan material, kami akan memberi pemberitahuan minimal {{policy.notice_days}} hari melalui email atau di dalam Layanan sebelum perubahan tersebut berlaku bagi Anda, dan meminta persetujuan baru jika hukum mewajibkannya. Tanggal "terakhir diperbarui" di atas menunjukkan versi terkini; versi sebelumnya tersedia atas permintaan.

## 12. Kontak {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
