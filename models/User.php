<?php
require_once "../database/DB.php";
require_once "../controllers/UserController.php";

class User{

    static public function login($data){
        $email = $data['email'];
        $role = $data['role'];
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM user WHERE email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email" => $email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO user (name,email,password,birthday,role) values(:name,:email,:password,:birthday,:role)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':password',$data['password']);
        $stmt->bindParam(':birthday',$data['birthday']);
        $stmt->bindParam('role',$data['role'],PDO::PARAM_INT);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;

    }
}

?>
