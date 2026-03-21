---
title: Integrations
description: Nonaki API and Third-Party Integrations
weight: 80
extra:
  order: 80
---

# Integrations

Nonaki exposes a REST API that allows third-party tools and services to read your click and impression data. Access is controlled by an API key you manage from the **Integrations** tab in the plugin.

---

## API Key

Go to **Nonaki Links** → **Integrations** to view and manage your API key.

- **Copy** — copy the key to your clipboard to paste into a third-party service
- **Regenerate** — generate a new key immediately. The old key stops working as soon as you regenerate. Make sure to update any service using the old key.

Keep your API key private. Anyone who has it can read all your click and impression data.

---

## Authentication

All API requests must include the key as a Bearer token in the `Authorization` header:

```
Authorization: Bearer YOUR_API_KEY
```

Requests without a valid key receive a `401 Unauthorized` response.

---

## Endpoints

All endpoints are under:

```
https://yoursite.com/wp-json/nonaki/v2/
```

---

### GET /stats/clicks

Returns a paginated list of raw click events.

**Query parameters:**

| Parameter  | Default | Max   | Description                                                                |
| ---------- | ------- | ----- | -------------------------------------------------------------------------- |
| `after_id` | `0`     | —     | Return only clicks with an ID greater than this value. Use for pagination. |
| `per_page` | `100`   | `500` | Number of results per page.                                                |

**Response:**

```json
{
  "data": [
    {
      "id": 1042,
      "link_key": "dinomatic",
      "destination_url": "https://dinomatic.com/themes",
      "occurred_at": "2026-03-19 14:22:11",
      "device_type": "desktop",
      "browser": "Chrome",
      "os": "Windows",
      "country_code": "US",
      "referer": "https://yoursite.com/best-gambling-wp-themes/",
      "ip_hash": "a3f1c9...",
      "bot_detected": false,
      "bot_name": null
    }
  ],
  "meta": {
    "per_page": 100,
    "has_more": true,
    "last_id": 1042
  }
}
```

---

### GET /stats/impressions

Returns a paginated list of raw impression events.

**Query parameters:** same as `/stats/clicks`.

**Response:** same structure as clicks, with `page_url` instead of `referer`:

```json
{
  "data": [
    {
      "id": 8801,
      "link_key": "dinomatic",
      "destination_url": "https://dinomatic.com/themes",
      "occurred_at": "2026-03-19 14:20:05",
      "device_type": "mobile",
      "browser": "Safari",
      "os": "iOS",
      "country_code": "GB",
      "page_url": "https://yoursite.com/best-gambling-wp-themes/",
      "ip_hash": "b7e2d1...",
      "bot_detected": false,
      "bot_name": null
    }
  ],
  "meta": {
    "per_page": 100,
    "has_more": false,
    "last_id": 8801
  }
}
```

---

### GET /stats/links/{link_key}

Returns an aggregated summary for a single link.

**URL parameter:** `link_key` — the link's short key (e.g. `dinomatic`).

**Query parameter:** `days` — number of days to include (e.g. `?days=30`). Pass `0` for all time. Defaults to `30`.

**Response:**

```json
{
  "data": {
    "total_clicks": 412,
    "total_impressions": 3840,
    "clicks_by_day": { "2026-03-18": 24, "2026-03-19": 31 },
    "by_device": { "desktop": 280, "mobile": 120, "tablet": 12 },
    "by_country": { "US": 180, "GB": 74, "CA": 60 },
    "by_browser": { "Chrome": 210, "Safari": 98 },
    "top_referrers": { "yoursite.com/best-gambling-wp-themes/": 140 }
  }
}
```

---

## Pagination

The clicks and impressions endpoints use cursor-based pagination via `after_id`. To retrieve all events:

1. Make an initial request (no `after_id`)
2. If `meta.has_more` is `true`, make the next request with `after_id` set to `meta.last_id`
3. Repeat until `meta.has_more` is `false`

---

## Efficient Polling with Last-Modified

All three endpoints include a `Last-Modified` header in their responses indicating the timestamp of the most recent event in the queried range.

On subsequent polls, send this value back as `If-Modified-Since`:

```
If-Modified-Since: Wed, 19 Mar 2026 14:22:11 GMT
```

If no new events exist, the server returns `304 Not Modified` with an empty body — saving bandwidth and processing time on both ends.

---

### Next step

[Privacy & GDPR](/docs/nonaki/privacy/)
