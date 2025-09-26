---
title: Creating Review Pages
description: Creating Review Pages with Kemoku Plugin
weight: 40
extra:
  order: 40
---

# Creating Review Pages

In your WordPress dashboard you will find a new menu called **Kemoku Reviews** right below the **Pages** menu link. Click `Add New` to add a new review.

---

## Review Fields

Besides adding your review title and content as usual, you'll find **Review Fields** section below page content. Here you can define properties for each review. The fields are in separate sections and have descriptions to make it easy for you to fill them in. To see what they look like you can check one of the demos available [here](https://demos.dinomatic.com/havana).

![General Review Fields](https://media.dinomatic.com/images/docs/kemoku/kemoku-review-fields.webp)

### General Fields

Define main review information such as the name, logo, affiliate URL, rating. All fields in this section are required.

### Bonus & Terms Fields

Define bonus, bonus code (if any) and terms that can be the full terms and conditions text and/or a URL.

### Payments & Currencies

Define _Payment Methods_ and _Currencies_ for the reviewed item and display them in your content through `Review Payments` and `Currencies` block.
Payment method and currency information is also used for filtering review listings.

### Details

Define some details such as _Services, Sports, Licenses, Features_ for the reviewed item. Services and sports can be displayed using `Review Services` and `Review Sports` blocks. They can be also used in listing filters along with features.

### Hero Section

Define whether the _Hero_ section at the top of the review page is enabled or not.
Hero section settings can be adjusted on [plugin settings page](/docs/kemoku/settings#hero)

### CTA Section

Define whether the _CTA_ section at the bottom of the review page is enabled or not, as well as fill in the CTA details.
CTA section settings can be adjusted on [plugin settings page](/docs/kemoku/settings#cta)

### Pros & Cons

Define _Pros & Cons_ of the reviewed item and display it in your content through `Review Pros & Cons` block.

### Ratings

Define _Ratings_ of the reviewed item and display it in your content through `Review Ratings` block.

### Info

Define _Review Info_ fields for the reviewed item and display it in your content through `Review Info` block.

### Geo Targeting

Here you can define supported or restricted countries for the reviewed item. Fill just one of teh fields, whichever information is available to you. Do NOT fill in both fields, in that case "Restricted Countries" will be used.

You can also define supported US States in this section.

If the operators provide you with different affiliate links for different regions, you can use "Affiliate Links" field to add as many country-specific links as you want. Simply choose a country and add a link.

### Schema.org markup

For all your review pages the plugin generates **Review Snippet Structured Data** (schema.org) markup. The rating value used is the "Rating" field from "Bonus & Rating" section. It is generated automatically so you don't need to do anything. You can test your pages [here](https://search.google.com/structured-data/testing-tool).

By default the review snippet author is set as "Organization" and the name is your website title.

`💁 since version 1.5.2` you can change the author to "Person" and that would be the review page author. You can do that in Kemoku Settings &#8594; [General](/docs/kemoku/settings#general-settings).

### Taxonomies

`💁 since version 1.5` you can assign **Categories** and **Tags** to review pages,
and you can filter reviews on tables and grids by category and tag as well.

### Next Step

[Review Page Blocks](/docs/kemoku/review-page-blocks/)
