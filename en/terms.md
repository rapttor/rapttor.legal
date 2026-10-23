---
doc: terms
title: Terms of Service
version: 1.0.0
updated: 2026-10-23
lang: en
summary: The agreement between you and {{product.name}} for using {{product.name}}.
---

# Terms of Service

*Version {{doc.version}}, last updated {{doc.updated}}.*

## 1. Agreement {#agreement}

These Terms of Service (the "**Terms**") are a binding agreement between you and **{{company.name}}**, {{company.address}}{{#if company.reg_id}}, registration no. {{company.reg_id}}{{/if}} ("**{{product.name}}**", "we", "us") governing your access to and use of {{product.name}}, our websites, applications, APIs, documentation and related services (the "**Services**").

By creating an account, installing an app, or otherwise using the Services you accept these Terms and the documents they incorporate: the [Privacy Policy]({{url.privacy}}), the [Acceptable Use Policy]({{url.acceptable_use}}), the [Cookie Policy]({{url.cookies}}){{#if feature.processor_role}}, the [Data Processing Addendum]({{url.dpa}}) where it applies{{/if}}{{#if feature.payments}}, the [Refunds & Cancellation Policy]({{url.refunds}}){{/if}}{{#if feature.game}}, the [Game Rules & Virtual Items Policy]({{url.game_rules}}){{/if}}{{#if feature.mobile}}, the [App Terms]({{url.app_eula}}){{/if}} and any order form or product-specific terms. If you do not agree, do not use the Services.

If you use the Services for an organisation, you confirm you have authority to bind it, and "you" includes that organisation. If product-specific terms or a signed agreement conflict with these Terms, they prevail for that product or customer only.

{{#if feature.consumers}}
**Consumers.** If you use the Services as a consumer, mandatory consumer-protection law of your country of residence continues to apply and nothing in these Terms limits those rights. Sections marked *(business customers)* apply only if you are not a consumer.
{{/if}}

## 2. Eligibility {#eligibility}

You may use the Services only if you:

1. {{#if feature.minors}}are at least **{{policy.min_age}}** years old and, if you have not reached the age of majority where you live, have the consent of a parent or legal guardian who accepts these Terms for you and is responsible for your use and purchases (we may ask for proof){{else}}are at least **{{policy.min_age}}** years old and able to form a binding contract{{/if}};
2. are not barred from receiving the Services under applicable law, including sanctions and export-control laws (section 22);
3. have not previously been removed from the Services for violating our rules, unless we agreed in writing to let you back; and
4. use the Services lawfully in the place where you are.

We may ask for proof of age, identity or authority at any time, and may refuse or close an account that fails the check.

## 3. Accounts and security {#accounts}

- Provide accurate, current information and keep it updated. One person or entity, one account, unless we agree otherwise; creating further accounts to evade a restriction, limit, ban, trial or pricing rule is prohibited.
- Keep your credentials confidential. Do not share, sell, rent or transfer your account. Each seat is for a single named individual unless the plan says otherwise.
- You are responsible for everything that happens under your account, including by people you allow in or whom you fail to keep out, until you tell us it is compromised. Tell us immediately at [{{company.email}}](mailto:{{company.email}}) if you suspect unauthorised access.
- We may require stronger authentication, reset credentials, or lock an account we reasonably believe is compromised or abused.
- Inactive free accounts may be closed after prior notice to the email on file; paid accounts are not closed for inactivity.

## 4. Licence and restrictions {#licence}

Subject to these Terms and payment of applicable fees, we grant you a limited, revocable, non-exclusive, non-transferable, non-sublicensable licence to access and use the Services for your own internal personal or business purposes during the term. Software we deliver is licensed, not sold. We and our licensors keep all rights not expressly granted.

Unless the law gives you a right that cannot be waived, you must not, and must not permit anyone to:

- copy, modify, translate or create derivative works of the Services;
- reverse engineer, decompile, disassemble or try to derive source code, models, weights, algorithms or non-public APIs;
- resell, sublicense, rent, lease, host as a service bureau, or make the Services available to third parties other than your authorised users;
- circumvent technical limits, licensing, metering, access controls, rate limits or security features;
- remove or alter proprietary notices, attributions or open-source licence notices;
- use the Services or their output to build or train a competing product, or to benchmark or publish performance results without our written consent{{#if feature.ai}}, or to train, fine-tune or distil an AI model from the Services' output where we prohibit it in the documentation{{/if}};
- access the Services by automated means (bots, scrapers, crawlers) except through our documented API under its terms.

The [Acceptable Use Policy]({{url.acceptable_use}}) adds detailed rules and is part of these Terms. Open-source components are governed by their own licences, which prevail for those components.

## 5. Acceptable use and enforcement {#acceptable-use}

You are responsible for your use of the Services and for the conduct of everyone you let use them. Misuse can harm other users, third parties and us, and we may act as described in the [Acceptable Use Policy]({{url.acceptable_use}}) and section 17, including removing content, restricting features, throttling, suspending or terminating accounts, withholding payouts, reporting to authorities, and pursuing remedies under section 21.

## 6. Your content {#your-content}

{{#if feature.ugc}}
"**Your Content**" means everything you upload, submit, publish, connect or generate through the Services{{#if feature.ai}}, including prompts and, as between you and us, the output you receive{{/if}}.

- **Ownership.** You keep all rights in Your Content. We acquire no ownership.
- **Licence to us.** You grant us a worldwide, non-exclusive, royalty-free licence to host, store, reproduce, process, transmit, adapt (for formatting, thumbnails, translations, safety checks) and display Your Content **only as needed to operate, secure, support and improve the Services and to enforce these Terms**, for as long as you keep it in the Services and for the limited backup and legal-hold periods afterwards. Where you make content public, the licence extends to showing it to the audience you choose. This licence ends when you delete the content or your account, subject to those periods and to copies other users already received lawfully.
- **Your promises.** You have, and will keep, all rights, consents and permissions needed to submit Your Content and to grant this licence, including from any person identifiable in it; Your Content and our use of it as permitted do not infringe or violate any law or any person's rights (copyright, trademark, privacy, publicity, confidentiality, contract); and it complies with the [Acceptable Use Policy]({{url.acceptable_use}}).
- **Moderation.** We have no general duty to monitor Your Content, but we may review, remove, restrict or refuse content that we reasonably believe violates the law, the Terms or others' rights, or that we receive a valid notice about (see [Copyright & Illegal Content Notices]({{url.copyright}})). Where required (for example under the EU Digital Services Act) we tell you our reasons and how to contest the decision.
- **Backups.** You are responsible for keeping your own copies of Your Content. Unless a plan expressly includes backups or retention, we do not promise to restore deleted or lost content.
- **Aggregated data.** We may use usage data that does not identify you or reveal Your Content to operate, secure and improve the Services.
{{else}}
You keep all rights in anything you submit to the Services. You grant us the limited licence needed to process it to provide, secure and support the Services, and you promise you have the right to submit it. You are responsible for keeping your own copies.
{{/if}}

## 7. If you serve other people with the Services {#end-users}

If you use the Services to provide something to your own customers, users, employees or other third parties ("**End Users**"), you are solely responsible for them: you must have the lawful basis, notices and consents required for any personal data you collect or process, agree your own terms with them, handle their requests and complaints, ensure their compliance with the [Acceptable Use Policy]({{url.acceptable_use}}), and not make commitments on our behalf. You are liable for End Users' acts and omissions as if they were yours. We have no obligations to End Users.

## 8. AI features {#ai}

{{#if feature.ai}}
- Outputs are generated automatically and may be inaccurate, incomplete, offensive, biased or similar to outputs given to others. You must evaluate output before relying on it and take responsibility for how you use it.
- **Do not use AI features as the sole basis for decisions that have legal or similarly significant effects on people** (for example employment, credit, housing, insurance, education, healthcare, law enforcement or immigration) and do not use them for medical, legal, financial or safety-critical advice without qualified human review.
- You must disclose AI-generated or manipulated content to the extent the law or the platform you publish on requires (including deepfakes and synthetic media), and must not present AI output as human-made where that would deceive.
- You must not use the features for any prohibited use in the [Acceptable Use Policy]({{url.acceptable_use}}), or try to bypass safety systems (including prompt-injection, jailbreaking or extraction attacks against our systems or others').
- Providers we use may apply their own usage policies; we may restrict features accordingly. We do not use Your Content to train general-purpose models unless you opt in (see the [Privacy Policy]({{url.privacy}})).
{{else}}
The Services do not currently include AI-assisted features. If we add them, we will update these Terms and give notice under section 16, and the rules for them (accuracy, human review, disclosure, no prohibited uses) will apply.
{{/if}}

## 9. Fees and payment {#fees}

{{#if feature.payments}}
- **Prices and taxes.** Prices are shown at purchase and exclude VAT, sales and similar taxes unless stated; you pay applicable taxes. Prices for consumers include the taxes required by law.
- **Payment.** You authorise us and our payment processor to charge the payment method you give us for all amounts due, including renewals and usage-based charges. You promise you are entitled to use that payment method, and must keep details current.
{{#if feature.subscriptions}}- **Subscriptions.** Unless stated otherwise at checkout, subscriptions renew automatically for periods of the same length until cancelled. Cancel any time in your account or by email before the renewal date; cancellation takes effect at the end of the paid period and we do not pro-rate. We tell you in advance, as the law requires, before a trial converts or a renewal price changes.
- **Trials and promotions.** One trial or promotional offer per person or business. We may withdraw or refuse an offer where we suspect abuse (multiple accounts, fake identities, circumvented limits).
{{/if}}{{#if feature.credits}}- **Credits.** Prepaid credits, tokens or in-app currency are a limited licence to use the Services, not money, have no cash value, are non-transferable, cannot be redeemed for money or traded, and may expire as stated at purchase. Unused credits are forfeited when an account is closed for breach; in other cases refunds follow the rules below and applicable law.{{#if feature.game}} Virtual items in games are governed by the [Game Rules & Virtual Items Policy]({{url.game_rules}}).{{/if}}
{{/if}}- **Price changes.** We may change prices prospectively with at least {{policy.notice_days}} days' notice. If you do not agree, cancel before the change takes effect.
- **Late or failed payment.** We may retry the charge, suspend or downgrade the account, and charge reasonable recovery costs and statutory interest on overdue business invoices. Services are restored once the arrears are paid.
- **Chargebacks and fraud.** Opening a chargeback or payment dispute without first contacting us at [{{company.email}}](mailto:{{company.email}}), or fraudulent or unauthorised payments, may lead to immediate suspension, loss of access to content, and recovery of the disputed amount and our processing fees.
- **Refunds.** Except where the law gives you a right or we state otherwise in writing, fees paid are non-refundable, including for partial periods and unused features, and no refund is due if we suspend or terminate your account for breach.
{{#if feature.consumers}}- **Cancellation, withdrawal and refunds.** Consumer withdrawal rights, how to cancel, and when we refund are set out in the [Refunds & Cancellation Policy]({{url.refunds}}), which is part of these Terms. For digital content or services supplied immediately at your request we ask for your express consent and acknowledgement at checkout, as the law requires.
{{/if}}
{{else}}
The Services are currently offered free of charge. We may introduce paid features in future; they will be presented to you clearly and you are never charged without your agreement.
{{/if}}

## 10. API, integrations and third-party services {#integrations}

{{#if feature.api}}
API access is subject to these Terms, the documentation and any rate limits. You must protect your API keys and credentials, are responsible for all calls made with them, and must not share them, embed them in public code or use them to resell access. We may rotate, limit or revoke keys and change or retire API versions with reasonable notice (shorter where needed for security or legal reasons). Do not use the API in a way that degrades the Services for others or tries to circumvent limits, for example by using many keys or accounts.

{{/if}}
The Services may work with third-party products, websites and services that we do not control. Your use of them is under their terms. We are not responsible for them, for their availability or changes, or for how they use data you choose to share with them. We may stop supporting an integration at any time.

## 11. Beta and free features {#beta}

Features labelled alpha, beta, preview, experimental or similar, and free tiers, are provided "as is", may change or be withdrawn at any time, may be less reliable, and are excluded from any service-level commitment. Do not rely on them for critical purposes.

## 12. Intellectual property {#ip}

The Services, including software, design, text, graphics, data, marks, logos and documentation, are owned by us or our licensors and are protected by copyright, trademark and other laws. Nothing in these Terms transfers any ownership to you, and no right to use our names or marks is granted except as needed to use the Services.

**Feedback.** If you send suggestions or ideas, you give us a perpetual, irrevocable, worldwide, royalty-free, sublicensable licence to use them without restriction or credit, to the extent permitted by law. We have no duty to act on feedback.

Copyright and illegal-content notices: see [Copyright & Illegal Content Notices]({{url.copyright}}).

## 13. Confidentiality (business customers) {#confidentiality}

Each party will keep the other's non-public business and technical information confidential, use it only to perform or exercise rights under these Terms, and protect it with reasonable care, except for information that is public through no fault of the recipient, was already known, was independently developed, or must be disclosed by law (with prior notice where lawful). The duty lasts for three years after the Terms end and indefinitely for trade secrets.

## 14. Privacy and data protection {#privacy}

Our [Privacy Policy]({{url.privacy}}) explains how we process personal data. {{#if feature.processor_role}}Where we process personal data for you as your processor, the [Data Processing Addendum]({{url.dpa}}) applies and forms part of these Terms.{{/if}} You must comply with data-protection law in your use of the Services and must not submit special-category or regulated data (health, payment card, government identifiers, children's data) unless a feature or agreement expressly allows it.

## 15. Availability, support and changes {#availability}

We aim for high availability but do not guarantee uninterrupted or error-free operation. We may perform maintenance (with notice where reasonably possible), and may modify, add or remove features. If we materially reduce a paid feature during a prepaid term, we will give you at least {{policy.notice_days}} days' notice and, where you cannot reasonably continue, a pro-rata refund of the affected prepaid period. Support is provided at [{{company.email}}](mailto:{{company.email}}) on a reasonable-efforts basis unless your plan includes a service-level agreement.

## 16. Changes to these Terms {#changes}

We may update these Terms for legal, security, product or business reasons. For material changes we will give at least **{{policy.notice_days}} days'** notice by email or in the Services before they apply to you. If you do not agree, you may stop using the Services and close your account before the effective date, and (for paid plans) request a pro-rata refund of prepaid fees for the period after that date. Continuing to use the Services after the effective date means you accept the updated Terms. Changes required by law, or that reduce nothing and add no obligation, may take effect immediately. Changes do not apply to disputes already pending.

## 17. Suspension and termination {#termination}

**By you.** You may stop using the Services and close your account at any time in your settings or by email. Paid fees are not refunded unless section 9 or the law says so.

**By us, for convenience.** We may end paid plans on {{policy.notice_days}} days' notice (with a pro-rata refund of prepaid fees) and may discontinue free services on reasonable notice.

**By us, for cause.** We may, with or without prior notice and to the extent permitted by law, restrict, suspend or terminate your access, remove content, or close your account immediately if:

- you breach these Terms or the Acceptable Use Policy (the response is proportionate to the seriousness, repetition and risk);
- we reasonably believe your use creates security, legal, regulatory, reputational or financial risk to us, other users or third parties;
- you fail to pay when due;
- a court, authority or applicable law requires it; or
- your account appears compromised, fraudulent or abandoned.

Where practical and lawful we will tell you why and give you a chance to respond or fix the issue first, and where the law requires (for example the EU Digital Services Act) we provide a statement of reasons and a way to appeal. If we suspend or terminate you for breach, no fees are refunded and amounts due remain payable.

**Effects.** On termination your licence ends; you must stop using the Services; and, on request within **{{policy.retention_account_days}} days**, we will make Your Content available for export where technically feasible (not where it is unlawful or would harm others). After that period we delete it as described in the [Privacy Policy]({{url.privacy}}). Sections that by nature should survive do so, including 4, 6 (licence limits and your promises), 9 (amounts due), 12, 13, 17-24 and 26.

## 18. Warranties and disclaimer {#disclaimer}

We provide the Services with reasonable skill and care. **Otherwise, to the maximum extent permitted by law, the Services are provided "as is" and "as available", and we disclaim all other warranties, express or implied,** including merchantability, fitness for a particular purpose, non-infringement, accuracy, availability, and that the Services will be secure, error-free, uninterrupted or free of harmful components. We do not warrant outputs, third-party content, or results you obtain. The Services are not designed for use in high-risk environments where failure could cause death, personal injury or severe damage (for example medical devices, aviation, nuclear or life-support systems), and you may not use them that way.

{{#if feature.consumers}}If you are a consumer, you keep any statutory rights that cannot be excluded, such as the statutory guarantees and remedies for digital content and services under EU and UK law and the consumer guarantees under the Australian Consumer Law and similar laws elsewhere.{{/if}}

## 19. Limitation of liability {#liability}

Nothing in these Terms excludes or limits liability that cannot be excluded or limited by law, including for death or personal injury, fraud or wilful misconduct, gross negligence, or (for consumers) mandatory statutory remedies.

Subject to that, **to the maximum extent permitted by law** and for business customers:

1. we are not liable for indirect, incidental, special, consequential, exemplary or punitive damages, or for loss of profit, revenue, business, goodwill, anticipated savings, or data, arising from or connected with the Services or these Terms, even if advised of the possibility; and
2. our total aggregate liability for all claims is limited to the greater of (a) the fees you paid us for the Services in the **{{policy.liability_cap_months}} months** before the event first giving rise to the claim and (b) EUR 100.

{{#if feature.consumers}}For consumers, we are liable for foreseeable loss or damage caused by our breach or negligence, but not for loss that was not foreseeable, nor for business-related loss.{{/if}}

We are not liable for failure or delay caused by events beyond our reasonable control (section 24). Free services are provided without liability beyond what the law requires. These limits apply however liability arises (contract, tort including negligence, or otherwise) and even if a remedy fails of its essential purpose.

## 20. Indemnity {#indemnity}

If you are a business customer, you will defend, indemnify and hold harmless {{company.name}}, its affiliates, officers, employees and agents from claims, damages, losses, penalties and expenses (including reasonable legal fees) arising from (a) Your Content or your data, (b) your or your End Users' breach of these Terms or the law, (c) your misuse of the Services, or (d) a dispute between you and a third party. We will tell you promptly of any claim, let you control the defence (we may take part at our cost), and you may not settle a claim that admits fault for us without our consent. {{#if feature.consumers}}Consumers are liable only for the loss they cause by their own breach, as the law provides.{{/if}}

## 21. Remedies for misuse {#remedies}

In addition to other rights, and to the extent permitted by law:

- **Injunctive relief.** You acknowledge that breach of sections 4, 5 or 13 may cause harm that damages cannot fully remedy, and we may seek injunctive or other equitable relief without proving actual damage or posting a bond.
- **Costs of abuse.** If your misuse causes us costs (extra infrastructure, incident response, investigation, chargebacks, regulatory fines or claims by third parties), you will reimburse the reasonable, documented costs.
- **Evidence and cooperation.** We may preserve logs and content related to suspected abuse, and may disclose them to affected parties, platforms, law enforcement or regulators where the law permits. Reasonably cooperate with our investigations.
- **Reporting.** We may report unlawful activity (including child sexual abuse material, fraud, threats, malware and attacks on systems) to authorities and to the affected parties, and will do so where the law requires it.
- **Withholding.** We may withhold, freeze or set off amounts owed to you (for example payouts) against amounts you owe us or that result from abuse, subject to law.

## 22. Export, sanctions and anti-corruption {#export}

You may not use, export or re-export the Services in violation of applicable export-control and sanctions laws, including those of the EU, the United States, the United Kingdom and the UN, or to or for persons or countries subject to comprehensive sanctions. You confirm you and your users are not on any sanctions or restricted-party list. You will not offer or give anything of value to improperly influence anyone in connection with the Services.

## 23. Governing law and disputes {#law}

These Terms and any dispute or claim arising out of or in connection with them or the Services (including non-contractual disputes) are governed by the laws of **{{law.governing}}**, without regard to conflict-of-law rules, and excluding the UN Convention on Contracts for the International Sale of Goods.

**Informal resolution first.** Before starting formal proceedings, write to [{{company.legal_email}}](mailto:{{company.legal_email}}) with a description of the dispute, and let us try to resolve it in good faith for at least 30 days.

**Courts.** Unless mandatory law says otherwise, the exclusive jurisdiction is **{{law.venue}}**. Either party may seek urgent injunctive relief in any competent court.

{{#if feature.consumers}}**Consumers.** If you are a consumer, you also keep the right to bring proceedings in the courts of your country of residence and to rely on the mandatory consumer-protection law there, and nothing in this section removes that. {{#if consumer_dispute}}We participate in out-of-court dispute resolution before {{consumer_dispute}}.{{/if}}
{{/if}}
**Time limit (business customers).** To the extent permitted by law, any claim must be brought within {{policy.claim_months}} months after the cause of action arose, otherwise it is waived.

**No class actions (business customers, where permitted).** Claims may be brought only on an individual basis, not as part of a class, collective or representative proceeding.

## 24. Force majeure {#force-majeure}

Neither party is liable for delay or failure caused by events beyond its reasonable control, including natural disaster, war, terrorism, civil unrest, pandemic, government action, power, internet or telecommunications failure, failures of cloud or other third-party infrastructure providers, cyber-attacks despite reasonable security measures, labour disputes (other than of the party's own staff), or supply failures. Payment obligations for services already delivered are not excused. If such an event lasts more than 60 days, either party may terminate the affected services.

## 25. Electronic communications and notices {#notices}

You consent to receive notices and agreements electronically. We may give notice by email to the address on your account, in the Services, or by posting on our website. Notices to us must be sent to [{{company.legal_email}}](mailto:{{company.legal_email}}) and to {{company.address}}. Notice is deemed received 24 hours after an email is sent without a bounce-back, and when posted or displayed in the Services.

## 26. General {#general}

- **Entire agreement.** These Terms and the documents they reference are the entire agreement on their subject and replace prior understandings. You did not rely on any statement not set out in them.
- **Severability.** If a provision is unenforceable it is limited to the minimum extent necessary, or replaced by an enforceable one closest to its intent; the rest stays in force.
- **No waiver.** Not exercising a right is not a waiver of it.
- **Assignment.** You may not assign or transfer your rights or obligations without our written consent. We may assign these Terms to an affiliate or successor to our business, and will notify you.
- **Relationship.** The parties are independent contractors. Nothing creates a partnership, agency, employment or joint venture.
- **Third parties.** No one else has rights to enforce these Terms, except our affiliates, officers and agents under sections 19 and 20.
- **Language.** Translations are provided for convenience; where they differ, the English version prevails unless mandatory law requires otherwise.
- **Interpretation.** Headings are for convenience. "Including" means "including without limitation".
- **Publicity.** We may name you as a customer with your logo unless you opt out by email; consumers are never named.

## 27. Contact {#contact}

{{company.name}}, {{company.address}}{{#if company.reg_id}} · Reg. no. {{company.reg_id}}{{/if}}{{#if company.tax_id}} · Tax ID {{company.tax_id}}{{/if}}
Email [{{company.email}}](mailto:{{company.email}}) · Legal [{{company.legal_email}}](mailto:{{company.legal_email}}) · Support [{{company.email}}](mailto:{{company.email}}) · See also our [Legal Notice]({{url.impressum}}).
