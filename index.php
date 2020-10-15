<?php
    include 'Rectangle.php';
    $width = 10;
    $height = 20;
    $rectangle = new Rectangle($width, $height);
    echo $rectangle->width . "<br>";
    echo $rectangle->height. "<br>";
    echo $rectangle->height. "<br>";
    echo $rectangle->width. "<br>";
    echo $rectangle->getPerimeter(). "<br>";
    echo $rectangle->getArea(). "<br>";
    echo ("Your Rectangle : ". $rectangle->display());
?>
