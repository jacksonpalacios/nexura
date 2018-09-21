<?php namespace Controller\User;

use Model\Contracts\ContractsModel;
use Model\User\UserModel;

class UserController
{
    private $user;
    private $contract;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->contract = new ContractsModel();
    }

    public function index(){

        $users = $this->user->getAll();
        $contract = $this->contract;
        require_once(ROOT . 'View\\User\\index.php');
    }

    public function edit($id){
        $user = $this->user->find($id);
        $is_edit = false;

        if($_POST){
            $user = new UserModel();
            $user->id = $_POST['id'];
            $user->login = $_POST['login'];
            $user->name = $_POST['name'];
            $user->age = $_POST['age'];
            $user->email = $_POST['email'];
            $user->description = $_POST['description'];
            $user->gender = $_POST['gender'];
            $is_edit = $this->user->update($user);
        }

        require_once(ROOT . 'View\\User\\edit.php');
    }

    public function add(){
        $user = new UserModel();

        if($_POST){
            $user = new UserModel();
            $user->login = $_POST['login'];
            $user->name = $_POST['name'];
            $user->age = $_POST['age'];
            $user->email = $_POST['email'];
            $user->description = $_POST['description'];
            $user->gender = $_POST['gender'];
            $is_edit = $this->user->add($user);

            header('Location: /');
        }

        require_once(ROOT . 'View\\User\\add.php');
    }


}

?>