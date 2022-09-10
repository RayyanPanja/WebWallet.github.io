<?php

$servername = "localhost";
$username = "root";
$serverpassword = "";
$database = "wallet";

$con = mysqli_connect($servername,$username,$serverpassword,$database);
if (!$con) {
    header("Location: ../../error/error.html");
}

?>