<?php
function factorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

$num = 5;
$resultado = factorial($num);
echo "El factorial de $num es: $resultado";
?>
