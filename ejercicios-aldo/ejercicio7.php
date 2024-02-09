<?php
function distanciaConAceleracion($aceleracion, $tiempo) {
    return 0.5 * $aceleracion * $tiempo * $tiempo;
}

$aceleracion = 9.8; // Aceleración en m/s^2 (por ejemplo, la gravedad en la Tierra)
$tiempo = 5; // Tiempo en segundos

$distancia = distanciaConAceleracion($aceleracion, $tiempo);
echo "La distancia recorrida con una aceleración de $aceleracion m/s^2 durante $tiempo segundos es: $distancia metros";
?>
