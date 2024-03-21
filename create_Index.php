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
    <form action="create_index_redirect.php" method="post">
        <span>Alege contorul:   </span><?php $contr->choose_a_contor_contr();?>
        <span>Link/Poza:    </span><input type='url' placeholder="Link" name="link_poza"><br><br>
        <span>Valoarea Index-ului:  </span><input type="number" placeholder="Index" name="valoare"><br><br>
        <button type="submit" name='submit'>poa sa fuga, o sa-i prinda niste gloante</button>
    </form>
    <p>Vrei sa creezi un contor, <a href="contoare.php" style="color:red;">catre Contoare!</a></p>
</body>
</html>