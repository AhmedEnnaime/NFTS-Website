<?php
require_once "../models/User.php";

class UserController{

    public function signup(){
        if(isset($_POST['add'])){
            $options = [
                    'cost'=>12
                ];
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
            $data = array(
                'name'=>$_POST['name'],
                'email'=>$_POST['email'],
                'password'=>$password,
                'birthday'=>$_POST['birthday'],
                'role'=>1,
            );
            $result = User::add($data);
            if($result == 'ok'){     
                header('Location: ../views/login.php');
            }else{
                echo $result;
            }
        }
    }
}


?>