# PHP Styles

Inspired by [this article](https://laravel-news.com/sharing-php-cs-fixer-rules-across-projects-and-teams).

My shared PHP style rules for PHP-CS-Fixer.

## Usage

Add the repository block to your `composer.json` file.

```json
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/lucasvscn/php-style"
  }
]

```

Now require the package as a `--dev` dependency.

```sh
composer require lucasvscn/php-style --dev
```


Create a file named `.php-cs-fixer.php` and add the following finder setup for 
a Laravel app.


```php
<?php
 
$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__.'/app',
        __DIR__.'/config',
        __DIR__.'/database',
        __DIR__.'/lang',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);
 
return LucasVscn\styles($finder);
```

Check the docs for [`Symfony\Component\Finder\Finder`](https://symfony.com/doc/current/components/finder.html),
if you need more configuration options.
