<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\mb_strrev;

// BEGIN (write your solution here)
function isPalindrome($str)
{
    $isPalindrome = strtolower($str) == strrev(strtolower($str));
    return $isPalindrome;
}

function isNotPalindrome($str)
{
    $isNotPalindrome = !isPalindrome($str);
    return $isNotPalindrome;
}
// END
