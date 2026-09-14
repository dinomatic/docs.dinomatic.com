---
title: Geo-Targeting
description: Country detection and geo-aware content
weight: 150
extra:
  order: 150
---

# Geo-Targeting

Spinoko detects each visitor's country and uses it to tailor casino
content — no separate geo-targeting plugin needed, this is built into the
theme.

---

## How Detection Works

Out of the box, detection uses the `CF-IPCountry` header if your site is
behind Cloudflare — no setup required. If a visitor's country can't be
determined, a site-wide default applies.

## Where It's Used

- **Casino Listing** block's visitor-country filter — show only casinos
  available in the visitor's country
- **Country Support** block/sections on review pages — shows a bonus/CTA
  when the visitor's country is supported, or an alternatives link when
  it's not
- **Geo Affiliate Links** on a casino (see [Casino Pages](/docs/spinoko/casino-pages)) —
  per-country affiliate link overrides

## Alternatives Page

When a casino isn't supported in a visitor's country, Country Support can
link to an "alternatives" page instead. Set the default page from
**Spinoko &#8594; Settings** ("Alternatives page") — an individual Country
Support block can still override this default for that one instance. The
link's text is editable from [Labels](/docs/spinoko/labels)
("Alternatives link text").
