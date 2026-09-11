---
title: Casino Pages
description: Creating and Managing Casino Pages
weight: 90
extra:
  order: 90
---

# Casino Pages

Casinos are their own content type in Spinoko — separate from Posts and
Pages — so they get their own archive, their own review template, and a
dedicated editing sidebar instead of you building each review's layout by
hand.

---

## Creating a Casino

Go to **Casinos &#8594; Add New** in the wp-admin menu. The page title and
main editor are used for the review write-up itself; everything else
(rating, bonus, facts) is filled in from the **Casino Details** panel in the
block editor sidebar, not the content area.

### Main Info

- Logo
- Name
- Tagline
- Affiliate URL
- Blacklisted (toggle) + Blacklist reason — mark a casino as blacklisted to
  swap its normal CTA/recommendation treatment for a warning across every
  block that displays it

### Ratings

- Overall Rating (out of 10)
- Rating Breakdown — up to 6 individually-scored slots (e.g. "Payout
  Speed", "Game Selection") shown on Featured Casino and the Casino Hero
  template block. Each slot's display name is a sitewide default renamed
  from [Labels](/docs/spinoko/labels), not stored per casino, so renaming
  a slot there updates it everywhere at once. Leave a slot blank to skip
  it.

### Casino Facts

License/jurisdiction, established year, payout speed, minimum deposit,
minimum withdrawal, customer support, KYC speed — these feed the Casino
Quick Facts block automatically.

### Pros & Cons

Two free-form lists, shown wherever a Casino Card/Featured Casino block
displays pros/cons.

### Bonuses

A repeatable list — each entry has its own type, bonus text, bonus code,
short/full terms text, terms link, and an optional per-bonus affiliate link.
A bonus's own affiliate link, when set, always takes priority over both the
casino's main Affiliate URL and any Geo Affiliate Link (see below).

### Geo Affiliate Links

Per-country overrides of the main Affiliate URL — set a different affiliate
link for visitors detected in a specific country. A geo link overrides the
main Affiliate URL, but a bonus's own affiliate link still wins over both
when that bonus is the one being shown.

## Taxonomies

Casinos can be tagged with:

- **Casino Categories** / **Casino Tags** — general organization
- **Countries** — supported/restricted countries (drives Country Support
  and the Countries block)
- **Payment Methods**
- **Currencies**
- **Casino Games**
- **Game Providers**

The last four have their own icon/logo per term (set when editing the term,
not the casino) and can be pre-populated in bulk — see
[Data Import](/docs/spinoko/data-import).

## Displaying Casinos

Use the [Casino Card, Casino Listing, Casino Finder, Featured Casino, Casino
Hero, and related blocks](/docs/spinoko/blocks) anywhere you want casinos to
appear — they aren't limited to the built-in Casino Archive template.

## Casino URL Slug

By default casino pages live at `/casino/your-casino-name/`. Change the
`/casino/` part from **Spinoko &#8594; Settings** (the "Casino Slug"
field on the main Theme Options page).
