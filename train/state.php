<?php
include_once ('functions.php');
if ($_POST['name']) {
    $name = $_POST['name'];
    $text = $_POST['text'];
    $new = newState($name, $text);
}

if ($new) {
    header('Location:index.php');
}
?>


<div>
    <form method="post">
        <input type="text" name="name" required placeholder="Название">
        <textarea type="text" name="text" required placeholder="Текст статьи" id="" cols="30" rows="10"></textarea><br/>
        <input type="submit" name="go" value="Добавить">
    </form>
</div>
