<?php

readonly abstract class AbstractReadonly {} // OK
abstract readonly class ReadonlyAbstract {} // OK
final readonly class FinalReadonly {} // OK
readonly final class ReadonlyFinal {} // OK
