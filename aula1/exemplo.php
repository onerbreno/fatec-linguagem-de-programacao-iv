<?php
    $mensagem1 = "Boa tarde";
    $mensagem2 = "Turma ADS";
    $soma = 100 + 2;
    $soma = 100 + 2;
    define("valor", 10);
    define("Valor", 20);
    define("valoR", 30);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo php</title>
</head>
<body>
    <?php
        echo "<br><strong>HTML no PHP</strong><br>";
        echo "var: " .$mensagem1;
        echo "<br>";
        echo "var: " .$mensagem1;
        echo "<br>";

        echo "var: " .$soma;
        echo "<br>constante: " .valor;
    ?>
</body>
</html>