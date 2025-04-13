---
title: Customizing Styles
description: Sibet Plugin Style Customizations
---

# Customizing Styles

Find out how to change the odds table colors and other design elements to better fit them to your website style.

### Table Colors

Table colors are selected as neutral as possible to fit as many as website styles as possible without any changes. However, if you need you can customize them easily.

All colors used correspond to CSS custom properties:

```css
.se-wrapper {
  --se-color-accent: #a4e6f7;

  --se-color-date-bg: #f1f5f8;
  --se-color-date-text: #020617;
  --se-font-weight-date: 700;

  --se-color-match-bg: transparent;
  --se-color-match-text: inherit;
  --se-color-match-bweight: #e1e8ec;

  --se-color-match-time-bg: #e1e8ec;
  --se-color-match-time-text: #1e293b;
  --se-font-weight-time: 400;

  --se-color-match-teams-bg: #e1e8ec;
  --se-color-match-teams-text: #1e293b;
  --se-font-weight-teams: 700;
  --se-font-weight-teams-vs: 400;

  --se-color-match-bookmaker-bg: #f1f5f8;
  --se-color-match-bookmaker-text: #4588c3;
  --se-color-match-bookmaker-text-hover: #285a86;
  --se-font-weight-bookmaker: 700;
  --se-bookmaker-logo-width: 24px;
  --se-bookmaker-logo-height: 24px;
  --se-bookmaker-logo-radius: 2px;

  --se-color-match-price-heading-bg: #f1f5f8;
  --se-color-match-price-heading-text: #334155;
  --se-font-weight-price-heading: 700;

  --se-color-match-price-bg: #f1f5f8;
  --se-color-match-price-text: #475569;
  --se-font-weight-price: 400;

  --se-color-action-bg: #ffffff;
  --se-color-action-text: inherit;
  --se-font-weight-action: 400;

  --se-color-icon: #999fa2;

  --se-color-404-bg: #f1f5f8;
  --se-color-404-text: inherit;
  --se-font-weight-404: 400;

  --se-font-size: 16px;

  --se-radius-lg: 8px;
  --se-radius-md: 4px;
  --se-radius-sm: 2px;
}
```

You can overwrite any of the values by copying them into your theme's **Additional CSS** section (<code>Appearance &#8594; Customizer &#8594; Additional CSS</code>).
No need to copy all the properties, only the ones you want to change.

If you want to use a dark theme, add **.dark** class as well:

```css
.se-wrapper.dark {
  --se-color-accent: #a4e6f7;
  /* the rest of the values. */
}
```

You don't need to copy all these values, select only the ones that you want to change.

For example, this will change the match background color to yellow:

```css
.se-wrapper {
  --se-color-match-bg: yellow;
}
```

---

### Next step

[Plugin Updates](/docs/sibet/plugin-updates/)
