---
doc: privacy
title: Gizlilik Politikası
version: 1.2.1
updated: 2026-10-31
lang: tr
translation_of: 1.2.1
status: draft
summary: Kişisel verilerin {{product.name}} tarafından nasıl toplandığı, kullanıldığı, paylaşıldığı ve korunduğu ile sahip olduğunuz haklar.
---

# Gizlilik Politikası

*Sürüm {{doc.version}}, son güncelleme {{doc.updated}}.*

## 1. Biz kimiz {#who-we-are}

Bu politika, kayıtlı adresi {{company.address}} olan **{{company.name}}** tarafından, {{product.name}} ile web sitelerimiz, uygulamalarımız, API'lerimiz ve ilgili hizmetler ("**Hizmetler**") kullanıldığında kişisel verilerin nasıl işlendiğini açıklar ("**{{product.name}}**", "**biz**").

Kişisel verilerin nasıl ve neden işleneceğine karar verdiğimiz durumlarda (örneğin hesabınız, web sitesi ziyaretleriniz ve faturalandırma), **veri sorumlusu** konumundayız. İletişim: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Veri koruma görevlimize [{{dpo.email}}](mailto:{{dpo.email}}) adresinden ulaşabilirsiniz.{{else}}Faaliyetlerimiz için kanunen gerekli olmadığından bir veri koruma görevlisi atamadık. Gizlilikle ilgili sorular [{{company.privacy_email}}](mailto:{{company.privacy_email}}) adresine iletilir.{{/if}}

{{#if eu_rep}}**AB temsilcisi (GDPR md. 27):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Birleşik Krallık temsilcisi (Birleşik Krallık GDPR md. 27):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Veri işleyen olduğumuz durumlar

Hizmetleri bir kuruluş aracılığıyla (işvereniniz veya bir kurumsal müşteri) kullanıyorsanız, o kuruluş genellikle Hizmetlere koyduğu verilerin veri sorumlusudur ve biz bu verileri onun adına [Veri İşleme Ek Protokolümüz]({{url.dpa}}) kapsamında işleriz. Bu durumda taleplerinizi o kuruluşa yöneltin; yanıt vermesi için ona yardımcı oluruz. Bu politika yalnızca kendi kontrolümüzdeki verilere (hesap yönetimi, faturalandırma, güvenlik ve web sitesi) uygulanır.
{{/if}}

## 2. Topladığımız veriler {#data-we-collect}

| Kategori | Örnekler | Kaynak |
|---|---|---|
| **Hesap verisi** | ad, e-posta, parola özeti, profil bilgileri, dil, tercihler | Siz |
| **İletişim ve destek verisi** | mesajlar, ekler, görüşme notları, geri bildirimler, anket yanıtları | Siz |
| **Gönderdiğiniz içerik** | dosyalar, metinler, ayarlar, Hizmetlere koyduğunuz her şey | Siz |
{{#if feature.anonymous}}| **Anonim hesap verisi** | rastgele bir hesap tanımlayıcısı, bunu tutan tarayıcı veya cihaz oturumu, oluşturduğunuz içerik ve daha sonra bağlarsanız bir e-posta adresi | Siz, otomatik olarak |
{{/if}}{{#if feature.uploads}}| **Yüklediğiniz dosyalar ve görseller** | dosyaların kendisi ve içindeki meta veriler (örneğin fotoğraflardaki kamera bilgileri veya konum) | Siz |
{{/if}}| **Rıza kayıtları** | kabul ettiğiniz şeyler (belgeler, yaş onayı, isteğe bağlı tercihler), sürüm, dil, tarih ve kabul şekliniz | Siz |
| **Kullanım ve cihaz verisi** | IP adresi, tarayıcı ve cihaz türü, işletim sistemi, dil, kullanılan sayfalar ve özellikler, zaman damgaları, yönlendiren bağlantı, çökme ve hata kayıtları | Otomatik olarak |
| **Çerezler ve benzeri teknolojiler** | çerezlerdeki, yerel depolamadaki ve SDK'lardaki tanımlayıcılar (bkz. [Çerez Politikası]({{url.cookies}})) | Otomatik olarak |
{{#if feature.payments}}| **Ödeme ve işlem verisi** | plan, faturalar, fatura adı ve adresi, vergi numarası, ödeme durumu; kart bilgileri ödeme işlemcimiz tarafından işlenir ve tarafımızca saklanmaz | Siz, ödeme işlemcisi |
{{/if}}{{#if feature.location}}| **Konum verisi** | yalnızca cihazınızda etkinleştirirseniz kesin konum; aksi halde IP adresinden tahmini konum | Cihazınız |
{{/if}}| **Üçüncü taraf hesap verisi** | seçtiğiniz bir oturum açma sağlayıcısının paylaştığı ad, e-posta, profil resmi ve tanımlayıcı | Üçüncü taraf, izninizle |
{{#if feature.ugc}}| **Kullanıcılar arası iletişim** | Hizmetler üzerinden gönderdiğiniz mesajlar ve etkileşimler | Siz |
{{/if}}{{#if feature.mobile}}| **Mobil cihaz verisi** | cihaz modeli ve işletim sistemi sürümü, uygulama sürümü, uygulama örneği ve anlık bildirim belirteçleri, dil ve saat dilimi, izin durumu; reklam tanımlayıcısı yalnızca izin verirseniz | Cihazınız |
{{/if}}{{#if feature.game}}| **Oyun verisi** | oyun ilerlemesi, puanlar, sıralamalar, eşyalar ve satın almalar, maç geçmişi, oyun içi sohbet ve (kullanılıyorsa) sesli bildirimler, hile önleme ve bütünlük sinyalleri, herkese açık profil (ad, avatar, sıralama) | Siz, otomatik olarak |
{{/if}}| **Güvenlik ve dolandırıcılık sinyalleri** | başarısız oturum açma denemeleri, kötüye kullanım bildirimleri, risk puanları, engellenen istekler | Otomatik olarak, diğer kullanıcılar |

Özel nitelikli kategorilerdeki kişisel verileri (sağlık, biyometrik veriler, siyasi veya dini görüşler ve benzerleri) bilerek toplamıyoruz. Bir özellik bunları açıkça istemedikçe lütfen göndermeyin. Yine de bu tür verileri gönderirseniz, bunun için hukuka uygun bir dayanağınız olmasından siz sorumlusunuz.

Kişisel veri vermek zorunda değilsiniz; ancak bunların bazıları (örneğin bir e-posta adresi) olmadan size hesap sağlayamayız.

### Kullanmadığımız izleme yöntemleri {#no-tracking}

Oturum veya ekran kaydı araçları, tuş vuruşu veya fare hareketi yakalama ve tarayıcı parmak izi çıkarma (browser fingerprinting) yöntemlerini **kullanmıyoruz**. {{#if feature.analytics}}Analizler yalnızca sizin rızanızla çalışır (bkz. [Çerez Politikası]({{url.cookies}})).{{else}}Analiz veya reklam izleyicileri kullanmıyoruz.{{/if}}
{{#if feature.external}}
### Üçüncü taraf kaynaklar ve IP adresiniz {#external}

Bazı özellikler diğer şirketlerin sunucularından içerik yükler (örneğin yazı tipleri, haritalar, videolar veya güvenlik doğrulamaları). Tarayıcınız bu tür bir içeriği çektiğinde **IP adresiniz ve teknik bilgileriniz o şirkete gönderilir**; bu şirket ülkenizin dışında olabilir. Bu kaynakları yalnızca her biri için çerez ayarlarında izin verdikten sonra yüklüyoruz; bu tercihinizi istediğiniz zaman değiştirebilirsiniz. Reddederseniz bir yedek çözüm kullanırız veya özellik kapalı kalır.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### E-postalar {#emails}

Hizmetlerin gerektirdiği e-postaları gönderiyoruz (oturum açma bağlantıları, makbuzlar, güvenlik bildirimleri){{#if feature.marketing}} ve yalnızca bunu kabul ettiğinizde veya kanunun izin verdiği durumlarda ürün haberlerini{{/if}}. Her e-posta, bizden e-posta almayı durdurmanızı sağlayan bir bağlantı içerir. {{#if feature.marketing}}İsteğe bağlı e-postalar tek tıklamayla hemen durdurulur. {{/if}}Tüm e-postaları engellemek oturum açma bağlantılarını da engelleyeceğinden, bu hizmetten **tüm** e-postaları engelleme talebiniz, adresin size ait olduğunu kanıtlayan bir bağlantının yer aldığı son bir e-postayla onaylanır. Ardından adresi e-posta sağlayıcımızdaki gönderim yapılmayacak listesine ekleriz ve tercihinizi karşılayabilmek için orada tutarız (yasal yükümlülük ve talebinize saygı gösterme konusundaki meşru menfaatimiz).
{{/if}}{{#if feature.age_gate}}
### Yaş onayı {#age}

{{policy.age_topics|yaşa duyarlı içerik}} içeren özellikleri kullanmadan önce en az {{policy.age_gate}} yaşında olduğunuzu ve ülkenizin kurallarına göre yasal yaşta olduğunuzu onaylamanızı isteriz. Doğum tarihinizi istemiyoruz; yalnızca onayınızı ve bunu ne zaman verdiğinizi saklarız. Bir kişinin yaş sınırının altında olduğunu öğrenirsek hesabı kapatır ve verileri sileriz.
{{/if}}{{#if feature.gambling}}
Kumar özellikleri için yaşınıza ve kimliğinize dair kanıt da isteyebilir ve bunun için bir doğrulama sağlayıcısı kullanabiliriz. Sonucu ve kanunun gerektirdiği kanıtları saklarız.
{{/if}}

## 3. Verilerinizi neden kullanıyoruz ve hukuki dayanaklarımız {#purposes}

| Amaç | Hukuki dayanak (GDPR / Birleşik Krallık GDPR) |
|---|---|
| Hizmetleri sağlamak, hesabınızı oluşturmak ve yönetmek, siparişleri işlemek | Sözleşme (md. 6(1)(b)) |
| Müşteri desteği ve Hizmetleri kullanımınızla ilgili iletişim | Sözleşme; meşru menfaatler |
| Güvenlik, kötüye kullanım ve dolandırıcılığın önlenmesi; [Hizmet Şartları]({{url.terms}}) ve [Kabul Edilebilir Kullanım Politikası]({{url.acceptable_use}}) hükümlerinin uygulanması | Meşru menfaatler (md. 6(1)(f)); yasal yükümlülük |
| Hata ayıklama, güvenilirlik, kapasite planlaması ve Hizmetlerin iyileştirilmesi | Meşru menfaatler |
{{#if feature.analytics}}| Kullanım analizleri | Kanunun gerektirdiği hallerde rıza, aksi halde meşru menfaatler |
{{/if}}{{#if feature.marketing}}| Ürün haberleri ve pazarlama e-postaları | Rıza veya kanunun izin verdiği ölçüde mevcut müşteriler için meşru menfaatler; istediğiniz zaman vazgeçebilirsiniz |
{{/if}}{{#if feature.ads}}| Reklam ve ölçümleme | Rıza |
{{/if}}| Rızalarınızın kaydını tutmak ve e-posta tercihlerinize uymak | Yasal yükümlülük; meşru menfaatler |
{{#if feature.external}}| IP adresinizi alan üçüncü taraf kaynakları yüklemek | Rıza (md. 6(1)(a) ve cihazınıza erişim için ePrivacy kuralları) |
{{/if}}| Muhasebe, vergi ve diğer yasal yükümlülükler | Yasal yükümlülük (md. 6(1)(c)) |
| Yasal talepleri ileri sürmek, kullanmak veya savunmak; yetkililere yanıt vermek | Meşru menfaatler; yasal yükümlülük |
| İş devirleri (birleşme, satın alma, varlık satışı) | Meşru menfaatler |

Meşru menfaatlere dayandığımız durumlarda bunları haklarınıza karşı tarttık; ayrıntı isteyebilir ve itiraz edebilirsiniz (bkz. bölüm 10). Rızaya dayandığımız durumlarda rızanızı istediğiniz zaman geri çekebilirsiniz; bu, önceki işlemeyi etkilemez.

{{#if feature.ai}}
### Yapay zekâ destekli özellikler {#ai}

Bazı özellikler makine öğrenimi veya üretken modeller kullanır. Bunları kullandığınızda, girdi olarak gönderdiğiniz içerik, çıktıyı üretmek üzere bizim veri işleyenimiz olarak hareket eden sağlayıcıya iletilir.

- Açıkça onay vermediğiniz sürece içeriğinizi genel amaçlı modelleri eğitmek için **kullanmıyoruz**; sağlayıcılarımızın da bunu yapmamasını şart koşuyoruz.
- Yapay zekâ çıktıları hatalı, eksik veya önyargılı olabilir. Hukuki, tıbbi, finansal veya diğer yüksek riskli kararlar için insan incelemesi olmadan bunlara güvenmeyin.
- Sizinle ilgili, yalnızca otomatik yöntemlerle hukuki veya benzer ölçüde önemli sonuçlar doğuran kararlar vermiyoruz. Kötüye kullanım nedeniyle yapılan hesap kısıtlamaları talep üzerine bir kişi tarafından incelenir (bkz. [Kabul Edilebilir Kullanım Politikası]({{url.acceptable_use}}), Uygulama).
- Yapay zekâ tarafından üretilen içerik, kanunun gerektirdiği yerlerde etiketlenir.
{{/if}}

## 4. Verilerinizi kimlerle paylaşıyoruz {#sharing}

**Kişisel verilerinizi satmıyoruz** ve bunu bağlamlar arası davranışsal reklamcılık için "paylaşmıyoruz"{{#if feature.ads}}; yalnızca Çerez Politikası'nda açıklanan ve rızanızın bulunduğu durumlar hariç{{/if}}.

Kişisel verileri yalnızca şu taraflarla paylaşırız:

- **Hizmet sağlayıcılar (veri işleyenler)**; yazılı sözleşmeler kapsamında talimatlarımız doğrultusunda hareket ederler: barındırma ve altyapı, e-posta iletimi, müşteri destek araçları, hata izleme{{#if feature.payments}}, ödeme işleme{{/if}}{{#if feature.ai}}, yapay zekâ sağlayıcıları{{/if}}. Güncel liste [Alt Veri İşleyen Listemizde]({{url.subprocessors}}) yer almaktadır.
- **Hizmetlere erişmek için kullandığınız platformlar ve uygulama mağazaları** (örneğin Apple, Google, konsol veya PC mağazaları); bunlar ödemeleri işler ve bize sınırlı satın alma ve hesap verisi sağlayabilir;
- **Diğer kullanıcılar veya kamu**, yalnızca sizin yönlendirmenizle (örneğin yayımlamayı seçtiğiniz içerik{{#if feature.ugc}} veya gönderdiğiniz mesajlar{{/if}});
- **Profesyonel danışmanlar** (avukatlar, denetçiler, sigortacılar), gizlilik yükümlülüğü altında;
- **Yetkililer, mahkemeler ve ilgili taraflar**; kanunun gerektirdiği hallerde, geçerli yasal süreçlere yanıt vermek, haklarını, güvenliğini veya mülkiyetini korumak ya da kötüye kullanım ve dolandırıcılığı araştırmak için. Talepleri geçerlilik açısından kontrol eder ve yasal olduğu durumlarda sizi bilgilendiririz;
- **Birleşme, satın alma, finansman veya varlık satışındaki halef**; bu halef bu politikaya uymak zorundadır. Verilerinizi etkileyen önemli kontrol değişikliklerini size bildiririz;
- **Başka herhangi bir kişi**, yalnızca sizin rızanızla.

## 5. Uluslararası aktarımlar {#transfers}

Faaliyetlerimizi şu ülkeden yürütüyoruz: {{company.country}}{{#if hosting.region}}; verileri esas olarak şu bölgede saklıyoruz: {{hosting.region}}{{/if}}. Bazı sağlayıcılar, Amerika Birleşik Devletleri dahil diğer ülkelerde veri işler. Avrupa Ekonomik Alanı (AEA), Birleşik Krallık veya İsviçre'den gelen kişisel veriler yeterlilik kararı bulunmayan bir ülkeye aktarıldığında tanınmış bir güvence kullanırız: alıcı sertifikalıysa AB-ABD Veri Gizliliği Çerçevesi (veya bunun Birleşik Krallık/İsviçre uzantıları), aksi halde Avrupa Komisyonu'nun **standart sözleşme hükümleri**; ilgili durumlarda bunlara eklenen Birleşik Krallık Uluslararası Veri Aktarımı Eki veya İsviçre değişiklikleri; ayrıca aktarım sırasında ve depolamada şifreleme gibi ek önlemler. İlgili güvencelerin bir kopyasını [{{company.privacy_email}}](mailto:{{company.privacy_email}}) adresinden isteyebilirsiniz.

## 6. Verileri ne kadar süreyle sakladığımız {#retention}

| Veri | Saklama süresi |
|---|---|
| Hesap verisi ve içerik | Hesabınız aktif olduğu sürece; ardından hesap kapatıldıktan sonra {{policy.retention_account_days}} gün içinde silinir veya anonimleştirilir |
| Sunucu ve güvenlik kayıtları | 90 gün |
| Yedekler | Döngüsel, en fazla 35 gün; silinen veriler bu döngü içinde yedeklerden çıkar |
| Faturalar ve muhasebe kayıtları | {{policy.retention_billing_years}} yıl veya kanunun gerektirdiği süre |
| Destek yazışmaları | Talep kapandıktan sonra en fazla 3 yıl; hesap daha uzun süre aktifse o süre boyunca |
| Rıza, tercih dışı bırakma ve hak talebi kayıtları | Uyumluluğu göstermek için gerektiği sürece |
| Bir yasal talep veya soruşturma için gereken veriler | Konu çözülene ve zamanaşımı süreleri dolana kadar |
| Kötüye kullanım ve yasaklama kayıtları (tanımlayıcı, neden, tarih) | Tekrarlanan kötüye kullanımı önlemek için en fazla 5 yıl |
| Rıza kayıtları ve e-posta gönderim yapılmayacak listesi | Rıza kayıtları: hesabın ömrü boyunca artı zamanaşımı süresi; gönderim yapılmayacak listesi girişleri: kaldırmamızı isteyene kadar |

Amaç sona erdiğinde verileri sileriz veya geri döndürülemez şekilde anonimleştiririz.

## 7. Güvenlik {#security}

Riske uygun teknik ve idari önlemler kullanıyoruz: aktarım sırasında şifreleme, hassas verilerin depolanmasında şifreleme, en az yetki ilkesine dayalı erişim kontrolü, kimlik doğrulama güvenceleri, kayıt tutma, yedekleme, güvenlik açıklarının yönetimi ve personelin gizlilik yükümlülükleri. Hiçbir sistem tamamen güvenli değildir. Lütfen güçlü ve benzersiz bir parola kullanın, sunulduğu yerlerde çok faktörlü kimlik doğrulamayı etkinleştirin ve hesabınızın ele geçirildiğinden şüpheleniyorsanız hemen [{{company.email}}](mailto:{{company.email}}) adresine bildirin. Ayrıca bkz. [Güvenlik ve Güvenlik Açığı Bildirimi]({{url.security}}) sayfamız.

Bir ihlalin haklarınızı ve özgürlüklerinizi riske atması muhtemelse, kanunun gerektirdiği yerlerde farkına vardığımız andan itibaren 72 saat içinde denetleyici makama, kanunun gerektirdiği durumlarda ise gecikmeksizin size bildiririz.

## 8. Çocuklar {#children}

{{#if feature.minors}}Hizmetler 13 yaşın altındaki çocuklara yönelik değildir ve onlardan bilerek kişisel veri toplamayız. {{policy.min_age}} yaş ve üzerindeki, henüz reşit olmayan kullanıcılar Hizmetleri yalnızca **bir ebeveynin veya vasinin rızasıyla** kullanabilir. Ebeveyn veya vasi, reşit olmayanın verilerini inceleyebilir, düzeltebilir, sınırlandırabilir veya silebilir ve [{{company.privacy_email}}](mailto:{{company.privacy_email}}) adresine başvurarak rızasını geri çekebilir. Yalnızca Hizmetler için gerekli verileri topluyoruz, reşit olmayanların verilerini davranışsal reklamcılıkta kullanmıyoruz ve mümkün olduğunda yaşa uygun varsayılan ayarları (gizli profiller, sınırlı iletişim) uygularız. Bir ülkede dijital rıza için daha yüksek bir yaş öngörülmüşse, bu yaşın altında ebeveyn rızası şartı koşarız.{{else}}Hizmetler çocuklara yönelik değildir. Hesap sahibi olmak için en az {{policy.min_age}} yaşında olmanız gerekir. {{policy.min_age}} yaşın altındaki kişilerden (veya ülkelerinde dijital rıza için daha yüksek bir yaş varsa o yaştan; Amerika Birleşik Devletleri'nde COPPA kapsamında 13 yaş) bilerek kişisel veri toplamayız. Bir çocuğun bize kişisel veri verdiğine inanıyorsanız [{{company.privacy_email}}](mailto:{{company.privacy_email}}) adresine yazın; verileri sileriz ve hesabı kapatırız. Bir ebeveyn veya vasi, reşit olmayan birinin kullanımına geçerli biçimde rıza vermişse, bu rıza istediği zaman geri çekilebilir.{{/if}}

## 9. Üçüncü taraf siteler ve hizmetler {#third-parties}

Hizmetler, oturum açma sağlayıcıları dahil üçüncü taraf sitelere, eklentilere ve uygulamalara bağlantı verebilir veya bunlarla entegre olabilir. Bunların üzerinde kontrolümüz yoktur ve gizlilik uygulamalarından sorumlu değiliz; neyi topladıklarını kendi politikaları belirler. Entegrasyonları hesap ayarlarınızdan veya üçüncü tarafın ayarlarından kaldırabilirsiniz.

## 10. Haklarınız {#rights}

Yaşadığınız yere bağlı olarak şunları yapabilirsiniz:

- verilerinize **erişmek** ve bir kopyasını almak;
- hatalı verileri **düzeltmek**;
- verilerinizi **silmek** ("unutulma hakkı");
- işlemeyi **kısıtlamak** veya buna **itiraz etmek**; doğrudan pazarlamaya istediğiniz zaman itiraz edebilirsiniz;
- verilerinizi makine tarafından okunabilir bir biçimde başka bir sağlayıcıya **taşımak**;
- rızanızı istediğiniz zaman **geri çekmek**;
- hukuki veya benzer ölçüde önemli sonuçlar doğuran, yalnızca otomatik kararlara **tabi olmamak**;
- bir denetleyici makama **şikâyette bulunmak**.

**Hesabınızı silmek.** Hesabınızı ve kişisel verilerinizi {{#if feature.mobile}}uygulama içinden (Ayarlar, ardından Hesap, ardından Hesabı sil), {{/if}}web sitemizdeki hesap ayarlarınızdan veya e-posta yoluyla silebilirsiniz; kendi kendine hizmet mevcutsa destek ekibiyle iletişime geçmenizi istemeyiz. Gösterdiğimiz bekleme süresinden sonra hesap silme işlemi kalıcıdır. Bir uygulamayı kaldırmak hesabınızı silmez.

Bir hakkınızı kullanmak için [{{company.privacy_email}}](mailto:{{company.privacy_email}}) adresine e-posta gönderin veya hesabınızdaki ayarları kullanın. Kimliğinizi doğrulamamız gerekebilir; talep açıkça dayanaksız veya aşırı ise, kanunun izin verdiği ölçüde makul bir ücret talep edebilir veya talebi reddedebiliriz. Talepleri **bir ay** içinde yanıtlarız (karmaşık talepler için iki ay daha uzatılabilir; ABD eyalet kanunları kapsamında 45 gündür ve 45 gün daha uzatılabilir). Talebi yerine getiremezsek nedenini size bildiririz. Haklarınızı kullandığınız için sizi ayrımcılığa tabi tutmayız.

### 10.1 Avrupa Ekonomik Alanı, Birleşik Krallık, İsviçre

Yukarıdaki haklarının tamamı geçerlidir. Yaşadığınız, çalıştığınız veya sorunun ortaya çıktığı ülkedeki makama şikâyette bulunabilirsiniz ([AEA makamlarının listesi](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Birleşik Krallık: [ICO](https://ico.org.uk); İsviçre: [FDPIC](https://www.edoeb.admin.ch)). Baş yetkili denetleyici makamımız: {{law.authority}}.

### 10.2 Sırbistan

Sırbistan Kişisel Verilerin Korunması Kanunu uygulandığında, yukarıdakilere eşdeğer haklarınız vardır. Kamusal Öneme Sahip Bilgilere Erişim ve Kişisel Verilerin Korunması Komiseri (Poverenik) [www.poverenik.rs](https://www.poverenik.rs) adresine şikâyette bulunabilirsiniz.

### 10.3 Amerika Birleşik Devletleri (Kaliforniya ve diğer eyaletler) {#us-states}

Bu bölüm, kapsamlı gizlilik yasalarına sahip Kaliforniya ve diğer ABD eyaletlerinin sakinleri için yukarıdakileri tamamlar (Virginia, Colorado, Connecticut, Utah, Teksas, Oregon, Montana ve yürürlüğe girdikçe diğerleri dahil).

- **Son 12 ayda toplanan kategoriler:** tanımlayıcılar (ad, e-posta, IP adresi, çevrim içi tanımlayıcılar); müşteri kayıtları; ticari bilgiler (planlar, satın almalar); internet veya ağ etkinliği; yaklaşık coğrafi konum{{#if feature.location}} ve izninizle kesin coğrafi konum{{/if}}; gönderdiğiniz içerik; yalnızca Hizmetleri işletmekle sınırlı çıkarımlar. Bunları, bölüm 3'teki iş amaçları için hizmet sağlayıcılara açıklarız.
- **Satış ve paylaşım:** kişisel bilgilerinizi satmıyor ve bağlamlar arası davranışsal reklamcılık için paylaşmıyoruz. 16 yaşın altındaki kişilerin verilerini bilerek satmıyor veya paylaşmıyoruz.
- **Hassas kişisel bilgiler:** bunları özellikleri çıkarmak için kullanmıyoruz ve Hizmetleri sunmak için gerekli olanın ötesinde kullanmıyoruz.
- **Haklarınız:** bilme ve erişim, silme, düzeltme, taşınabilirlik, satış ve paylaşıma ile hedefli reklamcılığa veya profillemeye karşı çıkma, hassas verilerin kullanımını sınırlama ve ayrımcılık yapılmaması. **Global Privacy Control** ve benzeri tarayıcı çıkış sinyallerini geçerli bir çıkış talebi olarak kabul ediyoruz.
- **Yetkili temsilciler ve itirazlar:** yetkili bir temsilci, yazılı izninizle talepte bulunabilir. Bir talebi reddedersek, kararımıza yanıt vererek itiraz edebilirsiniz; memnuniyetsizliğiniz sürerse eyaletinizin başsavcısıyla iletişime geçebilirsiniz.
- **Kaliforniya:** önceki takvim yılında doğrudan pazarlama amacıyla kişisel bilgilerinin açıklandığı üçüncü tarafların listesini ("Shine the Light") isteyebilirsiniz; böyle bir açıklamada bulunmuyoruz. 18 yaşın altındaki ve kayıtlı kullanıcı olan Kaliforniyalılar, herkese açık olarak paylaştıkları içeriğin kaldırılmasını isteyebilir.

### 10.4 Brezilya (LGPD)

Veri işlemenin teyit edilmesini, erişimi, düzeltmeyi, anonimleştirmeyi, engellemeyi veya gereksiz ya da aşırı verilerin silinmesini, taşınabilirliği, verileri paylaştığımız kuruluşlara ilişkin bilgileri, rızayı reddetme olasılığı ve bunun sonuçlarına ilişkin bilgileri ve otomatik kararların gözden geçirilmesini isteyebilirsiniz. Autoridade Nacional de Proteção de Dados (ANPD) makamına şikâyette bulunabilirsiniz.

### 10.5 Diğer bölgeler

Başka bir yerde ve veri koruma yasası olan bir ülkedeyseniz, yasanızın tanıdığı eşdeğer hakları karşılarız. Özellikle:

| Yer | Eklediklerimiz |
|---|---|
| **Kanada** (PIPEDA, Québec Yasası 25) | Verilerinize erişebilir ve bunları düzeltebilir, rızanızı geri çekebilir ve Gizlilik Komiserliği Ofisine veya Commission d'accès à l'information'a şikâyette bulunabilirsiniz. Gizlilik irtibat kişimiz, kişisel bilgilerin korunmasından sorumlu kişidir; Québec dışına yapılan aktarımlar değerlendirilir ve güvence altına alınır. |
| **Hindistan** (DPDP Yasası 2023) | Erişebilir, düzeltebilir ve silebilirsiniz; öldüğünüzde veya yetersiz hale geldiğinizde haklarınızı kullanması için bir kişi atayabilirsiniz; aşağıdaki şikâyet irtibatımızı kullanabilir ve Veri Koruma Kuruluna şikâyette bulunabilirsiniz. |
| **Avustralya, Yeni Zelanda** | Erişim ve düzeltme talep edebilir ve önce bize, ardından Avustralya için OAIC'ye veya Yeni Zelanda için Gizlilik Komiserine şikâyette bulunabilirsiniz. |
| **Japonya, Güney Kore, Singapur, Tayland, Malezya, Türkiye, BAE, Suudi Arabistan, Güney Afrika, Kenya, Nijerya ve benzeri yasalar** | Bu yasaların gerektirdiği hakları ve güvenceleri uygularız (erişim, düzeltme, silme, itiraz, yerel makama şikâyet, aktarımlar için güvenceler). Bunları kullanmak için bizimle iletişime geçin. |
| **Çin** | Hizmetler Çin anakarasındaki kişilere yönelik değildir; oradaki kişilerin kişisel verilerini göndermek için Hizmetleri kullanmayın. |

**Tüm bölgeler için şikâyet ve gizlilik irtibatı:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Talepleri, geçerli yasanın izin verdiği süre içinde yanıtlarız.

## 11. Bu politikadaki değişiklikler {#changes}

Bu politikayı Hizmetlerdeki veya yasalardaki değişiklikleri yansıtmak için güncelleyebiliriz. Önemli değişiklikler için, yürürlüğe girmelerinden en az {{policy.notice_days}} gün önce e-posta yoluyla veya Hizmetler içinde bildirim yaparız ve kanunun gerektirdiği yerlerde yeniden rıza isteriz. Yukarıdaki "son güncelleme" tarihi güncel sürümü gösterir; önceki sürümler talep üzerine sunulur.

## 12. İletişim {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
