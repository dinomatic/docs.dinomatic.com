---
title: Settings
description: Nonaki Plugin Settings
weight: 70
extra:
  order: 70
---

# Settings

All plugin settings are in **Nonaki** → **Settings** in your WordPress dashboard.

---

## Redirect Slug

The redirect slug is the base path for all your links. The default is `links`, producing URLs like `yoursite.com/links/your-key`.

You can change it to anything you like — `go`, `visit`, `out`, or something custom. After saving, all existing redirects automatically use the new slug.

If you have set the slug via a code filter (`nonaki_slug`), the field will be locked and a notice will indicate that it is managed by code.

---

## GeoIP

Configure visitor country detection using the MaxMind GeoLite2 database.

- **MaxMind License Key** — paste your key here and click `Save & Update` to download the database files immediately. The field is write-only; for security the key is not displayed after saving.
- **Auto-update databases weekly** — enable to keep the GeoLite2 database current via a weekly background update.
- **Database status** — shows whether the `GeoLite2-City` and `GeoLite2-ASN` files are present and the date they were last updated.

See [GeoIP](/docs/nonaki/geoip/) for full setup instructions.

---

## Import / Export

Upload a CSV or JSON file to import links in bulk, or download all your links for backup or migration. See [Import & Export](/docs/nonaki/import-export/) for file format details and a downloadable template.

---

## Clear Analytics Data

The `Clear All Analytics` button permanently deletes all recorded clicks and impressions. Use this to start fresh or to fulfill a GDPR erasure request. This action cannot be undone.

---

### Next step

[Integrations](/docs/nonaki/integrations/)
