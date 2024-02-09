<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <label for="numero">Ingrese un numero</label>
    <input type="number" name="numero">
    <input type="submit" value="comprobar">
    </form>

<?php

    // Verifica si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura el número ingresado por el usuario
        $numero = $_POST["numero"];

        // Verifica si el número es par o impar
        if ($numero % 2 == 0) {
            echo "<p>El número $numero es par.</p>";
        } else {
            echo "<p>El número $numero es impar.</p>";
        }
    }
?>

</body>
</html>
