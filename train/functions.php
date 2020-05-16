<?php

function giveState () {
    $str = file_get_contents('add.txt');
    return json_decode($str, true);
}

function newState ($name, $text) {
    $state = giveState();
    $lastId = end($state)['id'];
    $id = $lastId + 1 ;
    $state[$id] = [
        'id' => $id,
        'name'=> $name,
        'text' => $text
    ];
    saveState($state);
    return true;
}

function deleteState ($id) {
    $state = giveState();
    if (isset($state[$id])) {
        unset($state[$id]);
        saveState($state);
    }
    return true;
}

function redactorState ($id, $name, $text) {
    $state = giveState();

    $state[$id] = [
        'id' => $id,
        'name' => $name,
        'text' => $text
    ];

    saveState($state);
    return true;
}

function saveState ($state) {
    $str = json_encode($state);
    file_put_contents('add.txt', $str);
    return true;
}