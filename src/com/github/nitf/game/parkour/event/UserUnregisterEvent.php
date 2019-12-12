<?php

namespace com\github\nitf\game\parkour\event;

use com\github\nitf\user\User;
use pocketmine\event\Cancellable;
use pocketmine\event\Event;

class UserUnregisterEvent extends Event implements Cancellable
{
    /** @var User $user */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}