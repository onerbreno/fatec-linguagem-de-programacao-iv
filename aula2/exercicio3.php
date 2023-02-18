<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Calcular e exibir fatorial de um número passado pela URL -->

    <?php 
    if(isset($_GET['a'])) {
        $numUrl = $_GET['a'];
    } else {
        $numUrl = 0;
    }
    $fat = 1;
    for ($i = $numUrl; $i >= 1; $i--) { 
        $fat *= $i;
    }
    echo $fat
    
    ?>
</body>
</html>