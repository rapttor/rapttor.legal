---
doc: cookies
title: Cookie Policy
version: 1.0.0
updated: 2026-10-23
lang: en
summary: Which cookies and similar technologies {{product.name}} uses, why, and how to control them.
---

# Cookie Policy

*Version {{doc.version}}, last updated {{doc.updated}}.*

This policy explains how **{{company.name}}** uses cookies and similar technologies on {{product.name}} and our other Services. Personal data collected through them is handled as described in the [Privacy Policy]({{url.privacy}}).

## 1. What they are {#what}

Cookies are small files stored on your device by a website. "Similar technologies" include local and session storage, device identifiers and SDKs in mobile apps, pixels, and fingerprinting-like signals. We use the word "cookies" for all of them.

## 2. Categories we use {#categories}

| Category | Purpose | Consent needed? |
|---|---|---|
| **Strictly necessary** | Keep you signed in, remember your cart or settings for a session, protect against fraud and CSRF attacks, balance server load, store your cookie choices | No: required for the Services to work or to deliver what you asked for |
| **Preferences** | Remember language, theme, layout and similar choices | Yes, unless strictly necessary for a feature you requested |
{{#if feature.analytics}}| **Analytics** | Measure how the Services are used and find errors so we can improve them | Yes (where the law requires it) |
{{/if}}{{#if feature.ads}}| **Advertising / marketing** | Show and measure relevant ads, limit repeats, and link activity across sites and apps | Yes |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}We currently use **only strictly necessary and preference cookies** and no analytics or advertising cookies.{{/unless}}{{/unless}}

## 3. The cookies in detail {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
The exact cookie names, providers and durations are listed in the cookie settings dialog, and available on request at [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
{{/if}}

## 4. Your choices {#choices}

- **Consent banner / settings.** Where consent is required we ask before setting non-essential cookies, with a clear option to refuse as easy as to accept. You can change or withdraw your choice at any time through the cookie settings link in the footer. Withdrawal does not affect earlier processing.
- **Browser controls.** Most browsers let you block or delete cookies; look under Settings → Privacy. Blocking strictly necessary cookies may break sign-in and other features.
- **Signals.** We treat Global Privacy Control (GPC) and similar browser opt-out signals as a refusal of non-essential tracking and of sale/sharing of personal data.
{{#if feature.ads}}- **Advertising choices.** Opt out of interest-based advertising through your device settings (resetting or limiting your advertising identifier) and tools such as youronlinechoices.eu or optout.aboutads.info. You will still see ads, just less relevant ones.
{{/if}}
## 5. How long they last {#duration}

Session cookies expire when you close the browser. Persistent cookies last for the period shown in the table, and in any case not longer than the law recommends (generally no more than 13 months for analytics and advertising consent, which we ask you to renew).

## 6. Third parties {#third-parties}

Some cookies are set by third parties whose services we use (analytics, embedded media, payment, support chat). They act under their own policies and, where they are independent controllers, you should read those. We list them in the table above.

## 7. Changes {#changes}

If we add or change non-essential cookies, we update this policy and ask for your consent again where required. Questions: [{{company.privacy_email}}](mailto:{{company.privacy_email}}).
