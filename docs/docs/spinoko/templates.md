---
title: Templates
description: Spinoko Theme Block Templates
weight: 60
extra:
  order: 60
---

# Templates

Spinoko is a block theme, so it doesn't use classic PHP page templates or a
"Page Attributes &#8594; Template" dropdown tied to files you'd install with
a child theme. Every template is a block template, edited visually in
**Appearance &#8594; Editor &#8594; Templates**.

---

## Built-in Templates

| Template | Used for |
|---|---|
| Casino Archive | The full, filterable table of every published casino |
| Single Casino Review | A single casino review — rating, bonus, quick facts sidebar |
| Single Casino Review — Featured Hero | An alternate single-casino template with a wide hero (identity, bonus, pros/cons, rating breakdown, payment methods/currencies/games), via the Casino Hero block |
| Single Casino Review — Compact Hero | An alternate single-casino template with a single-row hero (identity, rating, facts strip, one inline bonus line), via the Casino Hero (Compact) block |
| Slot Archive | The full, load-more grid of every published slot |
| Single Slot Review | A single slot review — facts grid, full specifications table |
| Home V1 | Curated homepage: hero banner, top-rated/new casino listings, bonus grid, FAQ |
| Home V2 | Alternate homepage with casino cards directly in the hero |
| Home V3 | Alternate homepage with 3 small casino tiles in the hero |
| Home V4 | Slot-focused homepage: top-rated/newest slot listings, with a casino bonus section for where to play them |
| Home V5 | Alternate slot-focused homepage with 3 small slot tiles in the hero |
| Page with Sidebar | A Page template with a two-column layout and a Table of Contents block in the sidebar |
| Single, Page, Archive, Search, 404, Index | Standard WordPress fallbacks for everything else (blog posts, plain pages, category archives, etc.) |

You can edit any of these directly in the Site Editor — add/remove blocks,
change layout — the same way you'd edit a page.

## Choosing a Homepage

The five home templates aren't separate pages you have to pick between
ahead of time — they're all applied the same way you assign any template to
a Page:

1. Create or open the Page you want to use as your homepage.
2. In the block editor sidebar, open the **Template** panel and choose
   **Home V1** through **Home V5**.
3. Set that page as your homepage under **Settings &#8594; Reading &#8594;
   Your homepage displays**.

## Casino & Slot Review Templates

A single casino review page uses **Single Casino Review** by default. To
switch it to the Featured Hero or Compact Hero variant instead, open that
casino, open the block editor sidebar's **Template** panel, and choose one
of the two alternates. Single slot pages have one template (**Single Slot
Review**) with no alternates to choose between. What you fill in per
casino/slot is covered in [Casino Pages](/docs/spinoko/casino-pages) and
[Slot Pages](/docs/spinoko/slot-pages).

## Page with Sidebar

For a regular Page (a long-form guide, a comparison article) that should
show a sticky Table of Contents alongside the content, assign the **Page
with Sidebar** template from the same **Template** panel.
