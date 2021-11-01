<?php
require_once "Alive.php";

class Player extends Alive {
  private String $name;
  private $inventory = array();

  function __construct($name = 'Steve', int $pv = 10, int $strength = 1) {
    parent::__construct($pv, $strength);
    $this->name = $name;
  }

  public function getName() { return $this->name; }
  public function setName(String $name) {
    if (strlen($name) > 0) {
      $this->name = $name;
    }
  }

  public function addInInventory($item) {
    if (is_a($item, 'Item') && count($this->inventory) <= 6) {
      array_push($this->inventory, $item);
    }
  }
  public function removeFromInventory($item) {
    $key = array_search($item, $this->inventory);
    unset($this->inventory[$key]);
  }

  public function getInventory() { return $this->inventory;}

  public function strike(Alive $alive) {
    foreach ($this->inventory as $item) {
      if (is_a($item, 'Sword')) {
        $alive->setPv($alive->getPv() - $item->getStrength());
        $this->toolUsed($item);
        return;
      }
    }
    parent::strike($alive);
  }

  private function toolUsed($tool) {
    $tool->loseDurability();
    if ($tool->isToolBroken()) {
      $this->removeFromInventory($tool);
    }
  }
}