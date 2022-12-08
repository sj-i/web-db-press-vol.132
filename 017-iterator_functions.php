<?php

function f(iterable $foo) {
    $foo = iterator_to_array($foo);
    return array_map(strlen(...), $foo);
}
