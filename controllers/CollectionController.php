<?php
require_once "../models/Collection.php";
class CollectionsController{
    public function getAllCollections(){
        $collections = Collection::getAll();
        return $collections;
    }
}

?>