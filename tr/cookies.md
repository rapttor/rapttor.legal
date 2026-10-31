---
doc: cookies
title: Çerez Politikası
version: 1.1.0
updated: 2026-10-31
lang: tr
translation_of: 1.1.0
status: draft
summary: {{product.name}} tarafından hangi çerezlerin ve benzeri teknolojilerin, neden kullanıldığı ve bunların nasıl kontrol edileceği.
---

# Çerez Politikası

*Sürüm {{doc.version}}, son güncelleme {{doc.updated}}.*

Bu politika, **{{company.name}}** tarafından {{product.name}} ve diğer Hizmetlerimizde çerezlerin ve benzeri teknolojilerin nasıl kullanıldığını açıklar. Bunlar aracılığıyla toplanan kişisel veriler, [Gizlilik Politikası]({{url.privacy}})’nda açıklandığı şekilde işlenir.

## 1. Nedir {#what}

Çerezler, bir web sitesi tarafından cihazınızda saklanan küçük dosyalardır. "Benzeri teknolojiler" arasında yerel ve oturum depolaması, cihaz tanımlayıcıları, mobil uygulamalardaki SDK'lar, piksel etiketleri ve parmak izi çıkarmaya benzer sinyaller bulunur. Bunların tümü için "çerezler" sözcüğünü kullanıyoruz.

## 2. Kullandığımız kategoriler {#categories}

| Kategori | Amaç | Rıza gerekli mi? |
|---|---|---|
| **Kesinlikle gerekli** | Oturumunuzun açık kalmasını sağlar, bir oturum için sepetinizi veya ayarlarınızı hatırlar, dolandırıcılığa ve CSRF saldırılarına karşı korur, sunucu yükünü dengeler, çerez tercihlerinizi saklar | Hayır: Hizmetlerin çalışması veya istediğiniz şeyin sunulması için zorunludur |
| **Tercihler** | Dil, tema, düzen ve benzeri seçimlerinizi hatırlar | Evet; istediğiniz bir özellik için kesinlikle gerekli olmadığı sürece |
{{#if feature.analytics}}| **Analiz** | Hizmetlerin nasıl kullanıldığını ölçer ve hataları bulur, böylece onları iyileştirebiliriz | Evet (kanunun gerektirdiği yerlerde) |
{{/if}}{{#if feature.ads}}| **Reklam / pazarlama** | İlgili reklamları gösterir ve ölçer, tekrarları sınırlar ve siteler ile uygulamalar arasındaki etkinliği ilişkilendirir | Evet |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Şu anda **yalnızca kesinlikle gerekli ve tercih çerezleri** kullanıyoruz; analiz veya reklam çerezi kullanmıyoruz.{{/unless}}{{/unless}}

## 3. Çerezlerin ayrıntıları {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Tam çerez adları, sağlayıcıları ve süreleri çerez ayarları penceresinde listelenir ve [{{company.privacy_email}}](mailto:{{company.privacy_email}}) adresinden talep üzerine sunulur.
{{/if}}

## 4. Seçimleriniz {#choices}

- **Rıza bildirimi / ayarlar.** Rıza gerektiğinde, kesinlikle gerekli olmayan çerezleri ayarlamadan önce size sorarız; reddetme seçeneği, kabul etme seçeneği kadar kolay olur. Seçiminizi, alt bilgideki çerez ayarları bağlantısı üzerinden istediğiniz zaman değiştirebilir veya geri çekebilirsiniz. Geri çekme, önceki işlemeyi etkilemez.
- **Tarayıcı denetimleri.** Çoğu tarayıcı çerezleri engellemenize veya silmenize izin verir; genellikle Ayarlar → Gizlilik altında bulunur. Kesinlikle gerekli çerezleri engellemek oturum açmayı ve diğer özellikleri bozabilir.
- **Oturum kaydı yok.** Oturum tekrarı (session-replay) veya ekran kaydı araçları kullanmıyoruz.
{{#if feature.external}}- **Üçüncü taraf kaynaklar.** Bir kaynak (örneğin yazı tipleri, haritalar veya videolar) başka bir şirketin sunucusundan yüklendiğinde, IP adresiniz o şirkete gönderilir. Her kaynak için çerez ayarlarında ayrıca rıza isteriz ve siz izin verene kadar yüklemeyiz; tercihinizi istediğiniz zaman değiştirebilirsiniz.
{{/if}}- **Sinyaller.** Global Privacy Control (GPC) ve benzeri tarayıcı çıkış sinyallerini, kesinlikle gerekli olmayan izlemeyi ve kişisel verilerin satışını/paylaşımını reddetme olarak kabul ediyoruz.
{{#if feature.ads}}- **Reklam tercihleri.** Cihaz ayarlarınızdan (reklam tanımlayıcınızı sıfırlayarak veya sınırlandırarak) ve youronlinechoices.eu veya optout.aboutads.info gibi araçlarla ilgi alanına dayalı reklamlardan çıkabilirsiniz. Yine reklam görürsünüz, ancak daha az ilgili olanları.
{{/if}}
## 5. Ne kadar süre geçerli kalırlar {#duration}

Oturum çerezleri tarayıcıyı kapattığınızda sona erer. Kalıcı çerezler tabloda gösterilen süre boyunca, ancak hiçbir durumda kanunun önerdiğinden (genellikle analiz ve reklam rızası için en fazla 13 ay, ki bunu yenilemenizi isteriz) uzun süre kalmaz.

## 6. Üçüncü taraflar {#third-parties}

Bazı çerezler, kullandığımız hizmetlerin (analiz, gömülü medya, ödeme, destek sohbeti) üçüncü tarafları tarafından ayarlanır. Bunlar kendi politikaları kapsamında hareket eder; bağımsız veri sorumlusu olduklarında onların politikalarını okumanızı öneririz. Bunları yukarıdaki tabloda listeliyoruz.
{{#if table.external}}
Yüklendiklerinde IP adresinizi alan kaynaklar:

{{table.external}}
{{/if}}

## 7. Değişiklikler {#changes}

Kesinlikle gerekli olmayan çerezler ekler veya değiştirirsek, bu politikayı güncelleriz ve gerektiğinde yeniden rıza isteriz. Sorularınız için: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
