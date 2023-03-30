<?php

namespace HexletBasics\Loops\IterationOverString;

// BEGIN (write your solution here)
function printReversedWordBySymbol($word) {
    $i = strlen($word) -1;
    while ($i >= 0) {
        print_r("$word[$i]\n");
        $i -= 1;
    }
}
// END
