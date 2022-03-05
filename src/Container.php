<?php

namespace AliReaza\Container;

use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    public array $containers = [];

    public function get(string $id): mixed
    {
        if ($this->has($id)) {
            return $this->containers[$id];
        }

        throw new NotFoundException(sprintf('Could not find container definition for %s', $id));
    }

    public function has(string $id): bool
    {
        return array_key_exists($id, $this->containers);
    }
}
