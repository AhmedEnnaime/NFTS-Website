<?php

require_once "../controllers/CollectionController.php";
if(isset($_POST['add'])){
    $newCollection = new CollectionsController();
    $newCollection->addCollection();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="./css/addCollection.css">
</head>

<body>
    <div class="add">
        <div class="l-form">
            <form action="" method="POST" class="form">
                <h1 class="form_title">Add Collection </h1>
                <div class="form_div">
                    <input type="text" name="name" class="form_input" placeholder="">
                    <label for="" class="form_label">Collection Name</label>
                </div>
                <div class="form_div">
                    <input type="text" name="artiste" class="form_input" placeholder="">
                    <label for="" class="form_label">Collection Artiste</label>
                </div>
                <div>

                    <input type="file" name="img" class="form_button" value="choisir un fichier"><br>
                    <input type="submit" name="add" class="form_button_add" value="add">
                </div>
            </form>
        </div>
        <div class="page">
            <div class="card">
                <img class="img" src="./images/nftimg.png" alt="" />
                <h2>NFT Title</h2>
                <p>Lorem ipsum dolor sit amet.</p>

            </div>
        </div>
    </div>
</body>



</html>