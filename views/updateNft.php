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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Nft</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="./css/addNft.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="add">
        <div class="l-form">
            <form action="" method="POST" class="form">
            <input name="id" type="hidden" value="<?php echo $nft->id; ?>">
                <a href="./home.php"><svg style="float: right;" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                  </svg></a>
                <h1 class="form_title">Update Nft </h1>
                <div class="form_div">
                    <input type="text" name="name" class="form_input" placeholder="" value="<?php echo $nft->name; ?>">
                    <label for="" class="form_label">Name</label>
                </div>

                <div class="form_select">
                    <select name="collection_id" id="cars">
                        <?php
                            foreach($collections as $collection){
                                echo '
                                    <option value="'.$collection['id'].'">'.$collection['name'].'</option>
                                ';
                            }
                        
                        ?>
                      </select>
                </div>

                <div class="form_div">
                    <input type="number" name="price" class="form_input" placeholder="" value="<?php echo $nft->price; ?>">
                    <label for="" class="form_label">Price </label>
                </div>
                <div class="form_description">
                    <textarea id="description" name="description" class="form_input" placeholder="" rows="4" cols="50"><?php echo $nft->description ?></textarea>
                    <label for="" class="form_label">Description </label>
                    <div class="col-75">
                    </div>
                </div>
                <div class="button">

                    <input type="file" name="img" class="form_button" value="choisir un fichier"><br>

                </div>
                <div>
                    <input type="submit" name="update" class="form_button_add" value="update">
                </div>

            </form>
        </div>
        <div class="page">
            <div class="card">
                <img class="img" src="https://opensea.io/static/images/learn-center//what-are-gas-fees.png" alt="" />
                <h2>NFT Title</h2>
                <p>Lorem ipsum dolor sit amet.</p>

            </div>
        </div>
    </div>
</body>

</html>


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