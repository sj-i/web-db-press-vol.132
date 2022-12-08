<?php

$r1 = new \Random\Randomizer(
    new Random\Engine\Mt19937(1)
);
$r2 = new \Random\Randomizer(
    new Random\Engine\Mt19937(1)
);

var_dump([$r1->getInt(1, 100), $r2->getInt(1, 100)]);
var_dump([$r1->getInt(1, 100), $r2->getInt(1, 100)]);
