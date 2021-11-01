<?php
class Item {
  private String $name;

  function __construct($name) {
    $this->name = $name;
  }

  public function getName() { return $this->name; }
  public function __toString() { return $this->name; }
}
