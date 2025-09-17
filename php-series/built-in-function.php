<?php

$name = 'petrus handika';

// ucwords
echo ucwords($name) . "<br>";

// date
echo date('d M') . "<br>";
echo date('d-m-Y H:i:s') . "<br>";

// hash
echo md5('petrus') . "<br>";

// strlen
$password = 'secret';
echo strlen($password) . "<br>";

// str_word_count
echo str_word_count($name) . "<br>";
