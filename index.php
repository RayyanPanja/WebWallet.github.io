<?php
include "assets/php/connection.php";
session_start();
$account = $_SESSION['Account'];
$password = $_SESSION['Password'];
$name = $_SESSION['Name'];
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
    <link rel="stylesheet" href="assets/icons/fontawesome-free-6.1.2-web/fontawesome-free-6.1.2-web/css/all.css">
    <!-- Css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/mediaq.css">
</head>

<body id="Home">
    <header>
        <img src="assets/img/hero-img.jpg" class="hero-img">
        <nav class="navbar">
            <div class="nav-logo">
                <a href="#Home">
                    <h1>Web Wallet</h1>
                </a>
            </div>
            <a href="#Home" class="nav-link">Home</a>
            <a href="#About" class="nav-link">About</a>
            <a href="" class="nav-link">Register</a>
            <a href="assets/php/transfer.php" class="nav-link">Transfer</a>
            <a href="" class="nav-link">Loan</a>
            <a href="" class="nav-link">Balance</a>
            <a href="#Contact" class="nav-link">Contact Us</a>
            <a href="" class="nav-link"><i class="fa fa-user-gear"></i></a>
            <a href="javascript:void(0)" class="icon" onclick="navbarresponse()"><i class="fa fa-bars"></i></a>
            <div class="nav-login">
                <div class="name"><?php echo $name; ?></div>
            </div>
        </nav>
        <div class="main-logo">
            <h1>Web Wallet</h1>
        </div>
        <div class="hero-txt">
            <p>Web Wallet V.3.1 Project Created By Rayyan Panja, Tejas Vacchani, Kotak Dixit</p>
            <p>Version: 3.1.0.0</p>
        </div>
        <div class="logout">
            <form action="assets/php/logout.php" method="post">
                <button type="submit" class="logout-btn"> <i class="fa fa-arrow-left"></i> Logout</button>
            </form>
        </div>
    </header>

    <section id="About">

        <h1>Save Time With Fast Transactions..</h1>

        <div class="about-txt">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum a necessitatibus quasi eaque libero
                quaerat error qui odit enim suscipit.</p>
        </div>

        <div class="about-img">
            <img src="assets/img/mobile.png" alt="">
        </div>

    </section>

    <section id="Contact">
        <div class="form-contact-container">
            <form action="" method="post">
                <div class="row">
                    <div class="col-lab">
                        <label for="Name">*Full Name</label>
                    </div>
                    <div class="col-inp">
                        <input type="text" name="name" id="name" class="input" placeholder="FullName">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lab">
                        <label for="Account">*Account Number</label>
                    </div>
                    <div class="col-inp">
                        <input type="number" name="accountnumber" id="accno" class="input" placeholder="Account Number">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lab">
                        <label for="msg">Comment</label>
                    </div>
                    <div class="col-inp">
                        <textarea name="comment" id="comment" cols="30" rows="10" class="input" placeholder="Comment"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="btn-set">
                        <button type="reset" class="cancle-btn">Clear</button>
                        <button type="submit" class="ok-btn">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
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
    <script src="assets/js/main.js"></script>
</body>

</html>