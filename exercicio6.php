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
        <input type="number" name="numero1" placeholder="Insira a medida do lado">
        <input type="number" name="numero2" placeholder="Insira a Calcular áreaa do lado">
        <button>Calcular área</button>
    </form>

    <?php
        $n1 = $_GET["numero1"];
        $n2 = $_GET["numero2"];
        $area = ($n1*$n2);
        $dobroArea = $area*2;

        echo "A área do quadrado é {$area}. <br/>";
        echo "O dobro da área do quadrado é {$dobroArea}.";


    ?>
</body>
</html>