<?php
namespace Hyvor\SvgIcons;

class Config
{

    public static function getLibs() : array
    {
        return include(__DIR__ . '/libs.php');
    }

    public static function getDownloadsFolder() : string
    {
        return __DIR__ . '/../downloads';
    }

    public static function getIconsFolder() : string
    {
        return __DIR__ . '/../icons';
    }

}