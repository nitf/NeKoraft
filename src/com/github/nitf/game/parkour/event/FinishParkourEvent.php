<?php

namespace com\github\nitf\game\parkour\event;

use com\github\nitf\user\User;
use pocketmine\event\Cancellable;
use pocketmine\event\Event;

class FinishParkourEvent extends Event implements Cancellable
{
    /** @var User $user */
    private $user;

    /** @var \DateTime $date */
    private $date;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->date = (new \DateTime())->format("Y-m-d H:i:s");
    }

    public function getTime(): \DateTime
    {
        return $this->date;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}