---
doc: refunds
title: Política de reembolso e cancelamento
version: 1.1.1
updated: 2026-10-31
lang: pt-BR
translation_of: 1.1.1
status: draft
when: feature.payments
summary: Como cancelar, quando você pode desistir ou obter um reembolso e o que acontece com as compras feitas por meio de lojas de aplicativos.
---

# Política de reembolso e cancelamento

*Versão {{doc.version}}, última atualização {{doc.updated}}.*

Esta política faz parte dos [termos de serviço]({{url.terms}}) e se aplica às compras feitas na **{{company.name}}** ("nós") para o {{product.name}}. Nada nesta política limita os direitos que você tem segundo a legislação obrigatória de defesa do consumidor.

## Onde você comprou faz diferença {#where}

- **Comprado diretamente de nós** (nosso site ou checkout): esta política se aplica.
{{#if feature.merchant_of_record}}- **Comprado por meio do nosso provedor de pagamento{{#if payments.provider}} {{payments.provider}}{{/if}}** (merchant of record): o provedor é o vendedor do pedido, cuida do pagamento, dos impostos e dos recibos e processa os reembolsos conforme os termos de compra dele e esta política. Os pedidos podem ser enviados a nós ou ao provedor.
{{/if}}
- **Comprado por meio de uma loja de aplicativos ou plataforma** (Apple App Store, Google Play, lojas de consoles ou de PC): a loja é a vendedora registrada e **cuida de reembolsos, cancelamentos e cobranças**. Solicite o reembolso à loja, pelo processo dela; não podemos reembolsar esses pagamentos, mas ajudaremos a confirmar os fatos e poderemos revogar o item comprado quando a loja fizer o reembolso. As regras da loja e a legislação local determinam os seus direitos nesse caso.

{{#if feature.subscriptions}}
## Cancelamento de assinatura {#cancel}

Você pode cancelar a qualquer momento nas configurações da sua conta{{#if feature.mobile}} (ou nas configurações de assinatura da loja, se você assinou por lá){{/if}} ou escrevendo para [{{company.email}}](mailto:{{company.email}}). O cancelamento interrompe as renovações futuras; você mantém o acesso até o fim do período já pago. Não fazemos cálculo proporcional de períodos parciais, salvo se a lei ou esta política determinarem o contrário. Cancelar é tão fácil quanto assinar: um botão de cancelamento direto na sua conta, sem ligações nem formulários. Enviamos um lembrete antes de uma renovação ou da conversão de um período de teste em plano pago quando a lei exigir; para planos de um ano ou mais, enviamos um lembrete de 15 a 45 dias antes da renovação e um lembrete anual, com o preço e a forma de cancelar. As condições de renovação são sempre exibidas ao lado do botão de pagamento.
{{/if}}

## Direito de arrependimento para consumidores (UE, Reino Unido e leis semelhantes) {#withdrawal}

{{#if feature.consumers}}
Se você for consumidor na União Europeia, no Reino Unido ou em outro país que conceda direito de arrependimento para contratos à distância, você pode desistir de uma compra **no prazo de {{policy.refund_days}} dias** após a celebração do contrato, sem precisar justificar.

**Conteúdo digital e serviços digitais.** Se você nos pedir para começar a fornecer um serviço digital ou conteúdo digital (por exemplo, acesso, créditos ou itens virtuais) durante o prazo de arrependimento e confirmar que entende que pode perder o direito de arrependimento, então:
- para **conteúdo digital que não esteja em suporte físico**, depois que o fornecimento tiver começado com o seu consentimento expresso, você perde o direito de desistir;
- para um **serviço digital**, você ainda pode desistir dentro do prazo, mas deve pagar um valor proporcional ao que foi fornecido até o momento em que nos avisar.

Pedimos esse consentimento no checkout. Se você não o tiver dado, aplica-se o direito integral de arrependimento.

**Função de desistência.** Conforme exige a lei a partir de 19 de junho de 2026, uma função "Desistir do contrato" está disponível na sua conta e na confirmação do pedido: escolha o contrato, confirme, e você receberá uma confirmação em suporte durável (e-mail) com a data e a hora. Você não precisa explicar o motivo.

**Outras formas de desistir.** Envie uma declaração clara (por exemplo, por e-mail para [{{company.email}}](mailto:{{company.email}})) informando sua decisão de desistir, com seu nome, os dados do pedido ou da conta e a data da compra. Você pode usar o formulário abaixo, mas não é obrigado a isso. Confirmaremos o recebimento e faremos o reembolso **em até 14 dias** após tomarmos conhecimento da sua decisão, usando o mesmo meio de pagamento.

> **Modelo de formulário de desistência** (preencha e devolva somente se quiser desistir)
> Para {{company.name}}, {{company.address}}, [{{company.email}}](mailto:{{company.email}}):
> Eu/Nós comunico(amos) por meio deste que desisto(imos) do meu/nosso contrato de fornecimento do seguinte serviço/conteúdo digital: ______ ; pedido em / recebido em: ______ ; nome: ______ ; endereço: ______ ; data: ______ (assinatura somente se estiver em papel).
{{else}}
Nossos Serviços são oferecidos somente a empresas; por isso, os direitos legais de desistência do consumidor não se aplicam. Entre em contato conosco se você acreditar que é consumidor.
{{/if}}

## Outros países {#other-countries}

Alguns lugares concedem direitos extras de cancelamento ou reembolso (por exemplo, períodos de reflexão, regras de renovação automática em vários estados dos EUA ou garantias legais na Austrália, na Nova Zelândia e no Reino Unido). Quando forem obrigatórios, eles se aplicam e prevalecem sobre qualquer disposição menos favorável nesta política.

## Quando reembolsamos {#refunds}

Reembolsaremos, total ou parcialmente, conforme o caso:

- uma **cobrança duplicada ou indevida**, ou uma cobrança que você não autorizou (informe-nos prontamente; podemos pedir detalhes);
- uma compra em que o serviço **não pôde ser prestado** ou é materialmente defeituoso e não podemos corrigi-lo em prazo razoável;
- uma compra que você pedir para cancelar em até **{{policy.refund_days}} dias**, se você não tiver usado o que comprou (incluindo créditos não utilizados), a nosso critério quando nenhum direito legal se aplicar;
- qualquer outra situação que acordarmos por escrito.

Fora isso, as taxas pagas não são reembolsáveis, inclusive as referentes a períodos parciais, itens usados ou consumidos e contas encerradas por violação da [política de uso aceitável]({{url.acceptable_use}}). Os reembolsos vão para o meio de pagamento original; só poderemos reembolsar em créditos se você pedir.

{{#if feature.credits}}
## Créditos e itens virtuais {#credits}

Créditos pré-pagos não utilizados podem ser reembolsados dentro do prazo acima. Créditos e itens virtuais que tenham sido gastos ou consumidos não são reembolsáveis, salvo quando a lei exigir. Se encerrarmos um serviço, trataremos os saldos pagos restantes conforme descrito nos [termos de serviço]({{url.terms}}){{#if feature.game}} e nas [Regras do Jogo]({{url.game_rules}}){{/if}}.
{{/if}}

## Contestações de cobrança (chargebacks) e disputas {#chargebacks}

Entre em contato conosco antes de contestar uma cobrança com seu banco ou emissor do cartão: normalmente conseguimos resolver mais rápido. Se você abrir uma disputa por uma cobrança válida, podemos suspender a conta até a resolução e compartilhar as provas de entrega e de uso com o provedor de pagamento.

## Impostos e moeda {#taxes}

Os reembolsos incluem o imposto que foi cobrado. Se você tiver pago em outra moeda, o valor devolvido pode ser diferente por causa de variações cambiais e de taxas bancárias, que estão fora do nosso controle.

## Como solicitar {#contact}

Escreva para [{{company.email}}](mailto:{{company.email}}) informando o e-mail da sua conta, o número do pedido ou do recibo e uma breve descrição. Responderemos à sua mensagem. Se não conseguirmos resolver a questão, você pode entrar em contato com o órgão local de defesa do consumidor{{#if consumer_dispute}} ou {{consumer_dispute}}{{/if}}.
