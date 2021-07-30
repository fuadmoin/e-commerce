<?php
session_start();
if(isset($_POST['login'])){
include ("../partials/db.php");
$email = $_POST['email'];
$password = $_POST['password'];

$set = "SELECT *  FROM admins where username='$email' AND password='$password'";

$result = $conn->query($set);

$final  = $result->fetch_assoc();
$_SESSION['email'] = $final['username'];
$_SESSION['password'] = $final['password'];


if ($email == $final['username'] AND $password == $final['password']){
    header("Location:adminindex.php");
}else{
    header("Location: adminLogin.php");
}
}

?>