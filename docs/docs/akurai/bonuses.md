---
title: Creating Bonus Pages
description: Creating Bonus Pages with Akurai Theme
weight: 45
extra:
  order: 45
---

# Creating Bonus Pages

In your WordPress dashboard you will find a new menu item called **Bonuses** right below the **Reviews** menu link. Click `Add New` to add a new bonus.

---

## Bonus Fields

Besides adding your bonus title and content as usual, you'll find a **Bonus Fields** section below the page content. Here you can define properties for each bonus. These properties are used on the bonus page and in related bonus cards.

### Linked Review

Select the review this bonus belongs to. The linked review's affiliate link and logo will be used on the bonus page if no bonus-specific affiliate link is set.

### Affiliate Link

An optional direct affiliate URL for this bonus. Leave empty to fall back to the linked review's affiliate link.

### Bonus Type

Select one of the available bonus types:

- **Welcome Bonus** — a first-deposit offer for new players
- **No Deposit Bonus** — a bonus that requires no deposit to claim
- **Free Spins** — free spins on selected slots (or a free bet equivalent for sportsbooks)
- **Reload Bonus** — a recurring deposit bonus for existing players
- **Cashback** — a percentage of losses returned to the player
- **Enhanced Odds** — a price boost on selected markets
- **Other** — any other promotion type

### Bonus Value

A short string describing the offer value, for example `100% up to €500` or `Bet €10 Get €30`. This is displayed as the main headline in the bonus page hero.

### Bonus Code

The promo code required to claim the bonus, if any. Leave empty if no code is needed — the hero will show a "No Code" label instead (configurable in the Customizer).

### Full Terms & Conditions

The complete terms and conditions for this bonus, displayed below the hero section.

### Short Terms

A brief one-line summary of the most important terms, shown below the CTA button in the in related bonus cards.

### Minimum Deposit

The minimum deposit required to trigger the bonus, for example `€10` or `None`.

### Wagering Requirement

The playthrough requirement before winnings can be withdrawn, for example `35x` or `1x turnover at min. odds 1.50`.

### Max Bet

The maximum allowed bet per round or spin while the bonus is active, for example `€5`.

### Hero Background Color & Hero Text Color

Choose custom colors for the bonus page hero section. These let you match each bonus card to its associated brand. Defaults to `#222222` background and `#ffffff` text if left empty.

### Related Bonuses

You can link up to 3 other bonus pages to display in the **Similar Bonuses** section at the bottom of the bonus page. Select them using the **Related Bonus #1**, **#2**, and **#3** fields.

---

## Bonus Page

Each bonus has its own public page at `/bonus/bonus-slug`. The page consists of:

- **Hero section** — displays the bonus value, promo code with a copy button, CTA button, short terms, and the linked review's logo.
- **Content area** — the post content you write in the editor.
- **Similar Bonuses section** — a grid of the related bonuses you linked, if any are set.

---

## Customizer Options

Bonus page text strings are configurable under **Appearance** → **Customize** → **Bonus Options**:

- **Bonus button text** — the CTA button label. Default: `Claim bonus`. Use `%s` to insert the linked review's name.
- **Bonus page link text** — the "read review" link label shown in related bonus cards. Default: `Read review`.
- **Text before review logo** — the label shown before the operator logo in the hero and related cards. Default: `From`.
- **Text instead of bonus code** — shown when no promo code is set. Default: `No Code`.
- **Bonus page related bonuses section heading** — the heading above the Similar Bonuses grid. Default: `Similar Bonuses`.
