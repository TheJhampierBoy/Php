<?php
function verificar_mayoria_edad($edad) {
    if ($edad>=18) {
        return "La persona es mayor de edad.";
    } else {
        return "La persona es menor de edad.";
    }
}
?>
