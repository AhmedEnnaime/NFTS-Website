
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
     <!-- css links -->
     <link rel="stylesheet" href="./css/layout.css" />
       <link rel="stylesheet" href="./css/nav.css">
        <link rel="stylesheet" href="./css/Heros.css">
        <link rel="stylesheet" href="./css/footer.css" />
        <link rel="stylesheet" href="./css/contact.css">
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
    <section class="contact-section">
        <div class="contact-container">
            <div class="contactInfo"> 
                <div>
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><img src="./images/location-2.png"></span>
                            <span>184 Ippokratous Street<br>
                                Athens, Gr<br>
                                11472</span>
                            </span>
                        </li>
                        <li>
                            <span><img src="./images/email.png"></span>
                            <!-- <span>nassosanagn@gmail.com</span> -->
                            <span><a href = "mailto: nassosanagn@gmail.com">ahmedennaime20@gmail.com</a></span>
                        </li>
                        <li>
                            <span><img src="./images/telephone.png"></span>
                            <span>702-279-3488</span>
                        </li>

                    </ul>
                </div>
                <ul class="sci">
                    <li><a href="https://www.facebook.com/nassosanagn/"><img src="./images/facebook.png"></a></li>
                    <li><a href="https://www.instagram.com/nassosanagn_/?hl=el"><img src="./images/instagram.png"></a></li>
                    <li><a href="https://twitter.com/nassosanagn"><img src="./images/twitter.png"></a></li>
                    <li><a href="https://www.linkedin.com/in/nassos-anagnostopoulos-2b9631196/"><img src="./images/linkedin.png"></a></li>
                    
                </ul>
            </div>
                <div class="contactForm">
                    <h2>Send a Message</h2>
                    <form action="" method="POST">
                        <div class="formBox">
                        
                        <div class="inputBox w50">
                            <input type="text" name="firstname"required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input name="lastname" type="text" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input name="email" type="email" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input name="phone" type="text" required>
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea  name="message" required></textarea>
                            <span>Write your message here...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" name="add" value="Send">
                        </div>
                        </div>
                    </form>
                
            </div>
                
                
         
    </section>
    </main>

    <?php include "./includes/footer.php"; ?>

    <script src="./js/menu.js"></script>
</body>
</html>