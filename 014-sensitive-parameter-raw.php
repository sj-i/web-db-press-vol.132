<?php
function f1($p): void {
    f2($p);
}
function f2($p): void {
    throw new \Exception();
}
f1(42);
