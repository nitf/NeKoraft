<?php

namespace com\github\nitf\nekoraft;

use com\github\nitf\game\GameDI;
use com\github\nitf\nekoraft\event\NeKoraftListener;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Nekoraft extends PluginBase
{
    /* @var Nekoraft $instance */
    private static $instance;

    public function onLoad(): void
    {
        self::$instance = $this;
    }

    public function onEnable(): void
    {
        // Set up DI.
        ConfigDI::setUpDI($this->getDataFolder());
        GameDI::setUpDI();

        /** @var Listener[] $listeners */
        $listeners = [
            new NeKoraftListener()
        ];

        // Register listeners.
        foreach ($listeners as $listener) {
            $this->getServer()->getPluginManager()->registerEvents($listener, $this);
        }
    }

    public static function getInstance(): self
    {
        return self::$instance;
    }
}