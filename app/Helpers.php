<?php

use NumberToWords\NumberToWords;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

if (!function_exists('numberToWords')) {
    function number_to_words($number)
    {
        $numberToWords = new NumberToWords();
        $numberTransformer = $numberToWords->getNumberTransformer('en');
        return ucfirst($numberTransformer->toWords($number));
    }
}

function encryptData($data)
{
    return Crypt::encrypt($data);
}

function decryptData($data)
{
    try {

        return Crypt::decrypt($data);

    } catch (DecryptException $th) {

        return false;
        
    }
}

?>