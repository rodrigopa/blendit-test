<?php

namespace App\Enum;

class Segment {
    const INFANT = 1;
    const START = 2;
    const END = 3;
    const HIGH_SCHOOL = 4;
    
    public static function options()
    {
        return [
            self::INFANT => 'Infantil',
            self::START => 'Atos iniciais',
            self::END => 'Atos finais',
            self::HIGH_SCHOOL => 'Ensino médio',
        ];
    }
}
