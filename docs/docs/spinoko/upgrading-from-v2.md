---
title: Upgrading from v2
description: Whether and how to move from Spinoko v2 to v3, using the WP-CLI migrator plugin
weight: 30
extra:
  order: 30
---

# Upgrading from v2

v3 is not an update to v2 — it's a different theme, built from scratch. v2
keeps working after v3 is released, and nothing forces you to switch.

If you do want to switch to v3, DinoMatic provides a free plugin, the
**Spinoko v2 → v3 Migrator**, that automates most of the work. But it 
leaves some room for manual checks and replacements, and the amount of 
manual tasks depends on the amount and type of content you have.

⚠️ The plugin currently works only through `WP-CLI`, WordPress's command-line tool —
there's no page for it in the dashboard, so you'll need **SSH access** to your
server to use it.

It adds four commands, run in this order: `export`, `import`,
`cleanup-legacy`, and an optional `convert-blocks`, details in [The Commands](#the-commands) section.

---

## Do You Need This?

This only applies to websites already running Spinoko v2. If you're starting a new website, — 
just [install v3](/docs/spinoko/installation).

There are two separate questions to answer, and they don't affect each other.

### How many casinos and slots do you have?

- **A handful** — rebuild them by hand in v3. It's quicker than running
  the migration and then checking every field it filled in anyway.
- **Dozens or more** — use `export` and `import`. They create the casino
  and slot posts for you, matching names, images and categories
  automatically. Afterward you just review a short report of the few
  things they couldn't figure out on their own.

### How much of your regular content — posts and pages — uses v2's blocks?

- **Just a few pages** — update them by hand.
- **A large archive** — run `convert-blocks` to update them automatically
  instead.

Mix and match freely. Migrate your casinos by hand and still run
`convert-blocks` on your blog, or the other way around.

---

## Before You Start

- **Back up your website** (database and files) before doing any of this.
- Do it on a **staging copy** first, not the live website.
- Confirm you actually have working **SSH and WP-CLI access** before you
  begin.

> There's no undo, once you complete the migration you can't no back, it's mandatory to back up your website and try this on a staging server.

---

## Install the Plugin

Download the plugin from its [GitHub repo](https://github.com/dinomatic/spinoko-migrator) — click Code → Download ZIP. 
Install it like any other plugin — Plugins → Add New → Upload Plugin — then keep it active through the whole process. It does nothing unless you run one of the commands below.



## The Commands

> ⚠️ These commands modify your database directly.

### 1. `export` — run while v2 is still active

```bash
wp spinoko-migrator export [--output=<file>]
# default --output: spinoko-v2-export.json
```

Saves your casino and slot data to one JSON file, read through v2 so the
values come out correctly. Errors out if v2 isn't active.

**Includes:** casino and game/slot field data only.
**Doesn't include:** posts, pages, menus, or site options.

### 2. `import` — run after switching to v3

```bash
wp spinoko-migrator import <input> [--dry-run] [--v2-theme=<slug>] [--report=<file>]
# --v2-theme default: spinoko
# --report default: spinoko-migration-report.md
```

Reads the export file and creates the matching casino and slot posts in
v3. It skips anything that already exists under the same name, so running
it twice won't create duplicates.

Because this is the same site, your old v2 casino posts are still sitting
on the exact URLs the new v3 casinos need. So before creating anything,
`import` renames each old casino's slug and title (adding `-v2` / `(v2)`)
to free those up for the new one.

This command also scans your posts, pages, casinos, and slots for any v2
blocks and generates a report about it for you. Each one is marked
either fine, or flagged because it has a v2 block.

It will also copy your nav menu(s) from v2 to v3.

- `--dry-run` previews what would happen without writing anything. It
  won't show which casinos or slots need manual block rebuilding —
  that only shows up on a real run.
- `--report` (also printed to the terminal) lists: what was created or
  skipped, posts/pages/casinos/slots needing manual rebuilding, casinos
  with no country data set, old casino posts renamed pending cleanup,
  and how each casino's rating breakdown was mapped over.

### 3. `cleanup-legacy` — run once you've checked the import

```bash
wp spinoko-migrator cleanup-legacy [--dry-run] [--force]
```

Removes the old v2 casino and game posts left behind after a migration.
Moves things to trash by default; `--force` deletes them for good.
`--dry-run` lists what would be removed without touching anything.

Only use `--force` once you're sure: if you permanently delete a
casino or slot's old v2 post and then need to re-run `import` for it,
the new one will be missing its original content, author, date, and
featured image.

It's a separate, later step on purpose — so you can check a bad import
against the old posts before anything is actually deleted.

### 4. `convert-blocks` — optional, independent of the above

```bash
wp spinoko-migrator convert-blocks [--dry-run] [--report=<file>]
# --report default: spinoko-block-conversion-report.md
```

Updates existing posts, pages, casinos, and slots in place — nothing new
is created — swapping v2's blocks for their v3 equivalents wherever one
exists. A post with none of those blocks isn't touched. A block with no v3 equivalent is
left as it is (it just stops showing anything once v2 is gone) and listed
in the report instead. You can run this whether or not you migrate any
casinos.

Worth doing afterward: open a converted page in the block editor and
check it doesn't show a "block contains unexpected or invalid content"
notice.

---

## What Comes Across, and What Doesn't

**URLs, titles, content, author, and publish date** stay exactly the same as they were in v2, including the original featured image.


### Casino/slot fields

Casino and game/slot fields carry over with some exceptions, check below:.

**Doesn't carry over:** casino website, deposit max; slot wilds, free spins, 
mobile-playable, reel rows; classic widgets; any colors, fonts, or layout
settings from v2's Customizer (v3 controls appearance through the
[Site Editor](/docs/spinoko/site-editor) instead, an unrelated system).

**New in v3, nothing to migrate — just fill in by hand:** casino tagline,
payout speed, customer support, KYC speed, minimum withdrawal, blacklist
status, geo-specific affiliate links, currencies; most slot detail fields
— release date, languages, land-based availability, markets, cluster/
scatter pays, bet/win limits, bonus buy, autoplay, quickspin, tumbling
reels, increasing multipliers, orientation, restrictions, themes, types.

### Block conversions

| v2 block | Becomes |
|---|---|
| Casino Countries / Payments / Games / Game Providers | Same-purpose native block (settings reset to v3's defaults) |
| Casino Finder, Casino Dropdown | Casino Finder (a dropdown becomes a live search box) |
| Casino CTA | Casino Card |
| Casino Info (Pros & Cons) | Casino Quick Facts — shows different content: license, established, payout speed, deposit/withdrawal, support, KYC — not pros & cons |
| FAQs | FAQ |
| Recent Posts | Recent Posts (style variants not carried over) |
| Single Bonus | Bonus Card (shows the casino's real bonus; any hand-typed text is dropped) |
| Single Casino (Featured Casino) | Featured Casino (visual style and heading text dropped) |
| Casinos Grid / Casinos Table | Casino Listing (a hand-picked casino list becomes an unfiltered listing of the same size; badges dropped) |
| Casino Bonuses | One Bonus Card per bonus the casino actually has in v3 |
| Page Links | A row of linked featured images and titles |
| Show More | An expandable "read more" section (a separate "show less" label, if you had one, is dropped) |

**No v3 equivalent, left as-is, still flagged:** Game Finder, Casino
Ratings.

---

## Manual Checks

This is where most of the real work happens, so budget time for it rather
than treating it as cleanup.

- **Flagged posts, pages, casinos, and slots.** `import` and
  `convert-blocks` both list every one that still has a v2 block with no
  v3 version — these go blank once v2 is gone. The report links straight
  to each one; open it and rebuild that part with v3's own blocks. If you
  already ran `convert-blocks`, only what's left over after that still
  needs doing.
- **Rating breakdown order.** Since ratings carry over by position, check
  the order actually makes sense across your whole site before naming the
  slots on the Labels page — do this once, not per casino.
- **Old posts pending cleanup.** The casino posts `import` renamed are
  listed for reference. Once you're happy the new version is correct, run
  `cleanup-legacy` to remove them.
- **Affiliate links** and **old page URLs** still work.

---

## Troubleshooting

- **"This must be run while the Spinoko v2 theme is active"** on
  `export` — switch back to v2 (and make sure ACF is active) before
  exporting.
- **"This must be run while the Spinoko v3 theme is active"** on
  `import`, `cleanup-legacy`, or `convert-blocks` — v3 isn't active, or
  (only if you installed it from source rather than the packaged theme
  file) some of its files are missing.
- **A casino you expected to be created shows up as "skipped"** — a
  casino with the same name already exists in v3, from a previous run or
  a demo import.
- **Menus don't come across** — v2 wasn't installed under its default
  `spinoko` folder name; pass `--v2-theme=<slug>` with the actual folder
  name instead.
- **A converted page shows a block-recovery notice** — a couple of block
  types are rebuilt as plain HTML rather than the block editor's own
  format. Usually harmless, worth a quick check on a few pages after
  converting.
