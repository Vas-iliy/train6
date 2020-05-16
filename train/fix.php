<?php
include_once ('functions.php');
$state = giveState();
$id = $_GET['id'];
$string = $state[$id];

if ($_POST['go']) {
    $name = $_POST['name'];
    $text = $_POST['text'];
    $fix = redactorState($id, $name, $text);
}

if ($fix) {
    header('Location:index.php');
}
?>

<div>
    <form method="post">
        <input type="text" name="name" value="<?=$string['name']?>"><br/>
        <textarea type="text" name="text" id="" cols="30" rows="10"><?=$string['text']?></textarea><br/>
        <input type="submit" name="go" value="Исправить">
    </form>
</div>
