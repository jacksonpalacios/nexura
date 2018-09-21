<?php

namespace Controller\Contracts;

use Model\Contracts\ContractsModel;

class ContractsController
{

    private $contracts;

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        $this->contracts = new ContractsModel();

    }

    public function index()
    {
        $contracts = $this->contracts->getAll();

        require_once(ROOT . 'View\\Contracts\\index.php');
    }

    public function add()
    {
        $is_save = false;


        if ($_POST) {

            $contract = new ContractsModel();

            $contract->code = $_POST['code'];
            $contract->object_contract = $_POST['object_contract'];
            $contract->estimate_budget = $_POST['estimate_budget'];
            $contract->end_date = $_POST['end_date'];
            $contract->start_date = $_POST['start_date'];
            $contract->type_contract = isset($_POST['type_contract'])?$_POST['type_contract']:[];
            $contract->secretary = $_POST['secretary'];
            $is_save = $this->contracts->add($contract);
        }


        echo json_encode($is_save);

    }


}