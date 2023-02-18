<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['sexo'])) {
        define("sexo", strtoupper($_GET['sexo']));
    } else {
        define("sexo", 0);
    }
    if (isset($_GET['altura'])) {
        define("altura", strtoupper($_GET['altura']));

    } else {
        define("altura", $_GET['altura']);

    }

    $pesoIdeial = 0;
    if (sexo == 'F') {
        echo "Peso ideal: " .$pesoIdeial = (62.1 * altura) - 44.7;
    } else if(sexo == 'M') {
        echo "Peso ideal: " .$pesoIdeial = (72.7 * altura) - 58;
    } else {
        echo "Sexo inválido";
    }


    ?>
</body>

</html>