---
title: How To ...
description: How To ...
extends: _layouts.documentation
section: content
---

# How To ...

### How To Create a Header Navigation Menu

Detailed description of Spinoko nav menus and a guide on how to create one can be found [here](/docs/spinoko/navigation).

---

### How To Use Custom Payment Icons

Spinoko comes wth carefully chosen payment icons that both look nice on the page are optimal for performance. You can add your own icons by following the steps below.

**The SVG icon**: You need to use an SVG (Scalable Vector Graphics) files for icons. `.png .jpg .gif` etc. common image formats will not work.

**The file name**: The filename should be the lowercase version of the payment method and should not contain spaces. For example: for **American Express** payment method you'd have a file called `american-express.svg`.

**The Directory**: You need to use a [child theme](/docs/spinoko/child-theme) for this to avoid future update conflicts.
In your child theme's root directory create a directories: `assets/icons/payments/` and add the icon to the payments directory.

---
