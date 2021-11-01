<?php
require_once "Alive.php";

class Zombie extends Alive {
  function __construct(int $pv = 15, int $strength = 2) {
    parent::__construct($pv, $strength);
  }
}