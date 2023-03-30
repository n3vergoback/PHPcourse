<?php

namespace HexletBasics\Loops\EdgeCases;

// BEGIN (write your solution here)
function isArgumentsForSubstrCorrect($str, int $index, int $lenSubstr) {
    switch(true) {
        case $index < 0;
        case $index >= strlen($str);
        case $lenSubstr < 0;
        case $lenSubstr + $index > strlen($str);
            return false;
        default:
            return true;
    }
}
// END
