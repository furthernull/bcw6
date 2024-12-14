<?php

    function readInt() {
            return intval(rtrim(fgets(STDIN)));
        }

    $max = readInt();
    $a = readInt();
    $b = readInt();

    if ( $a > $max ) {
      $max = $a;
    }
    if ( $b > $max ) {
        $max = $b;
    }

    echo $max . PHP_EOL;

?>
