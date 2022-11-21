<?php
session_start();
require_once "../controllers/CollectionController.php";
if(isset($_POST['id'])){
    $oldCollection = new CollectionsController();
    $collection = $oldCollection->getOneCollection();
}else{
    header('Location: ./home.php');
}
if(isset($_POST['update'])){
    $oldCollection = new CollectionsController();
    $oldCollection->updateCollection();
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
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="./css/addCollection.css">
</head>

<body>

    <div class="add">
        <div class="l-form">
            <form action="" method="POST" class="form" enctype="multipart/form-data">
                <input name="id" type="hidden" value="<?php echo $collection->id; ?>">
                <a href="./home.php"><svg style="float: right;" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                  </svg></a>
                <h1 class="form_title">Update Collection </h1>
                <div class="form_div">
                    <input type="text" class="form_input" placeholder="" name="name" value="<?php echo $collection->name; ?>">
                    <label for="" class="form_label">Name</label>
                </div>
                <div class="form_div">
                    <input type="text" class="form_input" placeholder="" name="artiste" value="<?php echo $collection->artiste; ?>">
                    <label for="" class="form_label">Artiste</label>
                </div>
                <div>

                    <input type="file" class="form_button" value="choisir un fichier" name="img" value="<?php echo $collection->img; ?>"><br>
                    <input type="submit" class="form_button_add" value="Update" name="update">
                </div>
            </form>
        </div>
        <div class="page">
            <div class="card">
                <img class="img" src="https://opensea.io/static/images/learn-center//what-is-nft.png" alt="" />
                <h2>NFT Title</h2>
                <p>Lorem ipsum dolor sit amet.</p>

            </div>
        </div>

    </div>
</body>



</html>

<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Update</h1>
    <form action="" method="POST">
    <input name="id" type="hidden" value="<?php echo $collection->id; ?>">
    collection name : <input type="text" name="name" value="<?php echo $collection->name; ?>">
    <br>
    collection artiste : <input type="text" name="artiste" value="<?php echo $collection->artiste; ?>">
    <br>
    collection image : <input type="file" name="img" value="<?php echo $collection->img; ?>">
    <br>
    <button type="submit" name="update">update</button>
</form>
</body>
</html> -->