# barnabywalters/silex-starter

My skeleton for PHP+Silex applications. Small, flat, predictable, minimal, flexible. Based very much on fabpot’s silex skeleton.

From zero to hello-world:

    > curl -Ss https://getcomposer.org/installer | php
    > ./composer.phar create-project barnabywalters/silex-starter
    > ./serve
    > ./open

## Back-end

A basic Silex app is created with a URL generation provider and a basic pure-PHP template rendering provider which can be used like this:

```php
<?php

$app['render']('template.html', [
    'templateContextVariable' => 'Hello!'
], $pad);
```

The first argument is the template path, relative to `templates/`, sans the `.php`. `$pad` is true by default, and wraps the content of the template with rendered output of `templates/header.html.php` and `templates/footer.html.php`.

All application-specific code goes in `src/`. Functions (which should make up the mainstay of your code) go in flat, sensibly named files in this directory — add their paths to composer.json to autoload them. `src/` is also the root for any PSR-0 class-based autoloading you may wish to do.

`hacks.php` is provided as a location for temporary, cludgy code. It is an invitation to both be explicit about the fact that something is cludgy, and an invitation to fix it. A good place to look in those times when you have 30 minutes and want to fix something small.

## Front-end

A minimal RequireJS “application” is provided, with bean for cross-browser event handling and my own http.js, a [minimal abstraction over XMLHttpRequest](http://waterpigs.co.uk/articles/a-minimal-javascript-http-abstraction/).

## Command Line

Various conveniences are provided.

* `./serve` starts the built-in PHP webserver. Alter this file to use the port of your choice.
* `./open` opens the above in your default browser. Ditto.
* `./console` is the entry-point for running tasks defined in `src/console.php`. By default there is one:
* `./console shell` starts a PHP interpreter with `$app` available for quick scripting

To define new console commands, add them to `src/console.php`.

## Testing

PHPUnit is used for testing. The stub of a functional test suite is provided, with a bootstrapping function for creating an application object tailor-made for testing.

To run the tests, do the usual:

    > ./vendor/bin/phpunit

You may also wish to create an alias or shortcut for this if it becomes too unwieldy and you aren’t using an automatic test runner.
