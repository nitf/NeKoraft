<?php

namespace com\github\nitf\game\parkour\listener;

use com\github\nitf\game\parkour\event\FinishParkourEvent;
use com\github\nitf\game\parkour\event\StartParkourEvent;
use com\github\nitf\game\parkour\event\UserRegisterEvent;
use com\github\nitf\game\parkour\event\UserUnregisterEvent;
use com\github\nitf\infrastructure\repository\UserDataRepository;
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

    /**
     * @param StartParkourEvent $event
     * パルクールを開始したら、開始時間のスタンプを保存する
     */
    public function onStartParkour(StartParkourEvent $event): void
    {
        $user = $event->getUser();
        $userData = $user->getData();

        $userDataRepository = new UserDataRepository();

        $userData["start.time"] = $event->getTime()->getTimestamp();
        $userDataRepository->update($user->getName(), $userData);
    }

    public function onFinishParkour(FinishParkourEvent $event): void
    {
        $user = $event->getUser();
        $userData = $user->getData();

        $startTime = $userData["start.time"];

    }
}