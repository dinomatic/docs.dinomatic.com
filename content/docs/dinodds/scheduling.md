---
title: Scheduling
description: DinOdds Scheduling
---

# Scheduling

Find out how the feed updates work and how to set up cron jobs.

## About scheduling

In order to display the latest odds feeds, your website needs to pull the data from DinoFeeds API periodically. This is done by DinOdds plugin automatically. However, there are some caveats we'll discuss below.

But before that, let's define cron and cron jobs:

> **Cron** is used to schedule commands or scripts (tasks) on Linux servers at a specified time and date.

> A **cron job** is the task itself.

For example, I can use cron to schedule a database backup on my server every day at 8:00AM - this would be a cron job. Another example could be deleting temporary files, etc.

### WordPress Cron Jobs

WordPress has its own "cron system" called WP-Cron:

> WP-Cron is how WordPress handles scheduling time-based tasks in WordPress. Several WordPress core features, such as checking for updates and publishing scheduled post, utilize WP-Cron.

It is a workaround developed by WordPress and it has some very useful features, however it is run on every page load and **only when a page load occurs**.

This is the main issue that we're concerned about now. This means that WP-Cron won't run if there's no page load. For example, if your plugin has a scheduled feeds update task at 3:00PM and there's no page load until 3:40PM, feeds won't be updated by then.

First of all, I wouldn't like to rely on a page visit to update my feeds, also it may take a while and delay the page load. There might be other issues as well.

Ok, to solve this, we need to:

1. disable WP-Cron
2. use system cron jobs to periodically call WP-Cron

This ensures that no matter what WP-Cron will be called periodically and WP scheduled tasks will run on time. One of those tasks in updating the feeds.

### Disable WP-Cron

To do this, open your `wp-config.php` file (it is in your website's root directory), add the following line and save it. And we're done here, WP-Cron is disabled.

```php
define( 'DISABLE_WP_CRON', true );
```

Make sure you add the line before `/* That's all, stop editing! Happy blogging. */` line.

### Set up System Cron Jobs

So, we need to schedule a command that will ping our website and call WP-Cron periodically. You can choose whatever frequency you want, I suggest one hour and that's what I use.

#### Command:

Here's the command that we need to schedule:

```bash
wget --delete-after https://MYDOMAIN.com/wp-cron.php
```

Make sure to replace `MYDOMAIN.com` with your actual domain name.

You can set up cron jobs:

- using a user interface provided by your host
- using command line

#### Using user interface

Usually hosts provide a user interface for scheduling tasks and they usually are called **Cron Jobs**. In your hosting control panel look for cron jobs or scheduler and follow the instructions on how to set them up. In most cases you'll have to select a frequency and paste the command.

If you're having difficulties finding or scheduling tasks on a particular system, a Google search like this "how to create cron jobs in cpanel" may help.

#### Using command line

You'll need `ssh` access and some knowledge about using the command line. If you're not comfortable with it, I'd suggest you either use a visual interface if available or contact your host to assist you.

Steps:

```bash
# connect to server, if prompted with a password, enter it
ssh USER@HOST

# open cron editor
# if this is the first time you run crontab edit command
# you may be prompted to select en editor
crontab -e

# go to the end of the file and paste the command
0 * * * * wget --delete-after https://MYDOMAIN.com/wp-cron.php

# this will run the command at :00 minute every hour
# you can change 0 to a different number (< 60)

# to run it every 30 minutes, use this
*/30 * * * * wget --delete-after https://MYDOMAIN.com/wp-cron.php
```

Make sure to replace `MYDOMAIN.com` with your actual domain name.

And that's all, now your WordPress scheduled tasks will run at the frequency you defined regardless page load.

---

### Next step

[Changing Colors](/docs/dinodds/colors/)
