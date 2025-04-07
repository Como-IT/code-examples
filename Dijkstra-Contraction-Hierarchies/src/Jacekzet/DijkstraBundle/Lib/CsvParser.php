<?php

namespace App\Jacekzet\DijkstraBundle\Lib;

use Exception;
use ValueError;

class CsvParser
{
    private function __construct()
    {
    }

    /**
     * @throws Exception
     */
    public static function fileToArray(string $file, bool $skipFirst = false): array
    {
        $fileContent = file_get_contents($file);
        if (false === $fileContent) {
            throw new Exception(sprintf('Cant load file %s', $file));
        }
        try {
            return array_slice(array_map('str_getcsv', explode(PHP_EOL, $fileContent)), (int)$skipFirst);
        } catch (ValueError $e) {
            throw new Exception('Cant parse data', 0, $e);
        }

    }
}
