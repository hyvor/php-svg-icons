## How to use

Installation:

```bash
composer require hyvor/php-svg-icons
```

Format:

```php
$icon = new Icon($library, $iconName);
$svg = $icon->getSvg($width, $height);
```

Example:

```php
$icon = new Icon('bootstrap', '123');

$icon->getSvg(); // 16x16
$icon->getSvg(20); // 20x20
$icon->getSvg(20, 25); // 20x25
```


## Contributing

### How to add a new icon library

* Create `icons/{library_name}` folder with a `.gitkeep` file in it
* Add configuration to `src/libs.php`
* Create a fetcher in `src/Fetcher/{LibraryName}.php`. See other fetchers to see how it works. Usually, you have to download the SVG icons from somewhere and add them to the icons folders.

Use `php run.php` to run all fetchers and update icons.