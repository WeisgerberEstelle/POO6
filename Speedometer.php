<?php

class Speedometer
{
    public const KM_CONVERTION = 0.621;

    public const MILE_CONVERTION = 0.621;


    public static function convertKmToMiles($km)
    {
        return $km * self::KM_CONVERTION;
    }

    public static function convertMilesToKm($miles)
    {
        return $miles * self::MILE_CONVERTION;
    }
}