<?php

namespace App\Jacekzet\DijkstraBundle\Lib\InterfacesAndObjects;

use InvalidArgumentException;

class Edge implements EdgeInterface
{
    private string $fromId;
    private string $toId;
    private float $distance;

    public function __construct(string $fromId, string $toId, float $distance)
    {
        $this->setNodeIds($fromId, $toId);
        $this->setDistance($distance);
    }

    public function setNodeIds(string $fromId, string $toId): void
    {
        $this->fromId = $fromId;
        $this->toId = $toId;
    }

    public function setDistance(float $distance): void
    {
        if (is_nan($distance)) {
            throw new InvalidArgumentException('Distance is invalid');
        }
        if ($distance <= 0) {
            throw new InvalidArgumentException('Distance must be greater than 0');
        }
        $this->distance = $distance;
    }

    public function getFromId(): string
    {
        return $this->fromId;
    }

    public function getToId(): string
    {
        return $this->toId;
    }

    public function getDistance(): float
    {
        return $this->distance;
    }
}
