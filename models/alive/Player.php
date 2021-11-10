<?php
require_once "Alive.php";

class Player extends Alive {
  private String $name;
  const pvMax = 10;
  private $inventory = array();

  function __construct($name = 'Steve') {
    parent::__construct(Player::pvMax, 1);
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }
  public function setName(String $name) {
    if (strlen($name) > 0) {
      $this->name = $name;
    }
  }

  public function getInventory() {
    return $this->inventory;
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

  private function searchInInventory($itemWanted) {
    foreach ($this->inventory as $item) {
      if (is_a($item, $itemWanted)) {
        return $item;
      }
    }
    return false;
  }

  private function toolUsed($tool) {
    $tool->loseDurability();
    if ($tool->isToolBroken()) {
      $this->removeFromInventory($tool);
    }
  }

  public function strike(Alive $alive) {
    $sword = $this->searchInInventory('Sword');
    if ($sword) {
      $alive->isStrike($sword->getStrength());
      $this->toolUsed($sword);
    } else {
      parent::strike($alive);
    }
  }

  public function breakBlock(Block $block) {
    $pickAxe = $this->searchInInventory('PickAxe');
    if ($pickAxe) {
      if ($pickAxe->getStrength() >= $block::toughness) {
        $this->addInInventory($block);
      }
      $this->toolUsed($pickAxe);
    }
    else {
      if ($this->strength >= $block::toughness) {
        $this->addInInventory($block);
      } else {
        $this->setPv($this->getPv() - 1);
      }
    }
  }
}
