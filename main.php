<?php
require_once "Alive.php";
require_once "Personnage.php";

function say($msg) {
  echo $msg, '<br>';
}

$martin = new Personnage();
say($martin->getName());
$martin->setName("");
say($martin->getName());