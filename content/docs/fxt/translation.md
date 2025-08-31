---
title: Translating FXT Theme
description: Translating FXT Theme
weight: 150
extra:
  order: 150
---

# Translating FXT

FXT is ready to be translated into any language and can be used on multilingual websites.

## Single Language

If your site has a single language, you don't need a multilingual plugin. FXT's user‑facing text can be translated using standard translation tools such as [Loco Translate](https://localise.biz/wordpress/plugin).

### Loco Translate

- Translate the theme directly in your dashboard. You'll see two text domains:
  - `fxt` - frontend strings
  - `fxt-admin` - dashboard/editor strings (you don't need to translate these)
- Save translations to "System" so they persist after updates.

### FXT Strings

FXT also includes a Strings page in the admin ([FXT Options → 💬 Strings](/docs/theme-strings)) where you can override specific labels without a translator plugin. This is handy when you only need to tweak user-facing texts.

## Multilingual

FXT supports popular multilingual plugins. Below are short guides on the 2 most popular ones.

### WPML

[WPML](https://wpml.org) is a comprehensive multilingual solution. Before getting started you may want to check out their [Getting Started guide](https://wpml.org/documentation/getting-started-guide/).

1. Install and activate "WPML Multilingual CMS" and "WPML String Translation".
2. Run the WPML setup wizard (languages, defaults, etc.).
3. Scan theme strings: WPML → Theme and plugins localization → Scan the "FXT" theme.
4. Translate content (pages, posts, brokers) using the "+" in the editor lists.
5. Translate theme strings: WPML → String Translation → filter by domain `fxt` (frontend) and `fxt-admin` (dashboard).

FXT provides context strings to help you find groups quickly (e.g., "fxt‑string: ...", "list: platform/country/...").

### Polylang (with Loco Translate)

[Polylang](https://polylang.pro) is a lightweight multilingual plugin. CHeck their Getting Started](https://polylang.pro/doc-category/getting-started/) for more information.

- Polylang Free version doesn't list theme strings automatically in "Strings translations"; pair it with Loco Translate for theme strings.
- Polylang Pro may be another option for translating theme strings.

Getting started:

1. Install and activate Polylang. Add your languages.
2. Translate content (pages, posts, brokers) using the "+" in the editor lists.
3. Translate theme strings with Loco Translate:
   - Loco → Themes → FXT → Templates
   - Create a language for `fxt` (frontend) and for `fxt-admin` (dashboard)
   - Translate only the strings you need

### RTL and TTB

FXT supports both right‑to‑left (RTL) and top‑to‑bottom (TTB) languages.

---

### Need help?

- WPML: see their [Getting Started guide](https://wpml.org/documentation/getting-started-guide/) and String Translation docs.
- Polylang: see the [Getting Started](https://polylang.pro/doc-category/getting-started/) docs.
- Loco Translate: simple in‑dashboard translation editor - no FTP required.

Translate what matters first (frontend `fxt`), and come back to `fxt-admin` for dashboard texts when ready.

### Next Step

[How to...](/docs/fxt/how-to/)
