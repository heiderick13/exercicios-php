<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="">
        <input type="text" name="int1" placeholder="Primeiro inteiro">
        <input type="text" name="int2" placeholder="Segundo inteiro">
        <input type="text" name="float1" placeholder="Número real">
        <button>Mostrar cálculos</button>
    </form>

    <?php
        $inteiro1 = $_GET["int1"];
        $inteiro2 = $_GET["int2"];
        $flutuante1 = $_GET["float1"];


        echo "produto do dobro do primeiro com metade do segundo: " . (($inteiro1 * 2) * ($inteiro2 / 2)) . "<br/>";
        echo "soma do triplo do primeiro com o terceiro: " . (($inteiro1 * 3) + $flutuante1) . "<br/>";
        echo "terceiro elevado ao cubo: " . ($flutuante1 ** 3) . "<br/>";

    ?>
</body>
</html>