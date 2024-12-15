<?php
    require_once("paper.php");
    require_once("pen.php");
    require_once("autoPen.php");

    $pen = new AutoPen();
    $paper = new Paper();

    echo $pen . PHP_EOL;
    echo $paper . PHP_EOL;

    try {
        $pen->write($paper, "Hello, world");
    } catch (Exception $e) {
        $pen->prepare();
        $pen->write($paper, "Hello, world");
    }
    
    echo $pen . PHP_EOL;
    echo $paper . PHP_EOL;
?>
