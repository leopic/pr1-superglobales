<?php
    /**
     * Las variables de ambiente se cargan cuando al aplicacion inicia,
     * durante el proceso de bootstrapping.
     * Usualmente se toman de la maquina en donde corre la aplicacion y
     * contienen informacion como acceso a la BD, tipo de ambiente (local, prueba, produccion)
     * y cualquier otra informacion que cambie entre ambientes.
     */

    // Definimos una nueva variable
    $_ENV['ambiente'] = 'local';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Uno: Ejemplo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="col-md-4 col-md-offset-4">
    <?php
        $active = "env";
        include("partials/_header.php");
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>$_ENV</h3>
        </div>
        <div class="panel-body">
            <pre><?php var_dump($_ENV); ?></pre>
        </div>
    </div>
</div>
</body>
</html>
