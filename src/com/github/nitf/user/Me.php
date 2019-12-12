<?php

namespace com\github\nitf\user;

use pocketmine\Player;

class Me implements User
{
    /* @var Player $player */
    private $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }
}