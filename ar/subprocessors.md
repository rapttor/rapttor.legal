---
doc: subprocessors
title: قائمة المعالجين الفرعيين
version: 1.0.0
updated: 2026-10-23
lang: ar
translation_of: 1.0.0
status: draft
summary: أطراف ثالثة تعالج البيانات الشخصية نيابةً عن {{product.name}}.
---

# قائمة المعالجين الفرعيين

*الإصدار {{doc.version}}، آخر تحديث {{doc.updated}}.*

لتقديم {{product.name}}، تستعين **{{company.name}}** بالأطراف الثالثة التالية التي قد تعالج البيانات الشخصية نيابةً عنا. ويرتبط كل منها باتفاقية حماية بيانات مكتوبة. {{#if feature.processor_role}}تُعدّ هذه القائمة الملحق الثالث لـ[ملحق معالجة البيانات]({{url.dpa}})، وتُشار إليها في [سياسة الخصوصية]({{url.privacy}}).{{else}}وتُشار إليها في [سياسة الخصوصية]({{url.privacy}}).{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
تتوفر القائمة الحالية عند الطلب على [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## التغييرات {#changes}

نقدّم إشعارًا مدته **{{policy.notice_days}} يومًا** على الأقل قبل إضافة معالج فرعي أو استبداله، وذلك بتحديث هذه الصفحة (تحقق من تاريخ "آخر تحديث") وبإرسال بريد إلكتروني إلى العملاء المشتركين على [{{company.privacy_email}}](mailto:{{company.privacy_email}}). {{#if feature.processor_role}}يجوز للعملاء الاعتراض لأسباب معقولة تتعلق بحماية البيانات على النحو المنصوص عليه في ملحق معالجة البيانات.{{/if}}
