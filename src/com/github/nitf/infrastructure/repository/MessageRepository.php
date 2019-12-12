<?php

namespace com\github\nitf\infrastructure\repository;

use com\github\nitf\nekoraft\ConfigDI;
use com\github\nitf\nekoraft\repository\MessageRepositoryInterface;

class MessageRepository implements MessageRepositoryInterface
{
    public function getMessages(): array
    {
        return ConfigDI::message()->getAll(true);
    }

    public function getMessage(string $key): string
    {
        return ConfigDI::message()->get($key);
    }
}