<?php
if(isset($_POST['submit'])){

    require_once "connect.php";
    require_once "class.php";
    require_once "class.contr.php";
    require_once "class.view.php";
    
    $contoare = new contoare;
    $view = new view;
    $contr = new contr;

    $username = $_POST['username'];
    $nume = $_POST['name'];
    $prenume = $_POST['sur_name'];
    $email = $_POST['gmail'];
    $telefon = $_POST['phone'];

    if($view->empty_input($username,$email,$telefon,$nume,$prenume) === true){
        header("Location: index.php?cris=empty_input");
        exit();
    }else if($view->invalidusername($username) === true){
        header("Location: index.php?cris=invalid_username");
        exit();
    }else if($view->email_invalid($email) === true){
        header("Location: index.php?cris=email_incorect");
        exit();
    }else if($contr->invalid_username_contr($username) === true){
        header("Location: index.php?cris=username_invalid");
        exit();
    }else if($contr->invalid_email_contr($email) === true){
        header("Location: index.php?cris=email_invalid");
        exit();
    }else{
        $contr->create_user_contr($username,$nume,$prenume,$email,$telefon) === true; 
        header("Location: ultimele intrari.php?cris=none");
        exit();
    }
    

}else{
    echo 'b';
}