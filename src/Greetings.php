<?php

namespace Sajjad385\Hellopkg;

class Greetings
{
    public function welcome($greeting)
    {
        return "Hello! $greeting";
    }

    public function strcut(String $string, $beginning = false, $ending = false)
    {
        $beginningPos = strpos($string, "$beginning");
        $tmpstring = substr($string, $beginningPos);
        $endPos = strpos($tmpstring, "$ending");
        if ($beginningPos === false || $endPos === false) {
            return $string;
        }
        return substr($string, $beginningPos, ($endPos + strlen("$ending")));
    }
}
