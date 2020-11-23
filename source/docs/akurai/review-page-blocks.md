---
title: Review Page Blocks
description: Akurai Theme Review Page Blocks
extends: _layouts.documentation
section: content
---

# Review Page Blocks

Akurai theme comes with built-in review page blocks (and shortcodes) that you can use to easily present sportsbook information.

---

## Using Blocks & Shortcodes

### Blocks

There are 5 review blocks available for you to use in review pages:

- Info Table
- Pros & Cons
- Ratings
- Banking
- Offers
- Bonus List

![akurai-review-blocks](/assets/images/akurai/akurai-review-blocks.png)

The 5 blocks, except Bonus List, require no configuration, all you need is to just add them to the content by clicking on the block name. The information is populated from [Review Fields](/docs/akurai/creating-review-pages/) that you need to have filled in beforehand.

For Bonus List block you need to specify bonuses and their names, as well as optional heading and button texts.


### Shortcodes

The same blocks are also available to use in [Review Page Sidebars](/docs/akurai/widget-areas/) via shortcodes. Here’s the formats:

- `[info]`
- `[pros_cons]`
- `[ratings]`
- `[banking]`
- `[offers]`
- `[bonus_list]`

For `[bonus_list]` shortcode here's how too specify bonuses:
```
[bonus_list bonus_1="1st BONUS" bonus_2="2nd BONUS" bonus_3="" bonus_4="" bonus_5=""]
```

### Blocks in Content Area

Here's what the blocks look like in review page content area. You can obviously add content between them and display only the ones that you want. This is just an image showing you the blocks' structures.

![akurai-review-blocks-content](/assets/images/akurai/akurai-review-blocks-content.png)

### Shortcodes in Sidebar

Here's what the blocks look like in review page sidebars.

> Please note that you can use these shortcodes in `Review Page Sidebar` only.

![akurai-review-blocks-sidebar](/assets/images/akurai/akurai-review-blocks-sidebar.png)

---

### Next Step

[Blocks & Shortcodes](/docs/akurai/blocks-shortcodes/)
