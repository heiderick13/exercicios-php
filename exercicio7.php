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
        <input type="number" name="numero1" placeholder="Quanto você ganha/h">
        <input type="number" name="numero2" placeholder="Quantas horas trabalha/mês">
        <button>Calcular salário</button>
    </form>

    <?php
        $n1 = $_GET["numero1"];
        $n2 = $_GET["numero2"];
        $salario = ($n1*$n2);

        echo "Seu salário esse mês será {$salario}.";


    ?>
</body>
</html>