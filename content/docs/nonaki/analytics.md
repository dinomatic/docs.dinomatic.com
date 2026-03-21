---
title: Analytics
description: Click and Impression Tracking in Nonaki
weight: 30
extra:
  order: 30
---

# Analytics

Nonaki tracks both clicks (when a visitor follows a redirect) and impressions (when a page containing your link is viewed). Open any link's analytics from the **Links** view to see its performance.

---

## Clicks

A click is recorded every time a visitor follows one of your redirect links. Nonaki captures:

- Date and time
- Device type, browser, and operating system
- Country (from CDN headers if available, otherwise from [GeoIP](/docs/nonaki/geoip/) if configured)
- Referrer URL
- Whether the visitor was identified as a bot

Clicks are processed asynchronously — recorded to a queue first, then enriched and moved to the analytics tables by a background job that runs every 5 minutes. This helps keep the redirects fast while being able to track click activities.

---

## Impressions

An impression is recorded when a page on your site that contains one of your links is loaded. The tracking is handled by a lightweight beacon that fires in the background and does not affect page load time.

Impressions capture:

- Date and time
- Device type, browser, and operating system
- Country (from CDN headers if available, otherwise from [GeoIP](/docs/nonaki/geoip/) if configured)
- The page URL where the link appeared

To avoid inflating counts, a maximum of one impression per visitor per link per page is recorded within any 60-second window.

---

## Bot Detection

Both clicks and impressions are checked for bot traffic. Nonaki uses device/user-agent analysis combined with a list of known datacenter and ASN IP ranges. Bot events are stored but excluded from the default analytics view so your numbers reflect real visitors.

---

## Analytics View

Click the chart icon on any link row to open its analytics. The view includes:

### Chart

A dual-axis chart showing daily clicks and impressions over the selected time range. Bots are excluded by default.

### Stat Cards

Four summary cards at a glance:

- **Total Clicks**
- **Total Impressions**
- **CTR** — click-through rate (clicks ÷ impressions)
- **Avg Clicks / Day**

### Breakdowns

Detailed tables showing the distribution of traffic by:

- **Device** — Desktop, Mobile, Tablet
- **Browser** — Chrome, Firefox, Safari, etc.
- **Operating System** - MacOS, Linux, Windows, iOS, Android, etc.
- **Country** — requires GeoIP to be configured
- **Referrer** — top referring domains
- **Top Pages** — pages on your site where the link appeared (impressions only)

### Time Range

Use the selector in the top-right to change the time window: `7 days`, `30 days`, `90 days`, `1 year`, or `All time`.

---

### Next step

[GeoIP](/docs/nonaki/geoip/)
