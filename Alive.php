<?php
class Alive {
  private int $pv;
  private int $pvMax;

  function __construct() {
    $this->pv = 3;
    $this->pvMax = 3;
  }

  function getPv() {
    return $this->pv;
  }
}

$martin = new Alive();
echo $martin->getPv();
