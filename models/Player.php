<?php
require_once "Alive.php";

class Player extends Alive {
  private String $name;
  protected static int $pvMax = 10;
  private $inventory = array();

  function __construct($name = 'Steve') {
    parent::__construct(Player::$pvMax, 1);
    $this->name = $name;
  }


  // Getter and Setter
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


  // Methods to manage Player inventory
  public function addInInventory($item) {
    if (is_a($item, 'Item') && count($this->inventory) <= 6) {
      array_push($this->inventory, $item);
    }
  }
  public function removeFromInventory($item) {
    $key = array_search($item, $this->inventory);
    unset($this->inventory[$key]);
  }

  private function checkInInventory($itemWanted) {
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


  // Other Player methods
  public function strike(Alive $alive) {
    $item = $this->checkInInventory('Sword');
    if ($item) {
      $alive->isStrike($item->getStrength());
      $this->toolUsed($item);
    } else {
      parent::strike($alive);
    }
  }

  public function breakBlock(Block $block) {
    $block::toughness;
  }
}
