<?php
include_once ('functions.php');
if ($_GET['id']) {
    $delete = deleteState($_GET['id']);
}

if ($delete) {
    header('Location:index.php');
}

?>
