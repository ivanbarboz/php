<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h2>Ingrese un numero</h2>
        <input type="text" name="numero">
        <input type="submit" name="subir">
    </form>

    <?php
    $numero = $_REQUEST['numero'];
    if(is_numeric($numero)){
        if ($numero %2 == 0){
            echo " El numero $numero es par";
        }else{
            echo "El numero $numero es impar";
        }
    }else{
        echo "Usted no a ingresado ningun numero";
    }
    
    ?>
</body>
</html>