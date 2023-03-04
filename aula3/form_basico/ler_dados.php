<?php
$nome = $_POST["nome"] ?? "";
$senha = $_POST["senha"] ?? "";

$senhaCriptografada = password_hash($senha, PASSWORD_BCRYPT);

$idade = $_POST["idade"] ?? 0;
$estado = $_POST["estado"] ?? "";
$sexo = $_POST["sexo"] ?? "";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
</head>

<body>
    <h1>Dados Pessoais</h1>
    <p>Nome: <?= $nome ?></p>
    <p>Senha: <?= $senhaCriptografada ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Estado: <?= $estado ?></p>
    <p>Sexo: <?= $sexo ?></p>
    <?php if (isset($_POST["idUser"])) : ?>
    <p><br /><b><?= $_POST["idUser"] ?></b></p>
    <?php endif; ?>
</body>

</html>
