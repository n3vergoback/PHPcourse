<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN (write your solution here)
function generateAmount($count, $price) {
    return $amount = $count ?: $price * 3;
}
// END
