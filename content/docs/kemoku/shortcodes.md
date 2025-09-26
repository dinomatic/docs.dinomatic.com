---
title: Shortcodes
description: Kemoku Plugin - Shortcodes
weight: 70
extra:
  order: 70
---

# Kemoku Plugin Shortcodes

All the plugin blocks are also available as shortcodes. This is useful if you're using WordPress versions below 5.0 or prefer to use shortcodes instead of blocks.

---

## General Shortcodes

Here are the general shortcodes available in Kemoku plugin you can use on all pages:

**Reviews Table** \

```html
[sb_table source="manual" ids="6, 9" style="no-terms|link-terms|popup-terms spacing altrows"]
```

```html
[sb_table source="tax" cat="42,43" tag="73,74" style="..."]
```

**Reviews Grid** \

```html
[sb_grid source="manual" ids="6, 9" style="no-terms|link-terms|popup-terms"]
```

```html
[sb_grid source="tax" cat="42,43" tag="73,74" style="..."]
```

**Reviews Table: Payments** \

```html
[sb_payments_table source="manual" ids="6, 9" style="short-terms|link-terms|popup-terms"]
```

```html
[sb_payments_table source="tax" cat="42,43" tag="73,74" style="..."]
```

**Reviews Grid: Bonus** \

```html
[sb_bonus_grid source="manual" ids="6, 9" style="no-terms|link-terms|popup-terms"]
```

```html
[sb_bonus_grid source="tax" cat="42,43" tag="73,74" style="..."]
```

**Review CTA** \

```html
[sb_cta content="Content" button_url="#" button_text="Button Text" heading="Heading"]
```

To see the general shortcodes and the parameters they accept check the [Shortcode Generator](#shortcode-generator) in your WordPress dashboard.

---

## Review Page Shortcodes

Here are the shortcodes available in Kemoku plugin you can use on review pages:

- `[sb_hero]`
- `[sb_info]`
- `[sb_ratings]`
- `[sb_pros_cons]`
- `[sb_countries]`
- `[sb_us_states]`
- `[sb_currencies]`
- `[sb_payment_methods]`
- `[sb_services]`
- `[sb_sports]`
- `[sb_country_support]`

To see the review page shortcodes and the parameters they accept check the [Shortcode Generator](#shortcode-generator) in your WordPress dashboard.

---

## Shortcode Generator

You can easily generate shortcodes by using the **Shortcode Generator** if you choose to use shortcodes instead of blocks. In WordPress dashboard visit **Kemoku Reviews** → **Shortcode Generator** and you'll find generators and information about all available shortcodes.

The shortcode generator includes all the listing blocks, CTA and review page blocks.

Generate the shortcode with a couple of mouse clicks, copy and paste the result where you need.

---

### Next step

[Plugin Widgets](/docs/kemoku/widgets/)
