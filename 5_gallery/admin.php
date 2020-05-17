<?php

function randomString () {
    $char = 'qwertyuioplkjhgfdsazxcvbnmMNBVCXZASDFGHJKLPOIUYTREWQ';
    $random = '';
    for ($i=0; $i < 10; $i++) {
        $random .= $char[rand(0, strlen($char)-1)];
    }
    return $random;
}

if ($_POST['set']) {
    $files = array();
    $diff = count($_FILES['file']) - count($_FILES['file'], COUNT_RECURSIVE);
    if ($diff == 0) {
        $files = array($_FILES['file']);
    } else {
        foreach($_FILES['file'] as $k => $l) {
            foreach($l as $i => $v) {
                $files[$i][$k] = $v;
            }
        }
    }
    foreach ($files as $file) {
        $fileName = strval($file['name']);
        $fileSize = strval($file['size']);
        $fileType = strval($file['type']);
        $fileTmp_name = strval($file['tmp_name']);
        $fileError = strval($file['error']);
        $fileExtension = strtolower(end(explode('.', $fileName)));
        $id = count(scandir('images'))+1;
        $fileName = $id . $random = randomString();
        $fileExtensionArr = ['jpg', 'jpeg', 'png'];

        if (in_array($fileExtension, $fileExtensionArr)) {
            if ($fileSize < 5000000) {
                if ($fileError == 0) {
                    $fileNameNew = $id . $random . '.' . $fileExtension;
                    $fileEdit = 'images/' . $fileNameNew;
                    move_uploaded_file($fileTmp_name, $fileEdit);
                } else {
                    echo 'Что-то пошло не так';
                }
            } else {
                echo 'Слишком большой размер файла';
            }
        } else {
            echo 'Неверный тип файла';
        }




    }
}


?>


<form method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple required>
    <input type="submit" name="set" value="Отправить">
</form>
