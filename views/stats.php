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
    '.$exp['name'].'
    '.$exp['price'].'


';
}
foreach($cheap as $chp){
    echo '
        '.$chp['name'].'
        '.$chp['price'].'
    ';
}

foreach($counts as $count){
    echo '
        '.$count.'
    ';
}

foreach($celebritys as $celebrity){
    echo '
        '.$celebrity['name'].'
        '.$celebrity['artiste'].'
    ';
}



?>