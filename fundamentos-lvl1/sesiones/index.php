<?php 
    session_name("LOGIN");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="html">
    <meta name="author" content="Richard Rocuant">
    <title>Sesiones en PHP</title>
</head>
<body>
    <form action="login.php" method="post">
        <label>Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z]{3,10}" maxlength="10">
        <br>
        <label>Clave</label>
        <input type="password" name="clave" pattern="[a-zA-Z0-9$@.-]{4,30}" maxlength="30">
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>