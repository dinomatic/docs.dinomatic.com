---
title: How To ...
description: How To ...
extends: _layouts.documentation
section: content
---

# How To ...

### How To Use Custom SVG Icons in Theme Blocks

Detailed description of how to use custom SVG icons in Banking and Offers blocks [here](https://dinomatic.com/posts/using-custom-svg-icons-in-themes#akurai).

---

### How To Modify Reviews Filters

`💁 since version 2.3.0` You can add **filters** to tables and grids. Currently filters are divided into 6 groups:

- Popular Filters
- Ratings
- Offers
- Licenses
- Countries
- Payment Methods

Below filters allow to modify which filter groups to include (keys), what to call those groups (headings) and values to filter reviews. You can use them in your child theme.

For more details check out <code>inc/modules/review-filters.php</code> file.

#### How To Modify Keys

```php
if ( ! function_exists( 'set_akurai_review_filters_keys' ) ) {
  /**
   * Modify review filters keys.
   * Default value for $keys array is [
   *  'ai_additional_info',
   *  'ai_offers',
   *  'ai_rating',
   *  'ai_license',
   *  'ai_countries',
   *  'ai_payment_methods'
   * ]
   *
   * This example function returns all keys except the licenses.
   */
  function set_akurai_review_filters_keys( array $keys ): array {

    return array_filter( $keys, fn( $key ) => $key !== 'ai_license' );
  }
  add_filter( 'akurai_review_filters__keys', 'set_akurai_review_filters_keys' );
}
```

#### How To Modify Headings

These are all available filters to modify review filters headings:

```
'akurai_review_filters__heading__popular'
'akurai_review_filters__heading__rating'
'akurai_review_filters__heading__offers'
'akurai_review_filters__heading__licenses'
'akurai_review_filters__heading__countries'
'akurai_review_filters__heading__payment_methods'
```

The below example changes offers block heading from <code>Offers</code> to <code>Services</code>.

```php
add_filter(
  'akurai_review_filters__heading__offers',
  fn () => __( 'Services', 'akurai' )
);
```

---

#### How To Modify Values

These are all available filters to modify review filters values:

```
'akurai_review_filters__values__popular'
'akurai_review_filters__values__rating'
'akurai_review_filters__values__offer'
'akurai_review_filters__values__license'
'akurai_review_filters__values__country'
'akurai_review_filters__values__payment_method'
```

The below example modifies ratings block. Instead of <code>6+, 7+, 8+, 9+, 10</code> it will change it to just <code>8 and more, 9 and more, 10</code>.

```php
add_filter(
  'akurai_review_filters__values__rating',
  fn () => array( '8' => '8 and more', '9' => '9 and more', '10' => '10' )
);
```

This next example modifies offers block. Instead of <code>Sportsbook, Casino, Live Casino, Poker, Bingo, Lottery</code> it will change it to just <code>Sportsbook, Casino</code>.

```php
add_filter(
  'akurai_review_filters__values__offers',
  fn () => array( 'sportsbook' => 'Sportsbook', 'casino' => 'Casino' )
);
```

---

### How To Change Footer Gambling Logos

To do that, first we need to create the following directory structure in the child theme and upload all the logo images to that directory:

```php
/assets/images/gambling-logos/
```

It helps if you resize the images beforehand so that they all have the same height.

Next we need to use a filter to update the logo files. Add this to your child theme's `functions.php` file and replace the values with actual image names, dimensions, alt texts and URLs (optional). Those should be the images you uploaded at the previous step. The example uses just 2 images, but you can add as many images as you want.

```php
function change_akurai_gambling_logos( $logos ) {

  return array(
    array(
      'image'  => 'logo-1.png',
      'alt'    => 'Logo #1 alt text',
      'url'    => 'https://some-url-here.org/',
      'width'  => 64,
      'height' => 36,
    ),
    array(
      'image'  => 'logo-1.png',
      'alt'    => 'Logo #2 alt text',
      'width'  => 124,
      'height' => 36,
    ),
    // copy/paste and modify the previous array as many times as you need
  );
}
add_filter( 'akurai_gambling_logos', 'change_akurai_gambling_logos' );
```

---

### How to choose which logo to use on each listing block

For each review you can upload 2 logos (main/large and small), and there are 5 listing blocks and 2 widget blocks available in Akurai.
By default blocks use the following logos:

- Review Table - Small Logos
- Review Table Flex - Large Logos
- Review Table Extended - Large Logos
- Review Grid - Large Logos
- Review List - Small Logos
- Single Review Widget - Small Logos
- Multiple Reviews Widget - Large Logos

Depending on what kind of logos you upload, you may want to use different images on different blocks.
You can change which logo to use on the blocks by using the below filters, copy only the ones that you want to change and add them to your child theme.

```php
add_filter( 'akurai_table_logo_size', fn() => 'large' );
add_filter( 'akurai_table_flex_logo_size', fn() => 'small' );
add_filter( 'akurai_table_extended_logo_size', fn() => 'small' );
add_filter( 'akurai_grid_logo_size', fn() => 'small' );
add_filter( 'akurai_list_logo_size', fn() => 'large' );
add_filter( 'akurai_multiple_reviews_widget_logo_size', fn() => 'large' );
add_filter( 'akurai_single_review_widget_logo_size', fn() => 'small' );
```

---
