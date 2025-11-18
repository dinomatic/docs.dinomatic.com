---
title: Plugin Shortcodes
description: DinOdds Plugin Shortcodes
weight: 50
extra:
  order: 50
---

# Plugin Shortcodes

DinOdds lets you display betting odds tables anywhere on your site using a simple `[odds]` shortcode. You can generate these shortcodes from the admin interface and paste them into posts, pages, or widgets.

## Shortcode Overview

The base shortcode format is:

```text
[odds league="" bookies="" style="" layout="" class="" type="" selector="" away="" home=""]
```

At a minimum, you must choose a **league** and **bookies**. All other attributes are optional and can be configured via the shortcode generator.

## Shortcode Types

`💁 since version 1.3` there are two main ways to display odds:

- **All League Odds**
  Display an odds table for all _upcoming_ matches in a given league.

- **Single Match Odds**
  Display odds for a single match in that league by specifying both `away` and `home` team names.

If **both** `away` and `home` are provided, DinOdds will attempt to find and display that single upcoming match. If either is missing, DinOdds falls back to the **All League Odds** view.

### Examples

- All league odds (default style and layout):

  ```text
  [odds league="nfl"]
  ```

- All league odds with selected bookies, style 2, without odds type selector:

  ```text
  [odds league="nfl" bookies="mybookie,betonline" style="2" selector="false"]
  ```

- Single match odds for a specific game:

  ```text
  [odds league="nfl" away="Buffalo Bills" home="Houston Texans"]
  ```

## Shortcode Generator

You don’t need to write attributes by hand. Use the shortcode generator in the DinOdds settings screen:

1. **Select League** – Choose a league from the dropdown. This is required.
2. **Select Bookies** – Choose one or more bookies:
   - Hold the **Command (macOS)** or **Ctrl (Windows/Linux)** key to select multiple.
   - Leave all unselected to display **all available bookies**.
3. **Select Style** – Choose the table style:
   - `1` – Default style.
   - `2` – Alternative table layout (where available).
4. **Select Links Layout** – Choose how bookie links are displayed:
   - `top` – Links above the table (default).
   - `inline` – Links displayed inline beneath the odds.
5. **Select Odds Type** – Choose the default odds type:
   - `spread` (default)
   - `moneyline`
   - `total`
6. **Display Type Selector** – Decide whether to show the odds type selector:
   - `true` – Show the selector (default).
   - `false` – Hide the selector.
7. **Custom CSS Class (optional)** – Add an extra CSS class that you can target in your theme styles.
8. **Away / Home Team (optional)** – For **Single Match Odds**:
   - Set `away` and `home` team names exactly as they appear in the data feed.
   - Leave both empty to show all league odds.

As you change these options, the generator builds the shortcode for you. Use the **“Copy shortcode to clipboard”** button and paste it wherever you want the odds table to appear.

## Shortcode Attributes

Here is a quick reference for all supported attributes:

| Attribute  | Required | Description                                                       | Default     |
| ---------- | -------- | ----------------------------------------------------------------- | ----------- |
| `league`   | Yes      | League identifier whose odds you want to display.                 | —           |
| `bookies`  | No       | Comma-separated list of bookies. Leave empty to show all bookies. | All bookies |
| `style`    | No       | Table style variant (`1` or `2`).                                 | `1`         |
| `layout`   | No       | Layout for bookie links: `top` or `inline`.                       | `top`       |
| `type`     | No       | Default odds type: `spread`, `moneyline`, or `total`.             | `spread`    |
| `selector` | No       | Whether to display the odds type selector: `true` or `false`.     | `true`      |
| `class`    | No       | Extra CSS class added to the wrapper for custom styling.          | —           |
| `away`     | No       | Away team name for a single match view.                           | —           |
| `home`     | No       | Home team name for a single match view.                           | —           |

When there are **no upcoming matches** for the chosen league (or no matching single game for the given teams), DinOdds will display a dedicated “no matches available” view instead of leaving the page blank.

---

### Next step

[Affiliate Settings](/docs/dinodds/affiliate-settings/)
