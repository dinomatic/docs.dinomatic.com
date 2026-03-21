---
title: GeoIP
description: Visitor Country Detection with GeoIP in Nonaki
weight: 40
extra:
  order: 40
---

# GeoIP

Nonaki can detect the country of your visitors using IP geolocation. When enabled, country data appears in click and impression analytics breakdowns.

GeoIP is optional. All other features work without it.

Nonaki uses 2 ways to detect teh visitor's country: CDN headers or MaxMind GeoLite2.

---

## CDN and Proxy Support

If your site is behind Cloudflare or a similar CDN, Nonaki will attempt to read the country from CDN-provided headers (such as `CF-IPCountry`) before falling back to local GeoIP lookup. This means country detection can work even if you are not using the MaxMind database.

---

## MaxMind GeoLite2

Nonaki uses the free **MaxMind GeoLite2** database for geolocation. You need a free MaxMind account to download it.

### 1. Create a MaxMind Account

Sign up for a free account at [maxmind.com/en/geolite2/signup](https://www.maxmind.com/en/geolite2/signup). No payment is required for GeoLite2.

### 2. Generate a License Key

After logging in, go to **Account** → **Manage License Keys** and generate a new key.

### 3. Add the Key in Nonaki

Go to **Nonaki Links** → **Settings** → **GeoIP** section. Paste your license key and click `Save & Update`.

Nonaki will download the GeoLite2 database files immediately. You should see the database status update to show both `GeoLite2-City` and `GeoLite2-ASN` as present.

---

## Auto-Update

MaxMind updates the GeoLite2 databases regularly. Enable **Auto-update databases weekly** in the GeoIP settings to keep your data current automatically. When enabled, Nonaki checks for updates once a week via a background cron job.

You can also trigger an update manually at any time by saving the GeoIP settings.

---

## Privacy

IP addresses are used only to determine the visitor's country and are not stored in their original form in analytics. See [Privacy & GDPR](/docs/nonaki/privacy/) for details.

---

### Next step

[Link Checker](/docs/nonaki/link-checker/)
