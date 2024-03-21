<?php

if(isset($_POST['submit'])){

    require_once "connect.php";
    require_once "class.php";
    require_once "class.contr.php";
    require_once "class.view.php";
    
    $contr = new contr;
    $view = new view;

    $contor_name = $_POST['nume_contor'];
    $serie = $_POST['serie'];
    $serie2 =  $_POST['serie2'];


    
    //aicia trebuie functie sa vada inputurile
    if($view->empty_input_contoare($contor_name,$serie,$serie2) === true){
        header("Location: contoare_update.php?cris=empty_input");
        exit();
    }else{
        $contr->update_contor_contr($contor_name,$serie,$serie2);
        header("Location: contoare_update.php?cris=none5");
        exit();
    }
}else{
    echo 'b';
}