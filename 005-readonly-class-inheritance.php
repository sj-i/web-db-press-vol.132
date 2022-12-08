<?php

readonly class ReadonlyParent {}
class NormalParent {}
trait NonReadonlyTrait { public int $i; }

// 以下いずれもFatal Error
class NormalChild extends ReadonlyParent {}
readonly class ReadonlyChild extends NormalParent {}
readonly class ReadonlyUser { use NonReadonlyTrait; }
