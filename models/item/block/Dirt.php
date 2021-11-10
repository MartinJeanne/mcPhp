<?php
require_once "Block.php";

class Dirt extends Block {
    const toughness = 1 ;

    function __construct() {
        parent::__construct('dirt');
    }
}
