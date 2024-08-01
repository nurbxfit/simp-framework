<?php

namespace Utils;

class CaseConverter {

     //Convert string to studly_case
     public static function studlyCase(string $str): string{
        return str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $str)));
    }

    //convert string to camelCase
    public static function camelCase(string $str) : string{
        return lcfirst($self::studlyCase($str));
    }
}