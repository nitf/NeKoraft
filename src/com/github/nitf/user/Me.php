<?php

namespace com\github\nitf\user;

use com\github\nitf\infrastructure\repository\UserDataRepository;
use pocketmine\Player;

class Me implements User
{
    /* @var Player $player */
    private $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    /**
     * @return string
     * ユーザーの名前を返す
     */
    public function getName(): string
    {
        return $this->player->getName();
    }

    /**
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        $userDataRepository = new UserDataRepository();
        return $userDataRepository->userData($this->getName());
    }
}