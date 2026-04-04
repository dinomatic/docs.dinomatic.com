---
title: Import & Export
description: Importing and Exporting Links in Nonaki
weight: 60
extra:
  order: 60
---

# Import & Export

Nonaki supports importing and exporting your links in CSV and JSON formats, making it easy to migrate links, create backups, or manage large sets of links outside WordPress.

---

## Exporting Links

Go to **Settings** → **Import / Export** and click `Export CSV` or `Export JSON` to download all your active links, including their tags.

---

## Importing Links

To import links, prepare a file in the correct format (see below) and upload it using the import form in **Settings** → **Import / Export**.

**Import behaviour:**

- Links with a key that already exists in Nonaki are skipped — existing links are never overwritten
- Each row is validated individually; invalid rows are skipped
- Tags are created automatically if they do not already exist

After the import completes, a summary shows how many links were imported and how many were skipped.

### Downloading a Template

Click `template.json` or `template.csv` to get an example JSON/CSV file with the correct format/column headers ready to fill in.

---

## CSV Format

| Column          | Required | Description                                              |
| --------------- | -------- | -------------------------------------------------------- |
| link_key        | Yes      | The short key used in the redirect URL                   |
| destination_url | Yes      | The full destination URL                                 |
| redirect_type   | No       | `301`, `302`, or `307` (defaults to `302`)               |
| tags            | No       | One or more tag names separated by pipe character - "\|" |

**Example:**

```csv
link_key,destination_url,redirect_type,tags
dinomatic,https://dinomatic.com/affiliate-program,301,wordpress|web-development
tablrr,https://tablrr.app/the-tablrr-way,302,listings
```

---

## JSON Format

JSON export produces an array of link objects. The same fields apply.

**Example:**

```json
[
  {
    "link_key": "dinomatic",
    "destination_url": "https://dinomatic.com/affiliate-program",
    "redirect_type": 301,
    "tags": ["wordpress", "web-development"]
  },
  {
    "link_key": "tablrr",
    "destination_url": "https://tablrr.app/the-tablrr-way",
    "redirect_type": 302,
    "tags": ["listings"]
  }
]
```
