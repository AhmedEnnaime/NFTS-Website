<?php
require_once "../models/Nft.php";

class NftController{

    public function getAllNfts(){
        $nfts = Nft::getAll();
        return $nfts;
    }

    public function getOneNft(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
            $nft = Nft::getNft($data);
            return $nft;
        }
    }

    public function addNft(){
        if(isset($_POST['add'])){
            $data = array(
                'name'=>$_POST['name'],
                'collection_id'=>$_POST['collection_id'],
                'description'=>$_POST['description'],
                'img'=>$_POST['img'],
                'price'=>$_POST['price'],
            );
            $result = Nft::add($data);
            if($result == 'ok'){
                header('Location: ../views/nfts.php');
            }else{
                echo $result;
            }
        }
    }

    public function updateNft(){
        if(isset($_POST['update'])){
            $data = array(
                'id'=> $_POST['id'],
                'name'=>$_POST['name'],
                'collection_id'=>$_POST['collection_id'],
                'description'=>$_POST['description'],
                'img'=>$_POST['img'],
                'price'=>$_POST['price'],
            );
            $result = Nft::update($data);
            if($result=='ok'){
                header('Location: ../views/nfts.php');
            }else{
                echo $result;
            }

        }
    }

    public function deleteNft(){
        if(isset($_POST['id'])){
            $data['id']= $_POST['id'];
            $result = Nft::delete($data);
            if($result == 'ok'){
                header('Location: ../views/nfts.php');
            }else{
                echo $result;
            }
        }
    }
}

?>