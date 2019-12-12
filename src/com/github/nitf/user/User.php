<?php

namespace com\github\nitf\user;

use pocketmine\Player;

interface User
{
    /**
     * @return string
     * ユーザーの名前を返す
     */
    public function getName(): string;

    /**
     * @return Player
     */
    public function getPlayer(): Player;
}