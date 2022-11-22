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
        $file = $_FILES['img']['name'];
        $folder = '../views/images/uploads/' . $file;
        $fileTmp = $_FILES['img']['tmp_name'];
        $stmt = DB::connect()->prepare('INSERT INTO nft (name,collection_id,description,img,price,user_id) values(:name,:collection_id,:description,:img,:price,:user_id)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':collection_id',$data['collection_id']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':img',$data['img']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':user_id',$data['user_id']);
        if($stmt->execute()){
            move_uploaded_file($fileTmp,$folder);
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
    }

    static public function update($data){
        $file = $_FILES['img']['name'];
        $folder = '../views/images/uploads/' . $file;
        $fileTmp = $_FILES['img']['tmp_name'];
        $stmt = DB::connect()->prepare('UPDATE nft SET name = :name,collection_id = :collection_id,description = :description,img = :img,price = :price WHERE id = :id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':collection_id',$data['collection_id']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':img',$data['img']);
        $stmt->bindParam(':price',$data['price']);
        if($stmt->execute()){
            move_uploaded_file($fileTmp,$folder);
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

    static public function getExpensive(){
        try{
            $query = 'SELECT * FROM nft WHERE price in (SELECT MAX(price) FROM nft);';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    static public function getCheap(){
        try{
            $query = 'SELECT * FROM nft WHERE price in (SELECT MIN(price) FROM nft);';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    static public function getNftNum(){
        try{
            $query = 'SELECT COUNT(*) FROM nft;';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            $nft = $stmt->fetch(PDO::FETCH_OBJ);
            return $nft;
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    static public function ascendingSort(){
        try{
            $query = 'SELECT * FROM `nft` ORDER BY (price) ASC;';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    static public function descendingSort(){
        try{
            $query = 'SELECT * FROM `nft` ORDER BY (price) DESC;';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    static public function latestListed(){
        try{
            $query = 'SELECT * FROM `nft` ORDER BY (date) DESC;';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    static public function searchNft($data){
        $search = $data['search'];
        //die(print_r($data));
        try{
            $stmt = DB::connect()->prepare('SELECT * FROM nft WHERE name LIKE ?');
            $stmt->execute(array("%".$search."%"));
            $nfts = $stmt->fetchAll();
            return $nfts;
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }     
    }

}
?>