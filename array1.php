<?php
$semana [0] = 'lunes<br>';
$semana [1] = 'martes<br>';
$semana [2] = 'miercoles<br>';
$semana [3] = 'jueves';
$semana [4] = 'viernes<br>';
$semana [5] = 'sabado<br>';
$semana [6] = 'domingo<br>';

for ($i=0; $i<count($semana); $i++){
    if ($semana[$i] == 'jueves'){
        echo 'curso de php';
    }
}
?>