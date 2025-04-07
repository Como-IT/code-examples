<?php

namespace App\Jacekzet\DijkstraBundle\Lib\InterfacesAndObjects;

use App\Jacekzet\DijkstraBundle\Lib\ShortestPath;

class Dijkstra implements ShortestPath
{
    private array $nodes = [];
    private array $edges = [];

    public function addNode(Node $o)
    {
        $this->nodes[] = $o;
    }

    public function addEdge(Edge $o)
    {
        $this->edges[] = $o;
    }

    private function getNodeById(string $id): ?Node
    {
        foreach ($this->nodes as $node) {
            if ($node->getId() == $id) {
                return $node;
            }
        }
        return null;
    }

    public function calculateFromSource(string $id): array
    {
        return ['//TODO calculateFromSource'];//TODO
    }

    public function calculateFromAllSources(): array
    {
        return ['//TODO calculateFromAllSources'];//TODO
    }
}
