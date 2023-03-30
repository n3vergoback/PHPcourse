<?php

namespace HexletBasics\Loops\SyntaxSugar;

// BEGIN (write your solution here)
function filterString($str, $char) {
    $newStr = str_replace($char, "", $str);
    return $newStr;
}
// END
