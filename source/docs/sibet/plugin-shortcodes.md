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

#### Show more button label

By default it is "Show more prices" and you can change it using the filter below:

```php
add_filter('sibet_string_more_prices_label', fn () => 'More bookmakers');
```

#### Label in front of the markets dropdown

By default it is "Markets:", and this is how to change it.

```php
add_filter('sibet_string_markets_label', fn () => 'Choose a market');
```

You can return an empty string, if you don't want a label there.

```php
add_filter('sibet_string_markets_label', fn () => '');
```

#### Label in front of the bets dropdown

By default it is "Bets:", if you want to change it use the filter below.

```php
add_filter('sibet_string_bets_label', fn () => 'Bet Type');
```

Similarly, you can return an empty string, if you don't want a label for the bets dropdown.


```php
add_filter('sibet_string_bets_label', fn () => '');
```

#### VS - between teams

Perhaps in some languages it's more appropriate to use something else instead of 'vs', so you can change it:

```php
add_filter('sibet_string_vs', fn () => 'x');
```

### Initial bookmaker count

By default there are only 2 bookmakers' odds displayed, and you can click the "show more" button to see the rest. You can change the number of initial bookmakers using the filter below. If you return a big enough number, all bookmakers will be displayed and the "show more" button will be hidden.

```php
add_filter('sibet_table_initial_bookmaker_count', fn () => 3);
```

> Please make sure to return an integer value, not a string. Do not use a number in quotes like '3' or "3". Simply 3.

---

### Next step

[Affiliate Settings](/docs/sibet/bookmaker-settings/)
