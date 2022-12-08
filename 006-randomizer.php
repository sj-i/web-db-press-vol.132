<?php

$r = new \Random\Randomizer();
// 1から100までの整数値をランダムに取得
echo $r->getInt(1, 100);
// 文字列をランダムな順へ並べ替え
echo $r->shuffleBytes('abcdefg');
// 配列をランダムな順へ並べ替え
var_dump($r->shuffleArray(['a', 'b', 'c', 'd']));
