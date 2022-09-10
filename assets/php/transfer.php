<?php
include "connection.php";
session_start();
$myacc = $_SESSION['Account'];
$mypassword = $_SESSION['Password'];
$myname = $_SESSION['Name'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer money</title>
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

<body>

    <nav class="navbar">
        <div class="nav-logo">
            <a href="#Home">
                <h1>Web Wallet</h1>
            </a>
        </div>
        <a href="../../index.php #Home" class="nav-link">Home</a>
        <a href="../../index.php #About" class="nav-link">About</a>
        <a href="" class="nav-link">Register</a>
        <a href="transfer.php" class="nav-link">Transfer</a>
        <a href="" class="nav-link">Loan</a>
        <a href="" class="nav-link">Balance</a>
        <a href="../../index.php #Contact" class="nav-link">Contact Us</a>
        <a href="" class="nav-link"><i class="fa fa-user-gear"></i></a>
        <a href="javascript:void(0)" class="icon" onclick="navbarresponse()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
    <section>

        <div class="form-transfer-container">
            <form action="main-transfer.php" method="post">
                <div class="row">
                    <div class="col-lab">
                        <label for="Acco">Account Number</label>
                    </div>
                    <div class="col-inp">
                        <input type="number" name="account" id="acc" class="input" placeholder="XX XX XX XX XX XX">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lab">
                        <label for="amount">Amount</label>
                    </div>
                    <div class="col-inp">
                        <input type="number" name="amount" id="amount" class="input" placeholder="20,000/-" max="25000">
                    </div>
                </div>
                <div class="row">
                    <div class="keyboard">
                        <div class="btn">
                            <input type="button" id="num1" value="1" class="key">
                        </div>
                        <div class="btn">
                            <input type="button" id="num2" value="2" class="key">
                        </div>
                        <div class="btn">
                            <input type="button" id="num3" value="3" class="key">
                        </div>
                        <div class="btn">
                            <input type="button" id="num4" value="4" class="key">
                        </div>
                        <div class="btn">
                            <input type="button" id="num5" value="5" class="key">
                        </div>
                        <div class="btn">
                            <input type="button" id="num6" value="6" class="key">
                        </div>
                        <div class="btn">
                            <input type="button" id="num7" value="7" class="key">
                        </div>
                        <div class="btn">
                            <input type="button" id="num8" value="8" class="key">
                        </div>
                        <div class="btn">
                            <input type="button" id="num9" value="9" class="key">
                        </div>
                        <div class="btn">
                            <input type="button" value="<" class="key">
                        </div>
                        <div class="btn">
                            <input type="button" id="num0" value="0" class="key">
                        </div>
                        <div class="btn">
                            <input type="button" value="CLR" class="key" onclick="clear()">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="transfer-btn">Transfer</button>
                </div>
            </form>
        </div>
    </section>
</body>
<script src="../js/main.js"></script>

</html>