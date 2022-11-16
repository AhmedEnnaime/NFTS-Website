<?php
session_start();
require_once "../controllers/UserController.php";
if(isset($_POST['id'])){
    $olduser = new UserController();
    $user = $olduser->getLoggedUser();
}
if(isset($_POST['update'])){
    $olduser = new UserController();
    $olduser->updateUser();
}
?>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Profile</title>
        <link
            rel="shortcut icon"
            href="image/01_header/favicon.ico"
            type="image/x-icon"
        />
        <!-- fontawsome cdn link -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <!-- css links -->
        <!--         <link
            rel="stylesheet"
            href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css"
            type="text/css"
        /> -->

       <link rel="stylesheet" href="./css/layout.css">
        <link rel="stylesheet" href="./css/nav.css">
        <link rel="stylesheet" href="./css/footer.css">
       <link rel="stylesheet" href="./css/Heros.css">
        <link rel="stylesheet" href="./css/auctions.css"/>
       <link rel="stylesheet" href="./css/item.css">
        <link rel="stylesheet" href="./css/profile.css">
    </head>
    <body>
        <!-- header start -->
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
                    <div class="navbar__item navbar__item--right">
                        <div class="navbar--right__wallet">
                           
                            <a href="./logout.php" class="btn">
                                
                                <span id="wallet">Logout</span>
                            </a>
                        </div>
                       
                       
                       
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- main start -->
        <main id="main">
            <section id="Item">
                <div class="container">
                    <div class="circle circle1"></div>
                    <div class="circle circle2"></div>
                    <div class="circle circle3"></div>
                    <div class="circle circle4"></div>
                    <div class="Item__wrapper">
                        <div class="item--title">
                            <h2>Edit Profile</h2>
                        </div>
                       
                    </div>
                </div>
            </section>
            <section id="editProfile">
                <div class="container">
                    
                    <div class="editProfile__right">
                        <form action="" method="POST">
                            <input name="id" type="hidden" value="<?php echo $user->id; ?>">
                            <div class="editProfile__right--bottom">
                                <div class="editProfile__right--account">
                                    <div class="editProfile__right--accountInfo">
                                        <h3>Account info</h3>
                                        <div class="editProfile__account">
                                            <label for="name">Display name</label>
                                            <input
                                                type="text"
                                                name="name"
                                                id=""
                                                placeholder="Trista Francis"
                                                autocomplete="off"
                                                value="<?php echo $user->name; ?>"
                                            />
                                        </div>
                                        <div class="editProfile__account">
                                            <label for="email">Email</label>
                                            <input
                                                placeholder="Enter your email"
                                                type="email"
                                                name="email"
                                                id=""
                                                autocomplete="off"
                                                value="<?php echo $user->email; ?>"
                                            />
                                        </div>
                                        <div class="editProfile__account">
                                            <label for="url">Birthday</label>
                                            <input
                                                type="date"
                                                name="birthday"
                                                id=""
                                                placeholder="Axies.Trista Francis.com/"
                                                autocomplete="off"
                                                value="<?php echo $user->birthday; ?>"
                                            />
                                        </div>
                                        <div class="editProfile__account">
                                            <label for="text">Role</label>
                                            <input
                                                placeholder="Enter your email"
                                                type="text"
                                                name="role"
                                                id=""
                                                autocomplete="off"
                                                disabled
                                                value=" <?php if($user->role == 0){echo 'Admin';}else{echo 'Client';} ?>"
                                            />
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="editProfile__right--updateBtn">
                                <input class="btn" type="submit" value="Update" name="update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
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
        <!-- scripts --> 
        <script src="./js/menu.js"></script>
    </body>
</html>
