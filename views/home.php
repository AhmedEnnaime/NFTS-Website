
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
                                    src="./images/logo.png"
                                    alt="Axies"
                                    width="130px"
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
                                        >Explore<i
                                            class="fa-solid fa-angle-down"
                                        ></i
                                    ></a>
                                    <div
                                        class="navbar__submenu navbar__megamenu navbar__column--mega2"
                                    >
                                        <div class="megamenu__list--item">
                                            <h4>Styles</h4>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="#"
                                                        class="navbar__submenu--link"
                                                        ><i
                                                            class="fa-solid fa-address-book"
                                                        ></i
                                                        >Explore Style 1</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        href="#"
                                                        class="navbar__submenu--link"
                                                        ><i
                                                            class="fa-solid fa-address-book"
                                                        ></i
                                                        >Explore Style 2</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        href="#"
                                                        class="navbar__submenu--link"
                                                        ><i
                                                            class="fa-solid fa-address-book"
                                                        ></i
                                                        >Explore Style 3</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        href="#"
                                                        class="navbar__submenu--link"
                                                        ><i
                                                            class="fa-solid fa-address-book"
                                                        ></i
                                                        >Explore Style 4</a
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="megamenu__list--item">
                                            <h4>Details</h4>
                                            <ul>
                                                <li>
                                                    <a
                                                        href="Item-details.html"
                                                        class="navbar__submenu--link"
                                                        ><i
                                                            class="fa-solid fa-address-book"
                                                        ></i
                                                        >Item Details 1</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        href="#"
                                                        class="navbar__submenu--link"
                                                        ><i
                                                            class="fa-solid fa-address-book"
                                                        ></i
                                                        >Item Details 2</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        href="#"
                                                        class="navbar__submenu--link"
                                                        ><i
                                                            class="fa-solid fa-address-book"
                                                        ></i
                                                        >Live Auctions</a
                                                    >
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="megamenu__list--item">
                                            <img
                                                src="image/05_Today's Picks/image-box-11.jpg"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="navbar__menulist navbar__menu--haschildren"
                                >
                                    <a href="#" class="navbar__menulink"
                                        >Activity<i
                                            class="fa-solid fa-angle-down"
                                        ></i
                                    ></a>
                                    <div
                                        class="navbar__submenu navbar__submenu--single"
                                    >
                                        <ul class="navbar__submenu--lists">
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-chart-bar"
                                                    ></i
                                                    >Activity 1</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                >
                                                    <i
                                                        class="fa-solid fa-chart-column"
                                                    ></i
                                                    >Activity 2</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li
                                    class="navbar__menulist navbar__menu--haschildren"
                                >
                                    <a href="#" class="navbar__menulink"
                                        >Community<i
                                            class="fa-solid fa-angle-down"
                                        ></i
                                    ></a>
                                    <div
                                        class="navbar__submenu navbar__submenu--single"
                                    >
                                        <ul class="navbar__submenu--lists">
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-chart-bar"
                                                    ></i
                                                    >Blog</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                >
                                                    <i
                                                        class="fa-solid fa-chart-column"
                                                    ></i
                                                    >Blog Details</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                >
                                                    <i
                                                        class="fa-solid fa-chart-column"
                                                    ></i
                                                    >Help Center</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li
                                    class="navbar__menulist navbar__menu--haschildren"
                                >
                                    <a href="#" class="navbar__menulink"
                                        >Pages<i
                                            class="fa-solid fa-angle-down"
                                        ></i
                                    ></a>
                                    <div
                                        class="navbar__submenu navbar__submenu--single"
                                    >
                                        <ul class="navbar__submenu--lists">
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >Authors 1</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >Authors 2</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >Wallet connect</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >Create Item</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="profile.html"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >Edit Profile</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >Ranking</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="login.html"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >Login</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >Sign Up</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >No Result</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >FAQ</a
                                                >
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li
                                    class="navbar__menulist navbar__menu--haschildren"
                                >
                                    <a href="#" class="navbar__menulink"
                                        >Contact<i
                                            class="fa-solid fa-angle-down"
                                        ></i
                                    ></a>
                                    <div
                                        class="navbar__submenu navbar__submenu--single"
                                    >
                                        <ul class="navbar__submenu--lists">
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >Contact 1</a
                                                >
                                            </li>
                                            <li class="navbar__submenu--list">
                                                <a
                                                    href="#"
                                                    class="navbar__submenu--link"
                                                    ><i
                                                        class="fa-solid fa-address-book"
                                                    ></i
                                                    >Contact 2</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
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
            <section class="sticky__bar">
                <ul class="socials__links">
                    <li class="socials__item">
                        <a href="#" class="socials__link">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="socials__item">
                        <a href="#" class="socials__link">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li class="socials__item">
                        <a href="#" class="socials__link">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                    <li class="socials__item">
                        <a href="#" class="socials__link">
                            <i class="fa-brands fa-telegram"></i>
                        </a>
                    </li>
                    <li class="socials__item">
                        <a href="#" class="socials__link">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="socials__item">
                        <a href="#" class="socials__link">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </section>
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
                            <p>
                                Marketplace for monster character cllections non
                                fungible token NFTs
                            </p>
                            
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
                            <i class="fa-solid fa-photo-film"></i>
                            <h3>Create Your Collection</h3>
                            <p>
                                Click Create and set up your collection. Add
                                social links, a description, profile & banner
                                images, and set a secondary sales fee.
                            </p>
                        </div>
                        <div class="heroBox--item">
                            <i class="fa-solid fa-image"></i>
                            <h3>Add Your NFTs</h3>
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
                            <a href="#">Add more</a>
                        </div>
                        <div class="auction__bottom">
                            <div class="auction--item">
                                <div class="auction__card">
                                    <div class="auction__card--media">
                                        <a href="#">
                                            <img
                                                src="image/03_Live Auctions/card-item8.jpg"
                                                alt=""
                                            />
                                        </a>
                                        <div class="auction__media--BtnBid">
                                            <a href="#">
                                                <i
                                                    class="fa-solid fa-eye"
                                                ></i
                                                >View NFTS</a
                                            >
                                        </div>
                                        
                                    </div>
                                    <div class="auction__card--title">
                                        <h5>
                                            <a href="#"
                                                >"Hamlet Contemplates
                                                Yorick's...</a
                                            >
                                        </h5>
                                    </div>
                                    <div class="auction__card--info">
                                        <div class="auction__info--author">
                                            <div class="auction__author--info">
                                                <span>Creator</span>
                                                <h6>
                                                    <a href="#">SalvadorDali</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="auction--item">
                                <div class="auction__card">
                                    <div class="auction__card--media">
                                        <a href="#">
                                            <img
                                                src="image/03_Live Auctions/image-box-10.jpg"
                                                alt=""
                                            />
                                        </a>
                                        <div class="auction__media--BtnBid">
                                            <a href="#">
                                                <i
                                                    class="fa-solid fa-eye"
                                                ></i
                                                >View NFTS</a
                                            >
                                        </div>
                                        
                                    </div>
                                    <div class="auction__card--title">
                                        <h5>
                                            <a href="#"
                                                >"Hamlet Contemplates
                                                Yorick's...</a
                                            >
                                        </h5>
                                    </div>
                                    <div class="auction__card--info">
                                        <div class="auction__info--author">
                                            <div class="auction__author--info">
                                                <span>Creator</span>
                                                <h6>
                                                    <a href="#">SalvadorDali</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="auction--item">
                                <div class="auction__card">
                                    <div class="auction__card--media">
                                        <a href="#">
                                            <img
                                                src="image/03_Live Auctions/image-box-11.jpg"
                                                alt=""
                                            />
                                        </a>
                                        <div class="auction__media--BtnBid">
                                            <a href="#">
                                                <i
                                                    class="fa-solid fa-eye"
                                                ></i
                                                >View NFTS</a
                                            >
                                        </div>
                                        
                                    </div>
                                    <div class="auction__card--title">
                                        <h5>
                                            <a href="#"
                                                >"Hamlet Contemplates
                                                Yorick's...</a
                                            >
                                        </h5>
                                    </div>
                                    <div class="auction__card--info">
                                        <div class="auction__info--author">
                                        
                                            <div class="auction__author--info">
                                                <span>Creator</span>
                                                <h6>
                                                    <a href="#">SalvadorDali</a>
                                                </h6>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="auction--item">
                                <div class="auction__card">
                                    <div class="auction__card--media">
                                        <a href="#">
                                            <img
                                                src="image/03_Live Auctions/image-box-21.jpg"
                                                alt=""
                                            />
                                        </a>
                                        <div class="auction__media--BtnBid">
                                            <a href="#">
                                                <i
                                                    class="fa-solid fa-eye"
                                                ></i
                                                >View NFTS</a
                                            >
                                        </div>
                                        
                                    </div>
                                    <div class="auction__card--title">
                                        <h5>
                                            <a href="#"
                                                >"Hamlet Contemplates
                                                Yorick's...</a
                                            >
                                        </h5>
                                    </div>
                                    <div class="auction__card--info">
                                        <div class="auction__info--author">
                                           
                                            <div class="auction__author--info">
                                                <span>Creator</span>
                                                <h6>
                                                    <a href="#">SalvadorDali</a>
                                                </h6>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="auction__pagination">
                            <a href="#"
                                ><i class="fa-solid fa-arrow-left"></i
                            ></a>
                            <div class="pagination__btns">
                                <div class="pagination__page"></div>
                                <div class="pagination__page"></div>
                                <div class="pagination__page"></div>
                                <div class="pagination__page"></div>
                                <div
                                    class="pagination__page pagination__page--active"
                                ></div>
                                <div class="pagination__page"></div>
                                <div class="pagination__page"></div>
                                <div class="pagination__page"></div>
                                <div class="pagination__page"></div>
                            </div>
                            <a href="#"
                                ><i class="fa-solid fa-arrow-right"></i
                            ></a>
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
                                class="fa-solid fa-paper-plane footer--social-item"
                            ></i>
                            <i
                                class="fa-brands fa-youtube footer--social-item"
                            ></i>
                            <i
                                class="fa-brands fa-tiktok footer--social-item"
                            ></i>
                            <i
                                class="fa-brands fa-discord footer--social-item"
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