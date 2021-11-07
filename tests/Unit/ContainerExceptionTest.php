<?php

declare(strict_types=1);

namespace AliReaza\Tests\Container\Unit;

use AliReaza\Container\ContainerException;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerExceptionInterface;

/**
 * Class ContainerExceptionTest
 *
 * @package AliReaza\Tests\Container\Unit
 */
class ContainerExceptionTest extends TestCase
{
    public function test_When_create_new_ContainerException_Expect_ContainerException_instance_of_ContainerExceptionInterface()
    {
        $this->assertInstanceOf(ContainerExceptionInterface::class, new ContainerException);
    }
}
