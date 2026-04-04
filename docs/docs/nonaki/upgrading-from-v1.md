---
title: Upgrading from v1
description: How to upgrade Nonaki from v1 to v2
weight: 15
extra:
  order: 15
---

# Upgrading from v1 to v2

v2 is a full rewrite with a new interface and expanded analytics. The upgrade takes about a minute.

---

## What's preserved

- All your links (keys and destinations)
- The redirect slug

---

## Upgrade steps

1. Download the v2 plugin zip from your [DinoMatic account](https://dinomatic.com/account)
2. Go to **WordPress dashboard → Plugins → Add New → Upload Plugin**
3. Upload the zip and click **Install Now**, then **Replace current with uploaded**
4. Back to **plugins page**
5. **Deactivate** the plugin, then **Activate** it again

The deactivate/activate step is required — it triggers the database migration that creates the new analytics tables.

---

## "You are not allowed to access this page"

If you click on "Nonaki Links" link on teh sidebar and see this error after uploading but before reactivating, don't panic — the admin page URL changed in v2. Deactivate and reactivate the plugin and the error will go away.

---

## After upgrading

Navigate to **Nonaki** in the sidebar. Your links will be there. The analytics section will be empty until your links start receiving traffic.
