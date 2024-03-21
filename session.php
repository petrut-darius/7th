<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="things/style.css">
</head>
<body>

                <?php 
                if(isset($_SESSION['username'])){
                    require_once "connect.php";
                    require_once "class.php";
                    require_once "class.contr.php";
                    require_once "class.view.php";
                    echo'<h1>Salut    '. $_SESSION['username'] .'</h1>';
                    echo '<p><a href="logout.php">LOG OUT</a></p>';
                    $contr = new contr;
                    $contr->get_the_10_last_contoare_contr();
                    echo '<br><br>';
                }else{
                    echo '<p><a href="login.php">Log In!</a></p>';
                    echo '<p><a href="index.php">Sign Up!</a></p>';
                }
                ?>
</body>



