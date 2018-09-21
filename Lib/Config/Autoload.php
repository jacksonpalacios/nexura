<?php
/**
 * Created by PhpStorm.
 * User: Jackson
 * Date: 11/09/2018
 * Time: 8:34 AM
 */

namespace Lib\Config;


class Autoload
{
    public static function run()
    {
        spl_autoload_register(function ($clase) {
            $url = str_replace("\\", "/", $clase) . '.php';
            if (is_readable($url)) {
                require_once($url);
            } else {
                echo "El archivo no existe";
            }

        });
    }

}