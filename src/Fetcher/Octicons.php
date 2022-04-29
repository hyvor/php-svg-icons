<?php

namespace Hyvor\SvgIcons\Fetcher;

use Hyvor\SvgIcons\IconWriter;

class Octicons implements Fetcher
{
    use NpmHelper;

    public function fetch()
    {

        $directory = $this->fromNpm('octicons');
        $files = glob("$directory/build/svg/*.svg");

        /**
         * $files contains both -16 and -24 versions
         * Drop -24 version
         * There's also -12 version, but it does not have a variant
         */
        foreach ($files as $file) {
            if (str_contains($file, '-24'))
                continue;
            IconWriter::write('octicons', $file, function ($name) {
                return preg_replace('/\-\d{2}$/', '', $name);
            });
        }

    }

}