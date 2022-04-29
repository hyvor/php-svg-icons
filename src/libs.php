<?php

use Hyvor\SvgIcons\Fetcher\Bootstrap;
use Hyvor\SvgIcons\Fetcher\CssGg;
use Hyvor\SvgIcons\Fetcher\FontAwesome;
use Hyvor\SvgIcons\Fetcher\Heroicons;
use Hyvor\SvgIcons\Fetcher\Ionicons;
use Hyvor\SvgIcons\Fetcher\Octicons;

return [

    'bootstrap' => [
        'fetcher' => Bootstrap::class,
        'url' => 'https://github.com/twbs/icons',
        'license' => 'MIT',
        'licenseUrl' => 'https://github.com/twbs/icons/blob/main/LICENSE.md'
    ],

    'fontawesome' => [
        'fetcher' => FontAwesome::class,
        'url' => 'https://github.com/FortAwesome/Font-Awesome',
        'license' => 'Font Awesome Free License',
        'licenceUrl' => 'https://github.com/FortAwesome/Font-Awesome/blob/master/LICENSE.txt',
    ],

    'ionicons' => [
        'fetcher' => Ionicons::class,
        'url' => 'https://github.com/ionic-team/ionicons',
        'license' => 'MIT',
        'licenseUrl' => 'https://github.com/ionic-team/ionicons/blob/main/LICENSE'
    ],

    'heroicons' => [
        'fetcher' => Heroicons::class,
        'url' => 'https://heroicons.com/',
        'license' => 'MIT',
        'licenseUrl' => 'https://github.com/tailwindlabs/heroicons/blob/master/LICENSE'
    ],

    'octicons' => [
        'fetcher' => Octicons::class,
        'url' => 'https://primer.github.io/octicons',
        'license' => 'MIT',
        'licenseUrl' => 'https://github.com/primer/octicons/blob/main/LICENSE'
    ],

    'css.gg' => [
        'fetcher' => CssGg::class,
        'url' => 'https://css.gg/',
        'license' => 'MIT',
        'licenseUrl' => 'https://github.com/astrit/css.gg/blob/master/LICENSE'
    ],

];