<?php
require_once "../database/DB.php";
require_once "../controllers/CollectionController.php";
class Collection{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM collection');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }

    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO collection (name,artiste,img) values(:name,:artiste,:img)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':artiste',$data['artiste']);
        $stmt->bindParam(':img',$data['img']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }
}

?>