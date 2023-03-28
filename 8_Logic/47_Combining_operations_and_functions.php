<?php

namespace HexletBasics\Logic\CombineExpressions;

// BEGIN (write your solution here)
function isInternationalPhone($phoneNumber)
{
    $isInternational = $phoneNumber[0] == "+";
    return $isInternational;
}
// END
