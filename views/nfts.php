<?php
session_start();
require_once "../controllers/NftController.php";
$data = new NftController();
$nfts = $data->getAllNfts();
$ascSort = $data->ascSort();
$descSort = $data->descSort();
$latestSort = $data->latestSort();
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
    <!-- header start -->
    <header id="header">
        <div class="container">
            <div class="navbar">
                <div class="navbar__item navbar__item--left">
                    <div class="navbar__logo">
                        <a href="#">
                            <img
                                src="./images/logo1.png"
                                alt="Axies"
                                width="100px"
                                height="80px"
                            />
                        </a>
                    </div>
                </div>
                <!-- menu start -->
                <div class="navbar__item navbar__item--center">
                    <nav class="navbar__menu">
                        <ul class="navbar__menulists">
                            <li
                                class="navbar__menulist navbar__menu--haschildren"
                            >
                                <a href="./home.php" class="navbar__menulink"
                                    >Home
                                </a>
                                
                            </li>
            
                            <li
                                class="navbar__menulist navbar__menu--haschildren"
                            >
                                <a href="./stats.php" class="navbar__menulink"
                                    >Stats
                                </a>
                                
                            </li>
                            
                            <li
                                class="navbar__menulist navbar__menu--haschildren"
                            >
                                <a href="./nfts.php" class="navbar__menulink"
                                    >NFTs
                                </a>
                               
                            </li>
                            <li
                                class="navbar__menulist navbar__menu--haschildren"
                            >
                                <a href="./contact.php" class="navbar__menulink"
                                    >Contact
                                        </a>
                                
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- menu end -->
                <?php

                    if($_SESSION['logged'] == true){
                        echo '
                        <div class="navbar__item navbar__item--right">
                            <div class="navbar--right__wallet">
                            
                                <a href="./logout.php" class="btn">
                                    
                                    <span id="wallet">Logout</span>
                                </a>
                            </div>
                            <!-- mobile menu trigger -->
                            <div class="mobile-menu-trigger">
                                <span></span>
                            </div>
                            <!-- mobile menu trigger -->
                            <div class="navbar--right__state">
                            <form action="./profile.php" method="POST">
                                <input name="id" type="hidden" value="'.$_SESSION['id'].'">
                                    <input class="btn" type="submit" value="My Profile">
                            </form>
                                
                            
                            </div>
                        </div>
                        
                        ';

                    }else{
                        echo '

                        <div class="navbar__item navbar__item--right">
                            <div class="navbar--right__wallet">
                            
                                <a href="./login.php" class="btn">
                                    
                                    <span id="wallet">Login</span>
                                </a>
                            </div>
                            
                        </div>
                        
                        ';
                    }

                ?>

            </div>
        </div>
    </header>
    <section class="explore-product">
        <div class="container">

          <div class="section-header-wrapper">

            <h2 class="h2 section-title">Explore Product</h2>
            <form action="" method="POST">
                <select name="sort" class="btn btn-primary" id="sortOption">
                    <option class="All" value="All"> All </option>
                    <option class="sortOption" value="Sort by price asc"> Sort by price asc </option>
                    <option class="sortOption" value="Sort by price desc">Sort by price desc</option>
                    <option class="sortOption" value="Sort by latest date">Sort by latest date</option>
                    <option class="sortOption" value="Sort by oldest date">Sort by oldest date</option>
                    <!-- <input type="submit" value="send"> -->
                </select>
            </form>
           
          </div>

          <ul class="product-list">
            <script type="text/javascript">
                let choice = 0;
                const selectOption = document.querySelector('#sortOption')
                selectOption.addEventListener(('change'), (event)=>{
                    console.log(event.target.value)
                    if(event.target.value == "Sort by price asc"){
                       choice = 1;

                    }else if(event.target.value == "Sort by price desc"){
                        choice = 2;

                    }else if(event.target.value == "Sort by latest date"){
                        choice = 3;
                    }else{
                        choice = 4;
                    }
                    document.cookie = "choice="+choice;
                   //console.log(choice);
                })  
            </script>
            <?php 
                $sort_value = $_COOKIE['choice'];
                if($sort_value == 1){?>
                    <?php
                        foreach($ascSort as $asc){?>

                                <li class="product-item">

                                    <div class="product-card" tabindex="0">

                                    <figure class="product-banner">

                                        <img src="./assets/images/explore-product-1.jpg" alt="Dimond riding a blue body art">

                                        <div class="product-actions">

                                        <button class="add-to-whishlist" data-whishlist-btn>
                                            <ion-icon name="heart"></ion-icon>
                                        </button>
                                        </div>

                                        <button class="place-bid-btn">Description</button>

                                    </figure>

                                    <div class="product-content">

                                        <div class="product-meta">

                                        <div class="product-author">

                                            <div class="author-content">
                                            <a href="#" class="h4 product-title"><?php echo $asc['name']; ?></a>
                                            </div>

                                        </div>

                                        <div class="product-price">
                                            <data value="0.568"><?php echo $asc['price']; ?></data>

                                            <p class="label">Current price</p>
                                        </div>

                                        </div>
                                        <div class="product-footer">
                                            <form method="POST" action="./deleteNft.php">
                                                <input name="id" type="hidden" value="<?php echo $asc['id']; ?>">
                                                <input type="submit" class="auction__info--tag" value="Delete">
                                            </form>

                                            <form method="POST" action="./updateNft.php">
                                                <input name="id" type="hidden" value="<?php echo $asc['id']; ?>">
                                                <input type="submit" class="auction__info--tag" value="Update">
                                            </form>
                                            
                                        </div>

                                    </div>

                                    </div>

                                </li>        
                            <?php
                    }?>

                    
                    <?php
                }else if($sort_value == 2){?>

                    <?php
                foreach($descSort as $desc){?>

                        <li class="product-item">

                            <div class="product-card" tabindex="0">

                            <figure class="product-banner">

                                <img src="./assets/images/explore-product-1.jpg" alt="Dimond riding a blue body art">

                                <div class="product-actions">

                                <button class="add-to-whishlist" data-whishlist-btn>
                                    <ion-icon name="heart"></ion-icon>
                                </button>
                                </div>

                                <button class="place-bid-btn">Description</button>

                            </figure>

                            <div class="product-content">

                                <div class="product-meta">

                                <div class="product-author">

                                    <div class="author-content">
                                    <a href="#" class="h4 product-title"><?php echo $desc['name']; ?></a>
                                    </div>

                                </div>

                                <div class="product-price">
                                    <data value="0.568"><?php echo $desc['price']; ?></data>

                                    <p class="label">Current price</p>
                                </div>

                                </div>
                                <div class="product-footer">
                                    <form method="POST" action="./deleteNft.php">
                                        <input name="id" type="hidden" value="<?php echo $desc['id']; ?>">
                                        <input type="submit" class="auction__info--tag" value="Delete">
                                    </form>

                                    <form method="POST" action="./updateNft.php">
                                        <input name="id" type="hidden" value="<?php echo $desc['id']; ?>">
                                        <input type="submit" class="auction__info--tag" value="Update">
                                    </form>
                                    
                                </div>

                            </div>

                            </div>

                        </li>        
                    <?php
                }?>

                    <?php
                }else if($sort_value == 3){?>
                    <?php
                foreach($latestSort as $latest){?>

                        <li class="product-item">

                            <div class="product-card" tabindex="0">

                            <figure class="product-banner">

                                <img src="./assets/images/explore-product-1.jpg" alt="Dimond riding a blue body art">

                                <div class="product-actions">

                                <button class="add-to-whishlist" data-whishlist-btn>
                                    <ion-icon name="heart"></ion-icon>
                                </button>
                                </div>

                                <button class="place-bid-btn">Description</button>

                            </figure>

                            <div class="product-content">

                                <div class="product-meta">

                                <div class="product-author">

                                    <div class="author-content">
                                    <a href="#" class="h4 product-title"><?php echo $latest['name']; ?></a>
                                    </div>

                                </div>

                                <div class="product-price">
                                    <data value="0.568"><?php echo $latest['price']; ?></data>

                                    <p class="label">Current price</p>
                                </div>

                                </div>
                                <div class="product-footer">
                                    <form method="POST" action="./deleteNft.php">
                                        <input name="id" type="hidden" value="<?php echo $latest['id']; ?>">
                                        <input type="submit" class="auction__info--tag" value="Delete">
                                    </form>

                                    <form method="POST" action="./updateNft.php">
                                        <input name="id" type="hidden" value="<?php echo $latest['id']; ?>">
                                        <input type="submit" class="auction__info--tag" value="Update">
                                    </form>
                                    
                                </div>

                            </div>

                            </div>

                        </li>        
                    <?php
                }?>
                    <?php
                }else{?>
                    <?php
                foreach($nfts as $nft){?>

                        <li class="product-item">

                            <div class="product-card" tabindex="0">

                            <figure class="product-banner">

                                <img src="./assets/images/explore-product-1.jpg" alt="Dimond riding a blue body art">

                                <div class="product-actions">

                                <button class="add-to-whishlist" data-whishlist-btn>
                                    <ion-icon name="heart"></ion-icon>
                                </button>
                                </div>

                                <button class="place-bid-btn">Description</button>

                            </figure>

                            <div class="product-content">

                                <div class="product-meta">

                                <div class="product-author">

                                    <div class="author-content">
                                    <a href="#" class="h4 product-title"><?php echo $nft['name']; ?></a>
                                    </div>

                                </div>

                                <div class="product-price">
                                    <data value="0.568"><?php echo $nft['price']; ?></data>

                                    <p class="label">Current price</p>
                                </div>

                                </div>
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

                            </div>

                            </div>

                        </li>        
                    <?php
                }?>

                    <?php
                }?>
            
          </ul>

        </div>
      </section>
      <!-- footer start -->
      <footer id="footer">
            <div class="container">
                <div class="footer__wrapper">
                    <div class="footer--item">
                        <a href="#">
                            <img src="./images/logo1.png" style="width: 120px;height:100px;" alt="" />
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet,consectetur adipisicing
                            elit. Quis non, fugit totam vel laboriosam vitae.
                        </p>
                    </div>
                    <div class="footer--item">
                        <h3 class="footer--title">My Account</h3>
                        <div class="footer--links">
                            <a href="#">Authors</a>
                            <a href="#">Collection</a>
                            <a href="#">Author Profile</a>
                            <a href="#">Create Item</a>
                        </div>
                    </div>
                    <div class="footer--item">
                        <h3 class="footer--title">Resources</h3>
                        <div class="footer--links">
                            <a href="#">Help & Support</a>
                            <a href="#">Live Auctions</a>
                            <a href="#">Item Details</a>
                            <a href="#">Activity</a>
                        </div>
                    </div>
                    <div class="footer--item">
                        <h3 class="footer--title">Company</h3>
                        <div class="footer--links">
                            <a href="#">Explore</a>
                            <a href="#">Contact Us</a>
                            <a href="#">Our Blog</a>
                            <a href="#">FAQ</a>
                        </div>
                    </div>
                    <div class="footer--item">
                        <h3 class="footer--title">Resources</h3>
                        <div class="footer--email">
                            <input
                                type="email"
                                name="email"
                                id="email"
                                placeholder="info@youremail.com"
                            />
                            <button type="submit" class="footer__email--submit">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </div>
                        <div class="footer--socials">
                            <i
                                class="fa-brands fa-twitter footer--social-item"
                            ></i>
                            <i
                                class="fa-brands fa-facebook footer--social-item"
                            ></i>
                            <i
                                class="fa-brands fa-instagram footer--social-item"
                            ></i>
                            <i
                                class="fa-brands fa-youtube footer--social-item"
                            ></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <script src="./js/menu.js"></script>
    
</body>
</html>



    <?php
    foreach($ascSort as $asc){
        echo '
        '.$asc['name'].'
        '.$asc['price'].'</br>
    
    
    ';
    }

    foreach($descSort as $desc){
        echo '
        '.$desc['name'].'
        '.$desc['price'].'</br>
    
    
    ';
    }

    foreach($latestSort as $latest){
        echo '
        '.$latest['name'].'</br>
    ';
    }

    foreach($nfts as $nft){
        echo '
        '.$nft['name'].'</br>
    ';
    }
   


    ?>
