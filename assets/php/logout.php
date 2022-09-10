<?php
include "connection.php";
session_start();
    $_SESSION['Account'];
    $_SESSION['Password'];
    $_SESSION['Name'];
session_destroy();
clearstatcache();
header("Location: ../../index.html");
?>
