---
doc: license
title: Licença
version: 1.0.0
updated: 2026-10-23
lang: pt-BR
translation_of: 1.0.0
status: draft
when: license.id
summary: A licença sob a qual o {{product.name}} é disponibilizado.
---

# Licença

*Versão {{doc.version}}, última atualização {{doc.updated}}.*

**{{product.name}}** é disponibilizado por **{{license.holder}}** sob a **{{license.name}}**{{#if license.spdx}} (SPDX: `{{license.spdx}}`){{/if}}.

{{license.summary}} *(Este é um resumo em linguagem simples, não um substituto para o texto da licença abaixo. O texto original da licença em inglês é o texto autêntico e prevalece sobre esta tradução.)*

{{#if license.url}}Texto de referência: [{{license.url}}]({{license.url}}).{{/if}}

{{#if license.notice}}
{{license.notice}}
{{/if}}

Dúvidas ou pedidos de permissão: [{{company.legal_email}}](mailto:{{company.legal_email}}). O uso do site e dos serviços do {{product.name}} é regido pelos nossos [termos de serviço]({{url.terms}}).

## Texto integral {#text}

```text
{{license.text}}
```
