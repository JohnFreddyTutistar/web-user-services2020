<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de inicio</title>
</head>
<body>
    <?php
        require 'reut/header.php';
    ?>
    <h1>Registrate o Accede</h1>

    <a href="Registro_cliente.html">Registrate</a> o
    <a href="login.html">Inicia Sesion</a> 
    <div class="panelorden">
        <form action="" class="form" method="post">
            <label for="buscar" class="form-label">Buscar:</label>
            <input type="text" id="buscar" name="buscar" class="form-input" placeholder="Ej: helado">
            <input type="submit" class="btn-submit" value="ir">
        </form>
        <label for="buscar" class="form-label">Pedido:</label>
        <div class="panelpedido">
            
        </div>
    </div>
    <div class="panelmenu">
        
    </div>
    
    
</body>
</html>