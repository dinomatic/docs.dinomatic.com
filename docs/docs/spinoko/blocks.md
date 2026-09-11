---
title: Blocks
description: Spinoko Theme Blocks Reference
weight: 80
extra:
  order: 80
---

# Blocks

Spinoko adds its own blocks (under the **Spinoko** block category) for
everything casino/slot-specific — reviews, listings, comparison tables,
sidebars — plus a handful of general content blocks. Insert them anywhere
core blocks go, and configure them from the block toolbar/sidebar like any
other block.

---

## Casino Blocks

| Block | What it does |
|---|---|
| Casino Card | A casino review card: logo, rating, bonus, pros/cons and CTA buttons |
| Bonus Card | A bonus-focused card: logo, rating, feature tags and welcome bonus |
| Featured Casino | A large editor's-pick spotlight for one casino: rating, bonus, score breakdown, verdict and CTAs |
| Casino Hero | A single-casino review-page hero: identity, rating, bonus, pros/cons and CTAs, alongside a rating breakdown and payment methods/currencies/games chips. Used by the Single Casino Review — Featured Hero template |
| Casino Hero (Compact) | A single-row single-casino review-page hero: identity and rating, a facts strip, and one inline bonus line with a CTA. Used by the Single Casino Review — Compact Hero template |
| Casino Listing | A queried list of casinos — card grid, full/compact table with filters, or bonus grid. Supports "Load more" pagination and filtering by the visitor's detected country |
| Casino Finder | A live, type-to-filter search over every casino, showing top-rated casinos by default |
| Casino Quick Facts | A compact sidebar card: license, established year, wagering, minimum deposit, custom taxonomies and a CTA |
| Casino Tile / Casino Tiles | A ranked casino tile (logo, rank, name, first bonus, rating) for a casino picked from Casino Vault, and the group that stacks several of them |
| Countries | A casino's restricted/supported countries as a flag grid |
| Currencies | A casino's accepted currencies (fiat and crypto) as a grid |
| Payment Methods | A casino's supported payment methods as an icon grid |
| Games | A casino's supported games as an icon grid |
| Game Providers | A casino's game providers as an icon grid |
| Country Support | Shows whether the visitor's detected country supports a casino — bonus/CTA if it does, alternatives link if it doesn't. For review pages |

## Slot Blocks

| Block | What it does |
|---|---|
| Slot Card | A slot review hero: logo tile, type/theme tags, name, provider byline, facts grid and a play CTA |
| Slot Listing | A queried grid of slots with optional type/theme/provider filters and "Load more" pagination |
| Slot Finder | A live, type-to-filter search over every slot, showing top-rated slots by default |
| Slot Specifications | The full spec table for a slot — provider, type, themes, release date, and every stat field |
| Slot Casino Picks | Sidebar widget listing casinos a slot is playable at (linked casino + top casinos), each with bonus and claim link |
| Slot Where to Play | The full "Where to Play" comparison table for a slot |
| Slot Tile / Slot Tiles | A ranked slot tile (thumbnail, rank, name, provider/type, rating) for a real slot, and the group that stacks several of them |

## Content Blocks

| Block | What it does |
|---|---|
| FAQ | A grid of frequently-asked questions, with automatic Schema.org FAQPage markup |
| Stat Breakdown | A row of weighted stat items (value + label + description), fully editable |
| Link Tile / Link Tiles | A link + icon + label + sublabel tile, and the row that groups several |
| Table of Contents | A sticky sidebar nav linking to the post's H2 sections, highlighting the current one as the reader scrolls |
| Reading Progress | A thin fixed bar under the header that fills as the reader scrolls |
| Share Buttons | Share-to-Facebook/X/LinkedIn links plus an optional copy-link button; platforms shown are configurable per instance |
| Author Bio | A bigger author card (avatar, name, job title, bio) for the end of an article — one per byline author |
| Post Byline | Avatar + linked author name(s) plus the published/updated/reading-time meta line |
| Recent Posts | A queried list of blog posts — featured + sidebar list, card grid, stacked list with bylines, or minimal image-overlay cards. Optionally filtered by category/tag |

## Theme Chrome Blocks

These are built for use in the header/footer template parts or singular
templates specifically — they're available in the inserter, but there's
rarely a reason to add them anywhere else.

| Block | What it does |
|---|---|
| Header Search | The header's search control — icon + popover form, always-visible form, or hidden |
| Header Notifications | The header's notification bell — see [Header Notifications](/docs/spinoko/header-notifications) |
| Breadcrumbs | The breadcrumb trail from whichever SEO plugin is active (Yoast, Rank Math, or All in One SEO); renders nothing if none is installed |
| Post Meta | "By {author} · {date} · Updated {date} · {n} min read", for singular templates |
