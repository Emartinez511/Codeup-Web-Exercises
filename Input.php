<?php
class InvalidNameException extends Exception { }
class EmptyNameException extends InvalidNameException { }
class Input
{
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    public static function get($key, $default = null)
    {
        return self::has($key) ? $_REQUEST[$key] : null;
    }

    public static function getString($key, $min = 2, $max = 200)

    {
        $string = self::get($key);
        if (!is_string($string)) {
            throw new InvalidNameException("$string must be a string!");
        }
        if ($string == null){
            throw new OutOfRangeException("No value found in $key.");
        }
        if (is_numeric($string)){
            throw new DomainException("Value in $key must be a string not a number.");
        }
        if ((strlen($string) < $min) || (strlen($string) > $max))
        {
            throw new LengthException("min length is $min and max length is $max!");
        }

        return $string;
    }
    public static function getNumber($key, $min = 2, $max = 50)
    {
        $number = self::get($key);
        if ($number == null){
            throw new OutOfRangeException("No value found in $key.");
        }
        if (!is_numeric($number)){
            throw new DomainException("Value in $key is not a number.");
        }
        if (!is_numeric($min) && !is_numeric($max))
        {
            throw new InvalidArgumentException("$min and $max must be a number!");
        }
        if ((strlen($number) < $min) || (strlen($number) > $max))
        {
            throw new RangeException("number min length is $min and max length is $max!");
        }
        $numberHasDecimal = strpos($number, '.') !== false;
        return $numberHasDecimal ? (double) $number : (int) $number;
    }

// getDate($key)  you would use strtotime($key) then pass to construct ??

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
