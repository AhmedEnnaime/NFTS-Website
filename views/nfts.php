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
   <?php include "./includes/nav.php"; ?>
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

                                        <!-- <button class="place-bid-btn">Description</button> -->

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
                                        <?php

                                    if($_SESSION['logged'] == true && $_SESSION['role'] == 0){?>
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

                                        <?php
                                    }else if($_SESSION['logged'] == true && $_SESSION['role'] == 1){?>
                                        <?php
                                            if($asc['user_id'] == $_SESSION['id']){?>
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

                                                <?php
                                            }
                                        
                                        ?>

                                        <?php
                                    }?>
                               

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
                                <?php

                                    if($_SESSION['logged'] == true && $_SESSION['role'] == 0){?>
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

                                        <?php
                                    }else if($_SESSION['logged'] == true && $_SESSION['role'] == 1){?>
                                        <?php
                                            if($desc['user_id'] == $_SESSION['id']){?>
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

                                                <?php
                                            }
                                        
                                        ?>

                                        <?php
                                    }?>


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
                                <?php

                                    if($_SESSION['logged'] == true && $_SESSION['role'] == 0){?>
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

                                        <?php
                                    }else if($_SESSION['logged'] == true && $_SESSION['role'] == 1){?>
                                        <?php
                                            if($latest['user_id'] == $_SESSION['id']){?>
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

                                                <?php
                                            }
                                        
                                        ?>

                                        <?php
                                    }?>
                               

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
                                <?php

                                    if($_SESSION['logged'] == true && $_SESSION['role'] == 0){?>
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
                                    }else if($_SESSION['logged'] == true && $_SESSION['role'] == 1){?>
                                        <?php
                                            if($nft['user_id'] == $_SESSION['id']){?>
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

                                        <?php
                                    }?>
                               
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
      <?php include "./includes/footer.php"; ?>

        <script src="./js/menu.js"></script>
    
</body>
</html>
