---
title: Listing Tools
description: Kemoku Listing Tools
weight: 120
extra:
  order: 120
---

# Customizing Listing Tools

Kemoku listings have optional filtering and sorting features. You can enable them for each listing block individually. In this document I'll demonstrate how to customize them.

All text strings used in listing tools can be updated in Kemoku Settings → Blocks section.

[Style changes](#styling) can be added to a child theme's stylesheet or theme's Customizer's Additional CSS section.

Other changes described below can be added to a child theme.

## Sorting

The listings can be sorted by name, rating or date in ascending and descending order. You can change these options with simple functions.

### Changing Sorting Options

You can use a function like this one to modify sorting key labels, this example changes "Recently Added" to "Date".

```php
<?php

function update_listing_sorting_keys( array $defaults ): array {

  $defaults['date'] = __( 'Date', 'kemoku' );

  return $defaults;
}
add_filter( 'kemoku_table_sorting__keys', 'update_listing_sorting_keys' );
```

### Disabling Sorting Options

This function removes the "Recently Added" option:

```php
<?php

function update_listing_sorting_keys( array $defaults ): array {

  unset( $defaults['date'] );

  return $defaults;
}
add_filter( 'kemoku_table_sorting__keys', 'update_listing_sorting_keys' );
```

## Filters

By default there are 6 filter groups: Rating, Features, Services, Licenses, Countries, Payment Methods, Sports. You can disable each one of them or change the group heading. These are the default values:

```php
<?php

array(
    'rating'          => __( 'Rating', 'kemoku' ),
    'features'        => __( 'Features', 'kemoku' ),
    'services'        => __( 'Services', 'kemoku' ),
    'licenses'        => __( 'Licenses', 'kemoku' ),
    'countries'       => __( 'Countries', 'kemoku' ),
    'us_states'       => __( 'US States', 'kemoku' ),
    'payment_methods' => __( 'Payment Methods', 'kemoku' ),
    'sports'          => __( 'Sports', 'kemoku' ),
);
```

### Disabling Filter Groups

To remove any group from filters, use a function like the one below. Change 'us_states' to any other key to remove those.

```php
<?php

function remove_us_states_from_listing_filters( array $defaults ): array {

  unset( $defaults['us_states'] );

  return $defaults;
}
add_filter( 'kemoku_listing_filters__keys', 'remove_us_states_from_listing_filters' );
```

### Changing Filter Headings

To change the group heading, use a function like the one below. This example is for Payment Methods, and you can adjust the values to change any other heading.

```php
<?php

function update_listing_filters_pm_heading( array $defaults ): array {

  $defaults['payment_methods'] = 'Deposit Methods';

  return $defaults;
}
add_filter( 'kemoku_listing_filters__keys', 'update_listing_filters_pm_heading' );
```

### Changing Rating Filters

By default there are 5 rating options: 6+, 7+, 8+, 9+ and 10. You can use a function like the example below to modify the rating options. This one removes "6+" option.

```php
<?php

function update_listing_filters_ratings( array $defaults ): array {

  unset( $defaults[6] );

  return $defaults;
}
add_filter( 'kemoku_listing_filters__values__rating', 'update_listing_filters_ratings' );
```

### Changing Feature Filters

By default there are 5 feature options: 'New', 'Popular', 'Fast Payouts', 'Mobile Friendly' and 'Good Reputation'. You can use a function like the example below to modify the feature options. This one removes the "Good Reputation" option and renames "Mobile Friendly" to "Mobile Apps".

```php
<?php

function update_listing_filters_features( array $defaults ): array {

  unset( $defaults['feature_5'] );

  return $defaults;
}
add_filter( 'kemoku_listing_filters__values__features', 'update_listing_filters_features' );
```

This function changes "Mobile Friendly" to "Mobile Apps":

```php
<?php

function update_listing_filters_features( array $defaults ): array {

  $defaults['feature_4'] = __( 'Mobile Apps', 'kemoku' );

  return $defaults;
}
add_filter( 'kemoku_listing_filters__values__features', 'update_listing_filters_features' );
```

If you need multiple changes, you can add them all into a single function. For example, remove "Fast Payouts" and translate into Spanish.

```php
<?php

function update_listing_filters_features( array $defaults ): array {

  return array(
			'feature_1' => __( 'Nuevo', 'kemoku' ),
			'feature_2' => __( 'Popular', 'kemoku' ),
			'feature_4' => __( 'Apto para móviles', 'kemoku' ),
			'feature_5' => __( 'Buena reputación', 'kemoku' ),
  );
}
add_filter( 'kemoku_listing_filters__values__features', 'update_listing_filters_features' );
```

### Changing Service Filters

By default there are 8 services and here are their default values:

```php
<?php

array(
    'sportsbook'     => __( 'Sportsbook', 'kemoku' ),
    'casino'         => __( 'Casino', 'kemoku' ),
    'live_casino'    => __( 'Live Casino', 'kemoku' ),
    'poker'          => __( 'Poker', 'kemoku' ),
    'bingo'          => __( 'Bingo', 'kemoku' ),
    'lottery'        => __( 'Lottery', 'kemoku' ),
    'horse_racing'   => __( 'Horse Racing', 'kemoku' ),
    'fantasy_sports' => __( 'Fantasy Sports', 'kemoku' ),
);
```

You can use a function like the example below to modify the service options. This one removes "Bingo" and "Lottery" options and renames "Fantasy Sports" to "Daily Fantasy Sports".

```php
<?php

function update_listing_filters_services( array $defaults ): array {

    unset( $defaults['bingo'] );
    unset( $defaults['lottery'] );

    $defaults['fantasy_sports'] = __( 'Daily Fantasy Sports', 'kemoku' );

    return $defaults;
}
add_filter( 'kemoku_listing_filters__values__services', 'update_listing_filters_services' );
```

### Geo Filtering

`💁 since version 2.0`

Kemoku includes geo-filtering capabilities that automatically filter listings based on visitor location. This feature works with the plugin's geo-targeting system to show only relevant reviews for each visitor's country.

For detailed information about geo-targeting features, see the [Geo-Targeting](/docs/kemoku/geo-targeting/) documentation.

### Changing Country, State, License, Payment Method and Currency Filters

Country, State, Payment Method, Currency and License values on filters are generated from the fields you fill in when editing review pages. There will be only values that you already selected. However, if for some reason you need to modify them, you can use the below filters:

```php
<?php


kemoku_listing_filters__values__licenses
kemoku_listing_filters__values__countries
kemoku_listing_filters__values__us_states
kemoku_listing_filters__values__payment_methods
kemoku_listing_filters__values__currencies
```

### Styling

Copy the values you want to change to a custom stylesheet or Additional CSS section and adjust them.

```css
.sb-listing-popup {
  /* This is the semi-transparent background color outside the popup window. */
  --listing_tools_popup_outer_color: rgba(2, 15, 44, 0.76);
  /* This is the popup background color. */
  --listing_tools_popup_bg_color: #fff;
  /* This is the popup font color. */
  --listing_tools_popup_font_color: #8d99a2;
  /* This is the popup maximum width. */
  --listing_tools_popup_max_width: 440px;
  /* This is the popup maximum height. */
  --listing_tools_popup_max_height: 90vh;
  /* This is the popup border radius. */
  --listing_tools_popup_border_radius: 4px;
  /* This is the popup headings background color. */
  --listing_tools_headings_bg_color: var(--section_bg_color);
  /* This is the popup headings border radius. */
  --listing_tools_headings_border_radius: var(
    --listing_tools_popup_border_radius
  );
  /* This is the popup button font color. */
  --listing_tools_button_font_color: #565f66;
  /* This is the popup button background color. */
  --listing_tools_button_bg_color: var(--section_bg_color);
  /* This is the popup button border color. */
  --listing_tools_button_border_color: #d5dde3;
  /* This is the popup button border radius. */
  --listing_tools_button_border_radius: 4px;
  /* This is the popup selected options highlight color. */
  --listing_tools_filter_sort_selected_color: var(--button_bg_color, green);
  /* This is the popup footer buttons' background color. */
  --listing_tools_footer_button_bg_color: #d5dde3;
  /* This is the popup footer buttons' font color. */
  --listing_tools_footer_button_font_color: inherit;
}
```

### Next step

[How To ...](/docs/kemoku/how-to/)
