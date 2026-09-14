---
title: How To ...
description: FXT Theme - How to Guide
weight: 200
extra:
  order: 200
---

# How To ...

This guide provides step-by-step instructions for common tasks and customizations in FXT theme.

---

## How to Change the Broker Page Slug

The broker page slug determines the URL structure for your broker pages.

1. Go to **FXT Options** → **Main Options**
2. Find the **[Broker Options](/docs/fxt/theme-options#broker-options)** section
3. Locate the **Broker Page Slug** field
4. Enter your desired slug (e.g., "brokers", "forex-brokers", "trading-brokers")
5. Click **Save**
6. Update your permalinks: **Settings** → **Permalinks** → **Save Changes**

**Important Notes**:

- Use lowercase letters, numbers, and hyphens only
- Avoid spaces and special characters
- The slug will be used in URLs like: `yoursite.com/brokers/broker-name`
- Changing the slug will affect existing broker page URLs

---

## How to Enable/Disable Rich Snippets

Rich snippets provide structured data for search engines to better understand your content.

1. Go to **FXT Options** → **Main Options**
2. Find the **[Broker Options](/docs/fxt/theme-options#broker-options)** section
3. Toggle the **Rich Snippets** option on/off
4. Set the **Rich Snippet Author** if enabled
5. Click **Save**

---

## How to Enable/Disable Author Blocks

Author blocks display author information on your content pages.

1. Go to **FXT Options** → **Main Options**
2. Choose the content type:
   - **Broker Options**: For broker pages
   - **Page Options**: For regular pages
   - **Post Options**: For blog posts
3. Toggle the **Author Block** or **Author Full Block** options
4. Click **Save**

**Block Types**:

- **Author Block**: Basic author information near the page title
- **Author Full Block**: Extended author information with bio and avatar at the end of the page

---

## How to Set a Second Author (Fact-Checker)

Brokers, pages, and posts can each have a second author — useful for crediting a fact-checker or co-reviewer.

1. Edit the broker, page, or post
2. In the right sidebar, find the **Second Author** field and choose a user
3. Update or publish

Once set, the second author's name appears next to the main author with a "Fact-checked by" label. Whether their full profile block also appears at the end of the content is controlled by the **Second Author Block** toggle in **FXT Options** — see [How to Enable/Disable Author Blocks](#how-to-enabledisable-author-blocks) above.

---

## How to Enable/Disable Table of Contents

Table of Contents (TOC) provides navigation for long-form content.

1. Go to **FXT Options** → **Main Options**
2. Choose the content type:
   - **Broker Options**: For broker pages
   - **Page Options**: For regular pages
   - **Post Options**: For blog posts
3. Toggle the **Table of Contents** option
4. Click **Save**

---

## How to Add or Customize Regulations, Countries, Payment Methods, Platforms, and Languages

The dropdown lists used on broker pages — regulations, supported/restricted countries, deposit/withdrawal methods, trading platforms, and supported languages — can be extended or edited using filters. Add the code below to your [child theme's](/docs/fxt/child-theme) `functions.php`.

Each filter receives the current list as an associative array (`value => Label`) and must return an array in the same shape. Values are what gets stored; labels are what's shown in the broker edit screen and on the front end.

**Example — add a custom regulation**:

```php
add_filter('fxt_regulations_list', function ($regulations) {
    $regulations['my_regulator'] = 'My Regulator (Country)';

    return $regulations;
});
```

**Example — rename or remove an existing option** (e.g. shorten a label, or drop a country you'll never use):

```php
add_filter('fxt_countries_list', function ($countries) {
    $countries['us'] = 'USA'; // rename
    unset($countries['ru']); // remove

    return $countries;
});
```

**Available filters**:

| List | Filter |
| --- | --- |
| Regulations | `fxt_regulations_list` |
| Countries (supported/restricted) | `fxt_countries_list` |
| Payment methods (deposit & withdrawal) | `fxt_payment_methods_list` |
| Trading platforms | `fxt_platforms_list` |
| Supported languages | `fxt_languages_list` |

Once added, your changes appear immediately in the corresponding dropdown on the broker edit screen, and on the front end wherever that list is displayed.

---

## Next Step

You've completed the FXT theme documentation! For additional help, refer to the [WordPress Codex](https://codex.wordpress.org/) or contact DinoMatic support.
