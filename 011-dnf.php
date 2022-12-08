<?php

interface A {}
interface B {}
interface C extends A {}
interface D {}

function f (
    (A&B)|D $example1,
    C|(B&D)|null $example2,
    (A&B&D)|int|null $example3,
    (A|null)&(B|null) $example4, // 非DNF、エラー
) {
}
