<?php namespace Model;

use Lib\Config\Conexion;
use Exception;

class MasterModel extends Conexion
{

    private $pdo;

    public function __construct()
    {
        $this->pdo = Conexion::getConnection();
    }

    //Ejecuta SELECT * FROM ?
    protected function queryAll($query, $params): array
    {
        $result = null;
        try {
            $stm = $this->pdo->prepare($query);
            $stm->execute($params);

            $result = $stm->fetchAll();
        } catch (Exception $e) {

        }
        return $result;
    }

    //Ejecuta SELECT * FROM ? WHERE id = ?
    protected function querySingle($query, $params)
    {
        $result = null;

        try {
            $stm = $this->pdo->prepare($query);
            $stm->execute($params);
            $result = $stm->fetch();
        } catch (Exception $e) {

        }
        return $result;
    }

    //Ejecuta DELETE, INSERT y UPDATE - FROM ? WHERE id = ?
    protected function query($query, $params)
    {
        $result = false;

        try {
            $stm = $this->pdo->prepare($query);
            $stm->execute($params);
            $result = true;
        } catch (Exception $e) {

        }
        return $result;
    }




}

?>