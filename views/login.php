<?php

require_once "../controllers/UserController.php";
if(isset($_POST['login'])){
    $loginUser = new UserController();
    $loginUser->auth();
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
        <title>login</title>
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
                    <div class="login--title">Login</div>
                    <form action="" method="POST">
                        <div class="login--form">
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
                            <input type="submit" name="login" value="Login" class="btn_sign" />
                        </div>
                    </form>
                    
                    <div class="login--createAccount">
                        <div class="login--createAccount--items">
                            <p>
                                New on our platform?
                                <a href="./signup.php">Create an account</a>
                            </p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
