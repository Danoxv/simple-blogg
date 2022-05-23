<?php

namespace src\Helpers;

class Functions
{
    /**
     * Strip HTML and PHP tags from a string and
     * convert all applicable characters to HTML entities.
     *
     * Source: @link https://www.oreilly.com/library/view/learning-php-mysql/9781491979075/
     *
     * @param $str
     * @return string
     */
    private static function sanitizeString($str): string
    {
        $str = (string)$str;
        $str = strip_tags($str);
        $str = htmlentities($str);
        $str = trim($str);
        return $str;
    }

    /**
     * Gets a specific external variable by name and filters it as string.
     * @link https://php.net/manual/en/function.filter-input.php
     *
     * @param int $type
     * One of INPUT_GET, INPUT_POST,
     * INPUT_COOKIE, INPUT_SERVER, or
     * INPUT_ENV.
     *
     * @param string $varName
     * Name of a variable to get.
     */
    public static function filterInputString(int $type, string $varName): string
    {
        $input = filter_input($type, $varName, FILTER_SANITIZE_STRING);
        return self::sanitizeString($input);

    }

    /**
     * Get part before GET-params in URI.
     * So from "/page?p1=v1&p2=v2"
     * "/page" was returned.
     *
     * @param string $uri
     * @return string
     */
    public static function uriWithoutGetPart(string $uri): string
    {
        return strtok($uri, '?');
    }

    private static function substr1($string, $start, $length = null)
    {
        return mb_substr($string, $start, $length, 'UTF-8');
    }

    public static function beforeLast($subject, $search)
    {
        if ($search === '') {
            return $subject;
        }

        $pos = mb_strrpos($subject, $search);

        if ($pos === false) {
            return $subject;
        }

        return self::substr1($subject, 0, $pos);
    }

    private function destroy()
    {
        $_SESSION = [];
        setcookie(session_name(), '', time() - 86400, '/'); // subtract 1 day
        session_destroy();
    }
}