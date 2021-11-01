<?php
foreach (glob("models/*.php") as $filename) {
    require_once $filename;
}

function say($msg) {
    echo $msg, '<br>';
}

$martin = new Player();
$iron = new Material('iron');
$sword = new Sword($iron);
$zombie = new Monster();

$martin->addInInventory($sword);
say($zombie->getPv());
$martin->strike($zombie);
say($zombie->getPv());
say($sword);
