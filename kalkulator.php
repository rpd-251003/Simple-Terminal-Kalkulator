<?php

$x = $argv[1];
$y = $argv[2];
$z = $argv[3];

if($y == "+") {
    $x += $z;
} else if($y == "-") {
    $x -= $z;
} else if($y == "*") {
    $x *= $z;
} else if($y == "/") {
    $x /= $z;
} else {
    $hasil = "Argumen tidak benar";
}

print "\n ==================== \n\n Hasil : $x\n\n ==================== \n";
