---
title: FXT Child Theme
description: FXT Child Theme
weight: 140
extra:
  order: 140
---

# FXT Child Theme

A child theme allows you to customize the FXT theme without losing your changes when the parent theme is updated.

---

## What is a Child Theme?

A child theme inherits all the functionality and styling of the parent theme (FXT) while allowing you to make custom modifications that won't be lost during theme updates.

### Benefits of Using a Child Theme

- **Preserve Customizations**: Your custom code won't be overwritten by theme updates
- **Safe Updates**: You can update the parent theme without losing changes
- **Easy Maintenance**: Keep customizations separate from the parent theme
- **Development Best Practice**: Recommended approach for theme customization

---

## Creating a Child Theme

### Method 1: Download a Child Theme

You can download a child theme for the FXT theme in your DinoMatic account.

### Method 2: Manual Creation

1. **Create Child Theme Directory**

   - Navigate to your WordPress themes directory: `/wp-content/themes/`
   - Create a new folder named `fxt-child`

2. **Create style.css File**
   - Create a `style.css` file in the `fxt-child` folder
   - Add the following header information:

```css
/*
Theme Name: FXT Child
Description: Child theme for FXT
Author: Your Name
Template: fxt
Version: 1.0.0
*/

/* Add your custom styles below */
```

3. **Create functions.php File**
   - Create a `functions.php` file in the `fxt-child` folder
   - Add the following code:

```php
<?php
// Enqueue parent theme stylesheet
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('fxt-style', get_template_directory_uri() . '/style.css');
});
```

And that's all. You can now activate your child theme.

---

## Activating the Child Theme

1. Go to **Appearance** → **Themes** in WordPress dashboard
2. Find your FXT Child theme in the list
3. Click **Activate** to switch to the child theme
4. Your site will now use the child theme

---

## Next Step

[Translating FXT](/docs/fxt/translation/)
