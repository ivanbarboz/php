<?php
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

$celsius = 25; // Temperatura en grados Celsius
$fahrenheit = celsiusToFahrenheit($celsius);
echo "$celsius grados Celsius son equivalentes a $fahrenheit grados Fahrenheit";
?>
