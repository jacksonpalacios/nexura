<?php

/*
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $the_request = &$_GET;
        break;
    case 'POST':
        $the_request = &$_POST;
        break;
    default:
}

*/

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('URL', 'http://nexura.local');

require_once 'Lib/Config/Autoload.php';
Lib\Config\Autoload::run();

\Lib\Config\Router::run(new \Lib\Config\Request());

/*

$method = $the_request["f"];
$name_file = $the_request["mod"];
$controller = $the_request["mod"].'Controller';
$url = './controller/'.$name_file.'/'.$controller.'.php';


function autoload($clase) {
    include $clase.'.php';
}
spl_autoload_register(function($clase){
    $url = str_replace("\\", "/", $clase).'.php';
    if(is_readable($url)){
        require_once($url);
    }else{
        echo "El archivo no existe";
    }

});


if(file_exists($url)){
    //include_once($url);
    //$user = new Controller\User\$controller();
    $user = new Controller\User\UserController();
    if(method_exists($user, $method)){
        if(isset($the_request["id"])){
            $user->$method($the_request["id"]);
        }else{
            $user->$method();
        }

    }else{
        echo 'Método no existe';
    }
    
}else{
    echo "Controlador no existe";
}
*/

?>