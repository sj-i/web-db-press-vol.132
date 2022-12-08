<?php
new \Random\Randomizer(
    new Random\Engine\Mt19937(seed)
);
new \Random\Randomizer(
    new Random\Engine\PcgOneseq128XslRr64([seed])
);
new \Random\Randomizer(
    new Random\Engine\Xoshiro256StarStar([seed])
);
new \Random\Randomizer(
// 暗号学的に安全なエンジン（CSPRNG）
    new Random\Engine\Secure()
);
