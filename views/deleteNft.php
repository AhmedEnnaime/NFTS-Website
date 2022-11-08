<?php
require_once "../controllers/NftController.php";
if(isset($_POST['id'])){
    $oldNft = new NftController();
    $oldNft->deleteNft();
}

?>