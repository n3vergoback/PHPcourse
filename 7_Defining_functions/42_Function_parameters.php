<?php

namespace HexletBasics\DefineFunctions\Parameters;

// BEGIN (write your solution here)
function truncate($str, $num)
{
    $truncatedStr = substr($str, 0, $num) . "...";
    return $truncatedStr;
}
// END
