<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 11/09/2018
 * Time: 02:27 PM
 */

namespace Model\Contracts;


use Model\MasterModel;

class ContractsModel extends MasterModel
{
    public $id;
    public $code; //Número de contrato
    public $object_contract; //Objeto del contrato
    public $estimate_budget; // Presupuesto
    public $end_date; //Fecha estimida de Finalización
    public $start_date; //Fecha publicación
    public $type_contract; //Tipo contrato
    public $secretary;

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll(): array
    {
        $sql = 'SELECT * FROM contracts';
        return parent::queryAll($sql, []);
    }

    public function add(ContractsModel $contract)
    {
        $sql = 'INSERT 
                INTO contracts(code, object_contract, estimate_budget, end_date, start_date, type_contract, secretary) 
                VALUES (:code, :object_contract, :estimate_budget, :end_date, :start_date, :type_contract, :secretary)';
        $params = [
            'code' => $contract->code,
            'object_contract' => $contract->object_contract,
            'estimate_budget' => (double)$contract->estimate_budget,
            'end_date' => $contract->end_date,
            'start_date' => $contract->start_date,
            'type_contract' => json_encode($contract->type_contract),
            'secretary' => $contract->secretary
        ];

        return parent::query($sql, $params);
    }

}