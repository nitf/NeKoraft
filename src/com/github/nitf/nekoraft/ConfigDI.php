<?php

namespace com\github\nitf\nekoraft;

use pocketmine\utils\Config;

class ConfigDI
{
    /** @var Config $message */
    private static $message;

    /** @var Config $user */
    private static $user;

    public static function setUpDI(string $path): void
    {
        $i = function ($v) { return $v; }; // 恒等関数
        self::$message = new Config($path . $i(ConfigFile::Message), Config::YAML);
        self::$user = new Config($path . $i(ConfigFile::User), Config::YAML);
    }

    public static function message(): Config
    {
        return self::$message;
    }

    public static function user(): Config
    {
        return self::$user;
    }
}

class ConfigFile {
    const Message = "Message.yml";
    const User = "User.yml";
}