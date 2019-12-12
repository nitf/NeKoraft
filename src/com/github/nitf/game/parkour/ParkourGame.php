<?php

namespace com\github\nitf\game\parkour;

use com\github\nitf\game\Game;
use com\github\nitf\game\parkour\event\UserRegisterEvent;
use com\github\nitf\game\parkour\event\UserUnregisterEvent;
use com\github\nitf\user\User;

class ParkourGame implements Game
{
    /** @var User[] $users */
    private $users = [];

    public function __construct() {}

    public function isGamePlayer(string $userName): bool
    {
        return $this->users[$userName] != null;
    }

    public function registerUser(User $user): void
    {
        // Call event.
        $userRegisterEvent = new UserRegisterEvent($user);
        $userRegisterEvent->call();

        $this->users[$user->getName()] = $user;
    }

    public function unregisterUser(User $user): void
    {
        // Call event.
        $userUnregisterEvent = new UserUnregisterEvent($user);
        $userUnregisterEvent->call();

        unset($this->users[$user->getName()]);
    }
}