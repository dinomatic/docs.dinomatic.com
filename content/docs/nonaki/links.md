---
title: Managing Links
description: Creating and Managing Redirect Links in Nonaki
weight: 20
extra:
  order: 20
---

# Managing Links

Nonaki turns long or ugly URLs into clean redirect links on your own domain. All links are managed from the **Nonaki Links** section in your WordPress dashboard.

---

## Redirect Slug

The redirect slug is the base path that appears in all your links. The default is `links`, producing URLs like `yoursite.com/links/your-key`. You can change it in [**Settings**](/docs/nonaki/settings) at any time.

---

## Creating a Link

Click `Add New` to open the create form. You need two things:

- **Link Key** — the short identifier that appears in the URL (e.g. `dinomatic`). Letters, numbers, hyphens, and underscores are allowed.
- **Destination URL** — the full URL visitors are sent to.

You can also set the **Redirect Type**:

- `301` — Moved Permanently (default; best for SEO and affiliate links)
- `302` — Found (temporary redirect)
- `307` — Temporary Redirect (preserves the HTTP method)

Once saved, the full redirect URL is shown in the links list and can be copied with one click.

---

## Managing Links

All links are listed in the **Links** view with the following options:

- **Search** — filter by link key or destination URL
- **Tag filter** — show only links with a specific tag
- **Edit** — update the destination URL, link key, or redirect type
- **Copy** — copy the full redirect URL to the clipboard
- **Trash** — move the link to trash (stops the redirect immediately)

### Broken Link Badge

If the link checker detects that a destination URL is unreachable, the link row displays a `broken` badge. See [Link Checker](/docs/nonaki/link-checker/) for details.

---

## Tags

Tags help you organize links into groups. You can create and manage tags from the **Tags** section, then assign one or more tags to any link.

The links list can be filtered by tag to quickly find a subset of your links.

---

## Trash

Trashed links no longer redirect visitors but are kept in the database. Visit the **Trash** tab to:

- **Restore** — return a link to active status
- **Force Delete** — permanently remove the link and all associated analytics data

---

## Bulk Actions

Select multiple links using the checkboxes to apply bulk actions:

- **Trash selected**
- **Restore selected** (Trash view)
- **Permanently delete selected** (Trash view)

---

### Next step

[Analytics](/docs/nonaki/analytics/)
