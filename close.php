<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/articulo.css" type="text/css">
    <title>Cerrar secion</title>
</head>
<body>
    <?php
        session_start();
        session_destroy();
        echo "<p>Cesion finalizada</p><br><a href='index.html'>volver</a>";
    ?>
</body>
</html>