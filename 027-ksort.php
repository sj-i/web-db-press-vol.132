<?php

$array = ['a' => '', '1' => '', 'b' => '', '2' => ''];
ksort($array, SORT_REGULAR);
var_dump($array);

$array = ['a', '1', 'b', '2'];
sort($array, SORT_REGULAR);
var_dump($array);