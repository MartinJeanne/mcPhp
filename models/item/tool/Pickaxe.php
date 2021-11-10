<?php
require_once "Tool.php";

class Pickaxe extends Tool {
  function __construct(Material $material) {
    parent::__construct($material, 'pickaxe');
  }
}
