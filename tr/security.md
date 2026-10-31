---
doc: security
title: Güvenlik ve Güvenlik Açığı Bildirimi
version: 1.0.1
updated: 2026-10-23
lang: tr
translation_of: 1.0.1
status: draft
summary: {{product.name}} içindeki güvenlik açıklarının nasıl bildirileceği ve iyi niyetli araştırmalar için koruma kuralları.
---

# Güvenlik ve Güvenlik Açığı Bildirimi

*Sürüm {{doc.version}}, son güncelleme {{doc.updated}}.*

Güvenliğe ciddi önem veriyoruz ve iyi niyetli araştırmacıların bildirimlerini memnuniyetle karşılarız. İletişim: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Kapsam {#scope}

Kapsam dahilinde olanlar: {{product.name}}, {{company.website}} ve işlettiğimiz kendi alt alan adlarımız, uygulamalarımız ve API'lerimiz. **Kapsam dışında olanlar:** üçüncü taraf hizmetler ve altyapı, diğer müşterilerin hesapları ve verileri, personelimize veya kullanıcılarımıza yönelik sosyal mühendislik veya oltalama (phishing), fiziksel saldırılar, hizmet reddi (denial-of-service) ve hacimsel testler, spam ve gerçekçi olmayan kullanıcı etkileşimi ya da güncel olmayan yazılım gerektiren bulgular.

## 2. Test kuralları {#rules}

İyi niyetle test ediyorsanız şunları yapmalısınız:

- yalnızca **kendi hesaplarınız ve verileriniz** üzerinde test edin; başkasının verilerine ulaşırsanız hemen durun ve bildirin; sorunu göstermek için gerekenden fazlasına erişmeyin, indirmeyin, değiştirmeyin veya saklamayın;
- Hizmetleri bozmayın, yüksek hacimli otomatik taramalar çalıştırmayın ve kalıcı olmak, başka sistemlere sıçramak veya veri sızdırmak için istismar kodu kullanmayın;
- sorunu, düzeltmemiz için makul bir süre tanımadan başkalarına açıklamayın veya ayrıntılarını yayımlamayın (bildiriminizden itibaren **90 gün**, ya da birlikte kabul edersek daha kısa süre);
- kanuna ve bu kurallara uyun.

## 3. Koruma güvencesi {#safe-harbour}

Bu politikaya uyarsanız araştırmanızı yetkili kabul ederiz; bu nedenle sizin hakkınızda yasal işlem başlatmaz, hesap feshi dahil herhangi bir işlem yapmaz veya desteklemeyiz ve sorunu anlamak ve çözmek için sizinle birlikte çalışırız. Bu, üçüncü taraflara karşı yasayı ihlal etmeyi yetkilendirmez; üçüncü bir taraf kendi başına hareket edebilir. Emin değilseniz önce sorun.

## 4. Ne göndermelisiniz {#report}

Güvenlik açığının net bir açıklamasını, etkilenen URL veya bileşeni, yeniden üretme adımlarını veya kanıt kavramını (proof of concept), etkisini, iletişim bilgilerinizi ve bir kredi isteyip istemediğinizi. Mümkünse hassas materyali şifreleyin; anahtarımızı isteyin.

## 5. Sonrasında ne olur {#process}

Bildirimleri onaylar, değerlendirir, sizi bilgilendirir, ciddiyetine göre düzeltir ve isterseniz size kredi veririz. Şu anda ücretli bir ödül programı yürütmüyoruz ve ödül vaat edemeyiz; ancak teşekkür veya hediye sunabiliriz.

## 6. Kullanıcılar: hesabınızı koruyun {#users}

Benzersiz ve güçlü bir parola kullanın, sunulduğu yerlerde çok faktörlü kimlik doğrulamayı etkinleştirin, yazılımlarınızı güncel tutun, oltalama girişimlerine karşı dikkatli olun ve ele geçirildiğinden şüphelendiğiniz durumları derhal [{{company.email}}](mailto:{{company.email}}) adresine bildirin. Güvenlik açığını kötüye kullanmak veya bu politika dışında test yapmak [Kabul Edilebilir Kullanım Politikası]({{url.acceptable_use}}) ihlali anlamına gelir.
