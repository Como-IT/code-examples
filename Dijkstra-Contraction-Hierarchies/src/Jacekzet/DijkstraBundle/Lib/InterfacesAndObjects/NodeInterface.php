<?php

namespace App\Jacekzet\DijkstraBundle\Lib\InterfacesAndObjects;

interface NodeInterface
{
    public function setId(string $id): void;

    public function getId(): string;

    public function setProperty(string $name, string $value): void;

    public function getProperty(string $name, string $default = ""): string;
}
