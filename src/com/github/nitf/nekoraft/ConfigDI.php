<?php

namespace com\github\nitf\nekoraft;

use pocketmine\utils\Config;

class ConfigDI
{
    /** @var Config $message */
    private static $message;

    public static function setUpDI(string $path): void
    {
        $i = function ($v) { return $v; };
        self::$message = new Config($path . $i(ConfigFile::Message), Config::YAML);
    }

    public static function message(): Config
    {
        return self::$message;
    }
}

class ConfigFile {
    const Message = "Message.yml";
}