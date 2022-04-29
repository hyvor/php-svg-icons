<?php

namespace Hyvor\SvgIcons\Fetcher;

use Hyvor\SvgIcons\IconWriter;

class FontAwesome implements Fetcher
{

    use NpmHelper;

    public function fetch()
    {

        $directory = $this->fromNpm('@fortawesome/fontawesome-free');

        $brands = glob("$directory/svgs/brands/*.svg");
        foreach ($brands as $file) {
            IconWriter::write('fontawesome', $file);
        }

        $regular = glob("$directory/svgs/regular/*.svg");
        foreach ($regular as $file) {
            IconWriter::write('fontawesome', $file, fn ($name) => $name . '-regular');
        }

        $solid = glob("$directory/svgs/solid/*.svg");
        foreach ($solid as $file) {
            IconWriter::write('fontawesome', $file, fn ($name) => $name . '-solid');
        }

    }

}