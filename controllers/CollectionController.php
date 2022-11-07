<?php
require_once "../models/Collection.php";
class CollectionsController{
    public function getAllCollections(){
        $collections = Collection::getAll();
        return $collections;
    }

    public function getOneCollection(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
            $collection = Collection::getCollection($data);
            return $collection;
        }
        
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

    public function updateCollection(){
        if(isset($_POST['update'])){
            $data = array(
                'id'=> $_POST['id'],
                'name'=>$_POST['name'],
                'artiste'=>$_POST['artiste'],
                'img'=>$_POST['img'],
            );
            $result = Collection::update($data);
            if($result == 'ok'){
                header('Location: ../views/home.php');
            }else{
                echo $result;
            }
        }
    }

    public function deleteCollection(){
        if(isset($_POST['id'])){
            $data['id']= $_POST['id'];
            $result = Collection::delete($data);
            if($result == 'ok'){
                header('Location: ../views/home.php');
            }else{
                echo $result;
            }
        }
    }
}

?>