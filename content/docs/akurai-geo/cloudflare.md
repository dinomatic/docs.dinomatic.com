---
title: Cloudflare
description: AkuraiGeo - Cloudflare
weight: 50
extra:
  order: 50
---

# Cloudflare

AkuraiGeo requires your website traffic to be routed through Cloudflare because it uses information from a request header provided by Cloudflare.

`💁 since version 2.0.0` You can use [custom geo-detection](/docs/akurai-geo/geo-detection/) options without using Cloudflare.

---

## Cloudflare overview

Cloudflare provides a lot of products and solutions to build cloud infrastructures, applications and websites. Among many others, Cloudflare provides services like DNS management, global CDN, SSL certificates, etc.

Check out more at Cloudflare website at [https://cloudflare.com](https://cloudflare.com)

### IP Geolocation

To make sure the necessary information is provided by Cloudflare, visit your dashboard, select the website you want to enable IP Geolocation for, select "Network" on the left sidebar and scroll down to "IP Geolocation" section and make sure to toggle the button on.

### Privacy

AkuraiGeo plugin uses the country code of your website's visitor's IP address directly. It doesn't use the IP address, doesn't get it from anywhere and therefore can't store it anywhere.

---

### Next step

[Custom Geo Detection](/docs/akurai-geo/geo-detection/)
