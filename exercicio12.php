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
        <input type="text" name="altura" placeholder="Sua altura"> <br/>
        <input type="radio" name="sexo" value="masc" id="">Masculino 
        <input type="radio" name="sexo" value="fem" id=""> Feminino <br/>
        <button>Calcular</button>
    </form>

    <?php
        $h = $_GET["altura"];

        if($_GET["sexo"] == "masc") {
            echo "Seu peso ideal é: " . (($h * 72.7)- 58) . "<br/>";
        } else {
            echo "Seu peso ideal é: " . (($h * 62.1)- 44.7) . "<br/>";
        }

    ?>
</body>
</html>