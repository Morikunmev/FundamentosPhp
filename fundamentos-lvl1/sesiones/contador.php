<?php 
    session_name("LOGIN");
    session_start();
?>

<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="html">
    <meta name="author" content="Richard Rocuant">
    <title>Sesiones en PHP</title>
</head>
<body>
    <?php echo "Hola ".$_SESSION["Nombre"]."";?>
    <a href="cerrar.php">Eliminar sesion</a>
    
</body>
</html>