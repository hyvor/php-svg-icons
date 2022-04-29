<?php
namespace Hyvor\SvgIcons;


class Helper
{

    public static function clearDownloads()
    {
        self::recursiveDelete(Config::getDownloadsFolder());
    }

    public static function clearIcons()
    {
        self::recursiveDelete(Config::getIconsFolder());
    }


    private static function recursiveDelete($str)
    {
        if (is_file($str)) {
            return @unlink($str);
        }
        elseif (is_dir($str)) {
            $scan = glob(rtrim($str,'/').'/*');
            foreach($scan as $path) {
                self::recursiveDelete($path);
            }
            return @rmdir($str);
        }
    }

}