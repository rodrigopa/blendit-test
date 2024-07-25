<?php

namespace App\Enum;

class Grade {
    const G1_G3 = 1;
    const F1_5 = 2;
    const F6_9 = 3;
    const M1_3 = 4;
    
    public static function options()
    {
        return [
            self::G1_G3 => 'G1 ao G3',
            self::F1_5 => '1º ao 5º ano',
            self::F6_9 => '6º ao 9º ano',
            self::M1_3 => '1º ao 3º ano ensino médio',
        ];
    }
}
