---
doc: app_checklist
title: App security and compliance checklist for AI coding agents
version: 1.0.1
updated: 2026-10-31
lang: en
summary: Rules an AI coding agent must follow in every app that publishes its legal pages with rapttor/yii2-legal.
public: false
---

# Security and compliance checklist for {{product.name}}

You are an AI coding agent working on **{{product.name}}** ({{company.name}}). The legal pages of this app promise things about how it behaves, and AI-generated apps often break those promises: open tables, keys in the browser, public uploads, trackers added "for analytics". Follow this list on every change. When a rule cannot be met, or you are unsure, **stop and ask the owner**; do not ship a guess, and never confirm a legal claim (`php yii legal/claims`) that is not true. This is engineering guidance, not legal advice.

## 0. Always

- Deny by default. A new route, query, file, job or API starts closed and is opened on purpose.
- Before finishing a task, run the app's tests and `php yii legal/check`. A change that adds a feature (upload, email, payment, tracker, third-party script, account type) must update the feature flags in the legal config, and the legal pages must still be true.
- Never add a dependency you have not verified exists and is maintained (AI suggestions invent package names). Keep the lockfile. Never disable security checks to make something work.
- Never log secrets, tokens, full emails or file contents. Never put real personal data in tests or fixtures.

## 1. Row-level access (who can see what)

- Every record has an owner (user) and, in organisation accounts, an organisation. Only the creator and the profiles the owner gave access to (operators, members, with roles) may read or change it.
- Enforce this **on the server, in the query**: scope every `SELECT/UPDATE/DELETE` by owner or organisation membership (`WHERE owner_id = :me` or a membership join). Never trust an id from the URL, form, JSON or cookie. Checking only in the UI is not a check.
- It applies to lists, search, detail pages, exports, downloads, file URLs, background jobs, webhooks, caches and admin screens. An admin or support override is a separate, logged action.
- Databases with row-level security (Postgres, Supabase): turn it on for **every** table, write the policies, and test them. A table without a policy is public.
- Write a test with two users and two organisations that proves user B gets 404/403 for every object of user A (read, write, delete, download, list).

## 2. Keys and secrets

- No secret in browser code, HTML, JavaScript bundles, mobile apps, public repositories or error pages. Only keys designed to be public (for example a payment provider's client-side token or publishable key) may reach the client.
- Everything else lives in server environment variables, outside the repository. Call third-party APIs (AI, email, payments, storage) from the server, never from the browser. A `.env` file is in `.gitignore`.
- A leaked key is rotated, not deleted from history. Webhooks from providers are verified with their signature and processed idempotently.

{{#if feature.uploads}}
## 3. Uploads and files

- Uploads are **private by default**: reachable only after an access check (section 1), through unguessable ids, with short-lived signed URLs where the platform supports them. Never a public bucket or a public folder.
- **Never** use a user's uploaded images or files to build anything public: templates, guidelines, examples, marketing pages, sitemaps, social previews, galleries, training or demo data. Public content comes only from material the owner explicitly published.
- Users who are not logged in never receive a user's file, thumbnail or preview.
- Validate type by content, size and count; store outside the web root or in object storage; serve with `Content-Disposition` and `X-Content-Type-Options: nosniff`, from a separate domain if possible; never execute uploads. Strip EXIF and location metadata from images unless the owner needs it.
- Show the upload responsibility consent (section 6): the user confirms they own the rights and can be held accountable.
- Delete files with the account (including thumbnails and caches); backups age out.
{{/if}}

## 4. Accounts, sign-in and age

- Sign in with a magic link: random token of at least 128 bits, stored only as a hash, valid 10 to 15 minutes, single use, rate-limited per email and IP, answering the same message for unknown and known emails. Open the link on a page with a **button that sends a POST** (email scanners follow links and would burn a GET). Send no tokens to logs, analytics or third parties, and allow only same-site redirect targets.
{{#if feature.anonymous}}- **Anonymous accounts** are created automatically with a random id and no personal data, limited per IP, and can be connected to an email later with the same magic link, which keeps the data. They get the same consent screens as every account (section 6) before any feature, including the age confirmation. Clean up unused anonymous accounts after notice.
{{/if}}{{#if feature.age_gate}}- **Age confirmation** (on by default; minimum {{policy.age_gate}}, for {{policy.age_topics|age-sensitive content}}): show a neutral screen before the first age-sensitive feature: "I am at least {{policy.age_gate}} years old and of legal age under the rules of my country to use this." Never pre-tick, never suggest the "right" answer, do not collect a date of birth, store only the confirmation (version, time). A user who does not confirm gets no access and no stored profile. A tick box is **not enough** where the law demands real age verification (gambling, adult content, some social features in some countries): ask the owner before launching those.
{{/if}}- Sessions: secure, HttpOnly, SameSite cookies; regenerate the session id on login; log out everywhere on account deletion.

## 5. Tracking and third-party resources

- **No session replay or screen recording** of any kind, and no fingerprinting. This includes Hotjar, FullStory, Microsoft Clarity, LogRocket, Smartlook, Mouseflow, PostHog recordings and the replay options of error monitors (for example Sentry Replay): keep them off or do not add them. Never add a tracker to an app without owner approval and a legal-config change.
- Analytics and advertising scripts load only after consent (`Yii::$app->legal->consent()->allows('analytics')`); Global Privacy Control means no.
- **Self-host fonts, icons, scripts and styles.** Do not load Google Fonts, CDNs (jsDelivr, cdnjs, unpkg), Gravatar or similar from third-party servers: they receive the visitor's IP address, which German courts have treated as a privacy violation without consent.
{{#if feature.external}}- Anything that really must come from another server (maps, video, captcha, chat) is registered in the legal config `data.external` (key, name, provider, purpose, country), loaded only if `Yii::$app->legal->external()->allows('<key>')`, and has a fallback when refused. The cookie settings show the list as per-item consent.
{{else}}- If a third-party resource becomes necessary, ask the owner first: it needs an entry in `data.external`, the feature flag `external`, per-item consent and a fallback.
{{/if}}

## 6. Consents the user must give

- After sign-in, before using the app, the user sees a **list of consents**, one checkbox each, never pre-ticked. **These are on by default and an app asks for them unless the owner explicitly switches one off**: the Terms and the Privacy Policy (required), the age and legal-age confirmation (required), and the confirmation that the user owns or may use what they upload or enter and can be held accountable (required){{#if feature.external}}, each third-party resource (optional){{/if}}{{#if feature.marketing}}, product emails (optional){{/if}}{{#if feature.gambling}}, gambling: legal age ({{policy.gambling_age}}+) and lawfulness where the user lives (required, and see the age-verification warning above){{/if}}. Only things the app is really about are opt-in: gambling (`feature.gambling`) and app-specific requirements (the `consents` setting: for example chat rules, distribution of content). Do not remove a default-on consent to "simplify" the sign-up; ask the owner.
- Each consent has a key, a **version**, a text, and whether it is **required**. The answers are stored with the account (JSON or table): key, version, granted yes/no, time, language. Use the plugin's consent registry (`Yii::$app->legal->consents()`, the `ConsentGate` filter and the `/legal/consents` page) instead of writing your own.
- When a document or consent changes in a way that matters (new version), ask again at the next sign-in. Required items block use until accepted; optional items are asked once per new version and may be declined. Show the screen even for optional items, but never make an optional consent a condition for the service.
- Never hide, pre-tick, bundle or make it easier to accept than to refuse.
- **One mechanism only.** A "we updated our terms" popup that lists only the documents is not enough: the same screen must also carry the age and legal-age confirmation{{#if feature.age_gate}} ({{policy.age_gate}}+){{/if}}, the upload responsibility and any optional choices. If the app shows a terms-only popup, replace it with the consents checklist (`ConsentGate`); do not build a second popup next to it.
- **Where the answers live.** Keep them with the user's profile: a JSON column on the user record, for example `consents`, holding one entry per consent key with its version, whether it was granted, when, in which language and where (for example `"terms": {"v": "1.1", "granted": true, "at": 1761900000, "lang": "en", "source": "consents"}`, `"age": {"v": "18", "granted": true, ...}`), or the plugin's own table. Configure `consentStore` (`JsonAttributeConsentStore`) and add the column in a migration. Never store consents only in the browser (cookie, localStorage, session): they must survive logout, new devices and anonymous-to-email upgrades.
- **If a screen is missing, check in this order:** the feature flag for it in the legal config (`age_gate`, `uploads`, `marketing`, `external`), that `ConsentGate` is attached, that the route is not in `exceptRoutes`, that the user is signed in (anonymous accounts are real users, so they pass the gate too), and that the installed `rapttor/yii2-legal` is version 2 or newer. `php yii legal/check` prints hints for most of these.

{{#if feature.email}}
## 7. Emails

- Verify that the sending domain has SPF, DKIM and DMARC. Keep the complaint rate low.
- **Know how your email provider handles unsubscribe.** Some providers (Postar, for example) append their own unsubscribe link to every message, cannot be told not to, and block **all** mail from the project to that address when it is used, sign-in links included. With such a provider: do not add a second link (set `providerFooter` so the footer leaves ours out), send optional news from a different provider or project so "no more news" can never block sign-in mail, and when sending to a blocked address returns an error such as 422 `recipient_unsubscribed`, show the provider's resubscribe URL instead of retrying.
- **Optional/marketing emails**: `List-Unsubscribe` and `List-Unsubscribe-Post: List-Unsubscribe=One-Click` headers, a visible link, and a single page that stops them **immediately** (US law forbids more than visiting one page; Gmail and Yahoo want it within 2 days). Use `Yii::$app->legal->email()->unsubscribeHeaders($to)`.
- **Every email** (including sign-in links and receipts) has a footer link (your own, or the provider's when it adds one) "stop email from {{product.name}}" to the page that blocks **all** email: the user enters the address, receives one last email with a magic link, and only that confirmation adds the address to the sender's no-send list (so nobody can lock another person out of their sign-in emails). Do not put a one-click unsubscribe into sign-in or security emails.
- Check `Yii::$app->legal->email()->isSuppressed($address, $kind)` before sending optional mail, and never send optional mail to someone who withdrew.
{{/if}}

{{#if feature.payments}}
## 8. Payments and subscriptions

- Never touch card numbers; use the provider's hosted or embedded checkout. Store only provider ids and status. Verify webhook signatures; do not grant access from the browser's redirect alone.
- **Next to the pay button** (visual proximity, not on another page) show: the price and currency including taxes where the law requires, the billing period, that it renews automatically{{#if feature.subscriptions}}, what happens after any trial (date and price), how to cancel{{/if}}, and links to the Terms, the Refunds & Cancellation Policy and the Privacy Policy. Use `rapttor\yii2legal\widgets\CheckoutDisclosure`. Consent is an unchecked box or a clearly labelled "order with obligation to pay" button; keep the record at least three years and send a confirmation the customer can keep.
{{#if feature.subscriptions}}- Provide a direct **cancel button** in the account that works online without calls, forms or retention walls (a login is allowed). Send reminders: 15 to 45 days before a yearly renewal, an annual reminder, and a notice before a trial converts.
{{/if}}{{#if feature.consumers}}- Consumers in the EU have a **withdrawal function** from 19 June 2026: a labelled "Withdraw from contract" function in the account and order confirmation, a confirmation step and an acknowledgement email (`WithdrawalLink` widget and `/legal/withdraw`).
{{/if}}{{#if feature.merchant_of_record}}- {{payments.provider|The payment provider}} is the merchant of record: show its name in the order flow and link its checkout terms, and keep our Terms, Refunds and Privacy pages public (no login) so they can be checked.
{{/if}}{{/if}}

## 9. User content, copyright and notices

- Keep the Copyright & Illegal Content Notices page reachable, act on notices promptly, remove repeat infringers.
{{#if feature.ugc}}- A US company or any provider storing user content that wants US safe harbour registers a **DMCA designated agent** with the US Copyright Office (online directory, Login.gov sign-in, USD 6, renew every three years) and shows the agent on the Copyright page (`company.dmca_agent`, `company.dmca_number`). Ask the owner whether it is done.
{{/if}}- For content that is shown to others: moderation tools, a report button, and a way to appeal.

## 10. Web and server basics

- HTTPS everywhere with HSTS. Cookies `Secure`, `HttpOnly`, `SameSite`. CSRF protection on every state-changing request. Output escaped by default; a Content Security Policy; no inline user HTML.
- Parameterised queries only. Whitelist fields on mass assignment. Validate and bound every input. Allow only expected redirects and outbound hosts (SSRF). No wildcard CORS with credentials.
- Rate-limit sign-in, magic links, uploads, exports and expensive endpoints.
- Production runs with debug off: in Yii2 `YII_DEBUG` false and `YII_ENV` prod, the debug toolbar and Gii removed, no stack traces in responses.
- Database users have the minimum rights. Admin accounts need a second factor. Backups are encrypted and tested.
- Account deletion removes data, files and sessions; keep only what the law requires (consent records, no-send entries, invoices) and say so.

## 11. Before release

1. Two-user access test passes (section 1). Secrets scan of the repository and the built frontend is clean (section 2).
2. `php yii legal/check` passes; every relevant claim in `php yii legal/claims` is true and listed in `confirmedClaims`.
3. The legal pages describe the features the app really has (feature flags match).
4. The owner has been told about anything above that you could not do.
