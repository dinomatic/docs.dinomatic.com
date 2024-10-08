---
title: Plugin Shortcodes
description: Sibet Plugin Shortcodes
extends: _layouts.documentation
section: content
---

# Plugin Shortcodes

Generate table shortcodes and paste them in your pages with a couple of clicks.

## Shortcodes

There are 2 types of shortcodes:

1. League shortcode
2. Match shortcode

League shortcode displays all matches for selected league, and the match shortcode displays only the selected match.

Both shortcodes can be generated using the plugins shortcode generator.

### Shortcode Generator

Simply select the desired options and the shortcode will be generated for you, click the button to copy it and use it where you need to.

![Sibet Plugin Shortcodes](https://media.dinomatic.com/images/docs/sibet/plugin-shortcode.jpg)

### Strings in Shortcodes

There are only a couple of strings used in Sibet shortcodes, and they can be customized using filters.

#### Outcome labels

By default, the outcomes are labeled as "Home", "Draw" and "Away".
If you want to change them, you the example below where we set them "1", "X" and "2" instead.

```php
add_filter('sibet_string_home_label', fn () => '1');
add_filter('sibet_string_draw_label', fn () => 'X');
add_filter('sibet_string_away_label', fn () => '2');
```


#### Odds format button labels

If you want to change odds format labels from "Decimal", "Fractional" and "American" to something else, you the example below:

```php
add_filter('sibet_string_decimal_odds_label', fn () => 'EU');
add_filter('sibet_string_fractional_odds_label', fn () => 'UK');
add_filter('sibet_string_american_odds_label', fn () => 'US');
```

#### Show more/less button label

By default, it is "Show more"/"Show Less" and you can change them using the example below:

```php
add_filter('sibet_string_more_prices_label', fn () => 'More bookmakers');
add_filter('sibet_string_less_prices_label', fn () => 'Less bookmakers');
```

#### VS - between teams

Perhaps in some languages it's more appropriate to use something else instead of 'vs', so you can change it:

```php
add_filter('sibet_string_vs', fn () => 'x');
```

### Initial bookmaker count

By default, there are only 4 bookmakers' odds displayed, and you can click the "show more" button to see the rest.
You can change the number of initial bookmakers using the filter below. 
If you return a big enough number, all bookmakers will be displayed and the "show more" button will be hidden.

```php
add_filter('sibet_table_initial_bookmaker_count', fn () => 3);
```

> Please make sure to return an integer value, not a string. Do not use a number in quotes like '3' or "3". Simply 3.

---

### Next step

[Affiliate Settings](/docs/sibet/bookmaker-settings/)
