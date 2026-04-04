---
title: Link Checker
description: Automatic Broken Link Detection in Nonaki
weight: 50
extra:
  order: 50
---

# Link Checker

Nonaki automatically checks whether your redirect destinations are still reachable and flags any that return an error or are unreachable.

---

## How It Works

Once a day, Nonaki sends a HEAD request to each active redirect destination and records the HTTP response code. Links that return a `4xx` or `5xx` response, or that time out, are marked as broken.

Checks run in the background via WordPress cron and process links in small batches to avoid timeouts on sites with a large number of links.

---

## Broken Link Badge

When a link's destination is unreachable, a `broken` badge appears on its row in the Links view. The badge is removed automatically the next time the checker runs and the link responds successfully.

---

## Email Digest

Nonaki sends an email notification when links become broken — meaning only links that were working on the previous check and are now failing. Links that were already flagged as broken are not included again.

The email goes to the WordPress admin email address and lists each newly broken link with its destination URL and the HTTP response code received.

---

## On-Demand Check

You can run a link check at any time without waiting for the daily cron. Go to **Links** and click `Check Links` button on the top toolbar. Results are shown inline — and each broken link displays a "broken" red badge.
