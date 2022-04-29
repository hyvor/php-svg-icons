<?php
namespace Hyvor\SvgIcons\Fetcher;

use Hyvor\SvgIcons\IconWriter;

class Bootstrap implements Fetcher
{

    use NpmHelper;

    public function fetch()
    {
        $directory = $this->fromNpm('bootstrap-icons');
        $files = glob("$directory/icons/*.svg");

        foreach ($files as $file) {
            IconWriter::write('bootstrap', $file);
        }
    }

}