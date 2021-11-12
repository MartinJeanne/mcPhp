<?php
function _require_all($dir) {
    $scan = glob("$dir/*");
    foreach ($scan as $path) {
        if (preg_match('/\.php$/', $path)) {
            require_once $path;
        } elseif (is_dir($path)) {
            _require_all($path);
        }
    }
}

_require_all('models');

function say($msg) {
    echo $msg . '<br>';
}

$steve = new Player();
$zombie = new Zombie();

$wood = new Material('wood');

$pickaxe = new Pickaxe($wood);
$steve->addInInventory($pickaxe);

$dirt = new Dirt();
$steve->breakBlock($dirt);

$t = $steve->getInventory();

foreach ($t as $v) {
    say($v);
}
