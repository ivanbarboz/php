<?php
$amigos = array ('jose<br>', 'maria<br>', 'raul<br>', 'sara<br>',
'pedro<br>', 'camila<br>', 'luis<br>', 'david<br>');

$compañeros = array ('sergio<br>', 'hugo<br>', 'carla<br>', 'elias<br>');

$funcion = array_merge($amigos,$compañeros);
print_r($funcion);

/*$funcion = array_chunk($amigos,2);
print_r($funcion);    // separa el array de 2 en 2*/ 


/*$funcion = array_slice($amigos,4);
print_r($funcion);    // borra los elementos a partir del indice puesto*/

?>