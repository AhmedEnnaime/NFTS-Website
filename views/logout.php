<?php
require_once "../controllers/UserController.php";
UserController::logout();
header('Location: ./login.php');
?>