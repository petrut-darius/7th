<?php 
    require_once 'connect.php';
    require_once 'class.php';
    require_once 'class.contr.php';
    require_once 'cris_get.php';
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
    <form action="contoare_redirect.php" method="post">
        <span>Nume contor:   </span><input type="text" placeholder="Nume contor" name="name_of_contor"><br><br>
        <span>Seria 1:  </span><input type="number" placeholder="serie" name="serie"><br><br>
        <span>Seria 2(optional):    </span><input type="number" placeholder="Serie 2(optional)" name="serie2"><br><br>
        <button type="submit" name="submit">trimite</button>
    </form>
    <br><br><br>
    <p>Vrei sa adaugi un index unui contor? <a href="create_Index.php">catre Index!</a></p>
    <p>Vrei sa adaugi un update unui contor? <a href="contoare_update.php">catre Update la contoareeee!</a></p>
</body>
</html>