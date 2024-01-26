---
title: Header Notifications
description: Spinoko Header Notifications
extends: _layouts.documentation
section: content
---

# Header Notifications

You can display a notifications bell icon on the theme header, next to navigation menu toggle icon to display a notifications block to your users.
The notifications block can be used for displaying a custom content block, posts feeds or any other HTML block you can code.

![spinoko-notifications](https://media.dinomatic.com/images/docs/spinoko/spinoko-notifications.jpg)

## Notification Options

All options for displaying notifications, including enabling or disabling them, can be managed in theme customizer.

![spinoko-customizer-notifications](https://media.dinomatic.com/images/docs/spinoko/spinoko-customizer-notifications.jpg)

### Displaying a custom block

To display a custom notifications block, choose "Custom block" for "Notification Content Type" field.
After that you need to fill in an image URL, heading and content, as well as link URL and text fields.

### Displaying posts feeds

You can display posts feeds in 2 formats, one with small and another with large thumbnails.
To display a posts feed block, choose one of the post feed options for "Notification Content Type" field.
You can adjust the block heading and choose a post category to filter posts.

### Changing the bell icons

There are 2 bell icons used, one with and another without a red dot. The one without red dot appears only after a user clicks on the bell icon and sees the notification block.
If you want to change the icons, get your SVG icons, add `bell-unread` and `bell-read` classes to them and use the below example by replacing the placeholder icons with your actual SVG codes.

```php
add_filter( 'spinoko_n10ns_icons', function () {
  return '<svg class="bell-unread">...</svg><svg class="bell-read">...</svg>';
} );
```

### Display your own notification block

You can even provide your own custom HTML for the notifications block. Here's one example how to do it.
Replace the file path if your custom file is somewhere else, also change the content to make it useful.

1. create a file at `/spinoko-child/views/notifications/custom.php`

```php
<?php
/**
 * My custom notifications block.
 */
?>

<div class="border border-neutral spinoko_rounded">
  Something useful here.
</div>
```

2. add this to your child theme's `functions.php`

```php
function spinoko_custom_n10ns_layout() {
	include get_stylesheet_directory() . '/views/notifications/custom.php';
}
add_filter( 'spinoko_n10ns_layout', fn() => 'spinoko_custom_n10ns_layout' );
```

---

### Next Step

[AMP Support](/docs/spinoko/amp/)
