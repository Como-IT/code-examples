<?php

namespace App\Jacekzet\DijkstraBundle\Controller;

use App\Jacekzet\DijkstraBundle\Lib\CsvParser;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(): Response
    {
        try {
            $nodes = CsvParser::fileToArray(__DIR__ . '/../Resources/public/input_graph_nodes.csv', true);
            $edges = CsvParser::fileToArray(__DIR__ . '/../Resources/public/input_graph_edges.csv', true);
            return $this->render('Default/index.html.twig', [
                'nodes' => $nodes,
                'edges' => $edges,
            ]);
        } catch (Exception $e) {
            return $this->redirectToRoute('error_page');
        }
    }
}
