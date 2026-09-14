---
title: Child Themes
description: Customizing Spinoko safely with a child theme
weight: 180
extra:
  order: 180
---

# Child Themes

If you need to customize theme files directly (PHP, CSS beyond what Global
Styles covers, or overriding a template), do it through a child theme
rather than editing Spinoko's own files — otherwise your changes are
overwritten the next time you update the theme.

---

## How It Works for a Block Theme

Spinoko is a full-site-editing theme, so a child theme overrides it the
same way any WordPress block-theme child works:

- A `templates/*.html` or `parts/*.html` file in the child theme overrides
  the parent's file of the same name.
- A `theme.json` in the child theme merges with (and can override) the
  parent's.
- A `functions.php` in the child theme still loads alongside the parent's,
  same as with a classic theme, for any PHP customizations.

For most visual changes — colors, fonts, spacing — you don't need a child
theme at all; use **Appearance &#8594; Editor &#8594; Styles**, which saves
your customizations independently of the theme files. Reach for a child
theme when you need to change actual template/part markup or PHP behavior.
