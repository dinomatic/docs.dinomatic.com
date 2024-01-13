---
title: Shortcodes
description: Kemoku Plugin - Shortcodes
extends: _layouts.documentation
section: content
---

# Kemoku Plugin Shortcodes

All the plugin blocks are also available as shortcodes.

---

## Using Shortcodes

Here are the shortcodes available in Kemoku plugin you can use on all pages:

- Reviews Table
- Reviews Grid
- Review CTA

### Reviews Table

```html
[sb_table source="manual" ids="6, 9" style="no-terms|link-terms spacing altrows"]

[sb_table source="tax" cat="42,43" tag="73,74" style="..."]
```

### Reviews Grid

```html
[sb_grid source="manual" ids="6, 9" style="no-terms|link-terms"]

[sb_grid source="tax" cat="42,43" tag="73,74" style="..."]
```

> You can use the Grid shortcode in sidebars as well.

### Review CTA

```html
[sb_cta content="Content" button_url="#" button_text="Button Text" heading="Heading"]
```

### Review Page Shortcodes

Here are the shortcodes available in Kemoku plugin you can use on review pages:

```html
[sb_info]
[sb_ratings]
[sb_pros_cons]
[sb_payment_methods]
[sb_countries]
[sb_services heading="" bonus="" button_text=""]
```

Except for **Review Services**, there's noting to configure in the shortcodes, simply add the shortcodes where you want to display them, and they are ready.

### Shortcode Generator

You can easily generate shortcodes by using the **shortcode generator** if you choose to use shortcodes instead of blocks. In WordPress dashboard visit **Kemoku Reviews** &#8594; **Shortcodes** and you'll find generators and information about all available shortcodes.

Generate the shortcode with a couple of mouse clicks, copy and paste the result where you need.

#### Table shortcode generator

![Kemoku Shortcode Generator](https://media.dinomatic.com/images/docs/kemoku/kemoku-shortcode-generator.png)


### Next step

[Plugin Widgets](/docs/kemoku/widgets/)
