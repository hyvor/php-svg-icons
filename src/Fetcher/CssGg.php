<?php
namespace Hyvor\SvgIcons\Fetcher;

use Hyvor\SvgIcons\IconWriter;

class CssGg implements Fetcher
{

    use NpmHelper;

    public function fetch()
    {
        $directory = $this->fromNpm('css.gg');
        $files = glob("$directory/icons/svg/*.svg");

        foreach ($files as $file) {
            IconWriter::write('css.gg', $file);
        }
    }

}