<?php
require_once "Alive.php";

class Zombie extends Alive {
  const pvMax = 15;

  function __construct() {
    parent::__construct(Zombie::pvMax, 2);
  }
}
