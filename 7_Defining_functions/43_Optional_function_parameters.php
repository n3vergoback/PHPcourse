<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

// BEGIN (write your solution here)
function getHiddenCard($cardNumber, $starsCount = 4)
{
    $hiddenCard = str_repeat("*", $starsCount) . substr($cardNumber, strlen($cardNumber) - 4, strlen($cardNumber) - 1);
    return $hiddenCard;
}
// END
