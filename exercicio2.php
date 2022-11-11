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
        <button>Mostrar</button>
    </form>

    <?php
        $n1 = $_GET["numero1"];
        echo "O número informado foi: " . $n1;
    ?>
</body>
</html>