<?php

namespace App\Jacekzet\DijkstraBundle\Lib\InterfacesAndObjects;

interface EdgeInterface
{
    public function setNodeIds(string $fromId, string $toId): void;

    public function setDistance(float $distance): void;

    public function getFromId(): string;

    public function getToId(): string;

    public function getDistance(): float;
}
