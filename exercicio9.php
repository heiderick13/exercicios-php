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
        <input type="number" name="tempC" placeholder="Temperatura em Farenheit">
        <button>Converter para Farenheit</button>
    </form>

    <?php
        $tempC = $_GET["tempC"];
        $tempF = ($tempC * 9/5) + 32;

        echo "Temperatura em Farenheit: {$tempF}.";
    ?>
</body>
</html>