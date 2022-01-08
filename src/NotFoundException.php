<?php

namespace AliReaza\Container;

use Psr\Container\NotFoundExceptionInterface;

/**
 * Class NotFoundException
 *
 * @package AliReaza\Container
 */
class NotFoundException extends ContainerException implements NotFoundExceptionInterface
{
}