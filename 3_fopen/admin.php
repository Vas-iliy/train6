<?php

include_once ('model/apps.php');

$apps = getApps();

if ($_GET['index']) {
    header('Location:state.php');
}
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

<div>
    <form method="get">
        <input type="submit" name="index" value="На главную">
    </form>
</div>
