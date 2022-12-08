<?php
function f1(#[\SensitiveParameter] $p): void {
    f2($p);
}
function f2(#[\SensitiveParameter] $p): void {
    throw new \Exception();
}
f1(42);
