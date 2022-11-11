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
        <input type="number" name="numero1" placeholder="Temperatura em Farenheit">
        <button>Converter para Celsius</button>
    </form>

    <?php
        $tempF = $_GET["numero1"];
        $tempC = (5 * ($tempF - 32) / 9);

        echo "Temperatura em Celsius: {$tempC}.";


    ?>
</body>
</html>