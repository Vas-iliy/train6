<?php
//этот метод возврета записей, если их много
function getApps (): array {
    $lines = file('appsWrite.txt');
    $apps = [];

    foreach ($lines as $line) {
        $apps[] = appstrToArr($line);
    }

    return $apps;
}

//возвращает массив строк из нашей записи
function appstrToArr ($str) {
    $str = rtrim($str); //вырезает ненужные символы
    $parts = explode(';', $str);
    return ['dt'=>$parts[0], 'name'=>$parts[1], 'phone'=>$parts[2]];
}

//сейчас просто заносим в конец файла запись, но теперь нельзя редактировать, так как мы не открываем файл
function newApps ($name, $phone): bool {
    $dt = date('Y-d-m H:i:s');
    $app = "$dt; $name; $phone\n";
    file_put_contents('appsWrite.txt', $app, FILE_APPEND);
    return true;
}
$apps = getApps();
?>

<table>
    <tr>
        <td>Date</td>
        <td>Name</td>
        <td>Phones</td>
    </tr>
    <? foreach ($apps as $ap):?>
    <tr>
        <td><?=$ap['dt']?></td>
        <td><?=$ap['name']?></td>
        <td><?=$ap['phone']?></td>
    </tr>
    <?endforeach;?>
</table>