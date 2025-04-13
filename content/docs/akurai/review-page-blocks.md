---
title: Review Page Blocks
description: Akurai Theme Review Page Blocks
weight: 60
extra:
  order: 60
---

# Review Page Blocks

Akurai theme comes with built-in review page blocks (and shortcodes) that you can use to easily present sportsbook information.

---

## Using Blocks & Shortcodes

General and some specific blocks are available on Akurai review pages. Check them out below.

### Blocks

There are 7 review blocks available for you to use in review pages:

- Info Table
- Pros & Cons
- Ratings
- Banking
- Offers
- Bonus List
- Countries

![akurai-review-blocks](https://media.dinomatic.com/images/docs/akurai/review-blocks.jpg)

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

![akurai-review-blocks-content](https://media.dinomatic.com/images/docs/akurai/akurai-review-blocks-content.jpg)

---

### Next Step

[Page Templates](/docs/akurai/page-templates/)
