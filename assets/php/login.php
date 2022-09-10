<?php
include "connection.php";
$ACC = $_POST['accountnumber'];
$PSW = $_POST['password'];

$account;
$password;
$name;

$fetch = "SELECT * FROM main WHERE `main`.`Account_number` = $ACC;";
$fetresult = mysqli_query($con, $fetch);
if (mysqli_num_rows($fetresult) > 0) {
    while ($data = mysqli_fetch_assoc($fetresult)) {
        $account = $data['Account_number'];
        $password = $data['Password'];
        $name = $data['Name'];
    }
}

if ($ACC == $account) {
    if ($PSW == $password) {
        session_start();
        $_SESSION['Account'] = $account;
        $_SESSION['Password'] = $password;
        $_SESSION['Name'] = $name;

        header("Location: ../../index.php");
    } else {
        echo "<script>alert('Password Incorrect');</script>";
    }
} else {
    echo "<script>alert('Invalid Account Number');</script>";
}
