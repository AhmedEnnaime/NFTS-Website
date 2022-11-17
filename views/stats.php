<?php
session_start();
require_once "../controllers/NftController.php";
require_once "../controllers/CollectionController.php";
require_once "../controllers/UserController.php";

$data = new NftController();
$collections = new CollectionsController();
$users = new UserController();
$userNum = $users->getCountUsers();
$allUsers = $users->getUsers();
$expensive = $data->getMostExpensive();
$cheap = $data->getMostCheapest();
$counts = $data->getCountNft();
$celebritys = $collections->mostCelebrity();

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
         <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- ChartJs -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- fontawsome cdn link -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <!-- css links -->
        <link rel="stylesheet" href="./css/layout.css" />
       <link rel="stylesheet" href="./css/nav.css">
        <link rel="stylesheet" href="./css/Heros.css">
        <link rel="stylesheet" href="./css/auctions.css">
        <link rel="stylesheet" href="./css/footer.css" />
        <link rel="stylesheet" href="./css/stats.css">
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
        <!-- header end -->
        <!-- main start -->
        <main id="main">
            
            <section id="hero">
                <div class="container">
                    <div class="main-cards">

                        <div class="card">
                          <div class="card-inner">
                            <p class="text-primary">Total Nfts</p>
                            <span class="material-icons-outlined text-blue"><i class="uil uil-store"></i></span>
                          </div>
                          <span class="text-primary font-weight-bold"><?php foreach($counts as $count){echo $count;} ?></span>
                        </div>
              
                        <div class="card">
                          <div class="card-inner">
                            <p class="text-primary">Most Expensive</p>
                            <span class="material-icons-outlined text-orange"><i class="uil uil-euro"></i></span>
                          </div>
                          <span class="text-primary font-weight-bold"><?php foreach($expensive as $exp){echo $exp['name'];} ?></span>
                        </div>
              
                        <div class="card">
                          <div class="card-inner">
                            <p class="text-primary">Cheapest</p>
                            <span class="material-icons-outlined text-green"><i class="uil uil-dollar-alt"></i></span>
                          </div>
                          <span class="text-primary font-weight-bold"><?php foreach($cheap as $chp){echo $chp['name'];} ?></span>
                        </div>

                        <div class="card">
                            <div class="card-inner">
                              <p class="text-primary">Number of clients</p>
                              <span class="material-icons-outlined text-red"><i class="uil uil-users-alt"></i></span>
                            </div>
                            <span class="text-primary font-weight-bold"><?php foreach($userNum as $usercount){echo $usercount;} ?></span>
                          </div>
              
                      </div>
                   
                </div>
            </section>
            <section id="heroBox">
                <div class="container">
                    <div class="charts">

                        <div class="charts-card">
                          <p class="chart-title">Top Collections</p>
                          <div id="bar-chart">
                              <div style="width: 500px;">
                                  <canvas id="myChart"></canvas>
                              </div>
                              <script>
                                <?php
                                    foreach($celebritys as $celebrity){
                                        $clc[] = $celebrity['name'];
                                        $repeats[] = $celebrity['TotalRepeat'];
                                    }
                                ?>
                                  const data = {
                                  labels: <?php echo json_encode($clc); ?>,
                                  datasets: [{
                                      label: 'My First Dataset',
                                      data:  <?php echo json_encode($repeats); ?>,
                                      backgroundColor: [
                                      'rgb(255, 99, 132)',
                                      'rgb(54, 162, 235)',
                                      'rgb(255, 205, 86)',
                                      'rgb(30, 205, 86)',
                                      'rgb(130, 205, 86)',
                                      'rgb(130, 100, 22)'
                                      ],
                                      hoverOffset: 4
                                  }]
                                  };
                                  const config = {
                                  type: 'doughnut',
                                  data: data,
                                  };
                                  const myChart = new Chart(
                                      document.getElementById('myChart'),
                                      config
                                  );
                              </script>
                          </div>
                        </div>
                        <div class="table">
                        <table >
                           
                            
                           
                           <tr>
                          
                           <th>id</th>
                          
                           <th>Name</th>
                          
                           <th>Email</th>
                          
                           <th>Birthday </th>
                          
                           <th>Role </th>
                          
                           <th>Delete</th>
                           </tr>
                               <?php

                               foreach($allUsers as $user){?>
                                   
                                       <tr>
                                       <td><?php echo $user['id']; ?></td>
                           
                                       <td><?php echo $user['name']; ?></td>
                                       
                                       <td><?php echo $user['email']; ?></td>
                                       
                                       <td><?php echo $user['birthday']; ?></td>
                                       
                                       <td><?php if($user['role'] == 0){echo 'Admin';}else{echo 'Client';} ?></td>
                                       
                                       <td><button type="submit" name="delete" style="border:none ;font-size:40px;color:red;background-color:transparent;" ><i class="uil uil-trash-alt"></i></button></td>
                                       </tr>
                                 <?php  
                               }?>
                          
                           </table>
                             
                        
             


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
        <!-- scroll -->
        <div id="scroll--top">
            <i class="fa-solid fa-angle-up"></i>
        </div>

        <!-- scripts -->
        <script src="./js/menu.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>
