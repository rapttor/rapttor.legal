---
doc: security
title: Segurança e Divulgação de Vulnerabilidades
version: 1.0.1
updated: 2026-10-23
lang: pt-BR
translation_of: 1.0.1
status: draft
summary: Como relatar vulnerabilidades de segurança em {{product.name}} e as regras de *safe harbour* para pesquisas de boa-fé.
---

# Segurança e Divulgação de Vulnerabilidades

*Versão {{doc.version}}, última atualização {{doc.updated}}.*

Levamos a segurança a sério e damos as boas-vindas a relatórios de boa-fé de pesquisadores. Contato: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Escopo {#scope}

Em escopo: {{product.name}}, {{company.website}} e os nossos próprios subdomínios, aplicativos e APIs que operamos. **Fora de escopo:** serviços e infraestrutura de terceiros, contas e dados de outros clientes, engenharia social ou phishing contra a nossa equipe ou os nossos usuários, ataques físicos, negação de serviço e testes volumétricos, spam, e achados que exijam interação irrealista do usuário ou software desatualizado.

## 2. Regras para testes {#rules}

Se você testar de boa-fé, deve:

- testar somente contra **as suas próprias contas e dados**; pare e informe imediatamente se chegar aos dados de outra pessoa, e não acesse, baixe, modifique ou guarde mais do que o necessário para demonstrar o problema;
- não degradar os Serviços, não executar varreduras automatizadas em alto volume, nem usar exploits para se manter, pivotar ou exfiltrar dados;
- não divulgar o problema a terceiros nem publicar detalhes até que tenhamos tido um prazo razoável para corrigi-lo (**90 dias** a partir do seu relatório, ou antes, se concordarmos);
- seguir a lei e estas regras.

## 3. Safe harbour {#safe-harbour}

Se você cumprir esta política, trataremos a sua pesquisa como autorizada, não moveremos nem apoiaremos ação judicial ou encerramento de conta por causa dela, e trabalharemos com você para entender e resolver o problema. Isso não autoriza violar a lei contra terceiros, e um terceiro ainda pode agir por conta própria. Na dúvida, pergunte antes.

## 4. O que enviar {#report}

Uma descrição clara da vulnerabilidade, a URL ou o componente afetado, os passos para reprodução ou prova de conceito, o impacto, seus dados de contato e se você deseja crédito pela descoberta. Criptografe o material sensível, se puder; peça nossa chave.

## 5. O que acontece em seguida {#process}

Confirmamos o recebimento dos relatórios, fazemos a triagem, mantemos você informado, corrigimos conforme a gravidade e, se você desejar, creditamos você. Atualmente não mantemos programa de recompensas pagas e não podemos prometer prêmios, embora possamos oferecer agradecimentos ou brindes.

## 6. Usuários: proteja sua conta {#users}

Use uma senha única e forte e a autenticação multifator quando ela for oferecida, mantenha o software atualizado, desconfie de phishing e informe prontamente qualquer suspeita de comprometimento para [{{company.email}}](mailto:{{company.email}}). Usar indevidamente uma vulnerabilidade ou testar fora desta política viola a [Política de Uso Aceitável]({{url.acceptable_use}}).
