<?php

class DateTimeChild extends \DateTime {
    public static function createFromImmutable(\DateTimeImmutable $p): \DateTime {
        return parent::createFromImmutable($p);
    }
};

class DateTimeImmutableChild extends \DateTimeImmutable {
    public static function createFromMutable(\DateTime $p): \DateTimeImmutable {
        return parent::createFromMutable($p);
    }
};

$obj_mutable = new DateTimeChild();
$obj_immutable = new DateTimeImmutableChild();

DateTimeChild::createFromImmutable($obj_immutable);
DateTimeImmutableChild::createFromMutable($obj_mutable);