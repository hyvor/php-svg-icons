<?php

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "uses()" function to bind a different classes or traits.
|
*/

// uses(Tests\TestCase::class)->in('Feature');

use Hyvor\SvgIcons\Config;

function recursiveDelete($str) {
    if (is_file($str)) {
        return @unlink($str);
    }
    elseif (is_dir($str)) {
        $scan = glob(rtrim($str,'/').'/*');
        foreach($scan as $path) {
            recursiveDelete($path);
        }
        return @rmdir($str);
    }
}

uses()->beforeEach(function() {

    $downloadsFolder = Config::getDownloadsFolder();
    recursiveDelete($downloadsFolder);

})->in(__DIR__);