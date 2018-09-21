<?php namespace Model\User;

use App\User;
use Model\MasterModel;

class UserModel extends MasterModel
{

    public $id;
    public $login;
    public $password;
    public $name;
    public $age;
    public $email;
    public $description;
    public $gender;
    public $imgProfile;

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll(): array
    {
        $sql = 'SELECT * FROM user';
        return parent::queryAll($sql, []);
    }

    public function find($id): UserModel
    {
        $sql = 'SELECT * FROM user WHERE id=:id';
        $userAux = parent::querySingle($sql, ['id' => $id]);

        $user = new UserModel();
        if ($userAux):
            $user->id = $userAux->id;
            $user->login = $userAux->login;
            $user->name = $userAux->name;
            $user->age = $userAux->age;
            $user->email = $userAux->email;
            $user->description = $userAux->description;
            $user->gender = $userAux->gender;
        endif;

        return $user;
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM user WHERE id=:id';
        return parent::query($sql, ['id' => $id]);
    }

    public function add(UserModel $user)
    {
        $sql = 'INSERT INTO user (login, name, age, email, description, gender) VALUES (:login, :name, :age, :email, :description, :gender)';
        $params = [
            'login' => $user->login,
            'name' => $user->name,
            'age' => $user->age,
            'email' => $user->email,
            'description' => $user->description,
            'gender' => $user->gender
        ];

        return parent::query($sql, $params);
    }

    public function update(UserModel $user)
    {
        $sql = 'UPDATE user SET login=:login, name=:name, age=:age, email=:email, description=:description, gender=:gender WHERE id=:id';
        $params = [
            'id' => $user->id,
            'login' => $user->login,
            'name' => $user->name,
            'age' => $user->age,
            'email' => $user->email,
            'description' => $user->description,
            'gender' => $user->gender
        ];

        return parent::query($sql, $params);
    }

    /*
    public function all()
    {
        $sql = 'SELECT * FROM user';
        $resultQuery = parent::select($sql);

        $arrayUsers = [];

        while ($row = $resultQuery->fetch(PDO::FETCH_ASSOC)) {
            $user = new UserModel();
            $user->id = $row['id'];
            $user->login = $row['login'];
            $user->name = $row['name'];
            $user->email = $row['email'];
            $user->age = $row['age'];
            $user->description = $row['description'];
            $user->gender = $row['gender'];

            array_push($arrayUsers,$user);
        }
        return $arrayUsers;
    }

    public function findById($id){
        $sql = 'SELECT * FROM user WHERE id='.$id;
        $resultQuery = parent::select($sql);

        $arrayUsers = [];

        while ($row = $resultQuery->fetch(\PDO::FETCH_ASSOC)) {
            $user = new UserModel();
            $user->id = $row['id'];
            $user->login = $row['login'];
            $user->name = $row['name'];
            $user->email = $row['email'];
            $user->age = $row['age'];
            $user->description = $row['description'];
            $user->gender = $row['gender'];

            array_push($arrayUsers,$user);
        }
        return $arrayUsers;
    }

    public function insert($object = null)
    {
        parent::insert($object);
    }

    public function update($object)
    {
        parent::update($object);
    }
    */
}

?>