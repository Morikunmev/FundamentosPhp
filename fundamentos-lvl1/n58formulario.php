<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="html">
    <meta name="author" content="Richard Rocuant">
    <title></title>
</head>
<body>
    <form action="n59index.php" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <br>
        <label for="asignatura">Asignatura</label>
        <select name="asignatura" id="asignatura">
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br><br>
        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas">
            Manzana
        </label>
        <br><br><br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>