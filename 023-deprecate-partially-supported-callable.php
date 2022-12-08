<?php
class Bar {
    public static function method() {
        echo 'method_called', PHP_EOL;
    }

}
class Foo extends Bar {
    public function execute() {
        $callables = [
            "self::method",
            "parent::method",
            "static::method",
            ["self", "method"],
            ["parent", "method"],
            ["static", "method"],
            ["Foo", "Bar::method"],
            [new Foo, "Bar::method"],
        ];
        foreach ($callables as $callable) {
            if (is_callable($callable)) {
                var_dump(['callable', $callable]);
                call_user_func($callable);
            } else {
                var_dump(['uncallable', $callable]);
                $callable();
            }
        }
    }
}

function f (callable $f): void {}

(new Foo())->execute();