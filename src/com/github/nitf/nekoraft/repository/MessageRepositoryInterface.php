<?php

namespace com\github\nitf\nekoraft\repository;

interface MessageRepositoryInterface
{
    /**
     * @return String[]
     */
    public function getMessages(): array;

    /**
     * @param string $key
     * @return string
     */
    public function getMessage(string $key): string;
}