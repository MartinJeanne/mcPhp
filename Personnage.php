<?php
require_once "Alive.php";

class Personnage extends Alive {
  private String $name;
  function __construct(int $pv = 10, int $strength = 2, $name = "Steve") {
    parent::__construct($pv, $strength);
    $this->name = $name;
  }

  public function getName() { return $this->name; }
  public function setName(String $name) {
    if (strlen($name) > 0) {
      $this->name = $name;
    }
  }
}