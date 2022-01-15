<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => 'http://localhost:3000',
    'production' => false,
    'siteName' => 'DinoMatic Docs',
    'siteDescription' => 'WordPress Themes and Plugins',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // versions
    'versions' => [
        'akurai'       => '2.2.1',
        'spinoko'      => '2.1.1',
        'sikika'       => '1.0.2',
        'kemoku'       => '1.4.1',
        'dinodds'      => '1.3.0',
        'nonaki'       => '1.0.4',
        'hello-cookie' => '1.0.2',
    ],

    // helpers
    'isActive' => fn ($page, $path) => Str::endsWith(trimPath($page->getPath()), trimPath($path)),
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => fn($page, $path) => Str::startsWith($path, 'http') ? $path : '/' . trimPath($path),
    'product' => fn($page) => $paths = explode('/', $page->getPath())[2],
    'version' => fn($page) => $page->versions[$page->product($page)]
];
