---
title: Privacy & GDPR
description: Data Collection and Privacy in Nonaki
weight: 90
extra:
  order: 90
---

# Privacy & GDPR

This page describes what data Nonaki collects, how long it is kept, and what tools are available to manage it.

---

## What Data Is Collected

### Clicks

When a visitor follows one of your redirect links, Nonaki records:

- Timestamp
- Device type, browser, and operating system (derived from User-Agent)
- Country (from CDN headers if available, otherwise from GeoIP if configured)
- Referrer URL
- A hashed version of the visitor's IP address (see below)
- Whether the visitor was identified as a bot

### Impressions

When a page on your site containing a Nonaki link is viewed, Nonaki records:

- Timestamp
- Device type, browser, and operating system
- Country (from CDN headers if available, otherwise from GeoIP if configured)
- The URL of the page where the link appeared
- A hashed version of the visitor's IP address

---

## IP Address Handling

Raw IP addresses are stored temporarily in an internal processing queue and are deleted within approximately 5 minutes after the background processor runs.

For long-term storage, the IP address is converted to a one-way hash (SHA-256 with a site-specific salt). This hash cannot be reversed back to the original IP address. It is used only to deduplicate impressions within short time windows — it cannot be used to identify a visitor.

---

## What Is Not Stored

- Full IP addresses in analytics (only hashed)
- Cookies or browser fingerprints

---

## Your Responsibilities as a Site Owner

All data described on this page is collected by you, on your website, from your visitors. DinoMatic does not receive, access, or store any of it — the plugin runs entirely within your WordPress installation.

As the site owner, you are the data controller under GDPR and similar regulations. You should:

- Disclose analytics tracking in your privacy policy
- Ensure your use of visitor data complies with the laws applicable to your site and audience

---

## Clearing Analytics Data

The `Clear All Analytics` button in **Settings** permanently deletes all recorded clicks, impressions, and queue entries. This can be used to respond to a GDPR erasure request or to start fresh.

Individual link analytics are also deleted when a link is permanently force-deleted from the Trash.

---

### Next step

[Plugin Updates](/docs/nonaki/plugin-updates/)
