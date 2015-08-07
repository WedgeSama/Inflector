Inflector Library
=================

PHP >= 5.3.3

A library to make some operations on particular strings and words.

Requirements
------------

* PHP >= 5.3.3

Installation
------------

Can be installed with Composer:

```
$ composer require ws/inflector
```

Usage
-----

```php
use WS\Libraries\Inflector\Inflector;

echo Inflector::classify('foo bar'); // FooBar
echo Inflector::camelize('foo bar'); // fooBar
echo Inflector::underscore('foo bar'); // foo_bar
```

TODO
----
* Inflector::pluralize
* Inflector::singularize

License
-------

This library is release under [MIT license](LICENSE).
