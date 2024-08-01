<?php 
session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link rel="shortcut icon" href="./H_IMGAES/2.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/header.css">
    <!-- jquery cdn  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- iconic.io  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="header.php"><img src="./H_IMGAES/2.png" alt=""></a>
        </div>
        <div class="links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Developer</a></li>
        </div>
        <div class="sign">
            <!-- <a href="#" class="icon_toggle"><ion-icon name="contrast"></ion-icon></a> -->
            <?php

                if(isset($_SESSION["username"])) {
                    echo "<a href='../music2/login system/register.php'>Profile</a>";
                    echo "<a href='../music2/login system/logout.php' class='Bbtn'>Log out</a>";
                }
                else 
                {
                    echo "<a href='../music2/login system/register.php'>Register</a>";
                    echo "<a href='../music2/login system/login.php' class='Bbtn'>Login</a>";
                }
            ?>
            <!-- <a href='../music2/login system/register.php'>Register</a>
            <a href='../music2/login system/login.php' class='Bbtn'>Login</a> -->
        </div>
    </nav>
</body>
<script>
    var icon = document.querySelector(".icon_toggle");
    icon.addEventListener("click", ()=>{
        document.body.classList.toggle("dark_theme");
    })
</script>
</html>