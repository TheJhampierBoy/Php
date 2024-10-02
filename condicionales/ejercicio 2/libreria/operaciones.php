<?php
function edades($panioNac, $panioAct) {
    $edad = $panioAct - $panioNac;
    if ($edad > 17) {
        $mensaje = $edad . " años. Es mayor de edad.";
    } else {
        $mensaje = $edad . " años. Es menor de edad.";
    }
    return $mensaje;
}
?>
