<?php
session_start();
?>

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
            <i class="uil uil-bars sidebar"></i>
        </header>
        <!-- header end -->
        <script src="../js/menu.js"></script>