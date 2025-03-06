<?php 
    setcookie("Idioma","es",time()+60*60*24*365,"/","localhost",false,true)

?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="html">
    <meta name="author" content="Richard Rocuant">
    <title>Cookies</title>
</head>
<body>
    <h1><?php echo $_COOKIE["Idioma"];?></h1>
</body>
</html>