<?php

function calcularAreaCirculo($radio) {
    return pi() * pow($radio, 2);
}

$radio = 5;
$area = calcularAreaCirculo($radio);
echo "El área del círculo con radio de $radio es: $area";
?>


