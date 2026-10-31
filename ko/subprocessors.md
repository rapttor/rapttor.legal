---
doc: subprocessors
title: 재처리자 목록
version: 1.0.0
updated: 2026-10-23
lang: ko
translation_of: 1.0.0
status: draft
summary: {{product.name}}의 위탁을 받아 개인정보를 처리하는 제3자.
---

# 재처리자 목록

*버전 {{doc.version}}, 최종 업데이트 {{doc.updated}}.*

{{product.name}} 제공을 위하여 당사(**{{company.name}}**)는 당사를 대신하여 개인정보를 처리할 수 있는 다음의 제3자를 이용합니다. 이들 각각은 서면 데이터 보호 계약에 구속됩니다. {{#if feature.processor_role}}이 목록은 [개인정보 처리 위탁 계약]({{url.dpa}})의 부속서 III이며, [개인정보 처리방침]({{url.privacy}})에서 참조됩니다.{{else}}이 목록은 [개인정보 처리방침]({{url.privacy}})에서 참조됩니다.{{/if}}

{{#if table.subprocessors}}
{{table.subprocessors}}
{{else}}
현재 목록은 [{{company.privacy_email}}](mailto:{{company.privacy_email}})에 요청하시면 받아보실 수 있습니다.
{{/if}}

## 변경 사항 {#changes}

새로운 재처리자를 추가하거나 기존 재처리자를 교체하기 전에, 당사는 최소 **{{policy.notice_days}}일**의 사전 통지를 제공합니다. 이 페이지를 업데이트하며("최종 업데이트" 날짜를 확인하십시오), 구독을 신청하신 고객에게는 이메일로 알려 드리며, 구독 신청 주소는 [{{company.privacy_email}}](mailto:{{company.privacy_email}})입니다. {{#if feature.processor_role}}고객은 위탁 계약에 명시된 대로 합리적인 개인정보 보호상의 근거에 따라 이의를 제기할 수 있습니다.{{/if}}
