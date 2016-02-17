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
        $active = "request";
        include("partials/_header.php");
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>$_REQUEST</h3>
        </div>
        <div class="panel-body">
            <pre><?php var_dump($_REQUEST); ?></pre>
        </div>
    </div>
</div>
</body>
</html>
