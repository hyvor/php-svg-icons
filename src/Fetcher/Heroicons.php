<?php
namespace Hyvor\SvgIcons\Fetcher;

use Hyvor\SvgIcons\IconWriter;

class Heroicons implements Fetcher
{

    use NpmHelper;

    public function fetch()
    {
        $directory = $this->fromNpm('heroicons');

        $regular = glob("$directory/24/solid/*.svg");
        foreach ($regular as $file) {
            IconWriter::write('heroicons', $file, fn ($name) => $name . '-solid');
        }

        $solid = glob("$directory/24/outline/*.svg");
        foreach ($solid as $file) {
            IconWriter::write('heroicons', $file, fn ($name) => $name . '-outline');
        }
    }

}