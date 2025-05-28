---
title: Customizations
description: Sikika Theme Customizations
weight: 50
extra:
  order: 50
---

# Theme Customizations

Sikika theme can be customized in two ways: through configuration file and CSS custom properties.

---

### Configuration File

You can customize various theme settings by copying and modifying the `config/sikika.php` file. Simply copy the config fie into your child theme's root directory and modify any value you want. Below are the available options:

#### Font Settings

```php
<?php

'font' => [
    'family' => 'Instrument Sans', // Change the default font family
],

// you need to update it in CSS as well, see below.
```

#### Header Settings

```php
<?php

'header' => [
    'button_1' => [
        'url'   => '#', // Change the first header button URL
        'label' => 'Get in Touch', // Change the first header button text
    ],
    'button_2' => [
        'url'   => '#', // Change the second header button URL
        'label' => 'Get Started', // Change the second header button text
    ],
],
```

#### Footer Settings

```php
<?php

'footer' => [
    'copyright' => [
        'text' => '&copy; %d Your Custom Copyright Text', // Change the copyright text
    ],
    'back_to_top' => [
        'label' => 'Back to top', // Change the back to top button text
    ],
],
```

#### Post Settings

```php
<?php

'post' => [
    'navigation' => [
        'prev_text' => 'Older Posts', // Change the previous posts link text
        'next_text' => 'Newer Posts', // Change the next posts link text
    ],
    'excerpt' => [
        'length' => 120, // Change the excerpt length
        'more'   => '...', // Change the excerpt more text
    ],
],
```

### CSS Custom Properties

You can customize the theme's appearance by overriding CSS custom properties in your child theme's stylesheet. Here are the available properties:

#### Site Colors

```css
--site-bg-color: var(--color-white);
--site-text-color: var(--color-gray-700);
```

#### Header Colors

```css
--header-bg-color: var(--color-sky-50);
--header-text-color: var(--color-gray-700);
```

#### Menu Colors

```css
--menu-item-color: var(--color-gray-600);
--menu-item-hover-color: var(--color-gray-900);
--menu-item-font-size: 15px;
--menu-item-font-weight: 400;
--submenu-bg-color: var(--color-white);
```

#### Hero Section Colors

```css
--hero-gradient-start-color: var(--color-sky-50);
--hero-gradient-end-color: var(--color-sky-100);
--hero-highlight-color: var(--color-blue-500);
--hero-text-color: var(--color-gray-700);
--hero-dim-color: var(--color-gray-500);
```

#### Footer Colors

```css
--footer-bg-color: inherit;
--footer-text-color: inherit;
```

#### Link Colors

```css
--link-color: var(--color-rose-500);
--link-hover-color: var(--color-rose-600);
```

#### Button Colors

```css
--button-bg-color: var(--color-blue-500);
--button-text-color: var(--color-white);
--button-hover-bg-color: var(--color-blue-600);
--button-hover-text-color: var(--color-white);
--button-border-color: #0c66ee;
--button-shadow: 0 4px 6px -1px rgb(12, 102, 238, 0.5), 0 2px 4px -2px rgb(12, 102, 238, 0.5);
```

To override these properties, create a child theme and add your custom CSS with the desired values.

---

### Next step

[Child Theme](/docs/sikika/child-theme/)
