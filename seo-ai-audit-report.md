# SEO + AI Recognition Audit
**Site:** ArtisticWebServices (artisticwebservices.com) · **Stack:** Custom PHP (Apache) + Bootstrap 5 + jQuery 3.7.1 + Swiper · **Date:** 2026-04-29 (re-audit)

---

## A · Executive Summary

ArtisticWebServices is a New York–based custom software & mobile app development agency (founded 2014) targeting US, GCC, and Pakistan markets. Since the prior audit earlier today, **the site has improved dramatically**: the sitemap domain typo is fixed, `llms.txt` exists, all major AI bots are explicitly allowed, the homepage meta and contact title are within budget, the article schema names a Person, the footer NAP block is restored, color contrast on the contact form passes WCAG AA, the select2 CDN now has SRI, a real CSP header is set, and `HowTo` schema describes the 6-step process. The single biggest remaining reason AI engines under-cite this site is that **the entire `/insights/` blog hub — 44 articles — is missing from `sitemap.xml`**, while the homepage's animated counter (`460`) contradicts every other surface (`500+`) the site advertises. Fix those two and citation/indexation rise immediately.

---

## B · Scorecard

| Dimension | Score | Note |
|---|---|---|
| Technical SEO | 78/100 | 44 insights URLs missing from sitemap; lastmod dates stale |
| AI Recognition (GEO / AEO) | 84/100 | Strong schema + llms.txt; Wikidata QID still a placeholder |
| UI/UX & Performance | 74/100 | Hero video LCP risk on desktop; 14 vendor JS files load globally |
| Content Quality | 80/100 | 460 vs 500+ counter mismatch undermines AI citation confidence |
| Security & Accessibility | 80/100 | CSP exists but uses `'unsafe-inline'` and `'unsafe-eval'` for scripts |
| **TOTAL** | **396/500** | (+55 vs prior audit's 341/500) |

---

## C · Findings By Dimension

### 1 · Technical SEO

**Strengths**
- ✅ `sitemap.xml:8` — Domain typo (`artasticwebservices`) fully corrected; all `<loc>` now use the live domain
- ✅ `includes/head.php:36-41` — Canonical auto-generated per page, query string stripped via `strtok()`
- ✅ `includes/head.php:42` — `robots` meta with `max-snippet:-1, max-image-preview:large, max-video-preview:-1`
- ✅ `index.php:537-539` — Single H1 per route, primary keyword in first 8 words
- ✅ `.htaccess:80-97` — 301 redirects strip `.php` and `index.php`; clean URL canonicalization is consistent
- ✅ `robots.txt:1-14` — Sensitive paths blocked; sitemap referenced; `*.py` blocked

---

- 🔴 **P0** — `sitemap.xml` (whole file) → **No `/insights/*` URLs are present.** The repo has 44 published insight articles (`insights/*.php`) plus `blog.php` and `our-story.php` is listed but `our-story.php` exists at the root — yet `/blog` is listed and there is no `/insights` index URL. Result: the blog hub and every article are invisible to crawler-discovery via sitemap.
  ```xml
  <!-- Add: -->
  <url><loc>https://artisticwebservices.com/insights</loc><lastmod>2026-04-29</lastmod><changefreq>weekly</changefreq><priority>0.7</priority></url>
  <!-- Then one entry per article: /insights/<slug> for all 44 files -->
  ```
- 🔴 **P0** — `sitemap.xml:9` (and all `<lastmod>` lines) → Every URL has `<lastmod>2026-04-16</lastmod>`, but the homepage, head, footer, robots, sitemap, and llms.txt were all changed today (2026-04-29). Stale lastmod actively suppresses recrawl. Bump `lastmod` for files actually touched.
- 🟡 **P1** — `sitemap.xml:38` → `/contact-us` is listed, but the canonical contact URL (`contact.php → /contact`) is `/contact`. `/contact-us` either 404s or 301-redirects; either way, sitemap should list the canonical URL only.
- 🟡 **P1** — `sitemap.xml:44` → `/alliance-partners` is listed, but the footer links to `/solutions/alliance-partners` (`includes/partials/footer-html.php:37`). Confirm which is canonical and remove the dead one.
- 🟡 **P1** — `index.php:3` → Homepage title is **66 characters** including separator — slightly above the 60-char comfort range. Acceptable, but Google may truncate the closing brand on small SERP widths. Consider trimming the leading qualifier.
  ```php
  // 56 chars:
  $page_title = 'Custom Software Development Company NYC | ArtisticWebServices';
  ```
- 🟡 **P1** — `includes/head.php:32` → `<meta name="keywords">` is still emitted on the homepage (`index.php:4` is a 1500+ char keyword stuff). Search engines ignore it; competitors and audit tools see it as low-quality signaling. Remove the keyword variable assignments and the meta line entirely.
- 🟢 **P2** — `index.php:20-497, 845-918` → 12+ inline `<style>` blocks remain in the homepage. These bloat HTML payload (~30 KB un-cached on every visit) and prevent caching of the styles. Move into `assets/css/custom-fixes.css` or a dedicated `home.css`.
- 🟢 **P2** — `includes/head.php:30` → Two favicon declarations point to different files (`<?= $B ?>/assets/images/favicons/favicon.ico` and `/favicon.ico`). Pick one to avoid duplicate-asset warnings in Lighthouse.
- 🟢 **P2** — `sitemap.xml:32` → `<changefreq>monthly</changefreq>` on `/blog` while child posts (when added) should be `weekly`; the homepage uses `daily` which is excessive — Google now ignores `changefreq` but tools that still parse it penalize over-claiming.

---

### 2 · AI Recognition (GEO / AEO)

**Strengths**
- ✅ `llms.txt:1-69` — Present at root, well structured: brand summary, services, industries, contact, key pages, entity profiles, **disambiguation note ("AWS" ≠ Amazon Web Services)**, statistics, freshness
- ✅ `robots.txt:16-45` — All major AI crawlers explicitly allowed: GPTBot, OAI-SearchBot, ClaudeBot, anthropic-ai, PerplexityBot, Perplexity-User, Google-Extended, CCBot, Bytespider, Applebot-Extended
- ✅ `includes/head.php:209-298` — Multi-type schema (`Organization` + `LocalBusiness` + `ProfessionalService`) with `name`, `url`, `logo`, `description`, `telephone`, `email`, `foundingDate`, `numberOfEmployees`, `priceRange`, `address`, `geo`, `areaServed`, `hasOfferCatalog`, `contactPoint[]`, `sameAs[]` (11 entries including Crunchbase, Glassdoor, GitHub)
- ✅ `index.php:1168-1184` — `HowTo` JSON-LD on homepage describes the 6-step process — high-citation schema for AI answer engines
- ✅ `includes/head.php:341-360` — `FAQPage` schema with 6 substantive answer-targets (cost, timeline, HIPAA, iOS/Android, location)
- ✅ `includes/head.php:399-407` — Article schema now uses **named `Person` author** ("ArtisticWebServices Editorial Team") with `worksFor` → publisher chain
- ✅ `includes/partials/footer-html.php:84-118` — Visible NAP block restored (address, phone, email, social)

---

- 🟡 **P1** — `llms.txt:56` → Still contains placeholder `[Add QID after creating entry at wikidata.org]`. Without an actual Wikidata QID, AI knowledge graphs cannot anchor the brand entity. Action: create the Wikidata entity, add the QID URL to both `llms.txt:56` and `includes/head.php:284-296` (`sameAs[]`), and add a Wikipedia stub if one can be supported by sources.
- 🟡 **P1** — `includes/head.php:399-407` → Article schema's `Person` author uses the generic name "ArtisticWebServices Editorial Team". Generic team-bylines rank below identifiable individual experts in AI citation models (Perplexity, ChatGPT). For future insights articles, attribute to a real person with a `Person` schema and a `/about-us#team-<slug>` URL.
- 🟡 **P1** — `llms.txt:60` ↔ `index.php:1096` → llms.txt and hero copy say `500+ Projects`, but the animated counter uses `data-count="460"`. AI engines that scrape both will see contradiction → reduced citation confidence. Either standardize on 500 (`data-count="500"`) or revise llms.txt and hero text. (See Content Quality finding.)
- 🟡 **P1** — `sitemap.xml` does not list `llms.txt` and `robots.txt`. Not strictly required, but several AI crawlers fall back to the sitemap to confirm `llms.txt` exists.
- 🟢 **P2** — No `Article` / `BlogPosting` schema is wired up on `/insights/*` pages by default — `head.php:391` only emits `Article` schema if `$page_article_schema` is set per-page. Confirm each insight article sets that variable and that `datePublished` is supplied (not just `filemtime()`).
- 🟢 **P2** — `includes/head.php:226` → `"priceRange": "$$"` is generic. AI engines now prefer concrete bands (e.g., `"priceRange": "$10,000 - $250,000+"`) which match the homepage FAQ answer.
- 🟢 **P2** — `llms.txt:34` → Lists `https://artisticwebservices.com/insights` as the blog index, but the corresponding sitemap entry is `/blog`. Pick one canonical path and align llms.txt, sitemap, and footer links.

---

### 3 · UI/UX & Performance

**Strengths**
- ✅ `includes/head.php:108-115` — Critical CSS (Bootstrap + theme + custom-fixes) blocking-loaded; **all** vendor CSS deferred via `rel=preload` + `onload` flip with `<noscript>` fallback (correct, no FOUC trade-off)
- ✅ `includes/head.php:76-80` — Hero poster preloaded with `fetchpriority="high"` when `$page_hero_poster` is set per page
- ✅ `index.php:374-381` — Mobile (`max-width:767px`) hides the autoplay hero video and falls back to a poster background-image — eliminates LCP video penalty on mobile
- ✅ `index.php:317-320` — Mobile hero paragraph is no longer `display:none` — mobile-first indexing is intact (regression from prior audit fixed)
- ✅ `index.php:518-528` — `prefers-reduced-motion` IIFE pauses hero video before first frame (accessibility)
- ✅ `includes/header.php:1` — Skip-to-main link with `:focus` reveal
- ✅ `includes/partials/footer-scripts.php:51` — select2 CDN now has `integrity="sha384-..."` SRI

---

- 🟡 **P1** — `index.php:508-511` → On desktop the autoplay looping MP4 still drives LCP at `min-height: 100vh`. Even with poster preload, network/CPU-constrained desktops will see 3–6s LCP. Two options:
  1. Use `<video preload="none">` and start playback after `load` event
  2. Replace with a static OG image hero on desktop too — it would simplify CWV further with no real engagement loss
- 🟡 **P1** — `includes/partials/footer-scripts.php:21-46` → 14 vendor JS files load on **every** page (jquery-ajaxchimp, magnific-popup, jquery-validate, nouislider, odometer, jquery-ui, bootstrap-select, etc.) regardless of whether the page uses them. The `$load_slick`/`$load_jarallax`/`$load_isotope`/`$load_countdown` flags exist but are not extended to magnific-popup, validate, nouislider, ajaxchimp, ui. Apply the same gating to those.
- 🟡 **P1** — `includes/partials/footer-scripts.php:52` → `$('.js-example-basic-multiple').select2();` runs unconditionally on every page. Wrap in `if ($('.js-example-basic-multiple').length) { ... }` to avoid jQuery iteration cost on pages that don't use select2.
- 🟡 **P1** — `includes/head.php:96` → Google Fonts loads `Federo` + `Rubik` (10 weights × 2 styles). `Federo` is decorative; if it appears only in vendor CSS, drop it. Each unused weight is ~12-15 KB.
- 🟢 **P2** — `index.php:20-497` → Inline `<style>` payload of ~25 KB on the homepage is shipped uncompressed in the document — same selectors and breakpoints repeat in three blocks (lines 20-471, 473-497, 845-886, 888-918). Consolidate.
- 🟢 **P2** — `includes/head.php:121-127` — Font Awesome 6 is loaded from cdnjs via `rel="preload"` + `onload`. The flicker risk is small (icons in nav are decorative), but consider a 2-icon SVG sprite for the visible navbar phone/menu icons to eliminate the FA dependency for above-the-fold paint.
- 🟢 **P2** — `includes/head.php:83-84` → Two `rel="preload"` for CSS files that are also loaded via `<link rel="stylesheet">` on lines 109 and 112. The redundant preload on already-blocking CSS is wasteful (Chrome already fetches them at highest priority). Remove.

---

### 4 · Content Quality

**Strengths**
- ✅ `index.php:537-539` — H1 names entity, service, geo, and category in 16 words
- ✅ `index.php:7-14` — 6 substantive FAQ pairs with **specific dollar ranges and timeframes** — exactly the format AI answer engines extract
- ✅ `about-us.php:42-46` — Genuine company narrative with founding year (2014), HQ, services, expertise — not AI filler
- ✅ `index.php:5` — Homepage meta description is now **161 chars** (within 140-160 budget; one char over but Google tolerates this)
- ✅ `contact.php:3` — Contact title is **47 chars** (was 73)
- ✅ `about-us.php:3` — Title now uses "New York" not "NYC" — keyword match restored
- ✅ `includes/partials/footer-html.php:152-154` — Visible "Last updated: Month Year" line, sourced from `$page_last_updated` or `filemtime()`

---

- 🟡 **P1** — `index.php:1096` ↔ `llms.txt:60` ↔ hero `index.php:542` → **Number-of-projects mismatch**: `data-count="460"` (counter), "500+ Projects" (hero badge), "500+" (llms.txt). Pick one and apply everywhere. Recommended: update counter to `data-count="500"`.
  ```html
  <!-- index.php:1096 -->
  <h3 class="odometer" data-count="500">00</h3>
  ```
- 🟡 **P1** — `includes/head.php:32` & `index.php:4` → 1500-char keyword stuffing in `$page_keywords` is exposed in `<meta name="keywords">`. Search engines penalize it as a quality signal in some classifiers (and tooling like Ahrefs/SEMrush flag it). Remove the meta and the variable assignments site-wide.
- 🟡 **P1** — Homepage hero subhead (`index.php:540`) — "From startups to Fortune 500" is unverifiable absent named clients. AI citation engines reward specificity: replace with one or two named clients (with permission) or a vertical (e.g., "Healthcare, FinTech, and SaaS clients across the US and GCC").
- 🟢 **P2** — `index.php:584` → "Award-winning" appears 4× on the homepage without a specific award named. Replace one occurrence with the actual award + year + issuer.
- 🟢 **P2** — `index.php:563, 607, 1148` → "section-title__paragraph" copy is generic ("we provide significant benefits", "with hundreds of successful projects") — AI engines deprioritize boilerplate. Concretize.

---

### 5 · Security & Accessibility

**Strengths**
- ✅ `.htaccess:43-58` — Full security header set: `X-Content-Type-Options`, `X-Frame-Options`, `X-XSS-Protection`, `Referrer-Policy`, `Permissions-Policy`, `Strict-Transport-Security` (with `preload`), and CSP
- ✅ `.htaccess:60-63` — `X-Robots-Tag: noindex, nofollow` correctly applied to form-handler PHP files
- ✅ `includes/head.php:432` — CSRF meta token on every page via `csrf_meta()`
- ✅ `contact.php:386-391` — `cf-safe-note` color updated to `#767676` on `#fff` (≈4.6:1 contrast) — passes WCAG AA 4.5:1 for small text (regression from prior audit fixed)
- ✅ `includes/partials/footer-scripts.php:21, 51` — jQuery and select2 both have SRI integrity hashes
- ✅ `includes/header.php:391-405` — Mobile menu toggler has `aria-expanded`, `aria-controls`, `aria-label`; mega-menu keyboard handler manages `aria-expanded` on Enter/Space/Escape
- ✅ `contact.php:497-503` — Form has CSRF token + native HTML5 validation for email/phone

---

- 🟡 **P1** — `.htaccess:51` → CSP allows `'unsafe-inline'` and `'unsafe-eval'` in `script-src`. Necessary today because of `<script>function openLeadModal(){...}</script>` (`includes/head.php:204`), the IIFE in `index.php:518-528`, and the keyboard nav script in `includes/header.php:587-690`. Migration path:
  1. Move all inline scripts into external `.js` files
  2. Use a server-side per-request CSP nonce (`<script nonce="<?= $csp_nonce ?>">`) and reference it in CSP
  3. Drop `'unsafe-inline'` and `'unsafe-eval'`
- 🟡 **P1** — `.htaccess:51` → CSP `connect-src` allows `https://artisticwebservices.com` (good) but no rule for `https://embed.tawk.to` is present; if Tawk.to chat opens WebSockets to `wss://*.tawk.to` (it does — that *is* in `connect-src`) then OK. Verify by loading the chat widget and watching DevTools for blocked requests.
- 🟡 **P1** — `index.php:592-594` → "Custom slider prev/next" buttons render as `<button>&#10094;</button>` / `<button>&#10095;</button>` — chevron entities only, no accessible name. Add `aria-label="Previous service"` / `aria-label="Next service"`. Same issue at `index.php:840-841` (solutions slider).
- 🟡 **P1** — `index.php:567-589` — `.custom-slider-item` containers use `data-bg="url('...')"` patterns that are likely set as background-image via JS. Background images have no `alt` text — ensure each slide has a textual label inside (it does, via `<a class="custom-slider-text">`), good — but verify the contrast of the white text on the underlying photo passes ≥4.5:1 (likely fails on bright shots without an overlay).
- 🟡 **P1** — `includes/header.php:392-393` → Logo `<img alt="ArtisticWebServices">` is fine, but `loading="eager"` is set without `fetchpriority="high"` — browsers may still down-prioritize it. Add `fetchpriority="high"` so the navbar logo competes with hero poster.
- 🟢 **P2** — `includes/partials/footer-html.php:131-142` → Trust-logo strip (Clutch, Trustpilot, etc.) uses generic `alt="Clutch"`, `alt="Trustpilot"`. If these are linked external review profiles, swap to `alt="Read our Clutch reviews"` etc. and link to the actual profile — that's a citation/trust signal AI engines use.
- 🟢 **P2** — `contact.php:506` → `<input type="hidden" name="captcha_answer" id="captcha_answer" value="10">` is a hardcoded value, which means the captcha is a no-op against bots. Either remove it or implement a real challenge (math captcha that's randomized server-side, hCaptcha, or Cloudflare Turnstile).
- 🟢 **P2** — `includes/head.php:208` → Static comment "Font Awesome 6.7.2 via CDN — supports both FA5 (fas/far/fab) and FA6 (fa-solid/fa-regular/fa-brands) syntax" — fine. But verify that no FA5-only icon names render hollow boxes (FA6 dropped some shims in 6.7).

---

## D · Top 10 Priority Fixes

| # | Fix | Why | File:line | Exact change | Expected lift |
|---|---|---|---|---|---|
| 1 | Add `/insights/*` URLs to sitemap | 44 articles invisible to crawler-discovery via sitemap | `sitemap.xml` | Append `/insights` and one `<url>` per article | Massive new indexable surface for both Google + AI crawlers |
| 2 | Bump `lastmod` dates | Every URL still says 2026-04-16 despite today's edits | `sitemap.xml:9` (and all) | Update changed pages to `2026-04-29` | Triggers recrawl of edited pages |
| 3 | Standardize "projects" count | Counter says 460, hero/llms.txt say 500+ — AI engines flag contradiction | `index.php:1096` | `data-count="500"` (or revise others to 460) | Removes citation-confidence dock |
| 4 | Remove `<meta name="keywords">` | Ignored by Google, signals low quality, leaks competitor strategy | `includes/head.php:32` + delete `$page_keywords` site-wide | Delete the meta + variable | Quality classifier signal +; cleaner audits |
| 5 | Fix sitemap orphan URLs | `/contact-us` and `/alliance-partners` don't match real canonical | `sitemap.xml:38, 44` | Replace with `/contact` and `/solutions/alliance-partners` | Sitemap-canonical alignment |
| 6 | Remove duplicate CSS preload | `bootstrap.min.css` and `style-01.css` are preloaded **and** blocking | `includes/head.php:83-84` | Delete the `<link rel="preload">` for those two | One less wasted request |
| 7 | Add aria-label to slider buttons | Chevron-only buttons fail WCAG 4.1.2 | `index.php:591-592, 840-841` | Add `aria-label="Previous/Next ..."` | Accessibility compliance |
| 8 | Replace placeholder Wikidata QID | `[Add QID]` blocks the highest-value AI entity signal | `llms.txt:56`, `head.php:284-296` | Create Wikidata entity; insert real QID URL | Strongest single AI-citation lift available |
| 9 | Gate vendor JS by feature flag | 14 JS files load globally; many unused on most pages | `footer-scripts.php:26-50` | Wrap magnific-popup, validate, nouislider, ajaxchimp, jquery-ui in `$load_*` flags | INP/JS-execution drop |
| 10 | Replace fake captcha | Hardcoded `value="10"` is a no-op | `contact.php:506` | Implement randomized math captcha or Turnstile | Form-spam reduction |

---

## E · AI Discoverability Verdict

**How AI engines currently see this site:** ChatGPT, Perplexity, Gemini, and Claude can crawl the site freely (every major AI bot is explicitly allowed in `robots.txt`), find a thorough `llms.txt`, parse rich `Organization`/`LocalBusiness`/`FAQPage`/`HowTo` JSON-LD, and follow named-author article schema for insights. The brand is already well-formed for AI ingestion. The remaining gap is *specificity and entity authority*: there is no Wikidata QID resolving the company, the article author is a generic team byline rather than identifiable experts, and the homepage's animated counter contradicts the "500+ projects" claim everywhere else — a contradiction AI consistency-checkers down-weight when picking a citation source.

**Three changes that would most increase citation likelihood:**
1. **Create the Wikidata entry** (with sources: Crunchbase, Clutch profile, founding-year article) and replace the `llms.txt:56` placeholder + add the QID URL to `sameAs[]`. This is the single highest-leverage AI entity signal.
2. **Resolve the 460 vs 500 contradiction.** AI engines that extract numeric facts from a site downrank pages whose own assertions conflict. One commit fixes it.
3. **Per-article named experts on `/insights/`.** Replace the "Editorial Team" Person with real authors who have a `/about-us#team-<slug>` profile, and ensure each article sets `$page_article_schema` with a real `datePublished`.

**`llms.txt` is in good shape — only the QID line needs replacing.**

---

## F · Ship-It Checklist

☐ **1.** `sitemap.xml` — append `/insights` plus one `<url>` per file in `insights/*.php` (44 entries)
☐ **2.** `sitemap.xml` — bump `<lastmod>` to `2026-04-29` for any file changed today (homepage, head, footer, robots, llms)
☐ **3.** `index.php:1096` — change counter to `data-count="500"` (or revise hero/llms.txt to 460)
☐ **4.** `includes/head.php:32` — remove the `<meta name="keywords">` line; delete `$page_keywords` from every page
☐ **5.** `sitemap.xml:38, 44` — replace `/contact-us` → `/contact`, replace `/alliance-partners` → `/solutions/alliance-partners`
☐ **6.** `includes/head.php:83-84` — delete the redundant `rel="preload"` for `bootstrap.min.css` and `style-01.css`
☐ **7.** `index.php:591-592, 840-841` — add `aria-label="Previous/Next ..."` on the slider chevron buttons
☐ **8.** Create Wikidata entry; insert real QID URL in `llms.txt:56` and `includes/head.php:284-296`
☐ **9.** `includes/partials/footer-scripts.php` — extend `$load_*` gating to magnific-popup, validate, nouislider, ajaxchimp, jquery-ui
☐ **10.** `contact.php:506` — replace hardcoded captcha with randomized server-side math challenge or Turnstile
☐ **11.** `includes/head.php:204` & `index.php:518-528` — externalize inline scripts; introduce per-request CSP nonce
☐ **12.** `.htaccess:51` — once nonce is in place, drop `'unsafe-inline'` and `'unsafe-eval'` from `script-src`
☐ **13.** `index.php:1096` — extract the inline `<style>` blocks into `assets/css/custom-fixes.css`
☐ **14.** `index.php:540` — replace "Fortune 500" with named verticals or specific clients
☐ **15.** Each `insights/*.php` — set `$page_article_schema['date']` (real `datePublished`) and consider real-person authors
☐ **16.** `includes/head.php:96` — drop `Federo` from Google Fonts request if unused
☐ **17.** `includes/head.php:226` — replace `"priceRange": "$$"` with concrete band matching the FAQ
☐ **18.** `includes/header.php:392-393` — add `fetchpriority="high"` to navbar logo `<img>`
☐ **19.** `includes/partials/footer-html.php:132-141` — make trust-logo `alt` text descriptive and consider linking to live review profiles
☐ **20.** Verify `font-display: swap` in Rubik/Federo declarations in `style-01.css@v=1.1.css`
