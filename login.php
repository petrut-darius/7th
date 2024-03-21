<?php require_once 'cris_get.php';?>
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

    <form action="login_redirect.php" method="post">
        <p></p><input type="text" placeholder="Username" name="username"><br><br>
        <p></p><input type="text" placeholder="Email" name="gmail"><br><br>
        <button type="submit" name='submit'>poa sa fuga, o sa-i prinda niste gloante</button>
    </form>
    <p>Nu ai un cont creat, <a href="index.php" style="color:red;">Sign Up!</a></p>
</body>
</html>