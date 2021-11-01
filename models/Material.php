<?php
class Material {
  private String $type;
  private int $strength;
  private int $durability;

  function __construct(String $type) {
    $this->type = $type;
    switch ($type) {
      case 'wood':
        $this->strength = 2;
        $this->durability = 10;
        break;

      case 'stone':
        $this->strength = 3;
        $this->durability = 20;
        break;

      case 'iron':
        $this->strength = 5;
        $this->durability = 40;
        break;

      case 'diamond':
        $this->strength = 6;
        $this->durability = 100;
        break;
    }
  }

  public function getType() { return $this->type; }
  public function getStrength() { return $this->strength; }
  public function getDurability() { return $this->durability; }
}
