<?php
/**
 * Created by PhpStorm.
 * User: Jackson
 * Date: 11/09/2018
 * Time: 8:50 AM
 */

namespace Lib\Config;


class Router
{
    public static function run(Request $request)
    {
        $directory = $request->getController();
        $controller = $request->getController() . 'Controller';
        $url = ROOT . 'Controller\\' . $directory . DS . $controller . '.php';

        $method = $request->getMethod();
        $args = $request->getArgs();

        if (is_readable($url)) {
            require_once $url;
            $nameController = 'Controller\\' . $directory . '\\' . $controller;
            $controller = new $nameController();

            if (count($args) == 0) {
                call_user_func(array($controller, $method));
            } else {
                call_user_func_array(array($controller, $method), $args);
            }
        }
        /*
        $url = ROOT . 'View\\' . $directory . DS . $method . '.php';
        if (is_readable($url)) {
            require_once $url;
        }else{
            echo 'No se encontró la ruta';
        }
        */
    }
}