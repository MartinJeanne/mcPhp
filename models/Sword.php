<?php
require_once "Tool.php";

class Sword extends Tool {
  function __construct(Material $material) {
    parent::__construct($material, 'sword');
  }
}