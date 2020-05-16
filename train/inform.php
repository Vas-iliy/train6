<?php
include_once ('functions.php');
$state = giveState();
$id = $_GET['id'];
$content = $state[$id];
?>

<div>
    <div>
        <h1><?=$content['name']?></h1>
        <hr>
        <div>
            <?=$content['text']?>
        </div>
        <hr>
        <a href="delete.php?id=<?=$id?>">Удалить статью</a>
    </div>
    <a href="fix.php?id=<?=$id?>">Исправить</a>
</div>
<hr>
<a href="index.php">Вернуться на главную</a>

