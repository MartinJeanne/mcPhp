<?php
require_once "Item.php";
require_once "Material.php";

abstract class Tool extends Item {
  private String $type;
  private int $strength;
  private int $durability;

  function __construct(Material $material, $tool) {
    parent::__construct($material->getType() . ' ' . $tool);
    $this->type = $material->getType();
    $this->strength = $material->getStrength();
    $this->durability = $material->getDurability();
  }

  public function getType() {
    return $this->type;
  }
  public function getStrength() {
    return $this->strength;
  }
  public function getDurability() {
    return $this->durability;
  }

  public function loseDurability($nb = 1) {
    $this->durability -= $nb;
  }

  public function isToolBroken() {
    if ($this->durability <= 0) {
      return true;
    }
    return false;
  }
}
