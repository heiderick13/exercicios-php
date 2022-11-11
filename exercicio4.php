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
        <input type="number" name="numero1" placeholder="Digite um número">
        <input type="number" name="numero2" placeholder="Digite um número">
        <input type="number" name="numero3" placeholder="Digite um número">
        <button>Mostrar média</button>
    </form>

    <?php
        $n1 = $_GET["numero1"];
        $n2 = $_GET["numero2"];
        $n3 = $_GET["numero3"];
        $media = ($n1+$n2+$n3) / 3;

        echo "A média entre os números é {$media}";
    ?>
</body>
</html>