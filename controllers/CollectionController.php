<?php
require_once "../models/Collection.php";
class CollectionsController{
    public function getAllCollections(){
        $collections = Collection::getAll();
        return $collections;
    }

    public function addCollection(){
        if(isset($_POST['add'])){
            $data = array(
                'name'=>$_POST['name'],
                'artiste'=>$_POST['artiste'],
                'img'=>$_POST['img'],
            );
            $result = Collection::add($data);
            if($result == 'ok'){
                header('Location: ../views/home.php');
            }else{
                echo $result;
            }
        }
    }
}

?>