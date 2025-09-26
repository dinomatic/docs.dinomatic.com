---
title: Geo-Targeting
description: Kemoku Geo-Targeting Features
weight: 100
extra:
  order: 100
---

# Geo-Targeting

`💁 since version 2.0`

Kemoku includes powerful geo-targeting features that automatically adapt your review content based on your visitors' location. This ensures visitors see relevant operators and get the right affiliate links for their country.

---

## How Geo-Targeting Works

When a visitor lands on your review page, Kemoku automatically detects their country and shows personalized content:

- **Country Support Messages**: Clear indicators showing if the operator accepts players from the visitor's country
- **Smart Affiliate Links**: Automatic routing to the correct affiliate link for the visitor's location
- **Filtered Listings**: Option to hide reviews for operators that don't accept the visitor's country
- **Fallback Pages**: Redirect visitors from unsupported countries to relevant alternatives

---

## Country Detection

Kemoku uses multiple methods to detect visitor locations, with automatic fallbacks for maximum accuracy:

### Cloudflare Integration

If you're using Cloudflare, Kemoku automatically detects visitor countries through Cloudflare's geo headers. This is the fastest and most accurate method.

**No setup required** - it works automatically when Cloudflare is active.

### MaxMind GeoLite2

For sites not using Cloudflare, you can add your free MaxMind license key for professional-grade geo-location.

1. Get a free license key from [MaxMind](https://www.maxmind.com/en/geolite2/signup)
2. Go to **Kemoku Reviews** → **Settings** → **Geo Targeting**
3. Enter your MaxMind license key
4. The plugin will automatically download and update the geo database

### Intelligent Fallbacks

If neither Cloudflare nor MaxMind is available, Kemoku uses a default country (US) that you can customize through the `kemoku_geo_default_country_code` filter:

```php
<?php

add_filter( 'kemoku_geo_default_country_code', function( $default ) {
    return 'gb'; // Return country code
} );
```

---

## Geo-Targeting Settings

Configure geo-targeting options in **Kemoku Reviews** → **Settings** → **Geo Targeting**.

### Country Support Messages

Customize the messages visitors see based on their country support status:

- **Supported Text**: Message when the operator accepts players from the visitor's country (default: `%review% supports players from %country%`)
- **Unsupported Text**: Message when the operator doesn't accept players from the visitor's country (default: `%review% does not support players from %country%`)
- **Bonus Text**: Bonus information shown for supported countries (default: `%bonus%`)
- **Affiliate Link/Button Text**: Text for the affiliate button (default: `Claim Now`)
- **Not Supported Additional Text**: Alternative message for unsupported countries (default: `Check out our other reviews for %country% %link%`)

### Fallback Configuration

Set up fallback pages for visitors from unsupported countries:

- **Page link URL**: Where to redirect visitors when an operator doesn't accept their country
- **Page link text**: Customize the link text (default: your site name)

### MaxMind License Key

Enter your MaxMind license key for geo-location when Cloudflare headers are not available.

---

## Review Page Geo Features

### Country Support in Hero Section

Enable country support messages in your review hero sections:

1. Go to **Kemoku Reviews** → **Settings** → **Hero Section**
2. Set "Include Geo Section" to "Yes"
3. The hero will automatically show country availability with flags and messaging

### Country Support in Info Table

Add country support information to your review info tables:

1. Edit a review page
2. Go to **Review Fields** → **Info Block**
3. In the "Add country support to Info Table" section, enable the field
4. Customize the field name (default: "Support for your country")
5. The info table will include a country support row with availability status

### Country Support Block

Use the dedicated **Review Country Support** block anywhere on your site:

1. Add the "Review Country Support" block to any page
2. The block automatically shows country availability for the current review
3. Perfect for sidebars, comparison pages, or anywhere you want to highlight geo-availability

---

## Listing Geo Features

### Country Filtering

Enable country filtering in your review listings to show only relevant operators:

1. Add a **Reviews Table** or **Reviews Grid** block
2. In the block settings, enable "Filter by visitor's country"
3. Visitors will only see reviews for operators that accept their country

### Country Support Badges

Show country availability status directly in listing items:

1. Add a **Reviews Table** or **Reviews Grid** block
2. In the block settings, enable "Show country support badges"
3. Each listing item will display a country support indicator

---

## Geo-Specific Affiliate Links

Configure different affiliate links for different countries:

### Setting Up Geo Links

1. Edit a review page
2. Go to **Review Fields** → **Geo Targeting**
3. In the **Affiliate Links** section, add country-specific URLs
4. Set a default affiliate link for countries not specifically configured

### How It Works

- Visitors from configured countries get the specific affiliate link
- Visitors from other countries get the default affiliate link
- If no default is set, visitors from unconfigured countries see the fallback page

---

## Customization

### Custom Geo Messages

The geo-targeting messages are configured through the plugin settings and cannot be overridden with filters. You can customize these messages in **Kemoku Reviews** → **Settings** → **Geo Targeting**.

### Custom Country Names

For translating or customizing country names, see the [How To Change/Translate Country Names](/docs/kemoku/how-to/#how-to-changetranslate-country-names) section.

---

### Next step

[Smart Deep Linking](/docs/kemoku/deep-linking/)
