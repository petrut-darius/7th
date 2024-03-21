<?php
session_start();
if(isset($_SESSION['username'])){   
    session_destroy();
    session_unset();
    header("Location: index.php?cris=1");
}else{
    header("Location: index.php?cris=2");
}