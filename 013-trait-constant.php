<?php

trait T {
    public const CONSTANT = 42;
}

class C {
    use T;
    public function f(): void {
        echo self::CONSTANT;
    }
}
