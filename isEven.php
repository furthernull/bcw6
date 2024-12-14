<?php

    $x = intval(trim(fgets(STDIN))); 

    if ($x % 2 == 0) {
        echo 'yes' . PHP_EOL;
    } else {
        echo 'no' . PHP_EOL;
    }

?>
