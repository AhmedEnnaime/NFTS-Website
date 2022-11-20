
<?php
session_start();
require_once "../controllers/CollectionController.php";
$data = new CollectionsController();
$collections = $data->getAllCollections();

?>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="shortcut icon"
            href="image/01_header/favicon.ico"
            type="image/x-icon"
        />
        <title>NFTea</title>
        <!-- fontawsome cdn link -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <!-- css links -->
        <link rel="stylesheet" href="./css/layout.css" />
        <link rel="stylesheet" href="./css/nav.css">
        <link rel="stylesheet" href="./css/Heros.css">
        <link rel="stylesheet" href="./css/auctions.css">
        <link rel="stylesheet" href="./css/footer.css" />
    </head>
    <body>
       <?php include "./includes/nav.php"; ?>
        <!-- main start -->
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
                                
                                <div
                                    class="hero__shape--circle hero-circle1"
                                ></div>
                                <div
                                    class="hero__shape--circle hero-circle3"
                                ></div>
                                <div
                                    class="hero__shape--circle1 hero-circle2"
                                ></div>
                            
                            </div>
                            <img
                                src="./images/imgslider2.png"
                                alt=""
                                class="hero__image--person"
                            />
                            <img
                                src="./images/img-bg-slider.png"
                                alt=""
                                class="hero__image--circle"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <section id="heroBox">
                <div class="container">

                <?php
                if($_SESSION['logged'] == true && $_SESSION['role'] == 0){
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
                }else if($_SESSION['logged'] == true && $_SESSION['role'] == 1){
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
            <section id="auction">
                <div class="container">
                    <div class="auction__wrapper">
                        <div class="auction__top">
                            <h2>Collections available</h2>
                            <?php 
                                if($_SESSION['logged'] == true && $_SESSION['role'] == 0){
                                    echo '
                                        <a href="./add.php">Add more</a>
                                    ';
                                }
                            
                            ?>
                            
                        </div>
                        <div class="auction__bottom">
                            <?php
                            foreach($collections as $collection){?>
                                
                
                                <div class="auction--item">
                                <div class="auction__card">
                                    <div class="auction__card--media">
                                        <a href="#">
                                            <img
                                                src="./images/uploads/<?php echo $collection['img']; ?>"
                                                alt=""
                                            />
                                        </a>
                                        <div class="auction__media--BtnBid">
                                            <form action="./specialNfts.php" method="POST">
                                                <input name="id" type="hidden" value="<?php echo $collection['id']; ?>">
                                                <a href="#">
                                                    
                                                    <i
                                                        class="fa-solid fa-eye"
                                                    ></i
                                                    > <input type="submit" value="View NFTS" style="border: none; background-color:transparent; cursor:pointer;"> </a
                                                >
                                            </form>
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="auction__card--title">
                                        <h5>
                                            <a href="#"
                                                > <?php echo $collection['name']; ?>
                                                </a
                                            >
                                        </h5>
                                    </div>
                                    <div class="auction__card--info">
                                        <div class="auction__info--author">
                                            <div class="auction__author--info">
                                                <span>Creator</span>
                                                <h6>
                                                    <a href="#"><?php echo $collection['artiste']; ?></a>
                                                </h6>
                                            </div>
                                        </div>
                                        <?php
                                        if($_SESSION['logged'] == true && $_SESSION['role'] == 0){?>
                                            <form action="./delete.php" method="POST">
                                            <input name="id" type="hidden" value="<?php echo $collection['id']; ?>">
                                            <div class="auction__info--tag">
                                                <input value="delete" type="submit">
                                            </div>
                                            
                                            </form>
                                            <form action="./update.php" method="POST">
                                                <input name="id" type="hidden" value="<?php echo $collection['id']; ?>">
                                                <div class="auction__info--tag">
                                                    <input value="update" type="submit">
                                                </div>
                                                
                                            </form>
                                        <?php  

                                        }?>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                                
                                    
                          <?php  
                            }?>

                           
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- main end -->
       <?php include "./includes/footer.php"; ?>
        <!-- scroll -->
        <div id="scroll--top">
            <i class="fa-solid fa-angle-up"></i>
        </div>

        <!-- scripts -->
        <script src="./js/menu.js"></script>
    </body>
</html>
