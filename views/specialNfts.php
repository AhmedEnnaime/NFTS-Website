<?php
session_start();
require_once "../controllers/NftController.php";
if(isset($_POST['id'])){
    $specialsNfts = new NftController();
    $nfts = $specialsNfts->getNfts();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nfts</title>
     <!-- fontawsome cdn link -->
     <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
    <link rel="stylesheet" href="./css/nfts.css">
    <link rel="stylesheet" href="./css/layout.css" />
    <link rel="stylesheet" href="./css/nav.css">
     <link rel="stylesheet" href="./css/footer.css" />
     <link rel="stylesheet" href="./css/auctions.css">
</head>
<body>
   <?php include "./includes/nav.php"; ?>
    <section class="explore-product">
        <div class="container">

          <div class="section-header-wrapper">

            <h2 class="h2 section-title">Explore Product</h2>

            <button class="btn btn-primary">Filter</button>

          </div>

          <ul class="product-list">
            <?php
                foreach($nfts as $nft){
                    echo '

                        <li class="product-item">

                            <div class="product-card" tabindex="0">

                            <figure class="product-banner">

                                <img src="./assets/images/explore-product-1.jpg" alt="Dimond riding a blue body art">

                                <div class="product-actions">

                                <button class="add-to-whishlist" data-whishlist-btn>
                                    <ion-icon name="heart"></ion-icon>
                                </button>
                                </div>

                            </figure>

                            <div class="product-content">

                                <a href="#" class="h4 product-title">'.$nft['name'].'</a>

                                <div class="product-meta">

                                <div class="product-author">

                                    <div class="author-content">
                                    <h4 class="h5 author-title">Jack R</h4>
                                    </div>

                                </div>

                                <div class="product-price">
                                    <data value="0.568">'.$nft['price'].'</data>

                                    <p class="label">Current price</p>
                                </div>

                                </div>
                                <div class="product-footer">
                                    <form method="POST" action="./deleteNft.php">
                                        <input name="id" type="hidden" value="'.$nft['id'].'">
                                        <input type="submit" class="auction__info--tag" value="Delete">
                                    </form>

                                    <form method="POST" action="./updateNft.php">
                                        <input name="id" type="hidden" value="'.$nft['id'].'">
                                        <input type="submit" class="auction__info--tag" value="Update">
                                    </form>
                                    
                                </div>

                            </div>

                            </div>

                        </li>        
                    ';
                }

            ?>

            
          </ul>

        </div>
      </section>
      <?php include "./includes/footer.php"; ?>

        <script src="./js/menu.js"></script>
    
</body>
</html>
