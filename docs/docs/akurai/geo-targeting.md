---
title: Geo Targeting
description: Akurai Theme Geo Targeting
weight: 65
extra:
  order: 65
---

# Geo Targeting

Akurai comes with built-in geo targeting, so you can tailor content, listings and messages to visitors based on their country — no separate plugin required.

`💁 since version 4.6.0` Geo Targeting used to be a separate AkuraiGeo add-on plugin. It's now built directly into the theme. If you had the AkuraiGeo plugin active, it's automatically deactivated for you and all your existing Geo settings and content carry over unchanged.

---

## Settings

To adjust Geo Targeting settings visit **Settings → Theme Setup** in your WordPress Dashboard, and scroll to the **Geo Targeting** section.

### Target Countries

Select your target countries in advance, and all your Geo blocks and other geo options will be based on those countries. Use the search box to quickly find a country in the list. Do not select all countries, just the ones for which you have specific offers — a "Default" option in Geo blocks covers visitors from countries not selected here.

### Default Support Messages

Set the default "Country supported" and "Country not supported" texts used by the Review Geo Message block. You can use `%country` and `%review` placeholders, which are replaced with the actual country and review names. Each Review Geo Message block can override these defaults individually.

---

## Using Geo Targeting

Once your target countries are set, you can use them in:

- **Geo blocks** — the Geo Listing, Geo Content and Review Geo Message blocks, documented in [Blocks & Shortcodes](/docs/akurai/blocks-shortcodes#geo-listing-block).
- **Geo Affiliate Links** — a per-country affiliate link field on review pages, documented in [Creating Review Pages](/docs/akurai/creating-review-pages#geo-affiliate-links).

---

## Country Detection

By default, Geo Targeting requires your website traffic to be routed through **Cloudflare**, since it reads the visitor's country from a request header Cloudflare provides.

### Cloudflare Setup

To make sure the necessary information is provided, visit your Cloudflare dashboard, select your website, select **Network** on the left sidebar, scroll down to **IP Geolocation** and toggle it on.

Cloudflare provides a lot of products and solutions to build cloud infrastructure, applications and websites — DNS management, a global CDN, SSL certificates and more. Check out [https://cloudflare.com](https://cloudflare.com) for details.

> Geo Targeting uses the country code of your website's visitor's IP address directly. It doesn't use the IP address itself, doesn't fetch it from anywhere, and therefore can't store it anywhere.

### Custom Detection (Without Cloudflare)

If your website isn't behind Cloudflare, you can provide a custom solution instead. You can either provide a **custom HTTP header** or a completely **custom geo-location detection algorithm**. In both cases the returned value should be an [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) two-letter country code.

#### Custom Header

If your server provides the country code through a differently named HTTP header, use the `akurai_geo_header_name` filter in your [child theme](/docs/akurai/child-theme). For example, if your custom header is called `HTTP-Country-Code`:

```php
<?php

add_filter('akurai_geo_header_name', fn () => 'HTTP-Country-Code');
```

#### Custom Detection Script

If a custom header isn't available and you want to use your own country detection script, use the `akurai_geo_country_code` filter instead:

```php
<?php

add_filter('akurai_geo_country_code', function () {

    // your country code detection script
    // which may not look exactly like this
    $countryCode = (new EyeOfSauron())->getCountryCode();

    // and in the end,
    // you return an ISO 3166-1 alpha-2 two-letter country code
    return $countryCode;
});
```

> In both cases, the returned value must be an `ISO 3166-1 alpha-2` two-letter country code.
