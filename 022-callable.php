<?php

function f() {}
class C {
    public function method() {}
}
$callable1 = 'f';
$callable2 = [new C(), 'method'];
$callable1();
$callable2();
