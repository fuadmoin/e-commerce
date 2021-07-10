<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "e-com";

$conn = mysqli_connect($host,$username, $password, $dbname);

if($conn){
echo "db connected";


}else{
    echo"Database not connected";



}

