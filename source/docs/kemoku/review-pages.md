---
title: Creating Review Pages
description: Creating Review Pages with Kemoku Plugin
extends: _layouts.documentation
section: content
---

# Creating Review Pages

In your WordPress dashboard you will find a new menu called **Kemoku Reviews** right below the **Pages** menu link. Click `Add New` to add a new review.

---

## Review Fields

Besides adding your review title and content as usual, you'll find **Review Fields** section below page content. Here you can define properties for each review. The fields are in separate sections and have descriptions to make it easy for you to fill them in. To see what they look like you can check one of the demos available [here](https://dinomatic.com/demos/kemoku).

### General Fields

Define main review information such as the name, logo, affiliate URL, terms and conditions.

![General Review Fields](/assets/images/kemoku/kemoku-review-general.png)

### Bonus & Rating Fields

Define bonus, bonus code (if any) and the overall rating.

![Review Fields Bonus](/assets/images/kemoku/kemoku-review-bonus.png)

### Payment Methods

Define **Payment Methods** for the reviewed item and display it in your content through **Review Payments** block and shortcode.

![Review Fields Payments](/assets/images/kemoku/kemoku-review-payments.png)

### Details

Define some details such as **Countries, Services, Licenses** for the reviewed item and display it in your content through **Review Countries**, **Review Services** block and shortcode.

![Review Fields Payments](/assets/images/kemoku/kemoku-review-details.png)

### Hero Section

Define whether the **Hero** section at the top of the review page is enabled or not.

![Review Fields Hero](/assets/images/kemoku/kemoku-review-hero.png)

### CTA Section

Define whether the **CTA** section at the bottom of the review page is enabled or not, as well as fill in the CTA details.

![Review Fields CTA](/assets/images/kemoku/kemoku-review-cta.png)

### Pros & Cons

Define **Pros & Cons** of the reviewed item and display it in your content through **Review Pros & Cons** block and shortcode.

![Review Fields Pros Cons](/assets/images/kemoku/kemoku-review-pros-cons.png)

### Ratings

Define **Ratings** of the reviewed item and display it in your content through **Review Ratings** block and shortcode.

![Review Fields Ratings](/assets/images/kemoku/kemoku-review-ratings.png)

### Info

Define **Review Info** for the reviewed item and display it in your content through **Review Info** block and shortcode.

![Review Fields Info](/assets/images/kemoku/kemoku-review-info.png)

### Schema.org markup

For all your review pages the plugin generates **Review Snippet Structured Data** (schema.org) markup. The rating value used is the "Rating" field from "Bonus & Rating" section. It is generated automatically so you don't need to do anything. You can test your pages [here](https://search.google.com/structured-data/testing-tool).

By default the review snippet author is set as "Organization" and the name is your website title.

`💁 since version 1.5.2` you can change the author to "Person" and that would be the review page author. You can do that in Kemoku Settings &#8594; [General](/docs/kemoku/settings#general-settings).

### Taxonomies

`💁 since version 1.5`  you can assign **Categories** and **Tags** to review pages,
and you can filter reviews on tables and grids by category and tag as well.

### Next Step

[Plugin Blocks](/docs/kemoku/blocks/)
