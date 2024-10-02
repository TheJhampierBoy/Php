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
$pdias = 20; 
$pvalorDia = 80000; 

echo "Salario: " . salario($pdias, $pvalorDia) . "\n" . "<br>";
echo "Subsidio de Transporte: " . subTransp($pdias, $pvalorDia)['subsidioTransporte'] . "\n"  . "<br>";
echo "Salud: " . salud($pdias, $pvalorDia)['salarioSalud'] . "<br>";
echo "Pensión: " . pension($pdias, $pvalorDia)['salarioPension'] . "<br>";
echo "Deducible: " . deducible($pdias, $pvalorDia)['salarioDeducible'] . "<br>";
echo "Pago Total: " . pagoTotal($pdias, $pvalorDia) . "<br>";
    ?>
</body>
</html>