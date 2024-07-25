<?php

namespace App\Enum;

class AddressType {
    const BILLING = 'billing';
    const RESIDENTIAL = 'residential';
    const MAIL = 'mail';
    
    public static function options()
    {
        return [
            self::BILLING => 'Cobrança',
            self::RESIDENTIAL => 'Residencial',
            self::MAIL => 'Correspondência',
        ];
    }
}
