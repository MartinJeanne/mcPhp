<?php
abstract class Alive {
  private int $pv;
  protected static int $pvMax;
  protected int $strength;

  function __construct(int $pv = 1, int $strength = 1) {
    $this->pv = $pv;
    $this->strength = $strength;
  }

  function getPv() { return $this->pv; }
  function setPv(int $pv) {
    if($pv >= 0 && $pv <= $this::$pvMax) {
      $this->pv = $pv;
    }
  }

  public function strike(Alive $otherAlive) {
    $otherAlive->isStrike($this->strength);
  }

  protected function isStrike(int $strength) {
    $this->setPv($this->getPv() - $strength);
  }
}