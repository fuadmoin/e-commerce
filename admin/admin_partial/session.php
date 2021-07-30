<?php

session_start();
if (empty($_SESSION['email'] and $_SESSION['password'])){
    header("Location: adminLogin.php");
}


?>