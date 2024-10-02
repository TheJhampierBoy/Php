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
$nota1 = 4.2;
$nota2 = 3.8;
$nota3 = 4.5;

$porceNota1 = nota1($nota1);
$porceNota2 = nota2($nota2);
$porceNota3 = nota3($nota3);

$notaFinal = $porceNota1 + $porceNota2 + $porceNota3;
$mensaje = suma($notaFinal);

echo "El porcentaje de nota 1 es: " . $porceNota1 . "<br>";
echo "El porcentaje de nota 2 es: " . $porceNota2 . "<br>";
echo "El porcentaje de nota 3 es: " . $porceNota3 . "<br>";
echo $mensaje . $notaFinal;

    ?>
</body>
</html>