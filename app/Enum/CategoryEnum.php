<?php

namespace App\Enum;

enum CategoryEnum: int
{
    case INSURANCE = 1;
    case VEHICLE = 2;

    public static function tryFromString(string $category): ?CategoryEnum
    {
        return match(strtolower($category)) {
            'insurance' => self::INSURANCE,
            'vehicle' => self::VEHICLE,
            default => null,
        };
    }
}
