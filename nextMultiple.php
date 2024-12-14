<?php

    function readInt() {
        return intval(rtrim(fgets(STDIN)));
    }

    $dividend = readInt();
    $divisor = readInt();
    $multiple = NULL;

    if ( $divisor < 0 ) {
        $divisor *= -1;
    }

    $multiple = ($dividend / $divisor) * $divisor;
    
    if ( $multiple < $dividend ) {
        $multiple += $divisor;
    }

    echo $multiple . PHP_EOL;
?>
