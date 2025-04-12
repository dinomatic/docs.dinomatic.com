---
title: Custom Geo Location Detection Integration
description: AkuraiGeo - Custom Geo Location Detection Integration
---

# Custom Geo Location Detection Integration

AkuraiGeo by default requires your website traffic to be routed through Cloudflare. This is because it uses information from a request header provided by Cloudflare. However, not all websites are behind Cloudflare today, and for those websites, the plugin enables providing a custom solution.

## Your Options

You can either provide a **custom HTTP header** or a completely **custom geo-location detection algorithm**. Check out below the option that suits you best.

Please note that in both cases the returned value should be a [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) two-letter country code.

### Custom Header

If your server provides an HTTP header named differently, you can instruct Akurai Geo plugin to use that header instead. To do that, simply use the `akurai_geo_header_name` filter in your child theme.

In this case I assume your custom header is called `HTTP-Country-Code`. You should replace it with its actual name.

```php
add_filter('akurai_geo_header_name', fn () => 'HTTP-Country-Code');
```

And that's all you need to do. After you save the file, Akurai Geo plugin will use your custom header to detect visitor's country code.

> Please note that the custom header should provide a `ISO 3166-1 alpha-2` two-letter country code.

### Custom Detection Script

If a custom header is not available to you and you want to use your own country detection script, you can do that as well.
You need to use the `akurai_geo_country_code` filter provided by Akurai Geo plugin. Here's what it may look like:

```php
add_filter('akurai_geo_country_code', function() {

  // your country code detection script
  // which may not look exactly like this
  $countryCode = (new EyeOfSauron())->getCountryCode();

  // and in the end,
  // you return ISO 3166-1 alpha-2 two-letter country code
  return $countryCode;
})
```

> Please note that the custom function should return a `ISO 3166-1 alpha-2` two-letter country code.

---

### Next step

[Plugin Updates](/docs/akurai-geo/plugin-updates/)
