<?php

namespace Rakda\TestSakasa;

class Sakasa
{
    /**
     * 文字列を逆さにする
     */
    function str($str)
    {
        $result = '';
        if((string)$str === '') return $result;
    
        $len = mb_strlen($str);
        for($i=$len-1; $i>=0; $i--){
            $result .= mb_substr($str, $i, 1);
        }
    
        return $result;
   
    }
}