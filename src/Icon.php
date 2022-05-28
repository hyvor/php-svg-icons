<?php
namespace Hyvor\SvgIcons;

use Hyvor\SvgIcons\Exception\IconNotFoundException;
use Hyvor\SvgIcons\Exception\InvalidLibraryException;
use SimpleXMLElement;

class Icon
{
    private string $svg;

    public function __construct(
        string $library,
        string $iconName
    )
    {

        $libs = Config::getLibs();

        if (!array_key_exists($library, $libs)) {
            throw new InvalidLibraryException();
        }

        $path = Config::getIconsFolder() . "/$library/$iconName.svg";

        if (!file_exists($path)) {
            throw new IconNotFoundException();
        }

        $this->svg = file_get_contents($path);

    }

    public function getSvg(int $width = null, int $height = null)
    {

        if ($width === null && $height === null) {
            $width = 16;
            $height = 16;
        }

        if ($width !== null && $height === null) {
            $height = $width;
        }

        $svg = new SimpleXMLElement($this->svg);

        self::updateAttr($svg, 'width', $width);
        self::updateAttr($svg, 'height', $height);
        self::updateAttr($svg, 'fill', 'currentColor');
        self::updateAttr($svg, 'style', 'vertical-align:middle');

        return $svg->asXML();

    }

    private static function updateAttr(SimpleXMLElement $node, string $attr, mixed $value)
    {

        $attributes = $node->attributes();
        if (isset($attributes->$attr)) {
            $attributes->$attr = $value;
        } else {
            $attributes->addAttribute($attr, $value);
        }

    }

}