<?php

declare(strict_types=1);

namespace Authanram\LaravelSpa\Tests;

use Authanram\LaravelSpa\LaravelSpaServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelSpaServiceProvider::class,
        ];
    }
}
