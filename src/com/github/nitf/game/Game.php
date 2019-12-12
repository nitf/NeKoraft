<?php

namespace com\github\nitf\game;

use com\github\nitf\user\User;

interface Game
{
    /**
     * @param string $userName
     * @return bool
     */
    public function isGamePlayer(string $userName): bool;

    /**
     * @param User $user
     */
    public function registerUser(User $user): void;

    /**
     * @param User $user
     */
    public function unregisterUser(User $user): void;
}