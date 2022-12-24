# 概要
WEB+DB PRESS Vol.132 掲載の、「PHPで複雑さに立ち向かう 【第10回】PHP 8.2の新機能・変更点を追う readonlyクラス、DNF型、新たな乱数機能など」のサンプルコードです。

なお掲載のサンプルコードに誤りが見つかりましたので、以下に正誤情報を記載します。試してみて「あれ動かないぞ」となった読者の皆様へ、謹んでお詫び申し上げます……。

# 掲載内容の誤り
## P.113 1 つめのサンプルコード
```php
readonly class C {
    public function __construct() {
        public string $s,
        public int $i,
    }
}
```
正しくは ↓
```php
readonly class C {
    public function __construct(
        public string $s,
        public int $i,
    ) {
    }
}
```

## P.113 2 つめのサンプルコード
```php
class C {
    public function __construct() {
        public readonly string $s,
        public readonly int $i,
    }
}
```
正しくは ↓

```php
class C {
    public function __construct(
        public readonly string $s,
        public readonly int $i,
    ) {
    }
}
```

## P.113 〜 P.114 新たな乱数拡張の最初の例
```php
// 配列をランダムな順へ並べ替え
var_dump($r->shuffleArray('abcdefg'));
```
正しくは ↓
```php
// 配列をランダムな順へ並べ替え
var_dump($r->shuffleArray(['a', 'b', 'c', 'd']));
```
