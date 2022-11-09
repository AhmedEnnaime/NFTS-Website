<?php
session_start();
require_once "../controllers/CollectionController.php";
require_once "../controllers/NftController.php";

$data = new CollectionsController();
$collections = $data->getAllCollections();

if(isset($_POST['id'])){
    $oldNft = new NftController();
    $nft = $oldNft->getOneNft();
}else{
    header('Location: ./nfts.php');
}

if(isset($_POST['update'])){
    $oldNft = new NftController();
    $oldNft->updateNft();
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
    <h1>update Nft</h1>
    <form action="" method="POST">
    <input name="id" type="hidden" value="<?php echo $nft->id; ?>">
    nft name : <input type="text" name="name" value="<?php echo $nft->name ?>">
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
    nft description : <input type="text" name="description" value="<?php echo $nft->description ?>">
    <br>
    nft image : <input type="file" name="img" value="<?php echo $nft->img ?>">
    <br>
    nft price : <input type="number" name="price" value="<?php echo $nft->price ?>">
    <br>
    <button type="submit" name="update">update</button>
</form>
</body>
</html>