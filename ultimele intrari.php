<?php

require_once "connect.php";
require_once "class.php";
require_once "class.contr.php";
require_once "class.view.php";
require_once 'cris_get.php';

$contr = new contr;

$contr->get_the_10_last_contoare_contr();

echo '<p>Vrei sa creezi un contor, <a href="contoare.php" style="color:red;">catre Contoare!</a></p>';