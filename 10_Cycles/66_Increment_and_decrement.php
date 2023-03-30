<?php

namespace HexletBasics\Loops\Mutators;

// BEGIN (write your solution here)
function makeItFunny($str, $num) {
    $i = 0;
    $replacedStr = "";
    while ($i < strlen($str)) {
        if (($i + 1) % $num == 0) {
            $upperLetter = strtoupper($str[$i]);
            $replacedStr = "{$replacedStr}{$upperLetter}";
            $upperLetter = "";
        } else {
            $replacedStr = "{$replacedStr}{$str[$i]}";
        }
        $i++;
    }
    return $replacedStr;
}
// END
