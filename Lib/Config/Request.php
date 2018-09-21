<?php
/**
 * Created by PhpStorm.
 * User: Jackson
 * Date: 11/09/2018
 * Time: 8:50 AM
 */

namespace Lib\Config;


class Request
{
    private $controller;
    private $method;
    private $args;

    public function __construct()
    {

        $the_request = null;
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                $the_request = &$_GET;
                break;
            case 'POST':
                $the_request = &$_POST;
                //return $_POST;
                break;
            default:
        }



        if (isset($the_request)) {
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            $url = array_filter($url);

            if ($url[0] == 'index.php') {
                $this->controller = 'user';
                $this->method = 'index';
            } else {
                $this->controller = strtolower(array_shift($url));
                $this->method = strtolower(array_shift($url));
            }

            if (!$this->method) {
                $this->method = 'index';
            }
            $this->args = $url;
        }
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return array
     */
    public function getArgs(): array
    {
        return $this->args;
    }


}