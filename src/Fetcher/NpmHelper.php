<?php

namespace Hyvor\SvgIcons\Fetcher;

use Hyvor\SvgIcons\Config;
use PharData;

trait NpmHelper
{

    /**
     * @param string $packageName
     * @param array|string|null $filesToExtract
     * @return string Directory name of the extracted package
     */
    private function fromNpm(string $packageName, array|string|null $filesToExtract = null) : string
    {

        $packageInfo = file_get_contents("https://registry.npmjs.org/$packageName/");
        $packageInfo = json_decode($packageInfo, true);

        $latestVersion = $packageInfo['dist-tags']['latest'];

        $tarball = file_get_contents($packageInfo['versions'][$latestVersion]['dist']['tarball']);

        $downloadsFolder = Config::getDownloadsFolder();
        $packageName = basename($packageName);
        $tarPath = $downloadsFolder . "/$packageName.tar.gz";

        file_put_contents($tarPath, $tarball);

        $p = new PharData($tarPath);
        $p->extractTo($downloadsFolder . "/$packageName", $filesToExtract);

        // In NPM, /package folder is the root
        return $downloadsFolder . "/$packageName/package";

    }

}