---
doc: subprocessors
title: उप-प्रसंस्करणकर्ताओं की सूची
version: 1.0.0
updated: 2026-10-23
lang: hi
translation_of: 1.0.0
status: draft
summary: वे तृतीय पक्ष जो {{product.name}} की ओर से व्यक्तिगत डेटा संसाधित करते हैं।
---

# उप-प्रसंस्करणकर्ताओं की सूची

*संस्करण {{doc.version}}, अंतिम अद्यतन {{doc.updated}}.*

{{product.name}} प्रदान करने के लिए, **{{company.name}}** ऐसे तृतीय पक्षों का उपयोग करता है जो हमारी ओर से व्यक्तिगत डेटा संसाधित कर सकते हैं। उनमें से हर एक लिखित डेटा-संरक्षण समझौते से बाध्य है। {{#if feature.processor_role}}यह सूची [डेटा प्रसंस्करण परिशिष्ट]({{url.dpa}}) का अनुलग्नक III है और [गोपनीयता नीति]({{url.privacy}}) में इसका उल्लेख किया गया है।{{else}}इसका उल्लेख [गोपनीयता नीति]({{url.privacy}}) में किया गया है।{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
वर्तमान सूची अनुरोध पर [{{company.privacy_email}}](mailto:{{company.privacy_email}}) पर उपलब्ध है।
{{/if}}

## परिवर्तन {#changes}

किसी उप-प्रसंस्करणकर्ता को जोड़ने या बदलने से पहले हम कम से कम **{{policy.notice_days}} दिन** की सूचना देते हैं, इस पृष्ठ को अद्यतन करके (“अंतिम अद्यतन” तिथि देखें) और उन ग्राहकों को ईमेल द्वारा जिन्होंने [{{company.privacy_email}}](mailto:{{company.privacy_email}}) पर सदस्यता ली है। {{#if feature.processor_role}}ग्राहक DPA में बताए गए अनुसार उचित डेटा-संरक्षण आधारों पर आपत्ति कर सकते हैं।{{/if}}
