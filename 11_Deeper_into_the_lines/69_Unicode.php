<?php

namespace HexletBasics\DeepIntoStrings\Unicode;

function invertCase($text)
{
    // BEGIN (write your solution here)
    $invertedText = "";
    for ($i = 0; $i < mb_strlen($text); $i++) {
        $invertLetter = mb_strtoupper(mb_substr($text, $i, 1));
        if (mb_substr($text, $i, 1) === $invertLetter) {
            $invertedText .= mb_strtolower($invertLetter);
        } else {
            $invertedText .= $invertLetter;
        }
    }
    return $invertedText;
    // END
}
