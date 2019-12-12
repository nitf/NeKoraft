<?php

namespace com\github\nitf\game;

use com\github\nitf\game\parkour\ParkourGame;

class GameDI
{
    /** @var ParkourGame $parkour */
    private static $parkour;

    public static function setUpDI(): void
    {
        self::$parkour = new ParkourGame();
    }

    public static function parkour(): ParkourGame
    {
        return self::$parkour;
    }
}