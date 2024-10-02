<?php
include("./libreria/operaciones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacioes Aritmeticas</title>
</head>
<body>
    <?php
    $edad = 20;
    $resultado = verificar_mayoria_edad($edad);
    echo $resultado; 
    ?>
</body>
</html>
