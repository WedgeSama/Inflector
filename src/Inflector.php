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
 * Inflector
 *
 * @author Benjamin Georgeault <github@wedgesama.fr>
 */
class Inflector implements InflectorInterface
{
    /**
     * {@inheritdoc}
     */
    public static function pluralize($word)
    {
        // TODO
        return $word;
    }

    /**
     * {@inheritdoc}
     */
    public static function singularize($word)
    {
        // TODO
        return $word;
    }

    /**
     * {@inheritdoc}
     */
    public static function classify($string)
    {
        return str_replace(" ", "", ucwords(strtr($string, array('_' => ' ', '-' => ' ', '.' => ' ', '\\' => '_ ', '/' => '_ '))));
    }

    /**
     * {@inheritdoc}
     */
    public static function camelize($string)
    {
        return lcfirst(str_replace("_", "", self::classify($string)));
    }

    /**
     * {@inheritdoc}
     */
    public static function underscore($string)
    {
        return strtolower(preg_replace(array('#([A-Z]+)([A-Z][a-z])#', '#([a-z\d])([A-Z])#', '#\s+#', '#[-\\\\/]+#'), array('\\1_\\2', '\\1_\\2', '_', '_'), $string));
    }
}
