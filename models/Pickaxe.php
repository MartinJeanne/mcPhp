<?php
require_once "Tool.php";

class PickAxe extends Tool {
  function __construct(Material $material) {
    parent::__construct($material, 'pickaxe');
  }
}
