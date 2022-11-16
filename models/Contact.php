<?php

require_once "../database/DB.php";
require_once "../controllers/ContactController.php";

class Contact{
    
    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO contact (firstname,lastname,email,phone,message) values(:firstname,:lastname,:email,:phone,:message)');
        $stmt->bindParam(':firstname',$data['firstname']);
        $stmt->bindParam(':lastname',$data['lastname']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':phone',$data['phone']);
        $stmt->bindParam(':message',$data['message']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }
}


?>