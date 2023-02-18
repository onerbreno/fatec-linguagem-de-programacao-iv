<?php
    define("nome","Breno");
    define("sobrenome", "Dias");
    define("idade", 19);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício1</title>
</head>
<body>
    <!-- PHP no HTML e HTML no PHP -->

    <font color="blue"> 
        <?php
        echo "Meu nome é <strong>".nome."</strong>";
        ?>
    </font>
    <br/>
    <font color="red"> 
        <?php
        echo "Meu sobrenome é:  <strong>".sobrenome."</strong>";
        ?>
    </font>
    <br/>
    <font color="purple"> 
        <?php
        echo "Tenho:  <strong>".idade." </strong>anos";
        ?>
    </font>
</body>
</html>