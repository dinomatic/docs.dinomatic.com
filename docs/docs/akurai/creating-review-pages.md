---
title: Creating Review Pages
description: Creating Review Pages with Akurai Theme
weight: 40
extra:
  order: 40
---

# Creating Review Pages

In your WordPress dashboard you will find a new menu item called **Reviews** right below the **Pages** menu link. Click `Add New` to add a new review.

---

## Review Fields

Besides adding your review title and content as usual, you'll find **Review Fields** section below page content. Here you can define properties for each review. The fields are in separate sections and have descriptions to make it easy for you to fill them in. These properties are used all over the website, please make sure to fill them in.

### Main Fields

In this section you'll define the main fields for any review such as:

- Name
- Images/Logos
- Affiliate Link URL
- Review Page Hero Colors

The name, image and affiliate URL are used in all shortcodes, blocks, widgets and review page and hero colors are there to help you customize each review page.

### Bonus Fields

Bonus fields are for defining sportsbook bonuses. You can define an optional **Shortcode Bonus** if you want to display a different or differently formatted bonus in shortcodes.

### Ratings Fields

First you define the main sportsbook rating which is used all over the website n shortcodes, widgets, etc.

The second part for **Ratings** is where you define different ratings to display in review pages **Ratings** block/shortcode.

### Terms Fields

You can define 2 fields for sportsbook terms and conditions, first the longer and 2nd the shorter version. later in blocks/shortcodes you can choose to display one of them.

### Info Fields

Define basic information about the sportsbook and display them in `Info` block (or `[info]` shortcode) in review pages.

### Pros & Cons Fields

Define pros and cons of the sportsbook and display them in `Pros & Cons` block (or `[pros_cons]` shortcode) in review pages.

### Banking Fields

Define deposit and withdrawal methods provided by the sportsbook and display them in `Banking` block (or `[banking]` shortcode) in review pages.

### Offer Fields

Define the main offers of the sportsbook such as sportsbook, casino, poker, etc. and their bonuses and display them in `Offer` block (or `[offer]` shortcode) in review pages.

### Related Reviews

You can choose to display related reviews section at the end of each review page. For that you need to select at least 1 (max 3) other review pages.

### Supported Countries

Define the supported countries of the sportsbook and display them in `Countries` block (or `[countries]` shortcode) in review pages.

### Additional Info

Define some additional info fields here that are used on table/grid filters mostly.

### Linked Bonuses

Enable **Show Linked Bonuses** to display a "Similar Bonuses"-style section of bonus pages on this review page. Manually pin specific bonus pages, or leave the field empty to automatically show up to 6 published [bonus pages](/docs/akurai/bonuses) linked to this review. You can also set a custom section heading, otherwise it defaults to `REVIEW_NAME Bonuses`.

### Geo Affiliate Links

`💁 since version 4.6.0`

In its own tab inside the **Review Fields** box, you can set up country-specific affiliate links which replace your default affiliate link all over the website, when a link for the visitor's country is available. Leave any of them empty to use the default affiliate link instead.

One field is available per target country — configure your target countries first in [Geo Targeting settings](/docs/akurai/geo-targeting#settings).

### Review Snippet

For all your review pages Akurai generates **Review Snippet Structured data** (schema.org) markup. The rating value used is the "Overall Rating" field from [Rating Fields](#ratings-fields) section. It is generated automatically so you don't need to do anything, however you can turn it off if you decide so. You can test your pages [here](https://search.google.com/structured-data/testing-tool).
