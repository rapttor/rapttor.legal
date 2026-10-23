---
doc: security
title: Security & Vulnerability Disclosure
version: 1.0.0
updated: 2026-10-23
lang: en
summary: How to report security vulnerabilities in {{product.name}} and the safe-harbour rules for good-faith research.
---

# Security & Vulnerability Disclosure

*Version {{doc.version}}, last updated {{doc.updated}}.*

We take security seriously and welcome good-faith reports from researchers. Contact: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Scope {#scope}

In scope: {{product.name}}, {{company.website}} and our own subdomains, applications and APIs that we operate. **Out of scope:** third-party services and infrastructure, other customers' accounts and data, social engineering or phishing of our staff or users, physical attacks, denial-of-service and volumetric testing, spam, and findings that need unrealistic user interaction or outdated software.

## 2. Rules for testing {#rules}

If you test in good faith you must:

- test only against **your own accounts and data**; stop and report immediately if you reach someone else's data, and do not access, download, modify or keep more than is necessary to show the issue;
- not degrade the Services, run automated scans at high volume, or use exploits to persist, pivot or exfiltrate;
- not disclose the issue to others or publish details until we have had a reasonable time to fix it (**90 days** from your report, or sooner if we agree);
- follow the law and these rules.

## 3. Safe harbour {#safe-harbour}

If you comply with this policy we will treat your research as authorised, will not pursue or support legal action or account termination for it, and will work with you to understand and resolve the issue. This does not authorise breaking the law against third parties, and a third party may still act on its own. If in doubt, ask first.

## 4. What to send {#report}

A clear description of the vulnerability, affected URL or component, reproduction steps or proof of concept, impact, your contact details, and whether you want credit. Encrypt sensitive material if you can; ask for our key.

## 5. What happens next {#process}

We acknowledge within **3 business days**, triage, keep you informed, fix according to severity, and, if you wish, credit you. We do not currently run a paid bounty programme and cannot promise rewards, though we may offer thanks or swag.

## 6. Users: protect your account {#users}

Use a unique strong password and multi-factor authentication where offered, keep software updated, be wary of phishing, and report suspected compromise promptly to [{{company.email}}](mailto:{{company.email}}). Misusing a vulnerability or testing outside this policy violates the [Acceptable Use Policy]({{url.acceptable_use}}).
