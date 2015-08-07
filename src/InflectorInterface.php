<?php
/*
 * This file is part of the ws-libraries package.
 *
 * (c) Benjamin Georgeault <github@wedgesama.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WS\Libraries\Inflector;

/**
 * InflectorInterface
 *
 * @author Benjamin Georgeault <github@wedgesama.fr>
 */
interface InflectorInterface
{
    /**
     * Pluralizes a word.
     *
     * @param string $word
     *
     * @return string
     */
    public static function pluralize($word);

    /**
     * Singularize a word.
     *
     * @param string $word
     *
     * @return string
     */
    public static function singularize($word);

    /**
     * Converts a string into the format for a class name.
     *
     * @param string $string
     *
     * @return string
     */
    public static function classify($string);

    /**
     * Camelize a string.
     *
     * @param string $string
     *
     * @return string
     */
    public static function camelize($string);

    /**
     * Underscore a string.
     *
     * @param string $string
     *
     * @return string
     */
    public static function underscore($string);
}
