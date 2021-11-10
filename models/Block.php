<?php
require_once "Item.php";

abstract class Block extends Item {
    const toughness = 0;

    function __construct() {
        parent::__construct('block');
      }

    public function getToughness() {
        return $this::toughness;
    }
}
