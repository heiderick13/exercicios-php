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
        <input type="number" name="numero1" placeholder="Digite o primeiro número">
        <input type="number" name="numero2" placeholder="Digite o segundo número">
        <button>Mostrar soma</button>
    </form>

    <?php
        $n1 = $_GET["numero1"];
        $n2 = $_GET["numero2"];
        $soma = $n1+$n2;

        echo "A soma dos números é {$soma}"
    ?>
</body>
</html>