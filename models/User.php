<?php
require_once "../database/DB.php";
require_once "../controllers/UserController.php";

class User{

    static public function login($data){
        $email = $data['email'];
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

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM user');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }

    static public function getCurrentUser($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM user WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }

    }

    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE user SET name = :name,email = :email,birthday = :birthday WHERE id = :id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':birthday',$data['birthday']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }

    static public function getUsersNum(){
        try{
            $query = 'SELECT COUNT(*) FROM user where role = 1;';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            $nft = $stmt->fetch(PDO::FETCH_OBJ);
            return $nft;
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }

    }

    static public function delete($data){
        $id = $data['id'];
        try{
            $query = 'DELETE FROM user WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

}

?>
