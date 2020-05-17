<?php

/*$f = fopen('db.txt', 'w');
for ($i=0; $i < 1000000; $i++) {
    fwrite($f, mt_rand(1000000, 10000000));
}
fclose($f);*/
/*
$a = file('db.txt');
echo memory_get_usage();*/

$f = fopen('db.txt', 'r');

while (!feof($f)) {
    $str = fgets($f);
    var_dump($str);
    break;
}

fclose($f);
