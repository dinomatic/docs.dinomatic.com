---
title: Editing Your Site
description: Customizing Spinoko through the WordPress Site Editor
weight: 50
extra:
  order: 50
---

# Editing Your Site

Spinoko is a full-site-editing (FSE) theme, so there's no separate
Customizer screen. Every visual change — colors, fonts, the header, the
footer, page layout — is made in **Appearance &#8594; Editor** (the Site
Editor), the same screen you already use to edit block content.

---

## Global Styles

**Appearance &#8594; Editor &#8594; Styles** controls colors, typography and
spacing sitewide. Spinoko ships two style variations you can switch between
from the styles panel:

- **Default** — a dark palette
- **Light** — a light palette

Both use the same set of named color slots (Base, Contrast, Primary, Accent,
etc.), so switching variations re-colors the whole site consistently instead
of leaving some blocks on the old palette.

## Header & Footer

The header and footer are template parts (**Appearance &#8594; Editor &#8594;
Patterns &#8594; Template Parts**), built from ordinary blocks — groups,
navigation, site logo/title, and a couple of theme-specific blocks (the
header search and notification bell, covered in their own pages). Edit them
directly like any other block content; there's no separate "header builder"
screen.

## Navigation Menus

Spinoko uses WordPress's `wp:navigation` block for both the header and
footer menus — there are no classic "menu locations" to assign in a
Customizer. To edit a menu:

1. Open the Site Editor and select the Navigation block in the header or
   footer.
2. Add, remove, or reorder links directly, or click the menu name to switch
   to a different saved navigation menu.

The footer additionally has three small navigation blocks side by side
(Content / Company / Legal, in the default template), which you can edit or
repurpose the same way.

## Homepage Layout

Spinoko ships three alternate homepage designs (Home V1, V2, V3) in addition
to the default. See [Templates](/docs/spinoko/templates) for how to choose
which one is assigned to your front page.
