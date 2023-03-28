<?php

namespace HexletBasics\Logic\LogicalOperators;

// BEGIN (write your solution here)
function isLeapYear($year)
{
    $isLeap = $year % 400 == 0 || $year % 4 == 0 && $year % 100 != 0;
    return $isLeap;
}
// END
