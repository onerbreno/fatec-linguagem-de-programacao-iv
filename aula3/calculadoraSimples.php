<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <style>
        * {
            margin: 0;
        }

        div {
            width: max-content;
            margin: 0 auto;
            padding: 1rem;
        }

        h1 {
            text-align: center;

        }

        form {
            display: grid;
            grid-template-rows: auto auto 50px;
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        fieldset:nth-of-type(2) {
            display: grid;
            gap: 1rem;
            grid-template-columns: 1fr;
        }
    </style>
</head>

<body>
    <div>

        <h1>Calculadora</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <fieldset>
                <legend>Valores</legend>
                <label for="n1">1º Número: </label>
                <input type="number" name="n1" id="n1" required>
                <br><br>
                <label for="n2">2º Número: </label>
                <input type="number" name="n2" id="n2" required>
            </fieldset>
            <fieldset>
                <legend>Operação matemática</legend>
                <span>
                    <input type="radio" name="op" id="soma" value="soma" required>
                    <label for="soma">Soma</label>
                </span>

                <span>
                    <input type="radio" name="op" id="subtracao" value="subtracao">
                    <label for="subtracao">Subtração</label>
                </span>

                <span>
                    <input type="radio" name="op" id="multi" value="multi">
                    <label for="multi">Multiplicação</label>
                </span>

                <span>
                    <input type="radio" name="op" id="divisao" value="divisao">
                    <label for="divisao">Divisão</label>
                </span>

            </fieldset>

            <button type="submit">Calcular</button>
        </form>
        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $n1 = isset($_POST["n1"]) && is_numeric($_POST["n1"]) ? $_POST["n1"] : 0;
            $n2 = isset($_POST["n2"]) && is_numeric($_POST["n2"]) ? $_POST["n2"] : 0;

            switch ($_POST["op"]) {
                case 'soma':
                    $res = $n1 + $n2;
                    break;
                case 'subtracao':
                    $res = $n1 - $n2;
                    break;
                case 'multi':
                    $res = $n1 * $n2;
                    break;
                case 'divisao':
                    if ($n2 != 0) {
                        $res = $n1 / $n2;
                    } else {
                        $res = "Divisão por zero";
                    }
                    break;
                default:
                    $res = "";
            }
            echo '<span>Resultado: ' . $res . '</div>';
        }
        ?>
    </div>


</body>

</html>