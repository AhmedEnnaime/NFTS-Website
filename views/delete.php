<?php
    require_once "../controllers/CollectionController.php";
    if(isset($_POST['id'])){
        $oldCollection = new CollectionsController();
        $oldCollection->deleteCollection();
    }
?>