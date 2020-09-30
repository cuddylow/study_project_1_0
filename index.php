<?php

$styles = ["style_1.css", "style_2.css", "style_3.css"];

function getRandomStyle($styles)
{
    $random_index = rand(0, 2);
    return $styles[$random_index];
}

$result = getRandomStyle($styles);

$isRandomStyleNeeded = isset($_GET['randomStyleNeeded']);

require "main_page.php";
