---
title: Deep Linking
description: Kemoku Deep Linking Features
weight: 110
extra:
  order: 110
---

# Smart Deep Linking

`💁 since version 2.0`

Kemoku includes smart deep linking functionality that automatically creates links from review page content blocks to associated pages. This feature helps improve your site's internal linking structure and SEO performance.

---

## How Deep Linking Works

When enabled, deep linking automatically converts content items in review page blocks into clickable links that point to relevant pages on your site. For example, if you have a "Bitcoin bookmakers" page, currencies like "Bitcoin" in your review blocks will automatically link to that page.

### Supported Content Blocks

Deep linking works with the following review page blocks:

- **Review Currencies**: Links currency names to currency-specific pages
- **Review Payment Methods**: Links payment method names to payment method-specific pages
- **Review Services**: Links service names to service-specific pages
- **Review Sports**: Links sport names to sport-specific pages
- **Review Countries**: Links country names to country-specific pages
- **Review US States**: Links state names to state-specific pages

---

## Enabling Deep Linking

Deep linking is controlled through WordPress filters. By default, deep linking is disabled for all content blocks. You need to enable it for each content type you want to use.

Here's how to enable deep linking for currencies. Use this code in child theme's `functions.php` file:

```php
<?php

// Enable deep linking for currencies
add_filter( 'kemoku_deep_linking_enabled__currencies', '__return_true' );
```

Just enabling it is not enough, your currency pages have to have a specific URL structure. By default, the plugin expects the currency page URLs should have this structure:

```
https://your-domain.com/currencies/{SLUG}
```

\- where {SLUG} is the currency abbreviation, for example `/currencies/eur` or `/currencies/btc`.

If you use a different structure, you need to let the plugin know about it. Let's say your currency pages use `currency` instead of `currencies`. Here's how to update it:

```php
<?php

add_filter( 'kemoku_deep_linking_slug__currencies', function() {
    return 'currency';
} );
```

You can also remove the "parent" page slug if your currency pages don't have any and your currency page URLs look like `your-domian.com/{SLUG}`:

```php
<?php

add_filter( 'kemoku_deep_linking_slug__currencies', fn() => '');
```

### All deep linking filters

```php
<?php

// Enable deep linking and customize the slug for currencies
add_filter( 'kemoku_deep_linking_enabled__currencies', '__return_true' );
add_filter( 'kemoku_deep_linking_slug__currencies', function() {
    return 'currencies'; // update according to your URL structure
} );

// Enable deep linking for and customize the slug for payment-methods
add_filter( 'kemoku_deep_linking_enabled__payment-methods', '__return_true' );
add_filter( 'kemoku_deep_linking_slug__payment-methods', function() {
    return 'payment-methods'; // update according to your URL structure
} );

// Enable deep linking and customize the slug for services
add_filter( 'kemoku_deep_linking_enabled__services', '__return_true' );
add_filter( 'kemoku_deep_linking_slug__services', function() {
    return 'services'; // update according to your URL structure
} );

// Enable deep linking and customize the slug for sports
add_filter( 'kemoku_deep_linking_enabled__sports', '__return_true' );
add_filter( 'kemoku_deep_linking_slug__sports', function() {
    return 'sports'; // update according to your URL structure
} );

// Enable deep linking and customize the slug for countries
add_filter( 'kemoku_deep_linking_enabled__countries', '__return_true' );
add_filter( 'kemoku_deep_linking_slug__countries', function() {
    return 'countries'; // update according to your URL structure
} );

// Enable deep linking and customize the slug for US States
add_filter( 'kemoku_deep_linking_enabled__us-states', '__return_true' );
add_filter( 'kemoku_deep_linking_slug__us-states', function() {
    return 'us-states'; // update according to your URL structure
} );
```

---

## How It Works

After the optional configuration is done and deep linking is enabled, it all works automatically.

1. **Content Detection**: The plugin detects content items in review page blocks
2. **Slug Generation**: It creates slugs from the content item names, if not given
3. **Page Lookup**: It searches for pages matching the pattern `page-slug/content-slug`
4. **Link Creation**: If a matching page is found, the content item becomes a clickable link
5. **Fallback**: If no matching page is found, the content item remains as plain text

---

### Next step

[Customize Listing Tools](/docs/kemoku/listing-tools/)
