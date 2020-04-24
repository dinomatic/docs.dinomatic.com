<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'DinoMatic Docs',
    'siteDescription' => 'WordPress Themes and Plugins',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // versions
    'versions' => [
        'akurai'       => '1.1.5',
        'sikika'       => '1.0.1',
        'spinoko'      => '1.0.2',
        'kemoku'       => '1.0.6',
        'dinodds'      => '1.2.0',
        'nonaki'       => '1.0.3',
        'hello-cookie' => '1.0.2',
    ],

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
    'product' => function($page) {
        $paths = explode('/', $page->getPath());
        return $paths[2];
    },
    'version' => function ($page) {
        return $page->versions[$page->product($page)];
    }
];
