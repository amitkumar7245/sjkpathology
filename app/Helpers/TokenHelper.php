<?php

namespace App\Helpers;

use App\Models\AccountID;
use Exception;

class TokenHelper
{
    public static function token()
    {
        $token = AccountID::where('start_dt', '<=', now())
                          ->where('end_dt', '>=', now())
                          ->first();
        $exclude_mon=substr($token->updated_no,2,9);
        $mod_updated_no=date('m').$exclude_mon;

        if ($token) {

            $incrementedNo = self::incrementString((string)$mod_updated_no);

            AccountID::where('start_dt', '<=', now())
                     ->where('end_dt', '>=', now())
                     ->update(['updated_no' => $incrementedNo]);

            $formattedToken = idate('Y') .$incrementedNo;
            return $formattedToken;
        }
        return null;
    }

    public static function incrementString($str) 
    {
       
        $length = strlen($str);
        $num = (int)$str + 1;
        $newNum = str_pad($num, $length, '0', STR_PAD_LEFT);
        return $newNum;
    }
}

