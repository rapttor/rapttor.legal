---
doc: privacy
title: Política de Privacidade
version: 1.2.1
updated: 2026-10-31
lang: pt-BR
translation_of: 1.2.1
status: draft
summary: Como {{product.name}} coleta, usa, compartilha e protege dados pessoais, e os direitos que você tem.
---

# Política de Privacidade

*Versão {{doc.version}}, última atualização {{doc.updated}}.*

## 1. Quem somos {#who-we-are}

Esta política explica como **{{company.name}}**, com sede registrada em {{company.address}} ("**{{product.name}}**", "nós", "nos"), trata dados pessoais quando você usa {{product.name}}, nossos websites, aplicativos, APIs e serviços relacionados (os "**Serviços**").

Para os dados pessoais cujas finalidades e meios de tratamento definimos (por exemplo, sua conta, visitas ao website e cobrança), somos o **controlador**. Contato: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Nosso encarregado de proteção de dados pode ser contatado em [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}Não nomeamos um encarregado de proteção de dados porque a lei não o exige para as nossas atividades. Dúvidas sobre privacidade devem ser enviadas para [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**Representante na UE (Art. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**Representante no Reino Unido (Art. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### Quando somos operador

Se você usa os Serviços por meio de uma organização (seu empregador, um cliente empresarial), essa organização normalmente é a controladora dos dados que insere nos Serviços, e nós os tratamos em nome dela, nos termos do nosso [Adendo de Tratamento de Dados]({{url.dpa}}). Nesse caso, direcione seus pedidos a essa organização; nós a ajudaremos a responder. Esta política então se aplica apenas aos dados que controlamos diretamente (administração da conta, cobrança, segurança, website).
{{/if}}

## 2. Dados que coletamos {#data-we-collect}

| Categoria | Exemplos | Origem |
|---|---|---|
| **Dados da conta** | nome, e-mail, hash da senha, detalhes do perfil, idioma, preferências | Você |
| **Dados de contato e suporte** | mensagens, anexos, notas de chamadas, feedback, respostas de pesquisas | Você |
| **Conteúdo que você envia** | arquivos, textos, configurações, qualquer coisa que você insira nos Serviços | Você |
{{#if feature.anonymous}}| **Dados de conta anônima** | um identificador aleatório de conta, o navegador ou a sessão do dispositivo que o mantém, o conteúdo que você cria e um endereço de e-mail, caso você conecte um posteriormente | Você, automaticamente |
{{/if}}{{#if feature.uploads}}| **Arquivos e imagens que você envia** | os próprios arquivos e os metadados neles contidos (por exemplo, dados da câmera ou localização em fotos) | Você |
{{/if}}| **Registros de consentimento** | o que você concordou (documentos, confirmação de idade, escolhas opcionais), a versão, o idioma, a data e a forma como você concordou | Você |
| **Dados de uso e do dispositivo** | endereço IP, tipo de navegador e de dispositivo, sistema operacional, idioma, páginas e recursos usados, carimbos de data e hora, referenciador, registros de falhas e de erros | Automaticamente |
| **Cookies e tecnologias semelhantes** | identificadores em cookies, armazenamento local, SDKs (veja a [Política de Cookies]({{url.cookies}})) | Automaticamente |
{{#if feature.payments}}| **Dados de pagamento e de transação** | plano, faturas, nome e endereço de cobrança, número de identificação fiscal, status do pagamento; os dados do cartão são tratados pelo nosso processador de pagamentos e não são armazenados por nós | Você, processador de pagamento |
{{/if}}{{#if feature.location}}| **Dados de localização** | localização precisa somente se você a ativar no seu dispositivo; caso contrário, localização aproximada a partir do endereço IP | Seu dispositivo |
{{/if}}| **Dados de conta de terceiros** | nome, e-mail, foto de perfil e identificador compartilhados por um provedor de login que você escolher | Terceiro, com a sua permissão |
{{#if feature.ugc}}| **Comunicações entre usuários** | mensagens e interações que você envia pelos Serviços | Você |
{{/if}}{{#if feature.mobile}}| **Dados do dispositivo móvel** | modelo do dispositivo e versão do sistema operacional, versão do aplicativo, identificadores da instância do app e tokens de notificações push, idioma e fuso horário, status das permissões; identificador de publicidade somente se você permitir o rastreamento | Seu dispositivo |
{{/if}}{{#if feature.game}}| **Dados de jogo** | progresso no jogo, pontuações, rankings, itens e compras, histórico de partidas, chat no jogo e (se utilizadas) denúncias de voz, sinais antitrapaça e de integridade, perfil público (nome, avatar, classificação) | Você, automaticamente |
{{/if}}| **Sinais de segurança e de fraude** | tentativas de login malsucedidas, denúncias de abuso, pontuações de risco, requisições bloqueadas | Automaticamente, outros usuários |

Não coletamos intencionalmente dados de categorias especiais (saúde, biometria, opiniões políticas ou religiosas e semelhantes). Por favor, não os envie, a menos que um recurso peça expressamente. Quando você enviar esses dados mesmo assim, é responsável por ter uma base legal para o tratamento.

Você não é obrigado a nos fornecer dados pessoais, mas, sem alguns deles (por exemplo, um endereço de e-mail), não conseguimos criar uma conta.

### Rastreamento que não utilizamos {#no-tracking}

Nós **não** utilizamos ferramentas de gravação de sessão ou de tela (*session replay*), captura de teclas ou de movimentos do mouse, nem *fingerprinting* de navegador. {{#if feature.analytics}}A análise de uso ocorre somente com o seu consentimento (veja a [Política de Cookies]({{url.cookies}})).{{else}}Não utilizamos ferramentas de análise de uso nem rastreadores publicitários.{{/if}}
{{#if feature.external}}
### Recursos de terceiros e seu endereço IP {#external}

Alguns recursos carregam conteúdo de servidores de outras empresas (por exemplo, fontes, mapas, vídeos ou verificações de segurança). Quando o seu navegador busca esse conteúdo, **seu endereço IP e detalhes técnicos são enviados a essa empresa**, que pode estar fora do seu país. Carregamos esses recursos somente depois que você concordar com cada um nas configurações de cookies, que você pode alterar a qualquer momento; se você recusar, usamos uma alternativa ou o recurso permanece desativado.
{{#if table.external}}
{{table.external}}
{{/if}}
{{/if}}{{#if feature.email}}
### E-mails {#emails}

Enviamos os e-mails de que os Serviços precisam (links de login, recibos, avisos de segurança){{#if feature.marketing}} e, somente quando você tiver concordado ou quando a lei permitir, novidades sobre o produto{{/if}}. Todo e-mail contém um link para deixar de receber e-mails nossos. {{#if feature.marketing}}Os e-mails opcionais param com um clique, imediatamente. {{/if}}Como bloquear todos os e-mails também bloquearia os links de login, um pedido para bloquear **todos** os e-mails deste serviço é confirmado com um último e-mail que contém um link comprovando que o endereço é seu. Em seguida, incluímos o endereço na lista de não envio do nosso provedor de e-mail e o mantemos ali para que possamos respeitar a sua escolha (obrigação legal e nosso legítimo interesse em atender ao seu pedido).
{{/if}}{{#if feature.age_gate}}
### Confirmação de idade {#age}

Antes de você usar recursos que envolvam {{policy.age_topics|conteúdo sensível quanto à idade}}, pedimos que você confirme ter pelo menos {{policy.age_gate}} anos e a maioridade legal segundo as regras do seu país. Não pedimos a sua data de nascimento; guardamos apenas a sua confirmação e a data em que você a deu. Se soubermos que alguém está abaixo dessa idade, bloqueamos a conta e excluímos os dados.
{{/if}}{{#if feature.gambling}}
Para recursos de jogos de azar, também podemos pedir comprovação da sua idade e identidade, usando um provedor de verificação para isso. Guardamos o resultado e as provas que a lei exige.
{{/if}}

## 3. Por que usamos seus dados e nossas bases legais {#purposes}

| Finalidade | Base legal (GDPR / UK GDPR) |
|---|---|
| Fornecer os Serviços, criar e gerenciar a sua conta, processar pedidos | Contrato (Art. 6(1)(b)) |
| Suporte ao cliente e comunicação sobre o seu uso dos Serviços | Contrato; legítimos interesses |
| Segurança, prevenção de abusos e de fraudes, aplicação dos nossos [Termos]({{url.terms}}) e da nossa [Política de Uso Aceitável]({{url.acceptable_use}}) | Legítimos interesses (Art. 6(1)(f)); obrigação legal |
| Depuração, confiabilidade, planejamento de capacidade e melhoria dos Serviços | Legítimos interesses |
{{#if feature.analytics}}| Análise de uso | Consentimento, quando a lei exigir; caso contrário, legítimos interesses |
{{/if}}{{#if feature.marketing}}| Novidades sobre o produto e e-mails de marketing | Consentimento, ou legítimos interesses para clientes existentes quando a lei permitir; você pode cancelar a qualquer momento |
{{/if}}{{#if feature.ads}}| Publicidade e mensuração | Consentimento |
{{/if}}| Registro dos seus consentimentos e respeito às suas escolhas sobre e-mails | Obrigação legal; legítimos interesses |
{{#if feature.external}}| Carregamento de recursos de terceiros que recebem o seu endereço IP | Consentimento (Art. 6(1)(a), e as regras da ePrivacy para acesso ao seu dispositivo) |
{{/if}}| Contabilidade, impostos e outras obrigações legais | Obrigação legal (Art. 6(1)(c)) |
| Estabelecer, exercer ou defender direitos em processos judiciais; responder a autoridades | Legítimos interesses; obrigação legal |
| Transferências no contexto de negócios (fusão, aquisição, venda de ativos) | Legítimos interesses |

Quando nos baseamos em legítimos interesses, os ponderamos em relação aos seus direitos; você pode pedir detalhes e pode se opor (seção 10). Quando nos baseamos em consentimento, você pode retirá-lo a qualquer momento; isso não afeta o tratamento realizado anteriormente.

{{#if feature.ai}}
### Recursos com IA {#ai}

Alguns recursos usam modelos de aprendizado de máquina ou modelos generativos. Quando você os usa, o conteúdo que envia como entrada é enviado ao provedor, que atua como nosso operador, para produzir a saída.

- **Não** usamos o seu conteúdo para treinar modelos de uso geral, e exigimos que nossos provedores também não o façam, a menos que você opte expressamente por isso.
- A saída da IA pode estar errada, incompleta ou ser tendenciosa. Não confie nela para decisões jurídicas, médicas, financeiras ou outras de alto impacto sem revisão humana.
- Não tomamos decisões com efeitos jurídicos, ou de efeito similarmente significativo sobre você, exclusivamente por meios automatizados. Restrições de conta por abuso são revistas por uma pessoa, mediante solicitação (veja a [Política de Uso Aceitável]({{url.acceptable_use}}), Enforcement).
- Conteúdo gerado por IA é identificado quando a lei exigir.
{{/if}}

## 4. Com quem compartilhamos dados {#sharing}

**Não vendemos os seus dados pessoais**, e não os "compartilhamos" para publicidade comportamental entre contextos{{#if feature.ads}}, exceto como descrito na Política de Cookies e somente quando você tiver consentido{{/if}}.

Compartilhamos dados pessoais somente com:

- **Prestadores de serviços (operadores)** que atuam conforme as nossas instruções, sob contratos escritos: hospedagem e infraestrutura, entrega de e-mails, ferramentas de suporte ao cliente, monitoramento de erros{{#if feature.payments}}, processamento de pagamentos{{/if}}{{#if feature.ai}}, provedores de IA{{/if}}. A lista atual está na nossa [Lista de Suboperadores]({{url.subprocessors}}).
- **Plataformas e lojas de aplicativos** que você usa para acessar os Serviços (por exemplo, Apple, Google, lojas de consoles ou de PC), que processam pagamentos e podem nos fornecer dados limitados de compra e de conta;
- **Outros usuários ou o público**, somente conforme você direcionar (por exemplo, conteúdo que você escolher publicar{{#if feature.ugc}} ou mensagens que você enviar{{/if}}).
- **Consultores profissionais** (advogados, auditores, seguradoras), sob confidencialidade.
- **Autoridades, tribunais e partes afetadas** quando exigido por lei, para responder a processo legal válido, para proteger direitos, segurança ou patrimônio, ou para investigar abusos e fraudes. Verificamos a validade dos pedidos e, quando permitido por lei, informamos você.
- **Sucessor** em uma fusão, aquisição, financiamento ou venda de ativos, que deve respeitar esta política; notificaremos você sobre mudanças relevantes de controle que afetem os seus dados.
- **Qualquer outra pessoa** somente com o seu consentimento.

## 5. Transferências internacionais {#transfers}

Operamos a partir de {{company.country}}{{#if hosting.region}} e armazenamos os dados principalmente em {{hosting.region}}{{/if}}. Alguns provedores tratam dados em outros países, incluindo os Estados Unidos. Quando dados pessoais do EEE, do Reino Unido ou da Suíça são transferidos para um país sem decisão de adequação, usamos uma salvaguarda reconhecida: o EU-U.S. Data Privacy Framework (ou suas extensões para o Reino Unido e a Suíça), quando o destinatário é certificado; caso contrário, as **Cláusulas Contratuais Padrão** da Comissão Europeia, com o UK International Data Transfer Addendum ou as alterações suíças quando pertinentes, além de medidas complementares, como criptografia em trânsito e em repouso. Você pode solicitar uma cópia das salvaguardas relevantes em [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. Por quanto tempo mantemos os dados {#retention}

| Dados | Retenção |
|---|---|
| Dados da conta e conteúdo | Enquanto a sua conta estiver ativa; depois, excluídos ou anonimizados em até {{policy.retention_account_days}} dias após o encerramento |
| Registros de servidor e de segurança | 90 dias |
| Cópias de segurança (backups) | Rotativas, por até 35 dias; dados excluídos saem dos backups nesse ciclo |
| Faturas e registros contábeis | {{policy.retention_billing_years}} anos, ou pelo prazo que a lei exigir |
| Correspondência de suporte | Até 3 anos após o encerramento do caso, ou enquanto a conta estiver ativa, se for mais longo |
| Registros de consentimentos, de cancelamentos e de solicitações de direitos | Pelo tempo necessário para demonstrar conformidade |
| Dados necessários para uma ação judicial ou investigação | Até a resolução do caso e o decurso dos prazos prescricionais |
| Registros de abuso e de banimento (identificador, motivo, data) | Até 5 anos, para prevenir abuso reincidente |
| Registros de consentimento e lista de não envio de e-mails | Registros de consentimento: enquanto a conta existir, mais o prazo prescricional; entradas da lista de não envio: até que você nos peça para removê-las |

Quando a finalidade terminar, excluímos os dados ou os anonimizamos de forma irreversível.

## 7. Segurança {#security}

Usamos medidas técnicas e organizacionais adequadas ao risco: criptografia em trânsito, criptografia de dados sensíveis em repouso, controle de acesso com privilégio mínimo, salvaguardas de autenticação, registros (logs), cópias de segurança, gestão de vulnerabilidades e obrigações de confidencialidade da equipe. Nenhum sistema é perfeitamente seguro. Use uma senha forte e única, ative a autenticação multifator quando ela for oferecida e avise-nos imediatamente em [{{company.email}}](mailto:{{company.email}}) se suspeitar que a sua conta foi comprometida. Veja também nossa página de [Segurança e Divulgação de Vulnerabilidades]({{url.security}}).

Se uma violação for suscetível de colocar em risco os seus direitos e liberdades, notificaremos a autoridade de controle no prazo de 72 horas após tomarmos conhecimento, quando exigido, e notificaremos você sem demora injustificada quando a lei exigir.

## 8. Crianças {#children}

{{#if feature.minors}}Os Serviços não são direcionados a crianças menores de 13 anos, e não coletamos conscientemente dados pessoais delas. Usuários com {{policy.min_age}} anos ou mais que ainda não tenham atingido a maioridade podem usar os Serviços **somente com o consentimento de um pai, mãe ou responsável**, que pode revisar, corrigir, limitar ou excluir os dados do menor e retirar o consentimento entrando em contato com [{{company.privacy_email}}](mailto:{{company.privacy_email}}). Coletamos apenas os dados necessários para os Serviços, não usamos dados de menores para publicidade comportamental e aplicamos configurações padrão adequadas à idade (perfis privados, comunicações limitadas), quando possível. Quando a lei de um país fixar uma idade mais alta para o consentimento digital, exigimos o consentimento dos pais abaixo dessa idade.{{else}}Os Serviços não são direcionados a crianças. Você deve ter pelo menos {{policy.min_age}} anos para manter uma conta. Não coletamos conscientemente dados pessoais de ninguém com menos de {{policy.min_age}} anos (ou da idade mais alta de consentimento digital em seu país; nos Estados Unidos, menos de 13 anos, para fins da COPPA). Se você acredita que uma criança nos forneceu dados pessoais, entre em contato com [{{company.privacy_email}}](mailto:{{company.privacy_email}}) e nós excluiremos os dados e encerraremos a conta. Quando um pai, mãe ou responsável tiver consentido validamente com o uso por um menor, esse consentimento pode ser retirado a qualquer momento.{{/if}}

## 9. Sites e serviços de terceiros {#third-parties}

Os Serviços podem conter links para sites, plug-ins e aplicativos de terceiros, ou se integrar a eles, incluindo provedores de login. Não os controlamos e não somos responsáveis por suas práticas de privacidade; as políticas próprias deles regem o que coletam. Desconecte as integrações nas configurações da sua conta ou nas configurações do terceiro.

## 10. Seus direitos {#rights}

Dependendo de onde você vive, você pode:

- **acessar** os seus dados e obter uma cópia;
- **corrigir** dados imprecisos;
- **excluir** os seus dados ("direito de ser esquecido");
- **restringir** ou **se opor** ao tratamento, incluindo o marketing direto, a qualquer momento;
- **portar** os seus dados para outro provedor, em formato legível por máquina;
- **retirar o consentimento** a qualquer momento;
- **não ser submetido a decisões exclusivamente automatizadas** com efeitos jurídicos ou de efeito similarmente significativo;
- **apresentar reclamação** a uma autoridade de controle.

**Excluindo sua conta.** Você pode excluir sua conta e seus dados pessoais {{#if feature.mobile}}dentro do aplicativo (Configurações, depois Conta, depois Excluir conta), {{/if}}nas configurações da sua conta em nosso website ou por e-mail; não exigimos que você entre em contato com o suporte se o autoatendimento estiver disponível. A exclusão da conta é definitiva após o período de carência que mostraremos a você. Desinstalar o aplicativo não exclui a sua conta.

Para exercer um direito, envie um e-mail para [{{company.privacy_email}}](mailto:{{company.privacy_email}}) ou use as configurações da sua conta. Podemos precisar verificar a sua identidade e, se o pedido for manifestamente infundado ou excessivo, podemos cobrar uma taxa razoável ou recusá-lo, conforme a lei permitir. Respondemos em **um mês** (prorrogável por até mais dois meses em pedidos complexos; 45 dias sob as leis estaduais dos EUA, prorrogáveis por mais 45), e informamos o motivo quando não pudermos atender. Não discriminaremos você por exercer seus direitos.

### 10.1 Espaço Econômico Europeu, Reino Unido, Suíça

Todos os direitos acima se aplicam. Você pode apresentar reclamação à autoridade do país em que vive, trabalha ou em que ocorreu o problema ([lista das autoridades do EEE](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); Reino Unido: [ICO](https://ico.org.uk); Suíça: [FDPIC](https://www.edoeb.admin.ch)). Nossa autoridade principal é {{law.authority}}.

### 10.2 Sérvia

Quando a Lei sérvia de Proteção de Dados Pessoais se aplicar, você tem direitos equivalentes aos acima e pode apresentar reclamação ao Comissário para Informações de Interesse Público e Proteção de Dados Pessoais (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 Estados Unidos (Califórnia e outros estados) {#us-states}

Esta seção complementa as informações acima para residentes da Califórnia e de outros estados dos EUA que possuem leis abrangentes de privacidade (incluindo Virgínia, Colorado, Connecticut, Utah, Texas, Oregon, Montana e outros, à medida que entrarem em vigor).

- **Categorias coletadas nos últimos 12 meses:** identificadores (nome, e-mail, endereço IP, identificadores online); registros de clientes; informações comerciais (planos, compras); atividade de internet ou de rede; geolocalização aproximada{{#if feature.location}} e geolocalização precisa, com a sua permissão{{/if}}; conteúdo que você envia; inferências limitadas à operação dos Serviços. Divulgamos essas informações a prestadores de serviços para as finalidades comerciais da seção 3.
- **Venda e compartilhamento:** não vendemos informações pessoais e não as compartilhamos para publicidade comportamental entre contextos. Não vendemos nem compartilhamos conscientemente dados de pessoas menores de 16 anos.
- **Informações pessoais sensíveis:** não as usamos para inferir características e não as usamos além do necessário para prestar os Serviços.
- **Seus direitos:** saber/acessar, excluir, corrigir, portabilidade, optar por não vender ou compartilhar e por não receber publicidade direcionada ou perfilamento, limitar o uso de dados sensíveis e não discriminação. Respeitamos o **Global Privacy Control** e sinais semelhantes de recusa enviados pelos navegadores como um pedido válido de opt-out.
- **Representantes autorizados e recursos:** um representante autorizado pode enviar pedidos com a sua permissão por escrito. Se recusarmos um pedido, você pode recorrer respondendo à nossa decisão; se continuar insatisfeito, pode entrar em contato com o procurador-geral do seu estado.
- **Califórnia:** você pode solicitar uma lista de terceiros aos quais divulgamos informações pessoais para o marketing direto deles no ano civil anterior ("Shine the Light"); não fazemos tais divulgações. Residentes da Califórnia com menos de 18 anos que sejam usuários registrados podem solicitar a remoção de conteúdo que publicaram publicamente.

### 10.4 Brasil (LGPD)

Você pode solicitar confirmação da existência de tratamento, acesso, correção, anonimização, bloqueio ou eliminação de dados desnecessários ou excessivos, portabilidade, informações sobre as entidades com as quais compartilhamos dados, informações sobre a possibilidade de não fornecer consentimento e sobre as consequências dessa recusa, e revisão de decisões automatizadas. Você pode apresentar reclamação à Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Outras regiões

Se você estiver em outro lugar com uma lei de proteção de dados, respeitamos os direitos equivalentes que essa lei lhe concede. Em particular:

| Onde | O que acrescentamos |
|---|---|
| **Canadá** (PIPEDA, Lei 25 de Quebec) | Você pode acessar e corrigir os seus dados, retirar o consentimento e apresentar reclamação ao Office of the Privacy Commissioner ou à Commission d'accès à l'information. Nosso contato de privacidade é o responsável pela proteção de informações pessoais; transferências para fora de Quebec são avaliadas e protegidas. |
| **Índia** (DPDP Act 2023) | Você pode acessar, corrigir e apagar dados, indicar outra pessoa para exercer seus direitos caso venha a falecer ou fique incapacitado, e usar o nosso contato de reclamações abaixo; pode apresentar reclamação ao Data Protection Board. |
| **Austrália, Nova Zelândia** | Você pode solicitar acesso e correção e apresentar reclamação a nós e, depois, à OAIC (Austrália) ou ao Privacy Commissioner (Nova Zelândia). |
| **Japão, Coreia do Sul, Singapura, Tailândia, Malásia, Turquia, Emirados Árabes Unidos, Arábia Saudita, África do Sul, Quênia, Nigéria e leis semelhantes** | Aplicamos os direitos e as salvaguardas que essas leis exigem (acesso, correção, eliminação, oposição, reclamação à autoridade local, salvaguardas para transferências). Entre em contato conosco para exercê-los. |
| **China** | Os Serviços não são direcionados a pessoas na China continental; não os use para enviar dados pessoais de pessoas de lá. |

**Contato para reclamações e de privacidade em todas as regiões:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. Tratamos os pedidos dentro do prazo que a lei aplicável permitir.

## 11. Alterações desta política {#changes}

Podemos atualizar esta política para refletir mudanças nos Serviços ou na lei. Para alterações relevantes, daremos aviso com pelo menos {{policy.notice_days}} dias de antecedência, por e-mail ou nos Serviços, antes de elas se aplicarem a você, e pediremos novo consentimento quando a lei exigir. A data de "última atualização" acima indica a versão atual; versões anteriores estão disponíveis mediante solicitação.

## 12. Contato {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
