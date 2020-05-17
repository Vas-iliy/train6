<?php

$files = scandir('images');
$images = array_filter($files, function ($f) {
    return is_file("images/$f") && preg_match('/.*\.jpg$/', $f);
});


/*$images = [];
//тут мы убирали то что не относится к файлам
foreach ($files as $f) {
    if (is_file("images/$f") && preg_match('/.*\.jpg$/', $f)) { //preg_match - выбрасывает все что не заканчивается на .jpg
        $images[] = $f;
    }
}*/

?>

<div>
    <?foreach ($images as $img):?>
    <img src="images/<?=$img?>" alt="" width="100">
    <?endforeach;?>
</div>
