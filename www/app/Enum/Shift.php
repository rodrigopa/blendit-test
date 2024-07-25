<?php

namespace App\Enum;

class Shift {
    const MORNING = 1;
    const AFTERNOON = 2;
    const FULLTIME = 3;
    
    public static function options()
    {
        return [
            self::MORNING => 'Manhã',
            self::AFTERNOON => 'Tarde',
            self::FULLTIME => 'Integral',
        ];
    }
}
