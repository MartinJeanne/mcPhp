<?php
require_once "models/Player.php";
require_once "models/Material.php";
require_once "models/Sword.php";
require_once "models/Monster.php";

function say($msg) { echo $msg, '<br>'; }

$martin = new Player();
$iron = new Material('iron');
$sword = new Sword($iron);
$zombie = new Monster();

$martin->addInInventory($sword);
say($zombie->getPv());
$martin->strike($zombie);
say($zombie->getPv());