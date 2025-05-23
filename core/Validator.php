<?php

class Validator
{

    public static function string ($value,$min = 1 ,$max = INF){
        return strlen(trim($value)) >= $min && strlen(trim($value)) <= $max;
    }






    // ---------------------------------------------

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function url($value)
    {
        return filter_var($value, FILTER_VALIDATE_URL);
    }

    public static function number($value ,$min = 1 ,$max = INF)
    {
        $number = floatval($value);
        return $number >= $min && $number <= $max;
    }

    public static function greaterThan(int $value, int $greaterThan): bool
    {
        return $value > $greaterThan;
    }


}
