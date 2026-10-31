---
doc: cookies
title: Política de Cookies
version: 1.1.0
updated: 2026-10-31
lang: pt-BR
translation_of: 1.1.0
status: draft
summary: Quais cookies e tecnologias semelhantes {{product.name}} usa, por que os usa e como você pode controlá-los.
---

# Política de Cookies

*Versão {{doc.version}}, última atualização {{doc.updated}}.*

Esta política explica como **{{company.name}}** usa cookies e tecnologias semelhantes em {{product.name}} e em nossos outros Serviços. Os dados pessoais coletados por meio deles são tratados conforme descrito na [Política de Privacidade]({{url.privacy}}).

## 1. O que são {#what}

Cookies são pequenos arquivos armazenados no seu dispositivo por um website. "Tecnologias semelhantes" incluem o armazenamento local e de sessão, identificadores de dispositivo e SDKs em aplicativos móveis, pixels e sinais semelhantes a *fingerprinting*. Usamos a palavra "cookies" para todos eles.

## 2. Categorias que usamos {#categories}

| Categoria | Finalidade | Consentimento necessário? |
|---|---|---|
| **Estritamente necessários** | Manter você conectado, lembrar seu carrinho ou configurações durante a sessão, proteger contra fraudes e ataques CSRF, equilibrar a carga do servidor, armazenar suas escolhas de cookies | Não: são necessários para que os Serviços funcionem ou para entregar o que você solicitou |
| **Preferências** | Lembrar idioma, tema, layout e escolhas semelhantes | Sim, a menos que sejam estritamente necessários para um recurso que você solicitou |
{{#if feature.analytics}}| **Análise de uso** | Medir como os Serviços são usados e encontrar erros para que possamos melhorá-los | Sim (quando a lei exigir) |
{{/if}}{{#if feature.ads}}| **Publicidade / marketing** | Exibir e medir anúncios relevantes, limitar repetições e vincular atividades entre sites e aplicativos | Sim |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}Atualmente usamos **somente cookies estritamente necessários e de preferências**, e nenhum cookie de análise de uso ou de publicidade.{{/unless}}{{/unless}}

## 3. Os cookies em detalhes {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Os nomes exatos dos cookies, seus provedores e suas durações estão listados na janela de configurações de cookies e podem ser solicitados em [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Suas escolhas {#choices}

- **Banner de consentimento / configurações.** Quando o consentimento for exigido, perguntamos antes de definir cookies não essenciais, com uma opção clara para recusar tão facilmente quanto aceitar. Você pode alterar ou retirar sua escolha a qualquer momento pelo link de configurações de cookies no rodapé. A retirada não afeta o tratamento realizado anteriormente.
- **Controles do navegador.** A maioria dos navegadores permite bloquear ou excluir cookies; procure em Configurações → Privacidade. Bloquear cookies estritamente necessários pode impedir o login e outros recursos.
- **Sem gravação de sessão.** Não utilizamos ferramentas de gravação de sessão (*session replay*) ou de tela.
{{#if feature.external}}- **Recursos de terceiros.** Quando um recurso (por exemplo, fontes, mapas ou vídeos) é carregado do servidor de outra empresa, seu endereço IP é enviado a ela. Pedimos seu consentimento para cada recurso separadamente nas configurações de cookies e só o carregamos depois que você concordar; você pode alterar sua escolha a qualquer momento.
{{/if}}- **Sinais.** Tratamos o Global Privacy Control (GPC) e sinais semelhantes de recusa enviados pelos navegadores como uma recusa de rastreamento não essencial e de venda ou compartilhamento de dados pessoais.
{{#if feature.ads}}- **Escolhas sobre publicidade.** Você pode recusar a publicidade baseada em interesses pelas configurações do seu dispositivo (redefinindo ou limitando o seu identificador publicitário) e por ferramentas como youronlinechoices.eu ou optout.aboutads.info. Você continuará vendo anúncios, apenas menos relevantes.
{{/if}}
## 5. Por quanto tempo duram {#duration}

Cookies de sessão expiram quando você fecha o navegador. Cookies persistentes duram o período indicado na tabela e, em qualquer caso, não mais do que a lei recomenda (geralmente, não mais de 13 meses para consentimentos de análise de uso e de publicidade, que pedimos que você renove).

## 6. Terceiros {#third-parties}

Alguns cookies são definidos por terceiros cujos serviços usamos (análise de uso, mídia incorporada, pagamento, chat de suporte). Eles atuam sob as próprias políticas e, quando são controladores independentes, você deve ler essas políticas. Listamos os terceiros na tabela acima.
{{#if table.external}}
Recursos que recebem seu endereço IP quando são carregados:

{{table.external}}
{{/if}}

## 7. Alterações {#changes}

Se adicionarmos ou alterarmos cookies não essenciais, atualizaremos esta política e pediremos seu consentimento novamente quando a lei exigir. Dúvidas: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
