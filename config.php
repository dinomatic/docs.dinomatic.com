<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => 'http://localhost:3000',
    'production' => false,
    'siteName' => 'DinoMatic Docs',
    'siteDescription' => 'WordPress Themes and Plugins',

    // Algolia
    'docsearchApiKey' => '282a8b7296516311cfb7d24f86755ce4',
    'docsearchIndexName' => '0Z42WONKV9',

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
