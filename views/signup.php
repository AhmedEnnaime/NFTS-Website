<?php

require_once "../controllers/UserController.php";
if(isset($_POST['add'])){
    $newUser = new UserController();
    $newUser->signup();
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
        <title>Sign up</title>
        <!-- fontawsome cdn link -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        />
        <!-- css links -->
        <link rel="stylesheet" href="./css/layout.css" />
        <link rel="stylesheet" href="./css/footer.css" />
        <link rel="stylesheet" href="./css/login.css" />
    </head>
    <body>
        <div class="login__container">
            <div class="login__wrapper">
                <div class="login__item login__item--left">
                    <img src="./images/background.jpg" alt="" />
                </div>
                <div class="login__item login__item--right">
                    <div class="login--title">Sign Up</div>
                    
                    <form action="" method="POST">
                        <div class="login--form">
                            <label for="txt_email">Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="txt_email"
                                    placeholder="Fullname"
                                    required
                                />
                                <label for="txt_email">Email</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="txt_email"
                                    placeholder="Email Address"
                                    required
                                />
                            
                                <label for="txt_pass">Password</label>
                                <input
                                    type="password"
                                    name="password"
                                    id="txt_pass"
                                    placeholder="Password"
                                    required
                                />

                                <label for="txt_email">Birthday</label>
                                <input
                                    type="date"
                                    name="birthday"
                                    id="txt_email"
                                    placeholder="Birthday"
                                    required
                                />
                                <input type="submit" name="add" value="Sign Up" class="btn_sign" />

                        </div>
                    </form>
                    
                   
                    <div class="login--createAccount">
                        <div class="login--createAccount--items">
                            <p>
                                Already have an account?
                                <a href="./login.php">Login</a>
                            </p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
