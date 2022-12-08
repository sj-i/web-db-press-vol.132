<?php

#[AllowDynamicProperties]
class C1 {}
class C2 extends \stdClass {}
$object1 = new C1();
$object2 = new C2();
// ↓どちらも非推奨化警告が出ない
$object1->property = 42;
$object2->property = 42;
