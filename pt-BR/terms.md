---
doc: terms
title: Termos de Serviço
version: 1.3.0
updated: 2026-10-31
lang: pt-BR
translation_of: 1.3.0
status: draft
summary: O acordo entre você e {{product.name}} para o uso de {{product.name}}.
---

# Termos de Serviço

*Versão {{doc.version}}, última atualização {{doc.updated}}.*

## 1. Acordo {#agreement}

Estes Termos de Serviço (os "**Termos**") constituem um acordo vinculante entre você e **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, número de registro {{company.reg_id}}{{/if}} ("**{{product.name}}**", "nós", "nos"), que regula o seu acesso e uso de {{product.name}}, de nossos sites, aplicativos, APIs, documentação e serviços relacionados (os "**Serviços**").

Ao criar uma conta, instalar um aplicativo ou, de outra forma, usar os Serviços, você aceita estes Termos e os documentos que eles incorporam: a [Política de Privacidade]({{url.privacy}}), a [Política de Uso Aceitável]({{url.acceptable_use}}), a [Política de Cookies]({{url.cookies}}){{#if feature.processor_role}}, o [Adendo de Tratamento de Dados]({{url.dpa}}) quando aplicável{{/if}}{{#if feature.payments}}, a [Política de Reembolso e Cancelamento]({{url.refunds}}){{/if}}{{#if feature.game}}, as [Regras do Jogo e Política de Itens Virtuais]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, os [Termos do Aplicativo]({{url.app_eula}}){{/if}} e qualquer formulário de pedido ou termos específicos do produto. Se você não concordar, não use os Serviços.

Se você utilizar os Serviços em nome de uma organização, confirma que tem poderes para vinculá-la, e "você" inclui essa organização. Se termos específicos do produto ou um contrato assinado entrarem em conflito com estes Termos, eles prevalecem apenas para esse produto ou cliente.

{{#if feature.consumers}}
**Consumidores.** Se você utilizar os Serviços como consumidor, a legislação obrigatória de proteção ao consumidor do seu país de residência continua a se aplicar, e nada nestes Termos limita esses direitos. As seções marcadas *(clientes empresariais)* aplicam-se somente se você não for consumidor.
{{/if}}

## 2. Elegibilidade {#eligibility}

Você só pode usar os Serviços se:

1. {{#if feature.minors}}tiver pelo menos **{{policy.min_age}}** anos de idade e, caso ainda não tenha atingido a maioridade em seu local de residência, tiver o consentimento de pai ou mãe, ou de responsável legal, que aceite estes Termos em seu nome e se responsabilize pelo seu uso e pelas suas compras (podemos solicitar comprovação){{else}}tiver pelo menos **{{policy.min_age}}** anos de idade e capacidade para celebrar um contrato vinculante{{/if}};
2. não esteja impedido de receber os Serviços nos termos da legislação aplicável, inclusive das leis de sanções e de controle de exportação (seção 22);
3. não tenha sido anteriormente removido dos Serviços por violar nossas regras, salvo se tivermos concordado por escrito com o seu retorno; e
4. use os Serviços de forma lícita no local onde você se encontra.
{{#if feature.age_gate}}5. confirme, quando solicitarmos, que tem pelo menos **{{policy.age_gate}}** anos de idade e a maioridade legal, segundo as regras do seu país, para usar funcionalidades que envolvam {{policy.age_topics|conteúdo sensível à idade}}. Não precisamos da sua data de nascimento: a sua confirmação é registrada. Se ela não for verdadeira, podemos bloquear a conta e excluir os seus dados.
{{/if}}{{#if feature.gambling}}6. confirme, quando solicitarmos, que tem pelo menos **{{policy.gambling_age}}** anos de idade, que jogos de azar são lícitos onde você mora e que usa as funcionalidades de jogos de azar apenas para si mesmo. Podemos exigir verificação real de idade e de identidade, e podemos recusar ou encerrar o acesso às funcionalidades de jogos de azar sempre que a lei ou as nossas licenças o exigirem.
{{/if}}{{#if policy.excluded_regions}}7. confirme, quando solicitarmos, que não está localizado em, nem é residente ou nacional de, nenhum dos seguintes países ou regiões: **{{policy.excluded_regions}}**, onde os nossos Serviços ou estes Termos podem não ser lícitos, podem não ser exequíveis ou não são oferecidos. Não conseguimos ver onde você realmente está (por exemplo, por trás de uma VPN), por isso dependemos da sua confirmação; se ela não for verdadeira, você usa os Serviços por sua conta e risco, é responsável por cumprir a legislação local e podemos bloquear a conta e excluir os seus dados. Nada neste item limita direitos que não possam ser renunciados segundo a lei do lugar onde você reside.
{{/if}}

Podemos solicitar a qualquer momento comprovação de idade, de identidade ou de poderes de representação, e podemos recusar ou encerrar uma conta que não passe nessa verificação.

## 3. Contas e segurança {#accounts}

- Forneça informações precisas e atualizadas e mantenha-as em dia. Uma pessoa ou entidade, uma conta, salvo acordo em contrário; criar contas adicionais para contornar uma restrição, limite, banimento, período de teste ou regra de preço é proibido.
- Mantenha suas credenciais em sigilo. Não compartilhe, venda, alugue nem transfira sua conta. Cada licença de usuário destina-se a uma única pessoa identificada, salvo se o plano dispuser de outra forma.
- Você é responsável por tudo o que acontece em sua conta, inclusive por pessoas que você permita que entrem ou que você deixe de impedir de entrar, até nos informar que ela está comprometida. Informe-nos imediatamente em [{{company.email}}](mailto:{{company.email}}) se suspeitar de acesso não autorizado.
- Podemos exigir autenticação mais forte, redefinir credenciais ou bloquear uma conta que razoavelmente acreditemos estar comprometida ou sendo usada de forma abusiva.
- Contas gratuitas inativas podem ser encerradas após aviso prévio enviado ao e-mail cadastrado; contas pagas não são encerradas por inatividade.
{{#if feature.anonymous}}- **Contas anônimas.** Quando oferecermos essa opção, os Serviços criarão para você uma conta anônima na primeira vez que você os utilizar. Ela não tem endereço de e-mail; quem usar esse navegador ou dispositivo pode usar a conta, e não conseguimos recuperá-la para você caso perca o acesso. Você pode vincular um endereço de e-mail a qualquer momento para proteger e recuperar a conta: confirmamos o endereço por meio de um link de acesso enviado a ele. Contas anônimas que permaneçam sem uso por muito tempo podem ser excluídas após aviso nos Serviços, quando isso for possível.
{{/if}}- **Titular da conta e acesso.** A pessoa que confirma o controle de um endereço de e-mail por meio do link de acesso que enviamos e que aceita estes Termos é o titular da conta e é tratada como a pessoa que fez as escolhas na conta. Se você atua em nome de uma organização, confirma que pode vinculá-la. Você decide quem mais na sua organização terá acesso (por exemplo, operadores com funções limitadas); as pessoas a quem você concede acesso podem ver o que você disponibiliza para elas, e você é responsável por essa escolha.

## 4. Licença e restrições {#licence}

Sujeito a estes Termos e ao pagamento das taxas aplicáveis, concedemos a você uma licença limitada, revogável, não exclusiva, intransferível e não sublicenciável para acessar e usar os Serviços para suas próprias finalidades pessoais ou empresariais internas durante o prazo de vigência. Os softwares que entregarmos são licenciados, não vendidos. Nós e nossos licenciantes mantemos todos os direitos não expressamente concedidos.

Salvo se a lei lhe conferir um direito que não possa ser renunciado, você não deve, nem deve permitir que qualquer pessoa:

- copiar, modificar, traduzir ou criar obras derivadas dos Serviços;
- realizar engenharia reversa, descompilar, desmontar ou tentar obter código-fonte, modelos, pesos, algoritmos ou APIs não públicas;
- revender, sublicenciar, alugar, arrendar, hospedar como prestador de serviço ou disponibilizar os Serviços a terceiros que não sejam seus usuários autorizados;
- contornar limites técnicos, licenciamento, medição, controles de acesso, limites de taxa ou recursos de segurança;
- remover ou alterar avisos de propriedade, atribuições ou avisos de licenças de código aberto;
- usar os Serviços ou o seu resultado para criar ou treinar um produto concorrente, ou para realizar testes comparativos (benchmarks) ou publicar resultados de desempenho sem o nosso consentimento por escrito{{#if feature.ai}}, ou para treinar, ajustar (fine-tune) ou destilar um modelo de IA a partir do resultado dos Serviços quando isso for proibido na documentação{{/if}};
- acessar os Serviços por meios automatizados (bots, raspadores de dados, rastreadores), salvo por meio da nossa API documentada, nos termos dela.

A [Política de Uso Aceitável]({{url.acceptable_use}}) acrescenta regras detalhadas e faz parte destes Termos. Componentes de código aberto são regidos por suas próprias licenças, que prevalecem para esses componentes.

## 5. Uso aceitável e cumprimento {#acceptable-use}

Você é responsável pelo seu uso dos Serviços e pela conduta de todos que você permitir que os utilizem. O uso indevido pode prejudicar outros usuários, terceiros e nós, e podemos agir conforme descrito na [Política de Uso Aceitável]({{url.acceptable_use}}) e na seção 17, inclusive removendo conteúdo, restringindo funcionalidades, limitando a velocidade de acesso (throttling), suspendendo ou encerrando contas, retendo repasses, comunicando autoridades e buscando reparações nos termos da seção 21.

## 6. Seu conteúdo {#your-content}

{{#if feature.ugc}}
"**Seu Conteúdo**" significa tudo o que você envia, submete, publica, conecta ou gera por meio dos Serviços{{#if feature.ai}}, incluindo prompts e, entre você e nós, o resultado que você recebe{{/if}}.

- **Titularidade.** Você mantém todos os direitos sobre Seu Conteúdo. Não adquirimos nenhuma propriedade sobre ele.
- **Licença a nós.** Você nos concede uma licença mundial, não exclusiva e isenta de royalties para hospedar, armazenar, reproduzir, processar, transmitir, adaptar (para formatação, miniaturas, traduções e verificações de segurança) e exibir Seu Conteúdo **somente na medida necessária para operar, proteger, dar suporte e aprimorar os Serviços e para fazer cumprir estes Termos**, enquanto você o mantiver nos Serviços e pelos períodos limitados de cópia de segurança e de retenção legal posteriores. Quando você tornar um conteúdo público, a licença se estende a exibi-lo ao público que você escolher. Esta licença termina quando você excluir o conteúdo ou a sua conta, observados esses períodos e as cópias que outros usuários já tenham recebido de forma lícita.
- **Suas garantias.** Você possui e manterá todos os direitos, consentimentos e autorizações necessários para enviar Seu Conteúdo e para conceder esta licença, inclusive de qualquer pessoa identificável nele; Seu Conteúdo e o nosso uso dele, conforme permitido, não infringem nem violam nenhuma lei ou direito de qualquer pessoa (direitos autorais, marcas, privacidade, direito de imagem, confidencialidade, contrato); e ele está em conformidade com a [Política de Uso Aceitável]({{url.acceptable_use}}).
- **Moderação.** Não temos o dever geral de monitorar Seu Conteúdo, mas podemos revisar, remover, restringir ou recusar conteúdo que razoavelmente acreditemos violar a lei, estes Termos ou direitos de terceiros, ou sobre o qual recebamos uma notificação válida (veja [Notificações de Direitos Autorais e de Conteúdo Ilegal]({{url.copyright}})). Quando exigido (por exemplo, pelo EU Digital Services Act), informamos os nossos motivos e como contestar a decisão.
- **Cópias de segurança.** Você é responsável por manter suas próprias cópias de Seu Conteúdo. Salvo se um plano expressamente incluir cópias de segurança ou retenção, não nos comprometemos a restaurar conteúdo excluído ou perdido.
- **Dados agregados.** Podemos usar dados de uso que não identifiquem você nem revelem Seu Conteúdo para operar, proteger e aprimorar os Serviços.
{{else}}
Você mantém todos os direitos sobre qualquer material que envie aos Serviços. Você nos concede a licença limitada necessária para processá-lo a fim de prestar, proteger e dar suporte aos Serviços, e garante que tem o direito de enviá-lo. Você é responsável por manter as suas próprias cópias.
{{/if}}

### Seus dados e arquivos {#your-data}

Entre você e nós, **você é o titular dos dados e arquivos que insere nos Serviços e é o único responsável por eles**: por ter o direito de carregá-los e usá-los, pela sua exatidão e legalidade, e pelas escolhas que fizer sobre quem pode acessá-los. Armazenamos e processamos esses dados conforme as suas instruções, para que os Serviços funcionem. Isso não limita os nossos deveres legais próprios, por exemplo, de proteger os Serviços e os dados pessoais, nem afeta direitos que a lei não permite excluir.
{{#if feature.uploads}}
- **Direitos autorais e outros direitos.** Você confirma que é titular do que envia ou que possui todas as autorizações necessárias (inclusive de pessoas que aparecem em imagens), e aceita que **você pode ser responsabilizado por reclamações** sobre direitos autorais, direitos de personalidade, privacidade ou outros direitos decorrentes disso. Podemos remover conteúdo e cooperar com titulares de direitos e autoridades, conforme descrito em [Notificações de Direitos Autorais e de Conteúdo Ilegal]({{url.copyright}}).
- **Privado por padrão.** O que você envia fica visível somente para você e para as pessoas a quem você conceder acesso (por exemplo, membros ou operadores da sua organização). Não usamos seus envios nem outros conteúdos para criar material público, como modelos, diretrizes, exemplos, materiais de marketing ou dados de treinamento, e não os disponibilizamos a pessoas que não estejam conectadas, salvo se você publicar ou compartilhar esses conteúdos expressamente.
{{/if}}

## 7. Se você presta serviços a outras pessoas com os Serviços {#end-users}

Se você usar os Serviços para fornecer algo aos seus próprios clientes, usuários, funcionários ou outros terceiros ("**Usuários Finais**"), você é o único responsável por eles: deve ter a base legal, os avisos e os consentimentos exigidos para quaisquer dados pessoais que colete ou trate, acordar os seus próprios termos com eles, atender às solicitações e reclamações deles, garantir que cumpram a [Política de Uso Aceitável]({{url.acceptable_use}}) e não assumir compromissos em nosso nome. Você responde pelos atos e omissões dos Usuários Finais como se fossem seus. Não temos obrigações perante os Usuários Finais.

## 8. Recursos de IA {#ai}

{{#if feature.ai}}
- Os resultados são gerados automaticamente e podem ser imprecisos, incompletos, ofensivos, enviesados ou semelhantes a resultados fornecidos a terceiros. Você deve avaliar o resultado antes de confiar nele e assumir a responsabilidade pela forma como o utiliza.
- **Não use os recursos de IA como única base para decisões que produzam efeitos jurídicos ou efeitos semelhantes relevantes sobre pessoas** (por exemplo, em emprego, crédito, moradia, seguros, educação, saúde, aplicação da lei ou imigração), e não os use para aconselhamento médico, jurídico, financeiro ou de segurança crítica sem revisão humana qualificada.
- Você deve divulgar conteúdo gerado ou manipulado por IA na medida em que a lei ou a plataforma em que você publica exigir (inclusive deepfakes e mídia sintética), e não deve apresentar o resultado da IA como produzido por humanos quando isso puder enganar.
- Você não deve usar os recursos para qualquer uso proibido na [Política de Uso Aceitável]({{url.acceptable_use}}), nem tentar contornar os sistemas de segurança (inclusive por meio de injeção de prompt, jailbreaking ou ataques de extração contra os nossos sistemas ou os de terceiros).
- Os provedores que utilizamos podem aplicar as suas próprias políticas de uso; podemos restringir os recursos de acordo com elas. Não usamos Seu Conteúdo para treinar modelos de uso geral, salvo se você optar por isso (veja a [Política de Privacidade]({{url.privacy}})).
{{else}}
Os Serviços não incluem atualmente recursos assistidos por IA. Se os adicionarmos, atualizaremos estes Termos e daremos aviso nos termos da seção 16, e as regras aplicáveis a eles (precisão, revisão humana, divulgação e ausência de usos proibidos) passarão a valer.
{{/if}}

## 9. Taxas e pagamento {#fees}

{{#if feature.payments}}
- **Preços e tributos.** Os preços são exibidos na compra e não incluem IVA, impostos sobre vendas e tributos semelhantes, salvo indicação em contrário; você paga os tributos aplicáveis. Os preços para consumidores incluem os tributos exigidos por lei.
{{#if feature.merchant_of_record}}- **Merchant of record.** Os pedidos são processados pelo nosso provedor de pagamento{{#if payments.provider}} {{payments.provider}}{{/if}}, que atua como revendedor e merchant of record, cobra o pagamento e os tributos e emite o recibo. Os termos de checkout dele se aplicam à compra, além destes Termos; pagamentos, cobrança, tributos e reembolsos são tratados sob esses termos e sob a nossa [Política de Reembolso e Cancelamento]({{url.refunds}}).
{{/if}}- **Pagamento.** Você nos autoriza, bem como ao nosso processador de pagamentos, a cobrar o meio de pagamento que nos fornecer por todos os valores devidos, inclusive renovações e cobranças baseadas no uso. Você garante que tem direito de usar esse meio de pagamento e deve manter os dados atualizados.
{{#if feature.subscriptions}}- **Antes de pagar.** Ao lado do botão de pagamento, exibimos o preço, o período de cobrança, que a assinatura é renovada automaticamente, o que acontece após qualquer período de teste, como cancelar, e links para estes Termos, para a [Política de Reembolso e Cancelamento]({{url.refunds}}) e para a [Política de Privacidade]({{url.privacy}}). Você só é cobrado depois de marcar a caixa ou de pressionar o botão que confirma que viu essas informações. Mantemos registro desse consentimento e enviamos a você uma confirmação que pode guardar.
- **Assinaturas.** Salvo indicação em contrário no checkout, as assinaturas são renovadas automaticamente por períodos de mesma duração até serem canceladas. Cancele a qualquer momento na sua conta ou por e-mail antes da data de renovação; o cancelamento produz efeitos ao final do período pago, e não fazemos cálculo proporcional (pro-rata). Informamos com antecedência, como a lei exige, antes de um período de teste se converter em cobrança ou de um preço de renovação mudar.
- **Períodos de teste e promoções.** Uma oferta de teste ou promocional por pessoa ou empresa. Podemos retirar ou recusar uma oferta quando suspeitarmos de abuso (múltiplas contas, identidades falsas, limites contornados).
{{/if}}{{#if feature.credits}}- **Créditos.** Créditos pré-pagos, tokens ou moeda do aplicativo são uma licença limitada para usar os Serviços, não dinheiro; não têm valor em espécie, são intransferíveis, não podem ser resgatados em dinheiro nem negociados, e podem expirar conforme indicado na compra. Créditos não utilizados são perdidos quando uma conta é encerrada por violação; nos demais casos, os reembolsos seguem as regras abaixo e a legislação aplicável.{{#if feature.game}} Itens virtuais em jogos são regidos pelas [Regras do Jogo e Política de Itens Virtuais]({{url.game_rules}}).{{/if}}
{{/if}}- **Alterações de preço.** Podemos alterar preços para o futuro, com aviso prévio de pelo menos {{policy.notice_days}} dias. Se você não concordar, cancele antes de a alteração entrar em vigor.
- **Atraso ou falha no pagamento.** Podemos tentar a cobrança novamente, suspender ou rebaixar a conta e cobrar custos razoáveis de cobrança e juros legais sobre faturas empresariais vencidas. Os Serviços são restabelecidos assim que as pendências forem quitadas.
- **Chargebacks e fraudes.** Abrir um chargeback (contestação de pagamento) sem antes nos contatar em [{{company.email}}](mailto:{{company.email}}), ou realizar pagamentos fraudulentos ou não autorizados, pode levar à suspensão imediata, à perda de acesso ao conteúdo e à cobrança do valor contestado e de nossas taxas de processamento.
- **Reembolsos.** Salvo quando a lei lhe conferir um direito ou quando indicarmos o contrário por escrito, as taxas pagas não são reembolsáveis, inclusive por períodos parciais e recursos não utilizados, e nenhum reembolso é devido se suspendermos ou encerrarmos a sua conta por violação.
{{#if feature.consumers}}- **Cancelamento, direito de arrependimento e reembolsos.** Os direitos de arrependimento do consumidor, a forma de cancelar e os casos em que reembolsamos estão definidos na [Política de Reembolso e Cancelamento]({{url.refunds}}), que faz parte destes Termos. Para conteúdo ou serviços digitais fornecidos imediatamente a seu pedido, solicitamos o seu consentimento expresso e a sua confirmação no checkout, como a lei exige.
{{/if}}
{{else}}
Os Serviços são atualmente oferecidos gratuitamente. Podemos introduzir recursos pagos no futuro; eles serão apresentados a você com clareza, e você nunca será cobrado sem a sua concordância.
{{/if}}

## 10. API, integrações e serviços de terceiros {#integrations}

{{#if feature.api}}
O acesso à API está sujeito a estes Termos, à documentação e a eventuais limites de taxa. Você deve proteger as suas chaves de API e credenciais, é responsável por todas as chamadas feitas com elas e não deve compartilhá-las, incorporá-las em código público nem usá-las para revender acesso. Podemos substituir, limitar ou revogar chaves e alterar ou descontinuar versões da API com aviso razoável (com antecedência menor quando necessário por motivos de segurança ou legais). Não use a API de modo que prejudique os Serviços para outros nem tente contornar limites, por exemplo, usando muitas chaves ou contas.

{{/if}}
Os Serviços podem funcionar com produtos, sites e serviços de terceiros que não controlamos. O seu uso deles é regido pelos termos desses terceiros. Não somos responsáveis por eles, por sua disponibilidade ou alterações, nem pela forma como usam os dados que você optar por compartilhar com eles. Podemos deixar de oferecer suporte a uma integração a qualquer momento.

## 11. Recursos beta e gratuitos {#beta}

Recursos identificados como alfa, beta, prévia (preview), experimentais ou similares, bem como planos gratuitos, são fornecidos "no estado em que se encontram", podem mudar ou ser retirados a qualquer momento, podem ser menos confiáveis e estão excluídos de qualquer compromisso de nível de serviço. Não confie neles para finalidades críticas.

## 12. Propriedade intelectual {#ip}

Os Serviços, inclusive softwares, design, textos, gráficos, dados, marcas, logotipos e documentação, são de nossa propriedade ou de nossos licenciantes e são protegidos por direitos autorais, marcas e outras leis. Nada nestes Termos transfere a você qualquer propriedade, e nenhum direito de usar nossos nomes ou marcas é concedido, exceto o necessário para usar os Serviços.

**Sugestões.** Se você enviar sugestões ou ideias, concede a nós uma licença perpétua, irrevogável, mundial, isenta de royalties e sublicenciável para usá-las sem restrições e sem crédito, na medida permitida por lei. Não temos o dever de agir com base em sugestões.

Notificações de direitos autorais e de conteúdo ilegal: veja [Notificações de Direitos Autorais e de Conteúdo Ilegal]({{url.copyright}}).

## 13. Confidencialidade (clientes empresariais) {#confidentiality}

Cada parte manterá em sigilo as informações comerciais e técnicas não públicas da outra, usará essas informações somente para cumprir ou exercer direitos sob estes Termos e as protegerá com cuidado razoável, exceto por informações que sejam públicas sem culpa do destinatário, já fossem conhecidas, tenham sido desenvolvidas de forma independente ou devam ser divulgadas por lei (com aviso prévio, quando lícito). O dever dura três anos após o término destes Termos e, no caso de segredos comerciais, indefinidamente.

## 14. Privacidade e proteção de dados {#privacy}

Nossa [Política de Privacidade]({{url.privacy}}) explica como tratamos dados pessoais. {{#if feature.processor_role}}Quando tratarmos dados pessoais por sua conta, na condição de seu operador, o [Adendo de Tratamento de Dados]({{url.dpa}}) se aplica e faz parte integrante destes Termos.{{/if}} Você deve cumprir a legislação de proteção de dados no seu uso dos Serviços e não deve enviar dados de categoria especial ou regulamentados (saúde, cartões de pagamento, documentos de identificação governamentais, dados de crianças), salvo se um recurso ou acordo expressamente permitir.

## 15. Disponibilidade, suporte e alterações {#availability}

Buscamos alta disponibilidade, mas não garantimos operação ininterrupta ou livre de erros. Podemos realizar manutenção (com aviso sempre que razoavelmente possível) e podemos modificar, acrescentar ou remover recursos. Se reduzirmos de forma relevante um recurso pago durante um período pré-pago, daremos a você aviso de pelo menos {{policy.notice_days}} dias e, quando você não puder razoavelmente continuar, um reembolso proporcional do período pré-pago afetado. O suporte é prestado em [{{company.email}}](mailto:{{company.email}}) com base em esforços razoáveis, salvo se o seu plano incluir um acordo de nível de serviço.

## 16. Alterações nestes Termos {#changes}

Podemos atualizar estes Termos por motivos legais, de segurança, de produto ou de negócio. Para alterações relevantes, daremos aviso de pelo menos **{{policy.notice_days}} dias** por e-mail ou nos Serviços, antes de elas produzirem efeitos para você. Se você não concordar, poderá deixar de usar os Serviços e encerrar sua conta antes da data de vigência e, para planos pagos, solicitar um reembolso proporcional das taxas pré-pagas referentes ao período posterior a essa data. Continuar a usar os Serviços após a data de vigência significa que você aceita os Termos atualizados. Alterações exigidas por lei, ou que não reduzam nada nem acrescentem obrigação, podem entrar em vigor imediatamente. As alterações não se aplicam a litígios já pendentes.

## 17. Suspensão e rescisão {#termination}

**Por você.** Você pode deixar de usar os Serviços e encerrar sua conta a qualquer momento nas configurações ou por e-mail. As taxas pagas não são reembolsadas, salvo se a seção 9 ou a lei o determinar.

**Por nós, sem justa causa.** Podemos encerrar planos pagos com aviso de {{policy.notice_days}} dias (com reembolso proporcional das taxas pré-pagas) e podemos descontinuar serviços gratuitos com aviso razoável.

**Por nós, por justa causa.** Podemos, com ou sem aviso prévio e na medida permitida por lei, restringir, suspender ou encerrar o seu acesso, remover conteúdo ou encerrar sua conta imediatamente se:

- você violar estes Termos ou a Política de Uso Aceitável (a resposta é proporcional à gravidade, à reincidência e ao risco);
- razoavelmente acreditarmos que o seu uso cria risco de segurança, legal, regulatório, reputacional ou financeiro para nós, para outros usuários ou para terceiros;
- você deixar de pagar na data devida;
- um tribunal, uma autoridade ou a lei aplicável o exigir; ou
- sua conta aparentar estar comprometida, ser fraudulenta ou estar abandonada.

Sempre que for prático e lícito, informaremos o motivo e daremos a você a oportunidade de responder ou de corrigir o problema antes, e, quando a lei exigir (por exemplo, o EU Digital Services Act), forneceremos uma declaração de motivos e um meio de recurso. Se suspendermos ou encerrarmos a sua conta por violação, nenhuma taxa será reembolsada, e os valores devidos continuam exigíveis.

**Efeitos.** Com a rescisão, sua licença termina; você deve deixar de usar os Serviços; e, mediante solicitação feita em até **{{policy.retention_account_days}} dias**, disponibilizaremos Seu Conteúdo para exportação, quando tecnicamente viável (não quando for ilícito ou causar dano a terceiros). Após esse período, o excluímos conforme descrito na [Política de Privacidade]({{url.privacy}}). Permanecem em vigor as seções que, por sua natureza, devam sobreviver, inclusive 4, 6 (limites da licença e suas garantias), 9 (valores devidos), 12, 13, 17 a 24 e 26.

## 18. Garantias e isenção de responsabilidade {#disclaimer}

Prestamos os Serviços com habilidade e cuidado razoáveis. **Fora isso, na máxima extensão permitida por lei, os Serviços são fornecidos "no estado em que se encontram" e "conforme disponíveis", e afastamos todas as demais garantias, expressas ou implícitas,** inclusive de comercialização, de adequação a uma finalidade específica, de não violação, de exatidão e de disponibilidade, bem como qualquer garantia de que os Serviços serão seguros, livres de erros, ininterruptos ou isentos de componentes nocivos. Não garantimos resultados, conteúdos de terceiros nem os resultados que você obtiver. Os Serviços não são projetados para uso em ambientes de alto risco nos quais uma falha possa causar morte, lesão corporal ou danos graves (por exemplo, dispositivos médicos, aviação, sistemas nucleares ou de suporte à vida), e você não pode usá-los dessa forma.

{{#if feature.consumers}}Se você for consumidor, mantém quaisquer direitos legais que não possam ser excluídos, como as garantias legais e os recursos para conteúdo e serviços digitais previstos na legislação da UE e do Reino Unido, e as garantias ao consumidor previstas no Australian Consumer Law e em leis semelhantes em outros países.{{/if}}

## 19. Limitação de responsabilidade {#liability}

Nada nestes Termos exclui ou limita responsabilidade que não possa ser excluída ou limitada por lei, inclusive por morte ou lesão corporal, fraude ou dolo, negligência grave ou (para consumidores) remédios legais obrigatórios.

Observadas essas ressalvas, **na máxima extensão permitida por lei** e para clientes empresariais:

1. não somos responsáveis por danos indiretos, incidentais, especiais, consequenciais, exemplares ou punitivos, nem por lucros cessantes, perda de receita, de negócios, de boa reputação comercial (goodwill), de economias esperadas ou de dados, decorrentes ou relacionados aos Serviços ou a estes Termos, mesmo que tenhamos sido alertados sobre essa possibilidade; e
2. nossa responsabilidade total agregada por todas as reclamações é limitada ao maior valor entre (a) as taxas que você nos pagou pelos Serviços nos **{{policy.liability_cap_months}} meses** anteriores ao evento que originou a primeira reclamação e (b) EUR 100.

{{#if feature.consumers}}Para consumidores, somos responsáveis por perdas ou danos previsíveis causados por nossa violação ou negligência, mas não por perdas que não eram previsíveis, nem por perdas de natureza empresarial.{{/if}}

Não somos responsáveis por falha ou atraso causado por eventos fora do nosso controle razoável (seção 24). Serviços gratuitos são fornecidos sem responsabilidade além do que a lei exige. Estes limites se aplicam independentemente da forma como a responsabilidade surgir (contrato, responsabilidade civil, inclusive por negligência, ou outra) e mesmo que um remédio não cumpra a sua finalidade essencial.

## 20. Indenização {#indemnity}

Se você for cliente empresarial, você defenderá, indenizará e manterá isentos de responsabilidade {{company.name}}, suas afiliadas, diretores, funcionários e agentes contra reclamações, danos, perdas, penalidades e despesas (inclusive honorários advocatícios razoáveis) decorrentes de (a) Seu Conteúdo ou dos seus dados, (b) violação destes Termos ou da lei por você ou por seus Usuários Finais, (c) uso indevido dos Serviços por você, ou (d) disputa entre você e um terceiro. Informaremos você prontamente sobre qualquer reclamação, deixaremos que você conduza a defesa (podendo nós participar, às nossas custas), e você não poderá transigir sobre uma reclamação que admita culpa nossa sem o nosso consentimento. {{#if feature.consumers}}Consumidores respondem apenas pelas perdas que causarem por sua própria violação, conforme previsto em lei.{{/if}}

## 21. Medidas em caso de uso indevido {#remedies}

Além de outros direitos e na medida permitida por lei:

- **Tutela inibitória.** Você reconhece que a violação das seções 4, 5 ou 13 pode causar prejuízos que perdas e danos não reparam integralmente, e podemos pleitear tutela inibitória ou outra medida de natureza equitativa, sem comprovar prejuízo efetivo e sem prestar caução.
- **Custos do uso indevido.** Se o seu uso indevido nos causar custos (infraestrutura adicional, resposta a incidentes, investigação, chargebacks, multas regulatórias ou reclamações de terceiros), você ressarcirá os custos razoáveis e comprovados.
- **Provas e cooperação.** Podemos preservar registros e conteúdos relacionados a suspeitas de abuso e divulgá-los a partes afetadas, plataformas, autoridades policiais ou reguladores, quando a lei permitir. Você deve cooperar razoavelmente com as nossas investigações.
- **Comunicação.** Podemos comunicar atividades ilícitas (inclusive material de abuso sexual infantil, fraude, ameaças, malware e ataques a sistemas) às autoridades e às partes afetadas, e o faremos quando a lei exigir.
- **Retenção de valores.** Podemos reter, bloquear ou compensar valores devidos a você (por exemplo, repasses) com valores que você nos deva ou que decorram de abuso, observada a lei.

## 22. Exportação, sanções e anticorrupção {#export}

Você não pode usar, exportar ou reexportar os Serviços em violação às leis aplicáveis de controle de exportação e de sanções, inclusive as da UE, dos Estados Unidos, do Reino Unido e da ONU, nem para ou em favor de pessoas ou países sujeitos a sanções abrangentes. Você confirma que você e os seus usuários não constam de nenhuma lista de sanções ou de pessoas com restrições. Você não oferecerá nem dará qualquer coisa de valor para influenciar indevidamente alguém em relação aos Serviços.

## 23. Lei aplicável e foro {#law}

Estes Termos e qualquer disputa ou reclamação decorrente deles ou relacionada a eles ou aos Serviços (inclusive disputas extracontratuais) são regidos pelas leis em vigor em **{{law.governing}}**, sem consideração às regras de conflito de leis, e excluindo a Convenção das Nações Unidas sobre Contratos de Compra e Venda Internacional de Mercadorias.

**Solução amigável primeiro.** Antes de iniciar um processo formal, escreva para [{{company.legal_email}}](mailto:{{company.legal_email}}) com a descrição da disputa e permita que tentemos resolvê-la de boa-fé por pelo menos 30 dias.

**Foro.** Salvo se a lei imperativa dispuser de outra forma, o foro exclusivo é **{{law.venue}}**. Qualquer das partes pode pleitear medida de urgência, de natureza inibitória, em qualquer tribunal competente.

{{#if feature.consumers}}**Consumidores.** Se você for consumidor, mantém também o direito de propor ações nos tribunais do seu país de residência e de invocar a legislação de proteção ao consumidor obrigatória desse país, e nada nesta seção remove esse direito. {{#if consumer_dispute}}Participamos de resolução extrajudicial de disputas perante {{consumer_dispute}}.{{/if}}
{{/if}}
**Prazo (clientes empresariais).** Na máxima extensão permitida por lei, qualquer reclamação deve ser proposta em até {{policy.claim_months}} meses após o surgimento da causa que lhe dá origem; caso contrário, ela fica renunciada.

**Sem ações coletivas (clientes empresariais, quando permitido).** As reclamações só podem ser apresentadas de forma individual, e não como parte de uma ação coletiva, de classe ou representativa.

## 24. Força maior {#force-majeure}

Nenhuma das partes responde por atraso ou falha causados por eventos fora de seu controle razoável, inclusive desastre natural, guerra, terrorismo, distúrbios civis, pandemia, ato governamental, falha de energia, de internet ou de telecomunicações, falhas de provedores de nuvem ou de outra infraestrutura de terceiros, ataques cibernéticos apesar de medidas de segurança razoáveis, greves ou conflitos trabalhistas (exceto os de funcionários da própria parte) ou falhas de fornecimento. Obrigações de pagamento por serviços já prestados não são dispensadas. Se tal evento durar mais de 60 dias, qualquer das partes pode rescindir os serviços afetados.

## 25. Comunicações eletrônicas e avisos {#notices}

Você consente em receber avisos e acordos por meio eletrônico. Podemos dar aviso por e-mail ao endereço vinculado à sua conta, nos Serviços ou por publicação em nosso site. Os avisos a nós devem ser enviados para [{{company.legal_email}}](mailto:{{company.legal_email}}) e para {{company.address}}. Considera-se recebido o aviso 24 horas após o envio de um e-mail sem devolução e, quando publicado ou exibido nos Serviços, no momento dessa publicação ou exibição.

## 26. Disposições gerais {#general}

- **Acordo integral.** Estes Termos e os documentos que eles referenciam constituem o acordo integral sobre o seu objeto e substituem entendimentos anteriores. Você não se baseou em nenhuma declaração que não conste deles.
- **Divisibilidade.** Se uma cláusula for inexequível, ela será limitada ao mínimo necessário ou substituída por outra exequível que mais se aproxime de sua intenção; o restante permanece em vigor.
- **Não renúncia.** Não exercer um direito não implica renúncia a ele.
- **Cessão.** Você não pode ceder nem transferir seus direitos ou obrigações sem o nosso consentimento por escrito. Podemos ceder estes Termos a uma afiliada ou sucessora de nosso negócio, e notificaremos você.
- **Relação.** As partes são contratantes independentes. Nada aqui cria sociedade, mandato, vínculo empregatício ou joint venture.
- **Terceiros.** Ninguém mais tem direito de fazer cumprir estes Termos, exceto nossas afiliadas, diretores e agentes, nos termos das seções 19 e 20.
- **Idioma.** As traduções são fornecidas por conveniência; em caso de divergência, prevalece a versão em inglês, salvo se a lei imperativa exigir o contrário.
- **Interpretação.** Os títulos têm finalidade apenas de conveniência. "Inclusive" significa "inclusive, sem limitação".
- **Publicidade.** Podemos citar você como cliente, com o seu logotipo, salvo se você recusar por e-mail; consumidores nunca são citados.

## 27. Contato {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Registro n.º {{company.reg_id}}{{/if}}{{#if company.tax_id}} · Identificação fiscal {{company.tax_id}}{{/if}}
E-mail [{{company.email}}](mailto:{{company.email}}) · Jurídico [{{company.legal_email}}](mailto:{{company.legal_email}}) · Suporte [{{company.email}}](mailto:{{company.email}}) · Veja também nosso [Aviso Legal]({{url.impressum}}).
