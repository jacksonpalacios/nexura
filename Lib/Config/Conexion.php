<?php namespace Lib\Config;

use PDO;

class Conexion{

    private static $user = "root";
    private static $password = "";
    private static $name_db = "nexura";
    private static $db;

    public static function getConnection(){

        if(empty(self::$db)){
            $pdo = new PDO(
                'mysql:host=localhost;dbname='.self::$name_db.';charset=utf8',
                self::$user,
                self::$password);

            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            self::$db = $pdo;
        }

        return self::$db;
    }

}

?>
