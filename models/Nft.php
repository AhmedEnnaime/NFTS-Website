<?php
require_once "../database/DB.php";
require_once "../controllers/NftController.php";

class Nft{
    
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM nft');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }

    static public function getNft($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM nft WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $nft = $stmt->fetch(PDO::FETCH_OBJ);
            return $nft;
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO nft (name,collection_id,description,img,price) values(:name,:collection_id,:description,:img,:price)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':collection_id',$data['collection_id']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':img',$data['img']);
        $stmt->bindParam(':price',$data['price']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }

    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE nft SET name = :name,collection_id = :collection_id,description = :description,img = :img,price = :price WHERE id = :id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':collection_id',$data['collection_id']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':img',$data['img']);
        $stmt->bindParam(':price',$data['price']);
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
            $stmt = DB::connect()->prepare('DELETE FROM nft WHERE id=:id');
            $stmt->execute(array(":id"=>$id));
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }     
    }

    static public function getSpecialNfts($collection_id){
        $collection_id = $_POST['id'];
        $stmt = DB::connect()->prepare('SELECT * FROM nft where collection_id = '.$collection_id.'');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }

}
?>