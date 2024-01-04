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

### Next step

[Plugin Updates](/docs/kemoku/plugin-updates/)
