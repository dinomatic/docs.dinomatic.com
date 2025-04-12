---
title: Creating Review Pages
description: Creating Review Pages with Kemoku Plugin
---

# Creating Review Pages

In your WordPress dashboard you will find a new menu called **Kemoku Reviews** right below the **Pages** menu link. Click `Add New` to add a new review.

---

## Review Fields

Besides adding your review title and content as usual, you'll find **Review Fields** section below page content. Here you can define properties for each review. The fields are in separate sections and have descriptions to make it easy for you to fill them in. To see what they look like you can check one of the demos available [here](https://demos.dinomatic.com/havana).

### General Fields

Define main review information such as the name, logo, affiliate URL, rating.

![General Review Fields](https://media.dinomatic.com/images/docs/kemoku/kemoku-review-general.jpg)

### Bonus & Terms Fields

Define bonus, bonus code (if any) and terms.

![Review Fields Bonus](https://media.dinomatic.com/images/docs/kemoku/kemoku-review-bonus.jpg)

### Payment Methods & Currencies

Define _Payment Methods_ and _Currencies_ for the reviewed item and display them in your content through `Review Payments` and `Currencies` block.
Payment method and currency information is also used for filtering review listings.

![Review Fields Payments](https://media.dinomatic.com/images/docs/kemoku/kemoku-review-payments.jpg)

### Details

Define some details such as _Countries, US States, Services, Licenses, Features_ for the reviewed item and display them in your content through `Review Countries`, `Review US States`, `Review Services` blocks.

![Review Fields Payments](https://media.dinomatic.com/images/docs/kemoku/kemoku-review-details.jpg)

### Hero Section

Define whether the _Hero_ section at the top of the review page is enabled or not.
Hero section settings can be adjusted on [plugin settings page](/docs/kemoku/settings#hero)

![Review Fields Hero](https://media.dinomatic.com/images/docs/kemoku/kemoku-review-hero.jpg)

### CTA Section

Define whether the _CTA_ section at the bottom of the review page is enabled or not, as well as fill in the CTA details.
CTA section settings can be adjusted on [plugin settings page](/docs/kemoku/settings#cta)

![Review Fields CTA](https://media.dinomatic.com/images/docs/kemoku/kemoku-review-cta.jpg)

### Pros & Cons

Define _Pros & Cons_ of the reviewed item and display it in your content through `Review Pros & Cons` block.

![Review Fields Pros Cons](https://media.dinomatic.com/images/docs/kemoku/kemoku-review-pros-cons.jpg)

### Ratings

Define _Ratings_ of the reviewed item and display it in your content through `Review Ratings` block.

![Review Fields Ratings](https://media.dinomatic.com/images/docs/kemoku/kemoku-review-ratings.jpg)

### Info

Define _Review Info_ for the reviewed item and display it in your content through `Review Info` block.

![Review Fields Info](https://media.dinomatic.com/images/docs/kemoku/kemoku-review-info.jpg)

### Schema.org markup

For all your review pages the plugin generates **Review Snippet Structured Data** (schema.org) markup. The rating value used is the "Rating" field from "Bonus & Rating" section. It is generated automatically so you don't need to do anything. You can test your pages [here](https://search.google.com/structured-data/testing-tool).

By default the review snippet author is set as "Organization" and the name is your website title.

`💁 since version 1.5.2` you can change the author to "Person" and that would be the review page author. You can do that in Kemoku Settings &#8594; [General](/docs/kemoku/settings#general-settings).

### Taxonomies

`💁 since version 1.5` you can assign **Categories** and **Tags** to review pages,
and you can filter reviews on tables and grids by category and tag as well.

### Next Step

[Review Page Blocks](/docs/kemoku/review-page-blocks/)
