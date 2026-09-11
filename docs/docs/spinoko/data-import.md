---
title: Data Import
description: Demo websites, taxonomy terms, JSON import/export
weight: 120
extra:
  order: 120
---

# Data Import

**Spinoko &#8594; Data Import** is where you populate a new site with
content instead of building everything by hand — a one-click demo import,
starter taxonomy terms, and a way to move a site's full content and
appearance between Spinoko installs via a JSON file.

---

## Demo Websites

Import one of the theme's demo websites with one click — content, media,
settings, styles/customizations, navigation menus and everything else that
makes the demo look the way it does. See [the demos](/docs/spinoko#demo)
for a preview before importing.

Importing runs step by step with a progress bar (terms, then casinos/slots/
posts, then menus, then site options/styles/templates last) rather than one
long request. It's safe to import onto an existing site — it doesn't delete
anything already there, it just adds the demo's content alongside it.

## Casino Vault

A "Visit Casino Vault" link to import individual real casinos one at a time
— see [Casino Vault](/docs/spinoko/casino-vault) for the search-as-you-type
flow itself.

## Casino & Slot Terms

Buttons to seed a starter set of taxonomy terms, one per taxonomy:

- Payment Methods
- Currencies
- Games
- Game Providers
- Countries
- Slot Types
- Slot Themes

Each button adds the default term set for that taxonomy (name, icon/logo,
and any relevant term meta — e.g. a currency's symbol) without touching
terms you've already created or edited. Running it again is safe; it won't
duplicate terms that already exist. Once added, edit, remove, or add your
own from each taxonomy's own admin screen at any time.

## Import from File

Upload a JSON file previously produced by **Export This Website** (below)
— either from this same site, or exported from a different Spinoko
install — to bring its casinos, slots, terms, posts/pages, menus and
appearance settings into this site. Runs step by step with the same
progress bar as a demo import, and is safe to re-run: importing the same
file twice doesn't create duplicates, and importing a different export on
top just layers its content in alongside what's already there.

## Export This Website

Downloads a single JSON file containing everything: casinos, slots,
taxonomy terms, posts and pages, navigation menus, and the
appearance-affecting site options, Global Styles, and any template/template
part customizations. Re-import that file here later, or on a different
Spinoko website, to restore this exact content.
