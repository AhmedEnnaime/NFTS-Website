<?php
session_start();
require_once "../controllers/NftController.php";
$data = new NftController();
$nfts = $data->getAllNfts();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="auction__bottom">
                            <?php
                            foreach($nfts as $nft){
                                
                                echo '
                                <div class="auction--item">
                                <div class="auction__card">
                                    <div class="auction__card--media">
                                        <a href="#">
                                            <img
                                                src="'.$nft['img'].'"
                                                alt=""
                                            />
                                        </a>
                                        <div class="auction__media--BtnBid">
                                            <form action="" method="POST">
                                                <input type="hidden" value="'.$nft['id'].'">
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
                                                > '.$nft['name'].'
                                                </a
                                            >
                                        </h5>
                                    </div>
                                    <div class="auction__card--info">
                                        <div class="auction__info--author">
                                            <div class="auction__author--info">
                                                <span>Creator</span>
                                                <h6>
                                                    <a href="#">'.$nft['description'].'</a>
                                                    <a href="#">'.$nft['price'].'</a>
                                                </h6>
                                            </div>
                                        </div>
                                        <form action="./deleteNft.php" method="POST">
                                            <input name="id" type="hidden" value="'.$nft['id'].'">
                                            <div class="auction__info--tag">
                                                <button type="submit">delete</button>
                                            </div>
                                            
                                        </form>
                                        <form action="./updateNft.php" method="POST">
                                            <input name="id" type="hidden" value="'.$nft['id'].'">
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
</body>
</html>