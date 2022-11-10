<?php
require_once "../controllers/NftController.php";

$data = new NftController();
$expensive = $data->getMostExpensive();
$cheap = $data->getMostCheapest();
$counts = $data->getCountNft();


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



?>