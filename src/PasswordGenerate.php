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
    public function RandomString($length)
    {
        $keys = array_merge(range(0, 9), range('a', 'z'));

        $key = "";
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[mt_rand(0, count($keys) - 1)];
        }
        return $key;
    }
}
