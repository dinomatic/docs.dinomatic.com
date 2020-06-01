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

### How To Use Custom Payment Icons

Spinoko comes wth carefully chosen payment icons that both look nice on the page are optimal for performance. You can add your own icons by following the steps below.

**The SVG icon**: You need to use an SVG (Scalable Vector Graphics) files for icons. `.png .jpg .gif` etc. common image formats will not work.

**The file name**: The filename should be the lowercase version of the payment method and should not contain spaces. For example: for **American Express** payment method you'd have a file called `american-express.svg`.

**The Directory**: You need to use a [child theme](/docs/spinoko/child-theme) for this to avoid future update conflicts.
In your child theme's root directory create a directories: `assets/icons/payments/` and add the icon to the payments directory.

---

### How To Change Table Sorting Keys

By default Spinoko adds 5 tables sorting keys/buttons:

1. Name (alphabetically)
2. Year (of establishment)
3. Rating
4. Bonus amount
5. Bonus percentage

All the above fields are pn casino pages to be filled in.

If you want to change the keys, add the following to your child theme's `functions.php` file.

It currently includes the 5 default keys, remove the ones you don't need and also provide your own texts for buttons by changing the default values.

```php
function spinoko__change_table_sort_keys() {

    return array(
        'alpha'            => __( 'Name', 'spinoko' ),
        'year'             => __( 'Year', 'spinoko' ),
        'rating'           => __( 'Rating', 'spinoko' ),
        'bonus_amount'     => __( 'Bonus', 'spinoko' ),
        'bonus_percentage' => __( 'Bonus %', 'spinoko' ),
    );
}
add_filter( 'spinoko_table_sorting_keys', 'spinoko__change_table_sort_keys' );
```

For example, ig you need only `name` and `year` keys, and you want to change **Year** to **Year established** the function would look like this:


```php
function spinoko__change_table_sort_keys() {

    return array(
        'alpha' => __( 'Name', 'spinoko' ),
        'year'  => __( 'Year established', 'spinoko' ),
    );
}
add_filter( 'spinoko_table_sorting_keys', 'spinoko__change_table_sort_keys' );
```

---
