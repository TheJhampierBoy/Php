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
$anioNacimiento = 2005;
$anioActual = 2024;
$resultado = edades($anioNacimiento, $anioActual);
echo $resultado;
    ?>
</body>
</html>
