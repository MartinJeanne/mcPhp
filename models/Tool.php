<?php
require_once "Material.php";

class Tool {
  private Material $material;

  function __construct(Material $material) {
    $this->material = $material;
  }

  public function getMaterial() {
    return $this->material;
  }
}