<?php

require_once "../controllers/CollectionController.php";
if(isset($_POST['add'])){
    $newCollection = new CollectionsController();
    $newCollection->addCollection();
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
    <h1>add</h1>
    <form action="" method="POST">
    collection name : <input type="text" name="name">
    <br>
    collection artiste : <input type="text" name="artiste">
    <br>
    collection image : <input type="file" name="img">
    <br>
    <button type="submit" name="add">add</button>
</form>
</body>
</html>