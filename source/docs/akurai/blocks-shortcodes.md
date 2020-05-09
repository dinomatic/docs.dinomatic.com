---
title: Blocks & Shortcodes
description: Akurai Theme - Blocks & Shortcodes
extends: _layouts.documentation
section: content
---

# Akurai Theme Blocks &amp; Shortcodes

There are multiple blocks and shortcodes available for you to present your website information. It is recommended to use native blocks instead of shortcodes, however if for some reason you’re still using a version of WordPress lower than 5.0, you can use shortcodes as well.

---

## Using Blocks and Shortcodes

Here are the blocks available in Akurai theme:

- Reviews Table
- Reviews Grid
- Reviews List
- Review Offer
- Recent Posts
- FAQs
- Slider

### Reviews Table Block

![akurai-blocks-table](/assets/images/akurai/akurai-blocks-table.png)

To add a new table simply click on the **+** (Add block) sign and select **Reviews Table** in **Akurai Blocks** section.

In the content editor a new table edit section will appear. Click **Add Review** to add as many reviews as you want and at the bottom select how to display the terms and conditions.

![akurai-blocks-editor-table](/assets/images/akurai/akurai-blocks-editor-table.png)

At the right side panel you can click on **Switch to Preview** to preview the table in your editor.

> Note that the preview may differ a little from the actual table as some WordPress and other plugin styles may be affecting it.

### Reviews Table Shortcode

```html
[table reviews="comma separated list of review page ids" terms="none|short|long|ajax|ajax-hover"]
```

### Extended Table Block

![akurai-blocks-table-extended](/assets/images/akurai/akurai-blocks-table-extended.png)

To add a new table simply click on the **+** (Add block) sign and select **Reviews Table** in **Akurai Blocks** section.

In the content editor a new table edit section will appear. Click **Add Review** to add as many reviews as you want and at the bottom select how to display the terms and conditions.

![akurai-blocks-editor-table-extended](/assets/images/akurai/akurai-blocks-editor-table-extended.png)

At the right side panel you can click on **Switch to Preview** to preview the table in your editor.

> Note that the preview may differ a little from the actual table as some WordPress and other plugin styles may be affecting it.

### Extended Table Shortcode

```html
[table_extended reviews="comma separated list of review page ids" terms="none|short|long|ajax|ajax-hover"]
```

### Reviews Grid Block

![akurai-blocks-grid](/assets/images/akurai/akurai-blocks-grid.png)

To add a new gird simply click on the **+** (Add block) sign and select **Reviews Grid** in **Akurai Blocks** section.

In the content editor a new gird edit section will appear. Click **Add Review** to add as many reviews as you want and at the bottom select how to display the terms and conditions.

![akurai-blocks-editor-grid](/assets/images/akurai/akurai-blocks-editor-grid.png)

At the right side panel you can click on **Switch to Preview** to preview the gird in your editor.

> Note that the preview may differ a little from the actual gird as some WordPress and other plugin styles may be affecting it.

### Reviews Grid Shortcode

```html
[grid reviews="comma separated list of review page ids" terms="none|short|long|ajax|ajax-hover"]
```

### Reviews List Block

![akurai-blocks-list](/assets/images/akurai/akurai-blocks-list.png)

To add a new list simply click on the **+** (Add block) sign and select **Reviews List** in **Akurai Blocks** section.

In the content editor a new list edit section will appear. Click **Add Review** to add the 4 reviews.

![akurai-blocks-editor-list](/assets/images/akurai/akurai-blocks-editor-list.png)

At the right side panel you can click on **Switch to Preview** to preview the list in your editor.

> Note that the preview may differ a little from the actual list as some WordPress and other plugin styles may be affecting it.

### Reviews List Shortcode

```html
[list reviews="comma separated list of review page ids" terms="none|ajax-hover"]
```

### Review Offer Block

![akurai-blocks-offer](/assets/images/akurai/akurai-blocks-offer.png)

To add a new offer simply click on the **+** (Add block) sign and select **Review Offer** in **Akurai Blocks** section.

In the content editor a new offer edit section will appear. Select a review and fill in the fields.

![akurai-blocks-editor-offer](/assets/images/akurai/akurai-blocks-editor-offer.png)

At the right side panel you can click on **Switch to Preview** to preview the offer in your editor.

> Note that the preview may differ a little from the actual offer as some WordPress and other plugin styles may be affecting it.

### Review Offer Shortcode

```html
[review_block review="review page id" terms="none|short|long" heading="..." subheading="..." button_url="..." button_text="..."] ... content here ... [/review_block]
```

### Recent Posts Block

![akurai-blocks-posts](/assets/images/akurai/akurai-blocks-posts.png)

Check out [Akurai Demos](https://dinomatic.com/demos/akurai) for more styles.

To add a new posts block simply click on the **+** (Add block) sign and select **Recent Posts** in **Akurai Blocks** section.

In the content editor a new recent posts edit section will appear. Select the number of posts to display and the post excerpt length. Or you can leave them blank for default values: 6 posts and 40 words.

You can also select a category to filter the posts or leave it blank to display posts from all categories.

`💁 since version 2.0`

You can also choose a block style and specify whether to lazy load post thumbnails or not.

![akurai-blocks-editor-posts](/assets/images/akurai/akurai-blocks-editor-posts.png)

At the right side panel you can click on **Switch to Preview** to preview the posts block in your editor.

> Note that the preview may differ a little from the actual block as some WordPress and other plugin styles may be affecting it.

### Recent Posts Shortcode

```html
[posts count="6" words="40"]
or
[posts count="6" words="40" cat_id="1"]

💁 since version 2.0
[posts count="3" style="no_excerpt"]
[posts lazy="false"]
```

### FAQs Block

![akurai-blocks-faqs](/assets/images/akurai/akurai-blocks-faqs.png)

To add a new FAQs block simply click on the **+** (Add block) sign and select **FAQs** in **Akurai Blocks** section.

In the content editor a new FAQs edit section will appear. For each one add the question and the answer and clack `Add New` to add a new FAQ item.

`💁 since version 2.0`

By default schema.org markup for FAQ rich snippets will be included in all your FAQ blocks, however you can disable them if you need to.

> Note that you can include only one markup on a page. If you have multiple FAQ blocks on a single, please enable this for one of them only.

![akurai-blocks-editor-faqs](/assets/images/akurai/akurai-blocks-editor-faqs.png)
![akurai-blocks-editor-faqs-schema-org-markup](/assets/images/akurai/akurai-blocks-editor-faqs-schema-org-markup.png)

At the right side panel you can click on **Switch to Preview** to preview the FAQs block in your editor.

> Note that the preview may differ a little from the actual block as some WordPress and other plugin styles may be affecting it.

### Slider Block

![akurai-blocks-slider](/assets/images/akurai/akurai-blocks-slider.png)

To add a new slider simply click on the **+** (Add block) sign and select **Slider** in **Akurai Blocks** section.

In the content editor a new slider edit section will appear.

![akurai-blocks-editor-slider](/assets/images/akurai/akurai-blocks-editor-slider-styles.png)

The first part is for defining the slider styles such as content font color, background colors, button colors, etc.

![akurai-blocks-editor-slider](/assets/images/akurai/akurai-blocks-editor-slider-slides.png)

The second part is where you define the slides and their contents. For each slide you can add a heading, small content, a button and background image or pattern.

At the right side panel you can click on **Switch to Preview** to preview the slider block in your editor.

> Note that the preview may differ a little from the actual block as some WordPress and other plugin styles may be affecting it.

### Lazy Image Block

`💁 since version 2.0`

To add a new lazy image simply click on the **+** (Add block) sign and select **Lazy Image** in **Akurai Blocks** section.

![akurai-blocks-lazy-image](/assets/images/akurai/akurai-blocks-editor-lazy-image.png)

Select or upload an image, set the alt text and you're ready.
You can specify any CSS class names you want to add to the `img` tag
Also select the shape of the image, whether it's wide, tall or square. This helps reserve space similar to the image and not cause document "rearrangement".

---

### Next Step

[Page Templates](/docs/akurai/page-templates/)
