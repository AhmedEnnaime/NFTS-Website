<?php
    session_start();
    require_once "../controllers/UserController.php";
    if(isset($_POST['id'])){
        $oldUser = new UserController();
        $oldUser->deleteUser();
    }
?>