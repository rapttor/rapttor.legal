---
doc: privacy
title: Privacy Policy
version: 1.0.0
updated: 2026-10-23
lang: en
summary: How {{product.name}} collects, uses, shares and protects personal data, and the rights you have.
---

# Privacy Policy

*Version {{doc.version}}, last updated {{doc.updated}}.*

## 1. Who we are {#who-we-are}

This policy explains how **{{company.name}}** with its registered address at {{company.address}} ("**{{product.name}}**", "we", "us"), processes personal data when you use {{product.name}}, our websites, applications, APIs and related services (the "**Services**").

For personal data we decide how and why to process (for example your account, website visits and billing), we are the **controller**. Contact: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

{{#if dpo.email}}Our Data Protection Officer can be reached at [{{dpo.email}}](mailto:{{dpo.email}}).{{else}}We have not appointed a Data Protection Officer because the law does not require it for our activities. Privacy questions go to [{{company.privacy_email}}](mailto:{{company.privacy_email}}).{{/if}}

{{#if eu_rep}}**EU representative (Art. 27 GDPR):** {{eu_rep}}{{/if}}
{{#if uk_rep}}**UK representative (Art. 27 UK GDPR):** {{uk_rep}}{{/if}}

{{#if feature.processor_role}}
### When we are a processor

If you use the Services through an organisation (your employer, a business customer), that organisation is usually the controller of the data it puts into the Services, and we process it on its behalf under our [Data Processing Addendum]({{url.dpa}}). In that case, direct your requests to that organisation; we will help it respond. This policy then applies only to the data we control ourselves (account administration, billing, security, website).
{{/if}}

## 2. Data we collect {#data-we-collect}

| Category | Examples | Source |
|---|---|---|
| **Account data** | name, email, password hash, profile details, language, preferences | You |
| **Contact and support data** | messages, attachments, call notes, feedback, survey answers | You |
| **Content you submit** | files, text, settings, anything you place in the Services | You |
| **Usage and device data** | IP address, browser and device type, operating system, language, pages and features used, timestamps, referrer, crash and error logs | Automatically |
| **Cookies and similar technologies** | identifiers in cookies, local storage, SDKs (see [Cookie Policy]({{url.cookies}})) | Automatically |
{{#if feature.payments}}| **Payment and transaction data** | plan, invoices, billing name and address, tax ID, payment status; card details are handled by our payment processor and not stored by us | You, payment processor |
{{/if}}{{#if feature.location}}| **Location data** | precise location only if you enable it on your device; otherwise approximate location from IP address | Your device |
{{/if}}| **Third-party account data** | name, email, profile picture and identifier shared by a sign-in provider you choose | Third party, with your permission |
{{#if feature.ugc}}| **Communications between users** | messages and interactions you send through the Services | You |
{{/if}}{{#if feature.mobile}}| **Mobile device data** | device model and OS version, app version, app-instance and push-notification tokens, language and time zone, permission status; advertising identifier only if you allow tracking | Your device |
{{/if}}{{#if feature.game}}| **Gameplay data** | game progress, scores, rankings, items and purchases, match history, in-game chat and (if used) voice reports, anti-cheat and integrity signals, public profile (name, avatar, rank) | You, automatically |
{{/if}}| **Security and fraud signals** | failed logins, abuse reports, risk scores, blocked requests | Automatically, other users |

We do not intentionally collect special-category data (health, biometrics, political or religious views and similar). Please do not submit it unless a feature explicitly asks for it. Where you submit such data anyway, you are responsible for having a lawful basis.

You are not obliged to give us personal data, but without some of it (for example an email address) we cannot provide an account.

## 3. Why we use your data, and our legal bases {#purposes}

| Purpose | Legal basis (GDPR / UK GDPR) |
|---|---|
| Provide the Services, create and manage your account, process orders | Contract (Art. 6(1)(b)) |
| Customer support and communication about your use of the Services | Contract; legitimate interests |
| Security, abuse and fraud prevention, enforcing our [Terms]({{url.terms}}) and [Acceptable Use Policy]({{url.acceptable_use}}) | Legitimate interests (Art. 6(1)(f)); legal obligation |
| Debugging, reliability, capacity planning and improving the Services | Legitimate interests |
{{#if feature.analytics}}| Usage analytics | Consent where required by law, otherwise legitimate interests |
{{/if}}{{#if feature.marketing}}| Product news and marketing emails | Consent, or legitimate interests for existing customers where the law allows; you can opt out at any time |
{{/if}}{{#if feature.ads}}| Advertising and measurement | Consent |
{{/if}}| Accounting, tax and other legal obligations | Legal obligation (Art. 6(1)(c)) |
| Establishing, exercising or defending legal claims; responding to authorities | Legitimate interests; legal obligation |
| Business transfers (merger, acquisition, asset sale) | Legitimate interests |

Where we rely on legitimate interests we have weighed them against your rights; you can ask for details and you can object (section 10). Where we rely on consent you may withdraw it at any time; that does not affect earlier processing.

{{#if feature.ai}}
### AI-assisted features {#ai}

Some features use machine-learning or generative models. When you use them, the content you submit as input is sent to the provider acting as our processor to produce the output.

- We do **not** use your content to train general-purpose models, and we require our providers not to, unless you explicitly opt in.
- AI output can be wrong, incomplete or biased. Do not rely on it for legal, medical, financial or other high-stakes decisions without human review.
- We do not make decisions with legal or similarly significant effects about you solely by automated means. Account restrictions for abuse are reviewed by a person on request (see [Acceptable Use Policy]({{url.acceptable_use}}), Enforcement).
- AI-generated content is labelled where the law requires it.
{{/if}}

## 4. Who we share data with {#sharing}

**We do not sell your personal data**, and we do not "share" it for cross-context behavioural advertising{{#if feature.ads}} except as described in the Cookie Policy and only where you have consented{{/if}}.

We share personal data only with:

- **Service providers (processors)** acting on our instructions under written agreements: hosting and infrastructure, email delivery, customer support tools, error monitoring{{#if feature.payments}}, payment processing{{/if}}{{#if feature.ai}}, AI providers{{/if}}. The current list is in our [Sub-processor List]({{url.subprocessors}}).
- **Platforms and app stores** you use to access the Services (for example Apple, Google, console or PC storefronts), which handle payments and may provide us with limited purchase and account data;
- **Other users or the public**, only as you direct (for example content you choose to publish{{#if feature.ugc}} or messages you send{{/if}}).
- **Professional advisers** (lawyers, auditors, insurers) under confidentiality.
- **Authorities, courts and affected parties** where required by law, to respond to valid legal process, to protect rights, safety or property, or to investigate abuse and fraud. We check requests for validity and, where lawful, tell you.
- **A successor** in a merger, acquisition, financing or sale of assets, who must honour this policy; we will notify you of material changes in control that affect your data.
- **Anyone else** only with your consent.

## 5. International transfers {#transfers}

We operate from {{company.country}}{{#if hosting.region}} and store data mainly in {{hosting.region}}{{/if}}. Some providers process data in other countries, including the United States. When personal data from the EEA, the UK or Switzerland is transferred to a country without an adequacy decision, we use a recognised safeguard: the EU-U.S. Data Privacy Framework (or its UK/Swiss extensions) where the recipient is certified, otherwise the European Commission's **Standard Contractual Clauses**, with the **UK International Data Transfer Addendum** or Swiss amendments where relevant, plus supplementary measures such as encryption in transit and at rest. You can request a copy of the relevant safeguards at [{{company.privacy_email}}](mailto:{{company.privacy_email}}).

## 6. How long we keep data {#retention}

| Data | Retention |
|---|---|
| Account data and content | While your account is active, then deleted or anonymised within {{policy.retention_account_days}} days after closure |
| Server and security logs | 90 days |
| Backups | Rolling, up to 35 days; deleted data ages out of backups on that cycle |
| Invoices and accounting records | {{policy.retention_billing_years}} years, or as long as the law requires |
| Support correspondence | Up to 3 years after the case closes, or while the account is active if longer |
| Records of consents, opt-outs and rights requests | As long as needed to demonstrate compliance |
| Data needed for a legal claim or investigation | Until the matter is resolved and limitation periods have passed |
| Abuse and ban records (identifier, reason, date) | Up to 5 years, to prevent repeat abuse |

When the purpose ends we delete or irreversibly anonymise the data.

## 7. Security {#security}

We use technical and organisational measures appropriate to the risk: encryption in transit, encryption of sensitive data at rest, access control with least privilege, authentication safeguards, logging, backups, vulnerability management and staff confidentiality obligations. No system is perfectly secure. Please use a strong, unique password, enable multi-factor authentication where offered, and tell us right away at [{{company.email}}](mailto:{{company.email}}) if you suspect your account was compromised. See also our [Security & Vulnerability Disclosure]({{url.security}}) page.

If a breach is likely to put your rights and freedoms at risk, we will notify the supervisory authority within 72 hours of becoming aware where required, and notify you without undue delay where the law requires it.

## 8. Children {#children}

{{#if feature.minors}}The Services are not directed at children under 13, and we do not knowingly collect personal data from them. Users aged {{policy.min_age}} and over who have not yet reached the age of majority may use the Services **only with the consent of a parent or guardian**, who may review, correct, limit or delete the minor's data and withdraw consent by contacting [{{company.privacy_email}}](mailto:{{company.privacy_email}}). We collect only the data needed for the Services, do not use minors' data for behavioural advertising, and apply age-appropriate defaults (private profiles, limited communications) where we can. Where the law sets a higher age of digital consent in a country, we require parental consent below that age.{{else}}The Services are not directed at children. You must be at least {{policy.min_age}} years old to hold an account. We do not knowingly collect personal data from anyone under {{policy.min_age}} (or the higher age of digital consent in their country; in the United States, under 13 for COPPA purposes). If you believe a child has given us personal data, contact [{{company.privacy_email}}](mailto:{{company.privacy_email}}) and we will delete it and close the account. Where a parent or guardian has validly consented to use by a minor, that consent can be withdrawn at any time.{{/if}}

## 9. Third-party sites and services {#third-parties}

The Services may link to or integrate with third-party sites, plug-ins and apps, including sign-in providers. We do not control them and are not responsible for their privacy practices; their own policies govern what they collect. Disconnect integrations in your account settings or in the third party's settings.

## 10. Your rights {#rights}

Depending on where you live, you can:

- **access** your data and get a copy;
- **correct** inaccurate data;
- **delete** your data ("right to be forgotten");
- **restrict** or **object** to processing, including direct marketing at any time;
- **port** your data to another provider in a machine-readable format;
- **withdraw consent** at any time;
- **not be subject to solely automated decisions** with legal or similarly significant effects;
- **complain** to a supervisory authority.

**Deleting your account.** You can delete your account and personal data {{#if feature.mobile}}inside the app (Settings, then Account, then Delete account), {{/if}}in your account settings on our website, or by email; we do not require you to contact support if self-service is available. Deleting an account is permanent after the grace period we show you. Uninstalling an app does not delete your account.

To exercise a right, email [{{company.privacy_email}}](mailto:{{company.privacy_email}}) or use the settings in your account. We may need to verify your identity and, if the request is manifestly unfounded or excessive, may charge a reasonable fee or decline, as the law permits. We respond within **one month** (extendable by up to two further months for complex requests; 45 days under US state laws, extendable by 45), and tell you the reason if we cannot comply. We will not discriminate against you for exercising your rights.

### 10.1 European Economic Area, United Kingdom, Switzerland

All the rights above apply. You may lodge a complaint with the authority in the country where you live, work or where the issue occurred ([list of EEA authorities](https://www.edpb.europa.eu/about-edpb/about-edpb/members_en); UK: [ICO](https://ico.org.uk); Switzerland: [FDPIC](https://www.edoeb.admin.ch)). Our lead authority is {{law.authority}}.

### 10.2 Serbia

Where the Serbian Law on Personal Data Protection applies, you have rights equivalent to those above, and may complain to the Commissioner for Information of Public Importance and Personal Data Protection (Poverenik), [www.poverenik.rs](https://www.poverenik.rs).

### 10.3 United States (California and other states) {#us-states}

This section supplements the above for residents of California and other US states with comprehensive privacy laws (including Virginia, Colorado, Connecticut, Utah, Texas, Oregon, Montana and others as they take effect).

- **Categories collected in the last 12 months:** identifiers (name, email, IP address, online identifiers); customer records; commercial information (plans, purchases); internet or network activity; approximate geolocation{{#if feature.location}} and precise geolocation with your permission{{/if}}; content you submit; inferences limited to operating the Services. We disclose these to service providers for the business purposes in section 3.
- **Sale and sharing:** we do not sell personal information and do not share it for cross-context behavioural advertising. We do not knowingly sell or share the data of anyone under 16.
- **Sensitive personal information:** we do not use it to infer characteristics, and do not use it beyond what is necessary to provide the Services.
- **Your rights:** know/access, delete, correct, portability, opt out of sale/sharing and of targeted advertising or profiling, limit use of sensitive data, and non-discrimination. We honour **Global Privacy Control** and similar browser opt-out signals as a valid opt-out request.
- **Authorised agents and appeals:** an authorised agent may submit requests with your written permission. If we deny a request, you may appeal by replying to our decision; if you remain dissatisfied you may contact your state attorney general.
- **California:** you can request a list of third parties to whom we disclosed personal information for their direct marketing in the previous calendar year ("Shine the Light"); we make no such disclosures. California residents under 18 who are registered users may request removal of content they posted publicly.

### 10.4 Brazil (LGPD)

You may request confirmation of processing, access, correction, anonymisation, blocking or deletion of unnecessary or excessive data, portability, information about the entities we share data with, information about the possibility of refusing consent and its consequences, and review of automated decisions. You may complain to the Autoridade Nacional de Proteção de Dados (ANPD).

### 10.5 Other regions

If you are elsewhere with a data-protection law we honour the equivalent rights your law grants. In particular:

| Where | What we add |
|---|---|
| **Canada** (PIPEDA, Québec Law 25) | You may access and correct your data, withdraw consent, and complain to the Office of the Privacy Commissioner or the Commission d'accès à l'information. Our privacy contact is the person in charge of protecting personal information; transfers outside Québec are assessed and safeguarded. |
| **India** (DPDP Act 2023) | You may access, correct, erase, nominate another person to exercise your rights if you die or are incapacitated, and use our grievance contact below; you may complain to the Data Protection Board. |
| **Australia, New Zealand** | You may request access and correction and complain to us, then to the OAIC (Australia) or the Privacy Commissioner (New Zealand). |
| **Japan, South Korea, Singapore, Thailand, Malaysia, Türkiye, UAE, Saudi Arabia, South Africa, Kenya, Nigeria and similar laws** | We apply the rights and safeguards those laws require (access, correction, deletion, objection, complaint to the local authority, safeguards for transfers). Contact us to use them. |
| **China** | The Services are not directed at people in mainland China; do not use them to submit personal data of people there. |

**Grievance / privacy contact for all regions:** [{{company.privacy_email}}](mailto:{{company.privacy_email}}), {{company.name}}, {{company.address}}. We acknowledge requests within 72 hours and resolve them within the time the applicable law allows.

## 11. Changes to this policy {#changes}

We may update this policy to reflect changes in the Services or the law. For material changes we will give at least {{policy.notice_days}} days' notice by email or in the Services before they apply to you, and ask for fresh consent where the law requires it. The "last updated" date above shows the current version; earlier versions are available on request.

## 12. Contact {#contact}

[{{company.privacy_email}}](mailto:{{company.privacy_email}}) · {{company.name}}, {{company.address}}
