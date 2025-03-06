<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="html">
    <meta name="author" content="Richard Rocuant">
    <title>Carga de archivo</title>
</head>
<body>
    <h3>Subir archivo con PHP</h3>
    <form action="n72carga2.php" method="POST" enctype="multipart/form-data" class="FormularioAjax"  >
        <input type="file" name="fichero" accept=".jpg, .png, .jpeg" >
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <script src="n73ajax.js"></script>
</body>
</html>