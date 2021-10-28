<?php
class Alive {
  private int $pv;
  private int $pvMax;
  private int $strength;

  function __construct(int $pv = 3, int $strength = 1) {
    $this->pv = $pv;
    $this->pvMax = $pv;
    $this->strength = $strength;
  }

  function getPv() { return $this->pv; }
  function setPv(int $pv) {
    if($pv >= 0 && $pv <= $this->pvMax) {
      $this->pv = $pv;
    }
  }

  public function strike(Alive $otherAlive) {
    $otherAlive->setPv($otherAlive->getPv() - $this->strength);
}

  public function __toString() {
    $this->pv;
  }
}

$martin = new Alive();
echo $martin->getPv(), '<br>';
$martin->strike($martin);
echo $martin->getPv();