<?php
function nota1($nota) {
    $porceNota = $nota * 0.2;
    return $porceNota;
}
function nota2($nota) {
    $porceNota = $nota * 0.35;
    return $porceNota;
}
function nota3($nota) {
    $porceNota = $nota * 0.45;
    return $porceNota;
}
function suma($sumaNotas) {
    $calificacion = $sumaNotas;

    if ($calificacion >= 4.5) {
        $nota = "Es una nota superior: ";
    } elseif ($calificacion >= 3.5) {
        $nota = "La nota es buena: ";
    } elseif ($calificacion >= 3) {
        $nota = "La nota es media: ";
    } else {
        $nota = "Es una nota mala: ";
    }
    return $nota;
}
?>