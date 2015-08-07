<?php
/*
 * This file is part of the ws-libraries package.
 *
 * (c) Benjamin Georgeault <github@wedgesama.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WS\Libraries\Inflector\Tests;

use WS\Libraries\Inflector\Inflector;

/**
 * InflectorTest
 *
 * @author Benjamin Georgeault <github@wedgesama.fr>
 */
class InflectorTest extends \PHPUnit_Framework_TestCase
{
    public function providePluralize()
    {
        return array(
            // TODO
            array('todo', 'todo'),
        );
    }

    /**
     * @dataProvider providePluralize
     */
    public function testPluralize($word, $expected)
    {
        $this->assertSame($expected, Inflector::pluralize($word));
    }

    public function provideSingularize()
    {
        return array(
            // TODO
            array('todo', 'todo'),
        );
    }

    /**
     * @dataProvider provideSingularize
     */
    public function testSingularize($word, $expected)
    {
        $this->assertSame($expected, Inflector::singularize($word));
    }

    public function provideClassify()
    {
        return array(
            array('foo_bar', 'FooBar'),
            array('foo bar', 'FooBar'),
            array('foo      bar', 'FooBar'),
            array('foo.bar', 'FooBar'),
            array('foo-bar', 'FooBar'),
            array('foo\\bar', 'Foo_Bar'),
            array('foo/bar', 'Foo_Bar'),
        );
    }

    /**
     * @dataProvider provideClassify
     */
    public function testClassify($string, $expected)
    {
        $this->assertSame($expected, Inflector::classify($string));
    }

    public function provideCamelize()
    {
        return array(
            array('foo_bar', 'fooBar'),
            array('foo bar', 'fooBar'),
            array('foo      bar', 'fooBar'),
            array('foo.bar', 'fooBar'),
            array('foo-bar', 'fooBar'),
            array('foo\\bar', 'fooBar'),
            array('foo/bar', 'fooBar'),
        );
    }

    /**
     * @dataProvider provideCamelize
     */
    public function testCamelize($string, $expected)
    {
        $this->assertSame($expected, Inflector::camelize($string));
    }

    public function provideUnderscore()
    {
        return array(
            array('foo_bar', 'foo_bar'),
            array('foo bar', 'foo_bar'),
            array('foo      bar', 'foo_bar'),
            array('foo-bar', 'foo_bar'),
            array('foo\\bar', 'foo_bar'),
            array('foo/bar', 'foo_bar'),
        );
    }

    /**
     * @dataProvider provideUnderscore
     */
    public function testUnderscore($string, $expected)
    {
        $this->assertSame($expected, Inflector::underscore($string));
    }
}
