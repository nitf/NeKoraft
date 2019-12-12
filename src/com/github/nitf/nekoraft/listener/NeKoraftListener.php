<?php

namespace com\github\nitf\nekoraft\listener;

use com\github\nitf\infrastructure\repository\MessageRepository;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class NeKoraftListener implements Listener
{
    /**
     * @param PlayerJoinEvent $event
     * 参加時に指定したメッセージを送信する
     */
    public function onJoin(PlayerJoinEvent $event): void
    {
        $repository = new MessageRepository();
        $player = $event->getPlayer();

        // $player->sendMessage($repository->getMessage("sample"));
    }
}