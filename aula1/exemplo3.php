<?php
    define("N1", 5);
    define("N2", 6);
    define("N3", 7);
    define("N4", 10);

    $soma = (N1 + N2 + N3 + N4) ;
    $media = $soma / 4;
    $mediaPonderada = (N1 * 1) + (N2 * 2) + (N3 * 3) + (N4 * 4) / (1 + 2 + 3 + 4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <!-- Média aritmética e ponderada -->
    <?php
        echo "<font color='blue'>$media</font><br>";
        echo "<font color='pink'>$mediaPonderada</font>";
    ?>
</body>
</html>