---
title: Creating Broker Review Pages
description: Creating Broker Review Pages with FXT Theme
weight: 40
extra:
  order: 40
---

# Creating Broker Review Pages

In your WordPress dashboard you will find a new menu item called **Brokers** right below the **Pages** menu link. Click `Add New` to add a new broker review.

---

## Broker Page Templates

This page describes broker-specific fields. For broker page templates, please follow this [link](/docs/fxt/broker-page-templates/).

---

## Broker Fields

Besides adding the broker title and content as usual, you'll find **Broker Fields** section below the page content. Here you can define comprehensive properties for each broker. These fields are organized in separate tabs and have descriptions to make it easy for you to fill them in. These properties are used throughout the website, so please make sure to complete them.

---

## Basic Information Tab

### Core Details

- **Logo**: Upload the broker's logo (150x150 pixels)
- **Name**: The official name of the broker
- **Type**: Select broker type (CFD, ECN, STP, Market Maker, etc.)
- **Website URL**: The official website of the broker
- **Tagline/Main Feature**: A short phrase describing the broker's main selling point

### Company Information

- **Year Founded**: The year the broker was established
- **Headquarters Location**: The location of the broker's main office
- **Regulations**: Select regulatory bodies that oversee the broker
- **Licenses**: Enter the broker's license numbers and details

### Geographic Coverage

- **Supported Countries**: Select countries where the broker's services are available
- **Restricted Countries**: Select countries where the broker does not operate

* You need to fill in just one of the fields, either one will do.

---

## Account Links Tab

- **Trading Account Link**: Direct link to open a real trading account
- **Demo Account Link**: Direct link to open a demo account

---

## Ratings Tab

- **Overall Rating**: The main score for the broker (used in all comparisons and listings)
- **Rating #1 - #6**: Six additional rating fields for specific aspects (e.g., "Customer Support", "Platform Stability", "Trading Conditions", etc.)

The labels for these ratings can be customized in the **Theme Options** -> **Strings**.

---

## Terms Tab

- **Terms**: Any specific terms and conditions associated with the broker

---

## Trading Conditions Tab

- **Min Trade Size**: The smallest trade size allowed
- **Average Spread EURUSD**: The average spread for the EUR/USD pair
- **Max Leverage**: The maximum leverage offered

---

## Trading Instruments Tab

### Instrument Summary

- **Instruments**: A summary description of available instruments

### Pair Types

- **Pair Types**: Select the types of currency pairs offered (Major, Minor, Exotic)

### Instrument Counts

- **Currency Pairs**: Number of available currency pairs
- **Cryptocurrencies**: Number of available cryptocurrencies
- **Metals**: Number of available metals
- **Stocks/Equities**: Number of available stocks
- **Indices**: Number of available indices
- **Energy**: Number of available energy products
- **Commodities**: Number of available commodities
- **Bonds**: Number of available bonds
- **ETFs**: Number of available ETFs
- **Options/Futures**: Number of available options or futures

---

## Trading Platforms Tab

- **Trading Platforms**: Select supported platforms (MetaTrader 4, MetaTrader 5, cTrader, etc.)
- **Mobile Trading**: Enable/disable mobile trading availability

---

## Payment Options Tab

### Payment Methods

- **Deposit Methods**: Select supported deposit methods
- **Withdrawal Methods**: Select supported withdrawal methods
- **Min. Deposit**: The minimum deposit amount
- **Withdrawal Processing Time**: Typical time for withdrawal processing
- **Deposit Fees**: Information about deposit fees
- **Withdrawal Fees**: Information about withdrawal fees

---

## Customer Support Tab

- **Support Channels**: Describe available support channels (chat, email, phone, etc.)
- **Support Languages**: Select languages supported by customer service
- **Availability** and **Average response time**

---

## Education Tab

Several true or false fields:

- **Learning materials**
- **Market analysis/research**
- **Economic calendar**
- **Trading signals**

---

## Additional Features Tab

True or false fields for additional features such as:

- **Negative balance protection**
- **PAMM/MAM accounts**
- **Social/copy trading**
- etc.

---

## Broker Page Blocks

To present the information more visually, you can use [broker blocks](/docs/fxt/broker-page-blocks/) in broker page contents, as well as generic blocks such as FAQs, Recent posts, etc.

---

## Broker Categories and Tags

You can assign broker categories and tags to brokers. You do that the same way you'd do it for regular posts. You can also manage your broker categories and broker tags by visiting their corresponding pages under the "Brokers" menu item.

---

## Review Snippet

For all your broker review pages, FXT generates **Review Snippet Structured Data** (schema.org) markup. The rating value used is the "Overall Rating" field from the Ratings tab. It is generated automatically, so you don't need to do anything; however, you can turn it off if desired. You can test your pages [here](https://search.google.com/structured-data/testing-tool).

---

## Next Step

[Page Templates](/docs/fxt/broker-page-templates/)
