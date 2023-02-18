<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Sequência de fibonacci até o termo lido na URL -->

    <?php
        if(isset($_GET['numUrl'])) {
            $numUrl = $_GET['numUrl'];
        } else {
            $numUrl = 0;
        };

        $aux = 0;
        $aux2 = 1;

        echo $aux2 . " ";

        for ($i = 1; $i < $numUrl; $i++) {
            echo(($res = $aux + $aux2) ." ");
            $aux = $aux2;
            $aux2 = $res;
        }

    ?>
</body>

</html>