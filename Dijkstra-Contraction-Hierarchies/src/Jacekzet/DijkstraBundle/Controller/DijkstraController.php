<?php

namespace App\Jacekzet\DijkstraBundle\Controller;

use App\Jacekzet\DijkstraBundle\Lib\CsvParser;
use App\Jacekzet\DijkstraBundle\Lib\InterfacesAndObjects\Dijkstra;
use App\Jacekzet\DijkstraBundle\Lib\InterfacesAndObjects\Edge;
use App\Jacekzet\DijkstraBundle\Lib\InterfacesAndObjects\Node;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class DijkstraController extends AbstractController
{
    public function phpInterfacesAndObjects(): JsonResponse
    {
        try {
            $nodes = CsvParser::fileToArray(__DIR__ . '/../Resources/public/input_graph_nodes.csv', true);
            $edges = CsvParser::fileToArray(__DIR__ . '/../Resources/public/input_graph_edges.csv', true);
        } catch (Exception $e) {
            return new JsonResponse(['ok' => false, 'reason' => $e->getMessage()]);
        }
        //TODO
        $dijkstra = new Dijkstra();
        foreach ($nodes as [$id, $label]) {
            $dijkstra->addNode(new Node($id, ['label' => $label]));
        }
        foreach ($edges as [$fromId, $toId, $distance]) {
            $dijkstra->addEdge(new Edge($fromId, $toId, (int)$distance));
        }
        $ret = $dijkstra->calculateFromAllSources();
        try {
            return new JsonResponse(['ok' => true, 'ret' => $ret]);
        } catch (Exception $e) {
            return new JsonResponse(['ok' => false]);
        }
    }

    public function phpArrays(): JsonResponse
    {
        try {
            return new JsonResponse(['ok' => false, 'ret' => '//TODO phpArrays']);//TODO
        } catch (Exception $e) {
            return new JsonResponse(['ok' => false]);
        }
    }
    public function mysqlProcedure(): JsonResponse
    {
        try {
            return new JsonResponse(['ok' => false, 'ret' => '//TODO mysqlProcedure']);//TODO
        } catch (Exception $e) {
            return new JsonResponse(['ok' => false]);
        }
    }
}
