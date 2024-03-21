<?php

if(isset($_POST['submit'])){

    require_once "connect.php";
    require_once "class.php";
    require_once "class.contr.php";
    require_once "class.view.php";
    
    $view = new view;
    $contr = new contr;

    $username = $_POST['username'];
    $email = $_POST['gmail'];


    
    if($view->empty_input_login($username,$email) === true){
        header("Location: login.php?cris=empty_input");
    }else{
        $contr->log_in($username,$email);
        header("Location: ultimele intrari.php?cris=none2");
    }
}