<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="n1">Número 1: </label>
        <input type="number" name="n1" id="n1" required>
        <br>
        <br>
        <label for="n2">Número 2: </label>
        <input type="number" name="n2" id="n2" required>
        <br>
        <br>
        <input type="radio" name="operacao" value="divisao" checked="checked"> Divisão
        <input type="radio" name="operacao" value="potenciacao"> Potenciação
        <br>
        <br>
        <button>Calcular</button>
        <br>
        <br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $resultado = 0;
            $n1 = $_POST["n1"] ?? 0;
            $n2 = $_POST["n2"] ?? 0;
            $operacao = $_POST["operacao"] ?? 'divisao';

            if ($n1 > 0 && $n2 > 0) {
                if ($operacao == 'potenciacao') {
                    $aux = 1;
                    for ($i=0; $i < $n2; $i++) { 
                        $aux *= $n1;
                    }
                    $resultado = $aux;
                } else {
                    while ($n1 >= $n2) {
                        $n1 = $n1 - $n2;
                        $resultado++;
                    }
                }
                echo "Resultado: " . $resultado;
            }
        }

        ?>

    </form>
</body>

</html>