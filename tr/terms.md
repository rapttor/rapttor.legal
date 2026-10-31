---
doc: terms
title: Hizmet Şartları
version: 1.3.0
updated: 2026-10-31
lang: tr
translation_of: 1.3.0
status: draft
summary: {{product.name}} hizmetinin kullanımına ilişkin, siz ile {{product.name}} arasındaki sözleşme.
---

# Hizmet Şartları

*Sürüm {{doc.version}}, son güncelleme {{doc.updated}}.*

## 1. Sözleşme {#agreement}

Bu Hizmet Şartları ("**Şartlar**"), siz ile adresi {{company.address}}{{#if company.reg_id}}, tescil numarası {{company.reg_id}}{{/if}} olan **{{company.name}}** ("**{{product.name}}**", "biz") arasında bağlayıcı bir sözleşmedir. Şartlar, {{product.name}}, web sitelerimiz, uygulamalarımız, API'lerimiz, dokümantasyonumuz ve ilgili hizmetler ("**Hizmetler**") için erişiminizi ve bunların kullanımını düzenler.

Hesap oluşturarak, bir uygulama yükleyerek veya başka bir şekilde Hizmetleri kullanarak bu Şartları ve bunların dâhil ettiği belgeleri kabul etmiş olursunuz: [Gizlilik Politikası]({{url.privacy}}), [Kabul Edilebilir Kullanım Politikası]({{url.acceptable_use}}), [Çerez Politikası]({{url.cookies}}){{#if feature.processor_role}}, [Veri İşleme Ek Protokolü]({{url.dpa}}) (uygulanabildiği ölçüde){{/if}}{{#if feature.payments}}, [İade ve İptal Politikası]({{url.refunds}}){{/if}}{{#if feature.game}}, [Oyun Kuralları ve Sanal Eşyalar Politikası]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, [Uygulama Şartları]({{url.app_eula}}){{/if}} ve her türlü sipariş formu veya ürüne özgü şartlar. Kabul etmiyorsanız Hizmetleri kullanmayın.

Hizmetleri bir kuruluş adına kullanıyorsanız, o kuruluşu bağlamaya yetkili olduğunuzu teyit edersiniz ve "siz" ifadesi o kuruluşu da kapsar. Ürüne özgü şartlar veya imzalı bir sözleşme bu Şartlarla çelişirse, bunlar yalnızca o ürün veya müşteri bakımından geçerli olur.

{{#if feature.consumers}}
**Tüketiciler.** Hizmetleri tüketici olarak kullanıyorsanız, ikamet ettiğiniz ülkenin zorunlu tüketici koruma mevzuatı geçerliliğini sürdürür ve bu Şartlardaki hiçbir hüküm bu haklarınızı sınırlamaz. *(kurumsal müşteriler)* olarak işaretlenmiş bölümler yalnızca tüketici olmamanız hâlinde uygulanır.
{{/if}}

## 2. Uygunluk {#eligibility}

Hizmetleri yalnızca aşağıdaki koşulları sağlamanız hâlinde kullanabilirsiniz:

1. {{#if feature.minors}}en az **{{policy.min_age}}** yaşında olmanız ve yaşadığınız yerde reşit olma yaşına ulaşmadıysanız, sizin adınıza bu Şartları kabul eden ve kullanımınızdan ve satın alımlarınızdan sorumlu olan bir ebeveyninizin veya yasal vasinizin rızasına sahip olmanız (kanıt isteyebiliriz){{else}}en az **{{policy.min_age}}** yaşında olmanız ve bağlayıcı bir sözleşme yapma ehliyetine sahip olmanız{{/if}};
2. uygulanabilir hukuk uyarınca, yaptırım ve ihracat kontrolü mevzuatı dâhil, Hizmetlerden yararlanmanızın engellenmemiş olması (bölüm 22);
3. daha önce kurallarımızı ihlal ettiğiniz gerekçesiyle Hizmetlerden çıkarılmamış olmanız; yazılı olarak yeniden kabul etmeyi kabul etmediğimiz sürece; ve
4. bulunduğunuz yerde Hizmetleri hukuka uygun biçimde kullanmanız.
{{#if feature.age_gate}}5. istendiğinde, {{policy.age_topics|yaşa duyarlı içerik}} içeren özellikleri kullanmak için yaşadığınız yerin kurallarına göre en az **{{policy.age_gate}}** yaşında ve yasal yaşta olduğunuzu teyit etmeniz. Doğum tarihinizi istemiyoruz: teyidiniz kaydedilir. Bu doğru değilse hesabı kapatabilir ve verilerini silebiliriz.
{{/if}}{{#if feature.gambling}}6. istendiğinde, en az **{{policy.gambling_age}}** yaşında olduğunuzu, bulunduğunuz yerde kumarın yasal olduğunu ve kumar özelliklerini yalnızca kendiniz için kullandığınızı teyit etmeniz. Gerçek yaş ve kimlik doğrulaması isteyebilir, kumar özelliklerine erişimi hukukun veya lisanslarımızın gerektirdiği her yerde reddedebilir veya sonlandırabiliriz.
{{/if}}{{#if policy.excluded_regions}}7. istendiğinde, şu ülke veya bölgelerde bulunmadığınızı ve bu ülke veya bölgelerin vatandaşı veya ikametgâhı olmadığınızı teyit etmeniz: **{{policy.excluded_regions}}**. Bu ülke ve bölgelerde Hizmetlerimiz veya bu Şartlar yasal olmayabilir, uygulanamayabilir veya sunulmuyor olabilir. Gerçekte nerede olduğunuzu göremeyiz (örneğin bir VPN arkasındayken), bu nedenle teyidinize güveniriz; doğru değilse Hizmetleri kendi sorumluluğunuzda kullanırsınız, yaşadığınız yerdeki yerel hukuka uymaktan siz sorumlusunuz ve hesabı kapatabilir ve verilerini silebiliriz. Bu maddedeki hiçbir hüküm, yaşadığınız yerdeki hukuk uyarınca feragat edilemeyecek haklarınızı sınırlamaz.
{{/if}}

Yaş, kimlik veya yetki kanıtını istediğimiz zaman talep edebiliriz; kontrolü geçemeyen bir hesabı reddedebilir veya kapatabiliriz.

## 3. Hesaplar ve güvenlik {#accounts}

- Doğru ve güncel bilgi verin, bilgilerinizi güncel tutun. Aksi kararlaştırılmadıkça bir kişi veya tüzel kişilik için bir hesap geçerlidir; bir kısıtlamayı, sınırı, yasağı, denemeyi veya fiyatlandırma kuralını aşmak amacıyla ek hesap açmak yasaktır.
- Kimlik bilgilerinizi gizli tutun. Hesabınızı paylaşmayın, satmayın, kiralamayın veya devretmeyin. Plan aksini belirtmedikçe her koltuk tek bir adlandırılmış kişi içindir.
- Erişime izin verdiğiniz veya engelleyemediğiniz kişiler dâhil, hesabınızın altında gerçekleşen her şeden, bunun güvenliğinin ihlal edildiğini bize bildirene kadar siz sorumlusunuz. Yetkisiz erişimden şüpheleniyorsanız derhal [{{company.email}}](mailto:{{company.email}}) adresinden bize bildirin.
- Makul olarak güvenliğinin ihlal edildiğine veya kötüye kullanıldığına inandığımız bir hesap için daha güçlü kimlik doğrulama isteyebilir, kimlik bilgilerini sıfırlayabilir veya hesabı kilitleyebiliriz.
- Etkin olmayan ücretsiz hesaplar, dosyadaki e-posta adresine önceden bildirim yapıldıktan sonra kapatılabilir; ücretli hesaplar hareketsizlik nedeniyle kapatılmaz.
{{#if feature.anonymous}}- **Anonim hesaplar.** Bunu sunduğumuz yerlerde, Hizmetleri ilk kez kullandığınızda sizin için anonim bir hesap oluşturulur. Bu hesabın e-posta adresi yoktur; o tarayıcıyı veya cihazı kullanan herkes hesabı kullanabilir ve erişiminizi kaybederseniz hesabı sizin için kurtaramayız. Hesabı güvenceye almak ve kurtarmak için istediğiniz zaman bir e-posta adresi bağlayabilirsiniz: adresi, oraya gönderilen bir oturum açma bağlantısıyla doğrularız. Uzun süre kullanılmayan anonim hesaplar, bunun mümkün olduğu yerlerde Hizmetlerde bildirim yapıldıktan sonra silinebilir.
{{/if}}- **Hesap sahibi ve erişim.** Gönderdiğimiz oturum açma bağlantısıyla bir e-posta adresi üzerindeki kontrolünü doğrulayan ve bu Şartları kabul eden kişi hesap sahibidir ve hesapta yapılan seçimleri yapan kişi olarak kabul edilir. Bir kuruluş adına hareket ediyorsanız, onu bağlayabileceğinizi teyit edersiniz. Kuruluşunuzda başka kimlerin erişim sahibi olacağına siz karar verirsiniz (örneğin sınırlı rolleri olan operatörler); erişim verdiğiniz kişiler, onlara sunduğunuz içerikleri görebilir ve bu tercihten siz sorumlusunuz.

## 4. Lisans ve kısıtlamalar {#licence}

Bu Şartlara ve geçerli ücretlerin ödenmesine tabi olarak, süre boyunca Hizmetlere kendi dahili kişisel veya ticari amaçlarınız için erişmenize ve bunları kullanmanıza izin veren sınırlı, geri alınabilir, münhasır olmayan, devredilemez ve alt lisans verilemez bir lisans veririz. Bize teslim edilen yazılımlar lisanslanır, satılmaz. Biz ve lisans verenlerimiz, açıkça verilmeyen tüm hakları saklı tutarız.

Hukukun feragat edilemeyecek bir hak tanıdığı durumlar dışında, aşağıdakileri yapmamalı ve başkalarının yapmasına izin vermemelisiniz:

- Hizmetlerin kopyasını çıkarmak, değiştirmek, çevirmek veya türev eserler oluşturmak;
- Hizmetlerin kaynak kodunu, modellerini, ağırlıklarını, algoritmalarını veya herkese açık olmayan API'lerini tersine mühendislikle, derlemesini çözerek (decompile), söküm yoluyla (disassemble) elde etmeye veya türetmeye çalışmak;
- Hizmetleri yetkili kullanıcılarınız dışındaki üçüncü kişilere yeniden satmak, alt lisanslamak, kiralamak, hizmet bürosu olarak barındırmak veya bu kişilerin kullanımına sunmak;
- Teknik sınırları, lisanslamayı, ölçümlemeyi, erişim denetimlerini, hız sınırlarını veya güvenlik özelliklerini aşmak;
- Tescilli bildirimleri, atıfları veya açık kaynak lisans bildirimlerini kaldırmak veya değiştirmek;
- Hizmetleri veya çıktılarını rakip bir ürün geliştirmek veya eğitmek için kullanmak ya da yazılı onayımız olmadan performans sonuçlarını karşılaştırmak veya yayımlamak{{#if feature.ai}}, ya da dokümantasyonda yasakladığımız hâllerde Hizmetlerin çıktısından bir yapay zekâ modeli eğitmek, ince ayar yapmak veya damıtmak{{/if}};
- Hizmetlere otomatik yollarla (botlar, kazıyıcılar, tarayıcılar) erişmek; ancak belgelenmiş API'miz aracılığıyla ve şartlarına uygun olarak yapılan erişim bu kapsamın dışındadır.

[Kabul Edilebilir Kullanım Politikası]({{url.acceptable_use}}) ayrıntılı kurallar içerir ve bu Şartların bir parçasıdır. Açık kaynak bileşenleri kendi lisanslarıyla yönetilir ve bu lisanslar o bileşenler için geçerlidir.

## 5. Kabul edilebilir kullanım ve yaptırımlar {#acceptable-use}

Hizmetleri kullanımınızdan ve bunları kullanmasına izin verdiğiniz herkesin davranışından siz sorumlusunuz. Kötüye kullanım diğer kullanıcılara, üçüncü kişilere ve bize zarar verebilir. [Kabul Edilebilir Kullanım Politikası]({{url.acceptable_use}}) ve bölüm 17'de açıklandığı gibi hareket edebiliriz; bu; içeriği kaldırmayı, özellikleri kısıtlamayı, hız sınırlamayı, hesapları askıya almayı veya feshetmeyi, hak edişleri alıkoymayı, yetkililere bildirmeyi ve bölüm 21 uyarınca başvuru yollarını kullanmayı içerir.

## 6. İçeriğiniz {#your-content}

{{#if feature.ugc}}
"**İçeriğiniz**", Hizmetler üzerinden yüklediğiniz, gönderdiğiniz, yayımladığınız, bağladığınız veya ürettiğiniz her şeyi ifade eder{{#if feature.ai}}; buna istemler ve sizinle bizim aramızda, aldığınız çıktı da dâhildir{{/if}}.

- **Mülkiyet.** İçeriğiniz üzerindeki tüm haklar size aittir. Biz herhangi bir mülkiyet hakkı edinmeyiz.
- **Bize verilen lisans.** İçeriğinizi barındırmak, saklamak, çoğaltmak, işlemek, iletmek, uyarlamak (biçimlendirme, küçük resimler, çeviriler ve güvenlik kontrolleri için) ve görüntülemek üzere dünya çapında, münhasır olmayan, telif ödemesi gerektirmeyen bir lisans verirsiniz; bu lisans **yalnızca Hizmetleri işletmek, güvenceye almak, desteklemek ve geliştirmek ile bu Şartları uygulamak için gerekli olduğu ölçüde** geçerlidir. Lisans, içeriği Hizmetlerde sakladığınız sürece ve sonrasında sınırlı yedekleme ve yasal saklama süreleri boyunca geçerlidir. İçeriği herkese açık hâle getirdiğinizde lisans, seçtiğiniz kitleye göstermeyi de kapsar. Lisans, içeriği veya hesabınızı sildiğinizde sona erer; ancak bu süreler ve diğer kullanıcıların daha önce hukuka uygun olarak aldığı kopyalar saklıdır.
- **Taahhütleriniz.** İçeriğinizi göndermek ve bu lisansı vermek için gereken tüm hak, rıza ve izinlere sahip olduğunuzu ve bunları koruyacağınızı taahhüt edersiniz; bu, içinde tanımlanabilir olan herhangi bir kişiden alınanları da kapsar. İçeriğiniz ve izin verildiği ölçüde kullanımımız hiçbir hukuku veya hiçbir kişinin haklarını (telif hakkı, ticari marka, gizlilik, tanıtım hakkı, gizlilik yükümlülüğü, sözleşme) ihlal etmez; ve [Kabul Edilebilir Kullanım Politikası]({{url.acceptable_use}}) ile uyumludur.
- **Denetleme.** İçeriğinizi genel olarak izleme yükümlülüğümüz yoktur; ancak hukuka, Şartlara veya başkalarının haklarına makul olarak aykırı olduğuna inandığımız ya da hakkında geçerli bir bildirim aldığımız içerikleri inceleyebilir, kaldırabilir, kısıtlayabilir veya reddedebiliriz (bkz. [Telif Hakkı ve Yasa Dışı İçerik Bildirimleri]({{url.copyright}})). Gerektiği durumlarda (örneğin AB Dijital Hizmetler Yasası (EU Digital Services Act) uyarınca) gerekçelerimizi ve kararı nasıl itiraz edebileceğinizi size bildiririz.
- **Yedeklemeler.** Kendi kopyalarınızı saklamaktan siz sorumlusunuz. Bir plan açıkça yedekleme veya saklama içermedikçe, silinen veya kaybolan içeriği geri getireceğimizi taahhüt etmeyiz.
- **Toplu veriler.** Hizmetleri işletmek, güvenceye almak ve geliştirmek için sizi tanımlamayan veya İçeriğinizi açığa çıkarmayan kullanım verilerini kullanabiliriz.
{{else}}
Hizmetlere gönderdiğiniz her şey üzerindeki tüm haklar size aittir. Hizmetleri sağlamak, güvenceye almak ve desteklemek için gereken işlemeyi yapmamız amacıyla bize sınırlı lisansı verirsiniz ve bunu gönderme hakkınız olduğunu taahhüt edersiniz. Kendi kopyalarınızı saklamaktan siz sorumlusunuz.
{{/if}}

### Verileriniz ve dosyalarınız {#your-data}

Siz ve biz arasında, Hizmetlere koyduğunuz **veriler ve dosyalar size aittir ve bunlardan yalnızca siz sorumlusunuz**: bunları yükleme ve kullanma hakkına, doğruluklarına ve hukuka uygunluklarına ve bunlara kimin erişebileceğine dair seçimlerinize ilişkin olarak sorumlusunuz. Hizmetlerin çalışması için bunları talimatlarınız doğrultusunda saklar ve işleriz. Bu, bizim kendi yasal yükümlülüklerimizi (örneğin Hizmetleri güvenceye almak ve kişisel verileri korumak) sınırlamaz ve hukuk tarafından dışlanamayan hakları etkilemez.
{{#if feature.uploads}}
- **Telif hakkı ve diğer haklar.** Yüklediğiniz şeyin sahibi olduğunuzu veya gerekli tüm izinlere sahip olduğunuzu (görsellerde gösterilen kişilerden alınanlar dâhil) teyit edersiniz ve bundan doğan telif, kişilik, gizlilik veya diğer haklara ilişkin **taleplerden hesap verebileceğinizi** kabul edersiniz. Ayrıca [Telif Hakkı ve Yasa Dışı İçerik Bildirimleri]({{url.copyright}}) içinde açıklandığı gibi içeriği kaldırabilir ve hak sahipleri ile yetkililerle iş birliği yapabiliriz.
- **Varsayılan olarak özel.** Yüklediğiniz şey yalnızca size ve erişim verdiğiniz kişilere (örneğin kuruluşunuzun üyelerine veya operatörlerine) görünür. Yüklemelerinizi veya diğer içeriklerinizi şablon, kılavuz, örnek, pazarlama veya eğitim verisi gibi kamuya açık materyaller oluşturmak için kullanmayız; siz açıkça yayımlamanız veya paylaşmanız dışında, oturum açmamış kişilerin erişimine de sunmayız.
{{/if}}

## 7. Hizmetleri başkalarına sunuyorsanız {#end-users}

Hizmetleri kendi müşterilerinize, kullanıcılarınıza, çalışanlarınıza veya diğer üçüncü kişilere bir şey sunmak için kullanıyorsanız ("**Son Kullanıcılar**"), onlardan tek başına siz sorumlusunuz: topladığınız veya işlediğiniz her kişisel veri için gerekli hukuki dayanağa, bildirimlere ve rızalara sahip olmalısınız; onlarla kendi şartlarınızı kararlaştırmalı, taleplerini ve şikâyetlerini yönetmeli, [Kabul Edilebilir Kullanım Politikası]({{url.acceptable_use}}) ile uyumlu olmalarını sağlamalı ve bizim adımıza taahhütlerde bulunmamalısınız. Son Kullanıcıların fiil ve ihmallerinden, bunlar sizin fiil ve ihmalleriniz gibi sorumlusunuz. Son Kullanıcılara karşı hiçbir yükümlülüğümüz yoktur.

## 8. Yapay zekâ özellikleri {#ai}

{{#if feature.ai}}
- Çıktılar otomatik olarak üretilir; yanlış, eksik, saldırgan veya önyargılı olabilir ya da başkalarına verilen çıktılara benzeyebilir. Bunlara güvenmeden önce çıktıyı değerlendirmeli ve nasıl kullandığınızdan sorumlu olmalısınız.
- **Yapay zekâ özelliklerini, insanlar üzerinde hukuki veya benzer ölçüde önemli etkileri olan kararların tek dayanağı olarak kullanmayın** (örneğin istihdam, kredi, konut, sigorta, eğitim, sağlık hizmetleri, kolluk veya göç) ve nitelikli bir insan incelemesi olmadan tıbbi, hukuki, finansal veya güvenlik açısından kritik tavsiyeler için kullanmayın.
- Yapay zekâ tarafından üretilen veya değiştirilen içerikleri (sahte görüntüler ve sentetik medya dâhil), hukukun veya yayımladığınız platformun gerektirdiği ölçüde açıklamalısınız; yapay zekâ çıktısını, aldatıcı olacaksa insan tarafından üretilmiş gibi sunmamalısınız.
- Özellikleri, [Kabul Edilebilir Kullanım Politikası]({{url.acceptable_use}}) içindeki yasaklı herhangi bir kullanım için kullanmamalı veya güvenlik sistemlerini aşmaya çalışmamalısınız (bizim sistemlerimize veya başkalarınınkine karşı istem enjeksiyonu, jailbreak veya veri çıkarma saldırıları dâhil).
- Kullandığımız sağlayıcılar kendi kullanım politikalarını uygulayabilir; özellikleri buna göre kısıtlayabiliriz. Siz onay vermediğiniz sürece İçeriğinizi genel amaçlı modelleri eğitmek için kullanmayız (bkz. [Gizlilik Politikası]({{url.privacy}})).
{{else}}
Hizmetler şu anda yapay zekâ destekli özellikler içermemektedir. Bunları eklersek bu Şartları güncelleyecek ve bölüm 16 uyarınca bildirimde bulunacağız; bunlara ilişkin kurallar (doğruluk, insan incelemesi, açıklama ve yasaklı kullanımlar) uygulanacaktır.
{{/if}}

## 9. Ücretler ve ödeme {#fees}

{{#if feature.payments}}
- **Fiyatlar ve vergiler.** Fiyatlar satın alma sırasında gösterilir ve aksi belirtilmedikçe KDV, satış vergisi ve benzeri vergiler hariçtir; geçerli vergileri siz ödersiniz. Tüketiciler için fiyatlar, kanunen gerekli vergileri içerir.
{{#if feature.merchant_of_record}}- **Satış kaydı sahibi (merchant of record).** Siparişler, ödeme sağlayıcımız{{#if payments.provider}} {{payments.provider}}{{/if}} tarafından işlenir; bu sağlayıcı satıcı olarak hareket eder, ödemeyi ve vergileri tahsil eder ve fişi düzenler. Ödeme sağlayıcısının ödeme şartları, bu Şartlara ek olarak satın almaya uygulanır; ödemeler, faturalandırma, vergiler ve iadeler bu şartlar ile [İade ve İptal Politikası]({{url.refunds}}) uyarınca yönetilir.
{{/if}}- **Ödeme.** Ödeme yönteminize, yenilemeler ve kullanıma dayalı ücretler dâhil, ödenmesi gereken tüm tutarları tahsil etmek için bize ve ödeme işlemcimize yetki verirsiniz. Bu ödeme yöntemini kullanma hakkınız olduğunu taahhüt eder ve bilgilerinizi güncel tutmanız gerektiğini kabul edersiniz.
{{#if feature.subscriptions}}- **Ödemeden önce.** Ödeme düğmesinin yanında fiyatı, faturalandırma dönemini, aboneliğin otomatik olarak yenilendiğini, denemeden sonra neler olacağını, nasıl iptal edileceğini ve bu Şartlara, [İade ve İptal Politikası]({{url.refunds}}) ile [Gizlilik Politikası]({{url.privacy}}) bağlantılarını gösteririz. Bunları gördüğünüzü onaylayan kutuyu işaretlediğinizde veya düğmeye bastığınızda ücretlendirilirsiniz. Bu rızanın kaydını tutarız ve sakladığınız bir onay e-postası göndeririz.
- **Abonelikler.** Ödeme sırasında aksi belirtilmedikçe abonelikler, iptal edilene kadar aynı uzunlukta dönemler için otomatik olarak yenilenir. Yenileme tarihinden önce hesabınızdan veya e-posta yoluyla istediğiniz zaman iptal edebilirsiniz; iptal, ödenmiş dönemin sonunda yürürlüğe girer ve ücretler gün sayısına göre orantılanmaz. Kanunun gerektirdiği şekilde, bir deneme sürümü ücretliye dönüşmeden veya bir yenileme fiyatı değişmeden önce size önceden bilgi veririz.
- **Denemeler ve promosyonlar.** Kişi veya işletme başına bir deneme veya promosyon teklifi geçerlidir. Kötüye kullanım şüphesi olduğunda (birden fazla hesap, sahte kimlikler, aşılmış sınırlar) teklifi geri çekebilir veya reddedebiliriz.
{{/if}}{{#if feature.credits}}- **Krediler.** Önceden ödenmiş krediler, jetonlar veya uygulama içi para birimi, Hizmetleri kullanmaya yönelik sınırlı bir lisanstır; para değildir, nakit değeri yoktur, devredilemez, para karşılığında kullanılamaz veya alınıp satılamaz ve satın alma sırasında belirtildiği gibi sona erebilir. İhlal nedeniyle bir hesap kapatıldığında kullanılmayan krediler hak kaybına uğrar; diğer durumlarda iadeler aşağıdaki kurallara ve geçerli hukuka göre yapılır.{{#if feature.game}} Oyunlardaki sanal eşyalar [Oyun Kuralları ve Sanal Eşyalar Politikası]({{url.game_rules}}) ile yönetilir.{{/if}}
{{/if}}- **Fiyat değişiklikleri.** Fiyatları, en az {{policy.notice_days}} gün önceden bildirimde bulunarak ileriye dönük olarak değiştirebiliriz. Kabul etmiyorsanız, değişiklik yürürlüğe girmeden önce iptal edin.
- **Geç veya başarısız ödeme.** Tahsilatı yeniden deneyebilir, hesabı askıya alabilir veya düşürebilir ve makul tahsilat masraflarını ile vadesi geçmiş kurumsal faturalarda yasal faizi talep edebiliriz. Hizmetler, borç ödendiğinde yeniden sağlanır.
- **İtiraz ve sahtecilik.** Önce [{{company.email}}](mailto:{{company.email}}) adresinden bizimle iletişime geçmeden bir ödeme itirazı açmanız ya da sahte veya yetkisiz ödemeler, derhal askıya almaya, içeriğe erişimin kaybedilmesine ve itiraz edilen tutarın ile işlem ücretlerimizin geri alınmasına yol açabilir.
- **İadeler.** Hukukun size bir hak tanıdığı veya yazılı olarak başka bir şekilde belirttiğimiz durumlar dışında, ödenen ücretler iade edilmez; kısmi dönemler ve kullanılmayan özellikler de dâhildir. Hesabınızı ihlal nedeniyle askıya aldığımızda veya sonlandırdığımızda iade ödenmez.
{{#if feature.consumers}}- **İptal, cayma ve iadeler.** Tüketici cayma hakları, iptalin nasıl yapılacağı ve iadelerin ne zaman yapılacağı [İade ve İptal Politikası]({{url.refunds}}) içinde açıklanmıştır; bu politika bu Şartların bir parçasıdır. Hemen talebiniz üzerine sağlanan dijital içerik veya hizmetler için, kanunun gerektirdiği şekilde ödeme sırasında açık onayınızı ve kabulünüzü isteriz.
{{/if}}
{{else}}
Hizmetler şu anda ücretsiz sunulmaktadır. Gelecekte ücretli özellikler sunabiliriz; bunlar size açıkça sunulur ve onayınız olmadan asla ücretlendirilmezsiniz.
{{/if}}

## 10. API, entegrasyonlar ve üçüncü taraf hizmetleri {#integrations}

{{#if feature.api}}
API erişimi bu Şartlara, dokümantasyona ve varsa hız sınırlarına tabidir. API anahtarlarınızı ve kimlik bilgilerinizi korumalı, bunlarla yapılan tüm çağrılardan sorumlu olmalı, bunları paylaşmamalı, herkese açık kodlara gömmemeli veya erişimi yeniden satmak için kullanmamalısınız. Anahtarları değiştirebilir, sınırlayabilir veya iptal edebilir ve API sürümlerini makul bildirimle (güvenlik veya yasal nedenlerle gerekiyorsa daha kısa sürede) değiştirebilir veya kullanımdan kaldırabiliriz. API'yi, Hizmetleri başkaları için bozacak şekilde kullanmayın veya birçok anahtar ya da hesap kullanarak sınırları aşmaya çalışmayın.

{{/if}}
Hizmetler, kontrol etmediğimiz üçüncü taraf ürünler, web siteleri ve hizmetlerle çalışabilir. Bunları kullanımınız onların şartlarına tabidir. Bunların kullanılabilirliğinden veya değişikliklerinden ya da onlarla paylaşmayı seçtiğiniz verileri nasıl kullandıklarından sorumlu değiliz. Bir entegrasyonun desteğini istediğimiz zaman sonlandırabiliriz.

## 11. Beta ve ücretsiz özellikler {#beta}

Alfa, beta, önizleme, deneysel veya benzeri olarak etiketlenen özellikler ile ücretsiz katmanlar "olduğu gibi" sunulur, her zaman değişebilir veya geri çekilebilir, daha az güvenilir olabilir ve herhangi bir hizmet düzeyi taahhüdünün dışındadır. Kritik amaçlar için bunlara güvenmeyin.

## 12. Fikri mülkiyet {#ip}

Yazılım, tasarım, metin, grafikler, veriler, markalar, logolar ve dokümantasyon dâhil Hizmetler, bize veya lisans verenlerimize aittir ve telif hakkı, ticari marka ve diğer yasalarla korunmaktadır. Bu Şartlar size herhangi bir mülkiyet devretmez; Hizmetleri kullanmak için gerekli olanın dışında adlarımızı veya markalarımızı kullanma hakkı verilmez.

**Geri bildirim.** Öneri veya fikir gönderirseniz, bunları kısıtlama veya atıf olmaksızın kullanmamız için, hukukun izin verdiği ölçüde, süresiz, geri alınamaz, dünya çapında, telif ödemesi gerektirmeyen ve alt lisans verilebilen bir lisans vermiş olursunuz. Geri bildirimler üzerinde işlem yapma yükümlülüğümüz yoktur.

Telif hakkı ve yasa dışı içerik bildirimleri: bkz. [Telif Hakkı ve Yasa Dışı İçerik Bildirimleri]({{url.copyright}}).

## 13. Gizlilik (kurumsal müşteriler) {#confidentiality}

Her taraf, diğer tarafın kamuya açık olmayan ticari ve teknik bilgilerini gizli tutar, bunları yalnızca bu Şartlar kapsamındaki yükümlülüklerini yerine getirmek veya haklarını kullanmak için kullanır ve makul özenle korur. Bu, alıcının kusuru olmaksızın kamuya açık hâle gelen, zaten bilinen, bağımsız olarak geliştirilen veya kanun gereği açıklanması gereken bilgiler için geçerli değildir (mümkün ve hukuka uygun olduğunda önceden bildirimle). Bu yükümlülük, Şartların sona ermesinden sonra üç yıl boyunca geçerlidir ve ticari sırlar için süresizdir.

## 14. Gizlilik ve veri koruma {#privacy}

[Gizlilik Politikamız]({{url.privacy}}) kişisel verileri nasıl işlediğimizi açıklar. {{#if feature.processor_role}}Kişisel verileri sizin adınıza veri işleyen olarak işlediğimiz durumlarda [Veri İşleme Ek Protokolü]({{url.dpa}}) uygulanır ve bu Şartların bir parçasını oluşturur.{{/if}} Hizmetleri kullanırken veri koruma mevzuatına uymalısınız; bir özellik veya sözleşme açıkça izin vermedikçe özel kategorilerdeki veya düzenlemeye tabi verileri (sağlık, ödeme kartı, devlet kimlik numaraları, çocuklara ait veriler) göndermemelisiniz.

## 15. Erişilebilirlik, destek ve değişiklikler {#availability}

Yüksek erişilebilirlik hedefliyoruz, ancak kesintisiz veya hatasız çalışmayı garanti etmiyoruz. Makul ölçüde mümkün olduğunda bildirimde bulunarak bakım yapabilir; özellikleri değiştirebilir, ekleyebilir veya kaldırabiliriz. Önceden ödenmiş bir süre içinde ücretli bir özelliği önemli ölçüde azaltırsak, en az {{policy.notice_days}} gün önceden bildirimde bulunacağız ve makul olarak devam edemeyeceğiniz durumlarda, etkilenen önceden ödenmiş dönemin orantılı iadesini yapacağız. Destek, planınız bir hizmet düzeyi sözleşmesi içermedikçe, makul çaba esasıyla [{{company.email}}](mailto:{{company.email}}) adresinden sağlanır.

## 16. Bu Şartlardaki değişiklikler {#changes}

Bu Şartları yasal, güvenlik, ürün veya ticari nedenlerle güncelleyebiliriz. Önemli değişiklikler için, bunların size uygulanmasından önce e-posta yoluyla veya Hizmetlerde en az **{{policy.notice_days}} gün** önceden bildirimde bulunacağız. Kabul etmiyorsanız, Hizmetleri kullanmayı bırakabilir ve hesabınızı yürürlük tarihinden önce kapatabilirsiniz; ücretli planlar için bu tarihten sonraki dönem için ödenmiş ücretlerin orantılı iadesini talep edebilirsiniz. Yürürlük tarihinden sonra Hizmetleri kullanmaya devam etmeniz, güncellenmiş Şartları kabul ettiğiniz anlamına gelir. Kanunen gerekli olan değişiklikler veya hiçbir şeyi azaltmayan ve hiçbir yükümlülük eklemeyen değişiklikler hemen yürürlüğe girebilir. Değişiklikler, halihazırda derdest olan uyuşmazlıklara uygulanmaz.

## 17. Askıya alma ve fesih {#termination}

**Sizin tarafınızdan.** Hizmetleri kullanmayı istediğiniz zaman bırakabilir, hesabınızı ayarlarınızdan veya e-posta yoluyla kapatabilirsiniz. Ödenmiş ücretler, bölüm 9'da veya kanunda öngörülmedikçe iade edilmez.

**Bizim tarafımızdan, kolaylık amacıyla.** Ücretli planları {{policy.notice_days}} gün önceden bildirimle sonlandırabiliriz (önceden ödenmiş ücretlerin orantılı iadesiyle) ve makul bildirimle ücretsiz hizmetleri sonlandırabiliriz.

**Bizim tarafımızdan, haklı neden ile.** Hukukun izin verdiği ölçüde, önceden bildirimle veya bildirimsiz olarak erişiminizi kısıtlayabilir, askıya alabilir veya sonlandırabilir, içeriği kaldırabilir ya da hesabınızı derhal kapatabiliriz; eğer:

- bu Şartları veya Kabul Edilebilir Kullanım Politikasını ihlal ederseniz (yanıt, ciddiyet, tekrar ve riskle orantılı olur);
- kullanımınızın bize, diğer kullanıcılara veya üçüncü kişilere güvenlik, hukuki, düzenleyici, itibar veya finansal risk yarattığına makul olarak inanırsak;
- vadesi geldiğinde ödeme yapmazsanız;
- bir mahkeme, yetkili makam veya uygulanabilir hukuk bunu gerektirirse; veya
- hesabınız ele geçirilmiş, sahte veya terk edilmiş görünüyorsa.

Uygulanabilir ve hukuka uygun olduğunda nedenini size bildiririz ve sorunu düzeltmeniz veya yanıt vermeniz için fırsat tanırız. Hukukun gerektirdiği durumlarda (örneğin AB Dijital Hizmetler Yasası (EU Digital Services Act) uyarınca) gerekçe bildirimi ve itiraz yolu sunarız. İhlal nedeniyle askıya alır veya sonlandırırsak ücretler iade edilmez ve ödenmesi gereken tutarlar ödenmeye devam eder.

**Sonuçları.** Fesih üzerine lisansınız sona erer ve Hizmetleri kullanmayı bırakmanız gerekir. Talep etmeniz hâlinde, **{{policy.retention_account_days}} gün** içinde, teknik olarak mümkün olduğu ölçüde İçeriğinizi dışa aktarılabilir hâle getiririz (hukuka aykırı olduğunda veya başkalarına zarar vereceğinde değil). Bu süreden sonra, [Gizlilik Politikası]({{url.privacy}}) içinde açıklandığı gibi silme işlemi yaparız. Doğası gereği yürürlükte kalması gereken bölümler, bu arada 4, 6 (lisans sınırları ve taahhütleriniz), 9 (ödenmesi gereken tutarlar), 12, 13, 17-24 ve 26, yürürlükte kalmaya devam eder.

## 18. Garantiler ve sorumluluk reddi {#disclaimer}

Hizmetleri makul beceri ve özenle sunarız. **Bunun dışında, hukukun izin verdiği azami ölçüde, Hizmetler "olduğu gibi" ve "mevcut olduğu şekliyle" sunulur ve açık veya zımni diğer tüm garantileri reddederiz;** bunlar arasında satılabilirlik, belirli bir amaca uygunluk, ihlal etmeme, doğruluk, erişilebilirlik ile Hizmetlerin güvenli, hatasız, kesintisiz olacağına veya zararlı bileşenlerden arındırılmış olacağına dair garantiler yer alır. Çıktıları, üçüncü taraf içeriklerini veya elde ettiğiniz sonuçları garanti etmeyiz. Hizmetler, bir arızanın ölüme, bedensel zarara veya ağır hasara yol açabileceği yüksek riskli ortamlarda (örneğin tıbbi cihazlar, havacılık, nükleer veya yaşam destek sistemleri) kullanılmak üzere tasarlanmamıştır ve bu şekilde kullanamazsınız.

{{#if feature.consumers}}Tüketiciyseniz, dışlanamayan yasal haklarınızı saklı tutarsınız; örneğin AB ve Birleşik Krallık hukukuna göre dijital içerik ve hizmetler için yasal garanti ve başvuru yolları ile Avustralya Tüketici Hukuku (Australian Consumer Law) ve diğer yerlerdeki benzer yasalar uyarınca tüketici garantileri.{{/if}}

## 19. Sorumluluğun sınırlandırılması {#liability}

Bu Şartlardaki hiçbir hüküm, hukuk tarafından dışlanamayan veya sınırlandırılamayan sorumlulukları dışlamaz veya sınırlamaz; bunlar arasında ölüm veya bedensel zarar, hile veya kasıtlı kusur, ağır ihmal ve (tüketiciler için) zorunlu yasal başvuru yolları yer alır.

Bunun dışında, **hukukun izin verdiği azami ölçüde** ve kurumsal müşteriler için:

1. Hizmetlerden veya bu Şartlardan doğan ya da bunlarla bağlantılı olarak ortaya çıkan dolaylı, arızi, özel, sonuçsal, örnek teşkil edici veya cezai zararlardan ya da kâr, gelir, iş, itibar, beklenen tasarruf veya verilerin kaybından, bunların öngörülebileceği bildirilmiş olsa bile sorumlu değiliz; ve
2. Tüm talepler için toplam birikimli sorumluluğumuz, (a) talebe yol açan olaydan önceki **{{policy.liability_cap_months}} ay** içinde Hizmetler için bize ödediğiniz ücretler ile (b) EUR 100 tutarından hangisi büyükse, onunla sınırlıdır.

{{#if feature.consumers}}Tüketiciler için, ihlalimiz veya ihmalimizden kaynaklanan öngörülebilir kayıp veya zarardan sorumluyuz; ancak öngörülemeyen kayıplardan ve iş ile ilgili kayıplardan sorumlu değiliz.{{/if}}

Kontrolümüz dışındaki olayların (bölüm 24) neden olduğu arıza veya gecikmelerden sorumlu değiliz. Ücretsiz hizmetler, hukukun gerektirdiğinden fazla bir sorumluluk olmaksızın sunulur. Bu sınırlamalar, sorumluluğun hangi kaynaktan doğduğuna bakılmaksızın (sözleşme, haksız fiil, ihmal dâhil veya başka) ve bir çözüm yolunun temel amacını yerine getirememesi hâlinde dahi geçerlidir.

## 20. Tazminat {#indemnity}

Kurumsal müşteriyseniz; (a) İçeriğinizden veya verilerinizden, (b) sizin veya Son Kullanıcılarınızın bu Şartları veya hukuku ihlal etmesinden, (c) Hizmetleri kötüye kullanmanızdan veya (d) sizinle bir üçüncü kişi arasındaki bir uyuşmazlıktan doğan talepler, zararlar, kayıplar, cezalar ve giderlere (makul avukatlık ücretleri dâhil) karşı {{company.name}}, bağlı kuruluşlarını, yetkililerini, çalışanlarını ve temsilcilerini savunacak, tazmin edecek ve zarar görmelerini önleyeceksiniz. Herhangi bir talepten derhal haberdar ederiz, savunmayı yönetmenize izin veririz (biz de kendi masrafımızla katılabiliriz) ve bizim adımıza kusur kabul eden bir talebi, onayımız olmadan sonuçlandıramazsınız. {{#if feature.consumers}}Tüketiciler, yalnızca kendi ihlalleri nedeniyle yol açtıkları zarardan, hukukun öngördüğü ölçüde sorumludur.{{/if}}

## 21. Kötüye kullanım için başvuru yolları {#remedies}

Diğer haklara ek olarak ve hukukun izin verdiği ölçüde:

- **İhtiyati tedbir.** Bölüm 4, 5 veya 13'ün ihlalinin, tazminatla tam olarak giderilemeyecek zararlara yol açabileceğini kabul edersiniz; biz de gerçek bir zararı kanıtlamadan veya teminat göstermeden ihtiyati tedbir veya diğer hakkaniyete dayalı çareleri talep edebiliriz.
- **Kötüye kullanım maliyetleri.** Kötüye kullanımınız bize maliyet (ek altyapı, olay müdahalesi, soruşturma, geri ödeme talepleri, düzenleyici cezalar veya üçüncü kişilerin talepleri) yüklerse, makul ve belgelenmiş maliyetleri geri ödeyeceksiniz.
- **Kanıt ve iş birliği.** Kötüye kullanım şüphesi olan kayıtları ve içeriği koruyabilir; hukukun izin verdiği ölçüde ilgili taraflara, platformlara, kolluk kuvvetlerine veya düzenleyicilere açıklayabiliriz. Soruşturmalarımızla makul ölçüde iş birliği yaparsınız.
- **Bildirim.** Yasa dışı faaliyetleri (çocuk cinsel istismarı materyali, dolandırıcılık, tehdit, kötü amaçlı yazılım ve sistemlere saldırılar dâhil) yetkililere ve ilgili taraflara bildirebiliriz; hukukun gerektirdiği durumlarda bunu yaparız.
- **Alıkoyma ve mahsup.** Size borçlu olduğumuz tutarları (örneğin hak edişler), size borçlu olduğunuz veya kötüye kullanımdan doğan tutarlara karşılık alıkoyabilir, dondurabilir veya mahsup edebiliriz; hukuka tabidir.

## 22. İhracat, yaptırımlar ve yolsuzlukla mücadele {#export}

Hizmetleri, uygulanabilir ihracat kontrolü ve yaptırım mevzuatına aykırı şekilde; AB, Amerika Birleşik Devletleri, Birleşik Krallık ve BM dâhil, veya kapsamlı yaptırım uygulanan kişi ve ülkelere ya da onlar adına kullanamaz, ihraç edemez veya yeniden ihraç edemezsiniz. Siz ve kullanıcılarınızın herhangi bir yaptırım veya kısıtlanmış taraf listesinde olmadığını teyit edersiniz. Hizmetlerle bağlantılı olarak kimseyi uygunsuz biçimde etkilemek amacıyla değerli bir şey teklif etmez veya vermezsiniz.

## 23. Uygulanacak hukuk ve uyuşmazlıklar {#law}

Bu Şartlar ve bunlardan veya Hizmetlerden doğan ya da bunlarla bağlantılı her türlü uyuşmazlık ve talep (sözleşme dışı uyuşmazlıklar dâhil) şu hukuka tabidir: **{{law.governing}}**; hukuk ihtilafı kurallarına bakılmaksızın ve UN Convention on Contracts for the International Sale of Goods hariç tutularak.

**Önce gayriresmi çözüm.** Resmi kovuşturma başlatmadan önce, uyuşmazlığın açıklamasını içeren bir yazıyı [{{company.legal_email}}](mailto:{{company.legal_email}}) adresine gönderin ve en az 30 gün iyi niyetle çözmemize izin verin.

**Mahkemeler.** Zorunlu hukuk aksini öngörmedikçe, münhasır yetkili mahkeme: **{{law.venue}}**. Taraflardan her biri, herhangi bir yetkili mahkemede acil ihtiyati tedbir talep edebilir.

{{#if feature.consumers}}**Tüketiciler.** Tüketiciyseniz, ikamet ettiğiniz ülkenin mahkemelerinde dava açma hakkını ve orada geçerli zorunlu tüketici koruma mevzuatına dayanma hakkını da saklı tutarsınız; bu bölüm bu hakları ortadan kaldırmaz. {{#if consumer_dispute}}Şu merciye başvurarak mahkeme dışı uyuşmazlık çözümüne katılıyoruz: {{consumer_dispute}}.{{/if}}
{{/if}}**Zaman sınırı (kurumsal müşteriler).** Hukukun izin verdiği ölçüde, her talep, dayanağı olan olayın meydana gelmesinden itibaren {{policy.claim_months}} ay içinde açılmalıdır; aksi hâlde talepten vazgeçilmiş sayılır.

**Sınıf davası yok (kurumsal müşteriler, izin verildiği ölçüde).** Talepler yalnızca bireysel olarak ileri sürülebilir; sınıf, toplu veya temsili davalar kapsamında ileri sürülemez.

## 24. Mücbir sebep {#force-majeure}

Hiçbir taraf, makul kontrolü dışındaki olaylardan kaynaklanan gecikme veya yerine getirmemeden sorumlu değildir. Bu olaylar arasında doğal afet, savaş, terörizm, toplumsal huzursuzluk, salgın, hükümet eylemi, elektrik, internet veya telekomünikasyon arızası, bulut veya diğer üçüncü taraf altyapı sağlayıcılarının arızaları, makul güvenlik önlemlerine rağmen siber saldırılar, işçi uyuşmazlıkları (tarafın kendi personeli dışındakiler) veya tedarik aksaklıkları yer alır. Halihazırda sunulmuş hizmetler için ödeme yükümlülükleri bu nedenle ortadan kalkmaz. Böyle bir olay 60 günden uzun sürerse, taraflardan her biri etkilenen hizmetleri feshedebilir.

## 25. Elektronik iletişim ve bildirimler {#notices}

Bildirim ve sözleşmeleri elektronik olarak almayı kabul edersiniz. Bildirimleri hesabınızdaki e-posta adresine, Hizmetler içinde veya web sitemizde yayımlayarak yapabiliriz. Bize yapılacak bildirimler [{{company.legal_email}}](mailto:{{company.legal_email}}) adresine ve {{company.address}} adresine gönderilmelidir. Bir e-posta, geri dönüş (bounce-back) almadan gönderildikten 24 saat sonra; Hizmetlerde yayımlandığında veya gösterildiğinde alınmış sayılır.

## 26. Genel hükümler {#general}

- **Sözleşmenin bütünlüğü.** Bu Şartlar ve bunların atıfta bulunduğu belgeler, konularına ilişkin tam sözleşmeyi oluşturur ve önceki anlayışların yerini alır. Bu Şartlarda yer almayan hiçbir beyana dayanmadığınızı kabul edersiniz.
- **Kısmi geçersizlik.** Bir hüküm uygulanamaz ise, gerekli olan en az ölçüde sınırlandırılır veya amacına en yakın uygulanabilir bir hükümle değiştirilir; diğer hükümler yürürlükte kalır.
- **Feragat etmeme.** Bir hakkı kullanmamak, o hakkı feragat etmek anlamına gelmez.
- **Devir.** Yazılı onayımız olmadan haklarınızı veya yükümlülüklerinizi devredemez veya başkasına aktaramazsınız. Bu Şartları bir bağlı kuruluşumuza veya işimizin halefine devredebiliriz ve bunu size bildireceğiz.
- **İlişki.** Taraflar bağımsız yüklenici olarak hareket eder. Hiçbir şey ortaklık, temsilcilik, istihdam veya ortak girişim oluşturmaz.
- **Üçüncü kişiler.** Bu Şartları uygulama hakkı, 19 ve 20 numaralı bölümler kapsamındaki bağlı kuruluşlarımız, yetkililerimiz ve temsilcilerimiz dışında hiç kimseye ait değildir.
- **Dil.** Çeviriler kolaylık için sağlanmıştır; farklılık göstermeleri hâlinde, zorunlu hukuk aksini gerektirmedikçe İngilizce metin geçerlidir.
- **Yorum.** Başlıklar yalnızca kolaylık içindir. "Dâhil" ifadesi "sınırlama olmaksızın dâhil" anlamına gelir.
- **Tanıtım.** Logonuzla birlikte sizi müşterimiz olarak anabiliriz; e-posta ile itiraz etmediğiniz sürece. Tüketiciler asla adlandırılmaz.

## 27. İletişim {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Tescil no. {{company.reg_id}}{{/if}}{{#if company.tax_id}} · Vergi kimlik no. {{company.tax_id}}{{/if}}
E-posta [{{company.email}}](mailto:{{company.email}}) · Hukuki [{{company.legal_email}}](mailto:{{company.legal_email}}) · Destek [{{company.email}}](mailto:{{company.email}}) · Ayrıca bkz. [Yasal Bildirim]({{url.impressum}}).
