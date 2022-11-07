
<?php
require_once "../controllers/CollectionController.php";
$data = new CollectionsController();
$collections = $data->getAllCollections();
//print_r($collections);
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
        <link rel="stylesheet" href="./css/nav.css" />
        <link rel="stylesheet" href="./css/hero.css" />
        <link rel="stylesheet" href="./css/auction.css" />
        <link rel="stylesheet" href="./css/seller.css" />
        <link rel="stylesheet" href="./css/pick.css" />
        <link rel="stylesheet" href="./css/footer.css" />
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
                                    <a href="#" class="navbar__menulink"
                                        >Home
                                    </a>
                                    
                                </li>
                
                                <li
                                    class="navbar__menulist navbar__menu--haschildren"
                                >
                                    <a href="#" class="navbar__menulink"
                                        >Stats
                                    </a>
                                    
                                </li>
                                
                                <li
                                    class="navbar__menulist navbar__menu--haschildren"
                                >
                                    <a href="#" class="navbar__menulink"
                                        >NFTs
                                    </a>
                                   
                                </li>
                                <li
                                    class="navbar__menulist navbar__menu--haschildren"
                                >
                                    <a href="#" class="navbar__menulink"
                                        >Contact
                                            </a>
                                    
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- menu end -->
                    <div class="navbar__item navbar__item--right">
                        <div class="navbar--right__wallet">
                           
                            <a href="#" class="btn">
                                
                                <span id="wallet">Logout</span>
                            </a>
                        </div>
                        <!-- mobile menu trigger -->
                        <div class="mobile-menu-trigger">
                            <span></span>
                        </div>
                        <!-- mobile menu trigger -->
                        <div class="navbar--right__state">
                            <a href="login.html"
                                ><i class="fa-solid fa-user"></i
                            ></a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
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
                                <div class="hero__shape--star">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="hero__shape--circle1"></div>
                                <div class="hero__shape--star hero-star1">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div
                                    class="hero__shape--circle hero-circle1"
                                ></div>
                                <div
                                    class="hero__shape--circle hero-circle3"
                                ></div>
                                <div
                                    class="hero__shape--circle1 hero-circle2"
                                ></div>
                                <div class="hero__shape--star hero-star2">
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="hero__shape--star hero-star3">
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="hero__shape--star hero-star4">
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="hero__shape--star hero-star5">
                                    <i class="fa-regular fa-star"></i>
                                </div>
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
                            <a href="./add.php" style="text-align: center;">
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
                </div>
            </section>
            <section id="auction">
                <div class="container">
                    <div class="auction__wrapper">
                        <div class="auction__top">
                            <h2>Collections available</h2>
                            <a href="./add.php">Add more</a>
                        </div>
                        <div class="auction__bottom">
                            <?php
                            foreach($collections as $collection){
                                
                                echo '
                                <div class="auction--item">
                                <div class="auction__card">
                                    <div class="auction__card--media">
                                        <a href="#">
                                            <img
                                                src="'.$collection['img'].'"
                                                alt=""
                                            />
                                        </a>
                                        <div class="auction__media--BtnBid">
                                            <form action="" method="POST">
                                                <input type="hidden" value="'.$collection['id'].'">
                                                <a href="#">
                                                    <i
                                                        class="fa-solid fa-eye"
                                                    ></i
                                                    >View NFTS</a
                                                >
                                            </form>
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="auction__card--title">
                                        <h5>
                                            <a href="#"
                                                > '.$collection['name'].'
                                                </a
                                            >
                                        </h5>
                                    </div>
                                    <div class="auction__card--info">
                                        <div class="auction__info--author">
                                            <div class="auction__author--info">
                                                <span>Creator</span>
                                                <h6>
                                                    <a href="#">'.$collection['artiste'].'</a>
                                                </h6>
                                            </div>
                                        </div>
                                        <form action="./delete.php" method="POST">
                                            <input name="id" type="hidden" value="'.$collection['id'].'">
                                            <div class="auction__info--tag">
                                                <button type="submit">delete</button>
                                            </div>
                                            
                                        </form>
                                        <form action="./update.php" method="POST">
                                            <input name="id" type="hidden" value="'.$collection['id'].'">
                                            <div class="auction__info--tag">
                                                <button type="submit">update</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                                
                                ';    
                            
                            }

                            ?>
                           
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- main end -->
        <!-- footer start -->
        <footer id="footer">
            <div class="container">
                <div class="footer__wrapper">
                    <div class="footer--item">
                        <a href="#">
                            <img src="image/01_header/logo_dark.png" alt="" />
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
        <!-- scroll -->
        <div id="scroll--top">
            <i class="fa-solid fa-angle-up"></i>
        </div>

        <!-- scripts -->
        <script src="./js/menu.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>
