---
doc: subprocessors
title: Alt Veri İşleyen Listesi
version: 1.0.0
updated: 2026-10-23
lang: tr
translation_of: 1.0.0
status: draft
summary: {{product.name}} adına kişisel veri işleyen üçüncü taraflar.
---

# Alt Veri İşleyen Listesi

*Sürüm {{doc.version}}, son güncelleme {{doc.updated}}.*

{{product.name}} hizmetini sunmak için **{{company.name}}**, adımıza kişisel veri işleyebilecek aşağıdaki üçüncü taraflardan yararlanır. Bunların her biri yazılı bir veri koruma sözleşmesiyle bağlıdır. {{#if feature.processor_role}}Bu liste, [Veri İşleme Ek Protokolü]({{url.dpa}}) için Ek III niteliğindedir ve [Gizlilik Politikası]({{url.privacy}}) içinde anılmaktadır.{{else}}Bu liste, [Gizlilik Politikası]({{url.privacy}}) içinde anılmaktadır.{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
Güncel liste, talep üzerine [{{company.privacy_email}}](mailto:{{company.privacy_email}}) adresinden sağlanır.
{{/if}}

## Değişiklikler {#changes}

Bir alt veri işleyeni eklemeden veya değiştirmeden en az **{{policy.notice_days}} gün** önce bildirimde bulunuruz; bunu bu sayfayı güncelleyerek ("son güncelleme" tarihini kontrol edin) ve [{{company.privacy_email}}](mailto:{{company.privacy_email}}) adresine abone olmuş müşterilere e-posta göndererek yaparız. {{#if feature.processor_role}}Müşteriler, Veri İşleme Ek Protokolünde belirtildiği gibi makul veri koruma gerekçeleriyle itiraz edebilir.{{/if}}
