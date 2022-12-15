<?php
session_start();
require_once "../controllers/NftController.php";
if (isset($_POST['id'])) {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./css/nfts.css">
    <link rel="stylesheet" href="./css/layout.css" />
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/Heros.css">
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/auctions.css">
</head>

<body>
    <?php include "./includes/nav.php"; ?>
    <main id="main">
        <section id="hero">
            <div class="container">
                <div class="hero__wrapper">
                    <div class="hero__wrapper--left">
                        <h2>Discover, and collect</h2>
                        <h2>extraordinary</h2>
                        <h2>extraordinary</h2>
                        <h2>
                            <span>NFTs</span>

                        </h2>


                    </div>
                    <div class="hero__wrapper--right">
                        <div class="hero__shapes">
                            <div class="hero__shape--circle"></div>

                            <div class="hero__shape--circle1"></div>

                            <div class="hero__shape--circle hero-circle1"></div>
                            <div class="hero__shape--circle hero-circle3"></div>
                            <div class="hero__shape--circle1 hero-circle2"></div>

                        </div>
                        <img src="./images/imgslider2.png" alt="" class="hero__image--person" />
                        <img src="./images/img-bg-slider.png" alt="" class="hero__image--circle" />
                    </div>
                </div>
            </div>
        </section>
        <section id="heroBox">
            <div class="container">

                <?php
                if ($_SESSION['logged'] == true && $_SESSION['role'] == 0) {
                    echo '
                        <div class="heroBox__wrapper">
                            
                            <div class="heroBox--item">
                                <a href="./add.php" style="text-align: center;">
                                <i class="fa-solid fa-photo-film" style="margin-bottom:20px ;"></i>
                                <h3>Create Your Collection</h3>
                                </a>
                                
                                <p>
                                    Click Create and set up your collection. Add
                                    social links, a description, profile & banner
                                    images, and set a secondary sales fee.
                                </p>
                            </div>
                            <div class="heroBox--item">
                                <a href="./addNft.php" style="text-align: center;">
                                    <i class="fa-solid fa-image" style="margin-bottom:20px ;"></i>
                                    <h3>Add Your NFTs</h3>
                                </a>
                                
                                <p>
                                    Upload your work (image, video, audio, or 3D
                                    art), add a title and description, and customize
                                    your NFTs with properties, stats
                                </p>
                            </div>
                        
                        </div>
                    ';
                } else if ($_SESSION['logged'] == true && $_SESSION['role'] == 1) {
                    echo '

                        <div class="heroBox__wrapper">
                                
                                <div class="heroBox--item">
                                    <a href="./addNft.php" style="text-align: center;">
                                        <i class="fa-solid fa-image" style="margin-bottom:20px ;"></i>
                                        <h3>Add Your NFTs</h3>
                                    </a>
                                    
                                    <p>
                                        Upload your work (image, video, audio, or 3D
                                        art), add a title and description, and customize
                                        your NFTs with properties, stats
                                    </p>
                                </div>
                            
                            </div>
                    
                    
                    ';
                }

                ?>

            </div>
        </section>
        <section class="explore-product">
            <div class="container">

                <div class="section-header-wrapper">

                    <h2 class="h2 section-title">Explore Product</h2>

                </div>

                <ul class="product-list">
                    <?php
                    foreach ($nfts as $nft) { ?>


                        <li class="product-item">

                            <div class="product-card" tabindex="0">

                                <figure class="product-banner">

                                    <img src="./images/uploads/<?php echo $nft['img']; ?>" alt="Dimond riding a blue body art">

                                    <div class="product-actions">

                                        <button class="add-to-whishlist" data-whishlist-btn>
                                            <ion-icon name="heart"></ion-icon>
                                        </button>
                                    </div>

                                </figure>

                                <div class="product-content">

                                    <a href="#" class="h4 product-title"><?php echo $nft['name']; ?></a>

                                    <div class="product-meta">

                                        <div class="product-author">

                                            <div class="author-content">
                                                <h4 class="h5 author-title">Jack R</h4>
                                            </div>

                                        </div>

                                        <div class="product-price">
                                            <data value="0.568"><?php echo $nft['price']; ?></data>

                                            <p class="label">Current price</p>
                                        </div>

                                    </div>
                                    <?php
                                    if ($_SESSION['logged'] == true && $_SESSION['role'] == 1 && $_SESSION['id'] == $nft['user_id']) { ?>
                                        <div class="product-footer">
                                            <form method="POST" action="./deleteNft.php">
                                                <input name="id" type="hidden" value="<?php echo $nft['id']; ?>">
                                                <input type="submit" class="auction__info--tag" value="Delete">
                                            </form>

                                            <form method="POST" action="./updateNft.php">
                                                <input name="id" type="hidden" value="<?php echo $nft['id']; ?>">
                                                <input type="submit" class="auction__info--tag" value="Update">
                                            </form>

                                        </div>
                                    <?php

                                    } else if ($_SESSION['logged'] == true && $_SESSION['role'] == 0) { ?>
                                        <div class="product-footer">
                                            <form method="POST" action="./deleteNft.php">
                                                <input name="id" type="hidden" value="<?php echo $nft['id']; ?>">
                                                <input type="submit" class="auction__info--tag" value="Delete">
                                            </form>

                                            <form method="POST" action="./updateNft.php">
                                                <input name="id" type="hidden" value="<?php echo $nft['id']; ?>">
                                                <input type="submit" class="auction__info--tag" value="Update">
                                            </form>

                                        </div>

                                    <?php
                                    }

                                    ?>


                                </div>

                            </div>

                        </li>
                    <?php
                    }

                    ?>


                </ul>

            </div>
        </section>
    </main>
    <?php include "./includes/footer.php"; ?>

    <script src="./js/menu.js"></script>

</body>

</html>