<?php

// function one parameter
function red($string)
{
    echo "<div style='color: red;'>$string</div>";
}

red("Hello World");

// function two parameter
function sentence($color, $content)
{
    echo '<div style="color: '. $color .'">'. $content .'</div>';
};

sentence("blue", "Petrus Handika");
