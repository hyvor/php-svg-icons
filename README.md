## How to use

```bash
composer require hyvor/php-svg-icons
```

```php
$icon = new Icon($library, $iconName);
$svg = $icon->getSvg($width, $height);
```

```php
$icon = new Icon('bootstrap', '123');

$icon->getSvg(); // 16x16
$icon->getSvg(20); // 20x20
$icon->getSvg(20, 25); // 20x25
```


## How to add a new icon library

* Create `icons/{library_name}` folder with `.gitkeep` in it
* Add configuration to `src/libs.php`
* Create a fetcher in `src/Fetcher/{LibraryName}.php`. See other fetcher to see how it works

Use `php run.php` to run all fetchers and update icons.