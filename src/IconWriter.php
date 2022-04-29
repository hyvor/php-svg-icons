<?php
namespace Hyvor\SvgIcons;

class IconWriter
{

    public static function write(string $lib, string $fileName, callable $updater = null)
    {
        $iconName = basename($fileName, '.svg');

        $folder = Config::getIconsFolder() . "/$lib";
        $iconName = str_replace('_', '-', $iconName);

        /**
         * some icons have multiple types (regular, solid, etc.)
         */
        if ($updater !== null) {
            $iconName = $updater($iconName);
        }

        $iconName .= '.svg';

        file_put_contents("$folder/$iconName", file_get_contents($fileName));
    }

}