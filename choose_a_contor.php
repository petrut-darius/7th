<?php


if(isset($_SESSION['username'])){
    require_once "connect.php";
    require_once "class.php";
    require_once "class.contr.php";
    require_once "class.view.php";
    
    $contr = new contr;
    
    $contr->choose_a_contor_contr();


}else{
    exit();
}