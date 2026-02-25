---
title: Blocks & Shortcodes
description: Akurai Theme - Blocks & Shortcodes
weight: 80
extra:
  order: 80
---

# Akurai Theme Blocks &amp; Shortcodes

There are multiple blocks and shortcodes available for you to present your website information. It is recommended to use native blocks instead of shortcodes, however if for some reason you're still using a version of WordPress lower than 5.0, you can use shortcodes as well.

---

## Using Blocks and Shortcodes

Here are the blocks available in Akurai theme:

1. Reviews Table
2. Reviews Table Extended
3. Reviews Table Flex
4. Reviews Grid
5. Reviews List
6. Review Offer (Featured Review)
7. Review Finder
8. Comparison Table
9. Recent Posts
10. Links Group
11. FAQ
12. Lazy Image

### Reviews Table Block

![akurai-blocks-table](https://media.dinomatic.com/images/akurai/blocks/akurai-block--reviews-table.jpg)

To add a new table simply click on the **+** (Add block) sign and select **Reviews Table** in **Akurai Blocks** section.

In the content editor a new table edit section will appear. There are 2 options to add reviews to the table:

1. Manual selection where you select all the reviews from a dropdown list.
2. Filtering by taxonomy where you choose a category and/or tag(s) and reviews display automatically (`💁 since version 2.4.0`). For example, you can select a review category and all reviews in that category will be displayed. You can also set a limit, for example, display just 8 reviews in "Sports" category.

Below reviews select how to display the **terms and conditions**.

`💁 since version 2.3.0` You can add **filters** to tables, learn how to modify filters [here](/docs/akurai/how-to#how-to-modify-reviews-filters).

`💁 since version 3.0.0` You can enable **lazy loading** for logo images on tables.

`💁 since version 3.1.5` You can add **load more button** on tables.

### Reviews Table Shortcode

```html
[table source="manual" reviews="comma separated list of review page ids" terms="none|short|long|ajax|ajax-hover"
filters="true" lazy_logo="true" load_more_enabled="true" count_initial="3" count_click="3"]
```

```html
[table source="tax" cat="ID" tag="ID" ppp="-1" terms="none|short|long|ajax|ajax-hover" filters="true" lazy_logo="true"
load_more_enabled="true" count_initial="3" count_click="3"]
```

### Extended Table Block

![akurai-blocks-table-extended](https://media.dinomatic.com/images/akurai/blocks/akurai-block--extended-table.jpg)

To add a new extended table simply click on the **+** (Add block) sign and select **Extended Reviews Table** in **Akurai Blocks** section.

In the content editor a new table edit section will appear. There are 2 options to add reviews to the grid, manually or automatic, it's the same as for [general tables](#reviews-table-block).

Below reviews select how to display the **terms and conditions**.

`💁 since version 2.3.0` You can add **filters** to tables, learn how to modify filters [here](/docs/akurai/how-to#how-to-modify-reviews-filters).

`💁 since version 3.0.0` You can enable **lazy loading** for logo images on tables.

`💁 since version 3.1.5` You can add **load more button** on tables.

### Extended Table Shortcode

```html
[table_extended source="manual" reviews="comma separated list of review page ids"
terms="none|short|long|ajax|ajax-hover" filters="true" lazy_logo="true" load_more_enabled="true" count_initial="3"
count_click="3"]
```

```html
[table_extended source="tax" cat="ID" tag="ID" ppp="-1" terms="none|short|long|ajax|ajax-hover" filters="true"
lazy_logo="true" load_more_enabled="true" count_initial="3" count_click="3"]
```

### Flex Table Block

`💁 since version 3.0.0`

![akurai-blocks-table-flex](https://media.dinomatic.com/images/akurai/blocks/akurai-block--flex-table.jpg)

To add a new flex table simply click on the **+** (Add block) sign and select **Flex Reviews Table** in **Akurai Blocks** section.

In the content editor a new table edit section will appear. There are 2 options to add reviews to the grid, manually or automatic, it's the same as for [general tables](#reviews-table-block).

Below reviews select how to display the **terms and conditions**, add **filters** to tables, learn how to modify filters [here](/docs/akurai/how-to#how-to-modify-reviews-filters). You can also enable **lazy loading** for logo images on tables.

`💁 since version 3.1.5` You can add **load more button** on tables.

### Flex Table Shortcode

```html
[table_flex source="manual" reviews="comma separated list of review page ids" terms="none|short|long|ajax|ajax-hover"
filters="true" lazy_logo="true" load_more_enabled="true" count_initial="3" count_click="3"]
```

```html
[table_flex source="tax" cat="ID" tag="ID" ppp="-1" terms="none|short|long|ajax|ajax-hover" filters="true"
lazy_logo="true" load_more_enabled="true" count_initial="3" count_click="3"]
```

### Reviews Grid Block

![akurai-blocks-grid](https://media.dinomatic.com/images/akurai/blocks/akurai-block--reviews-grid.jpg)

To add a new grid simply click on the **+** (Add block) sign and select **Reviews Grid** in **Akurai Blocks** section.

In the content editor a new grid edit section will appear. There are 2 options to add reviews to the grid, manually or automatic, it's the same as for [tables].(#reviews-table-block)

Below reviews select how to display the **terms and conditions**.

`💁 since version 2.3.0` You can add **filters** to grids, learn how to modify filters [here](/docs/akurai/how-to#how-to-modify-reviews-filters).

`💁 since version 3.0.0` You can enable **lazy loading** for logo images on grids.

`💁 since version 3.1.5` You can add **load more button** on tables.

### Reviews Grid Shortcode

```html
[grid source="manual" reviews="comma separated list of review page ids" terms="none|short|long|ajax|ajax-hover"
filters="true" lazy_logo="true" load_more_enabled="true" count_initial="3" count_click="3"]
```

```html
[grid source="tax" cat="ID" tag="ID" ppp="-1" terms="none|short|long|ajax|ajax-hover" filters="true" lazy_logo="true"
load_more_enabled="true" count_initial="3" count_click="3"]
```

### Reviews List Block

![akurai-blocks-list](https://media.dinomatic.com/images/akurai/blocks/akurai-block--reviews-list.jpg)

To add a new list simply click on the **+** (Add block) sign and select **Reviews List** in **Akurai Blocks** section.

In the content editor a new list edit section will appear. Click **Add Review** to add the 4 reviews.

### Reviews List Shortcode

```html
[list reviews="comma separated list of review page ids" terms="none|ajax-hover"]
```

### Review Offer Block

![akurai-blocks-offer](https://media.dinomatic.com/images/akurai/blocks/akurai-block--review-offer.jpg)

To add a new offer simply click on the **+** (Add block) sign and select **Review Offer** in **Akurai Blocks** section.

In the content editor a new offer edit section will appear. Select a review and fill in the fields.

### Review Offer Shortcode

```html
[review_block review="review page id" terms="none|short|long" heading="..." subheading="..." button_url="..."
button_text="..."] ... content here ... [/review_block]
```

### Review Finder Block

`💁 since version 3.0.0`

![akurai-blocks-review-finder](https://media.dinomatic.com/images/akurai/blocks/akurai-block--review-finder.jpg)

To add a new review finder simply click on the **+** (Add block) sign and select **Review Finder** in **Akurai Blocks** section.

In the content editor a new review finder edit section will appear. You can leave the default values or adjust the strings used on the block front-end.

### Review Finder Shortcode

```html
[review_finder]
```

You can use the default shortcode as above, or set your own options:

```html
[review_finder heading="..." placeholder="..." aff_link_text="..." review_link_text="..." bonus_code_label="..."
not_found_label="..."]
```

### Comparison Table Block

`💁 since version 4.4.0`

![akurai-blocks-comparison-table](https://media.dinomatic.com/images/akurai/blocks/akurai-block--comparison-table.jpg)

To add a new comparison table simply click on the **+** (Add block) sign and select **Comparison Table** in **Akurai Blocks** section.

In the content editor a new comparison table edit section will appear. Add 2 or 3 reviews to compare side-by-side. For each comparison row, select the field type and optionally provide a custom label to override the default.

Available row types: Rating, Welcome Bonus, Min Deposit, Max Deposit, Established, License, Payment Methods, Features, Sportsbook, Casino, Live Casino, Poker, Bingo, Lottery.

Below reviews you can configure additional display options: how to display **terms and conditions**, whether to show the **visit button** and **review link**, **content alignment** (centered or left), and whether to apply each review's **brand colors** to the header row.

### Comparison Table Shortcode

```html
[comparison_table reviews="comma separated list of review page ids" rows="rating,bonus,min_deposit"
terms="none|short|long|ajax|ajax-hover" centered="true" use_review_colors="false" show_visit="true" show_review="true"]
```

### Recent Posts Block

![akurai-blocks-posts](https://media.dinomatic.com/images/akurai/blocks/akurai-block--recent-posts.jpg)

To add a new posts block simply click on the **+** (Add block) sign and select **Recent Posts** in **Akurai Blocks** section.

In the content editor a new recent posts edit section will appear. Select the number of posts to display and the post excerpt length. Or you can leave them blank for default values: 6 posts and 40 words.

You can also select a category to filter the posts or leave it blank to display posts from all categories.

`💁 since version 2.0` You can also choose a block style - default or no excerpt.

### Recent Posts Shortcode

```html
[posts count="6" words="40"] [posts count="6" words="40" cat_id="1"] 💁 since version 2.0 [posts count="3"
style="no_excerpt"]
```

### Links Group Block

`💁 since version 2.0.1`

![akurai-blocks-links-group](https://media.dinomatic.com/images/akurai/blocks/akurai-block--links-group.jpg)

To add a new links group simply click on the **+** (Add block) sign and select **Links Group** in **Akurai Blocks** section.

Select the links that can be posts, pages or reviews. If you want you can overwrite the titles and featured images.
At the bottom, adjust the column count (2, 3, 4), whether the blog is contained in a section or not, rounded or straight image borders to fit with your website styles and finally you can disable the captions/titles.

You can use this for posts, pages, reviews or as a mix of all, as you find it useful.

On the right-side panel you can click on "Switch to Preview" to preview the slider block in your editor.

### FAQs Block

![akurai-blocks-faqs](https://media.dinomatic.com/images/akurai/blocks/akurai-block--faq.jpg)

To add a new FAQs block simply click on the **+** (Add block) sign and select **FAQs** in **Akurai Blocks** section.

In the content editor a new FAQs edit section will appear. For each one add the question and the answer and clack `Add New` to add a new FAQ item.

`💁 since version 2.0` By default schema.org markup for FAQ rich snippets will be included in all your FAQ blocks, however you can disable them if you need to.

> Note that you can include only one markup on a page. If you have multiple FAQ blocks on a single, please enable this for one of them only.

### Lazy Image Block

`💁 since version 2.0`

To add a new lazy image simply click on the **+** (Add block) sign and select **Lazy Image** in **Akurai Blocks** section.

Select or upload an image, set the alt text and you're ready.
You can specify any CSS class names you want to add to the `img` tag
Also select the shape of the image, whether it's wide, tall or square. This helps reserve space similar to the image and not cause document "rearrangement".

---

### Next Step

[Widget Areas](/docs/akurai/widget-areas/)
