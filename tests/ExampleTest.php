<?php
use Hyvor\SvgIcons\Icon;


it('adds width 16 and height 16', function () {

    $icon = new Icon('bootstrap', '123');
    $svg = $icon->getSvg();

    $this->assertStringContainsString('width="16"', $svg);
    $this->assertStringContainsString('height="16"', $svg);

});

it('adds correct width/height', function() {


    $icon = new Icon('bootstrap', '123');
    $svg = $icon->getSvg(20, 25);

    $this->assertStringContainsString('width="20"', $svg);
    $this->assertStringContainsString('height="25"', $svg);

});


it('defaults height to width when height is missing', function() {


    $icon = new Icon('bootstrap', '123');
    $svg = $icon->getSvg(20);

    $this->assertStringContainsString('width="20"', $svg);
    $this->assertStringContainsString('height="20"', $svg);

});

it('works when the SVG does not have width/height props', function() {

    // FA does not have width/height attrs
    $icon = new Icon('fontawesome', '1-solid');
    $svg = $icon->getSvg(20);

    $this->assertStringContainsString('width="20"', $svg);
    $this->assertStringContainsString('height="20"', $svg);

});