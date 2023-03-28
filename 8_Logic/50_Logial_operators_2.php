<?php

namespace HexletBasics\Logic\LogicalOperators2;

// BEGIN (write your solution here)
function isNeutralSoldier($armorColor, $shieldColor)
{
    $isNeutral = $armorColor != "red" && $shieldColor == "black";
    return $isNeutral;
}
// END
