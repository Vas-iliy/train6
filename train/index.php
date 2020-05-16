<?php
include_once ('functions.php');
$state = giveState();
?>

<a href="state.php">Добавить статью</a>
<hr>
<div>
    <?foreach ($state as $id => $st):?>
    <div>
        <h1><?=$st['name']?></h1>
        <a href="inform.php?id=<?=$id?>">Перейти</a>
    </div>
    <?endforeach;?>
</div>
