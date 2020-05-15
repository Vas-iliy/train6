<?php

include_once ('model/apps.php');

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
