<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

// BEGIN (write your solution here)
function whoIsThisHouseToStarks($family) {
    if ($family == "Karstark" || $family == "Tully") {
        $familyRelation = "friend";
    } elseif ($family == "Lannister" || $family == "Frey") {
        $familyRelation = "enemy";
    } else {
        $familyRelation = "neutral";
    }

    return $familyRelation;
}
// END
