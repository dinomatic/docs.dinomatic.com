---
title: Changing Colors
description: DinOdds Plugin Colors
weight: 90
extra:
  order: 90
---

# Changing Colors

Find out how to change the odds table colors to better fit your website design.

### Table Colors

Table colors are selected as neutral as possible to fit as many as website styles as possible without any changes. However, if you need you can customize them easily.

All colors used correspond to CSS custom properties:

```css
.df-odds {
  --color-settings--bg: #4a5568; /* settings dropdown background color */
  --color-settings--fg: #ffffff; /* settings dropdown text color */

  --color-bookie--bg: #cbd5e0; /* bookie logo and link background color */
  --color-date--bg: #cbd5e0; /* date row background color */
  --color-not-found--bg: #cbd5e0; /* no matches section background color */
  --color-time--bg: #e2e8f0; /* time column background color */
  --color-away--bg: #f7fafc; /* away row background color */
  --color-home--bg: #edf2f7; /* home row background color */

  --color-arrow--bg: #cbd5e0; /* left & right arrows background color */
  --color-arrow--fg: #111; /* left & right arrows icon color */
}
```

You can overwrite any of the values by copying them into your theme's **Additional CSS** section (<code>Appearance &#8594; Customizer &#8594; Additional CSS</code>).
No need to copy all the properties, only the ones you want to change.

For example, to change the "date" color copy only:

```css
.df-odds {
  --color-date--bg: #cbcbcb;
}
```

### Font Color

Font color of the table is inherited from your theme styles, whatever the font color of the table's parent container is, it will be inherited. To overwrite it, add the below rule:

```css
.df-odds {
  color: #111; /* change this to any color you want */
}
```

---

### Next step

[Plugin Updates](/docs/dinodds/plugin-updates/)
