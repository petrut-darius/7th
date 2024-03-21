<?php
if(isset($_POST['submit']))
{
    $valoare = $_POST['valoare'];
    $link_poza = $_POST['link_poza'];
    $id = $_POST['nume_contor'];

    require_once "connect.php";
    require_once "class.php";
    require_once "class.contr.php";
    require_once "class.view.php";

    $view = new view;
    $contr = new contoare;

    if($view->empty_input_login($valoare,$id) === true){
        header("Location: create_index.php?cris=empty_input");
    }elseif($contr->create_index($id,$link_poza,$valoare) === true){
        header("Location: create_index.php?cris=none4");
    }else{
        echo 'bai nesimtititule';
    }
}
else
{
    echo 'abcd';
}