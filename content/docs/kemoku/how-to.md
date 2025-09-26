---
title: How To ...
description: Kemoku How-tos
weight: 130
extra:
  order: 130
---

# How To ...

### How To Change Listing Filters and Sorting

Check out [this guide](/docs/kemoku/listing-tools) for complete list of options about how to change the filters and sorting on listings.

---

### How To Change/Translate Country Names

Use the below code snippet in your child theme's `functions.php` file and adjust the array of country names. You can add as many countries as you want.

> Please make sure to use [ISO 3166 country codes](https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes) in array keys (us, gb, fr, etc.).

```php
<?php

add_filter( 'kemoku_country_custom_names', fn( array $names ) => array(
    'us' => 'Estados Unidos',
    'gb' => 'Reino Unido',
    'fr' => 'Francia',
) );
```

---

### How To Change/Translate Currency Names And Symbols

Use the below code snippet in your child theme's `functions.php` file and adjust the array of currency names and symbols. You can add as many currencies as you want.

> Please make sure to use [ISO 4217 country codes](https://en.wikipedia.org/wiki/ISO_4217) in array keys (usd, eur, etc.).

```php
<?php

add_filter( 'kemoku_currency_custom_data', fn( array $data ) => array(
    'usd' => array(
        'name' => 'USD',
        'symbol' => '$',
    ),
    'eur' => array(
        'name' => 'EUR',
        'symbol' => '€',
    ),
) );
```

> Please make sure arrays for each currency have both `name` and `symbol` keys and values, even though you don't change one of them. In the example above, I don't change the symbols `$, €`, but I need to pass them anyway.

---

### How To Change/Translate Services

To change or translate the service names you can use the following filter - `kemoku_sportsbook_services` in your child theme's `functions.php` file. The below example renames "Sportsbook" to "Bookmaker".

```php
<?php

add_filter( 'kemoku_sportsbook_services', function( array $defaults ) {

    $defaults['sportsbook'] = 'Bookamker';

    return $defaults;
} );
```

Find below teh default names of services.

```php
<?php

[
    'sportsbook'         => __('Sportsbook', 'kemoku'),
    'casino'             => __('Casino', 'kemoku'),
    'live_casino'        => __('Live Casino', 'kemoku'),
    'poker'              => __('Poker', 'kemoku'),
    'bingo'              => __('Bingo', 'kemoku'),
    'lottery'            => __('Lottery', 'kemoku'),
    'horse_racing'       => __('Horse Racing', 'kemoku'),
    'fantasy_sports'     => __('Fantasy Sports', 'kemoku'),
    'sweepstakes'        => __('Sweepstakes', 'kemoku'),
    'exchange_betting'   => __('Exchange Betting', 'kemoku'),
    'prediction_markets' => __('Prediction Markets', 'kemoku'),
]
```

---

### How To Change/Translate Sports

To change or translate the sport names you can use the following filter - `kemoku_sportsbook_sports` in your child theme's `functions.php` file. The below example renames "American Football" to "Football" and "Football" to "Soccer".

```php
<?php

add_filter( 'kemoku_sportsbook_sports', function( array $defaults ) {

    $defaults['football'] = 'Football';
    $defaults['soccer'] = 'Soccer';

    return $defaults;
} );
```

Find below the default sport names used in the plugin:

```php
<?php

[
    'baseball'     => __('Baseball', 'kemoku'),
    'basketball'   => __('Basketball', 'kemoku'),
    'boxing'       => __('Boxing', 'kemoku'),
    'cricket'      => __('Cricket', 'kemoku'),
    'cycling'      => __('Cycling', 'kemoku'),
    'esports'      => __('Esports', 'kemoku'),
    'football'     => __('Football', 'kemoku'),
    'golf'         => __('Golf', 'kemoku'),
    'hockey'       => __('Hockey', 'kemoku'),
    'horse-racing' => __('Horse Racing', 'kemoku'),
    'martial-arts' => __('Martial Arts', 'kemoku'),
    'racing'       => __('Racing', 'kemoku'),
    'soccer'       => __('Soccer', 'kemoku'),
    'tennis'       => __('Tennis', 'kemoku'),
    'volleyball'   => __('Volleyball', 'kemoku'),
]

```

---

---

### How To Change/Translate Features

Use the below code snippet in your child theme's `functions.php` file and adjust the review features values. These values are set when editing a review page on Review Fields -> Details section, and they're used in filtering the listings.

```php
<?php

add_filter( 'kemoku_sportsbook_features', function( array $defaults ) {

    $defaults['feature_1'] = 'Nuevo';
    $defaults['feature_5'] = 'Buena reputación';

    return $defaults;
} );
```

### How To Change SVG Icons

Kemoku uses SVG icons for various content types like payment methods, sports, and countries. You can customize these icons by providing your own SVG files.

**General Approach:**
Use the appropriate filter to specify a custom directory containing your SVG icons. The plugin will look for SVG files matching the content keys/slugs (e.g., `visa.svg`, `football.svg`, `us.svg`).

#### Payment Method Icons

Use the `kemoku_payment_icons_dir` filter to specify a custom directory for payment method icons.

```php
<?php

add_filter( 'kemoku_payment_icons_dir', function() {
    return get_stylesheet_directory() . '/icons/payment-methods/';
} );
```

**Icon File Names:**
Your SVG files should match the payment method keys: `visa.svg`, `mastercard.svg`, `paypal.svg`, etc.

#### Sports Icons

Use the `kemoku_sport_icons_dir` filter to specify a custom directory for sports icons.

```php
<?php

add_filter( 'kemoku_sport_icons_dir', function() {
    return get_stylesheet_directory() . '/icons/sports/';
} );
```

**Icon File Names:**
Your SVG files should match the sport keys: `football.svg`, `soccer.svg`, `basketball.svg`, etc.

#### Country Icons

Use the `kemoku_country_icons_dir` filter to specify a custom directory for country icons.

```php
<?php

add_filter( 'kemoku_country_icons_dir', function() {
    return get_stylesheet_directory() . '/icons/countries/';
} );
```

**Icon File Names:**
Your SVG files should match the country codes: `us.svg`, `gb.svg`, `de.svg`, `fr.svg`, `es.svg`, etc. Use [ISO 3166 country codes](https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes).

**Directory Structure with Example Icon Names:**

```
your-child-theme/
├── icons/
│   ├── payment-methods/
│   │   ├── visa.svg
│   │   ├── mastercard.svg
│   │   └── paypal.svg
│   ├── sports/
│   │   ├── football.svg
│   │   ├── soccer.svg
│   │   └── basketball.svg
│   └── countries/
│       ├── us.svg
│       ├── gb.svg
│       └── de.svg
```

---

### How To Customize "Table: Payments" Block Design

You have total control over the block's design, all you need to do is adjust some CSS properties and values. Here's a screenshot for easy reference:

![Kemoku Table Payment Row](https://media.dinomatic.com/images/docs/kemoku/kemoku-table-payments-row.jpg)

#### Colors

Let's start with colors. To adjust them, simply use the below snippet in your Additional CSS section and change the color values to your liking. The snippet below contains the default values.

```css
.sb-table-payments .sb-item {
  /* the light gray backgrounds such as bonus code section, */
  /* payout speed and payment methods sections */
  --color-light-gray: #f1f5f9;
  /* the gray border color of the sections */
  --color-dark-gray: #cbd5e1;
  /* the bonus code icon color when there's no code */
  --color-darker-gray: #64748b;
  /* the logo background color */
  --color-logo-bg: #082f49;
  /* bonus text color */
  --color-highlight-1: var(--button_bg_color);
  /* the item name and section headings text color */
  /* also the bonus code icon color when it's available */
  --color-highlight-2: #075985;
}
```

You don't have to copy all the values, just the ones you want to change.
For example, if you want to change the logo background color to red, use this snippet:

```css
.sb-table-payments .sb-item {
  --color-logo-bg: red;
}
```

Other than the above mentioned colors, there are some colors that inherit their values from other elements or they simply don't have any value.
The main button color can be controlled from Kemoku plugin settings page, and the review page link color is inherited from your theme's link color.

To change the row text and background color use:

```css
.sb-table-payments .sb-item {
  color: #f1faf9;
  background-color: #075985;
}
```

#### Column widths

This table is mostly intended to be used on wider pages as it has many columns. As different themes have different content area widths, the plugin columns may need to be adjusted. And it's as easy as it gets, simply set some values and you're done. The names are self-explanatory.

```css
.sb-table-payments .sb-item {
  --column-width-logo: 160px;
  --column-width-rating--base-5: 170px;
  --column-width-rating--base-10: 220px;
  --column-width-payments: 260px;
  --column-width-buttons: 180px;
}
```

As you can see there are 2 properties for the rating column. That's because you may be using 5 or 10 star based rating (Kemoku Settings -> General -> Rating Stars Number). Update the value for whatever option you're using.

Also you may have noticed that there's no property for the bonus section, that's because it takes all the remaining space, no need to set a fixed width for it.

#### Other styles

You can customize the rounded border size by adjusting the `--radius` property value.
`--shadow` property is for the box shadow of the table row, and `--shadow-hover` takes effect when you hover over a row.

```css
--radius: 6px;
--shadow: 0 0 5px rgba(7, 89, 133, 0.35);
--shadow-hover: 0 1px 12px rgba(7, 89, 133, 0.3);
```

To change the gift-box icon background of the bonus section use:

```css
.sb-table-payments .sb-item .sb-item--bonus {
  /* this will remove the background */
  background-image: none;
  /* this will set your own background image */
  background-image: url("IMAGE URL OR BASE 64 ENCODED SVG");
  /* this will set a background color, adjust the value to your liking */
  background-color: #075985;
}
```

To remove or change the dollar-sign icon of the payout speed section use:

```css
.sb-table-payments .sb-item .sb-item--payouts {
  /* this will remove the background */
  background-image: none;
  /* this will set your own background image */
  background-image: url("IMAGE URL OR BASE 64 ENCODED SVG");
}
```

### How To Customize "Grid: Bonus" Block Design

You have total control over the block's design, all you need to do is adjust some CSS properties and values. Here's a screenshot for easy reference:

![Kemoku Grid Bonus](https://media.dinomatic.com/images/docs/kemoku/kemoku-reviews-grid-bonus-block-frontend.jpg)

To adjust any value, simply use the below snippet in your Additional CSS section and change the values to your liking. The snippet below contains the default values.
You can copy just the properties that you want to change, no need to copy them all.

```css
.sb-grid-bonus {
  /* this will change the grid item background color */
  --item-bg-color: #fff;

  /* this will change the grid item text color */
  --item-fg-color: #333;

  /* this will change the grid item border color */
  --item-border-color: #d8dfe8;

  /* this will change the bonus section background color */
  --bonus-bg-color: #124588;

  /* this will change the bonus section text color */
  --bonus-fg-color: #f1f1f1;

  /* this will change the bonus section font size */
  --bonus-font-size: 1.6em;

  /* this will change the bonus section font weight */
  --bonus-font-weight: 400;
}
```

Other styling options such as rounded borders, button background color, etc. are defined in [plugin settings](/docs/kemoku/settings).

---

### How To Customize Hero Section

The Hero block has several filters that allow you to customize different sections of the block. Each filter receives the default HTML content of the corresponding section and allows you to modify or replace it entirely.

#### Available Hero Filters

**Image Section:**

```php
<?php

add_filter( 'kemoku_review_hero_image', function( $content ) {
    // Modify or replace the hero image HTML
    return $content;
} );
```

**Rating Section:**

```php
<?php

add_filter( 'kemoku_review_hero_rating', function( $content ) {
    // Modify or replace the rating stars HTML
    return $content;
} );
```

**Geo Section:**

```php
<?php

add_filter( 'kemoku_review_hero_geo', function( $content ) {
    // Modify or replace the geo-targeting message HTML
    return $content;
} );
```

**Bonus Section:**

```php
<?php

add_filter( 'kemoku_review_hero_bonus', function( $content ) {
    // Modify or replace the bonus text HTML
    return $content;
} );
```

**Button Section:**

```php
<?php

add_filter( 'kemoku_review_hero_button', function( $content ) {
    // Modify or replace the affiliate button HTML
    return $content;
} );
```

**Terms Section:**

```php
<?php

add_filter( 'kemoku_review_hero_terms', function( $content ) {
    // Modify or replace the terms and conditions HTML
    return $content;
} );
```

**Example: Customize Hero Button**

```php
<?php

add_filter( 'kemoku_review_hero_button', function( $content ) {
    // Replace the default button with a custom one
    return '<a href="#" class="custom-hero-button">Get Started Today</a>';
} );
```

---

### Next step

[Plugin Updates](/docs/kemoku/plugin-updates/)
