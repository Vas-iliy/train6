<?php

function getApps (): array {
   $str = file_get_contents('db/apps.txt');
   return json_decode($str, true);
}
//сейчас просто заносим в конец файла запись, но теперь нельзя редактировать, так как мы не открываем файл
function newApps ($name, $phone): bool {
    $dt = date('Y-d-m H:i:s');
    $app = "$dt; $name; $phone\n";
    file_put_contents('db/apps.txt', $app, FILE_APPEND);
    return true;
}

