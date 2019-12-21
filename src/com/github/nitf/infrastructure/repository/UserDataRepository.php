<?php

namespace com\github\nitf\infrastructure\repository;

use com\github\nitf\nekoraft\ConfigDI;
use com\github\nitf\nekoraft\repository\UserDataRepositoryInterface;

class UserDataRepository implements UserDataRepositoryInterface
{
    public function userData(string $userName): array
    {
        return ConfigDI::user()->getNested("user.$userName");
    }

    public function createUserData(string $userName): void
    {
        ConfigDI::user()->setNested("user.$userName", []);
    }

    public function update(string $userName, array $arrayData): void
    {
        ConfigDI::user()->setNested("user.$userName", $arrayData);
    }
}