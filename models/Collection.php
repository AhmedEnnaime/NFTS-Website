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

    static public function getCollection($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM collection WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $collection = $stmt->fetch(PDO::FETCH_OBJ);
            return $collection;
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }

    }

    static public function add($data){
        //$uplod_dir = '../views/images/uploads';
        $file = $_FILES['img']['name'];
        $folder = '../views/images/uploads/' . $file;
        $fileTmp = $_FILES['img']['tmp_name'];
        //$filename = basename($_FILES['img']['name']); 
        //$target_dir =  $_SERVER['DOCUMENT_ROOT'] . "/YouCode/NFT/views/images/uploads/" . $filename;
        $stmt = DB::connect()->prepare('INSERT INTO collection (name,artiste,img) values(:name,:artiste,:img)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':artiste',$data['artiste']);
        $stmt->bindParam(':img',$data['img']);
       
        //if(file_exists($target_dir)){
          //  echo 'successefuly';
        //}
        if($stmt->execute()){
            //echo 'succed';
            move_uploaded_file($fileTmp,$folder);
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }

    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE collection SET name = :name,artiste = :artiste,img = :img WHERE id = :id');
        $stmt->bindParam(':id',$data['id']);
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

    static public function delete($data){
        $id = $data['id'];
        try{
            $query = 'DELETE FROM collection WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    static public function celebrityCollection(){
        try{
            $query = 'SELECT collection.id,collection.name,collection.artiste,collection.img,COUNT(nft.collection_id) as TotalRepeat FROM collection INNER JOIN nft WHERE collection.id = nft.collection_id GROUP By nft.collection_id ORDER BY TotalRepeat DESC;';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }


}

?>