---
title: How To ...
description: Kemoku How-tos
extends: _layouts.documentation
section: content
---

# How To ...

### How To Change Listing Filters and Sorting

Check out [this guide](/docs/kemoku/listing-tools) for complete list of options about how to change the filters and sorting on listings.

---

### How To Change/Translate Country Names

Use the below code snippet in your child theme's `functions.php` file and adjust the array of country names. You can add as many countries as you want.

> Please make sure to use [ISO 3166 country codes](https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes) in array keys (us, gb, fr, etc.).

```php
add_filter( 'kemoku_country_custom_names', fn( array $names )  => array(
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
add_filter( 'kemoku_currency_custom_data', fn( array $data )  => array(
    'usd' => array(
        'name' => 'USD',
        'symbol' => '$',
    ),
    'usd' => array(
        'name' => 'EUR',
        'symbol' => '€',
    ),
) );
```

> Please make sure arrays for each currency have both `name` and `symbol` keys and values, even though you don't change one of them. In the example above, I don't change the symbols `$, €`, but I need to pass them anyway.

---

### How To Change/Translate Features

Use the below code snippet in your child theme's `functions.php` file and adjust the review features values. These values are set when editing a review page on Review Fields -> Details section, and they're used in filtering the listings.

```php
add_filter( 'kemoku_sportsbook_features', function( array $defaults ) {

	$defaults['feature_1'] = 'Nuevo';
	$defaults['feature_5'] = 'Buena reputación';

	return $defaults;
} );
```

### How To Customize "Table: Payments" Block Design

You have total control over the blocks design, all you need to do is adjust some CSS properties and values. Here's a screenshot for easy reference:

![Kemoku Table Payment Row](https://media.dinomatic.com/images/docs/kemoku/kemoku-table-payments-row.jpg)

#### Colors

Let's start with colors. To adjust them, simply use the below snippet to your Additional CSS section and change the color values to your liking. The snippet below contains the default values.

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
  --shadow: 0 0 5px rgba(7,89,133,.35);
  --shadow-hover: 0 1px 12px rgba(7,89,133,.3);
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

### Next step

[Plugin Updates](/docs/kemoku/plugin-updates/)
