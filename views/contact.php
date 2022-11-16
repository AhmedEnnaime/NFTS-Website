
<?php
session_start();
require_once "../controllers/CollectionController.php";
require_once "../controllers/ContactController.php";
$data = new CollectionsController();
$collections = $data->getAllCollections();
if(isset($_POST['add'])){
    $newContact = new ContactController();
    $newContact->addContact();
}

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
        <link rel="stylesheet" href="./css/contact.css">
       <link rel="stylesheet" href="./css/nav.css">
        <link rel="stylesheet" href="./css/Heros.css">
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
                                        <button class="btn" type="submit">My profile</button>
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
                <section>
                <div class="container">
                    <div class="contactinfo">
                        <div>
                            <h2>Contact Info</h2>
                            <ul class="info">
                                <li>
                                    <span><img src="./images/location-2.png"></span>
                                    <span>Eyad Odeh Company<br>Morocco,Safi</span>
                                </li>
                                <li>
                                    <span><img src="./images/email.png"></span>
                                    <span>ahmedennaime20@gmail.com</span>
                                </li>
                                <li>
                                    <span><img src="./images/telephone.png"></span>
                                    <span>+212682622717</span>
                                </li>

                            </ul>
                        </div>
                        <ul class="sci">
                            <li><a href="https://web.facebook.com/profile.php?id=100003125472061" target="_blank"><img
                                    src="./images/facebook.png"></a></li>
                            <li><a href="https://www.twitter.com" target="_blank"><img src="./images/twitter.png"></a></li>
                            <li><a href="https://www.instgram.com" target="_blank"><img src="./images/instagram.png"></a></li>
                            <li><a href="https://www.linkedin.com" target="_blank"><img src="./images/linkedin.png"></a></li>
                            <li><a href="https://github.com/eyad96" target="_blank"><img src="./images/github.png"></a></li>

                        </ul>

                    </div>

                    <div class="contactForm">
                        <h2>Send a Message</h2>
                        <div class="formBox">
                            <form action="" method="POST">
                            <div class="inputbox w50">
                                <span>First Name</span>
                                <input type="text" name="firstname" required>
                            </div>
                            <div class="inputbox w50">
                                <span>Last Name</span>
                                <input type="text" name="lastname" required>
                            </div>
                            <div class="inputbox w50">
                                <span>Email Address</span>
                                <input type="email" name="email" required>
                            </div>
                            <div class="inputbox w50">
                                <span>Mobile Number</span>
                                <input type="text" name="phone" required>
                            </div>
                            <div class="inputbox w100">
                                <span>Write your message here... </span>
                                <textarea type="text" name="message" required></textarea>
                            </div>
                            <div class="submit">
                                <input type="submit" value="Send" name="add">
                            </div>

                            <div class="reset">
                                <input type="reset" value="clear" id="clear">
                            </div>
                            </form>

                        </div>


                    </div>

                </div>
            </section>

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
    </body>
</html>
