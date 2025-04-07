<?php

namespace App\Jacekzet\DijkstraBundle\Lib\InterfacesAndObjects;

class Node implements NodeInterface
{
    private string $id;
    private array $properties;

    public function __construct(string $id, array $properties)
    {
        $this->setId($id);
        foreach ($properties as $k => $v) {
            $this->setProperty($k, $v);
        }
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setProperty(string $name, string $value): void
    {
        $this->properties[$name] = $value;
    }

    public function getProperty(string $name, string $default = ""): string
    {
        return $this->properties[$name] ?? $default;
    }

}
