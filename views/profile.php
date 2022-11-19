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
       <?php include "./includes/nav.php"; ?>
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
       <?php include "./includes/footer.php"; ?>
        <!-- scripts --> 
        <script src="./js/menu.js"></script>
    </body>
</html>
