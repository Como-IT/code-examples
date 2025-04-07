<?php

namespace App\Jacekzet\DijkstraBundle\Lib;

interface ShortestPath
{
    public function calculateFromSource(string $id): array;

    public function calculateFromAllSources(): array;
}
