<?php
require_once "../controllers/NftController.php";
require_once "../controllers/CollectionController.php";

$data = new NftController();
$collections = new CollectionsController();
$expensive = $data->getMostExpensive();
$cheap = $data->getMostCheapest();
$counts = $data->getCountNft();
$celebritys = $collections->mostCelebrity();


foreach($expensive as $exp){
    echo '
    expensive name'.$exp['name'].'
    expensive price'.$exp['price'].'


';
}
foreach($cheap as $chp){
    echo '
        cheap name '.$chp['name'].'
        cheap price' .$chp['price'].'
    ';
}

foreach($counts as $count){
    echo '
        number of nfts is '.$count.'
    ';
}

foreach($celebritys as $celebrity){
    echo '
        most celebrity collection name '.$celebrity['name'].'
        most celebrity collection artiste '.$celebrity['artiste'].'
    ';
}



?>