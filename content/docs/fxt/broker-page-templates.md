---
title: Broker Page Templates
description: Broker Page Templates for FXT Theme
weight: 50
extra:
  order: 50
---

# Broker Page Templates

You can define different templates for broker review pages in FXT theme.

---

## Using Broker Page Templates

There are 3 page templates available for displaying **Broker Review Pages** on your website.

1. **Default Template** - Standard broker review layout (used when no template is selected)
2. **Overview Template** - Comprehensive broker information display
3. **Trading Conditions Template** - Focused on trading parameters

---

## Default Template

The Default template is used automatically when no specific template is selected for a broker page. It provides a standard broker review layout with a comprehensive header section.

### Header Section Features

- **Broker Logo**: Large, prominent logo display (120px)
- **Broker Name**: Main heading with title
- **Author Information**: Author block (if enabled in theme options)
- **Rating Display**: Overall rating with expandable detailed ratings
- **Country Support**: Geographic availability information
- **Action Buttons**: Real account and demo account links
- **Terms & Conditions**: Popover display of broker terms

### Content Area

The main content area displays the broker review content using the standard broker display template, with hooks for customization before and after the content.

---

## Overview Template

The Overview template provides a comprehensive view of the broker with detailed information displayed in the header section.

### Header Section Features

- **Broker Logo**: Large, prominent logo display (120px)
- **Broker Name**: Main heading with title
- **Author Information**: Author block (if enabled in theme options)
- **Overview Information Grid**: Three-column layout showing:
  - **Minimum Deposit**: Payment requirements
  - **Regulations**: Regulatory bodies and compliance
  - **Trading Platforms**: Supported trading software
- **Country Support**: Geographic availability information
- **Action Buttons**: Real account and demo account links
- **Terms & Conditions**: Popover display of broker terms

### Content Area

The main content area displays the broker review content using the standard broker display template, with hooks for customization before and after the content.

---

## Trading Conditions Template

The Trading Conditions template focuses specifically on trading parameters and technical specifications.

### Header Section Features

- **Broker Logo**: Large, prominent logo display (120px)
- **Broker Name**: Main heading with title
- **Author Information**: Author block (if enabled in theme options)
- **Trading Conditions Grid**: Three-column layout showing:
  - **Minimum Trade Size**: Smallest allowed trade amount
  - **Average Spread**: Typical spread for EUR/USD pair
  - **Maximum Leverage**: Highest leverage offered
- **Country Support**: Geographic availability information
- **Action Buttons**: Real account and demo account links
- **Terms & Conditions**: Popover display of broker terms

### Content Area

The main content area displays the broker review content using the standard broker display template, with hooks for customization before and after the content.

---

## Template Selection

### Setting a Broker Template

1. Create or edit a broker page in WordPress
2. In the Page Attributes section (right sidebar), look for **Template**
3. Select either "Overview" or "Trading Conditions" from the dropdown
4. Leave as "Default Template" to use the standard broker layout
5. Update or publish the broker page

### Template Differences

- **Default Template**: Standard broker review layout with rating focus
- **Overview Template**: Best for comprehensive broker reviews with detailed information
- **Trading Conditions Template**: Ideal for technical-focused reviews emphasizing trading parameters

---

## Template Customization

### Available Hooks

All templates provide action hooks for customization:

- `fxt_broker_before`: Executes before the main broker content
- `fxt_broker_after`: Executes after the main broker content
- `fxt_broker_footer`: Executes in the footer area

### Header Customization

The header sections are built using partial templates located in (relative to theme root):

- `resources/views/broker/default/header.php`
- `resources/views/broker/overview/header.php`
- `resources/views/broker/trading-conditions/header.php`

---

## Next Step

[Creating Broker Review Pages](/docs/fxt/broker-page-blocks/)
