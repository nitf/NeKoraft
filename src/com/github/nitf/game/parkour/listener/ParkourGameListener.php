<?php

namespace com\github\nitf\game\parkour\listener;

use com\github\nitf\game\parkour\event\UserRegisterEvent;
use com\github\nitf\game\parkour\event\UserUnregisterEvent;
use pocketmine\event\Listener;

class ParkourGameListener implements Listener
{
    /**
     * @param UserRegisterEvent $event
     * ユーザーがゲームに参加した直後に発火
     */
    public function onUserRegister(UserRegisterEvent $event): void
    {
        $user = $event->getUser();
        $player = $user->getPlayer();

        $player->sendMessage("参加しました");
    }

    /**
     * @param UserUnregisterEvent $event
     * ユーザーがゲームから退出した直後に発火
     */
    public function onUserUnregister(UserUnregisterEvent $event): void
    {
        $user = $event->getUser();
        $player = $user->getPlayer();

        $player->sendMessage("退出しました");
    }
}