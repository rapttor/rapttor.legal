---
doc: security
title: Säkerhet och sårbarhetsrapportering
version: 1.0.1
updated: 2026-10-23
lang: sv
translation_of: 1.0.1
status: draft
summary: Så här rapporterar du säkerhetssårbarheter i {{product.name}} och reglerna om skydd för forskning i god tro.
---

# Säkerhet och sårbarhetsrapportering

*Version {{doc.version}}, senast uppdaterad {{doc.updated}}.*

Vi tar säkerheten på allvar och välkomnar rapporter i god tro från forskare. Kontakt: **[{{company.email}}](mailto:{{company.email}})**.

## 1. Omfattning {#scope}

Omfattas: {{product.name}}, {{company.website}} och våra egna underdomäner, applikationer och API:er som vi driver. **Omfattas inte:** tredjepartstjänster och tredjepartsinfrastruktur, andra kunders konton och uppgifter, social manipulation (social engineering) eller nätfiske mot vår personal eller våra användare, fysiska attacker, överbelastningsattacker (denial-of-service) och volymtester, skräppost, samt fynd som kräver orealistisk användarinteraktion eller föråldrad programvara.

## 2. Regler för testning {#rules}

Om du testar i god tro måste du:

- testa endast mot **dina egna konton och uppgifter**; sluta och rapportera omedelbart om du kommer åt någon annans uppgifter, och få inte åtkomst till, ladda inte ned, ändra inte och behåll inte mer än vad som är nödvändigt för att visa problemet;
- inte försämra tjänsterna, inte köra automatiserade skanningar i stor omfattning och inte använda exploits för att behålla åtkomst, förflytta dig vidare eller extrahera uppgifter;
- inte röja problemet för andra eller publicera detaljer förrän vi har haft rimlig tid att åtgärda det (**90 dagar** från din rapport, eller tidigare om vi kommer överens);
- följa lagen och dessa regler.

## 3. Skyddsbestämmelse {#safe-harbour}

Om du följer denna policy betraktar vi din forskning som godkänd, vi kommer inte att väcka eller stödja rättsliga åtgärder eller uppsägning av konto på grund av den, och vi arbetar tillsammans med dig för att förstå och lösa problemet. Detta ger inte tillstånd att bryta mot lagen gentemot tredje part, och en tredje part kan fortfarande agera på egen hand. Om du är osäker, fråga först.

## 4. Vad du ska skicka {#report}

En tydlig beskrivning av sårbarheten, den berörda webbadressen eller komponenten, steg för att återskapa problemet eller ett konceptbevis, påverkan, dina kontaktuppgifter och om du vill bli nämnd. Kryptera känsligt material om du kan; be om vår nyckel.

## 5. Vad som händer sedan {#process}

Vi bekräftar rapporter, gör en första bedömning, håller dig informerad, åtgärdar efter allvarlighetsgrad och, om du önskar, nämner dig. Vi har för närvarande inget betalt belöningsprogram och kan inte lova belöningar, men vi kan erbjuda tack eller små presentartiklar.

## 6. Användare: skydda ditt konto {#users}

Använd ett unikt, starkt lösenord och flerfaktorautentisering där det erbjuds, håll programvaran uppdaterad, var försiktig mot nätfiske och rapportera misstänkt intrång omedelbart till [{{company.email}}](mailto:{{company.email}}). Att utnyttja en sårbarhet eller testa utanför denna policy bryter mot [användningspolicyn]({{url.acceptable_use}}).
