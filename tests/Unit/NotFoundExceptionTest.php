<?php

declare(strict_types=1);

namespace AliReaza\Tests\Container\Unit;

use AliReaza\Container\NotFoundException;
use PHPUnit\Framework\TestCase;
use Psr\Container\NotFoundExceptionInterface;

class NotFoundExceptionTest extends TestCase
{
    public function test_When_create_new_NotFoundException_Expect_NotFoundException_instance_of_NotFoundExceptionInterface(): void
    {
        $this->assertInstanceOf(NotFoundExceptionInterface::class, new NotFoundException());
    }
}
