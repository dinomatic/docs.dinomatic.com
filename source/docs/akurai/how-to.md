---
title: How To ...
description: How To ...
extends: _layouts.documentation
section: content
---

# How To ...

### How To Use Custom SVG Icons in Theme Blocks

Detailed description of how to use custom SVG icons in Banking and Offers blocks [here](https://dinomatic.com/posts/using-custom-svg-icons-in-themes).

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
