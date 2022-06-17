<?php

$x = $argv[1];
$y = $argv[2];
$z = $argv[3];

if($y == "+") {
    $hasil = $x + $z;
} else if($y == "-") {
    $hasil = $x - $z;
} else if($y == "*") {
    $hasil = $x * $z;
} else if($y == "/") {
    $hasil = $x / $z;
} else {
    $hasil = "Argumen tidak benar";
}

print "\n ==================== \n\n Hasil : $x $y $z = $hasil\n\n ==================== \n";
