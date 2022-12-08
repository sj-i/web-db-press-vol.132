<?php

interface I {
    function f(): null|array|(\Countable&\ArrayAccess&\Traversable);
}
