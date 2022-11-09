<?php

class User{

    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO user (name,email,password,birthday) values(:name,:email,:password,:birthday)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':password',$data['password']);
        $stmt->bindParam(':birthday',$data['birthday']);
        //$stmt->bindParam('role',$data['role'],PDO::PARAM_INT);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;

    }
}

?>
