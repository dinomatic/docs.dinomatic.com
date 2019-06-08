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

Here are the shortcodes available in Kemoku plugin you can use in all pages:

- Reviews Table
- Reviews Grid

### Reviews Table

```html
[sb_table ids="6, 9" style="no-terms spacing altrows"]
```

### Reviews Grid

```html
[sb_grid ids="6, 9" style="no-terms"]
```

### Review Page Shortcodes

Here are the shortcodes available in Kemoku plugin you can use in review pages:

```html
[sb_info]
[sb_ratings]
[sb_pros_cons]
```

There's noting to configure in these shortcodes, simply add the shortcodes where you want to display them, and they are ready.

You can also use **Review CTA** shortcode, however this shortcode requires some attributes:

```html
[sb_cta content="Content" button_url="#" button_text="Button Text" heading="Heading"]
```

### Shortcode Generator

You can easily generate shortcodes by using the **shortcode generator** if you choose to use shortcodes instead of blocks. In WordPress dashboard visit **Sportsbooks** &#8594; **Shortcodes** and you'll find generators and information about all available shortcodes.

Generate the shortcode with a couple of mouse clicks, copy and paste the result where you need.

#### Table shortcode generator

![Kemoku Shortcode Generator](/assets/images/kemoku/kemoku-shortcode-generator.png)

### Next step

[Plugin Shortcodes](/docs/shortcodes)
