<?php 
    require_once 'connect.php';
    require_once 'class.php';
    require_once 'class.contr.php';
    require_once 'cris_get.php';
    $contr = new contr;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php require_once 'session.php' ?>
    <form action="contoare_update_redirect.php" method="post">
        <span>Alege contorul:   </span><?php $contr->choose_a_contor_contr();?>
        <span>Seria 1:  </span><input type="text" placeholder="serie" name="serie"><br><br>
        <span>Seria 2(optional):    </span><input type="text" placeholder="Serie 2(optional)" name="serie2"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>