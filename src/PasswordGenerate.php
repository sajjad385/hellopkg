<?php

namespace Sajjad385\Hellopkg;

class PasswordGenerate
{
    public function textlower($length)
    {
        $random = substr(strtolower(md5(mt_rand())), 0, $length);
        return $random;
    }
    public function textupper($length)
    {
        $random = substr(strtoupper(md5(mt_rand())), 0, $length);
        return $random;
    }
}
