<?php

namespace Hyvor\SvgIcons\Fetcher;

use Hyvor\SvgIcons\IconWriter;

class Ionicons implements Fetcher
{

    use NpmHelper;

    public function fetch()
    {

        $directory = $this->fromNpm('ionicons');
        $files = glob("$directory/dist/svg/*.svg");

        foreach ($files as $file) {
            IconWriter::write('ionicons', $file);
        }

    }

}