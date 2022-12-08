<?php

enum A: string {
    case B = 'B';
    const C = [self::B->value => self::B];
}
