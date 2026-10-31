---
doc: refunds
title: İade ve İptal Politikası
version: 1.1.1
updated: 2026-10-31
lang: tr
when: feature.payments
summary: İptalin nasıl yapılacağı, ne zaman cayma hakkı veya iade alabileceğiniz ve uygulama mağazaları üzerinden yapılan satın almalarda neler olduğu.
translation_of: 1.1.1
status: draft
---

# İade ve İptal Politikası

*Sürüm {{doc.version}}, son güncelleme {{doc.updated}}.*

Bu politika, [Hizmet Şartları]({{url.terms}}) kapsamının bir parçasıdır ve {{product.name}} için **{{company.name}}** ("biz") tarafından yapılan satın almalar için geçerlidir. Bu politika, zorunlu tüketici mevzuatı kapsamındaki haklarınızı hiçbir şekilde sınırlamaz.

## Nereden satın aldığınız önemlidir {#where}

- **Doğrudan bizden satın aldıysanız** (web sitemiz veya ödeme sayfamız): bu politika geçerlidir.
{{#if feature.merchant_of_record}}- **Ödeme sağlayıcımız{{#if payments.provider}} {{payments.provider}}{{/if}} aracılığıyla satın aldıysanız** (merchant of record): sağlayıcı siparişin satıcısıdır; ödemeyi, vergileri ve makbuzları o yönetir ve iadeleri kendi ödeme koşulları ile bu politikaya göre işler. Talepler bize veya sağlayıcıya gönderilebilir.
{{/if}}
- **Bir uygulama mağazası veya platform üzerinden satın aldıysanız** (Apple App Store, Google Play, konsol veya PC mağazaları): mağaza satış kaydındaki satıcıdır ve **iadeleri, iptalleri ve faturalandırmayı yönetir**. İadeyi mağazadan kendi süreciyle talep edin; bu ödemeleri biz iade edemeyiz, ancak olguların doğrulanmasında yardımcı olabiliriz ve mağaza iade ettiğinde satın alınan eşyayı iptal edebiliriz. Orada haklarınızı mağazanın kuralları ve yerel hukukunuz belirler.

{{#if feature.subscriptions}}
## Aboneliği iptal etmek {#cancel}

Hesap ayarlarınızdan{{#if feature.mobile}} (ya da aboneliği bir mağazadan yaptıysanız mağazanın abonelik ayarlarından){{/if}} ya da [{{company.email}}](mailto:{{company.email}}) adresine yazarak istediğiniz zaman iptal edebilirsiniz. İptal, gelecekteki yenilemeleri durdurur; ödediğiniz dönemin sonuna kadar erişiminiz devam eder. Politikada veya yasada aksi belirtilmedikçe kısmi dönemler için orantılı ücret iadesi yapmayız. İptal, kayıt olmak kadar kolaydır: hesabınızda doğrudan bir iptal düğmesi vardır; çağrı veya form gerekmez. Yasanın gerektirdiği durumlarda, yenilemeden veya deneme sürümünün ücretli plana dönüşmesinden önce hatırlatma göndeririz; bir yıl veya daha uzun planlar için yenilemeden 15 ile 45 gün önce ve yıllık bir hatırlatma göndeririz; hatırlatmada fiyat ve iptal yöntemi yer alır. Yenileme koşulları her zaman ödeme düğmesinin yanında gösterilir.
{{/if}}

## Tüketiciler için cayma hakkı (AB, Birleşik Krallık ve benzeri yasalar) {#withdrawal}

{{#if feature.consumers}}
AB'de, Birleşik Krallık'ta veya uzaktan yapılan sözleşmeler için cayma hakkı tanıyan başka bir ülkede tüketiciyseniz, sözleşme kurulduğu tarihten itibaren **{{policy.refund_days}} gün içinde** neden göstermeksizin satın almanızdan cayabilirsiniz.

**Dijital içerik ve dijital hizmetler.** Cayma süresi içinde bir dijital hizmet veya dijital içeriğin (örneğin erişim, krediler veya sanal eşyalar) sağlanmasını başlatmamızı isterseniz ve cayma hakkınızı kaybedebileceğinizi anladığınızı onaylarsanız:
- **fiziksel bir ortamda olmayan dijital içerik** için, sağlanmaya açık rızanızla başladığında cayma hakkınızı kaybedersiniz;
- **dijital bir hizmet** için, cayma süresi içinde yine de cayabilirsiniz; ancak bunu bize bildirdiğiniz ana kadar sağlanan kısım için orantılı bir ücret ödersiniz.

Bu rızayı ödeme sayfasında isteriz. Vermediyseniz tam cayma hakkı geçerlidir.

**Cayma işlevi.** Yasanın 19 Haziran 2026'dan itibaren gerektirdiği şekilde, hesabınızda ve sipariş onayında bir "Sözleşmeden cayın" işlevi bulunur: sözleşmeyi seçin, onaylayın; tarih ve saati belirten bir teyidi kalıcı bir ortamda (e-posta) alırsınız. Nedenini açıklamanız gerekmez.

**Caymanın diğer yolları.** Cayma kararınızı açık bir beyanla bildirebilirsiniz (örneğin [{{company.email}}](mailto:{{company.email}}) adresine e-posta göndererek); beyanınızda adınız, sipariş veya hesap bilgileriniz ve satın alma tarihi yer almalıdır. Aşağıdaki formu kullanabilirsiniz ama bunu yapmak zorunda değilsiniz. Kararınızı öğrendiğimiz tarihten itibaren **14 gün içinde** alındığını teyit eder ve aynı ödeme yöntemiyle size geri ödeme yaparız.

> **Örnek cayma formu** (yalnızca cayma istiyorsanız doldurup gönderin)
> Alıcı: {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Bu yolla, aşağıdaki hizmet/dijital içeriğin sağlanmasına ilişkin sözleşmemden/sözleşmelerimizden cayma kararımı/kararımızı bildiririm/bildiririz: ______; sipariş tarihi/teslim tarihi: ______; ad: ______; adres: ______; tarih: ______ (yalnızca kağıt üzerindeyse imza).
{{else}}
Hizmetlerimiz yalnızca işletmelere sunulmaktadır; bu nedenle yasal tüketici cayma hakları uygulanmaz. Tüketici olduğunuzu düşünüyorsanız bize ulaşın.
{{/if}}

## Diğer ülkeler {#other-countries}

Bazı yerler ek iptal veya iade hakları tanır (örneğin cayma süreleri, birkaç ABD eyaletindeki otomatik yenileme kuralları veya Avustralya, Yeni Zelanda ve Birleşik Krallık'taki yasal garantiler). Zorunlu olduklarında bunlar uygulanır ve bu politikadaki daha az elverişli hükümlerin yerine geçer.

## Ne zaman iade ederiz {#refunds}

Uygun olduğu şekilde tamamen veya kısmen şunları iade ederiz:

- **mükerrer veya hatalı bir ücret** ya da yetkilendirmediğiniz bir ücret (derhal bildirin; ayrıntı isteyebiliriz);
- hizmetin **sağlanamadığı** veya önemli ölçüde kusurlu olduğu ve makul sürede düzeltemediğimiz bir satın alma;
- kullanmadığınız (kullanılmamış krediler dahil) bir satın almayı **{{policy.refund_days}} gün içinde** iptal etmek isterseniz, herhangi bir yasal hak geçerli olmadığında takdirimize bağlı olarak;
- yazılı olarak kabul ettiğimiz diğer her şey.

Aksi halde ödenen ücretler, kısmi dönemler dahil olmak üzere iade edilemez; kullanılmış veya tüketilmiş eşyalar ve [Kabul Edilebilir Kullanım Politikası]({{url.acceptable_use}}) ihlali nedeniyle kapatılan hesaplar için de iade yapılmaz. İadeler, özgün ödeme yöntemine yapılır; yalnızca siz talep ederseniz kredi olarak iade edebiliriz.

{{#if feature.credits}}
## Krediler ve sanal eşyalar {#credits}

Kullanılmamış önceden ödenmiş krediler, yukarıdaki süre içinde iade edilebilir. Harcanmış veya tüketilmiş krediler ve sanal eşyalar, yasanın gerektirdiği durumlar dışında iade edilemez. Bir hizmeti sonlandırırsak, kalan ücretli bakiyeleri [Hizmet Şartları]({{url.terms}}) içinde açıklandığı şekilde{{#if feature.game}} ve [Oyun Kuralları]({{url.game_rules}}) içinde açıklandığı şekilde{{/if}} işleriz.
{{/if}}

## Ödeme itirazları (chargeback) ve uyuşmazlıklar {#chargebacks}

Bankanız veya kart kuruluşu nezdinde bir ücrete itiraz etmeden önce lütfen bizimle iletişime geçin: genellikle sorunu daha hızlı çözeriz. Geçerli bir ücret için itiraz açarsanız, sonuçlanana kadar hesabı askıya alabilir ve teslimat ile kullanım kanıtlarını ödeme sağlayıcısıyla paylaşabiliriz.

## Vergiler ve para birimi {#taxes}

İadeler, tahsil edilen vergiyi de kapsar. Başka bir para birimiyle ödeme yaptıysanız, kontrolümüz dışındaki kur hareketleri ve banka ücretleri nedeniyle iade edilen tutar farklı olabilir.

## Nasıl başvurulur {#contact}

[{{company.email}}](mailto:{{company.email}}) adresine hesap e-postanızı, sipariş veya makbuz numaranızı ve kısa bir açıklamayı içeren bir mesaj yazın. Mesajınıza yanıt vereceğiz. Konuyu çözemezsek yerel tüketici makamınıza başvurabilirsiniz{{#if consumer_dispute}} veya {{consumer_dispute}}{{/if}}.
