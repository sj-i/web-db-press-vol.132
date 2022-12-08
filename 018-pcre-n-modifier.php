<?php

preg_match('/(.)(.)(.)/', 'abc', $m1);
preg_match('/(.)(.)(.)/n', 'abc', $m2);
var_dump($m1, $m2);
