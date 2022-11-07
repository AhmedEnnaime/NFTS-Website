<?php

require_once "../controllers/CollectionController.php";
if(isset($_POST['id'])){
    $oldCollection = new CollectionsController();
    $collection = $oldCollection->getOneCollection();
}
if(isset($_POST['update'])){
    $oldCollection = new CollectionsController();
    $oldCollection->updateCollection();
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
</html>