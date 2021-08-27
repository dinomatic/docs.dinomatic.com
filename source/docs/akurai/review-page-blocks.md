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

There are 7 review blocks available for you to use in review pages:

- Info Table
- Pros & Cons
- Ratings
- Banking
- Offers
- Bonus List
- Countries

![akurai-review-blocks](/assets/images/akurai/review-blocks.png)

5 blocks, except Bonus List and Countries, require no configuration, all you need is to just add them to the content by clicking on the block name. The information is populated from [Review Fields](/docs/akurai/creating-review-pages/) that you need to have filled in beforehand.

### Shortcodes

The same blocks are also available via shortcodes, and you can also use them in [Review Page Sidebars](/docs/akurai/widget-areas/). Here are the formats:

- `[info]`
- `[pros_cons]`
- `[ratings]`
- `[banking]`
- `[offers]`
- `[bonus_list]` - At least 2 bonuses must be specified.
```
[bonus_list bonus_1="1st BONUS" bonus_2="2nd BONUS" bonus_3="" bonus_4="" bonus_5=""]
```

- `[countries]` - You can skip the options and display the default block.
```
[countries show_search="1" main_text="..." not_supported_text="..."]
```
### Screenshots

#### In Content Area

![akurai-review-blocks-content](/assets/images/akurai/akurai-review-blocks-content.png)

#### In Review Page Sidebar

Here's what the blocks look like in review page sidebars.

> Please note that you can use these shortcodes in `Review Page Sidebar` only.

> Since **WordPress 5.8**, you can use the same blocks in Widgets without the need of using shortcodes.

![akurai-review-blocks-sidebar](/assets/images/akurai/akurai-review-blocks-sidebar.png)

---

### Next Step

[Blocks & Shortcodes](/docs/akurai/blocks-shortcodes/)
