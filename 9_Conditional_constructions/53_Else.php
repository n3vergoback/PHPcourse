<?php

namespace HexletBasics\Conditionals\IfElse;

// BEGIN (write your solution here)
function normalizeUrl($url)
{
    if (strpos($url, "http://") !== false) {
        $urlNormalized = "https://" . substr($url, 7);
    } else {
        $urlNormalized = "https://" . $url;
    }

    return $urlNormalized;
}
// END
