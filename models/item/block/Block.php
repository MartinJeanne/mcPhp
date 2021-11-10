<?php
require_once __DIR__ . "/../Item.php";

abstract class Block extends Item {
    const toughness = 0;

    function __construct($blockName ) {
        parent::__construct($blockName . ' block');
    }

    public function getToughness() {
        return $this::toughness;
    }
}
