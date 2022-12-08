<?php

class C {}
$object = new C();
// ↓PHP 8.2から非推奨化警告
$object->property = 42;
