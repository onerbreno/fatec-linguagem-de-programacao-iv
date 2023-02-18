<?php
if (isset($_GET['a'])) {
    $num = $_GET['a'];
} else {
    $num = 0;
}

    $termo = 0;
for ($i = 1; $i <= $num; $i++) {
    $termo++;
    if($termo % 2 == 0) {
        echo $termo;
    } else {
        echo 1;
    }
}
