<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Tabuada usando valor passado na URL 
    http://localhost:3000/aula2/exercicio1.php?a=5

    ?a=5

    -->
    <?php

        if (isset($_GET['a'])) {
            $a = $_GET['a'];
        } else {
            $a = 0;
        };

        for($i = 1; $i<11; $i++ ){
            echo($a." X ".$i." = ".($a*$i));
            echo("<br>");
        }
    ?>
</body>
</html>