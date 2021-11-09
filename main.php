<?php
foreach (glob("models/*.php") as $filename) {
    require_once $filename;
}

function say($msg) {
    echo $msg . '<br>';
}

$steve = new Player();
$alex  = new Player();
$zombie = new Zombie();

say($alex->getPv());
$zombie->strike($alex);
say($alex->getPv());