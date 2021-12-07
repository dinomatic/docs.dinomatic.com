---
title: How To ...
description: How To ...
extends: _layouts.documentation
section: content
---

# How To ...

### How To Create a Header Navigation Menu

Detailed description of Spinoko nav menus and a guide on how to create one can be found [here](/docs/spinoko/navigation).

---

### How To Remove Labels from Archive Page Titles

By default in any WordPress installation archive page titles contain a label plus the it's name/title, for example a page title for a category "Bonuses" is "Category: Bonuses" and the same if for tags, authors, etc.

If you want to remove those labels and just have the actual titles only, add the below function to your [child theme](/docs/spinoko/child-theme)'s `functions.php` file.

```php
/**
 * Removes labels (category, tag, author) from archive page titles.
 */
function spinoko_child_archive_titles( $title ) {

    if ( is_category() ) {

        $title = single_cat_title( '', false );

    } elseif ( is_tag() ) {

        $title = single_tag_title( '', false );

    } elseif ( is_author() ) {

        $title = get_the_author();
    }

    return $title;
}
add_filter( 'get_the_archive_title', 'spinoko_child_archive_titles' );
```

---

### How To Use Custom Payment Icons

Spinoko comes wth carefully chosen payment icons that both look nice on the page are optimal for performance. You can add your own icons by following the steps below.

**The SVG icon**: You need to use an SVG (Scalable Vector Graphics) files for icons. `.png .jpg .gif` etc. common image formats will not work.

**The file name**: The filename should be the lowercase version of the payment method and should not contain spaces. For example: for **American Express** payment method you'd have a file called `american-express.svg`.

**The Directory**: You need to use a [child theme](/docs/spinoko/child-theme) for this to avoid future update conflicts.
In your child theme's root directory create a directories: `assets/icons/payments/` and add the icon to the payments directory.

---

### How To Change Table Sorting Keys

By default Spinoko adds 5 table sorting keys/buttons:

1. Name (alphabetically)
2. Year (of establishment)
3. Rating
4. Bonus amount
5. Bonus percentage

All the above fields are in casino edit pages to be filled in.

💁 If you just need to change the labels, you can do so by visiting **Customizer** &#8594; **Strings** in your WP dashboard.

To change the keys, use the following function and modify it in your child theme's `functions.php` file.

```php
function spinoko__change_table_sort_keys() {

    return array(
        'default'          => __( 'X', 'spinoko' ),
        'alpha'            => __( 'Name', 'spinoko' ),
        'year'             => __( 'Year', 'spinoko' ),
        'rating'           => __( 'Rating', 'spinoko' ),
        'bonus_amount'     => __( 'Bonus', 'spinoko' ),
        'bonus_percentage' => __( 'Bonus %', 'spinoko' ),
    );
}
add_filter( 'spinoko_table_sorting_keys', 'spinoko__change_table_sort_keys' );
```

It currently includes the 5 sort keys + a default/reset key, remove the ones you don't need and also provide your own labels for buttons by changing the default values.

For example, if you need only `name` and `year` keys, and you want to change **Year** to **Year established** the function would look like this:


```php
function spinoko__change_table_sort_keys() {

    return array(
        'default' => __( 'X', 'spinoko' ),
        'alpha'   => __( 'Name', 'spinoko' ),
        'year'    => __( 'Year established', 'spinoko' ),
    );
}
add_filter( 'spinoko_table_sorting_keys', 'spinoko__change_table_sort_keys' );
```

**Disable reset** - if you want to disable the **default/reset** option, remove the line `'default' => __( 'X', 'spinoko' ),` as well.

**Change order** - if you want to move the **default/reset** button to the end, or change the order of the buttons, you can do it here by changing the order of `'key' => 'Label'` pairs:

```php
function spinoko__change_table_sort_keys() {

    return array(
        'rating'  => __( 'Rating', 'spinoko' ),
        'alpha'   => __( 'Name', 'spinoko' ),
        'default' => __( 'Reset', 'spinoko' ),
    );
}
```

---

### How To Change Table Filters

By default you can filter casinos by:

- Country
- Game
- Game Provider
- Payment Method
- License

By using `spinoko_table_filters_keys` filter you can remove any key or change their names.

To change a name:

```php
function spinoko__change_table_filters( $filters ) {

    $filters['games'] = 'Casino Games';

	return $filters;
}
add_filter( 'spinoko_table_filters_keys', 'spinoko__change_table_filters' );
```

To remove a key:

```php
function spinoko__change_table_filters( $filters ) {

    return array_filter( $filters, fn ( $filter ) => $filter !== 'games', ARRAY_FILTER_USE_KEY );
}
add_filter( 'spinoko_table_filters_keys', 'spinoko__change_table_filters' );
```

In general, `$filters` is a PHP array and you can modify it the way you want. Here's the default array:

```php
$filter = array(
    'countries'       => __( 'Countries', 'spinoko' ),
    'games'           => __( 'Games', 'spinoko' ),
    'game_providers'  => __( 'Game Providers', 'spinoko' ),
    'payment_methods' => __( 'Payment Methods', 'spinoko' ),
    'licenses'        => __( 'Licenses', 'spinoko' ),
);
```

---

### How To Include Custom Payment Methods in Table Filters

By default table filters include only main payment methods provided by the theme. However, if you want to include the custom ones that you added, simply use this filter in your child theme.

```php
add_filter( 'spinoko_table_filters_custom_payments', '__return_true', 10 )
```

---

### How To Change (Translate) Country Names

By default Spinoko uses [ISO 3166](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country names and two-letter codes. Some of the names are quite long and you may want to change them. For example, instead of "*United Kingdom of Great Britain and Northern Ireland*" you may want to use just "*United Kingdom*".

Also, you can use this method to display country names in a different language.

To change the names, you need to use the following filter in your child theme's `functions.php` file:

```php
function spinoko__change_country_names( $countries ) {

    $countries['gb'] = 'United Kingdom';
	$countries['us'] = 'USA';

	return $countries;
}
add_filter( 'spinoko_country_custom_names', 'spinoko__change_country_names' );
```

For translation, use the same filter and add the country names in your language, for example:

```php
// Spanish
$countries['de'] = 'Alemania';
$countries['nl'] = 'Países Bajos';
```

Use any country code (lower case) from the above mentioned ISO 3166 list and customize the country names by adding as many lines as you want:

```php
$countries['TWO-TETTER-CODE'] = 'COUNTRY-NAME';
```

You don't have to change/translate all the country names, do so for just the ones you need.

---

### How To Remove Review Links

By default Spinoko blocks include "Read Review" links to casino review pages.
You may for some reason want to not display them and you could easily do it using some CSS rules,
however, in that case the links would still be there, just hidden.

If you want to remove them entirely, use the below code snippet in your child theme.

```php
/**
 * Removes review links from table/grid blocks.
 */
add_filter( 'spinoko_display_review_links', '__return_false', 10 )
```

---
