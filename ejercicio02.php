<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="edad">Ingrese edad</label>
        <input type="number" name="edad">
        <input type="submit" value="comprobar">

        <?php
if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    $edad = $_POST["edad"];

    if ($edad >=18){
        echo "<p>Usted es mayor de edad</p>";
    }else {
        echo "<p>Usted es menor de edad</p>";
    }
}


echo "<p>hola mundo</p>";
echo "hola mundo";
?>
    </form>
</body>
</html>