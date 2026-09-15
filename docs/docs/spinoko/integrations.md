---
title: Integrations
description: Spinoko integrations with other DinoMatic tools
weight: 170
extra:
  order: 170
---

# Integrations

**Spinoko &#8594; Integrations** lists connections between Spinoko and other
tools. This area is still being rolled out — check this screen in your
dashboard for the latest status rather than relying on this page.

---

## Nonaki

[Nonaki](https://dinomatic.com/plugins/nonaki) is a free, separately-installed
DinoMatic plugin for cloaked redirect links with built-in analytics. Once
it's active, connect it from the Integrations screen — this adds a "Create
Nonaki Link" button next to every affiliate URL field in the casino editor,
so you can cloak a link on the spot without leaving the page.

## tablrr

[tablrr](https://tablrr.app) is a centralized listings platform for casino affiliates managing multiple websites — instead of updating casino details on every site individually, you manage everything from one dashboard, and every connected website stays in sync.

On top of tablrr's usual listings sync (embedding your tablrr listings on your website via shortcode), Spinoko's tablrr integration adds two-way operator data sync:

**Push** — publish your casinos to tablrr
From Settings → Operator Sync, one click sends your existing published casinos to your tablrr account as operators — no manual re-entry. Casinos already pushed are recognized automatically, so it's safe to run again at any time.

**Pull** — sync operator data back to WordPress
Once a casino is mapped to a tablrr operator, tablrr becomes the source of truth for that casino page. Updates made on tablrr — rating, bonuses, blacklist status, payment methods, games, and more — sync down to your website automatically on an hourly schedule. Update an operator once on tablrr and it propagates to every connected Spinoko website.

Requirements
- The tablrr plugin installed and connected with an API key
- Spinoko theme version 3.0.0 or later

## Coming Soon

- **tablrr** — a centralized listings platform for managing casino data
  across multiple sites from one dashboard, keeping connected sites in
  sync automatically.
- **Slots Launch** — a casino games provider.
