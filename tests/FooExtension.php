<?php

declare(strict_types=1);

namespace Wickedone\Phpunit5073\Tests;

use PHPUnit\Runner\BeforeFirstTestHook;

/**
 * FooExtension
 *
 * @author wicliff <wicliff.wolda@gmail.com>
 */
class FooExtension implements BeforeFirstTestHook
{
    public function executeBeforeFirstTest(): void
    {
        echo 'foo extension loaded'.PHP_EOL;
    }
}