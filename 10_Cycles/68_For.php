<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN (write your solution here)
function sumOfSeries($firstNum, $lastNum) {
    $res = 0;
    for ($i = $firstNum; $i <= $lastNum; $i++) {
        $res += $i;
    }
    return $res;
}
// END
