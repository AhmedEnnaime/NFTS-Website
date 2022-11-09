<?php
session_start();
require_once "../controllers/CollectionController.php";
require_once "../controllers/NftController.php";
$data = new CollectionsController();
$collections = $data->getAllCollections();
if(isset($_POST['add'])){
    $newNft = new NftController();
    $newNft->addNft();
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>add Nft</h1>
    <form action="" method="POST">
    nft name : <input type="text" name="name">
    <br>
    nft collection : <select name="collection_id" id="">
        <?php
        foreach($collections as $collection){
            echo '
                <option value="'.$collection['id'].'">'.$collection['name'].'</option>
            ';
        }
        
        ?>
        
        
    </select>
    <br>
    nft description : <input type="text" name="description">
    <br>
    nft image : <input type="file" name="img">
    <br>
    nft price : <input type="number" name="price">
    <br>
    <button type="submit" name="add">add</button>
</form>
</body>
</html>