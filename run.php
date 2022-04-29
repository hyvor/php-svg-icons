#!/usr/bin/env php
<?php
include './vendor/autoload.php';

use Hyvor\SvgIcons\Config;
use Hyvor\SvgIcons\Helper;

$libs = Config::getLibs();

Helper::clearDownloads();
Helper::clearIcons();

foreach ($libs as $name => $lib) {

    echo "Fetching $name \n";

    $fetcher = new $lib['fetcher']();
    $fetcher->fetch();

    echo "Completed fetching $name \n";

}

Helper::clearDownloads();