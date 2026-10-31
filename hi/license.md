---
doc: license
title: लाइसेंस
version: 1.0.0
updated: 2026-10-23
lang: hi
translation_of: 1.0.0
status: draft
when: license.id
summary: वह लाइसेंस जिसके अंतर्गत {{product.name}} जारी किया गया है।
---

# लाइसेंस

*संस्करण {{doc.version}}, अंतिम अद्यतन {{doc.updated}}.*

**{{product.name}}** को **{{license.holder}}** द्वारा **{{license.name}}** के अंतर्गत जारी किया गया है{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}।

{{license.summary}} *(यह सरल भाषा में दिया गया सारांश है और नीचे दिए लाइसेंस पाठ का विकल्प नहीं है। लाइसेंस का अंग्रेज़ी पाठ ही प्रामाणिक है।)*

{{#if license.url}}मूल पाठ: [{{license.url}}]({{license.url}})।{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

प्रश्न या अनुमति के अनुरोध: [{{company.legal_email}}](mailto:{{company.legal_email}})। {{product.name}} की वेबसाइट और सेवाओं का उपयोग हमारी [सेवा की शर्तों]({{url.terms}}) द्वारा शासित है।

## पूर्ण पाठ {#text}

```text
{{license.text}}
```
