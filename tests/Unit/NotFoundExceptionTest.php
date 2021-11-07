<?php

declare(strict_types=1);

namespace AliReaza\Tests\Container\Unit;

use AliReaza\Container\NotFoundException;
use PHPUnit\Framework\TestCase;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Class NotFoundExceptionTest
 *
 * @package AliReaza\Tests\Container\Unit
 */
class NotFoundExceptionTest extends TestCase
{
    public function test_When_create_new_NotFoundException_Expect_NotFoundException_instance_of_NotFoundExceptionInterface()
    {
        $this->assertInstanceOf(NotFoundExceptionInterface::class, new NotFoundException);
    }
}
