<?php

require_once "../controllers/NftController.php";
if(isset($_POST['id'])){
    $specialsNfts = new NftController();
    $nfts = $specialsNfts->getNfts();
}

//echo $_POST['id'];

foreach($nfts as $nft){
    echo '

    '.$nft['name'].'
    '.$nft['description'].'
    '.$nft['price'].'
    
    ';
}
?>