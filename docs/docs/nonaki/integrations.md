---
title: Integrations
description: Nonaki API and Third-Party Integrations
weight: 80
extra:
  order: 80
---

# Integrations {#integrations-1}

Nonaki exposes a REST API that allows third-party tools and services to manage your redirects and read your click and impression data. Access is controlled by two separate API keys you manage from the **Integrations** tab in the plugin.

---

## API Keys {#api-keys-2}

Go to **Nonaki Links** → **Integrations** to view and manage your API keys.

For each key:

- **Copy** — copy the key to your clipboard to paste into a third-party service
- **Regenerate** — generate a new key immediately. The old key stops working as soon as you regenerate. Make sure to update any service using the old key.

### Links API Key {#links-api-key-3}

Grants access to the redirects and tags endpoints. Use this to let external tools create, update, or delete your links.

Keep this key private. Anyone who has it can read and modify all your redirects and tags.

### Stats API Key {#stats-api-key-4}

Grants access to the stats endpoints. Use this to let external tools read your click and impression data.

Keep this key private. Anyone who has it can read all your click and impression data.

---

## Authentication {#authentication-5}

All API requests must include the key as a Bearer token in the `Authorization` header:

```
Authorization: Bearer YOUR_API_KEY
```

Requests without a valid key receive a `401 Unauthorized` response.

---

## Links Endpoints {#links-endpoints-6}

All endpoints are under `https://yoursite.com/wp-json/nonaki/v2/` and require the **Links API Key**.

### The redirect object {#the-redirect-object-7}

```json
{
  "id": 42,
  "link_key": "dinomatic",
  "destination_url": "https://dinomatic.com/themes",
  "redirect_type": 301,
  "status": "active",
  "link_status": "ok",
  "click_count": 1024,
  "impression_count": 8820,
  "tags": [{ "id": 3, "name": "Themes", "slug": "themes" }],
  "created_at": "2025-11-04 09:15:00",
  "updated_at": "2026-03-19 14:22:11"
}
```

`redirect_type` is `301`, `302`, or `307`. `status` is `active` or `trashed`. `link_status` is `ok`, `broken`, or `unchecked`.

---

### GET /redirects {#get-redirects-8}

Returns a paginated list of redirects.

**Query parameters:**

| Parameter  | Default  | Description                              |
| ---------- | -------- | ---------------------------------------- |
| `page`     | `1`      | Page number.                             |
| `per_page` | `20`     | Results per page (max `100`).            |
| `search`   | —        | Filter by key or destination URL.        |
| `status`   | `active` | Filter by status: `active` or `trashed`. |
| `tag_id`   | —        | Filter by tag ID.                        |

**Response:**

```json
{
  "data": [{ "id": 42, "link_key": "dinomatic", "...": "..." }],
  "total": 120,
  "pages": 6
}
```

---

### POST /redirects {#post-redirects-9}

Creates a new redirect.

**Body:**

| Field             | Required | Description                                        |
| ----------------- | -------- | -------------------------------------------------- |
| `link_key`        | Yes      | Short key used in the redirect URL (e.g. `promo`). |
| `destination_url` | Yes      | The URL to redirect to.                            |
| `redirect_type`   | Yes      | `301`, `302`, or `307`.                            |
| `tag_ids`         | No       | Array of tag IDs to assign.                        |

Returns the created redirect object with status `201 Created`.

---

### GET /redirects/{id} {#get-redirects-id--10}

Returns a single redirect by ID.

---

### PATCH /redirects/{id} {#patch-redirects-id--11}

Updates a redirect. All fields are optional — only send what you want to change.

**Body:** any combination of `link_key`, `destination_url`, `redirect_type`, `tag_ids`.

Sending `tag_ids` replaces the redirect's tags entirely.

---

### DELETE /redirects/{id} {#delete-redirects-id--12}

Moves the redirect to trash. Returns `204 No Content`. Use `POST /redirects/{id}/restore` to undo.

---

### POST /redirects/{id}/restore {#post-redirects-id-restore-13}

Restores a trashed redirect back to active. Returns the redirect object.

---

### DELETE /redirects/{id}/force-delete {#delete-redirects-id-force-delete-14}

Permanently deletes a redirect. This cannot be undone. Returns `204 No Content`.

---

### POST /redirects/bulk {#post-redirects-bulk-15}

Applies an action to multiple redirects at once.

**Body:**

| Field     | Required                          | Description                                                          |
| --------- | --------------------------------- | -------------------------------------------------------------------- |
| `action`  | Yes                               | One of: `trash`, `restore`, `force-delete`, `tag-add`, `tag-remove`. |
| `ids`     | Yes                               | Array of redirect IDs.                                               |
| `tag_ids` | For `tag-add` / `tag-remove` only | Array of tag IDs to add or remove.                                   |

**Response:**

```json
{ "affected": 5 }
```

---

### GET /tags {#get-tags-16}

Returns all tags.

**Response:**

```json
{
  "data": [{ "id": 3, "name": "Themes", "slug": "themes", "link_count": 12 }]
}
```

---

### POST /tags {#post-tags-17}

Creates a new tag.

**Body:** `name` (required).

Returns the created tag object with status `201 Created`:

```json
{ "data": { "id": 4, "name": "Plugins", "slug": "plugins" } }
```

---

### PATCH /tags/{id} {#patch-tags-id--18}

Updates a tag's name. **Body:** `name` (required). Returns the updated tag object.

---

### DELETE /tags/{id} {#delete-tags-id--19}

Permanently deletes a tag. Returns `204 No Content`.

---

## Stats Endpoints {#stats-endpoints-20}

All endpoints are under `https://yoursite.com/wp-json/nonaki/v2/` and require the **Stats API Key**.

### GET /stats/links {#get-stats-links-21}

Returns a paginated list of all active links.

**Query parameters:** same as `/stats/clicks` (`after_id`, `per_page`).

**Response:**

```json
{
  "data": [
    {
      "id": 12,
      "link_key": "dinomatic",
      "destination_url": "https://dinomatic.com/themes",
      "redirect_type": "301",
      "created_at": "2025-11-04 09:15:00"
    }
  ],
  "meta": {
    "per_page": 100,
    "has_more": false,
    "last_id": 12
  }
}
```

---

### GET /stats/clicks {#get-stats-clicks-22}

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

### GET /stats/impressions {#get-stats-impressions-23}

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

### GET /stats/links/{link_key} {#get-stats-links-link-key--24}

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

## Pagination {#pagination-25}

The links, clicks, and impressions endpoints use cursor-based pagination via `after_id`. To retrieve all records:

1. Make an initial request (no `after_id`)
2. If `meta.has_more` is `true`, make the next request with `after_id` set to `meta.last_id`
3. Repeat until `meta.has_more` is `false`

---

## Efficient Polling with Last-Modified {#efficient-polling-with-last-modified-26}

All endpoints include a `Last-Modified` header in their responses indicating the timestamp of the most recent event in the queried range.

On subsequent polls, send this value back as `If-Modified-Since`:

```
If-Modified-Since: Wed, 19 Mar 2026 14:22:11 GMT
```

If no new events exist, the server returns `304 Not Modified` with an empty body — saving bandwidth and processing time on both ends.
