<?php
session_start();
require_once "../models/User.php";

class UserController{

    public function auth(){
        if(isset($_POST['login'])){
            $data['email']= $_POST['email'];
            $result = User::login($data);
            if($result->email === $_POST['email'] && password_verify($_POST['password'],$result->password)){
                $_SESSION['id'] = $result->id;
                $_SESSION['role'] = $result->role;
                $_SESSION['email'] = $result->email;
                $_SESSION['logged'] = true;
                //setcookie('email',$result->email);
                
                header('Location: ../views/home.php');
            }else{
                echo $result;
            }
        }
    }

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

    static public function logout(){
        session_destroy();
    }

    public function getUsers(){
        $users = User::getAll();
        return $users;
    }

    public function getLoggedUser(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
            $user = User::getCurrentUser($data);
            return $user;
        }
    }

    public function updateUser(){
        if(isset($_POST['update'])){
            $data = array(
                'id'=> $_POST['id'],
                'name'=>$_POST['name'],
                'email'=>$_POST['email'],
                'birthday'=>$_POST['birthday'],
            );
            $result = User::update($data);
            if($result == 'ok'){
                header('Location: ../views/home.php');
            }else{
                echo $result;
            }
        }
    }

    public function getCountUsers(){
        $usersCount = User::getUsersNum();
        return $usersCount;
    }

    public function deleteUser(){
        if(isset($_POST['id'])){
            $data['id']= $_POST['id'];
            $result = User::delete($data);
            if($result == 'ok'){
                header('Location: ../views/stats.php');
            }else{
                echo $result;
            }
        }
    }
}


?>