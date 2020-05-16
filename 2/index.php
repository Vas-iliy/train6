<?php
//Пользовательский формат хранилища
$err = '';
$isSet = false;

include_once('model/apps.php');

if ($_POST) {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);

    if (mb_strlen($name, 'UTF8')<2) {
        $err = 'Имя не короче двух символов';
    }
    else {
        newApps($name, $phone);
        $isSet = true;
    }
} else {
    $name = '';
    $phone = '';
}


?>

<div class="form">
    <? if ($isSet == true):?>
        <p>Ваша форма отправлена</p>
    <?else:?>
        <form method="post">
            Name: <input type="text" name="name" value="<?=$name?>" required> <br/>
            Phone: <input type="text" name="phone" value="<?=$phone?>" required> <br/>
            <button>Отправить</button>
            <p><?=$err?></p>
        </form>
    <?endif;?>
</div>