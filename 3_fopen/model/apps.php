<?php
//этот метод возврета записей, если их много
function getApps (): array {
    $f = fopen('db\apps.txt', 'r');
    $str = fread($f, filesize('db\apps.txt'));
    $lines = explode("\n", $str);
    unset($lines[count($lines)-1]);

    $apps = [];

    foreach ($lines as $line) {
        $apps[] = appstrToArr($line);
    }

    return $apps;
}

//возвращает массив строк из нашей записи
function appstrToArr ($str) {
    //$str = rtrim($str); //вырезает ненужные символы
    $parts = explode(';', $str);
    return ['dt'=>$parts[0], 'name'=>$parts[1], 'phone'=>$parts[2]];
}

//сейчас просто заносим в конец файла запись, но теперь нельзя редактировать, так как мы не открываем файл
function newApps ($name, $phone): bool {
    $dt = date('Y-d-m H:i:s');
    $app = "$dt; $name; $phone\n";
    // тут мы делаем записть с помощью функции fopen
    $f = fopen('db\apps.txt', 'a');
    fwrite($f, $app);
    fclose($f);
    return true;
}
$apps = getApps();
?>
