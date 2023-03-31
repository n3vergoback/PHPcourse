<?php

namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith($text, $substr)
{
    // BEGIN (write your solution here)
    return mb_strpos($text, $substr) == 0;
    // END
}
