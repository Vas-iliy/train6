<?php
// Хранение инфформации и Json
$err = '';
$isSet = false;

include_once ('model/apps.php');

if ($_POST) {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);

    if (mb_strlen($name, 'UTF8')<2) {
        $err = 'Имя не короче двух символов';
    }

    newApps($name, $phone);

} else {
    $name = '';
    $phone = '';
}

if ($_POST) {
    header('Location:index.php');
}

if ($_GET['admin']) {
    header('Location:admin.php');
}

?>

<div class="form">

        <form method="post">
            Name: <input type="text" name="name" value="<?=$name?>" required> <br/>
            Phone: <input type="text" name="phone" value="<?=$phone?>" required> <br/>
            <button>Отправить</button>
            <p><?=$err?></p>
        </form>
</div>

<div>
    <form method="get">
        <input type="submit" name="admin" value="В админку">
    </form>
</div>