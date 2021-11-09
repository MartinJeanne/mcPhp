<?php
foreach (glob("models/*.php") as $filename) {
    require_once $filename;
}

function say($msg) {
    echo $msg . '<br>';
}

$steve = new Player();
$alex  = new Player();

$steve->setPvMax(5);
$alex->getPvMax();