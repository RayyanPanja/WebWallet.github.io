<?php
include "connection.php";

// Generating Random Account Number...
$account = rand(0000, 9999);
// Gathiring Data into Var......
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$amount = $_POST['amount'];
$address = $_POST['address'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if ($password1 !== $password2) {
    echo "<script>alert('Password Not Matched');</script>";
} else {
    $insertsql = "INSERT INTO `main` (`Account_number`, `Name`, `Password`, `Amount`, `Age`, `Loan_taken`, `Loan_requested`, `Address`, `Email`, `Contact`, `Date_Created`)
   VALUES ('$account', '$name', '$password1', '$amount', '$age', '', '', '$address', '$email', '$contact', Current_TimeStamp());";
    $insertresult = mysqli_query($con, $insertsql);
    if ($insertresult) {
        echo "<div class='acc-container'>
            Account Number :- '$account'
        </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Wallet</title>
    <!-- Google Fonts -->
    <link href="http://fonts.cdnfonts.com/css/clash-display" rel="stylesheet">
    <!-- Icon Library -->
    <link rel="stylesheet" href="../icons/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.css">
    <!-- Css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/mediaq.css">
</head>

<body id="Home">

    <nav class="navbar" id="nav">
        <div class="nav-logo">
            <a href="#Home">
                <h1>Web Wallet</h1>
            </a>
        </div>
        <a href="../../index.html" class="nav-link">Home</a>
        <a href="../../index.html #About" class="nav-link">About</a>
        <a href="register.html" class="nav-link">Register</a>
        <a href="../../index.html #Contact" class="nav-link">Contact Us</a>
        <a href="javascript:void(0)" class="icon" onclick="navbarresponse()"><i class="fa fa-bars"></i></a>
        <div class="nav-login">
            <button type="submit" class="nav-btn" onclick="loginform()">Login</button>
        </div>
    </nav>

    <main>
        <section style="width:100%; height:100vh;">
            <div class="register-form-container">
                <a href="../../index.html">
                    <button type="submit" class="ok-btn">Go Back</button>
                </a>
            </div>
        </section>
    </main>



    <footer>
        <p>&copy; Copyright Owned By Team Web Wallet </p>
        <div class="flex">

            <nav class="footer-nav-1">
                <h3>Navigation Links</h3>
                <ul>
                    <li><a href="#" class="footer-links">Home Page</a></li>
                    <li><a href="#" class="footer-links">About Us</a></li>
                    <li><a href="#" class="footer-links">Contact Us</a></li>
                    <li><a href="#" class="footer-links">Register</a></li>
                </ul>
            </nav>
            <hr>
            <nav class="footer-nav-2">
                <h3>Admins</h3>
                <ul>
                    <li><i class="fa fa-user-alt"></i><a href="">Rayyan Panja</a></li>
                    <li><i class="fa fa-user-alt"></i><a href="">Vacchani Tejas</a></li>
                    <li><i class="fa fa-user-alt"></i><a href="">Kotak Dixit</a></li>
                </ul>
            </nav>
            <hr>
            <p>Rayyan Panja :- Full Stack Developer</p>
            <p>Tejas Vacchani :- Front-End Developer</p>
            <p>Dixit Kotak :- Front-End Developer</p>
        </div>
    </footer>

</body>
<script src="../js/main.js"></script>

</html>