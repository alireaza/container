<?php

declare(strict_types=1);

namespace AliReaza\Tests\Container\Unit;

use AliReaza\Container\Container;
use AliReaza\Container\NotFoundException;
use Closure;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;

/**
 * Class ContainerTest
 *
 * @package AliReaza\Tests\Container\Unit
 */
class ContainerTest extends TestCase
{
    public function test_When_create_new_Container_Expect_Container_instance_of_ContainerInterface()
    {
        $this->assertInstanceOf(ContainerInterface::class, new Container);
    }

    public function test_When_create_new_Container_Expect_containers_property_must_array_and_empty()
    {
        $container = new Container();

        $this->assertTrue(is_array($container->containers) && empty($container->containers));
    }

    public function test_When_container_ID_not_found_Expect_has_method_return_false()
    {
        $container = new Container();

        $this->assertFalse($container->has('unregistered'));
    }

    public function test_When_container_ID_not_found_Expect_get_method_throw_NotFoundException()
    {
        $container = new Container();

        $this->expectException(NotFoundException::class);

        $container->get('unregistered');
    }

    public function test_When_adding_a_container_Expect_has_method_return_true_for_the_exact_same_container()
    {
        $container = new Container();

        $container->containers['foo'] = 'bar';

        $this->assertTrue($container->has('foo'));
    }

    public function test_When_adding_a_container_Expect_get_method_return_the_exact_same_container()
    {
        $container = new Container();

        $container->containers['foo'] = 'bar';

        $this->assertTrue($container->get('foo') === 'bar');
    }

    public function test_When_adding_a_Closure_container_Expect_get_method_return_the_exact_same_container()
    {
        $container = new Container();

        $container->containers['foo'] = function () {
            return 'bar';
        };

        $this->assertTrue($container->get('foo') instanceof Closure && call_user_func($container->get('foo')) === 'bar');
    }

    public function test_When_adding_a_Class_container_Expect_get_method_return_the_exact_same_container()
    {
        $container = new Container();

        $container->containers['foo'] = new class {
            public function bar()
            {
            }
        };

        $this->assertTrue(is_object($container->get('foo')) && method_exists($container->get('foo'), 'bar'));
    }
}
