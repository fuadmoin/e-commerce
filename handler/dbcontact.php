<?php

include("../partials/db.php");

$email = $_POST['email'];
$msg = $_POST['msg'];

$set = "INSERT INTO contact (email, msg) values ('$email', '$msg')";

$set = mysqli_query($conn, $set);