<?php

if(isset($_POST['submit'])){

    require_once "connect.php";
    require_once "class.php";
    require_once "class.contr.php";
    require_once "class.view.php";
    
    $contr = new contr;
    $view = new view;

    $contor_name = $_POST['name_of_contor'];
    $serie = $_POST['serie'];
    $serie2 =  $_POST['serie2'];
  
    if($view->empty_input_contoare($contor_name,$serie,$serie2) === true){
        header("Location: contoare.php?cris=empty_input");
    }else{
        if($contr->create_contor_contr($contor_name,$serie,$serie2) === true){
            header("Location: contoare.php?cris=could_not_create_contor");
        }else{
            header("Location: contoare.php?cris=none3");
        }
    }


}else{
    echo 'B';
}