<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => 'https://docs.dinomatic.com.test/',
    'production' => false,
    'siteName' => 'DinoMatic Docs',
    'siteDescription' => 'WordPress Themes and Plugins',

    'php_version' => '7.4',
    'wp_min_version' => '5.0',
    'wp_rec_version' => '6.7',

    'navigation' => require_once ('navigation.php'),

    'versions' => [
        'akurai' => '4.0.2',
        'spinoko' => '2.7.3',
        'sikika' => '1.0.2',
        'kemoku' => '1.6.9',
        'sibet' => '2.1.0',
        'dinodds' => '1.4.2',
        'akurai-geo' => '1.2.0',
        'spinoko-geo' => '1.0.0',
        'nonaki' => '1.0.4',
        'hello-cookie' => '1.0.2',
    ],

    // helpers
    'isActive' => fn ($page, $path) => Str::endsWith(trimPath($page->getPath()), trimPath($path)),

    'isActiveParent' => function($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },

    'url' => fn ($page, $path) => Str::startsWith($path, 'http') ? $path : '/'.trimPath($path),

    'product' => fn ($page) => $paths = explode('/', $page->getPath())[2],

    'version' => fn ($page) => $page->versions[$page->product($page)],
];
