---
doc: license
title: 라이선스
version: 1.0.0
updated: 2026-10-23
lang: ko
translation_of: 1.0.0
status: draft
when: license.id
summary: {{product.name}} 배포에 적용되는 라이선스입니다.
---

# 라이선스

*버전 {{doc.version}}, 최종 업데이트 {{doc.updated}}.*

**{{product.name}}**의 배포 주체는 **{{license.holder}}**이며, 배포 라이선스는 **{{license.name}}**{{#if license.spdx}}(SPDX: `{{license.spdx}}`){{/if}}입니다.

{{license.summary}} *(이것은 아래 라이선스 전문을 대체하지 않는 평이한 요약입니다.)*

{{#if license.url}}정식 전문: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

질문 또는 사용 허가 요청: [{{company.legal_email}}](mailto:{{company.legal_email}}). {{product.name}} 웹사이트 및 서비스의 이용은 [이용약관]({{url.terms}})에 따릅니다.

## 전문 {#text}

*영어 라이선스 전문이 정본(authoritative)이며, 아래 전문은 영어 원문 그대로 유지됩니다.*

```text
{{license.text}}
```
