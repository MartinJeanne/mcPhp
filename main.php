<?php
foreach (glob("models/*.php") as $filename) {
    require_once $filename;
}

function say($msg) {
    echo $msg . '<br>';
}

$steve = new Player();
$wood = new Material('wood');
$sword = new Sword($wood);
$zombie = new Zombie();

$steve->addInInventory($sword);

say($zombie->getPv());
$steve->strike($zombie);
say($zombie->getPv());