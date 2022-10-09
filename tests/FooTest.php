<?php

declare(strict_types=1);

namespace Wickedone\Phpunit5073\Tests;

use PHPUnit\Framework\TestCase;
use Wickedone\Phpunit5073\Foo;

/**
 * FooTest
 *
 * @author wicliff <wicliff.wolda@gmail.com>
 */
class FooTest extends TestCase
{

    public function testIsTrue()
    {
        $foo = new Foo();
        self::assertTrue($foo->isTrue());
    }
}
