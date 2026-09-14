---
title: Labels
description: Editing sitewide block text
weight: 130
extra:
  order: 130
---

# Labels

Buttons, headings and other bits of hardcoded text across the casino/slot
block family ("Claim Bonus", "Show more", "Pros", the reading-time format,
etc.) aren't hardcoded strings you'd need a translation file to change —
they're editable from one settings screen.

---

## Editing Labels

Go to **Spinoko &#8594; Labels**. Fields are grouped by scope:

- **Global** — reused across multiple blocks (CTA button text, pros/cons
  headings, byline/date prefixes, reading time format, etc.)
- **Bonus** — the per-bonus-type labels (Welcome, No Deposit, Reload, Free
  Spins, Cashback, VIP/Loyalty, Other) and bonus terms/copy-feedback text
- **Rating** — the display name for each of the 6 Rating Breakdown slots
  (see [Casino Pages](/docs/spinoko/casino-pages)), including the variants
  shown on Featured Casino and Casino Hero
- **Tile Grid blocks** — shared text for Countries/Currencies/Payment
  Methods/Games/Game Providers ("Show more", item counts)
- One section per block that has its own specific text — Header, Featured
  Casino, Casino Hero, Casino Hero (Compact), Casino Finder, Bonus Card,
  Casino Listing (plus its Table and Compact views separately), Casino
  Quick Facts, Recent Posts, Table of Contents, Country Support, Slot Card,
  Slot Specifications, Slot Casino Picks, Slot Where to Play, Slot Listing,
  Slot Finder, Share Buttons

A change here is a sitewide default — every instance of that block falls
back to it. Where a block also exposes the same text as a per-instance
attribute (in the block's own sidebar), that per-instance value overrides
the sitewide default just for that one block.
