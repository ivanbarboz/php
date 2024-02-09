<?php
function tiempoCaídaLibre($altura) {
    $gravedad = 9.81; // Aproximadamente 9.81 m/s^2 en la superficie de la Tierra
    return sqrt((2 * $altura) / $gravedad);
}

$altura = 100; // Altura en metros
$tiempo = tiempoCaídaLibre($altura);
echo "El tiempo en caída libre desde una altura de $altura metros es: $tiempo segundos";
?>
