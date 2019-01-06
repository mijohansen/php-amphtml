<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-01-06
 * Time: 12:37
 */

namespace AmpHTML;

class Utils {

    public static function startsWith($string, $prefix) {
        return substr($string, 0, strlen($prefix)) == $prefix;
    }

    public static function allAfter($string, $char) {
        $pos = strpos($string, $char);
        if($pos!==false){
            $pos = $pos + strlen($char);
        }
        return substr($string, $pos);
    }
}