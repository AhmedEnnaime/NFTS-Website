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
       <?php include "./includes/nav.php"; ?>
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
                              <div class="graphe" style="width: 500px;">
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
                                      'rgb(130, 100, 22)',
                                      'rgb(230, 180, 122)',
                                      'rgb(210, 120, 82)',
                                      'rgb(240, 20, 82)',
                                      'rgb(110, 60, 192)',
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
                        <div class="tableau">
                        <table >
                           
                            
                           <?php
                                  if($_SESSION['logged'] == true && $_SESSION['role'] == 0){?>
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
                                                    
                                                    <td> 
                                                            <form action="./deleteUser.php" method="POST">
                                                                <input name="id" type="hidden" value="<?php echo $user['id']; ?>">
                                                                <button type="submit" name="delete" style="border:none ;font-size:40px;color:red;background-color:transparent;" ><i class="uil uil-trash-alt"></i></button>
                                                            </form> 
                                                        </td>
                                                    </tr>
                                                <?php  
                                        }?>

                                   <?php 
                                  }?>
                          
                           </table>
                             
                        
             


                        </div>

                
                </div>
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
        <script src="./js/script.js"></script>
    </body>
</html>
