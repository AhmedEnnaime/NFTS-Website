
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
       <link rel="stylesheet" href="./css/contacts.css">
       <link rel="stylesheet" href="./css/nav.css">
        <link rel="stylesheet" href="./css/Heros.css">
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
                                <input type="text" name="firstname" placeholder="Enter your firstname" required>
                            </div>
                            <div class="inputbox w50">
                                <span>Last Name</span>
                                <input type="text" name="lastname" placeholder="Enter your lastname" required>
                            </div>
                            <div class="inputbox w50">
                                <span>Email Address</span>
                                <input type="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="inputbox w50">
                                <span>Mobile Number</span>
                                <input type="text" name="phone" placeholder="Enter your phone number" required>
                            </div>
                            <div class="inputbox w100">
                                <span>Write your message here... </span>
                                <textarea type="text" name="message" placeholder="Enter your message" required></textarea>
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
        <?php include "./includes/footer.php"; ?>
        <!-- scroll -->
        <div id="scroll--top">
            <i class="fa-solid fa-angle-up"></i>
        </div>

        <!-- scripts -->
        <script src="./js/menu.js"></script>
    </body>
</html>
