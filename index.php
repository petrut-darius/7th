<?php require_once 'cris_get.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php require_once 'session.php'?>

    <form action="index_redirect.php" method="post">
        <span>Username: </span><input type="text" placeholder="Username" name="username"><br><br>
        <span>Nume: </span><input type="text" placeholder="Nume" name="name"><br><br>
        <span>Prenume:  </span><input type="text" placeholder="Prenume" name="sur_name"><br><br>
        <span>Email:    </span><input type="email" placeholder="Email" name="gmail"><br><br>
        <span>Telefon:  </span><input type="text" placeholder="Telefon" name="phone"><br><br>
        <button type="submit" name='submit'>poa sa fuga, o sa-i prinda niste gloante</button>
    </form>
    <p>Ai deja creat un cont, <a href="login.php" style="color:red;">Log IN !</a></p>
</body>
</html>