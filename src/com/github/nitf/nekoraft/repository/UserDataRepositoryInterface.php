<?php

namespace com\github\nitf\nekoraft\repository;

interface UserDataRepositoryInterface
{
    /**
     * @param string $userName
     * @return array
     */
    public function userData(string $userName): array;

    /**
     * @param string $userName
     * @param array $arrayData
     */
    public function update(string $userName, array $arrayData): void;
}